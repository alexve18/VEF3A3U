<?php 
					// Require the classLoader if it is readable. That wil load the other classes that i require. 
					$classloader = 'Tools/Classes/classLoader.php';
					if (is_readable($classloader)) {
						require_once($classloader);
					}
					// define the new Books!
					$efnafraedi = new Tools\Classes\class_bok("Cooking with Walter White ", 5000);
					$staerdfraedi = new Tools\Classes\class_bok("Cashing in your allowance right ", 2500);
					$islenska = new Tools\Classes\class_bok("Icelandic101 ", 3890);
					// Put the Book objects into an array for easy and good printing. 
					$maobj = [$efnafraedi, $staerdfraedi, $islenska];
					echo "<h2>The parent books class</h2>";
					// Print it out. one by one.
					foreach ($maobj as $key) {
						echo $key -> getTitle();
						echo "Price : ";
						echo $key -> getPrice();
						echo "<br>";
					}
					// now use the better and improved class
					echo "<h2> The better and imporved books class</h2>";
					// thesse are all the same steps but with the addition of a publisher!! Great success. 
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
					?>