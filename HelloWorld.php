<?php

/*
File PHP
File kode program PHP diakhiri dengan extention .php
Di awal kode program PHP, wajib menambahkan <?php. Dan diakhir kode program php perlu ditambahkan ?> (tapi tidak wajib)
Nama file PHP tidak ada aturan, jadi kita bisa membuat file PHP seperti membuat file lain biasanya. Namun agar mempermudah saat menjalankan file PHP, direkomendasikan tidak menggunakan spasi.
Untuk menampilkan tulisan di PHP, kita bisa menggunakan perintah echo

echo "Hello World";

Menjalankan Kode Program
php NamaFile.php

Tipe Data Number
Di PHP terdapat 2 jenis tipe data number
(int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2) dan
(float) Bilangan pecahan
Di PHP kita bisa menambahkan _ (garis bawah) di angka, ini hanya untuk agar mudah dibaca, saat dijalankan, _ (garis bawah) tersebut akan di ignore
Untuk angka negatif, kita bisa menggunakan tanda - (minus) di depan angka

Kode : Tipe Data Integer

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number : ";
var_dump(1_241_241_241);

Kode : Tipe Data Floating Point
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_123.123);

Integer Overflow
Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point

Kode : Integer Overflow

echo "Integer Overflow : ";
var_dump(9223372036854775808);

Tipe Data Boolean
Tipe data boolean adalah tipe data paling sederhana di PHP
Tipe data boolean adalah tipe data dengan nilai kebenaran (benar atau salah)
Nilai benar direpresentasikan dengan true (case insensitive)
Nilai salah direpresentasikan dengan false (case insensitive)

Kode : Tipe Data Boolean
echo "Benar : ";
var_dump(true);

echo "Salah : ";
var_dump(false);

Tipe Data String
Tipe data string adalah tipe data representasi dari teks
String bisa mengandung kosong atau banyak karakter

Single Quote
Untuk membuat String di PHP, kita bisa menggunakan single quote
echo 'Name : ';
echo 'Eko Kurniawan Khannedy';

Double Quote
Selain single quote, kita juga bisa menggunakan double quote. Salah satu kelebihan menggunakan double quote adalah, kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER \t untuk TAB, \” untuk double quote, dan lain-lain
echo "Name : ";
echo "Eko\t Kurniawan\t Khannedy\n";

Multiline String
Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER
Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc

Heredoc
Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual
echo <<<EKO
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
EKO;

Nowdoc
Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double Quote. Masalah parsing akan kita bahas di materi Manipulasi String
echo <<<'EKO'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
EKO;

Variable
Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
Untuk membuat variable kita bisa menggunakan tanda $ (dolar) diikuti dengan nama variable nya
Penamaan variable tidak boleh mengandung spasi

Kode : Variable
$name = "Eko";
$age = 30;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;

Variable Variables
PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama variable nya

Kode : Variable Variables
$contoh = "eko";
$$contoh = "kurniawan";

echo "Contoh : ";
echo $contoh;
echo "\n";

echo "eko : ";
echo $eko;
echo "\n";

Constant
Variable di PHP sifatnya mutable, artinya bisa dirubah
Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di PHP
Sebagai gantinya, terdapat fitur yang namanya constant
Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
Untuk membuat constant kita bisa menggunakan function define()
Best practice pembuatan nama constant adalah menggunakan UPPER_CASE

Kode : Constant
define("AUTHOR", "Programmer Zaman Now");
define("APP_VERSION", 100);

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "App Version : ";
echo APP_VERSION;
echo "\n";

Data NULL
Nilai NULL merepresentasikan sebuah variable tanpa nilai.
Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)

Kode : Data NULL
$name = "Eko";
$name = null;

$age = null;

Mengecek Apakah Data NULL
Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function is_null($variable)

Kode : Mengecek NULL
echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

Menghapus Variable
Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan menggunakan function unset($variable)
Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mengeccek apakah sebuah variable ada dan nilainya tidak NULL

Kode : Unset dan Isset
$contoh = "Eko";
unset($contoh);

$contoh = "Kurniawan";
$contoh = null;

var_dump(isset($contoh));

Tipe Data Array
Array adalah tipe data yang berisikan kosong atau banyak data
Array di PHP bisa berisikan data dengan jenis berbeda-beda
Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array sebanyak-banyaknya, tidak dibatasi kapasitasnya

Cara Kerja Array
first index = 0

Kode : Membuat Array
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);
*/
