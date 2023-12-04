// view1

function showimg(id) {
  const  im =document.getElementById(0);
  const  im1 =document.getElementById(id);
  const previews = document.querySelectorAll(".room-preview img");
 const im2= im1.getAttribute('src');
  im.setAttribute('src',im2);
  previews.forEach(preview => preview.classList.remove("room-active"));
  im1.classList.add("room-active");
}


 //view2

 function showimg(id) {
  const  im =document.getElementById(0);
  const  im1 =document.getElementById(id);
  const previews1 = document.querySelectorAll(".room1-preview1 img");
 const im2= im1.getAttribute('src');
  im.setAttribute('src',im2);
  previews1.forEach(preview1 => preview1.classList.remove("room1-active1"));
  im1.classList.add("room1-active1");
}

//view3

function showimg(id) {
  const  im =document.getElementById(0);
  const  im1 =document.getElementById(id);
  const previews2 = document.querySelectorAll(".room2-preview2 img");
 const im2= im1.getAttribute('src');
  im.setAttribute('src',im2);
  previews2.forEach(preview2 => preview2.classList.remove("room2-active2"));
  im1.classList.add("room2-active2");
}

//view4

function showimg(id) {
  const  im =document.getElementById(0);
  const  im1 =document.getElementById(id);
  const previews3 = document.querySelectorAll(".room3-preview3 img");
 const im2= im1.getAttribute('src');
  im.setAttribute('src',im2);
  previews3.forEach(preview3 => preview3.classList.remove("room3-active3"));
  im1.classList.add("room3-active3");
}
