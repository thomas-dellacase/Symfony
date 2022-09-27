<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticlesRepository;
use App\Entity\Articles;

#[Route('/articles', name: 'app_articles')]
class ArticlesController extends AbstractController
{
    #[Route('/', name: '')]
    public function index(ArticlesRepository $ArticlesRepository): Response
    {
        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
            'articles' => $ArticlesRepository->findAll(),
        ]);
    }
    #[Route('/{id}', name: '_show',methods: ['GET'])]
    public function show(Articles $Article): Response
    {
        return $this->render('articles/show.html.twig', [
            'article' => $Article,
        ]);
    }
}
