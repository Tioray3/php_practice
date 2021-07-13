<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($number){
    return $number * 2;
}

echo double(100);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a,$b){
    $add = $a +$b;
    return $add;
}

echo add(5,7);

//3.$arr という配列の仮引数を持ち、
//数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$array= array(1,3,5,7,9);

function multiplication($arr){
    $multiplication = 1;
    for($i = 0; $i < count($arr); $i++){
        $multiplication *= $arr[$i];
    }
    return $multiplication;
}

echo multiplication($array);

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
//  途中の部分を完成させてください
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    //foreach文を使って、仮引数$arrの配列を$max_numberに1つずつ代入し、
    //最大値が更新される度に$max_numberも更新されるようにする
    foreach($arr as $a){
        if ($max_number<$a){
            $max_number=$a;
        }
    }
    return $max_number;
}

echo max_array($array);

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//・strip_tags : 指定した文字列からHTMLタグを取り除く。取り除きたくないタグを指定する事も出来る
//strip_tags(文字列,許可するHTMLタグ)
$str="<p>今日の献立<br>・カレーライス<br>・トマトサラダ</p>";
echo strip_tags($str,'<br>');
// => 今日の献立<br>・カレーライス<br>・トマトサラダ と出力される

//・array_push : 指定した配列の最後に要素を追加する
//array_push(配列,"要素","要素",...)
$array_riceball = array("梅","おかか","明太子");
array_push($array_riceball,"鮭","昆布");
print_r($array_riceball);

//・array_merge : 配列と配列を結合する
$array_color1 = array("red","blue","green");
$array_color2 = array("purple","yellow");
$array_color = array_merge($array_color1,$array_color2);
print_r($array_color);

//・time : 現在時刻のUNIXタイムスタンプを取得する
//・mktime : 指定した日時のUNIXタイムスタンプを取得する
//・date : 指定したUNIXタイムスタンプを指定した日時や年月日などの表示に
$now_unix = time();
echo date("Y/m/d" , $now_unix); //この場合time()は省略できるのでecho date("Y/m/d")だけでも機能する

$set_unix = mktime(15,0,0,4,1,2020);
echo date("Y/m/d" , $set_unix);
?>