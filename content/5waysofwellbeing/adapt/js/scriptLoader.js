/*
*   DEVELOPERS: The EVOLVE Team (evolveauthoring.com) - Daryl Hedley, Wesley Atkinson, Sal Ali, Matt Cleghorn, Brandon Karunakaran, Akram Ali, Malcolm Jukes
*/
var full_url = document.URL;
var stuff = full_url.split('/');
var pageId = stuff[stuff.length - 1];
//var userId = loginCheck.getUserID();
var Data = '&PageID=' + pageId ;
var commentsHtml="";

$.ajax({
    url: '/Leader/comment.php',                            
    data: Data,
    type: "POST",     
    success: function (data) {
    //From following code pulling total like for the particular page
    commentsHtml=data;
    }
})
 //commentsHtml = '<ul id="comments-list" class="comments-list"> <li> <div class="comment-main-level" id="comment_551"> <div class="comment-avatar"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt=""></div> <div class="comment-box"> <div class="comment-head"> <h6 class="comment-name">BEN</h6> </div> <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div> <div class="comment-head"> <i class="fa fa-heart"></i>&nbsp;8 </div> <div class="comment-head"> <div class="comment-date">01 DECEMBER 2016</div> <a href="#" class="comment-like" id="like_551">LIKE</a> </div> </div> </div> </li> <hr class="dotted_line" /> <li> <div class="comment-main-level" id="comment_2567"> <!-- Avatar --> <div class="comment-avatar"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt=""></div> <div class="comment-box"> <div class="comment-head"> <h6 class="comment-name">JOHN</h6> </div> <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div> <div class="comment-head"> <i class="fa fa-heart"></i>&nbsp;9 </div> <div class="comment-head"> <div class="comment-date">31 DECEMBER 2016</div> <a href="#" class="comment-like" id="like_2567">LIKE</a> </div> </div> </div> </li> </ul>';


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
                    $("#addComment").click(function () {
                        $('#divAddComment').slideToggle();
                        $('#listComments').slideToggle();
                        
                        return false;
                    });

                 /*    $("#showComments").click(function () {
                        $('#listComments').slideToggle();
                        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                        if ($("#showComments > span").text() == 'SHOW COMMENTS')
                            $("#showComments > span").text('HIDE COMMENTS');
                        else
                            $("#showComments > span").text('SHOW COMMENTS');
                        return false;
                    }); */
                    
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
                    $('#noComments').text('66');
                });}
            );
        }
    }
]);