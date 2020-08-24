<?php
function vykresli ($width, $height, $barva, $tvar){
		$inlinestyl = '';
		switch ($tvar) {
			case '1':
				$inlinestyl = 'width:'.$width.'px; height:'.$height.'px; background-color:'.$barva.';';
				break;
			case '2':
				$ctverec = $width + $height;
				$inlinestyl = 'width:'.$ctverec.'px; height:'.$ctverec.'px; background-color:'.$barva.';';
				break;
			case '3':
				$kruh = $width + $height;
				$inlinestyl = 'width:'.$kruh.'px; height:'.$kruh.'px; background-color:'.$barva.'; border-radius:50%;';
				break;

				default:
				break;
		} //Switch
		echo '<div class="trida" style="'.$inlinestyl.'"></div>';

	} //Vykresli



$gen_random = rand(1,3);

function random_color_part() {
    return mt_rand( 0, 255 );
}

function random_color() {
    return "rgb(". random_color_part() .",". random_color_part() .",". random_color_part() .")";
}


function soucet ($width, $height){
	global $vysledek;
	$vysledek = $width + $height;

}

?>
