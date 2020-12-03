# challenge_wild_series

# Challenge 01

Homepage Wireframe & Style Guide

Pour ce projet, les user stories et le wireframe principal sont déjà réalisés.
À ton tour de réfléchir à la conception !

Bien que le wireframe de base soit fourni, il faut encore :

- Réaliser le wireframe de la page d’accueil.

Donne libre cours à ta créativité, sans ajouter sur la page d’accueil des fonctionnalités qui ne sont pas présentes dans les user stories.

Enfin, comme cette application sera finalement unique et la tienne, nous te laissons le choix de la charte graphique !
Crée un styleguide à ton goût !
Pour exemple, voici ce à quoi peut ressembler un StyleGuide : StyleGuide. Il te faut alors :

- Choisir les couleurs principales et secondaires de ton application
- Choisir tes typographies

Critères de validation

Le wireframe de la page d’accueil est présent
Le styleguide comporte à minima une palette de couleurs et une typographie


# Challenge 02

Initialisation du projet Wild Series

Le défi est simple :

- Crée un nouveau projet Symfony Web pour ton Wild Series et push ton projet sur Github.
- Copie l’URL de ce dépôt git dans le champ solution.

Critères de validation

- Le dépôt contient les dossiers suivants  : bin/, config/, public/, src/, templates/, tests/, translations/ et quelques autres fichiers (.gitignore, composer.json, etc.).

- Le dépôt ne contient évidemment pas les répertoires .idea/ et vendor/.

- Le correcteur peut installer le projet sur sa machine (voir étape : Installer un projet Symfony existant) et la page "Welcome to Symfony" s'affiche sur la route / en accédant à l'url http://localhost:8000/.

- Ton code devra être disponible sur un repository Github.

Attention : Ton repository Github doit être public pour que les correcteurs puissent y accéder.


# Challenge 03

La page d'accueil de ton site

Lors des étapes tu as créé la page d'index de tes séries.
Mais qu’en est-il de ta page d'accueil ?

- Crée un nouveau contrôleur DefaultController

- Crée une méthode index() et une route en annotation nommée app_index qui devra répondre à une requête sur l'url / (la page par défaut de ton site finalement).

- Elle devra afficher un titre h1 contenant Bienvenue ! grâce à un template Twig nommé index.html.twig à la racine, qui étendra base.html.twig. Pour le moment, ne pense pas au CSS, tu t’en chargeras lors d’une prochaine quête !

Critères de validation

- Il y a un fichier DefaultController.php dans src/Controller de l'arborescence.

- Ce fichier comporte une classe DefaultController et étend le AbstractController de base de Symfony.

- La route sur / est faite en annotation et est nommée app_index.

- Le méthode index() du contrôleur se finit par un return $this->render('path_vers_un_twig');.

- Le fichier Twig index.html.twig étend base.html.twig et comprend un titre h1 "Bienvenue sur Wild Series".

- L'URL http://localhost:8000/ est fonctionnelle et le titre s'affiche.

# Challenge 04

C’est le moment de donner de la couleur et de la vie à ton Wild Series ! Grâce à Webpack et Bootstrap.

- Installe et configure Webpack Encore pour ton projet Wild Series.

- Charge SASS loader et JQuery.

- Intègre le framework Bootstrap (en suivant la ressource).

- Créé une navbar dans un fichier _navbar.html.twig et inclus ce fichier dans une balise <header> de ton fichier base.html.twig, afin que celle-ci s’affiche sur toutes les pages.
  
- Ajoute un simple lien permettant de revenir sur la page d’accueil (Utilise une navbar Bootstrap)

- Surcharge les variables de couleurs primaires et secondaires en te basant sur ton styleguide.

- Modifie le projet pour que tous tes assets (JS, CSS) soient dans le dossier assets/, et lance le build de Webpack Encore.

- Modifie tes appels aux assets pour que ton site utilise ceux générés dans ton dossier build/.

- Héberge le projet sur Github avec tous les fichiers non suivis dans le .gitignore.

- Bonus : ajoute une favicon de ton choix dans le dossier images et appelle là.
  
Critères de validation

