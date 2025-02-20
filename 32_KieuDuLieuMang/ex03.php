<?php
// - mảng đa chiều 
// - duyệt (đọc) mảng đa chiều

$customerArr = [
    'Hoang An',
    123,
    false,
    null
];

// Mỗi phần tử chứa thông tin 1 khách hàng
// - Họ và tên 
// - Email 
// - Số điện thoại 
// - Địa chỉ

//Khai báo mảng đa chiều có sẵn dữ liệu
$customerArr = [
    [
        'name' => 'Hoàng An',
        'email' => 'hoangan.web@gmail.com',
        'phone' => '0987654321',
        'address' => 'Hà Nội'
    ],
    
    [
        'name' => 'Văn Tuấn',
        'email' => 'vantuan@gmail.com',
        'phone' => '0987654321',
        'address' => 'Hà Nam'
    ],
    'status' => 'success',
    30
];

echo "<pre>";
print_r($customerArr);
echo "</pre>";

// Khai báo mảng đa chiều không có dữ liệu ban đầu
$customerArr = [];

// Nhập dữ liệu vào mảng đa chiều
$customerArr[] = [
    'name' => 'Văn Tuấn',
    'email' => 'vantuan@gmail.com',
    'phone' => '0987654321',
    'address' => 'Hà Nam'
];

$customerArr[] = [
    'name' => 'Hoàng An',
    'email' => 'hoangan.web@gmail.com',
    'phone' => '0987654321',
    'address' => 'Hà Nội'
];

$customerArr['status'] = 'success';
$customerArr[] = 30;
$customerArr['special'] = [
    'name' => 'Hoàng An',
    'email' => 'hoangan.web@gmail.com',
    'phone' => '0987654321',
    'address' => 'Hà Nội'
];

$customerArr[][] = 'Văn Toàn';
$customerArr[][] = 'hoangan.web@gmail.com';
echo "<pre>";
print_r($customerArr);
echo "</pre>";