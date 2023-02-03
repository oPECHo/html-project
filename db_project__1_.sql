



CREATE TABLE `tb_basket` (
  `id_basket` int(5) NOT NULL,
  `basket_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_person` int(13) NOT NULL,
  `status_basket` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_basket`
--

INSERT INTO `tb_basket` (`id_basket`, `basket_date`, `id_person`, `status_basket`) VALUES
(53, '2020-02-15 02:53:56', 20, 2),
(54, '2020-02-10 07:27:58', 31, 2),
(55, '2020-02-15 02:54:10', 32, 2),
(56, '2020-02-15 02:54:19', 16, 2),
(57, '2020-02-15 03:01:33', 16, 2),
(58, '2020-02-15 04:48:49', 16, 0),
(59, '2020-02-15 04:49:05', 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_basket_detail`
--

CREATE TABLE `tb_basket_detail` (
  `id_detail` int(10) NOT NULL,
  `id_basket` int(5) NOT NULL,
  `id_product` int(6) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_basket_detail`
--

INSERT INTO `tb_basket_detail` (`id_detail`, `id_basket`, `id_product`, `qty`) VALUES
(53, 51, 21, 5),
(55, 53, 21, 10),
(56, 54, 21, 10),
(57, 54, 35, 1),
(58, 54, 54, 1),
(59, 55, 35, 10),
(60, 56, 54, 7),
(61, 57, 46, 2),
(62, 58, 22, 1),
(63, 59, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_person` int(13) NOT NULL,
  `num_person` varchar(13) NOT NULL,
  `prefix` varchar(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_person`, `num_person`, `prefix`, `firstname`, `lastname`, `username`, `password`, `gmail`, `tel`, `address`, `status`) VALUES
(16, '987654', 'MR.', 'Teangsuan', 'Teangsuan', 'Leng', 'ThanatornLeng', 'ThanatornLeng@gmail.com', '123456', 'Trang', 1),
(17, '13425', 'MR.', 'Nattanon', 'Chumrit', 'NattanonCH', 'nattanon0280', 'nattanon0280@gmail.com', '0899720280', '187 หมู่ 2 ต.บ้านนา อ.ปะเหลียน จ.ตรัง 92140', 1),
(20, '6969', 'Mr.', 'Akrit', 'Choodet', 'Pulegods', 'akritchoodet12', 'akritchoodet12@gmail.com', '0809678449', '-', 1),
(24, '123456', 'cho', 'Gay', 'Peach', 'GayPeach', 'GayPeach007', 'GayPeach007@gmail.com', '007', 'cfbvxcv', 1),
(25, '5502', 'Mr.', 'Thanatorn', 'Teangsuan', 'Leng', '0874771492', 'ThanatornLeng@gmail.com', '0874771492', '122/2 Trang Yantakao 52140', 1),
(26, '10515', 'MR.', 'Tanakrit', 'Bunyoung', 'Ohm', '0951906456', 'Tanakrit64566@gmail.com', '0951906456', 'Trang', 1),
(31, '425245', 'Mr', 'sdfsdf', 'sdfdsf', 'dsfs', '123456', 'ThanatornLengff@gmail.com', '43534', 'วังพระที่นั่ง', 1),
(32, '17120', 'Mr', 'Peerawat', 'Kongban', 'KakGrean', '123456', 'Peerawat416@gmail.com', '0123456789', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(6) NOT NULL,
  `nameproduct` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `number` int(6) NOT NULL,
  `status` int(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nameproduct`, `category`, `number`, `status`, `image`, `price`) VALUES
(21, 'Mama_Souppork', '1', 0, 1, '20200209-080952-9673.jpg', 2),
(22, 'Mama_Seafood', '1', 20, 1, '20200209-081016-2061.jpg', 1),
(23, 'Mama_Tomyumkung', '1', 25, 1, '20200209-081038-1769.jpg', 1),
(24, 'Nutripasta', '1', 9, 1, '20200209-081059-8647.jpg', 3),
(25, 'BlackpepperGrap', '1', 8, 1, '20200209-081123-5302.jpg', 5),
(26, 'KoreanHotChiliBeef', '1', 5, 1, '20200209-081200-3733.jpg', 2),
(27, 'Lip_MISSROSS', '2', 100, 1, '20200209-081220-4080.jpg', 75),
(28, 'STYLENANDA', '2', 150, 1, '20200209-081259-8155.jpg', 100),
(29, 'Lip_Gucci', '2', 10, 1, '20200209-081317-922.jpg', 500),
(31, 'Lip_30thL OREAL', '2', 20, 1, '20200209-081339-5473.jpg', 830),
(32, ' Perfume_Chanel', '2', 25, 1, '20200209-081359-1998.jpg', 415),
(35, 'Nike_Majista2', '5', 9, 1, '20200209-082224-1909.jpg', 150),
(36, 'Shoe_PAN', '5', 20, 1, '20200209-082246-7640.jpg', 30),
(37, 'Football_Nike', '5', 15, 1, '20200209-082322-9187.jpg', 65),
(38, 'Futsal_Adidas', '5', 35, 1, '20200209-082354-1107.jpg', 30),
(39, 'Dubbell 50 kg', '5', 10, 1, '20200209-082416-2688.jpg', 100),
(40, 'BasketBall', '5', 50, 1, '20200209-082441-9335.jpg', 35),
(41, 'Dior_BackStage', '2', 10, 1, '20200209-081841-5002.jpg', 50),
(42, 'pen', '4', 25, 1, '20200208-043353-9197.jpg', 1),
(43, 'pencil', '4', 20, 1, '20200208-043428-8439.jpg', 1),
(44, 'Book', '4', 20, 1, '20200208-043447-3118.jpg', 2),
(45, 'Eraser', '4', 20, 1, '20200208-043506-9814.jpg', 1),
(46, ' Liquid', '4', 18, 1, '20200208-043607-3837.jpg', 2),
(47, 'Ruler', '4', 20, 1, '20200208-043649-8736.jpg', 1),
(48, 'deskWork', '3', 5, 1, '20200208-043737-2519.jpg', 120),
(49, 'File holder', '3', 10, 1, '20200208-043858-8475.jpg', 1),
(50, 'Printer', '3', 0, 1, '20200208-043943-7458.jpg', 99),
(51, 'computer', '3', 0, 1, '20200208-044014-3637.jpg', 1685),
(52, 'chairWork', '3', 12, 1, '20200208-044131-7253.jpg', 15),
(53, 'Book', '3', 50, 1, '20200208-044151-142.jpg', 1),
(54, 'Bear_Doll', '6', 11, 1, '20200208-044213-9228.jpg', 10),
(56, 'We_Bear_Bears', '6', 10, 1, '20200208-044316-5276.jpg', 15),
(57, 'Animal_Doll', '6', 60, 1, '20200208-044402-7482.jpg', 8),
(58, 'Kitty_Doll', '6', 10, 1, '20200208-044421-2366.jpg', 14),
(59, 'Doll_Key', '6', 65, 1, '20200208-044454-724.jpg', 3),
(60, 'Pig_Doll', '6', 25, 1, '20200208-044642-756.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`id_type`, `name_type`, `active`) VALUES
(1, 'instant_food', 1),
(2, 'cosmetics', 1),
(3, 'office_supplies', 1),
(4, 'school_supplies', 1),
(5, 'sport_supplies', 1),
(6, 'gift_shop', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_basket`
--
ALTER TABLE `tb_basket`
  ADD PRIMARY KEY (`id_basket`);

--
-- Indexes for table `tb_basket_detail`
--
ALTER TABLE `tb_basket_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_basket`
--
ALTER TABLE `tb_basket`
  MODIFY `id_basket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_basket_detail`
--
ALTER TABLE `tb_basket_detail`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_person` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_type`
--
ALTER TABLE `tb_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
