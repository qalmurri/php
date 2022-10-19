<?php
$sql = 'INSERT INTO table1 (sarah, dino) VALUES (0,0)
SET @last_id= LAST_INSERT_ID();
INSERT INTO table2 (id, johnson) VALUES(@last_id,?);'
$row = $config->prepare($sql);
$row->execute($data);
?>
