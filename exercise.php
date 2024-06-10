<?php
// Menampilkan "Hello World"
echo "Hello World\n";

// Menampilkan 10 baris teks "Hello World"
for ($i = 0; $i < 10; $i++) {
    echo "Hello World\n";
}

// Menampilkan 10 baris teks "Hello World", tapi setiap baris genap ditambah teks "Hello World - [no baris]"
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World - $i\n";
    } else {
        echo "Hello World\n";
    }
}

// Membuat array berisi nama bulan dari Januari hingga Desember, dan menampilkannya
$months = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
foreach ($months as $month) {
    echo "$month\n";
}

// Membuat array 2 dimensi untuk nama bulan dan hari libur nasional
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

// Membuat fungsi aritmatika
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

// Memanggil fungsi aritmatika dan menampilkan hasilnya
$a = 23;
$b = 2;

echo "Hasil penjumlahan $a dan $b adalah " . penjumlahan($a, $b) . "\n";
echo "Hasil pengurangan $a dan $b adalah " . pengurangan($a, $b) . "\n";
echo "Hasil perkalian $a dan $b adalah " . perkalian($a, $b) . "\n";
echo "Hasil pembagian $a dan $b adalah " . pembagian($a, $b) . "\n";
?>
