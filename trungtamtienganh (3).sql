-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 06:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trungtamtienganh`
--

-- --------------------------------------------------------

--
-- Table structure for table `buoihoc`
--

CREATE TABLE `buoihoc` (
  `MABUOIHOC` int(11) NOT NULL,
  `MALOPHOC` int(11) DEFAULT NULL,
  `DOMAIN` varchar(70) DEFAULT NULL,
  `OPTIONS` varchar(70) DEFAULT NULL,
  `NGAYTAO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buoihoc`
--

INSERT INTO `buoihoc` (`MABUOIHOC`, `MALOPHOC`, `DOMAIN`, `OPTIONS`, `NGAYTAO`) VALUES
(1, 12, 'meet.jit.si', 'yOdCLWyMgKYRb0fSGKKMzt5kltnh9e', '2024-01-01'),
(2, 12, 'meet.jit.si', 'SEMZTbcOwMTUmTaU1bTemEF79pr2ks', '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `cauhoithithu`
--

CREATE TABLE `cauhoithithu` (
  `MACAUHOI` int(11) NOT NULL,
  `DE` text DEFAULT NULL,
  `LUACHON1` text DEFAULT NULL,
  `LUACHON2` text DEFAULT NULL,
  `LUACHON3` text DEFAULT NULL,
  `LUACHON4` text DEFAULT NULL,
  `DAPAN` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cauhoithithu`
--

