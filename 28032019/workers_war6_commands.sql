UPDATE `workers` SET `premia`=`tarif`*`vishe_normy`/100;

SELECT
    `fio`,
    `speciality`,
    `rang`,
    `vishe_normy`
FROM
    `workers`
WHERE
    `rang` > 3 AND `rang` < 6
ORDER BY
    `fio` --zad1