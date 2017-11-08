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
                  html += '<a  class="menu-item" href="/Leader/Leader.php?pg='+ sub["subDescription"] +'" class="lnkmenu"><div class="btn-menu2">' + sub["subDescription"] + '</div></a>';
              }
          }
          
        }
    }
    html+='<br/><br/>';
    return html;
    

}