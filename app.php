<?php
//Simulateur d'aide de déplacement au jeu d'echec

//Chaque pièce est représenté sur l'echiquier par l'initial de son nom :
// - Pion = P
// - Cavalier = C
// - Fou = F
// - Tour = T
// - Reine = Q
// - Roi = K

//Il doit y avoir une classe pour chaque type de pièce qui hérite d'une autre classe Pièce

//position est un attribut qui appartient à la classe Pièce et qui contient la position de la pièce sur l'echiquier
// chaque classe a des getter/setter
//Créer une fonction qui permet d'instancier une pièce en précisant son type et sa position sur l'echiquier
//Créer une fonction qui permet d'afficher tous les déplacements possibles de la pièce en fonction de l'emplacement donnée par l'utilisateur
//Chaque résultat est contenu entre A1 et H8 
class Piece {
    protected $position;
    public function __construct($position) {
        $this->position = $position;
    }
    public function getPosition() {
        return $this->position;
    }
    public function setPosition($position) {
        $this->position = $position;
    }
}

class Pion extends Piece {
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() {
        $position = $this->getPosition();
        $deplacementPossible = array();
        $deplacementPossible[] = $position[0] . ($position[1] + 1);
        $deplacementPossible[] = $position[0] . ($position[1] + 2);
        return $deplacementPossible;
    }
}

class Cavalier extends Piece {
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() {
        $position = $this->getPosition();
        $deplacementPossible = array();
        $deplacementPossible[] = chr(ord($position[0]) + 1) . ($position[1] + 2);
        $deplacementPossible[] = chr(ord($position[0]) + 2) . ($position[1] + 1);
        $deplacementPossible[] = chr(ord($position[0]) + 2) . ($position[1] - 1);
        $deplacementPossible[] = chr(ord($position[0]) + 1) . ($position[1] - 2);
        $deplacementPossible[] = chr(ord($position[0]) - 1) . ($position[1] - 2);
        $deplacementPossible[] = chr(ord($position[0]) - 2) . ($position[1] - 1);
        $deplacementPossible[] = chr(ord($position[0]) - 2) . ($position[1] + 1);
        $deplacementPossible[] = chr(ord($position[0]) - 1) . ($position[1] + 2);
        return $deplacementPossible;
    }
}

class Fou extends Piece {
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() {
        $position = $this->getPosition();
        $deplacementPossible = array();
        for ($i = 1; $i <= 8; $i++) {
            $deplacementPossible[] = chr(ord($position[0]) + $i) . ($position[1] + $i);
            $deplacementPossible[] = chr(ord($position[0]) + $i) . ($position[1] - $i);
            $deplacementPossible[] = chr(ord($position[0]) - $i) . ($position[1] + $i);
            $deplacementPossible[] = chr(ord($position[0]) - $i) . ($position[1] - $i);
        }
        return $deplacementPossible;
    }
}

class Tour extends Piece {
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() {
        $position = $this->getPosition();
        $deplacementPossible = array();
        for ($i = 1; $i < 8; $i++) {
            $deplacementPossible[] = chr(ord($position[0]) + $i) . $position[1];
            $deplacementPossible[] = chr(ord($position[0]) - $i) . $position[1];
            $deplacementPossible[] = $position[0] . ($position[1] + $i);
            $deplacementPossible[] = $position[0] . ($position[1] - $i);
        }
        return $deplacementPossible;
    }
}

class Reine extends Piece {
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() {
        $position = $this->getPosition();
        $deplacementPossible = array();
        for ($i = 1; $i < 8; $i++) {
            $deplacementPossible[] = chr(ord($position[0]) + $i) . $position[1];
            $deplacementPossible[] = chr(ord($position[0]) - $i) . $position[1];
            $deplacementPossible[] = $position[0] . ($position[1] + $i);
            $deplacementPossible[] = $position[0] . ($position[1] - $i);
            $deplacementPossible[] = chr(ord($position[0]) + $i) . ($position[1] + $i);
            $deplacementPossible[] = chr(ord($position[0]) + $i) . ($position[1] - $i);
            $deplacementPossible[] = chr(ord($position[0]) - $i) . ($position[1] - $i);
            $deplacementPossible[] = chr(ord($position[0]) - $i) . ($position[1] + $i);
        }
        return $deplacementPossible;
    }
}

