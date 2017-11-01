/*
*   DEVELOPERS: The EVOLVE Team (evolveauthoring.com) - Daryl Hedley, Wesley Atkinson, Sal Ali, Matt Cleghorn, Brandon Karunakaran, Akram Ali, Malcolm Jukes
*/
var full_url = document.URL;
var stuff = full_url.split('/');
var pageId = stuff[stuff.length - 1];
//var userId = loginCheck.getUserID();
var Data = '&PageID=' + pageId ;

var commentsHtml = "";

/*
$.ajax({
    url: '/Leader/comment.php',                            
    data: Data,
    type: "POST",     
    success: function (data) {
    //From following code pulling total like for the particular page
    commentsHtml=data;
    }
})

*/
 //commentsHtml = '<ul id="comments-list" class="comments-list"> <li> <div class="comment-main-level" id="comment_551"> <div class="comment-avatar"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt=""></div> <div class="comment-box"> <div class="comment-head"> <h6 class="comment-name">BEN</h6> </div> <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div> <div class="comment-head"> <i class="fa fa-heart"></i>&nbsp;8 </div> <div class="comment-head"> <div class="comment-date">01 DECEMBER 2016</div> <a href="#" class="comment-like" id="like_551">LIKE</a> </div> </div> </div> </li> <hr class="dotted_line" /> <li> <div class="comment-main-level" id="comment_2567"> <!-- Avatar --> <div class="comment-avatar"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt=""></div> <div class="comment-box"> <div class="comment-head"> <h6 class="comment-name">JOHN</h6> </div> <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div> <div class="comment-head"> <i class="fa fa-heart"></i>&nbsp;9 </div> <div class="comment-head"> <div class="comment-date">31 DECEMBER 2016</div> <a href="#" class="comment-like" id="like_2567">LIKE</a> </div> </div> </div> </li> </ul>';
 var menu = '[{"mainId":"1","CategorieDescription":"LEARNING MOMENTS","sub":[{"smId":"1","subDescription":"WHAT\'S NEW","mainCatId":"1","third":[{"thLid":"11","thlDescription":"CHRISTMAS"},{"thLid":"12","thlDescription":"SPRING RACING"}]},{"smId":"2","subDescription":"LOVE YOUR PRODUCT","mainCatId":"1","third":[{"thLid":"13","thlDescription":"MENSWEAR"},{"thLid":"14","thlDescription":"WOMENSWEAR"},{"thLid":"15","thlDescription":"FOOTWEAR AND ACCESSORIES"},{"thLid":"16","thlDescription":"HOME"},{"thLid":"17","thlDescription":"ELECTRICAL"},{"thLid":"18","thlDescription":"KIDS AND TOYS"}]},{"smId":"3","subDescription":"OUR SALES AND SERVICE EXPERIENCE","mainCatId":"1","third":[{"thLid":"19","thlDescription":"INTIMATE APPAREL"}]},{"smId":"4","subDescription":"DEVELOPING SELF","mainCatId":"1","third":[]}]},{"mainId":"2","CategorieDescription":"DIGITAL LEARNING PATHWAYS","sub":[{"smId":"7","subDescription":"MEB BRAND EXPERT PATHWAY","mainCatId":"2","third":[]}]},{"mainId":"3","CategorieDescription":"MYER LEADERS PORTAL","sub":[{"smId":"8","subDescription":"LEADING SELF","mainCatId":"3","third":[]},{"smId":"9","subDescription":"LEADING OTHERS","mainCatId":"3","third":[]},{"smId":"10","subDescription":"WORKING IN THE BUSINESS","mainCatId":"3","third":[]},{"smId":"11","subDescription":"WORKING ON THE BUSINESS","mainCatId":"3","third":[]}]}]';


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
                        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
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


                    $.ajax({
                        url: '/Leader/comment.php',
                        data: Data,
                        type: "POST",
                        success: function (data) {
                            //From following code pulling total like for the particular page
                            commentsHtml = data;
                            $("#listComments").html(commentsHtml);
                        }
                    });
                    

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

                    $.ajax({
                        url: '/webapi/content.php',
                        type: "GET",
                        success: function (data) {
                            //From following code pulling total like for the particular page
                            $(".dynamicMenu").html(parseMenu(data));
                            initMenu();
                            $(this).scroll(function () {
                                scrollPage();
                            });
                        }
                    })
                    //$(".dynamicMenu").html(parseMenu());
                    $(".dynamicMenu").html(parseMenu(menu));
                    initMenu();
                    $(this).scroll(function () {
                        scrollPage();
                    });

                });}
            );
        }
    }
]);