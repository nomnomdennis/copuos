<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Northern Europe"; /* <? echo $map_type ?> */
  	$map_string = "northern_europe"; /* <? echo $map_string ?> */
  	$map_id = "\"154\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>