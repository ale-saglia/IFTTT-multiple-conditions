<?php
    include("database.php");
    $webhook = 'https://maker.ifttt.com/trigger/';

    $sql = mysql_query('SELECT * FROM DB_TABLE');
    $variablesArray = array();
    while($row = mysql_fetch_array($sql)){
        $variablesArray[$row['name']] = $row['value'];
    }

    function fireAction($trigger){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, webhook.$trigger.'/with/key/'.IFTTT_WEBHOOKS_KEY);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_exec($ch);
        curl_close($ch);
    }

    //Example
    if($variablesArray['variable1']=1 && $variablesArray['variable2']=1){
        fireAction('action1');
    }
?>