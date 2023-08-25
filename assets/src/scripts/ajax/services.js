// Get all service links
const serviceLinks = document.querySelectorAll('.service-category');

// Add event listener to all links
serviceLinks.forEach(function (serviceLink) {
	serviceLink.addEventListener('click', function (e) {
		/*global ajaxParams */

		e.preventDefault();

		// Remove 'is-active' class from all links
		serviceLinks.forEach((link) => link.classList.remove('is-active'));

		// Add 'is-active' class to the clicked link
		this.classList.add('is-active');

		// Get the slug from the link
		const slug = this.dataset.slug;

		// Prepare our data for the AJAX call
		const data = new FormData();
		data.append('action', 'fetch_service_posts');
		data.append('slug', slug);
		data.append('nonce_field', ajaxParams.nonce_field);

		// Make the AJAX call
		fetch(ajaxParams.ajax_url, {
			method: 'POST',
			body: data,
			headers: {
				'X-WP-Nonce': ajaxParams.nonce_field,
			},
		})
			.then((response) => response.json())
			.then((response) => {
				// Check for success
				if (response.success) {
					// On success, insert the response into the page
					document.querySelector('.services-content').innerHTML =
						response.data;
				} else {
				}
			})
			.catch(() => {});
	});
});

document.addEventListener('DOMContentLoaded', function () {
	// Get the first service category link
	const firstServiceLink = document.querySelector('.service-category');

	// Trigger a click event on the first link
	if (firstServiceLink) {
		firstServiceLink.click();
	}
});
