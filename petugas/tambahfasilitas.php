<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Fasilitas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../templateadmin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../templateadmin/dist/css/adminlte.min.css">
</head>

<body>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambahkan Data Fasilitas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="upload_fasilitas.php" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Fasilitas</label>
                  <input type="text" name="nama_fasilitas" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Kamar">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan Fasilitas</label>
                  <textarea name="ket_fasilitas" class="form-control" id="exampleInputPassword1" placeholder="Masukan Info Fasilitas"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload Gambar</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="proses" value="proses" class="btn btn-primary">SIMPAN</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.row -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- jQuery -->
  <script src="../templateadmin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../templateadmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../templateadmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../templateadmin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../templateadmin/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>