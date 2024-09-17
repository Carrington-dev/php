<?php

$name = "John";
echo "Hello, {$name}!<br>"; // Will work
echo 'Hello, {$name}!<br>'; // Won't work


$user = ['name' => 'John'];
echo "Hello, {$user['name']}!<br>";
