# WordPress 6 für Entwickler*innen

Dies ist das Repository für den **LinkedIn Learning** Kurs `WordPress 6 für Entwickler*innen`. Den gesamten Kurs finden Sie auf LinkedIn Learning.

## Automatisches Setup mit Codespace
[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&ref=main&repo=564877154&machine=basicLinux32gb&devcontainer_path=.devcontainer%2Fdevcontainer.json&location=WestEurope)

### Weiterer Ablauf
1. Der Codespace wird innerhalb von ca. fünf Minuten erstellt und es öffnet sich VS Code im Browser
1. ```postCreateCommand.sh``` wird automatisch ausgeführt. Im Verzeichnisbaum erscheinen die Verzeichnisse _node_modules_ und _vendor_
1. ```docker-comose up``` wird automatisch ausgeführt und WordPress wird installiert. Im Verzeichnisbaum erscheinen die Verzeichnisse _htdocs/wp-admin_, etc. Dieser Vorgang kann bis zu zehn Minuten dauern.
1. Sobald WordPress im Browser zur Verfügung steht, tragen Sie bitte Ihre persönliche URL in die _wp-config.php_ ein.
 Sie können das an beliebiger Stelle eintragen, z.B. fast am Ende. Ihre URL finden Sie im Reiter _PORTS_ neben dem _TERMIAL_.
```
define( 'WP_SITEURL', 'https://IHRE_PERSOENLICHE_ADRESSE_WIE_IM_REITER_PORTS.preview.app.github.dev/');
define( 'WP_HOME', 'https://IHRE_PERSOENLICHE_ADRESSE_WIE_IM_REITER_PORTS.preview.app.github.dev/' );
/* That's all, stop editing! Happy publishing. */
```
5. Installieren Sie WordPress über den Browser.

Eventuell wird sich Intelephense bei der ersten Nutzung des Codespaces noch beschweren. Schließen Sie den Browsertab und gehen erneut in den Codespace, damit Intelephense alle Dateien indiziert. Die Indizieurng dauert einige Minuten.

## Manuelles Setup

> **_Hinweis:_**  Die folgenden Hinweise 
sind in englischer Sprache. Englisch ist die _Lingua franca_ in der WordPress-Programmierung. Im Training gehe ich auf die einzelnen Abschnitte ein und erkläre sie auf deutsch.

### Requirements
You should have installed the following software on your local machine
- Visual Studio Code ( or some other IDE)
- docker
- php
- composer
- node
### Installation
#### Bringing up the project
- Fork this repo and clone it to your local machine.

- Edit the _.env_ fill to fit to your needs.
- Bring up the project with the CLI-command (Repeat the following step after each reboot)
```
docker-compose up -d
```
- Add the following lines to wp-config.php 
```
define( 'WP_HOME', 'https://<YOUR_PRIVATE_URL>' );
define( 'WP_SITEURL', 'https://<YOUR_PRIVATE_URL' );
```
#### Install dependecies
```
npm install
composer install
```

## Linting
### php
```
./vendor/bin/phpcs -s path/to/file.php
```

### JavaScript
```
npx eslint path/to/file.js
```

## WP-CLI Commands
```
wp i18n make-pot inc  languages/rosegarden.pot  --domain=rosegarden
wp scaffold child-theme rosegarden21 --parent_theme=twentytwentyone

```
