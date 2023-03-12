<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('komponen.navbar')
      @include('komponen.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="card">
            <div class="card-header">
              <h4>Tambah Pesanan</h4>
            </div>
            <div class="card-body">
              <form class="form-sample" action="/pesanan/edit/{{ $pesanan->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                  <label>Nama pelanggan</label>
                  <input type="text" class="form-control" name="nama_pelanggan" value="{{ $pesanan->nama_pelanggan }}">
                </div>
                <div class="form-group">
                  <label>Paket</label>
                  <select class="form-control @error('paket_id') is-invalid @enderror" name="paket_id"  >
                    <option value="{{ $pesanan->paket->id }}" selected>{{ $pesanan->paket->nama_paket }}</option>
                    @foreach ($pakets as $paket)
                      <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal masuk</label>
                  <input value="{{ $pesanan->tgl_masuk }}" type="date" placeholder="dd/mm/yyyy" name="tgl_masuk" class="form-control pwstrength" data-indicator="pwindicator">
                </div>
                <div class="form-group">
                  <label>Diskon</label>
                  <input type="number" name="diskon" value="{{ $pesanan->diskon }}" class="form-control pwstrength" data-indicator="pwindicator">
                </div>
                <div class="form-group">
                  <label>Qty</label>
                  <input type="number" name="qty" value="{{ $pesanan->qty }}"  class="form-control pwstrength" data-indicator="pwindicator">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>

        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="../assets/modules/jquery.min.js"></script>
  <script src="../assets/modules/popper.js"></script>
  <script src="../assets/modules/tooltip.js"></script>
  <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../assets/modules/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="../assets/modules/jquery.sparkline.min.js"></script>
  <script src="../assets/modules/chart.min.js"></script>
  <script src="../assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="../assets/modules/summernote/summernote-bs4.js"></script>
  <script src="../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>