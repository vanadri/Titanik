/*
Navicat MySQL Data Transfer

Source Server         : xampp7.2
Source Server Version : 100134
Source Host           : localhost:3306
Source Database       : titanik_db

Target Server Type    : MYSQL
Target Server Version : 100134
File Encoding         : 65001

Date: 2021-06-11 20:46:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL AUTO_INCREMENT,
  `artikel_judul` varchar(255) DEFAULT NULL,
  `artikel_isi` text,
  `artikel_foto` varchar(500) DEFAULT NULL,
  `artikel_tgl` datetime DEFAULT NULL,
  PRIMARY KEY (`artikel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('1', 'Loremp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor orci eu lobortis elementum. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Sed augue lacus viverra vitae congue eu. A diam sollicitudin tempor id eu nisl nunc mi. Id neque aliquam vestibulum morbi blandit cursus risus at. Blandit libero volutpat sed cras ornare. Consequat semper viverra nam libero. Urna id volutpat lacus laoreet non curabitur gravida. Facilisis gravida neque convallis a cras. Ante in nibh mauris cursus mattis. Dictum varius duis at consectetur lorem donec massa sapien faucibus. Urna neque viverra justo nec ultrices. Nulla facilisi cras fermentum odio eu feugiat. Urna cursus eget nunc scelerisque viverra mauris. Nunc mi ipsum faucibus vitae aliquet nec. Massa tincidunt nunc pulvinar sapien. Dignissim suspendisse in est ante in nibh mauris cursus mattis. Gravida quis blandit turpis cursus in hac habitasse platea. Ut tellus elementum sagittis vitae et leo duis ut.', 'foto_artikel_1623063653.jpg', '2021-06-06 14:12:59');
INSERT INTO `artikel` VALUES ('2', 'Loremp 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor orci eu lobortis elementum. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Sed augue lacus viverra vitae congue eu. A diam sollicitudin tempor id eu nisl nunc mi. Id neque aliquam vestibulum morbi blandit cursus risus at. Blandit libero volutpat sed cras ornare. Consequat semper viverra nam libero. Urna id volutpat lacus laoreet non curabitur gravida. Facilisis gravida neque convallis a cras. Ante in nibh mauris cursus mattis. Dictum varius duis at consectetur lorem donec massa sapien faucibus. Urna neque viverra justo nec ultrices. Nulla facilisi cras fermentum odio eu feugiat. Urna cursus eget nunc scelerisque viverra mauris. Nunc mi ipsum faucibus vitae aliquet nec. Massa tincidunt nunc pulvinar sapien. Dignissim suspendisse in est ante in nibh mauris cursus mattis. Gravida quis blandit turpis cursus in hac habitasse platea. Ut tellus elementum sagittis vitae et leo duis ut.', 'foto_artikel_1623063629.jpg', '2021-06-06 14:13:27');

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL AUTO_INCREMENT,
  `penjual_id` int(11) DEFAULT NULL,
  `barang_nama` varchar(255) DEFAULT NULL,
  `barang_qty` int(255) DEFAULT NULL,
  `barang_desk` text,
  `barang_harga` varchar(255) DEFAULT NULL,
  `barang_berat` varchar(255) DEFAULT NULL,
  `barang_satuan` varchar(255) DEFAULT NULL,
  `barang_foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('1', '1', 'Barang A', '99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '90000', '90', 'gram', 'foto_barang_1623417944.jpg');
INSERT INTO `barang` VALUES ('2', '1', 'Barang B', '93', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '8000', '900', 'gram', 'foto_barang_1623417938.jpg');
INSERT INTO `barang` VALUES ('3', '1', 'Barang C', '90', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9900', '900', 'gram', 'foto_barang_1623417930.jpg');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `pembeli_id` int(11) DEFAULT NULL,
  `penjual_id` int(11) DEFAULT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `alamat_pengiriman` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('3', '2', '1', '3', '10', '2021-06-09 12:46:03', 'cimahi', '2');
INSERT INTO `transaksi` VALUES ('4', '2', '1', '3', '10', '2021-06-09 12:46:37', 'mahi 2', '1');
INSERT INTO `transaksi` VALUES ('6', '2', '1', '2', '7', '2021-06-10 15:13:17', 'cimahi', '1');
INSERT INTO `transaksi` VALUES ('8', '3', '1', '2', '8', '2021-06-11 15:26:46', 'Bandung ', '0');
INSERT INTO `transaksi` VALUES ('9', '3', '1', '2', '6', '2021-06-11 15:32:52', 'Bandung', '0');

-- ----------------------------
-- Table structure for user_admin
-- ----------------------------
DROP TABLE IF EXISTS `user_admin`;
CREATE TABLE `user_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_admin
-- ----------------------------
INSERT INTO `user_admin` VALUES ('1', 'Administrator 1', 'mail@mail.com', '00898', 'admin', 'admin');

-- ----------------------------
-- Table structure for user_pembeli
-- ----------------------------
DROP TABLE IF EXISTS `user_pembeli`;
CREATE TABLE `user_pembeli` (
  `pembeli_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text,
  `foto` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pembeli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_pembeli
-- ----------------------------
INSERT INTO `user_pembeli` VALUES ('2', 'Pembeli 1', '', '089867555', 'mail@mail.com', 'jl bandung', null, 'pembeli', '12345678');
INSERT INTO `user_pembeli` VALUES ('3', 'Pembeli', 'ke 2', null, null, null, null, 'pembeli_2', '12345678');

-- ----------------------------
-- Table structure for user_penjual
-- ----------------------------
DROP TABLE IF EXISTS `user_penjual`;
CREATE TABLE `user_penjual` (
  `penjual_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`penjual_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_penjual
-- ----------------------------
INSERT INTO `user_penjual` VALUES ('1', 'Penjual ', 'ke 1', 'penjual@penjual.com', '08985766866', 'Bandung', 'penjual abadi', 'penjual', '12345678');
SET FOREIGN_KEY_CHECKS=1;
