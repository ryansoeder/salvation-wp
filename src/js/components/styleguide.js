export default function styleguide() {
	// Converts rgb values into hex values
	function rgb2hex(rgb) {
		rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		function hex(x) {
			return ("0" + parseInt(x).toString(16)).slice(-2);
		}
		return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
	}

	// Returns the style value for an element
	function getStyle(el, styleProp) {
		var camelize = function (str) {
			return str.replace(/\-(\w)/g, function (str, letter) {
				return letter.toUpperCase();
			});
		};

		if (el.currentStyle) {
			return el.currentStyle[camelize(styleProp)];
		} else if (
			document.defaultView &&
			document.defaultView.getComputedStyle
		) {
			return document.defaultView
				.getComputedStyle(el, null)
				.getPropertyValue(styleProp);
		} else {
			return el.style[camelize(styleProp)];
		}
	}

	// Collect all of the elements we want to retrieve values from
	var style = document.querySelectorAll(".block .style");

	// Loop over each element and output a label
	style.forEach((el) => {
		var fontSize = getStyle(el, "font-size");
		var tagName = el.tagName.toLowerCase();
		el.innerHTML =
			"<div class='label'>" +
			tagName +
			" — " +
			fontSize +
			" </div>" +
			el.innerHTML;
	});

	// Collect all of the elements we want to retrieve values from
	var colors = document.querySelectorAll(".block .color");

	// Loop over each element and output a label
	colors.forEach((el) => {
		var style = window.getComputedStyle(el, "::after");
		var backgroundColor = style.getPropertyValue("background-color");
		var backgroundColorHex = rgb2hex(backgroundColor);
		var tagName = el.tagName.toLowerCase();
		el.innerHTML =
			"<div class='label'>" +
			backgroundColorHex +
			" </div>" +
			el.innerHTML;
	});
}
