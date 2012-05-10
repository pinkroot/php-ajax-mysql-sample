<?php
	// MySQLへ接続する準備。DB名や認証に必要な情報を格納
	$url = "localhost";
  $user = "user";
  $pass = "password";
  $db = "sample_db";
	
	// MySQLへ接続する
  $connect = mysql_connect($url, $user, $pass) or die("MySQLへの接続に失敗しました。");

  // 手を加えるデータベースを選択する
  $sdb = mysql_select_db($db, $connect) or die("データベースの選択に失敗しました。");
	
	// POSTされたパラメータを受け取る
	$myInput1 = $_POST["input1"];
	$myInput2 = $_POST["input2"];
	$timestamp = time();
	
	// クエリを送信する
  $sql = "INSERT INTO sample_table VALUES('$timestamp', '$myInput1', '$myInput2')";
  $result = mysql_query($sql, $connect) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
	
  // MySQLへの接続を閉じる
  mysql_close($connect) or die("MySQL切断に失敗しました。");
	
 ?>