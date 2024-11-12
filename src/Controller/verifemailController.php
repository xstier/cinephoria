<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class verifemailController extends AbstractController
{
    #[Route('/testmail', name: 'tesemail')]
    public function sendEmail(MailerInterface $mailer): Response
    {
        $email = new Email();
        $email
            ->from('moi@cinephoria.com')
            ->to('jean@gmail.com')
            ->subject('Bienvenue sur Cinephoria !')
            ->text('Bienvenue chez nous');

        $mailer->send($email);

        return new Response("email envoyé");
    }
}
