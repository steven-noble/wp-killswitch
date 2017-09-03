=== WP Killswitch ===
Contributors: graphicscove
Donate link: http://graphicscove.com/
Tags: css, killswitch
Requires at least: 4.0
Tested up to: 4.8.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP Killswitch lets you non-destructively white out a difficult client's website while this plugin is active (recommended as an mu-plugin).

== Description ==

WP Killswitch lets you non-destructively white out a difficult client's website while this plugin is active (recommended as an mu-plugin). It is suggested that this plugin should only be used as a last resort when negotiations with a particularly difficult client fail.

To stop the client disabling/deleting this plugin it is recommended you add this to the mu-plugins directory via FTP.

When activated this plugin will white out the front end of the website and make it inaccessible for visitors. The admin panel is still visible at your admin URL. This plugin will also display a warning notification in the admin telling the client/administrator to contact their webmaster.

Please remember to delete this plugin after you have successfully negotiated with the client.

If you are using this plugin for other purposes - to hide a website while you work on fixing something for example - please note that by initiating a white out on the front end of a website, you are not deleting or turning off the website. The contents of the site will still be visible to search engines and text only browsers. Any user can still see the content by viewing the source code of the page.

== Installation ==

1. Upload the folder `wp-killswitch` to the `/wp-content/mu-plugins/` directory using FTP
2. As mu-plugins are automatically activated you're done! Contact your client and resolve the situation asap!

== Frequently Asked Questions ==

= Why use WP Killswitch =

Sometimes people are difficult and there's no way around that. By temporarily making the site inaccessible a difficult client should listen to you and open a path for negotiation.

== Screenshots ==

1. What the client sees on the front end
2. The warning message displayed in the admin

== Changelog ==

= 0.1 =
* First build

== Roadmap ==

Here's a list of things I'd like to add to the plugin at some point. Please feel free to get in touch and let me know of anything you would like to see added.

- Checkbox ability for disabling the frontend
- Only administrators have the ability to change the plugin's settings
- Custom admin message
