<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title lang="ja">画像アップロード一覧 - RSソース</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7768523920396309"
     crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://media-ryouma.sytes.net/upload/index.js"></script> 
  <link rel="stylesheet" href="https://media-ryouma.sytes.net/upload/index.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="color-scheme" content="light dark" />
  <div id="loading-wrapper">
    <progress class="progress is-large is-info" max="100">60%</progress><br>
    <p color="black">読み込み中...</p>
  </div></div>
  <style type="text/css" media="screen">
    .box2{
        width:200px;
        height:auto;
        margin:0;
        text-align:center;
    }
</style>
<script>
		window.addEventListener('load', function(){
			
			// フルスクリーン表示
			document.getElementById('button1').addEventListener('click', function(){
				document.body.requestFullscreen();				
			});

			// フルスクリーン解除
			document.getElementById('button2').addEventListener('click', function(){
				document.exitFullscreen();
			});
		});
	</script>
<div class="sticky">
<div style="text-align:center">
<div class="title">
<div class="box">
  <div class="column">
    <a href="https://media-ryouma.sytes.net/upload/img/" target="_parent"><h1>アップロードされた画像ファイルの一覧</h1></a><br><button id="button1" class="button is-link is-outlined">全画面</button>  <button id="button2" class="button is-link is-outlined">解除</button>
</div>
</div>
</div>
</div>
  </div>
<div style="text-align:center">
<div class="column">
<div class="box">
  <table class="table">
                                
<?php
//ディレクトリ名
$dir_path = "../img/files";
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
echo "<div style=\"text-align:center\"><a href = \"" .$ln_path."\" target = \"_blank\">";
echo "<img class=\"sample\" class=\"image_mouseover_1\" src = \"" .$ln_path. "\" loading=\"lazy\" width=\"400px\"></a><br><br>";
echo "<a href = \"" .$ln_path."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></div><br>";
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
                            <label for="label1">クリックして表示・非表示</label>
                            <br />
                            <input type="checkbox" id="label1"/>
                            <div class="hidden_show">
                                <br />
</body>