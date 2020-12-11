//assets/js/script.js
// do trang web da tich hop jquery nen dung cu phap cua jquery
$(document).ready(function () {
   // goi su kien click khi clich nut them vao gio hang
    // Ctrl + Shift + R : de xoa cache trinh duyet (vi co the trinh duyet luu code cu)
   $('.add-to-cart').click(function () {
       // alert("click");
       event.preventDefault();
       // lay id san pham cua chinh doi tuong vua click
       var id= $(this).attr('data-id');
       alert(id);
       // goi ajax de nho php xu ly them vao gio hang.
       $.ajax({
           url: 'index.php?controller=cart&action=add',
           // metho truyen du lieu
           method: 'GET',
           // du lieu gui le
           data: {
               id: id
           },
           // noi nhan ket qua tra ve sau khi php xu ly xong ajax
           success: function (data) {
               // console.log(data);
               // hien thi t.bao them vaao gio hang thanh cong.
               $('.ajax-message').html('them sn pham t.com');
               // them class de show ra message
               $('.ajax-message').addClass('ajax-message-active');
               // show message trong 5S, sau do tu off di
               setTimeout(function () {
                   $('.ajax-message').removeClass('ajax-message-active');
               }, 3000);
               // tang so luong s.pham trong gio len 1
               var amount = $('.cart-amount').text();
               // cat bo khoang trang 2 dau.
               amount = amount.trim();
               // tang len 1
               amount++;
               // gan lai gia tri da tang cho 1 so lluong ban dau
               $()
           }
       });

   })
});