<form action='xor.php'>
    <input type='text' name='input'>
</form>

<?php
$input = $_GET['input'];
$xor = '';

print('"');
for ($i = 0; $i < strlen($input); $i++) {
    if (ctype_alpha($input[$i])) {
        print('%');
        printf('%02x', ord($input[$i] ^ '_'));
        $xor .= '_';
    } else {
        print('%00');
        $xor .= $input[$i];
    }
}
print('"^"' . $xor . '"');
?>
