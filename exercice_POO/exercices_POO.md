1 classe Router
attributs -un tableau de string $routes
          -un tableau de Page
methodes: getters &setters

1 classe Page
attributs : string titre
            string content
            bool private 
 methodes: getters &setters
 
 1 classe User
 attributs: string email
            string password
            bool admin
methodes: getters &setters

A declare dans l'index.php
 une Page homepage + une route "home" dans le Router
 une Page login + une route "login" dans le Router
 une Page admin + un route "admin" dans le Router
 (private = true)
 
class RouteMatch
$string $route;
Page $page;

construct

getters

setters

Router  array $routeMatches;
        +construct,getters,setters