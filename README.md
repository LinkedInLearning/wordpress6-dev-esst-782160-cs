# WordPress 6 für Entwickler*innen

Dies ist das Repository für den **LinkedIn Learning** Kurs `WordPress 6 für Entwickler*innen`. Den gesamten Kurs finden Sie auf LinkedIn Learning.

## Automatisches Setup mit Codespace (empfohlen)
[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&ref=main&repo=564877154&machine=largePremiumLinux&devcontainer_path=.devcontainer%2Fdevcontainer.json&location=WestEurope)

Der Codespace wird innerhalb von ca. zwei bis drei Minuten erstellt und es öffnet sich VS Code im Browser. Anschließend werden Abhängigkeiten via _composer_ und _npm_ geladen, Erweiterungen für VS Code werden eingebunden und WordPress wird heruntergeladen. Dieser Vorgang kann weitere zwei bis drei Minuten dauern.

Sobald das Terminal vom _postCreateCommand_ wieder freigegeben ist, führen Sie bitte einmalig 
```make install``` aus. Damit wird WordPress installiert.

Anschließend können Sie Ihren Codespace nutzen und später weitaus schneller neu laden.


## Manuelles Setup

### Voraussetungen
Sie benötigen die folgende Software auf Ihrem Computer
- Visual Studio Code (oder eine andere IDE)
- Docker
- php
- evtl. composer
- evtl. node
### Installation
#### Hochfahren des Projektes
- ggf. forken Sie dieses Repo
- klonen Sie es auf Ihre lokale Maschine

- Bearbeiten Sie ggf. die _.env_-Datei.
- Starten Sie das Projekt mit dem Befehl:
```
docker-compose up -d
```
#### Installieren Sie Abhängigkeiten mit
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
