<?php
   // class registrar
    // should have properties which would be a multidimensional array.
    // then methods
    // Echo on the html to output the table contents of the registrar

    
    class Register {
        public $semester_result = [
            "course" => ['MEC 301', 'MTH 311', 'EED 414', 'GNS 401', 'EEI 434'],
            "grade" => ['A', 'B', 'A', 'B', 'D']
        ];
        
    }

    $semester_result = [
        "course" => ['MEC 301', 'MTH 311', 'EED 414', 'GNS 401', 'EEI 434'],
        "grade" => ['A', 'B', 'A', 'B', 'D']
    ];

    $serial_no = 1;    
    foreach ($semester_result as $key => $value) {
        echo($key);
        echo "<br>";
        for ($i=0; $i < count($value); $i++) { 
            # code...
            echo $serial_no;
            echo "<br>";
            echo $value[$i];
            echo "<br>";
            $serial_no++;
        }
        echo "<br>";
    }
?>