<?php
class Fou extends Piece implements PieceInterface{
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() : array {
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
?>