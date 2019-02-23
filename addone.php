<?php
    /**
    * Test cases for function
    * The given value on the left, the expected value on the right returned from function addOne 
    **/
    $tests = [
        ['given' => -1, 'expected' => 0],
        ['given' => -654, 'expected' => -653],
        ['given' => 53, 'expected' => 54],
        ['given' => 0, 'expected' => 1],
        ['given' => 1010, 'expected' => 1011],
    ];

    /**
     * Function to add 1 to given integer not using math operators or math libraries
     * @var $n
     * @return $add
     **/
    function addOne($n): int 
    { 
        // this can be changed to any number for addition
        $add = 1; 

        // Iterate until there is no more to carry  
        while ($n != 0){          
            // $carry contains the common set bits of $add and $n 
            $carry = $add & $n;  
    
            // Sum of bits of $add and $n where at least one of the bits is not set 
            $add = $add ^ $n;  
    
            // Carry is shifted by one so that adding it to $add gives the required sum 
            $n = $carry << 1; 
        } 

        return $add; 
    } 

    /**
     * Iterate over all test cases
     **/
    foreach($tests as $test){
        $sum = addOne($test['given']);

        if($test['expected'] === $sum){
            echo "True: ".$test['expected'].' equals '.$sum."\n";
        }else{
            echo "False: ".$test['expected'].' does not equal '.$sum."\n";
        }      
    }
?>
