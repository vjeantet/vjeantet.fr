+++
date = "2014-02-14T09:13:00+01:00"
draft = false
image = "/content/images/2014/Feb/dokerparis_title.png"
slug = "docker-io-paris-meetup-5"
tags = ["event", "docker", "meetup"]
title = "Docker.io Paris MEETUP #5"

+++
Veille de saint Valentin 2014, les curieux, passionnés et amoureux de Docker se sont rencontrés encore une fois pour échanger leurs expériences autour de [Docker.io](http://docker.io)

> **Docker** n.m. (Début XXIe).  
**I.** un projet open source pour packager, livrer et démarrer n'importe quelle application dans un conteneur léger.  


La startup [Nuxeo](http://www.nuxeo.com/fr‎) nous a accueilli dans ses locaux juste après le boulot, avec tout le matériel nécessaire, bonne humeur, bière, sodas, chips etc.. Et des stickers assez fun :-)

3 talks pour cette soirée.

## Talk 1
Animé par Damien Metzler, présente **l'architecture applicative du cloud de Nuxeo** (nuxeo.io), sous une infra cluster à base de CoreOs organisée avec etcd et systemd afin d'orchestrer l'instanciation des containers Docker dédiés a leurs produits.

## Talk 2

**Présentation du projet Boot2Docker** par Steeve Morin. 
De la genèse du projet, ou comment à partir d'une joke avec d'autres utilisateurs, il en est arrivé à construire une distrib a partir de [TinyCoreOs](http://distro.ibiblio.org/tinycorelinux/), les contraintes qu'il a du gérer pour réussir à compiler un noyau linux minimum, exécuter docker, et exécuter dans LXC son premier container.

![](/content/images/2014/Feb/dokerparis_steeve_boot2docker.JPG)

[@steeve](https://twitter.com/steeve‎) a partagé avec nous les concepts et les exigences qui tirent le projet ( taille minimaliste, exécutable en ram ONLY, cas d'utilisation etc...)  
Et pour finir une description de la communauté et de ses activités qui permets aujourd'hui au projet, de faire progresser, supporter et releaser [boot2docker](https://github.com/steeve/boot2docker‎).



[slides boot2docker](https://speakerdeck.com/steeve/boot2docker-at-the-paris-docker-meetup)

## Entre-Talks : PIZZAs !
Les livreurs, en scooter, sont arrivés a plusieurs pour amener toutes les pizzas tellement il y en avait...) #win #Nuxeo.

![](/content/images/2014/Feb/1392387514_47.png)

20 minutes de pizza bières et discussions entre tous les participants du meetup.

## Talk 3
Adrien Blind (et une deuxième personne dont j'ai pas noté le nom) sur **l'intégration de Docker en entreprise.**

Un talk extrêmement intéressant, c'est le résultat d'une étude que nous présenté [Octo Technology](http://www.octo.com), pour identifier comment Docker peut apporter de la valeur dans les processus d'une DSI d'entreprises.
De la mise en œuvre de solutions logicielles, jusqu'à leur exploitation sur le SI.
Plusieurs démarches et approches présentées avec leurs  risques et intérêts.

Clin d'œil marrant, mais tellement juste, sur un timing de l'intégration de docker en entreprise, en cause "l'inertie" (on va rester politiquement correct) qui peut exister dans les grosse organisations. 
Avec le collègue venu avec moi, on s'est regardé et on s'est dit, "ok on sait de qui ils parlent".

Bonus, une rapide présentation de [Shipyard](https://github.com/shipyard‎), pour orchestrer les containers docker dans un environnement multi host.

Les slides sont ici 
[docker-meetup-paris-enterprise-docker](http://fr.slideshare.net/ArnaudMAZIN/docker-meetup-paris-enterprise-docker)

## The End

Les slides de chacun de ces talks sont promis et attendus ..

Voilà, belle soirée, rencontres et présentations -- à bientôt pour le prochain meetup !

Et merci a [DockerParis](http://www.meetup.com/Docker-Paris), [@Patrick Aljord](https://twitter.com/patcito‎) et [@Nuxeo](https://twitter.com/nuxeo‎) pour l'organisation !

![](/content/images/2014/Feb/docker_logo.png)


