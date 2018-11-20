=== WP REST API Category Image ===
Contributors: Deyan Vatsov, Filippo Riccio
Tags: api, json, REST, rest-api, wp-api, Category and Taxonomy
Requires at least: 4.7.0
Tested up to: 1.0.0
Stable tag: 0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shows Category Images output to the WP REST API.

== Description ==

This plugin is based on WP REST API V2 Category Image. It enables retrieving
via the REST API the category images assigned with the plugins
[Category and Taxonomy Image](https://wordpress.org/plugins/wp-custom-taxonomy-image/
"Category and Taxonomy Image")
or [WPCustom Category Image](https://wordpress.org/plugins/wpcustom-category-image/
"WPCustom Category Image").

== Installation ==

This plugin requires having one of the plugins
[Category and Taxonomy Image](https://wordpress.org/plugins/wp-custom-taxonomy-image/ "Category and Taxonomy Image")
or [WPCustom Category Image](https://wordpress.org/plugins/wpcustom-category-image "WPCustom Category Image")
installed and activated.

* **Manual Installation:**
Unzip into your /wp-content/plugins/ directory. If you're uploading it make
sure to upload the top-level folder. Don't just upload all the php files
and put them in /wp-content/plugins/.

* **Better Installation:**
Go to Plugins > Add New in your WordPress admin and search for 'WP REST API Category Image'.

Once installed, activate 'WP REST API Category Image' from WordPress
plugins dashboard page and you're ready to go.

This plugin works straight out of the box.

== Changelog ==

= 0.2 - (20 November 2018) =
* Name changed.
* Removed dependency on REST API Plugin (now using the core REST API of Wordpress >= 4.7.0).
* Added support for WPCustom Category Image plugin.

= 0.1 - (10 April 2016) =
* Initial Release.
