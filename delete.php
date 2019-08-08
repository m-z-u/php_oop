<?php


require_once('Models/Todo.php');
// echo '<pre>';
// var_dump ($_GET);
// die;

$id = $_GET['id'];

//Todoクラスのインスタンス化
$todo = new Todo();

//Todoクラスのdeleteメソッドを実行
$todo->delete($id);

//データの削除
//deleteボタンを押したら、対象のレコードを削除して
//一覧画面に移る
header('Location: index.php');
//Dbからデータを削除

/*プライマリキー -id
