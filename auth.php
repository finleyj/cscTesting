<?php
//session_start();

$conn=null;
$coll=null;

//$userid="joe";
//$password="pass";

$userid=$_POST["userid"];
$password=$_POST['password'];

if ($conn=new MongoClient("ds039960.mongolab.com:39960/csc400"))
{
	echo "I'm connected to MongoLab :)<br>";
	$coll=$conn->database->collectionName;
	if (empty($userid)||empty($password))
	{
		function goback()
		{
			header("Location:{$_SERVER['HTTP_REFERER']}");
			exit;
		}
		goback();
	//if(db.auth($userid,$password))
	// 	{
	// 		$_SESSION['logged']=true;
	// 		$_SESSION['username']=$userid;
	// 		$_SESSION['password']=$password;
	// 		echo "Login worked";
	// 		exit();
	// 	}
	}
	//if ($conn->users->find())
	//{
	//	echo ("You are logged in as ".$userid);
	//}
	else
	{
		echo ("I've got the User ID and Password :)");
	}
}

else
{
	echo "I'm unable to connect to MongoLab :(";
}
?>