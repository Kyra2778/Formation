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
		return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
			'id' => $id
		));
	}

	public function ajouterAction()
	{
		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig', array(
			'nom' => 'Kyra'
		));
	}

	public function modifierAction($id)
	{
		return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array('nom' => 'Kyra'));
	}

	public function supprimerAction($id)
	{
		return $this->render('SdzBlogBundle:Blog:supprimer.html.twig', array('nom' => 'Kyra'));
	}

	public function menuAction()
	{
		$liste = array(
			array('id' => 2, 'titre' => 'Mon dernier weekend !'),
			array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
			array('id' => 9, 'titre' => 'Petit test')
		);

		return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
			'liste_articles' => $liste,
		));
	}
}