<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Oceania"; /* <? echo $map_type ?> */
  	$map_string = "oceania"; /* <? echo $map_string ?> */
  	$map_id = "\"009\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>