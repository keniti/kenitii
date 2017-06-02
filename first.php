<?php
  //練習問題1
  //文字列連結を用いて、自分の名前をブラウザ上に表示する。
  $first_name = 'Numata';
  $last_name = 'keniti';
  echo $first_name." ";
  echo $last_name;
  echo"<br />";
  echo"<br />";
  //練習問題2
  //以下の計算をそれぞれ行い、ブラウザ上に表示する。
  //8 * 3の計算
  //24 / 8の計算
  //6 + 10の計算
  //6 - 10の計算
  //10 % 7の計算
  echo 8*3;
  echo"<br />";
  echo 24/8;
  echo"<br />";
  echo 6+10;
  echo"<br />";
  echo 6-10;
  echo"<br />";
  echo 10%7;
  echo"<br />";
  echo"<br />";
  //練習問題3
  //下記のプログラムのコメント部分をそれぞれ実行し、ブラウザ上に表示する。
  //※自己代入演算子を用いること
  $var = 2;
  //$varに12を足す
  echo $var+10;
  echo"<br />";
  //$varに7で割る
  echo $var/7;
  echo"<br />";
  //$varに5を掛ける
  echo $var*5;
  echo"<br />";
  //$varの3の剰余
  echo $var%3;
  echo"<br />";
  echo"<br />";
  //練習問題4
  //配列内に、伊達、櫻井、伊藤、藤尾を入れて、ブラウザ上にそれぞれを表示せよ。
  $list = array("伊達","櫻井","伊藤","藤尾");
  echo $list[0];
  echo"<br />";
  echo $list[1];
  echo"<br />";
  echo $list[2];
  echo"<br />";
  echo $list[3];
  echo"<br />";
  echo"<br />";
  //練習問題5
  //連想配列内に、nameキーに'櫻井'、ageキーに'22'、placeキーに'富山'を入力して、ブラウザ上にそれぞれを表示せよ。
  $lists = array("name"=>"櫻井","age"=>"22","place"=>"富山");
  echo $lists["name"]." ";
  echo $lists["age"]." ";
  echo $lists["place"]."";
  echo"<br />";
  echo"<br />";
  //課題1
  //西暦の計算
  //以下の配列に2つの西暦a, bがあります。その2つのaからbが何年間か出力しなさい。
  $year = array(1994, 2017);
  echo $year[1]-$year[0];
  echo"<br />";
  echo"<br />";
  //課題2
  //かまくらづくり
  //櫻井がはしゃいでかまくらを作り始めました。どれだけの体積の雪が必要か計算しなさい。
  //そのかまくらは四角形であり、以下の配列に外側の1辺と内側の1辺の長さが入っている。(r1 > r2)
  //下の行のecho文のコメントを外すとimageが出てくるのでこちらも参照するとわかりやすい。
  echo '<img src="./assets/img/img1.png">';
  echo"<br />";
  echo"<br />";
  $size = array(6, 4);
  echo $size[0]*$size[0]*$size[0]-$size[1]*$size[1]*$size[1];
  echo"<br />";
  echo"<br />";
  //課題3
  //行列の計算
  //まず、以下のecho文のコメントをはずしてください。
  //以下の配列内にa = 10, b = -20, c = 12, d = 6がそれぞれ代入されている。
  //この行列を表す配列を用いて、行列の計算を行いなさい。
  echo '<img src="./assets/img/matrix1.png">';
  echo"<br />";
  echo"<br />";
  $matrix = array(10, -20, 12, 6);
  echo $matrix[0]*$matrix[3]-$matrix[1]*$matrix[2];
  echo"<br />";
  echo"<br />";
  //課題4
  //自己紹介
  //練習問題5を参考にして、自己紹介をせよ。
  //例) 私は、安久昌和です。出身は石川県で、年齢は22歳、趣味はバスケットボールです。電子・情報工学科に所属しています。
  //必ず、連想配列を用いること
  $myself = array("name"=>"けんいち","place"=>"茨城","age"=>"19","hobby"=>"ゲーム","gakka"=>"電子・情報工学科");
  echo "私は、{$myself["name"]}です。出身は、{$myself["place"]}で、年齢は{$myself["age"]}、趣味は{$myself["hobby"]}です。{$myself["gakka"]}に所属しています。";
  echo"<br />";
  echo"<br />";

?>
