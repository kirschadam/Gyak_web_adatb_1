﻿-- A feladatok megoldására elkészített SQL parancsokat illessze be a feladat sorszáma után!


-- 10. feladat: CREATE DATABASE halozat DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;


-- 12. feladat: INSERT INTO `megallok`(`id`, `nev`) VALUES (198,"Kőbányai garázs");


-- 13. feladat: UPDATE `jaratok` SET `elsoAjtos`= false WHERE `id`= 20;


-- 14. feladat: SELECT `jaratSzam` FROM `jaratok` WHERE `elsoAjtos` = true;


-- 15. feladat: SELECT `nev` FROM `megallok` WHERE `nev` LIKE "%sétány" ORDER BY `nev` ASC;


-- 16. feladat: SELECT halozat.sorszam, megallok.nev FROM `halozat` INNER JOIN `jaratok` ON halozat.jarat = jaratok.id INNER JOIN `megallok` ON halozat.megallo = megallok.id WHERE jaratok.jaratSzam = "CITY" AND halozat.irany = "A" ORDER BY halozat.sorszam ASC;


-- 17. feladat: SELECT megallok.nev, COUNT(halozat.megallo) AS jaratokSzama FROM `halozat` INNER JOIN `megallok` ON halozat.megallo = megallok.id GROUP BY halozat.megallo HAVING COUNT(halozat.megallo) >= 3 ORDER BY `megallok`.`nev` ASC;



