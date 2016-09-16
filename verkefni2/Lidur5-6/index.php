<?php 
					// Require the classLoader if it is readable. That wil load the other classes that i require. 
					$classloader = 'Tools/Classes/classLoader.php';
					if (is_readable($classloader)) {
						require_once($classloader);
					}
					$efnafraedi = new Tools\Classes\class_bok("Cooking with Walter White ", 5000);
					$staerdfraedi = new Tools\Classes\class_bok("Cashing in your allowance right ", 2500);
					$islenska = new Tools\Classes\class_bok("Icelandic101 ", 3890);
					$maobj = [$efnafraedi, $staerdfraedi, $islenska];
					echo "<h2>The parent books class</h2>";
					foreach ($maobj as $key) {
						echo $key -> getTitle();
						echo "Price : ";
						echo $key -> getPrice();
						echo "<br>";
					}
					echo "<h2> Published</h2>";
					$published_math = new Tools\Classes\class_published("Cashing in your allowance right NOW PUBLISHED ", 3000, " The Guy who liked math");
					$published_chemistry = new Tools\Classes\class_published("Cooking with Walter White NOW PUBLISHED ", 5500, " By Walter White");
					$published_icelandic = new Tools\Classes\class_published("Icelandic101 NOW PUBLISHED ", 3500, " By the guy who really liked icelandic");
					$maobjs = [$published_chemistry, $published_math, $published_icelandic];
					foreach ($maobjs as $key) {
						echo $key -> getTitle();
						echo "Price : ";
						echo $key -> getPrice();
						echo " publisher : ";
						echo $key -> getPublisher();
						echo "<br>";
					}

					echo "<h2> User class</h2>";
					$user = new Tools\CLasses\class_user("email@email.email", "mypassword");
					echo 'Your email: ' . $user->getEmail() . '<br>';
					echo 'Your Password: ' . $user->getPassword();
					echo '<br>Breytum gildum<br>';
					$user->setEmail('newemail@newemail.com');
					$user->setPassword('newpassword');
					echo 'Your new email: ' . $user->getEmail() . '<br>';
					echo 'Your new Password: ' . $user->getPassword() . '<br>';
					?>