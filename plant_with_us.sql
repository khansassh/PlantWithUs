-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3307
-- Generation Time: Dec 05, 2024 at 12:39 PM
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
-- Database: `plant_with_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `created_at`) VALUES
(1, 7, 'First time planting I used this app, this is so helpful!', '2024-12-05 09:52:11'),
(2, 7, 'Very easy instructions to follow, I will be using this app more often in the future.', '2024-12-05 09:53:09'),
(3, 7, 'For those who want to start planting, try this app, it helps my planting journey so much!', '2024-12-05 09:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(11) NOT NULL,
  `plant_name` varchar(255) NOT NULL,
  `plant_description` text DEFAULT NULL,
  `plant_type` varchar(255) DEFAULT NULL,
  `watering_needs` text DEFAULT NULL,
  `light_requirements` text DEFAULT NULL,
  `common_diseases` text DEFAULT NULL,
  `care_instructions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `plant_name`, `plant_description`, `plant_type`, `watering_needs`, `light_requirements`, `common_diseases`, `care_instructions`) VALUES
(1, 'Mango', 'A tropical fruit tree known for its sweet, juicy fruit.', 'Tree', 'Water every 1-2 weeks', 'Full sunlight', 'Powdery mildew, anthracnose', 'Ensure the soil is well-drained. Prune dead branches and avoid overwatering.'),
(2, 'Orange', 'A citrus tree that produces round, sweet, and tangy fruit.', 'Tree', 'Water deeply once a week, more during hot weather', 'Full sunlight', 'Citrus canker, scale insects', 'Mulch around the base to retain moisture. Fertilize in spring.'),
(3, 'Apple', 'A deciduous tree that produces apples.', 'Tree', 'Water weekly, ensure the soil is moist but not waterlogged', 'Full sunlight', 'Apple scab, aphids', 'Prune regularly, avoid overwatering, and protect from pests.'),
(4, 'Strawberry', 'A low-growing plant that produces sweet, red berries.', 'Perennial', 'Water 1-2 inches per week, more in hot weather', 'Partial sunlight', 'Gray mold, aphids', 'Plant in well-drained soil, avoid standing water.'),
(5, 'Tomato', 'A popular fruit/vegetable plant known for its red, juicy fruit.', 'Annual', 'Water consistently, keep soil moist but not soggy', 'Full sunlight', 'Blossom end rot, aphids', 'Provide support for the plants and prune regularly.'),
(6, 'Cucumber', 'A fast-growing vine plant that produces cucumbers.', 'Annual', 'Water frequently, especially during dry periods', 'Full sunlight', 'Powdery mildew, aphids', 'Provide trellis support and regularly check for pests.'),
(7, 'Sunflower', 'A tall annual plant with large yellow flowers that follow the sun.', 'Annual', 'Water deeply once a week', 'Full sunlight', 'Rust, aphids', 'Plant in well-drained soil and give plenty of space for growth.'),
(8, 'Rose', 'A woody perennial plant known for its fragrant and colorful flowers.', 'Perennial', 'Water regularly, especially in dry weather', 'Full sunlight to partial shade', 'Black spot, aphids', 'Prune dead flowers and branches, and fertilize in spring.'),
(9, 'Lavender', 'A fragrant, purple-flowered herb known for its calming scent.', 'Perennial', 'Water only when soil is dry, avoid overwatering', 'Full sunlight', 'Root rot, aphids', 'Plant in well-drained soil, prune after flowering, and avoid excess moisture.'),
(10, 'Basil', 'A fragrant herb commonly used in cooking, especially Italian dishes.', 'Annual', 'Water regularly, keep soil moist but not soggy', 'Full sunlight', 'Aphids, downy mildew', 'Pinch back leaves to encourage bushy growth and harvest before flowering.');

-- --------------------------------------------------------

--
-- Table structure for table `plant_activities`
--

