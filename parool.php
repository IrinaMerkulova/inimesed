<?php
$parool='admin';
$sool='tavalinetext';
$krypt=crypt($parool, $sool);
echo $krypt;
