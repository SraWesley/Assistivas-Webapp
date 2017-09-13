<?php

	session_start();
	$path = "../audios/";
	$diretorio = dir($path);
	$letters = array();
	$split_end = $_SESSION['split'];
	$letters_end = array();


	while($arquivo = $diretorio -> read()){
		if($arquivo !== '.' && $arquivo !== '..' && $arquivo !== ' '){
			array_push($letters, utf8_encode($arquivo)); 
		}
		           
    }

    for($i = 0; $i < sizeof($letters); $i++){
    	$letters_end[$i] = substr($letters[$i], 0, -4);
    }

    $j = 0; 
    $cont = 0; 
    $end = false;
    while($end === false){
    	$word_size = (sizeof($split_end[$cont]));
    	for($i = 0; $i < sizeof($letters_end); $i++){ // 32 vezes
	    	if($letters_end[$i] === $split_end[$cont][$j]){
	    		$soundfile = strval("../audios/".$letters_end[$i].".wav");
	    		$j++;
	    		echo "<audio controls>
				<source src=\"$soundfile\" type=\"audio/mpeg\"><br>
				Your browser does not support the audio element.
				</audio><br>
				";
	    		if($j === $word_size){
					$j = 0;
					$cont++;
					
					if($cont === (sizeof($split_end))){
						$end = true;
						break;

					}

		   		}
	    	}	    	
	    }
    }
	
   
?>