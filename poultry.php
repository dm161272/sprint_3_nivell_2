<?php


class Duck {

    public function quack() {
           echo "Quack <br />";
    }

    public function fly() {
           echo "I'm flying <br />";
    }
}

class Turkey {

    public function gobble() {
           echo "Gobble gobble <br />";
    }

    public function fly() {
    echo "I'm flying a short distance <br />";
    }
}


class TurkeyAdapter extends Duck {


public function __construct (Turkey $turkey) {

$this->turkey = $turkey;

}

public function quack() 
{

       $this->turkey->gobble();
}

public function fly() 
{

       for($i = 0; $i < 5; $i++) 
       {

       $this->turkey->fly();

       }
}

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


Output
The expected output is as follows:
The Turkey says...
Gobble gobble
I'm flying a short distance
The Duck says...
Quack
I'm flying
The TurkeyAdapter says...
Gobble gobble
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
*/




?>
