+++
date = "2015-03-02T16:08:29+01:00"
draft = false
title = "Moving from Ghost to HUGO"
comments = true
+++

I started to blog 11 years ago.
The first blog systeme i use was Dotclear, I moved to Wordpress few years after because of the large plugin and theme ressources available.
Wordpress is a really good blog platform, but too much updates for me.

Few months ago, the blog moved to [Ghost](https://ghost.org), a really minimalist blog system, based on nodejs. 
A KISS aproach to the blog, I falled in love.
The only issue i had with Ghost was about the hosting dependencies, no hard to manage, but since i don't master nodeJs, i spent too much hours to hack it.

I discovered HUGO.
Hugo is a static blog generator, written with a language (GOLANG), i use everyday.

So, i moved from GHOST on a dedicated service to HUGO on Google App engine

## Ghost migration to Hugo 
Ghost and Hugo use the same markdown notation posts content.
The fist thing to do : extract posts from Ghost db (sqlite) files to individual .md files to HUGO/content/post/ folder.

The code I used to achieve this is located here : [GHOST_TO_HUGO.php](https://gist.github.com/vjeantet/d1f6cf824a2344dd6b4e)

Next step, move GHOTS/content directory to HUGO/static directory.

Migration completed ! 

## Theme
The default theme on ghost was perfect for my blog, but unavailable on HUGO… So i ported the casper theme from GHOST to HUGO, you can find it here : [hugo-theme-casper](https://github.com/vjeantet/hugo-theme-casper)

## Publishing
### Google App Engine
I added the GAE configuration file **app.yaml** into the HUGO/static directory, to see it pushed to the Public directory each time i generate the blog.

```
$ appcfg update public
```
This Blog is now Proudly published with HUGO, with a theme from Ghost (Casper) !

