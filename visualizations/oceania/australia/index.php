<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Australia"; /* <? echo $map_type ?> */
  	$map_string = "australia"; /* <? echo $map_string ?> */
  	$map_id = "\"053\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>