﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="-"/>
    <meta name="keywords" content="-"/>
    <meta name="format-detection" content="telephone=no">
    <title>Myer Academy</title>

    <link href="/assets/css/styles.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/Leader/assets/css/styles_layers.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/Leader/assets/css/styles_resp.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/assets/css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/assets/css/scroll.css" rel="stylesheet" type="text/css" media="all"/>

  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/Leader/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/Leader/assets/css/menu.css" rel="stylesheet" type="text/css" />
  <link href="/Leader/assets/css/comments.css" rel="stylesheet" type="text/css" />
  

    <script src="/Leader/assets/js/jquery-1.10.2.js" type="text/javascript" ></script>
    <script src="/Leader/assets/js/jquery-2.1.3.min.js" type="text/javascript" ></script>
    <script src="/Leader/assets/js/Leadersearch.js"></script>
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
 	<script type="application/javascript" src="/Leader/assets/js/menu.js"></script>
 <script>
$(document).ready(function() {
    $('#filter').change(function() {
    var filter = $('#filter').find(":selected").text();

    $('#indexSearch').attr('action', '/Leader/index.php?fl='+filter).submit(); 

});
});
 </script>
    <style>
        .loading {
            z-index: 10005;
        }
        .loading .loading-image {
            background-image: url('/assets/images/loader.gif');
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


    <?php // include_once("analyticstracking.php") ?>

	<?php 
		$jsonMenu = file_get_contents('http://52.65.147.55/webapi/content.php');
	?>

</head>

<body>
<div class="menustatus"></div>

<div id="mainmenu" align="left">   
	
		<div class="beforeTopHeader">

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
        <div class="sch">
        <form class="navbar-form" id="indexSearch" method="POST" name="indexSearch" action="/Leader/searchResult.php" >
            <div style="max-width:80%;">
                <div class="input-group add-on">
              <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
              <div class="input-group-btn">
                <button class="btn btn-default" id="SerchButton" type="submit" ><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
        </div>
          
            </form>
            </div>


    <div class="scrollcontainer scrollheight2">
        <div class="scrollpanel">
            <div id="mainmenuinner" style="max-width:1200px;width:100%">


                <!-- dynamicMenu here adding menu dynamically added by SMITA RXP-->
                <div class="dynamicMenu">
				</div>
                <!-- dynamicMenu here adding menu dynamically added by SMITA RXP -->

               
            </div>
        </div>
    </div>
    <div style="width:100%;max-width:1200px;height:35px;margin-top:10px;display:block;background:rgba(156,156,156,0);cursor:pointer"
         align="center" onclick="openmenu()"><img src="/assets/images/arrow_up2.png"
                                                  style="margin:5px 0px 0px 0px;cursor:pointer;width:55px"></div>


</div>

<div class="menu pointer" align="center" onclick="openmenu()">
    <a href="#" class="bar" ><i class="fa fa-bars fa-2x" aria-hidden="true" ></i></a>

    <img src="/assets/images/592fabe4ab4951b364eb10eb.jpeg" class="logo-myeracademy2">
</div>


<div align="center">

<div id="ddddd" style="max-width:100%;min-height:70px;border-bottom:1px solid #000;"><img src="/Leader/assets/images/592fabe4ab4951b364eb10eb.jpeg" ></div>
        <div class="beforeTopHeader">
            <span   class="headLine">MYER LEADERS PORTAL</span>
                <h2  class="subtitle">OWN YOUR LEADERSHIP POTENTIAL</h2>
        </div>
        <form class="navbar-form" id="indexSearch" method="POST" name="indexSearch" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
       <!--This Page body search option code -->
        <div style="max-width:80%;">
            <div class="input-group add-on">
                <input class="form-control" placeholder="Search" name="homeSearch" id="homeSearch" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default" id="homeSearchbtn" type="button"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </div>  
    <!-- Body search option ending here -->
        </form>
<div >
     

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
                        <img  src="/Leader/assets/images/<?php echo $row['imageName'];?>" style="max-width:100%" >
                        <h2 class="subtitle"><?php echo $row['strapline']; ?></h2>
                        <h1 class="headLine2"><u style=" text-decoration: none;border-bottom: 1px solid #939393;"><?php echo $row['Title']; ?></u></h1>                                    
                        <p style="text-align:center;padding:5px;max-width:800px;font-family:ApercuLight;"><?php echo $row['Description']; ?></p></a>
                        <div style="margin:0 auto; border-bottom:1px dotted #000;max-width:80%;">

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

        <div align="center" style="padding:7px 8px;background:#f5f5f5">
            <div style="max-width:1600px;">
                <a href="/Leader/Leader.php?pg=LEADING SELF" >
                    <div  class="LeaderHome">
                        <img src="/Leader/assets/images/LEADINGSELF.jpg" style="max-width:100%;">
                    </div>
                </a> 
                <a href="/Leader/Leader.php?pg=LEADING OTHERS">
                    <div  class="LeaderHome">
                        <img src="/Leader/assets/images/LEADINGOTHERS.jpg" style="max-width:100%;">
                    </div>  
                </a> 
                <a href="/Leader/Leader.php?pg=WORKING ON THE BUSINES">
                    <div  class="LeaderHome">
                        <img src="/Leader/assets/images/WORKINGONTHEBUSINESS.jpg" style="max-width:100%;">
                    </div>
                </a> 
                <a href="/Leader/Leader.php?pg=WORKING IN THE BUSINESS">
                    <div  class="LeaderHome">
                        <img src="/Leader/assets/images/WORKINGINTHEBUSINESS.jpg" style="max-width:100%;">
                    </div>
                </a> 
                
            </div>

            </div>

           
        </div>
   
         <div id="footer">
            &copy 2016 www.myeracademy.com.au<br><br>
            <img src="/Leader/assets/images/arrow_up.png" style="margin:20px 0px" class="pointer" onclick="scrolltotop()">
        </div>  
<!-- 

    </div>
</div> -->


<script type="application/javascript" src="/assets/js/config.js"></script>
<script type="text/javascript" src="/Leader/assets/js/functions.js"></script>
<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script src="/assets/js/jquery.swipeshow.min.js"></script>
<script type="application/javascript" src="/assets/js/es6-promise-polyfill.js"></script>
<script type="application/javascript" src="/assets/js/axios.js"></script>
<script type="application/javascript" src="/assets/js/stafflogin.js"></script>

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
        document.location.href = '/index.html';
    }


    function logout() {
        loginCheck.logout();
        redirect();
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
