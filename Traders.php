<?php
// defining the functin
function maximumProfilt($price, $len)
{   
     $profit = array();
     // initializing the profit array with zero
    for ($j = 0; $j < $len; $j++)
        $profit[$j] = 0;
 

    $maximum_price = $price[$len - 1];
    
    // calculating the maximum price

    for ($j = $len - 2; $j >= 0; $j--)
    {
        if ($price[$j] > $maximum_price)
            $maximum_price = $price[$j];
 
        if($profit[$j + 1] >
           $maximum_price-$price[$j])
        $profit[$j] = $profit[$j + 1];
        else
        $profit[$j] = $maximum_price -
                      $price[$j];
    }
   // initializing the min price value

   $min_price = $price[0];
   
   for ($j = 1; $j < $len; $j++)
    {
        if ($price[$j] < $min_price)
            $min_price = $price[$j];
 
        $profit[$j] = max($profit[$j - 1],
                          $profit[$j] +
                         ($price[$j] - $min_price));
    }
    $result = $profit[$len - 1];
    return $result;
}
 
// initialize the array
$price = array(3,3,5,0,0,3,1,4);
//lenght of the array
$len = sizeof($price);
echo "Output :".maximumProfilt($price, $len);
     

?>