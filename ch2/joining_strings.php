<?php 
$firstName = 'Rick';
$total = 56;
echo $firstName, $total. '<br>';
print $firstName. '<br>';
$otherVar = $firstName;
echo $otherVar. '<br>';

$lastName = 'Mac';
$book = '"Hitchhiker\'s Guide to the Galaxy"';
$author = "Douglas Adams";
$timesListened = 25;
$newLines = "\r\n\r\n";

$fullName = $firstName . ' ' . $lastName;
echo $fullName . '<br>'; //note br is html literal string for line break

$recommendation = "$book by $author";
echo $recommendation . '<br>';

//sending an email need single string
$message = "Name: $fullName $newLines";
$message .= "Recommendation: $recommendation $newLines";  //see .= does the concat
$message .= "Times listened: $timesListened";
echo $message;

?>