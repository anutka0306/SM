<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerController extends AbstractController
{
    /**
     * @Route("/contact_form", name="contact_form")
     */
    public function contact_form(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('anutka0306@mail.ru')
            ->to('robot@my-side.online')
            ->subject('Test email')
            ->text('This is my test email')
            ->html('<p>Hello here</p>');
        $mailer->send($email);
        /*return $this->render('mailer/index.html.twig', [
            'controller_name' => 'MailerController',
        ]);*/
    }
}
