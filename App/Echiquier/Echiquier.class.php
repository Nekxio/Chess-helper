<?php
namespace Echiquier;
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
?>