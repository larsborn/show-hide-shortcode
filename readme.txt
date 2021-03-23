=== Show/Hide Shortcode ===
Contributors: larsborn
Tags: read more, read less, show more, show less, expander, folder
Requires at least: 5.7
Tested up to: 5.7
Stable tag: trunk
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Small and efficient plugin implementing dynamic "Show more..." links. Just use the [showhide] shortcode, there is no
addition to the backend.

== Description ==

This plugin allows you to easily add "Show more..." links to your site. Just enclose the content to be hidden between
`[showhide]` and `[/showhide]`. There is no modification to the backend or fancy editor. Hence the code for this plugin
is minimal and the plugin should be easy to review for security issues as well not impact performance.

== Frequently Asked Questions ==

= Where do I need to click? =

Use the block editor two blocks:

```
[showhide]
```

and

```
[/showhide]
```

Everything in between will be hidden and a link "Show more..." is displayed. When clicked, the hidden content is
revealed.

= Can I change the default "Show more..." text? =

Yes, the [showhide] shortcode accepts the argument `show_caption`:

```
[showhide show_caption="Do you want to know more?"]
Your Content
[/showhide]
```

Similarly, use the `hide_caption` attribute to change the "Show less..." default caption.

== Screenshots ==

1. Example view of the block editor.

== Changelog ==

= 1.0 =
* Initial Release
