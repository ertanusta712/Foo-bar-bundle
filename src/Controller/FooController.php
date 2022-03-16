<?php

namespace FooBar\Controller;
use Doctrine\ORM\EntityManagerInterface;
use FooBar\Entity\BarEntity;
use FooBar\Entity\FooEntity;
use FooBar\Service\ServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FooController extends AbstractController
{

    public function index(ServiceInterface $fooService){
        dd($fooService->fooBar());
    }

    public function store(EntityManagerInterface $entityManager){
        $entity =  new FooEntity();
        $entityManager->persist($entity);
        $entityManager->flush();
        dd(self::class);
    }
}