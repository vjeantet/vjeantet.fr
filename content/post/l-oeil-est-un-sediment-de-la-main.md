---
title: "L'œil est un sédiment de la main."
slug: "l-oeil-est-un-sediment-de-la-main"
date: 2026-07-20T10:00:00+02:00
draft: false
tags: ["GenAI", "DevSecOps", "compétences", "IA"]
---

<div class="tldr">

<span class="tldr-label">TL;DR</span> L'œil qui contrôle le code généré n'est pas une compétence à part : c'est un dépôt laissé par des années de code écrit, cassé, réparé à la main. En automatisant d'abord les tâches ingrates - celles qui justement formaient ce dépôt - on garde les superviseurs d'aujourd'hui mais on cesse d'en fabriquer. Le problème n'est pas la machine, c'est le dispositif : sans zones manuelles, incidents-écoles et budget de formation assumés, il ne restera bientôt plus personne pour voir ce qu'aucun référentiel ne liste.

</div>

Je lisais cette semaine un tweet sur le changement de nature du logiciel. Une phrase m'est restée :

> « Ai-je écrit la bonne ligne ? » devient « ai-je vérifié ce que la machine a produit ? »

Frappant de justesse : Le talent se déplace de **la main qui écrit** vers **l'œil qui contrôle**. 

J'y souscris, avec une réserve :

L'œil n'est pas une compétence autonome. C'est un sédiment de la main : l'expérience ou le savoir-faire.

## Ce qui fabrique l'œil

On ne repère pas un comportement suspect grâce à un référentiel. On le repère parce que quelque chose ne sent pas bon, et on ne connaît cette odeur qu'après expérimenté soi-même assez d'erreurs et l'avoir respirée.

Le senior qui, en review, s'arrête sur une fonction sans savoir encore pourquoi, a payé ce réflexe : dix ans de bugs, de rollbacks à 23h, de « ah oui, c'est encore ça ». Cet apprentissage ne s'est pas fait sur les tâches nobles. Il s'est fait sur les tâches ingrates : le CRUD répétitif, la migration de schéma, le parsing du fichier mal formé, le test qui échoue une fois sur trente.

Exactement celles que l'on délègue en premier. Non pas par calcul, mais parce qu'elles sont les plus faciles à déléguer.

C'est la nano-segmentation du problème de compétence : ce qui est le moins coûteux à retirer est aussi ce qui construisait le plus d'expérience.

## Le paradoxe n'est pas nouveau

Dans les années 80 on décrivait déjà, au sujet de l'industrialisation et de ses salles de controles, des situations paradoxales similaire :

- on automatique les tâches routinières, en laissant à l'opérateur la supervision et la reprise en main sur incident ;
- or la supervision et la reprise en main sont exactement ce qui exige le plus d'expérience... et l'automatisation a supprimé le moyen de l'acquérir.

L'aviation vit avec ce problème depuis quarante ans. Sa réponse n'a pas été de renoncer au pilote automatique. Elle a été le simulateur, la formation continue obligatoire, le vol manuel imposé, la culture d'analyse des incidents.

Autrement dit : reconstituer artificiellement les conditions de l'expérience, une fois que la production ne les fournit plus.

Nous n'avons rien de comparable pour l'ingénierie logicielle. Nous avons certe des référentiels de contrôle, mais ce n'est pas la même chose : Un référentiel décrit ce qu'il faut vérifier, il ne fabrique pas la personne capable de voir ce qui n'y figure pas.

## Le vrai risque n'est pas le surveillant qui fatigue

Il est ailleurs : le vivier de surveillants qui ne se reconstitue plus.

On sait recruter des orchestrateurs aujourd'hui parce qu'ils ont été artisans hier. La génération suivante n'aura pas eu cet hier. Un junior qui commence en 2026 avec un agent ouvert en permanence produira davantage qu'un junior de 2015 et accumulera moins de ce qui, à 35 ans, fait le **discernement**.

On m'objectera que trier des diffs générés, en accepter, en refuser, forme aussi l'œil. Sans doute. Mais réviser sans avoir produit, c'est apprendre à reconnaître l'odeur sur la photo d'un plat : on nomme ce qu'on a déjà vu échouer, on ne pressent pas ce qu'on n'a jamais cuisiné soi-même.

Et cette école-là ferme à son tour. À mesure que la supervision remplace la relecture, on ne lit plus la ligne : on valide un lot, un statut vert, un résumé. Le dernier terrain d'apprentissage, déjà pauvre, se referme. Il ne reste bientôt que le geste qui juge sans avoir touché.

Ce n'est pas un procès du junior ni de l'outil. C'est une question de dispositif : par quel chemin devient-on le superviseur dont l'ingénierie agentique a besoin, si le chemin lui-même a été automatisé ?
 \
 \
La question à poser bientot ne sera pas « l'IA sait-elle coder ? ». Elle sera : **Quelles questions ne sait-on plus se poser, faute d'avoir gardé la pratique qui les rendait pensables ?**


## Ce que ça implique, concrètement

Pas de solution générale. Quelques choix d'organisation qui me paraissent tenir :

- **Garder des zones délibérément manuelles.** Pas par nostalgie : pour continuer à produire du jugement. Elles se décident, se budgètent, et se défendent en comité - sinon elles disparaissent au premier arbitrage de vélocité.
- **Faire de l'incident un matériau de formation**, pas seulement un post-mortem à classer. C'est le simulateur du métier.
- **Séparer la revue de la génération.** Celui qui a prompté (et/ou généré) n'est pas le mieux placé pour douter du résultat ; il a déjà accepté l'intention.
- **Assumer que la montée en compétence coûte plus cher qu'avant.** Elle n'est plus un sous-produit gratuit de la production. Ce devra etre une ligne budgétaire !

Rien de tout cela ne viendra des modèles, ni des référentiels. Ce sont des décisions d'organisation, prises par des gens qui acceptent de perdre un peu de débit maintenant pour disposer d'un œil dans dix ans.

Le talent se déplace, dit-on. Il se déplace, oui, à condition qu'on lui laisse un endroit où se former.

---

*PS : la même question vaut pour la CyberSécurité ! Auditer un comportement généré demande d'avoir soi-même écrit, cassé et réparé. La conformité exigera de la traçabilité ; elle ne fabriquera pas les gens capables de la lire.*

#GenAI #compétences #DevSecOps #IA
