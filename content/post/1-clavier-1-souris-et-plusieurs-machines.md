+++
date = "2005-04-14T22:17:00+02:00"
draft = false
slug = "1-clavier-1-souris-et-plusieurs-machines"
tags = ["tools"]
title = "1 clavier, 1 souris, et plusieurs machines."

+++
Vous avez 2 écrans branchés sur une même machine, ou plusieurs ordinateurs sous différents OS.

Je vous présente dans ce billet des méthodes pour profiter au maximum de vos machines avec 1 clavier et 1 souris.

Autrement dit : passer la souris/clavier de votre PC linux à l'ordinateur portable sous MS Windows ou MACosX, et ceci de manière naturelle sans manipulation spéciale.



Tout informaticien ou geek qui se respecte posséde au moins 2 ordinateurs chez lui, ou au moins 2 écrans branchés sur sa machine.
Il y a donc aussi au moins 2 claviers et 2 souris qui traînent sur le même bureau et c'est tout de suite moins marrant de passer d'un clavier à l'autre (quand on se trompe pas) et d'une souris à l'autre.

# Les solutions existent

* Installer un "Switch KVM" (Keyboard, Video, Mouse), un petit boitier sur lequel vous branchez 1 clavier et 1 souris, et que vous reliez à toutes vos autre machines.
	* Problèmes : vous devez relier physiquement toutes les machines (cartes graphiques, sortie clavier/souris) au boîtier, et appuyer sur un bouton pour passer d'une machine à l'autre, et payer !
	* Avantages : Ça marche avec tous les systèmes et aucune installation de logiciel n'est nécessaire.
* Utiliser 1 seul écran/clavier/souris et prendre le controle des autres machines en mode console, ou en mode graphique avec un PcAnywhere / VNC / Remote X Session (Unix / Linux)
	* Problèmes : C'est pas pratique, vous gardez 1 écran et perdez en surface utilisable.
	* Avantages : Ça marche avec tous les systèmes. / des outils gratuits existent
    
3eme solution, utiliser tous les écrans, avec un seul clavier, une seule souris, pour former un unique large écran virtuel.

En fait pour passer d'un écran à l'autre, il suffira de glisser la souris vers le bord en direction de l'écran suivant, et quand elle disparaît d'un écran elle apparaît sur l'autre écran, créant l'illusion que vous avez déplacé la souris sur l'autre écran (le clavier est actif sur l'écran où est la souris, idem pour? le presse-papiers ! et ceci d'un OS à l'autre !)

Vous disposez les écrans de la manière que vous voulez.

# Les outils existent et ils sont tous gratuit

* Synergie, le plus complet, vous permet de partager votre souris/clavier/presse-papier entre plusieurs machines (windows/Linux/Unix) et MAC ( même combinés ).
* x2x lui est limités aux serveurs X donc, linux/unix/macOsx et windows (si vous installer un serveur x dessus).
* x2vnc est utilisable lorsque le clavier et la souris sont sur un ordinateur sous serveur X, et les autres machines sous n'importe quel OS, ce logiciel utilise le protocole RFB de VNC pour communiquer avec les autres ordinateur.
* win2vnc lui est fait pour l'utilisateur qui a son clavier/souris branchés sur une machine Windows, les OS des autres machines n'ont pas d'importance.


# Tous ces outils fonctionnent de la même façon

* (pour windows) il faut installer un serveur VNC sur les machines esclaves.  
(pour linux/unix/mac) il faut autoriser les connections depuis la machine maître. (une simple commande du type : $xhost + machineMaitre)
* Sur la machine Maître (celle sur laquelle le clavier et souris sont installés) on lance x2x, x2vnc, win2vnc ou Synergie (en fonction de sa configuration).
On déclare que la machine esclave1 est à gauche de l'écran maître, que exclave2 est à droite, en bas ou en haut par rapport au maître, ainsi de suite.
* Avec votre souris, passez d'un écran à l'autre.

## Explications techniques

Lorsque vous avez démarré l'outil en lui indiquant que par exemple, la machine esclave 2 est à droite de l'écran maître, l'outil va créer une fenêtre (invisible) de 1 pixel de largeur et prenant toute la hauteur de votre écran, lorsque la souris passe dessus, hop ! il envoie le focus sur l'autre écran (en fait il envoie uniquement les codes des touches claviers et les coordonnées de la souris.).

Le point négatif que l'on peut trouver au système c'est la sécurité : les informations passent par le réseaux (dans le cas de plusieurs machines) et en clair (protocole RFB ou Xwindow).

La solution sous linux/unix est de créer un tunnel SSH entre maître et esclave.

A noter que vous pouvez utiliser ce système en local si vous avez 2 ou 3 écrans banchés sur le même PC ! (Le mode Xinerama vous permet ceci... mais pas si vous avez un serveur X par carte graphique. (Xinerama = un serveur logique sur plusieurs cartes graphiques).

C'est simple, limite débile, mais c'est excellent et extrêmement pratique.

# Les liens

**Synergy**  
<http://synergy2.sourceforge.net/>
le plus complet de ces outils, écrans de veille synchro, multi OS dans tous les sens...
licence : GPL

**x2x**  
<http://freshmeat.net/projects/x2x/>
pour serveurs Xwindow seulement.
Licence BSD

**x2VNC**  
<http://fredrik.hubbe.net/x2vnc.html>
Au moins le serveur maître en Xwindows, limité, techniquement, à 2 écrans !
Licence GPL

**Win2vnc**  
<http://fredrik.hubbe.net/win2vnc.html>
description
la même chose que x2VNC mais pour serveur Windows seulement
