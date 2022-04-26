
# Arbetslogg: 


### 2022-04-20:
- Uppsättning av ny utvecklingsmiljö för att kunna köra både "ERP"-systemet och Wordpress-installationen på samma session i MAMP. 
- Uppsättning av GitHub-repo för barntemat. 
- Installation av WooCommerce. 
- Uppladdning av produkter till WooCommerce. 
- Lagt till barntema och ändrat texten på adminsidan.


### 2022-04-21:
- Uppladdning av nedladdningsbar produkt, måste uppdateras med bild.
- Hook för att ta bort Storefronts standard-footer.
- Lagt till innehåll på startsidan.
- Lagt till tre olika footers för de olika delarna på sidan.
- Tagit bort "Exempelsida" och första blogginlägget från Wordpress.
- Lagt till två blogginlägg.
- Hook för att ta bort onödiga fält i kassan.
- Hook för att lägga till en text på produktarkiv-sidan. 
- Template override med archive-product.php
    - Ändringen innefattar tillagd symbol efter titeln där archive-product.php används.
- Lagt till bild och nedladdnings-fil till den nedladdningsbara produkten.
- Lagt till plugin i eget GitHub-repo. 
    - Plugin lägger till ett leveransalternativ för att leverera med drönare. 
    - Att göra:
        - Uppdatera funktionsnamn så att de följer samma namn.
- Skapar repo för ERP-systemet.
- Skapar initial filstruktur.
- Initial styling. 
- Lagt till funktionalitet för att hämta från API:et.

### 2022-04-22:
- Vidareutveckling av API-hämtning och rendering. 
- Rendering av blogginlägg.
- Letat efter lösning för nonce-nyckeln.  


### 2022-04-25:
- Vidareutveckling av API-hämtning och rendering.
    - Rendering för produkter och ordrar. 
    - För produkter och ordrar så finns det hårdkodade objekt i JS-filerna. Fetchen fungerar även med en färsk nonce-nyckel. Som behöver uppdateras i controllern för respektive kategori. Det går att hämta Posts direkt från WordPress då det inte kräver autensiering. 
- Lagt till ta bort hämtning på samtliga fält för att kunna tömma fältet från hämtade "objekt". 
- Lagt till "spinner"-funktionalitet för att se när sidan gör sin hämtning. 


### 2022-04-25:
- Lagt till kommentarer till all kod.
- Uppdaterat plugin-koden så att funktionsnamn stämmer överens med vad funktionerna gör. 