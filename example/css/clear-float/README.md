Float och clear
=======================

Om du tittar på min webbsida så ser du att bilden på mig flyter till höger av texten. Det är en CSS-konstruktion som löser det genom att berätta att HTML-elementet skall flyttas ur sitt normala flöde och *flyta* till höger, eller vänster.

Så här kan man göra, först i CSS.

```css
.right {
    float: right;
}
```

Och sen i HTML.

```html
<figure class="right">
```

Du kan kanske se hur du skulle göra för att skapa förutsättningar för att flyta en bild till vänster?

Om man börjar att flyta element så kan man ibland behöva stänga av flytandet. Det gör man med CSS-konstruktionen `clear`.

```css
clear: left;
clear: right;
clear: both;
```

Att flyta element är ett enkelt sätt att delvis påverka layouten på de element som ritas ut, *renderas*, i webbläsaren.

I ditt kursrepo har du ett exempelprogram som visar [hur float ser ut](float.html) och du kan se den [defekten som kan lösas med en `clear`](/float-clear.html).

Se när jag testar exemplet.

[!["Mikael kör igenom exempelprogrammet för float och clear."](https://img.youtube.com/vi/tOjFaCwtSJU/0.jpg)](https://www.youtube.com/watch?v=tOjFaCwtSJU)

[!["Mikael förtydligare när clear behövs."](https://img.youtube.com/vi/_j1XRxKtgEs/0.jpg)](https://www.youtube.com/watch?v=_j1XRxKtgEs)
