-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 03:18 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_edfc
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_bod
--

CREATE TABLE tbl_bod (
  bod_id smallint(4) unsigned NOT NULL,
  bod_img varchar(50) NOT NULL,
  bod_name varchar(100) NOT NULL,
  bod_title varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_bod
--

INSERT INTO tbl_bod (bod_id, bod_img, bod_name, bod_title) VALUES
(1, 'bod.jpg', 'Robbie Campbell', 'Founder, President, Mediacal Doctor'),
(2, 'bod.jpg', 'Robbie Campbell', 'Founder, President, Mediacal Doctor'),
(3, 'bod.jpg', 'Robbie Campbell', 'Founder, President, Mediacal Doctor'),
(4, 'bod.jpg', 'Robbie Campbell', 'Founder, President, Mediacal Doctor'),
(5, 'bod.jpg', 'Robbie Campbell', 'Founder, President, Mediacal Doctor');

-- --------------------------------------------------------

--
-- Table structure for table tbl_events
--

CREATE TABLE tbl_events (
  events_id smallint(4) unsigned NOT NULL,
  events_img varchar(50) NOT NULL,
  events_title varchar(100) NOT NULL,
  events_info text NOT NULL,
  events_date varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_events
--

INSERT INTO tbl_events (events_id, events_img, events_title, events_info, events_date) VALUES
(1, 'image6.jpg', '2016 is Eating Disorder Awareness Week 2016!', 'Join Eating Disorders Foundation of Canada and organizations across Canada as we participate in Eating Disorders Awareness Week.', 'February 1-7'),
(2, 'image6.jpg', 'This summer is Eating Disorder Awareness Week 2016!', 'The Eating Disorders Foundation of Canada is proud to announce that they were in attendance at this exceptional event and plan to make a contribution to this most worthwhile cause. Accolades go to Meryl Bear for a very inspiring presentation.', 'July 10-17');

-- --------------------------------------------------------

--
-- Table structure for table tbl_news_updates
--

CREATE TABLE tbl_news_updates (
  news_updates_id smallint(5) unsigned NOT NULL,
  news_updates_title varchar(300) NOT NULL,
  news_updates_url varchar(300) NOT NULL,
  news_updates_link varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_news_updates
--

INSERT INTO tbl_news_updates (news_updates_id, news_updates_title, news_updates_url, news_updates_link) VALUES
(1, 'News article from the Waterloo Region Record (April 25, 2015)', 'https://www.facebook.com/', 'Daily missives from her mother helped keep Rachel Loewen afloat as she struggled with an eating disorder'),
(2, 'News article from the London Free Press (April 3, 2015)', 'https://www.facebook.com/', 'France passes law to ban super skinny models in anorexia crackdown'),
(4, 'Episode from CTV''s W5 (March 7, 2015)', 'https://www.facebook.com/', 'Deep brain stimulation offers treatment, hope for severe anorexia patients (6 videos)');

-- --------------------------------------------------------

--
-- Table structure for table tbl_stories
--

CREATE TABLE tbl_stories (
  stories_id mediumint(5) unsigned NOT NULL,
  stories_image varchar(100) NOT NULL,
  stories_title varchar(100) NOT NULL,
  stories_name varchar(50) NOT NULL,
  stories_story text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_stories
--

INSERT INTO tbl_stories (stories_id, stories_image, stories_title, stories_name, stories_story) VALUES
(1, 'bod.jpg', 'How I survived', 'Meaghan', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn’t exactly understand how to help me get better. They were lost and scared for me...'),
(2, 'bod.jpg', 'Just Talk About It', 'Bryce', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn’t exactly understand how to help me get better. They were lost and scared for me...'),
(3, 'bod.jpg', 'Every Day Gets Better', 'John', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn’t exactly understand how to help me get better. They were lost and scared for me...');

-- --------------------------------------------------------

--
-- Table structure for table tbl_user
--

CREATE TABLE tbl_user (
  user_id smallint(4) unsigned NOT NULL,
  user_name varchar(50) NOT NULL,
  user_pass varchar(50) NOT NULL,
  user_ip varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_user
--

INSERT INTO tbl_user (user_id, user_name, user_pass, user_ip) VALUES
(1, 'robij9528', 'jaker', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_bod
--
ALTER TABLE tbl_bod
  ADD PRIMARY KEY (bod_id);

--
-- Indexes for table tbl_events
--
ALTER TABLE tbl_events
  ADD PRIMARY KEY (events_id);

--
-- Indexes for table tbl_news_updates
--
ALTER TABLE tbl_news_updates
  ADD PRIMARY KEY (news_updates_id);

--
-- Indexes for table tbl_stories
--
ALTER TABLE tbl_stories
  ADD PRIMARY KEY (stories_id);

--
-- Indexes for table tbl_user
--
ALTER TABLE tbl_user
  ADD PRIMARY KEY (user_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_bod
--
ALTER TABLE tbl_bod
  MODIFY bod_id smallint(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_events
--
ALTER TABLE tbl_events
  MODIFY events_id smallint(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_news_updates
--
ALTER TABLE tbl_news_updates
  MODIFY news_updates_id smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_stories
--
ALTER TABLE tbl_stories
  MODIFY stories_id mediumint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_user
--
ALTER TABLE tbl_user
  MODIFY user_id smallint(4) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
