<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class MailerController extends AbstractController
{
    /**
     * @Route("/contact_form", name="contact_form")
     */
    public function contact_form(Request $request, MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('robot@my-side.online')
            ->to('robot@my-side.online')
            ->subject('Test email')
            ->text('This is my test email')
            ->html('<p>Сообщение со втаницы контакты:</p>
             <p>Имя отправителя: '.$request->get('user_name_contact') .'</p>
<p>E-mail отправителя: '.$request->get('user_email_contact') .'</p>
<p>Телефон отправителя: '.$request->get('user_phone_contact') .'</p>
<p>Салон: '.$request->get('salon_contact') .'</p>
<p>Сообщение: '.$request->get('comment_contact') .'</p>'
            );
        $mailer->send($email);

        return new Response('<p>Спасибо! Ваше сообщение отправлено.</p>');
        /*return $this->render('mailer/index.html.twig', [
            'controller_name' => 'MailerController',
        ]);*/
    }
}
