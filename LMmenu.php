<?php 
$html="";
$html.='
<div id="myeracademywrap">
<div class="menustatus"></div>

<div id="mainmenu" align="left" style="opacity:0">
    
    <div class="scrollcontainer scrollheight2">
        <div class="scrollpanel">
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
            <div id="mainmenuinner" style="max-width:1200px;width:100%">           
';
include_once("db_connect.php");
$sql = "SELECT Id as mainId,UPPER(CategorieDescription) as CategorieDescription From maincategories WHERE Id IN (SELECT mainCatId FROM subMainCategory)
ORDER BY Id ";
// excecute SQL statement
$result = mysqli_query($link,$sql);
// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error());
}else{
 // User array
 $sub_item=array();
$third_item=array();
while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
  extract($row);
  $html.='<a href="#" class="menu-container-main"><div class="btn-menu2">'.$CategorieDescription.'</div></a>';
       $sql_sub = "SELECT smId,UPPER(smDescription) AS subDescription,mainCatId FROM  subMainCategory WHERE  mainCatId=".$mainId;
      $result_sub= mysqli_query($link,$sql_sub);
      $count = mysqli_num_rows($result_sub); 
       if($count){
        while($sub_item= mysqli_fetch_array($result_sub, MYSQLI_ASSOC)){
            
           $third= "SELECT thLid, thlDescription FROM thirdlevelgroup WHERE mainCatId='".$sub_item['mainCatId']."' AND subCategorieId='".$sub_item['smId']."'";
          $thirdResult = mysqli_query($link,$third);
          $thcount = mysqli_num_rows($thirdResult);
          if($thcount){
           $html .= '<a href="#" class="menu-container"><div class="btn-menu2">' . $sub_item["subDescription"] . '</div></a><div class="menu-child">';
            
            while($third_item= mysqli_fetch_array($thirdResult,MYSQLI_ASSOC)){
              $html .= '<a href="#" class="lnkmenu"><div class="btn-menu2' . ' btn-menu2-' . $third_item['thLid'] . '">' .$third_item["thlDescription"] . '</div></a>';
              
             } 
             $html.='</div>';
          }
           else if(!$thcount){ 
            $html .= '<a  class="menu-item" href="/Leader/Leader.php?pg='. $sub_item["subDescription"] .'" class="lnkmenu"><div class="btn-menu2">'. $sub_item["subDescription"] .'</div></a>';
            
          }
         
        
        }
   
      } 
     
  

  }
  $html.='</div>
  </div>
</div>
<div style="width:100%;max-width:1200px;height:35px;margin-top:10px;display:block;background:rgba(156,156,156,0);cursor:pointer"
   align="center" onclick="openmenu()">
  <img src="/assets/images/arrow_up2.png" style="margin:5px 0px 0px 0px;cursor:pointer;width:55px">
</div>
</div>
<div class="menu pointer" align="center" onclick="openmenu()">                
  <a href="#" class="bar" ><i class="fa fa-bars fa-2x" aria-hidden="true" ></i></a>

  <img src="/assets/images/592fabe4ab4951b364eb10eb.jpeg" class="logo-myeracademy2">
</div>

</div>
';
  echo $html;
  // close mysql connection
  mysqli_close($link);
  }
  ?>