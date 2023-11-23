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
              <h3 class="card-title">Update danh mục</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=updatedm" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <?php
                 if (is_array($loadd)){
                  extract($loadd);
                  ?>
                  <label for="exampleInputEmail1">Update</label>
                <input type="hidden" name="iddm" class="form-control" value ="<?php if(isset($id)&&($id!='')) echo $id ?>">
                <input type="text" name="tendm" class="form-control" value ="<?php if(isset($ten)&&($ten!='')) echo $ten ?>">
                </div>
                </div>
                </div>

                  <?php
                }
                  ?>

                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
                  </div>
            </form>
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>