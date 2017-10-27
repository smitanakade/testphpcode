<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="-"/>
    <meta name="keywords" content="-"/>
    <meta name="format-detection" content="telephone=no">
    <title>Myer Academy</title>

    <link href="/myer/Leader/assets/css/styles.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/myer/Leader/assets/css/styles_layers.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/myer/Leader/assets/css/styles_resp.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/myer/Leader/assets/css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/myer/Leader/assets/css/scroll.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/myer/Leader/assets/css/jquery.swipeshow.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/myer/Leader/assets/css/slideshow-theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/myer/Leader/assets/css/forms_light.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/myer/Leader/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/myer/Leader/assets/css/menu.css" rel="stylesheet" type="text/css" />

    <script src="/myer/Leader/assets/js/jquery-1.10.2.js" type="text/javascript" ></script>
    <script src="/myer/Leader/assets/js/jquery-2.1.3.min.js" type="text/javascript" ></script>
    <script src="/myer/Leader/assets/js/leaderDynamicMenu.js"type="text/javascript" ></script>
    <script src="/myer/Leader/assets/js/Leadersearch.js"></script>
    <link href="/myer/Leader/assets/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="/myer/Leader/assets/js/contentPage.js"></script>
	<script type="application/javascript" src="/myer/Leader/assets/js/menu.js"></script>
<!--     <script src="/myer/Leader/assets/js/getActivity.js"></script>
 -->
 <script>
$(document).ready(function() {
    $('#filter').change(function() {
    var filter = $('#filter').find(":selected").text();
    //var queryString = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');  
    //var passQuery = queryString[0];
    $('#indexSearch').attr('action', '/Leader/index.php?fl='+filter).submit(); 

});
});
 </script>
    <style>
        .loading {
            z-index: 10005;
        }
        .loading .loading-image {
            background-image: url('/myer/Leader/assets/images/loader.gif');
        }
    </style>


    <!--Boostrap Styles-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--FontAwesome-->
    <!--[if IE 7]>
    <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->
	
	<!--CSS Style-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <?php //include_once("dbconnect.php");?>

    <?php // include_once("analyticstracking.php") ?>

	<?php 
		$jsonMenu = file_get_contents('http://52.65.147.55/webapi/content.php');
	?>

</head>

<body onresize="resize(),slidersize()" onload="resize(),slidersize()">

<div class="menustatus"></div>

<div id="mainmenu" align="left">
    
	<div align="center">
	
		<div class="beforeTopHeader">
			<div class="topHeader">
				<ul class="nav navbar-nav">
					<li class="text-center">
						<a href="/Leader/index.php"><i class="fa fa-lg  fa-home"></i><br><span style="text-decoration:underline;color: rgba(69, 69, 69, 0.4);">HOME</span></a>
					</li>
					<li class="text-center">
						<a href="mailto:myeracademy@myer.com.au"><i class="fa fa-lg fa-envelope-o"></i><br><span style="text-decoration:underline;color: rgba(69, 69, 69, 0.4);">GET IN TOUCH</span></a>
					</li>
					<li class="text-center">
						<a href="#" onclick="logout()"><i class="fa fa-lg fa-sign-out"></i><br><span style="text-decoration:underline;color: rgba(69, 69, 69, 0.4);">SIGN OUT</span></a>
					</li>
				</ul>
			</div>
		</div>

		<form class="navbar-form" id="indexSearch" method="POST" name="indexSearch" action="/myer/Leader/index.php">
			<div style="max-width:80%;">
			<div class="input-group add-on">
			<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
			  <div class="input-group-btn">
				<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
			  </div>
			</div>
			</div>
		<br>
		<div class="spacer20"></div>
		</form>

	</div>
    <div class="scrollcontainer scrollheight2">
        <div class="scrollpanel">
            <div id="mainmenuinner" style="max-width:1200px;width:100%">


                <!-- dynamicMenu here adding menu dynamically added by SMITA RXP-->
                <div class="dynamicMenu">


