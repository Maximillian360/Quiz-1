<?php
    require_once "class3.php";
    if(isset($_POST['Submit'])) {
//        if (isset($_POST['name']) && isset($_POST['salary']) && isset($_POST['flexRadioDefault']) && isset($_POST['months'])) {
            $name = $_POST['name'];
            $salary = $_POST['salary'];
            $months = $_POST['months'];
            $opt = $_POST['flexRadioDefault'];

            $wage_slave = $opt == "Employee" ? new Employee($name, $salary, $months) : new Manager($name, $salary, $months);

//        }

    }
    ?>


<html lang="en-us">
    <head>
        <title>No3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST">
            <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="Employee" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Employee
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="Manager" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Manager
                    </label>
                </div>

                <div>
                    Name: <input type="text" name="name">
                </div>

                <div>
                    Salary: <input type="number" name="salary" value="10000" min="10000">
                </div>

                <div>
                    Month of Stay: <input type="number" name="months" value="1" min="1" max="12">
                </div>

                <div style="text-align: center;">
                    <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
                </div>

                <div class="mb-3" style="text-align: center">
                    <?php echo "<br>13th Month Pay: <br>". $wage_slave->Calc_13th()?>
                </div>
                <div class="mb-3" style="text-align: center">
                    <?php echo "<br>Hourly Rate: <br>". $wage_slave->Calc_Hour()?>
                </div>


            </div>

        </form>

    </body>
