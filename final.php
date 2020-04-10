<!DOCTYPE html>
<html lang="en">
<?php require '../html_head.php'; ?>
<body onload="loadDoc()">
    <div class="container">
    		<div class="row">
    			<h3>Top 10 COVID-19 Countries</h3>
    		</div>
			<div class="row">
				<table class="table table-striped table-bordered">
		              <thead>
		                <tr>
		                  <th>Country Name</th>
		                  <th>Number of Cases</th>
		                </tr>
		              </thead>
		              <tbody>
						<tr>
							<td id=country0> </td>
							<td id=total0> </td>
						</tr>
						<tr>
							<td id=country1> </td>
							<td id=total1> </td>
						</tr>
						<tr>
							<td id=country2> </td>
							<td id=total2> </td>
						</tr>
						<tr>
							<td id=country3> </td>
							<td id=total3> </td>
						</tr>
						<tr>
							<td id=country4> </td>
							<td id=total4> </td>
						</tr>
						<tr>
							<td id=country5> </td>
							<td id=total5> </td>
						</tr>
						<tr>
							<td id=country6> </td>
							<td id=total6> </td>
						</tr>
						<tr>
							<td id=country7> </td>
							<td id=total7> </td>
						</tr>
						<tr>
							<td id=country8> </td>
							<td id=total8> </td>
						</tr>
						<tr>
							<td id=country9> </td>
							<td id=total9> </td>
						</tr>
				      </tbody>
	            </table>
    	</div>
    </div>
<script>
	var array;
	function loadDoc() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			array = JSON.parse(this.responseText).Countries;
			array.sort(compare);
			document.getElementById("country0").innerHTML = array[0].Country;
			document.getElementById("country1").innerHTML = array[1].Country;
			document.getElementById("country2").innerHTML = array[2].Country;
			document.getElementById("country3").innerHTML = array[3].Country;
			document.getElementById("country4").innerHTML = array[4].Country;
			document.getElementById("country5").innerHTML = array[5].Country;
			document.getElementById("country6").innerHTML = array[6].Country;
			document.getElementById("country7").innerHTML = array[7].Country;
			document.getElementById("country8").innerHTML = array[8].Country;
			document.getElementById("country9").innerHTML = array[9].Country;
			document.getElementById("total0").innerHTML = array[0].TotalConfirmed;
			document.getElementById("total1").innerHTML = array[1].TotalConfirmed;
			document.getElementById("total2").innerHTML = array[2].TotalConfirmed;
			document.getElementById("total3").innerHTML = array[3].TotalConfirmed;
			document.getElementById("total4").innerHTML = array[4].TotalConfirmed;
			document.getElementById("total5").innerHTML = array[5].TotalConfirmed;
			document.getElementById("total6").innerHTML = array[6].TotalConfirmed;
			document.getElementById("total7").innerHTML = array[7].TotalConfirmed;
			document.getElementById("total8").innerHTML = array[8].TotalConfirmed;
			document.getElementById("total9").innerHTML = array[9].TotalConfirmed;
		 
		}
	  };
	  var api = "https://api.covid19api.com/summary";
	  xhttp.open("GET", api, true);
	  xhttp.send();
	}
	
	function compare(a, b) {
	  var aVal = a.TotalConfirmed;
	  var bVal = b.TotalConfirmed;

	  var comparison = 0;
	  if (aVal > bVal) {
		comparison = -1;
	  } else if (aVal < bVal) {
		comparison = 1;
	  }
	  return comparison;
	}
	</script>
  </body>
</html>
