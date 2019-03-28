

CREATE DATABASE `gefter2803` ;

USE `gefter2803`;



CREATE TABLE `vedomost` (
  `id` int(11) NOT NULL,
  `name_of_product` varchar(200) NOT NULL,
  `item_number` varchar(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `wholesale_unit_price` double NOT NULL,
  `wholesale cost` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `vedomost` (`id`, `name_of_product`, `item_number`, `unit`, `quantity`, `wholesale_unit_price`, `wholesale cost`) VALUES
(1, 'Краны шаровые', '000250', 'шт.', 25, 0.5, NULL),
(2, 'Краска черная', '001250', 'литры', 10, 26, NULL),
(3, 'Ключ трубный №1', '003569', 'шт.', 3, 17.36, NULL),
(4, 'Индикатор наличия напряжния', '036980', 'шт.', 4, 18.96, NULL),
(5, 'Рукав напорный армированный', '105260', 'метры', 39, 0.79, NULL),
(6, 'Лист стальной оцинкованный', '000256', 'метры квадратные', 23, 26.54, NULL),
(7, 'Шайба М8', '159633', 'шт.', 1269, 0.03, NULL),
(8, 'Болт анкерный 10', '859633', 'шт.', 97, 0.58, NULL),
(9, 'Перчатки электроизолирующие', '859637', 'пары', 10, 8.99, NULL),
(10, 'Двигатель асинхронный', '874455', 'шт.', 2, 983.33, NULL);


ALTER TABLE `vedomost`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `vedomost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


UPDATE
    `vedomost`
SET
    `wholesale cost` = 0.8 * `wholesale_unit_price` ;



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
    `name_of_product`; 

SELECT
    `name_of_product`, MAX(`wholesale cost`), AVG(`wholesale_unit_price`)
FROM
    `vedomost`
GROUP BY
    `name_of_product`  
ORDER BY `vedomost`.`name_of_product` ;

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
) ;


DELETE FROM `vedomost`; 

DROP TABLE `vedomost`;

DROP DATABASE `gefter2803`;