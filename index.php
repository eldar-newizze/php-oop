<?php

$a = file_get_contents('https://master-7rqtwti-fejwvdfbssgmg.us-5.magentosite.cloud/media/catalog/product/cache/_349954e840b7894e0619c9076a057af0/1/4/14920.jpg');

spl_autoload_register(function ($class) {
    $path = $class.'.php';
    if (file_exists($path)) {
        require $path;
    }
});

$employee = new Employee('John', 'Doe', 32);

echo sprintf(
    "Employee's name: %s;\nEmployee's last name: %s;\nEmployee's age: %s.\n\n",
    $employee->getFirstName(),
    $employee->getLastName(),
    $employee->getAge()
);

$employee->setEmail('john.doe@gmail.com');
$employee->setPhone('+798800000000');

echo 'Employee\'s email: '.$employee->getEmail()."\n";
echo 'Employee\'s phone: '.$employee->getPhone()."\n";
echo 'Employee\'s site: '.$employee->getSiteUrl()."\n";
