<?php

require_once('commons.php');
doHeader();

?>			

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-12">		
				<p>Il Linux Presentation Day è una manifestazione per la divulgazione di Linux e del software libero, nata nel 2014 e rapidamente estesa in <strong>Germania, Austria e Svizzera</strong>. Nel 2016 sbarca anche in <strong>Francia, Regno Unito, Portogallo, Grecia, e in Italia!</strong> Si svolge due volte all'anno, in aprile ed in ottobre (quest'ultima ricorrenza coincide con il <a href="http://www.linuxday.it/">Linux Day italiano</a>), ed è costituita da una serie di piccole iniziative locali allestite da gruppi cittadini di volontari tutti nella stessa data.</p>
				<p><a href="http://www.linux-presentation-day.org/">Qui il sito di riferimento</a>.</p>
			</div>
		</div>
		
		<hr />
	
		<div class="row">
			<div class="col-md-12">
				<div id="map"></div>
			</div>
		</div>
		
		<hr />
		
		<div class="row">
			<div class="col-md-12">
				<p>
					Presso le rispettive locations potrete trovare banchetti informativi e dimostrativi, e maggiori dettagli sulle attività che si svolgono nella tua zona.
				</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<p>
					Vuoi attivarti anche tu per il Linux Presentation Day? Consulta <a href="faq.php">la pagina delle FAQ</a>!
				</p>
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

<?php $file = file('data/true-registrations.csv'); foreach($file as $f): list($lat, $lng) = explode('|', $f); ?>
L.marker([<?php echo $lat ?>, <?php echo $lng ?>]).addTo(map);
<?php endforeach ?>

</script>
			
<?php doFooter() ?>

