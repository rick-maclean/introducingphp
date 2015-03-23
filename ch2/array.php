<?php
$charactersBook = array('Simba', 'r2d2', 'Ford PRefect', 'Zephod Beelebrox');
//echo $charactersBook; //does not work
print_r($charactersBook);
echo '<br>';
echo $charactersBook[1];
$charactersBook[] = 'Marvin'; 
$charactersBook[] = 'Slartilbartfartfast';
echo '<br>';
print_r($charactersBook); echo '<br><br>';

//associative array 
//key value
$descriptions = array('Earth' => 'mostly harnless',
						'Marvin' => 'the paranoid android');
//add more
$descriptions['Zephod'] = 'Presidend ofthe Imperial Galactic Government';
print_r($descriptions);
// echo "Earth is described as $descriptions['Earth']";  //not good 
//need curly brackets for this
echo '<br><br>';
echo "Earth is described as {$descriptions['Earth']}";