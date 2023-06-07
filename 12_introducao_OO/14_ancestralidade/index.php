<?php

class Humano {

}

class Animal {

}

class Professor extends Humano 
{

}

$velasco = new Humano;
$bob = new Animal;

if ($velasco instanceof Humano) {
    echo "Velasco é um humano";
} else {
    echo "Velasco não é um humano";
}

if ($bob instanceof Humano) {
    echo "Bob é um humano";
} else {
    echo "Bob não é um humano";
}

$pedro = new Professor;

if ($pedro instanceof Humano) {
    echo "pedro é um humano";
} else {
    echo "pedro não é um humano";
}
