(function($, Drupal, drupalSettings) {
  Drupal.behaviors.TarteOCitron = {
    attach: function (context, settings) {

      tarteaucitron.cdn = drupalSettings.tarteocitron.config.cdn;
      tarteaucitronForceLanguage = drupalSettings.tarteocitron.config.language;
      tarteaucitronCustomText = JSON.parse(drupalSettings.tarteocitron.config.custom_text);

      tarteaucitron.init({
        "privacyUrl": drupalSettings.tarteocitron.config.privacyurl,
        "bodyPosition": drupalSettings.tarteocitron.config.bodyposition,
        "hashtag": drupalSettings.tarteocitron.config.hashtag,
        "cookieName": drupalSettings.tarteocitron.config.cookiename,
        "orientation": drupalSettings.tarteocitron.config.orientation,
        "groupServices": drupalSettings.tarteocitron.config.groupservices,
        "showDetailsOnClick": drupalSettings.tarteocitron.config.showdetailsonclick,
        "serviceDefaultState": drupalSettings.tarteocitron.config.servicedefaultstate,
        "showAlertSmall": drupalSettings.tarteocitron.config.showalertsmall,
        "cookieslist": drupalSettings.tarteocitron.config.cookieslist,
        "closePopup": drupalSettings.tarteocitron.config.closepopup,
        "showIcon": drupalSettings.tarteocitron.config.showicon,
        "iconPosition": drupalSettings.tarteocitron.config.iconposition,
        "adblocker": drupalSettings.tarteocitron.config.adblocker,
        "DenyAllCta": drupalSettings.tarteocitron.config.denyallcta,
        "AcceptAllCta": drupalSettings.tarteocitron.config.acceptallcta,
        "highPrivacy": drupalSettings.tarteocitron.config.highprivacy,
        "alwaysNeedConsent": drupalSettings.tarteocitron.config.alwaysneedconsent,
        "handleBrowserDNTRequest": drupalSettings.tarteocitron.config.handlebrowserdntrequest,
        "removeCredit": drupalSettings.tarteocitron.config.removecredit,
        "moreInfoLink": drupalSettings.tarteocitron.config.moreinfolink,
        "useExternalCss": drupalSettings.tarteocitron.config.useexternalcss,
        "useExternalJs": drupalSettings.tarteocitron.config.useexternaljs,
        "readmoreLink": drupalSettings.tarteocitron.config.readmorelink,
        "mandatory": drupalSettings.tarteocitron.config.mandatory,
        "mandatoryCta": drupalSettings.tarteocitron.config.mandatorycta,
        "googleConsentMode": drupalSettings.tarteocitron.config.googleconsentmode,
        "partnersList": drupalSettings.tarteocitron.config.partnerslist
      });

      eval(drupalSettings.tarteocitron.config.services);

      $(".tac_cookies_btn").click(e => {
        e.preventDefault();
        tarteaucitron.userInterface.openPanel();
      });

    }
  };
})(jQuery, Drupal, drupalSettings);
