<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	require "$root/header.php";
?>

<main class="container">

<h3>International Treaties</h3>
<div class="divider"></div>
<p>There are five international treaties that are overseen by the United Nation's Committee on the Peaceful Uses of Outer Space. The committee is responsible for the implementation of these five international agreements.</p>
<div class="section center">
<div class="row">
  <div class="col s4">
	  <div class="card white hoverable">
	    <div class="card-content">
	      <span class="card-title grey-text text-darken-4">Outer Space Treaty</span>
	      <ul class="collection">
		      	<li class="collection-item">Adopted: 19 December 1966 </li>
		      	<li class="collection-item">Signed: 27 January 1967</li>
		      	<li class="collection-item">Ratified: 10 October 1967</li>
		    </ul>
	    </div>
	    <div class="card-action">
	      <a href="ost/"class="waves-effect white waves btn grey-text">Status</a>
	    </div>
	  </div>
  </div>
  <div class="col s4">
	  <div class="card white hoverable">
	    <div class="card-content">
	      <span class="card-title grey-text text-darken-4">Rescue Agreement</span>
	      <ul class="collection">
	      		<li class="collection-item">Adopted: 19 December 1967</li>
		      	<li class="collection-item">Signed: 22 April 1968</li>
		      	<li class="collection-item">Ratified: 3 December 1968</li>
		    </ul>
	    </div>
	    <div class="card-action">
	      <a href="arra/"class="waves-effect white waves btn grey-text">Status</a>
	    </div>
	  </div>
  </div>
  <div class="col s4">
	  <div class="card white hoverable">
	    <div class="card-content">
	      <span class="card-title grey-text text-darken-4">Liability Convention</span>
	      <ul class="collection">
	      		<li class="collection-item">Adopted: 29 November 1971 </li>
		      	<li class="collection-item">Signed: 29 March 1972</li>
		      	<li class="collection-item">Ratified: 1 September 1972</li>
		    </ul>
	    </div>
	    <div class="card-action">
	      <a href="liab/"class="waves-effect white waves btn grey-text">Status</a>
	    </div>
	  </div>
  </div>
</div>

<div class="row">
  <div class="col s5 offset-s1">
	  <div class="card white hoverable">
	    <div class="card-content">
	      <span class="card-title grey-text text-darken-4">Registration Convention</span>
	      <ul class="collection">
	      		<li class="collection-item">Adopted: 12 November 1974  </li>
		      	<li class="collection-item">Signed: 14 January 1975</li>
		      	<li class="collection-item">Ratified: 15 September 1976</li>
		    </ul>
	    </div>
	    <div class="card-action">
	      <a href="reg/"class="waves-effect white waves btn grey-text">Status</a>
	    </div>
	  </div>
  </div>

  <div class="col s5">
	  <div class="card white hoverable">
	    <div class="card-content">
	      <span class="card-title grey-text text-darken-4">Moon Treaty</span>
	      <ul class="collection">
	      		<li class="collection-item">Adopted: 5 December 1979 </li>
		      	<li class="collection-item">Signed: 18 December 1979</li>
		      	<li class="collection-item">Ratified: 11 July 1984</li>
		    </ul>
	    </div>
	    <div class="card-action">
	      <a href="moon/"class="waves-effect white waves btn grey-text">Status</a>
	    </div>
	  </div>
  </div>  
</div>
</div>
</main>

<?
  	require "$root/footer.php";
?>