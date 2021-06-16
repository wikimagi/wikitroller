<?php
/*  Access Wikipedia API && Redirect to New URL with operator */

$endPoint = "https://en.wikipedia.org/w/api.php";
$params1 = [ "action" => "query",
    "format" => "json",
    "list" => "random",
    "rnnamespace" => "0",
    "rnlimit" => "45"
];

$random_url = $endPoint . "?" . http_build_query( $params1 );

$ch = curl_init( $random_url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

$result = json_decode( $output, true );
//var_dump( $result );


foreach( $result["query"]["random"] as $k => $v ) {
			$rand_art_title=$v["title"];
				$title_wikified = str_replace(" ", "_", "$rand_art_title");
			 	$url_encoded = urlencode("$title_wikify");
				//$urlencoded = urlencode($rand_art_title);
				//$title_decoded = str_replace(" ", "_", "$rand_art_title");
				//$title_decoded = str_replace(".", "%2E", "$rand_art_title");
   			      $url = "https://en.wikipedia.org/wiki/$title_wikified";
			
      
      
      $curlimage = exec("curl $url | grep og:image");
			$trim_img_front = substr("$curlimage", 43);
			$img_src = rtrim($trim_img_front, '"/>');
						//$random_url = $endPoint . "?" . http_build_query( $params1 );
						

		if($img_src){
					
					//$img_url_encoded = urlencode("$img_src");
					$img_url = str_replace("/", "+", "$img_src");

		$timing_var = $_GET["t"];



		?>
					



<meta http-equiv=Refresh content="0; url=../?t=<? print $timing_var; ?>&/<?php print "$title_wikified"; ?>/<?php print "$img_url"; ?>" />
			<?php
					die();	} } 
			
?>
