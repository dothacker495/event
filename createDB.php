<?php

require('dbConfig.php');

	$sql='CREATE DATABASE IF NOT EXISTS '.$mysql_database;
	mysql_query($sql, $con);
	$selectedDB=mysql_select_db($mysql_database, $con);
	$sql='CREATE TABLE IF NOT EXISTS supplier(
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	COMPANY_NAME varchar(50) NULL,
	ADDRESS varchar(50) NULL,
	PHONE varchar(20) NULL,
	SERVICE varchar(20) NULL,
	PRICE_RANGE int(10) NULL,
	PICTURE_UPLOAD varchar(100) NULL,
	VIDEO_LINK varchar(100) NULL,
	EMAIL_ADDRESS varchar(20) NULL,
	AGREE_TERMS tinyint(1) DEFAULT 0,
	WANT_PREMIUM tinyint(1) DEFAULT 0
	)';
	mysql_query($sql, $con);
	$sql='CREATE TABLE IF NOT EXISTS mobile(
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	EMAIL_ADDRESS varchar(20) NULL,
	NAME varchar(30) NULL
	)';
	mysql_query($sql, $con);
	$sql='CREATE TABLE IF NOT EXISTS accounts(
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	EMAIL_ADDRESS varchar(20) NULL,
	PASSWORD varchar(40) NULL
	)';
	mysql_query($sql, $con);
	$sql='CREATE TABLE IF NOT EXISTS master_service(
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	VALUE varchar(20) NOT NULL,
	UNIQUE(VALUE)
	)';
	mysql_query($sql, $con);

?>