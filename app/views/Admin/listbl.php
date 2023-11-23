
        <!-- /.sidebar-menu -->
      

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản trị danh mục</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"></li>
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
                        <th>Tên khách hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Nội dung</th>
                        <th>Ngày</th>
                        <th>Xóa bình luận  </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($load_binhluan as $row) {
                        extract($row);
                          echo '  <tr>
                          <td>'.$id.'</td>
                          <td>'.$ten_dn.' </td>
                          <td><a>'.$tensp. ' </a></td>
                          <td> '.$img_dai_dien.' </td>
                          <td>'.$ndbl.'</td>
                          <td>'.$ngaybl.'</td>
                          <td><a href="?act=deletebl&&id='.$id.'"> Xóa </a></td>
                          </tr>';
                      }
                      ?>                    
                       
                     
                    </tfoot>
                  </table>