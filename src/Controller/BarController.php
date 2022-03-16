<?php

namespace FooBar\Controller;

use Doctrine\ORM\EntityManagerInterface;
use FooBar\Entity\BarEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BarController extends AbstractController
{
        public function index(){

        }

        public function store(EntityManagerInterface $entityManager){
            $entity =  new BarEntity();
            $entityManager->persist($entity);
            $entityManager->flush();
            dd(self::class);
        }
}