<head>
<!--#include virtual="/assets/html/hedder.html" -->
  <style type="text/css" media="screen">
    .box2{
        width:200px;
        height:auto;
        margin:0;
        text-align:center;
    }
</style>
<title>ファイル一覧 - RSソース</title>
</head>
<body>

</div>
</div>
</div>
</div>
<div style="text-align:center">
<div class="column">
  <div class="box">
                        <div class="hidden_box">
                            <label for="label2" class="button is-medium is-fullwidth is-success is-outlined is-rounded">アップロード</label>
                            <br />
                            <input type="checkbox" id="label2"/>
                            <div class="hidden_show">
                                <br />
                                <div style="text-align:center">
<iframe src="https://media-ryouma.sytes.net/upload/frame/index.php" width="100%" height="50%" loading="lazy"></iframe>
</div>
</div>
</div>
</div>
<div class="title">
  <h2>動画・画像ファイル一覧</h2>
</div>
</div>
</div>
<div style="text-align:center">
<div class="column box1">
                        <div class="hidden_box">
                            <label for="label1" class="button is-medium is-fullwidth is-success is-outlined is-rounded">表示 / 非表示</label>
                            <br /> 
                            <input type="checkbox" id="label1"/>
                            <div class="hidden_show">
                                <br />
                                <button id="button1" class="button is-link is-outlined">全画面</button>  <button id="button2" class="button is-link is-outlined">解除</button>
                                <br /><br /><br />
<?php
//ディレクトリ名
$dir_path = "./files";
if (is_dir($dir_path))
{
if(is_readable($dir_path))
{ // ? ファイルが読み込み可能かどうか
$ch_dir = dir($dir_path); //ディレクトリクラス
//ディレクトリ内の画像を一覧表示
while (false !== ($file_name = $ch_dir -> read()))
{
$ln_path = $ch_dir -> path . "/" .$file_name;
if (@getimagesize($ln_path))
{ //画像かどうか？
echo "<figure><div class=\"is-four-fifths box\"><a href = \"" .$ln_path."\" target = \"_blank\">";
echo "<br /><img class=\"image_mouseover_1 zoom_normal\" src = \"" .$ln_path. "\" loading=\"lazy\" width=\"350px\"> </a><br>";
echo "<figcaption><a class=\"is-size-15\" href = \"" .$ln_path."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></figcaption><hr></div></figure>";
}
}
$ch_dir -> close();
}
else
{
echo "<p>" .htmlspecialchars($dir_path)."　は読み込みが許可されていません。";
}
}
else
{
echo '画像がないよ';
}
?>
<div style="text-align:center">
                        <div class="hidden_box">
                            <label for="label1" class="button is-medium is-fullwidth is-success is-outlined is-rounded">クリックして表示・非表示</label>
                            <br />
                            <input type="checkbox" id="label1"/>
                            <div class="hidden_show">
                                <br />
</body>