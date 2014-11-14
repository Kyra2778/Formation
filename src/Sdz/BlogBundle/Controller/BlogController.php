<?php
/*
 * @author Nathalie De Sousa <nathalie.de.sousa78@gmail.com>
 */

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
	public function indexAction()
	{
		return $this->render('SdzBlogBundle:Blog:index.html.twig', array('nom' => 'Kyra'));
	}

	public function voirAction($id)
	{
		$request = $this->getRequest();
		$tag = $request->query->get('tag');
		
		return new Response("Affichage de l'article d'id : " .$id. " dont le tag est " .$tag);
	}

	public function ajouterAction()
	{
		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig', array('nom' => 'Kyra'));
	}

	public function modifierAction($id)
	{
		return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array('nom' => 'Kyra'));
	}

	public function supprimerAction($id)
	{
		return $this->render('SdzBlogBundle:Blog:supprimer.html.twig', array('nom' => 'Kyra'));
	}
}