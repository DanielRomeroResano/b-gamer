<?php

$sql = 'SELECT id, 'name'
FROM category';

$stmt = $conn->prepare($sql);

$stmt->execute();

$categories = $stmt->fechALL();
