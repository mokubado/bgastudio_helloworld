
-- ------
-- BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
-- DummyGame implementation : © <Your name here> <Your email address here>
--
-- This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
-- See http://en.boardgamearena.com/#!doc/Studio for more information.
-- -----

-- dbmodel.sql

-- This is the file where you are describing the database schema of your game
-- Basically, you just have to export from PhpMyAdmin your table structure and copy/paste
-- this export here.
-- Note that the database itself and the standard tables ("global", "stats", "gamelog" and "player") are
-- already created and must not be created here

-- Note: The database schema is created from this file when the game starts. If you modify this file,
--       you have to restart a game to see your changes in database.

-- All cards' state informations.
CREATE TABLE IF NOT EXISTS `cards` (
  `card_id` INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `card_type` varchar(16) NOT NULL,
  `card_type_arg` TINYINT UNSIGNED NOT NULL,
  `card_location` VARCHAR(16) NOT NULL,
  `card_location_arg` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
