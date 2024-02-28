# Comment utiliser l'autoload #
- Ouvrir le terminal dans le répertoire racine
- exécuter: composer dump-autoload
- ajouter dans le fichier index.php
    require_once 'vendor/autoload.php';

# Exemple d'arborescence #
 -app/
    - entity/
        - Personne.php
    - index.php
# utiliser dans l'exemple la classe Personne #
Il faut:
    - compléter le fichier composer.json comme suit:
    {
        "autoload": 
        {
            "psr-4": 
                    {
                "entity\\": "entity"
                    }
        }
    }

    - ajouter au debut de la classe "namespace ressourceshumaines;"
    - ajouter au début d'index.php:
        "require_once 'vendor/autoload.php';"
        "use ressourceshumaines\Personne as Personne;"

ET VOILA.
Vous pouvez consulter l'exemple.
