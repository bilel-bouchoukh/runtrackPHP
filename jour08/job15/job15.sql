SELECT salles.nom as nom_salle, etage.nom as nom_étage
FROM etage 
INNER JOIN salles
ON etage.id = salles.id_etages