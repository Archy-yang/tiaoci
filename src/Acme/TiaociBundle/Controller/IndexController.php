<?php

namespace Acme\TiaociBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @author yangqi
 */
class IndexController
{
    /**
     * @Template()
     */
    public function indexAction() 
    {
        return array();
    }
}
