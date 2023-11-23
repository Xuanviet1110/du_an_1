
   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản trị danh mục</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">danh sách danh mục</li>
         
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
                  <h3 class="card-title">Quản trị danh mục </h3>
                </div>
              </div>
              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bảng danh sách danh mục</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Sửa danh mục</th>
                        <th>Xóa danh mục  </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach($loaddm as $lisdm){
                          extract($lisdm);
                          echo'
                          <tr>
                          <td>'.$id.'</td>
                          <td>'.$Danhmuc.'</td>
                          <td><a href="?act=suadm&&id='.$id.'"> Sửa danh mục </a></td>
                          <td> <a href="?act=deletedm&&id='.$id.'"> Xóa danh mục</a> </td>
                        
                        </tr>
                          ';
                        
                        }
                      ?>
                    </tbody>
                 
                  </table>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sidebar"><a href="?act=adddm">Thêm danh mục</a></button>
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
  