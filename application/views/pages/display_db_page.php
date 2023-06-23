

<!DOCTYPE html>
<html lang=en>
<head>
    <meta char="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Crud Operation</title>
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5" onclick="document.location='input'">ADD NEW CREDENTIALS</button>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>


<?php

    foreach($in_db as $row){
            $id=$row['id'];
            $first_name=$row['firstname'];
            $last_name=$row['lastname'];
            $email=$row['email'];
            $password=$row['password'];
            $gender=$row['gender'];
            echo 
                '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$first_name.'</td>
                <td>'.$last_name.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>'.$gender.'</td>
                    <td>
                        <button class="btn btn-primary"><a href="update_v2.php?id_update_data='.$id.'" class="text-dark">Update</a></button>
                        <button class="btn btn-primary"><a href="delete.php?delete_id='.$id.'" class="text-dark">Delete</a></button>
                    </td>
                </tr>';

    
    }
    ?>
</tbody>
</table>
</div>   

</body>
</html>