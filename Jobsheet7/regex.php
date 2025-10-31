<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
echo "Mencari pola '$pattern' dalam teks '$text'<br><br>";

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<hr>";

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
echo "Teks asli: $text <br>";

$new_text = preg_replace($pattern, $replacement, $text);
echo "Teks baru: $new_text"; // Output: "I like banana pie."

echo "<hr>";

$pattern = '/go*d/'; // Cocokkan "g", diikuti 0 atau lebih "o", lalu "d".
$text = 'god is good.';
echo "Mencari pola '$pattern' dalam teks '$text'<br><br>";

// preg_match_all untuk menemukan semua kecocokan
preg_match_all($pattern, $text, $matches);

echo "Ditemukan kecocokan: <pre>";
print_r($matches[0]);
echo "</pre>";
// Output: Array ( [0] => god [1] => good )

echo "<hr>";

$pattern = '/go?d/'; // Cocokkan "g", diikuti 0 atau 1 "o", lalu "d".
$text = 'gd, god, good, gooood';
echo "Mencari pola '$pattern' dalam teks '$text'<br><br>";

preg_match_all($pattern, $text, $matches);

echo "Ditemukan kecocokan: <pre>";
print_r($matches[0]);
echo "</pre>";

echo "<hr>";

$pattern = '/go{2,3}d/'; // Cocokkan "g", diikuti 2 sampai 3 "o", lalu "d".
$text = 'gd, god, good, goood, gooood, goooood';
echo "Mencari pola '$pattern' dalam teks '$text'<br><br>";

preg_match_all($pattern, $text, $matches);

echo "Ditemukan kecocokan: <pre>";
print_r($matches[0]);
echo "</pre>";

?>