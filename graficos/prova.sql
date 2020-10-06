CREATE TABLE IF NOT EXISTS `prova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trimestre` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `aluno` varchar(45) NOT NULL,
  `nota` decimal(5,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
