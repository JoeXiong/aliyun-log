<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace AliyunLog\Request;
require_once realpath(dirname(__FILE__) . '/Request.php');

/**
 * 
 *
 * @author log service dev
 */
class Aliyun_Log_Models_GetACLRequest extends Aliyun_Log_Models_Request {
    
    private $aclId;
    /**
     * Aliyun_Log_Models_GetACLRequest Constructor
     *
     */
    public function __construct($aclId=null) {
        $this->aclId = $aclId;
    }
    public function getAclId(){
        return $this->aclId;
    } 
    public function setAclId($aclId){
        $this->aclId = $aclId;
    }
}
