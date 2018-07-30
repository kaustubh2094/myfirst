<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inquiry Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Inquiry</h2>
</div>

<form method="post" action="index.php">
    <?php include('error.php'); ?>
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
        <label>Mobile</label>
        <input type="text" name="mobileno" value="<?php echo $mobileno; ?>">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $address; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="input-group">
        <button type="submit"  class="btn" name="reg_user">Register</button>
    </div>

</form>
</body>
</html>