<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2 class = "text-center mt-5">Thêm thông tin nhân viên</h2>
        <form method="POST" style="mt-5">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Họ và tên nhân viên</label>
                <input name="hovaten" type="text" class="form-control" id="exampleInput" required>
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Chức vụ</label>
                <input name="chucvu" type="text" class="form-control" id="exampleInput" required>
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Phòng ban</label>
                <input name="phongban" type="text" class="form-control" id="exampleInput" required>
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Lương</label>
                <input name="luong" type="number" class="form-control" id="exampleInput" required>
            </div>      
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Ngày vào làm</label>
                <input name="ngayvaolam" type="date" class="form-control" id="exampleInput" required>
            </div>
            <div class="mb-3">

            <button type="submit" name="submit" class="btn btn-primary">Thêm thông tin nhân viên</button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>