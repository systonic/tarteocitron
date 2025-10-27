(function($, Drupal, drupalSettings) {
  Drupal.behaviors.TarteOCitron = {
    attach: function (context, settings) {

      tarteaucitron.cdn = drupalSettings.tarteocitron.config.cdn;
      tarteaucitronForceLanguage = drupalSettings.tarteocitron.config.language;
      tarteaucitronCustomText = JSON.parse(drupalSettings.tarteocitron.config.custom_text);

      tarteaucitron.init({
        "adblocker": drupalSettings.tarteocitron.config.adblocker,
        "hashtag": drupalSettings.tarteocitron.config.hashtag,
        "cookieName": drupalSettings.tarteocitron.config.cookiename,
        "highPrivacy": drupalSettings.tarteocitron.config.highprivacy,
        "orientation": drupalSettings.tarteocitron.config.orientation,
        "bodyPosition": drupalSettings.tarteocitron.config.bodyposition,
        "removeCredit": drupalSettings.tarteocitron.config.removecredit,
        "showAlertSmall": drupalSettings.tarteocitron.config.showalertsmall,
        "showDetailsOnClick": drupalSettings.tarteocitron.config.showdetailsonclick,
        "showIcon": drupalSettings.tarteocitron.config.showicon,
        "iconPosition": drupalSettings.tarteocitron.config.iconposition,
        "cookieslist": drupalSettings.tarteocitron.config.cookieslist,
        "cookieslistEmbed": drupalSettings.tarteocitron.config.cookieslistembed,
        "handleBrowserDNTRequest": drupalSettings.tarteocitron.config.handlebrowserdntrequest,
        "DenyAllCta": drupalSettings.tarteocitron.config.denyallcta,
        "AcceptAllCta" : drupalSettings.tarteocitron.config.acceptallcta,
        "moreInfoLink": drupalSettings.tarteocitron.config.moreinfolink,
        "privacyUrl": drupalSettings.tarteocitron.config.privacyurl,
        "useExternalCss": drupalSettings.tarteocitron.config.useexternalcss,
        "useExternalJs": drupalSettings.tarteocitron.config.useexternaljs,
        "mandatory": drupalSettings.tarteocitron.config.mandatory,
        "mandatoryCta": drupalSettings.tarteocitron.config.mandatorycta,
        "closePopup": drupalSettings.tarteocitron.config.closepopup,
        "groupServices": drupalSettings.tarteocitron.config.groupservices,
        "serviceDefaultState": drupalSettings.tarteocitron.config.servicedefaultstate,
        "googleConsentMode": drupalSettings.tarteocitron.config.googleconsentmode,
        "bingConsentMode": drupalSettings.tarteocitron.config.bingconsentmode,
        "softConsentMode": drupalSettings.tarteocitron.config.softconsentmode,
        "dataLayer": drupalSettings.tarteocitron.config.datalayer,
        "serverSide": drupalSettings.tarteocitron.config.serverside,
        "partnersList": drupalSettings.tarteocitron.config.partnerslist,
        "alwaysNeedConsent": drupalSettings.tarteocitron.config.alwaysneedconsent,
        "readmoreLink": drupalSettings.tarteocitron.config.readmorelink
      });

      eval(drupalSettings.tarteocitron.config.services);

      $(".tac_cookies_btn").click(e => {
        e.preventDefault();
        tarteaucitron.userInterface.openPanel();
      });

    }
  };
})(jQuery, Drupal, drupalSettings);
