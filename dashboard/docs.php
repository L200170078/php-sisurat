  <?php include('../config/model/templating/css.php'); ?>
    <title>Halaman Login Sisurat</title>
  <?php include('../config/model/templating/header.php'); ?>
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5">DOKUMENRASI PENGGUNAAN SISURAT</h1>
        <p class="lead">Sebelum menggunakan sistem ini, alangkah lebih baik silahkan baca dokumentasi penggunaan sistem ini agar anda paham bagaimana cara menggunakannya dan bagaimana bila ada masalah dan mengatasinya. <code>Versi 1.0</code>.</p>
        <hr>
        <b>#1 Alur Penggunaan :</b>
        <ol>
          <li><b>Langkah pertama, pilih kegiatan mana yang akan dibuat suratnya.</b></li>
          Apabila kegiatan yang dimaksud belum terdaftar silahkah mengajukan kegiatan dengan cara buat kegiatan dan tunggu konfirmasi admin, setelah sukses membuat kegiatan silahkan pilih kegiatan tersebut pada halaman Beranda.
          <li><b>Langkah kedua, pilih surat untuk dicetak.</b></li>
          Apabila Surat yang dimaksud belum terdaftar silahkah mengajukan surat dengan cara buat surat pada kegiatan dan tunggu konfirmasi admin, setelah sukses membuat kegiatan silahkan pilih kegiatan tersebut pada halaman Beranda.
          <li><b>Unduh Surat & Cek Isi Surat.</b></li>
          Setelah Berhasil membuat surat, file otomatis didownload, <b>CEK KEMBALI ISI FILE</b>.
        </ol>
      </div>
    </main>

    <?php include("../config/model/modal.php"); ?>
    <?php include("../config/model/templating/footer.php"); ?>
