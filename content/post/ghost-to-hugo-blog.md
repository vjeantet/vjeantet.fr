+++
comments = true
date = "2015-03-02T16:08:29+01:00"
draft = false
title = "Moving from Ghost to HUGO"

+++
I started to blog 11 years ago.
The first blog system i used, was Dotclear, I moved to Wordpress few years after because of the large plugin and theme ressources available.
Wordpress is a really good blog platform, but it updates itslef too often for me.

Few months ago, the blog moved to [Ghost](https://ghost.org), a really minimalist blog system, based on nodejs. 
A KISS aproach to the blog, I falled in love.
The only issue i had with Ghost was about the hosting dependencies, no hard to manage, but since i don't master nodeJs, i spent too much hours to hack into.

I discovered HUGO.
Hugo is a static blog generator, written with a language (GOLANG), i use everyday.

So, i moved from GHOST to HUGO hosted on Google App engine.

## Ghost migration to Hugo 
Ghost and Hugo share the same markdown notation for posts content.
The fist thing to do : extract posts from Ghost db (sqlite) to individual .md files and move them to HUGO/content/post/ folder.

The code I used to achieve this is here : [GHOST_TO_HUGO.php](https://gist.github.com/vjeantet/d1f6cf824a2344dd6b4e)

Next step, move GHOST/content directory to HUGO/static directory.
This way all references like images keep working.

Migration completed ! 

## Theme
The default theme on ghost was perfect for my blog, but unavailable on HUGO… So i ported the casper theme from GHOST to HUGO, you can find it here : [hugo-theme-casper](https://github.com/vjeantet/hugo-theme-casper)

## Publishing
### Google App Engine
I put my GAE configuration file **app.yaml**  into the HUGO/static directory, to see it pushed when hugo generate the static site.

To publish it online, i run the [deploy.sh script](https://github.com/vjeantet/vjeantet.fr/blob/master/deploy.sh) to 

* stage/commit/push contents changes to my git repo
* deploy the public directory to Google App Engine

```
$ ./deploy.sh
```

This Blog is now Proudly published with [HUGO](http://gohugo.io), with a Casper theme and hosted on Google App Engine.

### Github
You can publish your site to github.io, see documentation here : [Hosting on GitHub Pages](http://gohugo.io/tutorials/github-pages-blog/) 

## Source code
All source code from for this blog, app.yaml, deploy.sh, content and theme are on github : [github.com/vjeantet/vjeantet.fr](https://github.com/vjeantet/vjeantet.fr)

