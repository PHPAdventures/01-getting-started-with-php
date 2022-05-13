# Getting Started with PHP

This topic was covered on 2022-05-12 @ 06:00 PM (Thursday); [you can view it on YouTube by clicking here](https://www.youtube.com/watch?v=bFy7R53F0KM).

For more information about our meet-up, please visit our website:
[https://phpadventures.com](https://phpadventures.com)

## Topics

* Getting Started with PHP (Warren Uhrich)
* What do you want to see in our meetings? (Warren Uhrich)

----------------------------------------------------------

To run this project, run the following command:

```BASH
php -S localhost:8080 -t ./public
```

Once the server is running, [visit it in your browser](http://localhost:8080)!

----------------------------------------------------------

## Getting Started with PHP

* What is PHP?
* Why not PHP?
* Why PHP?
* Installing PHP
* Using PHP
* Writing PHP
* Templating in PHP
* Form Handling
* Reading and Writing a File

### What is PHP?

* Interpreted, general purpose, scripting language
* Developed by Danish-Canadian programmer Rasmus Lerdorf
* Originally created in 1994, releasing in 1995
* At first, stood for Personal Home Page tools
* Now stands for PHP Hypertext Preprocessor
* Typing is dynamic and weak (gradual as of 7.0)
  * Variables can change in type
  * Type assigned determined implicitly or by coercion
  * In recent versions, types can be enforced by functions and methods
* Capable of procedural, functional, and object-oriented programming
* It is open-source and free to use for even commercial purposes

### Why not PHP?

* It is like JavaScript in that it is...
  * Used by many
  * Non-restrictive
  * Forgiving
* Can be difficult to co-ordinate a team effort without a framework to provide structure and convention
* It might not specialize in what you need (Python is king of machine learning, for example)
* It is weakly typed
* Function names are inconsistent and can be hard to remember
* It is best-suited for command-line and web applications
* Your project is already written in something else
* You hate free stuff

### Why PHP?

* It is like JavaScript in that it is...
  * Used by many
  * Non-restrictive
  * Forgiving
* Fast to learn and pick up the basics
* Is interpreted, so developing is fast and fun (no lengthy compile times)
* Can be run easily from the terminal
* Powers 78%+ of web applications (with known back-ends)
* Used to write WordPress, the most popular web CMS on Earth
* Is used in the most common server stack: LAMP
  * It comes pre-installed on many servers, which might be cheating...
* It is specialized for web development and-so has many powerful features baked in for this purpose
* It has a fun [elephpant](https://www.php.net/elephpant.php) mascot!

### Installing PHP

* Before installing, check if you already have it installed
  * Open a terminal and run: `php --version`
  * If you see a version number, you're good to go!
  * If you see an error or warning, you'll have to install it
* Easiest way is via the terminal using a package manager compatible with your operating system
  * This method usually automatically installs the PHP interpretor to your PATH for easy use
  * Most popular options include:
    * `choco install php -y` via [Chocolatey](https://community.chocolatey.org/packages/php) for Windows
    * `brew install php` via [Homebrew](https://formulae.brew.sh/formula/php) for MacOS
    * `apt install php` via an [Advanced Package Tool](https://packages.ubuntu.com/impish/php) for Linux
* Should you want to install it manually instead, there are [instructions on the official website](https://www.php.net/manual/en/install.php)
* If you prefer a more GUI-oriented way of interacting with your projects, consider [XAMPP](https://www.apachefriends.org/download.html)
* Just want to try it, and not install it? Try [an on-line compiler](https://www.w3schools.com/php/phptryit.asp?filename=tryphp_compiler)

### Using PHP

* To run a hello world without even creating a file, try:
  * `php -r 'echo "Hello, World!\n";'`
  * The `-r` flag allows you to pass PHP code as a string to the interpretor
* What if you want to try more than one line?
  * `php -a`
  * This opens the PHP interactive shell
  * Here you can run multi-line code
  * You can set variables and call upon them lines later
  * Great for quick experiments
  * Use `CTRL`+`C` to leave interactive mode
* To execute a script file, you must point the interpretor at a file
  * Create a file called `hello.php`
  * Populate the file: `<?php echo 'Hello, World!';`
  * Run it from the terminal: `php hello.php`
* Run a server to view your project folder in the browser
  * `php -S localhost:8080`
  * You can change the address and port to your liking
  * The present working directory will be served to browser requests
  * PHP files will be interpreted; only printed strings will reach the browser (your code will be hidden)
  * Use `CTRL`+`C` to stop the server.

### Writing PHP

PHP code in a file should always be incapsulated in PHP opening `<?php` and closing `?>` tags. This is because by default a PHP file will output all text in the file unless an area is marked as a script. If a script is at the end of a file, the closing tag may be omitted.

Comments in PHP can be written 3 ways:

```PHP
<?php

// One-line comment.

# Another one-line comment.

/* A

multi-line

comment. */

```

Variables are as easy as `$myVar = 'Hi there!';`

They are mutable / changable: `$myVar = 34;`

There is a separate operator for addition `+` and concatenation `.`, so there is no confusion between the two.

```PHP
echo 3 + 3; // 6
echo 3 . 3; // 33
```

Use double quotes for string interpolation (single quotes do not support this feature.)

```PHP
$country = 'Canada';
echo "This script was written in $country";
```

Arrays come in two main flavours and have two popular syntaxes:
* Indexed Array (indexes start at zero)
  * `$myIndexedArr = array('dog', 'frog', 'hog');`
  * `$myIndexedArr = ['dog', 'frog', 'hog'];`
  * Access frog like so: `$myIndexedArr[1]`
* Associative Array (key-value pairs)
  * `$myAssocArr = array('name' => 'Warren', 'job' => 'Instructor');`
  * `$myAssocArr = ['name' => 'Warren', 'job' => 'Instructor'];`
  * Access job like so: `$myAssocArr['job']`

PHP offers a `foreach` loop for easy looping of arrays:

```PHP
<?php
$phpFrameworks = array(
  'Aura' => 'https://auraphp.com/',
  'CakePHP' => 'https://cakephp.org/',
  'CodeIgniter' => 'https://codeigniter.com/',
  'Drupal' => 'https://www.drupal.org/',
  'Kohana' => 'https://kohanaframework.org/',
  'Laravel' => 'https://laravel.com/',
  'Nette' => 'https://nette.org/',
  'Qcodo' => 'https://github.com/qcodo/qcodo/',
  'Silverstripe' => 'https://www.silverstripe.com/',
  'Symfony' => 'https://symfony.com/',
  'Yii' => 'https://www.yiiframework.com/',
  'Zend' => 'https://framework.zend.com/'
);

echo '<ul>';
foreach($phpFrameworks as $name => $url) {
  echo '<li>';
  echo "<a href=\"$url\">$name</a>";
  echo '</li>';
}
echo '</ul>';
```

Note the following approach is equivalent, but utilizes PHP's ability to seamlessly handle both HTML output and PHP scripting in one file:

```PHP
<?php
$phpFrameworks = array(
  'Aura' => 'https://auraphp.com/',
  'CakePHP' => 'https://cakephp.org/',
  'CodeIgniter' => 'https://codeigniter.com/',
  'Drupal' => 'https://www.drupal.org/',
  'Kohana' => 'https://kohanaframework.org/',
  'Laravel' => 'https://laravel.com/',
  'Nette' => 'https://nette.org/',
  'Qcodo' => 'https://github.com/qcodo/qcodo/',
  'Silverstripe' => 'https://www.silverstripe.com/',
  'Symfony' => 'https://symfony.com/',
  'Yii' => 'https://www.yiiframework.com/',
  'Zend' => 'https://framework.zend.com/'
);
?>

<ul>
  <?php foreach($phpFrameworks as $name => $url) : ?>
    <li>
      <a href="<?= $url ?>"><?= $name ?></a>
    </li>
  <?php endforeach; ?>
</ul>
```

## Templating in PHP

You can include the contents of another script in your current script via `include`. This can be helpful for pulling information, functions, classes, and more from other files for use in the one you're working on, but its utility does not end there.

`include` can also be used to easily output repeated portions of web pages... think navigation bars, headers, and footers. Edit one file, update everywhere. Suppose a filesystem like this:

```
php-project-directory
├┬templates
│├head.php
│├navigation.php
│└footer.php
└┬public
 ├┬css
 │└main.js
 ├┬js
 │└scripts.js
 ├about.php
 ├contact.php
 └index.php
```

Fill in the files in your `templates` directory...

***./templates/head.php***

```PHP
<!DOCTYPE html>
<html>
<head>
  <title>
    <?= $pageTitle = ucwords(str_replace(['/','.php'], '', $_SERVER['REQUEST_URI'])) ?>
  </title>
</head>
<body>
  <h1><?= $pageTitle ?></h1>
```

***./templates/navigation.php***

```PHP
<?php
  $links = array(
    'Home' => '/index.php',
    'About' => '/about.php',
    'Contact' => '/contact.php'
  );
?>
  <nav>
    <h2>Web Site Navigation</h2>
    <ul>
      <?php foreach($links as $name => $url): ?>
        <li>
          <a href="<?= $url ?>">
            <?= $name ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
```

***./templates/footer.php***

```PHP
  <footer>
    <h2>Web Site Footer</h2>
    <p>
      &copy; <?= date('Y') ?> Warren Uhrich; All Rights Reserved.
    </p>
  </footer>
</body>
</html>
```

The `about`, `contact`, and `index` pages can be simplified to...

```PHP
<?php
include '../templates/head.php';
include '../templates/navigation.php';

// Unique page content goes here.

include '../templates/footer.php';
```

Serve the `public` directory like so: `php -S localhost:8080 -t ./public`

The `-t` allows us to specify which folder the server serves (by default it is the current directory, so specifying can be helpful.)

## Form Handling

***addition-calculator.php***

```PHP
<!DOCTYPE html>
<html>
<head><title>PHP Addition Calculator</title></head>
<body>
  <h1>PHP Addition Calculator</h1>
  <form method="POST" action="calculator.php">
    <input id="num_1" name="num_1" type="number" value="<?= $_POST['num_1'] ?>" required>
    +
    <input id="num_1" name="num_2" type="number" value="<?= $_POST['num_2'] ?>" required>
    =
    <output name="result" for="num_1 num_2">
      <?= $_POST['num_1'] + $_POST['num_2'] ?>
    </output>
    <input type="submit" value="Calculate Sum">
  </form>
</body>
</html>
```

## Reading and Writing a File

***write-file.php***

```PHP
<?php
$phpFrameworksArray = array(
  'Aura' => 'https://auraphp.com/',
  'CakePHP' => 'https://cakephp.org/',
  'CodeIgniter' => 'https://codeigniter.com/',
  'Drupal' => 'https://www.drupal.org/',
  'Kohana' => 'https://kohanaframework.org/',
  'Laravel' => 'https://laravel.com/',
  'Nette' => 'https://nette.org/',
  'Qcodo' => 'https://github.com/qcodo/qcodo/',
  'Silverstripe' => 'https://www.silverstripe.com/',
  'Symfony' => 'https://symfony.com/',
  'Yii' => 'https://www.yiiframework.com/',
  'Zend' => 'https://framework.zend.com/'
);

$phpFrameworksJSONString = json_encode($phpFrameworksArray);

file_put_contents('php-frameworks.json', $phpFrameworksJSONString);
```

***read-file.php***

```PHP
<?php
$phpFrameworksJSONString = file_get_contents('php-frameworks.json');

$phpFrameworksArray = json_decode($phpFrameworksJSONString);

var_dump($phpFrameworksArray);
```

----------------------------------------------------------

## What do you want to see in our meetings?

* What comfort level are you with PHP?
* What sort of content are you looking for?

All constructive feedback is welcome, please reach out via the [website](https://phpadventures.com/) contact form with your ideas, comments, and support!
