<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:inline;filename='FH - Formulario Consentimiento informado para internación domiciliaria.pdf'");

// The PDF source is in original.pdf
readfile("form-consent-inf-id.pdf");
?>