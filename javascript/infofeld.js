
        // f&uuml;r optimale Kompatibilit&auml;t mit anderen Javascripten schmei&szlig;en wir alles in ein Objekt
        optionHover = new Object();

        // Die Meldungen legen wir in ein Unterobjekt "infos". Jede Meldung bekommt sozusagen einen Namen (z.B. "meineErsteInfoMeldung")
        optionHover.infos = new Object();
        optionHover.infos.meineErsteInfoMeldung = "Achtung, das ist jetzt Javascript-Magie!";
        optionHover.infos.meineZweiteMeldung = "Und wieder erscheint eine Meldung...";
        optionHover.infos.test = "Test, test, test... H&ouml;rt man mich?";

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

            // Diverse CSS-Eigenschaften f&uuml;r die Darstellung... k&ouml;nnte man auch &uuml;ber echten CSS-Code in einer CSS-Datei steuern...
            div.style.position = "absolute";
            div.style.top = "10px";
            div.style.left = "10px";
            div.style.border = "1px solid red";
            div.style.background = "#ffffff";
            div.style.padding = "20px";
            div.style.width = "200px";

            // DIV in das Dokument am Ende einf&uuml;gen
            document.body.appendChild(div);
        };

        optionHover.oldWinOnLoad = window.onload; // alten Wert f&uuml;r onload speichern (damit andere Scripte nicht blockiert werden)
        // optionHover.init() beim Laden der Seite ausf&uuml;hren lassen
        window.onload = function () {
            if (typeof(optionHover.oldWinOnLoad) == "function")
                optionHover.oldWinOnLoad();
            optionHover.init();
        };
