-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2019 às 14:42
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ferreira_auto_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Data` date NOT NULL,
  `Hora` time NOT NULL,
  `Notas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `servi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `Data`, `Hora`, `Notas`, `user_id`, `servi_id`, `created_at`, `updated_at`) VALUES
(6, '2019-05-17', '11:00:00', NULL, 3, 2, '2019-05-31 12:23:52', '2019-05-31 12:23:52'),
(7, '2019-05-10', '10:00:00', NULL, 3, 2, '2019-05-31 12:24:46', '2019-05-31 12:24:46'),
(8, '2019-05-23', '11:00:00', NULL, 3, 1, '2019-05-31 12:25:19', '2019-05-31 12:25:19'),
(9, '2019-05-17', '16:00:00', NULL, 3, 2, '2019-05-31 12:26:06', '2019-05-31 12:26:06'),
(10, '2019-05-22', '12:00:00', NULL, 3, 2, '2019-05-31 12:26:31', '2019-05-31 12:26:31'),
(11, '2019-05-17', '17:00:00', NULL, 3, 2, '2019-05-31 12:29:01', '2019-05-31 12:29:01'),
(12, '2019-05-17', '18:00:00', NULL, 3, 3, '2019-05-31 13:08:17', '2019-05-31 13:08:17'),
(13, '2019-05-22', '08:30:00', NULL, 3, 3, '2019-05-31 13:08:36', '2019-05-31 13:08:36'),
(14, '2019-06-13', '13:00:00', 'asdasda', 1, 2, '2019-06-04 08:31:07', '2019-06-04 08:31:07'),
(15, '2019-06-21', '12:00:00', 'sdfasdf', 1, 2, '2019-06-04 08:31:18', '2019-06-04 08:31:18'),
(16, '2019-06-25', '13:00:00', 'sdfsdf', 1, 2, '2019-06-04 08:31:35', '2019-06-04 08:31:35'),
(17, '2019-06-29', '15:00:00', 'sdfsdf', 1, 2, '2019-06-04 08:32:08', '2019-06-04 08:32:08'),
(18, '2019-06-27', '14:00:00', NULL, 1, 2, '2019-06-04 09:07:02', '2019-06-04 09:07:02'),
(19, '2019-06-20', '14:00:00', NULL, 1, 2, '2019-06-04 09:07:21', '2019-06-04 09:07:21'),
(20, '2019-06-13', '14:00:00', 'sdfsdf', 1, 2, '2019-06-04 09:07:57', '2019-06-04 09:07:57'),
(21, '2019-06-03', '12:00:00', NULL, 1, 2, '2019-06-04 09:27:29', '2019-06-04 09:27:29'),
(22, '2019-06-05', '11:00:00', NULL, 1, 1, '2019-06-04 09:28:05', '2019-06-04 09:28:05'),
(23, '2019-06-04', '12:00:00', NULL, 1, 2, '2019-06-04 09:28:22', '2019-06-04 09:28:22'),
(24, '2019-06-05', '12:00:00', NULL, 1, 2, '2019-06-04 09:30:09', '2019-06-04 09:30:09'),
(25, '2019-06-13', '15:00:00', NULL, 1, 2, '2019-06-04 09:30:52', '2019-06-04 09:30:52'),
(26, '2019-06-12', '10:00:00', NULL, 1, 2, '2019-06-04 09:31:28', '2019-06-04 09:31:28'),
(27, '2019-06-21', '14:00:00', NULL, 1, 2, '2019-06-04 09:33:32', '2019-06-04 09:33:32'),
(28, '2019-06-26', '14:00:00', NULL, 1, 2, '2019-06-04 09:33:59', '2019-06-04 09:33:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `desc`, `preco`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lavagem Manual', 15, '2019-05-30 13:52:59', '2019-05-30 13:52:59', NULL),
(2, 'Limpeza Vidros', 5, '2019-05-30 13:53:11', '2019-05-30 13:53:11', NULL),
(3, 'Hidratante Pneus', 5, '2019-05-30 13:53:17', '2019-05-30 13:53:17', NULL),
(7, 'Basic', 20, '2019-05-30 14:20:29', '2019-05-30 14:20:29', NULL),
(8, 'Aplicação de Cera', 15, '2019-05-30 14:20:36', '2019-05-30 14:20:36', NULL),
(9, 'Aspiração Interior', 10, '2019-05-30 14:20:53', '2019-05-30 14:20:53', NULL),
(10, 'Standard', 40, '2019-05-30 14:31:43', '2019-05-30 14:31:43', NULL),
(11, 'Limpeza e acondicionamento dos estofos', 25, '2019-05-30 14:32:05', '2019-05-30 14:32:05', NULL),
(12, 'Limpeza e acondicionamento de eplásticos e vinil', 30, '2019-05-30 14:32:21', '2019-05-30 14:32:21', NULL),
(13, '10 pontos de controlo', 20, '2019-05-31 06:27:59', '2019-05-31 06:27:59', NULL),
(14, 'Mão de obra incluida', 15, '2019-05-31 06:28:24', '2019-05-31 06:28:24', NULL),
(15, 'Óleo certificado', 10, '2019-05-31 06:28:41', '2019-05-31 06:28:41', NULL),
(16, 'Óleo e Filtros certificados', 30, '2019-05-31 06:29:55', '2019-05-31 06:29:55', NULL),
(17, '70 pontos de controlo', 30, '2019-05-31 06:30:09', '2019-05-31 06:30:09', NULL),
(18, 'Mão de obra incluida', 20, '2019-05-31 06:30:21', '2019-05-31 06:30:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica_servico`
--