- Symfony Encore est bien intégré dans le projet.

- Bootstrap et JQuery sont bien chargés dans tes pages (regarde les sources HTML et vérifie que tu n'as pas de 404 sur tes fichiers dans l'inspecteur > "Réseau").

- La navbar de Bootstrap s'affiche correctement sur tes pages

# Challenge 05

Crée ta propre route

- Crée une route /programs/{id}/ permettant de charger une vue affichant l'id du programme sous forme de titre, dans une balise h1.
- Le paramètre id doit être un entier.
- Si l'id n'est pas un entier, la route devra renvoyer une erreur 404 (utilise les requirements de paramètres).
- La route devra être reliée à une méthode show du ProgramController.
- La route ne devra être accessible qu'en GET.

Critères de validation

- La route est correctement définie, en annotations, et est reliée à la méthode show() de ProgramController.
- La classe ProgramController est annotée de manière à ce que toutes les routes de ce controller soient préfixées par /programs/ et leur name préfixé par program_.
- Une vue templates/program/show.html.twig est créée.
- Le résultat correspond aux attentes :
- La route /programs/4 affiche bien une vue avec en titre Program 4 dans un h1.
- La route /programs/quatre n'affiche rien (erreur 404) car le paramètre n'est pas un entier.
- La route n'est accessible qu'en GET. Tu peux tester qu'un POST sur ta route te retourne bien une 404 en exécutant la commande suivante dans ton terminal.

# Challenge 06

- Crée les entités Category et Program (sans liaison)
- Crée deux entités Category et Program.

- Category
id : integer (Clé primaire)
name : string (Obligatoire, valeur max 100).

- Program
id : integer (Clé primaire)
title : string (Obligatoire)
summary : text (Obligatoire)
poster : string (Facultative)

Pour le moment ces deux entités ne sont pas liées.
Tu dois également mettre à jour ta base de données en conséquence.

Critères de validation

- Pour la correction de cette quête, dans un premier temps récupère le travail de ton camarade Wilder à corriger depuis son dépôt Gihub, Ensuite, configure le fichier .env.local comme il se doit, mais en précissant pour nom de base de données wild-series_NOM_Prenom_du_wilder_à_corriger. Enfin, suis les étapes suivantes de validations :
- Lance la commande d’execution des classes de migrations. Attention ! Pas la commande de générations des classes !, Tu as un message de succès à la fin de la migration.
- Lance la commande doctrine:mapping:info, le résultat affiche bien les deux entités Category et Program.
- Lance la commande doctrine:schema:validate, le résultat affiche bien OK pour le mapping ET la base de données.
- Ton code est disponible sur un repository GitHub


Wild Code School

07 - Symfony : Relation "Many-To-One" avec Doctrine

Symfony 5
3 pairs

07 - Symfony : Relation "Many-To-One" avec Doctrine

Introduction

En base de données relationnelle, les différentes tables peuvent être liées entre elles. Les entités de ton application Symfony étant un reflet de ta base de données, il paraît pertinent de conserver cette association entre les différentes classes que sont tes entités.

Cette quête va t'apprendre à créer des relations entre tes différentes entités. Tous les liens doivent être renseignés au sein des différentes classes pour que l'ORM sache les interpréter. Pour cela, tu vas utiliser les annotations que tu as vues sur une quête précédente.

🤓 À la fin de cette quête, tu seras capable de :
✅ Mettre en place une relation Many-To-One avec deux entités
Définir la relation
Identifier la relation :
Dans notre cas, tu as déjà la solution. Tu vas utiliser une relation Many-To-One. Mais qu'est-ce que cela signifie précisément et existe-t-il d'autres types de relation ?

La relation Many-To-One est la plus commune, mais il existe également :

One-To-One
One-To-Many
Many-To-Many
avec des déclinaisons unidirectional, bidirectional, self-referencing. Tu verras toutes ces autres relations et déclinaisons dans de futures quêtes.

Que signifie précisément une relation Many-To-One ?

Cela suit la même logique que lorsque tu travailles sur la modélisation de base de données. La réponse va dépendre du besoin de l’application en cours de développement. Il faut réfléchir au lien entre tes entités. Dans le cas présent, Category et Program.

