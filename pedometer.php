<?php

class Pedometer {
    private $date;
    private $steps;

    public function __construct($date) {
        $this->date = $date;
        $this->steps = 0;
    }

    public function incrementSteps() {
        $this->steps += 1;
    }

    public function __toString() {
        return "Am " . $this->date . " bin ich " . $this->steps . " Schritte gegangen.";
    }
}

// Testprogramm
function test_pedometer() {
    // Testfall 1
    $pedometer1 = new Pedometer("11.11.2011");
    for ($i = 0; $i < 1111; $i++) {
        $pedometer1->incrementSteps();
    }
    echo $pedometer1 . PHP_EOL;  // Ausgabe: Am 11.11.2011 bin ich 1111 Schritte gegangen.

    // Testfall 2
    $pedometer2 = new Pedometer("1.9.2017");
    for ($i = 0; $i < 10000; $i++) {
        $pedometer2->incrementSteps();
    }
    echo $pedometer2 . PHP_EOL;  // Ausgabe: Am 1.9.2017 bin ich 10000 Schritte gegangen.
}

test_pedometer();

?>