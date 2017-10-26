<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Ein Klasse Person</title>
</head>
<body>
	<p class="vorname"><?= bereinige($person->getVorname()) ?></p>
	
	<p class="nachname"><?= bereinige($person->getNachname()) ?></p>
</body>
</html>