<!DOCTYPE html>
<html>
<head>
	<title>Test 1</title>
</head>
<body>
	<ul>
		<li>
			<h4>1. Hvað er HTTP, hvað þýðir að HTTP sé stateless protocol, komdu með dæmi.</h4>

			<p>HTTP stendur fyrir "Hypertext transfer protocol" og er það sem leyfir samskipti milli eiganda og viðskiptavini. Að það sé stateless þýðir að um leið og notandi hættir á síðunni þá slitnar sambandið á milli þeirra.
		</li>
		<li>
			<h4>2. Hvað er status code og hvað þýða eftirfarandi status codes, komdu með dæmi fyrir hvern flokk?
			Notandinn getur sent beiðni til server og í staðinn svarar serverinn með status kóða og skilaboð.</h4>
				<ul>

					<li>a) 1xx: Informational Messages
						Serverinn getur sent "Expect:100-continue" skilaboð sem segir notandanum að halda áfram að senda restina af beiðninni eða hunsa ef hún hefur nú þegar verið send.</li>

					<li>b) 2xx: Successful
						Segir notandanum að beiðnin virkaði og er algengasta "200 OK"</li>
					<li>c) 3xx: Redirection
						Algengasta notkunin er til að senda notandann á annað URL til þess að sækja skrár/gögn</li>
					<li>d) 4xx: Client Error
						Notað þegar serverinn heldur að notandinn sé að klikka eitthvað með að skrifa vitlaust URL eða biðja um slæma beiðni.</li>
					<li>e) 5xx: Server Error
						Notða til að segja að serverinn mistókst beiðnina eða þegar serverinn er að klikka</li>
				</ul>
		</li>
		<li>
			<h4>3. Hverjar eru helstu nýjungar og breytingar með HTTP 2.0?</h4>
				
				<p>á háu stigi, HTTP/2:

				Notar binary í stað textual
				is fully multiplexed (ætla ekki að reyna þýða multiplexed), í stað pipeline sem bættist við í HTTP/1.1 
				getur notað eina TCP tengingu í stað margrar
				fljótari að loada síðum vegna header compressions</p>
		</li>
		<li>
				<h4>4. XML & JSON
					Pizza pöntun: crust type (original) toppings (cheese, pepperoni, garlic) status (cooking), customer (name, phone). Sýndu hvernig eftirfarandi pizza pöntun væri sett upp í:</h4>

						<p>XML:
							&lt;order><br>
							    &lt;crust>original&lt;/crust><br>
							    &lt;toppings><br>
							        &lt;topping>cheese&lt;/topping><br>
							        &lt;topping>pepperoni&lt;/topping><br>
							        &lt;topping>garlic&lt;/topping><br>
							    </toppings><br>
							    &lt;status>cooking&lt;/status><br>
							    &lt;customer><br>
							    	&lt;name>Brian&lt;/name><br>
							    	&lt;phone>573-111-1111&lt;/phone><br>
							    &lt;/customer><br>
							&lt;/order><br>
						<br><br>
						JSON:<br>
							{<br>
							  "crust": "original",<br>
							  "toppings": ["cheese", "pepperoni", "garlic"],<br>
							  "status": "cooking",<br>
							  "customer": {<br>
							    "name": "Brian",<br>
							    "phone": "573-111-1111"<br>
							  }<br>
							}</p>
		</li>
5. Parsing JSON, sjá eftirfarandi uppsetningar og format fyrir ákveðin gögn
<?php

	$events = [
	 "events" => [
	 ['location' => 'San Francisco, CA', 'date' => 'May 1', 'map' => 'img/map-ca.png'],
	 ['location' => 'Austin, TX', 'date' => 'May 15', 'map' => 'img/map-tx.png'],
	 ['location' => 'New York, NY', 'date' => 'May 30', 'map'=> 'img/map-ny.png']
	 ]
	];
	$jsonthing = json_encode($events);
?>
<pre><?php print_r($jsonthing); ?></pre>
<br>
<pre><?php print_r(json_decode($jsonthing)); ?> </pre>
Eins og sést hér á ofan þá er þetta allt öðru vísi uppsetning sem á sér stað þegar þú breytir í JSON og aftur í PHP. PHP formatið er miklu snyrtilegra uppsett og líklægast þæginlegra að vinna með þó svo JSON skráin er einföld.
</ul>
	<table id=currency>
		<tr>
			<th>Gjaldmiðill: </th>
			<th>Skammstöfun: </th>
			<th>Gengi: </th>
		</tr>
	</table>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
		<script type="text/javascript">
			$.ajax({
  				'url': 'https://apis.is/currency/m5',
  				'type': 'GET',
  				'dataType': 'json',
  				'success': function(response) {
  					response = response['results'];
  					var table = $('#currency');
    				for (var i = 0; i < response.length; i++) {
    					table.append('<tr><td>'+response[i].longName+'</td><td>'+response[i].shortName+'</td><td>' + response[i].value +'</td></tr>');
    				}
  				}
			});
</script>+