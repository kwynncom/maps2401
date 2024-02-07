<?php

require_once('/opt/kwynn/kwutils.php');

$a = isrv('selectedMarkers');
$s  = implode(', ', $a) . ' are within the polygon; polygon vertices: ';
$s .= json_encode(isrv('polygon'), JSON_PRETTY_PRINT);
// $s  = str_replace("\n", "<br />\n", );
header('Content-Type: text/plain');
echo($s);
exit(0);

