$(document).ready(function(){
    $("button").on('click', function(){   
        var search_Data=$("#srch-term").val();
        if(search_Data!=""){
        $.ajax({
            url: '/myer/content/testsearch.php', 
            type : "POST",
            data: {search:$("#srch-term").val()},
            datatype: 'json',
            success: function(data) {
                
                    var obj = jQuery.parseJSON(data);
                    html="";
                    a=0;
                    $.each(obj,function(index,element){
                        a++;                        
                        $.each(element,function(i,e){
                            html += '<div class="main" id="main">' +
                                    '<a href="'+e.articalFolder+'/index.html#/id/'+e.pageId+'" style="text-decoration: none; color:#000;"> <div  class="srchimg" id="srchimg"><img  src="/myer/php/uploadedImages/' + e.ImageName + '" style="max-width:100%" ></div>' +
                                    '<div class="srchdisc" id="srchdisc"><h2  class="subtitle">'+e.strapline+'</h2><h1 class="headLine"style="text-decoration: underline;">'+e.PageTitle+'</h1><p style="text-align:justify;padding:5px;">'+e.pageDescription + '</p></div></a>' +
                                    '</div>'; 
                            if(i==2){
                               
                                html +='<div >'+
                                '<a href="#" class="link"  target="_self" >'+   
                                'CONTINUE READING SEARCH RESULT </a></div>';
                                $('.SearchResultDiv').append(html);                               
                                 return;
                               }
                        });
                        if(a<=3){
                           $('.SearchResultDiv').append(html);
                        }
                        if(a==0){
                            $('.SearchResultDiv').remove();
                                html="Kindly Enter Search Keyword!!";
                                $('.SearchResultDiv').append(html);
                                
                             
                        }
                    });
                   
               

            },
            error: function(data) {
                console.log(data);
            }
        }) 
    }

    });


});