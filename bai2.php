<?php
$diem_giua_ky = 8.5; 
$diem_cuoi_ky = 9.0; 
// Tính điểm trung bình
$diem_trung_binh = ($diem_giua_ky * 0.3) + ($diem_cuoi_ky * 0.7);

// Xếp hạng học lực dựa trên điểm trung bình
if ($diem_trung_binh >= 9.0) {
    echo "Hạng học lực: Xuất sắc";
} elseif ($diem_trung_binh >= 7.0 && $diem_trung_binh < 9.0) {
    echo "Hạng học lực: Giỏi";
} elseif ($diem_trung_binh >= 5.0 && $diem_trung_binh < 7.0) {
    echo "Hạng học lực: Khá";
} else {
    echo "Hạng học lực: Trung bình - Yếu";
}
?>
