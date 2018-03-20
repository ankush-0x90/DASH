<?php
    header("Content-type: text/xml");
    $xml_dom = new DomDocument('1.0','utf-8');
    // $xml_dom->version('1.0');
    // $xml_dom->encoding('utf-8');
    $hns_sigml = $xml_dom->createElement('sigml');
    $xml_dom->appendChild($hns_sigml);

    $hns_sign = $xml_dom->createElement('hns_sign');
    $hns_sign->setAttribute('gloss','go');
    
    $hns_sigml->appendChild($hns_sign);

    // $hamnosys_nonmanual=$xml_dom->createElement('hamnosys_nonmanual');
    // $xml_dom=
    // $hnm_mouthpicture = $hamnosys_nonmanual->appendChild();
    // $hnm_mouthpicture->addAttributes('picture','mvg');
    // $hns_sign->appendChild('hamnosys_nonmanual');

    // $hamnosys_manual=$hns_sign->appendChild('hamnosys_manual');
    // $hamnosys_manual->appendChild('hamfist');
    // $hamnosys_manual->appendChild('hamfist2');
    // $hamnosys_manual->appendChild('hamfist3');
    // $hamnosys_manual->appendChild('hamfist4');

    $xml_dom_data = $xml_dom->saveXML();
    print($xml_dom_data);
