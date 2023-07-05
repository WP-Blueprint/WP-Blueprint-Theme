/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./assets/src/scripts/ajax/services.js ***!
  \*********************************************/
// Get all service links
var serviceLinks = document.querySelectorAll(".service-category");

// Add event listener to all links
serviceLinks.forEach(function (serviceLink) {
  serviceLink.addEventListener("click", function (e) {
    e.preventDefault();

    // Remove 'is-active' class from all links
    serviceLinks.forEach(function (link) {
      return link.classList.remove("is-active");
    });

    // Add 'is-active' class to the clicked link
    this.classList.add("is-active");

    // Get the slug from the link
    var slug = this.dataset.slug;

    // Prepare our data for the AJAX call
    var data = new FormData();
    data.append("action", "fetch_service_posts");
    data.append("slug", slug);
    data.append("nonce_field", ajax_params.nonce_field);

    // Make the AJAX call
    fetch(ajax_params.ajax_url, {
      method: "POST",
      body: data,
      headers: {
        "X-WP-Nonce": ajax_params.nonce_field
      }
    }).then(function (response) {
      return response.json();
    }).then(function (response) {
      // Check for success
      if (response.success) {
        // On success, insert the response into the page
        document.querySelector(".services-content").innerHTML = response.data;
      } else {
        console.log("Server responded with an error.");
      }
    })["catch"](function (error) {
      console.log("AJAX request failed:", error);
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Get the first service category link
  var firstServiceLink = document.querySelector(".service-category");

  // Trigger a click event on the first link
  if (firstServiceLink) {
    firstServiceLink.click();
  }
});
/******/ })()
;
//# sourceMappingURL=services.js.map