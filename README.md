# Laporan Praktikum Pemrograman Web - Lab 7 PHP
**Mata Kuliah:** Pemrograman Web OBE  
**Proyek:** `[Lab7Web_PHP](http://localhost/lab7_php/)`

---

## I. Laporan Praktikum dan Pengumpulan

1. **Buat folder proyek bernama `Lab7Web_PHP`.**  
   Seluruh file skrip latihan PHP dan dokumentasi laporan ini disimpan di dalam satu direktori penampung utama pada web server lokal (`C:\xampp\htdocs\Lab7Web_PHP\`).

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

## II. Tujuan Praktikum
* Memahami cara menjalankan skrip PHP di web server lokal (XAMPP / Apache).
* Mempelajari penggunaan variabel, operator aritmatika, percabangan (`if-else`), dan perulangan (`foreach`).
* Mampu membuat dan menggunakan fungsi kustom (*function*).
* Menguasai teknik pemrosesan data form menggunakan metode HTTP `GET` dan `POST`.
* Menerapkan validasi data sisi server untuk menjaga keamanan dan integritas aplikasi web.

---

## III. Perangkat yang Digunakan
* **Web Server Lokal:** XAMPP (Apache & PHP Versi Terbaru)
* **Code Editor:** Visual Studio Code
* **Browser:** Google Chrome / Microsoft Edge

---

## IV. Cara Menjalankan Server Lokal
1. Buka aplikasi **XAMPP Control Panel**.
2. Klik tombol **Start** pada modul **Apache** hingga statusnya berubah menjadi hijau (*Running*).
3. Letakkan folder proyek **`Lab7Web_PHP`** ke dalam direktori penyimpanan server lokal, yaitu di:
   ```text
   C:\xampp\htdocs\Lab7Web_PHP\
   ```
4. Buka browser, lalu akses URL berikut untuk melihat daftar direktori atau menjalankan file:
   ```text
   http://localhost/Lab7Web_PHP/
   ```

---

## V. Struktur File Proyek
* `index.php` — Latihan 1: Skrip dasar PHP dan fungsi waktu server.
* `latihan2.php` — Latihan 2: Variabel, operator, dan percabangan nilai akademik.
* `latihan3.php` — Latihan 3: Perulangan `foreach` dan array daftar mahasiswa.
* `latihan4.php` — Latihan 4: Pembuatan fungsi kustom (diskon, luas persegi panjang, kelulusan).
* `cari.php` — Latihan 5: Pemrosesan form sederhana menggunakan metode `GET`.
* `latihan6.php` — Latihan 6: Pengolahan form metode `POST` dan validasi kolom kosong.
* `latihan7.php` — Latihan 7: Pengolahan data transaksi sederhana dengan validasi angka.

---

## VI. Pengujian Kasus Input (Valid & Tidak Valid)

### A. Kasus Input Valid
1. **Kasus Valid 1 (Latihan 6 - Form POST):**
   * **Input Data:** Nama = `Syafirah`, Program Studi = `Teknik Informatika`
   * **Output / Hasil:** Berhasil lolos validasi, sistem mencetak konfirmasi: 
     > *Data diterima*<br>
     > *Nama: Syafirah*<br>
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