<!--
				<a href="#" class="menu-container-main">
					<div class="btn-menu2">MAIN CATEGORY</div>
				</a>
				<a href="#" class="menu-container">
					<div class="btn-menu2">ADD ON SELLING</div>
					<div class="menu-child">
						<a href="/content/add-on-selling/index.html" class="lnkmenu">
							<div class="btn-menu2">ADD ON SELLING 1</div>
						</a>
						<a href="/content/add-on-selling/index.html" class="lnkmenu">
							<div class="btn-menu2">ADD ON SELLING 2</div>
						</a>
					</div>
				</a>
				

					<a href="#" class="menu-container">
						<div class="btn-menu2">ARE YOU LISTENING</div>
						<div class="menu-child">
							<a href="/content/asilio/index.html" class="lnkmenu">
								<div class="btn-menu2">ASILIO</div>
							</a>
							<a href="/content/basque/index.html" class="lnkmenu">
								<div class="btn-menu2">BASQUE</div>
							</a>
							<a href="/content/blaq/index.html" class="lnkmenu">
								<div class="btn-menu2">BLAQ</div>
							</a>

						</div>
					</a>
					<a href="/content/bra-fitting-etiquette/index.html" class="lnkmenu">
						<div class="btn-menu2">BRA FITTING ETIQUETTE</div>
					</a>

					<a href="/content/breast-anatomy-and-bra-construction/index.html" class="lnkmenu">
						<div class="btn-menu2">BREAST ANATOMY AND BRA CONSTRUCTION</div>
					</a>
					<a href="/content/building-rapport-credibility/index.html" class="lnkmenu">
						<div class="btn-menu2">BUILDING RAPPORT &amp; CREDIBILITY</div>
					</a>
					<a href="/content/your_personal_brand/index.html" class="lnkmenu">
						<div class="btn-menu2">BUILDING YOUR PERSONAL BRAND</div>
					</a>
					<a href="/content/christmas-trim/index.html" class="lnkmenu">
						<div class="btn-menu2">CHRISTMAS TRIM</div>
					</a>
					<a href="/content/choosing-the-right-bra/index.html" class="lnkmenu">
						<div class="btn-menu2">CHOOSING THE RIGHT BRA</div>
					</a>
					
					<a href="/content/classic-footwear-brands/index.html" class="lnkmenu">
						<div class="btn-menu2">CLASSIC FOOTWEAR BRANDS</div>
					</a>     
					<a href="/content/commbank/index.html" class="lnkmenu">
						<div class="btn-menu2">COMMBANK AWARDS POINTS</div>
					</a>
					<a href="/content/converting-sales/index.html" class="lnkmenu">
						<div class="btn-menu2">CONVERTING SALES</div>
					</a>
					
					<a href="/content/cooper-street/index.html" class="lnkmenu">
						<div class="btn-menu2">COOPER STREET</div>
					</a>
					<a href="/content/delight/index.html" class="lnkmenu">
						<div class="btn-menu2">DELIGHT</div>
					</a>
					<a href="/content/denimmen/index.html" class="lnkmenu">
						<div class="btn-menu2">DENIM FOR MEN</div>
					</a>
					<a href="/content/denimwomen/index.html" class="lnkmenu">
						<div class="btn-menu2">DENIM FOR WOMEN</div>
					</a>
					<a href="/content/fitting-a-bra/index.html" class="lnkmenu">
						<div class="btn-menu2">FITTING A BRA</div>
					</a>
					<a href="/content/construction/index.html" class="lnkmenu">
						<div class="btn-menu2">FOOTWEAR CONSTRUCTION</div>
					</a>
					<a href="/content/sizes_trends/index.html" class="lnkmenu">
						<div class="btn-menu2">FOOTWEAR SIZES &amp; TRENDS</div>
					</a>
					<a href="/content/give_registry/index.html" class="lnkmenu">
						<div class="btn-menu2">GIVE REGISTRY</div>
					</a>
					<a href="/content/growth-mindset/index.html" class="lnkmenu">
						<div class="btn-menu2">GROWTH MINDSET</div>
					</a>
					<a href="/content/howwebuy/index.html" class="lnkmenu">
						<div class="btn-menu2">HOW WE BUY</div>
					</a>
					<a href="/content/howwelearn/index.html" class="lnkmenu">
						<div class="btn-menu2">HOW WE LEARN AT MYER</div>
					</a>
					<a href="/content/intimate-apparel-care-and-solutions/index.html" class="lnkmenu">
						<div class="btn-menu2">INTIMATE APPAREL CARE AND SOLUTIONS</div>
					</a>
					<a href="/content/intro-to-shrinkage/index.html" class="lnkmenu">
						<div class="btn-menu2">INTRODUCTION TO SHRINKAGE AT MYER</div>
					</a>
					<a href="/content/jack_jones/index.html" class="lnkmenu">
						<div class="btn-menu2">JACK &amp; JONES</div>
					</a>
					<a href="/content/kenji/index.html" class="lnkmenu">
						<div class="btn-menu2">KENJI</div>
					</a>
					<a href="/content/leona-by-leona-edmiston/index.html" class="lnkmenu">
						<div class="btn-menu2">LEONA BY LEONA EDMISTON</div>
					</a>
					<a href="/content/myer-credit-card/index.html" class="lnkmenu">
						<div class="btn-menu2">MYER CREDIT CARD</div>
					</a> 
					<a href="/content/on-trend/index.html" class="lnkmenu">
						<div class="btn-menu2">ON TREND FOR SPRING RACING</div>
					</a>                
					<a href="/content/piper/index.html" class="lnkmenu">
						<div class="btn-menu2">PIPER</div>
					</a>
					<a href="/content/race-day-outfits/index.html" class="lnkmenu">
						<div class="btn-menu2">RACE DAY OUTFITS</div>
					</a>
					<a href="/content/reserve/index.html" class="lnkmenu">
						<div class="btn-menu2">RESERVE</div>
					</a>
					<a href="/content/denimcare/index.html" class="lnkmenu">
						<div class="btn-menu2">RULES OF DENIM CARE</div>
					</a>
					<a href="/content/sales-metrics/index.html" class="lnkmenu">
						<div class="btn-menu2">SALES METRICS</div>
					</a>
					<a href="/content/stella/index.html" class="lnkmenu">
						<div class="btn-menu2 btn-bord-bot">STELLA</div>
					</a>
					<a href="/content/styling-with-colour/index.html" class="lnkmenu">
						<div class="btn-menu2 btn-bord-bot">STYLING WITH COLOR</div>
					</a>
					<a href="/content/styling-with-neutrals/index.html" class="lnkmenu">
						<div class="btn-menu2 btn-bord-bot">STYLING WITH NEUTRALS</div>
					</a>
					<a href="/content/the-bra-wardrobe/index.html" class="lnkmenu">
						<div class="btn-menu2 btn-bord-bot">THE BRA WARDROBE</div>
					</a>
					<a href="/content/wayne_cooper/index.html" class="lnkmenu">
						<div class="btn-menu2 btn-bord-bot">WAYNE COOPER</div>
					</a>
					<a href="/content/youngandcontemporary/index.html" class="lnkmenu">
						<div class="btn-menu2 btn-bord-bot">YOUNG &amp; CONTEMPORARY FOOTWEAR</div>
					</a>
					-->
				</div>
                <!-- dynamicMenu here adding menu dynamically added by SMITA RXP -->

            </div>
        </div>
    </div>
    <div style="width:100%;max-width:1200px;height:35px;margin-top:10px;display:block;background:rgba(156,156,156,0);cursor:pointer"
         align="center" onclick="openmenu()"><img src="/myer/Leader/assets/images/arrow_up2.png"
                                                  style="margin:5px 0px 0px 0px;cursor:pointer;width:55px"></div>


