<?php 
/* This is the php that gets and saves your app token from facebook, enter your appid and secret and
 * run this script in you browser and your app token will get saved to fb_app_token.php . Javascript will do all the actual building and data retrivel.
 * you can pass it ?debug=true if your having trouble
 *@author Lorenzo Gangi lorenzo@ironlasso.com
 *@copyright
 *@version 1.0
 */
 	

get_feed_data();
   
function get_feed_data(){ 
	    
	$app_id = "YOUR_APP_ID";
    $app_secret = "YOUR_APP_SECRET";
	$access_token = false;

	$debug = ( isset($_REQUEST['debug']) ? $_REQUEST['debug'] : false );
	if($debug=="false"){$debug = false;}
	
	$app_id = ( isset($_REQUEST['app_id']) ? $_REQUEST['app_id'] : $app_id );
	$app_secret = ( isset($_REQUEST['app_secret']) ? $_REQUEST['app_secret'] : $app_secret );
	
	//make sure the app Id and secret are set
	if (($app_id != 'YOUR_APP_ID' && $app_id != '')||( $app_secret != 'YOUR_APP_SECRET' && $app_secret != '')){
		
		$app_token_url = "https://graph.facebook.com/oauth/access_token?"."client_id=".$app_id
																		 ."&client_secret=".$app_secret 
																		 ."&grant_type=client_credentials";
																		 
		//DEBUG - check to see if https wrapper is available for php
		if($debug){
			echo $app_token_url."<br />";
			$w = stream_get_wrappers();
			echo 'https wrapper: ', in_array('https', $w) ? 'https wrapper is enabled <br />': 'https wrapper is not enabled. Try uncommenting ;extension=php_openssl.dll in your php.ini or contact your hosting provider or system administrator. <br />';
		
		}
	
		
		//get the app access token
		$response = file_get_contents($app_token_url);
		$params = null;
		parse_str($response, $params);
		$access_token = $params['access_token'];
		
		//save the app token to a file for later use
		$ourFileName = "fb_app_token.html";
		$fh = fopen($ourFileName, 'w') or die("Can't open app token file: app_token.php");
			//write it to a file in json
			$stringData = '{"appToken":"'.$access_token.'"}';
			fwrite($fh, $stringData);
		fclose($fh);
		
		
		//DEBUG dump the access token info
		if($debug){
			echo "App access token request url: ".$app_token_url."<br />";
			echo "Your app's access token is: ".$access_token."<br />";
		}
		else{
			echo $access_token;	
		}
		
		
		// get the app info for debuging
		if($debug){
			$graph_url = "https://graph.facebook.com/app?access_token=". $access_token;
			$app_details = json_decode(file_get_contents($graph_url), true);
			echo("------------------------------------------------");
			echo("<br />Here is the app graph url " . $graph_url. "<br />");
			echo("<br />Here is a link to the app " . $app_details['link']."<br />");
		}
	
	}//end appId / Secret check
	else{
		print "We have a problem. Your App Id or App Secret were not properly set. Please double check them and try again.";	
	}
}
?>