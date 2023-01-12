<?php

require_once("inc/Utilities/Page.php");
require_once("inc/Utilities/FileConvertor.php");

if(isset($_FILES) && !empty($_FILES)) {
    if(isset($_FILES['uploadJson']) && !empty($_FILES['uploadJson'])){
        $jsonContent = file_get_contents($_FILES['uploadJson']['tmp_name']);
        $xmlCars = FileConverter::jasonToXMLDisplay($jsonContent);  
    }
    elseif(isset($_FILES['uploadXML']) && !empty($_FILES['uploadXML'])) {
        $xmlContent = file_get_contents($_FILES['uploadXML']['tmp_name']);
        FileConverter::xmlToJsonDisplay($xmlContent);
    }
    
}
else {
    Page::uploadJson();
    Page::uploadXML();
}


