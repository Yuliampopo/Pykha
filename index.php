<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr);

echo "\n";

echo "<pre>";
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$x = array_shift($arr);
array_push($arr, $x);
$x = array_shift($arr);
array_push($arr, $x);
$x = array_shift($arr);
array_push($arr, $x);
$x = array_shift($arr);
array_push($arr, $x);
print_r($arr);

echo "\n";

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$sum = $arr[3]+$arr[4]+$arr[5];
echo $sum;

echo "\n";

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'four' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'four' => 5,

    'five' => 13,

    'six' => 37,

];
$result = array_diff($secondArr, $firstArr);
print_r($result);

echo "\n";

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'four' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'four' => 5,

    'five' => 13,

    'six' => 37,

];
$result = array_diff($firstArr, $secondArr);
print_r($result);

echo "\n";

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'four' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'four' => 5,

    'five' => 13,

    'six' => 37,

];

$equal = array_intersect($firstArr, $secondArr);
print_r($equal);

echo "\n";

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'four' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'four' => 5,

    'five' => 13,

    'six' => 37,

];
foreach ($firstArr as $key => $value) {
    if (array_key_exists($key, $secondArr)) {
        if ($value != $secondArr[$key]) {
            echo $value;
            echo "\n";
            echo $key;
            echo "\n";
        }
    }
};

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
foreach ($firstArr as $key => $value) {
    if (is_array($value)){
        print_r(array_slice($value, 1,1)) ;
    }
};

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
$b = count($firstArr);
foreach ($firstArr as $key => $value) {
    if (is_array($value)){
        $b = $b + count($value);
    }
}
echo $b;

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
$a = array_sum($firstArr);
foreach ($firstArr as $key => $value) {
    if (is_array($value)){
        $a = $a + array_sum($value);
    }
}
echo $a;
?>
