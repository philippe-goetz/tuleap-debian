<?php
//
// Copyright (c) Xerox Corporation, CodeX Team, 2001-2005. All rights reserved
//
// 
//

require_once('include/DataAccessObject.class.php');
require_once('common/system_event/SystemEvent.class.php');

/**
 *  Data Access Object for SystemEvent 
 */
class SystemEventDao extends DataAccessObject {
    /**
    * Constructs the SystemEventDao
    * @param $da instance of the DataAccess class
    */
    function SystemEventDao( & $da ) {
        DataAccessObject::DataAccessObject($da);
    }
    

    /** 
     * Create new SystemEvent and store it in the DB
     * @param $sysevent : SystemEvent object
     * @return true if there is no error
     */
    function store($sysevent) {
        $sql = sprintf("INSERT INTO system_event (type, parameters, priority, status, create_date) VALUES (%s, %s, %s, %s, FROM_UNIXTIME(%s))",
                       $this->da->quoteSmart($sysevent->getType()),
                       $this->da->quoteSmart($sysevent->getParameters()),
                       $this->da->quoteSmart($sysevent->getPriority()),
                       $this->da->quoteSmart($sysevent->getStatus()),
                       $this->da->quoteSmart(time()));
        return $this->update($sql);
    }

    /**
     * Return next system event    
     * criteria: higer priority first, then most recent first
     * And set the event status to 'RUNNING'
     * @return DataAccessResult
    */
    function checkOutNextEvent() {
    }


}