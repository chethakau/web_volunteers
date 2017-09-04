<?php
header('Content-disposition: attachment; filename=color_dream.jpg');
header('Content-type: application/jpg');
readfile('color_dream.jpg');
?>