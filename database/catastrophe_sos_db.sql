-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 sep. 2021 à 23:48
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `catastrophe_sos_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `accords`
--

CREATE TABLE `accords` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accords`
--

INSERT INTO `accords` (`id`, `user_id`, `offer_id`, `title`) VALUES
(1, 1, 1, 'porto'),
(2, 1, 1, 'aaaa'),
(3, 1, 1, 'aaaa');

-- --------------------------------------------------------

--
-- Structure de la table `asks`
--

CREATE TABLE `asks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `asks`
--

INSERT INTO `asks` (`id`, `user_id`, `title`, `description`, `city`, `capacity`, `date`, `created_at`, `updated_at`) VALUES
(1, NULL, 'porto', 'descri', 'JUNGLINSTER', '2', '2021-09-28', NULL, NULL),
(2, NULL, 'toto', 'araaggaah', 'Luxembourg', '3', '2021-09-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `poster`, `date`) VALUES
(1, 'Flood Echternach', 'Luxembourg warned of further floods across the country until midnight on Thursday, as thousands of people were forced out of their homes in a natural catastrophe that killed at least 42 people in neighbouring Germany.', 'https://blobsvc.wort.lu/picture/e72082da461f01d19357a42174c89216/653/391/wortv3/b32554dd09502dfb9db7d0ccac26160c1dab8d53', '16/07/2021'),
(2, 'Fire Remich', 'Authorities issued a red alert with a risk of major floods in the areas around the Sûre, Alzette and Chiers rivers. The comparatively small rivers are at greater risk of rising rapidly, the alert said, warning that the floods could have a “significant imp', 'https://images.rtl.fr/~c/770v513/rtl/www/1409621-disaster-girl.jpg', '16/07/2021'),
(4, 'Tornado Petange', 'A tornado ripped through southwestern Luxembourg on Friday, injuring 19 people, two seriously.Officials said around 160 buildings were damaged by the twister, which struck the towns of Petange and Kaerjeng, near the border with France and Belgium.', 'https://blobsvc.wort.lu/picture/1224dd3b66ed4b362fc4551fbf7799c9/1200/900/wortv3/0f965d2d5870ee051a7d1814080cf12ac6f8302f', '19/09/2019'),
(5, 'Tornado Luxembourg', 'The Friday tornado injured 19 people. Tageblatt says one of the two with serious injuries suffered a heart attack and was in critical condition.\r\nHundreds of firefighters, soldiers, police officers and volunteers cleaned up debris left behind.', 'https://chronicle.lu/images/2019/Aug/20190813_tornado-luxembourg-caritas-600-450.jpg', '19/08/2020'),
(6, 'Fire Luxembourg city', 'The top floor and roof structure of the building were engulfed and the fire spread to an adjacent building on Avenue de la Gare where the pressure caused glass to burst onto the street. Police units evacuated all residents in the surrounding area and afte', 'https://chronicle.lu/images/K8//20150728_Gare-PGD-600x400.jpg', '28/08/2015'),
(7, 'Fire Esch', 'A fire broke out late Monday afternoon at the back of the Showtime show café, rue d\'Audun in Esch / Alzette, which was destroyed by flames.', 'https://blobsvc.wort.lu/picture/a3e9cb2168727a0243edd7b5ed795efc/1240/826/wortv3/60951e99599551ef1820703018955c639f103fac', '12/07/2018'),
(8, 'snow in Luxembourg', 'Dozens of people were evacuated and emergency services responded to more than 1,000 calls for help after flooding in Luxembourg following heavy rain on 14 July 2021. The government said material damage is significant.', 'https://floodlist.com/wp-content/uploads/2021/07/Flooding-in-Echternach-Luxembourg-July-2021-CGDIS.jpg', '12/09/2021'),
(9, 'snow in Luxembourg', 'Dozens of people were evacuated and emergency services responded to more than 1,000 calls for help after flooding in Luxembourg following heavy rain on 14 July 2021. The government said material damage is significant.', 'https://floodlist.com/wp-content/uploads/2021/07/Flooding-in-Echternach-Luxembourg-July-2021-CGDIS.jpg', '12/09/2021'),
(10, 'rain in Luxembourg', 'According to Luxembourg lore, summer is over when the Schueberfouer starts in August. It seems that autumn has arrived a little early this year, with a continual downpours drenching the Grand Duchy these past few days.\r\n', 'https://static.actu.fr/uploads/2021/07/orages-pluie-960x640.jpg', '15/09/2019'),
(11, 'HOT in Luxembourg', 'According to Luxembourg lore, summer is over when the Schueberfouer starts in August. It seems that autumn has arrived a little early this year, with a continual downpours drenching the Grand Duchy these past few days.\r\n', 'https://assets.paperjam.lu/images/articles/risque-danger-extreme-a-cause-/0.5/0.5/640/426/250528.jpg', '15/09/2019');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_08_26_115902_create_user_table', 1),
(5, '2021_08_26_131742_create_event_table', 1),
(6, '2021_08_28_180437_create_offer_table', 1),
(7, '2021_08_28_180539_create_ask_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(255) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id`, `title`, `description`, `city`, `capacity`, `date`, `created_at`, `updated_at`) VALUES
(1, 'aaaa', 'zzzzzzzzzzz', 'JUNGLINSTER', 3, '2021-09-21', '2021-09-11 17:59:05', '2021-09-11 17:59:05'),
(2, 'float', 'descri', 'JUNGLINSTER', 3, '2021-09-09', '2021-09-11 18:25:01', '2021-09-11 18:25:01');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `email_verified_at`, `city`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'isham', '$2y$10$kh7bL4PT3zK.Wbvtcjz5leEzHQl8NqB.rswvAE02lYcqsR2Jqq0ya', 'HICHAM', 'LACHGAR', 'aitisham@gmail.com', '2021-09-11 17:49:21', 'junglinster', '691443222', '2021-09-11 17:48:53', '2021-09-11 17:49:21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accords`
--
ALTER TABLE `accords`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `asks`
--
ALTER TABLE `asks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accords`
--
ALTER TABLE `accords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `asks`
--
ALTER TABLE `asks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
