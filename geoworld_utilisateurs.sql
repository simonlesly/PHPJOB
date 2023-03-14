SELECT prenom,login,mdp,Statut
FROM utilisateurs,logutili,droitutili
WHERE utilisateurs.id = logutili.idUtili
AND logutili.id = droitutili.idlog
	