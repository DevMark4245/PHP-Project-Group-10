-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 04:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_info`
--

CREATE TABLE `college_info` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `college_location` varchar(300) NOT NULL,
  `college_type` varchar(50) NOT NULL,
  `college_desc` varchar(1000) NOT NULL,
  `college_info` varchar(10000) NOT NULL,
  `college_courses` varchar(1000) NOT NULL,
  `college_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_info`
--

INSERT INTO `college_info` (`college_id`, `college_name`, `college_location`, `college_type`, `college_desc`, `college_info`, `college_courses`, `college_image`) VALUES
(1, 'INTI International College Penang', 'Bayan Lepas, Penang', 'Private', 'INTI International University & Colleges are currently well respected and recognised names in the private higher education industry in Malaysia. Studying here, you will be able to find a true balance between academics and the arts as INTI provides you with various opportunities and platforms to shine.', 'Facilities in INTI International College Penang include: Teaching & Learning Facilities, Library, Design lab, Academic consultation cubicle, Engineering lab, Science lab, Lecture theatres and classrooms, Group Study Cubicle, Computing Facilities, Campus-wide WiFi coverage, Cyber Circle or the Round Table, Facilities for Muslim Students, Surau, Halal food, Leisure Facilities, Convenience stores, Cafeteria and lobby, INTI International College Penang is located amidst beautiful parkland settings within the Bukit Jambul educational township. ', 'Accounting Finance, Computer Science IT, Engineering, Hotel Management Hospitality, Mass Communication Media, Business Management', 'assets\\image\\colleges\\inti.png'),
(2, 'Taylor\'s College', 'Kuala Lumpur, WP Kuala Lumpur', 'Private ', 'Since its inception in 1969, Taylor\'s College is an established and leading international tertiary college which has contributed much to the national public benefit over the last five decades. The high standing that is a feature of Taylor\'s College has been built on its reputation for excellent teaching and the overall experience it provides to its students. Taylor\'s College continues its heritage of excellence through its expanded stable of programmes; inoffering students quality education through Foundation and Diploma programmes as well as professional programmes such as the Certified Accounting Technician (CAT) and Association of Chartered Certified Accountants(ACCA) papers. Taylor\'s College aims to produce well-equipped leaders with the necessary capabilities to start and stay ahead as they progress into university and subsequently in their career', 'Taylor\'s College encompasses a modern, functional design with state-of-the-art facilities together with lush greenery and its trademark 5.5 acre lake; striking a balance between form and function to embody Taylor\'s University\'s modern approach and perspective in premium education with an approach to holistic growth outside the classroom.Surrounding the serene lake are buildings that house the academic wings and the commercial annexes that comprise of wide and spacious corridors, pleasing and rich landscapes and all in all, a sustainable and conducive environment for education. Besides, being visually comforting and naturally soothing, the overall design also enhances the air quality, both indoor and outdoor.Located in the urban areas of Subang Jaya, the Taylor\'s Lakeside University Campus serve as a central hub for students, with well-equipped facilities and a conducive study environment. Just 30 minutes away from the nation\'s capital city, Kuala Lumpur, Subang Jaya is linked by highways and well-connected to neighbouring townships of Bandar Sunway, Petaling Jaya, Shah Alam and Klang. On the other hand, the Sri Hartamas campus is just 10 minutes away from the capital city, Kuala Lumpur and neighbouring township, Petaling Jaya. ', 'Biology Chemistry Physics, Hospitality, Tourism, Business Management, Art Design, Engineering', 'assets\\image\\colleges\\taylors.jpg'),
(3, 'KDU University College - Penang Campus', 'Georgetown, Penang', 'Private', 'KDU College Penang is an integral part of Paramount Education, a pioneer in private tertiary education in Malaysia since 1983. Paramount Education offers the full spectrum of education services and today, is recognised for its high-quality, good-value education with an ethos of letting every student shine.\r\n\r\nKDU College Penang offers various internationally recognised industry-driven academic programmes, from Certificate to Diploma and Degree levels. All the programmes are affiliated with top universities from around the world including Keele University and Northumbria University from United Kingdom and Swiss IMI, Switzerland.\r\n\r\nSince its establishment in 1991, KDU College Penang has produced more than 18,000 alumni from 64 countries around the world. ', 'KDU College Penang was established in 1991 in the historic Old Town Hall. In 1997, it moved to a RM20-million purpose-built campus in Jalan Anson because of the growth in the student\'s population. It is equipped with the best facilities, which includes industry-standard kitchens, recording studio, art gallery, design studios, engineering laboratories, computing design laboratories, boardroom and lounge, mock-up hotel suite and restaurants. The campus is also Wi-Fi enabled. There are also spaces for relaxing and casual discussions. There is also a gym, pool table and cafeteria serving hot food, snacks and beverages.\r\n\r\nKDU College Penang is located strategically in the heart of George Town that is easily accessible. It is only a walking distance to various conveniences such as dining outlets, hypermarket and hospitals. ', 'Accounting & Finance\r\nBusiness, Management\r\nComputer Science, IT\r\nEngineering\r\nMass Communication & Media\r\n', 'assets\\image\\colleges\\kdu.png'),
(4, 'Sunway College Ipoh', 'Ipoh, Perak', 'Private', 'Sunway College Ipoh offers an interesting learning experience which helps students discover their hidden talents. Sunway College Ipoh is part of the Sunway Education Group which is owned by the Jeffrey Cheah Foundation. Sunway College has provided half million Ringit Malaysia in scholarships to ensure quality education as a priority.  You will receive help in achieving succes and overreaching your expectations by offering students the finest and quality learning environments. Sunway College offers wide-ranging professional and diploma programmes with interesting courses. The qualified lecturers bring work-related and practical examples into the classroom. The course materialss change along with industrial and business changes and trends to offer students an enjoyable and effective learning environment. ', 'Sunway College Ipoh offers good learning facilities. Sunway College Ipoh is located in Tambun, Ipoh City. The College is equipped with academic and hostel facilities. Assistance and guidance is also offered through the Student Affairs and Administration departments. Facilities offered at Sunway College Ipoh include:SCI LibraryStudent HostelFree Parking AreaApple-Mac Computer Lab Multipurpose HallDiscussion RoomSurauCounselorsArt Gallery/StudioBadminton & Futsal Court', 'Science, Technology, Culinary, Mass Communication, Business Account, Finance', 'assets\\image\\colleges\\sunway.jpg'),
(5, 'Universiti Tunku Abdul Rahman (UTAR)', 'Kampar, Perak', 'Private', 'Universiti Tunku Abdul Rahman (UTAR) was officially launched on 13 August 2002 as a not-for-profit private university providing affordable quality education. It is established under the UTAR Education Foundation and registered under the Malaysian Private Higher Educational Institutions Act 1996.\r\n\r\nGuided by its vision to be a global university of educational excellence, UTAR is highly reputed as one of the fastest growing private higher education institutions in the country with phenomenal growth in all aspects of its development since its inception. With the first intake of only 411 students in its Petaling Jaya campus in 2002, the University\'s enrolment has now reached 24,000 students with campuses located in Kampar, Perak and Bandar Sungai Long, Selangor.', 'The Kampar Campus in the state of Perak is conveniently located off the North-South Highway, a 190-kilometres or 2-hour drive from Kuala Lumpur. Known as a former tin mining town, Kampar is a district within Perak\'s Kinta Valley, which is historically rich with tin reserves. Today, Kampar is a bustling education hub following the establishment of the Kampar Campus.\r\n\r\nThe award-winning Kampar Campus is flanked by picturesque mountains and scenic lakes, offering a naturally peaceful environment that is conducive for learning teaching and research.', 'Biology Chemistry Physics, Business Account, Finance, Agricultral Science, Logistic, Mathematics, Medical', 'assets\\image\\colleges\\utar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `Course_type` text NOT NULL,
  `Course_name` text NOT NULL,
  `Course_qual` text NOT NULL,
  `Course_mode` text NOT NULL,
  `Course_duration` text NOT NULL,
  `Course_fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `college_id`, `Course_type`, `Course_name`, `Course_qual`, `Course_mode`, `Course_duration`, `Course_fee`) VALUES
