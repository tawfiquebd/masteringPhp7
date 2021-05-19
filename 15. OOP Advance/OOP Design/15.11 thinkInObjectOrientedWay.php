<?php

// Think in object oriented way - Project design

/* Project Breakdown::
 *
 * Sodium::addColumns(65)->addFields();
 * */

interface FieldInterface{
    static function create($id):FieldInterface;
    function setId():FieldInterface;
    function setLabel():FieldInterface;
    function setDefault():FieldInterface;
    function setValue():FieldInterface;
}

class Sodium{
    static function addForm($id):Sodium {   // return type should be Sodium
        return new Sodium();    // returning Sodium class instance
    }
    function addColumns($columnSize):Sodium {
        return new Sodium();
    }
    // FieldInterface ...$fields  ... means unlimited parameter will receive
    function addFields(FieldInterface ...$fields):Sodium {
        return new Sodium();
    }
}

class FieldFactory{
    static function createTextField():FieldInterface {
        return new AbstractField();
    }

    static function createRadio():FieldInterface {
        return new AbstractField();
    }
}

class AbstractField implements FieldInterface{
    static function create($id):FieldInterface {}
    function setId():FieldInterface{}
    function setLabel():FieldInterface{}
    function setDefault():FieldInterface{}
    function setValue():FieldInterface{}
}

class TextField extends AbstractField {}

class Radio extends AbstractField {}

class GoogleMap extends AbstractField {}

// Array passing as arguments
//Sodium::addForm("myform")->addColumns(10)->addFields([
//    FieldFactory::createTextField()->
//]);

Sodium::addForm("myform")->addColumns(10)->addFields(
    FieldFactory::createTextField()->setId()->setValue(),
    FieldFactory::createRadio()->setValue(),
//    FieldFactory::createPassword()->setDefault()->setValue()
);

Sodium::addForm('form')->addFields(
    TextField::create('id')->setLabel()->setValue(),
    GoogleMap::create('mapid')->setValue()->setDefault()
);