<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 15.05.14
 * Time: 0:22
 */

namespace system2;

/**
 * Набор запросов к нашей системе
 * Class mysql
 * @package system2
 */
class mysql {
    const CAM_SETTINGS =
        "select
          c.id as id, c.live as live, c.rec as rec, c.mtn as mtn, c.ip as ip, cs.live_proto as liveProto, cs.live_port as livePort,
          cs.live_path as livePath, cs.stop_proto as stopProto, cs.stop_port as stopPort, cs.stop_path as stopPath
         from cams as c, cam_settings as cs
         where
          c.id = cs.cam_id and c.user_id = {dvr_id}";

    /**
     * @param $query
     * @param array $params
     * @return string query
     */
    public static function getQuery($query, array $params){
        return str_replace(array_keys($params), array_values($params), $query);
    }
}
