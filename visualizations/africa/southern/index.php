<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Southern Africa"; /* <? echo $map_type ?> */
  	$map_string = "southern_africa"; /* <? echo $map_string ?> */
  	$map_id = "\"018\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>