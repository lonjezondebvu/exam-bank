<?php

require_once 'dompdf/dompdf_config.inc.php';

$html='
<html>
<head></head>
<body>
<h1 align="center">mphatso`s sample page</h1>
</body>
</html>
';
$dompdf = new DOMPDF();
$dompdf->load_html('index.php');
$dompdf->render();
$dompdf->stream('sample.pdf');
$dompdf->setPaper('A4', 'landscape');

?>
