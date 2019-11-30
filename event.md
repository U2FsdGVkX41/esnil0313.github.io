---
layout: default
published: true
title: event
order: 2
---
<body>
<div id="horizontal-waterfull-box">  
<div id="horizontal-waterfull"></div>
</div>  

<script src="./imageLayout.js"></script>
<script>
const images = [ 
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
  $imageBox.style.width = item.width + 'px'
  $imageBox.style.height = item.height + 'px'
  let $image = document.createElement('img')
  $image.setAttribute('src', item.src)
  $imageBox.appendChild($image)
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
          let $image = document.createElement('img')
          $image.setAttribute('src', item.src)
          $imageBox.appendChild($image)
          $box.appendChild($imageBox)
        });
    }, 300);
});  
</script>
</body>
