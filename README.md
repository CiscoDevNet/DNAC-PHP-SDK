## Background

[Cisco's DNA Center](https://www.cisco.com/c/en/us/products/cloud-systems-management/dna-center/index.html) is a centralized network control and management dashboard for Cisco DNA, an intent-based networking solution.

This project provides a sample PHP application and client libraries to access the Center as a Platform REST APIs for the [PHP](https://secure.php.net) language. The included sample application performs the following functions:

* Authenticates with DNA Center
* Retrieves a count of the number of networking devices listed in the inventory
* Displays a high level summary of the networkings devices listed in the inventory

By default the sample application has disabled SSL certificate checking when connecting to DNA Center, but this can be re-enabled if desired.

## Requirements

The following package must be installed prior to running the sample application:

* [PHP v5.5+](https://secure.php.net/downloads.php)

The following package is required and can be installed with the included setup shell script:

* [Composer](https://getcomposer.org/download/) (PHP Dependency Manager)

Composer, when run, will automatically install a number of additional required PHP libraries.

## Setting up with the included Setup Script

Once downloaded, run the included setup shell script.

```
> ./dnac_phpclient_setup.sh
```

## Setting up Manually (Optional)

If you do not wish to use the included setup shell script, the following steps should be manually performed:

* Download Composer
* Run Composer Setup
	```
	> php composer-setup.php
	```
* Run Composer to install required PHP libraries into the ./src directory
	```
	> php ./composer.phar install -d ./src/
	```

## Configuring the Sample Script

Before you can run the included sample script (dnac_phpclient_test.php), you first must edit the file and specify the following variables specific to your DNA Center installation.

```php
$DNACHost = ""; // IP Address or hostname of the DNA Center Cluster
$username = ""; // Administrator user name for DNA Center
$password = ""; // Administrator password for DNA Center
```

These variables allow the script to connect and authenticate with your DNA Center appliance.

## Running the Sample Script

To run the sample script, execute the following command:

```
> php ./dnac_phpclient_test.php
```








