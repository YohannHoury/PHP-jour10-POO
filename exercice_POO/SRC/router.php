<?php
class Router 
    {
    private array $routes = ["home","login","admin"];
    
    private array $Page = ["homepage","login","admin"];
    
    public function __construct(string $Page)
    {
    $this->page = $Page;
    }
     public function getRoutes() :string
     {
    return $this->routes;
     }
     public function setRoutes(string $routes) : void
     {
    $this->routes = $routes;     
     }
    }
?>