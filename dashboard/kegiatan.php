  <?php include('../config/model/templating/css.php'); ?>
    <title>Halaman Login Sisurat</title>
  <?php include('../config/model/templating/header.php'); ?>
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h5 class="mt-5">SEMNAS-WORKSHOP</h5>
        <p>Kegiatan seminar dan workshop nasional. silahkan pilih surat apa yang ingin anda <code>BUAT</code> -> <code>SELANJUTNYA</code> -> <code>ISIKAN FORM</code>.</p>
        <form action="" method="GET">
          <div class="input-group mb-3">
            <select name='option' class="custom-select" id="inputGroupSelect02">
              <option value="peminjaman-alat">Peminjaman Alat</option>
            </select>
            <div class="input-group-append">
                <button type='submit' class="btn btn-danger" type="button">SELANJUTNYA</button>
            </div>
          </div>
        </form>
        <hr>
        Form Akan muncul Dibawah :
        <br>
        <br>
        <div class="row">

        </div>
      </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include("../config/model/modal.php"); ?>
    <?php include("../config/model/templating/footer.php"); ?>
