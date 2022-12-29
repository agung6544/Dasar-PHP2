<?php
header("Content-Type:application/zip");
header("Content-Length:".filesize($file));
header("content-Disposition: attachment;filename=$file");
readfile($file);
?>