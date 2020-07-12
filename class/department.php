<?php
//$Id: department.php,v 1.11 2005/02/15 16:58:02 ackbarr Exp $
// modification BYOOS solutions le 30 avril 2006 Gabriel
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
if (!defined('MLDOCS_CLASS_PATH')) {
    exit();
}

require_once(MLDOCS_CLASS_PATH.'/mldocsBaseObjectHandler.php');


/**
 * mldocsDepartment class
 *
 * @author Eric Juden <ericj@epcusa.com> 
 * @access public
 * @package mldocs
 */ 
class mldocsDepartment extends XoopsObject {
    function mldocsDepartment($id = null) 
	{
        $this->initVar('id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('department', XOBJ_DTYPE_TXTBOX, null, false, 35);
        $this->initVar('tagSubject', XOBJ_DTYPE_TXTBOX, null, false, 255);
        $this->initVar('tagDescription', XOBJ_DTYPE_TXTBOX, null, false, 255);
        
        if (isset($id)) {
			if (is_array($id)) {
				$this->assignVars($id);
			}
		} else {
			$this->setNew();
		}
	}
}   //end of class

/**
 * mldocsDepartmentHandler class
 *
 * Department Handler for mldocsDepartment class
 *
 * @author Eric Juden <ericj@epcusa.com> &
 * @access public
 * @package mldocs
 */
 
class mldocsDepartmentHandler extends mldocsBaseObjectHandler {
	/**
     * Name of child class
     * 
     * @var	string
     * @access	private
     */
	var $classname = 'mldocsdepartment';
	
    /**
     * DB table name
     * 
     * @var string
     * @access private
     */
     var $_dbtable = 'mldocs_departments';
	
	/**
     * Constructor
     *
     * @param	object   $db    reference to a xoopsDB object
     */	
	function mldocsDepartmentHandler(&$db)
	{
	    parent::init($db);
    }
            
    function getNameById($id)
    {
        $tmp =& $this->get($id);
        if ($tmp) {
            return $tmp->getVar('department');
        } else {
            return _MLDOCS_TEXT_NO_DEPT;
        }   
    }
    
    function _insertQuery(&$obj)
    {
        // Copy all object vars into local variables
        foreach ($obj->cleanVars as $k => $v) {
            ${$k} = $v;
        }
                
        $sql = sprintf("INSERT INTO %s (id, department,tagSubject, tagDescription) VALUES (%u, %s, %s, %s)",
            $this->_db->prefix($this->_dbtable), $id, $this->_db->quoteString($department), $this->_db->quoteString($tagSubject), $this->_db->quoteString($tagDescription));
            
        return $sql;
        
    }
    
    function _updateQuery(&$obj)
    {
        // Copy all object vars into local variables
        foreach ($obj->cleanVars as $k => $v) {
            ${$k} = $v;
        }
                
        $sql = sprintf("UPDATE %s SET department = %s, tagSubject = %s, tagDescription = %s WHERE id = %u",
                $this->_db->prefix($this->_dbtable), $this->_db->quoteString($department), $this->_db->quoteString($tagSubject), $this->_db->quoteString($tagDescription), $id);
        return $sql;
    }
    
    function _deleteQuery(&$obj)
    {
        $sql = sprintf('DELETE FROM %s WHERE id = %u', $this->_db->prefix($this->_dbtable), $obj->getVar('id'));
        return $sql;
    }
}
?>
