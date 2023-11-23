
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
                <h3 class="card-title">Thêm mới BANNER</h3>
              </div>
           
              <form action="index.php?act=addbanner" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh banner</label>
                    <br>
                    <input type="file" name="img" id="img">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên banner</label>
                    <input type="text" name="ten" id="ten" class="form-control"  placeholder="Tên banner">
                  </div>
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input type="text" name="link" id="link" class="form-control"  placeholder="LInk truyền">
                  </div>
                  </div>
                </div>
          

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="addbanner" >Thêm mới </button>
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
  
