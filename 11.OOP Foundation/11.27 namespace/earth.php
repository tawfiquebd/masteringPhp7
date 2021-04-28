<?php

namespace Astronomy\Planets;

class Earth extends Planet{ // Planet is in same namespace, that's why no need to add qualified/unqualified name

    public function getName(){

        echo "Earth";
    }
}