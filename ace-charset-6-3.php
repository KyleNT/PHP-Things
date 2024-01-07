<?php
require 'vendor/autoload.php';
include('DocxConversion.php');

$docObj = new DocxConversion('klein.docx');
echo $doctTxt = $docObj->convertToText();

/*
$phpWord = new \PhpOffice\PhpWord\PhpWord();

// Note: any element you append to a document must reside inside of a Section.
// Adding Text element with font customized using named font style...
$fonte1 = 'fonte1';
$phpWord->addFontStyle(
    $fonte1,
    array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
);

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
    'PHS Word!', $fonte1
);

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('klein.docx');
*/
?>