<?php

$i=1;
while($i<=5){
    echo $i; $i++;
}

$i=5;
while($i>0){
    echo $i; $i--;
}

$i=1;
while($i<=10){
    echo $i; $i+=2;
}

$i=10;
while($i>=1){
    echo $i; $i-=2;
}

$i=1;
while($i<=5){
    echo "★"; $i++;
}

echo "<br>";


//14時間目 foreach文

$b=array("山田","佐藤","鈴木");
foreach($b as $z){
echo $z;
}

$a=array(100, 200, 300);
foreach($a as $value){
    echo $value;
}


$a=5;
$b=3;
$c=7;

$a=array($a, $b, $c);
foreach($a as $value){
    echo $value;
}


$a=array("山田","佐藤","鈴木");
foreach($a as $b => $c){
    echo $b.$c;
}

$a=array("山田", "佐藤", "鈴木");
foreach($a as $b => $c){
    echo $b."の箱は".$c."<br>";
}



//15時間目 foreach文応用

$a=array("A" => "赤",
        "B" => "青",
        "c" => "緑");
foreach($a as $key => $value){
    echo $key.$value;
}


$a=array("日本"=>"東京",
        "韓国" => "ソウル",
         "中国" =>"北京");
foreach ($a as $key => $value){
    echo $key.$value;
}

$a=array("山田"=>"20歳",
        "佐藤"=>"21歳",
        "鈴木"=>"19歳");
foreach ($a as $key => $value){
    echo $key. ":" .$value."<br>";
}


$food = array(
"vegetable" => array("carrot" => "にんじん",
                    "tomato"=> "トマト",
                    "onion"=> "たまねぎ"
                    ),
"fruit" => array("apple" => "りんご",
                "orange" => "オレンジ",
                "grape" => "ぶどう"
                ));

foreach ($food as $groupkey => $namekey){
    echo "■".$groupkey."<br>";
    foreach ($namekey as $eigoname => $nihonname){
        echo $eigoname. ":".$nihonname."<br>";
    }
    echo "<br>";
}


$a=array("d", "c", "b", "a");
rsort($a);

foreach($a as $key => $value){
    echo $value."<br>";
}



$a=array("red"=>"d",
        "blue"=>"c",
        "white"=>"b",
        "black"=>"a");
krsort($a);

foreach($a as $key => $value){
    echo $key.":".$value."<br>";
}





























 
?>