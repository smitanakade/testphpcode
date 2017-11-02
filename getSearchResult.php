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
       
        if($i==3){
            break;
          }
        $html.= '<div class="main" id="main">'.
        '<a href="/Leader/content/'.$row_sub['articalFolder'].'/index.html#/id/'.$row_sub['pageId'].'" style="text-decoration: none; color:#000;"> '.
        '<img  src="/Leader/assets/images/'. $row_sub['imageName']. '"  class="lmimage" >'.
        '<h2 class="subtitle">'.$row_sub['strapline'].'</h2>'.
        '<h1 class="headLine2"style="text-decoration: underline;">'.$row_sub['Title'].'</h1>'.                                    
        '<p style="text-align:center;padding:5px;font-family:ApercuLight;">'.$row_sub['Description']. '</p></a>'.
        '<div style="border-bottom:1px dotted #000;">'.
        '<div class="links-item-container" align="center">';
        
              $getCommentQuery="SELECT count(comment) as comment FROM articalactivity WHERE comment !='' and pageId='".$row_sub['pageId']."'";
              $resultComent = mysqli_query($link, $getCommentQuery);
              $rowCmt = mysqli_fetch_assoc($resultComent);
      
            $html.='<i class="fa fa-fw fa-eye faView"></i><span class="faViewText" id="noViews">'. $rowCmt['comment'].'</span>';
              $getLikequery="SELECT count(pageLike)as pgLike FROM articalactivity WHERE pageLike !='' and PageId='".$row_sub['pageId']."'";
              $resultlike = mysqli_query($link, $getLikequery);
              $rowLike = mysqli_fetch_assoc($resultlike);
        $html.='<i class="fa fa-fw fa-heart faView"></i><span class="faViewText" id="noLikes">'. $rowLike['pgLike'].'</span>';
        
            $getViewquery="SELECT count(pageId) as pgView FROM usertracking WHERE pageId='".$row_sub['pageId']."'";
            $resultView = mysqli_query($link, $getViewquery);
            $rowView = mysqli_fetch_assoc($resultView);
      
            $html.='<i class="fa fa-fw fa-comment faView"></i><span class="faViewText" id="noComments">'.$rowView['pgView'].'</span>'.
        '</div><br/>'.        
        '<a  href="/Leader/content/'.$row_sub['articalFolder'].'/index.html#/id/'. $row_sub['pageId'].'" target="_self" class="button_cust" style="margin-bottom:20px;"> CONTINUE READING </a>'. 
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