SELECT salles.nom, etage.nom 
FROM etages 
INNER JOIN salles
WHERE etages.id = salles.etages.id