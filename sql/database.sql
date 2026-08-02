-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2026 at 12:14 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `worker_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `req` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `adds` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(64) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `user_id`, `worker_id`, `name`, `req`, `adds`, `pic`, `status`, `category`) VALUES
(9, 0, 0, 'Создать сайт', 'Необходимо создать сайт по макету, на сайте должны быть 3 страницы: главная, контакты, каталог. Нужно реализовать слайдер на 3 пролистывания на главной странице, вывод товаров из БД.', 'Нативный JS, PHP', 'slide2.png', 'В ожидании', 'Веб-разработка'),
(11, 6, 16, 'Системное администрирование', 'Опыт работы с серверами.\r\nЗнание операционных систем.\r\nНавыки администрирования сетей – знание маршрутизации, VLAN, VPN, сетевой безопасности.\r\nЗнание баз данных – MySQL.', '', '', 'На рассмотрении', 'Системное администрирование'),
(12, 0, 18, 'Требуется разработчик на Python', 'Работа с Django;\r\nРабота с API – REST, GraphQL, интеграция сторонних сервисов.\r\nБезопасность кода – защита от SQL-инъекций, XSS, CSRF, безопасное хранение данных.\r\nОпыт DevOps – работа с Docker, Kubernetes, CI/CD (GitHub Actions, GitLab CI, Jenkins).', 'Навыки написания тестов – Unit-тесты, интеграционные тесты (pytest, Jest, PHPUnit и т. д.).', '', 'В работе', 'Программирование'),
(13, 0, 0, 'Требуется специалист технической документации', 'Опыт работы с технической документацией\r\nЗнание инструментов – MS Word\r\nОпыт работы с API-документацией \r\nУмение структурировать информацию', 'Грамотность', '', 'В ожидании', 'Техническая документация'),
(14, 0, 18, 'Нужен специалист ТП', 'Уровень L3, тикет система Jira, навыки устранения неполадок сетей, ПО', 'Коммуникабельность и устойчивость', '', 'На рассмотрении', 'Техническая поддержка'),
(15, 6, 16, 'zakaz', 'zsrszarz', 'arwarar', '', 'На рассмотрении', 'Программирование');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int NOT NULL,
  `worker_id` int NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `age` date NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `worker_id`, `name`, `surname`, `age`, `about`, `spec`, `skills`, `pic`) VALUES
(2, 3, 'Кирилл', 'Илюшечкин', '2005-10-18', 'GEKOSAJGJEKAPGJKPSEG', 'IT', '', ''),
(3, 8, 'rega', 'rega', '2005-10-18', 'gaswgwagawg', 'IT', 'Frontend, Backend, Sysadmin', 'photo_2025-01-11_21-45-14.jpg'),
(5, 9, 'rega', 'rega', '4444-12-04', 'gesgeswgseg', 'Design', '', ''),
(6, 10, 'uuiu', 'iuiuiu', '4422-12-04', 'testsetsts', 'Design', '', ''),
(8, 12, 'Kirill', 'Il', '2005-10-18', 'Kirill hello', 'IT', '', ''),
(10, 16, 'Кирилл', 'Илюшечкин', '2005-10-18', 'frontend', 'IT', 'Frontend, Backend, HTML, CSS, JS, PHP, FIGMA', 'kirill.jpg'),
(11, 18, 'ara', 'ara', '1111-12-18', 'warawrar', 'IT', 'Backend, Sysadmin, CSS', 'photo_2023-12-21_12-40-09.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Исполнитель'),
(2, 'Администратор'),
(3, 'Заказчик');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `role`) VALUES
(6, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 3),
(7, 'user1@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 3),
(8, 'user2@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 3),
(9, 'user3@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 3),
(10, '122@gmail.com', 'a0a080f42e6f13b3a2df133f073095dd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL,
  `status` varchar(64) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `email`, `pass`, `role`, `status`) VALUES
(3, 'ilyushechkin.kirill@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'approved'),
(8, 'rega@gmail.com', '39444744eb44843a6804d37ea223b3e1', 2, 'approved'),
(9, 'reg@gmail.com', '33c0ee425e2c0efe834afc1aa1e33a4c', 1, 'canceled'),
(10, 'iii@gmail.com', '36347412c7d30ae6fde3742bbc4f21b9', 1, 'canceled'),
(12, 'worker@gmail.com', '67e92c8765a9bc7fb2d335c459de9eb5', 1, 'approved'),
(13, 'worker1@gmail.com', '8cde3efd5b15177051db8b07845bb191', 1, 'pending'),
(16, 'work@gmail.com', '67e92c8765a9bc7fb2d335c459de9eb5', 1, 'approved'),
(17, 'wfwfaw@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'pending'),
(18, '232@gmail.com', 'be83ab3ecd0db773eb2dc1b0a17836a1', 1, 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
