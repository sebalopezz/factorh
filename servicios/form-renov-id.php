<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:inline;filename='FH - Formulario Renovación internacion domiciliaria.pdf'");

// The PDF source is in original.pdf
readfile("form-renov-id.pdf");
?>