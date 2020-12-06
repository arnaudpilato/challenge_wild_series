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

# Challenge 10

Utilise un param converter
Pour ton projet Wild Séries, reprends ta classe ProgramController.

- Modifie la méthode show()(route = "program_show") pour récupérer l'objet Program directement depuis les paramètres de la méthode grâce au param converter (modifie le typage de ton paramètre).
- Modifie la méthode showSeason()(route = "program_season_show") pour récupérer les objets Program et Season directement depuis les paramètres de la méthode grâce au param converter (modifie le typage de tes paramètres).
- Crée une méthode showEpisode(Program $program, Season $season, Episode $episode)

La route de cette méthode sera donc de la forme /programs/{programId}/seasons/{seasonId}/episodes/{episodeId} et le nom de la route sera program_episode_show
Récupère les objets Program, Season et Episode directement depuis les paramètres de la méthode grâce au param converter
Cette méthode retournera une nouvelle vue : templates/program/episode_show.html.twig.

Cette vue affichera :
- le nom de la série
- le numéro de la saison
- le numéro et le titre de l'épisode
- le résumé de l'épisode
- Sur la page de détail d'une saison, ajoute un lien sur chaque épisode afin de pouvoir accéder à sa fiche.

Critères de validation

- Dans ProgramController, la méthode show() permet de récupérer l'objet program via le param converter, à partir de l’id en paramètre de la route
- Dans ProgramController, la méthode showSeason() permet de récupérer les objets program et season via le param converter, à partir de l’id en paramètre de la route
- Dans ProgramController, la méthode showEpisode() permet de récupérer les objets program, season et episode via le param converter, à partir de l’id en paramètre de la route
- La méthode showEpisode() rend une vue affichant le nom de la série, la saison, ainsi que les informations de l'épisode.
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/d095d23fe6424ec4aa54c1847a53c56f

# Challenge 11
Créer des catégories & des séries
Si tu as bien suivi la quête, l'étape 1 est normalement déjà réalisée.

- Tu dois créer une page contenant un formulaire qui permet d’ajouter une catégorie à la base de données en précisant uniquement son nom.
À partir des ressources citées plus haut, à toi de définir dans le CategoryController existant une méthode new().
- Celle-ci utilise une vue contenant un formulaire permettant de saisir les informations à fournir pour créer une nouvelle catégorie.
- À la soumission du formulaire, les données saisies sont enregistrées en base de données.
- Fais de même dans ton ProgramController existant afin de pouvoir ajouter une série.

Tu remarques en te rendant sur l'url /programs/new que tu rencontres une erreur :
Object of class App\Entity\Category could not be converted to string.
C'est normal, Symfony, par défaut, essaie d'afficher un string pour la propriété $category de notre Program, hors il ne s'agit pas d'un string mais bien d'un objet Category.
Il va falloir modifier le FormType du champ category dans notre ProgramType en lui spécifiant la propriété de Category qui va servir de label dans notre liste déroulante (ici name) :
->add('category', null, ['choice_label' => 'name'])
En indiquant null Symfony va choisir automatiquement le bon type pour le champ en fonction des annotations définies dans ton entité Program (dans notre cas, il s'agit d'un ManyToOne vers Category, il va donc choisir une liste déroulante qui affichera la propriété name en tant que label).
Tu auras des explications approfondies et des exemples plus complexes lors d'une prochaine quête.

- Enregistre une démo de ta fonctionnalité et met le lien dans README.md
- Partage le tout sur une nouvelle branche ton dépôt github.

Critères de validation

- La classe App\Form\CategoryType est présente dans le dossier src/Form.
- La route /categories/new affiche bien le formulaire de création de catégorie.
- Le formulaire fonctionne (il crée une catégorie).
- La classe App\Form\ProgramType est présente dans le dossier src/Form.
- La route /programs/new affiche bien le formulaire de création de série.
- Le formulaire fonctionne (il crée une série dans la catégorie sélectionnée).
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/ceaa9259e1e6431e956492aa36f9ab43

# Challenge 12
Du CRUD ! Du CRUD ! Du CRUD !

Génère les CRUD pour les entity Season et Episode.

Puis enregistre les manipulations suivantes :

- Crée plusieurs saisons (au moins 4)
- Affiche toutes les saisons
- Modifie plusieurs saisons (au moins 2)
- Efface plusieurs saisons (au moins 2)
- Crée plusieurs épisodes (au moins 4)
- Affiche tous les épisodes
- Modifie plusieurs épisodes (au moins 2)
- Efface plusieurs épisodes (au moins 2)

Tu peux penser que les méthodes show() du SeasonController et EpisodeController font doublon avec les méthodes showSeason() et showEpisode() créées dans le ProgramController lors de quêtes précédentes et c'est bien légitime.
Cependant, et tu le verras plus tard, les CRUDs nouvellement générés seront exclusivement réservés à l'administration de ton site, et, par conséquent, les pages liées aux CRUDs ne seront pas visibles par un visiteur contrairement aux routes showSeason() et showEpisode().

Critères de validation

- Le CRUD est généré pour l’entité Season.
- L’entité Season dispose des actions de lecture, écriture et suppression.
- Le CRUD est généré pour l’entité Episode.
- L’entité Episode dispose des actions de lecture, écriture et suppression.
- Les routes sont cohérentes et fonctionnelles.
- Le CRUD agit bien avec la BDD (exemple : insérer une saison depuis http://localhost:8000/season/new).
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/f800da195e9145b186dafa8f6137dfab
