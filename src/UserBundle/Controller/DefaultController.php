<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Form\UploadType;
use UserBundle\Entity\coursupload;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function logInAction()
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
     * @Route("/subject_add", name="subject_add")
     */
    public function subjectAddAction()
    {
        return $this->render('UserBundle:Studyview:add-cour.html.twig');
    }

    /**
     * @Route("/subject_manage", name="subject_manage")
     */
    public function subjectManageAction()
    {
        return $this->render('UserBundle:Studyview:manage-cour.html.twig');
    }

    /**
     * @Route("/pwd_forgotten", name="pwd_forgotten")
     */
    public function pwdForgottenAction()
    {
        return $this->render('UserBundle:Studyview:password-forgotten.html.twig');
    }

    /**
     * @Route("/pwd_change", name="pwd_change")
     */
    public function pwdChangeAction()
    {
        return $this->render('UserBundle:Studyview:modify-password.html.twig');
    }

    /**
     * @Route("/subject", name="subject")
     */
    public function subjectAction()
    {
        return $this->render('UserBundle:Studyview:view-cour.html.twig');
    }

    /**
     * @Route("/register{admin}", name="register")
     */
    public function registerAction($admin)
    {
        return $this->render('UserBundle:Form:RegistrationFormType.php');
    }

    /**
     * @Route("/subject_list", name="subject_list")
     */
    public function subjectListAction()
    {
        return $this->render('UserBundle:Studyview:list-cours.html.twig');
    }

    /**
     * @Route("/subject_modify/{id}", name="subject_modify")
     */
    public function subjectModifyAction($id)
    {
        $cours = $this->getDoctrine()->getRepository(coursupload::class)->find($id);

        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new UploadType(), $cours);

        $request = $this->getRequest();
        if($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $a = $form->getData();
                $a->upload();
                $em->persist($a);
                $em->flush();

                return $this->redirect($this->generateUrl("manage-cour"));
            }
        }
        return $this->render('UserBundle:Studyview:modify-cour.html.twig', array(
            'form' =>$form->createView(),
        ));
    }
    
}