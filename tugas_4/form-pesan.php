<?php include("header.php"); ?>
<div class="flex justify-center">

    <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-6">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">
            Form Pemesanan Paket Wisata
        </h2>

        <form
            action="<?= isset($_GET['confirm']) && $_GET['confirm']
                        ? 'proses-simpan.php'
                        : 'proses-hitung.php'; ?>" method="POST" class="space-y-4">

            <!-- Nama -->
            <div>
                <label class="block font-medium">Nama Pemesan</label>
                <input type="text" name="nama" value="<?= $_GET['nama'] ?? '' ?>"
                    class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                    required>
            </div>

            <!-- Phone -->
            <div>
                <label class="block font-medium">Nomor HP</label>
                <input type="text" name="phone" value="<?= $_GET['phone'] ?? '' ?>"
                    class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                    required>
            </div>

            <!-- Tanggal -->
            <div>
                <label class="block font-medium">Tanggal Pesan</label>
                <input type="date" name="tanggal" value="<?= $_GET['tanggal'] ?? '' ?>"
                    class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                    required>
            </div>

            <!-- Hari -->
            <div>
                <label class="block font-medium">Waktu Perjalanan (Hari)</label>
                <input type="number" name="hari" value="<?= $_GET['hari'] ?? '' ?>"
                    class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                    required>
            </div>

            <!-- Paket -->
            <div>
                <label class="block font-medium mb-2">Pelayanan Paket</label>
                <div class="space-y-2">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="penginapan" value="1"
                            <?= isset($_GET['penginapan']) && $_GET['penginapan'] ? 'checked' : '' ?>
                            class="accent-blue-600">
                        Penginapan (Rp 1.000.000)
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="transportasi" value="1"
                            <?= isset($_GET['transportasi']) && $_GET['transportasi'] ? 'checked' : '' ?>
                            class="accent-blue-600">
                        Transportasi (Rp 1.200.000)
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="makanan" value="1"
                            <?= isset($_GET['makanan']) && $_GET['makanan'] ? 'checked' : '' ?>
                            class="accent-blue-600">
                        Makanan (Rp 500.000)
                    </label>
                </div>
            </div>

            <!-- Peserta -->
            <div>
                <label class="block font-medium">Jumlah Peserta</label>
                <input type="number" name="peserta" value="<?= $_GET['peserta'] ?? '' ?>"
                    class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                    required>
            </div>
            <?php if (isset($_GET['confirm']) && $_GET['confirm']): ?>
                <div class="mt-4 p-4 bg-blue-50 border border-blue-300 rounded-lg">
                    <p class="text-sm text-gray-700">
                        <span class="font-semibold">Harga Paket:</span>
                        Rp <?= number_format($_GET['harga_paket'] ?? 0, 0, ',', '.') ?>
                    </p>
                    <p class="text-sm text-gray-700 mt-1">
                        <span class="font-semibold">Total Tagihan:</span>
                        Rp <?= number_format($_GET['total_tagihan'] ?? 0, 0, ',', '.') ?>
                    </p>
                </div>
            <?php endif; ?>



            <!-- Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 mt-2 rounded-lg hover:bg-blue-700 transition">
                <?= isset($_GET['confirm']) && $_GET['confirm'] ? 'Kirim' : 'Hitung' ?>
            </button>

        </form>
    </div>
</div>
<?php include("footer.php"); ?>