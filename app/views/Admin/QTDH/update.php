<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản trị Khuyến mại</h1>
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
              <h3 class="card-title">Update khuyến mại</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=updatedh" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <?php
                  if (is_array($loadd1)) {
                    extract($loadd1);
                  ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ngày đặt</label>
                      <input type="hidden" name="id" class="form-control" value="<?php if (isset($id) && ($id != '')) echo $id ?>">
                      <input type="date" name="ngay_dat" class="form-control" value="<?php if (isset($ngay_dat) && ($ngay_dat != '')) echo $ngay_dat ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tổng giá</label>
                      <input type="text" name="tong_gia" class="form-control" value="<?php if (isset($tong_gia) && ($tong_gia != '')) echo $tong_gia ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Trạng Thái</label>
                      <input type="text" name="trang_thai" class="form-control" value="<?php if (isset($trang_thai) && ($trang_thai != '')) echo $trang_thai ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID_khách hàng</label>
                      <input type="text" name="id_kh" class="form-control" value="<?php if (isset($id_kh) && ($id_kh != '')) echo $id_kh ?>">
                    </div>

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

    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>