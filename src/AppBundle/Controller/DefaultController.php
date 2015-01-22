<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/admin/", name="adminHome")
     */
    public function adminAction()
    {
        return $this->render('default/admin.html.twig');
    }

    /**
     * @Route("/users/", name="users")
     */
    public function displayUsersAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findAll();

        return $this->render('default/users.html.twig', ['users' => $users]);
    }

    /**
     * @Route("/user/{id}", name="user_profile")
     */
    public function showUserAction(User $user)
    {
        return $this->render('default/user_profile.html.twig', ['user' => $user]);
    }
}
