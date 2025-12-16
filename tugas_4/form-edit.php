<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM pemesanan WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}
?>
<?php include("header.php"); ?>

<div class="max-w-3xl mx-auto py-10 px-6">
    <div class="bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">
            Edit Pemesanan Paket Wisata
        </h2>

        <form action="proses-update.php" method="POST" class="space-y-5">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">

            <div>
                <label class="block text-sm font-semibold mb-1">Nama Pemesan</label>
                <input type="text" name="nama" value="<?= $data['nama']; ?>" required
                    class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Nomor HP</label>
                <input type="text" name="phone" value="<?= $data['phone']; ?>" required
                    class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Tanggal Pesan</label>
                <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required
                    class="w-full border rounded-lg px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Waktu Perjalanan (Hari)</label>
                <input type="number" name="hari" value="<?= $data['hari']; ?>" required
                    class="w-full border rounded-lg px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Pelayanan Paket</label>
                <div class="space-y-2 text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="penginapan" value="1"
                            <?= ($data['penginapan'] == 'Y') ? 'checked' : ''; ?>>
                        Penginapan (Rp 1.000.000)
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="transportasi" value="1"
                            <?= ($data['transportasi'] == 'Y') ? 'checked' : ''; ?>>
                        Transportasi (Rp 1.200.000)
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="makanan" value="1"
                            <?= ($data['makanan'] == 'Y') ? 'checked' : ''; ?>>
                        Makanan (Rp 500.000)
                    </label>
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Jumlah Peserta</label>
                <input type="number" name="peserta" value="<?= $data['peserta']; ?>" required
                    class="w-full border rounded-lg px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Harga Paket</label>
                <input type="text"
                    value="Rp <?= number_format($data['harga_paket'], 0, ',', '.'); ?>"
                    readonly
                    class="w-full bg-gray-100 border rounded-lg px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Total Tagihan</label>
                <input type="text"
                    value="Rp <?= number_format($data['total_tagihan'], 0, ',', '.'); ?>"
                    readonly
                    class="w-full bg-gray-100 border rounded-lg px-4 py-2 font-semibold">
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Simpan Perubahan
                </button>

                <a href="index.php"
                    class="px-5 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>