<?php
include_once ("db_connect.php");
if (isset($_POST))
	{
/*Taking total number of like for particular  page*/

$sql_like = "SELECT COUNT(pageLike) as pagelike FROM `articalactivity` WHERE pageLike like'%like%' and PageId='". mysqli_real_escape_string($link,$_POST['PageID'])."'";
$result_like = mysqli_query($link,$sql_like);
// die if SQL statement failed
if (!$result_like) {
	http_response_code(404);
	die(mysqli_error());
}else{
 // User array
	$main_arr=array();
	while ($row_like = mysqli_fetch_array($result_like, MYSQL_BOTH)) {
		extract($row_like);
			$main_item=array(
			"pagelike" => $pagelike,
			);
	}	
}
//taking page rating given by login user 
$sql_rating = "SELECT rating FROM `articalactivity` WHERE PageId='". mysqli_real_escape_string($link,$_POST['PageID'])."' and UserId='". mysqli_real_escape_string($link,$_POST['UserId'])."'";
$result_rating = mysqli_query($link,$sql_rating);
if (!$result_rating) {
	http_response_code(404);
	die(mysqli_error());
}else{
	while ($row_like = mysqli_fetch_array($result_rating, MYSQL_BOTH)) {
		$main_item["rating"]=$row_like["rating"];
	}	
}

	$result = mysqli_query($link, "SELECT * from articalactivity where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['UserId']) . "'");

	// Onload code and Read comments code
/* 
	if ($_POST['Flag'] == 'page')
		{

		$count = mysqli_num_rows($result);
		$data_arr = array();

		
		if ($count)
			{
			
	if (mysqli_num_rows($result) > 1 ? ''
		//mysqli_query($link, "UPDATE usertracking SET pagelike='" . mysqli_real_escape_string($link, $_POST['PageLike']) . "'  where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['UserId']) . "'") 
		: 
		mysqli_query($link, "INSERT INTO usertracking (UserId,pageId,pageName,InTime,OutTime,PageCategory) values('" . mysqli_real_escape_string($link, $_POST['UserId']) . "','pageName','" . mysqli_real_escape_string($link, $_POST['PageID']) . "',now(),'','PageCategory')" ));
	
	
			while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{
				array_push($data_arr, $item);
				}

			echo json_encode($data_arr);
			}
		}
 */
	// for like comments button click

	if ($_POST['Flag'] == 'like')
		{
		if (mysqli_num_rows($result) > 0 ? 
		mysqli_query($link, "UPDATE articalactivity SET pagelike='" . mysqli_real_escape_string($link, $_POST['PageLike']) . "'  where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['UserId']) . "'") 
		: 
		mysqli_query($link, "INSERT INTO articalactivity (PageId,UserId,pagelike,rating,comment) VALUES ('" . mysqli_real_escape_string($link, $_POST['PageID']) . "','" . mysqli_real_escape_string($link, $_POST['UserId']) . "','" . mysqli_real_escape_string($link, $_POST['PageLike']) . "','','') "));
		}

	// for rating button click

	if ($_POST['Flag'] == 'rating')
		{
		if (mysqli_num_rows($result) > 0 ? 
		mysqli_query($link, "UPDATE articalactivity SET rating='" . mysqli_real_escape_string($link, $_POST['Rating']) . "'  where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['UserId']) . "'") 
		: 
		mysqli_query($link, "INSERT INTO articalactivity (PageId,UserId,pagelike,rating,comment) VALUES ('" . mysqli_real_escape_string($link, $_POST['PageID']) . "','" . mysqli_real_escape_string($link, $_POST['UserId']) . "','','" . mysqli_real_escape_string($link, $_POST['Rating']) . "','test')"));
		}
	 if($_POST['Flag']== 'read'){
		 $sql_Read="SELECT u.NameReport, a.comment FROM articalactivity as a INNER JOIN userdetails as u on u.EmployeeNo= a.UserId WHERE a.PageId='". mysqli_real_escape_string($link,$_POST['PageID'])."'";
	
		 $result_read=mysqli_query($link,$sql_Read);
		$read=array();
		 while ($row_read = mysqli_fetch_array($result_read, MYSQLI_ASSOC)) {
			array_push($read,$row_read);
		}
		$main_item["read"]=	$read;
	} 

	// for write comments button click

	if ($_POST['Flag'] == 'comments')
		{
		if (mysqli_num_rows($result) > 0 ? 
		mysqli_query($link, "UPDATE articalactivity SET comment='" . mysqli_real_escape_string($link, $_POST['Comments']) . "'  where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['UserId']) . "'") 
		: 
		mysqli_query($link, "INSERT INTO articalactivity (PageId,UserId,pagelike,rating,comment) VALUES ('" . mysqli_real_escape_string($link, $_POST['PageID']) . "','" . mysqli_real_escape_string($link, $_POST['UserId']) . "','','','" . mysqli_real_escape_string($link, $_POST['Comments']) . "')"));
		}

		if ($_POST['Flag'] == 'unload')
		{
		$test="UPDATE usertracking SET OutTime='" . mysqli_real_escape_string($link, $_POST['timeSpent']) . "'  where pageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['UserId']) . "'";
	//	mysqli_query($link, "UPDATE usertracking SET OutTime='" . mysqli_real_escape_string($link, $_POST['timeSpent']) . "'  where PageId ='" . mysqli_real_escape_string($link, $_POST['PageID']) . "' and UserId='" . mysqli_real_escape_string($link, $_POST['UserId']) . "'") 
		
		}


		echo json_encode($main_item);		
// Close connection
	mysqli_close($link);
	}

?>