</div>


<div class="menu pointer" align="center" onclick="openmenu()">
    <!-- <img src="/myer/Leader/assets/images/hamburger1.png" style="width:26px;float:left;margin:13px 0px 0px 10px"> -->
    
    <a href="#" class="bar" ><i class="fa fa-bars fa-2x" aria-hidden="true" ></i></a>

    <img src="/myer/Leader/assets/images/592fabe4ab4951b364eb10eb.jpeg" class="logo-myeracademy2">
</div>


<div align="center">

<div id="ddddd" style="max-width:100%;min-height:70px;border-bottom:1px solid #000;"><img src="/myer/Leader/assets/images/592fabe4ab4951b364eb10eb.jpeg" ></div>
<div class="beforeTopHeader">
<div class="topHeader">
        <ul class="nav navbar-nav">
        <li class="text-center">
          <a  href="/Leader/index.php" ><i class="fa fa-lg  fa-home"></i><br><span style="text-decoration:underline;color: rgba(69, 69, 69, 0.4);">HOME</span></a>
        </li>
        <li class="text-center">
          <a href="mailto:myeracademy@myer.com.au" ><i class="fa fa-lg fa-envelope-o"></i><br><span style="text-decoration:underline;color: rgba(69, 69, 69, 0.4);">GET IN TOUCH</span></a>
        </li>
        <li class="text-center">
          <a href="#" onclick="logout()"><i class="fa fa-lg fa-sign-out"></i><br><span style="text-decoration:underline;color: rgba(69, 69, 69, 0.4);">SIGN OUT</span></a>
        </li>
      </ul>
      </div>
        
       
        <span   class="headLine">MYER LEADERS PORTAL</span>
               <h2  class="subtitle"> REALISE YOUR LEADERSHIP POTENTIAL</h2>
        </div>
        <form class="navbar-form" id="indexSearch" method="POST" name="indexSearch" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <div style="max-width:80%;">
        <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
