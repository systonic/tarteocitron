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

var oldjsSizing = tarteaucitron.userInterface.jsSizing;
tarteaucitron.userInterface.jsSizing = function (type) {
  oldjsSizing(type);
  if (type === 'main') {
    var e = window,
        a = 'inner',
        windowInnerHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

    if (window.innerWidth === undefined) {
      a = 'client';
      e = document.documentElement || document.body;
    }

    // media query
    if (e[a + 'Width'] <= 767) {
      mainTop = 0;
    } else {
      mainTop = ((windowInnerHeight - document.getElementById('tarteaucitron').offsetHeight) / 2) - 21;
    }

    // correct
    if (mainTop < 0) {
      mainTop = 0;
    }

    // apply
    tarteaucitron.userInterface.css('tarteaucitron', 'top', mainTop + 'px');
  }
};
