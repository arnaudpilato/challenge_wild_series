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

# Challenge 13

Validation d’une série
Dans la quête, tu as vu des exemples pour configurer une validation sur les catégories. Maintenant, il faut que tu prennes le reflexe d’ajouter systématiquement des contraintes de validation sur tous les champs de toutes tes entités qui en ont besoin.
Dans le cadre du challenge, tu vas configurer ton entité Program afin qu’elle suive ces règles simples de validation :

- le champ title ne doit pas être vide et doit faire moins de 255 caractères
- le champ title doit être unique. Si le titre existe déjà en base de données, le message "ce titre existe déjà" doit apparaître. Regarde du côté de la contrainte UniqueEntity (qui a la particularité de se configurer au niveau de la classe et non d’une propriété)
- le champ summary (synopsis de la série) ne doit pas être vide
- Bonus! le champ summary ne doit pas contenir la chaîne "plus belle la vie", sinon le message d’erreur "On parle de vraies séries ici" apparaît. Regarde en détail les options de la contrainte "Regex" pour t’aider.

Ton formulaire d’ajout de programme doit effectuer les vérifications de validation. S’il y a des erreurs, les messages correspondants doivent s’afficher.

Poste une branche "validation" sur ton repository Github et prends une vidéo montrant le bon fonctionnement de ces validations (dans lequel on verra les messages d’erreur appropriés s’afficher) et poste un lien vers la vidéo dans le README.

Critères de validation
Pour tester les cas d’erreur côté serveur, il faut enlever les attributs bloquants dans le HTML du formulaire (les maxLength et autre required) ou utiliser l’attribut « novalidate » sur la balise form afin de "forcer" l’erreur. Utilise la console du navigateur pour faire cela

- Une erreur appropriée apparaît au niveau de ton formulaire si un titre vide ou un titre supérieur à 255 caractères est envoyé au serveur.
- Le message "ce titre existe déjà" doit apparaître dans ton formulaire, si le titre saisi existe déjà pour une autre série
- Une erreur appropriée apparaît au niveau de ton formulaire si un synopsis vide est envoyé au serveur.
- Bonus! si le summary de la série contient le texte "plus belle la vie", le message d’erreur "On parle de vraies séries ici" apparaît à la place.
- Le code est disponible sur Github et un lien vers une vidéo montre le bon fonctionnement des validations.

https://www.loom.com/share/33f38742ebef42628239613a41f37891

# Challenge 14

Affichage des acteurs jouant dans une série
Peut-être que tu as eu le réflexe de le faire, mais dans les consignes précédentes, tu n'as pas encore impacté la création de tes entités sur la base de données. Je te laisse retrouver les commandes de migration qui te permettent de le faire.

Une fois ta base de données à jour, insert en SQL de nouveaux acteurs, par exemple :

- symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Andrew Lincoln");'
- symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Norman Reedus") ;'
- symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Lauren Cohan") ;'
- symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Danai Gurira") ;'

- Toujours depuis ton serveur MySQL, associe tes séries à plusieurs acteurs. N'oublie pas, on est sur une relation ManyToMany.
Si tu as ajouté les séries proposées lors des quêtes précédentes, prends note que ces 4 acteurs jouent dans Walking Dead et que Andrew Lincoln joue aussi dans Fear The Walking Dead.

Tu vas maintenant devoir mobiliser tes compétences fraîchement acquises :

Crée une page répondant à l'appel de la route /actor/{id} et affichant les informations suivantes :

- Le nom de l’acteur,
- La liste des séries associées à cet acteur.

Que l’on soit en OneToMany ou en ManyToMany ne change en rien la manière de faire, vue jusqu’à présent.

Pour cela, tu vas évidemment créer une classe "ActorController", avec une méthode "show". 😏

Ensuite, reprends la page de détail d'une série, disponible à l'url programs/{id} et ajoute en bas de ta vue le code suivant :

<strong>Acteurs :</strong>
<ul>
    {% for actor in program.actors %}
        <li>{{ actor.name }} </li>
    {% else %}
        <li>Aucun acteur pour cette série</li>
    {% endfor %}
