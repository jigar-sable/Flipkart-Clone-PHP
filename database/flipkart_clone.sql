-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 07:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipkart_olddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_img` varchar(255) NOT NULL,
  `banner_img_alt` varchar(50) NOT NULL,
  `banner_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_img`, `banner_img_alt`, `banner_url`) VALUES
(1, 'bbd-live', 'Big Billion Day Offers', ''),
(2, 'motorola-edge', 'Motorola Edge 20 Pro', ''),
(3, 'bbd', 'Big Billion Day', ''),
(4, 'intel', 'Intel Processors', ''),
(5, 'bbdlive', 'Big Billion Day Sale', ''),
(6, 'noise-airbuds', 'Noise Air Buds', ''),
(7, 'realme-8i', 'Realme 8i', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories_thumb`
--

CREATE TABLE `categories_thumb` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  `cat_img_alt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_thumb`
--

INSERT INTO `categories_thumb` (`cat_id`, `cat_title`, `cat_img`, `cat_img_alt`) VALUES
(1, 'Top Offers', 'top_offers', 'Top Offers'),
(2, 'Grocery', 'grocery', 'Grocery'),
(3, 'Mobiles', 'mobiles', 'Mobiles Catalog'),
(5, 'Fashion <span class=\"material-icons md-16 group-hover:text-primary-blue\">expand_more</span>', 'fashion', 'Fashion Category'),
(6, 'Electronics <span class=\"material-icons md-16 group-hover:text-primary-blue\">expand_more</span>', 'electronics', 'Electronics Catalog'),
(7, 'Home <span class=\"material-icons md-16 group-hover:text-primary-blue\">expand_more</span>', 'home', 'Home Category'),
(8, 'Appliances <span class=\"material-icons md-16 group-hover:text-primary-blue\">expand_more</span>', 'appliances', 'Appliances Catalog'),
(9, 'Travel', 'travel', 'Travel Transport'),
(10, 'Beauty, Toys & More <span class=\"material-icons md-16 group-hover:text-primary-blue\">expand_more</span>', 'beauty', 'Toys Category');

-- --------------------------------------------------------

--
-- Table structure for table `category_nav`
--

