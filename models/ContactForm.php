<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    // public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Nombre',
            'subject' => 'Asunto',
            'body' => 'Mensaje',
            // 'verifyCode' => 'Captcha',
        ];
    }

    /**
     * Envía un correo electrónico a la dirección de correo electrónico
     * especificada utilizando la información recopilada por este modelo.
     * @param string $email La dirección
     * @return bool True si el modelo pasa la validación.
     */
    public function contact($email)
    {
        $content = '<p>Email: ' . $this->email . '</p>';
        $content .= '<p>Nombre: ' . $this->name . '</p>';
        $content .= '<p>Asunto: ' . $this->subject . '</p>';
        $content .= '<p>Cuerpo: ' . $this->body . '</p>';
        if ($this->validate()) {
            Yii::$app->mailer->compose('@app/mail/layouts/html', ['content' => $content])
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();
            return true;
        } else {
            return false;
        }
    }
}
