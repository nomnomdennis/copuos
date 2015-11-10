<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Polynesia"; /* <? echo $map_type ?> */
  	$map_string = "polynesia"; /* <? echo $map_string ?> */
  	$map_id = "\"061\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>