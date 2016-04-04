+++
date = "2014-02-21T19:04:24+01:00"
draft = true
title = "Un SI trés \"Team Spirit\""

+++
Mon SI est composé d'une dizaine d'applications, installées sur 3 serveurs. 2 sont hébergées chez un hébergeur internet, le troisième dans un réseau privé.

Pour accompagner le développement de l'entreprise, préparer la montée en charge sur les prochains mois, je cherche à réduire :

- les contraintes techniques liées aux dépendances entre les composants logiciels.
- l'adhérence de configuration permettant d'assembler les applications.
- l'effort consenti par les ops pour organiser les services, applications sur les ressources matériels.

Mon objectif est de **créer un lien**, entre tous les composants du SI, pour donner **le sentiment qu'ils fassent corps**, en leur mettant à disposition les moyens d'œuvrer pour le bien de chacun d'entre eux et donc de leurs utilisateurs.

Pour cela des **tactiques** devront être développées et utilisées pour répondre ensemble, aux montées en charge, aux baisses de régime, a l'intégration de nouveaux composants et aux événements liés à leur cycle de vie.

Pour faire simple : implémenter un **"esprit d'équipe"** au sein du SI, et par effet de bord, au sein de la DSI.

3 caractéristiques me semblent essentielles pour y arriver :

- la cohabitation. 
- la communication. 
- l'adaptation.

Je vais détailler cette approche, que certains trouveront trop humaine voir utopique, en des termes plus technique.

*Les composants, dont je parle, forment l'ensemble des services, des applications qui les fournissent et des ressources matériels qui permettent leur exécution.*

## Cohabitation

Chaque composant doit pouvoir fonctionner au côté de n'importe quel autre composant, sans conflits de dépendances.
Qu'elles soient logicielles (versions de python différente par exemple)
ou système (2 applications qui ont besoin d'écouter sur le même port). 

[strip_cohabitation_fail]!

Cela passera par une isolation technique des composants logicielles :  virtualisation et la containérisation.

[strip_cohabitation_win]!

## Communication
Les composants doivent être capable d'etre a l'écoute et de se parler.

[strip_communication_fail]!

Ceci leur permettra de s'organiser, s'assembler, et de réagir pour s'adapter.

La solution passera peut être par une messagerie applicative type xMQ (MQSeries, RabbitMQ, ZeroMQ, NsQ...)

[strip_communication_win]!

## Adaptation
Les composants doivent être capables de s'assembler eux-même, et s'adapter aux changements et événements du SI.

[strip_adaptation_fail]!

Je ne connais pas de solutions pour accueillir et gérer des stratégie  d'adaptation, je pense donc que l'implémentation passera par des algorithmes maison.

[strip_adaptation_win]!

En pratique on doit être capable, par exemple,
- de déplacer un service comme le smtpd d'une machine x vers la machine y, et/ou d'ajouter un service smtpd supplémentaire qui soutiendrait les instances existantes.
- de gérer la mise hors service d'un service, la mise en service de nouvelles instances formant un cluster.


----  

Dans les prochaines semaines, je detaillerai l'avancée de ce petit exercice. vos commentaires sont les bienvenus => [@vjeantet](https://twitter.com/vjeantet)

