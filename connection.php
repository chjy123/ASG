<?PHP 



$nama_host="asg.chaw264c6t0p.us-east-1.rds.amazonaws.com";

$user_sql="admin";

$pass_sql="12345678";

$nama_db="e_commerce";


$condb=new mysqli($nama_host,$user_sql,$pass_sql,$nama_db);


if ($condb->connect_error) 
{
    die("Access Denied" . $condb->connect_error);
} 
?>
