
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản trị Đơn hàng </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">danh sách Đơn Hàng</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Quản trị Đơn hàng  </h3>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bảng danh sách Đơn hàng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Ngày đặt </th>
                       <th>Tổng giá </th>
                        <th>Trạng thái </th>   
                        <th>ID_khách Hàng </th>                       
                        <th>Xóa Đơn hàng </th>
                        <th>Sửa Đơn hàng </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach($loaddh as $lisdh){
                          extract($lisdh);
                          echo'
                          <tr>
                          <td>'.$id.'</td>
                          <td>'.$ngay_dat.'</td>
                          <td>'.$tong_gia.'</td>
                          <td>'.$trang_thai.'</td>
                          <td>'.$id_kh.'</td>
                          <td><a href="?act=suadh&&id='.$id.'"> Sửa danh mục </a></td>
                          <td> <a href="?act=deletedh&&id='.$id.'"> Xóa danh mục</a> </td>
                        </tr>
                          ';
                        
                        }
                      ?>
                    </tbody>
                 
                  </table>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sidebar"><a href="?act=adddh">Thêm đơn hàng</a></button>
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