<?php

use Website\Controller\Action;

class ContactController extends Action
{
    public function contactAction()
    {
      $this->enableLayout();
    }

    public function sendmailAction() {
      $data = [];
      $data['status'] = true ;
      $validating = $this->validate_mail();
      if(count($validating) > 0) {
        $data["status"] = false;
        $data["message"] = "Validation error";
        $data["error"] = $validating;
        $this->_helper->json($data);
      }
      $firstname = $this->getParam("fs-name");
      $lastname = $this->getParam("ls-name");
      $email = $this->getParam("ur-mail");
      $subject = "Question";
      $message = $this->getParam("message_area");
      $mail = new \Pimcore\Mail();
      $mail->addTo("ferdireza95@gmail.com");
      $mail->setSubject($subject);
      $mail->setBodyText($message);
      $mail->send();
      $this->disableViewAutoRender();
    }

    private function validate_mail() {
      $error_arr = [];
  
      $firstname = $this->getParam("fs-name");
      $lastname = $this->getParam("ls-name");
      $email = $this->getParam("ur-mail");
      $messages = $this->getParam("message_area");

      if($firstname == '') {
        $error_arr["fs-name"]= "First Name required...";

      }

      if($lastname == '') {
        $error_arr["ls-name"] = "Last Name required...";

      }

      if($email == '') {
        $error_arr["ur-mail"] = "Email required...";

      } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_arr["ur-mail"] = "Email format not valid...";

      }

      if($messages == '') {
          $error_arr["message_area"] = "Messages required...";

      }
      return $error_arr;
    }
}
?>
