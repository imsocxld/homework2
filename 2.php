<?php
$arr = [
    'key1' => 1,
    'key2' => 2,
    'key3' => 3,
    'key4' => 4,
    'key5' => 5,
    'key6' => 6,
    'key7' => 7,
    'key8' => 8,
    'key9' => 9,
    'key10' => 10,
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DZ</title>
</head>
<body>

<div>
    <?php foreach ($arr as $k => $n) { ?>
        <div> <?php echo "{$k} = {$n}"; ?> </div>
    <?php } ?>
</div>

</body>
</html>