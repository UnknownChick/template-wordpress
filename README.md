# Template Wordpress

**ATTENTION**\
La configuration de la base de donnée se fait dans le fichier `.env` et non dans le fichier `wp-wonfig.php`

## Technologies utilisées :

| Technoliges | Documentation |
| - | - |
| Bedrock | [Doc](https://roots.io/bedrock/) |

* Bedrock

## Commandes installations et lancements

Installer les dépendances
```cmd
composer install
```

Ne pas oublier de faire pointer dans le dossier **/web**
```cmd
php -S localhost:8000 -t web
```