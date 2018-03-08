if (typeof kotlin === 'undefined') {
  throw new Error("Error loading module 'PopupKotlinToJs'. Its dependency 'kotlin' was not found. Please, check whether 'kotlin' is loaded prior to 'PopupKotlinToJs'.");
}
var PopupKotlinToJs = function (_, Kotlin) {
  'use strict';
  var throwCCE = Kotlin.throwCCE;
  var Unit = Kotlin.kotlin.Unit;
  var equals = Kotlin.equals;
  function main$lambda(closure$modal) {
    return function (it) {
      closure$modal.style.display = 'block';
      return Unit;
    };
  }
  function main$lambda_0(closure$modal) {
    return function (it) {
      closure$modal.style.display = 'none';
      return Unit;
    };
  }
  function main$lambda_1(closure$modal) {
    return function (event) {
      if (equals(event.target, window)) {
        closure$modal.style.display = 'none';
      }
      return Unit;
    };
  }
  function main(args) {
    var tmp$, tmp$_0, tmp$_1;
    var modal = Kotlin.isType(tmp$ = document.getElementById('myModal'), HTMLBodyElement) ? tmp$ : throwCCE();
    var button = Kotlin.isType(tmp$_0 = document.getElementById('loginBtn'), HTMLButtonElement) ? tmp$_0 : throwCCE();
    var span = Kotlin.isType(tmp$_1 = document.getElementsByClassName('close'), HTMLElement) ? tmp$_1 : throwCCE();
    button.addEventListener('click', main$lambda(modal));
    span.addEventListener('click', main$lambda_0(modal));
    window.addEventListener('click', main$lambda_1(modal));
  }
  _.main_kand9s$ = main;
  main([]);
  Kotlin.defineModule('PopupKotlinToJs', _);
  return _;
}(typeof PopupKotlinToJs === 'undefined' ? {} : PopupKotlinToJs, kotlin);
