# Documentation de l'utilisation de la méthode SOLID
### Version: 1.0
### Date: 2019-05-15
### Auteur: Léo Hilaire

## Introduction
La méthode SOLID est une méthode de développement de logiciel qui permet de créer des logiciels plus facilement maintenables et plus facilement testables. Elle est composée de 5 principes fondamentaux qui sont les suivants :

* Single Responsability Principle
* Open/Closed Principle
* Liskov Substitution Principle
* Interface Segregation Principle
* Dependency Inversion Principle

## Utilisation pour le projet
### Single Responsability Principle
Le principe de responsabilité unique permet d’assurer qu’une classe/fonction ne fait qu’une seule et unique chose. 
Avant aujourd'hui, il n'y avait qu'un seul fichier 'app.php' qui contenait tout le code permettant de faire fonctionner le site. Ce fichier faisait donc plusieurs choses à la fois, ce qui n'est pas une bonne pratique. Aujourd'hui, nous avons créé plusieurs fichiers pour séparer les différentes responsabilités du site. Nous avons donc un fichier 'app.php' et d'autres fichiers pour la class Piece, Echiquier et pour chaque pièce du jeu d'echec. Ainsi, chaque fichier a une seule responsabilité et le code est plus facilement maintenable.
Un fichier 'config.php' a également été créé pour importer les fichiers nécessaires au bon fonctionnement du site, à l'aide de la fonction 'require'.

### Open/Closed Principle
Le principe Ouvert/Fermé demande de ne pas modifier le comportement d’une action en fonction d’un paramètre, mais plutôt d’étendre les capacités dudit paramètre grâce à une fonction définie en amont. Les classes doivent être ouvertes à l'extension mais fermées à la modification. Ainsi, si nous voulons ajouter une nouvelle fonctionnalité au site, nous devons créer une nouvelle classe et non modifier une classe existante.

Chaque class de pièce comporte chacune une fonction 'deplacementPossible' qui permet de déterminer si le déplacement de la pièce est possible ou non. Si nous voulons ajouter une nouvelle pièce, nous devons créer une nouvelle class qui hérite de la class Piece et qui contient une fonction 'deplacement' qui permet de déterminer si le déplacement de la pièce est possible ou non. Nous n'avons donc pas besoin de modifier la class Piece.

### Liskov Substitution Principle
Le principe de substitution de Liskov permet d’interchanger les enfants d’une classe sans que cela ait d’incidence sur l’exécution du code. Ainsi, si nous voulons utiliser une classe fille à la place d'une classe mère, le code doit fonctionner correctement.
La fonction 'deplacementPossible' de chaque class de pièce respectent ce principe. En effet, si nous voulons utiliser une classe fille à la place d'une classe mère, le code fonctionnera correctement. De plus, chaque class fille n'en fait pas plus, ni moins par rapport à la class mère.

### Interface Segregation Principle
Ce principe dit que les interfaces doivent être séparées en plusieurs interfaces plus petites. Ainsi, si nous voulons ajouter une nouvelle fonctionnalité au site, nous devons créer une nouvelle interface et non modifier une interface existante.
Étant donné que je n'utilise qu'une fonction identique pour toutes les classes de pièce, j'ai créé une interface uniquement pour les classes de pièce. Le code de l'interface se trouve dans le fichier 'Piece.php' et je l'ai implémenté dans chaque class de pièce.

### Dependency Inversion Principle
Ce principe dit qu'une classe doit dépendre de son abstraction, pas de son implémentation. Ainsi, nous devons éviter de passer des objets en paramètre lorsqu’une interface est disponible.
J'ai créé une interface 'PieceInterface' qui contient la fonction 'deplacementPossible'. Je certifie au programme qu’il trouvera bien la méthode deplacementPossible() dans chacune des classes