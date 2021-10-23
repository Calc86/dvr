<?php
/* * * * * * * * * *
 * Author: Calc, calc@list.ru, 8(916) 506-7002
 * ServersX, 2010, Calc (r)
 * * * * * * * * * */

use app\modules\dvr\components\mysql\MysqlQueryException;

defined("INDEX") or die('404 go to <a href="/">index.php</a>');

//function VAL($x,$d)
//{
//    return (isset($x) ? $x : $d);
//}

/**
 * Печатать ссылку или нет, проверяется уровнем доступа (lvl)
 * @param int $lvl уровень доступа
 * @param string $n строка
 * @return string $n или '';
 */
function access_link(int $lvl, $n): string
{
    if ($_SESSION['lvl'] >= $lvl) return $n;
    else return '';
}

function ses_var($var, $def = '')
{
    return get_var($var, $def, 2);
}

/**
 * Получить переменную из $_POST
 * @param string $var
 * @param mixed $def
 * @return mixed $_POST[$var] or $def
 */
function post_var($var, $def = '')
{
    return get_var($var, $def, 1);
}

/**
 * Вернуть переменную из $_GET, основная функция
 * @param string $var переменная
 * @param string $def по умолчанию
 * @param int $type 0-get,1-post
 * @return string Переменная из $_GET
 */
function get_var($var, $def = '', $type = 0)
{
    $x = $def;
    switch ($type) {
        case 2:
            $x = isset($_SESSION[$var]) ? $_SESSION[$var] : $def;
            break;
        case 1:
            $x = isset($_POST[$var]) ? $_POST[$var] : $def;
            break;
        case 0:
        default:
            $x = isset($_GET[$var]) ? $_GET[$var] : $def;
    }
    if (is_array($x)) return $x;
    return addslashes($x);
}

function get_ar($array, $index, $def = '')
{
    return isset($array[$index]) ? $array[$index] : $def;
}

/**
 * @param $h
 * @param $u
 * @param $p
 * @param $n
 * @param int $utf
 * @return mysqli
 * @throws MysqlQueryException
 */


function db_insert($t, $v)
{
    $q = "insert into $t values$v";
    mysql_query($q);
}

function db_update($t, $v, $w)
{
    $q = "update $t set $v where $w limit 1";
    //echo $q;
    mysql_query($q);
}

/**
 *
 * @param string $t table
 * @param string $n Имя выбираемого поля
 * @param string $id Имя первичного ключа
 * @param string $w where
 */
function db_sel($t, string $n = 'name', string $id = 'id', string $w = 'hide=0 and', $o = ''): array
{
    if ($n == '') $n = 'name';
    if ($id == '') $id = 'id';
    if ($o == '') $o = $n;
    $q = "select $id,$n from $t where $w $id>0 order by $o";
    //echo $q.'<br>';
    $r = mysql_query($q);
    $n = mysql_num_rows($r);
    $a = array();
    $name = '';
    for ($i = 0; $i < $n; $i++) {
        list($id, $name) = mysql_fetch_array($r);
        $a[$id] = $name;
    }
    return $a;
}

function db_field($t, $id, $n = 'name', $idn = 'id')
{
    global $db;
    $q = "select `$n` from $t where $idn='$id'";
    $r = mysql_query($q, $db);
    $n = mysql_num_rows($r);
    $row = mysql_fetch_array($r);
    return $row[0];
}

function money($val)
{
    return number_format(round($val, 2), 2) . ' руб.';
}

/**
 * Вывести ссылку для удаления с окном подтверждения
 * @param string $l ссылка
 * @param string $p вопрос
 * @param string $n имя ссылки
 * @return string тег <a>...
 */
function tag_a_x($l, $p = 'Удалить?', $n = 'x')
{
    global $_SESSION;
    if ($_SESSION['lvl'] == 9)
        return '<a href="javascript:if(confirm(\'' . $p . '\')){window.location.href=\'' . $l . '\';}">' . $n . '</a>';
    else return '';
}

function tag_a($l, $n, $t = '_self', $cl = '')
{
    if ($t == '') $t = '_self';
    $cl = ($cl != '') ? ' class="' . $cl . '"' : '';
    return '<a href="' . $l . '" target="' . $t . '"' . $cl . '>' . $n . '</a>';
}

function tag_a_js($l, $n, $t = '_self', $c = '')
{
    if ($t == '') $t = '_self';
    $c = ($c != '') ? ' class="' . $c . '"' : '';
    return '<a href="#" onclick="' . $l . '">' . $n . '</a>';
}

