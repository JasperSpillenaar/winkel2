<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findAll();

        return $this->render('default/index.html.twig', [
            'product' => $product
        ]);
    }
}
