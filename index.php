<?php
include 'Employee.php';

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