function tag_br($c = 1)
{
    $ret = '';
    for ($i = 0; $i < $c; $i++)
        $ret .= '<br>';
    return $ret;
}

function tag_c($n)
{
    return '<center>' . $n . '</center>';
}

function sp($n = 1)
{
    $sp = '';
    for ($i = 0; $i < $n; $i++) $sp .= '&nbsp';
    return $sp;
}

function nl($n = 1)
{
    $nl = '';
    for ($i = 0; $i < $n; $i++) $nl .= "\n";
    return $nl;
}

function brnl($n = 1)
{
    $nl = '';
    for ($i = 0; $i < $n; $i++) $nl .= "<br>\n";
    return $nl;
}

function tag_td_w($n, $i = 0, $a = 'left', $c = "#c0c0c0", $w = '')
{
    if ($i == '') $i = 0;
    if ($a == '') $a = 'left';
    if ($c == '') $c = '#c0c0c0';
    $bg = '';
    if ($i % 2) $bg = ' bgcolor=' . $c;
    if ($w != '') $w = ' width="' . $w . '"';
    return '<td align="' . $a . '"' . $bg . $w . '>' . $n . '</td>' . "\n";
}

/**
 * Закрывающийся тег td, $p - массив с параметрами.
 * @param string $n Текст между тегами
 * @param array $p Параметры тега (va-top,a-left,c-цвет,cl-class,w,h)
 */
function tag_td_($n, $p = array('va' => '', 'a' => '', 'c' => '#c0c0c0', 'i' => 0, 'cl' => '', 'w' => '', 'h' => '', 'rs' => ''), $tag = 'td')
{
    //defaults
    $va = '';
    $a = '';
    $c = '';
    $i = 0;
    $cl = '';
    $w = '';
    $h = '';
    $rs = '';
    //get vars
    foreach ($p as $k => $v)
        ${$k} = $v;
    $va = ($va != '') ? ' valign="' . $va . '"' : '';
    $a = ($a != '') ? '  align="' . $a . '"' : '';
    $c = ($i % 2) ? ' bgcolor="' . $c . '"' : '';
    $cl = ($cl != '') ? '  class="' . $cl . '"' : '';
    $w = ($w != '') ? '  width="' . $w . '"' : '';
    $h = ($h != '') ? ' height="' . $h . '"' : '';
    $rs = ($rs != '') ? ' rowspan="' . $rs . '"' : '';

    return "<$tag" . $va . $a . $c . $cl . $w . $h . $rs . ">" . $n . "</$tag>" . nl();
}

function tag_th_($n, $p = array('va' => 'top', 'a' => 'left', 'c' => '#c0c0c0', 'i' => 0, 'cl' => '', 'w' => '', 'h' => '', 'rs' => ''), $tag = 'th')
{
    return tag_td_($n, $p, 'th');
}


function tag_td_o($c = 0)
{
    if ($c) return '</td>';
    else return '<td>';
}

function tag_td($n, $i = 0, $a = 'left', $c = "#c0c0c0")
{
    $bg = '';
    if ($i % 2) $bg = ' bgcolor=' . $c;
    return '<td valign="middle" align="' . $a . '"' . $bg . '>' . $n . '</td>' . "\n";
}

function tag_th($n, $a = '', $c = "#c0c0c0", $w = '')
{
    $a = ($a != '') ? '  align="' . $a . '"' : '';
    $w = ($w != '') ? '  width="' . $w . '"' : '';
    return '<th ' . $a . $w . ' bgcolor="' . $c . '">' . $n . '</th>' . "\n";
}

function tag_thc($cs, $n, $a = '', $c = "#c0c0c0", $w = '')
{
    $cs = ($cs != '') ? '  colspan="' . $cs . '"' : '';
    $a = ($a != '') ? '  align="' . $a . '"' : '';
    $w = ($w != '') ? '  width="' . $w . '"' : '';
    return '<th ' . $cs . $a . $w . ' bgcolor="' . $c . '">' . $n . '</th>' . "\n";
}

function tag_f_in($n, $v = '', $s = 16)
{
    return '<input type="Text" size="' . $s . '" value="' . $v . '" name="' . $n . '">' . "\n";
}

function tag_f_ta($n, $v = '', $c = 40, $r = 20)
{
    return '<textarea name="' . $n . '" cols="' . $c . '" rows="' . $r . '">' . $v . '</textarea>';
}

function tag_f_hi($n, $v = '')
{
    return '<input type="Hidden" value="' . $v . '" name="' . $n . '">' . "\n";
}

