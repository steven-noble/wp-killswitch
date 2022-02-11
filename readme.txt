=== WP Killswitch ===
Contributors: graphicscove
Donate link: https://graphicscove.com
Tags: css, killswitch
Requires at least: 4.0
Tested up to: 5.7.2
Stable tag: 0.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP Killswitch lets you non-destructively white out a Wordpress website while this plugin is active (recommended as an mu-plugin).

== Description ==

WP Killswitch lets you non-destructively white out a Wordpress website while this plugin is active (recommended as an mu-plugin).

To prevent anyone disabling or deleting this plugin it is recommended you add this to the mu-plugins directory via FTP.

When activated this plugin will white out the front end of the website and make it inaccessible for visitors. The admin panel is still visible at your admin URL. This plugin will also display a warning notification in the admin telling the client/administrator to contact their webmaster.

If you are using this plugin to hide a website while you work on fixing something for example - please note that by initiating a white out on the front end of a website, you are not deleting or turning off the website. The contents of the site will still be visible to search engines and text only browsers. Any user can still see the content by viewing the source code of the page.

== Installation ==

1. Upload the folder `wp-killswitch` to the `/wp-content/mu-plugins/` directory using FTP
2. As mu-plugins are automatically activated you're done! Contact your client and resolve the situation asap!

== Screenshots ==

1. What the user sees on the front end
2. The warning message displayed in the admin

== Changelog ==

= 0.1.1 =
* Re-enabled local kill switch for non-remote

= 0.1.0 =
* Initial launch of the remote version
* Updated compatible version number

= 0.0.3 =
* Updated compatible version number

= 0.0.2 =
* Minor file tidy
* Updated compatible version number
* Removed roadmap
* Minor content tidy in the readme

= 0.0.1 =
* First build

== Remote ==

If you need to activate WP Killswitch remotely for whatever reason, you can register your site at https://wpkillswitch.io
