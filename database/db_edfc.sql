-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 05:32 AM
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
-- Table structure for table 'tbl_bod'
--

CREATE TABLE IF NOT EXISTS tbl_bod (
  bod_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  bod_img varchar(50) NOT NULL,
  bod_name varchar(100) NOT NULL,
  bod_title varchar(100) NOT NULL,
  PRIMARY KEY (bod_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_bod'
--

INSERT INTO tbl_bod (bod_id, bod_img, bod_name, bod_title) VALUES
(1, 'Robbie Campbell.jpg', 'Robbie Campbell', 'Founder, President, Medical Doctor'),
(2, 'Anne Marie.jpg', 'Anne Marie Coolen', 'Director'),
(3, 'Stephen Hodd.jpg', 'Stephan Hodd', 'Director'),
(4, 'Sue Huff.jpg', 'Sue Huff', 'Director'),
(5, 'David Pillon.jpg', 'David Pillon', 'Director'),
(6, 'Sharon Robert.jpg', 'Sharon Roberts', 'Director'),
(7, 'Bill Robert.jpg', 'Bill Rogers', 'Director'),
(8, 'Susan Ruth.jpg', 'Susan Ruth', 'Director'),
(9, 'Paul Thomey.jpg', 'Paul Thomey', 'Director');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_events'
--

CREATE TABLE IF NOT EXISTS tbl_events (
  events_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  events_img varchar(50) NOT NULL,
  events_title varchar(100) NOT NULL,
  events_info text NOT NULL,
  events_date varchar(100) NOT NULL,
  PRIMARY KEY (events_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_events'
--

INSERT INTO tbl_events (events_id, events_img, events_title, events_info, events_date) VALUES
(1, 'image6.jpg', '2016 is Eating Disorder Awareness Week 2016!', 'Join Eating Disorders Foundation of Canada and organizations across Canada as we participate in Eating Disorders Awareness Week.', 'February 1-7'),
(2, 'image6.jpg', 'This summer is Eating Disorder Awareness Week 2016!', 'The Eating Disorders Foundation of Canada is proud to announce that they were in attendance at this exceptional event and plan to make a contribution to this most worthwhile cause. Accolades go to Meryl Bear for a very inspiring presentation.Every day, we are surrounded by different messages from different sources that impact the way we feel about the way we look. For some, poor body image is a sign of a serious problem: an eating disorder. Eating disorders are not just about food. They are often a way to cope with difficult problems or regain a sense of control. They are complicated illnesses that affect a person’s sense of identity, worth, and self-esteem.', 'July 10-17');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_news_updates'
--

CREATE TABLE IF NOT EXISTS tbl_news_updates (
  news_updates_id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  news_updates_title varchar(300) NOT NULL,
  news_updates_url varchar(300) NOT NULL,
  news_updates_link varchar(300) NOT NULL,
  PRIMARY KEY (news_updates_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_news_updates'
--

INSERT INTO tbl_news_updates (news_updates_id, news_updates_title, news_updates_url, news_updates_link) VALUES
(1, 'News article from the Waterloo Region Record (April 25, 2015)', 'https://www.facebook.com/', 'Daily missives from her mother helped keep Rachel Loewen afloat as she struggled with an eating disorder'),
(2, 'News article from the London Free Press (April 3, 2015)', 'https://www.facebook.com/', 'France passes law to ban super skinny models in anorexia crackdown'),
(4, 'Episode from CTV''s W5 (March 7, 2015)', 'https://www.facebook.com/', 'Deep brain stimulation offers treatment, hope for severe anorexia patients (6 videos)');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_oslink'
--

CREATE TABLE IF NOT EXISTS tbl_oslink (
  oslink_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  oslink_title varchar(200) NOT NULL,
  oslink_url varchar(100) NOT NULL,
  PRIMARY KEY (oslink_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_oslink'
--

INSERT INTO tbl_oslink (oslink_id, oslink_title, oslink_url) VALUES
(1, 'Connex Ontario', 'http://www.connexontario.ca/'),
(2, 'Danielle''s Place', 'http://www.daniellesplace.org/'),
(3, 'Eating Disorders Nova Scotia', 'http://eatingdisordersns.ca/'),
(4, 'Eating Disorders Support Network of Alberta (E.D.S.N.A.)', 'http://www.eatingdisordersupportnetworkofalberta.com/'),
(5, 'Families Empowered & Supporting Treatment of Eating Disorders (F.E.A.S.T)', 'http://www.feast-ed.org/"'),
(6, 'Hope''s Garden', 'http://www.hopesgarden.org/'),
(7, 'Hopewell', 'http://www.hopewell.ca/'),
(8, 'Project True', 'http://projecttrue.com/new/'),
(9, 'National Eating Disorder Information Centre (N.E.D.I.C.)', 'http://nedic.ca/'),
(10, 'National Initiative for Eating Disorders (NIED)', 'http://nied.ca/'),
(11, 'Sheena'' s Place', 'http://sheenasplace.org/');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_stories'
--

CREATE TABLE IF NOT EXISTS tbl_stories (
  stories_id mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  stories_image varchar(100) NOT NULL DEFAULT 'cherry-pie.jpg',
  stories_title varchar(100) NOT NULL,
  stories_name varchar(50) NOT NULL,
  stories_story text NOT NULL,
  stories_post varchar(5) NOT NULL,
  PRIMARY KEY (stories_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_stories'
--

INSERT INTO tbl_stories (stories_id, stories_image, stories_title, stories_name, stories_story, stories_post) VALUES
(1, 'camera_guy.jpg', 'How I survived', 'Meaghan', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn''t exactly understand how to help me get better. They were lost and scared for me...', '1'),
(2, 'girl_sun.jpg', 'Just Talk About It', 'Bryce', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn''t exactly understand how to help me get better. They were lost and scared for me...', '1'),
(3, 'girl_car.jpg', 'Every Day Gets Better', 'John', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn''t exactly understand how to help me get better. They were lost and scared for me...', '1'),
(8, 'RACHEL-WALLACE-STILL-FRAME.jpg', 'Focus', 'Rachel', 'High school is a stressful time for just about every teenage girl, so I easily explained away my weight loss as a symptom of stress. When I went away to college, no one was around to hold me accountable, and it became even easier for me not to eat. I learned how many calories were in everything I ate, and I limited my intake as much as possible. I lost weight quickly, and I was okay with not eating; after all, the comments and complaints from the people who assisted me had stopped.  It took me a while to realize that the comments had stopped not because of my weight loss but because I had able-bodied, kind peers helping me with my needs, which was a world of difference from a school nurse who should have had more assistance and training before working with me.\nI lost more weight, continued restricting calories, and kept pretending to eat, until I finally grew sick of constantly worrying about calories and always sitting awkwardly next to my friends as they ate. I realized I had become anorexic, and I decided to speak with a peer counselor. Over the next few years of college, I slowly gained weight and I thought I had conquered the illness. After college, I began my career and moved to a brand new city where I had to hire new assistants. The pool of people to choose from was very small, and I had to hire any available aide while waiting to be matched with a better fit. One of the assistants I hired was an older woman had trouble with the physical requirements of the job. Soon after I hired her she began making comments about lifting me, complaining that I was too heavy. \nIt wasn''t long before I returned to the familiar routines of counting calories and not eating; this time, though, I had discovered diet pills. I had no idea what they were doing to my body; I just knew they were helping me to lose weight quickly. I wasn''t even eating enough calories to sustain basic bodily functions, including breathing, and I ended up in the hospital with organ failure. The physical pain was unbearable but the emotional pain of watching my mom in distress was even worse. I eventually became medically stable and once again began the long process of trying to conquer my anorexia; this time, though, I understood that it was something I would always battle, and that recovery is a lifelong journey. ', '1');

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
