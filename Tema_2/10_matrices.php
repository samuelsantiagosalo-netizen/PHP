<?php
    function transpose ($matrix){ //It returns the transposed matrix
        for ($row = 0; $row < count($matrix); $row++) { 
            for ($col = 0; $col < count($matrix); $col++) {
                $transposedmatrix[$row][$col]= $matrix[$col][$row];
                }
        }
        return $transposedmatrix;
    }

    function display ($matrix){//It carries to the output the HTML code to display a matrix as a table
        echo "<table>";
        for ($row = 0; $row < count($matrix); $row++) {  
            echo "<tr>";
            for ($col = 0; $col < count($matrix); $col++) {
                echo "<td>", $matrix[$row][$col],"</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }


    function matrixsum($matrix,$matrix1){
        for ($row = 0; $row < count($matrix); $row++) {  
            for ($col = 0; $col < count($matrix [$row]); $col++) {
                $matsum[$row][$col]=$matrix[$row][$col]+$matrix1[$row][$col];
                }
        }
        return $matsum;
    }

    $matrix=[
    array(1,12,26,23,12),
    array(2,11,24,32,4),
    array(3,15,24,43,21),
    array(4,15,24,43,21),
    array(5,12,3,21,34)
    ];
    $matrix1=[
    array(1,12,36,53,12),
    array(2,11,64,12,4),
    array(3,14,34,33,26),
    array(4,12,24,23,24),
    array(5,1,3,31,33)
    ];

    echo "Matrices operations";
    echo "<h2>Original matrix</h2>";
    display($matrix);
    echo "<h2>transposed matrix</h2>";
    #The parameter of the display() function is taken from the calling to another function
    display(transpose($matrix));
    #Now, the HTML code to display the arrays is carried to the output file
    echo "<h2>Original matrices</h2>";
    echo "<h2>First matrix</h2>";

    display($matrix);
    echo "<h2>Second matrix</h2>";
    display($matrix1);

    echo "<p>The sum of these two matrices is  </p>";
    display(matrixsum($matrix,$matrix1));
?>