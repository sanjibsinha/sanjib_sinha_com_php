<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>How do you make a clean URL?</title>

	<link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<div id="container"><a href="https://sanjibsinha.com/">Home</a></a></div>
<div id="container">
    
	<h1>How do you make a clean URL?</h1>
	<div id="body">
		
In WordPress, making a clean URL is comparatively easier. However, when you need to create a website on your own, it's not easy.
<p></p>
For the beginners, let me clear the term first.
<p></p>
What is clean URL?
<p></p>
Consider this URL first, to understand the concept.<p></p>
<pre><code>
    https://sanjibsinha.com/php/what-is-clean-url.php
    
</code></pre>
<p></p>Although the above link looks like a clean URL, being verbose, yet it's meaningful. The reader will understand what type of page it is.
<p></p>
This page must have written something about clean URL. Well, that part is okay as long as we think about humans.
<p></p>
But the concept of clean URL is not for the humans only. On the contrary, the concept is quite technical and related to the search engine bots.
<p></p>
Every search engine indexing a page based on many criteria. One of the important criteria is clean URL.
<p></p>
Therefore, the above-mentioned URL will be clean to a search engine if it looks like this:<p></p>
<pre><code>https://sanjibsinha.com/php/what-is-clean-url</code></pre><p></p>
As you may have noticed that the .php file extension is no longer there.<p></p>
<p></p>
Now the question is how we can make it possible?<p></p>
<h2>What does htaccess file do?</h2>
<p></p>A .htaccess file is a very important file in web development. Although it's a configuration file, still beginners stumble on it.
<p></p>
With reference to the .htaccess file, people always ask where we should keep it?
<p></p>
Usually when you put a .htaccess file on a Apache web server, while reloading, the server executes this file.
<p></p>
Because it is being executed on server reload, it can do many things. And it includes, redirecting the page, making clean URL, and many more.
<p></p>
Since we want a clean URL like we've mentioned above. Therefore, in the "php" folder of <a href="https://sanjibsinha.com/">https://sanjibsinha.com/</a>, we need to keep a .htaccess file like this:<p></p>
<pre><code>Options -MultiViews
RewriteEngine on

# remove php
RewriteCond %{REQUEST_METHOD} !POST
RewriteCond %{REQUEST_URI} !/index\.php$
RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s([^.]+)\.php [NC]
RewriteRule ^ %1 [R=301,L]

# rewrite with php php
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{DOCUMENT_ROOT}/php/$1.php -f
RewriteRule ^(.+?)/?$ $1.php [L]</code></pre><p></p>
Now having a clean URL like this <a href="https://sanjibsinha.com/php/what-are-different-type-of-php-variables">https://sanjibsinha.com/php/what-are-different-type-of-php-variables</a> is easier than before.
<p></p>
Now this URL is search engine friendly. It's human readable as well as machine readable.<p></p>
<h2>What Next?</h2>
<a href="https://leanpub.com/u/sanjibsinha">Leanpub books</a><p></p>
<a href="https://www.apress.com/gp/search?query=sanjib+sinha">Written six books for Apress</a><p></p>
<a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">Amazon books</a><p></p>
<a href="https://github.com/sanjibsinha">GitHub repository</a><p></p>
<a href="https://mesanjib.wordpress.com/">Technical blog</a><p></p>
<a href="https://sanjibsinha.wordpress.com/">Blog on anything that comes to mind!</a><p></p>
<a href="https://twitter.com/sanjibsinha">Twitter</a><p></p>

<p></p>

		<p><a href="https://sanjibsinha.com/">HOME</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>0.0004</strong> seconds. 
    PHP Version <strong>8.0.3</strong></p>
</div>

</body>
</html>