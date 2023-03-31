<?php

	include '../partials/mysqli_connect.php';

	$query = 'SELECT * FROM cafe_banhngot';
	if($result = mysqli_query($dbc, $query))
	{
		while($row = mysqli_fetch_array($result)) {
		
		$htmlspecialchars = 'htmlspecialchars';
		echo "
		<div class='col-sm-6 col-md-4 col-lg-4'>
        <div class='menu-item'>
          <div class='menu__item-img'><img src='images/menu/{$htmlspecialchars($row['id'])}.jpg' style='height:240px;width:400px ;'></div>
          <div class='menu__item-content'>
            <h4 class='menu__item-title'>{$htmlspecialchars($row['ten'])}</h4>
            <p class='menu__item-desc'>Thànn phần: {$htmlspecialchars($row['thanh_phan'])}</p>
            <span class='menu__item-price'>{$htmlspecialchars($row['gia'])}đ</span>
          </div>
        </div>
      </div>
	  ";
		}
	}
	else
	{
		echo '<p>Không thể lấy dữ liệu vì:<br>' . mysqli_error($dbc) .
		'.</p><p>Câu truy vấn là: ' . $query . '</p>';
	}
	mysqli_close($dbc);