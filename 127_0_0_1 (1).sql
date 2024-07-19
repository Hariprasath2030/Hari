-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2024 at 08:52 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attend_1`
--
CREATE DATABASE IF NOT EXISTS `attend_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `attend_1`;

-- --------------------------------------------------------

--
-- Table structure for table `att_1`
--

DROP TABLE IF EXISTS `att_1`;
CREATE TABLE IF NOT EXISTS `att_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `CTPS` int NOT NULL,
  `Maths` int NOT NULL,
  `ITES` int NOT NULL,
  `Economics` int NOT NULL,
  `Attendance_Percentage` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `att_1`
--

INSERT INTO `att_1` (`id`, `roll_no`, `name`, `Tamil`, `English`, `CTPS`, `Maths`, `ITES`, `Economics`, `Attendance_Percentage`) VALUES
(1, '23IT005', 'ABINAV', 56, 8, 0, 78, 0, 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `att_2`
--

DROP TABLE IF EXISTS `att_2`;
CREATE TABLE IF NOT EXISTS `att_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `CTPS` int NOT NULL,
  `Maths` int NOT NULL,
  `ITES` int NOT NULL,
  `Economics` int NOT NULL,
  `Attendance_Percentage` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `att_2`
--

INSERT INTO `att_2` (`id`, `roll_no`, `name`, `Tamil`, `English`, `CTPS`, `Maths`, `ITES`, `Economics`, `Attendance_Percentage`) VALUES
(1, '23IT007', 'ABISORNAM', 0, 0, 77, 0, 0, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `att_3`
--

DROP TABLE IF EXISTS `att_3`;
CREATE TABLE IF NOT EXISTS `att_3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `CTPS` int NOT NULL,
  `Maths` int NOT NULL,
  `ITES` int NOT NULL,
  `Economics` int NOT NULL,
  `Attendance_Percentage` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Database: `attend_3`
--
CREATE DATABASE IF NOT EXISTS `attend_3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `attend_3`;

-- --------------------------------------------------------

--
-- Table structure for table `att_1`
--

DROP TABLE IF EXISTS `att_1`;
CREATE TABLE IF NOT EXISTS `att_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) NOT NULL,
  `name` varchar(45) NOT NULL,
  `Tamil` int NOT NULL,
  `ADS` int NOT NULL,
  `DBT` int NOT NULL,
  `Maths` int NOT NULL,
  `OOPS` int NOT NULL,
  `MPMC` int NOT NULL,
  `WS` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `att_2`
--

DROP TABLE IF EXISTS `att_2`;
CREATE TABLE IF NOT EXISTS `att_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) NOT NULL,
  `name` varchar(45) NOT NULL,
  `Tamil` int NOT NULL,
  `ADS` int NOT NULL,
  `DBT` int NOT NULL,
  `Maths` int NOT NULL,
  `OOPS` int NOT NULL,
  `MPMC` int NOT NULL,
  `WS` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `att_3`
--

DROP TABLE IF EXISTS `att_3`;
CREATE TABLE IF NOT EXISTS `att_3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) NOT NULL,
  `name` varchar(45) NOT NULL,
  `Tamil` int NOT NULL,
  `ADS` int NOT NULL,
  `DBT` int NOT NULL,
  `Maths` int NOT NULL,
  `OOPS` int NOT NULL,
  `MPMC` int NOT NULL,
  `WS` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
CREATE TABLE IF NOT EXISTS `pma__bookmark` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `query` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

DROP TABLE IF EXISTS `pma__central_columns`;
CREATE TABLE IF NOT EXISTS `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_length` text COLLATE utf8mb3_bin,
  `col_collation` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8mb3_bin DEFAULT '',
  `col_default` text COLLATE utf8mb3_bin,
  PRIMARY KEY (`db_name`,`col_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
CREATE TABLE IF NOT EXISTS `pma__column_info` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

