<?php
	include ( '../../PdfToText.phpclass' ) ;

	$file	=  'sample' ;
	$pdf	=  new PdfToText('http://localhost:8888/pdf/examples/example01/tes.pdf') ;
	$string = 'http';
	$data = $pdf->Text;

	//echo $string;

	if(strpos($data,$string,31) != false){
		echo $string;
		echo " - ".substr_count($data,$string);

	} else{
		echo 'failed';
	}
	