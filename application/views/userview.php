<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users
    </title>
    
   
</head>
<body>
<?php foreach($users1 as $user): ?>
<table>
    <tr>
    <td><?= $user['firstname'] ?></td>
    <td><?= $user['lastname'] ?></td>
    </tr>

  </table>  
<?php endforeach; ?>
</body>
</html>