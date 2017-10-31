<?php
include_once ("db_connect.php");
if (isset($_POST))
	{

//taking page rating given by login user 
$sql_comment = "SELECT a.activityId,a.PageId,a.comment,a.commentedOn,u.NameReport FROM articalactivity as a,userdetails as u where a.UserId= u.EmployeeNo
and  a.PageId='". mysqli_real_escape_string($link,$_POST['PageID'])."'";
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
// Close connection
	mysqli_close($link);
	}

?>