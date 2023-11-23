

  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản trị chức vụ</h1>
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
                <h3 class="card-title">Thêm mới chức vụ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=addq" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Chức vụ</label>
                    <input type="text" name="ten" id="ten" class="form-control"  placeholder="Chức Vụ">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trạng Thái</label>
                    <input type="text" name="trang_thai" id="trang_thai" class="form-control"  placeholder="Trạng thái">
                  </div>
                  </div>
                </div>
          

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="addq" >Thêm mới </button>
                </div>
              </form>
            </div>
          </div>
         
        </div>
       
      </div>
    </section>
    <!-- /.content -->
  </div>

