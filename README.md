# Laporan Praktikum Pemrograman Web - Lab 7 PHP
**Mata Kuliah:** Pemrograman Web OBE  
**Proyek:** `localhost/lab7_php`

---

## 1. Laporan Praktikum dan Pengumpulan

1. **Buat folder proyek bernama `Lab7_php`.**  
   Seluruh file skrip latihan PHP dan dokumentasi laporan ini disimpan di dalam satu direktori penampung utama pada web server lokal lab7_php.

2. **Sertakan file PHP untuk setiap latihan dan mini project.**  
   Repositori ini memuat seluruh kode dari Latihan 1 sampai dengan Latihan 7 secara lengkap dan terstruktur.

3. **Buat `README.md` berisi tujuan, perangkat, cara menjalankan server lokal, struktur file, dan ringkasan hasil.**  
   (Dokumentasi ini disusun secara komprehensif mengikuti standar pelaporan praktikum).

4. **Ambil screenshot browser yang menunjukkan output setiap latihan serta hasil validasi form.**  
   *Catatan pengujian visual telah diuji langsung melalui browser lokal pada port Apache.*

5. **Jelaskan minimal dua kasus input valid dan dua kasus input tidak valid.**  
   Tersedia pada bagian pengujian validasi form di bawah.

6. **Commit seluruh pekerjaan ke repository dan kumpulkan URL sesuai arahan dosen.**

---

## 2. Tujuan Praktikum
* Memahami cara menjalankan skrip PHP di web server lokal (XAMPP / Apache).
* Mempelajari penggunaan variabel, operator aritmatika, percabangan (`if-else`), dan perulangan (`foreach`).
* Mampu membuat dan menggunakan fungsi kustom (*function*).
* Menguasai teknik pemrosesan data form menggunakan metode HTTP `GET` dan `POST`.
* Menerapkan validasi data sisi server untuk menjaga keamanan dan integritas aplikasi web.

---

## 3. Perangkat yang Digunakan
* **Web Server Lokal:** XAMPP (Apache & PHP Versi Terbaru)
* **Code Editor:** Visual Studio Code
* **Browser:** Google Chrome / Microsoft Edge

---

## 4. Cara Menjalankan Server Lokal
1. Buka aplikasi **XAMPP Control Panel**.
   <img width="952" height="566" alt="image" src="https://github.com/user-attachments/assets/a1ffde4e-b278-4567-859a-ff52e3e60ae0" />

3. Klik tombol **Start** pada modul **Apache** hingga statusnya berubah menjadi hijau (*Running*).
4. Letakkan folder proyek **`Lab7Web_PHP`** ke dalam direktori penyimpanan server lokal, yaitu di:
   ```text
   ```
5. Buka browser, lalu akses URL berikut untuk melihat daftar direktori atau menjalankan file:
   ```text
   http://localhost/lab7_php/
   ```
   

## 5. Struktur File Proyek
* `index.php` — Latihan 1: Skrip dasar PHP dan fungsi waktu server.
* `latihan2.php` — Latihan 2: Variabel, operator, dan percabangan nilai akademik.
* `latihan3.php` — Latihan 3: Perulangan `foreach` dan array daftar mahasiswa.
* `latihan4.php` — Latihan 4: Pembuatan fungsi kustom (diskon, luas persegi panjang, kelulusan).
* `cari.php` — Latihan 5: Pemrosesan form sederhana menggunakan metode `GET`.
* `latihan6.php` — Latihan 6: Pengolahan form metode `POST` dan validasi kolom kosong.
* `latihan7.php` — Latihan 7: Pengolahan data transaksi sederhana dengan validasi angka.

---

## 6. Pengujian Kasus Input (Valid & Tidak Valid)

### A. Kasus Input Valid
1. **Kasus Valid 1 (Latihan 6 - Form POST):**
   * **Input Data:** Nama = `Syafirah`, Program Studi = `Teknik Informatika`
   * **Output / Hasil:** Berhasil lolos validasi, sistem mencetak konfirmasi: 
     > *Data diterima*<br>
     > *Nama: Syafira*<br>
     > *Program Studi: Teknik Informatika*
2. **Kasus Valid 2 (Latihan 7 - Kalkulasi Transaksi):**
   * **Input Data:** Nama Barang = `Buku Tulis`, Harga = `5000`, Jumlah = `2`
   * **Output / Hasil:** Berhasil menghitung subtotal secara akurat:
     > *Barang: Buku Tulis*<br>
     > *Subtotal: Rp10.000*

### B. Kasus Input Tidak Valid
1. **Kasus Tidak Valid 1 (Latihan 6 - Input Kosong):**
   * **Input Data:** Nama dikosongkan (`""`), Program Studi dikosongkan (`""`)
   * **Output / Hasil:** Sistem mendeteksi parameter kosong melalui pengecekan kondisi `if` dan mengeluarkan pesan peringatan:
     > *Semua kolom wajib diisi.*
2. **Kasus Tidak Valid 2 (Latihan 7 - Harga Negatif & Jumlah Nol):**
   * **Input Data:** Nama Barang = `Pensil`, Harga = `-2000`, Jumlah = `0`
   * **Output / Hasil:** Validasi sisi server menolak rentang nilai yang tidak valid (harga negatif dan jumlah di bawah 1), lalu mengeksekusi blok error:
     > *Periksa kembali nama barang, harga,

## 7. Screenschoot hasil web browser miniproject
Berdasarkan tangkapan layar program web PHP yang dijalankan pada server lokal Gambar tersebut menampilkan halaman web lokal (localhost/miniproject_php/) yang berisi Form Input Data Mahasiswa.   Penjelasan ringkas dari komponen gambar:Formulir Isian: Berisi kolom data diri yang telah terisi (Nama: Syafira, NIM: 312510179, Program Studi: Teknik Informatika, Semester: 3, dan Email: syafiraanwar15@gmail.com) beserta tombol Kirim Data.   Hasil Pemrosesan (Kotak Hijau): Menunjukkan bahwa data telah berhasil dikirim (POST) dan divalidasi oleh skrip PHP, lalu merender ulang informasi data mahasiswa tersebut di bawah form.
<img width="1921" height="976" alt="Screenshot 2026-11-15 105226" src="https://github.com/user-attachments/assets/ee98b475-833f-4b96-a261-f91502f304fa" />

## 8. Hasil Langkah Kerja Praktikum

Gambar tersebut menampilkan halaman web "Belajar PHP" yang berisi modul praktikum dasar pemrograman web, yang mencakup:

Menampilkan Teks & Waktu Server: Menjalankan skrip dasar PHP dan menampilkan waktu server secara dinamis.

Perhitungan Nilai Akhir: Menampilkan hasil perhitungan nilai dan predikat mahasiswa (Siti).

Daftar Mahasiswa: Menampilkan array data nama mahasiswa (Alya, Bima, Citra, Doni).

Perhitungan Diskon: Menghitung potongan harga otomatis (harga awal, diskon 10%, dan harga akhir).

Form Pencarian (GET): Input pencarian data menggunakan metode HTTP GET.

Form Input Data Mahasiswa (POST): Formulir untuk mengirimkan data nama dan program studi menggunakan metode HTTP POST.

Perhitungan Subtotal Belanja: Formulir untuk menghitung total harga berdasarkan nama barang, harga satuan, dan jumlah pembelian.
<img width="1627" height="997" alt="Screenshot 2026-11-15 112927" src="https://github.com/user-attachments/assets/9609ead2-1fcd-4cd7-8b49-84da8ac69bfd" />
