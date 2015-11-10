<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Eartern Asia"; /* <? echo $map_type ?> */
  	$map_string = "eastern_asia"; /* <? echo $map_string ?> */
  	$map_id = "\"030\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>