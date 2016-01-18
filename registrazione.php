<?php

require_once('commons.php');
doHeader();

?>			

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h3>Registra il tuo Linux Presentation Day 2016</h3>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="salva.php">
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" placeholder="Il tuo indirizzo mail, per comunicazioni di servizio">
						</div>
					</div>
					<div class="form-group">
						<label for="map" class="col-sm-2 control-label">Mappa</label>
						<div class="col-sm-10">
							<div id="map"></div>
							<input type="hidden" name="lat" value="">
							<input type="hidden" name="lng" value="">
							<p class="help-block">Clicca sulla mappa per posizionare il marker in prossimità della tua location preferita. Seleziona una posizione anche se stai solo cercando collaboratori, sarà più facile incrociare le segnalazioni di interesse! <a class="display-all">Clicca qua</a> per vedere tutte le registrazioni.</p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="wannabe"> A.A.A. volontari cercansi!
								</label>
								<p class="help-block">Seleziona questa casella se vorresti allestire un presidio per il Linux Presentation Day, ma sei da solo e stai cercando altri collaboratori per farlo.</p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="notes" class="col-sm-2 control-label">Commento</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="notes" placeholder="Se lo desideri, lascia qui un commento o una nota."></textarea>
						</div>
					</div>
					<div class="form-group hidden">
						<label for="name" class="col-sm-2 control-label">Nome</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" placeholder="Spazio da non compilare!">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Registra l'Evento</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>

var map = L.map('map').setView([41.992, 11.755], 5);
var marker = null;
var display = false;

L.tileLayer( "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
	{
		attribution: "Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>"
	}
).addTo(map);

map.on('click', function(e) {
	var ll = e.latlng;

	if (marker == null)
		marker = L.marker(ll).addTo(map);
	else
		marker.setLatLng(ll);
		
	$('input:hidden[name=lat]').val(ll.lat);
	$('input:hidden[name=lng]').val(ll.lng);
});

$('.display-all').click(function() {
	if (display == false) {
		<?php $file = file('data/registrations.csv'); foreach($file as $f): list($mail, $lat, $lng, $wannabe, $useless) = explode('|', $f); ?>
		L.marker([<?php echo $lat ?>, <?php echo $lng ?>]).addTo(map);
		<?php endforeach ?>
		display = true;
	}
});

</script>
			
<?php doFooter() ?>

