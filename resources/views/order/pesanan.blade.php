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
                <div class="card-header d-flex justify-content-between">
                  <h4>Daftar pesanan</h4>
                  <a href="/pesanan/tambah" class="btn btn-primary">Tambah</a>
                </div>
                <div class="table-responsive">
                  <div class="card-body p-0">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama</th>
                          <th scope="col">kode invoice</th>
                          <th scope="col">Diskon</th>
                          <th scope="col">Tanggal masuk</th>
                          <th scope="col">Tanggal keluar</th>
                          <th scope="col">Qty</th>
                          <th scope="col">Status</th>
                          <th scope="col">Total Harga</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pesanans as $pesanan)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $pesanan->nama_pelanggan }}</td>
                          <td> {{ $pesanan->kode_invoice }} </td>
                          <td> {{ $pesanan->paket->nama_paket }} </td>
                          <td> {{ $pesanan->tgl_masuk }} </td>
                          <td> {{ $pesanan->tgl_keluar }} </td>
                          <td> {{ $pesanan->qty }} </td>
                          <td> {{ $pesanan->status }} </td>
                          <td> {{ $pesanan->total_harga }} </td>
                          <td>
                            <a href="/transaksi/{{ $pesanan->id }}" class="btn btn-primary">Edit</a>
                            <form action="/transaksi/{{ $pesanan->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                              <button type="submit" class="btn btn-primary">Hapus</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
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