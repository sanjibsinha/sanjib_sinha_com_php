<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>What are different type of PHP variables</title>

	<link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div id="container">
    <p><a href="https://sanjibsinha.com/">HOME</a>.</p>
    </div>

<div id="container">
    
	<h1>What are different type of PHP variables</h1>
	<div id="body">
		
    Data types vary according to the programming languages, concepts are more or less same, nevertheless.
<p></p>
As far as data types are concerned, we need to keep this in mind.
<p></p>
Why does it vary?
<p></p>
Because every programming language has its own architecture.
<p></p>
If you compare the data types of Dart programming language, or Java with PHP, you'll find that they are not same.
<p></p>
Whatsoever, in this article, we're going to discuss PHP. So, stay tuned.
<h2>PHP supports ten primitive types</h2>
PHP treats every data type as primitive data type. Therefore, the concept of composite or user defined data type is treated as primitive data type in PHP.
<p></p>
In PHP we have Four scalar types:<p></p>
<ul>
 	<li>
<pre><code>bool

int

float (floating-point number, aka double)

string</code></pre>
</li>
</ul>
We have Four compound types, as well:
<ul>
 	<li>
<pre><code>array

object

callable

iterable</code></pre>
</li>
</ul>
And finally, in PHP, we have two special types:
<ul>
 	<li>
<pre><code>resource

NULL</code></pre>
</li>
</ul><p></p>
We can declare any PHP variable like this:<p></p>
<pre><code>$a_bool = TRUE; // a boolean
$a_str = "Sanjib"; // a string
$an_int = 12; // an integer</code></pre>
Moreover, checking the type of any PHP variable is very easy. PHP has a built-in function called gettype(). To check the type we can pass the variable as argument.
<pre><code>echo gettype($a_str); // prints out: string</code></pre><p></p>
Not only the above-mentioned function, in PHP we have another good function that checks the type and returns boolean yes or no.
<p></p>
With reference to the above code, let's check how it works.
<p></p>
Although this function is very declarative in nature, still we need to understand it. To do that watch the following code snippet:
<pre><code>// If $a_bool is a string, print it out, otherwise it won't work
// quite naturally, this piece of code does not print out anything
if (is_string($a_bool)) {
echo "String: $a_bool";
}</code></pre><p></p>
As we've seen in the above code, $a_bool declares a boolean data type. However, it is not string data type. For that reason, if we pass a boolean data as argument through is_string() function, the if logic does not execute that block.
<p></p>
Anyway, the above code snippets assure one thing. PHP is both simple to use and easy to understand.
<p></p>
In the next tutorial, we'll discuss data types separately.
<h2>What Next?</h2>
<a href="https://leanpub.com/u/sanjibsinha">Leanpub books</a><p></p>
<a href="https://www.apress.com/gp/search?query=sanjib+sinha">Written six books for Apress</a>
<p></p><a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">Amazon books</a>
<p></p><a href="https://github.com/sanjibsinha">GitHub repository</a><p></p>
<a href="https://mesanjib.wordpress.com/">Technical blog</a><p></p>
<a href="https://sanjibsinha.wordpress.com/">Blog on anything that comes to mind!</a>
<a href="https://twitter.com/sanjibsinha">Twitter</a><p></p>





		<p><a href="https://sanjibsinha.com/">Home</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>0.0004</strong> seconds. 
    PHP Version <strong>8.0.3</strong></p>
</div>

</body>
</html>