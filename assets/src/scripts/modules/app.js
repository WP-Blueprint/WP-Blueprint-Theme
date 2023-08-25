class App {
	constructor() {
		this.init();
		this.nav();
	}

	init() {
		// eslint-disable-next-line no-console
		console.info('App Initialized');
	}
	nav() {
		document.addEventListener('DOMContentLoaded', function () {
			// Set display: none to the other child ul elements beyond the first level
			const otherChildUl = document.querySelectorAll(
				'.documentation-navigation li > ul.children:not(:first-child)'
			);

			otherChildUl.forEach(function (childUl) {
				childUl.style.display = 'none';
			});

			// Set display: block to the specific child ul elements
			const specificChildUl = document.querySelectorAll(
				'.documentation-navigation li.current_page_parent > ul.children, .documentation-navigation li.current_page_ancestor > ul.children, .documentation-navigation li.current_page_item > ul.children'
			);

			specificChildUl.forEach(function (childUl) {
				childUl.style.display = 'block';
			});
		});

		document
			.querySelectorAll('.documentation-navigation .toggle-children')
			.forEach(function (button) {
				button.addEventListener('click', function () {
					// Toggle visibility of the next ul element (the children)
					const ul = this.nextElementSibling;

					if (ul.style.display === 'none') {
						ul.style.display = 'block';
					} else {
						ul.style.display = 'none';
					}
				});
			});
	}
}

export default App;
