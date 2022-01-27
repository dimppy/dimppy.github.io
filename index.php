<?php
function Prime_number($n)
{
if ($n == 1) // 1 is only divisible by itself (not prime)
   $multiple = 1;
   for ($i = 1; $i <= $n/2; $i++)
   {
      if ($n % $i == 0) //check if number is divisible by 1 and itself
      $multiple[]= $i; //store all the multiples
      
   }
  return $multiple;
}
echo "<h2>1. Prime Numbers</h2>";
for($n = 1; $n <= 100; $n++) {

	$flag = Prime_number($n);
    
	if ($flag == 1) {
    
		echo $n.'('.$flag.")</br> ";
        
	}elseif(sizeof($flag)<2){
    
    	echo $n." Prime</br> ";
    }
    else{
    
     	echo $n.' ( '.implode(',' , $flag).' ) </br>';
    }
}  
?>
