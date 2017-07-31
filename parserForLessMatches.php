<?php  
include_once ('curl_query.php');
include_once ('simple_html_dom.php');
$html = curl_get('https://dota2.ru/esport/matches/');
$dom = str_get_html($html);

$c = $dom->find('.esport-match-future-list');
  $i=0;
foreach($c as $v)
{
    echo $v;
    break;
}

?>
<html>
	<head>
		<script src='http://code.jquery.com/jquery-latest.js'></script>
		<script src="https://code.angularjs.org/1.3.9/angular.min.js"></script>
		<script src="https://code.angularjs.org/1.3.9/angular-route.js"></script>

	</head>
	<body>
		
	</body>
</html>