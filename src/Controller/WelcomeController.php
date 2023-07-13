<?php
namespace Drupal\welcome\Controller;

class WelcomeController
{
    public function Welcome()
    {
        $element = array('#markup'=>'Welcome to Drupal Page');
        return $element;
    }
}
?>
