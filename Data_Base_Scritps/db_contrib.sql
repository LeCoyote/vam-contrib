-- VAM-contrib database changes

--
-- Support fleettype specific financial parameters
-- 

CREATE TABLE `fleettypes_finparams` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `finparam_id` bigint(10) NOT NULL,
  `fleettype_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `finparam` (`finparam_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

--
-- Support charter-only financial parameters
-- 

ALTER TABLE financial_parameters ADD COLUMN `is_charter_only` tinyint(4) DEFAULT 0 AFTER is_profit ;

--
-- Add recurring financial parameters
--

ALTER TABLE financial_parameters
ADD COLUMN `valid_until` date DEFAULT NULL after is_charter_only,
ADD COLUMN `is_recurring` tinyint(4) DEFAULT '0' AFTER is_charter_only;
