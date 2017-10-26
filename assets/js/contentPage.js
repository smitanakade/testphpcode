$(document).ready(function () {
    //hiding comments div on pageload
    $('#writecommentsdiv').hide();
    $('#readcommentsdiv').hide();
    //capturing pageID and username for each page visit
    var full_url = document.URL;
    var stuff = full_url.split('/');
    var pageId = stuff[stuff.length - 1];
    var userId = loginCheck.getUserID();

    var Data = '&PageID=' + pageId + '&UserId=' + userId + '&Flag=page';

    $.ajax({
        url: '/Leader/PageComments.php',                            
        data: Data,
        type: "POST",     
        success: function (data) {
        //From following code pulling total like for the particular page
         var obj=jQuery.parseJSON(data);
        html='<span id="pagelike">'+obj.pagelike+'</span>';
        $('#totalLike').append(html);   
        if(obj.rating !=0){
            //Here pulling rating for the particular page given by login user 
            $('input:radio[class=rating-input][id=rating-input-1-'+obj.rating+']').prop('checked', true);
           }
        },
        error: function (data) {
            console.log(data);
        }
    });

    $('#btnlike').click(function () {
        var pageLike = '';

     //   $(this).toggleClass('active');
        //saving into DB when clicked on like button
        $('#btnlike').hasClass('active') ? pageLike = 'like' : pageLike = '';
        //data to post
        var data = '&PageID=' + pageId + '&UserId=' + userId + '&PageLike=' + pageLike + '&Flag=like';
        //code to send data to php file
        ajaxCall(data)
    });

    $('#rating').click(function () {

        var rating = $('input:radio[name=rating]:checked').val();
        //make the postdata
        var data = '&PageID=' + pageId + '&UserId=' + userId + '&Rating=' + rating + '&Flag=rating';

        //code to send data to php file
        ajaxCall(data)
    });

    $('#btnwrtcmts').click(function () {
        $('#writecommentsdiv').show();
        $('#readcommentsdiv').hide();
    });
    $('#btnrdcmts').click(function () {
        $('#readcommentsdiv').show();
        $('#writecommentsdiv').hide();


        //make the postdata
        var postData = '&PageID=' + pageId + '&UserId=' + userId + '&Flag=read';

        //code to send data to php file
        $.ajax({
            url: "/Leader/PageComments.php",
            type: "POST",
            data: postData,
            success: function (data, status, xhr) {
                $('#read').remove();
                var result = jQuery.parseJSON(data);
                if (result) {
                    console.log(result.read.NameReport);
                   /*  var comments = result[0]["comments"];
                    if (comments !== '') {
                        $('#readcommentsdiv h4').text(comments);
                    } */
                    
                    var html_read="";  
                    html_read='';                  
                    $.each(result.read,function(index,element){
                        html_read+='<div id="read"><div class="title">'+element.NameReport+'</div><div class="comment">:'+element.comment+'</div></div>';       
                    });
                    html_read+='';
                    $('#readComment').append(html_read);   
                }
            },
            error: function (data) {
                console.log(data);
            }
        });





    });
    $('#wrtcmtcancelbtn').click(function () {
        $('#writecommentsdiv').hide();
    });

    $('#wrtcmtsubmitbtn').click(function () {
        $('#writecommentsdiv').hide();
        $('#readcommentsdiv').hide();        
        var comments = $('textarea#comment').val();
        //make the postdata
        var data = '&PageID=' + pageId + '&UserId=' + userId + '&Comments=' + comments + '&Flag=comments';

        //code to send data to php file
        ajaxCall(data)

    });
    function ajaxCall(postData) {
        $.ajax({
            url: "/Leader/PageComments.php",
            type: "POST",
            data: postData,
            success: function (data) {
                var obj=jQuery.parseJSON(data);
                $('#pagelike').remove();
                html='<span id="pagelike">'+obj.pagelike+'</span>';
              $('#totalLike').append(html); 
              $('#btnlike').css('class',"btn btn-default btn-sm");  
             if(obj.rating !=0){
              $('input:radio[class=rating-input][id=rating-input-1-'+obj.rating+']').prop('checked', true);
             }
            },
            error: function (data) {
                console.log(error);
            }
        });
    }
  
   
});