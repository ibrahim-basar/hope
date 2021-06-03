<html>
<body>

</body>
<?php
try{
$json_data = json_encode($_POST);
$a =1;
file_put_contents('const2.json', file_get_contents("php://input")
);
echo "asd";}
catch (Exception $e) {
    echo 'Yakalanan olağandışılık: ',  $e->getMessage(), "\n";
}
?>
</html>
