<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
     * @Route("/employe/", name="employe_")
     */
class EmployeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('employe/index.html.twig', [
            'controller_name' => 'EmployeController',
        ]);
    }
    
    /**
     * @Route(
     *      path= "employe/{id}",
     *      name="employe_voir",
     *      defaults={"id":99},
     *      requirements = {"id":"\d+"}     *
     *         )     *
     */
    public function voir(int $id){
        return $this->render('employe/voir.html.twig', [
                    'id' => $id, 
        ]);
    }
    
    /**
     * @Route(
     *      "employeV2/{id}",
     *      name="voirV2"    *
     *         )
     * @Template("employe/voir.html.twig")
     */
    public function voirEmployeV2($id){
        return array(
            'id' => $id
        );
    }
    
    /**
     * @Route("employe/{nom}", name="employe", requirements = {"nom":"^[B][a-z]"})
     * @Template("employe/voirNom.html.twig")
     */
    public function voirNom(string $nom){
        return $this->render('employe/voirNom.html.twig', [
                    'nom' => $nom, 
        ]);
    }
}
