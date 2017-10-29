<?php
include_once("db_connect.php");
mysqli_set_charset($link,"utf8");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    $search =$_POST["search"];
    $sql="SELECT pageId,Title,strapline,articalFolder,Description,Category,CapabilityTag,Keyword,SecondaryLeadership,imageName FROM leaderlearningmoment WHERE Title LIKE '%".$search."%' or strapline LIKE '%".$search."%' or Category LIKE'%".$search."%' or Filter LIKE '%".$search."%' or CapabilityTag LIKE '%".$search."%' or  SecondaryLeadership LIKE '%".$search."%' or Keyword LIKE '%".$search."%' or Description LIKE '%".$search."%' ORDER BY pageRanking";
    $result = mysqli_query($link,$sql);
    
   // die if SQL statement failed
   if (!$result) {
     http_response_code(404);
   }else{
    $main_arr=array();
    $main_arr["records"]=array();
   $rowCount = mysqli_num_rows($result);
   if($rowCount >0){
     $i=0;
     $html="";
    while($row_sub= mysqli_fetch_array($result)){
       // extract($row_sub);
       /*  $main_item=array(
        "pageId" => $pageId,
        "Title" =>strtoupper(html_entity_decode($Title)),
        "strapline"=>strtoupper(html_entity_decode($strapline)),
        "articalFolder"=>$articalFolder,
        "Description" =>html_entity_decode($Description),
        "Category"=>html_entity_decode($Category),
        "Keyword" =>html_entity_decode($Keyword),
        "imageName"=>$imageName,
        
        );  */
        if($i==2){
            break;
          }
        $html.= '<div class="main" id="main">'.
        '<a href="/Leader/content/'.$row_sub['articalFolder'].'/index.html#/id/'.$row_sub['pageId'].'" style="text-decoration: none; color:#000;"> '.
        '<img  src="/Leader/assets/images/'. $row_sub['imageName']. '" style="max-width:100%" >'.
        '<h2 class="subtitle">'.$row_sub['strapline'].'</h2>'.
        '<h1 class="headLine2"style="text-decoration: underline;">'.$row_sub['Title'].'</h1>'.                                    
        '<p style="text-align:center;padding:5px;font-family:ApercuLight;">'.$row_sub['Description']. '</p></a>'.
        '<div style="margin:0 auto; border-bottom:1px dotted #000;max-width:80%;">'.
       '<span class="fa-stack fa-2x">'.
           '<i class="fa fa-eye fa-stack-2x" aria-hidden="true"></i>'.
            '<strong class="fa-stack-1x fa-stack-text file-text">16</strong>'.
       '</span>'.
        '<span class="fa-stack fa-2x">'.
            '<i class="fa fa fa-heart fa-stack-2x"></i>'.
            '<strong class="fa-stack-1x fa-stack-text file-text">16</strong>'.
        '</span>'.
        '<span class="fa-stack fa-2x">'.
            '<i class="fa fa-comment fa-stack-2x"></i>'.
            '<strong class="fa-stack-1x fa-stack-text file-text">16</strong>'.
        '</span>'.
   '</div>';
 
$i++;

       // print_r($row_sub);
    //   $main_arr[]= json_encode($row_sub);
     //  array_push($main_arr["records"], json_encode($row_sub));
        
      }
  if($i==2){
  
    $html .='<div >'.
    '<a href="/Leader/searchResult.php?sh='.$search.'" class="button_cust"  target="_self" >'.  
    'CONTINUE READING SEARCH RESULT </a></div>';
  }
            echo $html;
      //echo json_encode($main_arr);
    }else{
      echo json_encode(false);
    }
      
    }
    
  }

?>