INSERT INTO `cauhoithithu` (`MACAUHOI`, `DE`, `LUACHON1`, `LUACHON2`, `LUACHON3`, `LUACHON4`, `DAPAN`) VALUES
(1, 'Because the peer performance review surveys will be conducted —–, employees are encouraged to provide honest feedback on their colleagues’ work.', 'anonymously', 'excessively', 'perceptively', 'descriptively', 'perceptively'),
(4, 'Evan Automobile’s new green energy system was —– acclaimed by industry experts at the expo.', 'unfortunately', 'universally', 'embarrassingly', 'extremely', 'embarrassingly'),
(5, 'He\'s very short: ________ sisters are taller.', 'both of them', 'his both', 'both his', 'the two both his', 'both his'),
(6, 'When ________ dinner.', 'have you', 'do you have', 'you have', 'you are having', 'you are having'),
(7, 'Kate is the best ________ the three.', 'in', 'from', 'than', 'of', 'of'),
(8, '- Are you ready? - ________.', 'Already not', 'Quite not', 'Yet not', 'Not yet', 'Not yet'),
(9, 'Leave your dirty shoes ________ the door.', 'out from', 'out', 'outside', 'out of', 'outside'),
(10, 'He ________ swim very well.', 'not can', 'cannot', 'doesn\'t can', 'don\'t can', 'cannot'),
(11, 'Peter works in London. ________.', 'He goes there by train.', 'He there goes by train.', 'He goes by train there.', 'There goes he by train.', 'He goes there by train.'),
(12, 'Yeuk Yee had her house painted white yesterday.', 'She had to paint her house white yesterday.', 'Her house was not blue last week.', 'They painted her house white for her yesterday.', 'She painted her house yesterday.', 'They painted her house white for her yesterday.'),
(13, 'The hotel is ________.', 'sell', 'for sale', 'for sell', 'sale', 'for sale'),
(14, '- Can we begin the test? - We can\'t unless the teacher ________ so.', 'will say', 'is saying', 'shall say', 'says', 'says'),
(15, '\"You are late\" he said. \"I think the bus ________ already.\"', 'went', 'was going', 'has gone', 'goes', 'has gone'),
(16, 'We wondered who was going to pay for the ________ window.', 'broken', 'breaking', 'broke', 'break', 'broken'),
(17, 'The pond near your house is full ________ white lilies.', 'with', 'of', 'to', 'zero', 'of'),
(18, 'His landlady doesn\'t ________ of his having parties.', 'appreciate', 'support', 'approve', 'agree', 'approve'),
(19, 'I drink ________ coffee than you.', 'little', 'few', 'less', 'fewer', 'less'),
(20, 'I bought her a new pencil sharpener ________.', 'it is very expensive', 'which was very expensive', 'whose colour was black', 'it will be vey expensive', 'which was very expensive'),
(21, 'The news ________ as soon as possible.', 'release', 'will release', 'will have been released', 'will be released', 'will be released'),
(22, 'This book is ________.', 'belonged to Som', 'belong to Som', 'Som\'s', 'of Som', 'belong to Som'),
(23, 'Suda told ________ the whole story.', 'to me', 'me', 'I', 'my', 'me'),
(24, 'It\'s a small shop, and you may have some difficulty ________ it.', 'to find', 'of finding', 'in finding', 'to be finding', 'in finding'),
(25, 'He has been very interested in doing research on _______ since he was at high school.', 'biology', 'biological', 'biologist', 'biologically', 'biology'),
(26, 'Are you sure that boys are more _______ than girls?', 'act', 'active', 'action', 'activity', 'active'),
(27, 'You are old enough to take _______ for what you have done.', 'responsible', 'responsibility', 'responsibly', 'irresponsible', 'responsibility'),
(28, 'These quick and easy _______ can be effective in the short term, but they have a cost.', 'solve', 'solvable', 'solutions', 'solvability', 'solutions'),
(29, 'He was looking at his parents _______, waiting for recommendations.', 'obey', 'obedience', 'obedient', 'obediently', 'obediently'),
(30, 'The interviews with parents showed that the vast majority were _______ of teachers.', 'support', 'supportive', 'supporter', 'supporting', 'supportive'),
(31, 'It is _________ of you to leave the medicine where the children could get it.', 'care', 'caring', 'careless', 'careful', 'careless'),
(32, 'For ________ reasons, passengers are requested not to leave any luggage unattended.', 'secure', 'securely', 'security', 'securing', 'security'),
(33, 'The leader of the explorers had the great _______ in his native guide.', 'confident', 'confidence', 'confidential', 'confidentially', 'confidence'),
(34, 'We are impressed by his _________ to help us with the hard mission.', 'will', 'willing', 'willingness', 'willingly', 'willingness'),
(35, 'John cannot make a __ to get married to Mary or stay single until he can afford a house and a car.', 'decide', 'decision', 'decisive', 'decisively', 'decision'),
(36, 'My mother used to be a woman of great _______, but now she gets old and looks pale.', 'beauty', 'beautiful', 'beautifully', 'beautify', 'beauty'),
(37, 'Although they are twins, they have almost the same appearance but they are seldom in _______.', 'agree', 'agreeable', 'agreement', 'agreeably', 'agreement'),
(38, 'The more _______ and positive you look, the better you will feel.', 'confide', 'confident', 'confidently', 'confidence', 'confidence'),
(39, 'My parents will have celebrated 30 years of _______ by next week.', 'marry', 'married', 'marriageable', 'marriage', 'marriage'),
(40, 'Many Vietnamese people ______ their lives for the revolutionary cause of the nation', 'sacrifice', 'sacrificed', 'sacrificial', 'sacrificially', 'sacrificed'),
(41, 'They had a _______ candlelit dinner last night and she accepted his proposal of marriage.', 'romance', 'romantic', 'romantically', 'romanticize', 'romantic'),
(42, 'Are there any _____, between Vietnamese and American culture?', 'differences', 'different', 'differently', 'differential', 'differences'),
(43, 'Some people are concerned with physical _______when choosing a wife or husband.', 'attractive', 'attraction', 'attractiveness', 'attractively', 'attractiveness'),
(44, 'What could be more ________ than a wedding on a tropical island?', 'romance', 'romantic', 'romanticizing', 'romanticism', 'romanticism'),
(45, 'In my hometown, many people still believe in_______ marriage.', 'contract', 'contractual', 'contracts', 'contracting', 'contractual'),
(46, '_____ women are responsible for the chores in the house and taking care of the children.', 'With tradition', 'On tradition', 'Traditional', 'Traditionally', 'Traditional'),
(47, 'Though their performance was not perfect yet, the students held the audience\'s____ until the end.', 'attentive', 'attention', 'attentively', 'attentiveness', 'attention'),
(48, 'The survey will cover various ways of ___________ the different attitudes toward love and marriage of today\'s youth.', 'determination', 'determine', 'determined', 'determining', 'determining'),
(49, 'Both Asian and Western students seem ___ about how to answer the questionnaire of the survey.', 'confusedly', 'confused', 'confusing', 'confusion', 'confused'),
(50, 'She was__ unaware of the embarrassing situation due to her different cultural background.', 'complete', 'completed', 'completing', 'completely', 'completely'),
(51, 'What is more important to you, intelligence or___________________?', 'attraction', 'attractiveness', 'attractive', 'attracted', 'attractiveness'),
(52, 'The family has a very important role in_____________ children.', 'social', 'socialist', 'socializing', 'socialism', 'socializing'),
(53, 'In U.S. schools, teachers don\'t mind their students\'___________ them during the lectures.', 'interrupt', 'interrupted', 'interrupting', 'to interrupt', 'interrupting'),
(54, 'His achievements were partly due to the____________ of his wife.', 'assist', 'assistant', 'assisted', 'assistance', 'assistance'),
(55, 'By working day and night, they succeeded____________ their work in time.', 'finished', 'to finish', 'finishing', 'in finishing', 'in finishing'),
(56, 'They started, as ___ gatherings but they have become increasingly formalized in the last few years.', 'informal', 'informally', 'informalize', 'informality', 'informal'),
(57, 'Children who are isolated and lonely seem to have poor language and _________.', 'communicate', 'communication', 'communicative', 'communicator', 'communication'),
(58, 'The lecturer explained the problem very clearly and is always ____in response to questions.', 'attention', 'attentive', 'attentively', 'attentiveness', 'attentive'),
(59, 'I make no __________ for encouraging my children to succeed in school.', 'apologize', 'apologetic', 'apologies', 'apoplectic', 'apologies'),
(60, 'It was very more __________of a chat than an interview.', 'formal', 'informal', 'formality', 'informality', 'informal'),
(61, 'As an _______, Mr. Pike is very worried about the increasing of juvenile delinquency.', 'educate', 'education', 'educator', 'educative', 'educator'),
(62, 'In England, primary education is provided by state schools run by the government and by _______ fee-paying schools.', 'independent', 'independently', 'depended', 'independence', 'independent'),
(63, 'He did not do well at school and left with few _______ qualifications.', 'academic', 'academy', 'academician', 'academically', 'academic'),
(64, 'The Minister of the Education and Training Department appeared on TV last night to------- his new policy.', 'public', 'publicly', 'publicize', 'publicizing', 'publicize'),
(65, 'He owed his success not to privilege but to self-education and a driving desire for _____.', 'achieve', 'achiever', 'achievement', 'achievable', 'achievement'),
(66, 'To Vietnamese students, the _______ examination to university is very difficult.', 'require', 'requirement', 'requiring', 'required', 'required'),
(67, 'Despite many recent _______ advances, there are parts where schools are not equipped with computers.', 'technology', 'technological', 'technologically', 'technologist', 'technological'),
(68, 'There is a wide range of _______ in the education system of the USA.', 'select', 'selective', 'selected', 'selection', 'selection'),
(69, 'He was the only _______ that was offered the job.', 'apply', 'application', 'applicant', 'applying', 'applicant'),
(70, 'Parents can express a _______ for the school their child attends.', 'prefer', 'preference', 'preferential', 'preferable', 'preference'),
(71, 'Many people have objected to the use of animals in _____ experiments.', 'science', 'scientist', 'scientific', 'scientifically', 'scientific'),
(72, 'I would like to invite you to participate in the ceremony_______.', 'graduate', 'graduated', 'graduation', 'graduating', 'graduation'),
(73, 'Mr. Pike provided us with an _______ guide to the full-time and part-time programs on offer to a range of candidates drawn from schools and colleges.', 'inform', 'informative', 'informed', 'information', 'informative'),
(74, 'Not many places at the universities are left, so choice is on a severe _______.', 'limiting', 'limitation', 'delimitation', 'limited', 'limited'),
(75, 'You should ask him about your choice because he often made the right ………………..', 'decides', 'decision', 'decisive', 'deciding', 'decision'),
(76, 'Can you tell me about the……………process to tertiary study in Vietnam?', 'applies', 'applying', 'application', 'apply', 'application'),
(77, 'I am so _______ that I cannot say anything, but keep silent.', 'nerve', 'nervous', 'nervously', 'nervousness', 'nervous'),
(78, 'A letter of _______ is sometimes really necessary for you in a job interview.', 'recommend', 'recommended', 'recommender', 'recommendation', 'recommendation'),
(79, 'Doctors have to assume _______ for human life.', 'responsible', 'responsibly', 'responsibility', 'responsibles', 'responsibility'),
(80, 'He was offered the job thanks to his _______ performance during his job interview.', 'impress', 'impression', 'impressive', 'impressively', 'impressive'),
(81, 'The interviewer gave his consent to John\'s ____for work and promised to give him a job.', 'keen', 'keenly', 'keener', 'keenness', 'keenness'),
(82, '_______! I have heard of your success in the new project.', 'Congratulate', 'Congratulating', 'Congratulation', 'Congratulations', 'Congratulations'),
(83, 'It is _______ to fail a job interview, but try again.', 'disappoint', 'disappointing', 'disappointedly', 'disappointment', 'disappointing'),
(84, 'I don\'t like_________jobs. In fact, I never want to work under high pressure.', 'stress', 'stressed', 'stressing', 'stressful', 'stressful'),
(85, 'The new policies include cutting _______ subsidies and trade barriers.', 'agriculture', 'agricultural', 'agriculturalist', 'agriculturally', 'agricultural'),
(86, 'The control of _______ has been carried out through measures rooted in monetarism.', 'inflate', 'inflationist', 'inflation', 'inflator', 'inflation'),
(87, 'It is often a good idea to start with small, easily _______ goals.', 'achieve', 'achievement', 'achievable', 'achiever', 'achievable'),
(88, 'For more than ten years, we have seen the significant ___ in the economy of our country.', 'develop', 'developments', 'developers', 'developed', 'developments'),
(89, 'Henry was a studious student. He needed no _______ to work hard.', 'encourage', 'encouraging', 'encouragement', 'encouraged', 'encouragement'),
(90, 'During the time of economic reforms, the economy has grown _____ with only a few major setbacks.', 'constant', 'constantly', 'constants', 'constancy', 'constantly'),
(91, 'It is often a good idea to start with small, easily _______ goals.', 'achieve', 'achievement', 'achievable', 'achiever', 'achievable'),
(92, 'The _______ challenge of economic, reform was to solve the problems of motivating workers and farmers to produce a larger surplus.', 'initial', 'initiate', 'initiative', 'initiation', 'initiative'),
(93, 'Those specialists are trying to find ways of making more _______ use of agricultural land.', 'produce', 'production', 'productive', 'productivity', 'productive'),
(94, '_______ is a branch of Natural Science, and is the study of living organisms and how they interact with their environment.', 'Biology', 'Biological', 'Biologist', 'Biologically', 'Biology'),
(95, 'A / an ______species is a population of an organism which is at risk of becoming extinct.', 'dangerous', 'endanger', 'endangered', 'endangerment', 'endangered'),
(96, 'Only a few of the many species at risk of extinction actually make it to the lists and obtain legal ___.', 'protect', 'protection', 'protective', 'protector', 'protection'),
(97, 'Almost half of turtles and tortoises are known to be threatened with ____.', 'extinct', 'extinction', 'extinctive', 'extinctly', 'extinction'),
(98, 'Current extinction rates are at least 100 to 1,000 times higher than _______ rates found in the fossil record.', 'nature', 'natural', 'naturally', 'naturalness', 'natural'),
(99, 'It is reported that humans are the main reason for most species\' declines and habitat _______ and degradation are the leading threats.', 'destroy', 'destructive', 'destructor', 'destruction', 'destruction'),
(100, 'They eventually realize that reckless _______ of the earth\'s resources can lead only to eventual global disaster.', 'exploit', 'exploitable', 'exploitation', 'exploitative', 'exploitation'),
(101, 'Farmers make their soil more productive by distributing _______.', 'fertile', 'fertility', 'fertilizers', 'fertilizable', 'fertilizers'),
(102, 'Chemical wastes from factories are _____ that cause serious damage to species habitats.', 'pollutes', 'pollutants', 'pollutions', 'polluters', 'pollutants'),
(103, 'Development of the area would _________wildlife.', 'danger', 'dangerous', 'endanger', 'dangerously', 'endanger'),
(104, 'England was one of the first countries to ____________.', 'industry', 'industrial', 'industrialize', 'industrialization', 'industrialization'),
(105, 'Their ____________is rejected due to some problems of pollution.', 'suggest', 'suggestion', 'suggestive', 'suggestible', 'suggestive'),
(106, 'We all regard pollution as a ____________matter to human beings.', 'serious', 'seriously', 'seriousness', 'seriousful', 'seriousness'),
(107, 'The people in our village are leading a ________life.', 'peace', 'peaceful', 'peacefully', 'peacefulness', 'peaceful'),
(108, 'We have to suffer a lot of floods due to our serious of forests.', 'destroy', 'destructive', 'destruction', 'destructor', 'destruction'),
(109, 'This book is not really ________. It is a waste of money buying it.', 'inform', 'information', 'informative', 'informatively', 'informative'),
(110, 'Sometimes it is ________ to find suitable books for our children.', 'difficult', 'difficulty', 'difficultly', 'difficulties', 'difficult'),
(111, 'Read the book ________ and you can find the information you need.', 'care', 'careful', 'carefulness', 'carefully', 'carefully'),
(112, 'Not many people find reading more ________ than watching TV.', 'interest', 'interested', 'interesting', 'interestingly', 'interesting'),
(113, 'To become a novelist, you need to be ________.', 'imagine', 'imagination', 'imaginative', 'imaginarily', 'imaginative'),
(114, 'Mary enjoys reading _____, adventure, and whatever else she can either buy or borrow.', 'romance', 'romantic', 'romanticize', 'romanticism', 'romance');

