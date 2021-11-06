<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title lang="ja">画像アップロード - RSソース</title>
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
  </head>

 <body>
 <div style="text-align:center">
 <div class="column">
 <div class="title">
    <h1>アップロード</h1>
</div>
<div class="box">
    <div class="column">
	<form action="image_post.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" class="button is-large is-fullwidth" required> <br />
        <div class="column">
        <input type="submit" class="button is-medium is-fullwidth is-success is-outlined is-rounded" value="アップロード">

</div>
    </div>
    </div>
    </div>

</div>
    </div>
    </div>
    </div>
<div class="subtitle">
<div style="text-align:center">
  <h2>ファイルのプレビュー</h2>
  <div class="column">
  <div class="box">
  <div style="text-align:center">
    <img id="preview" width="200px">
</p>
  </figure>

  </div>

  

    
    </div>
    <div class="box">
    <div style="text-align:center">
    <br /><div class="column"><p>まだアップロードは完了していません。<input type="submit" value="アップロード" class="button is-medium is-success is-outlined is-rounded aria-haspopup="true"> ボタンを押す必要があります。</p>
<br>
</input>
</form>

<label for="trigger" class="open_btn">注意事項</label>
<div class="modal" for="trigger">
  <div class="modal-background"></div>
  <label for="trigger" class="popup_trigger"></label>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">注意事項</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
    <li>
      ファイルをアップロードすることにより、ファイルはCC BY-SA 4.0 で配布されること。
</li>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">了解</button>
    </footer>
  </div>
</div>
  </div>
  </div>
  </div>
  </div>
  </div>
    </body>
    </html>
