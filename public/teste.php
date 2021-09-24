<?php

use Alura\Doctrine\Entity\Ator;
use Alura\Doctrine\Entity\Filme;

require_once 'vendor/autoload.php';

$em = (new \Alura\Doctrine\Helper\EntityManagerCreator())->criaEntityManager();

$ator = new Ator(null, 'Vinicius', 'Dias');
$filme1 = new Filme(null, 'As longas tranças do careca', '2019');
$filme2 = new Filme(null, 'A volta dos que não foram', '2019');

$ator->addFilme($filme1);
$ator->addFilme($filme2);

$em->persist($ator);
$em->persist($filme1);
$em->persist($filme2);

$em->flush();
