<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title lang="ja">画像アップロード - RSソース</title>
<!--#include virtual="/assets/html/hedder.html" -->
  </head>

 <body>
 <div id="body">
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
    <div id="body" class="content">
    <hr>
    <div class="title">
    <div id="body">
<div class="box column">
<div style="text-align:center">
  <h2>ファイルのプレビュー</h2>
  <hr>
</div>
  <h1>ここにプレビューが表示されます。</h1>
    <img id="preview" width="200px">
</p>
  </figure>

  </div>

  

</div>
    </div>
    <div id="body">
    <br />  
    <hr>
      <br />
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
  <br />
  <hr>
  <div id="body">
  <div class="column">
  <div class="box">
                        <div class="hidden_box">
                            <label for="label2" class="button is-large is-fullwidth">画像一覧</label>
                            <br />
                            <input type="checkbox" id="label2"/>
                            <div class="hidden_show">
                                <br />
                                <div style="text-align:center">
<div style="text-align:center">
  </div>
  <iframe src="  https://media-ryouma.sytes.net/upload/frame/list.php" width="100%" height="500%" loading="lazy"></iframe>
    </body>
    </html>
