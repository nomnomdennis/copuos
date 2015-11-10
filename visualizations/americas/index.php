<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Americas"; /* <? echo $map_type ?> */
  	$map_string = "americas"; /* <? echo $map_string ?> */
  	$map_id = "\"019\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>