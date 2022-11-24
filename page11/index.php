<?php
$menus = array(
  array('name' => 'GULAI', 'price' => 9),
  array('name' => 'PASTA', 'price' => 12),
  array('name' => 'KOPI', 'price' => 6)
);

// Ketik code Anda dibawah
// echo $menus['name'[0]] .'berharga $' .$menus['price'[0]];
// echo '<br>';
// echo $menus['name'[1]] .'berharga $' .$menus['price'[1]];
// echo '<br>';
// echo $menus['name'[2]] .'berharga $' .$menus['price'[2]];
// echo '<br>';


// foreach ($menus as $menu) {
   
//   echo $menu['name'].' berharga $'.$menu['price'];
//   echo '<br>';
// }

$totalPrice = 0;
$maxPrice = 0; // Variable untuk harga termahal
$maxPriceMenuName = ''; // Variable untuk menyimpan harga item termahal
foreach ($menus as $menu) {
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name.' berharga $'.$price;
  echo '<br>';
  $totalPrice += $price;
  // Ketika lebih besar dari nilai yang disimpan di $maxPrice
  if ($price > $maxPrice) {
    // Perbarui $maxPrice dengan nilai tertinggi
    $maxPrice = $price;
    // Perbarui $maxPriceMenuName dengan nama item termahal yang baru
    $maxPriceMenuName = $name;
  }
}
echo 'Harga total adalah $'.$totalPrice;
echo '<br>';
echo 'Harga item termahal adalah'.$maxPriceMenuName.' dengan harga $'.$maxPrice;

?>