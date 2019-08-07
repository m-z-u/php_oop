<?php

//Toukenクラス定義
class Touken{
    public $name;
    public $level;
    public $tousyu;
    protected $touha;
   

    public function __construct($name,$level,$tousyu)
    {
        $this->name = $name;
        $this->level = $level;
        $this->tousyu = $tousyu;
        // echo "{$this->name}の刀種は{$this->tousyu}、刀派は{$this->touha}、レベルは{$this->level} です。<br>";
        // // echo $this->name. 'の刀種は' . $this->tousyu . '、刀派は' . $this->touha . '、レベルは' . $this->level . 'です。';

    } 

    // public function attack()
    // {
    //     echo '攻撃します';
    // }

    // public function getName()
    // {
    //     return $this->name;
    // }
}

//$ishikiriインスタンス
$ishikiri = new Touken("石切丸",99,"大太刀"); //ishikiriという変数にToukenクラスの
// $ishikiri->name = "石切丸";
// $ishikiri->tousyu = "大太刀";
// $ishikiri->touha = "三条";
// $ishikiri->level = 99;
echo $ishikiri->name."のレベルは".$ishikiri->level."、刀種は".$ishikiri->tousyu;
//$ishikiri->introduce();

// echo $ishikiri->getName();


