# WordPress 6 für Entwickler*innen

Dies ist das Repository für den **LinkedIn Learning** Kurs `WordPress 6 für Entwickler*innen`. Den gesamten Kurs finden Sie auf LinkedIn Learning.

## Automatisches Setup mit Codespace
[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&ref=main&repo=564877154&machine=largePremiumLinux&devcontainer_path=.devcontainer%2Fdevcontainer.json&location=WestEurope)

Der Codespace wird innerhalb von ca. fünf Minuten erstellt und es öffnet sich VS Code im Browser. Anschließend werden Abhängigkeiten via _composer_ und _npm_ geladen, Erweiterungen für VS Code werden eingebunden und WordPress wird heruntergeladen. Dieser Vorgang kann weitere fünf Minuten dauern.

Sobald das Terminal vom _postCreateCommand_ wieder freigegeben ist, führen Sie bitte einmalig 
```make install``` aus. Damit wird WordPress installiert.

Anschließend können Sie Ihren Codespace nutzen und später weitaus schneller neu laden.


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
