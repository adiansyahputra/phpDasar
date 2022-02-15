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

Operasi Array
 Operasi
Keterangan
$array[index]
Mengakses data di array pada nomor index
$array[index] = value
Mengubah data di array pada nomor index dengan value baru
$array[] = value
Menambah data di array pada posisi paling belakang
unset($array[index])
Menghapus data di array, index otomatis hilang dari array
count($array)
Mengambil total data di array

Kode : Operasi Array
var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

Array Sebagai Map
Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value
Namun di PHP, Map bisa dibuat menggunakan Array
Secara default Array akan menggunakan index (number) sebagai key dan value nya kita bisa bebas memasukkan data ke dalam Array
Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misal nya
Hal tersebut terlihat seperti Map di bahasa pemrograman lain

Kode : Membuat Map
$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($eko);

var_dump($eko["name"]);
var_dump($eko["address"]["country"]);

Array di dalam Array
Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($budi);

Operator Aritmatika (1)
Operator
Keterangan
+$variable
Positif
-$variable
Negatif
$variable + $variable
Penambahan
$variable - $variable
Pengurangan
$variable * $variable
Perkalian
$variable / $variable
Pembagian
$variable % $variable
Sisa bagi
$variable ** $variable
Pangkat

Kode : Operator Aritmatika
$a = 10;
$b = 10;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 100 % 3;
var_dump($resultModulo);

Operator Penugasan
Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan karakter = (sama dengan)
Operator penugasan sudah sering kita gunakan, terutama ketika mengubah value sebuah variable
Namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika

Operator Penugasan Aritmatika
Penugasan
Keterangan
$a += $b
$a = $a + b
$a -= $b
$a = $a - b
$a *= $b
$a = $a * b
$a /= $b
$a = $a / b
$a %= $b
$a = $a % b

Kode : Operator Penugasan Aritmatika
$total = 0;

$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;


$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);

Operator Perbandingan
Operator perbandingan, seperti namanya, digunakan untuk membandingan dua buat value
Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika perbandingannya salah

Operator Perbandingan (1)
 Operator
Nama
Keterangan
$a == $b
Sama dengan
true jika $a sama dengan $b setelah dilakukan konversi tipe data
$a === $b
Identik
true jika $a sama dengan $b dan memiliki tipe data yang sama
$a != $b
Tidak sama dengan
true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
$a <> $b
Tidak sama dengan
true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
 $a !== $b
Tidak identik
true jika $a tidak sama dengan $b atau tidak sama tipe data
$a < $b
Kurang dari
true jika $a kurang dari $b
$a <= $b
Kurang dari atau sama dengan
true jika $a kurang dari atau sama dengan $b
$a > $b
Lebih dari 
true jika $a lebih dari $b
$a >= $b
Lebih dari sama dengan
true jika $a lebih dari atau sama dengan $b

Kode : Operator Perbandingan
var_dump("10" == 10);
var_dump("10" === 10);

var_dump(10 < 9);
var_dump(9 >= 9);

Operator Logika
Operator logika adalah operator untuk membandingkan dua nilai boolean
Hasil dari operator logika adalah boolean lagi

Operator Logika
 Operator
Nama
Hasil
$a && $b
And
true jika $a dan $b keduanya true
$a and $b
And
true jika $a dan $b keduanya true
$a || $b
Or
true jika $a dan $b salah satu atau keduanya true
$a or $b
Or
true jika $a dan $b salah satu atau keduanya true 
! $a
Not
true jika $a bernilai false
$a xor $b
Xor
true jika $a dan $b salah satu true, tapi tidak keduanya

Kode : Operator Logika
var_dump(true && true);
var_dump(true && false);

var_dump(true || false);
var_dump(true || true);

var_dump(true xor false);
var_dump(true xor true);

var_dump(!true);
var_dump(!false);

Increment dan Decrement
PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka
Ini bisa mempersingkat kita ketika ingin menaikkan data

Operator Increment dan Decrement
 Contoh
Name
Efek
$a++
Post increment
Kembalikan $a lalu naikkan 1 angka
++$a
Pre increment
Naikkan $a satu angka, lalu kembalikan $a
$a--
Post decrement
Kembalikan $a lalu turunkan 1 angka
--$a
Pre decrement
Turunkan $a satu angka, lalu kembalikan $a

Kode : Operator Increment dan Decrement
$a = 10;

$b = ++$a;

var_dump($a);
var_dump($b);

Operator Array
Di PHP, Array memiliki operator khusus
Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berbeda

Operator Array
 Contoh