CREATE TABLE `category_nav` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_nav`
--

INSERT INTO `category_nav` (`cat_id`, `cat_title`, `cat_url`) VALUES
(1, 'Electronics <span class=\"material-icons md-16 text-gray-400 group-hover:text-primary-blue\">expand_more</span>', '#'),
(2, 'TVs & Appliances <span class=\"material-icons md-16 text-gray-400 group-hover:text-primary-blue\">expand_more</span>', '#'),
(3, 'Men <span class=\"material-icons md-16 text-gray-400 group-hover:text-primary-blue\">expand_more</span>', '#'),
(4, 'Women <span class=\"material-icons md-16 text-gray-400 group-hover:text-primary-blue\">expand_more</span>', '#'),
(5, 'Baby & Kids <span class=\"material-icons md-16 text-gray-400 group-hover:text-primary-blue\">expand_more</span>', '#'),
(6, 'Home & Furniture <span class=\"material-icons md-16 text-gray-400 group-hover:text-primary-blue\">expand_more</span>', '#'),
(7, 'Sports, Books & More <span class=\"material-icons md-16 text-gray-400 group-hover:text-primary-blue\">expand_more</span>', '#'),
(8, 'Flights', 'https://www.flipkart.com/travel/flights?otracker=nmenu_Flights'),
(9, 'Offer Zone', 'https://www.flipkart.com/offers-store'),
(10, 'Grocery', 'https://www.flipkart.com/grocery-supermart-store?marketplace=GROCERY&otracker=nmenu_Grocery');

-- --------------------------------------------------------

--
-- Table structure for table `discount_for_you`
--

CREATE TABLE `discount_for_you` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_alt` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount_for_you`
--

INSERT INTO `discount_for_you` (`id`, `img`, `img_alt`, `title`, `discount`, `tag`, `url`) VALUES
(1, 'blue-smart-watch', 'Boat Storm Watch', 'Blue Smart Watches', 'Min 40% Off', 'Grab Now!', '#'),
(2, 'laptops', 'Laptops', 'Laptops', 'Min 20% Off', 'Discover Now!', '#'),
(3, 'sandals-floaters', 'Sandals & Floaters', 'Sandals & Floaters', 'Min 50% Off', 'Great Savings!', '#'),
(4, 'backpacks', 'Backpacks', 'Backpacks', 'Min 70% Off', 'Explore Now!', '#'),
(5, 'pans', 'Pans', 'Pans', 'Min 50% Off', 'Buy Now!', '#'),
(6, 'Mobiles', 'Apple iPhone 12', 'Mobiles', 'Min 20% Off', 'Shop Now!', '#'),
(7, 'washing-machine', 'Washing Machine', 'Washing Machine', 'Min 30% Off', 'Hurry, Don\'t Miss Out!', '#'),
(8, 'powerbank', 'Realme Powerbank', 'Powerbanks', 'Min 60% Off', 'Great Savings', '#'),
(9, 'television', 'Televisions', 'Televisions', 'Min 20% Off', 'Grab Now!', '#'),
(10, 'kettle', 'Kettle', 'Electric Kettle', 'Min 50% Off', 'Buy Now!', '#'),
(11, 'harddisk', 'Hard Disk', 'External Hard Disk', 'Min 40% Off', 'Explore Now!', '#'),
(12, 'acs', 'Air Conditioners', 'Air Conditioners', 'Min 40% Off', 'Explore Now!', '#'),
(13, 'sdcard', 'SD Card', 'Memory Cards', 'Min 60% Off', 'Great Savings!', '#');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_img_alt` varchar(50) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_seller` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `order_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_img_alt` varchar(50) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_rating_star` float NOT NULL,
  `product_rating_count` int(11) NOT NULL,
  `product_review` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_cutted_price` int(11) NOT NULL,
  `product_seller` varchar(20) NOT NULL,
  `product_model` varchar(20) NOT NULL,
  `product_brand_logo` varchar(50) NOT NULL,
  `product_highlights` longtext NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_color_thumb1` varchar(255) NOT NULL,
  `product_color_thumb2` varchar(255) NOT NULL,
  `product_sales_package` varchar(255) NOT NULL,
  `product_generic_name` varchar(50) NOT NULL,
  `product_manufactured_by` varchar(255) NOT NULL,
  `product_origin_country` varchar(30) NOT NULL,
  `product_warranty_summary` varchar(255) NOT NULL,
  `product_domestic_warranty` varchar(255) NOT NULL,
  `product_warranty_covered` longtext NOT NULL,
  `product_warranty_ncovered` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_img`, `product_img_alt`, `product_title`, `product_rating_star`, `product_rating_count`, `product_review`, `product_price`, `product_cutted_price`, `product_seller`, `product_model`, `product_brand_logo`, `product_highlights`, `product_desc`, `product_color`, `product_color_thumb1`, `product_color_thumb2`, `product_sales_package`, `product_generic_name`, `product_manufactured_by`, `product_origin_country`, `product_warranty_summary`, `product_domestic_warranty`, `product_warranty_covered`, `product_warranty_ncovered`) VALUES
(1, 'realme-8', 'Realme 8', 'realme 8 (Cyber Black, 128 GB)  (8 GB RAM)', 4.3, 44002, 4079, 17999, 18999, 'GRAHGOODS RETAIL', '8', 'realme', '8 GB RAM | 128 GB ROM | Expandable Upto 256 GB, 16.26 cm (6.4 inch) Full HD+ Display, 64MP + 8MP + 2MP + 2MP | 16MP Front Camera, 5000 mAh Battery, MediaTek Helio G95 Processor, Super AMOLED Display', ' The realme 8 features a Super AMOLED Display so that you can enjoy vivid and eye-catching visuals that will enhance your viewing experience while streaming content, gaming, and so on. The Tilt-shift mode of the mobile phone can be used to play around with the perspective so that your pictures are out of the ordinary and mesmerising. And, thanks to the 16 MP Selfie Camera enables you to take delightful selfies with your loved ones and you can make them unique with features such as Selfie Nightscape and the AI Portrait mode.', 'Cyber Black', 'https://rukminim1.flixcart.com/image/416/416/kmmcrrk0/mobile/4/g/a/8-rmx3085-realme-original-imagfgpfdkyc29zc.jpeg', 'https://rukminim1.flixcart.com/image/416/416/kmmcrrk0/mobile/y/o/q/8-rmx3085-realme-original-imagfgpgmm6h8ptt.jpeg', 'Handset, Adapter (5V/6A), USB Cable (Type-C), SIM Card Tool, Screen Protect Film, Case, Important Info Booklet with Warranty Card, Quick Guide', 'Mobiles', 'Oppo Mobiles India Private Limited 5th Floor, Tower-B, Building No. 8, DLF Cyber City, Gurugram, Haryana-122002, India', 'India', '1 Year Warranty for Mobile and 6 Months for Accessories', '1 Year', 'Manufacturing Defects', 'Physical Damage'),
(2, 'macbook-air-m1', 'Macbook Air Laptop', 'APPLE MacBook Air M1 - (8 GB/256 GB SSD/Mac OS Big Sur)', 4.7, 1674, 210, 88990, 92900, 'SuperComNet', 'MGND3HN/A', 'apple', 'Stylish & Portable Thin and Light Laptop, 13.3 inch Quad LED Backlit IPS Display, Light Laptop without Optical Disk Drive', 'MacBook Air, 30 W USB-C Power Adapter, USB-C Charge Cable (2m), User Guide, Warranty Documents', 'Gold', 'https://rukminim1.flixcart.com/image/416/416/kruyw7k0/computer/v/x/v/na-thin-and-light-laptop-apple-original-imag5jt7u9fzenqb.jpeg', 'https://rukminim1.flixcart.com/image/416/416/khdqnbk0/computer/f/y/t/apple-original-imafxfyqydgvrkzv.jpeg', 'MacBook Air, 30 W USB-C Power Adapter, USB-C Charge Cable (2m), User Guide, Warranty Documents', 'Computers', 'Apple Inc, One Apple Park Way, Cupertino, CA 95014, USA', 'China', '1 Year Limited Warra­nty', '1 Year', 'Manufacturing Defects', 'Physical Damage'),
(3, 'apple-iphone-12', 'Apple iPhone 12', 'APPLE iPhone 12 (Blue, 128 GB) A14 Bionic Chip', 4.6, 12669, 1106, 68999, 70900, 'SuperComNet', 'MGJA3HN/A', 'apple', '128 GB ROM, 15.49 cm (6.1 inch) Super Retina XDR Display, 12MP + 12MP | 12MP Front Camera, A14 Bionic Chip with Next Generation Neural Engine Processor, Ceramic Shield, Industry-leading IP68 Water Resistance, All Screen OLED Display, 12MP TrueDepth Front Camera with Night Mode', ' Dive into a world of crystal-clear visuals with the Super Retina XDR Display of this Apple iPhone 12. This beast of a smartphone packs the A14 Bionic chip to make for blazing-fast performance speeds. On top of that, its Dual-camera System, along with Night Mode, helps you click amazing pictures and selfies even when the lighting isn’t as good as you’d want it to be.', 'Black', 'https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/r/h/z/apple-iphone-12-dummyapplefsn-original-imafwg8dqgncgbcb.jpeg', 'https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/y/7/n/apple-iphone-12-dummyapplefsn-original-imafwg8dqq7z8cgh.jpeg', 'iPhone, USB-C to Lightning Cable, Documentation', 'Mobiles', 'Apple India Private Limited No.24,19th floor,concorde tower c,UB city,Vittal mallya Road,bangalore-560001', 'India, China', 'Brand Warranty for 1 Year', '1 Year', 'Manufacturing Defects', 'Physical Damage'),
(4, 'realme-watch-s', 'Realme Watch S', 'realme Watch S  (Black Strap, Regular)', 4.3, 32881, 3918, 5000, 7999, 'RetailNet', 'Watch S', 'realme', '3.3cm (1.3 inch) Auto Brightness Touchscreen, Heart Rate & Blood Oxygen Monitor, IP68 Water Resistant with 16 Sport Modes, 100+ Stylish Watch Faces to be Updated via OTA | Aluminium Alloy Case for a Premium Look and Durability, Magnetic Charging Base for Hassle-free Charging, Touchscreen, Fitness & Outdoor, Battery Runtime: Upto 15 days', 'Get the realme Watch S smartwatch and stay on track with your fitness goals, thanks to its up to 16 sports modes tracking, heart rate monitor, and blood oxygen monitor. This smartwatch lasts for up to 15 days when charged for just 2 hours, thanks to its long-lasting battery life. It is also water-resistant, making it perfect for daily usage.', 'Black', 'https://rukminim1.flixcart.com/image/416/416/ki7qw7k0/smartwatch/e/p/b/rma207-android-realme-original-imafy2fxtuzghm5m.jpeg', 'https://rukminim1.flixcart.com/image/416/416/kpedle80/smartwatch/j/l/3/rma207-android-ios-realme-original-imag3ncpy3kq5nkf.jpeg', 'Smartwatch, Charging Base, User Manual', 'Smartwatches', 'Realme Chongqing Mobile Telecommunications Corp. ltd. 178 Yulong Avenue Yufengshan Yubei District', 'China', '1 Year Manufacturer Warranty', '1 Year', 'Manufacturing Defects', 'Physical Damage'),
(5, 'boat-rockerz-450', 'Boat Rockerz 450', 'boAt Rockerz 450 Bluetooth Headset  (Luscious Black, On the Ear)', 4.3, 235314, 27981, 1399, 3990, 'SPLIPRLItech', 'Rockerz 450', 'boat', 'With Mic:Yes, Connector type: 3.5 mm, Battery life: 15 hr | Charging time: 3 Hours, 40mm Drivers: HD Sound, Adjustable Earcups, Up to 15 H Playback, Lightweight Design, Dual Modes: Bluetooth & AUX', ' Are you looking for a headset that features eye-catching aesthetics and dual modes? If yes, bring home the boAt Rockerz 450 that has an AUX-mode as well as the Bluetooth connectivity feature. The 40-mm drivers and adjustable earcups ensure you enjoy a comfortable listening experience that is immersive.', 'Luscious Black', 'https://rukminim1.flixcart.com/image/416/416/ksw4ccw0/headphone/w/g/r/rockerz-450-boat-original-imag6cqqh49wjfy5.jpeg', 'https://rukminim1.flixcart.com/image/416/416/ksw4ccw0/headphone/l/b/n/rockerz-450-boat-original-imag6cqqd4fxuzrp.jpeg', 'Rockerz 450, Charging Cable, User Manual, Warranty Card', 'Headphones', 'Fuyong Town, Shenzhen, China- 518103', 'China', '1 Year from the date of purchase', '1 Year', 'Manufacturing Defects', 'Accidental and Liquid Damages'),
(6, 'boat-airdopes-131', 'Boat Airdopes', 'boAt Airdopes 131 Bluetooth Headset  (Active Black, True Wireless)', 4.1, 373167, 35629, 1295, 2990, 'SPLIPRLItech', 'Airdopes 131 / Airdo', 'boat', 'With Mic:Yes, Bluetooth version: 5, Wireless range: 10 m, Charging time: 2 Hours, Instant Voice Assistant, Type-C Charging Port | Upto 15 hours of total playtime, IWP Technology', 'Are you looking for a wireless earbud-type headset that delivers an impressive playback time? If your answer is yes, bring home the boAt Airdopes 131 that comes with a carrying case. This carrying case also acts as a 650 mAh portable charger that extends the playback time of these earbuds by up to 15 hours, i.e. 4 times its normal charging capacity. The normal battery capacity of each of these earbuds is 40 mAh and this delivers up to 3 hours of playback time. These earbuds feature Bluetooth v5.0 technology that delivers a stable connection that lets your rock on without connectivity issues. The stereo calling feature of these earbuds allows you to enjoy calls via its built-in microphone and 13-mm drivers. These earbuds are powered up by the IWP Technology featured in them the moment you open the case. The presence of a Type-C charging port ensures you can easily charge it with any charger that has a compatible cable.', 'Active Black', 'https://rukminim1.flixcart.com/image/416/416/ksdjma80/headphone/o/f/c/airdopes-131-airdopes-138-boat-original-imag5yz96jehyqrg.jpeg', 'https://rukminim1.flixcart.com/image/416/416/ksdjma80/headphone/u/4/o/airdopes-131-airdopes-138-boat-original-imag5yzacvxdzu6p.jpeg', ' Airdopes 131,Charging Case, Type-c Charging, User Manual, Warranty Card', 'Headphones', 'Fuyong Town, Shenzhen, China- 518103', 'China', '1 Year Warranty', '1 Year', 'Manufacturing Defects', 'Physical Damages'),
(7, 'mi-trimmer', 'Mi Trimmer', 'Mi XXQ02HM Runtime: 60 min Trimmer for Men (Black)', 4.3, 245323, 29519, 899, 1199, 'RetailNet', 'XXQ02HM', 'mi', 'Blade Material: Stainless Steel, Trimming Range: 0.5 - 10 mm, 60 min battery run time, 20 length settings, Gender: Men, For Beard & Moustache', ' Achieve a neat and trim look at home with this Mi trimmer. While its 0.5 mm precision blades give you the ideal look, its ergonomic design helps you hold it comfortably while trimming. Also, it comes with high-quality blades that will stand the test of time.', 'Black', 'https://rukminim1.flixcart.com/image/416/416/kdnf98w0-0/trimmer/s/y/e/0-5-10-mm-stainless-steel-xxq02hm-cordless-mi-original-imafug358t8cxzzk.jpeg', 'https://rukminim1.flixcart.com/image/416/416/ked56kw0-0/trimmer/n/5/a/0-5-10-mm-stainless-steel-xxq02hm-cordless-mi-original-imafvfyeghsghgrg.jpeg', ' 1 Trimmer, User Manual, Charging Cable, Trimming Comb, Pouch and Cleaning Brush2', 'Trimmer', 'shanghai holomi Technology Co., Ltd Room 2227, No. 2 bldgs, No 588 zixing rd, Minhang District, shanghai - 200235 China.', 'China', '1 Year Warranty', '1 Year', 'Manufacturing Defects', 'Warranty Does Not Cover Damages Caused Due to Improper Installation, Repair, Unauthorized Modification, Physical Damage and Water Log Damages or Connection of the Product to Equipment not Approved by the Company'),
(8, 'ifb-washing-machine', 'IFB Washing Machine', 'IFB 6 kg 5 Star Fully Automatic Front Load (Diva Aqua VX)', 4.3, 51127, 5921, 20990, 23990, 'IWQNBecommerce', 'Diva Aqua VX', 'ifb', 'Fully Automatic Front Load Washing Machines have Great Wash Quality with very less running cost, 800 rpm : Higher the spin speed, Lower the drying time, Number of wash programs - 8 : With higher wash programs-Wash a variety of fabrics, 5 Star Rating, 6 kg', ' Now, you can dress to impress every day in spotless and hygienic garments, thanks to this IFB 6 kg Fully-automatic washing machine. This essential home appliance features the Auto Imbalance Vibration Control technology, the Ball Valve Technology, and a Crescent Moon Drum for quick and efficient washing of your laundry.', 'White', 'https://rukminim1.flixcart.com/image/416/416/krz97rk0/washing-machine-new/g/2/4/diva-aqua-vx-ifb-original-imag5ngqvnsgwxhy.jpeg', 'https://rukminim1.flixcart.com/image/416/416/ktlu9ow0/washing-machine-new/3/e/v/diva-aqua-sx-ifb-original-imag6x2ytvtyt8br.jpeg', 'Drain Hose, Protective Rat Mesh ,User Manual, Water Inlet Pipe, 1 Washing Machine', 'Washing Machine', 'IFB Industries L-1, Verna Industrial Estate, Salcete, Verna, Goa, 403722', 'India', '4 Years Complete Machine warranty, 10 Years Motor Warranty and 10 Years Spare Part Support from IFB', '4 Year', 'IFB warrants during 48 months of the date of purchase of new washing machine all the parts of the washing machine which is proved to be defective in workmanship or materials shall be repaired or replaced free of charge on intimation to the company authorised service centre nearest to the place where appliance is installed.', 'Warranty does not cover, parts Outer cabinet and plastic, parts Any accessories external to the product Serial number is removed, altered or obliterated from the machine Defects due to cause beyond control like lightning, abnormal voltage, acts of god or while in transit to the service center or purchaser residence'),
(9, 'poco-m3', 'Poco M3 Phone', 'POCO M3 (Power Black, 64 GB)  (4 GB RAM)', 4.3, 49032, 3652, 9999, 11999, 'Truenet Commerce', 'M3', 'poco', '4 GB RAM | 64 GB ROM | Expandable Upto 512 GB, 16.59 cm (6.53 inch) Full HD+ Display, 48MP + 2MP + 2MP | 8MP Front Camera, 6000 mAh Lithium-ion Polymer Battery, Qualcomm Snapdragon 662 Processor, Multiple Hands-free Voice Assistant', '4 GB RAM | 64 GB ROM | Expandable Upto 512 GB Qualcomm Snapdragon 662 Processo', 'Black', 'https://rukminim1.flixcart.com/image/416/416/kklhbbk0/mobile/w/k/2/m3-mzb0879in-poco-original-imafzxf65mefhdrr.jpeg', 'https://rukminim1.flixcart.com/image/416/416/kklhbbk0/mobile/w/w/k/m3-mzb087ain-poco-original-imafzxf895fmsahg.jpeg', ' Handset, Power Adaptor, USB Type-C Cable, SIM Ejector Tool, User Guide, Soft Case', 'Mobiles', 'Xiaomi Technology India Pvt. Ltd., Orchid Blck, EmbassyTech Village, Devarabeesanahalli,Bangalore - 560103, Karnataka', 'India, China', 'One Year Warranty for Handset, 6 Months for Accessories', '1 Year', 'Manufacturing Defects', 'Physical Damage'),
(10, 'iphone-13', 'iPhone 13', 'APPLE iPhone 13 (Blue, 256 GB) A15 Bionic Chip', 4.8, 393, 37, 88800, 89900, 'NA', 'iPhone 13', 'apple', '256 GB ROM, 15.49 cm (6.1 inch) Super Retina XDR Display, 12MP + 12MP | 12MP Front Camera, A15 Bionic Chip Processor', 'NA', 'Blue', 'https://rukminim1.flixcart.com/image/416/416/ktketu80/mobile/2/y/o/iphone-13-mlpk3hn-a-apple-original-imag6vpyur6hjngg.jpeg', 'https://rukminim1.flixcart.com/image/416/416/ktketu80/mobile/a/m/7/iphone-13-mlpj3hn-a-apple-original-imag6vpyk3w4zarg.jpeg', 'iPhone, USB-C to Lightning Cable, Documentation', 'Mobiles', 'Apple India Private Limited No.24,19th floor,concorde tower c,UB city,Vittal mallya Road,bangalore-560001', 'India, China', 'Brand Warranty for 1 Year', '1 Year', 'Manufacturing Defects', 'Physical Damages'),
(11, 'density-shoes', 'Density Shoes', 'SOCKS Running Shoes For Men  (Grey)', 4.1, 123125, 17597, 399, 999, 'Density', 'SOCKS', 'density', 'Fabric Foam, Sports, Heel Pattern: Solid, Closure: Lace-Ups', 'NA', 'Grey', 'https://rukminim1.flixcart.com/image/800/960/kt8zb0w0/shoe/2/o/e/6-socks-04-grey-6-density-grey-original-imag6n4yzbnfzmgc.jpeg', 'https://rukminim1.flixcart.com/image/800/960/kd69z0w0/shoe/b/2/c/socks-04-black-density-black-original-imafu4wwzspkzzgf.jpeg', '2 Shoes', 'Shoe', 'NA', 'India', 'NA', 'NA', 'NA', 'NA'),
(12, 'prestige-grill', 'Prestige Grill', 'Prestige PGMFB Grill Sandwich Maker  (Black)', 4.3, 24612, 2768, 1173, 1715, 'THE COMPLETE STORE', 'PGMFB', 'prestige', 'Capacity 2 Slices, Consumes 800 W, Grill Sandwich Maker', ' Fix quick hunger pangs by nibbling on tasty sandwiches you prepare at home using your favourite ingredients; this Prestige Grill offers you a healthy way to do so. It has a non-toxic coating on the grill plates which lets you prepare sandwiches without dousing your food in oil or butter. The grill’s ergonomic handle is resistant to heat for your safety.', 'Black', 'https://rukminim1.flixcart.com/image/416/416/k0lbdzk0pkrrdj/sandwich-maker-refurbished/c/u/h/b-pgmfb-prestige-original-imafkg2ca6rhukt9.jpeg', 'https://rukminim1.flixcart.com/image/416/416/k0lbdzk0pkrrdj/sandwich-maker-refurbished/c/u/h/b-pgmfb-prestige-original-imafgccdmet6gyqy.jpeg', 'Product, User Manual, Warranty Card', 'Sandwich Makers', 'NA', 'India', '1 Year Domestic Warranty', '1 Year', 'Parts and Labor', 'Warranty shall not cover any damage resulting from adaptations or adjustments which may be made to the product. Warranty does not extend to cabinets, knobs, labels, or any accessories.'),
(13, 'acer-aspire-7', 'Acer Aspire 7', 'acer Aspire 7 Core i5 10th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650)', 4.4, 1273, 160, 49990, 89999, 'CORSECA', 'Aspire 7', 'acer', 'NVIDIA GeForce GTX 1650, 15.6 inch Full HD Acer ComfyView LED Backlit TFT LCD Anti-glare Display, Ultra-Slim Design, 16:9 Aspect Ratio, Light Laptop without Optical Disk Drive, Pre-installed Genuine Windows 10 OS', 'This Acer gaming laptop features a large screen-to-body ratio and a FHD narrow border screen so that you can enjoy an expansive view of the screen. This gaming laptop offers USB ports, an HDMI port, and more to enable offline charging and so on. And, its aesthetic design and backlit keyboard enable you to game with ease in a dimly lit room.', 'Black', 'https://rukminim1.flixcart.com/image/416/416/kp1imq80/computer/u/b/z/na-gaming-laptop-acer-original-imag3d63hk3h8nm2.jpeg', 'https://rukminim1.flixcart.com/image/416/416/kp1imq80/computer/w/r/k/na-gaming-laptop-acer-original-imag3d63ezfxh63w.jpeg', 'Laptop, Power Adaptor, User Guide, Warranty Documents', 'Computers', 'HUAQIN, No.9 North Indl Rd, Dongguan Songshan Lake National High-Tech Idz, Dongguan, Guangdong, China', 'China', '1 Year International Travelers Warranty', '1 Year', 'Manufacturing Defects', 'Physical Damage'),
(14, 'ajanta-wall-clock', 'Ajanta Wall Clock', 'AJANTA Analog 32 cm X 32 cm Wall Clock (White, With Glass)', 4.4, 122585, 23433, 379, 465, 'RetailNet', 'Analog', 'Ajanta', 'Size: 32 cm x 32 cm, Frame Material: Glass, Clock Type: Analog', 'Clocks make a ticking noise as their mechanism counts out the seconds. The sound is feeble enough not to create a disturbance for the users.', 'White', 'https://rukminim1.flixcart.com/image/416/416/k0wqwsw0/wall-clock/q/h/f/analog-ajanta397white-analog-ajanta-original-imafkhkesmgavwxa.jpeg', 'https://rukminim1.flixcart.com/image/416/416/k0wqwsw0/wall-clock/x/v/f/analog-ajanta397ivory-analog-ajanta-original-imafkhkevztwym2s.jpeg', '1 Clock', 'Wall Clocks', 'Orpat industrial state Rajkot,Morbi,Gujarat-363641', 'India', '1 Year Warranty', '1 Year', 'NA', 'NA'),
(15, 'samsung-refrigerator', 'Samsung Refrigerator', 'Samsung 415 L Frost Free Double Door 3 Star Convertible Refrigerator', 4.3, 13463, 1452, 44590, 62000, 'Akshnav Online', 'RT42M553ES8', 'samsung', '415 L : Good for large families, Digital Inverter Compressor : Consumes lower electricity in comparison to a Normal compressor, 3 Star : For Energy savings up to 35%, Frost Free : Auto fridge defrost to stop ice-build up, Convertible: Offers you more space for all the food you need to store', 'Store food the smart way with this Samsung Frost-free Double Door Refrigerator. It comes with premium features like Convertible Freezer, Digital Display, Power Cool and much more. You can store more by freeing up to  88 litres of extra space, thanks to the Convertible Freezer. The Power Cool feature chills your food and beverages a lot faster by blowing cold air inside the refrigerator.', 'Elegant Inox - Pet', 'https://rukminim1.flixcart.com/image/416/416/jmi22kw0/refrigerator-new/k/w/z/rt42m553es8-tl-4-samsung-original-imaf9e2zdyh2czgz.jpeg', 'https://rukminim1.flixcart.com/image/416/416/kpinwy80/refrigerator-new/k/q/y/rt28t3743s8-hl-3-2020-samsung-original-imag3qf9pnsjubtt.jpeg', '1 Refrigerator, User Manual and Warranty Card', 'Refrigerators', 'Plot no 1, State Highway 15A, BID Dadri, Jhajjar, Haryana, 124103 India', 'India', ' 1 Year Warranty on Product and 10 Years Warranty on Compressor from Samsung', '1 Year', 'Against Defective Material and Workmanship All Parts Excluding Plastic Parts, Glassware, Bulb and Tube from the Date of Purchase', ' Any accessories external to the product Defects caused by improper use as determined by the company personnel Serial number is removed, altered or obliterated from the machine'),
(16, 'green-soul-chair', 'Green Soul Vienna Chair', 'Green Soul Vienna High Back Leatherette Office Executive Chair (Black)', 4.1, 1434, 310, 6990, 15982, 'Green Soul Ergonomic', 'Vienna High Back', 'green-soul', 'W x H: 62 cm x 110 cm (2 ft x 3 ft 7 in), Frame Material: Metal, Upholstery Type: Cushion, DIY - Basic assembly to be done with simple tools by the customer, comes with instructions., Adjustable Seat Height', 'With great power comes great responsibility and that sometimes could mean a long and tiring day. In such cases, Green Soul presents the perfect solution! The Green Soul Executive steel office chair is an ergonomically designed chair which is sure to provide ample support to you back and shoulders. Built on a strong metal frame, this office chair has high back padding with an extra layer of foam. The soft cushioned seat, and padded arms come together to create a feeling of comfort that you reluctant to get off your chair. A pneumatic height adjustment system, a torsion knob, and tilt lock provide a range of positions that you can shift to if you have been sitting in the same position for an extended period of time. Durable leatherette upholstery completes the look, creating a chair which is not only comfortable but is also a visual treat. Green Soul ensures that this executive chair will reach your doorstep.', 'Black', 'https://rukminim1.flixcart.com/image/416/416/ktszgy80/office-study-chair/8/7/c/pvc-polyvinyl-chloride-vienna-hb-black-flk-green-soul-original-imag72h2hyatexng.jpeg', 'https://rukminim1.flixcart.com/image/416/416/ksgehzk0/office-study-chair/a/f/z/pvc-polyvinyl-chloride-vienna-hb-fullred-flk-green-soul-original-imag6yeqzpe5my5c.jpeg', '1 Chair', 'Office & Study Chair', 'Green Soul Ergonomics Pvt. Ltd., Maharashtra, India. Customer Care:- +91 8448444695, info@greensoul.online', 'India', 'Your product is backed by 3 years warranty, go here https://greensoul.online/pages/warranty to register within 30 days after your purchase.', '3 Year', 'Warranty Includes replacement of parts for 3 years after purchase.', 'Warranty does not cover minor imperfections in the Product that broadly meet design specifications, or imperfections that do not materially alter the Product functionality.');

-- --------------------------------------------------------

--
-- Table structure for table `save_for_later`
--

CREATE TABLE `save_for_later` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `top_selection`
--

CREATE TABLE `top_selection` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_alt` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `tag` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_selection`
--

INSERT INTO `top_selection` (`id`, `img`, `img_alt`, `title`, `tag`, `url`) VALUES
(1, 'headphones', 'Headphones', 'Headphones', 'Explore Now', '#'),
(2, 'soundbars', 'Soundbars', 'Soundbars', 'Grab Now', '#'),
(3, 'tws', 'TWS Earbuds', 'TWS Earbuds', 'Shop Now', '#'),
(4, 'sport-shoes', 'Sport Shoes', 'Sport Shoes', 'New Collections', '#'),
(5, 'watches', 'Watches', 'Watches', 'Grab Now', '#'),
(6, 'ovens', 'Microwave Ovens', 'Microwave Ovens', 'Explore More', '#'),
(7, 'mobiles', 'Poco M2 Pro', 'Mobiles', 'Great Savings', '#'),
(8, 'trimmers', 'Trimmers', 'Trimmers', 'Discover Now', '#'),
(9, 'smartwatches', 'Smartwatches', 'Smartwatches', 'Grab Now', '#'),
(10, 'printers', 'Printers', 'Printers', 'Shop Now', '#'),
(11, 'pc-accesories', 'Dell Keyboard Mouse', 'PC Accesories', 'Great Savings', '#');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories_thumb`
--
ALTER TABLE `categories_thumb`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `category_nav`
--
ALTER TABLE `category_nav`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `discount_for_you`
--
ALTER TABLE `discount_for_you`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_title` (`product_title`);

--
-- Indexes for table `top_selection`
--
ALTER TABLE `top_selection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `categories_thumb`
--
ALTER TABLE `categories_thumb`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_nav`
--
ALTER TABLE `category_nav`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `discount_for_you`
--
ALTER TABLE `discount_for_you`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `top_selection`
--
ALTER TABLE `top_selection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
