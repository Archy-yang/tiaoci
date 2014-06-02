<?php

namespace Acme\TiaociBundle\Controller;

use Acme\TiaociBundle\Entity\Article;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}

