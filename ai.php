<?php

$json_data = json_encode($_POST);
file_put_contents('cont.json', $json_data);

echo file_get_contents('const2.json', $json_data);


?>