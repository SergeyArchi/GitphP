  
<?php
include '/xampp/htdocs/admin/database/database_order.php';

$login = filter_var(trim($_COOKIE['user_user']),
FILTER_SANITIZE_STRING);
$id_user = filter_var(trim($_COOKIE['id_user']),
FILTER_SANITIZE_STRING);
$were = filter_var(trim($_POST['were']),
FILTER_SANITIZE_STRING);
$status = "Очікує черги";
$info_zam = filter_var(trim($_POST['info_zam']),
FILTER_SANITIZE_STRING);
$prise = filter_var(trim($_POST['prise']),
FILTER_SANITIZE_STRING);


if(isset($_POST['submit']))
{
$checked_array=$_POST['prodid'];
foreach ($_POST['prodname'] as $key => $value) 
{
	if(in_array($_POST['prodname'][$key], $checked_array))
	{
	$prodname=$_POST['prodname'][$key];
	$prod_price= $_POST['prod_price'][$key];
	$prod_qty= $_POST['prod_qty'][$key];
    

	$insertqry= "INSERT INTO `zamovlenya`(`id_user`, `type`, `were`, `status`, `info_zam`, `login_user`, `prise`) 
    VALUES ('$id_user', '$prodname', '$were', '$status', '$info_zam', '$login', '$prise')";  
	$insertqry=mysqli_query($mysql,$insertqry);
	}
	
    }
}
header('Location: /user/config/zamovlenya.php?id=$_COOKIE["id_user"]');

?>