
## Halo! Selamat datang di website milik Kelompok 3 khusus untuk Project Software Engineer 2023.

#### Anggota Kelompok:
<ul>
<li>2440064702 - Kania Agatha</li>
<li>2440094352 - Devin Augustin</li>
<li>2440114373 - Rico Frenaldi T.</li>
<li>2440102120 - Nicholaus</li>
<li>2440067175 - Ariel Sefrian</li>
</ul>

### Cara setup aplikasi:
<ol>
<li>
Jalankan `composer install`
</li>

<br>

<li>
Copy file `.env.example`, kemudian paste di folder projectnya dan hapus `.example`, sehingga hanya tersisa `.env`
</li>

<br>

<li>
Apabila file `.env` sudah ada, jalankan `php artisan key:generate` di terminal
</li>

<br>

<li>
Setelah itu, jalankan `php artisan cache:clear` dan `php artisan config:clear` di terminal
</li>

<br>

<li>
Buka XAMPP, nyalakan Apache dan MySQL
</li>

<br>

<li>
Pada MySQL, klik Admin.
</li>

<br>

<li>
Anda akan di-direct ke halaman local phpMyAdmin. Di halaman itu, buat database baru dengan nama <strong>kelompok</strong> supaya sama dengan yang di dalam .env
</li>

<br>

<li>
Kemudian jalankan `php artisan migrate:fresh --seed` di terminal, tunggu sampai selesai migrate
</li>

<br>

<li>
Jalankan `php artisan serve`.
</li>

<br>

<li>
Navigasi ke localhost yang digenerate oleh `php artisan serve`, Anda akan di-direct ke halaman HOME.
</li>
</ol>

<hr>

### Copyright &copy; --- Kelompok 3 SE
