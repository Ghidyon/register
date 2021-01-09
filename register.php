<?php
// class registrar
// should have properties which would be a multidimensional array.
// then methods
// Echo on the html to output the table contents of the registrar


class Register
{
    protected $semester_result = [
        "course" => ['MEC 301', 'MTH 311', 'EED 414', 'GNS 401', 'EEI 434'],
        "grade" => ['A', 'B', 'A', 'B', 'D']
    ];

    function getResult()
    {
        return $this->semester_result;
    }
}

$final_year = new Register;
$result = $final_year->getResult(); // save array of result as a variable.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        .body-center {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h3 {
            margin: 0 0 3rem 0 !important;
        }
    </style>
</head>

<body>
    <div class="body-center">
        <div class="container">
            <h3>Register</h1>

                <table class="table-responsive striped centered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Course</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $serial_no = 1; ?>
                        <!-- create initial value for serial number  -->
                        <?php for ($i = 0; $i < count($result["course"]); $i++) { ?>
                            <!--  loop inside the sub-array to display array grades and courses -->
                            <tr>
                                <td> <?= $serial_no ?> </td>
                                <td> <?= $result["course"][$i] ?> </td>
                                <td> <?= $result["grade"][$i] ?> </td>
                            </tr>
                        <?php $serial_no++;
                        } ?>
                        <!--  increment serial number value for every loop that happens -->
                    </tbody>
                </table>
        </div>
    </div>
</body>

</html>