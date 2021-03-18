// sharethis inline
tarteaucitron.services.sharethisinline = {
  "key": "sharethisinline",
  "type": "social",
  "name": "ShareThis Inline",
  "uri": "http://www.sharethis.com/legal/privacy/",
  "needConsent": true,
  "cookies": ["__unam"],
  "js": function () {
    "use strict";
    if (tarteaucitron.user.sharethisinlinePublisher === undefined) {
      return;
    }
    var uri = "https://platform-api.sharethis.com/js/sharethis.js#property="+tarteaucitron.user.sharethisinlinePublisher+"&product=inline-share-buttons";

    tarteaucitron.fallback(["tacSharethisInline"], "");
    tarteaucitron.addScript(uri, "", function () {});

    if (tarteaucitron.isAjax === true) {
      if (typeof stButtons !== "undefined") {
        stButtons.locateElements();
      }
    }
  },
  "fallback": function () {
    "use strict";
    var id = "sharethisinline";
    tarteaucitron.fallback(["tacSharethisInline"], tarteaucitron.engage(id));
  }
};