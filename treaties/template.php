<script type="text/javascript" src="https://inorganik.github.io/countUp.js/dist/countUp.js"></script>
<script type="text/javascript" src="http://www.chartjs.org/assets/Chart.js"></script>

<main class="container">
<h2 class="center"><? echo $treaty ?></h2>
<div class="divider"></div>
<div class="section">
<div class="row">
      <div class="col s6 center-align">
      	<canvas id="chart" style="width: 100% !important; max-width: 800px; height: auto !important;"></canvas>
      </div>
      <div class="col s6 center">
      	<ul class="collection">
	      <li class="collection-item light-blue-text text-darken-1"><h5>Parties: <span id="ratified">0</span></h5></li>
	      <li class="collection-item amber-text text-darken-4"><h5>Signatories: <span id="signed">0</span></h5></li>
	      <li class="collection-item red-text text-lighten-1"><h5>No Action: <span id="nothing">0</span></h5></li>
	    </ul>
      </div>
</div>  
<div class="divider"></div>
<div class="section">
      <? /*
      	if ($treaty == "Outer Space Treaty") {
      		require "$root/treaties/ost/template.php";
      	} elseif ($treaty == "Rescue Agreement") {
      		require "$root/treaties/arra/template.php";
      	} elseif ($treaty == "Liability Agreement") {
      		require "$root/treaties/liab/template.php";
      	} elseif ($treaty == "Registration Convention") {
      		require "$root/treaties/reg/template.php";
      	} elseif ($treaty == "Moon Treaty") {
      		require "$root/treaties/moon/template.php";
      	};
      */?>
</div> 

</main>

<script type="text/javascript">
	var chart_data = [{
	    value: <? echo $num_ratified ?>,
	    label: "Parties",
	    color: "#039be5" /* light-blue darken-1 */
	}, {
	    value: <? echo $num_signed ?>,
	    label: "Signatories",
	    color: "#ff6f00" /* yellow darken-3*/
	}, {
	    value: <? echo $num_nothing ?>,
	    label: "No Action",
	    color: "#ef5350" /*  red lighten-1 */
	}]

	var options_c = {
	    animation: true,
	    responsive: false
	};
	var c = $('#chart');
	var ct = c.get(0).getContext('2d');
	var ctx = document.getElementById("chart").getContext("2d");

	myNewChart = new Chart(ct).Doughnut(chart_data, options_c);

	// for the numbers
	var options_t = {
		useEasing : true, 
		useGrouping : true, 
		separator : ',', 
		decimal : '.', 
		prefix : '', 
		suffix : '' 
	};
	var ratified = new CountUp("ratified", 193, <? echo $num_ratified ?>, 0, 2.5, options_t);
	var signed = new CountUp("signed", 193, <? echo $num_signed ?>, 0, 2.5, options_t);
	var nothing = new CountUp("nothing", 193, <? echo $num_nothing ?>, 0, 2.5, options_t);

	$( document ).ready(function() {
	    ratified.start();
	    signed.start();
	    nothing.start();
	});
</script>