-- --------------------------------------------------------

--
-- Table structure for table `cautraloi`
--

CREATE TABLE `cautraloi` (
  `MALANTHI` int(11) NOT NULL,
  `MACAUHOI` int(11) NOT NULL,
  `CAUTRALOI` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cautraloi`
--

INSERT INTO `cautraloi` (`MALANTHI`, `MACAUHOI`, `CAUTRALOI`) VALUES
(20, 1, 'anonymously'),
(21, 1, 'anonymously'),
(22, 1, 'perceptively'),
(24, 1, 'perceptively'),
(26, 1, 'perceptively'),
(27, 21, 'will have been released'),
(27, 30, 'supporter'),
(27, 62, 'depended'),
(27, 68, 'selected'),
(27, 73, 'informed'),
(27, 85, 'agriculturalist'),
(27, 94, 'Biologist'),
(27, 98, 'naturalness'),
(27, 105, 'suggestive'),
(27, 106, 'seriousness'),
(30, 11, 'He goes there by train.'),
(30, 58, 'attention'),
(30, 66, 'requiring'),
(30, 67, 'technological'),
(30, 70, 'preference'),
(30, 79, 'responsibly'),
(30, 87, 'achievement'),
(30, 94, 'Biology'),
(30, 100, 'exploitative'),
(30, 106, 'seriousness'),
(34, 74, 'delimitation'),
(36, 78, 'recommender'),
(37, 22, 'of Som'),
(37, 66, 'requirement'),
(44, 6, 'you are having'),
(44, 66, 'requiring'),
(44, 68, 'selected'),
(44, 80, 'impression'),
(44, 101, 'fertilizers'),
(44, 107, 'peace'),
(44, 113, 'imagination'),
(46, 12, '0'),
(46, 29, '0'),
(46, 45, '0'),
(46, 67, '0'),
(46, 70, '0'),
(46, 79, '0'),
(46, 92, '0'),
(46, 105, '0'),
(46, 108, '0'),
(46, 110, '0'),
(48, 18, 'appreciate'),
(48, 29, '0'),
(48, 31, 'careless'),
(48, 34, '0'),
(48, 47, '0'),
(48, 65, '0'),
(48, 71, '0'),
(48, 93, '0'),
(48, 111, '0'),
(48, 114, '0'),
(51, 5, 'the two both his'),
(51, 16, 'broken'),
(51, 25, 'biology'),
(51, 28, 'solvability'),
(51, 44, 'romanticism'),
(51, 68, 'selection'),
(51, 86, 'inflate'),
(51, 88, 'developments'),
(51, 90, 'constant'),
(51, 100, 'exploit'),
(53, 12, 'Her house was not blue last week.'),
(53, 14, 'shall say'),
(53, 19, 'fewer'),
(53, 25, 'biologically'),
(53, 44, 'romanticizing'),
(53, 49, 'confused'),
(53, 66, 'requiring'),
(53, 68, 'selection'),
(53, 75, 'deciding'),
(53, 103, 'dangerously');

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `MAGIAOVIEN` int(11) NOT NULL,
  `TENGIAOVIEN` varchar(50) DEFAULT NULL,
  `DIACHI` varchar(255) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SODIENTHOAI` varchar(50) DEFAULT NULL,
  `QUOCTICH` varchar(40) NOT NULL,
  `ANHDAIDIEN` varchar(40) DEFAULT NULL,
  `MATKHAU` varchar(50) DEFAULT NULL,
  `TINHTRANG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`MAGIAOVIEN`, `TENGIAOVIEN`, `DIACHI`, `NGAYSINH`, `EMAIL`, `SODIENTHOAI`, `QUOCTICH`, `ANHDAIDIEN`, `MATKHAU`, `TINHTRANG`) VALUES
(11, 'Nguyễn Thái Hoài', '12 Tô Vĩnh Ký, Q.12, TP.HCM', '1999-12-01', 'hoa@gmail.com', '0987654321', 'vietnamese', 'avatar-384.jpg', '1234', 'Đang hoạt động'),
(12, 'Trần Văn Cường', '123 Đường ABC, TP.HCM', '1985-03-10', 'cuong.tran@gmail.com', '0978123456', 'Việt Nam', 'about68.jpg', '123456', 'Đang hoạt động'),
(13, 'Nguyễn Thị Hằng', '456 Đường XYZ, Hà Nội', '1987-08-18', 'hang.nguyen@gmail.com', '0989234567', 'Việt Nam', 'avatar-151.jpg', '123456', 'Đang hoạt động'),
(14, 'Lê Văn Tuấn', '789 Đường MNO, Đà Nẵng', '1990-01-25', 'tuan.le@gmail.com', '0967345678', 'Việt Nam', 'avatar-376.jpg', '123456', 'Đang hoạt động'),
(15, 'Lý Văn Hùng', '456 Đường QRS, Bắc Ninh', '2005-07-31', 'hung.ly@gmail.com', '0967345678', 'Việt Nam', 'avatar-474.jpg', '123456', 'Đang hoạt động'),
(16, 'Bùi Thị Loan', '789 Đường TUV, Hải Phòng', '2008-01-05', 'loan.bui@gmail.com', '0909876543', 'Việt Nam', 'avatar-518.jpg', '123456', 'Đang hoạt động'),
(17, 'Mai Văn Thắng', '987 Đường WXY, Nam Định', '2010-06-10', 'thang.mai@gmail.com', '0912345678', 'Việt Nam', 'avatar-60.jpg', '123456', 'Đang hoạt động'),
(18, 'Trần Văn Cường', '123 Đường ABC, TP.HCM', '1985-03-10', 'cuong.tran@gmail.com', '0978123456', 'Việt Nam', 'person-123.jpg', '123456', 'Đang hoạt động'),
(19, 'Nguyễn Thị Hằng', '456 Đường XYZ, Hà Nội', '1987-08-18', 'hang.nguyen@gmail.com', '0989234567', 'Việt Nam', 'person-246.jpg', '123456', 'Đang hoạt động'),
(20, 'Lê Văn Tuấn', '789 Đường MNO, Đà Nẵng', '1990-01-25', 'tuan.le@gmail.com', '0967345678', 'Việt Nam', 'person-354.jpg', '123456', 'Đang hoạt động'),
(21, 'Phạm Thị Thảo', '147 Đường KLM, Nha Trang', '1992-06-30', 'thao.pham@gmail.com', '0909876543', 'Việt Nam', 'about78.jpg', '123456', 'Đang hoạt động'),
(22, 'Hoàng Văn Hòa', '258 Đường DEF, Cần Thơ', '1995-11-05', 'hoa.hoang@gmail.com', '0912345678', 'Việt Nam', 'person-274.jpg', '123456', 'Đang hoạt động'),
(23, 'Mai Thị Anh', '369 Đường GHI, Vũng Tàu', '1998-04-12', 'anh.mai@gmail.com', '0987654321', 'Việt Nam', 'Upload/Teacher/anh.jpg', '123456', 'Active'),
(24, 'Trịnh Văn Bình', '159 Đường JKL, Huế', '2000-09-17', 'binh.trinh@gmail.com', '0978123456', 'Việt Nam', 'Upload/Teacher/binh.jpg', '123456', 'Active'),
(25, 'Nguyễn Thị Thủy', '357 Đường NOP, Quảng Ngãi', '2003-02-24', 'thuy.nguyen@gmail.com', '0989234567', 'Việt Nam', 'Upload/Teacher/thuy.jpg', '123456', 'Active'),
(26, 'Lý Văn Hùng', '456 Đường QRS, Bắc Ninh', '2005-07-31', 'hung.ly@gmail.com', '0967345678', 'Việt Nam', 'Upload/Teacher/hung.jpg', '123456', 'Active'),
(27, 'Bùi Thị Loan', '789 Đường TUV, Hải Phòng', '2008-01-05', 'loan.bui@gmail.com', '0909876543', 'Việt Nam', 'Upload/Teacher/loan.jpg', '123456', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE `hocvien` (
  `MAHOCVIEN` int(11) NOT NULL,
  `TENHOCVIEN` varchar(50) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SODIENTHOAI` varchar(50) DEFAULT NULL,
  `MATKHAU` varchar(50) DEFAULT NULL,
  `TINHTRANG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`MAHOCVIEN`, `TENHOCVIEN`, `NGAYSINH`, `EMAIL`, `SODIENTHOAI`, `MATKHAU`, `TINHTRANG`) VALUES
(3, 'ds', '2023-11-13', 'buivant1710@gmail.com', '567567', '1234', 'Đang sử dụng'),
(4, 'ds', '2023-11-13', 'buivant1710@gmail.com', '567567', '1234', 'Đang sử dụng'),
(5, 'Nguyễn Quốc Bảo', '2023-12-05', 'bao@gmail.com', '0987654321', '123', 'Đang hoat động'),
(26, 'Phan Thị Bình', '1995-02-28', 'binh.phan@gmail.com', '0978123456', '123456', 'Đang hoạt động'),
(27, 'Vũ Đức Thịnh', '1995-07-15', 'thinh.vu@gmail.com', '0989234567', '123456', 'Đang hoạt động'),
(28, 'Trần Thị Hồng', '1995-12-22', 'hong.tran@gmail.com', '0967345678', '123456', 'Đang hoạt động'),
(29, 'Lê Thị Tuyết', '1996-05-05', 'tuyet.le@gmail.com', '0909876543', '123456', 'Đang hoạt động'),
(30, 'Nguyễn Văn Tuấn', '1996-10-10', 'tuan.nguyen@gmail.com', '0912345678', '123456', 'Đang hoạt động'),
(31, 'Mai Thị Lan', '1997-03-18', 'lan.mai@gmail.com', '0987654321', '123456', 'Đang hoạt động'),
(32, 'Đỗ Văn Hải', '1997-08-25', 'hai.do@gmail.com', '0978123456', '123456', 'Đang hoạt động'),
(33, 'Phạm Thị Quỳnh Anh', '1998-01-30', 'anh.pham@gmail.com', '0989234567', '123456', 'Đang hoạt động'),
(34, 'Lý Thị Thanh', '1998-06-07', 'thanh.ly@gmail.com', '0967345678', '123456', 'Đang hoạt động'),
(35, 'Chu Văn Tú', '1998-11-15', 'tu.chu@gmail.com', '0909876543', '123456', 'Đang hoạt động'),
(36, 'Mai Thị Diệu Linh', '1999-04-22', 'linh.mai@gmail.com', '0912345678', '123456', 'Đang hoạt động'),
(37, 'Vũ Thị Mai Anh', '1999-09-29', 'anh.vu@gmail.com', '0987654321', '123456', 'Đang hoạt động'),
(38, 'Trần Văn Quang', '2000-03-05', 'quang.tran@gmail.com', '0978123456', '123456', 'Đang hoạt động'),
(39, 'Lê Thị Hương', '2000-08-12', 'huong.le@gmail.com', '0989234567', '123456', 'Đang hoạt động'),
(40, 'Nguyễn Văn Hoàng', '2000-12-18', 'hoang.nguyen@gmail.com', '0967345678', '123456', 'Đang hoạt động'),
(41, 'Phan Thị Trang', '2001-05-25', 'trang.phan@gmail.com', '0909876543', '123456', 'Đang hoạt động'),
(42, 'Đỗ Thị Hà', '2001-10-01', 'ha.do@gmail.com', '0912345678', '123456', 'Đang hoạt động'),
(43, 'Trịnh Văn Duy', '2002-03-10', 'duy.trinh@gmail.com', '0987654321', '123456', 'Đang hoạt động'),
(44, 'Hoàng Thị Ngọc', '2002-08-15', 'ngoc.hoang@gmail.com', '0978123456', '123456', 'Đang hoạt động'),
(45, 'Lương Văn Khánh', '2002-12-22', 'khanh.luong@gmail.com', '0989234567', '123456', 'Đang hoạt động'),
(46, 'Phạm Thị Hương Giang', '2003-05-01', 'giang.pham@gmail.com', '0967345678', '123456', 'Đang hoạt động'),
(47, 'Nguyễn Văn Tùng', '2003-10-08', 'tung.nguyen@gmail.com', '0909876543', '123456', 'Đang hoạt động'),
(48, 'Bùi Thị Lan Anh', '2004-03-15', 'anh.bui@gmail.com', '0912345678', '123456', 'Đang hoạt động'),
(49, 'Lê Văn Khánh', '2004-08-22', 'khanh.le@gmail.com', '0987654321', '123456', 'Đang hoạt động'),
(50, 'Phan Thị Ngọc Ánh', '2005-01-29', 'anh.phan@gmail.com', '0978123456', '123456', 'Đang hoạt động'),
(51, 'Dương Văn Hòa', '2005-07-07', 'hoa.duong@gmail.com', '0989234567', '123456', 'Đang hoạt động'),
(52, 'Trần Thị Thảo', '2005-12-14', 'thao.tran@gmail.com', '0967345678', '123456', 'Đang hoạt động'),
(53, 'Mai Văn Bình', '2006-05-21', 'binh.mai@gmail.com', '0909876543', '123456', 'Đang hoạt động'),
(54, 'Đỗ Thị Hồng', '2006-10-28', 'hong.do@gmail.com', '0912345678', '123456', 'Đang hoạt động'),
(55, 'Lý Văn Đại', '2007-04-06', 'dai.ly@gmail.com', '0987654321', '123456', 'Đang hoạt động'),
(56, 'Nguyễn Thị Thu Hà', '2007-09-13', 'ha.nguyen@gmail.com', '0978123456', '123456', 'Đang hoạt động'),
(57, 'Phạm Văn Hùng', '2008-02-19', 'hung.pham@gmail.com', '0989234567', '123456', 'Đang hoạt động'),
(58, 'Trần Thị Hương', '2008-07-28', 'huong.tran@gmail.com', '0967345678', '123456', 'Đang hoạt động'),
(59, 'Lê Văn Đăng', '2009-01-04', 'dang.le@gmail.com', '0909876543', '123456', 'Đang hoạt động'),
(60, 'Mai Thị Dung', '2009-06-13', 'dung.mai@gmail.com', '0912345678', '123456', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `hocvienthoclophoc`
--

CREATE TABLE `hocvienthoclophoc` (
  `MAHOCVIEN` int(11) NOT NULL,
  `MALOPHOC` int(11) NOT NULL,
  `MAKHOAHOC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hocvienthoclophoc`
--

INSERT INTO `hocvienthoclophoc` (`MAHOCVIEN`, `MALOPHOC`, `MAKHOAHOC`) VALUES
(5, 12, 9),
(5, 15, 9),
(5, 17, 9),
(5, 18, 9),
(5, 19, 9);

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MAKHOAHOC` int(11) NOT NULL,
  `TENKHOAHOC` varchar(255) DEFAULT NULL,
  `GIAKHOAHOC` float DEFAULT NULL,
  `MOTA` varchar(255) DEFAULT NULL,
  `THOILUONG` varchar(20) DEFAULT NULL,
  `TRANGTHAI` varchar(40) DEFAULT NULL,
  `ANHKHOAHOC` varchar(100) DEFAULT NULL,
  `LOAIKHOAHOC` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`MAKHOAHOC`, `TENKHOAHOC`, `GIAKHOAHOC`, `MOTA`, `THOILUONG`, `TRANGTHAI`, `ANHKHOAHOC`, `LOAIKHOAHOC`) VALUES
