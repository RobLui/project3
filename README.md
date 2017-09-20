Check if everything works
====

Na installatie van
Composer, Symfony, Ampps, ..


Stappen (liefst in volgorde):

1. Start webserver (Ampps)
2. Ga naar: [http://localhost/ampps/](http://localhost/ampps/)
3. Klik op “manage domains” (staat onder categorie “configure”)
4. Klik op “Add new”
5. Voer bij Domain in: project3.local
6. Voer bij Domain path in: pad waar da u ding staat met daarachter /web
      <br> BV: /Users/robbert/documents/school/project3/web 
7. Herstart apache (via Ampps), door op het knopje bij apache te drukken in het menu van Ampps (2x, 1 keer voor af, 1 keer voor terug op)
8. Probeer te zien of ge een error krijgt door naar [project3.local/](project3.local/) te surfen
9. (Als ge nee error krijgt is t goe :p) -> ga dan naar u phpmyadmin  [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)
10. Maak daar ff een nieuwe database naam aan die kdg_project3 noemt
11. Ga daarna naar uwe CMD en voer uit: php app/console doctrine:schema:update —force 
12. Na da ge da hebt gedaan zou da moeten zeggen “blabla x aantal queries..” If so , [project3.local/](project3.local/) zou moeten werken nu :)
13. Probeert nu in te loggen ;) Heb 2 hardcoded users aangemaakt om ervoor te zorgen da wij altijd kunnen inloggen, zonder uit de db te moeten gehaald worden, username = phedra/robbert en password = project3
14. Vanaf da moment zou ge moeten ingelogd zijn en de mogelijkheid hebben om naar project3.local/admin te surfen :) try out
15. En vanaf hier kunnen we verder me de rest van ons leven als alles mooi werkt! :) 
