-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2016 at 10:12 PM
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
(6, 'paul_thomey.jpg', 'Paul Thomey', 'Director'),
(7, 'susan_ruth.jpg', 'Susan Ruth', 'Director'),
(8, 'bill_rogers.jpg', 'Bill Rogers', 'Director'),
(9, 'sharon_roberts.jpg', 'Sharon Roberts', 'Director'),
(10, 'david_pillon.jpg', 'David Pillon', 'Director'),
(11, 'sue_huff.jpg', 'Sue Huff', 'Director'),
(12, 'stephan_hodd.jpg', 'Stephan Hodd', 'Director'),
(13, 'anne_marie.jpg', 'Anne Marie Coolen', 'Director');

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
(2, 'image6.jpg', 'This summer is Eating Disorder Awareness Week 2016!', 'The Eating Disorders Foundation of Canada is proud to announce that they were in attendance at this exceptional event and plan to make a contribution to this most worthwhile cause. Accolades go to Meryl Bear for a very inspiring presentation.\n\nEvery day, we are surrounded by different messages from different sources that impact the way we feel about the way we look. For some, poor body image is a sign of a serious problem: an eating disorder. Eating disorders are not just about food. They are often a way to cope with difficult problems or regain a sense of control. They are complicated illnesses that affect a person''s sense of identity, worth, and self-esteem.', 'July 10-17');

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
(1, 'bod.jpg', 'How I survived', 'Meaghan', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn''t exactly understand how to help me get better. They were lost and scared for me...', '1'),
(2, 'bod.jpg', 'Just Talk About It', 'Bryce', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn''t exactly understand how to help me get better. They were lost and scared for me...', '1'),
(3, 'bod.jpg', 'Every Day Gets Better', 'John', 'I was diagnosed with anorexia when I was in 8th grade. I was diagnosed a year after the disease began to take over my body, and continued to battle it. Throughout my road to recovery, my parents didn''t exactly understand how to help me get better. They were lost and scared for me...', '1'),
(7, 'PMgfJSm.jpg', 'Hope', 'Jake', 'My Be*YOU*tiful Me Story My name is Jeanette Suros and I am four years in full recovery from Anorexia. My thoughts started at 5 in gymnastics as I would compare myself to everyone. By age 10 I was already in an eating disorder but no one knew, not even myself. My gymnastics and cheerleading became no longer an enjoyment but a way to let ED come out more and more. In High school I was entirely consumed in my eating disorder.\n\nI isolated and avoided anything that had to do with food. I/ED was lying all the time. I was passing out left and right at school. In the emergency room they diagnosed me with Anorexia Nervosa. I was in complete denial. I was taken out of cheerleading and gymnastics but that didnâ€™t stop me. My eating disorder would tell me the things I can and cannot do. I was living a life that was a nightmare. But at this time I thought if I listened to everything ED told me, I would be happier and feel better about myself. But it was never enough.\n\nNo matter what the weight was it was never enough. My vitals and weight were very low and I was slowly dying. By age 17 I had a heart attack. I was in the ICU and then transferred to Somerset Medical Center Eating Disorder Unit. I was in there for a few months but I still was consumed in ED and wasnâ€™t ready to let go, I was so confused when I went in there. I was able to go to my senior prom and graduate. But I was not there my Eating Disorder was. I was in and out of treatment from 17-22 and had to withdraw multiple times from college. My eating disorder convinced me that things will be better if I lose X amount of pounds. It was like my friend who I could always count on to be there to numb me from all my troubles. But in reality it wanted to kill me.\n\nThat''s what eating disorders want to do. They want to kill you. How could someone be that terrible right? It was till my last time inpatient and in Partial at Somerset Hospital that I was done in I realized I had relapsed and even though doctors were going to recommend inpatient for how my status was I went in that day to my doctors and said I know I need help and I want to end it all with my eating disorder for once. I was tired of living with ED. My eyes also opened up when the kids I babysat and how I mentor to girls who were transitioning into high school, that they all are looking up to me. What example am I showing these kids? I want them to love themselves and treat their bodiesâ€™ right and I am not even doing that to mine. I went into treatment that last time and I was there for two months and then went over to partial I ended in the summer when I was 22. I am now going to be 25 and I am 4 years in full recovery. Recovery is not easy but it is worth it. When you really want it, it will work. In Recovery you will have the passing thoughts and some days will be harder than others. But you will be able to overcome them. It is finally feeling free and that your ED is no longer controlling you anymore. You control it now. I thought that I was going to be with my eating disorder forever. I thought that''s who I am, but no you are not your disorder. \n\nYou may have an eating disorder but that is not you. You are much more than that. I learned that by me going to my eating disorder in hard times it actually made things worse. Not only now am I dealing with whatever hard time is going on I am also dealing with being sick with my eating disorder and making things ten times harder. The problems never go away they will always be there and if you donâ€™t go head first into them and deal with them they will only manifest. I am not perfect, I am far from it. I have come to realize that is okay. I have my flaws and imperfections and you know what thatâ€™s completely fine because Iâ€™m only human. I make mistakes everyday but I learn from them and move forward. I am now finishing school even though I still have a few years. I am now closer than I was to being a therapist and specializing in eating disorders. I plan on being a part of NEDA, I want to go around and speak and show others that I am living proof that recovery from an eating disorder is possible. I am starting an event for the first time with my best friend/sister Nicole for mental health. All these amazing things I would never be able to do with my eating disorder. I honestly believe that we all go through things for a reason. I asked myself why am I going through this. Why couldn''t I be "Normal" Well no one is normal let''s just start there however we are all human. But I believe through recovery I went through this because I was meant to make a difference.\n\nWe are human and we are all worthy of happiness and beauty in life. Love yourself and love your body for all it does for you. And always remember you are worth so much more than your struggles. You are never alone and never be afraid to ask for help. Life is so much better when ED is gone! You have the power to do anything your heart desires! Recovery is possible and I am living proof that it is and for those who are struggling you can be too!', '1'),
(8, '87b4fdd4e62108f1303e592643e38edb.jpg', 'Help', 'Jake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id urna in neque eleifend sollicitudin et eu felis. Cras elementum, erat consectetur dictum mollis, sapien velit commodo ligula, sit amet molestie est nisl sit amet felis. Nulla sit amet diam viverra, hendrerit arcu ut, semper tortor. Maecenas dictum, mauris vitae gravida vulputate, est elit lacinia dui, a consectetur elit eros eu ipsum. Aenean auctor nec libero ac posuere. Quisque varius quam vitae orci aliquet, vel dictum eros lacinia. Curabitur scelerisque, lectus quis dictum volutpat, nulla elit imperdiet velit, eu convallis lorem lacus eu mi.\r\n\r\nNullam nec ultricies arcu, a auctor nunc. Ut eros ipsum, interdum vitae tortor sit amet, aliquam faucibus massa. Mauris venenatis id ligula non varius. Cras ipsum massa, tincidunt vitae risus a, varius ultricies ipsum. Etiam fringilla est eu ante commodo, ac posuere eros efficitur. Nam volutpat sapien vitae rutrum fringilla. Quisque ut augue nibh. Maecenas luctus malesuada enim, vel egestas nibh sollicitudin nec.\r\n\r\nAenean pulvinar elementum elit, quis lobortis tortor lacinia eget. Nulla eget dapibus justo, tincidunt placerat lacus. Sed commodo fringilla lectus quis laoreet. In hac habitasse platea dictumst. Praesent ornare nibh ut libero volutpat, ac pulvinar ex iaculis. Nam eleifend nisl efficitur, varius purus id, hendrerit enim. Vestibulum pulvinar vitae risus sit amet consequat. Morbi ac feugiat ipsum. Morbi id porttitor orci. Quisque enim lectus, luctus nec est id, feugiat aliquam justo. Quisque at elit sit amet ipsum aliquet gravida. Aliquam sodales dolor pulvinar magna dignissim sollicitudin. Fusce elementum lacus ut mi fringilla, non tristique urna scelerisque. Etiam quis ultricies nibh.', '1'),
(21, '3mjH2UN.jpg', 'Test', 'Jake', 'test', '0'),
(22, '3mjH2UN.jpg', 'test', 'Jake', 'test', '0'),
(23, '3mjH2UN.jpg', 'test', 'Jake', 'test', '0'),
(24, '3mjH2UN.jpg', 'test3', 'Jake', 'test5', '0'),
(25, '3mjH2UN.jpg', 'test', 'Jake', 'testststststts', '0'),
(26, '3mjH2UN.jpg', 'test', 'Jake', 'testststststts', '0'),
(27, '3mjH2UN.jpg', 'test', 'Jake', 'testststststts', '0');

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
(1, 'robij9528', 'jaker', '::1'),
(2, 'John', 'johnn', '::1'),
(8, 'jak', 'jakkk', '1'),
(9, 'john', 'jamdkmk', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
