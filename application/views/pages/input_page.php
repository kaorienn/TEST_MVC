<!DOCTYPE html>
<html>
<body>

    <?= form_open('input_page.php');?>
    <!-- <form action="" method="post"> -->
        <div class="form_group">
        firstname: <br>
            <input type="text" name="collected_firstname" class="form-control" placeholder="Enter your first name">
        </div>
        <br>
        <div class="form_group">
        lastname: <br>
            <input type="text" name="collected_lastname" class="form-control" placeholder="Enter your last name">
        </div>
        <!-- <br>
        <div class="form_group">
        email: <br>
            <input type="email" name="collected_email" placeholder="Enter your email address">
        </div>
        <br>
        <div class="form_group">
        Password: <br>
            <input type="password" name="collected_password" placeholder="Enter your password">
        </div>
        <br>
        <div class="form_group">
        Gender:<br>
            <input type="radio" name="collected_gender" value="Male">Male
            <input type="radio" name="collected_gender" value="female">Female
        </div>
        <br> -->
        <br>
        <input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
    
    <?= validation_errors();?>
</body>
</html>
