<?php
header("Content-Type: application/json");
if (isset($_POST['name']) && $_POST['name'] && isset($_POST['password']) && $_POST['password']) {
    

   
$file = file_get_contents('data.json');

$data = ['name' => $_POST['name'], 'password' => $_POST['password']];

$users = json_decode($file, true);
$isUserExists = false;

foreach($users as $user){
    if($user['name'] == $data['name']){
        $isUserExists = true;
    }
}

if($isUserExists){
    echo json_encode(['message' => 'Такой пользователь уже зарегестрировано']);
}
else{
    $users[] = $data;

    file_put_contents('data.json', json_encode($users));
    
    echo json_encode($data);
}


}
else{
    echo json_encode(['message' => 'Нет данных']);
}
