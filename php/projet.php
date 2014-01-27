<!DOCTYPE html>
<html>
	<head>
			<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	</head>
</html>
<body bgcolor="#15a2e8">
<p align="center">
<?php
include("../index.html");
$pj= $_GET['projet'];
if ($pj=="1"){
	echo"<img src='../images/mission1.JPG' alt='mission1' data-description='Questionnaire '/><p> Bonjour c'est mon premiere projet </p><a href='../pdf/mission1.pdf'>Plus de l'explication sur mon mission 1</a>";
	}
elseif($pj=="2") {
	echo"<img src='../images/mission2.JPG' alt='mission2' data-description='site intranet '/><p> Bonjour c'est mon deuxieme projet </p>";
	}
else {
	echo"Desole ! j'essaie de resoudre le probleme ";
}
?>
</p>
</body>

</html>