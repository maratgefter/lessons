SELECT fio, zp
FROM `ведомость` --выборка

SELECT * 
FROM `ведомость` --вывести ведомость

-- SELECT * FROM `ведомость` WHERE 1 - пример комментария

SELECT *
FROM `ведомость`
WHERE zp > 1000 --вывводит все позиции, где в поле значения больше 1000

SELECT *
FROM `ведомость`
WHERE zp < 500000 and otdel = 'бухгалтерия' --выбрать всех, кто работает в бухгалтерии и имеет зарплату меньше заданной

SELECT *
FROM `ведомость`
WHERE zp > 1200
and NOT otdel = 'бухгалтерия' --выбрать всех, кто получает больше 1200 и не из бухгалтерии

SELECT id as "Номер", otdel as "Отдел",fio as "Фамилия", zp as "Недоплата"
FROM `vedomost` --заментить шапки у столбцов во время вывода

SELECT `id`,`otdel`,`fio`,`zp`/2.15 AS "dollar" 
FROM vedomost --вывести таблицу, где зп привели к доллару и переименовали графу зп

SELECT *
FROM `salespeople`
WHERE city='London' or city='San Jose' -- выбрать все строки, где город Лондон или Сан Хосе; (столбцы = поля, строки = записи)

SELECT *
FROM `salespeople`
WHERE city='London' or city='Barcelona' or city='New York' -- то же самое, но выбираем три города

select *
FROM `salespeople`
WHERE CITY in ('London','San Jose') --вариант сортировки для большого количества позиций

SELECT *
FROM `salespeople`
WHERE COMM >=.11 and COMM<=.13 --выбор из промежутка значений комиссии

SELECT *
FROM `salespeople`
WHERE COMM BETWEEN .11 AND .13 --выбор из промежутка с помощью специального оператора

SELECT *
FROM `salespeople`
WHERE COMM BETWEEN .11 AND .13 and COMM NOT IN(.11, .13) --выбор из промежутка за исключением грнаиц

INSERT
INTO `customers` (`CNUM`, `CNAME`, `CITY`, `RARING`, `SNUM`)
VALUES ('2001', 'Hoffman', 'London', '100', '1001'); --вставка строки в таблицу

SELECT DISTINCT city, RARING 
FROM `customers` --убираем повторяющиеся элементы при помощи DISTINCT


-- шаблоны:
-- % - любое количество символов, включая ниодного
-- _ - заменяет один любой символ

SELECT *
FROM `customers`
WHERE CITY 
LIKE 'L%' -- выбрать записи, где город начинается на L

SELECT *
FROM `salespeople`
WHERE `SNAME`
LIKE '_e%' --найти всех продавцов с второй буквой е в имени

--Функции агрегтрования min, max, avg, count, sum

SELECT MIN(AMT)
FROM `orders` --выбрать минимальное значеник из стoлбца amt

SELECT COUNT(*)
FROM `orders` --количество строк в таблице

SELECT *
FROM `orders`
WHERE 1
order by amt --упорядочить по полю amt

SELECT * FROM `orders` WHERE 1 order by amt DESC --по убывнию (по возрастанию ASC)

SELECT *
FROM `customers`
order by city DESC, 
`RARING`DESC --сортировка двух полей по убыванию

SELECT * FROM `salespeople` ORDER BY 2 --сортировать по номеру столбца не называя имени

SELECT `COMM`,`CITY`,`SNAME`,`SNAME`
FROM `salespeople`
ORDER BY 3 --в обратном порядке столбцы и отсортированы по полю 3

SELECT  AVG(RARING)
FROM shop.customers
WHERE CITY='San Jose'--средний рейтинг людей из Сан Хосе

UPDATE 'vedomost'
SET zp='500'
WHERE otdel="Бухгалтерия"; --изменить значение зарплаты для тех отделов, которые являются бухгалтерией

UPDATE vedomost
SET zp=zp*1.2
WHERE otdel='Клининговая служба'; --увеличить зарплату клининоговой службе на 20%

UPDATE vedomost
SET otdel='Бухгалтерия', zp=1000
WHERE fio
LIKE 'Иванов%';--всех Ивановых в бухгалтерию и зарплату 1000

UPDATE vedomost
SET otdel='Литейный цех', zp=zp*0.8
WHERE otdel
LIKE 'Бухгалтерия';--всех бухгалтеров в литейный цех и уменьшить зарплату на 20%

INSERT
INTO vedomost (fio)
VALUES ('Сидоров Сидор Петрович')--добавить нового человека в ведомость (остальные поля должны иметь возможность содержать значение NULL)

UPDATE vedomost
SET otdel='Бухгалтерия', zp=1200
WHERE otdel IS null
AND fio
LIKE 'Сидоров%'--Сидорова из отдела null в бухгалтерию и зарплату 1200

DELETE
FROM vedomost --удалить все из таблицы

DELETE
FROM vedomost
WHERE fio
LIKE 'Иванов%'--удалить всех Ивановых

DELETE
FROM vedomost
WHERE id=9--удалить ID 10