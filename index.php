<html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="jquery-3.5.1.min.js"></script>
  <script src="assets/latrants.js"></script>
  <link rel="stylesheet" href="assets/style.css">
  <title>LaTrants</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #240046;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="assets/img/logo latrants.png" width=200px alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            <a class="nav-link" href="about_us.html">Tentang Kami</a>
            <a class="nav-link" href="s&k.html">Syarat & Ketentuan</a>
            <a class="nav-link" href="contact.html">Kontak</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/FVBBK6uIy1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/JEGkGqiZy8.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container">

      <div class="row mt-5 text-center mb-2">
        <div class="col-md-12">
          <h2>Pesan tiket bus online dengan mudah disini</h2>
        </div>
      </div>

      <div class="card-group mb-5 bg-danger p-3 rounded">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">1. Tujuan Perjalanan</h5>
            <div class="mb-3">
              <label for="staticAwal" class="col-form-label">Kota Asal</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled value="">Pilih Kota</option>
                <option value="1">Palu</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="kotaTujuan" class="col-form-label">Kota Tujuan</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled value="">Pilih Kota</option>
                <option value="1">Toli-Toli</option>
                <option value="2">Buol</option>
                <option value="3">Parigi</option>
              </select>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">2. Tanggal Perjalanan</h5>
            <div class="mb-3">
              <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" id="tanggal" name="date">
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">3. Jumlah Penumpang</h5>
            <div class="input-group mb-3">
              <input type="number" class="form-control" id="jmlPenumpang" placeholder="Jumlah Penumpang" aria-label="Jumlah Penumpang" aria-describedby="basic-addon2" min="1" max="5" value="1">
              <span class="input-group-text" id="basic-addon2">Orang</span>
            </div>
            <div class="d-grid gap-2">
              <button type="button" class="btn btn-success pesanTiket" data-bs-toggle="modal" data-bs-target="#dataPenumpang">Pesan Tiket</button>
            </div>
            <div class="modal fade" id="dataPenumpang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Data Pemesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingNama" placeholder="Nama Lengkap">
                      <label for="floatingNama">Nama Lengkap</label>
                    </div>

                    <div class="form-floating mt-2">
                      <input type="text" class="form-control" id="floatingAlamat" placeholder="Alamat">
                      <label for="floatingAlamat">Alamat</label>
                    </div>

                    <div class="form-floating mt-2">
                      <input type="text" class="form-control" id="floatingAlamat" placeholder="Alamat">
                      <label for="floatingAlamat">No. Telp</label>
                    </div>
                    <br>
                    <h2>Data Penumpang</h2>
                    <div class="data-penumpang">

                    </div>



                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary"><a href="https://telegram.me/Eldridge57" class="link-light" style="text-decoration: none;">Submit</a></button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <section class="services mx-auto px-4 text-center">
        <div class="row">
          <div class="col-md-6 px-5">
            <div class="row">
              <div class="col-sm-2 py-3 align-middle mx-auto">
                <img src="assets/img/4172169_edit_info_information_note_notes_icon.png">
              </div>
              <h5>PENDAFTARAN YANG MUDAH DAN CEPAT</h5>
              <p>
                Proses pemesanan tiket online antar perwakilan, dan didukung oleh pemesanan melalui website Latrants.
              </p>
            </div>
          </div>

          <div class="col-md-6 px-5">
            <div class="row">
              <div class="col-sm-2 py-3 align-middle mx-auto">
                <img src="assets/img/134180_bus_icon.png">
              </div>
              <h5>ARMADA BUS BARU DAN TERBAIK</h5>
              <p>
                Dukungan perusahaan ternama dan terbaik di dunia, Scania dan Mercedes Benz menjadikan armada LaTrants menjadi yang terbaik.
              </p>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 px-5">
            <div class="row">
              <div class="col-sm-2 py-3 align-middle mx-auto">
                <img src="assets/img/3709753_call_customer_relation_service_support_icon.png">
              </div>
              <h5>DUKUNGAN INFORMASI YANG BAIK DAN RAMAH</h5>
              <p>
                Ketersediaan informasi di website dan pelayanan yang ramah setiap perwakilan Borlindo akan semakin memudahkan anda.
              </p>
            </div>
          </div>

          <div class="col-md-6 px-5">
            <div class="row">
              <div class="col-sm-2 py-3 align-middle mx-auto">
                <img src="assets/img/392529_alarm_alert_clock_event_history_icon.png">
              </div>
              <h5>TEPAT WAKTU MENJADI KOMITMEN KAMI</h5>
              <p>
                Berangkat dan tiba di kota tujuan dengan tepat waktu menjadi perhatian kami, agar aktivitas anda di hari yang baru tidak terganggu.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="text-center py-5 my-5 mx-auto">

        <p class="text-uppercase fw-bold fs-5">Support By</p>
        <img src="assets/img/dinas-perindag-sulteng.png" alt="disperindag">
        <img src="assets/img/mtc.png" alt="Maleo Techno Center">
      </div>

    </div>
  </main>

  <footer class="footer mt-auto text-center text-light" style="background-color: #18002e;">
    <div class="container">
      <div class="row pt-3">
        <a href="index.html">
          <img src="assets/img/logo_latrants.png" height=80vh alt="">
        </a>
      </div>
      <div class="row py-3">
        <h5>Customer Support</h5>
        <p><a href="#">081931577884</a> <br>
          (Admin Latrants.com)</p>
        <h6>Jl. Kartini no.41</h6>
        <h6>Palu - Sulawesi Tengah</h6>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>