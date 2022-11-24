SELECT salles.nom, etage.nom        -- On selectionne les valeurs avec la syntaxe nomcol.nomtable
FROM salles                         -- Depuis 'salles'
INNER JOIN etage                          -- On joint 'etages'
ON salles.id_etage = etage.id;      -- On fait correspondre les valeurs