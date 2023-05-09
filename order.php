<?php
require_once "core/init.php";

require_once "view/headeradmin.php";
?>

    <!-- Jarak -->
    <section class="dashboard">
      <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Order Here</header>
        <form action="#">
          <div class="form first">
            <div class="details personal">
              <div class="fields">
                <div class="input-field">
                  <label>Nama</label>
                  <input
                    type="text"
                    placeholder="Masukkan Nama Anda"
                    required />
                </div>

                <div class="input-field">
                  <label>Alamat</label>
                  <input
                    type="text"
                    placeholder="Masukkan Alamat Anda"
                    required />
                </div>

                <div class="input-field">
                  <label>No Handphone / WA</label>
                  <input
                    type="number"
                    placeholder="Masukkan No Handphone"
                    required />
                </div>

                <div class="input-field">
                  <label>Jenis Layanan</label>
                  <select
                    class="form-select"
                    id="jenis_layanan"
                    name="jenis_layanan"
                    required>
                    <option value="">Pilih Jenis Layanan</option>
                    <option value="brosur">Brosur</option>
                    <option value="mmt">MMT</option>
                    <option value="kop_surat">Kop Surat</option>
                  </select>
                </div>

                <div class="input-field">
                  <label>Jumlah</label>
                  <input type="number" placeholder="Masukkan Jumlah" required />
                </div>

                <div class="input-field" id="khas">
                  <label for="upload_dokumen" class="form-label"
                    >Upload Dokumen</label
                  >
                  <input
                    type="file"
                    class="upload"
                    id="upload_dokumen"
                    name="upload_dokumen"
                    required />
                </div>
              </div>
            </div>

            <button class="nextBtn">
              <span class="btnText">Next</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
          
        </form>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
