<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendataan Kendaraan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-container {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .form-container:hover {
            box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.15);
        }
        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .btn-submit {
            background-image: linear-gradient(to right, #3b82f6, #6366f1);
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            background-image: linear-gradient(to right, #2563eb, #4f46e5);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-100">
    <?php
    // Koneksi ke database
    $servername = "mysql";
    $username = "localhost";
    $password = "";
    $dbname = "it_bappenda";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Proses form jika data dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Bersihkan input
        $no_plat = htmlspecialchars($_POST['no_plat']);
        $merk = htmlspecialchars($_POST['merk']);
        $tipe = htmlspecialchars($_POST['type']);
        $silinder = htmlspecialchars($_POST['silinder']);
        $warna = htmlspecialchars($_POST['warna_kb']);
        $no_bpkb = htmlspecialchars($_POST['no_bpkb']);
        $no_rangka = htmlspecialchars($_POST['no_rangka']);
        $no_mesin = htmlspecialchars($_POST['no_mesin']);
        $bahan_bakar = htmlspecialchars($_POST['bahan_bakar']);
        $warna_tnbk = htmlspecialchars($_POST['warna_tnbk']);

        // SQL untuk insert data
        $sql = "INSERT INTO tbl_knd (No_Plat, Merk, Tipe, Silinder, Warna_kb, No_BPKB, No_Rangka, No_Mesin, Bahan_Bakar, Warna_TNBK) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $no_plat, $merk, $tipe, $silinder, $warna, $no_bpkb, $no_rangka, $no_mesin, $bahan_bakar, $warna_tnbk);

        if ($stmt->execute()) {
            $notification = '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <strong class="font-bold"><i class="fas fa-check-circle mr-2"></i>Sukses!</strong>
                                <span class="block sm:inline">Data kendaraan berhasil disimpan.</span>
                            </div>';
        } else {
            $notification = '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <strong class="font-bold"><i class="fas fa-exclamation-circle mr-2"></i>Gagal!</strong>
                                <span class="block sm:inline">Error: ' . $stmt->error . '</span>
                            </div>';
        }

        $stmt->close();
    }

    $conn->close();
    ?>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-4xl bg-white rounded-lg overflow-hidden form-container p-8">
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <i class="fas fa-car text-5xl text-blue-500"></i>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">FORMULIR KENDARAAN MASUK</h1>
                <p class="text-gray-600">Dinas Pendapatan Daerah - BAPPENDA</p>
            </div>

            <?php if(!empty($notification)) echo $notification; ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kolom Pertama -->
                <div class="space-y-4">
                    <div>
                        <label for="no_plat" class="block text-sm font-medium text-gray-700 mb-1">Nomor Plat Kendaraan <span class="text-red-500">*</span></label>
                        <input type="text" id="no_plat" name="no_plat" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Contoh: B 1234 ABC">
                    </div>

                    <div>
                        <label for="merk" class="block text-sm font-medium text-gray-700 mb-1">Merk Kendaraan <span class="text-red-500">*</span></label>
                        <input type="text" id="merk" name="merk" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Contoh: Toyota">
                    </div>

                    <div>
                        <label for="tipe" class="block text-sm font-medium text-gray-700 mb-1">Tipe Kendaraan <span class="text-red-500">*</span></label>
                        <input type="text" id="type" name="type" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Contoh: Avanza">
                    </div>

                    <div>
                        <label for="silinder" class="block text-sm font-medium text-gray-700 mb-1">Silinder (cc) <span class="text-red-500">*</span></label>
                        <input type="number" id="silinder" name="silinder" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Contoh: 1500">
                    </div>

                    <div>
                        <label for="warna" class="block text-sm font-medium text-gray-700 mb-1">Warna <span class="text-red-500">*</span></label>
                        <input type="text" id="warna_kb" name="warna_kb" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Contoh: Hitam">
                    </div>
                </div>

                <!-- Kolom Kedua -->
                <div class="space-y-4">
                    <div>
                        <label for="no_bpkb" class="block text-sm font-medium text-gray-700 mb-1">Nomor BPKB <span class="text-red-500">*</span></label>
                        <input type="text" id="no_bpkb" name="no_bpkb" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Masukkan nomor BPKB">
                    </div>

                    <div>
                        <label for="no_rangka" class="block text-sm font-medium text-gray-700 mb-1">Nomor Rangka <span class="text-red-500">*</span></label>
                        <input type="text" id="no_rangka" name="no_rangka" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Masukkan nomor rangka">
                    </div>

                    <div>
                        <label for="no_mesin" class="block text-sm font-medium text-gray-700 mb-1">Nomor Mesin <span class="text-red-500">*</span></label>
                        <input type="text" id="no_mesin" name="no_mesin" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Masukkan nomor mesin">
                    </div>

                    <div>
                        <label for="bahan_bakar" class="block text-sm font-medium text-gray-700 mb-1">Jenis Bahan Bakar <span class="text-red-500">*</span></label>
                        <select id="bahan_bakar" name="bahan_bakar" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none">
                            <option value="">Pilih Bahan Bakar</option>
                            <option value="Bensin">Bensin</option>
                            <option value="Solar">Solar</option>
                            <option value="Listrik">Listrik</option>
                            <option value="Hibrida">Hibrida</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label for="warna_tnbk" class="block text-sm font-medium text-gray-700 mb-1">Warna TNBK <span class="text-red-500">*</span></label>
                        <input type="text" id="warna_tnbk" name="warna_tnbk" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                            placeholder="Contoh: Putih">
                    </div>
                </div>

                <div class="md:col-span-2 pt-4">
                    <button type="submit" class="w-full py-3 px-4 btn-submit text-white font-bold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-save mr-2"></i> Simpan Data Kendaraan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('vehicleForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validasi sederhana
            const noPlat = document.getElementById('no_plat').value;
            if (!noPlat || noPlat.trim() === '') {
                alert('Nomor Plat Kendaraan tidak boleh kosong!');
                return;
            }
            
            // Jika validasi berhasil, submit form
            this.submit();
        });
    </script>
</body>
</html>