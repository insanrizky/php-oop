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
    <?php
    $user = new \Model\User;
    foreach($user->getAll() as $u){
    ?>
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
