
<?php include 'sidebar.php'; ?>
<!-- isinya -->

<!-- Kolom Kasir -->
<div class="bg-purple p-2 text-white" style="border-radius:0.25rem; background: #09A322; height:50px;">
  <h4 class="mb-0">Kasir </h4>
</div>

<!-- Kolom Tanggal-->
<div class="bg-purple p-2 text-white" style="border-radius:0.25rem; background:#23BD32; height:50px; margin-top:10px;">
  <h5 class="mb-0">Hari/Tanggal : <span id="tanggalwaktu"></span></h5> 
  <!-- Cara Menuntukan Tanggal Hari ini-->
  <script>
    var tw = new Date();
    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
    else (a=tw.getTime());
    tw.setTime(a);
    var tahun= tw.getFullYear ();
    var hari= tw.getDay ();
    var bulan= tw.getMonth ();
    var tanggal= tw.getDate ();
    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
  </script>
</div>

<!-- Tabel -->
<table class="table table-striped table-sm table-bordered dt-responsive nowrap print-none" id="cart" width="100%">
<thead>
  <tr>
    <th>#</th>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Ket</th>
    <th>Subtotal</th>
    <th>Opsi</th>
  </tr>
</thead>
<tbody>

<!-- Kolom Untuk Input Obat-->
<form method="post">
  <div class="row">
    <div class="col-sm-4 col-md-4 col-lg-2 mb-3">
      <label class="small text-muted mb-1" style="margin-top:20px;">Kode Obat</label>
      <div class="position-relative">
      <input type="text" name="Ckdproduk" class="form-control form-control-sm" list="datalist1">
      <span class="position-absolute icon-qr"><i class="fas fa-qrcode text-muted"></i></span>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3 mb-3">
      <label class="small text-muted mb-1" style="margin-top:20px;">Nama Obat</label>
      <input type="text" name="Cnproduk" id="nama_produk" class="form-control form-control-sm bg-light" readonly>
    </div>
    <div class="col-8 col-sm-4 col-md-4 col-lg-2 mb-3">
      <label class="small text-muted mb-1" style="margin-top:20px;">Harga Obat</label>
      <input type="number" name="Charga" placeholder="0" id="harga_jual" onchange="InputSub()"
      class="form-control form-control-sm bg-light" readonly>
    </div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-1 mb-3">
      <label class="small text-muted mb-1" style="margin-top:20px;">Jumlah</label>
      <input type="number" name="Cqty" id="Iqty" onchange="InputSub()" placeholder="0" class="form-control form-control-sm" required>
    </div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-1 mb-3">
      <label class="small text-muted mb-1" style="margin-top:20px;">Ket </label>
      <input type="text" name="Cnproduk" id="nama_produk" class="form-control form-control-sm bg-light">
    </div>
    <div class="col-sm-8 col-md-8 col-lg-3 mb-3">
      <label class="small text-muted mb-1" style="margin-top:20px;">Subtotal</label>
      <div class="input-group">
        <input type="number" name="Csubs" placeholder="0" id="Isubtotal" onchange="InputSub()" class="form-control form-control-sm bg-light mr-2" readonly>
      <div class="input-group-append">
        <button type="submit" name="InputCart" class="btn btn-primary btn-sm">Simpan</button>
      </div>
    </div>
    </div>
  </div><!-- end row -->
</form>

<!-- Kolom Untuk Kode Nota-->
<div class="bg-purple p-2 text-white" style="border-radius:0.25rem; background:#3DABCE; margin-top:10px; margin-bottom:20px;">
  <h5 class="mb-0" >Kode Nota: </h5>
</div>

<!-- Tabel -->
<table class="table table-striped table-sm table-bordered dt-responsive nowrap print-none" id="cart" width="100%">
<thead>
  <tr>
    <td style="text-align:center;"><b> Berhati-Hati lah Dalam Menginputkan Produk</b></td>
