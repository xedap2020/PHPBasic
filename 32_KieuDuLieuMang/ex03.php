<?php
/*
 * - Mảng đa chiều
 * - Duyệt (đọc) mảng đa chiều
 *
 * */

/*
 * Mỗi phần tử chứa thông tin 1 khách hàng
 * - Họ và tên
 * - Email
 * - Số điện thoại
 * - Địa chỉ
 * */

//Khai báo mảng đa chiều có sẵn dữ liệu
$customerArr = [
    [
        'name' => 'Hoàng An',
        'email' => 'hoangan.web@gmail.com',
        'phone' => '0388875179',
        'address' => 'Hà Nội'
    ],

    [
        'name' => 'Văn Tuấn',
        'email' => 'vantuan@gmail.com',
        'phone' => '0388875175',
        'address' => 'Hà Nam'
    ],

    'status' => 'success',

    30
];

//Khai báo mảng đa chiều không có dữ liệu ban đầu
$customerArr = [];

//Nhập dữ liệu vào mảng đa chiều
$customerArr[] = [
    'name' => 'Hoàng An',
    'email' => 'hoangan.web@gmail.com',
    'phone' => '0388875179',
    'address' => 'Hà Nội'
];

$customerArr[] = [
    'name' => 'Văn Tuấn',
    'email' => 'vantuan@gmail.com',
    'phone' => '0388875175',
    'address' => 'Hà Nam'
];

$customerArr['status'] = 'success';

$customerArr[] = 30;

$customerArr['special'] = [
    'name' => 'Hoàng An',
    'email' => 'hoangan.web@gmail.com',
    'phone' => '0388875179',
    'address' => 'Hà Nội'
];

$customerArr[]['name'] = 'Văn Toàn';
$customerArr[3]['email'] = 'hoangan.web@gmail.com';
$customerArr[3]['phone'] = '0123456789';
$customerArr[3]['address'] = 'Vĩnh Phúc';

$customerArr['special']['postion'] = [
    'Technical',
    'CEO',
    'Staff',
    'Manager',
    'CTO'
];
//$lastPositionIndex = count($customerArr['special']['postion'])-1;
//unset($customerArr['special']['postion'][$lastPositionIndex]);

//echo '<pre>';
//print_r($customerArr);
//echo '</pre>';
if (!empty($customerArr) && is_array($customerArr)){
    foreach ($customerArr as $item){
        if (is_array($item)){
            if (!empty($item)){
                echo 'Thông tin khách hàng: <br/>';
                foreach ($item as $subArr){
                    if (is_array($subArr)){
                        if (!empty($subArr)){
                            echo 'Công việc: <br/>';
                            foreach ($subArr as $position){
                                echo $position.'<br/>';
                            }
                        }
                    }else{
                        echo $subArr.'<br/>';
                    }
                }
                echo '<hr/>';
            }
        }else{
            echo $item.'<hr/>';
        }
    }
}