<?php

    require 'src/PHPMailer.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class ContactForm
    {
        private $name;
        private $email;
        private $message;

        public function setData($name, $email, $message) {
            $this->name = $name;
            $this->email = $email;
            $this->message = $message;
        }

        public function validForm() {
            if (strlen($this->name) < 3)
                return "Ім'я занадто коротке";
            else if (strlen($this->email) < 3)
                return "Email занадто короткий";
            else if (strlen($this->message) < 10)
                return "Повідомлення занадто коротке";
            else
                return "Верно";
        }

        public function sendEmail() {
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host       = 'smtp.poczta.onet.pl';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'itprogerhw@op.pl';
                $mail->Password   = 'ItProger.c0m';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = 465;

                $mail->setFrom($this->email, $this->name);
                $mail->addAddress('itprogerhw@op.pl');

                $mail->Subject = 'Subject: Повідомлення було відправлено';
                $mail->Body = 'Ім\'я: ' . $this->name . '. Повідомлення: ' . $this->message;


                $mail->send();
                echo 'Письмо успешно отправлено';
            } catch (Exception $e) {
                echo "Ошибка при отправке письма: {$mail->ErrorInfo}";
            }
        }
    }
