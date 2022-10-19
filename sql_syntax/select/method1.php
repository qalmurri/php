<?php
SELECT artist.name, painting.title
  FROM artist INNER JOIN painting
  ON artist.a_id = painting.a_id;
=============
  SELECT db1.artist.name, db2.painting.title
  FROM db1.artist INNER JOIN db2.painting
  ON db1.artist.a_id = db2.painting.a_id;

?>
