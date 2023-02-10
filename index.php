<?php
    include('function.php');

    $objCrudAdmin = new CrudApp();

    if(isset($_POST['btn'])){
        $objCrudAdmin->addData($_POST);
    }

    $rows = $objCrudAdmin->displayData();

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
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Roll</td>
                <td><input type="text" name="roll" id=""></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="img" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" id="" value="Submit"></td>
            </tr>
        </table>
    </form>

    <br><br><br>
    <hr>

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Roll</td>
            <td>Image</td>
        </tr>
        <?php while($row = mysqli_fetch_assoc($rows)){ ?>
        <tr>
            <td> <?php echo $row['id'] ?> </td>
            <td> <?php echo $row['name'] ?> </td>
            <td> <?php echo $row['roll'] ?> </td>
            <td><img height="100px" src="upload/<?php echo $row['img'] ?>" alt=""></td>
            <td><a href="update.php?status=edit&&id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="delete.php?status=delete&&id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>