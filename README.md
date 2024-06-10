# PHP Script Example

This repository contains a PHP script that demonstrates various PHP functionalities including text output, loops, arrays, and custom functions for basic arithmetic operations.

## Description

The script performs the following tasks:

1. Displays the text "Hello World".
2. Displays "Hello World" in 10 lines.
3. Displays "Hello World" in 10 lines, but every even line adds "Hello World - [line number]".
4. Creates and displays an array of month names from January to December.
5. Creates and displays a 2-dimensional array where the first index stores month names and the second index stores national holidays for those months.
6. Defines four functions for basic arithmetic operations (addition, subtraction, multiplication, division) and displays the results of these operations using sample values.

## Code Explanation

```php
<?php
// Displays "Hello World"
echo "Hello World\n";

// Displays "Hello World" in 10 lines
for ($i = 0; $i < 10; $i++) {
    echo "Hello World\n";
}

// Displays "Hello World" in 10 lines, but every even line adds "Hello World - [line number]"
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World - $i\n";
    } else {
        echo "Hello World\n";
    }
}

// Creates and displays an array of month names from January to December
$months = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
foreach ($months as $month) {
    echo "$month\n";
}

// Creates and displays a 2-dimensional array for month names and national holidays
$holidays = array(
    "Januari" => "Tahun Baru",
    "Februari" => "Imlek",
    "Maret" => "Hari Raya Nyepi",
    "April" => "Paskah",
    "Mei" => "Hari Buruh",
    "Juni" => "Hari Lahir Pancasila",
    "Juli" => "Idul Fitri",
    "Agustus" => "Hari Kemerdekaan",
    "September" => "Tahun Baru Hijriyah",
    "Oktober" => "Hari Kesaktian Pancasila",
    "November" => "Maulid Nabi",
    "Desember" => "Hari Raya Natal"
);

foreach ($holidays as $month => $holiday) {
    echo "$month - $holiday\n";
}

// Defines arithmetic functions
function penjumlahan($a, $b) {
    return $a + $b;
}

function pengurangan($a, $b) {
    return $a - $b;
}

function perkalian($a, $b) {
    return $a * $b;
}

function pembagian($a, $b) {
    if ($b == 0) {
        return "Pembagian dengan nol tidak valid.";
    }
    return $a / $b;
}

// Calls arithmetic functions and displays the results
$a = 23;
$b = 2;

echo "Hasil penjumlahan $a dan $b adalah " . penjumlahan($a, $b) . "\n";
echo "Hasil pengurangan $a dan $b adalah " . pengurangan($a, $b) . "\n";
echo "Hasil perkalian $a dan $b adalah " . perkalian($a, $b) . "\n";
echo "Hasil pembagian $a dan $b adalah " . pembagian($a, $b) . "\n";
?>