class Roi extends Piece {
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() {
        $position = $this->getPosition();
        $deplacementPossible = array();
        $deplacementPossible[] = chr(ord($position[0]) + 1) . $position[1];
        $deplacementPossible[] = chr(ord($position[0]) - 1) . $position[1];
        $deplacementPossible[] = $position[0] . ($position[1] + 1);
        $deplacementPossible[] = $position[0] . ($position[1] - 1);
        $deplacementPossible[] = chr(ord($position[0]) + 1) . ($position[1] + 1);
        $deplacementPossible[] = chr(ord($position[0]) + 1) . ($position[1] - 1);
        $deplacementPossible[] = chr(ord($position[0]) - 1) . ($position[1] - 1);
        $deplacementPossible[] = chr(ord($position[0]) - 1) . ($position[1] + 1);
        return $deplacementPossible;
    }
}

class Echiquier {
    private $echiquier = array(
        array('A' => '■', 'B' => '□', 'C' => '■', 'D' => '□', 'E' => '■', 'F' => '□', 'G' => '■', 'H' => '□'),

        array('A' => '□', 'B' => '■', 'C' => '□', 'D' => '■', 'E' => '□', 'F' => '■', 'G' => '□', 'H' => '■'),

        array('A' => '■', 'B' => '□', 'C' => '■', 'D' => '□', 'E' => '■', 'F' => '□', 'G' => '■', 'H' => '□'),

        array('A' => '□', 'B' => '■', 'C' => '□', 'D' => '■', 'E' => '□', 'F' => '■', 'G' => '□', 'H' => '■'),

        array('A' => '■', 'B' => '□', 'C' => '■', 'D' => '□', 'E' => '■', 'F' => '□', 'G' => '■', 'H' => '□'),

        array('A' => '□', 'B' => '■', 'C' => '□', 'D' => '■', 'E' => '□', 'F' => '■', 'G' => '□', 'H' => '■'),

        array('A' => '■', 'B' => '□', 'C' => '■', 'D' => '□', 'E' => '■', 'F' => '□', 'G' => '■', 'H' => '□'),

        array('A' => '□', 'B' => '■', 'C' => '□', 'D' => '■', 'E' => '□', 'F' => '■', 'G' => '□', 'H' => '■')
        
    );

    function getEchiquier() {
        return $this->echiquier;
    }

    function setEchiquier($echiquier) {
        $this->echiquier = $echiquier;
    }

    function afficherEchiquier() {
        $echiquier = $this->getEchiquier();
        $i = 0;
        foreach ($echiquier as $ligne) {
            $i++;
            foreach ($ligne as $case) {
                echo $case . ' ';
            }
            echo $i . PHP_EOL;
        }
        echo 'a b c d e f g h' . PHP_EOL;
    }
}

$echiquier = new Echiquier();

$echiquier->afficherEchiquier();


//2. On demande à l'utilisateur de choisir une pièce et une position
echo "Bienvenue dans le simulateur de déplacement aux jeux d'echec" . PHP_EOL;
echo"Les pièces sont : " . PHP_EOL;
echo "pion, cavalier, fou, tour, reine & roi" . PHP_EOL;
$choixPiece = readline('Choisissez la pièce de votre choix : ');
$position = readline("Choisissez sa position sur l'echiquier (ex: d4): ");
//On vérifie que le choix de la pièce correspond à l'une de l'echiquier
    if ($choixPiece == 'pion' || $choixPiece == 'cavalier' || $choixPiece == 'fou' || $choixPiece == 'tour' || $choixPiece == 'reine' || $choixPiece == 'roi') {
        //On vérifie que la position est bien sur l'echiquier
        if (preg_match('/^[a-h][1-8]$/', $position)) {
            //On instancie la pièce
            $piece = new $choixPiece($position);
            //On récupère les déplacements possibles
            $deplacementPossible = $piece->deplacementPossible();
            //On affiche les déplacements possibles sur l'echiquier
            $echiquier->afficherEchiquier();
            echo "Il est possible de jouer cette pièce en :".PHP_EOL ;
            foreach ($deplacementPossible as $deplacement) {
            // On vérifie que le déplacement est bien sur l'echiquier
            if (preg_match('/^[a-h][1-8]$/', $deplacement)){
                echo $deplacement . PHP_EOL;
            }
            // Sinon on affiche un message pour informer de l'impossibilité du déplacement ou pour informer que tous les déplacements ont été affichés
            else {
                echo "Il n'est pas possible de déplacer la pièce plus loin sur l'echiquier" . PHP_EOL;
                break;
            }
            }
        } else {
            echo 'La position n\'est pas sur l\'echiquier';
        }
    } else {
        echo 'La pièce n\'existe pas';
    }
?>
