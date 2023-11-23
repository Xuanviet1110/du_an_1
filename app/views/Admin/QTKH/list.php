<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản trị tài khoản</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">danh sách tài khoản</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Quản trị tài khoản </h3>
              <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?act=addkh">Thêm tài khoản</a></li>
          </ol>
            </div>
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bảng danh sách tài khoản</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
             
                  <tr>
                    <th>STT</th>
                    <th>Tên Tài Khoản</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Xóa Tài khoản </th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  
                  foreach ($loadkh as $khachhang) {
                    extract($khachhang);
                    echo' <tr>
                    <td>'.$id.'</td>
                    <td>'.$User.'</td>
                    <td>'.$Email.'</td>
                    <td>'.$sdt.'</td>
                    <td>'.$dia_chi.'</td>
                    <td><a href="?act=deletekh&&id='.$id.'"> Xóa tài khoản </a> </td> ' ;}
                  ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>