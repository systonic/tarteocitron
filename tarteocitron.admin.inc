<?php
/**
 * @file
 * Add the tarteaucitron.js service.
 */

/**
 * .
 */
function tarteocitron_admin_form($form, &$form_state) {

  $form['tarteocitron_options'] = array(
    '#type' => 'fieldset',
    '#title' => t('Options'),
  );

  //"privacyUrl": "",
  $form['tarteocitron_options']['tarteocitron_privacyurl'] = array(
    '#type' => 'textfield',
    '#title' => t('privacyUrl'),
    '#default_value' => variable_get('tarteocitron_privacyurl', ''),
    '#description' => t('Privacy policy url'),
  );

  //"hashtag": '#tarteaucitron',
  $form['tarteocitron_options']['tarteocitron_hashtag'] = array(
    '#type' => 'textfield',
    '#title' => t('hashtag'),
    '#default_value' => variable_get('tarteocitron_hashtag', '#tarteaucitron'),
    '#description' => t('Open the panel with this hashtag'),
  );

  //"cookieName": 'tarteaucitron',
  $form['tarteocitron_options']['tarteocitron_cookiename'] = array(
    '#type' => 'textfield',
    '#title' => t('cookieName'),
    '#default_value' => variable_get('tarteocitron_cookiename', 'tarteaucitron'),
    '#description' => t('Cookie name'),
  );

  //"orientation": "bottom",
  $form['tarteocitron_options']['tarteocitron_orientation'] = array(
    '#type' => 'select',
    '#title' => t('orientation'),
    '#default_value' => variable_get('tarteocitron_orientation', 'bottom'),
    '#description' => t('Banner position'),
    '#options' => array(
      'top' => 'Top',
      'middle' => 'Middle',
      'bottom' => 'Bottom',
    ),
  );

  //"showAlertSmall": false,
  $form['tarteocitron_options']['tarteocitron_showalertsmall'] = array(
    '#type' => 'checkbox',
    '#title' => t('showAlertSmall'),
    '#default_value' => variable_get('tarteocitron_showalertsmall', 0),
    '#description' => t('Show the small banner on bottom right'),
  );

  //"cookieslist": false,
  $form['tarteocitron_options']['tarteocitron_cookieslist'] = array(
    '#type' => 'checkbox',
    '#title' => t('cookieslist'),
    '#default_value' => variable_get('tarteocitron_cookieslist', 0),
    '#description' => t('Show the cookie list'),
  );

  //"closePopup": false
  $form['tarteocitron_options']['tarteocitron_closepopup'] = array(
    '#type' => 'checkbox',
    '#title' => t('closePopup'),
    '#default_value' => variable_get('tarteocitron_closepopup', 0),
    '#description' => t('Show a close X on the banner'),
  );

  //"showIcon": false
  $form['tarteocitron_options']['tarteocitron_showicon'] = array(
    '#type' => 'checkbox',
    '#title' => t('showIcon'),
    '#default_value' => variable_get('tarteocitron_showicon', 0),
    '#description' => t('Show cookie icon to manage cookies'),
  );

  //"iconPosition": "BottomRight",
  $form['tarteocitron_options']['tarteocitron_iconposition'] = array(
    '#type' => 'select',
    '#title' => t('iconPosition'),
    '#default_value' => variable_get('tarteocitron_iconposition', 'BottomRight'),
    '#description' => t('Icon position'),
    '#options' => array(
      'BottomRight' => 'BottomRight',
      'BottomLeft' => 'BottomLeft',
      'TopRight' => 'TopRight',
      'TopLeft' => 'TopLeft',
    ),
  );

  //"adblocker": false,
  $form['tarteocitron_options']['tarteocitron_adblocker'] = array(
    '#type' => 'checkbox',
    '#title' => t('adblocker'),
    '#default_value' => variable_get('tarteocitron_adblocker', 0),
    '#description' => t('Show a Warning if an adblocker is detected'),
  );

  //"DenyAllCta" : true,
  $form['tarteocitron_options']['tarteocitron_denyallcta'] = array(
    '#type' => 'checkbox',
    '#title' => t('DenyAllCta'),
    '#default_value' => variable_get('tarteocitron_denyallcta', 1),
    '#description' => t('Show the deny all button'),
  );

  //"AcceptAllCta" : true,
  $form['tarteocitron_options']['tarteocitron_acceptallcta'] = array(
    '#type' => 'checkbox',
    '#title' => t('AcceptAllCta'),
    '#default_value' => variable_get('tarteocitron_acceptallcta', 1),
    '#description' => t('Show the accept all button when highPrivacy on'),
  );

  //"highPrivacy": true,
  $form['tarteocitron_options']['tarteocitron_highprivacy'] = array(
    '#type' => 'checkbox',
    '#title' => t('highPrivacy'),
    '#default_value' => variable_get('tarteocitron_highprivacy', 1),
    '#description' => t('HIGHLY RECOMMANDED Disable auto consent'),
  );

  //"handleBrowserDNTRequest": false,
  $form['tarteocitron_options']['tarteocitron_handlebrowserdntrequest'] = array(
    '#type' => 'checkbox',
    '#title' => t('handleBrowserDNTRequest'),
    '#default_value' => variable_get('tarteocitron_handlebrowserdntrequest', 0),
    '#description' => t('If Do Not Track == 1, disallow all'),
  );

  //"removeCredit": false,
  $form['tarteocitron_options']['tarteocitron_removecredit'] = array(
    '#type' => 'checkbox',
    '#title' => t('removeCredit'),
    '#default_value' => variable_get('tarteocitron_removecredit', 0),
    '#description' => t('Remove credit link'),
  );

  //"moreInfoLink": true,
  $form['tarteocitron_options']['tarteocitron_moreinfolink'] = array(
    '#type' => 'checkbox',
    '#title' => t('moreInfoLink'),
    '#default_value' => variable_get('tarteocitron_moreinfolink', 1),
    '#description' => t('Show more info link'),
  );

  //"useExternalCss": false
  $form['tarteocitron_options']['tarteocitron_useexternalcss'] = array(
    '#type' => 'checkbox',
    '#title' => t('useExternalCss'),
    '#default_value' => variable_get('tarteocitron_useexternalcss', 0),
    '#description' => t('If false, the tarteaucitron.css file will be loaded'),
  );

  //"useExternalJs": false
  $form['tarteocitron_options']['tarteocitron_useexternaljs'] = array(
    '#type' => 'checkbox',
    '#title' => t('useExternalJs'),
    '#default_value' => variable_get('tarteocitron_useexternaljs', 0),
    '#description' => t('If false, the tarteaucitron.js file will be loaded'),
  );

  //"readmoreLink": "",
  $form['tarteocitron_options']['tarteocitron_readmorelink'] = array(
    '#type' => 'textfield',
    '#title' => t('readmoreLink'),
    '#default_value' => variable_get('tarteocitron_readmoreLink', ''),
    '#description' => t('Change the default readmore link'),
  );

  //"mandatory": true
  $form['tarteocitron_options']['tarteocitron_mandatory'] = array(
    '#type' => 'checkbox',
    '#title' => t('mandatory'),
    '#default_value' => variable_get('tarteocitron_mandatory', 1),
    '#description' => t('Show a message about mandatory cookies'),
  );

  //"CustomText": "",
  $form['tarteocitron_customtext'] = array(
    '#type' => 'textarea',
    '#title' => t('CustomText'),
    '#default_value' => variable_get('tarteocitron_customtext', ''),
    '#description' => t('<a href="@url">@url</a> for description', array('@url' => 'https://github.com/AmauriC/tarteaucitron.js/blob/master/lang/tarteaucitron.en.js')),
    '#rows' => 10,
  );

  //"Services": "",
  $form['tarteocitron_services'] = array(
    '#type' => 'textarea',
    '#title' => t('Services'),
    '#default_value' => variable_get('tarteocitron_services', ''),
    '#description' => t('<a href="@url">@url</a> for list of services', array('@url' => 'https://opt-out.ferank.eu/fr/install/')),
    '#rows' => 15,
  );

  return system_settings_form($form);
}
