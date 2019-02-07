#
# Table structure for table 'tx_search_domain_model_searchtable'
#
CREATE TABLE tx_search_domain_model_searchtable (

	car_brand varchar(255) DEFAULT '' NOT NULL,
	fuel_type varchar(255) DEFAULT '' NOT NULL,
	color varchar(255) DEFAULT '' NOT NULL,
	price int(11) DEFAULT '0' NOT NULL,
	miles_run double(11,2) DEFAULT '0.00' NOT NULL,
	cars_data int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_search_domain_model_cardeatails'
#
CREATE TABLE tx_search_domain_model_cardeatails (

	searchtable int(11) unsigned DEFAULT '0' NOT NULL,

	model varchar(255) DEFAULT '' NOT NULL,
	fuel varchar(255) DEFAULT '' NOT NULL,
	color varchar(255) DEFAULT '' NOT NULL,
	price int(11) DEFAULT '0' NOT NULL,
	miles double(11,2) DEFAULT '0.00' NOT NULL,

);

#
# Table structure for table 'tx_search_domain_model_cardeatails'
#
CREATE TABLE tx_search_domain_model_cardeatails (

	searchtable int(11) unsigned DEFAULT '0' NOT NULL,

);
