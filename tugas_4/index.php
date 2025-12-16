<?php include("header.php"); ?>

<!-- CONTENT -->
<main
	class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
	<!-- KONTEN KIRI -->
	<section class="lg:col-span-2 space-y-6">
		<!-- Paket Wisata 1 -->
		<div class="bg-white rounded-lg shadow overflow-hidden">
			<img
				src="lumba.png"
				class="w-full h-48 object-cover"
				alt="Paket Wisata" />
			<div class="p-4">
				<h2 class="text-lg font-bold text-gray-800">
					Paket Dolphin Watching Pantai Lovina
				</h2>
				<p class="text-sm text-gray-600 mt-2">
					Saksikan lumba-lumba liar di habitat aslinya saat matahari terbit
					dengan perahu tradisional khas Lovina.
				</p>
			</div>
		</div>

		<!-- Paket Wisata 2 -->
		<div class="bg-white rounded-lg shadow overflow-hidden">
			<img
				src="snorkeling.png"
				class="w-full h-48 object-cover"
				alt="Paket Wisata" />
			<div class="p-4">
				<h2 class="text-lg font-bold text-gray-800">
					Paket Snorkeling & Terumbu Karang Lovina
				</h2>
				<p class="text-sm text-gray-600 mt-2">
					Nikmati keindahan bawah laut Pantai Lovina dengan air laut yang
					tenang dan panorama terumbu karang yang memukau.
				</p>
			</div>
		</div>
	</section>

	<!-- SIDEBAR -->
	<aside class="space-y-6">
		<!-- Video Youtube -->
		<div class="bg-white rounded-lg shadow p-4">
			<h3 class="font-bold text-gray-800 mb-3">
				Video Sinematik Pantai Lovina
			</h3>
			<div class="aspect-video">
				<iframe
					width="560"
					height="315"
					src="https://www.youtube.com/embed/WiqEaOl44Kc?si=b0Sdrt0xqnvzOqTY"
					title="YouTube video player"
					frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					referrerpolicy="strict-origin-when-cross-origin"
					allowfullscreen></iframe>
			</div>
		</div>

		<!-- Info Tambahan -->
		<div class="bg-white rounded-lg shadow p-4 text-sm text-gray-600">
			<p>
				Pantai Lovina terletak di Bali Utara dan terkenal dengan pasir hitam
				vulkanik, ombak yang tenang, serta atraksi lumba-lumba yang menjadi
				ikon wisata utama.
			</p>
		</div>
	</aside>
</main>

<?php include("footer.php"); ?>