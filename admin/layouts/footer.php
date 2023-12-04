    </main>
    <footer class="footer text-center text-muted">&copy; - Hostel Management System - Developed by <a href="">Coder Tôn Long Tiến</a></footer>

    <!--===============================================================================================-->
    <script type="text/javascript">
      let data = {
        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
        datasets: [{
            label: "Dữ liệu đầu tiên",
            fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
            strokeColor: "rgb(255, 212, 59)",
            pointColor: "rgb(255, 212, 59)",
            pointStrokeColor: "rgb(255, 212, 59)",
            pointHighlightFill: "rgb(255, 212, 59)",
            pointHighlightStroke: "rgb(255, 212, 59)",
            data: [20, 59, 90, 51, 56, 100]
          },
          {
            label: "Dữ liệu kế tiếp",
            fillColor: "rgba(9, 109, 239, 0.651)  ",
            pointColor: "rgb(9, 109, 239)",
            strokeColor: "rgb(9, 109, 239)",
            pointStrokeColor: "rgb(9, 109, 239)",
            pointHighlightFill: "rgb(9, 109, 239)",
            pointHighlightStroke: "rgb(9, 109, 239)",
            data: [48, 48, 49, 39, 86, 10]
          }
        ]
      };
      // let ctxl = $("#lineChartDemo").get(0).getContext("2d");
      // let lineChart = new Chart(ctxl).Line(data);

      // let ctxb = $("#barChartDemo").get(0).getContext("2d");
      // let barChart = new Chart(ctxb).Bar(data);
    </script>
    <script type="text/javascript">
      //Thời Gian
      function time() {
        let today = new Date();
        let weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        let day = weekday[today.getDay()];
        let dd = today.getDate();
        let mm = today.getMonth() + 1;
        let yyyy = today.getFullYear();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
          dd = '0' + dd
        }
        if (mm < 10) {
          mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
          '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
          if (i < 10) {
            i = "0" + i;
          }
          return i;
        }
      }
    </script>
    <!-- <script type="text/javascript">
      let showmenu = document.querySelector('.app-sidebar__toggle');
      let menu = document.querySelector('.app-sidebar');
      let close = document.querySelector('.close-menu');
      showmenu.addEventListener('click', function() {
        if(menu.style.left=" -250px"){
          menu.style.left=' 0px';
          close.style.right=' 0px';
        } 
      });
      close.addEventListener('click',function(){
        menu.style.left="";
        close.style.right='';
      });
    </script> -->
    <!-- liên kết thư viện js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- <script src="/admin/content-admin/js/bootstrap.min.js"></script> -->
    <script src="/admin/content-admin/js/jquery-3.2.1.min.js"></script>
    <script src="/admin/content-admin/js/main.js"></script>
    <script src="/admin/content-admin/js/popper.min.js"></script>
    <script src="/admin/content-admin/js/plugins/bootstrap-datepicker.min.js"></script>
    <script src="/admin/content-admin/js/plugins/bootstrap-notify.min.js"></script>
    <script src="/admin/content-admin/js/plugins/chart.js"></script>
    <!-- <script src="/admin/content-admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script src="/admin/content-admin/js/plugins/fullcalendar.min.js"></script> -->
    <script src="/admin/content-admin/js/plugins/jquery-ui.custom.min.js"></script>
    <script src="/admin/content-admin/js/plugins/jquery.dataTables.min.js"></script>
    <script src="/admin/content-admin/js/plugins/jquery.vmap.min.js"></script>
    <script src="/admin/content-admin/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="/admin/content-admin/js/plugins/jquery.vmap.world.js"></script>
    <script src="/admin/content-admin/js/plugins/moment.min.js"></script>
    <script src="/admin/content-admin/js/plugins/pace.min.js"></script>
    <script src="/admin/content-admin/js/plugins/select2.min.js"></script>
    <script src="/admin/content-admin/js/plugins/sweetalert.min.js"></script>



    </body>

    </html>