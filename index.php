<?php
require('config/autoload.php');
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

<!DOCTYPE>
<html>
  <body>
    <h1>Form User</h1>
    <form action="route.php?user=save" method="post">
      <input type="hidden" name="id" value="<?=$data->id?>"/>
      <input type="text" name="name" placeholder="Your Name" autofocus="true" value="<?=$data->name?>"/>
      <input type="text" name="username" placeholder="Username" autofocus="true" value="<?=$data->username?>"/>
      <input type="password" name="password" placeholder="Password" autofocus="true" value="<?=$data->password?>"/>
      <button type="submit">Submit</button>
    </form>

    <h2>Data User</h2>
    <table border="1">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Username</td>
          <td>Password</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($user->getAll() as $u){ ?>
        <tr>
          <td><?=$u->id?></td>
          <td><?=$u->name?></td>
          <td><?=$u->username?></td>
          <td><?=$u->password?></td>
          <td>
            <a href="?id=<?=$u->id?>">Ubah</a> |
            <a href="route.php?user=delete&id=<?=$u->id?>">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
