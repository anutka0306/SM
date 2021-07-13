<?php


namespace App\Widget;


use http\Env\Response;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AntibotExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('antibot', [$this, 'antibot'], ['needs_environment'=> true, 'is_safe' => ['html']]),
        ];
    }

    public function antibot():Response{
        if (session_status() == PHP_SESSION_NONE)
            session_start();

        $_sitekey = "6LcYjnsbAAAAAKIKLkaoxYrnATQYyVR9Oma5TF-i";

        $session_key = "JdisuHDtsuaykdsjuiytf";
        $session_key_social = "jdusiiayBJHsal";
        $referer = "";
        if(!empty($_SERVER['HTTP_REFERRER']))
            $referer = $_SERVER['HTTP_REFERRER'];
        if(empty($referer))
            $referer = getenv("HTTP_REFERER");
        if(!empty($referer) && preg_match('#(t.co|ok.ru|instagram.com|facebook.com|vk.com|https://t.co/|click.my.mail.ru)#i', $referer)){
            $_SESSION[$session_key_social] = true;
        }

        if(!empty($_SESSION[$session_key_social])){
            if(empty($_SESSION[$session_key]) && empty($_REQUEST['g-recaptcha-response'])){ // если в первый раз
                return new Response(
                    '<html>
      <head>
        <title>QUALITY MOTORS reCaptcha</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      </head>
      <body style="width: 100%;text-align: center;margin: 0;padding: 14px 0;">
        <img src="https://www.qmotors.ru/static_v2/img/logo.svg" alt="logo" style="width: 100%; max-width: 300px;">
        <h1>Обнаружены подозрительные действия</h1>
        <p>Пройдите reCaptcha, чтобы перейти на наш сайт QUALITY MOTORS</p>
        <form action="" method="POST" style="display: inline-block;">
          <div class="g-recaptcha" data-sitekey="'.$_sitekey.'"></div>
          <br/>
          <input type="submit" value="Войти" style="background-color: #a0ca4c;color: #fff;border-radius: 50px;text-align: center;border: none;padding: 10px;width: 100%;outline: none;font-weight: bold;font-size: 18px;">
        </form>
      </body>
    </html>'
                );
                /*echo '<html>
      <head>
        <title>QUALITY MOTORS reCaptcha</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      </head>
      <body style="width: 100%;text-align: center;margin: 0;padding: 14px 0;">
        <img src="https://www.qmotors.ru/static_v2/img/logo.svg" alt="logo" style="width: 100%; max-width: 300px;">
        <h1>Обнаружены подозрительные действия</h1>
        <p>Пройдите reCaptcha, чтобы перейти на наш сайт QUALITY MOTORS</p>
        <form action="" method="POST" style="display: inline-block;">
          <div class="g-recaptcha" data-sitekey="'.$_sitekey.'"></div>
          <br/>
          <input type="submit" value="Войти" style="background-color: #a0ca4c;color: #fff;border-radius: 50px;text-align: center;border: none;padding: 10px;width: 100%;outline: none;font-weight: bold;font-size: 18px;">
        </form>
      </body>
    </html>';*/
                /*exit;*/
            }elseif(empty($_SESSION[$session_key]) && !empty($_REQUEST['g-recaptcha-response'])){ // Если получен код капчи
                $curl = curl_init();
                $response = $_REQUEST["g-recaptcha-response"];
                $_params = [
                    "site_name" => "my-side.online",
                    "response" => $response,
                ];

                curl_setopt_array($curl, array(
                    //CURLOPT_URL => 'https://admin.qrenta.ru/api/recaptcha/recapt_v2',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => json_encode($_params, 256),
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                    ),
                ));
                $response = curl_exec($curl);
                $response = json_decode($response, true);
                curl_close($curl);
                if(!empty($response['data']['check_result'])){ // if true
                    $_SESSION[$session_key] = true;
                }else{ // if false
                    $_SESSION[$session_key] = false;
                    return $this->redirectToRout('home');
                    //header('Location: '.$_SERVER['REQUEST_URI']);
                }
            }
        }
    }

}