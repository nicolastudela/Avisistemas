/*
-- Query: SELECT * FROM prestashop.ps_pos_logo3
LIMIT 0, 1000

-- Date: 2017-12-18 11:48
*/

CREATE TABLE `ps_pos_logo3` (
  `id_pos_logo3` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL DEFAULT '#',
  `image` longtext NOT NULL,
  `description` longtext NOT NULL,
  `porder` int(11) NOT NULL,
  PRIMARY KEY (`id_pos_logo3`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `ps_pos_logo3` (`id_pos_logo3`,`title`,`link`,`image`,`description`,`porder`) VALUES (1,'Logo1','http://poslogo3-TEST.com/','','',0);
INSERT INTO `ps_pos_logo3` (`id_pos_logo3`,`title`,`link`,`image`,`description`,`porder`) VALUES (2,'Logo2','http://posthemes.com/','','',0);
INSERT INTO `ps_pos_logo3` (`id_pos_logo3`,`title`,`link`,`image`,`description`,`porder`) VALUES (3,'Logo3','http://posthemes.com/','','',0);
INSERT INTO `ps_pos_logo3` (`id_pos_logo3`,`title`,`link`,`image`,`description`,`porder`) VALUES (4,'Logo4','http://posthemes.com/','','',0);
INSERT INTO `ps_pos_logo3` (`id_pos_logo3`,`title`,`link`,`image`,`description`,`porder`) VALUES (5,'Logo5','http://posthemes.com/','','',0);
INSERT INTO `ps_pos_logo3` (`id_pos_logo3`,`title`,`link`,`image`,`description`,`porder`) VALUES (6,'Logo6','http://posthemes.com/','','',0);
INSERT INTO `ps_pos_logo3` (`id_pos_logo3`,`title`,`link`,`image`,`description`,`porder`) VALUES (7,'Logo7','http://poslogo3-TEST.com/','','',0);


CREATE TABLE `ps_pos_logo3_shop` (
  `id_pos_logo3` int(11) unsigned NOT NULL,
  `id_shop` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_pos_logo3`,`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ps_pos_logo3_shop` (`id_pos_logo3`,`id_shop`) VALUES (1,1);
INSERT INTO `ps_pos_logo3_shop` (`id_pos_logo3`,`id_shop`) VALUES (2,1);
INSERT INTO `ps_pos_logo3_shop` (`id_pos_logo3`,`id_shop`) VALUES (3,1);
INSERT INTO `ps_pos_logo3_shop` (`id_pos_logo3`,`id_shop`) VALUES (4,1);
INSERT INTO `ps_pos_logo3_shop` (`id_pos_logo3`,`id_shop`) VALUES (5,1);
INSERT INTO `ps_pos_logo3_shop` (`id_pos_logo3`,`id_shop`) VALUES (6,1);
INSERT INTO `ps_pos_logo3_shop` (`id_pos_logo3`,`id_shop`) VALUES (7,1);
