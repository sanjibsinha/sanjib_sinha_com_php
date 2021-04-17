<?php require_once "header.php" ?>
<h2>How Do I Display an Image in Flutter</h2>		
    
Displaying image in flutter is not difficult at all. However, you need to follow a few rules.

Again following a few rules is not hard, though. But you need to know them.

How do you know them?

Well, this article is going to describe the mechanism.

First, we'll use Image asset method. And then we'll use Image network method, where we'll display image from web. Certainly, for the network method, we need internet connection.
<h2>How do I use Image Widget in Flutter?</h2>
We can use Image widget in various ways. Moreover, each way is quite simple. Of course, you need to know the rules.

With reference to the rules, the first rule takes us to the asset method of Image widget.

To understand how the asset method works, let us first see an image of our flutter app.

<p></p><img class="size-full wp-image-686" src="https://sanjibsinha.com/wp-content/uploads/2021/04/1-4.jpg" alt="Display image in Flutter using Image widget asset method" width="816" height="598" /> <p></p>Display image in Flutter using Image widget asset method<p></p>

In the <a href="http://Display image in Flutter using Image widget asset method">theming app that we have seen before</a>, we just added an image above the quiz questions.

How did I display the image?

The following code snippet will show you, how we did that.
<pre><code>class FirstImage extends StatelessWidget {
const FirstImage({
Key key,
}) : super(key: key);

@override
Widget build(BuildContext context) {
return Container(
height: 150,
margin: EdgeInsets.all(10),
padding: EdgeInsets.all(2),
child: Image.asset(
'assets/images/s.png',
width: 150,
height: 150,
fit: BoxFit.fitHeight,
),
);
}
}</code></pre>
In the above code, this part is important.
<pre><code>child: Image.asset(
'assets/images/s.png',
width: 150,
height: 150,
fit: BoxFit.fitHeight,
),</code></pre>
As you see, we mentioned the image path as a parameter in the Image.asset() method.

And there are other parameters too, such as width and height. Another named parameter is "fit" that maintains the size of image in the container.

However, this code will work only on one condition. Beforehand, we need to add the asset dependency in our pubspec.yaml file in the following manner.
<pre><code>flutter:
uses-material-design: true
assets:
- assets/images/</code></pre>
<h2>How to display image from internet in Flutter?</h2>
If we want to display image from internet in flutter, we need internet connection first. When we use the Image.asset() method, the source of image is local. Therefore, it's fast.

Nonetheless the Image.network() method works fine only with the internet connection, still developers use it. Even though there are a few ifs and buts involved here.

Firstly, we need internet connection.

Secondly, the source of the image plays an important role. The source should remain alive as long as your app works in the production level.

Finally, we need to be careful about the alternative source.

Why so?

Consider a situation where your network-image-server is down. Then your app is unable to display any image.

To meet that requirement we have to put up an alternative way.

Because of so much hassles, you need to be careful and decide.
<h3>How do I display an image from API in Flutter?</h3>
Now we're going to see how we can do that. It's neither difficult, nor it takes a lot of pain. On the contrary, it's very basic.

We need to pass the full path of the source.
<pre><code>class SecondImage extends StatelessWidget {
const SecondImage({
Key key,
}) : super(key: key);

@override
Widget build(BuildContext context) {
return DecoratedBox(
decoration: BoxDecoration(
color: Colors.white,
border: Border.all(),
borderRadius: BorderRadius.circular(20),
),
child: Image.network(
'https://i0.wp.com/sanjibsinha.com/wp-content/uploads/2021/04/a-1.jpg'),
);
}
}</code></pre>
As you see, we take the image from this <a href="https://sanjibsinha.com/">website</a>.
And it looks like this:

<p></p><img class="size-full wp-image-690" src="https://sanjibsinha.com/wp-content/uploads/2021/04/3-2.jpg" alt="How to display image from API in Flutter" width="817" height="600" /><p></p> How to display image from API in Flutter<p></p>

We can scroll the app, and the second image that comes from API is quite prominent.
<p></p>
What Next?
<p></p>
<p></p><a href="https://leanpub.com/u/sanjibsinha">Books at Leanpub</a>
<p></p><a href="https://www.apress.com/gp/search?query=sanjib+sinha">Books in Apress</a>
<p></p><a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">My books at Amazon</a>
<p></p><a href="https://github.com/sanjibsinha">GitHub repository</a>
<p></p><a href="https://mesanjib.wordpress.com/">Technical blog</a>
<p></p><a href="https://twitter.com/sanjibsinha">Twitter</a>



<?php require_once "footer.php" ?>

