---
layout: default
published: true
title: Chasing the faux.
---
{% include open-embed.html %}

<div id="horizontal-waterfull"></div>
  
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>

function openModal() {/*打开模态框*/
    document.getElementById('myModal').style.display = "block";
}

var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<script src="./imageLayout.js"></script>
<script>
const images = [
{
  src: './image/1.jpg',
  width: 667,
  height: 1000
}, 
{
  src: './image/2.jpg',
  width: 1462,
  height: 540
}, 
{
  src: './image/6.jpg',
  width: 1462,
  height: 540
},  
{
  src: './image/3.jpg',
  width: 1000,
  height: 656  
},
{
  src: './image/4.jpg',
  width: 667,
  height: 1000
},   
{
  src: './image/5.jpg',
  width: 1463,
  height: 540
},  
{
  src: './image/2019-11-04-013038.jpg',
  width: 480,
  height: 270
},
{
  src: './image/2019-11-04-033403.jpg',
  width: 480,
  height: 270
},
{
  src: './image/2019-11-04-195519.jpg',
  width: 480,
  height: 270
},
{
  src: './image/2019-10-29-014202.jpg',
  width: 480,
  height: 270
}]
const $box = document.getElementById('horizontal-waterfull')
const layout = new ImagesLayout(images, $box.clientWidth, 2)
layout.completedImages.forEach(item => {
  let $imageBox = document.createElement('div')
  $imageBox.setAttribute('class', 'image-box')
  $imageBox.setAttribute('onclick', 'openModal()')
  $imageBox.style.width = item.width + 'px'
  $imageBox.style.height = item.height + 'px'
  let $imgmodal = document.createElement('div')
  $imgmodal.setAttribute('class', 'modal hide')
  let $modaltext=document.createTextNode("test");
  $imgmodal.appendChild($modaltext)  
  let $imagecell = document.createElement('a')
  //$imagecell.setAttribute('href', item.src)
  let $image = document.createElement('img')
  $image.setAttribute('src', item.src)
  $imagecell.appendChild($image)
  $imageBox.appendChild($imagecell)
  $imageBox.appendChild($imgmodal)
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
          $imageBox.setAttribute('onclick', 'openModal()')
          $imageBox.style.width = item.width + 'px'
          $imageBox.style.height = item.height + 'px'
          let $imgmodal = document.createElement('div')
          $imgmodal.setAttribute('class', 'modal hide')
          let $modaltext=document.createTextNode("test");
          $imgmodal.appendChild($modaltext)
          let $imagecell = document.createElement('a')
          //$imagecell.setAttribute('href', item.src)
          let $image = document.createElement('img')
          $image.setAttribute('src', item.src)
          $imagecell.appendChild($image)
          $imageBox.appendChild($imagecell)
          $imageBox.appendChild($imgmodal)
          $box.appendChild($imageBox)
        });
    }, 300);
}); 
$(document).ready(function () {
      $("div.image-box").on("click", function () {
          console.log("clicked");
          $(this).next().removeClass("hide");
      });
});
</script>
