function initMenu() {
    $(".menu-child").slideToggle(); // hide all child menus

    $(".menu-container > div").each(function (index) {
        // add right arrow to containers
        $(this).html($(this).html() + '<i class="fa fa-chevron-right" aria-hidden="true"></i>');
    });

    $(".menu-container").click(function () {

        $(this).next(".menu-child").slideToggle(500);
        $child = $(this).children('div').first().children('i');
        $child.toggleClass("fa-chevron-right").toggleClass("fa-chevron-down");
        return false; // prevent scrolling
    });
}


function parseMenu(json)
{
   
    //var json = '[{"mainId":"1","CategorieDescription":"LEARNING MOMENTS","sub":[{"smId":"1","subDescription":"WHATS NEW","mainCatId":"1","third":[{"thLid":"11","thlDescription":"CHRISTMAS"},{"thLid":"12","thlDescription":"SPRING RACING"}]},{"smId":"2","subDescription":"LOVE YOUR PRODUCT","mainCatId":"1","third":[{"thLid":"13","thlDescription":"MENSWEAR"},{"thLid":"14","thlDescription":"WOMENSWEAR"},{"thLid":"15","thlDescription":"FOOTWEAR AND ACCESSORIES"},{"thLid":"16","thlDescription":"HOME"},{"thLid":"17","thlDescription":"ELECTRICAL"},{"thLid":"18","thlDescription":"KIDS AND TOYS"}]},{"smId":"3","subDescription":"OUR SALES AND SERVICE EXPERIENCE","mainCatId":"1","third":[{"thLid":"19","thlDescription":"INTIMATE APPAREL"}]},{"smId":"4","subDescription":"DEVELOPING SELF","mainCatId":"1","third":[]}]},{"mainId":"2","CategorieDescription":"DIGITAL LEARNING PATHWAYS","sub":[{"smId":"7","subDescription":"MEB BRAND EXPERT PATHWAY","mainCatId":"2","third":[]}]},{"mainId":"3","CategorieDescription":"MYER LEADERS PORTAL","sub":[{"smId":"8","subDescription":"LEADING SELF","mainCatId":"3","third":[]},{"smId":"9","subDescription":"LEADING OTHERS","mainCatId":"3","third":[]},{"smId":"10","subDescription":"WORKING IN THE BUSINESS","mainCatId":"3","third":[]},{"smId":"11","subDescription":"WORKING ON THE BUSINESS","mainCatId":"3","third":[]}]}]';
   // console.log(json);
	var jsonObj = $.parseJSON(json);
      
	var html ="";
    for (var idx = 0; idx < jsonObj.length; idx++)
    {
        html += '<a href="#" class="menu-container-main"><div class="btn-menu2">' + jsonObj[idx]["CategorieDescription"] + '</div></a>';

        if (jsonObj[idx].sub != null && jsonObj[idx].sub.length > 0)
        {
          for (var idxSub = 0; idxSub < jsonObj[idx].sub.length; idxSub++)
          {
              var sub = jsonObj[idx].sub[idxSub];
              

              if (sub.third != null && sub.third.length > 0) {
                  html += '<a href="#" class="menu-container"><div class="btn-menu2">' + sub["subDescription"] + '</div></a><div class="menu-child">';

                  for (var idxTh = 0; idxTh < sub.third.length; idxTh++) {
                      var th = sub.third[idxTh];
                      html += '<a href="#" class="lnkmenu"><div class="btn-menu2' + ' btn-menu2-' + idxTh + '">' + th["thlDescription"] + '</div></a>';

                  }
                  html += '</div>'
              }
              else
              {
                  html += '<a  class="menu-item" href="/" class="lnkmenu"><div class="btn-menu2">' + sub["subDescription"] + '</div></a>';
              }
          }
          
        }
    }

    return html;
    
    /*
    var json = '[{"mainId":"1","CategorieDescription":"LEARNING MOMENTS","sub":[{"smId":"1","subDescription":"WHATS NEW","mainCatId":"1","third":[{"thLid":"11","thlDescription":"CHRISTMAS"},{"thLid":"12","thlDescription":"SPRING RACING"}]},{"smId":"2","subDescription":"LOVE YOUR PRODUCT","mainCatId":"1","third":[{"thLid":"13","thlDescription":"MENSWEAR"},{"thLid":"14","thlDescription":"WOMENSWEAR"},{"thLid":"15","thlDescription":"FOOTWEAR AND ACCESSORIES"},{"thLid":"16","thlDescription":"HOME"},{"thLid":"17","thlDescription":"ELECTRICAL"},{"thLid":"18","thlDescription":"KIDS AND TOYS"}]},{"smId":"3","subDescription":"OUR SALES AND SERVICE EXPERIENCE","mainCatId":"1","third":[{"thLid":"19","thlDescription":"INTIMATE APPAREL"}]},{"smId":"4","subDescription":"DEVELOPING SELF","mainCatId":"1","third":[]}]},{"mainId":"2","CategorieDescription":"DIGITAL LEARNING PATHWAYS","sub":[{"smId":"7","subDescription":"MEB BRAND EXPERT PATHWAY","mainCatId":"2","third":[]}]},{"mainId":"3","CategorieDescription":"MYER LEADERS PORTAL","sub":[{"smId":"8","subDescription":"LEADING SELF","mainCatId":"3","third":[]},{"smId":"9","subDescription":"LEADING OTHERS","mainCatId":"3","third":[]},{"smId":"10","subDescription":"WORKING IN THE BUSINESS","mainCatId":"3","third":[]},{"smId":"11","subDescription":"WORKING ON THE BUSINESS","mainCatId":"3","third":[]}]}]';

    var jsonObj = $.parseJSON(json);

    var html = "";


    for (var idx = 0; idx < jsonObj[1].sub.length; idx++) {
        var sub = jsonObj[0].sub[idx];
        if (sub.third != null && sub.third.length > 0) {
            html += '<a href="#" class="menu-container"><div class="btn-menu2">' + sub["subDescription"] + '</div><div class="menu-child">';
            for (var idxTh = 0; idxTh < sub.third.length; idxTh++) {
                var th = sub.third[idxTh];
                

                html += '<a href="/content/bra-fitting-etiquette/index.html" class="lnkmenu"><div class="btn-menu2">' + th["thlDescription"] + '</div></a>';
            }
            html += '</div></a>'
        }
        else {
            html += '<a href="/content/bra-fitting-etiquette/index.html" class="lnkmenu"><div class="btn-menu2">' + sub["subDescription"] + '</div></a>';
        }
    }
    return html;
    */
}