Un Program peut-il appartenir à une ? ou plusieurs Category ?

Une Category peut-elle contenir un seul ? ou plusieurs Program ?

Ce qui semble évident, c'est qu'une Category peut contenir plusieurs Program.
Par exemple, Walking Dead, American Horror Story et The Haunting of Hill House (qui sont des Program) font partie d’une seule catégorie “Horreur”.
Nous avons donc plusieurs Program pour une seule catégorie.


Diagramme de classe UML représentant une relation de composition entre nos deux classes.

Application :
Il y a une certaine cohérence avec ce que tu faisais jusqu’à présent en gestion de base de données relationnelle. Mais il va falloir assimiler une nouvelle manière de penser.

Doctrine est un ORM et, comme tu l’ a compris, le “O” veut dire Object. Et comme son nom l’indique, il ne fonctionne qu'avec des objets. Cela va donc se traduire par une nouvelle propriété category dans l'entité Program. Cette propriété n'aura pas un type "basique" (string, integer...) mais un type "Relationships” (Associations).

Du côté logiciel, il faudra donc penser dorénavant en terme d’interactions entre différents objets.

Cependant, rien ne change pour ton SGBD ! Il fonctionne de la même manière ! Ainsi au niveau base de données, cette relation "objet" sera traduite par une clé étrangère (category_id) dans la table program. Et comme d’habitude au niveau de la base de données, ça sera bien un integer qui sera stocké.

Il ne faut pas qu'il y ait de confusion à ce sujet : l'ORM gère des objets, la base de données gère des données "basiques" (integer, char, varchar, float...). Les entités que tu manipules et les tables sont très proches, mais il subsiste quand même certaines différences, qui font qu’on ne peut pas dire que “une entité = une table”.

Documentation officielle Doctrine
https://www.doctrine-project.org/projects/doctrine-orm/en/2.7/reference/association-mapping.html
Créer la relation dans Symfony
Afin de réaliser la première étape, Symfony t'aide encore grâce à sa console en te proposant de mettre à jour ton entité déjà existante.

Remarque
Tu pourrais tout faire à la main en modifiant directement tes classes, mais l'utilisation de la console te permet d'aller plus vite et d'éviter les erreurs.

1
symfony console make:entity
Lorsque tu vas indiquer en Class name le nom d’une entité déjà existante, doctrine va comprendre que tu souhaites y ajouter une propriété. Ne te trompe pas en mettant un autre nom sinon doctrine créera une nouvelle entité !


Et le résultat dans ta classe Program :

1
2
3
4
5
/**  
 * @ORM\ManyToOne(targetEntity="App\Entity\Category")  
 * @ORM\JoinColumn(nullable=false)  
 */
 private $category;
Il faut noter une chose importante. Lorsque Symfony te propose :

Do you want to add a new property to Category so that you can access/update Program objects from it - e.g. $category->getPrograms()? (yes/no) [yes]:
Il te demande en fait si tu souhaites que ta relation soit bidirectionnelle. Pour le moment, réponds no. La notion de bidirectionnalité arrivera dans une prochaine quête. Chaque chose en son temps !

Documentation Symfony sur la partie mapping de Doctrine
https://symfony.com/doc/current/doctrine/associations.html#the-manytoone-onetomany-association
Parce que l’”Entité”, ce n’est pas la ”table”.
Très bien, tu as rajouté la relation entre ces deux entités au sein de ton application. Mais garde en tête que ton entité n’est pas directement reliée à ta base de données.

N’oublie pas d’impacter sur ton SGBD toutes les modifications que tu effectues côté PHP sur tes classes d’entités. C'est l'étape de migration !

Pour cela, il te suffit d’exécuter deux commandes, présentées dans la quête précédente. Si tu ne les retrouves pas, la solution est juste en dessous, mais fais l'effort de chercher ;-)

Commandes pour effectuer la migration
D’ailleurs, saurais-tu dire quel est l’impact sur la base de données, et quelle requête SQL va contenir ta classe de migration ? N'hésite pas à ouvrir la classe de migration générée par la commande pour y voir les requêtes effectuées lors de la migration.

