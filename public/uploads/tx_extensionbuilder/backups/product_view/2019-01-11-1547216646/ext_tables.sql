#
# Table structure for table 'tx_productview_domain_model_product'
#
CREATE TABLE tx_productview_domain_model_product (

	name varchar(255) DEFAULT '' NOT NULL,
	id int(11) DEFAULT '0' NOT NULL,
	color varchar(255) DEFAULT '' NOT NULL,
	brands int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_productview_domain_model_brand'
#
CREATE TABLE tx_productview_domain_model_brand (

	brand varchar(255) DEFAULT '' NOT NULL,

);
