<?php

// Solid - Dependency Inversion Principle
// Application is : Dependency Injection

// Bad design pattern example
// Tightly coupled or hard dependent
// Its a very bad design pattern. We have to use dependency injection here to reduce dependency
// This class Authenticator is now dependent on 3 classes. Which shouldn't be.
//class Authenticator{
//    function authenticate($username, $password, $external = false, $externalService = false){
//        if($external == true && "google" == $externalService){
//            $ga = new GoogleAuthenticator();    // Authenticator Dependent on this class
//            $ga->authenticate();
//        }
//        else if($external == true && "github" == $externalService){
//            $ga = new GithubAuthenticator();    // Authenticator Dependent on this class
//            $ga->authenticate();
//        }
//        else{
//            $la = new LocalAuthenticator(); // Authenticator Dependent on this class
//            $la->authenticate();
//        }
//    }
//}


// Using Dependency Inversion Principle .
// By using Dependency Injection application. Another name is Dependency Inversion of Control. (IOC)

interface AuthServiceProviderInterface{
    function authenticate();
}

class Authenticator{
    private $authServiceProvider;

    // AuthServiceProviderInterface is our dependency now
    function __construct(AuthServiceProviderInterface $asp){
        $this->authServiceProvider = $asp;
    }

    function authenticate(){
        $this->asp->authenticate();
    }
}

class GithubAuthenticator implements AuthServiceProviderInterface{
    function authenticate(){

    }
}

class GoogleAuthenticator implements AuthServiceProviderInterface{
    function authenticate(){

    }
}

$ga = new GoogleAuthenticator();
// Now class Authenticator doesn't depending on other class.
$auth = new Authenticator($ga);
$auth->authenticate();

$ga = new GithubAuthenticator();
$auth = new Authenticator($ga);
$auth->authenticate();