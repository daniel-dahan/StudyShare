<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:loging.html.twig');
    }
    /**
     * @Route("/home", name="home")
     */
    public function homeAction()
    {
<<<<<<< HEAD
        return $this->render('UserBundle:Studyview:index.html.twig');
=======
        return $this->render('UserBundle:Studyview:student.html.twig');
>>>>>>> origin/master
    }
    /**
     * @Route("/student", name="student")
     */
<<<<<<< HEAD
    public function teacherfAction()
    {
        return $this->render('UserBundle:Studyview:index.html.twig');
=======

    public function studentAction()

    {
        return $this->render('UserBundle:Studyview:teac.html.twig');
>>>>>>> origin/master
    }
    /**
     * @Route("/teacher", name="teacher")
     */
<<<<<<< HEAD
    public function studentAction()
    {
        return $this->render('UserBundle:Studyview:index-prof.html.twig');
=======

    public function teachertAction()

    {
        return $this->render('UserBundle:Studyview:teacher.html.twig');
>>>>>>> origin/master
    }
    /**
     * @Route("/post_subject", name="post_subject")
     */
    public function postsubjectAction()
    {
        return $this->render('UserBundle:Studyview:add-cour.html.twig');
    }
<<<<<<< HEAD
}
=======

}
>>>>>>> origin/master
