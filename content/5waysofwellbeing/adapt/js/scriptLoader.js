/*
*   DEVELOPERS: The EVOLVE Team (evolveauthoring.com) - Daryl Hedley, Wesley Atkinson, Sal Ali, Matt Cleghorn, Brandon Karunakaran, Akram Ali, Malcolm Jukes
*/
/* var full_url = document.URL;
var stuff = full_url.split('/');
var pageId = stuff[stuff.length - 1];
var userId = loginCheck.getUserID();
var Data = '&PageID=' + pageId ;
var commentsHtml="";

$.ajax({
    url: '/myer/Leader/comment.php',                            
    data: Data,
    type: "POST",     
    success: function (data) {
    commentsHtml=data;
    }
})
 */


Modernizr.load([
    {
        test: window.JSON,
        nope: 'libraries/json2.js'
    },
    {
        test: window.console == undefined,
        yep: 'libraries/consoles.js'
    },
    {
        test: Modernizr.video || Modernizr.audio,
        nope: 'libraries/swfObject.js',
        complete: function() {
            yepnope.injectJs("adapt/js/adapt.min.js", function ()
            {
                $(function () {
                    /* $("#addComment").click(function () {
                        $('#divAddComment').slideToggle();
                        $('#listComments').slideToggle();
                        
                        return false;
                    });

                    $("#like").click(function () {
                        alert('like');

                        return false;
                    });
               
                    $("#postComment").click(function () {
                        if ($('#comment').val().length < 5)
                            alert('You must enter at least 5 characters');
                        else
                            alert('Comment posted ' + $('#comment').val());
                        return false;
                    });


                    // commentHtml should come from the server
                    $("#listComments").html(commentsHtml);


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
                    $('#noComments').text('66'); */
                });}
            );
        }
    }
]);