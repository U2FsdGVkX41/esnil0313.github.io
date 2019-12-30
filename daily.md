---
layout: default
published: true
title: Daily
order: 1
---
<body>
<div id="horizontal-waterfull-box">  
<div id="horizontal-waterfull"></div>
</div>  

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
}]
const $box = document.getElementById('horizontal-waterfull')
const layout = new ImagesLayout(images, $box.clientWidth, 2)
layout.completedImages.forEach(item => {
  let $imageBox = document.createElement('div')
  $imageBox.setAttribute('class', 'image-box')
  $imageBox.style.width = item.width + 'px'
  $imageBox.style.height = item.height + 'px'
  let $imagecell = document.createElement('a')
  $imagecell.setAttribute('href', item.src)
  let $image = document.createElement('img')
  $image.setAttribute('src', item.src)
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
          $imagecell.setAttribute('href', item.src)
          let $image = document.createElement('img')
          $image.setAttribute('src', item.src)
          $imagecell.appendChild($image)
          $imageBox.appendChild($imagecell)
          $box.appendChild($imageBox)
        });
    }, 300);
});  
</script>
</body>
