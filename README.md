# PHP Secure Backdoor Detector

## Deskripsi Proyek
PHP Secure Backdoor Detector adalah alat untuk meningkatkan keamanan website berbasis PHP dengan mendeteksi dan menghapus file backdoor berbahaya yang mungkin ada di server. Alat ini memindai direktori yang ditentukan dan memberi notifikasi kepada administrator jika ditemukan file yang mencurigakan.

## Fitur Utama
- **Pemindaian Folder**: Memindai folder dan subfolder untuk menemukan file yang mencurigakan.
- **Deteksi Malware Lanjutan**: Menggunakan pola dan algoritma untuk mendeteksi file berbahaya.
- **Pemberitahuan Otomatis**: Mengirimkan email kepada administrator jika file baru ditambahkan ke folder yang dipindai.
- **Backup File**: Membuat salinan file yang mencurigakan sebelum menghapusnya.
- **Pengaturan File Aman**: Memungkinkan pengguna untuk menentukan file yang dianggap aman.
- **Laporan Deteksi**: Menghasilkan laporan tentang file yang terdeteksi.
- **Antarmuka Pengguna Sederhana**: Memudahkan pengguna dalam mengoperasikan alat ini.

## Cara Menggunakan
1. **Setup**: Buat folder baru dengan nama `php_secure_backdoor_detector` dan simpan semua file yang diperlukan di dalam folder tersebut.
2. **Edit `config.php`**: Sesuaikan `SCAN_DIR` dengan path ke direktori website Anda dan ubah `ADMIN_EMAIL` menjadi alamat email yang valid.
3. **Akses Antarmuka**: Buka `index.php` melalui browser untuk memulai pemindaian.
4. **Pengaturan File Aman**: Akses `settings.php` untuk menambah atau mengubah daftar file yang dianggap aman.
5. **Jadwalkan Pemindaian**: Anda dapat menggunakan cron job untuk menjadwalkan pemindaian otomatis. Contoh perintah:
```bash
   * * * * * /usr/bin/php /path/to/php_secure_backdoor_detector/scan.php
```
6. Cek Laporan: Hasil pemindaian akan disimpan di `report.txt` dan **log** aktivitas di `log.txt`.

## Persyaratan
 * PHP 7.0 atau yang lebih baru
 * Akses ke server dengan izin untuk menjalankan skrip PHP

# Hak Cipta dan Informasi Penggunaan

Proyek ini dikembangkan dan dimiliki oleh **PT. PwnOsec Technologies Ltd.**. Semua hak cipta, kekayaan intelektual, dan pengembangan perangkat lunak ini sepenuhnya dimiliki oleh perusahaan tersebut.

## Informasi Perusahaan

- **Nama Perusahaan:** PT. PwnOsec Technologies Ltd.
- **Pengembang:** @pwnosec
- **Lisensi:** Semua hak cipta dilindungi oleh undang-undang yang berlaku dan tidak dapat digunakan kembali tanpa izin resmi dari PT. PwnOsec Technologies Ltd.
- **Penggunaan Resmi:** Alat ini dikembangkan secara resmi oleh badan usaha tersebut dan digunakan untuk tujuan penelitian keamanan siber, pengembangan perangkat lunak, dan penyediaan solusi keamanan bagi klien dan mitra.

## Hak Cipta

Hak cipta sepenuhnya dimiliki oleh **PT. PwnOsec Technologies Ltd.** dengan semua hak yang terkait. Tidak ada bagian dari perangkat lunak ini, baik dalam bentuk kode sumber, dokumentasi, maupun komponen lainnya, yang boleh didistribusikan, dimodifikasi, atau digunakan untuk tujuan komersial tanpa persetujuan tertulis dari pemilik hak cipta.

### Tanggal Penerbitan

Hak cipta ini berlaku mulai dari tanggal penerbitan proyek ini, dan akan diperbarui secara berkala oleh **PT. PwnOsec Technologies Ltd.** untuk memastikan perlindungan hukum yang sesuai.

## Lisensi Penggunaan

Proyek ini dilisensikan di bawah model lisensi berikut:

1. **Penggunaan Komersial:**
   Penggunaan komersial perangkat lunak ini hanya diizinkan bagi pihak-pihak yang telah mendapatkan lisensi resmi dari PT. PwnOsec Technologies Ltd.

2. **Penggunaan Pribadi:**
   Anda diizinkan untuk mempelajari dan mengkloning proyek ini hanya untuk penggunaan pribadi dan edukasi. Penggunaan dalam skala komersial, redistribusi, atau penjualan kembali perangkat lunak ini memerlukan izin resmi.

3. **Modifikasi:**
   Modifikasi diperbolehkan hanya untuk penggunaan internal dan pribadi. Setiap modifikasi yang dilakukan tidak boleh didistribusikan atau dijual tanpa persetujuan dari PT. PwnOsec Technologies Ltd.

## Kontak

Jika Anda memiliki pertanyaan terkait penggunaan, lisensi, atau memerlukan izin penggunaan komersial, silakan hubungi kami di:

- **Email:** info@pwnosec.com
- **Situs Web:** [www.pwnosec.com](http://www.pwnosec.com)
- **Alamat Kantor:**
  PT. PwnOsec Technologies Ltd.  
  Jl. Keamanan Siber No. 123, Jakarta, Indonesia

---

Hak cipta © 2024 **PT. PwnOsec Technologies Ltd.**. Semua hak dilindungi undang-undang.
