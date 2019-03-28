UPDATE
    `vedomost`
SET
    `wholesale cost` = 0.8 * `wholesale_unit_price` --выводим общую стоимость

SELECT
    `name_of_product`,
    `item_number`,
    `unit`,
    `wholesale cost`
FROM
    `vedomost`
WHERE
    `wholesale cost` > 100 AND `wholesale cost` < 1000
ORDER BY
    `name_of_product` --задание 1

SELECT
    `name_of_product`, MAX(`wholesale cost`), AVG(`wholesale_unit_price`)
FROM
    `vedomost`
GROUP BY
    `name_of_product`  
ORDER BY `vedomost`.`name_of_product` --задание 2

SELECT
    `name_of_product`,
    `item_number`,
    `unit`,
    `quantity`,
    `wholesale cost`
FROM
    `vedomost`
WHERE
    `wholesale cost` <(
    SELECT
        AVG(`wholesale cost`)
    FROM
        `vedomost`
) --задание 3


DELETE FROM `vedomost` --emtpty table

DROP TABLE `vedomost`

DROP DATABASE `gefter2803`