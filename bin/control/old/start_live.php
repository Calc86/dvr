<?php
require("/home/calc/vlc/www/config.php");
require(DIR."/class/vlm.class.php");

$q = "select c.uid as uid, o.name as org, c.`cam-name` as cam, c.live as live from cam as c, org as o where o.id=c.uid and c.live=1";
$r = mysql_query($q);

while($row = mysql_fetch_row($r)){
    list($uid,$org,$cam,$live) = $row;
    $cc = new cam_control_archive($uid, $org, $cam, 'live');
    if($live){
        $cc->play();
    }else
    {
        $cc->stop();
    }
    //$cc->play();    //добавить обработки ошибок и т.д.
}


?>
