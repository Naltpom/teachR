<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class CoursController
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/cours/", name="courscc")
     */
    public function index(Request $request)
    {
        $course = [
            'title' => 'Cours régulier de Philosophie',
            'next' => 'aujourd\'huit',
            'student' => 'Thomas',
            'teacher' => 'Rodolphe',
            'time' => '1h30/jour',
            'hour' => 'A partir de 14h38',
            'days' => 'Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi, Dimanche',
            'from' => 'A partir du samedi 17 octobre'
        ];
        $courses = [$course,$course,$course,$course,$course];
        return new Response($this->twig->render('components/pages/cours.html.twig', ['courses' => $courses]));

    }
}
