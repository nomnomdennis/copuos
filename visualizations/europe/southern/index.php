<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Southern Europe"; /* <? echo $map_type ?> */
  	$map_string = "southern_europe"; /* <? echo $map_string ?> */
  	$map_id = "\"039\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>