<script>function initMap() { initMapActual(); }</script>
<?php require_once(__DIR__ . '/../../' . 'getKey.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GooMapsAPIKeyAccess2401::get()); ?>&loading=async&callback=initMap&libraries=drawing"></script>
