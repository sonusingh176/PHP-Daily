what is the difference between implode and explode.

implode:  Converts an array into a string.


<?php
// $arr = array ('I','am','simple','boy!');
// $space_separated = implode(" ", $arr);
// $comma_separated = implode(" , ", $arr);
// $slash_separated = implode(" / ", $arr);
// $dot_separated = implode(" . ", $arr);
// $hyphen_separated = implode(" - ", $arr);
// echo $space_separated.'<br>';
// echo $comma_separated.'<br>';
// echo $slash_separated.'<br>';
// echo $dot_separated.'<br>';
// echo $hyphen_separated;


$arr = array('I','am','sonu','singh');
echo implode('-',$arr);   // I-am-Sonu-singh
echo implode(' ',$arr);

// Explode :Converts a string into an array.



?>
