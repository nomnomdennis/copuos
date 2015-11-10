<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Northern Africa"; /* <? echo $map_type ?> */
  	$map_string = "northern_africa"; /* <? echo $map_string ?> */
  	$map_id = "\"015\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>