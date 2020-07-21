<?php
   #Array - Variables that holds multiple values
   /*
       - Indexed
       - Associative
       - Multi-dimentional
   */

    // Indexed
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array('54', '58', '85');
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    // If you don't know the number of the last array then use this ways. It will automatically add the number at the last.
    $cars[] = 'Audi';

    echo $people[1];
    echo '<br>';
    echo $ids[2];
    echo '<br>';
    echo $cars[2];
    echo '<br>';
    echo $cars[3];
    echo '<br>';
    echo $cars[4]; 
    echo '<br>';
    # Basic Functions
    // No of items
    // echo count('$cars');
    echo '<br>';
    echo count($cars);

    // Shows the whole arrays
    echo '<br>';
    print_r($cars);
    // It will print the variable as it is
    print_r('$cars');

    // Shows the datatypes
    echo '<br>';
    var_dump($cars);

    // Associative Array
    $people = array('brad' => 35, 'Jose' => 56, 'William' => 54);
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    echo '<br>';
    echo $people['brad'];

    echo '<br>';
    echo $ids[22];

    // Functions
    echo '<br>';
    print_r($people);

    echo '<br>';
    var_dump($people);

    //Multi-Dimensional
    $cars = array(
    	array('Honda', 20, 10),
    	array('Toyota', 30, 20),
    	array('Ford', 23, 12)
    );

    echo '<br>';
    echo $cars[2][2]. '<br>';

    // Examples - Add only the numbers in the given Array
    $arr = ['1, a, b, 2, 5, 6'];
    $arrlength = count($arr);
    // echo $arrlength;
    $sum = 0;
    
    for ($i=0; $i < $arrlength; $i++) { 
        if (filter_var($arr[$i], FILTER_VALIDATE_INT)) {
            echo $sum += $arr[$i];
        }
    }
?>