<?php

namespace Drupal\tarteocitron\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class TarteOCitronAdminForm.
 */
class TarteOCitronAdminForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'tarteocitron_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['tarteocitron.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('tarteocitron.settings');

    $form['options'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Options'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];

    $form['options']['tarteocitron_adblocker'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('adblocker'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_adblocker'),
    ];

    $form['options']['tarteocitron_hashtag'] = [
      '#type' => 'textfield',
      '#title' => $this->t('hashtag'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_hashtag'),
    ];

    $form['options']['tarteocitron_cookiename'] = [
      '#type' => 'textfield',
      '#title' => $this->t('cookieName'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_cookiename'),
    ];

    $form['options']['tarteocitron_highprivacy'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('highPrivacy'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_highprivacy'),
    ];

    $form['options']['tarteocitron_orientation'] = [
      '#type' => 'select',
      '#title' => $this->t('orientation'),
      //'#description' => $this->t(''),
      '#options' => [
        'top' => $this->t('Top'),
        'bottom' => $this->t('Bottom'),
      ],
      '#default_value' => $config->get('tarteocitron_orientation'),
    ];

    $form['options']['tarteocitron_removecredit'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('removeCredit'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_removecredit'),
    ];

    $form['options']['tarteocitron_showalertsmall'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('showAlertSmall'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_showalertsmall'),
    ];

    $form['options']['tarteocitron_cookieslist'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('cookieslist'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_cookieslist'),
    ];

    $form['options']['tarteocitron_handlebrowserdntrequest'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('handleBrowserDNTRequest'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_handlebrowserdntrequest'),
    ];

    $form['options']['tarteocitron_acceptallcta'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('AcceptAllCta'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_acceptallcta'),
    ];

    $form['options']['tarteocitron_moreinfolink'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('moreInfoLink'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_moreinfolink'),
    ];

    $form['options']['tarteocitron_privacyurl'] = [
      '#type' => 'textfield',
      '#title' => $this->t('privacyUrl'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_privacyurl'),
    ];

    $form['options']['tarteocitron_useexternalcss'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('useExternalCss'),
      //'#description' => $this->t(''),
      '#default_value' => $config->get('tarteocitron_useexternalcss'),
    ];

    $form['tarteocitron_customtext'] = [
      '#type' => 'textarea',
      '#title' => $this->t('CustomText'),
      '#description' => $this->t('<a href="@url">@url</a> for description', array('@url' => 'https://github.com/AmauriC/tarteaucitron.js/blob/master/lang/tarteaucitron.en.js')),
      '#rows' => 10,
      '#default_value' => $config->get('tarteocitron_customtext'),
    ];

    $form['tarteocitron_services'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Services'),
      '#description' => $this->t('<a href="@url">@url</a> for list of services', array('@url' => 'https://opt-out.ferank.eu/fr/install/')),
      '#rows' => 10,
      '#default_value' => $config->get('tarteocitron_services'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $config = $this->config('tarteocitron.settings');

    foreach ($form_state->getValues() as $key => $value) {
      if (strpos($key, 'tarteocitron_') === 0) {
        $config->set($key, $value);
      }
    }

    $config->save();
  }

}
