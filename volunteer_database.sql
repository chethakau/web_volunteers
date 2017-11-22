-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2013 at 08:42 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imcdsorg_imcdvol`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `doid` int(10) NOT NULL auto_increment,
  `dname` varchar(50) NOT NULL,
  `nbook` int(50) NOT NULL,
  `dtown` varchar(50) NOT NULL,
  `dtele` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `dinfo` varchar(300) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL default 'pend',
  `whoid` varchar(10) NOT NULL,
  `adate` varchar(50) NOT NULL,
  `cdate` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `willid` varchar(50) NOT NULL,
  PRIMARY KEY  (`doid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`doid`, `dname`, `nbook`, `dtown`, `dtele`, `demail`, `dinfo`, `uid`, `status`, `whoid`, `adate`, `cdate`, `sid`, `willid`) VALUES
(22, 'Needy Readers.', 4500, 'Dehiwala.', '071 6663282/ 0772 517512', 'needyreaders@imcds.org', 'Initial book count of needy readers.', '49', 'aprov', '49', 'February 15, 2013', 'February 15, 2013', '49', ''),
(26, 'Mrs. Manori Senarath Arachchi.', 112, 'Watareka.', '0713463272.', '.', 'She donated all the books used by her children when they were small. All of those books are already donated to Dehiowita Primary school', '64', 'aprov', '64', 'February 18, 2013', 'February 18, 2013', '', ''),
(27, 'Miss. Unknown.', 0, 'Hambanthota.', '0475673109.', '.', 'Called me reffering to News paper artile published on Maubima.', '63', 'pend', '', 'February 18, 2013', '', '', ''),
(28, 'Mrs. Unknown.', 50, 'Godakawela.', '0721821067.', '-.', 'She is willing to donate kids books, and other books.', '63', 'pend', '', 'February 18, 2013', '', '', ''),
(29, 'Mrs. Wanasinghe.', 0, 'Battaramulla.', '0772757308.', '-.', 'Called reffering to News paper article.', '63', 'pend', '', 'February 18, 2013', '', '', ''),
(30, 'Mrs. Unknown.', 100, 'Weyangoda.', '0718369042.', '-.', 'You can collect on any Saturday or Sunday but should inform earlier.', '63', 'pend', '', 'February 18, 2013', '', '', ''),
(31, 'Mr. Fernando.', 75, 'Galle and Piliyandala.', '0723354760.', '-.', 'Got lot of IT and Engineering books.', '63', 'pend', '', 'February 18, 2013', '', '', ''),
(32, 'Mr. Unknow.', 50, 'Wellawatte.', '0777523384.', '.', 'Willing to donate Magazines and Tamil books.', '63', 'aprov', '63', 'February 18, 2013', 'March 04, 2013', '', ''),
(33, 'Uthpala Maduwanthi.', 200, 'Gampaha.', '0718860319.', '.', 'University of Mratuwa.', '68', 'pend', '', 'February 18, 2013', '', '', ''),
(34, 'Ayesha .', 150, 'Borella.', '0773650022.', '.', 'Books store at her office.\r\n56/1\r\nKinsi Road \r\nColombo 7.', '68', 'aprov', '57', 'February 18, 2013', 'February 26, 2013', '', ''),
(35, 'Udayanga.', 0, 'Pannipityya.', '0716430321.', '.', '.', '68', 'pend', '', 'February 18, 2013', '', '', ''),
(36, 'Nuwan .', 0, 'Borella.', '0773259975.', '.', '.', '68', 'pend', '', 'February 18, 2013', '', '', ''),
(37, 'Miss.Melissa Christine .', 9, 'Wijerama.', '0725962040.', 'patrickbaldsing@gmail.com', '.', '68', 'aprov', '74', 'February 18, 2013', 'March 02, 2013', '74', '74'),
(38, 'Senel Wanniarachchi.', 30, 'Pagoda Rd Pita-kotte.', '0718573272.', ' senel.wanniarachchi@gmail.com', '.', '69', 'aprov', '63', 'February 18, 2013', 'March 04, 2013', '', ''),
(39, 'Sahani Rathnayeka.', 50, 'Rajagiriya.', '077-3676499.', 'sahani.rats@gmail.com', '.', '56', 'pend', '', 'February 20, 2013', '', '', ''),
(40, 'Ayesha Ratnayake.', 100, 'Borella.', '077-3650022.', '.', 'Urgent.', '56', 'aprov', '57', 'February 20, 2013', 'February 26, 2013', '', ''),
(41, 'Athmajan Vu.', 0, 'Peradeniya Univercity.', '0778829207.', '-', 'This guy is in the junior batch of our faculty.Told me that he will hand over book on next monday.', '56', 'pend', '', 'February 20, 2013', '', '58', '58'),
(42, 'P I Fe0rnando.', 50, 'Maharagama.', '0112843342.', '-.', 'Please call and arrange a time to collect the books and magazines.', '63', 'aprov', '63', 'February 20, 2013', 'March 04, 2013', '', ''),
(48, 'Miss Sandamini Kandambi.', 20, 'Maharagama.', '0712326630.', 'sandaminikandanbi@gmail.com', '.', '64', 'aprov', '74', 'February 21, 2013', 'March 01, 2013', '74', '74'),
(55, 'Mr. Thiyagarajah.', 0, 'Kollupitiya.', '0773641652.', 'thiyagu@quadoak.com', 'He wants to donate some dictionaries in good quality and some IT equipment. And he needs a letter saying that we accepted these material stating our purpose. And he prefers to receive our updates and newsletters by email..', '102', 'pend', '', 'February 26, 2013', '', '', ''),
(56, 'Mrs. Ranjani De Mel.', 0, 'Mirihana.', '0112854976.', '.', 'She is happy to deliver it to our dehiwala collection center on Sunday or Monday.', '102', 'aprov', '63', 'February 26, 2013', 'March 04, 2013', '', ''),
(57, 'Shafraz Rahim .', 0, 'NSBM. (BSc in MIS 3rd Year)', ' 0773446224 .', '.', 'Advanced level books and General knowledge books in good Condition.', '102', 'pend', '', 'February 26, 2013', '', '102', '76'),
(58, 'Yashoda Subramaniyam', 8, 'Kurunegala', '077-9794077', 'ramithaj@gmail.com', 'I have collected her books and i will hand them over to Thejan', '100', 'aprov', '114', 'February 26, 2013', 'February 27, 2013', '100', '114'),
(59, 'Nirodha Ranasinghe.', 0, 'Kandy, Pilimathalawa.', '0712434580.', '.', 'He said Hasara contacted him. But the books are not collected yet.', '72', 'pend', '', 'February 26, 2013', '', '', ''),
(60, 'Ramitha.', 10, 'Kurunegala.', '077-9794077.', 'ramithaj@gmail.com', 'I have some books my self. And I like to donate them. .', '100', 'aprov', '114', 'February 26, 2013', 'February 27, 2013', '', '114'),
(61, 'Gayan Malinda Wijewickrama.', 150, 'Dehiwala.', '0772492513.', 'gmwsra@gmail.com', 'Near the Church in Dehiwala, Galle Road. (Twitter handle @GayanMW). He came to our meeting place and gave the books  ', '49', 'aprov', '49', 'February 26, 2013', 'March 04, 2013', '49', ''),
(62, 'N.G.Dilini Tharindra', 20, 'Kottawa.', ' 0778628393.', 'dil.tharindra@gmail.com', '', '111', 'aprov', '74', 'February 26, 2013', 'February 28, 2013', '74', '74'),
(63, 'ICES.', 25, 'Kandy.', '081-2234892.', 'iceskandy@gmail.com', '.', '105', 'aprov', '105', 'February 26, 2013', 'February 26, 2013', '', ''),
(66, 'Lakith Dharmarathna.', 5, 'Kurunegala.', '.', 'lakith.id@gmail.com', '.', '114', 'aprov', '114', 'February 26, 2013', 'February 26, 2013', '', '114'),
(67, 'Thejan Rajapakshe.', 10, 'Kurunegala.', '0715848343.', 'coder.clix@gmail.com', 'I have my own collection of books to donate. .', '114', 'aprov', '114', 'February 26, 2013', 'February 26, 2013', '', '114'),
(68, 'Miss. Shanya De Silva.', 0, 'Maradana, UOC', '0711756044.', '.', '.', '123', 'aprov', '55', 'February 26, 2013', 'February 27, 2013', '49', ''),
(70, 'Muditha Dharmasiri.', 21, 'Aruppala, Kandy.', '0775910535.', 'mudithad@facebook.com,', 'A very devoted reader herself, she handed the books over in a white plastic bag. :).', '122', 'pend', '', 'February 27, 2013', '', '', '73'),
(71, 'Shamili Karunarathne.', 0, 'Suwarapola, Piliyandala.', '0759999634.', '-,', 'Not in a rush.\r\nShe told to give her donation after mid of March.\r\nMost probably someone have to go and collected it.', '58', 'pend', '', 'February 27, 2013', '', '', ''),
(72, 'Lakmini Gamage.', 0, 'Thalahena,Malabe.', '0712539282.', 'lhdgamage@gmail.com,', 'Contact her and make the arrangement to collect.She will be available in weekends..', '58', 'pend', '', 'February 27, 2013', '', '', ''),
(73, 'Dulaj Chathupa.', 0, 'Homagama.', '0783584944.', 'chathupacd@gmail.com,', '.', '55', 'pend', '', 'February 27, 2013', '', '', '55'),
(74, 'Mohamed Rizan.', 10, 'Maradana.', '0777334900.', ',', '.', '76', 'pend', '', 'February 28, 2013', '', '', ''),
(75, 'Amodini Ruvindya.', 6, 'Kurunegala.', '077-9794077.', '', 'She has donated 6 A/L supportive books (bio stream). I have collected her books and books are with me..', '100', 'aprov', '100', 'March 01, 2013', 'March 06, 2013', '100', ''),
(76, 'Miss Jayani Edirisinghe.', 45, 'Delkanda.', '0712267766.', 'jmedirisinghe@gmail.com,', '.', '74', 'aprov', '74', 'March 02, 2013', 'March 02, 2013', '', ''),
(77, 'Miss Irunika Madugoda.', 160, 'Maharagama.', '0711250520.', 'Irunikamadugoda750@gmail.com,', '.', '74', 'aprov', '74', 'March 03, 2013', 'March 03, 2013', '', ''),
(78, 'Darshika Palamakumbure.', 15, 'Australia .', '.', 'darshika.palamakumbure@gmail.com,', '.', '67', 'pend', '', 'March 06, 2013', '', '', ''),
(79, 'Prabodha Abeykoon.', 13, 'Kandy.', '.', ',', '.', '67', 'pend', '', 'March 06, 2013', '', '', ''),
(80, 'Damith Lakmal.', 70, 'Kolonnawa.', '0778871065.', 'damith.lakmal.96@facebook.com', 'Some reading books, stationary (loads of writing books drawing books, pens, color pens and etc) and IT magazines .', '49', 'aprov', '49', 'March 07, 2013', 'March 09, 2013', '49', '49'),
(81, 'Lahiru.', 40, 'Bandaragama.', '0777100311.', '-,', 'Can collect any day, just need inform him oneday early before going. This is near to Piliyandala and Panadura.\r\nThanks.', '63', 'pend', '', 'March 08, 2013', '', '', ''),
(82, 'Lahiru Wijerathna.', 0, 'Maharagama.', '0713449366.', ',', '.', '66', 'pend', '', 'March 08, 2013', '', '', '66'),
(83, 'Mr.Sujith Weerasinghe and My hope UK lanka foundat', 0, 'United Kingdom.', '+7957688707.', 'sujith.weerasinghe@aol.co.uk,', '.', '67', 'pend', '', 'March 09, 2013', '', '', ''),
(84, 'Deepika Ranaweera.', 4, 'Kandy.', '.', ',', 'https://www.facebook.com/deepika.ranaweera.', '67', 'pend', '', 'March 09, 2013', '', '', ''),
(85, 'Miss Melani Patirana.', 32, 'Maharagama.', '.0779194963', 'melanipathirana2011@gmail.com,', '.', '74', 'aprov', '74', 'March 12, 2013', 'March 12, 2013', '74', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `fuid` int(10) NOT NULL auto_increment,
  `usid` varchar(10) NOT NULL,
  `catg` varchar(100) NOT NULL,
  `subj` varchar(500) NOT NULL,
  `idea` varchar(1000) NOT NULL,
  `fdate` varchar(30) NOT NULL,
  PRIMARY KEY  (`fuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`fuid`, `usid`, `catg`, `subj`, `idea`, `fdate`) VALUES
(7, '81', 'Current projects & processes', 'Disscuss about current projects', 'Needy Readers, Colour a Dream, Path to Wisdom. Needy Readers, Colour a Dream, Path to Wisdom. Needy Readers, Colour a Dream, Path to Wisdom', 'April 09, 2013'),
(8, '81', 'Brand development & management', 'Branding topic test', 'Branding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic testBranding topic test', 'April 10, 2013'),
(9, '49', 'ER & stake holder management', 'Test topic stakeholders', 'Test topic stakeholdersTest topic stakeholdersTest topic stakeholdersTest topic stakeholdersTest topic stakeholdersTest topic stakeholders', 'April 10, 2013'),
(10, '49', 'Brand development & management', 'Testing 2 branding 22', 'Testing 2 brandingTesting 2 brandingTesting 2 brandingTesting 2 brandingTesting 2 brandingTesting 2 brandingTesting 2 brandingTesting 2 brandingTesting 2 brandingTesting 2 branding', 'April 10, 2013'),
(11, '49', 'New projects', 'New projects topic', 'New projects topicNew projects topicNew projects topicNew projects topicNew projects topicNew projects topic', 'April 10, 2013'),
(12, '49', 'Marketing & promotions', 'Marketing discuss', 'Marketing discussMarketing discussMarketing discussMarketing discussMarketing discussMarketing discuss', 'April 10, 2013'),
(13, '49', 'Member learning & development', 'member learning ', 'member learning member learning member learning member learning member learning member learning member learning member learning ', 'April 10, 2013'),
(14, '49', 'HR & Team structure', 'Topic HR', 'Topic HRTopic HRTopic HRTopic HRTopic HRTopic HRTopic HRTopic HRTopic HR', 'April 10, 2013'),
(15, '49', 'Logistics', 'Discuss about logistic', 'Discuss about logisticDiscuss about logisticDiscuss about logisticDiscuss about logisticDiscuss about logisticDiscuss about logisticDiscuss about logistic save', 'April 10, 2013'),
(16, '49', 'Other', 'Subject other', 'Subject otherSubject otherSubject otherSubject otherSubject otherSubject otherSubject otherSubject other', 'April 10, 2013'),
(17, '49', 'Complaints', 'Complaints about anything ', 'Complaints about anythingComplaints about anythingComplaints about anythingComplaints about anythingComplaints about anythingComplaints about anything save', 'April 10, 2013'),
(18, '49', 'HR & Team structure', 'HR and Team 2', 'HR and Team 2HR and Team 2HR and Team 2HR and Team 2HR and Team 2HR and Team 2HR and Team 2HR and Team 2HR and Team 2', 'April 12, 2013'),
(19, '49', 'Brand development & management', 'Brand develop', 'Brand developBrand developBrand developBrand developBrand developBrand developBrand developBrand develop save', 'April 12, 2013');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msgid` int(10) NOT NULL auto_increment,
  `messg` varchar(800) NOT NULL,
  `wrt` varchar(10) NOT NULL,
  `rid` varchar(10) NOT NULL,
  PRIMARY KEY  (`msgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msgid`, `messg`, `wrt`, `rid`) VALUES
(1, 'Test feedback', '49', '1'),
(2, 'New updates : Pending Donations ', '49', '1'),
(3, 'SMS via Twitter will be updated soon.', '49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `myfriends`
--

CREATE TABLE `myfriends` (
  `cid` int(10) NOT NULL auto_increment,
  `uid` varchar(20) NOT NULL,
  `fid` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `myfriends`
--


-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `repid` int(20) NOT NULL auto_increment,
  `fuid` varchar(20) NOT NULL,
  `luser` varchar(20) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  PRIMARY KEY  (`repid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`repid`, `fuid`, `luser`, `reply`, `rdate`) VALUES
(1, '17', '49', 'test replies', 'April 10, 2013'),
(3, '15', '49', 'Test replies 2', 'April 10, 2013'),
(5, '15', '81', 'testing option 4', 'April 10, 2013'),
(6, '17', '81', 'srtertrt  qwer er wer', 'April 10, 2013'),
(7, '16', '81', 'reply for other subjects', 'April 10, 2013'),
(8, '16', '49', 'test again replies', 'April 10, 2013'),
(9, '17', '49', 'reply ok', 'April 12, 2013'),
(10, '8', '49', 'test replies', 'April 12, 2013'),
(13, '10', '49', 'Branding reply', 'April 12, 2013'),
(16, '7', '49', 'tets 2', 'April 12, 2013'),
(17, '7', '49', 'test current projects', 'April 12, 2013'),
(18, '11', '49', 'new projects ok', 'April 12, 2013'),
(19, '9', '49', 'ok', 'April 12, 2013'),
(20, '12', '49', 'marketing done', 'April 12, 2013'),
(21, '10', '49', 'right 2', 'April 12, 2013'),
(22, '13', '49', 'done', 'April 12, 2013'),
(23, '14', '49', 'HR ok', 'April 12, 2013'),
(24, '19', '49', 'Brand develop rep', 'April 12, 2013');

-- --------------------------------------------------------

--
-- Table structure for table `stake`
--

CREATE TABLE `stake` (
  `sname` varchar(100) NOT NULL,
  `scno` varchar(100) NOT NULL,
  `spadrs` varchar(500) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sdate` varchar(20) NOT NULL,
  `sage` varchar(20) NOT NULL,
  `sgender` varchar(20) NOT NULL,
  `snat` varchar(50) NOT NULL,
  `sbook` int(20) NOT NULL,
  `showc` varchar(30) NOT NULL,
  `shcon` varchar(500) NOT NULL,
  `shelp` varchar(500) NOT NULL,
  `splan` varchar(500) NOT NULL,
  `syes` varchar(500) NOT NULL,
  `srem` varchar(500) NOT NULL,
  `volid` varchar(20) NOT NULL,
  `stid` int(20) NOT NULL auto_increment,
  `sid` varchar(20) NOT NULL,
  PRIMARY KEY  (`stid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `stake`
--

INSERT INTO `stake` (`sname`, `scno`, `spadrs`, `semail`, `sdate`, `sage`, `sgender`, `snat`, `sbook`, `showc`, `shcon`, `shelp`, `splan`, `syes`, `srem`, `volid`, `stid`, `sid`) VALUES
('Kavinda Dammika', '0773653180', '-', '-', '01/11/2012', 'young arond 30', 'Male', 'Sri lankan', 0, '-', 'Through Nisal', 'He works in Maubima, he helped us to publish couple of articles in Maubima and also to he is willing to give books storing space. IMCD and Maubima gamin gamata worked together with his support.', 'YES', 'Publishing Articles and working together Maubima gamin gamata', 'Need to be carefull when working together with Gamin Gamata project', '63', 13, ''),
('Pubudu Ranathunga', '0715564552', '306/5, Cemetery Rd, Batapotha, Battaramulla', 'pubudurana@gmail.com', '2012-12', '25', 'Male', 'Sri Lankan   ', 250, '', 'SL Navy', 'Donating books', 'yes', 'Donating books', '', '49', 10, '49'),
('Samith Maduranga', '0774841852', '-', '-', '-', 'young arond 25', 'Male', 'Sri lankan', 0, '', '', 'He is Author, he wrote the most hit article of Needy Readers "Poth kiwannata kanmathi ayata poth dena Needy Readers"', 'yes', 'can contact to publish more articles in Ceylon today', '', '63', 14, ''),
('Anglia Cthorier (pvt) Ltd', '0112055215', 'Torington Mawatha, Colombo 07', 'anglialk@yahoo.com', '14.02/2013', '-', 'Male', 'Sri lankan', 0, '', 'directly contacted us', 'Donating books by collecting books in side.', 'might', '', 'Sheron and Jayamini are the contact persons of the company', '63', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL auto_increment,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(200) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tele` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `seq` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `fid` varchar(20) NOT NULL,
  `town` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL default 'pend',
  `utype` varchar(50) NOT NULL default 'nuser',
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `pword`, `fname`, `mname`, `lname`, `dob`, `country`, `gender`, `tele`, `email`, `seq`, `answer`, `year`, `fid`, `town`, `status`, `utype`) VALUES
(49, 'chethaka', 'bf41dbc8fe422cb5a1e9e058a6c0c90e4549f069', 'Chethaka', 'photo/proche.jpg', 'Uduwarage', 'March 11, 1987', 'Sri Lanka', 'Male', '0716406688', 'chethakau@gmail.com', 'My Favourite Book', 'test3', 1987, '', 'Avissawella', 'aprov', 'admin'),
(55, 'kanishka', 'a8d42caf8282a67d554b574a5d1cf60cdf0aeefb', 'Kanishka', 'photo/kani.jpg', 'Rajawansha', 'September 6, 1990', 'Sri Lanka', 'Male', '0714470473', 'kanishka.rajawansha@gmail.com', 'My First tlephone Number', '0729007248', 1990, '', 'Meegoda', 'aprov', 'nuser'),
(56, 'Tharindu', '81d13da335c6510b619d92e0926a5350f9f25dee', 'Tharindu', 'photo/407847_4481798195390_999610410_n.jpg', 'Karunarathne', 'Augest 18, 1988', 'Sri Lanka', 'Male', '0774137102', 'tharinduak@gmail.com', 'My First tlephone Number', '0774137102', 1988, '', 'Nugegoda', 'aprov', 'nuser'),
(57, 'amila', 'fdddeb9419928e470c36247169c50addcf8803c8', 'Amila', 'photo/user.png', 'Amarasinghe', '08 15, 1986', 'Sri Lanka', 'Male', '0716304052', 'amila303@hotmail.com', 'My Pet Name', 'Sandie', 0, '', 'Nivithigala', 'aprov', 'nuser'),
(58, 'ashanimhb', 'a5f4ebe5dbec510050b7b0843a92fd60355f1c8e', 'Ashan Imantha ', 'photo/558681_304891546275810_923414229_n.jpg', 'Malala Hetti Bandara', 'July 30, 1989', 'Sri Lanka', 'Male', '0774592275', 'ashanimhb@gmail.com', 'My School Name', 'DRCK', 1989, '', 'Kandy', 'aprov', 'nuser'),
(59, 'Gihan S', 'feca3e8526c841422aef21c2bc03760245a937b4', 'Gihan', 'photo/user.png', 'Nanayakkara', 'February 19, 1990', 'Sri Lanka', 'Male', '0712242674', 'geefaze@gmail.com', 'My Pet Name', 'Bobi', 1990, '', 'Galle and Kandy', 'aprov', 'nuser'),
(60, 'Haritha', 'e52fdd61e4546a99dbdcbee4a6276da2cf18bf5e', 'Haritha', 'photo/60987_471656192871448_808814943_n.jpg', 'Thilakarathne', 'October 2, 1991', 'Sri Lanka', 'Male', '0716312367', 'harithalht@gmail.com', 'My School Name', 'National School Pannala', 1991, '', 'Pannala', 'aprov', 'nuser'),
(61, 'lividul', 'd4b6288673eb78fb7d196d9a9c6adf894f35a82d', 'Lividul', 'photo/HASL2.jpg', 'Witharana', 'October 16, 1987', 'Sri Lanka', 'Male', '0715651502', 'lividul@gmail.com', 'My Pet Name', 'patty', 1987, '', 'Colombo', 'aprov', 'nuser'),
(62, 'Roo ', '664a3741008f9b3a3a76c036219d4dc36eec0caf', 'Ruwanthika', 'photo/user.png', 'Premalal', 'October 19, 1990', 'Sri Lanka', 'Female', '0772737386', 'ruwanthikaroo@gmail.com', 'My Favourite Book', 'the note book ', 1990, '', 'Kegalle', 'aprov', 'nuser'),
(63, 'upul', 'ad007ab95b90f4bbb0f51579a407a520cbbd3655', 'Upul', 'photo/546798_10151170590227585_147007832_n.jpg', 'Senanayake', 'October 12, 1986', 'Sri Lanka', 'Male', '071 6663282/ 0772 517512', 'upul@imcds.org', 'My Pet Name', 'timmy', 1986, '', 'Ratnapura', 'aprov', 'admin'),
(64, 'thish1991', '01d80ff5f2ae8cc4aff427104442d10181d40b0e', 'Thishan', 'photo/sss.jpg', 'Pavithra', 'Augest 16, 1991', 'Sri Lanka', 'Male', '0719209097', 'thishanpavithra@gmail.com', 'My Pet Name', 'lasi', 1991, '', 'Padukka', 'aprov', 'nuser'),
(65, 'mdpperera', '006fd77a530b7004fa3f3ea3152599c96dc19f8f', 'Prasad', 'photo/user.png', 'Perera', 'April 15, 1991', 'Sri Lanka', 'Male', '0773465110', 'mdpperera@gmail.com', 'My Pet Name', 'tooby', 1981, '', 'Colombo', 'aprov', 'nuser'),
(66, 'yasho_k', 'b1a0ec885ee7f6e54311a1eed95fa667f64bef74', 'Yashodhara', 'photo/user.png', 'Keerthisena', 'April 9, 1990', 'Sri Lanka', 'Female', '0712918682', 'yasho9049@gmail.com', 'My Favourite Book', 'ata massa', 1990, '', 'Avissawella', 'aprov', 'nuser'),
(67, 'Lakshika', '80210a7e74b7ca55d8c3ae91796c09fcc7c4f341', 'Lakshika', 'photo/me.jpg', 'Palamakumbure', 'November 23, 1990', 'Sri Lanka', 'Female', '0774707300', 'lpalamakumbure@gmail.com', 'My School Name', 'Mahamaya', 1990, '', 'Kandy', 'aprov', 'nuser'),
(68, 'madhawa', 'f670b72abf231984ec9f15978094d0376c64a512', 'madhawa', 'photo/user.png', 'chandrasiri', 'March 3, 1990', 'Sri Lanka', 'Male', '0774982677', 'mcmadhawa@gmail.com', 'My Pet Name', 'gimy', 1990, '', 'Moratuwa', 'aprov', 'nuser'),
(69, 'Poomigal', '3f011cebe6601cb057d955309be97c1e3d77db2f', 'Piyumika', 'photo/user.png', 'Ranatunga', 'May 25, 1988', 'Sri Lanka', 'Female', '0774605393', 'piyumika88@gmail.com', 'My Pet Name', 'ringo', 1988, '', 'Dehiwala', 'aprov', 'nuser'),
(71, 'poorna', '7fe1ea62cc4f169d578c0f7cbdd9b0aee416d584', 'Poorna', 'photo/user.png', 'Abeytunga', 'May 6, 1990', 'Sri Lanka', 'Male', '0712694101', 'purnaab@gmail.com', 'My Pet Name', 'Osimandes', 1990, '', 'Malabe', 'aprov', 'nuser'),
(72, 'anuwick', '14f85fd874db8684487b10eda65ebe2443ce10ae', 'Anupa Sanjana ', 'photo/474191_3693905158602_1562318441_o.jpg', 'Wickramarachchi', 'July 20, 1989', 'Sri Lanka', 'Male', '0777388743', 'anuwick@gmail.com', 'My Favourite Book', 'she', 1989, '', 'Mahara', 'aprov', 'nuser'),
(73, 'Sandamini', 'fbce46251bca40e2fc838817776dbca74ea9f6d7', 'Sandamini', 'photo/user.png', 'Ranwalage', 'December 30, 1991', 'Sri Lanka', 'Female', '071-3228563', 'sandaminiyash@gmail.com', 'My School Name', 'Mahamaya', 1991, '', 'Kandy', 'aprov', 'nuser'),
(74, 'Thimali', '2d489f8d0bff1633b72daf075d4496d81003fea7', 'Thimali', 'photo/user.png', 'yasoda', 'February 7, 1991', 'Sri Lanka', 'Female', '0713687837', 'thimaliyasoda@gmail.com', 'My Pet Name', 'cat', 1991, '', 'Kottawa', 'aprov', 'nuser'),
(75, 'shyamala', '28999f698ac496f48ae57b4e248f20291cc6373c', 'Shyamala', 'photo/user.png', 'Alahakoon', 'January 12, 1990', 'Sri Lanka', 'Female', '0778183295', 'shyamala.ash@gmail.com', 'My Pet Name', 'snow', 1990, '', 'Kandy', 'aprov', 'nuser'),
(76, 'ZPOKOIn', '5a41804ce1ab68c486c8a4d28b5b593535eda2b0', 'Azeemullah', 'photo/user.png', 'Abdeen', 'September 5, 1990', 'Sri Lanka', 'Male', '+94754636178', 'akmalazeee@gmail.com', 'My Pet Name', 'Kitty', 1990, '', 'Wellawatte', 'aprov', 'nuser'),
(77, 'AS2011369', '55e01bb5bede0e3e7480a5fa7b2384727d14202e', 'Binushi', 'photo/mm.jpg', 'Gunawardana', 'October 24, 1990', 'Sri Lanka', 'Female', '0716284993', 'gbinu1024@yahoo.com', 'My School Name', 'Anula Vidyalaya', 1990, '', 'Kirulapana', 'aprov', 'nuser'),
(78, 'darshatha', '9141db4c624a8378f466d105ed72f94eb224a668', 'Darshatha', 'photo/user.png', 'Gamage', 'December 20, 1993', 'Sri Lanka', 'Male', '+94 714297866', 'darshathagamage@gmail.com', 'My Favourite Book', 'Narnia', 1993, '', 'Colombo', 'aprov', 'nuser'),
(79, 'Kokila', '450c95879e1a0078bfcedcebd76560b615bfbb65', 'Kokila', 'photo/426222_2695038375730_1490170107_n.jpg', 'Surasinghe', 'November 6, 1990', 'Sri Lanka', 'Male', '0718232557', 'viduranga.ieee@hotmail.com', 'My Pet Name', 'adjayantha', 1990, '', 'Colombo', 'aprov', 'nuser'),
(80, 'kala_deshi', 'd301a2abb805014abaebd0671ea8ae6e687b2e37', 'Kalani', 'photo/user.png', 'Gunasekara', 'October 30, 1990', 'Sri Lanka', 'Female', '94777914131', 'kalani_d@yahoo.com', 'My Favourite Book', 'Notebook', 1990, '', 'Rajagiriya', 'aprov', 'nuser'),
(81, 'admin', '5a41804ce1ab68c486c8a4d28b5b593535eda2b0', 'IMCD-web', 'photo/needy.png', 'Administrator', 'January 1, 2000', 'Sri Lanka', 'Male', '0716406688', 'hellof450@gmail.com,', 'My Favourite Book', 'test3', 2000, '', 'Colombo', 'aprov', 'admin'),
(90, 'nalakadas', '48916f66ff284ef8575c9089d5d9891d00166eeb', 'nalaka', 'photo/user.png', 'dasanayake', 'October 19, 1990', 'Sri Lanka', 'Male', '0713599094', 'nalakadas@gmail.com', 'My Favourite Book', 'yuganthaya', 1990, '', 'kandy', 'aprov', 'nuser'),
(92, 'Dilz0527', '07026b38d026d01855e8587e27f90d1b89aedd82', 'Dilini', 'photo/dil 013.jpg', 'Siriwardhana', 'May 27, 1988', 'Sri Lanka', 'Female', '0719397329', 'dilini880527@gmail.com', 'My School Name', 'Mahamaya Girls College', 1988, '', 'Kandy', 'aprov', 'nuser'),
(93, 'Sarani', 'f643dd02a7c3dedacb611ccb862b64db6c14a0a4', 'Sarani', 'photo/IMG_0142.jpg', 'Illangasinghe', 'September 18, 1989', 'Sri Lanka', 'Female', '+94715149867', 'sara18988@ymail.com', 'My First tlephone Number', '0776096376', 1989, '', 'Kandy', 'aprov', 'nuser'),
(94, 'AparnaL', 'b6725be87acaf9d0440f4bedcd62b677bfc59f29', 'Aparna', 'photo/user.png', 'Liyanage', 'January 10, 1991', 'Sri Lanka', 'Male', '0775507987', 'aparnaliyanage91@gmail.com', 'My First tlephone Number', '0775507987', 1991, '', 'Ambalangoda', 'aprov', 'nuser'),
(95, 'nilushashamali@gmail.com', '2aaad73b261cbc5715a3f4859586c9cc6ea78214', 'Nilusha', 'photo/user.png', 'Paranavithana', 'November 14, 1990', 'Sri Lanka', 'Female', '0771068496', 'nilushashamali@gmail.com', 'My Pet Name', 'garbage', 1990, '', 'Malabe', 'aprov', 'nuser'),
(97, 'chamara', 'ac3b487de7388b9596c3228120a3b8d743f1d1dc', 'Chamara', 'photo/43.jpg', 'Madusanka', 'May 3, 1989', 'Sri Lanka', 'Male', '0777580997', 'internetchamara@gmail.com', 'My Pet Name', 'lassie', 1989, '', 'Homagama', 'aprov', 'nuser'),
(99, 'nimeshanayo', '914d8c71d6a711a4179e934cda102cf2d154a869', 'Nimesha Nayomi', 'photo/user.png', 'De silva', 'May 15, 1989', 'Sri Lanka', 'Female', '0777471204', 'nimeshadesilva@yahoo.com', 'My Pet Name', 'rando', 1989, '', 'Ratmalana', 'aprov', 'nuser'),
(100, 'ramithaj', '165442e95a4bbfeefb5c49b75bdc2e1e02ad8102', 'Ramitha', 'photo/user.png', 'Jayamal', 'January 31, 1986', 'Sri Lanka', 'Male', '077-9794077', 'ramithaj@gmail.com', 'My First tlephone Number', '0779794077', 1986, '', 'Kurunegala/Kegalle', 'aprov', 'nuser'),
(101, 'Eranga', '41cb73136b3dd97f926409d45d27b0f4f0e2e55c', 'Eranga', 'photo/247058_1765647897780_3656491_n.jpg', 'Gunasekara', 'March 12, 1990', 'Sri Lanka', 'Male', '0776457544/0717132889', 'piyum,45@gmail.com', 'My School Name', 'STC', 1990, '', 'Bandarawela/Colombo', 'aprov', 'nuser'),
(102, 'Nimanthie', '923535d2ad98a41e5c3cbd320f1ad88edfac62cf', 'Nimanthie', 'photo/user.png', 'Ariyasinghe', 'Augest 1, 1988', 'Sri Lanka', 'Female', '94772386057', 'nimanthie.ariyasinghe@gmail.com', 'My Pet Name', 'Chuti Malli', 1988, '', 'Moratuwa', 'aprov', 'admin'),
(103, 'premila', '6a55516ccfc5d4a0de5bf93215b6eddf989a454b', 'Premila', 'photo/user.png', 'Premathilake', 'May 19, 1984', 'Sri Lanka', 'Female', '+96899640595, +94718064035', 'rangi116@gmail.com', 'My Pet Name', 'rangi', 1984, '', 'Colombo', 'aprov', 'nuser'),
(104, 'Madhu ', '100ec4462dec34f6824f7e65f377076ce5d51ced', 'Ishara', 'photo/DSC_0235 profle.jpg', 'Madhushani jayasena', 'November 6, 1989', 'Sri Lanka', 'Female', '0718867860', 'maduishara96@gmail.com', 'My Favourite Book', 'desert flower', 1989, '', 'Avissawella', 'aprov', 'nuser'),
(105, 'Priyabhani', 'e7307b7d96a35853a4832707b8096012bd02d6ee', 'Priyabhani', 'photo/user.png', 'Jayatillake', 'February 9, 1991', 'Sri Lanka', 'Female', '0710814844', 'priyabhani.jayatillake@gmail.com', 'My School Name', 'Pushpadana', 1991, '', 'Kandy', 'aprov', 'nuser'),
(106, 'manavi', 'dee6f6ce0aa3b25914d62097d30e7074d7e7100e', 'Manavi', 'photo/user.png', 'Gunawardhane', 'January 9, 1989', 'Sri Lanka', 'Female', '0714459873', 'manavi1989@gmail.com', 'My Pet Name', 'daffodilla', 1989, '', 'Kottawa', 'aprov', 'nuser'),
(107, 'hashankanishka', '47207c712e93bbcfcf02beb068ff5b76ecbb7873', 'Hashan', 'photo/user.png', 'Samarasinghe', 'March 7, 1990', 'Sri Lanka', 'Male', '0774197961', 'hashansamarasinghe29@gmail.com', 'My School Name', 'drck', 1990, '', 'Kandy', 'aprov', 'nuser'),
(108, 'lahiyru.ra.gunasekera@gmail.com', 'c06bf63cb54aba869b67ba2f56fa6d7654273407', 'Lahiyru', 'photo/user.png', 'Gunasekera', 'November 11, 1988', 'Sri Lanka', 'Male', '0714433528', 'lahiyru.ra.gunasekera@gmail.com', 'My Pet Name', 'Normal', 1988, '', 'Colombo', 'aprov', 'nuser'),
(109, 'Rosh', 'ff28bc0767d4c3852a8e4e9fb8edfa5b1684cbd6', 'Roshan', 'photo/user.png', 'Karunarathna', 'September 9, 1988', 'Sri Lanka', 'Male', '0719894008', 'rkvisit@gmail.com', 'My Favourite Book', 'Da Vinci Code', 1988, '', 'Anuradhapura', 'aprov', 'nuser'),
(110, 'isuruk', '782f8b9aa46ff94ece88ccc3f1732d6695518b36', 'Isuru', 'photo/user.png', 'Kalupahana', 'October 6, 1989', 'Sri Lanka', 'Male', '0718204542', 'isuru47@hotmail.com', 'My First tlephone Number', '0776755766', 1989, '', 'Nugegoda', 'aprov', 'nuser'),
(111, 'Osh', '13ae42569932c347fae33cfed6d3b2feba07b3c9', 'Oshadie', 'photo/user.png', 'Amarasinghe', 'Augest 30, 1989', 'Sri Lanka', 'Female', '0775438392', 'oshweeraman@gmail.com', 'My Pet Name', 'viper', 1989, '', 'Boralesgamuwa', 'aprov', 'nuser'),
(112, 'janibee', '15617b5337a8377521f165dcf75df7b39d903e33', 'Janitha', 'photo/Bee Profpic.jpg', 'Rukmal', 'December 12, 1988', 'Sri Lanka', 'Male', '0713332604', 'janibee2012@gmail.com', 'My Pet Name', 'MistaBee', 1988, '', 'Colombo', 'aprov', 'nuser'),
(114, 'thejanrajapakshe', 'e56f89f6f1545ea7eeb6d3195ce6541155d08e69', 'Thejan', 'photo/486375_4556007392622_464418814_n.jpg', 'Rajapakshe', 'February 2, 1991', 'Sri Lanka', 'Male', '+94715848343', 'coder.clix@gmail.com', 'My School Name', 'St.Annes College', 1991, '', 'Kurunegala', 'aprov', 'nuser'),
(115, 'Hasanthi.nr', '6bcda3e220d267a9ac1f5f958d5231089c289267', 'Hasanthi', 'photo/user.png', 'Kothalawala', 'May 15, 1988', 'Sri Lanka', 'Female', '0094777774605', 'hasanthi.lalani@gmail.com', 'My First tlephone Number', '0771835370', 1988, '', 'Kuliyapitiya', 'aprov', 'nuser'),
(116, 'Vimukthi', '53723b1f648e2dfee41c9e40362e714a8b9c2f1a', 'Vimukthi', 'photo/Great Vimukthi.jpg', 'Gunarathna', 'March 31, 1986', 'Sri Lanka', 'Male', '0771735772', 'greatvimukthi@gmail.com', 'My Pet Name', 'vg', 1986, '', 'Negambo', 'aprov', 'nuser'),
(117, 'ayesha', 'd719a02afbd7cad402eba32458c1ebc06152ea17', 'Ayesha', 'photo/ayeshahe_1344587676_600.jpg', 'Hettiarachchi', 'October 21, 1990', 'Sri Lanka', 'Female', '0777268264', 'ayesha.pubudu@gmail.com', 'My Pet Name', 'tutu', 1990, '', 'Nugegoda', 'aprov', 'nuser'),
(118, 'Kalani Petronila', 'e93829f3421a596cfa2a12a5e9ff35c2d4e7a94d', 'Kalani', 'photo/user.png', 'Petronila', 'May 26, 1989', 'Sri Lanka', 'Female', '0716104904', 'kalanipetronila@yahoo.com', 'My School Name', 'Good Shepherd Convent, Kandy', 1989, '', 'Kandy', 'aprov', 'nuser'),
(119, 'danuka', '4d81253458e33d3872ebe9fbf6e2012299dfde0d', 'Danuka', 'photo/user.png', 'Prasad', 'January 12, 1987', 'Afghanistan', 'Male', '0772 207 203', 'danukarocks@gmail.com', 'My School Name', 'Isipathana college', 1987, '', 'Kahathuduwa', 'aprov', 'nuser'),
(121, 'Hasara ', '966e19b2fda7aecc72f975c93710c9110d2618f5', 'Hasara', 'photo/460509_448851728511662_748864998_o.jpg', 'Thennakoon', 'February 8, 1990', 'Sri Lanka', 'Female', '0775275080', 'kalpaniexp@gmail.com', 'My Pet Name', 'tobi', 1990, '', 'Kegalle', 'aprov', 'nuser'),
(122, 'El-RoNiN', 'd4350bd4b446e0856a2c6671d346cbfcecb53cf3', 'Akira', 'photo/Me (1).jpg', 'Wijekoon', 'April 19, 1990', 'Sri Lanka', 'Male', '0716163835', 'akirakidrapper@gmail.com', 'My Pet Name', 'Aki', 1990, '', 'Kegalle', 'aprov', 'nuser'),
(123, 'Piyumi', 'e5680789d058679d6f4430c1f5118b3114e01079', 'Piyumi', 'photo/user.png', 'Malaviarachchi', 'December 9, 1991', 'Sri Lanka', 'Female', '0772127747', 'piyumi91@gmail.com', 'My Pet Name', 'Sudu', 1991, '', 'Kottawa', 'aprov', 'nuser'),
(124, 'Monali', '5a3acf622569dfdf0d97b96a2e9c81a093d6e654', 'Monali', 'photo/user.png', 'Wickramarathna', 'July 15, 1991', 'Sri Lanka', 'Female', '0771481982', 'monali.wick@gmail.com', 'My Pet Name', 'sweetie pati', 1991, '', 'Pannipitiya', 'aprov', 'nuser'),
(125, 'Hansini', '2c91957837c361cc3d1600bb77fdfb9c2783bc31', 'Hansini', 'photo/user.png', 'Dayarathna', 'October 17, 1991', 'Sri Lanka', 'Female', '0355688014', 'hansini.dayarathna@gmail.com', 'My Pet Name', 'Hansi', 1991, '', 'Mawanella', 'aprov', 'nuser'),
(126, 'Rena', '9c8c73b630cfd0ad451747f21107bdeee82fa156', 'Renasha', 'photo/user.png', 'Silva', 'February 6, 1992', 'Sri Lanka', 'Female', '0773077801', 'renasha@live.com', 'My Favourite Book', 'Long walk to freedom', 1992, '', 'Moratuwa', 'aprov', 'nuser'),
(127, 'sarani', 'f643dd02a7c3dedacb611ccb862b64db6c14a0a4', 'Sarani', 'photo/IMG_0142.jpg', 'Illangasinghe', 'September 18, 1989', 'Sri Lanka', 'Female', '+94715149867', 'sara18988@ymail.com', 'My First tlephone Number', '0776096376', 1989, '', 'Kandy', 'aprov', 'nuser'),
(128, 'isham', 'c644b75e42f201b9e6ca8de35facf038a8b9419d', 'Isham', 'photo/30381_4482800981731_1669766735_n.jpg', 'Marikar', 'October 28, 1988', 'Sri Lanka', 'Male', '0777406419', 'isham@live.com', 'My Pet Name', 'cattt', 1988, '', 'Dehiwala', 'aprov', 'nuser');
