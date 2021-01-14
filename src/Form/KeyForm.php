<?php
/**
 * @file
 * Contains \Drupal\custom_form_in_block\Form\KeyForm.
 */
namespace Drupal\custom_form_in_block\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class keyForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'key_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name:'),
      '#required' => TRUE,
    );

    $form['mail'] = array(
      '#type' => 'email',
      '#title' => t('Email ID:'),
      '#required' => TRUE,
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    drupal_set_message($this->t('Hello @name ,Your @email is being submitted!', array('@name' => $form_state->getValue('name'),'@email' => $form_state->getValue('mail'))));

  }
}