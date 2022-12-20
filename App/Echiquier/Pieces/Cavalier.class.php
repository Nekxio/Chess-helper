<?php
class Cavalier extends Piece implements PieceInterface {
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() : array {
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
?>