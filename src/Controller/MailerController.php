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
    public function contact_form(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('robot@my-side.online')
            ->to('robot@my-side.online')
            ->subject('Test email')
            ->text('This is my test email')
            ->html('<p>Сообщение со втаницы контакты:</p>
<p>Имя отправителя: '.$_POST['user_name'] .'</p>
<p>E-mail отправителя: '.$_POST['user_email'] .'</p>
<p>Телефон отправителя: '.$_POST['user_phone'] .'</p>
<p>Салон: '.$_POST['salon'] .'</p>
<p>Сообщение: '.$_POST['comment'] .'</p>
');
        $mailer->send($email);

        return new Response('<p>Спасибо! Ваше сообщение отправлено.</p>');
        /*return $this->render('mailer/index.html.twig', [
            'controller_name' => 'MailerController',
        ]);*/
    }
}
