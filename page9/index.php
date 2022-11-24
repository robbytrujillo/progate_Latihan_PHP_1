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

foreach ($menus as $menu) {
  echo $menu['name'].' berharga $'.$menu['price'];
  echo '<br>';
}

?>