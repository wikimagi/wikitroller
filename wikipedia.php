<?
$parameters = explode("/", $_SERVER['REQUEST_URI']);
$current_url = $parameters[1];
$operator = $parameters[2];
$image_addr = $parameters[3];

$get_special_chars = urldecode("$operator");
	 	$title_decoded = str_replace("_", " ", "$get_special_chars");
		
		//$img_url_encoded = urlencode("$image_addr");
		  $img_url = str_replace("support_wikipedia", "/", "$image_addr");
		
/* css animate background  */

print "<style>";
	$animation_vars = array("center top","center center","center bottom","center left","center right");

		shuffle($animation_vars);
		
    $config1 = $animation_vars[1];
	
		$config4 = $animation_vars[4];
    
		print "@-webkit-keyframes background-roller {0% {background-position:$config1;} 100% {background-position:$config4;}}";

			print "</style>";	
			
    $duration = rand(34, 64);
		
		$url = "https://en.wikipedia.org/wiki/$operator";
		//$img_url = str_replace("_", "/", "$image_addr");
?>

<meta http-equiv=Refresh content='5; url=https://bigview.net/wikipedia-api.php' />


<title><? echo $title_decoded;?></title>
</head>

<body style=animation-name:background-roller;background-size:cover;animation-duration:<?php echo $duration;?>s;background-image:url(https://<? echo $img_url;?>); >

<a style="" href="https://en.wikipedia.org/wiki/<? echo $get_special_chars; ?>">
<b><? echo $title_decoded; ?></b>
</a>
