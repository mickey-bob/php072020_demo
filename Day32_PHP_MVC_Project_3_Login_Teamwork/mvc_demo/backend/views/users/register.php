<?php
//views/users/register.php
?>

<h1>Trang register</h1>
<form action="" method="post">
<div class="container">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="from-control" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="confirm-password">Confirm password</label>
        <input type="password" id="confirm-password" name="confirm-password" class="form-control" />

    </div>
    <input type="submit" name="submit" value="dang ky" class="btn btn-primary" />
    da co tai khoan
    <a href="index.php?controller=user&action=login"></a>
</form>
</div>
