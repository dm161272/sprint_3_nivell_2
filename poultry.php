<?php


class Duck {

    public function quack() {
           echo "Quack \n";
    }

    public function fly() {
           echo "I'm flying \n";
    }
}

class Turkey {

    public function gobble() {
           echo "Gobble gobble \n";
    }

    public function fly() {
    echo "I'm flying a short distance \n";
    }
}


class TurkeyAdapter {



}


/*
Adapter

Suppose you have the following two PHP classes.
*************************************************** **************
You want your turkeys to behave like ducks, so you need to apply the adapter pattern. In the same file, type a class called TurkeyAdapter
 and make sure you note the following:

Translating quack between classes is easy: just call the Gobble method when appropriate.

Although both classes have a fly method, turkeys can only fly in short streaks, they cannot fly long distances like ducks.
 To map between the duck fly method and the turkey method, you must call the turkey fly method five times to compensate.

Try your class with the following code:
*/




?>

