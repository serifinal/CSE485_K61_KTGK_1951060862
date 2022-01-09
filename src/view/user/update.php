<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2 style="text-align: center;margin-top : 50px">Sửa thông tin nhân viên</h2>
        <form action="" method="POST" class="mt-3">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Họ và tên nhân viên</label>
                <input name="hovaten" value="<?php echo $user['hovaten'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Chức vụ</label>
                <input name="chucvu" value="<?php echo $user['chucvu'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Phòng ban</label>
                <input name="phongban" value="<?php echo $user['phongban'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Lương</label>
                <input name="luong" value="<?php echo $user['luong'] ?>" type="number" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Ngày vào làm</label>
                <input name="ngayvaolam" value="<?php echo $user['ngayvaolam'] ?>" type="date" class="form-control" id="exampleInput">
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Sửa thông tin</button>
  

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>