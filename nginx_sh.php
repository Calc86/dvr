<?php
// Docker: php nginx_sh.php D
// Host:   php nginx_sh.php H


$host = "D";
if(in_array('H',$argv)) $host = "H";

$template_file = __DIR__.'/compose/yii2/nginx.template.conf';
$env_file = __DIR__.'/.env';

$data = file_get_contents($env_file);
$data = explode("\n", $data);

$variables = [];
foreach ($data as $line) {
    if(skipLine($line, $host)) continue;
    $line = trim($line);
    $var = explode('=',$line);
    $key = $var[0];
    $value = $var[1];
    if(startWith($value, '$'))
        $value = get_ar($variables, substr($value,1), $value);
    if(startWith($key, $host.'_'))
        $key = substr($key, 1);
    $variables[$key] = $value;
}

$prefix = get_ar($variables, 'PREFIX', 'unknown');

//var_dump($variables);
//foreach ($variables as $k => $v)
//    echo $k.'='.$v."\n";
//echo "\n";
//die();

$template = file_get_contents($template_file);

$search = [];
$replace = [];
$file = $template;
foreach ($variables as $key => $value) {
    $search[] = '${'.$key.'}';
    $replace[] = $value;
}

//var_dump($search); die();

$config = str_replace($search, $replace, $template);

file_put_contents("./{$prefix}_".strtolower($host).".conf", $config);


function startWith($string, $start) {
    return substr($string, 0, strlen($start)) == $start;
}

function skipLine($line, $host) {
    if(startWith($line, "H_") && $host != 'H') return true;
    if(startWith($line, "D_") && $host != 'D') return true;
    return empty(trim($line)) || startWith($line, '#');
}

function get_ar($array, $key, $default) {
    return $array[$key] ?? $default;
}