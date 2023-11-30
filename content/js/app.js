
//Khi người dùng cuộn chuột thì gọi hàm scrollFunction
window.onscroll = function () { scrollFunction() };
// khai báo hàm scrollFunction
function scrollFunction() {
    // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
    if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) {
        //nếu lớn hơn 2000px thì hiện button
        document.querySelector(".lendau").style.display = "block";
    } else {
        //nếu nhỏ hơn 20px thì ẩn button
        document.querySelector(".lendau").style.display = "none";
    }
}
//gán sự kiện click cho button
document.querySelector('.lendau').addEventListener("click", function () {
    //Nếu button được click thì nhảy về đầu trang
    window.scrollTo({
        top: 0,
        behavior: `smooth`
    })
});

let showmonchinh = document.querySelector('#monchinh');
let showmontrangmieng = document.querySelector('#montrangmieng');
let showdouong = document.querySelector('#douong');
let monchinh = document.querySelector('.monchinh');
let montrangmieng = document.querySelector('.montrangmieng');
let douong = document.querySelector('.douong');

showmonchinh.addEventListener('click',function(){
    showmontrangmieng.classList.remove('showmenu');
    showdouong.classList.remove('showmenu');
    showmonchinh.classList.add('showmenu');
    montrangmieng.style.display="none";
    douong.style.display="none";
    monchinh.style.display="flex";
});
showmontrangmieng.addEventListener('click',function(){
    showmonchinh.classList.remove('showmenu');
    showdouong.classList.remove('showmenu');
    showmontrangmieng.classList.add('showmenu');
    douong.style.display="none";
    monchinh.style.display="none";
    montrangmieng.style.display="flex";
});
showdouong.addEventListener('click',function(){
    showmonchinh.classList.remove('showmenu');
    showmontrangmieng.classList.remove('showmenu');
    showdouong.classList.add('showmenu');
    monchinh.style.display="none";
    montrangmieng.style.display="none";
    douong.style.display="flex";
});

