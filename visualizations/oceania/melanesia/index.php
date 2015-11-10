<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Melanesia"; /* <? echo $map_type ?> */
  	$map_string = "melansia"; /* <? echo $map_string ?> */
  	$map_id = "\"054\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>