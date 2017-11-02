<?php
include_once ("db_connect.php");
if (isset($_POST))
	{
if($_POST['fl']=="comment"){
//taking page rating given by login user 
    $sql_comment = "SELECT a.activityId,a.PageId,a.comment,a.commentedOn,u.NameReport FROM articalactivity as a,userdetails as u where a.UserId= u.EmployeeNo
    and  a.PageId='". mysqli_real_escape_string($link,$_POST['PageID'])."' order by a.commentedOn desc";
    $result_comment= mysqli_query($link,$sql_comment);
    $html='<ul id="comments-list" class="comments-list">';
    if (!$result_comment) {
        http_response_code(404);
        die(mysqli_error());
    }else{
        
        while ($data = mysqli_fetch_array($result_comment, MYSQL_ASSOC)) {
        $html.= '<li> <div class="comment-main-level" id="comment_551">'.
        '<div class="comment-avatar">'.
        '<img src="/Leader/assets/images/avatar_2x.png" alt=""></div>'.
        '<div class="comment-box">'.
        '<div class="comment-head">'.
        '<h6 class="comment-name">'.$data['NameReport'].'</h6> '.
        ' </div>'.
        ' <div class="comment-content">'.$data['comment'].'</div>'.
            '<div class="comment-head"> <i class="fa fa-heart"></i>&nbsp;8 </div> <div class="comment-head">'. 
            '<div class="comment-date">'.$data['commentedOn'].'</div>'.
            ' <a href="#" class="comment-like" id="like_'.$data['activityId'].'">LIKE</a>'.
            '</div> </div> '.
            '</div> '.
            '</li> <hr class="dotted_line" /> <li>';

        }	
        
    }
    $html.='</ul>';

    echo $html;
}
if($_POST['fl']=='like'){
    $html="";
    //getting total number of page view
    $getViewquery="SELECT count(pageId) as pgView FROM usertracking WHERE pageId='". mysqli_real_escape_string($link,$_POST['PageID'])."'";
    $resultview= mysqli_query($link,$getViewquery);
    if (!$resultview) {
        http_response_code(404);
        die(mysqli_error());
    }else{
        
        $rowView = mysqli_fetch_assoc($resultview);
        $html.='<i class="fa fa-fw fa-eye faView"></i><span class="faViewText" id="noViews">'.$rowView['pgView'].'</span>';
        
    }
    //Getting total number of like
    $getLikequery="SELECT count(pageLike)as pgLike FROM articalactivity WHERE pageLike !='' and PageId='". mysqli_real_escape_string($link,$_POST['PageID'])."'";
    $resultLike= mysqli_query($link,$getLikequery);
    if (!$resultLike) {
        http_response_code(404);
        die(mysqli_error());
    }else{
        
        $rowView = mysqli_fetch_assoc($resultLike);
        $html.='    <i class="fa fa-fw fa-heart faView"></i><span class="faViewText" id="noLikes">'.$rowView['pgLike'].'</span>';
        
    }

    //getting page tatal page comment
    $getCommentQuery="SELECT count(comment) as comment FROM articalactivity WHERE comment !='' and pageId='". mysqli_real_escape_string($link,$_POST['PageID'])."'";
    $resultComment= mysqli_query($link,$getCommentQuery);
    if (!$resultComment) {
        http_response_code(404);
        die(mysqli_error());
    }else{
        
        $rowView = mysqli_fetch_assoc($resultComment);
        $html.='<i class="fa fa-fw fa-comment faView"></i><span class="faViewText" id="noComments">'.$rowView['comment'].'</span>';
        
    }
  echo $html;
    
}
if ($_POST['fl'] == 'insetCmt')
{
        $query ="SELECT * from articalactivity where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['Id']) . "'";    
        $result_cmt = mysqli_query($link,$query);
        $count  =mysqli_num_rows($result_cmt);
        $updateQuery="UPDATE articalactivity SET comment='" . mysqli_real_escape_string($link, $_POST['cmt']) . "',commentedOn=now()  where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['Id']) . "'";
        $insertQuery="INSERT INTO articalactivity (PageId,UserId,pagelike,rating,comment,commentedOn) VALUES ('" . mysqli_real_escape_string($link, $_POST['PageID']) . "','" . mysqli_real_escape_string($link, $_POST['Id']) . "','','','" . mysqli_real_escape_string($link, $_POST['cmt']) . "',now())";
        if ( $count > 0 ? mysqli_query($link,$updateQuery) : mysqli_query($link, $insertQuery));
}

if($_POST['fl']=="pgLike" ){
print_r($_POST);
    $query ="SELECT * from articalactivity where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['Id']) . "'";
    
    $result = mysqli_query($link,$query);
        
        if (mysqli_num_rows($result) > 0 ? 
        mysqli_query($link, "UPDATE articalactivity SET pagelike='like'  where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['Id']) . "'") 
        : 
        mysqli_query($link, "INSERT INTO articalactivity (PageId,UserId,pagelike,rating,comment,commentedOn) VALUES ('" . mysqli_real_escape_string($link, $_POST['PageID']) . "','" . mysqli_real_escape_string($link, $_POST['Id']) . "','like','','','') "));
        }    
// Close connection
	mysqli_close($link);
	}

?>