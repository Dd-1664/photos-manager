Picture Project
===============

# TODO:

* manager les images avec cloudinary
* remplir la base quand upload
* afficher un slider 
    <https://codepen.io/ritz078/pen/bEYOov>
    <https://github.com/darsain/sly>
    <http://darsa.in/sly/>
    <http://kenwheeler.github.io/slick/>

---

# DB:

* Exécuter `php bin/console doctrine:database:create` pour créer la base sans table
* Exécuter `php bin/console doctrine:schema:create` pour créer la structure des tables sans contenu
* Exécuter `php bin/console doctrine:schema:validate` pour verifier que tout est bon avec le mapping

---

# DOCKER

# Build l'image Docker

docker build
-t [NAME:TAG] .

# Lancer Docker

docker build
-t [NAME:TAG] .

docker run
-p 8089:80
-v [HOST-PATH]:/var/www/html
--name [IMAGE TAG][image id]

ou utiliser Kitematic (Docker GUI):

# EXEMPLE DOS

* `docker build -t picture .`
* `docker run -p 8089:80 -v $(pwd):/var/www/html --name picture picture`
* Access <http://localhost:8089/app_dev.php>

---

A Symfony project created in 2018.