CREATE TABLE `plant_activities` (
  `id` int(11) NOT NULL,
  `plant_id` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `activity_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant_activities`
--

INSERT INTO `plant_activities` (`id`, `plant_id`, `day`, `activity_description`) VALUES
(76, 1, 1, 'Water the plant thoroughly and ensure soil is well-drained.'),
(77, 1, 2, 'Check for pests, especially aphids and scale insects.'),
(78, 1, 3, 'Prune dead or yellowing leaves and branches.'),
(79, 1, 4, 'Inspect for any fungal issues like powdery mildew.'),
(80, 1, 5, 'Water the plant again if soil feels dry.'),
(81, 1, 6, 'Add organic mulch around the base to retain moisture.'),
(82, 1, 7, 'Ensure the plant is getting enough sunlight, about 6-8 hours daily.'),
(83, 1, 8, 'Fertilize the plant with balanced fertilizer.'),
(84, 1, 9, 'Water deeply.'),
(85, 1, 10, 'Inspect the plant for any insect activity or disease signs.'),
(86, 1, 11, 'Remove any dead flowers or fruit.'),
(87, 1, 12, 'Prune new growth to encourage branching.'),
(88, 1, 13, 'Water the plant if needed.'),
(89, 1, 14, 'Check the plant for any signs of anthracnose or leaf spots.'),
(90, 1, 15, 'Inspect the tree for pests like caterpillars and treat accordingly.'),
(91, 1, 16, 'Water thoroughly.'),
(92, 1, 17, 'Check the health of the roots, ensure the tree is stable.'),
(93, 1, 18, 'Remove any fallen leaves or debris from the base.'),
(94, 1, 19, 'Water if the soil feels dry.'),
(95, 1, 20, 'Prune dead or damaged branches.'),
(96, 1, 21, 'Inspect the tree for new growth and pest issues.'),
(97, 1, 22, 'Check soil moisture and water if necessary.'),
(98, 1, 23, 'Ensure the plant is getting enough sunlight.'),
(99, 1, 24, 'Remove weeds around the base of the tree.'),
(100, 1, 25, 'Check for signs of root rot and correct watering.'),
(101, 1, 26, 'Water the plant deeply.'),
(102, 1, 27, 'Inspect the plant for powdery mildew and treat if necessary.'),
(103, 1, 28, 'Apply organic pesticide if pests are visible.'),
(104, 1, 29, 'Check the soil pH and adjust if necessary.'),
(105, 1, 30, 'Prune the plant to encourage healthy growth.'),
(106, 2, 1, 'Water deeply and ensure the soil is moist.'),
(107, 2, 2, 'Check for pests like aphids or scale insects.'),
(108, 2, 3, 'Prune any dead branches and leaves.'),
(109, 2, 4, 'Inspect for citrus canker or other fungal diseases.'),
(110, 2, 5, 'Water deeply again.'),
(111, 2, 6, 'Mulch around the base to retain moisture.'),
(112, 2, 7, 'Check for any signs of aphid infestation.'),
(113, 2, 8, 'Fertilize with a balanced fertilizer.'),
(114, 2, 9, 'Water as needed.'),
(115, 2, 10, 'Prune dead flowers or fruit.'),
(116, 2, 11, 'Inspect the plant for any signs of disease.'),
(117, 2, 12, 'Check the soil moisture and adjust as necessary.'),
(118, 2, 13, 'Remove any weeds around the base.'),
(119, 2, 14, 'Check the roots for signs of rot.'),
(120, 2, 15, 'Inspect the tree for any pest issues.'),
(121, 2, 16, 'Water deeply.'),
(122, 2, 17, 'Inspect new growth for signs of damage or pests.'),
(123, 2, 18, 'Check the tree for signs of stress or leaf drop.'),
(124, 2, 19, 'Check the plant for citrus canker or other infections.'),
(125, 2, 20, 'Apply pesticide if necessary.'),
(126, 2, 21, 'Water the plant and ensure even moisture distribution.'),
(127, 2, 22, 'Prune dead or diseased branches.'),
(128, 2, 23, 'Inspect the tree for new growth.'),
(129, 2, 24, 'Water deeply again if the soil feels dry.'),
(130, 2, 25, 'Remove any fallen leaves or debris.'),
(131, 2, 26, 'Check the health of the roots and add compost.'),
(132, 2, 27, 'Inspect the tree for pests and treat if needed.'),
(133, 2, 28, 'Fertilize the tree with a citrus-specific fertilizer.'),
(134, 2, 29, 'Ensure the tree is getting plenty of sunlight.'),
(135, 2, 30, 'Prune any branches that are growing out of shape.'),
(136, 3, 1, 'Water the plant thoroughly.'),
(137, 3, 2, 'Check for aphids, caterpillars, and other pests.'),
(138, 3, 3, 'Remove dead or damaged branches.'),
(139, 3, 4, 'Inspect for apple scab or fungal issues.'),
(140, 3, 5, 'Water again if the soil is dry.'),
(141, 3, 6, 'Prune the tree to remove weak or diseased growth.'),
(142, 3, 7, 'Fertilize with balanced fertilizer.'),
(143, 3, 8, 'Water deeply.'),
(144, 3, 9, 'Check the tree for any new growth or pest activity.'),
(145, 3, 10, 'Prune away dead flowers or fruit.'),
(146, 3, 11, 'Inspect for signs of fungal disease.'),
(147, 3, 12, 'Water the plant deeply if needed.'),
(148, 3, 13, 'Remove fallen leaves and debris.'),
(149, 3, 14, 'Check the roots for signs of rot.'),
(150, 3, 15, 'Inspect for aphid infestation.'),
(151, 3, 16, 'Water the plant deeply.'),
(152, 3, 17, 'Ensure the tree has plenty of sunlight.'),
(153, 3, 18, 'Remove weeds from the base of the tree.'),
(154, 3, 19, 'Check for any fungal infections and treat accordingly.'),
(155, 3, 20, 'Inspect for pests and apply insecticide if necessary.'),
(156, 3, 21, 'Water as needed to maintain soil moisture.'),
(157, 3, 22, 'Prune dead or damaged branches.'),
(158, 3, 23, 'Inspect the plant for signs of new growth or pest damage.'),
(159, 3, 24, 'Remove any fallen leaves or debris.'),
(160, 3, 25, 'Check soil moisture and water if necessary.'),
(161, 3, 26, 'Apply a fungicide to prevent fungal infections.'),
(162, 3, 27, 'Water the plant deeply.'),
(163, 3, 28, 'Inspect the tree for pests like aphids or caterpillars.'),
(164, 3, 29, 'Prune any dead or damaged flowers.'),
(165, 3, 30, 'Check soil moisture, water if needed, and prepare for winter.'),
(166, 4, 1, 'Water the plant thoroughly, ensuring the soil is moist.'),
(167, 4, 2, 'Check for pests like aphids or spider mites.'),
(168, 4, 3, 'Prune any dead leaves or flowers.'),
(169, 4, 4, 'Add mulch around the base to retain moisture.'),
(170, 4, 5, 'Water the plant again if soil is dry.'),
(171, 4, 6, 'Fertilize with a balanced organic fertilizer.'),
(172, 4, 7, 'Ensure the plant is getting at least 6 hours of sunlight.'),
(173, 4, 8, 'Inspect for any signs of fungal disease, like powdery mildew.'),
(174, 4, 9, 'Water deeply if needed.'),
(175, 4, 10, 'Remove any weeds around the base of the plant.'),
(176, 4, 11, 'Check for any new pests or disease symptoms.'),
(177, 4, 12, 'Prune any yellow or damaged leaves.'),
(178, 4, 13, 'Check the plant for new growth.'),
(179, 4, 14, 'Ensure the plant is getting adequate sunlight.'),
(180, 4, 15, 'Water thoroughly to keep soil moist.'),
(181, 4, 16, 'Inspect for any pest issues.'),
(182, 4, 17, 'Mulch around the plant if needed.'),
(183, 4, 18, 'Remove any fallen leaves or fruit.'),
(184, 4, 19, 'Inspect for powdery mildew or other fungal problems.'),
(185, 4, 20, 'Apply fungicide if necessary.'),
(186, 4, 21, 'Water deeply again.'),
(187, 4, 22, 'Prune the plant to remove dead growth and encourage new shoots.'),
(188, 4, 23, 'Remove any weeds around the base of the plant.'),
(189, 4, 24, 'Check soil moisture and water if needed.'),
(190, 4, 25, 'Inspect the plant for pests and remove them manually if possible.'),
(191, 4, 26, 'Water the plant thoroughly.'),
(192, 4, 27, 'Check for pests like snails or slugs and treat accordingly.'),
(193, 4, 28, 'Add compost around the base of the plant to encourage growth.'),
(194, 4, 29, 'Ensure the plant has enough sunlight for proper fruit development.'),
(195, 4, 30, 'Prune any excess growth to promote fruit production.'),
(256, 5, 1, 'Plant tomato seeds in well-drained soil'),
(257, 5, 2, 'Water the tomato seeds regularly'),
(258, 5, 3, 'Place tomato plants in full sunlight'),
(259, 5, 4, 'Water daily to keep soil moist'),
(260, 5, 5, 'Apply organic fertilizer'),
(261, 5, 6, 'Prune the tomato plant'),
(262, 5, 7, 'Check for pests'),
(263, 5, 8, 'Water the plant deeply'),
(264, 5, 9, 'Add mulch to retain soil moisture'),
(265, 5, 10, 'Support the plant with stakes or cages'),
(266, 5, 11, 'Inspect for yellowing leaves'),
(267, 5, 12, 'Remove dead leaves'),
(268, 5, 13, 'Water the plant again'),
(269, 5, 14, 'Remove excess leaves for better air circulation'),
(270, 5, 15, 'Check for tomato blight or mold'),
(271, 5, 16, 'Apply pest control as needed'),
(272, 5, 17, 'Water during the evening hours'),
(273, 5, 18, 'Add compost around the plant base'),
(274, 5, 19, 'Ensure proper sunlight for healthy growth'),
(275, 5, 20, 'Harvest first tomatoes'),
(276, 5, 21, 'Prune new growth'),
(277, 5, 22, 'Inspect for pests and diseases'),
(278, 5, 23, 'Ensure consistent watering'),
(279, 5, 24, 'Fertilize the plant again'),
(280, 5, 25, 'Support new growth with extra stakes'),
(281, 5, 26, 'Remove any wilting or yellow leaves'),
(282, 5, 27, 'Check for tomato ripening'),
(283, 5, 28, 'Water again in the evening'),
(284, 5, 29, 'Prepare for next tomato harvest'),
(285, 5, 30, 'Enjoy your homegrown tomatoes'),
(286, 6, 1, 'Plant cucumber seeds in well-drained soil'),
(287, 6, 2, 'Water the cucumber seeds daily'),
(288, 6, 3, 'Provide full sunlight for cucumbers'),
(289, 6, 4, 'Water cucumber plants deeply'),
(290, 6, 5, 'Apply balanced fertilizer'),
(291, 6, 6, 'Prune the cucumber vines to encourage growth'),
(292, 6, 7, 'Check the leaves for pests'),
(293, 6, 8, 'Water cucumber plants to keep soil moist'),
(294, 6, 9, 'Add mulch around the cucumber base'),
(295, 6, 10, 'Place supports or trellises for climbing cucumbers'),
(296, 6, 11, 'Inspect for aphids or whiteflies'),
(297, 6, 12, 'Remove damaged or yellowing leaves'),
(298, 6, 13, 'Water deeply in the morning'),
(299, 6, 14, 'Fertilize cucumber plants again'),
(300, 6, 15, 'Prune dead or damaged vines'),
(301, 6, 16, 'Ensure plants are receiving enough sunlight'),
(302, 6, 17, 'Water cucumbers in the evening if needed'),
(303, 6, 18, 'Inspect for mold or mildew'),
(304, 6, 19, 'Remove weeds around the cucumber plants'),
(305, 6, 20, 'Support cucumber vines with additional stakes'),
(306, 6, 21, 'Prune side shoots of the cucumber plant'),
(307, 6, 22, 'Check for cucumber beetles'),
(308, 6, 23, 'Ensure proper watering schedule'),
(309, 6, 24, 'Apply pest control for pests like cucumber beetles'),
(310, 6, 25, 'Prune any new growth if needed'),
(311, 6, 26, 'Check for cucumber ripening'),
(312, 6, 27, 'Water cucumbers again'),
(313, 6, 28, 'Harvest mature cucumbers'),
(314, 6, 29, 'Enjoy fresh cucumbers from your garden'),
(315, 6, 30, 'Prepare for next cucumber planting season'),
(316, 7, 1, 'Plant sunflower seeds in well-drained soil'),
(317, 7, 2, 'Water sunflower seeds regularly'),
(318, 7, 3, 'Ensure sunflowers get full sunlight'),
(319, 7, 4, 'Water sunflower plants deeply'),
(320, 7, 5, 'Apply a balanced fertilizer'),
(321, 7, 6, 'Check for pests and remove them'),
(322, 7, 7, 'Prune dead leaves to encourage healthy growth'),
(323, 7, 8, 'Water the sunflowers in the morning'),
(324, 7, 9, 'Add mulch around the base of the plant'),
(325, 7, 10, 'Support sunflower stems if they get tall'),
(326, 7, 11, 'Inspect the plants for fungal diseases'),
(327, 7, 12, 'Remove yellow or wilting leaves'),
(328, 7, 13, 'Water the plants to keep soil moist'),
(329, 7, 14, 'Check for aphids or other pests'),
(330, 7, 15, 'Fertilize the sunflower plants again'),
(331, 7, 16, 'Ensure they are getting at least 6 hours of sunlight'),
(332, 7, 17, 'Water sunflower plants deeply again'),
(333, 7, 18, 'Inspect the plants for disease or mold'),
(334, 7, 19, 'Remove weeds around the sunflower'),
(335, 7, 20, 'Stake tall sunflower stems to prevent damage'),
(336, 7, 21, 'Check for signs of nutrient deficiency'),
(337, 7, 22, 'Prune any dead flowers'),
(338, 7, 23, 'Add more fertilizer to encourage growth'),
(339, 7, 24, 'Ensure sunflowers are still receiving ample sunlight'),
(340, 7, 25, 'Water deeply to avoid root rot'),
(341, 7, 26, 'Check for sunflower seed development'),
(342, 7, 27, 'Support sunflower stems if needed'),
(343, 7, 28, 'Remove excess leaves for better air circulation'),
(344, 7, 29, 'Inspect the sunflowers for damage'),
(345, 7, 30, 'Harvest sunflower seeds when they are ready'),
(346, 8, 1, 'Plant rose bushes in well-drained, slightly acidic soil'),
(347, 8, 2, 'Water the rose bush daily'),
(348, 8, 3, 'Ensure roses get 6 hours of sunlight'),
(349, 8, 4, 'Prune any damaged or dead branches'),
(350, 8, 5, 'Add mulch around the rose bush base'),
(351, 8, 6, 'Apply a balanced rose fertilizer'),
(352, 8, 7, 'Check for aphids or pests'),
(353, 8, 8, 'Water the rose bush deeply'),
(354, 8, 9, 'Remove any yellowing leaves'),
(355, 8, 10, 'Inspect for black spot fungus and remove affected leaves'),
(356, 8, 11, 'Water again in the evening to avoid fungal growth'),
(357, 8, 12, 'Prune dead blooms to encourage new growth'),
(358, 8, 13, 'Fertilize roses again for healthy growth'),
(359, 8, 14, 'Ensure roses are getting enough sunlight'),
(360, 8, 15, 'Water the rose bush to keep the soil moist'),
(361, 8, 16, 'Inspect for powdery mildew or other diseases'),
(362, 8, 17, 'Add more mulch to retain moisture'),
(363, 8, 18, 'Trim dead branches to maintain a healthy shape'),
(364, 8, 19, 'Check for rose pests like spider mites'),
(365, 8, 20, 'Water deeply to encourage root growth'),
(366, 8, 21, 'Apply additional fertilizer for blooming roses'),
(367, 8, 22, 'Prune the plant for better air circulation'),
(368, 8, 23, 'Ensure the soil is not waterlogged'),
(369, 8, 24, 'Inspect the roses for new growth'),
(370, 8, 25, 'Water the roses in the morning for best results'),
(371, 8, 26, 'Remove spent flowers to encourage more blooms'),
(372, 8, 27, 'Check for any fungal infections'),
(373, 8, 28, 'Fertilize once more to boost flowering'),
(374, 8, 29, 'Ensure proper staking or support for tall rose varieties'),
(375, 8, 30, 'Enjoy the beautiful blooms and prepare for the next season'),
(376, 9, 1, 'Plant lavender in a sunny, well-drained area'),
(377, 9, 2, 'Water the lavender lightly, avoid over-watering'),
(378, 9, 3, 'Ensure lavender gets at least 8 hours of sunlight daily'),
(379, 9, 4, 'Prune any dead or woody stems'),
(380, 9, 5, 'Add mulch to keep the soil dry'),
(381, 9, 6, 'Check for aphids or pests'),
(382, 9, 7, 'Water only when the soil is dry to the touch'),
(383, 9, 8, 'Inspect for any fungal diseases like powdery mildew'),
(384, 9, 9, 'Trim back leggy growth to encourage bushier plants'),
(385, 9, 10, 'Ensure lavender has good airflow to prevent mold'),
(386, 9, 11, 'Remove spent blooms to encourage more flowers'),
(387, 9, 12, 'Fertilize lavender lightly with a low-nitrogen fertilizer'),
(388, 9, 13, 'Water the lavender deeply but infrequently'),
(389, 9, 14, 'Check the plant for signs of nutrient deficiency'),
(390, 9, 15, 'Trim the lavender to shape and remove any excess stems'),
(391, 9, 16, 'Add compost to the soil to boost nutrients'),
(392, 9, 17, 'Inspect for signs of spider mites'),
(393, 9, 18, 'Water lavender again only if the soil is dry'),
(394, 9, 19, 'Remove weeds around the lavender to avoid competition'),
(395, 9, 20, 'Check for root rot, especially if over-watered'),
(396, 9, 21, 'Ensure lavender receives full sun for at least 8 hours'),
(397, 9, 22, 'Trim back any dead flowers for better air circulation'),
(398, 9, 23, 'Mulch around the base to retain moisture'),
(399, 9, 24, 'Check for signs of lavender lace bugs'),
(400, 9, 25, 'Water the lavender deeply once again'),
(401, 9, 26, 'Prune lavender to promote healthy new growth'),
(402, 9, 27, 'Inspect lavender for pests and diseases'),
(403, 9, 28, 'Ensure soil is not too moist or soggy'),
(404, 9, 29, 'Prune the plant to encourage bushier growth'),
(405, 9, 30, 'Enjoy the fragrant flowers and harvest if desired'),
(406, 10, 1, 'Plant basil in rich, well-drained soil'),
(407, 10, 2, 'Water basil daily, keep the soil consistently moist'),
(408, 10, 3, 'Ensure basil gets at least 6 hours of sunlight'),
(409, 10, 4, 'Pinch off the tops of basil to encourage branching'),
(410, 10, 5, 'Fertilize basil with a balanced fertilizer every few weeks'),
(411, 10, 6, 'Check for aphids and other pests'),
(412, 10, 7, 'Water basil early in the day to avoid diseases'),
(413, 10, 8, 'Trim any dead or yellowing leaves'),
(414, 10, 9, 'Check for any fungal infections'),
(415, 10, 10, 'Prune basil to promote better airflow'),
(416, 10, 11, 'Mulch around the plant to retain moisture'),
(417, 10, 12, 'Fertilize basil again to encourage growth'),
(418, 10, 13, 'Water basil to prevent wilting'),
(419, 10, 14, 'Remove flowers to encourage leaf growth'),
(420, 10, 15, 'Ensure basil gets enough sunlight for at least 6 hours'),
(421, 10, 16, 'Water basil again if the soil feels dry'),
(422, 10, 17, 'Check for pests like slugs or snails'),
(423, 10, 18, 'Prune basil to maintain shape and health'),
(424, 10, 19, 'Add compost to the soil for more nutrients'),
(425, 10, 20, 'Ensure basil has good air circulation'),
(426, 10, 21, 'Pinch back any leggy growth'),
(427, 10, 22, 'Check for signs of nutrient deficiency'),
(428, 10, 23, 'Water basil thoroughly in the morning'),
(429, 10, 24, 'Remove any dead leaves and spent flowers'),
(430, 10, 25, 'Check for any signs of rust on the leaves'),
(431, 10, 26, 'Fertilize basil again with a gentle fertilizer'),
(432, 10, 27, 'Trim the plant to encourage bushier growth'),
(433, 10, 28, 'Check for any pests like spider mites or aphids'),
(434, 10, 29, 'Harvest basil leaves for culinary use'),
(435, 10, 30, 'Prune basil to ensure healthy growth and future harvests');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(7, 'yakop', 'yakop@gmail.com', 'yakop123', '2024-11-26 16:47:09'),
(10, 'khansa', 'khansa@gmail.com', 'khansa123', '2024-11-26 17:06:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant_activities`
--
ALTER TABLE `plant_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plant_id` (`plant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `plant_activities`
--
ALTER TABLE `plant_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plant_activities`
--
ALTER TABLE `plant_activities`
  ADD CONSTRAINT `plant_activities_ibfk_1` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
