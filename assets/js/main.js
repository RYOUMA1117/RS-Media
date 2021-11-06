$(function(){
  $("[name='image']").on('change', function (e) {
    
    var reader = new FileReader();
    
    reader.onload = function (e) {
        $("#preview").attr('src', e.target.result);
    }
 
    reader.readAsDataURL(e.target.files[0]);   
 
  });
});
$(window).on('load',function(){
  $("#loading-wrapper").addClass("completed")
});
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
function CountdownTimer(elm, tl, mes) {
  this.initialize.apply(this, arguments);
  }
  CountdownTimer.prototype = {
  initialize: function (elm, tl, mes) {
  this.elem = document.getElementById(elm);
  this.tl = tl;
  this.mes = mes;
  }, countDown: function () {
  var timer = '';
  var today = new Date();
  var day = Math.floor((this.tl - today) / (24 * 60 * 60 * 1000));
  var hour = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
  var min = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 1000)) % 60;
  var sec = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / 1000) % 60 % 60;
  var milli = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / 10) % 100;
  var me = this;
  
  if ((this.tl - today) > 0) {
  if (day)
  timer += '' + day + '日';
  if (hour)
  timer += '' + hour + '時間';
  timer += '' + this.addZero(min) + '分' +
      this.addZero(sec) + '秒';
  this.elem.innerHTML = timer;
  tid = setTimeout(function () {
  me.countDown();
  }, 10);
  } else {
  this.elem.innerHTML = this.mes;
  return;
  }
  }, addZero: function (num) {
  return ('0' + num).slice(-2);
  }
  }
  function CDT() {
  var tl = new Date('5');// ここで日付を指定
  var timer = new CountdownTimer('CDT', tl, '終了しました');
  timer.countDown();
  }
  
  
  function CDT01() {
  var tl = new Date('2020/5/29 09:59:00');// ここで日付を指定
  var timer = new CountdownTimer('CDT01', tl, '終了しました');
  timer.countDown();
  }
  window.onload = function () {
  CDT();
  CDT01();
  }
  document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
      const $notification = $delete.parentNode;
  
      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
      });
    });
  });
      // cookieの値を読み書きする要素
      var input1 = document.getElementById("input1");

      // 書き込み
      function writeCookie() {
        var cookieValue = input1.value;
        document.cookie = "mycookie=" + cookieValue;
        console.log(document.cookie);
      }
  
      // 読み込み
      function readCookie() {
        var tmp = document.cookie;
        var cookieValue = document.cookie.replace(/(?:(?:^|.*;s*)mycookies*=s*([^;]*).*$)|^.*$/, "$1");
        input1.value = cookieValue;
        console.log(document.cookie);
      }
  
      // 削除
      function deleteCookie() {
        document.cookie = "mycookie=; expires=0";
        console.log(document.cookie);
      }
      $(document).ready(function() {

        // Check for click events on the navbar burger icon
        $(".navbar-burger").click(function() {
      
            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            $(".navbar-burger").toggleClass("is-active sticky_none");
            $(".navbar-menu").toggleClass("is-active sticky_none");
            $(".sticky").toggleClass("sticky_none");
        });
      });
      new Luminous(document.querySelector(".zoom_normal"));
new Luminous(document.querySelector(".zoom_cap"), {
  caption: (elem) => {
    return elem.children[0].getAttribute("alt");
  }
});
new Luminous(document.querySelector(".zoom_div"), {
  sourceAttribute: "data-zoom",
});
new LuminousGallery(document.querySelectorAll(".zoom_list"));