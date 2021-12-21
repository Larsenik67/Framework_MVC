# ATTENTION
Il faut seulement récupérer :
```php 
    //mot secret pour générer les jetons CSRF
    define("SECRET_WORD", "mounir");
``` 
dans le fichier config.php et ***ne pas remplacer votre fichier actuel !***

## Installation
- Simplement _copier/coller_ le contenu de ce zip à la racine de votre projet !
- Enjoy !

# ATTENTION AUSSI
Pensez à modifier la méthode dans l'entité User :
```php
    public function getRole()
    {
        return $this->role ?? "ROLE_USER";
    }
```
pour ne plus avoir ***le bug de la déconnexion impossible des utilisateurs ROLE_USER***