</thead>
<tbody>

  <!-- Kolom Total Bayar -->
  <div class="bg-light p-3" style="border-radius:0.25rem;">
  <div class="col-md-16 col-lg-6 mb-2">
      <div class="col-md-4 col-lg-6 mb-2 text-primary text-right">
        <h5 style="text-align: left;">Total Bayar :</h5>
        
        <h3  style="font-weight:600; text-align:right;">Rp. </h3>
      </div>
    </div>
  </div>
  </div>

   <!-- Kolom  -->
  <div class="row gy-3 align-items-center row-home">
      <div class="col-md-8 col-lg-6 mb-2">
      <form method="post">
        <input type="hidden" id="totalCart" value="<?php echo $itungtrans3; ?>">
        <div class="row">
        <label for="pembayaran" class="col-4 col-sm-4 col-md-4 col-lg-3 col-form-label col-form-label-sm mb-2" style="margin-top:10px;">Pembayaran</label>
          <div class="col-8 col-sm-8 col-md-8 col-lg-9 mb-2"  style="margin-top:10px;">
            <input type="text" name="pembayaran" onchange="procesBayar()" class="form-control form-control-sm" id="pembayaran" placeholder="0" required>
        </div>
        <label for="kembalian" class="col-4 col-sm-4 col-md-4 col-lg-3 col-form-label col-form-label-sm mb-2">Kembalian</label>
          <div class="col-8 col-sm-8 col-md-8 col-lg-9 mb-2">
            <input type="text" class="form-control form-control-sm bg-light" id="kembalian" placeholder="0" readonly>
            <input type="hidden" name="kembalian" id="kembalian1">
          </div>
        <div class="input-group-append" style="margin-left:220px;">
            <button class="btn btn-danger btn-sm px-3 mr-2" >
            <i class="fa fa-trash-alt mr-1"></i>Hapus Semua</button>
        </div>
        <div class="input-group-append"  style="margin-left:5px;">
            <button class="btn btn-primary btn-sm px-3">
            <i class="fa fa-check mr-1"></i>Simpan</button>
        </div>
        </div>
        </div>
        </form>
      </div>
      </div>
    </div>
  </div>
<!-- end isinya -->

</div><!-- end container-fluid" -->
  </main><!-- end page-content" -->
</div><!-- end page-wrapper -->

<!-- Modal Exit -->
<div class="modal fade" id="Exit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-0">
      <div class="modal-body text-center">
      <i class="fas fa-exclamation-triangle fa-4x text-warning mb-3"></i>
        <h3 class="mb-4">Apakah anda yakin ingin keluar ?</h3>
        <button type="button" class="btn btn-secondary px-4 mr-2" data-dismiss="modal">Batal</button>
        <a href="logout.php" class="btn btn-primary px-4">Keluar</a>
    </div>
  </div>
</div>
<!-- end Modal Exit -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/vendor/datatables/jquery-3.5.1.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $('#cart').dataTable({searching: false, paging: false, info: false});
    </script>
    <script type="text/javascript">
      <?php echo $jsArray,$jsArray1,$jsArray2; ?>
        function changeValue(kode_produk) {
          document.getElementById("nama_produk").value = nama_produk[kode_produk].nama_produk;
          document.getElementById("harga_jual").value = harga_jual[kode_produk].harga_jual;
          document.getElementById("harga_modal").value = harga_modal[kode_produk].harga_modal;
        };
        function InputSub() {
        var harga_jual =  parseInt(document.getElementById('harga_jual').value);
        var jumlah_beli =  parseInt(document.getElementById('Iqty').value);
        var jumlah_harga = harga_jual * jumlah_beli;
          document.getElementById('Isubtotal').value = jumlah_harga;
      };
      function procesBayar() {
      var harga_Cart =  parseInt(document.getElementById('totalCart').value);
      var pembayaran_Cart =  parseInt(document.getElementById('pembayaran').value);
      var kembali_Cart = pembayaran_Cart - harga_Cart;
  
      var	number_string = kembali_Cart.toString(),
          sisa 	= number_string.length % 3,
          rupiah1 	= number_string.substr(0, sisa),
          ribuan1 	= number_string.substr(sisa).match(/\d{3}/gi);
            
        if (ribuan1) {
          separator1 = sisa ? '.' : '';
          rupiah1 += separator1 + ribuan1.join('.');
        }
        
        document.getElementById('kembalian').value = rupiah1;
        document.getElementById('kembalian1').value = kembali_Cart;
      };
  </script>
</body>
</html>