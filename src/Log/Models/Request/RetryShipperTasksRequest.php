<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace AliyunLog\Request;
require_once realpath(dirname(__FILE__) . '/Request.php');

class Aliyun_Log_Models_RetryShipperTasksRequest extends Aliyun_Log_Models_Request{
    private $shipperName;
    private $logStore;
    private $taskLists;

    /**
     * @return mixed
     */
    public function getTaskLists()
    {
        return $this->taskLists;
    }

    /**
     * @param mixed $taskLists
     */
    public function setTaskLists($taskLists)
    {
        $this->taskLists = $taskLists;
    }

    /**
     * @return mixed
     */
    public function getLogStore()
    {
        return $this->logStore;
    }

    /**
     * @param mixed $logStore
     */
    public function setLogStore($logStore)
    {
        $this->logStore = $logStore;
    }


    /**
     * @return mixed
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * @param mixed $shipperName
     */
    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
    }

    /**
     * Aliyun_Log_Models_CreateShipperRequest Constructor
     *
     */
    public function __construct($project) {
        parent::__construct ( $project );
    }
}