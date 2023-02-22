<?php
    require_once "class2.php";

    $opt = isset($_POST["selectedOption"] ) ? $_POST["selectedOption"]: '';
    $prodMsg = "";
    $prodDetails ="";

    if(isset($_POST['submit'])){
        if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['creator']) && isset($_POST['identifier'])){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $creator = $_POST['creator'];
            $identifier = $_POST['identifier'];

            $choice = $opt == "1" ? new Book($name, $price, $creator, $identifier) : new Movies($creator, $identifier);
        }
        else{
            echo "error!";
        }
    }


    ?>




<html lang="en-us">
    <head>
        <title>No2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
            <div class="mb-3">
                <select class="form-select" name="selectedOption">
                    <option value="1">Book</option>
                    <option value="2">Movie</option>
                </select>
            </div>
            <br>
            <div>
                Product Name: <input type="text" name="name">
                <br>
                Product Price: <input type="text" name="price">
            </div>
            <br>
            <div>
                Director/Author: <input type="text" name="creator">
                <br>
                Rating/Genre: <input type="text" name="identifier">
            </div>
            <div>
                <input type="submit" value="Submit" name="submit">
            </div>
        </div>
        <?php var_dump() ?>



    </body>
</html>
