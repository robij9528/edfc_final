-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 06:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'db_edfc'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_past_events'
--

CREATE TABLE IF NOT EXISTS tbl_past_events (
  past_events_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  past_events_img varchar(100) NOT NULL,
  past_events_title varchar(100) NOT NULL,
  past_events_info text NOT NULL,
  past_events_date varchar(100) NOT NULL,
  PRIMARY KEY (past_events_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_past_events'
--

INSERT INTO tbl_past_events (past_events_id, past_events_img, past_events_title, past_events_info, past_events_date) VALUES
(1, 'image6.jpg', 'Hope''s Garden Fundraiser ', 'Please join the Eating Disorders Foundation in collaboration with Hopes Garden to enjoy an evening of entertainment by the Stephanie McIlroy band at Norma Jeans.', 'Friday, November 20, 2015, 9pm'),
(2, 'image6.jpg', 'A Summer Night''s Dream - Benefit Concert for the Eating Disorders Foundation of Canada.', 'Join the Univox Choir, directed by Dallas Bergen, with speical guests Don Campbell and High School Sweetheart for a night of music of all genres. The concert will take place at Aeolian Hall ', 'Sunday, June 24th at 7pm');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_stories'
--

CREATE TABLE IF NOT EXISTS tbl_stories (
  stories_id mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  stories_image varchar(100) NOT NULL,
  stories_title varchar(100) NOT NULL,
  stories_name varchar(50) NOT NULL,
  stories_story text NOT NULL,
  PRIMARY KEY (stories_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_stories'
--

INSERT INTO tbl_stories (stories_id, stories_image, stories_title, stories_name, stories_story) VALUES
(1, 'bod.jpg', 'How I survived', 'Meaghan', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn’t exactly understand how to help me get better. They were lost and scared for me...'),
(2, 'bod.jpg', 'Just Talk About It', 'Bryce', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn’t exactly understand how to help me get better. They were lost and scared for me...'),
(3, 'bod.jpg', 'Every Day Gets Better', 'John', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn’t exactly understand how to help me get better. They were lost and scared for me...');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_up_events'
--

CREATE TABLE IF NOT EXISTS tbl_up_events (
  up_events_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  up_events_img varchar(50) NOT NULL,
  up_events_title varchar(100) NOT NULL,
  up_events_info text NOT NULL,
  up_events_date varchar(100) NOT NULL,
  PRIMARY KEY (up_events_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_up_events'
--

INSERT INTO tbl_up_events (up_events_id, up_events_img, up_events_title, up_events_info, up_events_date) VALUES
(1, 'image6.jpg', '2016 is Eating Disorder Awareness Week 2016!', 'Join Eating Disorders Foundation of Canada and organizations across Canada as we participate in Eating Disorders Awareness Week.', 'February 1-7'),
(2, 'image6.jpg', 'This summer is Eating Disorder Awareness Week 2016!', 'The Eating Disorders Foundation of Canada is proud to announce that they were in attendance at this exceptional event and plan to make a contribution to this most worthwhile cause. Accolades go to Meryl Bear for a very inspiring presentation.', 'July 10-17');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_user'
--

CREATE TABLE IF NOT EXISTS tbl_user (
  user_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  user_name varchar(50) NOT NULL,
  user_pass varchar(50) NOT NULL,
  user_ip varchar(100) NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_user'
--

INSERT INTO tbl_user (user_id, user_name, user_pass, user_ip) VALUES
(1, 'robij9528', 'jaker', '::1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
