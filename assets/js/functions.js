
function scrolltotop()	{	$("html, body").animate({scrollTop: 0}, 1500);}

function scrolltoabout()	{	$("html, body").animate({scrollTop: $('#myeracademyabout').offset().top}, 2000); }

function scrolltowelcome()	{	$("html, body").animate({scrollTop: $('#myeracademywelcome').offset().top}, 1000); }


function openmenu()		{	var menustatus = $('.menustatus').width();
								var mainmenuh = $('#mainmenu').height();
								var mainmenuh2 = 0-mainmenuh-110;
									
								if (menustatus == 5) 
								{
								$('#mainmenu').animate({marginTop: "0px"},800);
								$('.menustatus').css("width","10");
								$('#mainmenu').css("opacity","1");
								}
								
								if (menustatus == 10) {
								$('#mainmenu').animate({marginTop: mainmenuh2},600);
								$('.menustatus').css("width","5");
								}
								
								resize();
								
								}


function resizesplash()		{	  var pageh=window.innerHeight;	
							 	  $('.bk-splash').css("height",pageh);
							 		$('.v-align-outer').css("height",pageh);
							 
									}


function resize()			{  	  var pageh=window.innerHeight;
								  var pageh2=pageh-70;
								  var pagew=window.innerWidth;
								  var tilewrap = pagew*.66;
								 
								  if (pagew >= 1600) {pagew = 1600;}
								 
								  if (pagew >= 768) {tilewrap = pagew*.5;}
								  
								  
								  var menuh = 	$('#mainmenuinner').height();
								  var menuh2 = menuh+165;
								  $('#mainmenu').css("height",menuh2);
								  
								  if (pageh <= menuh2) {
									  var pageh4=window.innerHeight-165;
								  $('.scrollheight2').css("height",pageh4);
									  }
									else {$('.scrollheight2').css("height",menuh);}  
								  
								  $('.iframeh').css("height",pageh2);
								  $('.tilewrap').css("height",tilewrap);
								  
								  var menustatus = $('.menustatus').width();
								  
								  if (menustatus == 5) {
								  var mainmenuh = $('#mainmenu').height();
								  var mainmenuh2 = 0-mainmenuh-110;
								  $('#mainmenu').animate({marginTop: mainmenuh2},0);
								  }
								  
								  }
								


function slidersize()			{  var pagew=window.innerWidth;
								  var slidew=pagew;
								  var sliderh=Math.round(slidew*0.65)
								  var sliderdots=sliderh-50;
								  									  
								  $('.dots').css("top",sliderdots);
								  $('.slidersize').css("height",sliderh);
								  $('.header').css("height",sliderh);
								  
								  }
	
								  	



