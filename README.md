**nom:ARAFAT**
**prenom:Amina Youssouf**



**SQL**
-Question 2.B: Requete pour creer un personnage == INSERT INTO personnage VALUES(Null,"lenom","lespeces","lage")

-Question 3.B: SELECT personnage.nom,voiture.nom FROM voiture RIGHT JOIN personnage on id_personnage=voiture.id_personnage;
   

         3.C:SELECT sport.nom ,personnage.nom,peronnage_sport.id_sport FROM peronnage_sport RIGHT JOIN personnage on id_personnage=peronnage_sport.id_personnage RIGHT JOIN sport on id_sport=peronnage_sport.id_sport;


-Question 4:
    SELECT sport.nom ,personnage.nom,peronnage_sport.id_sport, voiture.nom FROM peronnage_sport RIGHT JOIN personnage on id_personnage=peronnage_sport.id_personnage where nom LIKE('FootBall') AND RIGHTJOIN sport on id_sport=peronnage_sport.id_sport RIGHT JOIN voiture on id_voiture=peronnage_sport.id_voiture WHERE nom LIKE('sous-marin');
 
 
  