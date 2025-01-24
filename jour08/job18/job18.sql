SELECT etage.nom , MAX(salles.capacite) , salles.nom as Biggest_Room
FROM etage 
INNER JOIN salles
ON etage.id = salles.id_etages
