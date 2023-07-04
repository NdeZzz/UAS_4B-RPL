<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Reservasi</h3>
              </div>
    
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>No. Handphone</th>
                    <th>Email</th>
                    <th>Nama Tamu</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Jumlah Kamar</th>
                    <th>Tipe Kamar</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php  
                    include('../koneksi.php');
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM pemesanan");
                    while($row = mysqli_fetch_array($query)){ 
                    ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['nama_pemesan'] ?></td>
                    <td><?php echo $row ['nomor_hp'] ?></td>
                    <td><?php echo $row ['email'] ?></td>
                    <td><?php echo $row ['nama_tamu'] ?></td>
                    <td><?php echo $row ['check_in'] ?></td>
                    <td><?php echo $row ['check_out'] ?></td>
                    <td><?php echo $row ['jumlah_kamar'] ?></td>
                    <td><?php echo $row ['tipe_kamar'] ?></td>
                  </tr>
                  <?php } ?>
                  
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
            </div>