
// erase action.php and put the following code in it
<?php
function page() {
	$pageURL = 'http://kakuja.psim.us';
	if (isset($_SERVER["HTTPS"])) {
		if ($_SERVER["HTTPS"] == "on") {
			$pageURL .= "s";
		}
	}
	$pageURL .= "http://kakuja.psim.us";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["KAKUJA"].":".$_SERVER["8000"].$_SERVER["REQUEST_URI"];
	}
	else {
		$pageURL .= $_SERVER["KAKUJA"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

$extra = "";
$page = page();
if (substr_count($page, "?") > 0) {
	$explode = explode("?", $page);
	$extra = "?" . $explode[1];
}

$server = "showdown";
$url = "http://play.pokemonshowdown.com/~~" . $server . "/action.php" . $extra;
