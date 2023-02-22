<?php
    require_once "class1.php";
    use conv\Date;
    $dayMsg = "";
    $monthMsg = "";
    $yearMsg = "";

    ?>

    <html lang="en-us">
        <head>
            <title>No1</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </head>
        <body>
            <div class="d-flex align-items-center justify-content-center vh-100">
                <form action="" method="POST" name="ConvertDate">
                    <div class="mb-3">
                        Day: <input type="number" name="day" min="1" max="31"/>
                    </div>
                    <br>
                    <div class="mb-3">
                        Month: <select name="month" id="month">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <br>
                    <div class="mb-3">
                        Year: <input type="number" name="year" min="1"/>

                    </div>
                    <br>
                    <div style="text-align: center;">
                        <input name="Submit" value="Convert" type="submit" class="btn btn-primary"/>
                    </div>
                    <br>
                    <div>
                        <?php
                                Date::dateConvert();
                        ?>
                    </div>
        </body>