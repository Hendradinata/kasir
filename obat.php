
<?php include 'sidebar.php'; ?>
<!-- isinya -->

<!-- Kolom Tulisan Obat -->
<div class="bg-purple p-2 text-white" style="border-radius:0.25rem; background: #09A322; height:50px;">
  <h4 class="mb-0">Obat</h4>
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

<div>
    <div class="col-sm-4 col-md-4 col-lg-3 mb-3">
      <label class="small text-muted mb-1" style="margin-top:20px;">Cari Obat</label>
      <div class="position-relative">
      <input type="text" name="Ckdproduk" class="form-control form-control-sm">
    </div>
</div>


<!-- Modal Tambah Produk -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
            <label class="samll">Kode Produk :</label>
            <input type="text" name="Tambah_Kode_Produk" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Nama Produk :</label>
            <input type="text" name="Tambah_Nama_Produk" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Harga Modal :</label>
            <input type="number" placeholder="0" name="Tambah_Harga_Modal" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Harga Jual :</label>
            <input type="number" placeholder="0" name="Tambah_Harga_Jual" class="form-control" required>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




