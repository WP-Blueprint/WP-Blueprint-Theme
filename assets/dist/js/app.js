(()=>{"use strict";var n,e={562:()=>{function n(e){return n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(n){return typeof n}:function(n){return n&&"function"==typeof Symbol&&n.constructor===Symbol&&n!==Symbol.prototype?"symbol":typeof n},n(e)}function e(e){var t=function(e,t){if("object"!==n(e)||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var o=r.call(e,t||"default");if("object"!==n(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"===n(t)?t:String(t)}function t(n,t){for(var r=0;r<t.length;r++){var o=t[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(n,e(o.key),o)}}new(function(){function n(){!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),this.init(),this.nav()}var e,r,o;return e=n,(r=[{key:"init",value:function(){console.info("App Initialized")}},{key:"nav",value:function(){document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".documentation-navigation li > ul.children:not(:first-child)").forEach((function(n){n.style.display="none"})),document.querySelectorAll(".documentation-navigation li.current_page_parent > ul.children, .documentation-navigation li.current_page_ancestor > ul.children, .documentation-navigation li.current_page_item > ul.children").forEach((function(n){n.style.display="block"}))})),document.querySelectorAll(".documentation-navigation .toggle-children").forEach((function(n){n.addEventListener("click",(function(){var n=this.nextElementSibling;"none"===n.style.display?n.style.display="block":n.style.display="none"}))}))}}])&&t(e.prototype,r),o&&t(e,o),Object.defineProperty(e,"prototype",{writable:!1}),n}())},240:()=>{}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var i=t[n]={exports:{}};return e[n](i,i.exports,r),i.exports}r.m=e,n=[],r.O=(e,t,o,i)=>{if(!t){var l=1/0;for(f=0;f<n.length;f++){for(var[t,o,i]=n[f],a=!0,c=0;c<t.length;c++)(!1&i||l>=i)&&Object.keys(r.O).every((n=>r.O[n](t[c])))?t.splice(c--,1):(a=!1,i<l&&(l=i));if(a){n.splice(f--,1);var u=o();void 0!==u&&(e=u)}}return e}i=i||0;for(var f=n.length;f>0&&n[f-1][2]>i;f--)n[f]=n[f-1];n[f]=[t,o,i]},r.o=(n,e)=>Object.prototype.hasOwnProperty.call(n,e),(()=>{var n={773:0,938:0};r.O.j=e=>0===n[e];var e=(e,t)=>{var o,i,[l,a,c]=t,u=0;if(l.some((e=>0!==n[e]))){for(o in a)r.o(a,o)&&(r.m[o]=a[o]);if(c)var f=c(r)}for(e&&e(t);u<l.length;u++)i=l[u],r.o(n,i)&&n[i]&&n[i][0](),n[i]=0;return r.O(f)},t=self.webpackChunkwp_blueprint_theme_classic=self.webpackChunkwp_blueprint_theme_classic||[];t.forEach(e.bind(null,0)),t.push=e.bind(null,t.push.bind(t))})(),r.O(void 0,[938],(()=>r(562)));var o=r.O(void 0,[938],(()=>r(240)));o=r.O(o)})();
//# sourceMappingURL=app.js.map