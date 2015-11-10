<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "South America"; /* <? echo $map_type ?> */
  	$map_string = "south_america"; /* <? echo $map_string ?> */
  	$map_id = "\"005\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>