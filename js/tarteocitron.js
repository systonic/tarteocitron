(function($, Drupal, drupalSettings) {
  Drupal.behaviors.TarteOCitron = {
    attach: function (context, settings) {

      tarteaucitron.cdn = drupalSettings.tarteocitron.config.cdn;
      tarteaucitronForceLanguage = drupalSettings.tarteocitron.config.language;
      tarteaucitronCustomText = drupalSettings.tarteocitron.config.custom_text;

      tarteaucitron.init({
        "adblocker": drupalSettings.tarteocitron.config.adblocker,
        "hashtag": drupalSettings.tarteocitron.config.hashtag,
        "cookieName": drupalSettings.tarteocitron.config.cookiename,
        "highPrivacy": drupalSettings.tarteocitron.config.highprivacy,
        "orientation": drupalSettings.tarteocitron.config.orientation,
        "removeCredit": drupalSettings.tarteocitron.config.removecredit,
        "showAlertSmall": drupalSettings.tarteocitron.config.showalertsmall,
        "cookieslist": drupalSettings.tarteocitron.config.cookieslist,
        "handleBrowserDNTRequest": drupalSettings.tarteocitron.config.handlebrowserdntrequest,
        "AcceptAllCta": drupalSettings.tarteocitron.config.acceptallcta,
        "moreInfoLink": drupalSettings.tarteocitron.config.moreinfolink,
        "privacyUrl": drupalSettings.tarteocitron.config.privacyurl,
        "useExternalCss": drupalSettings.tarteocitron.config.useexternalcss
      });

      eval(drupalSettings.tarteocitron.config.services);

    }
  };
})(jQuery, Drupal, drupalSettings);
