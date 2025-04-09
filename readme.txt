=== Baseline Status ===
Contributors:      geoffgraham
Tags:              block
Tested up to:      6.7.1
Stable tag:        0.1.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Displays current Baseline availability for web platform features.

== Description ==

This is a WordPress-ified port of the [Baseline Status web component](https://web-platform-dx.github.io/web-features/use-baseline/) released by the Google Chrome team.

== Installation ==

Just as you'd do for any other WordPress plugin:

1. Upload the plugin files to the `/wp-content/plugins/baseline-status` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

= Why is there a toggle control? =

Good question. I was thinking it would help update the component without a page refresh but it didn't work out. I just haven't removed it yet.

= So, the block doesn't live update? =

Nope, I'm afraid not. The block itself updates when changing features but a full page refresh is currently needed to see the full change.

= I can't select the block from the editor! =

Yeah, what's up with that?!

= Will you please [X]? =

I'll try! But I might not be the quickest to get to it.

== Screenshots ==

1. Adding the block to a post in the WordPress Block Editor.

== Changelog ==

= 0.1.0 =
* Enqueues Baseline script as a module
* Updates readme

= 0.1.0 =
* Initial release
