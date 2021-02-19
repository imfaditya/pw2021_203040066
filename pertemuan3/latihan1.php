<?php 
    // Imam Faraz Aditya
    // 203040066
    // github.com/imfaditya/pw2021_203040066
    // Pertemuan 3 (13-02-2021)
    // Pertemuan kali ini membahas tentang struktur kendali pada PHP
?>
<?php 
    // Control Flow -- alur pembacaan program oleh interpreter
    // Ada 2 :

    // Pengulangan -- mengulang blok program tanpa menulis ulang blok programnya
    // 1. for
    // 2. while
    // 3. do.. while
    // 4. foreach -- Pengulangan spesifik untuk array

    // Pengkondisian
    // 1. if.. else
    // 2. if.. else if .. else
    // 3. ternary -- menggantikan sintaks if .. else yang lebih sederhana
    // 4. switch

    // 1. inisialisasi -- menentukan variabel awal untuk pengulangannya
    // 2. kondisi terminasi -- memberhentikan pengulangan
    // 3. increment / decrement

    // For
    // Struktur : for(inisialisasi;, kondisi terminasi;, increment/decrement){}
    // Membuat tulisan hello world 5x
    for ($i=0; $i<5; $i++){
        echo"Hello World! <br>";
    }

    // While
    // Struktur : 
    // while (kondisi terminasi){
    // increment/decrement
    // } 
    // Membuat tulisan Hello world 5x
    $i=5;
    while ($i>0){
        echo "Hello World! <br>";
        $i--;
    }

    // do .. while -- menjalankan blok program terlebih dahulu baru mengecek kondisi terminasi
    // Meskipun nilai awal tidak memenuhi kondisi terminasi, blok program tetap dijalankan 1x
    // Struktur :
    // do {
    // increment/decrement
    // } while (kondisi terminasi);
    // Membuat tulisan Hello world 5x
    $i=0;
    do {
        echo "Hello World ! <br>";
        $i++;
    } while($i<5);


    


    
?>