DROP TABLE IF EXISTS `pma__designer_settings`;
CREATE TABLE IF NOT EXISTS `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `settings_data` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

DROP TABLE IF EXISTS `pma__export_templates`;
CREATE TABLE IF NOT EXISTS `pma__export_templates` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8mb3_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `template_data` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'project', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"attend_1\",\"attend_3\",\"phpmyadmin\",\"projects\",\"semester_1\",\"semester_2\",\"semester_3\",\"semester_4\",\"semester_5\",\"semester_6\",\"semester_7\",\"semester_8\",\"sem_exam\",\"students\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_drop_table\":\"something\",\"sql_create_table\":\"something\",\"sql_if_not_exists\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
CREATE TABLE IF NOT EXISTS `pma__favorite` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `tables` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
CREATE TABLE IF NOT EXISTS `pma__history` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
CREATE TABLE IF NOT EXISTS `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `page_nr` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `tables` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"attend_3\",\"table\":\"att_3\"},{\"db\":\"attend_3\",\"table\":\"att_2\"},{\"db\":\"attend_3\",\"table\":\"att_1\"},{\"db\":\"semester_4\",\"table\":\"iat3\"},{\"db\":\"semester_4\",\"table\":\"iat2\"},{\"db\":\"semester_4\",\"table\":\"iat1\"},{\"db\":\"sem_exam\",\"table\":\"sem1\"},{\"db\":\"projects\",\"table\":\"project7\"},{\"db\":\"projects\",\"table\":\"project8\"},{\"db\":\"projects\",\"table\":\"project6\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
CREATE TABLE IF NOT EXISTS `pma__savedsearches` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `pdf_page_number` int NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `prefs` text COLLATE utf8mb3_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `version` int UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8mb3_bin NOT NULL,
  `schema_sql` text COLLATE utf8mb3_bin,
  `data_sql` longtext COLLATE utf8mb3_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8mb3_bin DEFAULT NULL,
  `tracking_active` int UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-06-30 12:36:27', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":304}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
CREATE TABLE IF NOT EXISTS `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8mb3_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`,`tab`,`allowed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
CREATE TABLE IF NOT EXISTS `pma__users` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`username`,`usergroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Users and their assignments to user groups';
--
-- Database: `projects`
--
CREATE DATABASE IF NOT EXISTS `projects` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projects`;

-- --------------------------------------------------------

--
-- Table structure for table `project1`
--

DROP TABLE IF EXISTS `project1`;
CREATE TABLE IF NOT EXISTS `project1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` int NOT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project1`
--

INSERT INTO `project1` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(1, '22IT010', 'AJAY', 7, 'dvvsnvsvsn', 'On Progress', 'Paper', 'paper');

-- --------------------------------------------------------

--
-- Table structure for table `project2`
--

DROP TABLE IF EXISTS `project2`;
CREATE TABLE IF NOT EXISTS `project2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project2`
--

