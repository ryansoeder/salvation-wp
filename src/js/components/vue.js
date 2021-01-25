export default function vue() {
	var getCookie = function (name) {
		var value = "; " + document.cookie;
		var parts = value.split("; " + name + "=");
		if (parts.length == 2) return parts.pop().split(";").shift();
	};

	Vue.component("heading", {
		props: ["title", "tag"],
		template: "<h3>{{ title }}</h3>",
	});

	var app = new Vue({
		el: "#app",
		data: {
			showLabels: true,
			labels: [],
		},
		mounted: function () {
			this.labels = document.querySelectorAll(".label");
			if (getCookie("showLabels") == "true") {
				this.showLabels = getCookie("showLabels");
			}
		},
		updated: function () {
			this.labels = document.querySelectorAll(".label");
		},
		methods: {
			toggleLabels: function (event) {
				this.showLabels = event.target.checked;
				document.cookie = "showLabels=" + this.showLabels;

				if (this.showLabels == true) {
					this.labels.forEach((el) => {
						el.classList.remove("hide");
					});
				} else {
					this.labels.forEach((el) => {
						el.classList.add("hide");
					});
				}
			},
		},
	});
}
