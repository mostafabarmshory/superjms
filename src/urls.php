<?php
return array(
    /**
     * **************************************************************
     * Pipelines
     * **************************************************************
     */
    array(
        'regex' => '#^/pipelines/schema$#',
        'model' => 'Pluf\SuperJms\Views\PipelineView',
        'method' => 'getSchema',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Pluf\SuperJms\Pipeline'
        )
    ),
    /*
     * Read (list)
     */
    array(
        'regex' => '#^/pipelines$#',
        'model' => 'Pluf\SuperJms\Views\PipelineView',
        'method' => 'findObject',
        'http-method' => 'GET',
        'precond' => array(
            'User_Precondition::memberRequired'
        ),
        'params' => array(
            'model' => 'Pluf\SuperJms\Pipeline'
        )
    ),
    /*
     * Read
     */
    array(
        'regex' => '#^/pipelines/(?P<modelId>\d+)$#',
        'model' => 'Pluf\SuperJms\Views\PipelineView',
        'method' => 'getObject',
        'http-method' => 'GET',
        'precond' => array(
            'User_Precondition::memberRequired'
        ),
        'params' => array(
            'model' => 'Pluf\SuperJms\Pipeline'
        )
    )
);