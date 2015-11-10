<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "South-Eastern Asia"; /* <? echo $map_type ?> */
  	$map_string = "se_asia"; /* <? echo $map_string ?> */
  	$map_id = "\"035\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>