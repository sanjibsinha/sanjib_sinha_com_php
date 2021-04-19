<?php require_once "header.php" ?>
		
<div id="container">
    <h1>How Do I use ListView in Flutter?</h1>
	
	<div id="body">
    
    ListView is the most common scrolling widget. Furthermore it allows its children to scroll endlessly.
<p></p>
And it's the main advantage of ListView.
<p></p>
There are other advantages too as well. In flutter, for that reason we keep ListView handy.
<p></p>
This article is continuation of the previous article - <a href="https://sanjibsinha.com/how-do-i-add-a-list-in-flutter-how-do-i-show-a-list-in-flutter/">How do I add a list in Flutter? How do I show a list in Flutter</a>. However, we're going to build the app from scratch this time.
<p></p>
This time our main challenge is to design the app in a better way.
<p></p>
To keep your memory afresh, let's take a look at the previous design.
<p></p>
<p></p><img class="size-full wp-image-795" src="https://sanjibsinha.com/wp-content/uploads/2021/04/chart-flutter-three.jpg" alt="How to delete a list in flutter?" width="373" height="629" /><p></p> How to delete a list in flutter?<p></p>
<p></p>
The above image was the last position where we'd left it. But, this time, the first look of our flutter app will be like this:
<p></p>
<p></p><img class="size-full wp-image-800" src="https://sanjibsinha.com/wp-content/uploads/2021/04/expense-one.jpg" alt="Using ListView to show a list of items in flutter" width="383" height="615" /> <p></p>Using ListView to show a list of items in flutter<p></p>
<p></p>
As you can see, this time our expense list app looks far better than before. However it's not finished yet. It's just the beginning.
<h2>What is ListView in Flutter?</h2>
Theoretically the ListView is a widget that allows user to scroll. However, it has many other purposes.
<p></p>
It displays its children widget in a scrolling manner. As a result, we can accommodate many other widgets inside it.
<p></p>
By the way, some widgets are invisible. But, they allow the visible widgets to show the designs.
<p></p>
ListView belongs to the invisible side. Yet it's one of the rarest invisible widget, that scrolls.
<p></p>
As we progress, let's try to understand the app design.
<p></p>
We're going to make a flutter app that will add expenses in a list. Moreover, it'll have a delete button, so we can delete any of the item from the list.
<p></p>
Before going to the back-end programming let's concentrate on the front-end design part. At least in this segment, we'll design our app first.
<p></p>
In the next segment, we'll build the back-end part. So stay tuned.
<p></p>
Another advantage of the ListView is we can place Column, Row widgets inside it, as our design needs.
<p></p>
First, we have a model class:
<pre><code>import 'package:flutter/foundation.dart';

