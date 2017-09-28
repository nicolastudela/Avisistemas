<?php

// Init
$sql = array();

// Create Table in Database
        $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_logo3` (
		  `id_pos_logo3` int(10) NOT NULL AUTO_INCREMENT,
		  `title` varchar(250) NOT NULL,
                  `link` varchar(250) NOT NULL DEFAULT "#",
                  `image` longtext NOT NULL,
                  `description` longtext NOT NULL,
                  `porder` int NOT NULL,
  		PRIMARY KEY (`id_pos_logo3`)
		) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

        $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_logo3_shop` (
                    `id_pos_logo3` int(11) unsigned NOT NULL,
                    `id_shop` int(11) unsigned NOT NULL,
                    PRIMARY KEY (`id_pos_logo3`,`id_shop`)
                ) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

    $doc = new DOMDocument();
    $file = _PS_MODULE_DIR_ . DS . 'poslogo3' . DS . 'sql' . DS . 'logo3.xml';
    $doc->load($file);
    $blocks = $doc->getElementsByTagName("logo3");
    foreach ($blocks as $block) {
        $ids = $block->getElementsByTagName("id_pos_logo3");
        $id = $ids->item(0)->nodeValue;
        $titles = $block->getElementsByTagName("title");
        $title = $titles->item(0)->nodeValue;
        $links = $block->getElementsByTagName("link");
        $link = $links->item(0)->nodeValue;
        $descriptions = $block->getElementsByTagName("description");
        $description = $descriptions->item(0)->nodeValue;
        $porders = $block->getElementsByTagName("porder");
        $porder = $porders->item(0)->nodeValue;
        //  echo $id.'-'.$title.'-'.$description.'-'.$link.'-'.$porder; echo "<br>";
        $sql[] = "insert into `" . _DB_PREFIX_ . "pos_logo3` (`id_pos_logo3`, `title`, `link`, `description`, `porder`) 
           values('".$id."','".$title."','".$link."','".$description."','".$porder."');";
    }

    $blockshops = $doc->getElementsByTagName("logo3_shop");
    foreach ($blockshops as $blockshop) {
        $ids = $blockshop->getElementsByTagName("id_pos_logo3");
        $id = $ids->item(0)->nodeValue;
        $id_shops = $blockshop->getElementsByTagName("id_shop");
        $id_shop = $id_shops->item(0)->nodeValue;
        //echo $id.'-'.$id_shop;
        $sql[] = "insert into `" . _DB_PREFIX_ . "pos_logo3_shop`(`id_pos_logo3`, `id_shop`) 
                VALUES('" . $id . "','" . $id_shop . "')";
    }