INSERT INTO `project2` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(1, '23IT006', 'ABINESH', '', '', '', '', ''),
(2, '23IT006', 'ABINESH', '', '', '', '', ''),
(3, '22IT011', 'AJAY', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project3`
--

DROP TABLE IF EXISTS `project3`;
CREATE TABLE IF NOT EXISTS `project3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project3`
--

INSERT INTO `project3` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(1, '22IT010', 'AJAY', '90', 'movie', 'Completed', 'Patent', '');

-- --------------------------------------------------------

--
-- Table structure for table `project4`
--

DROP TABLE IF EXISTS `project4`;
CREATE TABLE IF NOT EXISTS `project4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` int NOT NULL,
  `project_title` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project4`
--

INSERT INTO `project4` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(2, '23IT012', 'ADITHIYA', 8, 'song', 'On Progress', 'Patent', 'ijcrt');

-- --------------------------------------------------------

--
-- Table structure for table `project5`
--

DROP TABLE IF EXISTS `project5`;
CREATE TABLE IF NOT EXISTS `project5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` int NOT NULL,
  `project_title` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project5`
--

INSERT INTO `project5` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(1, '22IT010', 'AJAY', 33, 'dvvsnvsvsn', 'Completed', 'Patent', 'ijsr');

-- --------------------------------------------------------

--
-- Table structure for table `project6`
--

DROP TABLE IF EXISTS `project6`;
CREATE TABLE IF NOT EXISTS `project6` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` int NOT NULL,
  `project_title` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project6`
--

INSERT INTO `project6` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(1, '23IT007', 'ADITHIYA', 77, '', 'Completed', 'Patent', '');

-- --------------------------------------------------------

--
-- Table structure for table `project7`
--

DROP TABLE IF EXISTS `project7`;
CREATE TABLE IF NOT EXISTS `project7` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` int NOT NULL,
  `project_title` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project7`
--

INSERT INTO `project7` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(1, '23IT006', 'ABISORNAM', 77, '77', 'Completed', 'Patent', '');

-- --------------------------------------------------------

--
-- Table structure for table `project8`
--

DROP TABLE IF EXISTS `project8`;
CREATE TABLE IF NOT EXISTS `project8` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `team_no` int NOT NULL,
  `project_title` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `project_status` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `publication_type` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `publisher_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project8`
--

INSERT INTO `project8` (`id`, `roll_no`, `name`, `team_no`, `project_title`, `project_status`, `publication_type`, `publisher_name`) VALUES
(2, '22IT010', 'AJAY', 77, 'song', 'Completed', 'Patent', '');
--
-- Database: `semester_1`
--
CREATE DATABASE IF NOT EXISTS `semester_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `semester_1`;

-- --------------------------------------------------------

--
-- Table structure for table `iat1`
--

DROP TABLE IF EXISTS `iat1`;
CREATE TABLE IF NOT EXISTS `iat1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `CTPS` int NOT NULL,
  `Maths` int NOT NULL,
  `ITES` int NOT NULL,
  `Economics` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iat1`
--

INSERT INTO `iat1` (`id`, `roll_no`, `name`, `Tamil`, `English`, `CTPS`, `Maths`, `ITES`, `Economics`) VALUES
(1, '23IT005', 'ABISORNAM', 23, 23, 23, 23, 23, 23),
(3, '23IT005', 'ABINAV', 8, 45, 44, 23, 23, 45),
(4, '22IT010', 'ABINASRI', 0, 0, 0, 0, 0, 0),
(5, '23IT005', 'AJAY', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iat2`
--

DROP TABLE IF EXISTS `iat2`;
CREATE TABLE IF NOT EXISTS `iat2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `CTPS` int NOT NULL,
  `Maths` int NOT NULL,
  `ITES` int NOT NULL,
  `Economics` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iat2`
--

INSERT INTO `iat2` (`id`, `roll_no`, `name`, `Tamil`, `English`, `CTPS`, `Maths`, `ITES`, `Economics`) VALUES
(1, '23IT007', 'ADITHIYA', 101, 87, 87, 90, 90, 87),
(2, '22IT011', 'ADITHIYA', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iat3`
--

DROP TABLE IF EXISTS `iat3`;
CREATE TABLE IF NOT EXISTS `iat3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `CTPS` int NOT NULL,
  `Maths` int NOT NULL,
  `ITES` int NOT NULL,
  `Economics` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iat3`
--

INSERT INTO `iat3` (`id`, `roll_no`, `name`, `Tamil`, `English`, `CTPS`, `Maths`, `ITES`, `Economics`) VALUES
(1, '22IT011', 'ABINASRI', 77777778, 788888, 787, 7888, 788, 78);
--
-- Database: `semester_2`
--
CREATE DATABASE IF NOT EXISTS `semester_2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `semester_2`;

-- --------------------------------------------------------

--
-- Table structure for table `iat1`
--

DROP TABLE IF EXISTS `iat1`;
CREATE TABLE IF NOT EXISTS `iat1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `PDS` int NOT NULL,
  `Maths` int NOT NULL,
  `CO` int NOT NULL,
  `WP` int NOT NULL,
  `DPSD` int NOT NULL,
  `Psycho` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iat1`
--

INSERT INTO `iat1` (`id`, `roll_no`, `name`, `Tamil`, `English`, `PDS`, `Maths`, `CO`, `WP`, `DPSD`, `Psycho`) VALUES
(1, '22IT011', 'ABINESH', 78, 78, 78, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iat2`
--

DROP TABLE IF EXISTS `iat2`;
CREATE TABLE IF NOT EXISTS `iat2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `PDS` int NOT NULL,
  `Maths` int NOT NULL,
  `CO` int NOT NULL,
  `WP` int NOT NULL,
  `DPSD` int NOT NULL,
  `Psycho` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iat2`
--

INSERT INTO `iat2` (`id`, `roll_no`, `name`, `Tamil`, `English`, `PDS`, `Maths`, `CO`, `WP`, `DPSD`, `Psycho`) VALUES
(2, '23IT005', 'ABINAV', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iat3`
--

DROP TABLE IF EXISTS `iat3`;
CREATE TABLE IF NOT EXISTS `iat3` (
  `id` int NOT NULL,
  `roll_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` int NOT NULL,
  `English` int NOT NULL,
  `PDS` int NOT NULL,
  `Maths` int NOT NULL,
  `CO` int NOT NULL,
  `WP` int NOT NULL,
  `DPSD` int NOT NULL,
  `Psycho` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iat3`
--

INSERT INTO `iat3` (`id`, `roll_no`, `name`, `Tamil`, `English`, `PDS`, `Maths`, `CO`, `WP`, `DPSD`, `Psycho`) VALUES
(0, '23IT007', 'ADITHIYA', 0, 0, 0, 0, 0, 0, 0, 0);
--
-- Database: `semester_3`
--
CREATE DATABASE IF NOT EXISTS `semester_3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `semester_3`;

-- --------------------------------------------------------

--
-- Table structure for table `iat1`
--

DROP TABLE IF EXISTS `iat1`;
CREATE TABLE IF NOT EXISTS `iat1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Tamil` int NOT NULL,
  `ADS` int NOT NULL,
  `DBT` int NOT NULL,
  `Maths` int NOT NULL,
  `OOPS` int NOT NULL,
  `MPMC` int NOT NULL,
  `WS` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `iat1`
--

INSERT INTO `iat1` (`id`, `roll_no`, `name`, `Tamil`, `ADS`, `DBT`, `Maths`, `OOPS`, `MPMC`, `WS`) VALUES
(2, '23IT007', 'ABISORNAM', 22, 22, 22, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iat2`
--

DROP TABLE IF EXISTS `iat2`;
CREATE TABLE IF NOT EXISTS `iat2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Tamil` int NOT NULL,
  `ADS` int NOT NULL,
  `DBT` int NOT NULL,
  `Maths` int NOT NULL,
  `OOPS` int NOT NULL,
  `MPMC` int NOT NULL,
  `WS` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `iat2`
--

INSERT INTO `iat2` (`id`, `roll_no`, `name`, `Tamil`, `ADS`, `DBT`, `Maths`, `OOPS`, `MPMC`, `WS`) VALUES
(1, '23IT012', 'ABINASRI', 33, 33, 33, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iat3`
--

DROP TABLE IF EXISTS `iat3`;
CREATE TABLE IF NOT EXISTS `iat3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Tamil` int NOT NULL,
  `ADS` int NOT NULL,
  `DBT` int NOT NULL,
  `Maths` int NOT NULL,
  `OOPS` int NOT NULL,
  `MPMC` int NOT NULL,
  `WS` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--
-- Database: `semester_4`
--
CREATE DATABASE IF NOT EXISTS `semester_4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `semester_4`;

-- --------------------------------------------------------

--
-- Table structure for table `iat1`
--

DROP TABLE IF EXISTS `iat1`;
CREATE TABLE IF NOT EXISTS `iat1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(30) NOT NULL,
  `name` varchar(45) NOT NULL,
  `ADB` int NOT NULL,
  `AJP` int NOT NULL,
  `ES` int NOT NULL,
  `Maths` int NOT NULL,
  `OS` int NOT NULL,
  `BM` int NOT NULL,
  `DAA` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iat2`
--

DROP TABLE IF EXISTS `iat2`;
CREATE TABLE IF NOT EXISTS `iat2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ADB` int NOT NULL,
  `AJP` int NOT NULL,
  `ES` int NOT NULL,
  `Maths` int NOT NULL,
  `OS` int NOT NULL,
  `BM` int NOT NULL,
  `DAA` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `iat2`
--

INSERT INTO `iat2` (`id`, `roll_no`, `name`, `ADB`, `AJP`, `ES`, `Maths`, `OS`, `BM`, `DAA`) VALUES
(1, '23IT007', 'ABINESH', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iat3`
--

DROP TABLE IF EXISTS `iat3`;
CREATE TABLE IF NOT EXISTS `iat3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ADB` int NOT NULL,
  `AJP` int NOT NULL,
  `ES` int NOT NULL,
  `Maths` int NOT NULL,
  `OS` int NOT NULL,
  `BM` int NOT NULL,
  `DAA` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `iat3`
--

INSERT INTO `iat3` (`id`, `roll_no`, `name`, `ADB`, `AJP`, `ES`, `Maths`, `OS`, `BM`, `DAA`) VALUES
(1, '23IT005', 'ABINAV', 0, 0, 0, 0, 0, 0, 0);
--
-- Database: `semester_5`
--
CREATE DATABASE IF NOT EXISTS `semester_5` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `semester_5`;
--
-- Database: `semester_6`
--
CREATE DATABASE IF NOT EXISTS `semester_6` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `semester_6`;
--
-- Database: `semester_7`
--
CREATE DATABASE IF NOT EXISTS `semester_7` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `semester_7`;
--
-- Database: `semester_8`
--
CREATE DATABASE IF NOT EXISTS `semester_8` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `semester_8`;
--
-- Database: `sem_exam`
--
CREATE DATABASE IF NOT EXISTS `sem_exam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sem_exam`;

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

DROP TABLE IF EXISTS `sem1`;
CREATE TABLE IF NOT EXISTS `sem1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `Tamil` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `English` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `CTPS` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `Maths` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `ITES` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `Economics` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `CTPS_LAB` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `ITES_LAB` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `EE_1` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `Crop` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `EA_LAB` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `$gpa` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`id`, `roll_no`, `name`, `Tamil`, `English`, `CTPS`, `Maths`, `ITES`, `Economics`, `CTPS_LAB`, `ITES_LAB`, `EE_1`, `Crop`, `EA_LAB`, `$gpa`) VALUES
(6, '22IT022', 'DHARSHAN D', 'F', 'A+', 'A+', 'A', 'O', 'A', 'O', 'O', 'O', 'B+', 'A+', 0.00),
(7, '23IT005', 'AKASH', 'O', 'F', 'B', 'O', 'F', 'F', 'F', 'F', 'F', 'F', 'F', 0.00),
(8, '23IT005', 'AJAY', '', '', 'O', 'O', 'O', 'F', 'F', 'F', 'A+', 'B', '', 0.00);
--
-- Database: `students`
--
CREATE DATABASE IF NOT EXISTS `students` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `students`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `number`, `password`) VALUES
(1, 'Hari', 'officialhari2030@gmail.com', '6381939625', '12345'),
(2, 'officialhari2030@gmail.com', '', '', '');
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
