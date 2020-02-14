<?php
    include("database.php");
    $webhook = 'https://maker.ifttt.com/use/'.IFTTT_WEBHOOKS_KEY;

    $sql = mysql_query('SELECT * FROM DB_TABLE');
    $variablesArray = array();
    while($row = mysql_fetch_array($sql)){
        $variablesArray[$row['name']] = $row['value'];
    }

    //Example
    if($variablesArray['variable1']=1 && $variablesArray['variable2']=1){
        $outputName="action1";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, webhook.$outputName);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }
?>