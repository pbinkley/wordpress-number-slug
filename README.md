wordpress-number-slug
=====================

Wordpress plugin to use an initial number in the title as the slug

This plugin modifies the process that creates the slug in the permalink for a post. 
If the title starts with a number, the slug will be simply that number; otherwise the 
slug will be the normal Wordpress sanitized title.

e.g.

title "34 Some Title" -> http://yourwordpress.com/34/

title "Some Title" -> http://yourwordpress.com/some-title/
