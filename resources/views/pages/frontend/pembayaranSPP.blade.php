<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Pembayaran SPP</title>
  </head>
  <body>
      <!-- Just an image -->
    <nav class="navbar navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1>TPQ Al-Fatih</h1>
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="card text-left">
            <div class="card-header">
              Form Pembayaran SPP
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pembayaranSPPStore') }}" >
                    @csrf
                    <div class="form-group">
                      <label for="namalengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                      <label for="nis">NIS </label>
                      <input type="text" class="form-control" id="nis" name="nis" placeholder="Nomor Induk Sekolah">
                    </div>

                    <div class="form-group">
                      <label for="kelas">Kelas </label>
                      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                    </div>

                    <div class="form-group">
                      <label for="kategoribayar">Kategori Bayar</label>
                      <select class="form-control" id="kategoribayar" name="kategoribayar">
                        <option >50000</option>
                        <option >40000</option>
                        <option >35000</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="bulan">Pembayaran SPP Bulan</label>
                      <select class="form-control" id="bulan" name="bulan">
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                      </select>
                    </div>

                    <button class="btn btn-primary" type="submit">Bayar</button>
                  </form>
            </div>
          </div>
        <a href="{{ route('frontend') }}" class="btn btn-sm btn-success mt-3 mb-3">Back to Home</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>