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
        return $this->render('UserBundle:Studyview:login.html.twig');
    }

    /**
     * @Route("/student", name="student")
     */
    public function studentAction()

    {
        return $this->render('UserBundle:Studyview:student.html.twig');
    }

    /**
     * @Route("/teacher", name="teacher")
     */
    public function teacherAction()

    {
        return $this->render('UserBundle:Studyview:teacher.html.twig');
    }

    /**
     * @Route("/post_subject", name="post_subject")
     */
    public function postSubjectAction()
    {
        return $this->render('UserBundle:Studyview:add-cour.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction($admin)
    {
        return $this->render('UserBundle:Studyview:add-cour.html.twig');
    }

    /**
     * @Route("/register/{admin}", name="register")
     */
    public function addCommAction()
    {
        return $this->render('UserBundle:Studyview:add-cour.html.twig');
    }
}