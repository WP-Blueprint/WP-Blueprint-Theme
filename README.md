# WP Blueprint Classic Theme

This repository contains the Classic WordPress theme, built with Object-Oriented PHP, as a part of the WordPress Blueprint package. It is designed to provide a solid foundation for your WordPress project.

## Features

- Object-Oriented PHP architecture.
- Compliance with WordPress coding standards, ensured by PHP CodeSniffer and the WordPress coding standards ruleset.
- Theme classes that provide additional functionality and can be used across different WordPress projects.
- Laravel Mix for asset management, with support for ES6 JavaScript and SCSS.

## Requirements

- **PHP:** This theme requires PHP 7.4 or higher.
- **WordPress:** A WordPress installation of 5.6 or higher is required.
- **Composer:** The theme is installable via Composer from Packagist, but can also be manually downloaded and installed.

## Installation

To install the WP Blueprint Classic Theme, you can use Composer's `create-project` command from your terminal:

```sh
composer create-project wp-blueprint/classic-theme .
```

## Usage

The development of this theme is quite straightforward:

1. Create your Theme folder
2. Install the Theme with `composer create-project wp-blueprint/classic-theme .`
3. Install the dependencies with `composer install` and `npm install`.
4. Start making changes to the theme.

This theme utilizes the `wp-blueprint/core` package, which provides shared Object-Oriented PHP classes for the WP Blueprint themes, ensuring a consistent foundation and reusable functionalities for themes in themes. These classes can be extended and modified as needed for your project.

## Backlog

Here are some features and improvements planned for future releases:

- **Finish development and thorough testing:** Ensure its functionality, performance, and compatibility with various browsers and devices.

## Scripts

[![Code Quality - WPCS](https://github.com/WP-Blueprint/WP-Blueprint-Theme/actions/workflows/lint-wpcs.yml/badge.svg)](https://github.com/WP-Blueprint/WP-Blueprint-Theme/actions/workflows/lint-wpcs.yml) [![Code Quality - PHP](https://github.com/WP-Blueprint/WP-Blueprint-Theme/actions/workflows/lint-php.yml/badge.svg)](https://github.com/WP-Blueprint/WP-Blueprint-Theme/actions/workflows/lint-php.yml)

Use the following scripts to aid in development:

### NPM

- `npm run dev`, `npm run development`: Build assets using Laravel Mix.
- `npm run watch`: Watch files for changes, and rebuild assets when they are saved.
- `npm run watch-poll`: Same as `npm run watch`, but uses polling instead of/in addition to native filesystem events.
- `npm run hot`: Run a development server with Hot Module Replacement (HMR).
- `npm run prod`, `npm run production`: Build assets for production.
- `npm run lint`: JavaScript Lint
- `npm run lint:fix`: JavaScript Fix
- `npm run lint:css`: CSS Lint
- `npm run lint:css:fix`: CSS Fix
- `npm run lint-css`: SCSS Lint
- `npm run lint-css:fix`: SCSS Fix

### Composer

- `composer run lint:wpcs`: WPCS Lint
- `composer run lint:wpcs:fix`: WPCS Fix
- `composer run lint:php`: PHP Lint

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to help improve this theme.

Please follow the [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/) and ensure that your changes are well-documented. Use the provided npm scripts for linting your PHP code before submitting.

## License

This theme is licensed under the [GNU General Public License v3.0](https://www.gnu.org/licenses/gpl-3.0).
