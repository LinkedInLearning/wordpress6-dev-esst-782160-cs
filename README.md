# WordPress 6 für Entwickler - Grundlagen

Dies ist das Repository für den **LinkedIn Learning** Kurs `WordPress 6 für Entwickler - Grundlagen`. Den gesamten Kurs finden Sie auf LinkedIn Learning.

![COURSENAME][lil-thumbnail-url] 

Dieser Einsteigerkurs macht Sie vom WordPress-Autor zum WordPress-Entwickler: Lernen Sie schnell und einfach eigene WordPress-Themes und -Plugins zu programmieren! Bald begreifen Sie die Anatomie eines WordPress-Themes und Sie sehen, wie Sie das Design Ihrer Webseite verändern. Mit Hilfe praktischer Challenge/Solutions-Einheiten am Ende jeden Kapitels können Sie das erworbene Wissen sofort ausprobieren.

Zu jeder Aufgabe liefert Ihr Trainer Thomas Rose gleich die passende Lösung, doch können Sie auch Ihren Lösungsweg ganz leicht mitprogrammieren und testen, denn dieser Kurs zeichnet sich durch eine nahtlose Integration in GitHub Codespaces, einer cloudbasierten Entwicklungsumgebung (IDE), aus. Sie müssen keinen lokalen Rechner einrichten und können direkt zu jeder Zeit praktische Übungen durchführen. Die Installation und Aktivierung der Sandbox wird zum Start des Kurses ausführlich beschrieben.

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

### Autor

**Thomas Rose**

_Medienpädagoge_

Sehen Sie sich andere Kurse des Autors auf [LinkedIn Learning](https://www.linkedin.com/learning/instructors/thomas-rose) an.

[0]: # (Replace these placeholder URLs with actual course URLs)
[lil-course-url]: https://www.linkedin.com/learning/wordpress-6-fur-entwickler-grundlagen
[lil-thumbnail-url]: https://media.licdn.com/dms/image/C4E0DAQGKJbZX6DOtGQ/learning-public-crop_675_1200/0/1679479280475?e=2147483647&v=beta&t=pNN53hZi_4mYL77NArRuMFOHBoaVXdOJVwdJAHz3FiQ
