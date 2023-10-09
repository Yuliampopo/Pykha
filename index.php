<?php
function get_element(array $arr, int $num){
    print_r(array_slice($arr, $num,1));
    print_r("</br>");
    foreach ($arr as $value){
        if(is_array($value)){
            get_element($value, $num);
        }
    }
}
$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'four' => 5,

    'five' => [

        'three' => 32,

        'four' => 5,

        'five' => 12,

    ],

];
echo "\n";
get_element($firstArr, 2);
function count_letters($str){
    if (!is_string($str)){
        return false;
    };
    $arr = str_split($str, 1);
    $b = 0;
    foreach ($arr as $value){
        if ($value == "b"){
            $b += 1;
        }
    }
    return $b;
}
print_r(count_letters("Bububu pipupu budabu"));

echo "\n";
$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'four' => 5,

    'five' => [

        'three' => 32,

        'four' => 5,

        'five' => 12,

    ],

];
function sum_elements($arr)
{
    $a = array_sum($arr);
    foreach ($arr as $value) {
        if (is_array($value)) {
            $a = $a + sum_elements($value);
        }
    }
      return $a;
}
print_r("</br>");
print_r(sum_elements($firstArr));

echo "\n";
function quadrat(float $big, float $small){
 $a = $big/$small;
 return pow(floor($a), 2);
}
print_r("</br>");
print_r(quadrat(5.0, 2.1));
