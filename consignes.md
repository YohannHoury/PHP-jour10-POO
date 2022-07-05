Exercices de POO
Exercices sur les classes simples
Exercice 1
Objectif : manipuler les classes, attributs et méthodes

Pour récupérer les fichers git fetch & git checkout exo-1-classes

$jane et $joe vont chacun créer une commande (Order) pour le produit "Pizza+Bière".

Initialisez les deux Order dans le fichier index.php et afficher les avec leur méthode print().

Exercice 2
Objectif : manipuler les classes, attributs et méthodes

Pour récupérer les fichers git fetch & git checkout exo-2-methods

Nous allons maintenant faire en sorte que notre classe Counter ne permette plus à une personne mineure de commander le produit "Pizza+Bière".

À chaque nouvelle commande il va devoir vérifier que ce n'est pas le cas.

Dans la classe Counter la méthode setOrders(array $orders) devient private. Toujours dans la classe Counter ajoutez une méthode avec le prototype suivant et complétez-la :

public function addOrder(Order $order) : int 
{
  // si un-e mineur-e essaie de commande Pizza+Bière, je ne fais rien et renvoie -1
  // sinon j'ajoute l'$order à la liste des orders et je renvoie 1
}
C'est à présent la classe Customer qui va se charger de commander ( plus exactement d'instancier les Order).

Ajoutez donc la méthode suivante dans la classe Customer et complétez-la :

public function order(string $product) : Order
{
  // créer une Order avec $product et soi-même en customer
  // retourner l'Order créée
}
Ensuite dans l'index.php , utilisez les nouvelles méthodes pour que $jane et $joe commande chacun "Pizza+Bière". Utilisez ensuite les nouvelles méthodes du Counter pour ajouter ces commandes à sa liste et affichez le résultat.

Exercice 3
Objectif : Utiliser des classes abstraites et des classes héritées

Pour récupérer les fichers git fetch & git checkout exo-3-heritage

Nous avons toute une série de nouvelles classes qui représentent les produits que l'on peut acheter. De plus la classe Order a été modifiée. Elle doit contenir un Customer et un Product.

La conséquence c'est que l'on peut acheter une Pizza seule ou dans un Menu mais on ne peut pas acheter un Beverage seul, et c'est voulu.

Dans la classe Customer, complétez les méthodes suivantes :

public function orderPizza(Pizza $pizza) : Order
    {
        // créer un Order avec $pizza et soi-même en customer
        // retourner l'Order créé
    }
public function orderMenu(Pizza $pizza, Beverage $beverage) : Order
    {
        // créer un Menu avec $pizza et $beverage
        // créer un Order avec le menu et soi-même en customer
        // retourner l'Order créé
    }
Ensuite dans le fichier index.php faites en sorte que $john passe la commande suivante :

Un menu composé d'un demi et d'une pizza hawaienne.

Et que $jane passe la commande suivante :

Un menu composé d'une pizza savoyarde et d'un coca + 1 autre pizza savoyarde.

N'hésitez pas à modifier les methodes print pour afficher le résultat.

Exercice 4
Objectif : Réadapter le code

Pour récupérer les fichers git fetch & git checkout exo-4-finalisation

Dans la classe Counter, completez la méthode suivante :

public function addOrder(Order $order) : int
    {
        // si un-e mineur-e essaie de commander un HarDrink, je ne fais rien et renvoie -1
        // sinon j'ajoute l'$order à la liste des orders et je renvoie 1
    }
Dans la classe Customer, complétez les méthodes suivantes :

private function lie() : Customer
    {
        // créer un Customer avec mes first et last name mais qui a 18 ans
        // retourner le Customer généré
    }
public function orderMenu(Pizza $pizza, Beverage $beverage) : Order
    {
        // créer un Menu avec $pizza et $beverage
        // si j'ai moins de 18 ans et que je veux un HardDrink, je dois mentir (lie)
        // créer un Order avec le menu et soi-même en customer
        // retourner l'Order créé
    }
Et faites donc en sorte que $john puisse commander sa bière malgré la sécurité renforcée du Counter.