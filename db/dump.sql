-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: 62.149.150.154
-- Generato il: Feb 11, 2013 alle 13:24
-- Versione del server: 5.5.28
-- Versione PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Sql544576_2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `attributes_names`
--

CREATE TABLE IF NOT EXISTS `attributes_names` (
  `_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dump dei dati per la tabella `attributes_names`
--

INSERT INTO `attributes_names` (`_id`, `name`) VALUES
(1, 'Boolean'),
(2, 'Vowel'),
(15, 'Number');

-- --------------------------------------------------------

--
-- Struttura della tabella `attributes_values`
--

CREATE TABLE IF NOT EXISTS `attributes_values` (
  `_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `name_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `name_id` (`name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dump dei dati per la tabella `attributes_values`
--

INSERT INTO `attributes_values` (`_id`, `value`, `name_id`) VALUES
(1, 'true', 1),
(2, 'false', 1),
(3, 'A', 2),
(4, 'E', 2),
(5, 'I', 2),
(6, 'O', 2),
(7, 'U', 2),
(8, 'uno', 15),
(9, 'due', 15),
(10, 'tre', 15);

-- --------------------------------------------------------

--
-- Struttura della tabella `discs`
--

CREATE TABLE IF NOT EXISTS `discs` (
  `id` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `track` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL,
  `year` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dump dei dati per la tabella `discs`
--

INSERT INTO `discs` (`id`, `title`, `author`, `track`, `album`, `year`) VALUES
(01, 'The Celestine Suite', 'for Flute and Orchestra', 'All Tracks', 'CD Amiata Records', '1999'),
(02, 'Sacrarmonia', 'Antonella Ruggiero & Arkè Quartet', 'Track n. 10 Lo frate sole', 'CD Libera/Sony Music', '2001'),
(03, 'Sacrarmonia', 'Antonella Ruggiero & Arkè Quartet', 'Track n. 09 Lo frate sole', 'CD & DVD Libera', '2004'),
(04, 'L''abitudine della luce', 'Antonella Ruggiero & Arkè String project', 'Track n. 03 Un lungo tratto di strada', 'CD Libera/Linea d''ombra', '2006'),
(05, 'Orpheus', 'The Magic Flute', 'Track n. 15 Il giardino sotto le stelle', 'CD Rara', '2007'),
(06, 'Paesaggio Umbro', 'per Violoncello, Pianoforte e Quartetto d''Archi', '', 'CD Ecomuseo/Umbria Music Center', '2008');

-- --------------------------------------------------------

--
-- Struttura della tabella `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title_it` varchar(150) NOT NULL,
  `title_en` varchar(150) NOT NULL,
  `description_it` varchar(250) NOT NULL,
  `description_en` varchar(250) NOT NULL,
  `place_it` varchar(150) NOT NULL,
  `place_en` varchar(150) NOT NULL,
  `eventDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dump dei dati per la tabella `events`
--

INSERT INTO `events` (`id`, `title_it`, `title_en`, `description_it`, `description_en`, `place_it`, `place_en`, `eventDate`) VALUES
(1, '- Antonio Rossi - <br><i>"Asincrone" Per Sequenze Elettroniche e Pianoforte<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>"Asincrone" for Electronic Sequence and Piano<br></i><small>(World Premiere)</small>', 'Antonio Rossi Sequenze Elettroniche e Pianoforte', 'Antonio Rossi Electronic Sequence and Piano', 'Perugia, Sala dei Notari', 'Sala dei Notari, Perugia (Italy)', '1990-03-21 21:15:00'),
(2, '- Antonio Rossi - <br><i>Composizioni varie per Organo eseguite dall''autore</i>', '- Antonio Rossi - <br><i>Organ Works performed by the author</i>', '"Concerto d''Organo"', '"Organ Concerto"', 'Monastero di Monserrat (Spagna)', 'Montserrat Monastery Church (Spain)', '1994-10-27 12:00:00'),
(3, '- Antonio Rossi - <br><i>Lo frate sole<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Lo frate sole<br></i><small>(World Premiere)</small>', 'Antonella Ruggiero Soprano,<br> Antonio Rossi Pianoforte,<br> Andrea Ceccomori Flauto,<br> Orchestra Sinfonica di Napoli', 'Antonella Ruggiero Soprano, Antonio Rossi Pianoforte,<br>  Andrea Ceccomori Flute,<br> Naples Symphonic Orchestra', 'Rai Uno, "Concerto dell''Epifania"<br>Chiesa del Monastero S. Chiara di Napoli', 'Rai Uno, "Epiphany Concert"<br>St. Chiara Monastery Church in Naples (Italy)', '2001-01-06 13:01:00'),
(4, '- Antonio Rossi - <br><i>Largo in Sol Minore per Flauto, Orchestra d''Archi e Basso Continuo<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Largo in G Minor for Flute, Strings Orchestra and Basso Continuo<br></i><small>(World Premiere)</small>', 'Fabio Di Lella Flauto,<br> Orchestra "I Virtuosi di Venezia"', 'Fabio Di Lella Flute,<br> "I Virtuosi di Venezia Orchestra" (World premiere)', 'Biennale Musica di Venezia,<br> Festival Domenico Cimarosa Chiesa della Pietà (Chiesa di Antonio Vivaldi)', 'Venice Biennale Musica  "Domenico Cimarosa Festival" Pity Church (Antonio Vivaldi Church) in Venice (Italy) ', '2001-05-11 21:00:00'),
(5, '- Antonio Rossi - <br><i>Lo frate sole (Sacrarmonia)</i>', '- Antonio Rossi - <br><i>Lo frate sole (Sacrarmonia)</i>', 'Antonella Ruggiero Soprano,<br> Arkè Quartet', 'Antonella Ruggiero Soprano,<br> Arkè Quartet', '"Concerto a S. Francesco" Assisi, Piazza della Basilica Superiore', '"Concert at St. Francis" - Assisi, (Italy) St. Francis Church Square', '2003-10-03 21:30:00'),
(6, '- Antonio Rossi - <br><i>Pollici Verdi, Opera Musicale per Voce, Immagini e Danza<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>"Pollici Verdi", Opera Music for Voice, Dance and Pictures<br></i><small>(World premiere)</small>', '(coprodotta con Antonella Ruggiero, Roberto Colombo e Carlo Cantini)<br>Antonella Ruggiero Soprano,<br> Orchestra Filarmonica Marchigiana, <br>Coreografo Gilles Baron, Direttore Erasmo Gaudiomonte,<br>\nRegia Adriana Zamboni e Lucio Diana', '(Co-produced with Antonella Ruggiero, Roberto Colombo and Carlo Cantini) Antonella Ruggiero Soprano,<br> Marchigiana Philharmonic Orchestra Choreographer Gilles Baron,<br> Erasmo Gaudiomonte Conductor,<br>\nAdriana Zamboni and Lucio Diana Directors ', 'Teatro Comunale G.B. Pergolesi di Jesi XXXVI Concerto Inaugurale Stagione Lirica', 'G.B. Pergolesi Theatre in Jesi (Italy) XXXVI Opera Season Opening Concert', '2003-11-07 21:15:00'),
(7, '- Antonio Rossi - <br><i>Pollici Verdi, Opera Musicale per Voce, Immagini e Danza</i>', '- Antonio Rossi - <br><i>"Pollici Verdi", Opera for Voice, Dance and Pictures</i>', '(coprodotta con Antonella Ruggiero,<br> Roberto Colombo e Carlo Cantini)<br> Antonella Ruggiero Soprano,<br> Orchestra Sinfonica Italiana, <br>Coreografo Gilles Baron,<br> Direttore Erasmo Gaudiomonte,<br>\nRegia Adriana Zamboni e Lucio Diana', ' (Co-produced with Antonella Ruggiero,<br> Roberto Colombo, Carlo Cantini) <br>Antonella Ruggiero Soprano,<br> Italian Symphonic Orchestra,<br> Choreographer Gilles Baron,<br> Conductor Erasmo Gaudiomonte, <bt>Directors Adriana Zamboni and Lucio Dian', 'Teatro Grande di Brescia', 'Great Theatre in Brescia (Italy)', '2003-12-14 21:15:00'),
(8, '- Antonio Rossi - <br><i>Te Deum per Soli, Coro Organo e Orchestra<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Te Deum for Soloists, Choir, Organ and Orchestra<br></i><small>(World Premiere)</small>', 'C.W. Chang Soprano,<br> Federico Giubilei Baritono,<br> Coro S. Bartolomeo di Torgiano,<br> Orchestra Il Giardino dell''Armonia,<br> Franco Radicchia Direttore ', 'C.W. Chang Soprano,<br> Baritone Federico Giubilei,<br> Franco Radicchia Conductor<br>', '"Concerto dell''Epifania"<br> Chiesa di S. Bartolomeo<br> Torgiano (Perugia)', '"Epiphany Concert"<br> St. Bartholomew Church<br> Torgiano (Italy)', '2004-01-06 17:30:00'),
(9, '<i>"Musica d''Autore"</i>', '<i>"Author Music"</i>', 'Antonella Ruggiero Voce,<br> Antonio Rossi Pianoforte', 'Antonella Ruggiero Voice,<br> Antonio Rossi Piano', 'Teatro Comunale G. Verdi,<br>Terni (PG)', 'Terni (Italy), G. Verdi Theatre', '2004-10-01 21:30:00'),
(10, '- Antonio Rossi - <br><i>Lo frate sole,<br>Fuga per Quartetto d''Archi*<br></i><small>*(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Lo frate sole,<br>Fuga for Strings Quartet*<br></i><small>*(World Premiere)</small>', 'Antonella Ruggiero Soprano, Arkè Quartet ', 'Antonella Ruggiero Soprano, Arkè Quartet', 'Festival Internazionale "Da Bach a Bartok" XVI Edizione Imola (Bologna)', '"From Bach to Bartok" International Music Festival XVI Edition Imola (Italy)', '2004-12-02 21:30:00'),
(11, '- Antonio Rossi - <br><i> Lo frate sole (Sacrarmonia)</i>', '- Antonio Rossi - <br><i> Lo frate sole (Sacrarmonia)</i>', 'Antonella Ruggiero Soprano,<br> Arkè Quartet', 'Antonella Ruggiero Soprano,<br> Arkè Quartet', '"Sagra Musicale Umbra",<br> Perugia, Teatro Comunale F. Morlacchi ', '"Sagra Musicale Umbra",<br> Perugia (Italy),<br> F. Morlacchi Theatre', '2005-09-17 21:30:00'),
(12, '- Antonio Rossi - <br><i>"Safe Passage" Poema Sinfonico</i>', '- Antonio Rossi - <br><i>"Safe Passage" Symphonic Poem</i>', 'Callahan Center Rochester (New York)', 'Callahan Center  Rochester (New York - U.S.A.)', '(Prima esecuzione assoluta)', '(World premiere)', '2006-09-17 16:00:00'),
(13, '- Antonio Rossi - <br><i>Te Deum per Soli, Coro Organo e Orchestra</i>', '- Antonio Rossi - <br><i>Te Deum for Soloists, Choir, Organ and Orchestra</i>', 'C.W. Chang Soprano,<br> Federico Giubilei Baritono, <br>Coro "Collegium Vocale Tifernum", <br>Orchestra Il Giardino dell''Armonia,<br> Antonio Rossi e Stefano Mastriforti Direttori', 'C.W. Chang Soprano, Federico Giubilei Baritone "Collegium Vocale Tifernum Choir",<br> Il Giardino dell''Armonia Orchestra,<br> Antonio Rossi & Stefano Mastriforti Conductors', '"9° Concerto dell''Epifania"<br> Chiesa di S. Francesco<br> Città di Castello (Perugia)', '"9° Epiphany Concert<br>" St. Francis Church<br> Città di Castello (Italy) ', '2006-01-06 16:00:00'),
(14, '- Antonio Rossi - <br><i>Due Arie per Violoncello e Pianoforte</i>', '- Antonio Rossi - <br><i>Two Airs for Cello and Piano</i>', 'Marco Becchetti Violoncello,<br> Antonio Rossi Pianoforte', 'Marco Becchetti Cello,<br> Antonio Rossi Piano', '"Festa della Musica"<br> Roma, Aula Adrianea degli Horti Sallustiani', '"Rome Music Festival"<br> "Aula Adrianea degli Horti Sallustiani"<br>\nRome (Italy)', '2007-06-21 16:00:00'),
(15, '- Antonio Rossi - <br><i>"Paesaggio Umbro" per Violoncello, Quartetto d''Archi, Voci e Pianoforte</i>', '- Antonio Rossi - <br><i>"Paesaggio Umbro" for Cello, Strings Quartet, Voices and Piano</i>', 'Presentazione ufficiale del CD<br> "Paesaggio Umbro" <br>Marco Becchetti Violoncello,<br> Antonio Rossi Pianoforte,<br> Quartetto d''Archi Linea d''Aria,<br> Gruppo Vocale Libercantus', 'Official presentation of the CD <br>"Paesaggio Umbro"<br> Marco Becchetti Cello, <br>Antonio Rossi Piano,<br> Linea d''Aria Strings Quartet, <br> Libercantus Vocal Group', '"Festival Internazionale per la Pace"<br> Assisi Sala Norsa/Sacro Convento di S. Francesco', '"International Festival for Peace"<br> Assisi (Italy) Hall Norsa / Sacred Convent of St. Francis', '2008-09-19 21:00:00'),
(16, '- Antonio Rossi - <br><i>Preludio e Fuga per Quartetto di Saxofoni<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Prelude and Fugue for Saxophones Quartet<br></i><small>(World premiere)</small>', '"Perugia Saxophone"', '"Perugia Quartet" ', 'Auditorium Conservatorio F. Morlacchi di Perugia', 'F. Morlacchi Music Conservatory Auditorium in Perugia (Italy)', '2009-04-03 17:30:00'),
(17, '- Antonio Rossi - <br><i>Elegia per Saxofono Contralto e Pianoforte<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Elegia for Alto Saxophone and Piano<br></i><small>(World Premiere)</small>', 'Eugene Rousseau Saxofono Contralto,<br> Cameron Hofmann Pianoforte', 'Eugene Rousseau Alto Saxophone,<br> Cameron Hofmann Piano', 'Auditorium Conservatorio F. Morlacchi di Perugia', 'F. Morlacchi Music Conservatory Auditorium in Perugia (Italy)', '2009-05-18 21:00:00'),
(18, '- Antonio Rossi - <br><i>"Paesaggio Umbro"<br> Versione Poema Sinfonico con Voce Recitante</i>', '- Antonio Rossi - <br><i>"Paesaggio Umbro"<br> Symphonic Poem Version with Reciting Voicer</i>', 'Marco Becchetti Violoncello,<br> Orhestra da Camera del Trasimeno,<br> Sara Paragiani Soprano,<br> Coro del Duomo di Orvieto,<br> Giuseppe Brizi Voce recitante,<br> Antonio Rossi Pianoforte e Direttore', 'Marco Becchetti Cello,<br> Trasimeno Chamber Orchestra,<br> Sara Paragiani Soprano,<br> Orvieto Cathedral''s Choir,<br> Reciting Voice,<br>  Giuseppe Brizi,<br> Antonio Rossi Piano and Conductor (World premiere)', 'Concerto Inaugurale Stagione Concertistica 2010,<br> Teatro S. Cristina Porano (Terni)', 'Opening Concert Season 2010, S. Cristina Theatre in Porano (Italy)', '2010-03-06 21:15:00'),
(19, '- Antonio Rossi - <br><i>Altissima luce per Coro femminile e Orchestra d''Archi<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Altissima luce for Women''s Choir and Strings Orchestra</i><br><small>(World Premiere)</small>', 'Gruppo Vocale Armonioso Incanto,<br> Frauen - Kammerorchester von Osterreich,<br> Franco Radicchia Direttore', 'Vocal Group Charm Harmonious,<br> Frauen - Kammerorchester von Osterreich,<br> Franco Radicchia Conductor', 'Congress Center Villach (Austria) - Josef Resch Saal ', 'Villach Congress Center (Austria) - Josef Resch Saal  ', '2010-05-10 19:30:00'),
(20, '- Antonio Rossi - <br><i>Preludio e Fuga per Quartetto di Saxofoni</i>', '- Antonio Rossi - <br><i>Prelude and Fugue for Saxophones Quartet</i>', '"Perugia Saxophone" ', '"Perugia Saxophone"', 'Conservatorio G. Cantelli di Novara', 'G. Cantelli Music Conservatory Auditorium in Novara (Italy)', '2010-05-15 17:00:00'),
(21, '- Antonio Rossi - <br><i>Requiem Strumentale per Saxofono Soprano e Pianoforte<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Requiem strumentale for Soprano Saxophone and Piano<br></i><small>(World Premiere)</small>', 'Michele Bianchini Saxofono Soprano, Simone Rocchi Pianoforte', 'Michele Bianchini Soprano Saxophone, Simone Rocchi Piano', 'Auditorium Conservatorio F. Morlacchi di Perugia', 'F. Morlacchi Music Conservatory Auditorium in Perugia (Italy)', '2010-06-18 17:00:00'),
(22, '- Antonio Rossi - <br><i>Requiem Strumentale per Saxofono Soprano e Pianoforte</i>', '- Antonio Rossi - <br><i>Requiem strumentale for Soprano Saxophone and Piano</i>', 'Michele Bianchini Saxofono Soprano,<br> Simone Rocchi Pianoforte', 'Michele Bianchini Soprano Saxophone,<br> Simone Rocchi Piano', 'Corsi Internazionali di Interpretazione Musicale, Auditorium S. Francesco, Norcia (PG)', 'International Master Class of Music Interpretation, Auditorium S. Francis, Norcia (Italy)', '2010-07-31 21:15:00'),
(23, '- Antonio Rossi - <br><i>Lo frate sole</i>', '- Antonio Rossi - <br><i>Lo frate sole</i>', 'Antonella Ruggiero Soprano, Orchestra Sinfonica Italiana', 'Antonella Ruggiero Soprano, Italian Symphonic Orchestra', '"Concerto di Natale" dalla Chiesa della Natività di Betlemme - Rai Uno/Rai International', '"Christmas Concert"  Nativity Church in Bethlehem - Rai Uno/Rai International', '2010-12-25 11:00:00'),
(24, '- Antonio Rossi - <br><i>Fantasia Concerto per Pianoforte e Banda Sinfonica<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Fantasia Concerto for Piano and Symphonic Band</i><br><small>(World Premiere)</small>', 'Pianoforte Simone Rocchi,<br> Banda Sinfonica V. Puletti di Ponte Felcino,<br> Direttore Franco Radicchia', 'Piano Simone Rocchi,<br> Ponte Felcino Symphonic Band<br> Conductor Franco Radicchia', 'Concerto celebrativo dei cento anni della "Società Filarmonica Virgilio Puletti di Ponte Felcino",<br> Sala Guelpa Ponte Felcino (Perugia)', 'Concert celebrating the centenary of the "Virgilio Puletti Philharmonic Society" Ponte Felcino (Italy)"<br> Hall Guelpa in Ponte Felcino', '2011-06-09 21:15:00'),
(25, '- Antonio Rossi - <br><i>Suite Eugubina,<br> per Violoncello e Banda Sinfonica</i>', '- Antonio Rossi - <br><i>Suite Eugubina<br> for Cello and Symphonic Band</i>', 'Marco Becchetti Violoncello,<br> Banda Sinfonica Virgilio Puletti<br> di Ponte Felcino,<br> Franco Radicchia Direttore', 'Marco Becchetti Cello,<br> Ponte Felcino Symphonic Band, <br>Franco Radicchia Director', '"Concerto di Capodanno"<br> Perugia, Sala dei Notari', '"New Year''s Concert"<br> Sala dei Notari, Perugia (Italy)', '2012-01-01 16:30:00'),
(26, '- Antonio Rossi - <br><i>Dissolvenze Atonali </i><br><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>"Dissolvenze Atonali"<br></i><small>(World Premiere)</small>', 'Per Quartetto di Saxofoni,<br> Pianoforte e Sequenza Elettronica ', 'For  Saxophones Quartet,<br> Piano and Electronic Sequence\n', 'Conservatorio F. Morlacchi di Perugia,<br> Pomeriggi Musicali', 'F. Morlacchi Music Conservatory in Perugia (Italy)', '2012-06-15 17:00:00'),
(27, '- Antonio Rossi - <br><i>Contrappunto VII  versione per Pianoforte a sei mani<br></i><small>(Prima esecuzione assoluta)</small>', '- Antonio Rossi - <br><i>Contrappunto VII for Six hands Piano <br></i><small>(World Premiere)</small>', 'Trio Pianistico "la Triade"', 'Trio Pianistico "la Triade"', '"L''Estro Italiano"<br>Concerto per tre Pianiste ed un Pianoforte,<br> Istituto Fitoterapico Italiano Pisa', 'L''Estro Italiano"<br>Concert for three Pianists and one Piano,<br> Istituto Fitoterapico Italiano, Pisa (Italy)', '2012-07-07 21:15:00'),
(28, '- Antonio Rossi - <br><i>Contrappunto VII  versione per Pianoforte a sei mani</i>', '- Antonio Rossi - <br><i>Contrappunto VII  for Six hands Piano</i>', 'Trio Pianistico "la Triade"  ', 'Trio Pianistico "la Triade"', 'Narnia Festival 2012  "L''Estro Italiano"<br> Concerto per tre Pianiste ed un Pianoforte,<br> Chiesa di Santa Maria Impensole, Narni', 'Narnia Festival 2012  "L''Estro Italiano"<br> Concert for three Pianists and one Piano,<br>  Narni (Italy)', '2012-07-11 18:00:00'),
(29, '- Antonio Rossi - <br><i>Preludio e Fuga per Quartetto di Saxofoni</i>', '- Antonio Rossi - <br><i>Prelude and Fugue for Saxophones Quartet</i>', '"Perugia Saxophone" ', '"Perugia Saxophone"', '"55° Festival dei Due Mondi"<br> Spoleto, Largo Ferrer', '"55° Festival dei Due Mondi in Spoleto"<br> (Italy), Largo Ferrer', '2012-07-14 18:00:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `caption_it` varchar(255) NOT NULL,
  `caption_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `sessionId` varchar(40) NOT NULL DEFAULT '0',
  `ipAddress` varchar(16) NOT NULL DEFAULT '0',
  `userAgent` varchar(120) NOT NULL,
  `entryDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastActivity` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `group` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `settings`
--

INSERT INTO `settings` (`_id`, `name`, `value`, `group`) VALUES
(1, 'name', 'Site Name', 'site'),
(2, 'bool_var', '0', 'examples'),
(3, 'int_var', '12', 'examples'),
(4, 'esempio', 'valore', NULL),
(5, 'esempio2', 'valore2', NULL),
(6, 'author', 'Playpc.it', 'site'),
(8, 'last_connected_users', '10', 'backoffice');

-- --------------------------------------------------------

--
-- Struttura della tabella `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `h1` varchar(255) DEFAULT NULL,
  `h2` varchar(255) DEFAULT NULL,
  `metaDescription` varchar(255) DEFAULT NULL,
  `metaKeywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dump dei dati per la tabella `templates`
--

INSERT INTO `templates` (`_id`, `name`, `title`, `h1`, `h2`, `metaDescription`, `metaKeywords`) VALUES
(1, 'default', '', 'This is the default title h1.', 'This is the default subtitle h2.', 'This is the default meta description.', 'fushi, default, keywords, nice'),
(3, 'backoffice', '', 'Gestionale', '', '', ''),
(5, 'chi-siamo', 'Chi Siamo', 'Chi Siamo', 'Ecco chi siamo.', 'Scopri ora chi siamo.', 'chi, siamo'),
(6, 'dove-siamo', 'Dove Siamo', 'Dove Siamo', 'Ecco dove siamo.', 'dove siamo.', 'dove, siamo'),
(7, 'servizi', 'Servizi', 'Servizi', 'Ecco i nostri servizi.', 'Descrizione', 'i, nostri, servizi');

-- --------------------------------------------------------

--
-- Struttura della tabella `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `id` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dump dei dati per la tabella `tracks`
--

INSERT INTO `tracks` (`id`, `title`) VALUES
(02, 'Orchestra'),
(03, 'Pianoforte Berceuse'),
(04, 'Pianoforte Valzer'),
(05, 'Divertimento'),
(06, 'Oboe e Archi'),
(07, 'Orchestra'),
(08, 'Adagio Pianoforte e Orchestra'),
(09, 'Adagio 2 Pianoforte e Orchestra'),
(10, 'Orchestra'),
(11, 'Orchestra'),
(12, 'Pianoforte e Orchestra'),
(13, 'Orchestra'),
(14, 'Pianoforte e Archi'),
(15, 'Orchestra'),
(16, 'Pianoforte Attimo antico'),
(17, 'Orchestra'),
(18, 'Coro e Orchestra'),
(19, 'Pianoforte Contrappunto V'),
(20, 'Soprano Coro e Orchestra'),
(21, 'Passacaglia Orchestra'),
(22, 'Pianoforte Improvviso'),
(23, 'Pianoforte e Orchestra d''Archi'),
(24, 'Oboe e Orchestra d''Archi'),
(25, 'Orchestra'),
(26, 'The Prophet'),
(27, 'Preludio con vicinanza Bachiana'),
(28, 'Asincrone 1 sample 2,12 (Tot. time 15,32)'),
(29, 'Asincrone 2 sample 2,08 (Tot. time 20,22)'),
(30, 'Asincrone 3 Armonici Astrali sample 2,14 (Tot. time 15,34)'),
(31, 'Asincrone 4 su B.A.C.H. sample 3,45 (Tot. time 19,22)');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `birthDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `registrationDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` varchar(100) DEFAULT NULL,
  `cap` varchar(5) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`_id`, `login`, `name`, `surname`, `email`, `password`, `isAdmin`, `birthDate`, `registrationDate`, `address`, `cap`, `city`, `isDeleted`) VALUES
(0, 'guest', 'visitatore', '', 'guest@dontdeleteme.com', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(1, 'admin', 'Simone', '', 'admin@mail.com', NULL, 1, '0000-00-00 00:07:00', '2012-01-01 00:00:00', '', '', '', 0),
(2, 'user', 'pinco', 'pallino', 'pincopallino@email.it', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(3, NULL, 'asdasdlol', 'asdasd', 'asdasdlol@asd.it', NULL, 0, '0000-00-00 00:00:00', '2012-06-14 22:24:24', 'asdasdd asdjals dkjsdlfkja dlfjads fljads flj', '29342', 'sdfklsdfjklsdf', 1),
(4, NULL, 'asd', 'asd', 'asd@asd.it', NULL, 0, '0000-00-00 00:00:00', '2012-06-19 10:54:39', 'asdasd', 'asdas', 'asdasddas', 1);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `attributes_values`
--
ALTER TABLE `attributes_values`
  ADD CONSTRAINT `attributes_values_ibfk_1` FOREIGN KEY (`name_id`) REFERENCES `attributes_names` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
