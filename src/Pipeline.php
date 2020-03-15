<?php
namespace Pluf\SuperJms;

use Pluf;

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
        Pluf::loadFunction('SuperTenant_Shortcuts_GetTenantFeildProperties');
        $this->_a['multitenant'] = false;
        $this->_a['cols'] = array_merge($this->_a['cols'], SuperTenant_Shortcuts_GetTenantFeildProperties());
    }
}

