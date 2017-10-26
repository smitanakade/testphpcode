$(document).ready(function(){
    $("button").on('click', function(){ 
        var search_Data=$("#srch-term").val();
        if(search_Data!=""){
        $.ajax({
            url: '/Leader/getSearchResult.php', 
            type : "POST",
            data: {search:$("#srch-term").val()},
            datatype: 'json',
            success: function(data) {
                
                 //   var obj = jQuery.parseJSON(data);
                    console.log(data);
                     $('.SearchResultDiv').append(data);
                    
                   /*  $.each(data,function(index,element){
                        a++;                        
                        $.each(element,function(i,e){
                           
                            html += '<div class="main" id="main">' +
                                    '<a href="'+e.articalFolder+'/index.html#/id/'+e.pageId+'" style="text-decoration: none; color:#000;"> ' +
                                    '<img  src="/Leader/assets/images/' + e.imageName + '" style="max-width:100%" >'+
                                    '<h2 class="subtitle">'+e.strapline+'</h2>'+
                                    '<h1 class="headLine"style="text-decoration: underline;">'+e.Title+'</h1>'+                                    
                                    '<p style="text-align:center;padding:5px;">'+e.Description + '</p></a>' +
                                    '<div style="margin:0 auto; border-bottom:1px dotted #000;max-width:80%;">' +
                                   '<span class="fa-stack fa-2x">' +
                                       '<i class="fa fa-eye fa-stack-2x" aria-hidden="true"></i>' +
                                        '<strong class="fa-stack-1x fa-stack-text file-text">16</strong>' +
                                   '</span>' +
                                    '<span class="fa-stack fa-2x">' +
                                        '<i class="fa fa fa-heart fa-stack-2x"></i>' +
                                        '<strong class="fa-stack-1x fa-stack-text file-text">16</strong>' +
                                    '</span>' +
                                    '<span class="fa-stack fa-2x">' +
                                        '<i class="fa fa-comment fa-stack-2x"></i>' +
                                        '<strong class="fa-stack-1x fa-stack-text file-text">16</strong>' +
                                    '</span>' +
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
                    }); */
                   
               

            },
            error: function(data) {
                console.log(data);
            }
        }) 
    }

    });


});