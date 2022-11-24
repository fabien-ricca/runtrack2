/*Méthode avec fonction left : LEFT(chaine, longueur)*/
SELECT * FROM etudiants WHERE LEFT(prenom, 1) = 'T';

/*Méthode avec like : like 'T'*/
SELECT * FROM etudiants WHERE prenom like 'T%';