(9, 'IELTS - Foundation', 1000000, 'Dành cho những học viên mất gốc hoàn toàn hoặc mới bắt đầu tiếp cận với tiếng Anh xây dựng nền tảng vững chắc kiến thức.', '6 tháng', 'Hiện', '94d89481-2ec0-4e5c-a8ea-d99956276ea856.jpg', 'Ielts'),
(10, 'IELTS - Initial', 2000000, 'Dành cho học viên có nền tảng cơ bản, ngữ pháp khá, từ vựng hạn chế, nghe, đọc, nói và viết chưa đủ kỹ năng.', '6 tháng', 'Hiện', 'eac900e1-ba33-4a61-ae06-85a9a7c5bc2289.jpg', 'Ielts'),
(11, 'IELTS - Intermediate', 3000000, 'Dành cho học viên có kiến thức vững ở trình độ 4.5, đã có tư duy học IELTS, từ vựng và ngữ pháp khá, kĩ năng viết và nói trung bình.', '6 tháng', 'Hiện', 'content-writer-187.jpg', 'Ielts'),
(12, 'IELTS - Ultimate', 4000000, 'Dành cho học viên có kiến thức vững vàng ở trình độ 6.0, khả năng từ vựng và ngữ pháp tốt, đã thực hành ôn luyện đề thi IELTS.', '6 tháng', 'Hiện', 'image_870x_64fc386a296eb91.jpg', 'Ielts'),
(13, 'TOEIC - Foundation', 1000000, 'Dành cho những học viên mất gốc hoàn toàn hoặc mới bắt đầu tiếp cận với tiếng Anh xây dựng nền tảng vững chắc kiến thức.', '30 ngày', 'Hiện', 'chung-chi-toeic-nhung-thong-tin-ban-can-biet12.jpg', 'Toiec'),
(14, 'TOEIC - Initial', 2000000, 'Dành cho học viên có nền tảng cơ bản, ngữ pháp khá, từ vựng hạn chế, nghe, đọc, nói và viết chưa đủ kỹ năng.', '30 ngày', 'Hiện', 'logo-TOEIC-217.jpg', 'Toiec'),
(15, 'TOEIC - Intermediate', 2000000, 'Dành cho học viên có khả năng sử dụng tiếng Anh trong các tình huống giao tiếp nhưng hạn chế.', '30 ngày', 'Hiện', 'Toeic65.jpg', 'Toiec');

