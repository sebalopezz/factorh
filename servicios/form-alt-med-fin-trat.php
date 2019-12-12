<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:inline;filename='FH - Formulario alta medica fin de tratamiento'");

// The PDF source is in original.pdf
readfile("form-alt-med-fin-trat.pdf");
?>