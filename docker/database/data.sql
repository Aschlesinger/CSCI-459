
DROP TABLE IF EXISTS `data459`;

CREATE TABLE `data459` (
  `id` varchar(6) DEFAULT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `data459` (id,f_name, l_name)
 VALUES ('1','George','bill'),
 ('8','Alexander','Schlesinger'),
 ('3','Dank','Smith'),
 ('4','Billy','Bob'),
 ('5','Gandalf','Gray'),
 ('6','Gandalf','White'),
 ('7','Frodo','Baggins'),
 ('8','Bilbo','Baggins'),
 ('66','Execute','Order'),
 ('117','Master','Cheif')
  ;
/*LOAD DATA LOCAL INFILE '/database/data.txt' INTO TABLE data459;*/