-- --------------------------------------------------------

--
-- Table structure for table `khoahocchitiet`
--

CREATE TABLE `khoahocchitiet` (
  `MAKHOAHOC` int(11) NOT NULL,
  `DOITUONG` text DEFAULT NULL,
  `THOILUONGKHOAHOC` text DEFAULT NULL,
  `MUCTIEU` text DEFAULT NULL,
  `NOIDUNG` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khoahocchitiet`
--

INSERT INTO `khoahocchitiet` (`MAKHOAHOC`, `DOITUONG`, `THOILUONGKHOAHOC`, `MUCTIEU`, `NOIDUNG`) VALUES
(9, 'Dành cho học viên mất gốc hoàn toàn, mới bắt đầu học Tiếng Anh.', ' 40 buổi (2 buổi/ tuần trong 5 tháng).', 'Củng cố nền tảng ngữ pháp và trau dồi từ vựng, bước đầu làm quen với\r\n              phát âm.', 'Cách sử dụng 6 thì tiếng Anh cơ bản thường dùng.\r\nCách viết câu đơn, câu tiếng anh ngắn và vận dụng vào văn nói/viết.\r\nPhân biệt danh từ, động từ, tính từ, trạng từ và các quy tắc trật từ tự từ trong câu.\r\nLuyện đọc các bài viết tiếng anh đơn giản, đọc hiểu-đoán nghĩa.\r\nTập làm quen các dạng bài tập về nối từ, viết từ cơ bản, chọn trắc nghiệm.\r\nTập nghe qua các bài nói ngắn.\r\nDạng bài tập liên quan đến đánh vần, số thứ tự, số đếm…\r\nTập trung làm quen phát âm (nguyên âm, phụ âm) và những lỗi sai học sinh hay gặp.\r\nCách phát âm của 44 âm IPA (International Phonetic Alphabet), gồm có 20 (vowel sounds) và 24 phụ âm (consonant sounds).\r\nPhương pháp Shadowing.\r\nPhát triển tư duy khi trả lời câu hỏi Speaking part 1.');

-- --------------------------------------------------------

--
-- Table structure for table `lichhoccualop`
--

CREATE TABLE `lichhoccualop` (
  `MALICHHOC` int(11) NOT NULL,
  `MAKHOAHOC` int(11) NOT NULL,
  `MALOPHOC` int(11) DEFAULT NULL,
  `THU` varchar(30) DEFAULT NULL,
  `GIOBATDAU` time DEFAULT NULL,
  `GIOKETTHUC` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lichhoccualop`
--

INSERT INTO `lichhoccualop` (`MALICHHOC`, `MAKHOAHOC`, `MALOPHOC`, `THU`, `GIOBATDAU`, `GIOKETTHUC`) VALUES
(3, 9, 12, 'Thứ hai', '17:00:00', '19:00:00'),
(5, 9, 13, 'Thứ hai', '19:00:00', '21:00:00'),
(6, 9, 14, 'Thứ ba', '19:00:00', '21:00:00'),
(7, 9, 15, 'Thứ năm', '17:00:00', '19:00:00'),
(8, 9, 12, 'Thứ tư', '17:00:00', '19:00:00'),
(9, 10, 20, 'Thứ hai', '17:00:00', '19:00:00'),
(10, 10, 20, 'Thứ tư', '17:00:00', '19:00:00'),
(11, 10, 22, 'Thứ ba', '17:00:00', '19:00:00'),
(12, 10, 22, 'Thứ năm', '17:00:00', '19:00:00'),
(13, 12, 24, 'Thứ hai', '17:00:00', '19:00:00'),
(14, 12, 24, 'Thứ tư', '17:00:00', '19:00:00'),
(15, 10, 21, 'Thứ hai', '19:00:00', '21:00:00'),
(16, 10, 21, 'Thứ tư', '19:00:00', '21:00:00'),
(17, 12, 25, 'Thứ hai', '19:00:00', '21:00:00'),
(18, 12, 25, 'Thứ tư', '19:00:00', '21:00:00'),
(19, 11, 25, 'Thứ hai', '19:00:00', '21:00:00'),
(20, 11, 25, 'Thứ tư', '19:00:00', '21:00:00'),
(21, 13, 12, 'Thứ hai', '17:00:00', '00:00:19'),
(22, 13, 28, 'Thứ tư', '17:00:00', '19:00:00'),
(23, 13, 29, 'Thứ hai', '19:00:00', '21:00:00'),
(24, 13, 29, 'Thứ tư', '19:00:00', '21:00:00'),
(25, 14, 21, 'Thứ hai', '19:00:00', '21:00:00'),
(26, 14, 21, 'Thứ tư', '19:00:00', '21:00:00'),
(27, 14, 30, 'Thứ hai', '17:00:00', '19:00:00'),
(28, 14, 20, 'Thứ tư', '17:00:00', '19:00:00'),
(29, 15, 32, 'Thứ hai', '17:00:00', '19:00:00'),
(30, 15, 32, 'Thứ tư', '17:00:00', '19:00:00'),
(31, 15, 33, 'Thứ hai', '19:00:00', '21:00:00'),
(32, 15, 33, 'Thứ tư', '19:00:00', '21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `MALOPHOC` int(11) NOT NULL,
  `TENLOPHOC` varchar(255) DEFAULT NULL,
  `THOIGIANBATDAU` date DEFAULT NULL,
  `THOIGIANKETTHUC` date DEFAULT NULL,
  `MAGIAOVIEN` int(11) DEFAULT NULL,
  `MAKHOAHOC` int(11) DEFAULT NULL,
  `TINHTRANGLOPHOC` varchar(40) DEFAULT NULL,
  `SISO` int(11) DEFAULT NULL,
  `SOLUONGHIENTAI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`MALOPHOC`, `TENLOPHOC`, `THOIGIANBATDAU`, `THOIGIANKETTHUC`, `MAGIAOVIEN`, `MAKHOAHOC`, `TINHTRANGLOPHOC`, `SISO`, `SOLUONGHIENTAI`) VALUES
(12, 'Ielts_Foundation_2_4_c1', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 0),
(13, 'Ielts_Foundation_2_4_c2', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 0),
(14, 'Ielts_Foundation_3_5_c2', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 0),
(15, 'Ielts_Foundation_3_5_c1', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 0),
(16, 'Ielts_Foundation_4_6_c1', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 0),
(17, 'Ielts_Foundation_4_6_c2', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 1),
(18, 'Ielts_Foundation_5_7_c1', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 1),
(19, 'Ielts_Foundation_5_7_c2', '2023-12-14', '2024-02-06', 11, 9, 'Đang hoạt động', 50, 1),
(20, 'Ielts_Initial_2_4_c1', '2024-01-07', '2024-02-29', 27, 10, 'Chưa bắt đầu', 50, 0),
(21, 'Ielts_Initial_2_4_c2', '2024-01-07', '2024-02-29', 27, 10, 'Chưa bắt đầu', 50, 0),
(22, 'Ielts_Initial_3_5_c1', '2024-01-07', '2024-02-29', 12, 10, 'Chưa bắt đầu', 50, 0),
(23, 'Ielts_Initial_3_5_c2', '2024-01-07', '2024-02-29', 27, 10, 'Chưa bắt đầu', 50, 0),
(24, 'Ielts_Untimate_2_4_c1', '2024-01-07', '2024-02-29', 27, 12, 'Chưa bắt đầu', 50, 0),
(25, 'Ielts_Untimate_2_4_c2', '2024-01-07', '2024-02-29', 24, 12, 'Chưa bắt đầu', 50, 0),
(26, 'Ielts_Intermadiate_2_4_c1', '2024-01-07', '2024-02-29', 27, 11, 'Chưa bắt đầu', 50, 0),
(27, 'Ielts_Inermediate_2_4_c2', '2024-01-07', '2024-02-29', 27, 11, 'Chưa bắt đầu', 50, 0),
(28, 'Toiec_Foundation_2_4_c1', '2024-01-04', '2024-02-29', 12, 9, 'ADD', 50, 0),
(29, 'Toiec_Foundation_2_4_c2', '2024-01-04', '2024-03-01', 21, 9, 'add', 50, 0),
(30, 'Toeic_Initial_2_4_c1', '2024-01-04', '2024-03-14', 27, 14, 'ghhj', 50, 0),
(31, 'Toeic_Initial_2_4_c2', '2024-01-04', '2024-02-21', 17, 14, 'ád', 50, 0),
(32, 'Toeic_Intermediate_2_4_c1', '2024-01-04', '2024-01-31', 15, 15, 'ad', 50, 0),
(33, 'Toeic_Intermediate_2_4_c2', '2024-01-05', '2024-01-31', 14, 15, '2sa', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quantrivien`
--

CREATE TABLE `quantrivien` (
  `MAQUANTRIVIEN` int(11) NOT NULL,
  `TAIKHOAN` varchar(40) DEFAULT NULL,
  `MATKHAU` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quantrivien`
--

INSERT INTO `quantrivien` (`MAQUANTRIVIEN`, `TAIKHOAN`, `MATKHAU`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `solanthi`
--

CREATE TABLE `solanthi` (
  `MALANTHI` int(11) NOT NULL,
  `MAHOCVIEN` int(11) DEFAULT NULL,
  `SOCAUDUNG` int(11) NOT NULL,
  `NGAYTHI` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solanthi`
--

INSERT INTO `solanthi` (`MALANTHI`, `MAHOCVIEN`, `SOCAUDUNG`, `NGAYTHI`) VALUES
(19, 3, 0, NULL),
(20, 3, 0, NULL),
(21, 3, 0, NULL),
(22, 3, 0, NULL),
(23, 3, 0, NULL),
(24, 3, 0, NULL),
(25, 3, 0, NULL),
(26, 3, 1, NULL),
(27, 3, 2, NULL),
(28, 5, 0, NULL),
(29, 5, 0, NULL),
(30, 5, 5, NULL),
(31, 5, 0, NULL),
(32, 5, 0, NULL),
(33, 5, 0, NULL),
(34, 5, 0, '2023-12-30'),
(35, 5, 0, '2023-12-30'),
(36, 5, 0, '2023-12-30'),
(37, 5, 0, '2023-12-30'),
(38, 5, 0, '2023-12-30'),
(39, 5, 0, '2023-12-30'),
(40, 5, 0, '2023-12-30'),
(41, 5, 0, '2023-12-30'),
(42, 5, 0, '2023-12-30'),
(43, 5, 0, '2023-12-30'),
(44, 5, 2, '2023-12-30'),
(45, 5, 0, '2023-12-30'),
(46, 5, 0, '2023-12-30'),
(47, 5, 0, '2023-12-30'),
(48, 5, 1, '2023-12-30'),
(49, 5, 0, '2023-12-30'),
(50, 5, 0, '2024-01-04'),
(51, 5, 5, '2024-01-04'),
(52, 5, 0, '2024-01-04'),
(53, 5, 2, '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `MATHANHTOAN` int(11) NOT NULL,
  `MAHOCVIEN` int(11) DEFAULT NULL,
  `MAKHOAHOC` int(11) DEFAULT NULL,
  `MALOPHOC` int(11) DEFAULT NULL,
  `GIATIEN` float DEFAULT NULL,
  `NGAYTHANHTOAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`MATHANHTOAN`, `MAHOCVIEN`, `MAKHOAHOC`, `MALOPHOC`, `GIATIEN`, `NGAYTHANHTOAN`) VALUES
(3, 5, 9, 15, 1000000, NULL),
(4, 5, 9, 12, 1000000, NULL),
(5, 5, 9, 19, 1000000, '2024-01-03'),
(6, 5, 9, 18, 1000000, '2024-01-03'),
(7, 5, 9, 17, 1000000, '2024-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinlophoc`
--

CREATE TABLE `thongtinlophoc` (
  `MATHONGTIN` int(11) NOT NULL,
  `TIEUDE` text DEFAULT NULL,
  `NOIDUNG` text DEFAULT NULL,
  `TEPDINHKEM` varchar(100) DEFAULT NULL,
  `NGAYTHONGBAO` date DEFAULT NULL,
  `MALOPHOC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongtinlophoc`
--

INSERT INTO `thongtinlophoc` (`MATHONGTIN`, `TIEUDE`, `NOIDUNG`, `TEPDINHKEM`, `NGAYTHONGBAO`, `MALOPHOC`) VALUES
(1, NULL, NULL, '', '2023-12-31', NULL),
(2, NULL, NULL, '', '2023-12-31', NULL),
(3, NULL, NULL, '', '2023-12-31', 12),
(4, 'acbd', '<p>sd</p>', 'CuoiKy_2021_IS20720.pdf', '2023-12-31', 12),
(5, NULL, NULL, '', '2023-12-31', 12),
(6, NULL, NULL, '', '2023-12-31', 12),
(7, 'thông báo học bù ngày 20.310', '<p>vì lý dfo</p>', 'Bootstrap_V179.pdf', '2023-12-31', 12),
(12, 'thông báo học bù ngày 20.310', '<p>ádasd</p>', '', '2023-12-31', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buoihoc`
--
ALTER TABLE `buoihoc`
  ADD PRIMARY KEY (`MABUOIHOC`),
  ADD KEY `fk_bh_lh` (`MALOPHOC`);

--
-- Indexes for table `cauhoithithu`
--
ALTER TABLE `cauhoithithu`
  ADD PRIMARY KEY (`MACAUHOI`);

--
-- Indexes for table `cautraloi`
--
ALTER TABLE `cautraloi`
  ADD PRIMARY KEY (`MALANTHI`,`MACAUHOI`),
  ADD KEY `fk_tl_slt` (`MACAUHOI`);

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`MAGIAOVIEN`);

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`MAHOCVIEN`);

--
-- Indexes for table `hocvienthoclophoc`
--
ALTER TABLE `hocvienthoclophoc`
  ADD PRIMARY KEY (`MAHOCVIEN`,`MALOPHOC`,`MAKHOAHOC`),
  ADD KEY `fk_hvl_lophoc` (`MALOPHOC`),
  ADD KEY `fk_hvl_khoahoc` (`MAKHOAHOC`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MAKHOAHOC`);

--
-- Indexes for table `khoahocchitiet`
--
ALTER TABLE `khoahocchitiet`
  ADD PRIMARY KEY (`MAKHOAHOC`);

--
-- Indexes for table `lichhoccualop`
--
ALTER TABLE `lichhoccualop`
  ADD PRIMARY KEY (`MALICHHOC`),
  ADD KEY `fk_lich_lh` (`MALOPHOC`),
  ADD KEY `fk_lich_kh` (`MAKHOAHOC`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MALOPHOC`),
  ADD KEY `fk_lophoc_giaovien` (`MAGIAOVIEN`),
  ADD KEY `fk_lophoc_khoahoc` (`MAKHOAHOC`);

--
-- Indexes for table `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`MAQUANTRIVIEN`);

--
-- Indexes for table `solanthi`
--
ALTER TABLE `solanthi`
  ADD PRIMARY KEY (`MALANTHI`),
  ADD KEY `fk_slt_hv` (`MAHOCVIEN`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`MATHANHTOAN`),
  ADD KEY `fk_tt_hv` (`MAHOCVIEN`),
  ADD KEY `fk_tt_lh` (`MALOPHOC`),
  ADD KEY `fk_tt_kh` (`MAKHOAHOC`);

--
-- Indexes for table `thongtinlophoc`
--
ALTER TABLE `thongtinlophoc`
  ADD PRIMARY KEY (`MATHONGTIN`),
  ADD KEY `fk_ttlh_lh` (`MALOPHOC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buoihoc`
--
ALTER TABLE `buoihoc`
  MODIFY `MABUOIHOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cauhoithithu`
--
ALTER TABLE `cauhoithithu`
  MODIFY `MACAUHOI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `MAGIAOVIEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `MAHOCVIEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `MAKHOAHOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lichhoccualop`
--
ALTER TABLE `lichhoccualop`
  MODIFY `MALICHHOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `MALOPHOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `solanthi`
--
ALTER TABLE `solanthi`
  MODIFY `MALANTHI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `MATHANHTOAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `thongtinlophoc`
--
ALTER TABLE `thongtinlophoc`
  MODIFY `MATHONGTIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buoihoc`
--
ALTER TABLE `buoihoc`
  ADD CONSTRAINT `fk_bh_lh` FOREIGN KEY (`MALOPHOC`) REFERENCES `lophoc` (`MALOPHOC`);

--
-- Constraints for table `cautraloi`
--
ALTER TABLE `cautraloi`
  ADD CONSTRAINT `fk_tl_ch` FOREIGN KEY (`MALANTHI`) REFERENCES `solanthi` (`MALANTHI`),
  ADD CONSTRAINT `fk_tl_slt` FOREIGN KEY (`MACAUHOI`) REFERENCES `cauhoithithu` (`MACAUHOI`);

--
-- Constraints for table `hocvienthoclophoc`
--
ALTER TABLE `hocvienthoclophoc`
  ADD CONSTRAINT `fk_hvl_hocvien` FOREIGN KEY (`MAHOCVIEN`) REFERENCES `hocvien` (`MAHOCVIEN`),
  ADD CONSTRAINT `fk_hvl_khoahoc` FOREIGN KEY (`MAKHOAHOC`) REFERENCES `khoahoc` (`MAKHOAHOC`),
  ADD CONSTRAINT `fk_hvl_lophoc` FOREIGN KEY (`MALOPHOC`) REFERENCES `lophoc` (`MALOPHOC`);

--
-- Constraints for table `khoahocchitiet`
--
ALTER TABLE `khoahocchitiet`
  ADD CONSTRAINT `fk_mota_khoahoc` FOREIGN KEY (`MAKHOAHOC`) REFERENCES `khoahoc` (`MAKHOAHOC`);

--
-- Constraints for table `lichhoccualop`
--
ALTER TABLE `lichhoccualop`
  ADD CONSTRAINT `fk_lich_kh` FOREIGN KEY (`MAKHOAHOC`) REFERENCES `khoahoc` (`MAKHOAHOC`),
  ADD CONSTRAINT `fk_lich_lh` FOREIGN KEY (`MALOPHOC`) REFERENCES `lophoc` (`MALOPHOC`);

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `fk_lophoc_giaovien` FOREIGN KEY (`MAGIAOVIEN`) REFERENCES `giaovien` (`MAGIAOVIEN`),
  ADD CONSTRAINT `fk_lophoc_khoahoc` FOREIGN KEY (`MAKHOAHOC`) REFERENCES `khoahoc` (`MAKHOAHOC`);

--
-- Constraints for table `solanthi`
--
ALTER TABLE `solanthi`
  ADD CONSTRAINT `fk_slt_hv` FOREIGN KEY (`MAHOCVIEN`) REFERENCES `hocvien` (`MAHOCVIEN`);

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `fk_tt_hv` FOREIGN KEY (`MAHOCVIEN`) REFERENCES `hocvien` (`MAHOCVIEN`),
  ADD CONSTRAINT `fk_tt_kh` FOREIGN KEY (`MAKHOAHOC`) REFERENCES `khoahoc` (`MAKHOAHOC`),
  ADD CONSTRAINT `fk_tt_lh` FOREIGN KEY (`MALOPHOC`) REFERENCES `lophoc` (`MALOPHOC`);

--
-- Constraints for table `thongtinlophoc`
--
ALTER TABLE `thongtinlophoc`
  ADD CONSTRAINT `fk_ttlh_lh` FOREIGN KEY (`MALOPHOC`) REFERENCES `lophoc` (`MALOPHOC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
