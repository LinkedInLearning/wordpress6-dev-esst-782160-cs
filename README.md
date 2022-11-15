# WordPress 6 für Entwickler*innen

Dies ist das Repository für den **LinkedIn Learning** Kurs `WordPress 6 für Entwickler*innen`. Den gesamten Kurs finden Sie auf LinkedIn Learning.

## Automatisches Setup mit Codespace
[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&ref=main&repo=564877154&machine=basicLinux32gb&devcontainer_path=.devcontainer%2Fdevcontainer.json&location=WestEurope)

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
phpcs -s path/to/file.php
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
