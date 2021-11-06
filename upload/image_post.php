<html lang="ja">
 <head>
  <meta charset="UTF-8">
<!--#include virtual="/assets/html/hedder.html" -->
  <style>
.outer{
  position: relative;
}
.inner{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  -webkit- transform: translateY(-50%) translateX(-50%);
}
p {text-shadow: 1px 2px 3px #808080; }
</style>
</head>

 <body>
 <div class="title">
 <div style="text-align:center">
 <div class="column outer inner">
 <div class="box">
<?php
$updir = "./img/files";
$tmp_file = @$_FILES['image']['tmp_name'];
@list($file_name,$file_type) = explode(".",@$_FILES['image']['name']);
$copy_file = date("Ymd-His") . ".$file_type" ;
if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
	if (move_uploaded_file($tmp_file,"$updir/$copy_file")) {
		chmod("upload_files/" . $_FILES["image"]["name"], 0644);
        echo $_FILES["image"]["name"] . "をアップロードしました。<br />";
        echo "アップロードしたファイルは <a href=\"" . $updir . "/" . $copy_file . "\" target=\"_blank\">こちら</a> から確認できます。<br />";
		echo 'アップロードされたファイル一覧は <a href=https://media-ryouma.sytes.net/upload/img/ target="_blank">こちら</a> から確認できます。<br />';
        echo '新しくアップロードする場合は<a href="https://media-ryouma.sytes.net/upload/">こちらからどうそ</a><br />';
        echo "<title lang=\"ja\">アップロード成功！ - RSソース</title>";
	} else {
		echo "<div class=\"notification is-danger\">ファイルをアップロード出来ませんでした。";
        echo '<title>アップロードエラー - RSソース</title>';
	}
} else {
	echo "<div class=\"notification is-danger\">エラー：ファイルが選択されていません。</div><br>";
    echo '<title>アップロードエラー - RSソース</title>';
    echo "<a href=\"https://media-ryouma.sytes.net/upload/\"><button class=\"button is-medium is-fullwidth\">やり直す</button></a>";
}
?>