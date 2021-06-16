<?php
$parameters = explode("/", $_SERVER['REQUEST_URI']);
//$current_domain = $parameters[1];
$current_page = $parameters[1];
$operator = $parameters[2];
$image_addr = $parameters[3];

$get_special_chars = urldecode("$operator");
	 	$title_decoded = str_replace("_", " ", "$get_special_chars");
		
		//$img_url_encoded = urlencode("$image_addr");
		  $img_url = str_replace("+", "/", "$image_addr");
		
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

 $return_domain = 'http://'.$_SERVER['HTTP_HOST'];



?>

<meta http-equiv=Refresh content="5; url=<?php echo $return_domain; ?>/operator.php"' />


<title><?php echo $title_decoded;?>-<?php echo $return_domain; ?></title>
</head>

<body style=animation-name:background-roller;background-size:cover;animation-duration:<?php echo $duration;?>s;background-image:url(https://<?php echo $img_url;?>); >
height:100%;width:100%;position:absolute;top:1%;left:1%;color:white;font-size:3em;text-decoration:none;text-shadow: 2px 2px #444;
<a style="text-shadow: 2px 2px #444;height:100%;width:100%;position:absolute;bottom:1%;right:1%;color:white;font-size:3em;text-decoration:none;" href="https://en.wikipedia.org/wiki/<?php echo $get_special_chars; ?>">
<b><?php echo $title_decoded; ?></b>
</a>
