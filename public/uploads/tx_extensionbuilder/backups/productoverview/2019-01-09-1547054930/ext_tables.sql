#
# Table structure for table 'tx_productoverview_domain_model_products'
#
CREATE TABLE tx_productoverview_domain_model_products (

	name varchar(255) DEFAULT '' NOT NULL,
	price varchar(255) DEFAULT '' NOT NULL,
	categories int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_productoverview_domain_model_categories'
#
CREATE TABLE tx_productoverview_domain_model_categories (

	products int(11) unsigned DEFAULT '0' NOT NULL,

	category varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_productoverview_domain_model_categories'
#
CREATE TABLE tx_productoverview_domain_model_categories (

	products int(11) unsigned DEFAULT '0' NOT NULL,

);
