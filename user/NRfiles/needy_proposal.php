<?php
header('Content-disposition: attachment; filename=needy_proposal.docx');
header('Content-type: application/docx');
readfile('needy_proposal.docx');
?>