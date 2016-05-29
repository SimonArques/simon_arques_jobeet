<?php

namespace Ens\SimonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ens\SimonBundle\Entity\Job;
use Ens\SimonBundle\Form\JobType;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{
    /**
     * Lists all Job entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EnsSimonBundle:Category')->getWithJobs();

        foreach($categories as $category)
        {
            $category->setActiveJobs($em->getRepository('EnsSimonBundle:Job')->getActiveJobs($category->getId(),
                $this->container->getParameter('max_jobs_on_homepage')));

            $category->setMoreJobs($em->getRepository('EnsSimonBundle:Job')->countActiveJobs($category->getId())
                - $this->container->getParameter('max_jobs_on_homepage'));
        }

        return $this->render('job/index.html.twig', array(
            'categories' => $categories
        ));
    }

    /**
     * Creates a new Job entity.
     *
     */
    public function newAction()
    {
        $entity = new Job();
        $entity->setType('full-time');
        $form   = $this->createForm(new JobType(), $entity);

        return $this->render('job/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction(Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);

        $em = $this->getDoctrine()->getManager();
        $job = $em->getRepository('EnsSimonBundle:Job')->getActiveJob($job);

        return $this->render('job/show.html.twig', array(
            'job' => $job,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    

    public function editAction($token)
{
    $em = $this->getDoctrine()->getManager();

    $job = $em->getRepository('EnsSimonBundle:Job')->findOneByToken($token);

    if (!$job) {
        throw $this->createNotFoundException('Unable to find Job entity.');
    }

    $deleteForm = $this->createDeleteForm($job);
    $editForm = $this->createForm('Ens\SimonBundle\Form\JobType', $job);


    return $this->render('Job/edit.html.twig', array(
        'job'      => $job,
        'edit_form'   => $editForm->createView(),
        'delete_form' => $deleteForm->createView(),
    ));
}

    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction(Request $request, $token)
    {
        $form = $this->createDeleteForm($token);


        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EnsSimonBundle:Job')->findOneByToken($token);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
    }

    /**
     * Creates a form to delete a Job entity.
     *
     * @param Job $job The Job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm()
            ;
    }

    public function updateAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $job = $em->getRepository('EnsSimonBundle:Job')->findOneByToken($token);
        if (!$job) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }
        $editForm   = $this->createForm(new JobType(), $job);
        $deleteForm = $this->createDeleteForm($token);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em->persist($job);
            $em->flush();
            return $this->redirect($this->generateUrl('job_preview', array(
                'company' => $job->getCompanySlug(),
                'location' => $job->getLocationSlug(),
                'token' => $job->getToken(),
                'position' => $job->getPositionSlug()
            )));
        }
        return $this->render('job/edit.html.twig', array(
            'job'      => $job,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }



    public function createAction(Request $request)
    {
        $job = new Job();
        $form = $this->createForm('Ens\SimonBundle\Form\JobType', $job);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($job);
            $em->flush();
            return $this->redirect($this->generateUrl('job_preview', array(
                'company' => $job->getCompanySlug(),
                'location' => $job->getLocationSlug(),
                'token' => $job->getToken(),
                'position' => $job->getPositionSlug()
            )));
        }
        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form'   => $form->createView()
        ));
    }



    public function previewAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $job = $em->getRepository('EnsSimonBundle:Job')->findOneByToken($token);
        if (!$job) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }
        $deleteForm = $this->createDeleteForm($job->getId());
        $publishForm = $this->createPublishForm($job->getToken());
        $extendForm = $this->createExtendForm($job->getToken());
        return $this->render('job/show.html.twig', array(
            'job'      => $job,
            'delete_form' => $deleteForm->createView(),
            'publish_form' => $publishForm->createView(),
            'extend_form' => $extendForm->createView(),
        ));
    }

    public function publishAction(Request $request, $token)
    {
        $form = $this->createPublishForm($token);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $job = $em->getRepository('EnsSimonBundle:Job')->findOneByToken($token);
            if (!$job) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }
            $job->publish();
            $em->persist($job);
            $em->flush();
            $this->addFlash('notice', 'Your job is now online for 30 days.');
        }
        return $this->redirect($this->generateUrl('job_preview', array(
            'company' => $job->getCompanySlug(),
            'location' => $job->getLocationSlug(),
            'token' => $job->getToken(),
            'position' => $job->getPositionSlug()
        )));
    }

    private function createPublishForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm()
            ;
    }


    public function extendAction(Request $request, $token)
    {
        $form = $this->createExtendForm($token);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $job = $em->getRepository('EnsSimonBundle:Job')->findOneByToken($token);
            if (!$job) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }
            if (!$job->extend()) {
                throw $this->createNotFoundException('Unable to find extend the Job.');
            }
            $em->persist($job);
            $em->flush();
            $this->addFlash('notice', sprintf('Your job validity has been extended until %s.',
                $job->getExpiresAt()->format('m/d/Y')));
        }
        return $this->redirect($this->generateUrl('job_preview', array(
            'company' => $job->getCompanySlug(),
            'location' => $job->getLocationSlug(),
            'token' => $job->getToken(),
            'position' => $job->getPositionSlug()
        )));
    }
    private function createExtendForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm()
            ;
    }

}
