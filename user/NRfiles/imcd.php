<?php
header('Content-disposition: attachment; filename=imcd.png');
header('Content-type: application/png');
readfile('imcd.png');
?>