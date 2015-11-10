<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Eastern Europe"; /* <? echo $map_type ?> */
  	$map_string = "eastern_europe"; /* <? echo $map_string ?> */
  	$map_id = "\"151\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>