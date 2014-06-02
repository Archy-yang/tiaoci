<?php

namespace Acme\TiaociBundle\Entity;

use Acme\TiaociBundle\Entity\TimeTrait;

class Article
{
    use TimeTrait;

    protected $id;

    protected $title;

    protected $content;
    
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }
    
    public function getContent()
    {
        return $this->content;
    }
}
