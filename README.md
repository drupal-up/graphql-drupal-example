# About this Example.
This is an example of how to implement GraphQL in Drupal 8.
For now the project just exposes it's published node content on the Drupal side and renders it in the React App. It does not do much more than that for now.

Further you will find a detailed explanation of how to install and have it up and running on your local machine.

# How to get this example project up and running (installing)

## Install composer packages (from the root of the project).
```
composer install
```

## Create an empty database.

## Install Drupal from configuration.
```
cd web/
../vendor/bin/drush site:install --existing-config
```

## Go to the Drupal interface, login and create some article nodes.

## Change the REACT_APP_DRUPAL_URL with [YOUR_DRUPAL_INSTANCE_URL] in web-app/.env.local
```
cd ../web-app/
cp .env.local.example .env.local
nano .env.local
# Change the value of REACT_APP_DRUPAL_URL
```

## Install node packages.
```
npm install
```

## Start the React application.
```
npm start
```
## Reward your self with a cup of coffee ☕
