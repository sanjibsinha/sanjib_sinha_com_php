<?php require_once "header.php" ?>
		
<div id="container">
    <h1>Difference between GET and POST in PHP</h1>
	
	<div id="body">
    <p></p>
    Both the GET and POST methods send data in PHP. However, in the POST method the URL parameter is not visible.
    <p></p>
As long as we think about the security of data, GET method is not safe. Because the data breach is inevitable we usually avoid GET method.
<p></p>
Through the URL parameter, the data is visible when we use the GET method in PHP.
<p></p>
On the other hand, when we use POST method, we can send data safely.
<p></p>
Let us take a look at the following image where we have set two input text boxes.
<p></p>
Through the first text box we'll send data by GET method. And through the second text box we'll send data by POST method.
<p></p>
<p></p><img class="size-full wp-image-720" src="https://sanjibsinha.com/wp-content/uploads/2021/04/get-and-post-one.jpg" alt="Sending and Collecting data by GET and POST method in PHP" width="888" height="670" /><p></p> Sending and Collecting data by GET and POST method in PHP<p></p>

Each time we'll send data and show how URL parameter is visible in case of GET method.
<h3>What is $_GET in PHP?</h3>
It's super global variable in PHP. We use $_GET for collecting data from HTML Form.

Let us see how we can send and collect a simple text by this $_GET method.
<pre><code>&lt;form action= "submit.php" method="get"&gt;
Name: &lt;input type="text" name="name" &gt;
&lt;br /&gt;
&lt;hr&gt;
&lt;input type="submit" &gt;
&lt;/form&gt;
&lt;br /&gt;
&lt;hr&gt;
&lt;?php
$name = $_GET["name"];
echo "Submitted text by GET: &lt;h2&gt;$name&lt;/h2&gt;";
?&gt;</code></pre>
It's a simple code snippet. The problem is, when we type any name and press the SUBMIT button, the URL parameter is clearly visible on the browser.
<p></p>
We can view that in the next image:
<p></p>
<p></p><img class="size-full wp-image-722" src="https://sanjibsinha.com/wp-content/uploads/2021/04/get-and-post-two.jpg" alt="Sending data by GET method in PHP makes URL parameter visible" width="962" height="486" /><p></p> Sending data by GET method in PHP makes URL parameter visible<p></p>
<p></p>
Take a look at the browser, URL parameter shows us that the name is John Smith.
<p></p>
Now, we can change the URL parameter on the browser itself, and that subsequently changes the data too.
<pre><code>http://localhost:8080/submit.php?name=John+Smith</code></pre>
<h2>Should I use $_GET or $_POST?</h2>
For submitting data through form, we must use $_POST.
<p></p>
Why?
<p></p>
I'm going to show you in a minute. Watch the next image.
<p></p>
<img class="size-full wp-image-723" src="https://sanjibsinha.com/wp-content/uploads/2021/04/get-and-post-three.jpg" alt="Sending data by POST method in PHP is more secure" width="839" height="695" /><p></p> Sending data by POST method in PHP is more secure<p></p>
<p></p>
As you can see, we've submitted data using POST method in PHP. However, there is nothing in the browser. This time, no one can see anything on the browser.
<p></p>
We've done nothing special. What we've done is very simple. We've changed the form method from GET to POST.
<pre><code>&lt;form action= "submit.php" method="POST"&gt;
Name: &lt;input type="text" name="postName" &gt;
&lt;br /&gt;
&lt;hr&gt;
&lt;input type="submit" &gt;
&lt;/form&gt;
&lt;br /&gt;

&lt;?php
$postName = $_POST["postName"];
echo "Submitted text by POST: &lt;h2&gt;$postName&lt;/h2&gt;";
?&gt;</code></pre>
As a conclusion we can say that, for viewing data the $_GET super global variable is fine. Nonetheless we cannot ignore the security aspect.
<p></p>
So whenever we submit and send any data in PHP, we must use POST method and the $_POST super global variable is our automatic choice.
<h2>What Next?</h2>
<p></p><a href="https://leanpub.com/u/sanjibsinha">Books at Leanpub</a>
<p></p><a href="https://www.apress.com/gp/search?query=sanjib+sinha">Books in Apress</a>
<p></p><a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">My books at Amazon</a>
<p></p><a href="https://github.com/sanjibsinha">GitHub repository</a>
<p></p><a href="https://mesanjib.wordpress.com/">Technical blog</a>
<p></p><a href="https://twitter.com/sanjibsinha">Twitter</a>




<p style="color:Crimson;">This is my first CSS example</p>
<?php require_once "footer.php" ?>