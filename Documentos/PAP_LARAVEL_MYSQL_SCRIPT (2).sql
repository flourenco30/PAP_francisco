-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2019 às 17:06
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
(2, '2019-06-07', '19:00:00', 'sdfsdff', 1, 1, '2019-06-05 23:00:00', '2019-06-05 23:00:00'),
(4, '2019-06-19', '11:00:00', NULL, 1, 5, '2019-06-06 07:46:29', '2019-06-06 07:46:29'),
(5, '2019-06-21', '12:00:00', NULL, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento_customs`
--

CREATE TABLE `agendamento_customs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Data` date NOT NULL,
  `Hora` time NOT NULL,
  `Notas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `servico_custom_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `agendamento_customs`
--

INSERT INTO `agendamento_customs` (`id`, `Data`, `Hora`, `Notas`, `user_id`, `servico_custom_id`, `created_at`, `updated_at`) VALUES
(2, '2019-06-25', '11:00:00', NULL, 1, 3, '2019-06-06 13:32:14', '2019-06-06 13:32:14'),
(3, '2019-06-28', '15:00:00', NULL, 2, 4, '2019-06-06 13:44:49', '2019-06-06 13:44:49');

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
(1, 'Lavagem Manual', 20, '2019-06-06 06:57:00', '2019-06-06 06:57:00', NULL),
(2, 'Hidratante Pneus', 5, '2019-06-06 07:54:04', '2019-06-06 07:54:04', NULL),
(3, 'Limpeza Vidros', 5, '2019-06-06 10:06:38', '2019-06-06 10:06:38', NULL);

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
(2, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica_servico_custom`
--

CREATE TABLE `caracteristica_servico_custom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caracteristica_id` bigint(20) UNSIGNED NOT NULL,
  `servico_custom_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `caracteristica_servico_custom`
--

INSERT INTO `caracteristica_servico_custom` (`id`, `caracteristica_id`, `servico_custom_id`, `created_at`, `updated_at`) VALUES
(4, 1, 3, NULL, NULL),
(5, 2, 3, NULL, NULL),
(6, 1, 4, NULL, NULL),
(7, 2, 4, NULL, NULL),
(8, 3, 4, NULL, NULL);

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
(11, '2019_05_30_133754_add_column_deleted_at_to_users_table', 1),
(12, '2019_06_06_075358_create_agendamento_customs_table', 1);

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
(1, 'Basic', 25, '2019-06-06 06:56:54', '2019-06-06 06:56:54', NULL),
(2, 'Standard', 40, NULL, NULL, NULL),
(3, 'Advanced', 70, NULL, NULL, NULL),
(4, 'Basic Moto', 10, NULL, NULL, NULL),
(5, 'Mudança Óleo', 45, NULL, NULL, NULL),
(6, 'Mudança Óleo/Filtros', 90, NULL, '2019-06-06 10:07:05', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_customs`
--

CREATE TABLE `servico_customs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Total` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servico_customs`
--

INSERT INTO `servico_customs` (`id`, `Total`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 25, 1, '2019-06-06 10:07:39', '2019-06-06 10:07:39'),
(4, 30, 2, '2019-06-06 13:44:34', '2019-06-06 13:44:34');

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
(1, 'Admin', 'admin@ferreira-auto.pt', NULL, '$2y$10$rUeb6315ujwjKPYsJgY.lu9ktv1BfIGfR9y6IDGfMrxs/mIiGPMTe', NULL, NULL, NULL, '2019-06-06 06:56:38', '2019-06-06 06:56:38', NULL),
(2, 'Francisco Lourenço', 'ffl@gmail.com', NULL, '$2y$10$XF5SAGRjVE4HHeIfb0mI6.6fWotG6gTTUVgDK2qJQG002x0OL5CO6', NULL, NULL, NULL, '2019-06-06 13:44:23', '2019-06-06 13:44:23', NULL);

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
-- Indexes for table `agendamento_customs`
--
ALTER TABLE `agendamento_customs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agendamento_customs_user_id_foreign` (`user_id`),
  ADD KEY `agendamento_customs_servico_custom_id_foreign` (`servico_custom_id`);

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
-- Indexes for table `caracteristica_servico_custom`
--
ALTER TABLE `caracteristica_servico_custom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caracteristica_servico_custom_caracteristica_id_foreign` (`caracteristica_id`),
  ADD KEY `caracteristica_servico_custom_servico_custom_id_foreign` (`servico_custom_id`);

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
-- Indexes for table `servico_customs`
--
ALTER TABLE `servico_customs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servico_customs_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agendamento_customs`
--
ALTER TABLE `agendamento_customs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caracteristica_servico`
--
ALTER TABLE `caracteristica_servico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `caracteristica_servico_custom`
--
ALTER TABLE `caracteristica_servico_custom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servico_customs`
--
ALTER TABLE `servico_customs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Limitadores para a tabela `agendamento_customs`
--
ALTER TABLE `agendamento_customs`
  ADD CONSTRAINT `agendamento_customs_servico_custom_id_foreign` FOREIGN KEY (`servico_custom_id`) REFERENCES `servico_customs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `agendamento_customs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `caracteristica_servico`
--
ALTER TABLE `caracteristica_servico`
  ADD CONSTRAINT `caracteristica_servico_caracteristica_id_foreign` FOREIGN KEY (`caracteristica_id`) REFERENCES `caracteristicas` (`id`),
  ADD CONSTRAINT `caracteristica_servico_servico_id_foreign` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`);

--
-- Limitadores para a tabela `caracteristica_servico_custom`
--
ALTER TABLE `caracteristica_servico_custom`
  ADD CONSTRAINT `caracteristica_servico_custom_caracteristica_id_foreign` FOREIGN KEY (`caracteristica_id`) REFERENCES `caracteristicas` (`id`),
  ADD CONSTRAINT `caracteristica_servico_custom_servico_custom_id_foreign` FOREIGN KEY (`servico_custom_id`) REFERENCES `servico_customs` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `servico_customs`
--
ALTER TABLE `servico_customs`
  ADD CONSTRAINT `servico_customs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
