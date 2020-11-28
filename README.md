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
