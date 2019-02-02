<?php
// TODO: Change temperature
// TODO: Change text
// TODO: Change	converter from fahrenheit to celcius



// Execute
$temperature = "100";

echo tempFtoCelsius($temperature);
// End Execute



function tempFtoCelsius($fahrenheit) {
	if (!isset($fahrenheit)) {
		return false;
	}
	
	$celsius = (float)(($fahrenheit - 32) / 1.8);
	$returnText = "You converted " . round($fahrenheit) . "F to " . round($celsius) . "C";
	
	if ($fahrenheit < 32) {
		$returnText .= ": Pack Long Underwear";
	} 
	elseif ($fahrenheit > 100) {
		$returnText .= ": Remember to Hydrate";
	}
	return $returnText;
}


function tempCtoFahrenheit($celcius) {
	if (!isset($celcius)) {
		return false;
	}
	
	$fahrenheit = (float)(($celcius * 1.8) + 32);
	
	
	$returnText = "You converted " . round($celcius) . "C to " . round($fahrenheit) . "F";
	
	if ($celcius < 0) {
		$returnText .= ": Pack Long Underwear";
	} 
	elseif ($celcius > 38) {
		$returnText .= ": Remember to Hydrate";
	}
	return $returnText;
}
?>