</ul>

Ça fonctionne ?!? Pourtant, à aucun moment tu n’as récupéré les acteurs depuis le contrôleur ! C’est normal ! Car depuis Twig, en appelant program.actors, tu fais l’équivalent en PHP de $program->getActors(). Ce qui te donne le tableau des acteurs associés à la série. Pas besoin de le faire au niveau du contrôleur.

Critères de validation

- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- Ton entité App\Entity\Actor est bien présente,
- Ta classe de migration générant les 2 nouvelles tables et les contraintes d'intégrité fonctionnent,
- La route vers la page /actor/{id} est fonctionnelle,
- Sur la page d’un acteur, la liste des séries associées s'affiche.
- Sur la page d’une série, la liste des acteurs associés s'affiche.
- Sur la page de l’acteur, lors du clic sur une série de la liste, l'utilisateur est redirigé vers la page de la série sélectionnée.
- Sur la page d’une série, lors du clic sur un acteur de la liste, l'utilisateur est redirigé vers la page de l’artiste sélectionné.
- L'ensemble des fonctionnalités ci-dessus sont démontrées via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/3a45d29cc8af440d9b45ac8d3079db0d

# Challenge 15

- Ajoute un champ Actors

En suivant les instructions de la quête, fais en sorte que le champ actors apparaisse sous forme d’une suite de cases à cocher sur le formulaire d’ajout d’une nouvelle série.
Il doit afficher les noms des acteurs contenus dans la base.

Critères de validation

- Le formulaire d’ajout d’une série affiche un champ acteur (EntityType),
- Ce champ apparaît sous la forme de cases à cocher.
- Lorsque l’on ajoute un acteur à une série, celui-ci est bien relié à la série en BDD.
- Les acteurs s'affichent sur la page de la série.
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/a5a047298534414c86266959e381f052

# Challenge 16

Alimente ton Wild Séries d'un grand nombre d’informations.
Dans cette quête, tu vas devoir nourrir ton Wild Séries d'un grand nombre d’acteurs répartis dans différentes séries.
Ces séries seront de différentes catégories et comporteront différents épisodes répartis dans plusieurs saisons.
Pour cela, tu peux implémenter Faker. Grâce à ce dernier, génère 50 acteurs fictifs.

Dans cette quête, fais apparaître dans la vidéo l'exécution des fixtures avant la navigation sur ton application.

Critères de validation

- Lorsque php bin/console doctrine:fixtures:load est exécuté, il n y a pas de message d'erreur
- Les fixtures génèrent de nombreux acteurs répartis dans toutes les séries existantes en base (en plus des acteurs créés à la main)
- Les fixtures génèrent de nombreuses saisons (à l’aide de Faker) réparties dans toutes les séries existantes en base
- Les fixtures génèrent de nombreux épisodes (à l’aide de Faker) répartis dans les saisons existantes
- Les noms des catégories sont définis "à la main" dans la classe App\DataFixtures\CategoryFixtures
- Les séries sont définies "à la main" dans la classe App\DataFixtures\ProgramFixtures
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/9391d4248cfc429387df6f5bab437e12

# Challenge 17
Appeler la génération du Slug
Dans ce challenge, tu dois compléter l'algorithme de la méthode generate() afin que tous les caractères spéciaux soient traités :

- à, ç, etc. deviennent a, c, etc.;
- !, apostrophes et autres ponctuations sont supprimées;
- les espaces en début et fin de chaînes sont supprimées;
- il ne peut pas contenur plusieurs - (tirets) successifs;
- la chaîne générée est en minuscules
- ....

Une fois que l'algo de ton service est complet, fais en sorte que celui-ci soit utilisé à toutes les étapes du cycle de vie de tes entités:

Program :
- Lors de l'ajout d'une série depuis un formulaire,
- Lors de l'ajout d'une série depuis les fixtures,
Episode :
- Lors de l'ajout d'un épisode depuis un formulaire,
- Lors de l'ajout d'un épisode depuis les fixtures,
- Lors de l'édition d'un épisode.
Pour cela, il faut bien évidemment ajouter un champ slug sur les entités qui le nécessitent.

