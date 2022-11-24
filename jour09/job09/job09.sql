/* Selctionner que les étudiants de moins de 18ans
    fonction TIMESTAMPDIFF(unit, date1, date2) => date2 - date1 
                            unit =  FRAC_SECOND
                                    SECOND
                                    MINUTE
                                    HOUR
                                    DAY
                                    WEEK
                                    MONTH
                                    QUARTER
                                    YEAR
                                    
    fonction CURDATE() => date du jour */
SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18;