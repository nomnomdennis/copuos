<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Southern Asia"; /* <? echo $map_type ?> */
  	$map_string = "southern_asia"; /* <? echo $map_string ?> */
  	$map_id = "\"034\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>