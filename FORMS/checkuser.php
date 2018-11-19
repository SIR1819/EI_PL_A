<?php 
$username[]='ana';
$username[]='anabela';
$username[]='ananas';
$username[]='anabola';
$username[]='anita';
$username[]='anatomia';
$username[]='analise';

$user = $_GET['username'];
$result = [];
    
    if (in_array($user,$username)) {
       // existe username 
    	$result['status'] = false;
    } else {
    	$result['status'] = true;
    } 
    echo json_encode($result);
?>