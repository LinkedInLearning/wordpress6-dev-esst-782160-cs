# WordPress 6 für Entwickler*innen

Dies ist das Repository für den **LinkedIn Learning** Kurs `WordPress 6 für Entwickler*innen`. Den gesamten Kurs finden Sie auf LinkedIn Learning.

## Automatisches Setup mit Codespace (empfohlen)
[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&ref=main&repo=564877154&machine=largePremiumLinux&devcontainer_path=.devcontainer%2Fdevcontainer.json&location=WestEurope)

Der Codespace wird innerhalb von ca. zwei bis drei Minuten erstellt und es öffnet sich VS Code im Browser. Anschließend werden Abhängigkeiten via _composer_ und _npm_ geladen, Erweiterungen für VS Code werden eingebunden und WordPress wird installiert. Dieser Vorgang dauert erstmalig weitere zwei bis drei Minuten.

Sobald das Terminal vom _postCreateCommand_ wieder freigegeben ist, ist Ihre lokale Entwicklungsumgebung in der Cloud einsatzbereit. Ihre WordPress-Installation ist im Reiter _Ports_ verlinkt, ins Backend können Sie sich mit _admin_/_password_ einloggen. DIe Zugangsdaten finden Sie auch im _Makefile_.

## Manuelles Setup

### Voraussetzungen
Sie benötigen die folgende Software auf Ihrem Computer
- [Visual Studio Code (oder eine andere IDE)](https://code.visualstudio.com/)
- [Docker](https://docs.docker.com/get-docker/)
- php
- evtl. [Composer](https://getcomposer.org/)
- evtl. [Node](https://nodejs.org)

### Installation
#### Hochfahren des Projektes
- ggf. forken Sie dieses Repo
- klonen Sie es auf Ihre lokale Maschine
- Bbearbeiten Sie ggf. die _.env_-Datei.
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
