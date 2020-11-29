--TEST--
utf8_trim
--FILE--
<?php
var_dump(utf8_trim("😀😀😈a😈b😈c😈😀😀", "😀"));
var_dump(utf8_trim("😀😀😈a😈b😈c😈😀😀", "😀😈"));
echo "\n";

var_dump(utf8_trim("😀😀a😈😈b😈😈c😀😀", "ac😀"));
var_dump(utf8_trim("😀😀a😈😈b😈😈c😀😀", "a😀c"));
var_dump(utf8_trim("😀😀a😈😈b😈😈c😀😀", "😀ac"));
?>
--EXPECT--
string(19) "😈a😈b😈c😈"
string(11) "a😈b😈c"

string(17) "😈😈b😈😈"
string(17) "😈😈b😈😈"
string(17) "😈😈b😈😈"