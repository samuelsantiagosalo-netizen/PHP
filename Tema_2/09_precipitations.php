#precipitation with array
    <?php
   
	$precipitation = array('monday' => 3 , 'thuesday' => 4 , 'wendsday' => 2, 'thirday' => 5, 'friday' => 7,'sunday' => 2,'saturday' => 6);
	$sum = 0;
	foreach ($precipitation as $p) {
    $sum += $p;
};
echo $sum
	
    ?>

