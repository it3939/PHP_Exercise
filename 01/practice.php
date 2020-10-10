<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP練習</title>
</head>
<body>
<?php
$data = [
    'Hello, World!',
    10,
    0xa,
    1.545,
    True,
    'Hello, World!'
];

foreach ($data as $value) {
    echo $value . '<br />';
}
?>
</body>
</html>
