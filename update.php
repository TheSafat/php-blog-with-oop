<?php
    include('function.php');
    $obj = new CrudApp();

    $row = $obj->displayDataByID($_GET['id']);

    if(isset($_POST['btn'])){
        $obj->updateData($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="" value="<?php echo $row['name'] ?>"></td>
            </tr>
            <tr>
                <td>Roll</td>
                <td><input type="text" name="roll" id="" value="<?php echo $row['roll'] ?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="img" id="" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" id="" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>