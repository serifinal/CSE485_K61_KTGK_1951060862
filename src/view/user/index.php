
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
  <div class="container-fluid">
    <h2 class="text-center mt-5">Quản lý thông tin nhân viên</h2>
    <?php
      //file hiển thị thông báo lỗi
    require_once 'error.php';
    ?>
    <a href="index.php?controller=user&action=add" class="btn btn-primary" style="margin-top: 50px;">Thêm nhân viên</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Mã nhân viên</th>
          <th scope="col">Họ và tên</th>
          <th scope="col">Chức vụ</th>
          <th scope="col">Phòng ban</th>
          <th scope="col">Lương</th>
          <th scope="col">Ngày vào làm</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($users as $user)
        {

          //khai báo 3 url xem chi tiết, sửa, xóa
          $urlEdit =
              "index.php?controller=user&action=update&maNV=".$user['maNV'];
          $urlDelete =
              "index.php?controller=user&action=delete&maNV=".$user['maNV'];

          echo '<tr>';
            echo "<th scope='row'>{$user['maNV']}</th>";
            echo "<td>{$user['hovaten']}</td>";
            echo "<td>{$user['chucvu']}</td>";
            echo "<td>{$user['phongban']}</td>";
            echo "<td>{$user['luong']}</td>";
            echo "<td>{$user['ngayvaolam']}</td>";
            echo "<td><a href='$urlEdit'><i class='bi bi-pencil-square'></i></a></td>";
            echo "<td><a href='$urlDelete'></i><i class='bi bi-trash'></i></a></td>";          
          echo '</tr>';
        }          
        ?>

      </tbody>
    </table>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>