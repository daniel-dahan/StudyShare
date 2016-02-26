<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\coursupload;
use UserBundle\Form\UploadType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UploadController extends Controller
{

    /**
     * @Route("/manage-cour", name="manage-cour")
     * @Template()
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $lecon = $em->getRepository("UserBundle:coursupload")->findAll();
        return $this->render('UserBundle:Studyview:manage-cour.html.twig', array(
        'lecon' => $lecon,
        ));
    }

    /**
     * @Route("/post_subject", name="post_subject")
     *
     */

    public function post_subjectAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $a = new coursupload();
        $form = $this->createForm(new UploadType(), $a);

        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $a = $form->getData();
                $a->upload();
                $em->persist($a);
                $em->flush();

                return $this->redirect($this->generateUrl("manage-cour"));
            }
        }

        return $this->render('UserBundle:Studyview:add-cour.html.twig', array(
            'form' => $form->createView(),

        ));
    }

    /**
     * @Route("/manage-cour", name="manage")
     */
    public function manageAction()
    {
        return $this->render('UserBundle:Studyview:manage-cour.html.twig');
    }

    /**
     * @Route("/edit_cour", name="edit_cour")
     * @Template()
     */
    public function edit_courAction($id)
    {
        return $this->render('UserBundle:Studyview:modify-cour.html.twig');
    }

    /**
     * @Route("/remove/{id}", name="remove")
     * @Template()
     */
    public function removeAction($id)
    {
        $cours = $this->getDoctrine()->getRepository(coursupload::class)->find($id);
        $this->getDoctrine()->getManager()->remove($cours);
        $this->getDoctrine()->getManager()->flush();

        if (file_exists($this->get('kernel')->getRootDir().'/../web/upload/documents/'
            .$cours->getUrl())) {
            unlink($this->get('kernel')->getRootDir().'/../web/upload/documents/'.$cours->getUrl());

            return $this->redirect($this->generateUrl("manage-cour"));
        }
    }

}