Nama
Keterangan
$a + $b
Union
Menggabungkan array $a dan $b
$a == $b
Equality
true jika $a dan $b memiliki key-value sama
$a === $b
Identity
true jika $a dan $b memiliki key-value sama dan posisi sama
$a != $b
Inequality
true jika $a dan $b tidak sama
$a <> $b
Inequality
true jika $a dan $b tidak sama
$a !== $b
Nonidentity
true jika $a dan $b tidak identik

Kode : Operator Array (1)
$first = [
    "first_name" => "Eko"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Khannedy"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko"
];

var_dump($a == $b);
var_dump($a === $b);

Expression
Expression adalah bagian terpenting di PHP
Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
Secara sederhana, expression adalah apapun yang memiliki nilai atau value

Contoh Expression Sederhana
$a = 5; Ketika kita menuliskan “5”, maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression.
Lalu kita menulis kode $b = $a; $a bisa kita bilang adalah expression, karena $a adalah nilai 5

Contoh Expression Complex
Pada kode dibawah, getValue() adalah expression, karena getValue() bernilai angka 100. Tentang function nanti kita akan bahas lebih detail di materi tersendiri

Statement
Statement bisa dibilang adalah kalimat lengkap dalam bahasa.
Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma

Block
Block adalah kumpulan statement yang terdiri dari nol atau lebih statement.
Block diawali dan diakhiri dengan kurung kurawal { }

Manipulasi String

Dot Operator
Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya)
Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan . (dot) untuk menambahkan string dengan data lain

Kode : Dot Operator
$name = "Eko Kurniawan Khannedy";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

Konversi ke Number dan Sebaliknya
Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya
Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung ( tipe data )
Tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating point

Konversi ke Number dan Sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

Mengakses Karakter
String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
Sama seperti di array, index pertama dimulai dari 0
Jika kita mengakses index melebihi karakter di string, maka akan terjadi error

Kode : Mengakses Karakter
$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

Variable Parsing
Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
Ini memudahkan ketika kita ingin menggabungkan string dengan variable.
Cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya.

Kode : Variable Parsing
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

Curly Brace
Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing
Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing

Kode : Curly Brace
$var = "Eko";
echo "This is {$var}s" . PHP_EOL;

If Statement
Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan
Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
Hampir di semua bahasa pemrograman mendukung if expression

Else Statement
Blok if akan dieksekusi ketika kondisi if bernilai true
Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
Hal ini bisa dilakukan menggunakan else statement

Else If Statement
Kada dalam If, kita butuh membuat beberapa kondisi
Kasus seperti ini, di PHP kita bisa menggunakan Else If statement
Else if di PHP bisa lebih dari satu
Kode Else if di php bisa menggunakan “else if” atau “elseif” (digabung)

Kode : Else If Statement
$nilai = 10;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

Syntax Alternatif
Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan : (titik dua)
Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;

Switch Statement
Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya menggunakan perbandingan ==
Switch adalah statement percabangan yang sama dengan if, namun  lebih sederhana cara pembuatannya
Kondisi di switch statement hanya untuk perbandingan ==

$nilai = "E";

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
}

Syntax Alternatif
Sama seperti if statement, switch statement juga bisa tanpa menggunakan {} (kurung kurawal)
Namun diakhir switch statement, kita harus menambahkan kata kunci endswitch

Kode : Switch Statement Syntax Alternatif
switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;

Ternary Operator
Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
Ternary operator menggunakan kata kunci ? dan :

$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi bro!" : "Hi nona!";

echo $hi . PHP_EOL;

Null Coalescing Operator
Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tersebut isinya null atau bukan
Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable)
Namun untungnya di php ada null coalescing operator menggunakan tanda ??

Kode : Null Coalescing Operator 
$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;

For Loop
For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi

Sintak Perulangan For
for(init statement; kondisi; post statement){
   // block perulangan
}
Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
Post statement akan dieksekusi setiap kali diakhir perulangan
Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

for ($counter = 1; $counter <= 10; $counter++):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

for ($counter = 10; $counter >= 1; $counter--):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

While Loop
While loop adalah versi perulangan yang lebih sederhana dibanding for loop
Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement 

$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while ($counter <= 10) :
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;
endwhile;

Do While Loop
Do While loop adalah perulangan yang mirip dengan while
Perbedaannya hanya pada pengecekan kondisi
Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true

Kode : Do While Loop
$counter = 100;
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);

Break & Continue
Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya

Kode : Break
$counter = 1;

while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

Kode : Continue
for ($counter = 1; $counter <= 100; $counter++) {
    if($counter % 2 == 0){
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
}

For Each
Kadang kita biasa mengakses data array menggunakann perulangan
Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis

Kode : Tanpa For Each
$names = ["Eko", "Kurniawan", "Khannedy"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

Kode : For Each
$names = ["Eko", "Kurniawan", "Khannedy"];

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

Kode : For Each dengan Key
$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}




*/
