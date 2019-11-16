<?php 

header("Access-Control-Allow-Origin: *");

$users = [
    ['name' => 'Mg Mg', 'address' => 'Yangon'],
    ['name' => 'Aye Aye', 'address' => 'Mandaly'],
    ['name' => 'Kayw Kyaw', 'address' => 'Nay Pyi Taw'],
];

echo json_encode($users);