# Challenge 07

Crée la relation ManyToOne
Ce challenge sera très simple, car tu as besoin des quêtes suivantes pour mettre en place des choses plus complexes. Il s'agira uniquement de contrôler visuellement le code de la classe Program. Cette dernière doit être conforme à ce qui est expliqué dans la quête. C’est-à-dire, une classe Program.php qui contient une propriété category paramétrée comme il se doit dans ses annotations avec les getter et setter associés.

Critères de validation

- La propriété category est présente et privée.

- Le getter et setter correspondants sont présents et publics.

- Les annotations ManyToOne et JoinColumn sont présentes et correctement paramétrées (nullable=false, targetEntity)

- Le use nécessaire pour les annotations @ORM est en place.

- Une (et une seule) classe de migration est présente, ajoutant une clé étrangère côté program.

- Ton code devra être disponible sur un repository GitHub

# Challenge 08

findBy() : récupérer plusieurs objets avec des filtres
Tu as utilisé pour le moment les méthodes findAll() et findOneBy().
Il est temps pour toi de mettre en pratique la méthode findBy(). Le principe reste identique à la méthode findOneBy(), mais au lieu de récupérer strictement un seul tuple, tu en récupères plusieurs en fonction de paramètres donnés.

Objectif : Afficher les séries appartenant à une catégorie donnée.
Liste toutes les catégories

- Crée un nouveau fichier CategoryController.php qui contiendra la classe du même nom.
- toutes les routes de cette classes seront préfixées par /categories et leur nom par category_
- Crée une méthode index() (route = /categories/, route_name = category_index)
cette méthode récupère toutes les catégories présentes en base de données et les transmettra à une vue templates/category/index.html.twig.
- Crée une vue templates/category/index.html.twig qui affiche la liste des catégories que tu viens de récupérer.
- Affiche les programmes d'une catégorie

