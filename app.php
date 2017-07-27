<?php
//require_once ($_SERVER['DOCUMENT_ROOT'] . "include/config.php");
	class appcategories{
		public $id;
		public $categoryname;
		public $description;
	}
	class rating{
		public $appkey;
		public $userid;
		public $stars;
		public $title;
		public $description;
		public $imageurl;
		public $date;
		public $name;
	}
	class avgrating{
		public $appkey;
		public $rating;
	}
	class deletrating{
		public $appkey;
		public $userid;
	}
	
	class toprated{
		public $date;
		public $apps;
	}
	class topratingsdata{
		public $appkey;
		public $category;
		public $avgrating;
		public $one;
		public $two;
		public $three;
		public $four;
		public $five;
		public $app;
	}
	class AppMarketplaceService {
		private function test(){
		$req = Flight::request();

		switch ($req->method){
		case "POST":
$jStr=$req->getBody();
$aryUser=json_decode($jStr,true);
$strSIPUSER_1="";
for($i=0;$i<count($aryUser);$i++)
{
	if( array_keys($aryUser)[$i] != "username")
	{
	$strSIPUSER = array_keys($aryUser)[$i]." , ".$aryUser[array_keys($aryUser)[$i]];
		if( array_keys($aryUser)[$i] != "extension"){
	$strSIPUSER = "('".$aryUser['extension']."','".array_keys($aryUser)[$i]."','".$aryUser[array_keys($aryUser)[$i]]."')";
	$strSIPUSER_1=$strSIPUSER_1.",".$strSIPUSER;
		}
	}
	else
	{
	}
}
echo "\n";
$strSIPUSER_1=substr($strSIPUSER_1,1);
$str2="INSERT INTO `SIPUSER` (`extension`,`attribute`,`value`) VALUES ";
$str3=";";
print($str2.$strSIPUSER_1.$str3);
			echo "\n Create User \n ";
		break;
		case "GET":
			echo "Create User";
		break;
		case "PUT":
			echo " Update User";
		break;
		case "DELETE":
			echo " Delete User";
		break;
		default :
			echo "error";

		}
//		echo "\nHello from marketplace service V 1.0.1";
		}
		function __construct(){
			Flight::route("GET|POST|PUT|DELETE /test",function(){$this->test();});		
			//Flight::route("GET /", function(){$this->getAllApps();});
			header('Content-Type: application/json');
			header('Access-Control-Allow-Headers: Content-Type');
			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Allow-Methods: GET, POST');
		
		}
	}
?>

