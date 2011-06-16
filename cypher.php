  <form  method="POST">
  <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <input type="submit" value="Decode" name="submit">
    </form>

<?php

if(isset($_POST['submit']))
{
   
         $string =  strip_tags($_POST['text']);
 
$patterns[1] = "[1]";
$patterns[2] = "[11]";
$patterns[3] = "[111]";
$patterns[4] = "[1111]";
$patterns[5] = "[11111]";

$patterns[6] = "[2]";
$patterns[7] = "[22]";
$patterns[8] = "[222]";
$patterns[9] = "[2222]";

$patterns[10] = "[3]";
$patterns[11] = "[33]";
$patterns[12] = "[333]";
$patterns[13] = "[3333]";

$patterns[14] = "[4]";
$patterns[15] = "[44]";
$patterns[16] = "[444]";
$patterns[17] = "[4444]";

$patterns[18] = "[5]";
$patterns[19] = "[55]";
$patterns[20] = "[555]";
$patterns[21] = "[5555]";

$patterns[22] = "[6]";
$patterns[23] = "[66]";
$patterns[24] = "[666]";
$patterns[25] = "[6666]";

$patterns[26] = "[7]";
$patterns[27] = "[77]";
$patterns[28] = "[777]";
$patterns[29] = "[7777]";
$patterns[30] = "[777777]";

$patterns[31] = "[8]";
$patterns[32] = "[88]";
$patterns[33] = "[888]";
$patterns[34] = "[8888]";

$patterns[35] = "[9]";
$patterns[36] = "[99]";
$patterns[37] = "[999]";
$patterns[38] = "[9999]";
$patterns[39] = "[99999]";
//--------------------------------------------
$replacements[1] = ".";
$replacements[2] = ",";
$replacements[3] = "?";
$replacements[4] = "!";
$replacements[5] = "1";

$replacements[6] = "a";
$replacements[7] = "b";
$replacements[8] = "c";
$replacements[9] = "2";

$replacements[10] = "d";
$replacements[11] = "e";
$replacements[12] = "f";
$replacements[13] = "3";

$replacements[14] = "g";
$replacements[15] = "h";
$replacements[16] = "i";
$replacements[17] = "4";

$replacements[18] = "j";
$replacements[19] = "k";
$replacements[20] = "l";
$replacements[21] = "5";

$replacements[22] = "m";
$replacements[23] = "n";
$replacements[24] = "o";
$replacements[25] = "6";

$replacements[26] = "p";
$replacements[27] = "q";
$replacements[28] = "r";
$replacements[29] = "s";
$replacements[30] = "7";

$replacements[31] = "t";
$replacements[32] = "u";
$replacements[33] = "v";
$replacements[34] = "8";

$replacements[35] = "w";
$replacements[36] = "x";
$replacements[37] = "y";
$replacements[38] = "z";
$replacements[39] = "9";

echo str_replace($patterns, $replacements, $string);
 
 }

?>
  