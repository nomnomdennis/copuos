<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Eastern Africa"; /* <? echo $map_type ?> */
  	$map_string = "eastern_africa"; /* <? echo $map_string ?> */
  	$map_id = "\"014\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>