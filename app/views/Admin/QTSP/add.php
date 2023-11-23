<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản trị sản phẩm</h1>
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
              <h3 class="card-title">Thêm mới sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên sản phẩm</label>
                  <input name="ten" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                  <input name="mo_ta" type="text" class="form-control" id="exampleInputEmail1" placeholder="Mô tả sản phẩm">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Giá sản phẩm</label>
                  <input name="gia" type="text" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                </div>

                <div class="form-group">
                  <label for="img_dai_dien">Ảnh đại diện sản phẩm</label><br>
                  <input type="file" name="img_dai_dien" id="img_dai_dien">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Ngày nhập</label>
                  <input name="ngay_nhap" type="date" class="form-control" id="exampleInputEmail1" placeholder="Ngày nhập">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Danh mục sản phẩm</label><br>
                  <select name="id_danh_muc" id="id_danh_muc">
                    <?php
                    foreach ($loaddm as $listdm) {
                      extract($listdm);
                    ?>
                      <option value="<?php echo $id ?>"><?php echo $ten ?></option>
                    <?php
                  }
                    ?>
                  </select>

                </div>

                <div class="form-group">
                  <label for="img_1">Ảnh 1</label><br>
                  <input type="file" name="img_1" id="img_1">
                </div>

                <div class="form-group">
                  <label for="img_2">Ảnh 2</label><br>
                  <input type="file" name="img_2" id="img_2">
                </div>

                <div class="form-group">
                  <label for="img_3">Ảnh 3</label><br>
                  <input type="file" name="img_3" id="img_3">
                </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="addsp" id="" value="Thêm sản phẩm">
              </div>
              <?php
              if (isset($thongbao) && ($thongbao) != "") {
                echo $thongbao;
              }
              ?>
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