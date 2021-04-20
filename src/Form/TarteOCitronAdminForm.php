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

    $form['options']['tarteocitron_privacyurl'] = [
      '#type' => 'textfield',
      '#title' => $this->t('privacyUrl'),
      '#description' => $this->t('Privacy policy url'),
      '#default_value' => $config->get('tarteocitron_privacyurl'),
    ];

    $form['options']['tarteocitron_hashtag'] = [
      '#type' => 'textfield',
      '#title' => $this->t('hashtag'),
      '#description' => $this->t('Open the panel with this hashtag'),
      '#default_value' => $config->get('tarteocitron_hashtag'),
    ];

    $form['options']['tarteocitron_cookiename'] = [
      '#type' => 'textfield',
      '#title' => $this->t('cookieName'),
      '#description' => $this->t('Cookie name'),
      '#default_value' => $config->get('tarteocitron_cookiename'),
    ];

    $form['options']['tarteocitron_orientation'] = [
      '#type' => 'select',
      '#title' => $this->t('orientation'),
      '#description' => $this->t('Banner position'),
      '#options' => [
        'top' => $this->t('Top'),
        'middle' => $this->t('Middle'),
        'bottom' => $this->t('Bottom'),
      ],
      '#default_value' => $config->get('tarteocitron_orientation'),
    ];

    $form['options']['tarteocitron_showalertsmall'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('showAlertSmall'),
      '#description' => $this->t('Show the small banner on bottom right'),
      '#default_value' => $config->get('tarteocitron_showalertsmall'),
    ];

    $form['options']['tarteocitron_cookieslist'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('cookieslist'),
      '#description' => $this->t('Show the cookie list'),
      '#default_value' => $config->get('tarteocitron_cookieslist'),
    ];

    $form['options']['tarteocitron_closepopup'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('closePopup'),
      '#description' => $this->t('Show a close X on the banner'),
      '#default_value' => $config->get('tarteocitron_closepopup'),
    ];

    $form['options']['tarteocitron_showicon'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('showIcon'),
      '#description' => $this->t('Show cookie icon to manage cookies'),
      '#default_value' => $config->get('tarteocitron_showicon'),
    ];

    $form['options']['tarteocitron_iconposition'] = [
      '#type' => 'select',
      '#title' => $this->t('iconPosition'),
      '#description' => $this->t('Icon position'),
      '#options' => [
        'BottomRight' => $this->t('BottomRight'),
        'BottomLeft' => $this->t('BottomLeft'),
        'TopRight' => $this->t('TopRight'),
        'TopLeft' => $this->t('TopLeft'),
      ],
      '#default_value' => $config->get('tarteocitron_iconposition'),
    ];

    $form['options']['tarteocitron_adblocker'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('adblocker'),
      '#description' => $this->t('Show a Warning if an adblocker is detected'),
      '#default_value' => $config->get('tarteocitron_adblocker'),
    ];

    $form['options']['tarteocitron_denyallcta'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('DenyAllCta'),
      '#description' => $this->t('Show the deny all button'),
      '#default_value' => $config->get('tarteocitron_denyallcta'),
    ];

    $form['options']['tarteocitron_acceptallcta'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('AcceptAllCta'),
      '#description' => $this->t('Show the accept all button when highPrivacy on'),
      '#default_value' => $config->get('tarteocitron_acceptallcta'),
    ];

    $form['options']['tarteocitron_highprivacy'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('highPrivacy'),
      '#description' => $this->t('HIGHLY RECOMMANDED Disable auto consent'),
      '#default_value' => $config->get('tarteocitron_highprivacy'),
    ];

    $form['options']['tarteocitron_handlebrowserdntrequest'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('handleBrowserDNTRequest'),
      '#description' => $this->t('If Do Not Track == 1, disallow all'),
      '#default_value' => $config->get('tarteocitron_handlebrowserdntrequest'),
    ];

    $form['options']['tarteocitron_removecredit'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('removeCredit'),
      '#description' => $this->t('Remove credit link'),
      '#default_value' => $config->get('tarteocitron_removecredit'),
    ];

    $form['options']['tarteocitron_moreinfolink'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('moreInfoLink'),
      '#description' => $this->t('Show more info link'),
      '#default_value' => $config->get('tarteocitron_moreinfolink'),
    ];

    $form['options']['tarteocitron_useexternalcss'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('useExternalCss'),
      '#description' => $this->t('If false, the tarteaucitron.css file will be loaded'),
      '#default_value' => $config->get('tarteocitron_useexternalcss'),
    ];

    $form['options']['tarteocitron_useexternaljs'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('useExternalJs'),
      '#description' => $this->t('If false, the tarteaucitron.js file will be loaded'),
      '#default_value' => $config->get('tarteocitron_useexternaljs'),
    ];

    $form['options']['tarteocitron_readmorelink'] = [
      '#type' => 'textfield',
      '#title' => $this->t('readmoreLink'),
      '#description' => $this->t('Change the default readmore link'),
      '#default_value' => $config->get('tarteocitron_readmorelink'),
    ];

    $form['options']['tarteocitron_mandatory'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('mandatory'),
      '#description' => $this->t('Show a message about mandatory cookies'),
      '#default_value' => $config->get('tarteocitron_mandatory'),
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
