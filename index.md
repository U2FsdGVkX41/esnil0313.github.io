---
layout: default
published: true
title: All
---
<body>
<div id="horizontal-waterfull"></div>

<script src="./imageLayout.js"></script>
<script>
const images = [{
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}]
const $box = document.getElementById('horizontal-waterfull')
const layout = new ImagesLayout(images, $box.clientWidth, 3)
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
addEvent(window, 'resize', delayedResize);
  var delayedResize = function() {
    clearTimeout(resizeDelay);
    resizeDelay = setTimeout(reflowCells, 500);
  };  
var reflowCells = function() {
  const images = [{
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/girl.jpg',
  width: 5616,
  height: 3266
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}, {
  src: 'https://static.cxstore.top/images/flower.jpg',
  width: 4864,
  height: 3648
}, {
  src: 'https://static.cxstore.top/images/lake.jpg',
  width: 4000,
  height: 6000
}, {
  src: 'https://static.cxstore.top/images/japan.jpg',
  width: 1500,
  height: 1125
}, {
  src: 'https://static.cxstore.top/images/grass.jpg',
  width: 5184,
  height: 2916
}]
const $box = document.getElementById('horizontal-waterfull')
const layout = new ImagesLayout(images, $box.clientWidth, 3)
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
}
</script>
</body>
