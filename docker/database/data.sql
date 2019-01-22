
DROP TABLE IF EXISTS `dockerSample`;

CREATE TABLE `dockerSample` (
  `id` varchar(6) DEFAULT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



LOCK TABLES `dockerSample` WRITE;

INSERT INTO `dockerSample` (id,f_name, l_name)
 VALUES ('1','George','bill'),
 ('2','Alexander','Schlesinger'),
 ('3','Dank','Smith'),
 ('4','Billy','Bob'),
 ('5','Gandalf','Gray'),
 ('6','Gandalf','White'),
 ('7','Frodo','Baggins'),
 ('8','Bilbo','Baggins'),
 ('66','Execute','Order'),
 ('117','Master','Cheif')
  ;
UNLOCK TABLES;