(1, 1, 'Accounting & Finance', 'Diploma in Finance', 'Diploma', 'Full-time', '2 years', 'RM 31,325'),
(2, 1, 'Computer Science, IT ', 'Diploma in Information Technology', 'Diploma', 'Full-time', '2 year', 'RM 35,885'),
(3, 1, 'Engineering', 'Bachelor of Engineering (Hons) - Electrical & Electronic Engineering [3+0] in collaboration with Coventry University, UK', 'Bachelor\'s Degree', 'Full-time', '3 years', 'RM 68,915'),
(4, 1, 'Hotel Management & Hospitality', 'Diploma in Culinary Arts', 'Diploma', 'Full-time', '2 years', 'RM 42,745'),
(5, 1, 'Mass Communication & Media ', 'Diploma in Mass Communication', 'Diploma', 'Full-time', '2 years', 'RM 32,820'),
(6, 1, 'Business, Management', 'Bachelor of Commerce in Collaboration with the University of Wollongong (UOW), Australia', 'Bachelor\'s Degree', 'Full-time', '3 years', 'RM 66,460'),
(7, 3, 'Accounting & Finance', 'Diploma in Accounting', 'Diploma', 'Full-time', '2 years', 'RM 30,600'),
(8, 3, 'Business, Management', 'Diploma in Business', 'Diploma', 'Full-time', '2 years', 'RM 30,300'),
(9, 3, 'Computer Science, IT ', 'Foundation in Science', 'Foundation / Pre-U / A-level', 'Full-time', '1 year', 'RM 13,290'),
(10, 3, 'Computer Science, IT', 'Bachelor of Computer Science (Hons)', 'Bachelor\'s Degree', 'Full-time', '3 years', 'RM 48,018'),
(11, 3, 'Mass Communication & Media', 'Diploma in Mass Communication', 'Diploma', 'Full-time', '2 years', 'RM 37,560'),
(12, 3, 'Engineering', 'Diploma in Electrical and Electronic Engineering (Microelectronics)', 'Diploma', 'Full-time', '2 years', 'RM 31,600'),
(13, 2, 'Biology, Chemistry & Physic', 'Foundation in Science', 'Foundation', 'Full-time', '2 yaers', 'RM 24,500'),
(14, 2, 'Hospitality and Leisure', 'Diploma in Hotel Management', 'Diploma', 'Full-time', '2 years', 'RM 47,508'),
(15, 2, 'Tourism', 'Diploma in Tourism Management', 'Diploma', 'Full-time', '2 years', 'RM 48,000'),
(16, 2, 'Business, Management', 'Foundation in Business', 'Pre-U', 'Full-time', '1.5 years', 'RM 32,855'),
(17, 2, 'Art & Design', 'Foundation in Design', 'Foundation', 'Full-time', '1 years', 'RM 24,500'),
(18, 2, 'Engineering', 'Doctor of Philosophy (Engineering)', 'Doctor Degree (Ph.D) ', 'Full-time', '3 - 6 years', 'RM 51,300'),
(19, 4, 'Science (Biology)', 'Bachelor of Biotechnology (Hons)', 'Bachelor\'s Degree', 'Full-time', '3 years', 'RM 94,500'),
(20, 4, 'Science, Technology', 'Foundation in Science and Technology', 'Foundation', 'Full-time', '1 year', 'RM 29,830'),
(21, 4, 'Culinary', 'Diploma in Culinary Arts', 'Diploma', 'Full-time', '2 years', 'RM 38,900'),
(22, 4, 'Mass Communication', 'Diploma in Communication', 'Diploma ', 'Full-time', '2 years', 'RM 20,790'),
(23, 4, 'Business, Account', 'Diploma in Business Administration ', 'Diploma ', 'Full-time ', '2 years ', 'RM 27,900'),
(24, 4, 'Business, Finance', 'Master of Business (Enterprise Resource Planning System) ', 'Master', 'Full-time', '3 years ', 'RM 46,000'),
(25, 5, 'Biology, Chemistry & Physic', 'Foundation in Science ', 'Foundation', 'Full-time', '1 year', 'RM 10,730'),
(26, 5, 'Business, Account, Finance', 'Foundation in Arts', 'Foundation', 'Full-time', '1 year', 'RM 10,730'),
(27, 5, 'Science, Agricultural', 'Bachelor of Science (Hons) Agricultural Science', 'Bachelor\'s Degree', 'Full-time ', '2 years', 'RM 39,560'),
(28, 5, 'Logistic', 'Bachelor of Science (Hons) Logistics and International Shipping', 'Bachelor\'s Degree ', 'Full-time', '3 years', 'RM 34,860'),
(29, 5, 'Mathematics & Finance', 'Bachelor of Science (Hons) Financial Mathematics', 'Bachelor\'s Degree', 'Full-time', '3 years ', 'RM 35,600'),
(30, 5, 'Medical', 'Bachelor of Medicine', 'Bachelor\'s Degree', 'Full-time', '3 years', 'RM 92,990');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `review_email` text NOT NULL,
  `review_name` text NOT NULL,
  `review_title` text NOT NULL,
  `review_text` text NOT NULL,
  `review_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `college_id`, `review_email`, `review_name`, `review_title`, `review_text`, `review_rating`) VALUES
(13, 1, 'mark@gmail.com', 'Mark Khaw', 'I love this place', 'This place is great.', 5),
(14, 2, 'ida@gmail.com', 'Ida', 'Meh', 'Average Experience, wouldn\'t recommend', 2),
(15, 3, 'yukiLQX', 'Yuki', 'Amazing', 'Nice building, nice lecturers, nice accomodations.', 5),
(16, 4, 'KM@gmail.com', 'Kai Meng', 'Good', 'Good facilities.', 4),
(17, 5, 'SophiaSHKM@gmail.com', 'Sophia', 'Average', 'It\'s just ok.', 3),
(18, 1, 'test@email.com', 'Test', 'TEST TITLE', 'TEST TEST TEST', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_info`
--
ALTER TABLE `college_info`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_info`
--
ALTER TABLE `college_info`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
