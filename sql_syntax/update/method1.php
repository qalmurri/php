<?php
$sql = 'UPDATE user
        INNER JOIN kk ON user.id_user = kk.id_user
        SET user.user_file=?
        WHERE kk.id_kk=?';
        $row = $db->prepare($sql);
        $row->execute($data);
?>
