<?php

// Demo tìm kiếm tuần tự (Linear Search) và tìm kiếm nhị phân (Binary Search) với 5 cấu hình

// Tìm kiếm tuần tự (Linear Search)
function linearSearch($arr, $target) {
    foreach ($arr as $index => $value) {
        if ($value === $target) {
            return $index; // Trả về vị trí của phần tử nếu tìm thấy
        }
    }
    return -1; // Trả về -1 nếu không tìm thấy phần tử
}

// Tìm kiếm nhị phân (Binary Search)
function binarySearch($arr, $target) {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2); // Tính chỉ số giữa

        if ($arr[$mid] === $target) {
            return $mid; // Trả về vị trí của phần tử nếu tìm thấy
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1; // Di chuyển biên dưới lên
        } else {
            $high = $mid - 1; // Di chuyển biên trên xuống
        }
    }
    return -1; // Trả về -1 nếu không tìm thấy phần tử
}

// Cấu hình
$dataConfigurations = [
    [1, 3, 5, 7, 9],         // Các số lẻ nhỏ
    [10, 20, 30, 40, 50],    // Bội số của 10
    [2, 4, 6, 8, 10],        // Các số chẵn nhỏ
    [1, 2, 3, 4, 5, 6],      // Các số liên tiếp
    [10, 15, 25, 35, 50]     // Các số tăng ngẫu nhiên
];

$targets = [7, 20, 6, 4, 35];  // Các giá trị mục tiêu cần tìm trong từng cấu hình

echo "--- Kết quả tìm kiếm tuần tự (Linear Search) ---\n";
foreach ($dataConfigurations as $i => $data) {
    $target = $targets[$i];
    $result = linearSearch($data, $target);
    echo "Cấu hình " . ($i + 1) . ": Mảng=" . json_encode($data) . ", Mục tiêu=" . $target . ", Kết quả=Vị trí " . $result . "\n";
}

echo "\n--- Kết quả tìm kiếm nhị phân (Binary Search) ---\n";
foreach ($dataConfigurations as $i => $data) {
    $target = $targets[$i];
    $result = binarySearch($data, $target);
    echo "Cấu hình " . ($i + 1) . ": Mảng=" . json_encode($data) . ", Mục tiêu=" . $target . ", Kết quả=Vị trí " . $result . "\n";
}

?>
