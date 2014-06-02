<?php

namespace Acme\TiaociBundle\Entity;

trait TimeTrait
{
    protected $createTime;

    protected $updateTime;

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    
        return $this;
    }
    
    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    
        return $this;
    }
    
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}

