$(document).ready(function(){
    var full_url = document.URL;
    var stuff = full_url.split('/');
    var pageId = stuff[stuff.length - 1];
    var userId = loginCheck.getUserID();
    var Data = '&PageID=' + pageId ;
    var commentsHtml="";
    likeCall();
    commentCall();
    var menu ="";
    $.ajax({
        url: 'http://52.65.147.55/webapi/content.php',
        type: "GET",
        success: function (data) {
            menu=data;   
            $(".dynamicMenu").html(parseMenu(menu));
            initMenu();
            $(this).scroll(function () {
                scrollPage();
            });
        }
    })
    //$(".dynamicMenu").html(parseMenu());
   
    function likeCall(){
    //below ajax call getting page total view like and comment count 
    $.ajax({
        url: '/Leader/comment.php',                            
        data: '&PageID=' + pageId+'&fl=like',
        type: "POST",     
        success: function (data) {
            $("#pgActivity").html(data);
        }
    })
}
    function commentCall() {    
   //below ajax call getting page comment 
    $.ajax({
        url: '/Leader/comment.php',                            
        data: '&PageID=' + pageId+'&fl=comment',
        type: "POST",     
        success: function (data) {
        commentsHtml=data;
        }
    })
}
function insertCmt(commentinsert){
    $.ajax({
        url: '/Leader/comment.php',                            
        data: '&PageID=' + pageId+'&fl=insetCmt&Id='+userId+'&cmt='+commentinsert,
        type: "POST",     
        success: function (data) {
            $('#comment').val("");
            likeCall();
            commentCall();
        }
    })
}
function pgLike(){
    $.ajax({
        url: '/Leader/comment.php',                            
        data: '&PageID=' + pageId+'&fl=pgLike&Id='+userId,
        type: "POST",     
        success: function (data) {
            likeCall();
            commentCall();

        }
    })
}
    
    $("#addComment").click(function () {
        $('#divAddComment').slideToggle();
        $('#listComments').slideToggle();
        $("#listComments").html(commentsHtml);
       $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        
        return false;
    });

    $("#like").click(function () {
        pgLike();
        return false;
    });

    $("#postComment").click(function () {
        if ($('#comment').val().length < 5)
            alert('You must enter at least 5 characters');
        else
            var commentinsert=$('#comment').val();
            insertCmt(commentinsert)
        return false;
    });


    // commentHtml should come from the server


    $(".comment-like").click(function () {
        alert('Comment liked ' + $(this).attr("id"));
        console.log($(this));
        return false;
    });

    $('#customComponent').slideToggle();
    $('#divAddComment').slideToggle();
    $('#listComments').slideToggle();

    $('#noViews').text('512');
    $('#noLikes').text('43');
    $('#noComments').text('66');

   

});