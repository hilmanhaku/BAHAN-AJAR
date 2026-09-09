# Panduan Lengkap Instalasi Sistem Operasi Menggunakan VirtualBox

Panduan ini berisi langkah-langkah praktis untuk melakukan instalasi Sistem Operasi (OS) di dalam mesin virtual menggunakan aplikasi **Oracle VM VirtualBox**.

---

## 📋 Prasyarat Sistem

Sebelum memulai proses instalasi, pastikan Anda telah menyiapkan hal-hal berikut:

1. **Aplikasi VirtualBox**: Sudah terinstal di komputer/laptop utama (*Host OS*).
2. **File ISO Sistem Operasi**: File *installer* OS yang ingin diinstal (contoh: Windows 10/11, Ubuntu Linux, Debian, dll).
3. **Spesifikasi Hardware Cukup**:
   - **RAM**: Minimal 8 GB (direkomendasikan agar *Host* dan *Guest OS* berjalan lancar).
   - **Penyimpanan (Storage)**: Sisa ruang disk minimal 20 - 50 GB.
   - **Prosesor**: Mendukung teknologi virtualisasi (VT-x / AMD-V) dan sudah diaktifkan di BIOS/UEFI.

---

## 🚀 Langkah 1: Membuat Mesin Virtual Baru (Virtual Machine)

1. Buka aplikasi **Oracle VM VirtualBox**.
2. Klik tombol **New** (Baru) atau tekan `Ctrl + N`.
3. Isi informasi dasar mesin virtual:
   - **Name**: Beri nama mesin virtual (contoh: `Ubuntu 22.04 LTS` atau `Windows 10`).
   - **Folder**: Lokasi penyimpanan file mesin virtual.
   - **ISO Image**: Pilih file ISO OS yang sudah diunduh (opsional, bisa dipilih nanti).
   - **Type**: Pilih tipe OS (contoh: *Linux* atau *Microsoft Windows*).
   - **Version**: Pilih versi OS yang sesuai (contoh: *Ubuntu (64-bit)* atau *Windows 10 (64-bit)*).
4. Klik **Next**.

---

## ⚙️ Langkah 2: Mengatur Alokasi Hardware

1. **Base Memory (RAM)**:
   - Geser *slider* untuk menentukan kapasitas RAM.
   - *Rekomendasi*: Minimal 2048 MB (2 GB) untuk Linux, atau 4096 MB (4 GB) untuk Windows 10/11. Pastikan indikator tetap berada di area hijau.
2. **Processors (CPU)**:
   - Tentukan jumlah inti CPU (*core*) yang dialokasikan (direkomendasikan 2 *core* atau lebih).
3. Klik **Next**.

---

## 💾 Langkah 3: Membuat Virtual Hard Disk

1. Pilih opsi **Create a Virtual Hard Disk Now**.
2. Isi kapasitas penyimpanan (*Disk Size*):
   - **Linux**: Minimal 20 GB.
   - **Windows**: Minimal 40 - 64 GB.
3. Klik **Next**, lalu periksa ringkasan konfigurasi.
4. Klik **Finish**.

---

## 💿 Langkah 4: Memuat File ISO (Jika Belum Dipilih)

1. Pilih mesin virtual yang baru dibuat pada daftar di sebelah kiri.
2. Klik menu **Settings** (Pengaturan) atau tekan `Ctrl + S`.
3. Masuk ke tab **Storage** (Penyimpanan).
4. Pada bagian *Storage Devices*, klik ikon kaset/CD yang bertuliskan **Empty** (Kosong).
5. Pada panel sebelah kanan, klik ikon kaset di samping menu *Attributes*, lalu pilih **Choose a disk file...**.
6. Cari dan pilih file ISO OS Anda, lalu klik **Open**.
7. Klik **OK** untuk menyimpan pengaturan.

---

## 🖥️ Langkah 5: Memulai Instalasi Sistem Operasi

1. Klik tombol **Start** (Mulai) dengan ikon panah hijau.
2. Jendela mesin virtual akan terbuka dan memuat bootloader dari file ISO.
3. Ikuti panduan instalasi standar pada layar (contoh untuk Ubuntu/Windows):
   - Pilih **Bahasa** dan **Tata Letak Keyboard**.
   - Pilih opsi **Install** / **Instalasi**.
   - Atur **Partisi Hard Disk** (pilih opsi *Erase disk and install* jika menggunakan mesin virtual baru).
   - Tentukan **Zona Waktu**.
   - Buat **Akun Pengguna** (Nama, Username, dan Password).
4. Tunggu hingga proses instalasi selesai.

---

## 🔄 Langkah 6: Penyelesaian & Restart

1. Setelah instalasi selesai, sistem akan meminta Anda untuk me-restart mesin virtual.
2. Lepaskan file ISO (*Unmount* media virtual) agar tidak kembali ke menu instalasi:
   - Biasanya VirtualBox akan melepas ISO secara otomatis saat diminta *press ENTER*.
   - Jika tidak, masuk ke menu VirtualBox: **Devices** > **Optical Drives** > **Remove disk from virtual drive**.
3. Tekan **Enter** atau klik **Restart Now**.

---

## 💡 Tip Tambahan: Instal VirtualBox Guest Additions

Setelah berhasil masuk ke dalam Sistem Operasi di VirtualBox, disarankan untuk menginstal **Guest Additions** agar pengalaman penggunaan lebih optimal:

- **Manfaat**:
  - Layar dapat diubah ke mode *Full Screen* (Auto-resize resolution).
  - Mengaktifkan fitur *Drag and Drop* serta *Shared Clipboard* antara Komputer Asli (*Host*) dan Mesin Virtual (*Guest*).
  - Performa grafis yang lebih lancar.
- **Cara Instal**:
  1. Pada menu jendela VirtualBox, klik **Devices** > **Insert Guest Additions CD image...**.
  2. Buka File Manager di dalam OS mesin virtual dan jalankan file installer Guest Additions.
  3. Ikuti instruksi di layar, lalu restart mesin virtual.

---
*Panduan ini dibuat untuk mempermudah proses belajar virtualisasi menggunakan VirtualBox.*
