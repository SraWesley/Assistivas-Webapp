<?php
	session_start();
	$path = "../audios/";
	$split_end = $_SESSION['split'];
	$cont = 0;
	$tamanho = sizeof($split_end[$cont]) - 1;
	

	echo "Palavra 1:"."<br>";
	for($j = 0; $j < sizeof($split_end); $j++){ 
	    for($i = 1; $i < $tamanho; $i++){ 
	    	switch ($split_end[$cont][$i]) {
	    		case 'â':
	    			$soundfile2 = strval($path."a".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."^".".wav");
	    			break;
	    		case 'ê':
	    			$soundfile2 = strval($path."e".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."^".".wav");
		    	
		    		break;
		    	case 'ô':
		    		$soundfile2 = strval($path."o".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."^".".wav");
		    		break;
		    	case 'á':
		    		$soundfile2 = strval($path."a".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."´".".wav");
		    		break;
		    	case 'é':
		    		$soundfile2 = strval($path."e".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."´".".wav");
		    		break;
		    	case 'í':
		    		$soundfile2 = strval($path."i".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."´".".wav");
		    		break;
		    	case 'ó':
		    		$soundfile2 = strval($path."o".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."´".".wav");
		    		break;
		    	case 'ú':
		    		$soundfile2 = strval($path."u".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."´".".wav");
		    		break;
		    	case 'ã':
		    		$soundfile2 = strval($path."a".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."~".".wav");
		    		break;
		    	case 'õ':
		    		$soundfile2 = strval($path."o".".wav");
	    			echo "<audio controls>
						<source src=\"$soundfile2\" type=\"audio/mpeg\"><br>
						Your browser does not support the audio element.
						</audio><br>
						";
		    		$soundfile = strval($path."~".".wav");
		    		break;
		    	case 'ç':
		    		$soundfile = strval($path."ç".".wav");
		    		break;
	    		default:
	    			$soundfile = strval($path.$split_end[$cont][$i].".wav");
	    			break;
	    	}

	    	echo "<audio controls>
				<source src=\"$soundfile\" type=\"audio/mpeg\"><br>
				Your browser does not support the audio element.
				</audio><br>
				";
   		}  	

   		if($cont+1 === sizeof($split_end)){
   			break;
   		} else {
   			
   			$cont++;
   			$palavra = $cont;
  			echo "Palavra ".($palavra+1).": "."<br>";
   			$tamanho = sizeof($split_end[$cont]) - 1;
   		}
   		
   		
    }
	

   
?>
