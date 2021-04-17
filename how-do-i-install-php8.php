<?php require_once "header.php" ?>
		
<div id="container">
    <h1>How do I Install PHP 8</h1>
	
	<div id="body">
    This tutorial is all about installing and upgrading to PHP 8
    <h1 style="color: OrangeRed;background-color: lightgrey;border: 1px solid black;">
    How do I Upgrade to PHP 8</h1>


Granted, it's a good news that PHP 8 has come with many features, yet we need to install it first. So that we can avail such advantages of new PHP 8.
<p></p>
In addition, we need to install it on our machine. Maybe, it could be Windows 10, Ubuntu 18 or 20, or macOS.
<p></p>
Whatever, system you depend on, installing PHP 8 is super-easy.
<p></p>
Moreover this statement is true for beginners. Not only it's true for intermediate or advanced learners.
<p></p>
So let's start. We should check how we can install PHP 8 or upgrade to it.
<h2>How do I install PHP 8?</h2>
We can always download current<a href="https://www.php.net/downloads.php#v8.0.3"> PHP 8 from its official website</a>. However, for beginners it might look difficult.
<p></p>
I believe in simple steps. Therefore, for Windows 10, go for <a href="https://www.apachefriends.org/index.html">Xampp</a>. But for Linux Ubuntu, or macOS, use the terminal.
    <p></p>
I'll show you the commands. Although beginners may find those commands scary, still it's the safest method.
<h2>How do I upgrade to PHP 8?</h2>
Suppose you have already PHP 7.4.* in your system. Now, you need to upgrade to PHP 8.
<p></p>
Whether you freshly install PHP 8, or try to upgrade it to a new version, the process is same.
<p></p>
As you know, PHP runs well with MySQL. Moreover, you need a local database too.
<p></p>
So let's start with MySQL.
<p></p>
Open up your terminal on Ubuntu or macOS, and type these commands one after another.
<pre><code>sudo apt-get clean
sudo apt-get purge mysql*
sudo apt-get update
sudo apt-get install -f
sudo apt-get install mysql-server-5.7
sudo apt-get dist-upgrade</code></pre>
Why we should do that?

As we've said, we need to install everything afresh, including MySQL. Otherwise, in some cases, PHP 8 installation clashes with old versions of MySQL.
<h3>How do I install the latest PHP version on Ubuntu?</h3>
Not only on Ubuntu, but also on macOS, the commands are same. We need to issue the following commands step by step.
<pre><code>sudo apt update

sudo apt-get purge php7.*
sudo apt-get autoclean
sudo apt-get autoremove

sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php

sudo apt update


sudo apt install php8.0-fpm php8.0-common php8.0-mysql php8.0-gmp php8.0-curl php8.0-mbstring php8.0-json php8.0-xmlrpc php8.0-gd php8.0-xml php8.0-readline php8.0-cli php8.0-zip

sudo systemctl restart php8.0-fpm.service</code></pre>
That's it. Now, you have freshly installed PHP 8 and MySQL latest version ready on your system,

Now one may ask, should I upgrade to PHP 8 at all? Or, should I continue with PHP 7.4.*. Because I'm happy with the old version.

Whether you're happy with PHP 7 or not, doesn't matter in the long run.

We're going to answer this question, in a minute.
<h2>Should I upgrade to PHP 8?</h2>
Yes, you should.
<p></p>
Why?
<p></p>
Because transition to PHP 8 is the most impactful in the history of PHP language. Not that you need the current features all at once.
<p></p>
No, that's not the reason. In a separate article we'll check what are the key new features of PHP 8.
<p></p>
But at present, we consider the long term goal. No doubt, in the long run upgrading to PHP 8 is worthwhile.
<p></p>
We'll definitely discuss this and more in a separate post.
<p></p>
Now, it's time to check whether our installation has not hit rough weather.
<p></p>
To check that, issue this command:
<pre><code>dpkg --get-selections | grep -i php</code></pre>
It'll reproduce a long list on your terminal.
<pre><code>libapache2-mod-php8.0 install
php-cli install
php-common install
php-gettext install
php-mbstring install
php-pear install
php-php-gettext install
php-xml install
php5.6-imagick deinstall
php8.0 install
php8.0-bz2 deinstall
php8.0-cli install
php8.0-common install
php8.0-curl install
php8.0-fpm install
php8.0-gmp install
php8.0-imagick deinstall
php8.0-mbstring install
php8.0-mysql install
php8.0-opcache install
php8.0-readline install
php8.0-xml install</code></pre>
And, finally we can check the PHP version. To do that issue this simple command:
<pre>php -v<code></code></pre>
That will let you know that you're running PHP 8 on your system.
<pre><code>PHP 8.0.3 (cli) (built: Mar 5 2021 07:53:56) ( NTS )
Copyright (c) The PHP Group
Zend Engine v4.0.3, Copyright (c) Zend Technologies
with Zend OPcache v8.0.3, Copyright (c), by Zend Technologies</code></pre>
<h2>What does PHP FPM do?</h2>
You've probably noticed it earlier.
<p></p>
While we were installing fresh PHP 8, we had issued this command:
<pre><code>sudo apt install php8.0-fpm php8.0-common php8.0-mysql php8.0-gmp php8.0-curl php8.0-mbstring php8.0-json php8.0-xmlrpc php8.0-gd php8.0-xml php8.0-readline php8.0-cli php8.0-zip</code></pre>
Inside that command, we had
<pre><code><code>php8.0-fpm</code></code></pre>
It's nothing but Fast CGI Process manager. Before PHP 8 had come, there were traditional CGI based methods. The FPM is way faster than the previous one.
<p></p>
That's not the only reason you should start with PHP 8. There are more reasons.
<p></p>
However, it's one of the main reasons, of course.
<p></p>
Now we can start our PHP code anywhere. Because PHP has a built-in web server, you can run your PHP 8 code anywhere.
<p></p>
Let us create a  PHP 8 project "test_project" inside our "Documents/development" folder.
<p></p>
Staying at that folder, we can issue this command.
<pre><code>php -S localhost:8080</code></pre>
In the "index.php" file, we can write a simple code like this:
<pre><code>
phpinfo();
</code></pre>
Now, in your favorite browser you can run http://localhost:8080.
<p></p>
It will also show you all the information you want to know about PHP 8.
<p></p>
<img class="size-full wp-image-681" src="https://sanjibsinha.com/wp-content/uploads/2021/04/1-3.jpg" alt="How do I install PHP? How do I upgrade to PHP 8?" width="965" height="486" /><p style="color:Crimson;"> How do I install PHP? How do I upgrade to PHP 8?</p>
<h2>What Next?</h2>
<p></p><a href="https://leanpub.com/u/sanjibsinha">Leanpub books</a>
<p></p><a href="https://www.apress.com/gp/search?query=sanjib+sinha">Written six books for Apress</a>
<p></p><a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">Amazon books</a>
<p></p><a href="https://github.com/sanjibsinha">GitHub repository</a>
<p></p><a href="https://mesanjib.wordpress.com/">Technical blog</a>
<p></p><a href="https://sanjibsinha.wordpress.com/">Blog on anything that comes to mind!</a>
<p></p><a href="https://twitter.com/sanjibsinha">Twitter</a>


<?php require_once "footer.php" ?>