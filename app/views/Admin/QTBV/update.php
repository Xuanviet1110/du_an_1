<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản trị Bài viết</h1>
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
              <h3 class="card-title">UPDATE Bài viết</h3>
            </div>

            <form action="index.php?act=updatebv" method="post" enctype="multipart/form-data">

              <?php
              extract($baiviet);
              $linkimg = '../../views/Admin/img/' . $anh;
              ?>
              <div class="card-body">
                <label for="exampleInputEmail1">Update</label>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tiêu đề</label>
                  <input type="hidden" name="id" class="form-control" value="<?php if (isset($id) && ($id != '')) echo $id ?>">
                  <input name="tieu_de" id="tieu_de" type="text" class="form-control" value="<?php if (isset($tieu_de) && ($tieu_de != '')) echo $tieu_de ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ảnh bài viết</label>
                  <img src="<?= $linkimg ?>" alt="" width="100px">
                  <input type="file" name="anh" id="anh">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nội Dung</label>
                  <input type="text" name="noi_dung" id="noi_dung" class="form-control" value="<?php if (isset($noi_dung) && ($noi_dung != '')) echo $noi_dung ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ngày đăng</label>
                  <input type="date" name="ngay_dang" id="ngay_dang" class="form-control" value="<?php if (isset($ngay_dang) && ($ngay_dang != '')) echo $ngay_dang ?>">
                </div>


              </div>


              <?php


              ?>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
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
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->