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
              <h3 class="card-title">update sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <!-- index.php?act=updatesp -->
            <?php
            if (is_array($loadsp)) {
              extract($loadsp);
            ?>
              <form action="index.php?act=updatesp&id=<?= $id ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputEmail1">Update</label>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="hidden" name="id" class="form-control" value="<?php if (isset($id) && ($id != '')) echo $id ?>">
                        <input name="ten" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="<?php if (isset($ten) && ($ten != '')) echo $ten ?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                        <input name="mo_ta" type="text" class="form-control" id="exampleInputEmail1" placeholder="Mô tả sản phẩm" value="<?php if (isset($mo_ta) && ($mo_ta != '')) echo $mo_ta ?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                        <input name="gia" type="text" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm" value="<?php if (isset($gia) && ($gia != '')) echo $gia ?>">
                      </div>

                      <div class="form-group">
                        <label for="img_dai_dien">Ảnh đại diện sản phẩm</label><br>
                        <?php if (isset($linkimg_dai_dien) && $linkimg_dai_dien != '') : ?>
                          <img src="<?php echo $linkimg_dai_dien; ?>" alt="product" width="100">
                        <?php endif; ?>
                        <input type="file" name="img_dai_dien" id="img_dai_dien">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ngày nhập</label>
                        <input name="ngay_nhap" type="date" class="form-control" id="exampleInputEmail1" placeholder="Ngày nhập" value="<?php if (isset($ngay_nhap) && ($ngay_nhap != '')) echo $ngay_nhap ?>">
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
                        <label for="img_1">Ảnh đại diện 1</label><br>
                        <?php if (isset($linkimg_1) && $linkimg_1 != '') : ?>
                          <img src="<?php echo $linkimg_1; ?>" alt="product" width="100">
                        <?php endif; ?>
                        <input type="file" name="img_1" id="img_1">
                      </div>
                      <div class="form-group">
                        <label for="img_2">Ảnh đại diện 2</label><br>
                        <?php if (isset($linkimg_2) && $linkimg_2 != '') : ?>
                          <img src="<?php echo $linkimg_2; ?>" alt="product" width="100">
                        <?php endif; ?>
                        <input type="file" name="img_2" id="img_1">
                      </div>
                      <div class="form-group">
                        <label for="img_3">Ảnh đại diện 3</label><br>
                        <?php if (isset($linkimg_3) && $linkimg_3 != '') : ?>
                          <img src="<?php echo $linkimg_3; ?>" alt="product" width="100">
                        <?php endif; ?>
                        <input type="file" name="img_3" id="img_3">
                      </div>


                    </div>
                  </div>
                </div>
          </div>

        <?php
            }

        ?>

        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-primary" value="btn">UPDATE</button>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao) != "") {
          echo $thongbao;
        }
        ?>
        </form>
        </div>
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