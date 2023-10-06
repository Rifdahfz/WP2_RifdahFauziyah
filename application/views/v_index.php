<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>
<body>
<section>
        <h1><?php echo $judul ?></h1>
        <p align='justify'>Pada pengertian CodeIgniter diatas tadi dijelaskan bahwa CodeIgniter menggunakan metode MVC. 
        aapa itu MVC? Kita juga harus mengetahui apa itu MVC? sebelum masuk dan lebih jauh dalam belajar CodeIgniter.</p>
        <p>MVC  adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>

        <ol type="a">
         <li>Model</li>
         <p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
        Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengoalahan yang berhubungan dengan pengoalhan atau manipulasi database.
        Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. Semua intruksi atau fungsi yang  berhubung dengan pengolahan database di letakkan di dalam model.
        Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan krliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>

        <li>View</li>
        <p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser).
        Tampilan dari user interface dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>

        <li>Controller</li>
        <p align='justify'>Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung,
        intinya data yang tersimpan di database(model) diambil oleh controller dan kemudian controller pula yang menampilkannya ke view. Jadi controller lah yang mengolah intruksi.</p>

        <p align='justofy'>Dari penjelasan tentang model, view dan controller diatas dapat disimpulkan bahwa controller sebagai penghubung view dan model.
        Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode MVC, controllermemanggil intruksi pada model yanag mengambil data pada database,kemudian controller yang meneruskannya pada view untuk ditampilkan.
        Jadi jelas sudah dan snagt mudah dalam pengembangan aplikasi dengan cara MVC inin karena web designer atau front-end developer tidak perlu lagi berhubunagn dengan controller,
        dia hanya perlu berhubungan dengan view untuk mendesain tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya.
        Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan cepat dan terstruktur.</p>
    </ol>
</section>
</body>
</html>