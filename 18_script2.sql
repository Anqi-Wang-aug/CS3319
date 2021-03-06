USE 18_assign2db;
DELETE FROM BUS WHERE (CAPACITY IS NOT NULL);
DELETE FROM TRIP WHERE (ID IS NOT NULL);
DELETE FROM PASSENGER WHERE(ID IS NOT NULL);
DELETE FROM PASSPORT WHERE(PASSPORT_NUMBER IS NOT NULL);
DELETE FROM TOOK WHERE(PRICE IS NOT NULL);
SELECT * FROM BUS;
SELECT * FROM TRIP;
SELECT * FROM PASSENGER;
SELECT * FROM PASSPORT;
SELECT * FROM TOOK;
LOAD DATA LOCAL INFILE "bus.txt" INTO TABLE BUS FIELDS TERMINATED BY ',';

INSERT INTO TRIP VALUES(1, DATE "2022-01-01", DATE "2022-01-17", "Germany", "Castles of Germany", "VAN1111");
INSERT INTO TRIP VALUES(2, DATE "2022-03-03", DATE "2022-03-14", "Italy","Tuscany Sunsets", "TAXI222");
INSERT INTO TRIP VALUES(3, DATE "2022-05-05", DATE "2022-05-10", "USA", "California Wines", "VAN2222");
INSERT INTO TRIP VALUES(4, DATE "2022-04-04", DATE "2022-04-14", "Bermuda", "Beaches Galore", "TAXI222");
INSERT INTO TRIP VALUES(5, DATE "2022-06-01", DATE "2022-06-22", "Canada", "Cottage Country", "CAND123");
INSERT INTO TRIP VALUES(6, DATE "2022-07-05", DATE "2022-07-15", "Italy","Arrivaderci Roma", "TAXI111");
INSERT INTO TRIP VALUES(7, DATE "2022-09-09", DATE "2022-09-29", "UK", "Shetland and Orkney", "TAXI111");
INSERT INTO TRIP VALUES(8, DATE "2022-06-10", DATE "2022-06-20", "USA", "Disney World and Sea World", "VAN2222");
INSERT INTO TRIP VALUES(9, DATE "2022-10-29", DATE "2022-11-20", "Russia", "Dream Trip", "TAXI333");
INSERT INTO TRIP VALUES(10, DATE "2022-10-29", DATE "2022-11-30", "Rhodes Island", "Originum Trip", "TAXI222");

INSERT INTO PASSENGER VALUES(11, "Homer", "Simpson");
INSERT INTO PASSENGER VALUES(22, "Marge", "Simpson");
INSERT INTO PASSENGER VALUES(33, "Bart", "Simpson");
INSERT INTO PASSENGER VALUES(34, "Lisa", "Simpson");
INSERT INTO PASSENGER VALUES(35, "Maggie", "Simpson");
INSERT INTO PASSENGER VALUES(44, "Ned", "Flanders");
INSERT INTO PASSENGER VALUES(45, "Todd", "Flanders");
INSERT INTO PASSENGER VALUES(66, "Heidi", "Klum");
INSERT INTO PASSENGER VALUES(77, "Michael", "Scott");
INSERT INTO PASSENGER VALUES(78, "Dwight", "Schrute");
INSERT INTO PASSENGER VALUES(79, "Pam", "Beesly");
INSERT INTO PASSENGER VALUES(80, "Creed", "Bratton");
INSERT INTO PASSENGER VALUES(81, "Ryuko", "Matoi");

INSERT INTO PASSPORT VALUES("US10",  DATE "2025-1-1", "USA", DATE "1970-2-19", 11);
INSERT INTO PASSPORT VALUES("US12", DATE "2025-1-1", "USA", DATE "1972-08-12", 22);
INSERT INTO PASSPORT VALUES("US13", DATE "2025-1-1", "USA", DATE "2001-05-12", 33);
INSERT INTO PASSPORT VALUES("US14", DATE "2025-1-1", "USA", DATE "2004-3-19", 34);
INSERT INTO PASSPORT VALUES("US15", DATE "2025-1-1", "USA", DATE "2012-09-17", 35);
INSERT INTO PASSPORT VALUES("US22", DATE "2030-04-04", "USA", DATE "1950-06-11", 44);
INSERT INTO PASSPORT VALUES("US23", DATE "2018-03-03", "USA", DATE "1940-06-24", 45);
INSERT INTO PASSPORT VALUES("GE11", DATE "2027-01-01", "Germany", DATE "1970-07-12", 66);
INSERT INTO PASSPORT VALUES("US88", DATE "2030-02-13", "Canada", DATE "1979-04-25", 77);
INSERT INTO PASSPORT VALUES("US89", DATE "2022-02-02", "Canada", DATE "1976-04-08", 78);
INSERT INTO PASSPORT VALUES("US90", DATE "2020-02-28", "Italy", DATE "180-04-04", 79);
INSERT INTO PASSPORT VALUES("US91", DATE "2030-01-01", "Germany", DATE "1959-02-02", 80);
INSERT INTO PASSPORT VALUES("JA20", DATE "2021-10-29", "Japan", DATE "1996-10-23", 81);


INSERT INTO TOOK VALUES(11, 1, 500);
INSERT INTO TOOK VALUES(22,1, 500);
INSERT INTO TOOK VALUES(33, 1, 200);
INSERT INTO TOOK VALUES(34, 1, 200);
INSERT INTO TOOK VALUES(35, 1, 200);
INSERT INTO TOOK VALUES(66, 1, 600.99);
INSERT INTO TOOK VALUES(44, 8, 400);
INSERT INTO TOOK VALUES(45, 8, 200);
INSERT INTO TOOK VALUES(78, 4, 600);
INSERT INTO TOOK VALUES(80, 4, 600);
INSERT INTO TOOK VALUES(78, 1, 550);
INSERT INTO TOOK VALUES(33, 8, 300);
INSERT INTO TOOK VALUES(34, 8, 300);
INSERT INTO TOOK VALUES(11, 6, 600);
INSERT INTO TOOK VALUES(22, 6, 600);
INSERT INTO TOOK VALUES(33, 6, 100);
INSERT INTO TOOK VALUES(34, 6, 100);
INSERT INTO TOOK VALUES(35, 6, 100);
INSERT INTO TOOK VALUES(11, 7, 300);
INSERT INTO TOOK VALUES(44, 7, 400);
INSERT INTO TOOK VALUES(77, 7, 500);
INSERT INTO TOOK VALUES(81, 10, 500);

SELECT * FROM BUS;
SELECT * FROM TRIP;
SELECT * FROM PASSENGER;
SELECT * FROM PASSPORT;
SELECT * FROM TOOK;

SELECT * FROM PASSPORT;
UPDATE PASSPORT SET COUNTRY_OF_CITIZENSHIP="Germany" WHERE PASSENGER_ID=78;
SELECT * FROM PASSPORT;

SELECT * FROM TRIP;
UPDATE TRIP SET BUS_USED="VAN1111" WHERE COUNTRY_VISITED="USA";
SELECT * FROM TRIP
