<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }
    /**
     * @Route("/home", name="home")
     */
    public function homeAction()
    {
        return $this->render('UserBundle:Studyview:index.html.twig');
    }
    /**
     * @Route("/student", name="student")
     */
    public function teacherfAction()
    {
        return $this->render('UserBundle:Studyview:index.html.twig');
    }
    /**
     * @Route("/teacher", name="teacher")
     */
    public function studentAction()
    {
        return $this->render('UserBundle:Studyview:index-prof.html.twig');
    }
    /**
     * @Route("/post_subject", name="post_subject")
     */
    public function postsubjectAction()
    {
        return $this->render('UserBundle:Studyview:add-cour.html.twig');
    }

}
