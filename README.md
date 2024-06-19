# Portfi.online

Portfi.online adalah platform pembuat portofolio online yang memungkinkan pengguna untuk membuat, mengelola, dan membagikan portofolio mereka secara efisien. Proyek ini dikembangkan untuk membantu individu di berbagai bidang kreatif dan profesional memamerkan karya dan pencapaian mereka dengan lebih baik.

## Daftar Isi

- [Fitur Utama](#fitur-utama)
- [Instalasi](#instalasi)
- [Penggunaan](#penggunaan)
- [Struktur Proyek](#struktur-proyek)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

## Fitur Utama

- **Registrasi Pengguna**: Pengguna dapat membuat akun dengan email dan kata sandi. Verifikasi email untuk keamanan tambahan.
- **Pembuatan Profil Pengguna**: Pengguna dapat menambahkan informasi pribadi seperti nama, foto profil, dan ringkasan diri.
- **Pemilihan Templat Portofolio**: Pilihan berbagai templat portofolio yang berbeda, dengan opsi untuk menyesuaikan tata letak dan desain.
- **Unggah Konten**: Kemampuan untuk mengunggah dan menampilkan berbagai jenis konten, seperti gambar, video, dan dokumen.
- **Manajemen Proyek**: Fitur untuk mengelompokkan konten ke dalam proyek atau kategori yang berbeda.
- **Pengaturan Privasi**: Opsi untuk mengatur privasi portofolio.
- **Penyimpanan Cloud**: Penyimpanan aman dan terkendali dari konten portofolio di server cloud.
- **Analisis Pengguna**: Pemantauan statistik pengguna, seperti jumlah kunjungan, interaksi, dan waktu yang dihabiskan di halaman portofolio.
- **Responsif dan SEO**: Desain responsif dan optimisasi mesin telusur (SEO).

## Instalasi

### Prasyarat

Pastikan Anda telah menginstal:

- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [Composer](https://getcomposer.org/)

### Langkah-langkah Instalasi

1. Klon repositori ini:
    ```sh
    git clone https://github.com/bobys16/portfi.git
    cd portfi.online/src
    ```

2. Buat database MySQL dan sesuaikan pengaturan koneksi di `dashboard/config.php`:
    ```php
    <?php
    $connect = mysqli_connect('localhost','user','password','database');
    $db_status = true;
    if (!$connect) {
        $db_status = false;
    }
    ?>
    ```

3. Asumsikan anda sudah mempunyai domain yang terhubung dengan Cloudflare dan cPanel hosting. lalu rubah juga pengaturan di `dashboard/config.php`:
    ```php
    <?php
    $cpanelUsername = 'cpanelUsername';
    $cpanelPassword = 'cpanelPassword';
    $cloudflareApiKey = 'cloudflareApiKey';
    $cloudflareEmail = 'cloudflareEmail';
    $cloudflareZoneID = 'cloudflareZoneID';
    $domain = 'portfi.online'; // Change your main domain
    $ipAddress = 'ipAddress'; // Ip address of your cPanel
    ?>
    ```

3. Jalankan server PHP:
    ```sh
    php -S localhost:8000 -t portfi
    ```

Aplikasi akan berjalan di `http://localhost:8000`.

## Penggunaan

1. Buka browser Anda dan navigasi ke `http://localhost:8000`.
2. Buat akun baru atau login dengan akun yang sudah ada.
3. Mulai membuat dan mengelola portofolio Anda!

## Struktur Proyek

```portfi.online/
├── backend/
│   ├── controllers/
│   ├── models/
│   ├── routes/
│   ├── views/
│   ├── config.php
│   └── ...
├── frontend/
│   ├── public/
│   ├── src/
│   │   ├── components/
│   │   ├── pages/
│   │   ├── App.js
│   │   ├── index.js
│   │   └── ...
├── README.md
└── ...
```

## Kontribusi

Kami menyambut kontribusi dari siapa saja. Untuk berkontribusi, silakan fork repositori ini, buat branch fitur Anda, dan kirim pull request. Pastikan untuk menuliskan deskripsi yang jelas tentang perubahan yang Anda buat.

1. Fork repositori ini
2. Buat branch fitur Anda (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan Anda (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buka pull request

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.
