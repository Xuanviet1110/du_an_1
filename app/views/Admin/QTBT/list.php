
   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản trị biến thể</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">danh sách </li>
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
                  <h3 class="card-title">Quản trị </h3>
                </div>
              </div>
              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bảng danh sách </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>ID đơn hàng </th>
                        <th>ID sản phẩm</th> 
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền </th>
                        <th>Tổng thanh toán</th>
                        <th>Trạng thái Đơn hàng </th>
                        <th>Ghi chú </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($loadd as $row) {
                        extract($row);
                        echo ' <tr>
                        <td>1</td>
                        <td>'.$iddh.'</td>
                        <td>'. $idsp .'</td>
                        <td>'. $ten.'</td>
                          <td>'.$so_luong.'</td>
                          <td>' .$thanh_tien.'</td>
                          <td>' .$thanh_tien.'</td>
                          <td>'.$trang_thai.'</td>
                        <td> '.$ghi_chu.' </td>
                        
                      </tr> ';  }?>
                     
                    </tbody>
                 
                  </table>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sidebar"><a href="?act=addbt">Thêm </a></button>
                  </div>
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
    <!-- /.content-wrapper -->
  