<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Micronesia"; /* <? echo $map_type ?> */
  	$map_string = "micronesia"; /* <? echo $map_string ?> */
  	$map_id = "\"057\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>