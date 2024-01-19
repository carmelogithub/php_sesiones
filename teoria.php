<html>
<body>
<p>https://www.php.net/manual/en/features.php</p>
<h3>Cookies</h3>
<?php
setcookie("seguro","ok",time()+3600,secure:true,httponly: true);
setcookie("persistente","true",time()+30*24*60*60);
echo var_dump($_COOKIE);
if(isset($_COOKIE['prueba'])){
    echo '<p>bienvenido de nuevo</p>';
}
else{
    echo '<p>vaya... la primera vez vienes</p>';
    setcookie("prueba","value de la cookie");
}
?>
<h3>Sesiones</h3>
<?php
session_start();
$_SESSION['info']="datos personales";
echo var_dump($_SESSION)
?>
</body>
</html>
