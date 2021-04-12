import "../scss/main.scss";

import vue from "./components/vue";
import styleGuide from "./components/styleguide";
import colorswatch from "./components/color-swatch";

document.addEventListener("DOMContentLoaded", function () {
	vue();
	colorswatch();
});
