<?php
//presentation layer

include 'include/autoLoad.inc.php';

$user = new UserController();
$userview = new UserView();
$userview->showUsers();
// $user->insertion('MudassirNadeem',48,'Male');
// $user->showUser();
// $user->updation('HamidAliKhan','73','Male','MudassirNadeem');
// $user->insertUser('AbdulSamad','21','Male');
// $user->insertUser('AbdulRafay','19','Male');

// $user->updateUser('UzmaMudassir','38','Female','AbdulSamad');
// $user->delete('MudassirNadeem');

 ?>