- Dans ta classe CategoryController crée une méthode show(string $categoryName) (route = /categories/{categoryName}, route_name = category_show)
- Dans un premier temps, cette méthode récupère l'objet Category dont le nom est passé en paramètre.
- Si aucune catégorie avec ce nom n'est présente en base, retourne une erreur 404.
- Si une catégorie existe, cette méthode récupère toutes les séries présentes en base de données qui appartiennent à cette catégorie.
- Au maximum, 3 séries devront être récupérées, ordonnées par ID décroissant.
- Ces séries seront transmises à une vue templates/category/show.html.twig
- Crée une vue templates/category/show.html.twig qui affiche la liste des séries que tu viens de récupérer :
- Tu dois afficher l'ID de la série, son titre et son résumé.
- Si aucune série n'est présente dans la catégorie, affiche un message "Aucune série trouvée".
- Pour chaque série, ajoute un lien pour pouvoir visualiser sa fiche (tu peux t'aider de ce que tu à fait précédemment lors du cours de la quête dans la vue program/index.html.twig)
- Enfin, depuis la liste des catégories dans ta vue category/index.html.twig ajoute un lien vers la fiche de chaque Category.

Critères de validation

- Un nouveau contrôleur CategoryController a été créé.
- Il contient 2 méthodes : index() et show(string $categoryName)
- Lorsqu'on se rend sur l'URL /categories/, la liste des catégories apparaît.
- Si je clique sur une catégorie je suis redirigé vers la fiche de cette catégorie (l'URL : /categories/horreur par exemple.)
- Cette page affiche la liste des 3 dernières séries appartenant à la catégorie Horreur avec pour chacune, son ID, son titre et son résumé.
- Si je clique sur le titre d'une série je suis redirigé vers sa fiche.
- Si je tente d'accéder à la fiche d'une catégorie qui n'existe pas, j'obtiens une erreur 404 (exemple: /categories/Trucmuche => 404 : "Aucune catégorie nommée TrucMuche")
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.

# Challenge 09

C'est meilleur quand c'est de saison
À partir de l’extrait du modèle logique ci-dessous, créer les relations bidirectionnelles entre les entités Program, Season et Episode.

Attention
Ce challenge va te prendre un petit plus de temps que lors de la plupart des quêtes précédentes. Cela est nécessaire pour construire le socle de ta future application, et pouvoir travailler sur les différents autres concepts de Symfony.

N’oublie pas, qui dit modification des entités, dit migrations !

Pour pouvoir tester cette fonctionnalité et valider cette quête, tu dois créer en BDD plusieurs épisodes (une dizaine) et plusieurs saisons (environ 3) associées aux séries déjà existantes.

Tu peux le faire soit via le terminal, phpMyAdmin, DBeaver, Workbench, PhpStorm ou tout autre outil que tu préférerais.Ce n’est pas sur la qualité du contenu que tu vas être jugé. Mais si tu sèches et que tu tiens à utiliser du contenu cohérent, n’hésite pas à aller sur imdb

- Dans la méthode show(int $id) de la classe ProgramController, récupère le Program en question grâce à l'id passé dans l’url.
- Récupère ensuite toutes les saisons du programme.
- Passe les saisons que tu viens de récupérer en contexte à ta vue program/show.html.twig.
- Dans la vue, affiche la liste des saisons disponibles avec un lien qui permet d'aller vers la page détaillée de la saison (tu implémenteras cette page dans la suite du challenge, l'URL sera de la forme : /programs/{programId}/season/{seasonId}).
- Dans la classe ProgramController, crée une méthode showSeason(int $programId, int $seasonId)
- La route de cette méthode sera donc de la forme /programs/{programId}/seasons/{seasonId} et le nom de la route sera program_season_show
- Récupère le Program qui correspond à l'identifiant du programme passé en paramètre dans l'URL
- Récupère la Season du programme qui correspond à l'identifiant de la saison passé en paramètre.
- Cette méthode retournera une nouvelle vue : templates/program/season_show.html.twig.
- Dans cette vue nouvellement créée, affiche les informations du programme et de la saison sélectionnée.
- Tu dois également afficher la liste des épisodes de la saison. Opte pour la méthode qui te convient le mieux afin d'obtenir le résultat suivant (bien sûr l'apparence variera en fonction de ton styleguide) :

Pour simplifier la correction
À partir de maintenant, reprendre le code de ses camarades pour le faire fonctionner sur son poste peut s'avérer long et fastidieux.Tout le monde n’en est pas au même niveau sur les quêtes. Ce qui implique que la base de données dont tu disposes en local n’est pas forcément en phase avec les besoins de l’application que tu t'apprêtes à corriger.
Pour pallier cela, tu vas devoir faire une capture vidéo de l'utilisation de ton application. Tu peux utiliser https://www.loom.com/ ou toute autre application que tu pourrais trouver ici Best Screen recording software. Le principal est que la vidéo soit accessible à tout le monde et que la user story de cette quête (la partie fonctionnelle du challenge) y soit démontrée depuis ta version en local.

Critères de validation

- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- Un lien vidéo est présent sur un fichier README.md à la racine du projet.
- Sur la vidéo, l’utilisateur navigue de séries en saisons
- Sur la page d'une série on voit bien la liste des saisons de la série
- Lorsqu'on clique sur une saison on est redirigé vers la page de la saison
- Sur la page d'une saison on voit bien la liste des épisodes de la saison
- Les deux classes Season et Episode sont présentes.
- Les annotations inversedBy et mappedBy sont présentes dans toutes les relations
- Les méthodes addProgram() et removeProgram() sont présentes dans l'entité Category, comme présenté dans la quête
- Les méthodes addSeason(), removeSeason() et getSeasons()sont présentes dans l'entité Program, comme demandé dans le challenge
- Les méthodes addEpisode(), removeEpisode() et getEpisodes()sont présentes dans l'entité Season, comme demandé dans le challenge
- Les méthodes getProgram() et setProgram()sont présentes dans l'entité Season, comme demandé dans le challenge
- Les méthodes getSeason() et setSeason()sont présentes dans l'entité Episode, comme demandé dans le challenge

https://www.loom.com/share/2f2d8cc291554475a2ff89544376b979
