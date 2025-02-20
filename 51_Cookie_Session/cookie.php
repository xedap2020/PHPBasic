<?php
// Cách tạo Cookie trong PHP, Sử dụng setcookie() để tạo Cookie:
setcookie("username", "JohnDoe", time() + 3600, "/"); // Tồn tại trong 1 giờ

//  Cách đọc Cookie trong PHP, Dùng biến toàn cục $_COOKIE:
if (isset($_COOKIE['username'])) {
    echo "Xin chào, " . $_COOKIE['username'];
} else {
    echo "Cookie không tồn tại!";
}

// Cách xóa Cookie trong PHP, Thiết lập thời gian hết hạn về quá khứ:
setcookie("username", "", time() - 3600, "/"); // Xóa cookie



// Cookie là gì?
// Cookie là một tệp nhỏ được lưu trữ trên trình duyệt của người dùng. Nó giúp lưu trữ thông tin tạm thời giữa các lần truy cập website.

// 🔹 Đặc điểm của Cookie:
// ✅ Lưu trên máy client (trình duyệt).
// ✅ Dữ liệu vẫn tồn tại ngay cả khi đóng trình duyệt (trừ khi bị xóa hoặc hết hạn).
// ✅ Dùng để theo dõi hoạt động của người dùng trên website.
// ✅ Không bảo mật bằng Session vì dễ bị đánh cắp.

