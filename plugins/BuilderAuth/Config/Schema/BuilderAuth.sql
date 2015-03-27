-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2015 alle 08:54
-- Versione del server: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `builder_demo_app`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `bld_role`
--

CREATE TABLE `bld_role` (
`id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `bld_role`
--

INSERT INTO `bld_role` (`id`, `name`, `description`) VALUES
(1, 'administrator', 'system administrator');

-- --------------------------------------------------------

--
-- Struttura della tabella `bld_user`
--

CREATE TABLE `bld_user` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL COMMENT '	',
  `lastname` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `bld_user`
--

INSERT INTO `bld_user` (`id`, `name`, `lastname`, `username`, `password`, `role_id`) VALUES
(1, 'Antonio', 'Oliverio', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bld_role`
--
ALTER TABLE `bld_role`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bld_user`
--
ALTER TABLE `bld_user`
 ADD PRIMARY KEY (`id`,`role_id`), ADD KEY `fk_bld_user_bld_role_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bld_role`
--
ALTER TABLE `bld_role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bld_user`
--
ALTER TABLE `bld_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `bld_user`
--
ALTER TABLE `bld_user`
ADD CONSTRAINT `fk_bld_user_bld_role` FOREIGN KEY (`role_id`) REFERENCES `bld_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;