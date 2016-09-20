<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/20/2016
 * Time: 8:58 AM
 */

//#####################################################################################################################//
//Function that returns avg of all elements of array divided by 3
//First incspect input data, then find all elements divided by 3.
//Use reduce function to calculate sum and then find average. We can use
//array_walk,array_map,array_filter allso.
function getAvg($a){
    if(is_array($a) && count($a) > 0){
        $res = array();
        foreach($a as $num){
            if ($num % 3 == 0){
                $res[] = $num;
            }
        }
        $sum =  array_reduce($res,function($a,$b){
            return $a+$b;
        });
        return $sum/count($res);

    } else {
        echo "Wrong input data";
    }
}

$a = getAvg([1,2,3,4,5,6,9]);
var_dump($a);
//#####################################################################################################################//
//#####################################################################################################################//
//Find smallest elemnt in array
function findSmallest($a){
    if(is_array($a) && count($a) > 0){
       $smallest = $a[0];
        foreach($a as $elem){
           // $smallest = $smallest > $elem? $elem:$smallest;//Better choice, with ternary operator
            if($elem < $smallest){
                $smallest = $elem;
            }
        }
        return $smallest;
    } else {
        echo "Wrong input data";
    }

}

echo findSmallest([1,4,8,20,200,300]);
//#####################################################################################################################//
//#####################################################################################################################//
//Swap elements in array
function swap($a){
    if(is_array($a) && count($a) > 0){
       for($i=0,$j=count($a)-1;$i<$j;$i++,$j--){
           $b = $a[$i];$a[$i] = $a[$j];$a[$j]=$b;
       }
       foreach($a as $elem){
           echo "<br>$elem\t";
       }
    } else {
        echo "Wrong input data";
    }
}

$ar = [1,2,3,4,5,6];
swap($ar);
//######################################################################################################################//
//######################################################################################################################//
//Fusion of two ascending arrays

function fusion($ar1,$ar2){
    $c = array();
    //Length of input arrays
    $na= count($ar1);
    $nb = count($ar2);

    //Length of result array
    $nc = $na + $nb;
    $ia = $ib = $ic = 0;

    while ($ia < $na && $ib < $nb){
        $c[$ic++] = ($ar1[$ia] < $ar2[$ib]? $ar1[$ia++]:$ar2[$ib++]);
    }
    while ($ia < $na) $c[$ic++] = $ar1[$ia++];
    while ($ib < $nb) $c[$ic++] = $ar2[$ib++];

    foreach($c as $elem){
        echo "<br>$elem\t";
    }

}

$ar1 = [5,6];
$ar2 = [3,4,7,8];
fusion($ar1,$ar2);
//#####################################################################################################################//
//#####################################################################################################################//
function mySort($ar){
    if(is_array($ar) && count($ar) > 0){
        for($i=0;$i<count($ar)-1;$i++){
            if($ar[$i] > $ar[$i+1]){
                $b = $ar[$i];
                $ar[$i] = $ar[$i+1];
                $ar[$i+1] = $b;
            }
        }
        foreach($ar as $a){
            echo "<br>$a\t";
        }
    } else {
        echo "Wrong input data";
    }
}
$q = [3,6,9,10,100,1,0,20];
mySort($q);
//######################################################################################################################//
//######################################################################################################################//

