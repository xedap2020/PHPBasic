<?php
// Cách tạo Session trong PHP, Sử dụng session_start() để bắt đầu session:
session_start(); // Luôn gọi ở đầu file PHP
$_SESSION["username"] = "JohnDoe";

// Cách đọc Session trong PHP
session_start();
if (isset($_SESSION["username"])) {
    echo "Xin chào, " . $_SESSION["username"];
} else {
    echo "Session không tồn tại!";
}

// Cách xóa Session trong PHP
session_start();
session_unset();  // Xóa tất cả biến Session
session_destroy(); // Hủy Session

// Session là gì?
// Session là một biến toàn cục được lưu trên server để lưu trữ thông tin tạm thời của người dùng.

// 🔹 Đặc điểm của Session:
// ✅ Lưu trữ trên server, an toàn hơn Cookie.
// ✅ Hết hạn khi đóng trình duyệt (trừ khi cấu hình khác).
// ✅ Dùng để lưu thông tin đăng nhập, giỏ hàng, dữ liệu quan trọng.
