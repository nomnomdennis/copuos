<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Northern America"; /* <? echo $map_type ?> */
  	$map_string = "northern_america"; /* <? echo $map_string ?> */
  	$map_id = "\"021\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>