function tag_f_ch($n, $v, $ch, $caption, $id = '-1')
{
    if ($id != -1) $n = $n . "[$id]";
    if ($ch == 1) $ch = ' checked'; else $ch = '';
    return '<input type="checkbox" name="' . $n . '" value="' . $v . '"' . $ch . '> ' . $caption;
}

function tag_f_rb($n, $v, $ch, $c, $id = '-1')
{
    if ($id != -1) $n = $n . "[$id]";
    if ($ch == $v) $ch = ' checked'; else $ch = '';
    return '<input type="radio" name="' . $n . '" value="' . $v . '"' . $ch . '> ' . $c;
}

/**
 * Поле select
 * @param string $n имя
 * @param string $s $v выбранного элемента
 * @param array $data массив с ключами $v=>$n
 * @return string
 */
function tag_f_se($n, $s, $data)
{
    $sel = '';
    $sel = '<select name="' . $n . '">';
    foreach ($data as $v => $n) {
        $sel .= '<option' . ($s == $v ? ' SELECTED' : '') . ' value="' . $v . '">' . $n;
    }
    $sel .= '</select>' . "\n";
    return $sel;
}

/**
 * Кнопка Submit
 * @param int $s Какое имя будет выбрано из массива 0=0 >0=1
 * @param array $n массив имен
 * @return string
 */
function tag_f_sm($s = 0, $n = array("Добавить", "Изменить"), $name = '')
{
    //<input type="Submit" value="'.( ($id==0) ? 'Добавить' : 'Изменить' ).' деталь">
    //return '<input type="Submit" value="'.( ($s==0) ? 'Добавить' : 'Изменить' ).'">'."\n";
    return '<input type="Submit" ' . (($name != '') ? 'name="' . $name . '"' : '') . ' value="' . $n[!!$s] . '">' . "\n";
}

function tag_f_re($n = 'Сбросить')
{
    return '<input type="reset">';
}

//bold
function tag_b($v, $b = 1)
{
    return $b == 1 ? '<b>' . $v . '</b>' : $v;
}

function tag_s($v, $s = 1)
{
    return $s == 1 ? '<s>' . $v . '</s>' : $v;
}

function tag_t_o($b = 0, $a = 'top', $w = '', $cp = 1, $cs = 1, $bg = '')
{
    if ($a == '') $a = 'top';
    if ($bg != '') $bg = ' bgcolor="' . $bg . '"';
    return
        '<table' . $bg . ' border="' . $b . '" align="' . $a . '" cellpadding="' . $cp . '" cellspacing="' . $cs . '"' . ($w != '' ? ' width="' . $w . '"' : '') . '>' . "\n";
}

function tag_tr($c = 0, $n = '')
{
    switch ($c) {
        case 0:
            return '<tr>' . "\n";
            break;
        case 1:
            return '</tr>' . "\n";
            break;
        case 2:
            return '<tr>' . $n . '</tr>' . "\n";
            break;
        default:
            return '';
    }
}

function tag_t_c()
{
    return '</table>' . "\n";
}

function tag_div_($type = 0, $text = '', $array = array())
{
    $ret = '';

    $param = text_show(count($array), ' ', '');
    foreach ($array as $k => $v)
        $param .= $k . '="' . $v . '" ';

    $param = str_strip_last($param);

    $ret .= "<div{$param}>";

    switch ($type) {
        case 2:
            return $ret . $text . '</div>' . nl();
        case 0:
            return $ret . nl();
        case 1:
            return '</div>' . nl();
        default:
            return '';
    }
}

//table id act tabkle_control colon_control;
/**
 * Удалить запись
 * @param string $t Таблица из которой удалить
 * @param int $id id записи
 * @param string $loc Куда перенаправить после удаления
 * @param string $tc Имя таблица, в которой проверять наличие зависимости
 * @param string $cc Имя колонки в которой проверять наличие зависимости
 * @param int $full
 * @return void
 */
function do_del($t, $id, $loc, string $tc = '', string $cc = '', $full = 0)
{
    //добавить контроль на наличие данных
    //проверка наличия связей.
    if (!($tc == '' || $cc == '')) {
        $q = "select * from $tc where $cc=$id";
        $r = mysql_query($q);
        $n = mysql_num_rows($r);
        if ($n) return;
    }
    $q = "delete from $t where id=$id limit 1";
    $r = mysql_query($q);
    //header('Location: ?act='.$loc);
    redir($loc, $full);
}

