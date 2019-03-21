-- посчитать сркеднюю комиссию продавцов
SELECT AVG (COMM)
FROM salespeople

--вывести список продавцов, у которых комиссионные свыше среднего
SELECT * 
FROM `salespeople` 
WHERE `COMM` > (SELECT AVG (COMM) FROM salespeople)

--найти поккупателей с самым большим рейтингом
SELECT
    *
FROM
    `customers`
WHERE
    RARING =(
    SELECT
        MAX(RARING)
    FROM
        customers
)

--найти продавцов с самыми малыми комиссионными
SELECT
    *
FROM
    `salespeople`
WHERE
    `COMM`=(
    SELECT
        MIN(COMM)
    FROM
        salespeople
)

--вывести список покупателей которые связаны с продавцами из Лондона
SELECT
    *
FROM
    `customers`
WHERE
    SNUM IN(
    SELECT
        SNUM
    FROM
        `salespeople`
    WHERE
        CITY='London'
)

--найти покупателей, у которых рейтинг больше рейтинга покупателей из Лондона
SELECT
    *
FROM
    `customers`
WHERE
    `RARING`>ALL(
    SELECT
        `RARING`
    FROM
        `customers`
    WHERE
        `CITY` = 'London'
)

--Найьти продавцов, у которых комиссионные меньше, чем хотя бы у одного продавца из Лондона
SELECT
    *
FROM
    `salespeople`
WHERE
    `COMM`>ALL(
    SELECT
        `COMM`
    FROM
        `salespeople`
    WHERE
        `CITY` = 'London'
)

--При группировке все записи в таблице разбиваются на группы с одинаковым значением в том поле, по которому происходит группировка. При этом выводиться могут только те поля, 
--по которым производится группировка. По остальным полям могут выводиться их групповые характеристики (минимум, максимум, среднее и так далее).
--Для группировки используются ключепвые слова group by.

--Посчитать средний размер комиссионных в каждом городе
SELECT
    `CITY`,
    AVG(`COMM`)
FROM
    `salespeople`
GROUP BY
    `CITY`

--Найти минимальное значение рейтингов покупателей в каждом городе
SELECT
    `CITY`,
    MIN(`RARING`)
FROM
    `customers`
GROUP BY
    `CITY`

--Найти общую сумму заказов на каждую дату
SELECT
    `ODATE`,
    SUM(`AMT`)
FROM
    `orders`
GROUP BY
    `ODATE`

--То же только переименованные столбцы
SELECT
    `ODATE` AS 'Дата',
    SUM(`AMT`) AS 'Сумма заказа'
FROM
    `orders`
GROUP BY
    `ODATE`

--Условие, записанное после ключевого слова WHERE применяется к каждой отдельной записи в таблице. 
--Условие, записанное после ключевого слова HAVING применяется к группам записи. При этом в условиях, записанных после ключевого слова HAVING разрешается использовать функции агрегирования

--Найти города, в которых среднее значение рейтинга покупателей больше 200
SELECT
    `CITY`
FROM
    `customers`
GROUP BY
    `CITY`
HAVING
    AVG(`RARING`) > 200

--Найти даты, когда средняя сумма заказа была выше 1700
SELECT
    `ODATE`,
    AVG(`AMT`)
FROM
    `orders`
GROUP BY
    `ODATE`
HAVING
    AVG(`AMT`) > 1700

--Посчитать среднюю зарплату в кажом отделе, вывести поля "название отдела", "средняя зарплата". Отсортировать по величине зарплаты
SELECT
    `otdel`,
    AVG(`zp`)
FROM
    `vedomost`
GROUP BY
    `otdel`
ORDER BY
    AVG(`zp`)
DESC