---
layout: default
published: true
title: Chasing the faux.
---
{% include bgm.html %}

<div id="horizontal-waterfull"></div>
  
<div id="myModal" class="modal">
  <!--<span class="close">×</span>-->
  <img class="modal-content img-responsive-height center-block" id="modal-image" style="width: auto;vertical-align:middle;display:inline-block;background-color: rgb(0,0,0);"/>
  <!--<div id="caption" style="font-weight: 600"></div>-->
</div>

<script src="./jquery-2.2.4.js"></script>
<script src="./imageLayout.js"></script>
<script>
  const images = [
{
  src: './image/1.jpg',
  tag: 'daily',
  width: 667,
  height: 1000
}, 
{
  src: './image/2.jpg',
  tag: 'daily',
  width: 1462,
  height: 540
}, 
{
  src: './image/6.jpg',
  tag: 'daily',
  width: 1462,
  height: 540
},  
{
  src: './image/3.jpg',
  tag: 'daily',
  width: 1000,
  height: 656  
},
{
  src: './image/DSC3841_.jpg',
  tag: 'daily',
  width: 1620,
  height: 1080
},  
{
  src: './image/5.jpg',
  tag: 'daily',
  width: 1463,
  height: 540
},  
{
  src: './image/P1020239.jpg',
  tag: 'daily',
  width: 2560,
  height: 946
},
{
  src: './image/4.jpg',
  tag: 'daily',
  width: 667,
  height: 1000
}, 
{
  src: './image/2019-11-04-013038.jpg',
  tag: 'event',
  width: 960,
  height: 540
},
{
  src: './image/2019-11-04-033403.jpg',
  tag: 'event',
  width: 960,
  height: 540
},
{
  src: './image/2019-11-04-195519.jpg',
  tag: 'event',
  width: 960,
  height: 540
},
{
  src: './image/2019-10-29-014202.jpg',
  tag: 'event',
  width: 960,
  height: 540
}];
</script>

<script>
function openModal(obj) {
    document.getElementById('myModal').style.display = 'flex';
    var imgsrc = obj.getAttribute('src');
    //var imgalt = obj.getAttribute('alt');
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById("modal-image");
    //var captionText = document.getElementById("caption");
    modalImg.src = imgsrc;
    //modalImg.alt =　imgalt;
    //captionText.innerHTML = imgalt;
    modal.onclick = function(){
    modal.style.display = "none";
    }
}
  
function printLayout(index){
    if(index==3){
        $box = document.getElementById('horizontal-waterfull');
        $box.innerHTML = "";   
        $("#horizontal-waterfull").load("blog.html");
    }else{
        const tag = ['', 'daily', 'event'];
        $box = document.getElementById('horizontal-waterfull');
        $box.innerHTML = "";
        const layout = new ImagesLayout(images, tag[index], $box.clientWidth, 2);
        layout.completedImages.forEach(item => {
        let $imageBox = document.createElement('div')
        $imageBox.setAttribute('class', 'image-box')
        $imageBox.style.width = item.width + 'px'
        $imageBox.style.height = item.height + 'px'
        let $imagecell = document.createElement('a')
        let $image = document.createElement('img')
        $image.setAttribute('onclick', 'openModal(this)')
        $image.setAttribute('src', item.src)
        $image.onload = function () {
               this.style.animationName = 'fadein'
               this.style.animationDuration = '0.6s'
        }
        $imagecell.appendChild($image)
        $imageBox.appendChild($imagecell)
        $box.appendChild($imageBox)
        });
    }
}
  
function printContent(index) {
if(index == 0){
    document.getElementById('page-all').style.color   = "rgba(255,255,255,1.0)";
    document.getElementById('page-daily').style.color = "rgba(255,255,255,0.5)";
    document.getElementById('page-event').style.color = "rgba(255,255,255,0.5)";
    document.getElementById('page-blog').style.color  = "rgba(255,255,255,0.5)";
    printLayout(index);
    
    var resizeTimer = null;
    $(window).bind('resize', function () {
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout(printLayout(index), 300);
    }); 
  }
  else if(index==1){
    document.getElementById('page-all').style.color   = "rgba(255,255,255,0.5)";
    document.getElementById('page-daily').style.color = "rgba(255,255,255,1.0)";
    document.getElementById('page-event').style.color = "rgba(255,255,255,0.5)";
    document.getElementById('page-blog').style.color  = "rgba(255,255,255,0.5)";
    printLayout(index);
    
    var resizeTimer = null;
    $(window).bind('resize', function () {
    if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(printLayout(index), 300);
    });     
  }
  else if(index==2){
    document.getElementById('page-all').style.color   = "rgba(255,255,255,0.5)";
    document.getElementById('page-daily').style.color = "rgba(255,255,255,0.5)";
    document.getElementById('page-event').style.color = "rgba(255,255,255,1.0)";
    document.getElementById('page-blog').style.color  = "rgba(255,255,255,0.5)"; 
    printLayout(index);
    
    var resizeTimer = null;
    $(window).bind('resize', function () {
    if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(printLayout(index), 300);
    });       
  }
  else{
    document.getElementById('page-all').style.color   = "rgba(255,255,255,0.5)";
    document.getElementById('page-daily').style.color = "rgba(255,255,255,0.5)";
    document.getElementById('page-event').style.color = "rgba(255,255,255,0.5)";
    document.getElementById('page-blog').style.color  = "rgba(255,255,255,1.0)";
    printLayout(index);
    $(window).bind('resize', function () {
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout(printLayout(index), 300);
    });  
  }
}

function printBlog(pageUrl){
    $box = document.getElementById('horizontal-waterfull');
    $box.innerHTML = ""; 
    $("#horizontal-waterfull").load("pageUrl");
}

function openBlog(item){
    console.log("item:" + item);
    var pageUrl = item.getAttribute('data-url');
    console.log("pageUrl" + pageUrl);
    printBlog(pageUrl);
    $(window).bind('resize', function () {
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout(printBlog(pageUrl), 300);
    });      
}
printContent(0);
</script>
