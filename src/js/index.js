// import "../scss/main.scss";
// import colorswatch from "./components/color-swatch";
const test = Vue.component('Test', {template: '<h1>test</h1>'})

const app = Vue.createApp({
	// components: {
	// 	Test,
	// },
	data() {
		return {
			firstName: 'Ryan',
			lastName: 'Soeder',
			email: 'mr.soeder@gmail.com',
			gender: 'male',
			picture: 'https://randomuser.me/api/portraits/men/25.jpg'
		}
	},
	methods: {
		async getUser() {
			const res = await fetch('https://randomuser.me/api');
			const {results} = await res.json();
			console.log(results);

			this.firstName =  results[0].name.first
			this.lastName = results[0].name.last
			this.email = results[0].email
			this.gender = results[0].gender
			this.picture = results[0].picture.large
		}
	}
});
app.mount('#app');


// document.addEventListener("DOMContentLoaded", function () {
// 	colorswatch();
// });
