<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Message;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class MailerController extends AbstractController
{
    private $validatorInterface;

    public function __construct(ValidatorInterface $validatorInterface)
    {
       $this->validatorInterface = $validatorInterface;
    }

    /**
     * @Route("/contact_form", name="contact_form")
     */
    public function contact_form(Request $request, MailerInterface $mailer)
    {
        $errors = array();
        $userName ='';
        $userEmail = '';
        $userPhone = '';
        if(!$this->addEmail($request->get('user_email_contact'), $this->validatorInterface)){
            $errors[] = 'Некорректный E-mail адрес';
        }
        if (!$this->addName($request->get('user_name_contact'), $this->validatorInterface)){
            $errors[] = 'Имя должно содержать не меньше 2-х символов. Может содержать только русские буквы.';
        }
        if(!$this->addPhone($request->get('user_phone_contact'), $this->validatorInterface)){
            $errors[] = 'Некорректный номер телефона';
        }
        else{
            $userEmail = $request->get('user_email_contact');
            $userName = $request->get('user_name_contact');
            $userPhone = $request->get('user_phone_contact');

        }
        if(0 === count($errors)) {
            $email = (new Email())
                ->from('robot@my-side.online')
                ->to('robot@my-side.online')
                ->subject('Новое сообщение с сайта mirakpp.ru')
                ->html('<p>Сообщение со страницы контакты:</p>
             <p>Имя отправителя: ' . $userName . '</p>
<p>E-mail отправителя: ' . $userEmail . '</p>
<p>Телефон отправителя: ' . $userPhone . '</p>
<p>Салон: ' . $request->get('salon_contact') . '</p>
<p>Сообщение: ' . $request->get('comment_contact') . '</p>'
                );
            $mailer->send($email);

            return new JsonResponse(['success'=>'<p>Спасибо! Ваше сообщение отправлено.</p>']);
        }else{
            return new JsonResponse(['errors'=>$errors]);
        }

    }


    /**
     * @Route("/vakancy_form", name="vakancy_form")
     */
    public function vakancy_form(Request $request, MailerInterface $mailer)
    {
        $errors = array();
        $userName ='';
        $userEmail = '';
        $userPhone = '';
        if(!$this->addEmail($request->get('user_email_contact'), $this->validatorInterface)){
            $errors[] = 'Некорректный E-mail адрес';
        }
        if (!$this->addName($request->get('user_name_contact'), $this->validatorInterface)){
            $errors[] = 'Имя должно содержать не меньше 2-х символов. Может содержать только русские буквы.';
        }
        if(!$this->addPhone($request->get('user_phone_contact'), $this->validatorInterface)){
            $errors[] = 'Некорректный номер телефона';
        }
        else{
            $userEmail = $request->get('user_email_contact');
            $userName = $request->get('user_name_contact');
            $userPhone = $request->get('user_phone_contact');

        }
        if(0 === count($errors)) {
            $email = (new Email())
                ->from('robot@my-side.online')
                ->to('robot@my-side.online')
                ->subject('Новое сообщение с сайта mirakpp.ru')
                ->html('<p>Отклик на вакансию:</p>
             <p>Имя отправителя: ' . $userName . '</p>
<p>E-mail отправителя: ' . $userEmail . '</p>
<p>Телефон отправителя: ' . $userPhone . '</p>
<p>Салон: ' . $request->get('salon_contact') . '</p>
<p>Сообщение: ' . $request->get('comment_contact') . '</p>'
                );
            $mailer->send($email);

            return new JsonResponse(['success'=>'<p>Спасибо! Ваше сообщение отправлено.</p>']);
        }else{
            return new JsonResponse(['errors'=>$errors]);
        }

    }

    /**
     * @Route("/callback_form", name="callback_form")
     */
    public function callback_form(Request $request, MailerInterface $mailer){
        $email = (new Email())
            ->from('robot@my-side.online')
            ->to('robot@my-side.online')
            ->subject('Заказ обратного звонка с сайта mirakpp.ru')
            ->html('<p>Заказ обратного звонка / запись на ремонт</p>
             <p>Имя отправителя: ' . $request->get('name') . '</p>
            <p>Телефон отправителя: ' . $request->get('phone') . '</p>
            <p>Салон: ' . $request->get('salon') . '</p>
            <p>Сообщение: ' . $request->get('message') . '</p>'
            );
        $mailer->send($email);
        return new JsonResponse(['success'=>'<p>Спасибо! Ваше сообщение отправлено.</p>']);
    }

    public function addEmail($email, ValidatorInterface $validator){
        $emailConstraint = array(
            new Assert\Email(),
            new Assert\NotBlank(),
        );
        $errors = $validator->validate(
          $email,
          $emailConstraint
        );

        if(0 === count($errors)){
            return true;
        }else{
            return false;
        }
    }

    public function addName($name, ValidatorInterface $validator){
        $nameConstraint = array(
            new Assert\NotBlank(),
            new Assert\Length(['min' => 2]),
            new Assert\Regex(['pattern' => '/^[а-яёА-ЯЁ]+$/'])
        );

        $errors = $validator->validate(
            $name,
            $nameConstraint
        );
        if(0 === count($errors)){
            return true;
        }else{
            return false;
        }
    }

    public function addPhone($phone, ValidatorInterface $validator){
        $phoneConstraint = array(
          new Assert\NotBlank(),
          new Assert\Regex(['pattern' => '/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/'])
        );
        $errors = $validator->validate(
            $phone,
            $phoneConstraint
        );
        if(0 === count($errors)){
            return true;
        }else{
            return false;
        }
    }

}
