-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 09:39 AM
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
-- Database: `fusion_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_no` int(100) NOT NULL,
  `Cid` varchar(100) NOT NULL,
  `acc_type` varchar(100) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_no` varchar(100) NOT NULL,
  `ocupation` varchar(100) NOT NULL,
  `document` varchar(100) DEFAULT NULL,
  `saving_type` varchar(100) DEFAULT NULL,
  `business_infrm` varchar(100) DEFAULT NULL,
  `current_type` varchar(100) DEFAULT NULL,
  `dammount` int(100) DEFAULT NULL,
  `adate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `Cid`, `acc_type`, `nominee_name`, `nominee_no`, `ocupation`, `document`, `saving_type`, `business_infrm`, `current_type`, `dammount`, `adate`, `status`) VALUES
(108292967, '6876987634', 'saving', 'priya', '1684848', 'salarized', 'adhar', 'high-yield', NULL, NULL, 2000, '2011-07-24', 'Approved'),
(160483508, '8722876387', 'saving', 'priya', '6779798799', 'salarized', 'adhar', 'regular', NULL, NULL, NULL, '18-07-24', 'pending'),
(514142344, '8745129354', 'saving', 'priya', '15689489', 'salarized', 'home worker', 'regular', NULL, NULL, 1000, '2014-07-24', 'Approved'),
(705279869, '7845841525', 'current', 'priya', '515848', 'retired', NULL, NULL, 'Flower business', 'joint', NULL, '2011-07-24', 'Approved'),
(745286752, '9986697114', 'saving', 'priya', '1684848', 'salarized', 'adhar', 'regular', NULL, NULL, 1000, '2011-07-24', 'Approved'),
(826410407, '7483306421', 'saving', 'siri', '1684848', 'salarized', 'adhar', 'high-yield', NULL, NULL, 500, '2011-07-24', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `add_news`
--

CREATE TABLE `add_news` (
  `nid` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `utype` varchar(100) NOT NULL,
  `Ndesc` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_news`
--

INSERT INTO `add_news` (`nid`, `heading`, `cat`, `utype`, `Ndesc`, `image`) VALUES
(9, ' Soil Health Card Scheme', 'SCHEME', 'ADMIN', 'The scheme was introduced in 2015 and aimed at providing farmers with health cards for soil. The farmers under this scheme could upload the soil quality and nutrients. This information could be used by them for improving the soil condition for better quality crop fertility. Under this scheme government had collected soil samples from 253 lakh farm locations. Till date over 76 percent health cards have already been distributed by the authorities.', 'banner.jpg'),
(12, 'Agriculture Infrastructure Fund', 'SCHEME', 'ADMIN', 'The Union Cabinet in July 2020 has approved a new pan India Central Sector Scheme called Agriculture Infrastructure Fund (National Agriculture Infra Financing Facility). The scheme shall provide a medium - long term debt financing facility for investment in viable projects for post-harvest management Infrastructure and community farming assets through interest subvention and financial support.All loans under this financing facility will have interest subvention of 3% per annum up to a limit of Rs. 2 crore. This subvention will be available for a maximum period of seven years. Further, credit guarantee coverage will be available for eligible borrowers from this financing facility under Credit Guarantee Fund Trust for Micro and Small Enterprises (CGTMSE) scheme for a loan up to Rs. 2 crore. The fee for this coverage will be paid by the Government. apply link: (https://agriinfra.dac.gov.in/Home/)', 'thscheme.jpg'),
(13, 'Crop insurance schemes', 'SCHEME', 'ADMIN', 'Crop insurance schemes in India Four insurance schemes are being implemented namely by the government to support farmers.  Pradhan Mantri Fasal Bima Yojana (PMFBY) Weather based Crop Insurance Scheme (WBCIS) Coconut Palm insurance scheme (CPIS) and Pilot Unified Package insurance scheme UPIS) (45 districts). Coverage under PMFBY/WBCIS/CPIS/UPIS is compulsory, if you avail crop loan for notified crops. Coverage is voluntary for non-loanee farmers.', 'th (4).jpg'),
(14, 'PM Kisan Maan Dhan Yojana', 'SCHEME', 'ADMIN', 'Government has launched the Pradhan Mantri Kisan Maan DhanYojana (PM-KMY) on 12.9.2019 with a view to provide social security to Small and Marginal Farmers in their old age when they have no means of livelihood and minimal or no savings to take care of their expenses.Under this scheme, a minimum fixed pension of Rs.3,000/- is provided to the small and marginal farmers, subject to certain exclusion criteria, on attaining the age of 60 years. It is a voluntary and contributory pension scheme. The eligible farmer is required to contribute to a Pension Fund between Rs.55 to Rs.200 per month depending on the entry age. The Central Government also contributes in equal amount to the Pension Fund.https://maandhan.in/auth/login', '15072121015621PM Kisan Maan Dhan Yojana.jpg.jpg'),
(15, 'First meeting of committee on Minimum Support Price to be held on August 22', 'NEWS', 'ADMIN', ' The committee on Minimum Support Price (MSP) is scheduled to hold its first meeting on August 22 to discuss future strategies, according to official sources. The meeting will be held at 10.30 am at the National Agriculture Science Complex (NASC) in the national capital, the sources added.  In the first meeting, sources said the committee will introduce members, deliberate on \"future strategies\" and discuss setting up sub-panels to cover the wide issues mentioned in the terms of reference.  Meanwhile, the government is persuading Samyukta Kisan Morcha (SKM) to take part in the proceedings of the committee, it needs to be seen if it will change its mind and nominate three representatives, sources added.', 'th (5).jpg'),
(16, 'Farmers, farming must be treated with honour: Narendra Singh Tomar', 'NEWS', 'ADMIN', 'Agriculture Minister Narendra Singh Tomar on Friday said farmers and farming should be treated with honour.  The minister was addressing the inaugural session of the two-day International Conference on \"Harnessing Indian Agriculture for Indigenous and Global Prosperity\" here, organised in collaboration with the Indian Council of Agricultural Research (ICAR) on the occasion of Azadi ka Amrit Mahotsav.  \"The farmer is not despondent, hungry or poor, rather there is a need to get out of this terminology. The farmer may be poor, he may own small fields but in spite of this he not only supports his family but also contributes to the agricultural economy of the country. Farmers and farming should be treated with honour,\" Tomar was quoted as saying in an official statement.', 'ezgif-sixteen_nine_343.jpg'),
(17, 'Govt receives Rs 23,000 crore proposals under Agriculture Infrastructure Fund', 'NEWS', 'ADMIN', 'The Centre has received proposals envisaging an investment of Rs 23,000 crore under the Agriculture Infrastructure Fund (AIF), Union Minister for Agriculture and Farmers Welfare Narendra Singh Tomar said on Friday.  The AIF set up in 2020 aims at providing a medium-long term debt financial facility till 2025-26 for investment in viable projects for post-harvest management infrastructure and community farming assets through interest subvention and financial support.  AIF with a corpus of Rs 1 lakh crore will be disbursed through loan by 2025-26, ministry officials had said earlier.  \"So far, we have received proposals worth Rs 23,000 crore, of which the proposals worth Rs 13,000 crore is under consideration, Tomar said while briefing about the outcome of the two-day National Conference of State Agriculture and Horticulture Ministers here.', 'ezgif-sixteen_nine_228.jpg'),
(18, 'Agriculture Loan', 'LOAN', 'ADMIN', 'Agricultural loans are availed by a farmer to fund seasonal agricultural operations or related activities like animal farming, pisci-culture or purchase of land or agricultural tools. This type of loan also helps buying inputs such as fertilizers, seeds, insecticides etc. and engaging labour for cultivating and harvesting the crops.Interest rate : 7% p.a. onwards Processing fee: 0% to 4% of the loan amount.State Bank of India	7.25% p.a. onwards	0% p.a. to 1.25% p.a. of the loan amount IDBI Bank	7% p.a. onwards	At the discretion of the bank IndusInd Bank	10% p.a. onwards	1.25% of the loan amount + GST Central Bank of India	Up to 13.25% p.a.	At the discretion of the bank Karur Vysya Bank	8.30% p.a. onwards	At the discretion of the bank', 'th (6).jpg'),
(23, 'very fine day', 'NEWS', 'ADMIN', 'fhvugdfigihrgiuerhyghrghriughgh', '4325idea99mesta_crop_banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `apassword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `pan_no` int(100) NOT NULL,
  `adharno` varchar(100) NOT NULL,
  `homeaddrs` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `gender`, `mobile`, `email`, `dob`, `pan_no`, `adharno`, `homeaddrs`, `city`, `pass`, `cdate`) VALUES
('rakshita', 'Female', '6876987634', 'raks@gmail.com', '2024-07-12', 33243242, '262562343', 'BELEKERI', 'Hawi', '789', '10-07-24'),
('kanta', 'Male', '6876987698', 'priya@gmail.com', '2024-07-18', 2147483647, '343243243243', 'hubli', 'Sagar', '3ae5b58c6ccd6e010f4b8b07ec5fedc9', '16-07-24'),
('pratwika', 'Female', '7483306421', 'priya@gmail.com', '2024-07-10', 7868678, '15648878', 'BELEKERI', 'Sitka', '71b3b26aaa319e0cdf6fdb8429c112b0', '09-07-24'),
('kavya', 'Female', '7845841525', 'kavya@gmail.com', '2024-07-19', 33243242, '34324324', 'ankola', 'Hawi', '321', '10-07-24'),
('diksha', 'Female', '8722876387', 'diksha@gmail.com', '2024-07-04', 8996001, '34324324324', 'BELEKERI', 'Ankola', '71b3b26aaa319e0cdf6fdb8429c112b0', '15-07-24'),
('shreya', 'Female', '8745129354', 'shreya@gmail.com', '2024-07-05', 8487823, '34324324324', 'ankola,manjuguni', 'Ankola', '52c69e3a57331081823331c4e69d3f2e', '14-07-24'),
('priyanka', 'Female', '8762041817', 'priyanka@gmail.com', '2024-07-19', 7868678, '2625623', 'BELEKERI', 'Lahaina', '654', '10-07-24'),
('vidya', 'Female', '9451258637', 'vidya@gmail.com', '2024-07-12', 33243242, '2134324235', 'hiremata,honnavara', 'Honnavara', '789456', '14-07-24'),
('dhanya', 'Female', '9480068098', 'priya@gmail.com', '2024-08-10', 2147483647, '343243243243', 'hubli', 'Murdeshwara', '733d7be2196ff70efaf6913fc8bdcabf', '17-07-24'),
('Darshan', 'Male', '9874515155', 'darshan@gmail.com', '2003-09-12', 2147483647, '343244324324', 'ankola,manjuguni', 'Ankola', '789456', '14-07-24'),
('divya', 'Female', '9876543210', 'divya@gmail.com', '2024-08-09', 2147483647, '343243243244', 'BELEKERI,ankola', 'Bidar', '71b3b26aaa319e0cdf6fdb8429c112b0', '16-07-24'),
('priya', 'Female', '9986697114', 'darshan@gmail.com', '2024-06-28', 8487823, '547875465', 'kodogu', '', '123', '28-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fno`, `name`, `email`, `subject`, `message`, `cdate`) VALUES
(6, 'priya', 'priya@gmail.com', 'uguih', 'uhiuhu', '11-06-24'),
(12, 'priya', 'priya@gmail.com', 'hi this is good', 'good', '27-06-24'),
(14, 'kavya', 'kavya@gmail.com', 'hi this is good', 'very good', '11-07-24'),
(15, 'priya', 'priya@gmail.com', 'very nice', 'hi this is good', '11-07-24'),
(16, 'vidya', 'vidya@gmail.com', 'about this page', 'this page is very nice', '14-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_no` varchar(100) NOT NULL,
  `acc_no` varchar(100) NOT NULL,
  `Cid` varchar(100) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_no` varchar(100) NOT NULL,
  `nocupation` varchar(100) NOT NULL,
  `loan_type` varchar(100) NOT NULL,
  `rtc` varchar(100) DEFAULT NULL,
  `perm_letter` varchar(100) DEFAULT NULL,
  `admi_proof` varchar(100) DEFAULT NULL,
  `inc_cert` varchar(100) DEFAULT NULL,
  `veh_doc` varchar(100) DEFAULT NULL,
  `lammount` int(100) NOT NULL,
  `rperiod` varchar(100) NOT NULL,
  `eperiod` varchar(100) NOT NULL,
  `adate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `more` varchar(100) NOT NULL DEFAULT 'more'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_no`, `acc_no`, `Cid`, `nominee_name`, `nominee_no`, `nocupation`, `loan_type`, `rtc`, `perm_letter`, `admi_proof`, `inc_cert`, `veh_doc`, `lammount`, `rperiod`, `eperiod`, `adate`, `status`, `more`) VALUES
('568458993', '246557201', '8722876387', 'priya', '1684848', 'business', 'Vehicle Loan', '', '', '', '', 'veh1.jpg', 70000, '2024-08-03', '2024-07-27', '15-07-24', 'approved', 'more'),
('643197429', '826410407', '7483306421', 'priya', '6858483568', 'salarized', 'Education Loan', '', '', 'adm3.jpeg', 'pan2.jpeg', '', 28000, '2024-08-03', '2024-07-13', '18-07-24', 'pending', 'more'),
('739950322', '514142344', '8745129354', 'divya', '1684848', 'business', 'Home Loan', 'rtc1.webp', 'pan1.jpeg', '', '', '', 28000, '2024-07-27', '2024-07-17', '14-07-24', 'pending', 'more');

-- --------------------------------------------------------

--
-- Table structure for table `passbook_6876987634`
--

CREATE TABLE `passbook_6876987634` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_ammount` varchar(100) NOT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passbook_6876987634`
--

INSERT INTO `passbook_6876987634` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_ammount`, `Net_Balance`, `Remark`) VALUES
(1, '906337960', '11/07/24 04:49:07 PM', 'Cash Deposit/906337960', '500', '', '500', 'Cash Deposit'),
(2, '267625184', '11/07/24 07:23:27 PM', 'Cash Deposit/267625184', '500', '', '1000', 'Cash Deposit'),
(3, '921483433', '11/07/24 07:29:18 PM', 'Cash Deposit/921483433', '500', '', '1500', 'Cash Deposit'),
(4, '837955865', '13/07/24 04:09:32 PM', 'Cash Deposit/837955865', '500', '0', '2000', 'Cash Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `passbook_7483306421`
--

CREATE TABLE `passbook_7483306421` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_ammount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passbook_7483306421`
--

INSERT INTO `passbook_7483306421` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_ammount`, `Net_Balance`, `Remark`) VALUES
(1, '440192999', '18/07/24 12:13:07 PM', 'Cash Deposit/440192999', '500', '0', '500', 'Cash Deposit'),
(2, '405192969', '18/07/24 12:13:20 PM', 'Cash Deposit/405192969', '500', '0', '1000', 'Cash Deposit'),
(3, '564967633', '18/07/24 12:13:33 PM', 'Cash Deposit/564967633', '0', '500', '500', 'Cash Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `passbook_7845841525`
--

CREATE TABLE `passbook_7845841525` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_ammount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passbook_8722876387`
--

CREATE TABLE `passbook_8722876387` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_ammount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passbook_8722876387`
--

INSERT INTO `passbook_8722876387` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_ammount`, `Net_Balance`, `Remark`) VALUES
(1, '226296150', '15/07/24 09:12:34 PM', 'Cash Deposit/226296150', '500', '0', '500', 'Cash Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `passbook_8745129354`
--

CREATE TABLE `passbook_8745129354` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_ammount` varchar(100) NOT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passbook_8745129354`
--

INSERT INTO `passbook_8745129354` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_ammount`, `Net_Balance`, `Remark`) VALUES
(1, '864171597', '15/07/24 11:14:40 AM', 'Cash Deposit/864171597', '500', '0', '500', 'Cash Deposit'),
(2, '913503355', '16/07/24 08:49:59 PM', 'Cash Deposit/913503355', '500', '0', '1000', 'Cash Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `passbook_9876543210`
--

CREATE TABLE `passbook_9876543210` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_ammount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passbook_9986697114`
--

CREATE TABLE `passbook_9986697114` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_ammount` varchar(100) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passbook_9986697114`
--

INSERT INTO `passbook_9986697114` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_ammount`, `Net_Balance`, `Remark`) VALUES
(19, '176942788', '11/07/24 04:54:13 PM', 'Cash Deposit/176942788', '500', '0', '1000', 'Cash Deposit'),
(24, '911602939', '12/07/24 11:14:37 PM', 'Cash Deposit/911602939', '0', '500', '500', 'Cash Deposit'),
(25, '635926778', '13/07/24 04:10:34 PM', 'Cash Deposit/635926778', '500', '0', '1000', 'Cash Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `pigmy`
--

CREATE TABLE `pigmy` (
  `pid` int(100) NOT NULL,
  `Cid` varchar(100) NOT NULL,
  `acc_no` varchar(100) NOT NULL,
  `daily_date` varchar(100) NOT NULL,
  `daily_amt` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pigmy`
--

INSERT INTO `pigmy` (`pid`, `Cid`, `acc_no`, `daily_date`, `daily_amt`, `mode`, `status`) VALUES
(15, '7845841525', '705279869', '2024-07-12', '100', 'cash', 'pending'),
(16, '8762041817', '886497406', '2024-07-27', '200', 'cash', 'pending'),
(20, '8722876387', '246557201', '2024-07-20', '100', 'cash', 'Approved'),
(32, '7483306421', '826410407', '2024-07-11', '100', 'cash', 'Not aproove'),
(33, '8745129354', '514142344', '2024-07-11', '100', 'cash', 'pending'),
(34, '8745129354', '514142344', '2024-07-12', '100', 'cash', 'pending'),
(35, '9480068098', '467687136', '2024-07-06', '100', 'cash', 'pending'),
(36, '7483306421', '826410407', '2024-07-04', '100', 'cash', 'pending'),
(37, '8722876387', '160483508', '2024-07-12', '100', 'cash', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `smobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `homeaddrs` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sdate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `gender`, `smobile`, `email`, `dob`, `homeaddrs`, `pass`, `sdate`, `status`) VALUES
('priya', 'Female', '6876987698', 'priya@gmail.com', '2024-07-05', 'karwar', '999999', '17-07-24', 'pending'),
('priya', 'Female', '7483306422', 'priya@gmail.com', '2024-07-25', 'ankola', '999999', '16-07-24', 'pending'),
('Soumya', 'Female', '8451296347', 'BCA', '2024-07-19', 'karwar ,baad 581321', '789456', '14-07-24', 'pending'),
('kalpana', 'Female', '8722876397', 'BCOM', '2024-07-27', 'BELEKERI', '123', '11-07-24', 'Approved'),
('priya', 'Male', '9876543210', 'priya@gmail.com', '2024-07-05', 'BELEKERI', '789456', '18-07-24', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_no`);

--
-- Indexes for table `add_news`
--
ALTER TABLE `add_news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_no`);

--
-- Indexes for table `passbook_6876987634`
--
ALTER TABLE `passbook_6876987634`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passbook_7483306421`
--
ALTER TABLE `passbook_7483306421`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passbook_7845841525`
--
ALTER TABLE `passbook_7845841525`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passbook_8722876387`
--
ALTER TABLE `passbook_8722876387`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passbook_8745129354`
--
ALTER TABLE `passbook_8745129354`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passbook_9876543210`
--
ALTER TABLE `passbook_9876543210`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passbook_9986697114`
--
ALTER TABLE `passbook_9986697114`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pigmy`
--
ALTER TABLE `pigmy`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`smobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=977998095;

--
-- AUTO_INCREMENT for table `add_news`
--
ALTER TABLE `add_news`
  MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `passbook_6876987634`
--
ALTER TABLE `passbook_6876987634`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passbook_7483306421`
--
ALTER TABLE `passbook_7483306421`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passbook_7845841525`
--
ALTER TABLE `passbook_7845841525`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passbook_8722876387`
--
ALTER TABLE `passbook_8722876387`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passbook_8745129354`
--
ALTER TABLE `passbook_8745129354`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `passbook_9876543210`
--
ALTER TABLE `passbook_9876543210`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passbook_9986697114`
--
ALTER TABLE `passbook_9986697114`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pigmy`
--
ALTER TABLE `pigmy`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
