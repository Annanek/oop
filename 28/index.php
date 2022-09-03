<?php

include('Post.php');
include('Employee.php');

$post1 = new Post('programmer', 5000);
$post2 = new Post('manager', 3000);
$post3 = new Post('driver', 1000);


$employee1 = new Employee('Petr', 'Ivanov', $post1);

echo $employee1->getName() . '<br>' . $employee1->getSurname() . '<br>';
echo $employee1->getPost()->getName() . '<br>' . $employee1->getPost()->getSalary() . '<br>';

$employee1->changePost($post3);
echo $employee1->getPost()->getName();
