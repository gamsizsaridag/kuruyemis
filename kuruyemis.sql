-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 May 2021, 00:25:22
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Deneme Hakkımızda', 'hakkımızda uzun yazı....', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `image`, `meta`, `keyword`, `must`, `url`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '10 FAYDA İLE CEVİZ AŞKI', '<p>1)&nbsp;Ceviz, Omega 3&nbsp; (alfa-linolenik asit) a&ccedil;ısından en zengin ağa&ccedil; yemişidir. Y&uuml;ksek Omega 3 alımının, kalp-damar hastalıkları riskini azalttığı belirlenmiştir.(PAN 2012)</p>\r\n\r\n<p>2) Akdeniz tipi beslenmenin &ouml;nemli bir par&ccedil;ası olan ceviz, kalp hastalıkları riskinin %30, inme riskinin ise %49 azaltıldığı Predimed &ccedil;alışmasında da kilit bir gıda olarak &ouml;ne &ccedil;ıkmıştır (Estruch, 2014)</p>\r\n\r\n<p>3) Batının tipik beslenme şekline eklenen cevizin, sperm canlılığı, hareketliliği ve morfolojisinde iyileşme sağladığı belirlenmiştir. (Robbins, 2012)</p>\r\n\r\n<p>4) Ceviz, yaygın olarak t&uuml;ketilen yemişler ve yerfıstıkları arasında en y&uuml;ksek oranda polifenol i&ccedil;eriğine sahiptir.</p>\r\n\r\n<p>Polifenollerin b&uuml;y&uuml;k &ccedil;oğunluğu antioksidandır&nbsp; ve kalp hastalıkları ve kanserden korunmada g&uuml;&ccedil;l&uuml; bir rol oynadığı bilinmektedir. (Vinson, 2012)</p>\r\n\r\n<p>5) G&uuml;nde 56 gram ceviz t&uuml;ketmenin, organ yağlanması g&ouml;r&uuml;len aşırı kilolu bireylerde endotelyal işlevi geliştirdiği g&ouml;r&uuml;lm&uuml;şt&uuml;r. beslenme d&uuml;zenine eklenen ceviz, bireylerin kilo almasına neden olmamıştır.(Katz, 2012)</p>\r\n\r\n<p>6) G&uuml;nde 42 gram ceviz t&uuml;ketmenin, kalp-damar hastalıklarının iki risk fakt&ouml;r&uuml;&nbsp;olan non-hdl kolesterol&uuml; ve apolipoprotein-b&rsquo;yi anlamlı d&uuml;zeyde azalttığı tespit edilmiştir.(Wu, 2013)</p>\r\n\r\n<p>7) Y&uuml;ksek miktarda ceviz t&uuml;ketimi, kadınlarda tip 2 diyabet riskinde anlamlı bir azalmayla ilişkilendirilmiştir. (pan 2013)</p>\r\n\r\n<p>8) Ceviz dahil olmak &uuml;zere daha y&uuml;ksek miktarda yemiş t&uuml;ketiminin, ileri yaşlarda alzheimer gibi hastalıkları &ouml;nlemede etkili olduğu; genel bilişsel kabiliyette iyileşme sağlayabildiği ve halk sağılığı a&ccedil;ısından kolaylıkla kullanılabilecek bir &uuml;r&uuml;n olduğu ifade edilmiştir. (O&rsquo;brien, 2014)</p>\r\n\r\n<p>9)&nbsp;Cevizin, kalp-damar hastalıklarında iki &ouml;nemli risk fakt&ouml;r&uuml; olan d&uuml;ş&uuml;k yoğunluklu lipoprotein kolesterol&uuml;n&uuml; (yaklaşık %9-16) ve kan basıncını (diyastolik kan basıncını yaklaşık 2-3 mm hg) azalttığı ortaya koyulmuştur. (Kris etherton, 2014)</p>\r\n\r\n<p>10)&nbsp;Ceviz, sağlıklı bir beslenme d&uuml;zeninde kanseri &ouml;nleyici bir se&ccedil;enek olarak yer almalıdır.(Hardman, 2014)</p>', '/images/blog/ceviz.png', '10 FAYDA İLE CEVİZ AŞKI', '10 FAYDA İLE CEVİZ AŞKI', 1, '/blog/ceviz-aski', '1', NULL, NULL, '2021-05-23 08:11:13'),
(2, 'YEMMİŞİN FAYDALARI', '<p>Haydi ilk olarak kuruyemişleri tanıyalım☺️<br />\r\nKuruyemişlerin yağ oranı y&uuml;ksek, karbonhidrat oranı d&uuml;ş&uuml;kt&uuml;r. E vitamini, magnezyum ve selenyum da dahil olmak &uuml;zere &ccedil;ok sayıda besin maddesi i&ccedil;erirler. Bağışıklığımızı destekleyecek, antioksidanlardan zengindirler. Kuruyemişler kilo aldırır mı ? Sorusunu &ouml;zellikle ben diyetisyen olarak sık sık duyuyorum. Bu olduk&ccedil;a yanlış bir kanı. D&uuml;zenli ve yeterli miktarda t&uuml;ketildiğinde kilo almaya katkıda bulunmak yerine kilo vermeye yardımcı olduğu biliniyor. Kuruyemiş, HDL yani iyi kolestrol seviyemizi artırırken, LDL yani k&ouml;t&uuml; kolestrol ve trigliserid sevilerinin d&uuml;şmesine yardımcı olur. Şu anda &ccedil;elişti araştırmalarda tip 2 diyabet, tansiyon ve diğer sağlık belirleyicilerinde anlamlı, iyi y&ouml;nde değişmeler olduğu belirlenmiştir. Kuruyemiş lif i&ccedil;eriği bakımında zengindir. Bu durum hastalık riskini azaltabilir, doymuş hissetmenize yardımcı olur, metabolizmayı hızlandırır ve bağırsak sağlığını iyileştirir. Kuruyemiş kalp krizi ve fel&ccedil; riskinizi &ouml;nemli &ouml;l&ccedil;&uuml;de azaltabilir. Bunun nedeni biraz &ouml;nce de bahsettiğim LDL kolesterol&uuml; d&uuml;ş&uuml;r&uuml;p , HDL kolesterol&uuml;n&uuml; y&uuml;kseltmesi, arter fonksiyonunu iyileştirmesi ve kalp sağlığı i&ccedil;in &ccedil;eşitli başka faydaları olmasıdır.</p>\r\n\r\n<p>Sonu&ccedil; olarak , kuruyemişi g&uuml;nl&uuml;k diyetten eksik etmemek şart! Hem de her t&uuml;r&uuml;nden biraz biraz☺️ &Ccedil;&uuml;nk&uuml; hepsinin faydası, hepsinin i&ccedil;erdiği vitamin farklı. Sizin merağınıza, isteğinize g&ouml;re hepsinden ayrı ayrı da bahsederiz&nbsp;</p>\r\n\r\n<p>Dyt.Fatma U&ccedil;an</p>', '/images/blog/default.jpg', 'YEMMİŞİN FAYDALARI', 'YEMMİŞİN FAYDALARI', 1, '/blog/yemmi̇si̇n-faydalari', '1', NULL, '2021-05-25 08:03:04', '2021-05-25 08:03:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `brands`
--

INSERT INTO `brands` (`id`, `name`, `meta`, `keyword`, `must`, `url`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Güven', 'Güven', 'Güven', 1, '/b/Güven', '1', NULL, NULL, '2021-05-23 08:12:17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `description`, `file`, `must`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2021 Mayıs Ayı Kataloğu', '<p>2021 Mayıs ayı katalogu ile &uuml;r&uuml;nlerimiz ve fiyatları</p>', '/catalogs/2021-mayis-ayi-katalogu.pdf', 1, '1', NULL, NULL, '2021-05-25 19:08:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `meta`, `keyword`, `must`, `url`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Kuruyemiş', 'Kuruyemis kategori hakkında kısa bir blog', 'kuruyemis, kategori, anahtar, kelimeler', 1, '/c/kuruyemis', '1', NULL, NULL, NULL),
(2, 'Lokum ve Şekerleme', 'Lokum ve Şekerleme kategori hakkında kısa bir blog', 'Lokum ve Şekerleme, kategori, anahtar, kelimeler', 2, '/c/lokum-ve-sekerleme', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
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
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gsm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `gsm`, `message`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Habib saridag', 'habibsaridag12@gmail.com', '0541 598 9010', 'deneme mesajıdır', '0', NULL, NULL, '2021-05-23 08:12:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(93, '2021_05_06_160817_create_abouts_table', 1),
(96, '2014_10_12_000000_create_users_table', 2),
(97, '2014_10_12_100000_create_password_resets_table', 2),
(98, '2019_08_19_000000_create_failed_jobs_table', 2),
(99, '2021_05_06_150925_create_products_table', 2),
(100, '2021_05_06_152349_create_categorys_table', 2),
(101, '2021_05_06_152403_create_brands_table', 2),
(102, '2021_05_06_155005_create_settings_table', 2),
(103, '2021_05_06_160013_create_blogs_table', 2),
(104, '2021_05_06_161145_create_messages_table', 2),
(105, '2021_05_06_161530_create_catalogs_table', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discountedPrice` double DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `brandId` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeStatus` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discountedPrice`, `description`, `meta`, `keyword`, `must`, `categoryId`, `brandId`, `image`, `url`, `homeStatus`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Karışık Çiğ', 99.9, 89.9, '<p><strong>&Uuml;r&uuml;n İ&ccedil;eriği:</strong></p>\r\n\r\n<p>12 Adet G&uuml;l Yapraklı G&uuml;ll&uuml; Lokum&nbsp; / Net 138 gr<br />\r\nBr&uuml;t 204 gr<br />\r\n&Uuml;r&uuml;n Ebatları : 5x21,5x4 cm<br />\r\nKargo Ağırlığı: 394 gr</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<hr />\r\n<p><strong>Kargo Kolisi:</strong></p>\r\n\r\n<p>Kargo Ebatları: 26x14x13 cm&nbsp;<br />\r\nKargo Desi&#39;si: 1,16 desi</p>\r\n\r\n<p>Toplam Ağırlık: 242 gr Koli toplam ağırlık</p>\r\n\r\n<hr />\r\n<p><strong>Kalite Garantisi:</strong></p>\r\n\r\n<p>Endorfia, Se&ccedil;kin &Uuml;r&uuml;nleriyle size Kendinizi ayrıcalıklı hissettirir. T&uuml;m Lokumlarımız, yalnızca taze ve &uuml;st d&uuml;zey kalitedeki malzemeler kullanılarak, geleneksel y&ouml;ntemlerle &uuml;retilmektedir.</p>\r\n\r\n<p>Endorfia lokumlarınızın raf &ouml;mr&uuml;ne dikkat etmenizi, 16-18 derece sıcaklıkta, nemsiz ortamda saklamanızı &ouml;neririz. Memnuniyetiniz bizler i&ccedil;in &ccedil;ok değerli, herhangi bir nedenle &uuml;r&uuml;nlerimizden memnun kalmazsanız, l&uuml;tfen bizimle iletişime ge&ccedil;iniz.</p>', 'Karışık Çiğ', 'Karışık Çiğ', 5, 1, 1, '/images/urun/karisik-cig-60ad77c54ee34.jpg', '/p/karisik-cig', '1', '1', NULL, NULL, '2021-05-25 19:18:45'),
(2, 'Kuş Lokumu', 16.5, 15.5, '<p><strong>&Uuml;r&uuml;n İ&ccedil;eriği:</strong></p>\r\n\r\n<p>12 Adet G&uuml;l Yapraklı G&uuml;ll&uuml; Lokum&nbsp; / Net 138 gr<br />\r\nBr&uuml;t 204 gr<br />\r\n&Uuml;r&uuml;n Ebatları : 5x21,5x4 cm<br />\r\nKargo Ağırlığı: 394 gr</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<hr />\r\n<p><strong>Kargo Kolisi:</strong></p>\r\n\r\n<p>Kargo Ebatları: 26x14x13 cm&nbsp;<br />\r\nKargo Desi&#39;si: 1,16 desi</p>\r\n\r\n<p>Toplam Ağırlık: 242 gr Koli toplam ağırlık</p>\r\n\r\n<hr />\r\n<p><strong>Kalite Garantisi:</strong></p>\r\n\r\n<p>Endorfia, Se&ccedil;kin &Uuml;r&uuml;nleriyle size Kendinizi ayrıcalıklı hissettirir. T&uuml;m Lokumlarımız, yalnızca taze ve &uuml;st d&uuml;zey kalitedeki malzemeler kullanılarak, geleneksel y&ouml;ntemlerle &uuml;retilmektedir.</p>\r\n\r\n<p>Endorfia lokumlarınızın raf &ouml;mr&uuml;ne dikkat etmenizi, 16-18 derece sıcaklıkta, nemsiz ortamda saklamanızı &ouml;neririz. Memnuniyetiniz bizler i&ccedil;in &ccedil;ok değerli, herhangi bir nedenle &uuml;r&uuml;nlerimizden memnun kalmazsanız, l&uuml;tfen bizimle iletişime ge&ccedil;iniz.</p>', 'Kuş Lokumu', 'Kuş Lokumu', 2, 2, 1, '/images/urun/kus-lokumu-60ad77d36d7e5.jpg', '/p/kus-lokumu', '1', '1', NULL, NULL, '2021-05-25 19:18:59'),
(3, 'Güllü Lokum', 15.5, NULL, '<p><strong>&Uuml;r&uuml;n İ&ccedil;eriği:</strong></p>\r\n\r\n<p>12 Adet G&uuml;l Yapraklı G&uuml;ll&uuml; Lokum&nbsp; / Net 138 gr<br />\r\nBr&uuml;t 204 gr<br />\r\n&Uuml;r&uuml;n Ebatları : 5x21,5x4 cm<br />\r\nKargo Ağırlığı: 394 gr</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<hr />\r\n<p><strong>Kargo Kolisi:</strong></p>\r\n\r\n<p>Kargo Ebatları: 26x14x13 cm&nbsp;<br />\r\nKargo Desi&#39;si: 1,16 desi</p>\r\n\r\n<p>Toplam Ağırlık: 242 gr Koli toplam ağırlık</p>\r\n\r\n<hr />\r\n<p><strong>Kalite Garantisi:</strong></p>\r\n\r\n<p>Endorfia, Se&ccedil;kin &Uuml;r&uuml;nleriyle size Kendinizi ayrıcalıklı hissettirir. T&uuml;m Lokumlarımız, yalnızca taze ve &uuml;st d&uuml;zey kalitedeki malzemeler kullanılarak, geleneksel y&ouml;ntemlerle &uuml;retilmektedir.</p>\r\n\r\n<p>Endorfia lokumlarınızın raf &ouml;mr&uuml;ne dikkat etmenizi, 16-18 derece sıcaklıkta, nemsiz ortamda saklamanızı &ouml;neririz. Memnuniyetiniz bizler i&ccedil;in &ccedil;ok değerli, herhangi bir nedenle &uuml;r&uuml;nlerimizden memnun kalmazsanız, l&uuml;tfen bizimle iletişime ge&ccedil;iniz.</p>', 'Güllü Lokum', 'Güllü Lokum', 1, 2, 1, '/images/urun/gullu-lokum-60ad77b7c7854.jpg', '/p/gullu-lokum', '1', '1', NULL, '2021-05-23 09:02:52', '2021-05-25 19:18:31'),
(6, 'Fındık içi kavrulmuş', 79.9, NULL, '<p><strong>&Uuml;r&uuml;n İ&ccedil;eriği:</strong></p>\r\n\r\n<p>12 Adet G&uuml;l Yapraklı G&uuml;ll&uuml; Lokum&nbsp; / Net 138 gr<br />\r\nBr&uuml;t 204 gr<br />\r\n&Uuml;r&uuml;n Ebatları : 5x21,5x4 cm<br />\r\nKargo Ağırlığı: 394 gr</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<hr />\r\n<p><strong>Kargo Kolisi:</strong></p>\r\n\r\n<p>Kargo Ebatları: 26x14x13 cm&nbsp;<br />\r\nKargo Desi&#39;si: 1,16 desi</p>\r\n\r\n<p>Toplam Ağırlık: 242 gr Koli toplam ağırlık</p>\r\n\r\n<hr />\r\n<p><strong>Kalite Garantisi:</strong></p>\r\n\r\n<p>Endorfia, Se&ccedil;kin &Uuml;r&uuml;nleriyle size Kendinizi ayrıcalıklı hissettirir. T&uuml;m Lokumlarımız, yalnızca taze ve &uuml;st d&uuml;zey kalitedeki malzemeler kullanılarak, geleneksel y&ouml;ntemlerle &uuml;retilmektedir.</p>\r\n\r\n<p>Endorfia lokumlarınızın raf &ouml;mr&uuml;ne dikkat etmenizi, 16-18 derece sıcaklıkta, nemsiz ortamda saklamanızı &ouml;neririz. Memnuniyetiniz bizler i&ccedil;in &ccedil;ok değerli, herhangi bir nedenle &uuml;r&uuml;nlerimizden memnun kalmazsanız, l&uuml;tfen bizimle iletişime ge&ccedil;iniz.</p>', 'Fındık içi kavrulmuş', 'Fındık içi kavrulmuş', 1, 1, 1, '/images/urun/findik-ici-kavrulmus-60ad77a562486.jpeg', '/p/findik-ici-kavrulmus', '1', '1', NULL, '2021-05-23 09:41:44', '2021-05-25 19:18:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gsm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `name`, `address`, `gsm`, `email`, `title`, `siteUrl`, `map`, `whatsapp`, `instagram`, `facebook`, `twitter`, `youtube`, `about_name`, `about_description`, `about_status`, `meta`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'Güven Kuruyemis', 'İnönü Mah. Genç Cad.\r\nUlu Cami Karşısı\r\nBayrampark Avm Zemin Kat No:7\r\n<br>   \r\nBingöl / Merkez', '0507 503 9112', 'info@guvenkuruyemis.com', 'Güven Kuruyemiş', 'www.guvenkuruyemis.com', '<iframe                             src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.4277547021749!2d40.49723792916446!3d38.884852998723304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4073cf931d337e69%3A0x86edce4642f89b89!2zxLBuw7Zuw7wsIMWeacWfbGkgU2suIE5vOjE4LCAxMjAwMCBCaW5nw7ZsIE1lcmtlei9CaW5nw7Zs!5e0!3m2!1str!2str!4v1621974516169!5m2!1str!2str\"                             width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\">                                                      </iframe>', '+905075039112', 'http://instagram.com/guvenkuruyemis12', NULL, NULL, NULL, 'Güven Kuruyemiş', '<p><strong>Hakkımızda</strong></p>\r\n\r\n<p><strong>G&uuml;ven Kuruyemiş</strong>&rsquo;in ilk adımları Enes Tun&ccedil;&nbsp;tarafından 1960 yılında Gaziantep&#39;de atılmıştır. T&uuml;rkiye&rsquo;nin ticari kalbi olan Marif Caddesinde k&uuml;&ccedil;&uuml;k bir d&uuml;kk&acirc;n olarak hayatına başlayan firma, Tun&ccedil; kardeşlerin ilerici bakış a&ccedil;ısıyla ilk kuruyemiş toptancılığı oluşumu ile b&uuml;y&uuml;me s&uuml;recine girmiştir. &Uuml;lkemizin artan kuruyemiş ihtiyacını iyi analiz ederek, kuruyemişin kalitesini kontrol etmek amacıyla da imalat s&uuml;recini de b&uuml;nyesinde katmıştır.</p>\r\n\r\n<p>2004 senesinden sonra piyasa ve ekonomik koşulların iyi değerlendirilmesi ve geleceğe y&ouml;nelik vizyonla hareket edilerek, şubeleşme s&uuml;recine girilmiştir. Bu s&uuml;re&ccedil; i&ccedil;erisinde kaliteli ve sağlıklı kuruyemişin, imalat ve satışına y&ouml;nelik faaliyetlerine devam eden <strong>G&uuml;ven </strong><strong>Kuruyemiş</strong>, Gaziantep&#39;de 7.000 m2 alana yayılmış dev bir &uuml;retim tesisin kurulumu ile T&uuml;rkiye&rsquo;nin bir&ccedil;ok noktasında yayılmıştır.</p>\r\n\r\n<p>G&uuml;n&uuml;m&uuml;zde, her zaman doğal ve kaliteli kuruyemiş imalatı ve satışı i&ccedil;in &ccedil;alışmaya, devam eden firma, hem T&uuml;rkiye&rsquo;de hem de d&uuml;nyada bu lezzeti her kese duyurmak i&ccedil;in faaliyetlerine devam etmektedir. Geniş bir pazarlama ağı ile bir&ccedil;ok b&uuml;y&uuml;k market ve gıda pazarının aranılan ismi olmuştur.</p>', '1', 'Güven Kuruyemis', 'Güven Kuruyemis', NULL, '2021-05-25 17:29:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$/wRu17HQ0SyacBiKVYdHuuJkso3F3.DlaYGBdP4BQn8esZDyrSTxS', '1', NULL, NULL, NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
