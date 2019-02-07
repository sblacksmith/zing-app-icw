#
# Table structure for table 'tx_cardetails_domain_model_cardetails'
#
CREATE TABLE tx_cardetails_domain_model_cardetails (

	c_id int(11) DEFAULT '0' NOT NULL,
	c_name varchar(255) DEFAULT '' NOT NULL,
	c_brand varchar(255) DEFAULT '' NOT NULL,
	color varchar(255) DEFAULT '' NOT NULL,
	price int(11) DEFAULT '0' NOT NULL,
	fuel_type varchar(255) DEFAULT '' NOT NULL,
	seller varchar(255) DEFAULT '' NOT NULL,
	get_brand int(11) unsigned DEFAULT '0',
	get_c_name int(11) unsigned DEFAULT '0',
	get_fuel_type int(11) unsigned DEFAULT '0',
	get_price int(11) unsigned DEFAULT '0',
	get_seller_details int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_cardetails_domain_model_sellerdetails'
#
CREATE TABLE tx_cardetails_domain_model_sellerdetails (

	cardetails int(11) unsigned DEFAULT '0' NOT NULL,

	s_id int(11) DEFAULT '0' NOT NULL,
	s_name varchar(255) DEFAULT '' NOT NULL,
	s_contact varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_cardetails_domain_model_brand'
#
CREATE TABLE tx_cardetails_domain_model_brand (

	b_id int(11) DEFAULT '0' NOT NULL,
	b_name varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_cardetails_domain_model_carname'
#
CREATE TABLE tx_cardetails_domain_model_carname (

	c_n_id int(11) DEFAULT '0' NOT NULL,
	c_name varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_cardetails_domain_model_fueltype'
#
CREATE TABLE tx_cardetails_domain_model_fueltype (

	f_id int(11) DEFAULT '0' NOT NULL,
	fuel_type varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_cardetails_domain_model_price'
#
CREATE TABLE tx_cardetails_domain_model_price (

	p_id int(11) DEFAULT '0' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,

);

#
# Table structure for table 'tx_cardetails_domain_model_sellerdetails'
#
CREATE TABLE tx_cardetails_domain_model_sellerdetails (

	cardetails int(11) unsigned DEFAULT '0' NOT NULL,

);
