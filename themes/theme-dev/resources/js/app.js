import jQuery from "jquery";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

(function () {
  window.$ = window.jQuery = jQuery;

  require("./components/swiper");
  require("./components/modal-projects");
})();