Une fois tes slugs générés, modifie tes routes de contrôleurs afin qu'elle n'utilisent plus l'id de la ressource pour y accéder mais le slug (grâce au ParamConverter).

Par exemple :
- GET /programs/walking-dead : affiche la fiche de la série Walking Dead
- GET|POST /episode/days-gone-by/edit : édition de l'épisode 1 de la saison 1 de Walking Dead
- ...etc

Critères de validation

- Les entités Program, Episode comportent un champ slug
- Les routes des différents contrôleurs relatifs aux séries et épisodes utilisent les slugs plutôt que les id.
- Le service est appelé à chaque niveau de l’application où il y a un ajout de série.
- Le service est appelé à chaque niveau de l’application où il y a un ajout/modification d’un épisode.
- Le service Slugify créé auparavant avec une méthode generate(), permet de générer un slug à partir d'une chaîne de caractères selon les critères définis plus haut.
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/e7f7f295a8714a768bdae9ffbf857e03

# Challenge 18

Un nouvel épisode a été créé.
Un email est envoyé pour chaque nouvelle série ajoutée à Wild Series. Tu vas maintenant mettre en place un envoi d'email pour chaque nouvel épisode ajouté.

De plus, puisque tu as deux emails différents envoyés, tu vas créer un layout Twig dédié aux emails (comme évoqué précédemment dans la quête) et faire en sorte que les deux templates d'email etendent ce layout.

Critères de validation

- Le mail du destinataire (administrateur) est issu d'une variable d'environnement,
- Le contenu des mails envoyés reprend l'apparence générale de l'application, à l'aide d'un layout de mail général et se trouve dans une vue Twig.
- Le contenu du mail indique le nom/numéro du nouvel épisode, le nom de la série rattachée, ainsi qu'un lien vers la page épisodes de cette série.
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/01b2cb00c7a94aca95e4c082a4e8476e

# Challenge 19

Gestion des commentaires utilisateurs
Sur la page détail d’un épisode, tu dois ajouter la fonctionnalité “Laisser un commentaire”

À l’aide des compétences acquises jusqu’à présent, crée une entité Comment correspondant au fragment de modèle ci-dessous. Lors de la création de la relation avec l’entité User, ne choisis pas l’option par défaut, mais nomme explicitement ton champ author plutôt que user.

Tu peux constater que, dans le cadre d’une relation vers une entité donnée, tu n’es pas obligé de nommer la propriété correspondante de manière rigoureusement identique. Ainsi, la propriété “author” pointe vers l’entité “User”. Cela permet d’ajouter du sens à une relation. Cela permet aussi d’éviter les confusions quand une table est liée 2 fois à la même table. Par exemple, un commentaire sur Blablacar est relié 2 fois à la table user : 1 fois pour le chauffeur, une fois pour le passager.Evidemment, tu n’auras pas oublié d’effectuer la migration en deux temps avec bin/console make:migration, suivi de bin/console doctrine:migrations:migrate.

Ensuite, tu dois réaliser les fonctionnalités suivantes :

- Si un utilisateur est non connecté sur une page détail d’un épisode, la fonctionnalité “Ajouter un commentaire” n’est pas visible.
- Si un utilisateur est connecté sur une page détail d’un épisode, la fonctionnalité “Ajouter un commentaire” devient visible avec un formulaire composé d’un champ rate, d’un champ comment et d’un bouton de soumission.
- Lorsqu’un commentaire est ajouté par un utilisateur, celui-ci est bien enregistré comme auteur de celui-ci.
- Lorsqu’un commentaire est ajouté par un utilisateur, celui-ci est bien associé à l’épisode affiché.
- La liste des commentaires liés à la série est affichée dans l’ordre chronologique.

Tu l’auras compris, la relation entre le commentaire et l’épisode, ainsi que celle entre le commentaire et l’auteur, sont à faire du côté du contrôleur.

Critères de validation

