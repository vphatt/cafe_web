<?php

	include '../partials/mysqli_connect.php';

	$query = 'SELECT * FROM cafe_coffe UNION SELECT * FROM cafe_tea UNION SELECT * FROM cafe_banhngot';
	if($result = mysqli_query($dbc, $query))
	{
		while($row = mysqli_fetch_array($result)) {
		
		$htmlspecialchars = 'htmlspecialchars';
		echo "
		<div class='col-sm-6 col-md-6 col-lg-4'>
            <div class='product-item'>
              <div class='product__img'>
                <img src='images/menu/{$htmlspecialchars($row['id'])}.jpg' style='height:240px;width:400px ;'>
                <div class='product__action'>
				  <button class='btn btn__primary btn__hover2 my-cart-btn' data-id={$htmlspecialchars($row['id'])} data-name='{$htmlspecialchars($row['ten'])}' data-price={$htmlspecialchars($row['gia'])} data-quantity='1' data-image=images/menu/{$htmlspecialchars($row['id'])}.jpg>Thêm vào giỏ</button>
                </div>
				
              </div>
              <div class='product__content'>
                
                <h4 class='product__title'><a href='#'>{$htmlspecialchars($row['ten'])}</a></h4>
				<span class='product__cat'>
				 Thành phần: {$htmlspecialchars($row['thanh_phan'])}
                </span>
                <span class='product__price'>{$htmlspecialchars($row['gia'])} đ</span>
				
              </div>
            </div>
          </div>";
		}
	}
	else
	{
		echo '<p>Không thể lấy dữ liệu vì:<br>' . mysqli_error($dbc) .
		'.</p><p>Câu truy vấn là: ' . $query . '</p>';
	}
	mysqli_close($dbc);
