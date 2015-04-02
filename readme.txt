=== GM Block Bots ===
Contributors: mickmel, ashlealanier
Tags: semalt, buttons-for-websites, darodar, botnet, bots, crawlers, google analytics
Requires at least: 3.0
Tested up to: 4.1.1
Stable tag: 1.1.6
License: GPLv2 or later

This blocks semalt.com, buttons-for-website.com and others with a 403 Forbidden message so that they no longer show up in your Google Analytics stats.

== Description ==

This blocks semalt.com, buttons-for-website.com and others with a 403 Forbidden message so that they no longer show up in your Google Analytics stats. If you have the ability to edit the .htaccess files on your server that may work better, but this is an easy fix if you can't change that file.

Once installed, this plugin will run automatically in the background; there is no options panel or anything to see in your dashboard.

Other sites will be added to the block list over time via updates to this plugin.

For more information, visit us at [GreenMellenMedia.com](http://www.greenmellenmedia.com) or find us on Twitter [@GreenMellen](http://twitter.com/greenmellen).

Current list of blocked bots: 4webmasters.org, 7makemoneyonline.com, adviceforum.info, aliexpress.com, anticrawler.org, best-seo-solution.com, bestsub.com, bestwebsitesawards.com, blackhatworth.com, buttons-for-website.com, clicksor.com, darodar.com, econom.co, hulfingtonpost.com, ilovevitaly.co/com, kambasoft.com, makemoneyonline.com, o-o-6-o-o.com, priceg.com, ranksonic.org/info, savetubevideo.com, search.tb.ask.com, semalt.com, simple-share-buttons.com, sitequest.ru, social-buttons.com, wow.com

== Installation ==

1. Upload the GM Block Bots plugin to your '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it! No options to configure; semalt and their friends will start being blocked immediately.

== Changelog ==

= 1.1.6 =
* Added search.tb.ask.com, wow.com, adviceforum.info, makemoneyonline.com and best-seo-solution.com

= 1.1.5 =
* Added o-o-6-o-o.com and sitequest.ru

= 1.1.4 =
* Added 4webmasters.org, anticrawler.org and bestsub.com

= 1.1.3 =
* Added blackhatworth.com, econom.co, hulfingtonpost.com, kambasoft.com, priceg.com, ranksonic.org/info and savetubevideo.com

= 1.1.2 =
* Added bestwebsitesawards.com and aliexpress.com

= 1.1.1 =
* Minor update for compatibility with older versions of PHP 

= 1.1 =
* Added simple-share-buttons.com, clicksor.com, 7makemoneyonline.com and ilovevitaly.com

= 1.0 =
* Initial Release, blocking semalt.com, buttons-for-websites.com, darodar.com and social-buttons.com

== Frequently Asked Questions ==

= Nothing changed on my site =

That is by design. This is a silent plugin, and there are no options to configure. Leave it enabled to block the bots, or disable it to let them back in.

= The bots are still getting through =

This plugin only blocks them based on their http_referer, which may not catch everything. If possible, using .htaccess on your server to block them as that should be more effective. In addition, some bots ping Google Analytics directly (without ever visiting your site) and the only way to stop them is via filters in Google Analytics.

= Can you also block another bot? =

Absolutely! We'd love to add more to the list of bots being blocked. Please email us at plugins@greenmellenmedia.com and we'll look into it.

== Screenshots ==

1. Activation link. There are no other screenshots, because the plugin works silently behind the scenes.