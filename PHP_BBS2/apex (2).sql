-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-30 15:22:28
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `apex`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `apex_table`
--

CREATE TABLE `apex_table` (
  `id` int(12) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `os` text COLLATE utf8_unicode_ci NOT NULL,
  `rank` text COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `apex_table`
--

INSERT INTO `apex_table` (`id`, `name`, `os`, `rank`, `naiyou`, `indate`) VALUES
(19, '田中太郎', '', '', 'マスターですこんばんはaaa', '2021-03-21 22:52:13'),
(25, 'hallo.1234', 'PC', 'ゴールド', 'GOLDですが一緒にランク回してくれる人募集します', '2021-03-23 21:44:17'),
(26, 'あ', 'PC', 'ゴールド', 'あ', '2021-03-23 22:41:25'),
(27, 'important.0002', 'PS4', 'シルバープラチナ', 'あいうえお\r\nかきくけこ\r\nさしすせそ', '2021-03-24 19:37:40'),
(28, 'オクタンです', 'Switch', 'ダイヤモンド', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ', '2021-03-24 19:54:38'),
(29, 'aaaaaaaaaaaaaaaaaaa', 'PC', 'プラチナ', 'afcsffw', '2021-03-28 21:31:20'),
(30, 'APEX_LOVE', 'PC', 'ダイヤモンド', 'ダイヤモンドの方フレンドになりましょう！よろしくお願いします！', '2021-03-29 22:20:59'),
(31, 'ＪＳ処理入れた後のテスト', 'PS4', 'プラチナ', 'テストです', '2021-03-30 22:15:40');

-- --------------------------------------------------------

--
-- テーブルの構造 `inquiry_table`
--

CREATE TABLE `inquiry_table` (
  `id` int(12) NOT NULL,
  `kenmei` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `inquiry_table`
--

INSERT INTO `inquiry_table` (`id`, `kenmei`, `naiyou`, `indate`) VALUES
(5, '更新について', '５分前に投稿した内容でランクをゴールドにしようと思ったらプラチナにしてしまいました。。。。すみませんが更新お願いします', '2021-03-30 21:04:11'),
(6, 'aa', 'aa', '2021-03-30 21:31:35'),
(7, 'a', 'a', '2021-03-30 21:34:28'),
(8, 'aaa', 'aaaaa', '2021-03-30 21:37:33'),
(9, 'a', '\r\n', '2021-03-30 21:41:22'),
(10, 'テスト', 'ちゃんと送られていますか', '2021-03-30 21:41:36'),
(11, 'あ', 'あ', '2021-03-30 21:46:05'),
(12, 'ｊｓてすと', 'ｊｓてすと', '2021-03-30 22:15:54');

-- --------------------------------------------------------

--
-- テーブルの構造 `kanri_table`
--

CREATE TABLE `kanri_table` (
  `id` int(12) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `u_pw` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kanri_table`
--

INSERT INTO `kanri_table` (`id`, `name`, `u_id`, `u_pw`) VALUES
(1, '管理者', 'miyagi', 'ryoya0805');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `apex_table`
--
ALTER TABLE `apex_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `inquiry_table`
--
ALTER TABLE `inquiry_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `kanri_table`
--
ALTER TABLE `kanri_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `apex_table`
--
ALTER TABLE `apex_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- テーブルの AUTO_INCREMENT `inquiry_table`
--
ALTER TABLE `inquiry_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `kanri_table`
--
ALTER TABLE `kanri_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
