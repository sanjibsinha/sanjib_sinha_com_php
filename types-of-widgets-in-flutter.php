<?php require_once "header.php" ?>
<h2>Types of Widgets in Flutter</h2>

Broadly speaking, there are two types of widgets in Flutter.

<a href="https://api.flutter.dev/flutter/widgets/StatefulWidget-class.html">StatefulWidget</a> and <a href="https://api.flutter.dev/flutter/widgets/StatelessWidget-class.html">StatelessWidget</a>. Although we divide all widgets mainly in two categories, the statement is not complete yet.

Why?

Let me explain.

Granted, instead we could have said, broadly there were only two types of widgets - visible and invisible. Moreover, in that sense, we can give you examples.

Such as, Text, Image or Icon widgets are visible and Row or Column widget is invisible. However, is that definition complete yet?

No. It's not complete.

Actually, there are more than ten widgets that we depend on every day basis.

When we plan a flutter app, we have to start with <a href="https://api.flutter.dev/flutter/material/MaterialApp-class.html">Material App</a>. This widget is a convenience widget that wraps a number of widgets. The immediate descendant is <a href="https://api.flutter.dev/flutter/material/Scaffold-class.html">Scaffold widget</a>.

In fact, using Scaffold, we start designing our material app.
<h2>How do you <a href="https://flutter.dev/docs/development/ui/layout">layout in flutter</a>?</h2>
Flutter's layout depends on widgets. Incidentally, we use widgets to build our user interfaces. Whatever the role of widgets is, widgets are classes nevertheless.

We can compose simple widgets to build complex widgets.

How we can do that?

Suppose we need a single widget to display something. Container widget could be a good idea. However, it's not true when we want to handle several widgets.

Row and Column handle several child widgets. But for content handling we need content containers.
<h3>How do you manage content container in flutter?</h3>
We need to remember the key point: a widget is not free to decide its size. The parent sets the constraint and based on that its size varies.

Therefor a widget gets its constraints from its parent.

What is constraint?

Width and height. Either it could minimum, or maximum.

When the parent sets the constraints, it might not seem to be a good idea, sometimes. But nevertheless, it maintains a stability in layout. And we have to follow these sets of rule.

<a href="https://api.flutter.dev/flutter/widgets/Stack-class.html">Stack</a> and <a href="https://api.flutter.dev/flutter/material/Card-class.html">Card</a> widgets are good candidates for content containers.
<h3>How do we repeat the elements in flutter?</h3>
In some cases, we need to be careful about scrolling down the screen.

<a href="https://api.flutter.dev/flutter/widgets/ListView-class.html">ListView</a>, <a href="https://api.flutter.dev/flutter/widgets/GridView-class.html">GridView</a> and <a href="https://api.flutter.dev/flutter/material/ListTile-class.html">ListTile</a> are good examples. On the one hand the widget doesn't always know its constraints, and on the other, it doesn't always know its position too.

Let's consider a simple example.
<pre><code>return Center(
child: Card(
child: Column(
mainAxisSize: MainAxisSize.min,
children: &lt;Widget&gt;[
const ListTile(
leading: Icon(Icons.flight),
title: Text('The Window Seat'),
subtitle: Text('With food and beverages.'),
),
Row(
mainAxisAlignment: MainAxisAlignment.end,
children: &lt;Widget&gt;[
TextButton(
child: const Text('BUY TICKETS'),
onPressed: () {/* ... */},
),
const SizedBox(width: 8),
TextButton(
child: const Text('CANCEL'),
onPressed: () {/* ... */},
),
const SizedBox(width: 8),
],
),
],
),
),
);</code></pre>
We have crammed a lot of widgets in one place. If surprised, you can take a look at the following image, nonetheless it looks so small and intact in its design.

<p></p><img class="size-full wp-image-743" src="https://sanjibsinha.com/wp-content/uploads/2021/04/layout-sample.jpg" alt="How many types of widgets are there in Flutter?" width="484" height="453" /><p></p> How many types of widgets are there in Flutter?<p></p>

Although in flutter you need to design your UI by coding, still flutter provides you every facility. However, you need to know the rule.
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