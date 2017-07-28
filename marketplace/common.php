<?php
	require_once("./duoapi/userproxy.php");


	class Common {
        
        public static function respondSuccess($msg,$res = null){
			header( "Content-type:  application/json" );
            $res = json_encode($res);
            echo '{"Success":true, "Message":"'. $msg .'","Response":'.$res.'}';
		}

		public static function respondFail($msg,$res = null){
			header ( "Content-type:  application/json");
            if(is_array($res))
                $res = json_encode($res);
            else
                $res = json_encode((array)$res);
			echo '{"Success":false, "Message":"'. $msg .'","Response":'.$res.'}';
		}
        
		public static function checkAccess($token){
			return (new AuthProxy())->GetAccess($token);
		}

	}
?>