</div>
    <br/>
    <div class="spacer20"></div>

    <span class="headLine2">What am I doing today ?</span>
    <div class="spacer20"></div>
    <p style="font-family:ApercuLight">Filter by the type of learning  OR Click one of the four Leadership Focus areas to discover more</p>
    <div class="spacer20"></div>
    
    <div>
    
                <select id="filter" class="form-control">
                <option value=''>FILTER BY</option>
                        <option value='watch' >WATCH</option>
                        <option value='LISTEN'>LISTEN</option>
                        <option value='READ'>READ</option>
                        <option value='READ'>DO</option>
                        <option value='REFLECT'>REFLECT</option>
                        
                      </select>
                      </div>
  </form>


    <div id="content">
   
    
   
   <!-- SearchResultDiv will show search result dynamically start here added by SMITA RXP-->
<div class="SearchResultDiv" id="SearchResultDiv"></div>
<!-- SearchResultDiv will show search result dynamically End here added by SMITA RXP-->

<?php 
include('db_connect.php');

if(isset($_GET['fl'])){
    $fl= $_GET['fl'];
        $query_fl= "SELECT Title,strapline,Description,Links,Category,Filter,CapabilityTag,Keyword,SecondaryLeadership,imageName FROM leaderassociation WHERE Filter Like '%$fl%' ORDER BY pageRanking";
   
        $result_fl = mysqli_query($link,$query_fl);
    
        // die if SQL statement failed
        if (!$result_fl) {
        http_response_code(404);
        }
        else{
            $rowcount=mysqli_num_rows($result_fl);
            if($rowcount){
                while ($row = mysqli_fetch_array($result_fl, MYSQL_BOTH)) {
                     $pos = strpos($row['Links'], "pptx");
                    if($pos === false){
                     $link=$row['Links'];
                    }else{
                        $link="/Leader/PDF/".$row['Links'];
                    }  ?>
                    <div class="main" id="main"><a href='<?php echo $link;?>' target="_blank" style="text-decoration: none; color:#000;"> 
                        <img  src="/myer/Leader/assets/images/<?php echo $row['imageName'];?>" style="max-width:100%" >
                        <h2 class="subtitle"><?php echo $row['strapline']; ?></h2>
                        <h1 class="headLine2"><u style=" text-decoration: none;border-bottom: 1px solid #939393;"><?php echo $row['Title']; ?></u></h1>                                    
                        <p style="text-align:center;padding:5px;max-width:800px;font-family:ApercuLight;"><?php echo $row['Description']; ?></p></a>
                        <div style="margin:0 auto; border-bottom:1px dotted #000;max-width:80%;">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-eye fa-stack-2x" aria-hidden="true"></i>
                                <strong class="fa-stack-1x fa-stack-text file-text">16</strong>
                            </span>
                            <span class="fa-stack fa-2x">
                                <i class="fa fa fa-heart fa-stack-2x"></i>
                                <strong class="fa-stack-1x fa-stack-text file-text">16</strong>
                            </span>
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-comment fa-stack-2x"></i>
                                <strong class="fa-stack-1x fa-stack-text file-text">16</strong>
                            </span>
    <!--                         <div class="keyword"><span>keyword1</span>|<span>keyword1</span>|<span>keyword1</span>|<span>keyword1</span>|<span>keyword1</span></div>
     -->                    </div>
                    </div>
            <?php
                }
            }
            else{
                echo"NO Record Found!!";
            }
    }
    }
    
?>

        <div align="center" style="padding:25px 8px;background:#f5f5f5">
            <div style="max-width:1600px;">
            <a href="/Leader/Leader.php?pg=LEADING SELF" >
                <div  class="LeaderHome">
                    <img src="/myer/Leader/assets/images/LEADINGSELF.jpg" style="max-width:100%;">
                </div>
            </a> 
            <a href="/Leader/Leader.php?pg=LEADING OTHERS">
                <div  class="LeaderHome">
                       <img src="/myer/Leader/assets/images/LEADINGOTHERS.jpg" style="max-width:100%;">
                </div>  
            </a> 
            <a href="/Leader/Leader.php?pg=WORKING ON THE BUSINES">
                <div  class="LeaderHome">
                    <img src="/myer/Leader/assets/images/WORKINGONTHEBUSINES.jpg" style="max-width:100%;">
                 </div>
            </a> 
            <a href="/Leader/Leader.php?pg=WORKING IN THE BUSINESS">
                <div  class="LeaderHome">
                    <img src="/myer/Leader/assets/images/WORKINGINTHEBUSINESS.jpg" style="max-width:100%;">
                </div>
            </a> 
                
              </div>
<!-- Here Comment, Rating, like and read comment Part starting -->

              <div class="aria-live-assertive" aria-live="assertive">
