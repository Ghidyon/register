<?php
   // class registrar
    // should have properties which would be a multidimensional array.
    // then methods
    // Echo on the html to output the table contents of the registrar

    
    class Register {
        protected $semester_result = [
            "course" => ['MEC 301', 'MTH 311', 'EED 414', 'GNS 401', 'EEI 434'],
            "grade" => ['A', 'B', 'A', 'B', 'D']
        ];

        function getResult() {
            return $this->semester_result;
        }
        
    }

    $final_year = new Register;
    $result = $final_year->getResult();

    // foreach ($semester_result as $key => $value) {
    //     echo($key);
    //     echo "<br>";
    //     for ($i=0; $i < count($value); $i++) { 
    //         # code...
    //         echo $serial_no;
    //         echo "<br>";
    //         echo $value[$i];
    //         echo "<br>";
    //         $serial_no++;
    //     }
    //     echo "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Register</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>S/N</th>
                <?php $serial_no = 1; ?>
                <?php foreach ($result as $key => $value) { ?>
                <th> <?= ucfirst($key) ?></th>
                <?php }  ?>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($result as $key => $value) { ?>

                <?php for ($i=0; $i < count($value); $i++) { ?>
                <tr>
                    <td><?= $serial_no ?></td>
                    <td><?= $value[$i] ?></td>
                    <?php $serial_no++; ?>
                </tr>;
                <?php }  ?>
                <?php }  ?>
        </tbody>
    </table>
</body>
</html>