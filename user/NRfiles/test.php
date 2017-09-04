<?php
header('Content-disposition: attachment; filename=test.pdf');
header('Content-type: application/pdf');
readfile('test.pdf');
?>