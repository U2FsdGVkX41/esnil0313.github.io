---
layout: default
published: true
title: Chasing the faux.
---
{% include open-embed.html %}

<div id="horizontal-waterfull"></div>
  
<div id="myModal" class="modal">
  <!--<span class="close">×</span>-->
  <img class="modal-content img-responsive-height center-block" id="modal-image" style="width: auto; max-width:150%"/>
  <div id="caption" style="font-weight: 600"></div>
</div>

<script>

function openModal(obj) {
    document.getElementById('myModal').style.display = 'block';
    var imgsrc = obj.getAttribute('src');
    var imgalt = obj.getAttribute('alt');
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById("modal-image");
    var captionText = document.getElementById("caption");
    modalImg.src = imgsrc;
    modalImg.alt =　imgalt;
    captionText.innerHTML = imgalt;
    modal.onclick = function(){
    modal.style.display = "none";
    }
}
</script>

<script src="./imageLayout.js"></script>
<script>
const images = [
{
  src: './image/1.jpg',
  alt: '国立新美術館｜東京',
  width: 667,
  height: 1000
}, 
{
  src: './image/2.jpg',
  alt: '美らSUNビーチ｜豊見城',
  width: 1462,
  height: 540
}, 
{
  src: './image/6.jpg',
  alt: '品川駅｜東京',
  width: 1462,
  height: 540
},  
{
  src: './image/3.jpg',
  alt: '品川シーズンテラス｜東京',
  width: 1000,
  height: 656  
},
{
  src: './image/4.jpg',
  alt: '高輪橋架道橋下区道｜東京',
  width: 667,
  height: 1000
},   
{
  src: './image/5.jpg',
  alt: '首都圏外郭放水路｜春日部',
  width: 1463,
  height: 540
},  
{
  src: './image/2019-11-04-013038.jpg',
  alt: '六本木ヒルズ｜東京',
  width: 480,
  height: 270
},
{
  src: './image/2019-11-04-033403.jpg',
  alt: '六本木ヒルズ｜東京',
  width: 480,
  height: 270
},
{
  src: './image/2019-11-04-195519.jpg',
  alt: '六本木ヒルズ｜東京',
  width: 480,
  height: 270
},
{
  src: './image/2019-10-29-014202.jpg',
  alt: '六本木ヒルズ｜東京',
  width: 480,
  height: 270
}]
const $box = document.getElementById('horizontal-waterfull')
const layout = new ImagesLayout(images, $box.clientWidth, 2)
layout.completedImages.forEach(item => {
  let $imageBox = document.createElement('div')
  $imageBox.setAttribute('class', 'image-box')
  $imageBox.style.width = item.width + 'px'
  $imageBox.style.height = item.height + 'px'
  let $imagecell = document.createElement('a')
  let $image = document.createElement('img')
  $image.setAttribute('onclick', 'openModal(this)')
  $image.setAttribute('src', item.src)
  $image.setAttribute('alt', item.alt)
  $imagecell.appendChild($image)
  $imageBox.appendChild($imagecell)
  $box.appendChild($imageBox)
})
var resizeTimer = null;
$(window).bind('resize', function () {
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
        const $box = document.getElementById('horizontal-waterfull');
        document.getElementById('horizontal-waterfull').innerHTML = "";
        const layout = new ImagesLayout(images, $box.clientWidth, 2);
        layout.completedImages.forEach(item => {
          let $imageBox = document.createElement('div')
          $imageBox.setAttribute('class', 'image-box')
          $imageBox.style.width = item.width + 'px'
          $imageBox.style.height = item.height + 'px'
          let $imagecell = document.createElement('a')
          let $image = document.createElement('img')
          $image.setAttribute('onclick', 'openModal(this)')
          $image.setAttribute('src', item.src)
          $image.setAttribute('alt', item.alt)
          $imagecell.appendChild($image)
          $imageBox.appendChild($imagecell)
          $box.appendChild($imageBox)
        });
    }, 300);
}); 
</script>