- le formulaire de login est fonctionnel ;
- le lien de déconnexion est fonctionnel ;
- lorsque tu rédiges un commentaire, l’auteur actuellement connecté est bien associé en base de données ;
- lorsque tu rédiges un commentaire, la série est bien associée en base de données ;
- Les commentaires liés à l’épisode sont affichés dans l’ordre du plus vieux au plus récent ;
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête ;
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md.

https://www.loom.com/share/bc0097079d314f1cba252336708efd14

# Challenge 20

Gestion des utilisateurs et de leurs rôles.
Lors de cette quête, tu as vu comment sécuriser la création de catégories et la création et l'édition de séries.

L'objectif du challenge est de sécuriser la partie "commentaires" ajoutée lors de la quête précédente selon les critères suivants :

- Un utilisateur non connecté ne peut, ni créer de commentaires, ni les supprimer.
- Les contributeurs/administrateurs peuvent poster un commentaire.
- Les administrateurs peuvent supprimer n'importe quel commentaire.
- Les contributeurs ne peuvent supprimer que les commentaires dont ils sont l'auteur.

Afin d'afficher/masquer certains éléments de ta vue en fonction de l'utilisateur connecté ou non (comme le formulaire pour poster un commentaire, bouton de suppression ... par exemple), rappelle toi de ce que tu as vu lors de cette quête et la précédente :

en twig :
- {{ app.user }} pour accéder à l'utilisateur courant et le comparer à l'auteur du commentaire.
- {{ is_granted("ROLE_ADMIN") }} pour vérifier le rôle de l'utilisateur.

Critères de validation

- Un utilisateur reconnu comme "anonymous" ne peut pas poster de commentaire.
- Un utilisateur reconnu comme "contributeur" peut poster un commentaire.
- Un utilisateur reconnu comme ”contributeur” ne peut supprimer un commentaire que s’il est lui-même l’auteur.
- Un utilisateur reconnu comme "administrateur" peut poster un commentaire et supprimer n'importe quel commentaire.
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/b50bf011945047e796d041d8ddffac58

# Challenge 21

Un peu de ménage !
Attention
Cette partie là va te demander de puiser dans tes connaissance que tu as acquises jusqu’à présent.

Alors oui, c’est super pratique tout ce qui se génère tout seul ! Mais on est d’accord que le code généré n’est pas non plus hyper propre !

Comme tu aimes les bonnes pratiques, et qu’à force tu es devenu un peu maniaque (ce qui arrive à des gens très très bien !) peut-être as-tu envie de réaménager tout ça. Par exemple en déplaçant la seule méthode register() de ton nouveau controller dans App\Controller\SecurityController. Écoute tes pulsions et fais-le ! Idem pour la vue : trouve lui un meilleur emplacement :)
Par contre, soit attentif aux chemins de fichiers qui changent et aux références qui pourraient ne plus être bonnes.
De plus, la vue générée est minimaliste en terme de style, prend donc un peu le temps pour rendre la page un peu plus jolie.

Critères de validation

Sur la vidéo, il est démontré :
- L’accès au formulaire d’inscription, en mode “déconnecté” uniquement, via un lien dans le menu “Se connecter”
- La création du compte via le formulaire, en saisissant les informations,
- L’affichage de la page d’accueil avec les dernières séries listées,
- L’accès à la page “Mon compte” via le menu du site en lieu et place de “Se connecter”,
- L’affichage de la page profile à l’url http://localhost:8000/my-profile.

Sur le dépôt, il est constaté que :
- La méthode register() est bien dans App\Controller\SecurityController,
- La vue register.html.twig est bien dans templates/security

https://www.loom.com/share/5b246379264d47f48df2f2a94df9847d

# Challenge 22

Filtres avancés
Maintenant que tu sais comment créer des requêtes personnalisées, tu vas améliorer ton formulaire de recherche. Fais en sorte que la recherche trouve non seulement des Program par leur titre, mais également par le nom de famille d'un acteur jouant dans celle-ci (tu pourras t'aider de join() et orWhere()).

Critères de validation

- La requête récupére des séries par leur titre ou le nom de famille d'un acteur
- La requête utilise le QueryBuilder
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- Un lien vidéo est présent sur un fichier README.md à la racine du projet.

