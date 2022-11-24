SELECT etage.nom,                                           -- On selectionne les valeurs avec la syntaxe nomcol.nomtable
salles.nom AS "Biggest room",             
MAX(salles.capacite)                                        -- ainsi que la salle avec la capacité la plus grande
FROM salles                                                 -- Depuis 'salles'
INNER JOIN etage                                            -- On joint 'etages'
ON salles.id_etage = etage.id;                              -- On fait correspondre les valeurs