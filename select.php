<ul>
<?php

$db = new mysqli(
    '127.0.0.1',
    'root',
    '',
    'php'
);

$sql = 'SELECT * FROM users';
$result = $db->query($sql);

foreach ($result as $row) {
    printf(
        '<li><span style="color: %s">%s (%s)</span></i>',
        htmlspecialchars($row['color']),
        htmlspecialchars($row['name']),
        htmlspecialchars($row['gender'])
    );
}

$db->close();
?>
</ul>