https://www.loom.com/share/18f6c8209e904f59a6aec52b4ca65a90

# Challenge 23

Configure les messages flash sur ton Wild Series
Le challenge est simple. Une fois l’affichage des messages flash configuré dans ton fichier base.html.twig, fais en sorte d’ajouter un message de type “success” pour tous les ajouts ou éditions de série, saison ou épisode. De plus, ajoute un message de type “danger” qui indiquera qu'une série, saison ou épisode a bien été supprimé(e).

Critères de validation

- L’affichage des messages flash est correctement configuré dans le fichier base.html.twig
- L’ajout et l’édition d’une série, saison ou épisode affichent un message flash vert (reprenant le style de la classe “alert-success” de Bootstrap) pour confirmer la réussite de la modification.
- La suppression d’une série, saison ou épisode affiche un message flash rouge (reprenant le style de la classe “alert-danger” de Bootstrap) pour confirmer la réussite de la suppression.
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md

https://www.loom.com/share/863a61f634a842f9bc078f3457e72fcf

# Challenge 24

Ajout à la "Wishlist"

Le code réalisé lors de cette quête est fonctionnel. Tu peux ainsi permettre à un utilisateur, depuis la page descriptive d'une série, de l'ajouter / retirer de sa wishlist. C'était déjà un challenge en soi. Réalise une vidéo à partir de ton projet pour partager ta réussite ;)

Critères de validation

- L'ajout à la watchlist sur la page de détails fonctionne,
- La page ne se recharge pas lors du clic sur le cœur,
- Si la page est rafraîchie manuellement, le cœur garde son état plein/vide,
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- La fonctionnalité est démontrée via une vidéo dont le lien est ajouté au README.md.

https://www.loom.com/share/7177dc2fd73f47948de51e79e2f22e72

# Challenge 25

Rends ton site multilingue
Tu dois faire en sorte que tes utilisateurs puissent sélectionner, depuis le menu, la langue qu’ils souhaitent voir affichée sur ton application.

Au moins 2 choix de langues doivent être possibles :
- FR : Français
- EN : Anglais

Libre à toi d'en ajouter d'autres si tu le souhaites

- Les visiteurs arrivent sur l’accueil avec la langue désirée dans l'URL.
- Les textes statiques doivent être traduits dans chaque langue (fais un petit effort sur l’anglais, et évite d’utiliser un traducteur automatique du type Google translate. C’est l’occasion de t’exercer un peu.).
- Les liens internes de ton site doivent tenir compte de la langue de l’utilisateur.

Critères de validation

- Un menu déroulant permet de choisir entre - au minimum - anglais et français.
- Le texte s’affiche différemment en fonction de la langue sélectionnée.
- Toutes les URLs correspondent à localhost:8000/fr/suite_de_l_url, localhost:8000/en/suite_de_l_url, localhost:8000/xx/suite_de_l_url en fonction de la langue choisie.
- Les routes /categories, /programs, /episode, /season et leurs variantes sont toutes disponibles.
- Ton code est disponible sur Github sur le dépôt habituel.

https://www.loom.com/share/91176788a5d1460894c87d77f8b5cc18

# Challenge 26

Imbrique ton contrôleur
En suivant les exemples de la documentation de Symfony Embedding Controllers, ajoute un dropdown Bootstrap à ta barre de navigation, affichant une liste de liens vers les catégories de ton Wild series. Cette liste devra donc bien s'afficher sur toutes les pages du site (puisqu'ils chargent tous la navbar).
Pour cela, utilise une méthode de contrôleur qui n’aura pas de @Route et utilise la fonction twig render(controller())

Critères de validation

- La liste des catégories dans la navbar fonctionne
- En cliquant sur une des catégories, j’accède bien aux séries liées
- Le code est disponible sur un repository GitHub, avec une branche correspondant à cette quête.
- Un lien vidéo est présent sur un fichier README.md à la racine du projet.

https://www.loom.com/share/d1d767088dc640eebec6bd2a70fd7fb4
