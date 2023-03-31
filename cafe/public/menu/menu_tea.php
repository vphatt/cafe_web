<?php

include '../partials/mysqli_connect.php';

$query = 'SELECT * FROM cafe_tea';
if($result = mysqli_query($dbc, $query))
{
  while($row = mysqli_fetch_array($result)) {
    
    $htmlspecialchars = 'htmlspecialchars';
    echo "
    <div class='menu-item'>
      <h4 class='menu__item-title'>{$htmlspecialchars($row['ten'])}</h4>
      <span class='menu__item-price'>{$htmlspecialchars($row['gia'])}đ</span>
      <p class='menu__item-desc'>Thành phần: {$htmlspecialchars($row['thanh_phan'])}</p>
    </div>";
  }
}
else
{
  echo '<p>Không thể lấy dữ liệu vì:<br>' . mysqli_error($dbc) .
  '.</p><p>Câu truy vấn là: ' . $query . '</p>';
}
mysqli_close($dbc);
?>