# ACF Flexible Content Title

- [Usage](#usage)
- [Changing the Field Used](#changing-the-field-used)
- [Installation](#installation)
- [Screenshots](#screenshots)

Display the content of a text sub field in the title bar of your Advanced Custom Fields flexible content sections to make editing your page sections easier to navigate.

I recommend pairing this with a plugin that will help you collapse all of your flexible content sections, such as [ACF Repeater & Flexible Content Collapser](https://wordpress.org/plugins/acf-repeater-flexible-content-collapser/).

## Usage

This plugin looks for a sub field named `section_title` in the flexible content field. Add a field with that name to your layouts, or use the filter to change which sub field is used.

![Section Title Field](/screenshots/section_title_field.png)

## Changing the Field Used

You can filter that as follows if you wish to use a different sub field:

```php
// change the sub field used in flexible content field title
add_filter('acf_flexible_content_title_field', function($title_field, $flexible_field, $layout) {
  return 'my_text_sub_field';
}, 10, 3);
```

**Arguments**

- `$title_field` (string) the name of the title field to be displayed
- `$flexible_field` (array) the flexible content field settings
- `$layout` (array) the layout settings

Because the flexible content field and layout settings arrays are passed, if desired you could add conditional logic and specify different title fields for different flexible content fields or layouts.

## Installation

There are three options for installing this plugin:

1. With composer from [Packagist](https://packagist.org/packages/mmirus/acf-flexible-content-title): `composer require mmirus/acf-flexible-content-title`
2. With [GitHub Updater](https://github.com/afragen/github-updater)
3. By downloading the latest release ZIP from this repository and installing it like any normal WordPress plugin

## Screenshots

_Expanded flexible content layout_

![Expanded Flexible Content Layout with Title Field](/screenshots/flexible_content_expanded.png)

_Overview of flexible content layouts_

![Expanded Flexible Content Layout with Title Field](/screenshots/flexible_content_overview.png)
