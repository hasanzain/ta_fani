<?php
foreach($tesdata -> result_array() as $key) {
    $resulta[] = array($key['pekerja'], $key['nama'], $key['Divisi']);
}
echo $a = json_encode($resulta, JSON_NUMERIC_CHECK);
?>