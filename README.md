# Sphere Wordpress

This project is an demo for using [Sphere API](http://www.sphere.io/) on [WordPress](http://wordpress.org/).


### Sphere:

1) Setup account in [Sphere](http://www.sphere.io/)

2) Create new project and products

3) Get Sphere API credentials

### Wordpress:

1) Install [WordPress](http://wordpress.org/)

2) Install UI Theme of your choice (for our demo we used one of the preinstalled themes called: "Twenty Eleven")

3) Add Sphere API credentials to "config.php" (taken from official PHP example: [Example](https://github.com/commercetools/sphere-hello-api/tree/master/php/)

4) Copy both edited "config.php" and "app.php" into the root directory of wordpress installation folder.

5) Edit "content-page.php" from selected theme's ("Twenty Eleven") folder and add Sphere API call for products query and view. [Example](https://github.com/butenkor/spherewordpress/blob/master/wp-content/themes/twentyeleven/content-page.php)

Integration demo: http://teama.herokuapp.com
