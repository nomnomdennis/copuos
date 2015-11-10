<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Central Asia"; /* <? echo $map_type ?> */
  	$map_string = "central_asia"; /* <? echo $map_string ?> */
  	$map_id = "\"143\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>