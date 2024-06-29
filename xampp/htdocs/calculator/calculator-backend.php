<?php
            
            $angka1 = $_GET['angka1'];
            $operator = $_GET['operator']; 
            $angka2 = $_GET['angka2'];

            if( (isset($angka1) and isset($angka2)) and isset($operator)){

                echo $angka1;
                echo $operator;
                echo $angka2;

                echo ' = ';
                
                if($operator == '+'){
                    echo $angka1 + $angka2;
                }
                elseif($operator == '-'){
                    echo $angka1 - $angka2;
                }
                elseif($operator == '*'){
                    echo $angka1 * $angka2;
                }
                else{
                    echo $angka1 / $angka2;
                }
            }

?>