class ExpenseList {
String id;
String title;
double amount;
DateTime date;

ExpenseList({
@required this.id,
@required this.title,
@required this.amount,
@required this.date,
});
}</code></pre>
Secondly, we have a stateless widget. Even though it's stateless at present, we'll make it stateful when time comes.
<p></p>
But, as we've said, in this segment, we concentrate on the design part.
<h3>Is Flutter front end or backend?</h3>
The following code will show you how we can pass across both. Flutter is both frontend and backend.
<p></p>
We've started our app like this:
<pre><code>class ExpenseFirstPage extends StatelessWidget {
ExpenseFirstPage({Key key}) : super(key: key);

...
</code></pre><p></p>
Then we add a list of expense. As a starter, we've added the expenses manually.<p></p>
<pre><code>final List&lt;ExpenseList&gt; expenseList = [
ExpenseList(
id: '1',
title: 'Fruits',
amount: 200.00,
date: DateTime.now(),
),
ExpenseList(
id: '2',
title: 'Vegetables',
amount: 200.08,
date: DateTime.now(),
),
];</code></pre>
<p></p>Why we've done that? Just to display two items at the very beginning.
<p></p>
Next, we need the build method, where we use ListView to place our other visible widgets.
<pre><code>@override
Widget build(BuildContext context) {
return Center(
child: ListView(
padding: EdgeInsets.all(8),
children: [
Container(
child: Card(
child: Text('Chart'),
elevation: 10,
),
),
Container(
child: Column(
children: expenseList.map((e) {
return Column(
crossAxisAlignment: CrossAxisAlignment.start,
children: [
Row(
children: [
Container(
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
decoration: BoxDecoration(
color: Colors.yellow[100],
border: Border.all(
color: Colors.red,
width: 5,
),
),
child: Card(
child: Text(
'\$${e.amount}',
style: TextStyle(
fontSize: 20,
fontWeight: FontWeight.bold,
),
),
),
),
],
),
],
);
}).toList(),
),
),
],
),
);
}
}</code></pre><p></p>
Consequently, we're able to display the design.
<p></p>
To get the above image, this part plays a vital role.
<pre><code>Column(
children: expenseList.map((e) {
return Column(
crossAxisAlignment: CrossAxisAlignment.start,
children: [
Row(
children: [
Container(
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
decoration: BoxDecoration(
color: Colors.yellow[100],
border: Border.all(
color: Colors.red,
width: 5,
),
),
child: Card(
child: Text(
'\$${e.amount}',
style: TextStyle(
fontSize: 20,
fontWeight: FontWeight.bold,
),
),
),
),
],
),
],
);
}).toList(),
),</code></pre><p></p>
Inside the Card widget we place a row of items. In the first row we keep the amount. To add a dollar sign before the amount we have to use <a href="https://dart.dev/codelabs/dart-cheatsheet">string interpolation</a>.
    <p></p>
We'll learn it in a separate segment.
<h2>Can we place Column inside Row widget in Flutter?</h2>
Yes, we can do. Furthermore, we can design that as we wish. Next, our challenge is to place the title and time one after another in a Column.
<p></p>
Besides, we need to place that Column widget inside the Row.
<p></p>
So it looks like this:
<p></p>
<img class="size-full wp-image-801" src="https://sanjibsinha.com/wp-content/uploads/2021/04/expense-three.jpg" alt="Column widget inside Row in Flutter" width="392" height="614" /><p></p> Column widget inside Row in Flutter<p></p>
<p></p>
As the image shows, we've done that successfully.
<p></p>
How we've done it?
<p></p>
We don't have to rewrite the full code. Instead, we can tweak the main Column section.<p></p>
<pre><code>Column(
children: expenseList.map((e) {
return Column(
crossAxisAlignment: CrossAxisAlignment.start,
children: [
Card(
elevation: 10,
child: Row(
children: [
Container(
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
decoration: BoxDecoration(
color: Colors.yellow[100],
border: Border.all(
color: Colors.red,
width: 5,
),
),
child: Card(
child: Text(
'\$${e.amount}',
style: TextStyle(
fontSize: 20,
fontWeight: FontWeight.bold,
),
),
),
),
Column(
children: [
Container(
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
decoration: BoxDecoration(
color: Colors.yellow[100],
border: Border.all(
color: Colors.red,
width: 5,
),
),
child: Card(
child: Text(
'\$${e.amount}',
style: TextStyle(
fontSize: 20,
fontWeight: FontWeight.bold,
),
),
),
),
Container(
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
decoration: BoxDecoration(
color: Colors.yellow[100],
border: Border.all(
color: Colors.red,
width: 5,
),
),
child: Card(
child: Text(
'\$${e.amount}',
style: TextStyle(
fontSize: 20,
fontWeight: FontWeight.bold,
),
),
),
),
],
),
],
),
),
],
);
}).toList(),
),</code></pre>
<p></p>But, we're unhappy about one thing. We could have formatted date in a better way. Although formatting date in flutter is easy.
<p></p>
However, we need to add a package in the flutter dependency.<p></p>
<pre><code>dependencies:
flutter:
sdk: flutter
intl: ^0.17.0

