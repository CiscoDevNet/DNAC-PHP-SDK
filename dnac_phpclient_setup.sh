# Download and Install PHP Composer (Package Manager)

/usr/bin/php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
/usr/bin/php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
/usr/bin/php composer-setup.php
/usr/bin/php -r "unlink('composer-setup.php');"

# Install client library dependancies

/usr/bin/php ./composer.phar install -d ./src/

printf "\nDNA Center API PHP Client setup complete. \n\nConfigure DNA Center variables in ./dnac_phpclient_test.php and run it: php ./dnac_phpclient_test.php\n\n"