<?php
header('Content-disposition: attachment; filename=needy.jpg');
header('Content-type: application/jpg');
readfile('needy.jpg');
?>