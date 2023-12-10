
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



// (function () {
// 	"use strict";

// 	var treeviewMenu = $('.app-menu');

// 	// Toggle Sidebar
// 	$('[data-toggle="sidebar"]').click(function(event) {
// 		event.preventDefault();
// 		$('.app').toggleClass('sidenav-toggled');
// 	});

// 	// Activate sidebar treeview toggle
// 	$("[data-toggle='treeview']").click(function(event) {
// 		event.preventDefault();
// 		if(!$(this).parent().hasClass('is-expanded')) {
// 			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
// 		}
// 		$(this).parent().toggleClass('is-expanded');
// 	});

// 	// Set initial active toggle
// 	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

// 	//Activate bootstrip tooltips
// 	// $("[data-toggle='tooltip']").tooltip();

	

// })();

// Đoạn mã JavaScript để xử lý sự kiện khi ấn vào icon 3 gạch
document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector('.navbar');
    var sidebarToggle = document.querySelector('[data-toggle="sidebar"]');
    
    sidebarToggle.addEventListener('click', function () {
            navbar.classList.toggle('sidenav-toggled');
        });
   
    
});


