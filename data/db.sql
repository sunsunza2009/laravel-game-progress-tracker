-- MySQL Script generated by MySQL Workbench
-- Sun May  5 21:50:25 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema laravel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema laravel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8 ;
USE `laravel` ;

-- -----------------------------------------------------
-- Table `laravel`.`games`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`games` (
  `game_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `rating` FLOAT NULL,
  `age_limit` INT NULL,
  `platform` VARCHAR(100) NULL,
  `detail` TEXT NULL,
  `genre` VARCHAR(100) NULL,
  `developer` VARCHAR(100) NULL,
  `poster_url` VARCHAR(100) NULL,
  PRIMARY KEY (`game_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`players`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`players` (
  `player_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `gender` ENUM("M", "F") NULL,
  `birth_date` DATE NULL,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`player_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`chapters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`chapters` (
  `chapter_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `game_id` INT NOT NULL,
  PRIMARY KEY (`chapter_id`, `game_id`),
  INDEX `fk_chapter_Game1_idx` (`game_id` ASC) ,
  CONSTRAINT `fk_chapter_Game1`
    FOREIGN KEY (`game_id`)
    REFERENCES `laravel`.`games` (`game_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`progress`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`progress` (
  `progress_id` INT NOT NULL AUTO_INCREMENT,
  `player_id` INT NOT NULL,
  `chapter_id` INT NOT NULL,
  `game_id` INT NOT NULL,
  `comment` VARCHAR(99) NULL,
  `last_play_time` DATETIME NULL,
  `progress_percent` INT NULL,
  PRIMARY KEY (`progress_id`, `player_id`, `chapter_id`, `game_id`),
  INDEX `fk_progress_player1_idx` (`player_id` ASC) ,
  INDEX `fk_progress_chapters1_idx` (`chapter_id` ASC, `game_id` ASC) ,
  CONSTRAINT `fk_progress_player1`
    FOREIGN KEY (`player_id`)
    REFERENCES `laravel`.`players` (`player_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_progress_chapters1`
    FOREIGN KEY (`chapter_id` , `game_id`)
    REFERENCES `laravel`.`chapters` (`chapter_id` , `game_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`image` (
  `img_id` INT NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(100) NULL,
  `game_id` INT NOT NULL,
  PRIMARY KEY (`img_id`, `game_id`),
  INDEX `fk_image_games1_idx` (`game_id` ASC) ,
  CONSTRAINT `fk_image_games1`
    FOREIGN KEY (`game_id`)
    REFERENCES `laravel`.`games` (`game_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`favorite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`favorite` (
  `fav_id` INT NOT NULL AUTO_INCREMENT,
  `player_id` INT NOT NULL,
  `game_id` INT NOT NULL,
  PRIMARY KEY (`fav_id`, `player_id`, `game_id`),
  INDEX `fk_favorite_players1_idx` (`player_id` ASC) ,
  INDEX `fk_favorite_games1_idx` (`game_id` ASC) ,
  CONSTRAINT `fk_favorite_players1`
    FOREIGN KEY (`player_id`)
    REFERENCES `laravel`.`players` (`player_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_favorite_games1`
    FOREIGN KEY (`game_id`)
    REFERENCES `laravel`.`games` (`game_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
