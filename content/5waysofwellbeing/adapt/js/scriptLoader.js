/*
*   DEVELOPERS: The EVOLVE Team (evolveauthoring.com) - Daryl Hedley, Wesley Atkinson, Sal Ali, Matt Cleghorn, Brandon Karunakaran, Akram Ali, Malcolm Jukes
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
                    $("#addComment").click(function () {
                        $('#divAddComment').slideToggle();
                        //$("html, body").animate({ scrollTop: $(document).height() }, "slow");
                        return false;
                    });

                    $("#showComments").click(function () {
                        $('#listComments').slideToggle();
                        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                        if ($("#showComments > span").text() == 'SHOW COMMENTS')
                            $("#showComments > span").text('HIDE COMMENTS');
                        else
                            $("#showComments > span").text('SHOW COMMENTS');
                        return false;
                    });
                    
                    $("#postComment").click(function () {
                        alert('Comment posted ' + $('#comment').val());
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