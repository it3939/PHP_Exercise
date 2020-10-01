<?php
    $data = "Hello, World!<br />";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-10</title>
</head>
<body>
<h3>ショートタグ</h3>
<?= $data ?>           <!-- Hello, World! -->
<?php print $data ?>   <!-- Hello, World! -->
</body>
</html>
