+++
date = "2026-07-11T10:00:00+02:00"
draft = false
slug = "securiser-un-agent-de-coding-sans-le-rendre-inutile"
tags = ["cybersécurité", "ZeroTrust", "GenAI", "DevSecOps"]
title = "Sécuriser un agent de coding sans le rendre inutile."

+++
On a passé quelques années à faire progresser la segmentation : du firewall périmétrique aux VLAN, puis à la micro-segmentation au niveau des workloads. Chaque machine n'accède qu'à ce dont elle a besoin.

Les agents de coding (Claude Code notamment) déplacent le problème : la menace n'est plus une machine compromise, mais un processus légitime, sur votre poste, avec vos droits.

Depuis peu, j'accompagne leur déploiement en environnement d'entreprise. Les apprentissages sont autant organisationnels et méthodologiques que techniques : gouvernance, responsabilités, façon de travailler des équipes ; c'est un autre sujet, au moins aussi riche.

Je partage ici un petit enseignement purement cyber/technique.

Lors du déploiement aux acteurs IT, un dilemme se pose trés vite car pour être utile, un agent a besoin d'accès larges. Fichiers, shell, réseau; Et avec ces accès des risques **non négligeables** :

- exfiltration de secrets (.ssh, .aws, .env) : lecture disque + accès réseau, rien de plus ;
- prompt injection : une issue GitHub piégée suffit à détourner un agent « obéissant » ;
- supply chain : un postinstall malveillant s'exécute avec vos droits.

Les garde-fous configurés dans l'agent luimeme ne protègent pas de l'agent : c'est lui qui les interprète. Faire confiance n'est pas contrôler. <-- cela a été une surprise, mais avec le recul... tellement évident. Quand on observe un ClaudeCode bruler méthodiquement des tokens pour se défaire de son harnais... c'est impressionant !

La suite logique, c'est la nano-segmentation : appliquer au processus ce que la micro-segmentation applique à la machine. Un périmètre default-deny, imposé de l'extérieur - ici par le noyau (Landlock sur Linux, Seatbelt sur macOS). C'est ce que fait nono, un outil open source que l'on a investie et utilisé quotidiennement : tout ce qui n'est pas explicitement accordé est refusé, quelles que soient les décisions de l'agent.

    nono run --profile always-further/claude -- claude

Un firewall au niveau du processus : l'agent garde son autonomie, le périmètre n'est plus négociable.

J'ai produit un guide visuel de l'architecture pour vous permettre d'avoir rapidement le modele mentale de l'outil (capabilities, cycle de vie d'un run, proxy réseau, rollback) : [version française](/content/nono-modele-mental/index.fr.html) / [english version](/content/nono-modele-mental/index.html)

Le projet : [github.com/nolabs-ai/nono](https://github.com/nolabs-ai/nono)

Si vous faites tourner des agents de coding, testez le sandboxing OS : coût d'adoption faible, garantie structurelle.

PS: ça marche aussi pour les jobs dans le CICD et/ou en production.

#cybersécurité #ZeroTrust #GenAI #DevSecOps
