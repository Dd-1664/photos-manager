Picture Project
=================

# TODO: 

 - Remplir la base
 - Afficher le formulaire
 - manager les images
 - installer admin panel (EasyAdmin)

 ---


DB:
====

 - Exécuter `doctrine:database:create` pour créer la base sans table
 - Exécuter `doctrine:schema:validate` pour verifier que tout est bon avec le mapping
 - Exécuter `doctrine:schema:create` pour créer la structure des tables sans contenu
 - Remplir les tables de la base avec du contenu

---

DOCKER
======

# Build l'image Docker

 docker build
 -t [NAME:TAG] .

# Lancer Docker

 docker build
 -t [NAME:TAG] .

 docker run
 -p 8089:80
  -v [HOST-PATH]:/var/www/html
 --name [IMAGE TAG] [IMAGE ID]

 ou utiliser Kitematic (Docker GUI):


EXEMPLE DOS
========

* `docker build -t picture .`
* `docker run -p 8089:80 -v $(pwd):/var/www/html --name picture picture`
* Access <http://localhost:8089/app_dev.php>

---------------------------------
A Symfony project created in 2018.
