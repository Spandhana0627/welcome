<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Extension;
use Drupal\Core\Extension\ModuleHandlerInterface;

function welcome_cron() {
  \Drupal::messenger()->addMessage(t("Hello form welcome corn hook!"));  
}

function welcome_form_alter(&$form,FormStateInterface $form_state, $form_id) {
  //\Drupal::messenger()->addMessage(t("form_id of this from is @id: ", ['@id' => $form_id]));

  if ($form_id == "node_article_edit_form") {

    
    $form['actions']['submit']['#value'] = t("Save this awesome article!");
  }
}



//use Drupal\Core\Extension\ModuleHandlerInterface;




function welcome_preprocess_page(&$variables) {

    $moduleHandler = \Drupal::service('module_handler');
  // Invoke the custom hook from the custom_module module.

  $message = $moduleHandler->invokeAll('my_custom_hook');
  // Add the custom message to the template variables.
  $variables['custom_message'] = $message;
  echo $message;
}
?>