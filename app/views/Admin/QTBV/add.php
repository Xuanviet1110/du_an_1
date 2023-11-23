
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản trị BANNER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới Bài viết</h3>
              </div>
           
              <form action="index.php?act=addbaiviet" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề</label>
                    <input type="text" name="tieu_de" id="tieu_de" class="form-control"  placeholder="Tiêu đề bài viết">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh bài viết</label>
                    <br>
                    <input type="file" name="anh" id="anh" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nội Dung</label>
                    <input type="text" name="noi_dung" id="noi_dung" class="form-control"  placeholder="Nội dung bài viết">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày đăng</label>
                    <input type="date" name="ngay_dang" id="ngay_dang" class="form-control"  placeholder="Nội dung bài viết">
                  </div>
                    
                  
                  </div>
                </div>
          

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="addbaiviet" >Thêm mới </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