</div>
    <div class="page content-container">
        <br/>
        <div class="row">
            <div class="col-md-12 text-center" id="totalLike">
                <button id="btnlike" type="button" class="btn btn-default btn-sm">
                    <i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> Like
                </button>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12 text-center">
            <span class="rating" id="rating">
            <input type="radio" class="rating-input"
                   id="rating-input-1-5" name="rating" value="5">
            <label for="rating-input-1-5" class="rating-star"></label>
            <input type="radio" class="rating-input"
                   id="rating-input-1-4" name="rating" value="4">
            <label for="rating-input-1-4" class="rating-star"></label>
            <input type="radio" class="rating-input"
                   id="rating-input-1-3" name="rating" value="3">
            <label for="rating-input-1-3" class="rating-star"></label>
            <input type="radio" class="rating-input"
                   id="rating-input-1-2" name="rating" value="2">
            <label for="rating-input-1-2" class="rating-star"></label>
            <input type="radio" class="rating-input"
                   id="rating-input-1-1" name="rating" value="1">
            <label for="rating-input-1-1" class="rating-star"></label>
        </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <button id="btnwrtcmts" type="submit" value="Submit" class="button_cust">Write comments</button>
            </div>
            <div class="col-md-6 text-center">
                <button id="btnrdcmts" type="submit" value="Submit" class="button_cust">Read comments</button>
            </div>
        </div>
        <div class="row" id="writecommentsdiv">
            <div class="col-md-12">
                <textarea class="form-control" rows="5" id="comment">

</textarea>

            </div>

            <div class="col-md-12 text-center">
               
                <button id="wrtcmtsubmitbtn" type="submit" value="Submit" class="button_cust">submit</button>
                <button id="wrtcmtcancelbtn" type="submit" value="cancel" class="button_cust">cancel</button>
            </div>
        </div>
        <div class="row" id="readcommentsdiv">
    
                <div role="region" class="article article-style-10 ">
                <div id="readComment"></div>
                    
                </div>


        </div>
         
<!-- Here Comment, Rating, like and read comment Part ending -->



              
         <div id="footer">
            &copy 2016 www.myeracademy.com.au<br><br>
            <img src="/myer/Leader/assets/images/arrow_up.png" style="margin:20px 0px" class="pointer" onclick="scrolltotop()">
        </div> 


    </div>
</div>

<script type="application/javascript" src="/myer/Leader/assets/js/config.js"></script>
<script type="text/javascript" src="/myer/Leader/assets/js/functions.js"></script>
<script type="text/javascript" src="/myer/Leader/assets/js/jquery-2.1.3.min.js"></script>
<script src="/myer/Leader/assets/js/jquery.swipeshow.min.js"></script>
<script type="application/javascript" src="/myer/Leader/assets/js/es6-promise-polyfill.js"></script>
<script type="application/javascript" src="/myer/Leader/assets/js/axios.js"></script>
<script type="application/javascript" src="/myer/Leader/assets/js/stafflogin.js"></script>

<script>

    var loginCheck = new StaffLogin(loginConfig);
    loginCheck.checkIfLoggedIn(function (isLoggedIn) {
        if (isLoggedIn) {
            showPage();
        } else {
            redirect();
        }
    })

    $(document).ready(function () {
	
		$(".dynamicMenu").html(parseMenu('<?php echo $jsonMenu?>'));
		initMenu();
		
		
        $(this).scroll(function () {
            scrollPage();
        });

    });

    $(window).load(function () {

        $('.logo-myeracademy').css("transform", "scale(1.00)");
        $('.logo-myeracademy').css("opacity", "1");
    });

    function showPage() {
        $('#content').fadeTo(500, 1);
        $('.logo-myeracademy').css("transform", "scale(1.00)");
        $('.logo-myeracademy').css("opacity", "1");
        var mainmenuh = $('#mainmenu').height();
        var mainmenuh2 = 0 - mainmenuh - 110;
        $('#mainmenu').css("margin-top", mainmenuh2);

        if (window.location.hash) {
            $('.tab1 .tabinner3').fadeTo(0, '0');
            var hash = window.location.hash;
            if (hash == '#about') {
                scrolltoabout();
            }
        }
    }

    function redirect() {
    //    document.location.href = './index.html';
    }


    function logout() {
       // loginCheck.logout();
       // redirect();
    }

    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-85609472-1', 'auto');
    ga('send', 'pageview');

    (function ($) {
        $(".version").text($.swipeshow.version);
        $(".slideshow").swipeshow({autostart: true, mouse: true, interval: 6000});
    })(jQuery);
</script>

</body>
</html>
