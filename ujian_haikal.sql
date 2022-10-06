1.CREATE DATABASE ujian_haikal;

2.CREATE TABLE tb_obat(kode_obat VARCHAR(25)PRIMARY KEY, nama_obat VARCHAR(50), jenis VARCHAR(50), satuan VARCHAR(50), stok INTEGER(20), harga_beli INTEGER(20), harga_jual INTEGER(20));

3.INSERT INTO `tb_obat` (`kode_obat`,`nama_obat`,`jenis`,`satuan`,`stok`,`harga_beli`,`harga_jual`) VALUES 
('K001','Allerin 120cc','Obat terbatas','Botol','50','20000','22000');
('K002','Becombion 110ml','Obat Bebas','Botol','10','15000','16000');
('K003','Becombion 60ml','Obat Bebas','Botol','5','8000','9000'), 
('K004','Betadine Vag Plus','Obat Bebas','Botol','12','12000','13000'), 
('K005','Komix','Obat Bebas','Lembar','50','4500','5000'), 
('K006','Diazepam','Obat keras','Tablet','4','55000','60000'), 
('K007','CTM','Obat Bebas','Tablet','3','70000','75000'),
('K008','Amoxicilin','Obat Terbatas','Tablet','74','975','1100'),
('K009','Antimo','Obat Bebas','Tablet','2','5100','6000'),
('K010','Parasetamol','Obat Bebas','Strips','100','3000','4000');

4.SELECT * FROM `tb_obat`;

5.SELECT * FROM `tb_obat` WHERE jenis = 'Obat Terbatas';

6.SELECT * FROM `tb_obat` WHERE stok > 50 ORDER BY stok DESC;

7.SELECT * FROM `tb_obat` WHERE nama_obat LIKE '%Becombion%';

8.SELECT jenis, COUNT(jenis) AS obat_bebas FROM `tbl_obat` WHERE jenis = 'obat bebas' GROUP BY jenis;

9.UPDATE `tb_obat` SET `stok` = '10' WHERE `tb_obat`.`kode_obat` = 'K007';

10.SELECT * FROM `tb_obat` WHERE jenis = 'Obat bebas' AND satuan = 'botol';

11.SELECT jenis, AVG(harga_beli)AS rerata_beli FROM `tb_obat` WHERE jenis = 'obat terbatas';

12.('K011','Paramex','Obat Bebas','lembar','14','4000','5000');

13.SELECT * FROM `tb_obat` WHERE nama_obat = 'Paramex';

14.SELECT jenis, SUM(stok) AS stok_total FROM `tb_obat` GROUP BY jenis

15.DELETE FROM `tb_obat` WHERE kode_obat = 'K005';

16.SELECT * FROM `tb_obat` WHERE nama_obat LIKE 'a%';

17. SELECT setuan FROM `tb_obat` GROUP BY setuan;

18.SELECT * FROM `tb_obat` WHERE harga_beli BETWEEN 10000 AND 20000;

19.ALTER TABLE tb_obat RENAME tbl_obat;

20.SELECT * FROM `tbl_obat` WHERE nama_obat LIKE '%mo%' AND stok > 10;