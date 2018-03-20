<?php

    include_once('includes/dbconnect.php');
    if(isset($_POST['text'])){
        $text = mysqli_escape_string($connect,$_POST['text']);
        $text = trim($text," ");
        $words = explode(" ",$text);

        if($text==""){
            die("Please provide text");
        }
        header("Content-type: text/xml");

        // creating root element sigml
        $xml_dom = new DomDocument('1.0','utf-8');
        $hns_sigml = $xml_dom->createElement('sigml');
        $xml_dom->appendChild($hns_sigml);
        

        // print_r($words);
        foreach($words as $word){

            // echo "</br>$word";

            $sqlquery = "SELECT * FROM dict_1 WHERE word='$word'";
            if($result = mysqli_query($connect,$sqlquery)){
                /**
                 * ham_manual :- val of manual in csv
                 * ham_manual_array :- array of manual 
                 * ham_nonmaual :- value of picture
                 */
                $ham_manual = "";
                $ham_manual_array = [];
                $ham_nonmanual = "";
                if($row = mysqli_fetch_assoc($result)){
                    $ham_manual=$row['hamcode'];
                }
                // print_r($ham_manual);
                $ham_manual_array=explode(',',$ham_manual);
                // print_r($ham_manual_array);
            }
            
            $sqlquery = "SELECT * FROM dict_2 WHERE word='$word'";
            if($result = mysqli_query($connect,$sqlquery)){

                if($row = mysqli_fetch_assoc($result)){
                    $ham_nonmanual=$row['picture'];
                }
                
            }
            
            if($ham_manual!==""){
                // creating element hns_sign
                $hns_sign = $xml_dom->createElement('hns_sign');
                $hns_sign->setAttribute('gloss',$word);
                $hns_sigml->appendChild($hns_sign);
                
                // creating element hamnosys_nonmanual
                $hamnosys_nonmanual = $xml_dom->createElement('hamnosys_nonmanual');
                $hns_sign->appendChild($hamnosys_nonmanual);
                
                // creating element hamnosys_mouthpicture
                $hamnosys_mouthpicture = $xml_dom->createElement('hnm_mouthpicture');
                $hamnosys_mouthpicture->setAttribute('picture',$ham_nonmanual);
                $hamnosys_nonmanual->appendChild($hamnosys_mouthpicture);
                
                // creating element hamnosys_manual
                $hamnosys_manual = $xml_dom->createElement('hamnosys_manual');
                $hns_sign->appendChild($hamnosys_manual);
                
                foreach($ham_manual_array as $element){
                    // creating child elements of hamnosys_manual
                    $child_element = $xml_dom->createElement($element);
                    $hamnosys_manual->appendChild($child_element);
                }
            }else{
                $letter_array = str_split($word);
                // print_r($letter_array);
                foreach($letter_array as $letter){

                    $sqlquery = "SELECT * FROM dict_1 WHERE word='$letter'";
                    if($result = mysqli_query($connect,$sqlquery)){

                        if($row = mysqli_fetch_assoc($result)){
                            $ham_manual=$row['hamcode'];
                        }
                        // print_r($ham_manual);
                        $ham_manual_array=explode(',',$ham_manual);
                        // print_r($ham_manual_array);
                    }
                    
                    $sqlquery = "SELECT * FROM dict_2 WHERE word='$letter'";
                    if($result = mysqli_query($connect,$sqlquery)){
        
                        if($row = mysqli_fetch_assoc($result)){
                            $ham_nonmanual=$row['picture'];
                        }
                        
                    }
                
                    // creating element hns_sign
                    $hns_sign = $xml_dom->createElement('hns_sign');
                    $hns_sign->setAttribute('gloss',$letter);
                    $hns_sigml->appendChild($hns_sign);
                    
                    // creating element hamnosys_nonmanual
                    $hamnosys_nonmanual = $xml_dom->createElement('hamnosys_nonmanual');
                    $hns_sign->appendChild($hamnosys_nonmanual);
                
                    // creating element hamnosys_mouthpicture
                    $hamnosys_mouthpicture = $xml_dom->createElement('hnm_mouthpicture');
                    $hamnosys_mouthpicture->setAttribute('picture',$ham_nonmanual);
                    $hamnosys_nonmanual->appendChild($hamnosys_mouthpicture);
                    
                    // creating element hamnosys_manual
                    $hamnosys_manual = $xml_dom->createElement('hamnosys_manual');
                    $hns_sign->appendChild($hamnosys_manual);
                    
                    foreach($ham_manual_array as $element){
                        // creating child elements of hamnosys_manual
                        $child_element = $xml_dom->createElement($element);
                        $hamnosys_manual->appendChild($child_element);
                    }
                }
                
            }
        }
        $xml_dom->formatOutput = true;
        $xml_dom_data = $xml_dom->saveXML();
        print($xml_dom_data);
    
    }else{
        echo "Dude provide some text";
    }

