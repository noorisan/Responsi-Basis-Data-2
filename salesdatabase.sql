/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 10.1.38-MariaDB : Database - salesdatabase
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`salesdatabase` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `salesdatabase`;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `namaCustomer` varchar(255) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`idCustomer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`idCustomer`,`namaCustomer`,`alamat`) values 
(202002,'Grace','Jalan Diponegoro'),
(202003,'Nisaa','Jalan Gurame');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `namaProduk` varchar(255) DEFAULT NULL,
  `stockProduk` int(11) DEFAULT NULL,
  `hargaProduk` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idProduk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`idProduk`,`namaProduk`,`stockProduk`,`hargaProduk`) values 
(111,'Melati Housing',5,'150000000'),
(112,'Apartemen Indah Kapuk',10,'75000000');

/*Table structure for table `sale` */

DROP TABLE IF EXISTS `sale`;

CREATE TABLE `sale` (
  `idSale` int(11) NOT NULL AUTO_INCREMENT,
  `idSalesman` int(11) DEFAULT NULL,
  `idProduk` int(11) DEFAULT NULL,
  `idCustomer` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `jumlahSale` varchar(255) DEFAULT NULL,
  `totalBayar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idSale`),
  KEY `idSalesman` (`idSalesman`),
  KEY `idProduk` (`idProduk`),
  KEY `idCustomer` (`idCustomer`),
  CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`idSalesman`) REFERENCES `salesman` (`idSalesman`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sale_ibfk_3` FOREIGN KEY (`idCustomer`) REFERENCES `customer` (`idCustomer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1112 DEFAULT CHARSET=latin1;

/*Data for the table `sale` */

insert  into `sale`(`idSale`,`idSalesman`,`idProduk`,`idCustomer`,`date`,`jumlahSale`,`totalBayar`) values 
(1111,1001,111,202002,'2020-11-04','2','300000000');

/*Table structure for table `salesman` */

DROP TABLE IF EXISTS `salesman`;

CREATE TABLE `salesman` (
  `idSalesman` int(11) NOT NULL,
  `namaSalesman` varchar(255) DEFAULT NULL,
  `komisiSalesman` varchar(255) DEFAULT NULL,
  `targetSales` varchar(255) DEFAULT NULL,
  `produkTerjual` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSalesman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `salesman` */

insert  into `salesman`(`idSalesman`,`namaSalesman`,`komisiSalesman`,`targetSales`,`produkTerjual`) values 
(1001,'Pudidi','0','5',0),
(1002,'Noir','0','10',0);

/* Trigger structure for table `sale` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `updateNilai` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `updateNilai` AFTER INSERT ON `sale` FOR EACH ROW BEGIN
    declare sp int;
	UPDATE `produk` SET stockProduk=stockProduk-new.jumlahSale where idProduk=new.idProduk;
	UPDATE `salesman` SET produkTerjual= produkTerjual+new.jumlahSale  WHERE idSalesman=new.idSalesman;
	UPDATE `salesman` SET komisiSalesman= komisiSalesman+new.totalBayar*0.05 WHERE idSalesman=new.idSalesman;
	
    END */$$


DELIMITER ;

/* Procedure structure for procedure `input` */

/*!50003 DROP PROCEDURE IF EXISTS  `input` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `input`(idsale int,idsalesman int, idprduk int, idcustomer int,tanggal date,jmlhsale varchar(255))
BEGIN
		declare hp varchar(255);
		select hargaProduk from produk where idproduk=idprduk into hp;
		insert into sale values (idsale,idsalesman,idprduk,idcustomer,tanggal,jmlhsale,hp*jmlhsale);
END */$$
DELIMITER ;

/* Procedure structure for procedure `insertSale` */

/*!50003 DROP PROCEDURE IF EXISTS  `insertSale` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `insertSale`()
BEGIN

	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
