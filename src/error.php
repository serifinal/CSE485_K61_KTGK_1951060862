<div style="color: red;margin-top:5px;font-size:25px" class="text-center">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<div style="color: green;margin-top:5px;font-size:25px" class="text-center">
    <?php
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</div>