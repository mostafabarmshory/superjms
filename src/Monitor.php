<?php
namespace Pluf\SuperJms;

/**
 * Adding monitors of the project
 *
 * @author maso
 *
 */
class Monitor
{

    /**
     * Find counts of the pipelines on the server
     *
     * @return number
     */
    public static function pipelineCount()
    {
        $model = new Pipeline();
        $param = array(
            'count' => true
        );
        $res = $model->getList($param);
        // Check permission
        return $res[0]['nb_items'] + 0;
    }
}

