
        // für optimale Kompatibilität mit anderen Javascripten schmeißen wir alles in ein Objekt
        optionHover = new Object();

        // Die Meldungen legen wir in ein Unterobjekt "infos". Jede Meldung bekommt sozusagen einen Namen (z.B. "meineErsteInfoMeldung")
        optionHover.infos = new Object();
        optionHover.infos.meineErsteInfoMeldung = "Achtung, das ist jetzt Javascript-Magie!";
        optionHover.infos.meineZweiteMeldung = "Und wieder erscheint eine Meldung...";
        optionHover.infos.test = "Test, test, test... Hört man mich?";

        // Funktion zum Einblenden der Meldung
        optionHover.anzeigen = function (meldung) {
            var div = document.getElementById("optionHoverDiv");
            if (div) {
                div.innerHTML = optionHover.infos[meldung]; // Meldungstext ins DIV schreiben
                div.style.display = "block"; // DIV sichtbar schalten
            }
        };

        // Funktion zum Ausblenden der Meldung
        optionHover.verbergen = function () {
            var div = document.getElementById("optionHoverDiv");
            if (div) {
                div.style.display = "none"; // DIV unsichtbar schalten
            }
        };

        // Funktion zum Einrichten des DIVs wenn die Seite geladen hat
        optionHover.init = function () {
            var div = document.createElement("div"); // DIV-Element erzeugen
            div.id = "optionHoverDiv"; // ID geben
            div.style.display = "none"; // unsichtbar

            // Diverse CSS-Eigenschaften für die Darstellung... könnte man auch über echten CSS-Code in einer CSS-Datei steuern...
            div.style.position = "absolute";
            div.style.top = "10px";
            div.style.left = "10px";
            div.style.border = "1px solid red";
            div.style.background = "#ffffff";
            div.style.padding = "20px";
            div.style.width = "200px";

            // DIV in das Dokument am Ende einfügen
            document.body.appendChild(div);
        };

        optionHover.oldWinOnLoad = window.onload; // alten Wert für onload speichern (damit andere Scripte nicht blockiert werden)
        // optionHover.init() beim Laden der Seite ausführen lassen
        window.onload = function () {
            if (typeof(optionHover.oldWinOnLoad) == "function")
                optionHover.oldWinOnLoad();
            optionHover.init();
        };
