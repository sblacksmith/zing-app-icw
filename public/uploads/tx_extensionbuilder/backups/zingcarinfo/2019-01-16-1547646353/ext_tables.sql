#
# Table structure for table 'tx_zingcarinfo_domain_model_zingcardetail'
#
CREATE TABLE tx_zingcarinfo_domain_model_zingcardetail (

	car_id int(11) DEFAULT '0' NOT NULL,
	car_brand varchar(255) DEFAULT '' NOT NULL,
	car_name varchar(255) DEFAULT '' NOT NULL,
	car_price int(11) DEFAULT '0' NOT NULL,
	fuel_type varchar(255) DEFAULT '' NOT NULL,
	car_image int(11) unsigned NOT NULL default '0',
	seller_detail int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_zingcarinfo_domain_model_sellerinfo'
#
CREATE TABLE tx_zingcarinfo_domain_model_sellerinfo (

	zingcardetail int(11) unsigned DEFAULT '0' NOT NULL,

	seller_id int(11) DEFAULT '0' NOT NULL,
	seller_name varchar(255) DEFAULT '' NOT NULL,
	seller_contact varchar(255) DEFAULT '' NOT NULL,
	car_id int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_zingcarinfo_domain_model_sellerinfo'
#
CREATE TABLE tx_zingcarinfo_domain_model_sellerinfo (

	zingcardetail int(11) unsigned DEFAULT '0' NOT NULL,

);
