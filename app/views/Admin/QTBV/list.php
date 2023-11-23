
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản trị Bài Viết</h1>
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
                  <h3 class="card-title">Quản trị bài viết </h3>
                </div>
              </div>
              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bảng danh sách bài viết</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Ảnh</th>
                        <th>Nội dung </th>
                        <th>Ngày đăng </th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                 <tbody>
                      <?php 
                        foreach($loadbaiviet as $listbv){
                          extract($listbv);
                          $linkimg1 = '../../views/Admin/img/' . $anh;
                          echo'
                          <tr>
                          <td>'.$id.'</td>
                          <td>'.$tieu_de.'</td>
                          <td><img src="' . $linkimg1 . '" alt="product" width="100"></td>
                          <td>'.$noi_dung.'</td>
                          <td>'.$ngay_dang.'</td>
                          <td><a href="?act=suabv&&id='.$id.'"> Sửa </a></td>
                          <td> <a href="?act=deletebv&&id='.$id.'"> Xóa</a> </td>
                        </tr>
                          ';
                        
                        }
                      ?>
                    </tbody>
                  </table>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sidebar"><a href="?act=addbaiviet">Thêm </a></button>
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
  