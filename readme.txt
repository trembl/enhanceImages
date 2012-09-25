=== enhanceImages ===


== Description ==



== Installation ==

To install this plugin:

1. Upload the `enhanceImages` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I change the cutoff width? =

Open the enhanceImages.js in the plug-ins folder and set your desired width.

= How do I target the images which should be enhanced? =

Currently enhanceImages looks for images where the <img class="conditional" ... />. This can also be adapted in enhanceImages.js

= Why are there no Admin settings for changing the cutoff-width and classes? =

Because these values are not volatile, they don't justify trading the ease of setting the values for the additional DB look-ups, and the therefore incurring performance pentaly. It would be a small penalty, but nevertheless. Opening and editing the file should not be that hard.

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial release.
