<?php
interface pieceInterface {
    public function deplacementPossible() : array;
}

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
?>