function redir($l, $full = 0)
{
    if (!$full)
        header('Location: ?act=' . $l);
    else
        header('Location: ?' . $l);
}

function byte_format($n)
{
    if ($n == '') return '';
    $l = array("B", "kB", "MB", "GB", "TB");
    $num = $n;
    for ($i = 0; $i < count($l); $i++) {
        $k = pow(1000, $i);
        $num = $n / $k;
        //if(abs($num)<1000) return number_format($num,($i==0) ? 0 : 3).' '.$l[$i];
        if (abs($num) < 1000) return number_format($num, 3 * !!$i) . ' ' . $l[$i];
    }
    return number_format($num) . ' ' . $l[count($l) - 1];
}

function js_w_c($wn, $w, $h, $st = 'no', $tb = 'no', $mb = 'no')
{
    return $wn . ' = open("", "displayWindow",
        "width=' . $w . ',height=' . $h . ',status=' . $st . ',toolbar=' . $tb . ',menubar=' . $mb . '");' . nl();
}

function js_d_o($wn)
{
    return $wn . '.document.open();' . nl();
}

function js_d_w($wn, $s)
{
    return "$wn.document.write('$s');" . nl();
}

function js_d_c($wn)
{
    return $wn . '.document.close();' . nl();
}

/**
 * @param $s
 * @return string
 */
function js_c($s)
{
    return "// $s" . nl();
}

function str_to_upper($str)
{
    return strtr($str,
        "abcdefghijklmnopqrstuvwxyz" .
        "\xE0\xE1\xE2\xE3\xE4\xE5" .     // а б в г д е
        "\xb8\xe6\xe7\xe8\xe9\xea" .     // ё ж з и й к
        "\xeb\xeC\xeD\xeE\xeF\xf0" .     // л м н о п р
        "\xf1\xf2\xf3\xf4\xf5\xf6" .     // с т у ф х ц
        "\xf7\xf8\xf9\xfA\xfB\xfC" .     // ч ш щ ъ ы ь
        "\xfD\xfE\xfF",                 // э ю я
        "ABCDEFGHIJKLMNOPQRSTUVWXYZ" .
        "\xC0\xC1\xC2\xC3\xC4\xC5" .     // А Б В Г Д Е
        "\xA8\xC6\xC7\xC8\xC9\xCA" .     // Ё Ж З И Й К
        "\xCB\xCC\xCD\xCE\xCF\xD0" .     // Л М Н О П Р
        "\xD1\xD2\xD3\xD4\xD5\xD6" .     // С Т У Ф Х Ц
        "\xD7\xD8\xD9\xDA\xDB\xDC" .     // Ч Ш Щ Ъ Ы Ъ
        "\xDD\xDE\xDF");                // Э Ю Я
}

function tel_num($no)
{
    if (strlen($no) == 7)
        return '8(495)' . substr($no, 0, 3) . '-' . substr($no, 3);
    else return $no;
}

function str_strip_last($str, $c = 1)
{
    return substr($str, 0, strlen($str) - $c);
}

function text_size($s, $t)
{
    return '<span style="font-size: ' . $s . 'pt">' . $t . '</span>';
}

function text_show($s, $t, $f = '')
{
    return $s ? $t : $f;
}

/*
foreach($_REQUEST as $k=>$v)
{
    ${$k} = $v;
}
*/


/**
 * @param $v
 * @param $p
 * @return int
 */
function pack_byte($v, $p)
{
    return $v << $p;
}

/**
 *
 * @param  $p int Положение
 * @param  $l int Длина
 * @return
 */
function unpack_byte($v, $p, $l = 1)
{
    $mask = 0;
    for ($i = 0; $i < $l; $i++)
        $mask += pack_byte(1, $p + $i);
    $val = $v & $mask;
    $ret = $val >> $p;
    return $ret;
}

function ru_last($number)
{
    static $last = array('ов', '', 'а');

    $numberLast = intval(substr(strval($number), -1, 1));
    $numberPreLast = intval(substr(strval($number), -2, 2));

    $type = 2;
    if (($numberLast == 0) or ((5 <= $numberLast) and ($numberLast <= 9)) or ((11 <= $numberPreLast) and ($numberPreLast <= 19))) {
        $type = 0;
    } elseif (($numberLast == 1) and ($numberPreLast != 11)) {
        $type = 1;
    } elseif ((2 <= $numberLast) and ($numberLast <= 4)) {
        $type = 2;
    }

    return $last[$type];
}

function yn($n)
{
    if ($n)
        return 'yes';
    else
        return 'no';
}
