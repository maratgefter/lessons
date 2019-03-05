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

