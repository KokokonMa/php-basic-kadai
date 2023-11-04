<?php

class Food{
  private $name;
  private $price;

  //コンストラクタを作成する
  public function __construct(string $name, int $price){
    $this->name= $name;
    $this->price=$price;
  }


  //メソッドを定義する
  //「price」プロパティの値を出力する「show_price」メソッド
  public function show_price(){
    echo "{$this->name}の価格は{$this->price}円です。<br>";
  }

}

class Animal{
  private $name;
  private $height;
  private $weight;

  //コンストラクタを作成する
  public function __construct(string $name, int $height, float $weight){
    $this->name= $name;
    $this->height=$height;
    $this->weight=$weight;
  }

  //メソッドを定義する
  //「height」 プロパティの値を出力する「show_height」メソッド
  public function show_height(){
    echo "{$this->name}の高さは{$this->height}cmです。<br>";
  }

}

//Foodをインスタンス化する
$potato=new Food('ジャガイモ', 300);
$potato->show_price();

//Animalをインスタンス化する
$cat=new Animal('猫', 20, 3.5);
$cat->show_height();

?>
