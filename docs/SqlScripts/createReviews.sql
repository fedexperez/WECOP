SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Volcado de datos para la tabla `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `title`, `message`, `eco_product`, `created_at`, `updated_at`) VALUES
(4, 4.00, 'Awesome', 'The best straw ever', 4, '2021-04-04 15:45:28', NULL),
(5, 3.00, 'Basic', 'Not a great product', 4, '2021-04-04 15:49:28', NULL),
(6, 5.00, 'Top tier', 'Amazing product', 4, '2021-04-04 15:49:28', NULL),
(7, 3.00, 'Not great', 'Not a great product', 5, '2021-04-04 15:00:28', NULL),
(8, 3.00, 'Expected more', 'What i said, expected more', 5, '2021-04-04 15:03:28', NULL),
(9, 5.00, 'LOVE IT', 'I have been amazed at how easy this works', 5, '2021-03-11 15:49:28', NULL),
(10, 5.00, 'Hype', 'I have been thoroughly impressed by this', 6, '2021-03-04 15:49:28', NULL),
(11, 1.00, 'I hate it', 'Not satisfied for the price & everything', 6, '2021-03-04 15:49:00', NULL),
(12, 1.00, 'The worst', 'After using this for a few months I have to say this is the worst', 6, '2021-03-04 15:05:28', NULL),
(13, 2.00, 'Impossible to clean & so messy', 'Had to throw it away after the third use bc it’s impossible to clean and SO messy', 7, '2021-02-04 15:49:01', NULL),
(14, 5.00, 'Not expensive', 'Just as the title says. Not too much money for the size and quality of it.', 7, '2021-02-04 15:50:28', NULL),
(15, 5.00, 'So convenient', 'You get what you pay for', 7, '2021-02-05 15:49:28', NULL),
(16, 3.00, 'Just OK', 'This was recommended on a blog I read, so I figured it is good', 8, '2021-04-05 15:46:55', NULL),
(17, 4.00, 'Good buy', 'Love this product', 8, '2021-04-05 15:49:28', NULL),
(18, 2.00, 'Don’t buy', 'Very poor quality and customer service', 8, '2021-04-01 15:33:28', NULL),
(19, 5.00, 'Wonderfull', 'Super cute product', 8, '2021-04-01 17:49:28', NULL),
(20, 4.00, 'What i expected', 'Absolutely what i expected', 9, '2021-04-02 16:49:28', NULL),
(21, 5.00, 'Just buy it', 'Kids love it', 9, '2021-04-02 17:49:28', NULL),
(22, 5.00, 'Perfect', 'This is a fun product that does what it says it will do', 9, '2021-04-02 16:49:28', NULL);