CREATE TABLE `caracteristica_servico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caracteristica_id` bigint(20) UNSIGNED NOT NULL,
  `servico_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `caracteristica_servico`
--

INSERT INTO `caracteristica_servico` (`id`, `caracteristica_id`, `servico_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 3, NULL, NULL),
(11, 11, 3, NULL, NULL),
(12, 12, 3, NULL, NULL),
(13, 1, 4, NULL, NULL),
(14, 12, 4, NULL, NULL),
(15, 13, 5, NULL, NULL),
(16, 14, 5, NULL, NULL),
(17, 15, 5, NULL, NULL),
(18, 16, 6, NULL, NULL),
(19, 17, 6, NULL, NULL),
(20, 18, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica_servicustom`
--

CREATE TABLE `caracteristica_servicustom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carac_id` bigint(20) UNSIGNED NOT NULL,
  `serviCustom_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_27_140212_create_caracteristicas_table', 1),
(4, '2019_05_27_140224_create_servicos_table', 1),
(5, '2019_05_27_140441_create_caracterisitcas_servico_table', 1),
(6, '2019_05_27_141006_create_servico__customs_table', 1),
(7, '2019_05_27_141016_create_agendamentos_table', 1),
(8, '2019_05_27_141250_create_caracterisitcas_servico_custom_table', 1),
(9, '2019_05_30_133621_add_column_deleted_at_to_servico_table', 1),
(10, '2019_05_30_133735_add_column_deleted_at_to_caracteristicas_table', 1),
(11, '2019_05_30_133754_add_column_deleted_at_to_users_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `preco`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Basic', 20, '2019-05-30 13:52:07', '2019-05-30 13:52:07', NULL),
(2, 'Standard', 40, '2019-05-30 13:52:13', '2019-05-30 13:52:13', NULL),
(3, 'Advanced', 60, '2019-05-30 13:52:22', '2019-05-30 13:52:22', NULL),
(4, 'Basic Moto', 15, '2019-05-30 13:52:31', '2019-05-30 13:52:31', NULL),
(5, 'Mudança Óleo', 40, '2019-05-30 13:52:39', '2019-05-30 13:52:39', NULL),
(6, 'Mudança Óleo/Filtros', 80, '2019-05-30 13:52:44', '2019-05-30 13:52:44', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico__customs`
--

CREATE TABLE `servico__customs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Total` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` int(11) DEFAULT NULL,
  `nif` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contacto`, `nif`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@ferreira-auto.pt', NULL, '$2y$10$K/ppJZEyuL8E23Q36MhGQeLN3u6SVXJdbaaWUBzjkTYezgoQZ6pTa', NULL, NULL, NULL, '2019-05-30 13:51:57', '2019-05-30 13:51:57', NULL),
(2, 'Francisco Lourenço', 'lourencofrancisco00@gmail.com', NULL, '$2y$10$a6QIel2mpaVysM0NHXGpvuKcV9GdnRBNKvu.Oq46FiK9bjyrcfYeK', NULL, NULL, NULL, '2019-05-30 14:15:42', '2019-05-30 14:15:42', NULL),
(3, 'Francisco Lourenço', 'ffl@gmail.com', NULL, '$2y$10$x7OD4.qjpXG9y1u7Te0iTuPvDuxzlJUGM4n3zuojBJQ1UHpnrWQ..', NULL, NULL, 'fSqaydFsaOSYn0oW22g2f0HhB4yoLI2yGV84r8P7KFZTtRP7jX7Z5ZIm7dNA', '2019-05-31 08:33:52', '2019-05-31 08:33:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agendamentos_user_id_foreign` (`user_id`),
  ADD KEY `agendamentos_servi_id_foreign` (`servi_id`);

--
-- Indexes for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caracteristica_servico`
--
ALTER TABLE `caracteristica_servico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caracteristica_servico_caracteristica_id_foreign` (`caracteristica_id`),
  ADD KEY `caracteristica_servico_servico_id_foreign` (`servico_id`);

--
-- Indexes for table `caracteristica_servicustom`
--
ALTER TABLE `caracteristica_servicustom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caracteristica_servicustom_carac_id_foreign` (`carac_id`),
  ADD KEY `caracteristica_servicustom_servicustom_id_foreign` (`serviCustom_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servico__customs`
--
ALTER TABLE `servico__customs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servico__customs_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `caracteristica_servico`
--
ALTER TABLE `caracteristica_servico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `caracteristica_servicustom`
--
ALTER TABLE `caracteristica_servicustom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servico__customs`
--
ALTER TABLE `servico__customs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_servi_id_foreign` FOREIGN KEY (`servi_id`) REFERENCES `servicos` (`id`),
  ADD CONSTRAINT `agendamentos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `caracteristica_servico`
--
ALTER TABLE `caracteristica_servico`
  ADD CONSTRAINT `caracteristica_servico_caracteristica_id_foreign` FOREIGN KEY (`caracteristica_id`) REFERENCES `caracteristicas` (`id`),
  ADD CONSTRAINT `caracteristica_servico_servico_id_foreign` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`);

--
-- Limitadores para a tabela `caracteristica_servicustom`
--
ALTER TABLE `caracteristica_servicustom`
  ADD CONSTRAINT `caracteristica_servicustom_carac_id_foreign` FOREIGN KEY (`carac_id`) REFERENCES `caracteristicas` (`id`),
  ADD CONSTRAINT `caracteristica_servicustom_servicustom_id_foreign` FOREIGN KEY (`serviCustom_id`) REFERENCES `servico__customs` (`id`);

--
-- Limitadores para a tabela `servico__customs`
--
ALTER TABLE `servico__customs`
  ADD CONSTRAINT `servico__customs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
