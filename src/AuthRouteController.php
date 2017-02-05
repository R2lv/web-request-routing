<?php
namespace DavidFricker\Router;

/**
  * A wrapper around a DB driver to expose a uniform interface
  *
  * Bassically an abstraction over the complexity of the PDO class, but by design this could wrap any strctured storage mechanism 
  * A database engine adapter
  *
  * @param string $myArgument With a *description* of this argument, these may also
  *    span multiple lines.
  *
  * @return void
  */
class AuthRouteController {
    public function __construct() {
       
    }

    public function getLogoutPage($request) {
      echo 'logout page';
      var_dump($request);
    }
}