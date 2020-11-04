<?php
/**
 * Các bước chính dựng website
 * 1 - Chuẩn bị được giao diện tĩnh (HTML/CSS/JS) hoàn chỉnh
 * cho tất cả các trang
 * Frontend:
 * Backend:
 * - có thể tìm các template free trên mạng cho
 * cả frontend và backend
 * 2 - Phân tích CSDL từ giao diện đã chuẩn bị
 * - Phan tich tung trang html, di tu tren xuong duoi xem cac vung hien thi co can save trong csdl ko.
 * - Voi cac du lieu it phai thay doi thi ko can luu vao csdl
 * - table menus: dùng để lưu t.tin của menu.
 * id: INT(11) AUTO_INCREEMENT,
 * name: ten link, varchar (100)
 * link: url cua link để khi click vào menu sẽ href vào link đó
 * parent_id: id của link cha dùng cho menu đa cấp, int (11)
 * status: 0 - 1: show - hide menu
 * created_at: ngay tao, timestamp, current_timestamp
 * updated_at: ngay cap nhat cuoi cung_ tu them thu cong
 *
 *
 * ------------- tables: sản phẩm mới nhất: tables product.
 * + id, status, created_at, update_at.
 * + avatar: ten file anh: varchar(100)
 * + price: int(11)
 * + price_discount : int(11) -- giá sale.
 * + description: mô tả detail sp. _ text.
 * + title: tên sp: varchar(150)
 * + category_id: khoá ngoại, liên kết vs table categories, thể hiện mối quan hệ: 1 sp chỉ thuộc 1 danh mục nào đó
 * + sumary: mô tả ngắn: text
 * + amount: số sp trong kho, int (11)
 * + seo_title: tiêu đề cho sp, varchar(255)
 * + seo_description: seo cho phần mô tả, varchar(255)
 * + seo_keyword: seo cho từ khoán varchar (255)
 *
 * ------------------table: categories: chứa t.tin danh mục
 * + name: tên danh mục, varchar(100)
 * + avaatar: ten file anh varchar (100)
 * + type: phân loại categories: 1 - SP, 2- News : tinyint(1)
 * + description: mo tả danh mục, text
 * ----------------- table: News: lưu t.tin về tin tức.
 * + id, status, created_at, update_at
 * + category_id: id của danh mục, int (11)
 * + title:tên news, varchar(11)
 * + content: chi tiết tin - text.
 * + avatar: ten file ảnh, varchar (100);
 * + seo_title, seo_description, ....
 * ----------------- tables: contacts: t.tin liên hệ:
 * + id, statusk created_at: upate,_at
 * + fullnamme: ten nguoiwf liên hệ,varchar: vd:phone,addr ....
 * + phone,
 *
 * ------------------------- tables: user.
 * ++ dụng use toan hệ thoongsl
 * + id, status, created+at, upated_at
 * password, username, phone, email
 * roleid_ khoá ngoại, liên kết roles table
 *
 * ----- tables: Order- lưu t.tin đơn hàng
 * id
 * payment_status: 0: chưa t.toan, 1: đã t.toán, 2: đã trả góp, 3: đang giao ... tinyint(1)
 * fullname: tên người mua hàng.
 * address: địa chỉ người mua , mobile, email, note,
 * price_total: tổng giá trị đơn hàng. : int(11)
 * + bảng order_details: lưu t.tin chi tiết đơn hàng: mua bao nhiêu sp, mỗi sp số lượng bao nhiêu.
 * --> 1 order sẽ có nhiều order_details.
 * id
 * order_id: khoá ngoại, liên kết vs bảng orders
 * product_id: khoá ngoại, liên kết vs bảng products
 * quantity; số lượng sp tương ứng đã mua.
 * price: giá tại thời điểm mua hàng.
 *
 *
 * 3 - Xây dựng cấu trúc thư mục project, tạo csdl sau khi phân tích.
 * + tạo csdl: php0720e_project
 * + chọn csdl trên, copy nôi dung file create_db.html, chay trong tab SQL của phpadmin để tạo table.
 * + create databases if ...
 * frontend/assets,configs,controllers...
 * backend/.............................
 *
 *
 * 4 - Sau khi tao csdl vs tao cac table thành công, vào tab designer chụp lại làm tài liệu bảo vệ đồ án
 *
 *
 * 5- CODE
 * Thường sẽ code backend trước, backend chủ yếu là các crud.
 * sau đó bên frontend sẽ lấy dữ liệu này để hiển thị
 * - Với website demo, cấu trúc theo mô hình mvc sẽ có dạng sau: cả 2 đều chứa cấu trúc có thư mục MVC giống hệt nhau
 * backend/
 * frontend/
 *
 * -- với backend, tham khảo cấu trúc thư mục đã dựng sẵn theo MVC đã học: code demo tren lop/mvc_demo/backend
 * --
 *
 * 6 - phan tich 1 số chức năng thực tế của website bán hàng
 * + backend/admin:
 * ++ quản lý sp, news, user --> crud
 * ++ q.ly đơn hàng: xem đơn hangf, sửa đơn hàng: cho phép sửa t.tin cơ bản của người mua hàng
 * ++ ko cho phếp sửa chi tiết đơn hàng.
 * ++ b/ in hoá đơn: đọc nội dung đơn hàng, lưu vào 1 file .pdf
 * ++ c/ xoá đơn hàng: cho phép xoá, lưu lại log người xoá.
 * ++ d/ cập nhật trạng thái đơn hàng: dựa ào t.tháo t.toán của đơn hàng.
 * ++ e/ thống kê:
 * ++++ sp bán chạy nhất, dựa vào số lượng đã bán
 * ++++ đơn hàng đã t.toan, chưa t.toan ...
 * ++++ thống kê theo ngày/ tháng.
 * ++ f/ tìm kiếm: select where like:
 * ++ chức năng phân quyền
 * ++ login/registeer
 * ++ quên mật khẩu: gửi mail chứa url dưới dạng mã hoá
 * vd: index.php?controller=user&action=forgot&email=<chuoi-ma-hoa>
 *
 *
 * + frontend:
 * - trang chủ chi tiết sp, news
 * - đánh giá sản phẩm, yêu cầu chức năng đăng nhập mới cho phếp đánh giá csdl, tạo bảng votes.
 * id
 * comment: nội dung đánh giá.
 * user_id: id của user đánh giá, khoá ngoại
 * star: số sao đánh giá, tham khảo các plugin của JS, tạo field ẩn trong form, khi user click
 * chọn sô sao, dùng js để set giá trị tương ứng cho input đang ẩn đó.
 * sản phẩm yêu thích: có thể lưu vào csdl or ko, or lưu vào cookie, cho phép rỗng
 * - tích hợp chát trực tuyến
 * facebook: search tích hợp mesage của faceoobok, cả comment facebook
 * tích hợp công tỵ chat từ bên thứ 3: tawk.to
 * - mã giảm giá: giảm giá cho đơn hàng của bạn
 * -- bảng discount:
 * id, code: mã giảm
 * expired_date
 * count: số lượng tối đã cho phép sử dụng mã giảm
 * discount: số teienef giảm.
 * - tự động hiển thị t.tin user mua hàng ở trang t.toan khi user login.
 * - giỏ hàng/t.toán
 *
 *
 */

