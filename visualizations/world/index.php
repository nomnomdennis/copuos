<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "World"; /* <? echo $map_type ?> */
  	$map_string = "world"; /* <? echo $map_string ?> */
  	$map_id = "\"world\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>