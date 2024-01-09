<?php
//$host = "localhost";
//$user = "root";
//$password = "";
//$db = "ledger_lock";

 $host = "srv1047.hstgr.io";
 $user = "u675020307_ledgerlock";
 $password = "u675020307_LedgerLock";
 $db = "u675020307_ledgerlock";

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
print_r($conn);
?>