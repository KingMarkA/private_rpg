<?php
require 'header.php';
if (!isset($_SESSION['id'])){header('Location: index.php');}
?>
<center>
<tr><td>
Welcome back, <?=$_SESSION['username'];?>
</td></tr>
</center>
<?php
require 'footer.php';
?>
