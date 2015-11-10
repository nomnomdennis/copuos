<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Western Asia"; /* <? echo $map_type ?> */
  	$map_string = "western_asia"; /* <? echo $map_string ?> */
  	$map_id = "\"145\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>