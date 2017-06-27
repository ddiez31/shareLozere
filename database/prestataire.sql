-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 19 Mai 2016 à 11:34
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1-log
-- Version de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `ShareLozere`
--
CREATE DATABASE IF NOT EXISTS `ShareLozere` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ShareLozere`;

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

DROP TABLE IF EXISTS `prestataire`;
CREATE TABLE IF NOT EXISTS `prestataire` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `html` boolean,
  `css` boolean,
  `wordpress` boolean,
  `magento` boolean,
  `photo` boolean,
  `marketing` boolean,
  `referencement` boolean,
  `javascript` boolean,
  `php` boolean,
  `python` boolean,
  `formation` boolean,
  `conseil` boolean,
  `design` boolean,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `prestataire` (`name`, `tel`, `mail`, `html`, `css`, `wordpress`, `magento`, `photo`, `marketing`, `referencement`, `javascript`, `php`, `python`, `formation`, `conseil`, `design`)
VALUES  ('presta1', '0000000001', 'presta1@example.com', '1', '1', '0', '1', '0', '1', '0', '0', '1', '1', '0', '0', '1'),
        ('presta2', '0000000002', 'presta2@example.com', '1', '1', '0', '1', '1', '0', '0', '1', '1', '0', '0', '1', '0'),
        ('presta3', '0000000003', 'presta3@example.com', '1', '1', '0', '1', '0', '1', '1', '1', '0', '0', '1', '0', '1');