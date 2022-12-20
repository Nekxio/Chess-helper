<?php
class Roi extends Piece implements PieceInterface{
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() : array {
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
?>