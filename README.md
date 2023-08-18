# Projet de développement d'application web (L3 semestre 2)

## Présentation du projet

Dans le cadre de l’enseignement Développement et application web, nous devons réaliser par groupe de 5/6 un site de rencontre pour joueurs de Go. Ce projet présentait deux principaux buts, l’un étant la gestion d’un projet en équipe imposé, et l’autre l’exploitation de toutes les technologies étudiées lors de ce semestre, tel que le langage PHP, principal sujet du cours de Web. 

Le déroulement du projet s’est étalé en plusieurs étapes :
* L’exploitation du sujet présentant un cahier des charges pour la réalisation du projet.
* La conception du projet.
* La répartition des tâches et le planning.
* La réalisation du projet.
* La réalisation du rapport en vue de la soutenance.

Nous avons organiser plusieurs réunions en groupe afin d’analyser le sujet, de définir les contraintes, le travail à faire ainsi que sa répartition. Il en est ressorti 5 grandes parties :
* La partie design
* La partie Goban
* La partie PHP
* La partie base de donnée
* la partie jouabilité du Go

## Cahier des charges

### Technologies utilisées

Pour ce projet, nous avons fait en sorte d’utiliser au mieux toutes les technologies étudiées, afin de développer au mieux le site.
* HTML et CSS pour le design du site
* Javascript pour la jouabilité du Go ou quelques fonction pour le site
* PHP pour la connexion et l’inscription des joueurs ainsi que quelques petites fonctionnalités comme la vérification des formulaires
* PDO pour la connexion à la base de données
* Ajax et PHP pour le chat
* Le MVC pour l'architecture du site

### Liste des fonctionnalités

Toutes les fonctionnalités sont réparties sur 4 grands thèmes, la gestion des joueurs, la gestion des parties, le système de chat et le jeu de Go.

* **La gestion des joueurs** : La gestion des joueurs se fait à partir de trois fonctionnalités différentes, la connexion, l’inscription et la radiation. Les utilisateurs du site devront donc pouvoir s’inscrire via un formulaire (à l’aide d’une adresse email valide qui sera vérifiée),et se connecter au site via un autre formulaire (afin d’accéder à toutes les fonctionnalités du site).
Les joueurs pourront par la même occasion se voir interdir l’accès au site s’ils présentent un comportement irresponsable.

* **La gestion des parties** : La gestion des parties se fait sur différents points, la création, l’enregistrement ou encore l’accès aux anciennes parties.
Pour la création des parties, un utilisateur connecté pourra créer des parties à l’aide d’un formulaire définissant certains critères de jeu (statut, taille de la grille,etc). Il sera possible d’inviter un joueur dans sa partie ou d’en rejoindre une autre.
Toutes les parties créées seront enregistrées et les utilisateurs pourront les revoir où les rejouer à n’importe quel moment.

* **Le chat** : Les joueurs peuvent dialoguer entre eux via différents chats, l’un en jeu permettant aux deux adversaires d’une partie de communiquer entre eux, et l’autre permettant aux spectateurs de discuter entre eux.

* **Le jeu** : Le système de jeu permettra de jouer sur différentes grilles spécifiques au jeu de Go. Les règles sont implémentées de sorte que le jeu soit fonctionnel.
Les adversaires auront la possiblité de passer leur tour, permettant à une partie de se terminer si les deux joueurs le font successivement.

* **La gestion du profil** : L’utilisateur va pouvoir changer le thème du jeu afin de respecter l’une des contraintes imposées. Il aura ainsi la possibilité de choisir entre 3 différents thèmes proposés, par le biais d’un bouton InGame qui changera l’apparence du plateau et des pions. Il pourra par ailleurs voir le classement des joueurs ou les parties qu’il aura jouées.

Certaines fonctionnalités ont été ajoutées tel que le classement, ou l’historique, permettant de voir
par exemple son nombre de victoires. Nous avons aussi ajouté le fait de pouvoir jouer sur différentes grilles (9x9 et 13x13), qui nous parraissait essentiel pour des nouveaux joueurs par exemple.

