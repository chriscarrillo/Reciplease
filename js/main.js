if (typeof kotlin === 'undefined') {
  throw new Error("Error loading module 'Kotlin'. Its dependency 'kotlin' was not found. Please, check whether 'kotlin' is loaded prior to 'Kotlin'.");
}
var Kotlin = function (_, Kotlin) {
  'use strict';
  var ensureNotNull = Kotlin.ensureNotNull;
  var throwCCE = Kotlin.throwCCE;
  var Unit = Kotlin.kotlin.Unit;
  function main$lambda(it) {
    var tmp$, tmp$_0;
    var centerBox = Kotlin.isType(tmp$ = ensureNotNull(document.getElementById('centerBox')), HTMLElement) ? tmp$ : throwCCE();
    var centerBoxHeight = centerBox.clientHeight;
    var redBox = Kotlin.isType(tmp$_0 = ensureNotNull(document.getElementById('redBox')), HTMLElement) ? tmp$_0 : throwCCE();
    var redBoxHeight = redBox.clientHeight;
    if (redBoxHeight !== centerBoxHeight) {
      redBox.style.height = centerBoxHeight.toString() + 'px';
      redBox.style.opacity = '1';
    }
    return Unit;
  }
  function main(args) {
    window.onload = main$lambda;
  }
  _.main_kand9s$ = main;
  main([]);
  Kotlin.defineModule('Kotlin', _);
  return _;
}(typeof Kotlin === 'undefined' ? {} : Kotlin, kotlin);
