<?php

require_once('/opt/kwynn/kwutils.php');

$a = isrv('selectedMarkers');
$s = implode(', ', $a);
header('Content-Type: text/plain');
echo($s);
exit(0);

