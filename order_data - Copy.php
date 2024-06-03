<?php
function getOrderStatus($order_id) {
  
    $orders = [
        '1001' => 'Processing',
        '1002' => 'Shipped',
        '1003' => 'Delivered',
        '1004' => 'Cancelled'
    ];

    return isset($orders[$order_id]) ? $orders[$order_id] : false;
}
?>