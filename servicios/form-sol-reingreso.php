<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:inline;filename='FH - Formulario de solicitud de reingreso.pdf'");

// The PDF source is in original.pdf
readfile("form-sol-reingreso.pdf");
?>