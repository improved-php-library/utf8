--TEST--
utf8_ltrim
--FILE--
<?php
var_dump(utf8_ltrim("😀😀😈a😈b😈c😈😀😀", "😀"));
var_dump(utf8_ltrim("😀😀😈a😈b😈c😈😀😀", "😀😈"));
echo "\n";

var_dump(utf8_ltrim("😀😀a😈😈b😈😈c😀😀", "ac😀"));
var_dump(utf8_ltrim("😀😀a😈😈b😈😈c😀😀", "a😀c"));
var_dump(utf8_ltrim("😀😀a😈😈b😈😈c😀😀", "😀ac"));
?>
--EXPECT--
string(27) "😈a😈b😈c😈😀😀"
string(23) "a😈b😈c😈😀😀"

string(26) "😈😈b😈😈c😀😀"
string(26) "😈😈b😈😈c😀😀"
string(26) "😈😈b😈😈c😀😀"