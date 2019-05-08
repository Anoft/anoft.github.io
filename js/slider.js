window.onload = function() {
  var images = new Array();
  var i = 0;

  //images[0] = '/images/v4.png';
  //images[1] = '/images/v5.png';
  //images[2] = '/images/v3.png';
  
  //images[0] = '/images/OfflinePic001.png';
  //images[1] = '/images/OfflinePic002.png';
  //images[2] = '/images/OfflinePic003.png';
  //images[3] = '/images/OfflinePic004.png';
  //images[4] = '/images/OfflinePic005.png';
  
    images[0] = '/images/OfflinePic0.jpg';
    images[1] = '/images/OfflinePic1.jpg';
    images[2] = '/images/OfflinePic2.jpg';
    images[3] = '/images/OfflinePic3.jpg';
    images[4] = '/images/OfflinePic4.jpg';
    images[5] = '/images/OfflinePic5.jpg';
    images[6] = '/images/OfflinePic6.jpg';
    images[7] = '/images/OfflinePic7.jpg';


  var divTop = $('topImg');
  var divBottom = $('botImg');
  var timer = setInterval(viewImages, 5000);

  var block = 0;
   divTop.onclick = function() {
    if(block == 0){
      clearInterval(timer);
      viewImages();
      timer = setInterval(viewImages, 5000);
      block = 1;
      setTimeout(function() {
        block = 0;
      }, 500)
    }
  }

  function viewImages() {
      divTop.style.backgroundImage = 'url(' + images[i] + ')';
      divTop.style.opacity = 1;
      i++;
      if (i == images.length) {
          i = 0;
      }
      divBottom.style.backgroundImage = 'url(' + images[i] + ')';
      setTimeout(function () {
        dissovle(divTop, 1000, 16);
      }, 0);
  }

  function dissovle(id, time, fps) {
    var elem = id;
    var opacity = 1;
    var step = opacity / (time/ (1000 / fps));

    var timer = setInterval(function() {
      opacity -= step;
      elem.style.opacity = opacity;

      if (opacity <= 0)
        clearInterval(timer);
    }, fps);
  }

  function $(id) {
    return document.getElementById(id);
  }
}