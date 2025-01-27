{"version":3,"file":"script.map.js","names":["BX","namespace","Landing","Cookies","params","this","storageKey","storage","window","localStorage","currentStorage","enable","onlyInformation","siteId","parseInt","availableCodes","idButtonOpt","idButtonOptLink","idButtonAccept","idAgreementPopup","idCookiesNotice","idAgreementSmallPopup","classNameMainAgreement","classNameAnalyticAgreements","classNameTechnicalAgreements","classNameOtherAgreements","classNameButtonSave","classNameButtonCancel","classNameButtonCancelSmall","classNameButtonClose","classNameCookiesSwitcher","messages","agreementAjaxPath","overlay","create","attrs","className","cookiesNotice","acceptedAgreements","agreementsChckRefs","popupModified","popupInited","dataLoaded","idMainAgreementContainer","idAnalyticAgreementsContainer","idTechnicalAgreementsContainer","idOtherAgreementsContainer","idButtonSave","idButtonCancel","idButtonClose","idButtonSwitcher","enableAllCookies","bind","delegate","openPopup","showCookiesNoticeText","hideCookiesNoticeText","actualizeFromStorage","prototype","getAvailableHooks","codes","map","code","util","in_array","push","hooks","setStorage","hideSmallPopup","showCookiesNotice","disableAllCookies","getStorage","showSmallPopup","initializeSmallPopup","fireEvent","idButtonCancelSecond","querySelector","cancelPopup","initializePopup","slice","call","querySelectorAll","onClickCloseIcon","savePopup","node","switchAgreements","data","loadAgreements","initCheckboxes","innerHTML","ajax","url","method","dataType","onsuccess","result","agreementsLoaded","buildAgreements","hide","parentNode","show","showOverlay","closePopup","setPopupModified","hideOverlay","agreementCodes","getAcceptedAgreements","flag","textContent","acceptModified","acceptAll","declineModified","declineAll","asIs","store","getItem","JSON","parse","setItem","stringify","accepted","onCustomEvent","type","globalSwitchersState","getAttribute","setToState","key","switcher","UI","Switcher","getById","switcherType","getNode","check","acceptAgreement","actualizeAgreementsSwitcher","typesChecked","isChecked","switcherOff","setAttribute","switcherOn","codesFromStorage","checked","agreements","agreementsNodes","events","click","setTimeout","children","html","appendChild","initByClassName","style","display","classList","add","textWidth","offsetWidth","width","remove","document","body","append"],"sources":["script.js"],"mappings":"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"}