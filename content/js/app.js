// window.onload = function (){
// let lendau = document.querySelector('.lendau');
// lendau.addEventListener('click',function(){
//     window.scrollTo(0,0);
// });
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
// }