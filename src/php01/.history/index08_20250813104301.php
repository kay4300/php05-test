<!-- 配列 -->
<?php
$people = array('taro', 'jiro', 'saburo');
var_dump($people);
echo $people[0];
echo "<br />";
echo $people[2];
?>

<?php
$pople = array(
    'person1' => 'taro',
    'people2' => 'jiro',
    'people3' => 'saburo',
);
var_dump($people);
echo $people[1];
?>

<?php
$people = [
    'person1' => 'taro',
    'person2' => 'jiro',
];
echo $people['person1'];
?>

<?php
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
];
echo $people[2]["gender"];
?>

<?php
$people = [
    [
        "name" => "taro",
        "age" => 25,
        "gender"
    ]
 
]