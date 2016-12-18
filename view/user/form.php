<?php
$user = new \Model\User;
$data = (object)[
  'id' => '',
  'username' => '',
  'password' => '',
  'name' => '',
];

if(isset($_GET['id'])){
  $userById = $user->getById($_GET['id']);
  $data->id = $userById->id;
  $data->username = $userById->username;
  $data->password = $userById->password;
  $data->name = $userById->name;
}
?>

<h1>Form User</h1>
<form action="route.php?user=save" method="post">
  <input type="hidden" name="id" value="<?=$data->id?>"/>
  <input type="text" name="name" placeholder="Your Name" autofocus="true" value="<?=$data->name?>"/>
  <input type="text" name="username" placeholder="Username" autofocus="true" value="<?=$data->username?>"/>
  <input type="password" name="password" placeholder="Password" autofocus="true" value="<?=$data->password?>"/>
  <button type="submit">Submit</button>
</form>
