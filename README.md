# Example of how to implement graphql

## Install composer packages.
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

## Change the networkInterface.uri with [YOUR_DRUPAL_INSTANCE_URL] in web-app/src/App.js.
```
cd ../web-app/
nano web-app/src/App.js
```

## Install node packages.
```
npm install
```

## Start the React application.
```
npm start
```
