<!-- Content Wrapper. Contains page content -->
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">danh sách </li>
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
              <h3 class="card-title">Quản trị sản phẩm </h3>
            </div>
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bảng danh sách sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Ngày nhập</th>
                    <th>Loại hàng</th>
                    <th>Hình ảnh 1</th>
                    <th>Hình ảnh 2</th>
                    <th>Hình ảnh 3</th>
                    <th> <a href="">Sửa</a> </th>
                    <th> <a href="">Xóa</a> </th>
                  </tr>
                </thead>
                <tbody>
                <?php
foreach ($loadsanpham as $listsp) {
    extract($listsp);
    $linkimg_dai_dien = './img/' . $img_dai_dien;
    $linkimg_1 = './img/' . $img_1;
    $linkimg_2 = './img/' . $img_2;
    $linkimg_3 = './img/' . $img_3;

    echo '
        <tr>
            <td>' . $id . '</td>
            <td>' . $ten . '</td>
            <td>' . $MoTa . '</td>
            <td>' . $Gia . '</td>
            <td><img width="50px" height="50px" src="' . $linkimg_dai_dien . '" alt="product" width="100"></td>
            <td>' . $ngay_nhap . '</td>
            <td>' . $id_danh_muc . '</td>
            <td><img src="' . $linkimg_1 . '" alt="product" width="100"></td>
            <td><img src="' . $linkimg_2 . '" alt="product" width="100"></td>
            <td><img src="' . $linkimg_3 . '" alt="product" width="100"></td>
            <td><a href="?act=suasp&&id='.$id.'"> Sửa danh mục </a></td>
            <td><a href="?act=deletesp&&id=' . $id . '"> Xóa danh mục </a></td>
        </tr>
    ';
}
?>

                </tbody>

              </table>
              <div class="card-footer">
                <button name="submit" type="submit" class="btn btn-sidebar"><a href="?act=addsp">Thêm sản phẩm</a></button>
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