+++
date = "2014-04-18T23:00:00+02:00"
draft = false
slug = "devoxx-france-2014-review"
tags = ["event", "devoxx"]
title = "Mon Devoxx France 2014"

+++
3 jours de conférences au Devoxx france 2014

# Devoxx FR Jour I

Première journée, récupération du badge, tour des exposants, goodies, café croissants, tout commence bien.

Déjà 9h20, les sessions du matin vont commencer, la salle où l'on va parler docker est pleine à craquer #fail pour moi.

Redirection immédiate vers "Angularjs from scratch"... La salle craque... Je me repli vers l'auditorium sur Cassandra ; la salle peut encore accueillir du monde, ça tombe bien, ça m'intéresse.

## Techniques de modélisation avancée avec Cassandra

3h sur [Cassandra](http://cassandra.apache.org), explication en profondeur de fonctionnement de Cassandra: structures de données, patterns et antipatterns, modèlisation, structures de persistance, language de requêtes etc... Speaker, DuyHai DOAN (@doanduyhai), de très bonne qualité.

# Buffet !
![](/content/images/2014/Apr/resto.png)
Midi on mange ! Au buffet !

## Linux 101 (ou Linux, domptez le pingouin)
On reprends a 13h30 sur la session de 3h "Linux 101 (ou Linux, domptez le pingouin)"
"Un voyage au cœur de L'OS qui commence au boot, exécution du kernel, qui passe par les systèmes de gestion des services..." ... "On ouvre le capot !".
Les 2 intervenants ont préparé un scénario pour rendre la chose plus dynamique, marrante c'est plutôt bien vue !
La salle est pleine, on commence par la découverte des commandes: more, cd, cat.... 20 minutes, puis on continue avec find, grep, sudo... je m'assoupi.

Je me réveille 40 minutes avant la fin. "grub" est sur les slides, puis on termine avec systemd, c'est ce qui m'a le plus intéressé.

Bref déçu par le contenu, les auditeurs connaissaient déjà linux, les intervenants étant des experts redhat & Devops, je pensai que l'on allait rentrer dans l'os et pas le découvrir en surface.
Ça fera tout de même une belle vidéo pour qui ne connais que très très peu linux et voudrait le redécouvrir.

#Café !
![](/content/images/2014/Apr/cafe.png)

## Talk "Redis, une base Not Only NoSQL"

Auditorium presque complet. Au menu : utilisation de [redis](http://redis.io)  en base principale, retours d'expérience, bonnes et mauvaises pratiques, et uses cases d'utilisations de redis.
Très bon Talk ! Contenu et rythme ! 
Bravo au speaker Nicolas Martignole (@nmartignole).

## Talk "Détection de malwares par leur empreinte réseau."
Salle pleine, je reste debout au fond de la salle.
Un court talk, complet sur la démarche, le process et l'architecture technique mise en œuvre pour identifier des "comportements" originaux. [Hadoop](http://hadoop.apache.org), [Storm](http://storm.incubator.apache.org) etc... BigData et mathématiques.
Explications trés denses mais efficace de Thomas Bailet @bailetthomas.

## Talk "Bluetooth Low Energy"
Pour finir la journée, le [BLE](http://en.wikipedia.org/wiki/Bluetooth_low_energy) ! Passage en revue des technologies NFC/Bluetooth/BLE, modèles de programmation, demo sur un rasperry Pi. Hello World ~~s'affiche~~ se lit en BLE :)
Bravo Romain Menetrier (@romemore), l'effet démo était pas loin mais a été évité !

Au passsage, pour ceux qui s'interessent au BLE, je recommande 1 livre : [Bluetooth Low Energy: The Developer’s Handbook](http://blog.bluetooth-smart.com/2012/12/09/bluetooth-low-energy-the-developers-handbook/) et un projet Kickstarter, [MetaWare](https://www.kickstarter.com/projects/guardyen/metawear-production-ready-wearables-in-30-minutes) ,que Romain Menetrier m'a fait découvrir pendant la conférence 

# Devoxx FR Jour II
## Talk Realtime Web avec Akka, Kafka, Spark et Mesos
Ce talk est un retour d’expérience sur la mise en œuvre de Spark et Streaming Spark. 
Talk trés interessant, bien présenté, le retour d'expérience est vraiment le type de talk que je préfère, ça a une valeur inestimable, le temps.

Les sujets abordés, la collecte de donnée temps réél, la distribution des taches/message grace à [Kafka](http://kafka.apache.org), leur traitement batch et temps réél avec [Spark](http://spark.apache.org).
Et enfin l'orchestration de tout cela appuyée sur [Apache Mesos](http://mesos.apache.org) et [Marathon](https://github.com/mesosphere/marathon).

TAlk présenté par	
  * Hayssam Saleh @hayssams
  * Jean-Philippe Bunaz @jpbunaz
  



# Talk Les Applications Réactives.
Voici le talk que j'ai préféré.
Ci dessous le synopsis de la conférence 
> A quels enjeux est confrontée une entreprise qui souhaite développer sa stratégie digitale ? Pourquoi les paradigmes de développement classiques ne sont pas adaptés pour développer les applications du futur ? Nous montrerons tout d'abord pourquoi au delà du buzz marketing, les Applications Réactives apportent une réponse aux défis que doivent relever les organisations. Nous décrirons ensuite les principes réactifs et en illustrerons la mise en oeuvre avec la Plate-forme Play/Akka en Scala.

Présenté par	

  * Fabrice Croiseaux
  * Antoine Detante
  
Les 2 speakers animent un podcast technique  : [nipdev](http://nipcast.com/category/nipdev/)

## Talk Cassandra, une nouvelle ère
Mon deuxieme talk sur cassandra, le premier était trés detaillé, du retour d'expérience etc...
Celui ci était animé par le papa de Cassandra, qui nous a fait toute le présentation en francais.
Une présentation complète du système, interesante.

Présenté par	

*  Jonathan Ellis @spyced‎

# Développer en mode Kick-Ass
Un developpeur de Atlassian est venu partager les méthodes et l'esprit qui animent les équipes d'atlassian (informaticiens et non informaticiens)

Présentation trés dynamique, drole et tellement vrai, le developpement Kick-Ass !!

Pour l'anecdote, Samuel le Berrigaud, pendant la scéande à subie une defaillance du rétro projecteur, j'ai pas du m'enpecher de twitter aussitot :)

> le développeur QuiCasse le rétro au #devoxxfr :-) #devkickass

En fait le developpement (d'ailleur ça va au dela du developpement) Kick-Ass c'est l'esprit original de DevOps, appliqués à toutes les métiers qui collaborent entre eux.

Présenté par	
*   Samuel le Berrigaud @sleberrig

# Talk PIT, pour savoir si vos tests vous protègent des mutants
Rapide talk d'un architecte technique de la SG pour nous parler de mutants et de tests. 
L'efficacité et la pertinence des tests unitaires, comment les vérifier ? ==> [PIT mutation testing](http://pitest.org) !

Présenté par	

*  Alexandre Victoor - @Alex_Victoor


# Talk - L'internet des objets par l'exemple
Retour d'expérience sur la mise en place des machines à voter mises en place dans les salles de conférence devoxx.
- problématique électriques, réseau, matériels, choix techniques, choix logistiques, logiciels, communications, etc... trés interessant, bravo aux équipes de [Xebia](http://www.xebia.fr)

*  Mots clefs interessant : [Mqtt](http://mqtt.org), [Mosquito](http://mosquitto.org), [Cloudmqtt](http://www.cloudmqtt.com), [Paho](http://www.eclipse.org/paho/)

Ce que j'ai retenu : 
> "Chacun son métier !, la construction physique d'objet, c'est pas le notre."

# Devoxx FR Jour III

## Talk sur Mahout
Démystification sur [Mahout](https://mahout.apache.org) ainsi que les concepts qui se cachent derrière les termes “machine learning”.
15m de retard, on s'attarde un peu sur la société, et on rentre dans le sujet.
Fonctionnement des machines learning, on a eu une brève explication, un peu de code Mahout, un peu de mathématique/statistique, bref un vernis technique.

## Google Cloud
Décryptage des offres cloud, belle explication de ce qu'est app engine, compute engine et des Managed VM ( qui fonctionnent avec Docker ), c'est la même présentation que [celle du GDG paris](http://vjeantet.fr/meetup-pre-devoxx-googledevgroup-paris/), mais plus complète et plus clair !

Présenté par Ludovic Champenois ! @ludoch

Pour les présents, une distribution de code d'essai des offres google clouds...
Je vais pouvoir vérifier si, en pratique, c'est moins cher et moins chronophage que les offres OVH.

Actuellement, 1 seul container docker sera capable de tourner dans la ManagedVM, mais ils travaillent à améliorer cela et permettre d'executer autant de container que l'on veut.

## Go pour Javaneros
2 eme présentation du language [GO](http://golang.org) au devoxx.
Cette année , elle est directement adressée aux développeurs Java : une introduction rapide de tous les concepts qui font la force de GO, son language et son outillage, les similitudes avec java et ses différences.
Présentation bien animée, malgrés des problèmes techniques.

Enfin pendant une démonstration live du fonctionnement de la concurrence dans go, Francez a introduit un `Time.sleep()`, qu'il a supprimé ensuite en mettant en garde l'audience :
> "il ne faut pas mettre de slip !"

Petite pause mentale de Francez, il ne semble pas sûr de son français sur le moment -- ça y est, il a compris, il retiens un sourire en coin -- effet immédiat : éclatement de rire dans la salle... :D !

Présentation très dense pour qui n'a jamais fait de go : embeded struct, interface, channel.. Et tout le reste en 50 minutes chrono.

Heureusement que l'on n'a pas parlé de la [génération de la doc](http://godoc.org/code.google.com/p/go.tools/cmd/godoc), des régles de [formatage du code ](http://golang.org/doc/effective_go.html#formatting) intégrées aux spécifications du language, des dépendances, "[go get](http://golang.org/cmd/go/#hdr-Download_and_install_packages_and_dependencies)" etc...

@francesc, je veux le meme tee shirt que toi !

## TAlk "Rétrospective: les projets cloud computing"
Sceance intéressante, une retour de [SFEIR](http://www.sfeir.com) basée sur leurs expériences avec le cloud.
Très instructif, beaucoup d'exemples de mauvaises pratiques et démystification du "cloud", le tout en 10 leçons.

A surveiller : le "[Big query](https://developers.google.com/bigquery/)" de Google.

Présenté par Aurélien Pelletier @toutantic et Didier Girard.

Devoxx terminé, je vais dormir. (Correction des fautes d'orthographe pour demain...)

Pour info, toutes les conférences étaient filmées, et seront disponibles bientot.


![](/content/images/2014/Apr/devoxxfrjesuisdeveloppeur.png)
