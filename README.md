# contao-jobposting-bundle
**JobPosting Markup Generator**, z.B. für "Google for Jobs"

## Installation
1. Ergänzen Sie als _letzten_ Eintrag im Bereich "require" diese Zeile
```
    "require": {
        "do-while/contao-jobposting-bundle": "^1.0"
    }
```
2. Dann rufen Sie den Composer mit `composer update` auf oder Sie rufen den **Contao Manager** auf.


## JobPosting Markup
Nach der Installation steht Ihnen das neue Contentelement "**JobPosting Markup**" im Bereich "include-Elemente" zur Verfügung. 
Das Element können Sie wie gewohnt im Artikel einsetzen. Es trägt in dem head-Bereich der Seite das JSON-Snippet mit den angegebenen Job-Informationen ein. Der Eintrag ist nur im Quellcode der Seite sichtbar.

## Version
* 1.0.0<br>Erstversion: 2019-08-19<br>Version für Contao ab Version 4.4 LTS


**Problem melden | *Report Problem*:**<br>
https://github.com/do-while/contao-jobposting-bundle/issues

___
Softleister - 2019-08-19
