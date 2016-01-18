<?php

require_once('commons.php');
doHeader();

$valid = true;
$mandatory = ['email', 'lat', 'lng'];

foreach($mandatory as $m) {
	if (!isset($_POST[$m]) || empty($_POST[$m]))
		$valid = false;
}

if ($valid == false): ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger">
					<p>Attenzione! Mancano dei campi obbligatori!</p>
					<p>Sicuro di aver compilato tutto il form?</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php else: ?>

<?php

if (isset($_POST['wannabe']))
	$wannabe = 'true';
else
	$wannabe = 'false';

if (isset($_POST['notes']) && !empty($_POST['notes'])) {
	$notes = $_POST['notes'];
	$notes = str_replace("\n", ' ', $notes);
	$notes = str_replace("\r", '', $notes);
}
else {
	$notes = '';
}

$registration = sprintf("%s|%s|%s|%s|%s\n", $_POST['email'], $_POST['lat'], $_POST['lng'], $wannabe, $notes);
file_put_contents('data/registrations.csv', $registration, FILE_APPEND);

?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success">
					<p>Grazie per la tua registrazione!</p>
					<p>Torna a consultare questo sito per ulteriori dettagli sul coordinamento dell'evento, oppure iscriviti alla mailing list <a href="http://lists.linux.it/listinfo/linuxday-idee" class="alert-link">LinuxDay-Idee</a> per partecipare direttamente alla discussione.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endif ?>

<?php doFooter() ?>