import 'package:intl/intl.dart';</code></pre><p></p>
Once we've added the "intl" package, we can import it as mentioned above.
<h2>How do I change the date format in Flutter?</h2>
Of course, changing the <a href="https://api.flutter.dev/flutter/intl/DateFormat-class.html">date format</a> plays a crucial role. In addition, the look of the app is important.
<p></p>
So the next image will show you how we had done that.
<p></p>
<p></p><img class="size-full wp-image-803" src="https://sanjibsinha.com/wp-content/uploads/2021/04/expense-four.jpg" alt="How do I change the date format in Flutter" width="388" height="612" /><p></p> How do I change the date format in Flutter<p></p>
<p></p>
Now, it looks much better than before.
<p></p>
Additionally, we've reorganized our code. One method will display the amount. And the other will display the title and date.
<p></p>
To display the amount, we've used this Container method:<p></p>
<pre><code>Container displayAmount(ExpenseList e) {
return Container(
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
decoration: BoxDecoration(
color: Colors.yellow[100],
border: Border.all(
color: Colors.red,
width: 5,
),
),
child: Card(
child: Text(
'\$${e.amount}',
style: TextStyle(
fontSize: 20,
fontWeight: FontWeight.bold,
),
),
),
);
}
}</code></pre><p></p>
The code is quite explicit to show we've used various properties of the Container widget.
<p></p>
On the other hand, we've used another Column widget to display the title and date.<p></p>
<pre><code>Column displayTaskAndDate(ExpenseList e) {
return Column(
crossAxisAlignment: CrossAxisAlignment.start,
children: [
Container(
margin: EdgeInsets.all(5),
padding: EdgeInsets.all(8),
decoration: BoxDecoration(
color: Colors.blue[100],
border: Border.all(
color: Colors.red,
width: 5,
),
),
child: Card(
child: Text(
'${e.title}',
style: TextStyle(
fontSize: 25,
fontWeight: FontWeight.bold,
backgroundColor: Colors.blue[100]),
),
),
),
Container(
margin: EdgeInsets.all(2),
padding: EdgeInsets.all(5),
child: Card(
child: Text(
DateFormat('yyyy/MM/dd').format(e.date),
style: TextStyle(
fontSize: 20,
fontWeight: FontWeight.normal,
fontStyle: FontStyle.italic,
),
),
),
),
],
);
}</code></pre><p></p>
You can understand how we've designed this Column widget. However, one line is very important to grasp the conception of date formatting.<p></p>
<pre><code>DateFormat('yyyy/MM/dd').format(e.date),</code></pre>
<p></p>Moreover, there are other ways of using this <a href="https://api.flutter.dev/flutter/intl/DateFormat-class.html">date format</a> package also.
<p></p>
Now, we can use these two methods inside the build method:<p></p>
<pre><code>@override
Widget build(BuildContext context) {
return Center(
child: ListView(
padding: EdgeInsets.all(8),
children: [
Container(
child: Card(
child: Text('Chart'),
elevation: 10,
),
),
Container(
child: Column(
children: expenseList.map((e) {
return Column(
crossAxisAlignment: CrossAxisAlignment.start,
children: [
Card(
elevation: 10,
child: Row(
children: [
displayAmount(e),
displayTaskAndDate(e),
],
),
),
],
);
}).toList(),
),
),
],
),
);
}</code></pre><p></p>
For the complete project code please visit the <a href="https://github.com/sanjibsinha/expense_list">GitHub repository</a>.<p></p>
<h2>What Next?</h2>
<a href="https://leanpub.com/u/sanjibsinha">Books at Leanpub</a><p></p>
<a href="https://www.apress.com/gp/search?query=sanjib+sinha">Books in Apress</a><p></p>
<a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">My books at Amazon</a><p></p>
<a href="https://github.com/sanjibsinha">GitHub repository</a><p></p>
<a href="https://mesanjib.wordpress.com/">Technical blog</a><p></p>
<a href="https://twitter.com/sanjibsinha">Twitter</a><p></p>

<?php require_once "footer.php" ?>