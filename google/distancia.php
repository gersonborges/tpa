<!DOCTYPE html>
<?php

// https://console.developers.google.com/apis/credentials?project=nonna-nonato

$destino = isset($_GET['destino'])&&!empty($_GET['destino'])?$_GET['destino']:"Rua Frutal 122 Santa Efigenia";



?>
<html lang="pt">
<head>
	<title>Rota</title>
  	<meta charset="utf-8">
  	<!--meta name="viewport" content="initial-scale=1.0, user-scalable=no"-->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/images/icon-nn.png">
    <link rel="icon" href="/images/icon-nn.png" type="image/x-icon">   
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
  	<script type="text/javascript" src="http://plixsite.net/~tpa/js/jquery.validate.js"></script>
    
    
   	<script type="text/javascript">
	$(document).ready(function(){
		$("select[name='id']").change(function(){
			var nome = $("input[name='nome']");
			var endereco = $("input[name='endereco']");
			var celular = $("input[name='celular']");
			$(celular).val('Carregando...');
			$(nome).val('Carregando...');
			$(endereco).val('Carregando...');
			$.getJSON(
				'function.php',
				{ id: $( this ).val() },
				function( json )
				{
					$(celular).val(json.id);
					$(nome).val(json.nome);
					$(endereco).val(json.endereco);
				}
			);
		});
		$("input[name='celular']").change(function(){
			var nome = $("input[name='nome']");
			var endereco = $("input[name='endereco']");
			$(nome).val('Carregando...');
			$(endereco).val('Carregando...');
			$.getJSON(
				'function.php',
				{ id: $( this ).val() },
				function( json )
				{
					$(nome).val(json.nome);
					$(endereco).val(json.endereco);
				}
			);
		});
	});
	</script>
    
  

    <style>
    	html, body, .container-fluid, .row, .col-sm-8 {
        	height: 100%;
      	}
      	#map {
      		margin-top: 10px;
        	float: left;
        	width: 100%;
        	height: 94%;
      	}
      	#right-panel {
      		margin-top: 10px;
      		margin-bottom: 10px;
        	width: 100%;
        	height: 100%;
      	}
	  	#right-panel select {
  			width: 100%;
	  	}
      	.panel {
        	height: 100%;
        	overflow: auto;
      	}
    </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
		<div id="map"></div>
    </div>
    <div class="col-sm-4">
    	<div id="right-panel">

       		<form id="pedido" action="" method="post">
        		<div class="panel panel-default">
          			<div class="panel-heading">Endereço de Entrega</div>
          			<div class="panel-body">
            			<div class="form-group">
                        	
              				<input id="endereco" name="endereco" type="text" value="<?php echo $destino; ?>" class="form-control" >
            			</div>
            			<div class="form-group">
              				<input id="submit" type="button" value="Calcular rota" class="btn btn-primary" >
            			</div>
            			<p>Distância: <span id="total"></span></p>
          			</div>
        		</div>
            </form>
    	</div>
  	</div>
  </div>
</div>
<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: -19.920, lng: -43.915}  // Nonna Nonato
        });
        //1
	var geocoder = new google.maps.Geocoder();
  	//2
  	document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
          displayRoute('Rua Frutal 122 Santa Efigenia - Belo Horizonte - MG', document.getElementById('endereco').value + ' Belo Horizonte MG', directionsService, directionsDisplay);
  	});
  	var directionsService = new google.maps.DirectionsService;
  	var directionsDisplay = new google.maps.DirectionsRenderer({
          draggable: true,
          map: map,
          panel: document.getElementById('right-panel')
  	});
        directionsDisplay.addListener('directions_changed', function() {
          computeTotalDistance(directionsDisplay.getDirections());
  	});
  	displayRoute('Rua Frutal 122 Santa Efigenia - Belo Horizonte - MG', '<?php echo $destino; ?>'+ ' Belo Horizonte MG', directionsService, directionsDisplay);
      }
      function geocodeAddress(geocoder, resultsMap) {
  	  var endereco = document.getElementById('endereco').value;
  	  geocoder.geocode({'endereco': endereco}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
		  resultsMap.setCenter(results[0].geometry.location);
		  var marker = new google.maps.Marker({
			map: resultsMap,
			position: results[0].geometry.location
		  });
		   
		  //document.getElementById('destino').innerHTML= document.getElementById('endereco').value +" Belo Horizonte MG "+results[0].geometry.location;
        } else {
          alert('Não localizado: ' + status);
        }
      });
    }
	function displayRoute(origin, destination, service, display) {
      service.route({
        origin: origin,
    	destination: destination,
    	travelMode: google.maps.TravelMode.DRIVING,
    	avoidTolls: true
  	  }, function(response, status) {
    	if (status === google.maps.DirectionsStatus.OK) {
    	  
      	  display.setDirections(response);
    	} else {
      	  alert('Não é possível mostrar rota: ' + status);
    	}
    	
  	  });
	}
	function computeTotalDistance(result) {
  	  var total = 0;
  	  var myroute = result.routes[0];
  	  for (var i = 0; i < myroute.legs.length; i++) {
    	total += myroute.legs[i].distance.value;
  	  }
  	  total = total / 1000;
  	  if ( total == 0 )
	    document.getElementById('total').innerHTML = ' Digite um destino' ;
  	  else if ( total < 4 )
  	    document.getElementById('total').innerHTML = total + ' km <br><big><b>Frete: GRATIS</b></big>' ;
  	  else if ( total < 7 )
	    document.getElementById('total').innerHTML = total + ' km <br><big><b>Frete: R$ 5,00</b></big>' ;
  	  else
	  	document.getElementById('total').innerHTML =  total + ' km <br><big><b>No momento estamos entregando somente num raio de 7km. Não atendemos esta área.</b></big>';
	}
	
	document.getElementById('celular').focus();
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj7U2tozhQUrs3cc2hwth94Imj4YCmR7g&signed_in=true&callback=initMap" async defer></script>



</body>
</html>
