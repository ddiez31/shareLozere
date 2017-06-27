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

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `photo` boolean,
  `ecommerce` boolean,
  `marketing` boolean,
  `referencement` boolean,
  `formation` boolean,
  `conseil` boolean,
  `design` boolean,
  `site` boolean,
  `mobile` boolean,
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `client` (`name`, `tel`, `mail`, `photo`, `ecommerce`, `marketing`, `referencement`, `formation`, `conseil`, `design`, `site`, `mobile`)
VALUES  ('client1', '0000000001', 'client1@example.com', '1', '0', '0', '1', '0', '1', '0', '0', '1'),
        ('client2', '0000000002', 'client2@example.com', '0', '0', '1', '0', '1', '0', '0', '1', '1'),
        ('client3', '0000000003', 'client3@example.com', '0', '1', '0', '1', '0', '1', '1', '1', '0');