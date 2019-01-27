<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $arr = [1,3,5,-67,0,83,5];
    function timMin($arr){
        $min = $arr[0];
        for($i=0; $i < count($arr); $i++){
            if($arr[$i] < $min){
                $min = $arr[$i];
            }
        }
        return $min;
    }
    echo "Min is: " . timMin($arr);
?>
</body>
</html>