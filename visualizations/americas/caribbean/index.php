<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Caribbean"; /* <? echo $map_type ?> */
  	$map_string = "caribbean"; /* <? echo $map_string ?> */
  	$map_id = "\"029\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>