<?php
namespace Pluf\SuperJms;

class Pipeline extends \Pluf\Jms\Pipeline
{

    /**
     * Initial the data model
     *
     * NOTE: this is not multitenant data model.
     */
    function init()
    {
        parent::init();
        $this->_a['multitenant'] = false;
        $this->_a['cols'] = array_merge($this->_a['cols'], SuperTenant_Shortcuts_GetTenantFeildProperties());
    }
}

