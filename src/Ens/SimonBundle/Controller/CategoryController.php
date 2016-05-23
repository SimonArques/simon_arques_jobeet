<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 23/05/2016
 * Time: 15:22
 */

namespace Ens\SimonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\SimonBundle\Entity\Category;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{

    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('EnsSimonBundle:Category')->findOneBySlug($slug);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $category->setActiveJobs($em->getRepository('EnsSimonBundle:Job')->getActiveJobs($category->getId()));

        return $this->render('EnsSimonBundle:Category:show.html.twig', array(
            'category' => $category,
        ));
    }

}