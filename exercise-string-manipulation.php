<?php

function showTitle($title)
{
echo "<br/><b>&#9830; $title</b><br/>";
echo '<hr/>';

}

const SENTENCE = 'Une phrase qui doit être affiché en mettant un mot par ligne';

showTitle('Exercice 1');

	 $newtext = wordwrap(SENTENCE, 1, "<br>", false);
	 echo $newtext;

showTitle('Exercice 2');

	$arr = explode(" ", SENTENCE);
	$reverse = array_reverse($arr);
	$arr2 = implode(" ",$reverse);
	echo wordwrap($arr2,1,"<br>");
	

showTitle('Exercice 3');

echo "Nombre de Mot : ";
echo str_word_count(SENTENCE);
echo "<br>";

showTitle('Exercice 4');

echo "Number of characters : ";
echo strlen(SENTENCE);
echo "<br>";

showTitle('Exercice 5');

echo "Number of characters without whitespaces : ";
echo strlen(SENTENCE) - substr_count(SENTENCE, ' ').'<br>';

showTitle('Exercice 6');


echo strtoupper(SENTENCE).'<br>';

showTitle('Exercice 7');


echo ucwords(SENTENCE).'<br>';

showTitle('Exercice 8');

echo str_ireplace("e","f",SENTENCE);


?>