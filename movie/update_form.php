<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</head>
<?php
    include("connect.php");
    $sql = "SELECT * FROM movies WHERE id = '{$_GET['id']}'";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>
<body>
    <form action="update.php" method="POST">
    <label for="id">id</label>
        <?php echo $row ['id'];?>

        <div class="mb-3">
          <input type="text" class="form-control" id="id" name="id"value="<?php echo $row['id']?>">
        </div>
        
        <div class="mb-3">
            <input type="text" class="form-control" id="namem" name="namem" alue="<?php echo $row['namem']?>">
        </div>

        <div class="mb-3">
            <input type="datetime-local" class="form-control" id="dayt" name="dayt"value="<?php echo $row['dayt']?>" >
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name"value="<?php echo $row['name']?>">
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" id="pin" name="pin"value="<?php echo $row['pin']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>