
<?php
function solution1($S){
    
    //check if the string length is less than 2 then return 0
      if(strlen($S) == 0  )
        return 1;

//    $temp_right[0] = 0;
    $judge=0;
    $left_bracket = 0;
    $right_bracket = 0;
    
    echo "<pre>";
    for( $i = 0; $i < strlen($S); $i ++ ){
       
        if($S[$i] == '(') {
          $judge ++;
          $left_bracket ++;   
        }

        if($S[$i] == ')') 
        {
          $judge --;
          $right_bracket ++;
        }
        
        if( $judge == -1 )
          return 0;
    }
    
    print_r(array($left_bracket,$right_bracket));
    
    return $judge == 0 ? 1 : 0;
}

        

       
$S ="()h(el)() (( () )) (()) ()((( (()()()())))) ";
//$S = "(124352345352345324534534(534534534253425235234532453434(2342342342563463552345232342523523))";


echo solution1($S);
        
 function solution2($A){
     $avg = array_sum($A)/count($A);
     
     $temp_number;
     $max = 0;
     foreach($A as $value){
         $diff = abs(bcsub($value, $avg));
         echo $diff ."[".$value."-".$avg."]<br>";
         if( $diff > $max ){
             $temp_number = $diff;
             $max = $value;
         }
     }
     
     echo $diff ;
     echo "<br>";
     echo $max;
 }

 
 $number_array = array(2147483647,1,9,4,-3,-10,2147483647,2147483647,2147483647,2147483647,2147483647);
  solution2($number_array);

function solutions3($A){
  
  $total = count($A);
  $count = 0;
  $pArray = array();
  
  for( $i = 0; $i < $total; $i++){
    
    array_push($pArray, $A[$i]);
    
    $sArray = array();

    //save the sa from right 
    for($j = $total-1; $j >=0; $j--){
      array_push($sArray, $A[$j]);
      
      $pArray = array_unique($pArray);
      $sArray = array_unique($sArray);
      sort($pArray);
      sort($sArray);
       if($pArray == $sArray){
        
          if( $count > 1000000000)
            return 1000000000;

          $count ++;
      }
    }
  }
  return $count;
}

//$array = array(0,3, 5, 6,7, 3, 3, 5,10);

$array2 = array(3, 5,7, 3, 3, 5);

//print_r(array(array_diff($array2, $array),array_diff($array,$array2 )));
echo solutions3($array2);

if(1000000000 > 99999999){
  echo "aaaaaaaaaaaaaaaaaaaaaa";
}

