<?php
namespace Echiquier\Pieces;
use Echiquier\Piece;
use Echiquier\PieceInterface;
class Pion extends Piece implements PieceInterface{
    public function __construct($position) {
        parent::__construct($position);
    }
    public function deplacementPossible() : array {
        $position = $this->getPosition();
        $deplacementPossible = array();
        $deplacementPossible[] = $position[0] . ($position[1] + 1);
        $deplacementPossible[] = $position[0] . ($position[1] + 2);
        return $deplacementPossible;
    }
}
?>