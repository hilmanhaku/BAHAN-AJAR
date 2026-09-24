<?php

// ==============================
// 1. DATA MAHASISWA
// ==============================

$nama = "ilman Hadi Kusuma";
$nim = "22524123";
$prodi = "PTIK";
$angkatan = "2021";
$nilai = 85;


// ==============================
// 2. PROSES DATA
// ==============================

// Mengubah nama menjadi huruf kapital
$namaUpper = strtoupper($nama);

// Mengambil 4 digit terakhir NIM
$kodeKartu = substr($nim, -4);

// Menentukan status kelulusan
if ($nilai >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}

// Mengambil tanggal saat ini
$waktuCetak = date("d-m-Y");


// ==============================
// 3. FUNCTION
// ==============================

// Membuat garis pemisah
function cetakGaris()
{
    echo str_repeat("-", 40);
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kartu Identitas Mahasiswa</title>

    <style>

        /* Mengatur tampilan halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            margin: 0;
            padding: 40px;
        }

        /* Membuat kartu */
        .kartu {
            width: 600px;
            margin: auto;
            background-color: white;
            border: 2px solid #2563eb;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* Judul kartu */
        .judul {
            background-color: #2563eb;
            color: white;
            text-align: center;
            padding: 15px;
            border-radius: 8px;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Membuat area isi kartu */
        .isi {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        /* Tabel data */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #cbd5e1;
            padding: 10px;
        }

        td:first-child {
            width: 150px;
            font-weight: bold;
            background-color: #eff6ff;
        }

        /* Foto mahasiswa */
        .foto {
            width: 140px;
            height: 170px;
            object-fit: cover;
            border: 2px solid #2563eb;
            border-radius: 8px;
        }

        /* Status Lulus */
        .lulus {
            color: green;
            font-weight: bold;
        }

        /* Status Tidak Lulus */
        .tidak-lulus {
            color: red;
            font-weight: bold;
        }

        /* Garis pemisah */
        .garis {
            margin-top: 20px;
            text-align: center;
            color: #64748b;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: #64748b;
        }

    </style>

</head>

<body>

    <div class="kartu">

        <!-- Judul kartu -->
        <div class="judul">
            KARTU TANDA MAHASISWA
        </div>


        <div class="isi">

            <!-- Tabel data mahasiswa -->
            <table>

                <tr>
                    <td>Nama</td>
                    <td>
                        <?php echo $namaUpper; ?>
                    </td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td>
                        <?php echo $nim; ?>
                    </td>
                </tr>

                <tr>
                    <td>Kode Kartu</td>
                    <td>
                        <?php echo $kodeKartu; ?>
                    </td>
                </tr>

                <tr>
                    <td>Program Studi</td>
                    <td>
                        <?php echo $prodi; ?>
                    </td>
                </tr>

                <tr>
                    <td>Angkatan</td>
                    <td>
                        <?php echo $angkatan; ?>
                    </td>
                </tr>

                <tr>
                    <td>Nilai</td>
                    <td>
                        <?php echo $nilai; ?>
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>

                        <?php if ($status == "LULUS") { ?>

                            <span class="lulus">
                                <?php echo $status; ?>
                            </span>

                        <?php } else { ?>

                            <span class="tidak-lulus">
                                <?php echo $status; ?>
                            </span>

                        <?php } ?>

                    </td>
                </tr>

                <tr>
                    <td>Waktu Cetak</td>
                    <td>
                        <?php echo $waktuCetak; ?>
                    </td>
                </tr>

            </table>


            <!-- Foto mahasiswa -->
            <div>

                <img
                    src="ft.jpg"
                    alt="Foto Mahasiswa"
                    class="foto"
                >

            </div>

        </div>


        <!-- Memanggil function -->
        <div class="garis">

            <?php
            cetakGaris();
            ?>

        </div>


        <!-- Footer -->
        <div class="footer">

            Bahasa Pemrograman III (PHP/MySQL)

        </div>

    </div>

</body>

</html>