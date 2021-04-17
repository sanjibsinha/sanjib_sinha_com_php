<?php require_once "header.php" ?>

Adding a list and showing the list is quite simple in Flutter. We need to follow a guideline, yet that is not too difficult.

We're going to learn how we can add a list. We'll also learn how to show that list on virtual device.

Suppose, we're creating an expense list. However, to do that, we need a class like this:
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
Moreover, to organize our code we keep this class in model folder.
<h2>How do I add a list in Flutter?</h2>
Furthermore, now we need a state less widget. And in that widget let's add it manually at first.
<pre><code>class ExpenseFirstPage extends StatelessWidget {
ExpenseFirstPage({Key key}) : super(key: key);

final List&lt;ExpenseList&gt; expenseList = [
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
];

...

// code is incomplete for brevity</code></pre>
As you can see, we've added two expense list using the class.

Of course, flutter allows us to do that.

And it looks like this:

<p></p>
<img class="size-full wp-image-793" src="https://sanjibsinha.com/wp-content/uploads/2021/04/chart-flutter-one.jpg" alt="Adding a list in flutter" width="366" height="603" /> <p></p>Adding a list in flutter<p></p>

We've already added a list, and in addition to that, we show it on the screen.
<h2>How do I show a list in flutter?</h2>
We can show the list many ways. It depends on how you'd like to design your flutter app.

Additionally, we can change our build method in flutter.

We've seen the first instance on screen. Even though it was for adding purpose, we can show the list as well.

In that case, the build method looks like this:
<pre><code>@override
Widget build(BuildContext context) {
return Center(
child: ListView(
padding: EdgeInsets.all(8),
children: [
Container(
width: double.infinity,
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
color: Theme.of(context).accentColor,
child: Card(
child: Text(
'Chart',
style: Theme.of(context).textTheme.headline5,
),
elevation: 10,
),
),
Column(
crossAxisAlignment: CrossAxisAlignment.center,
children: expenseList.map((expense) {
return Row(
mainAxisAlignment: MainAxisAlignment.end,
children: [
Icon(Icons.insert_emoticon_rounded),
Card(
child: Text(
'Item: ${expense.title}',
style: Theme.of(context).textTheme.headline5,
),
elevation: 10,
),
Card(
child: Text(
'Expense: ${expense.amount.toString()}',
style: Theme.of(context).textTheme.headline6,
),
elevation: 10,
),
],
);
}).toList(),
),
],
),
);
}</code></pre>
Now, we can change the design the list a little bit. So it looks like this.
<p></p>
<img class="size-full wp-image-794" src="https://sanjibsinha.com/wp-content/uploads/2021/04/chart-flutter-two.jpg" alt="Showing a list in flutter" width="376" height="606" /> <p></p>Showing a list in flutter<p></p>
<p></p>
We've used a Column widget inside the Row. As a result, the title shows above the time.

To do that we've tweaked our previous code.

So, it looks like this:
<pre><code>@override
Widget build(BuildContext context) {
return Center(
child: ListView(
padding: EdgeInsets.all(8),
children: [
Container(
width: double.infinity,
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
color: Theme.of(context).accentColor,
child: Card(
child: Text(
'Chart',
style: Theme.of(context).textTheme.headline5,
),
elevation: 10,
),
),
Column(
crossAxisAlignment: CrossAxisAlignment.center,
children: expenseList.map((expense) {
return Container(
margin: EdgeInsets.all(5),
padding: EdgeInsets.all(5),
child: Row(
mainAxisAlignment: MainAxisAlignment.end,
children: [
Icon(Icons.insert_emoticon_rounded),
Column(
children: [
Card(
child: Text(
'Item: ${expense.title}',
style: Theme.of(context).textTheme.headline5,
),
elevation: 10,
),
SizedBox(
height: 10,
),
Card(
child: Text('${expense.date.toString()}',
style: TextStyle(
fontSize: 15.0,
fontWeight: FontWeight.bold,
)),
elevation: 10,
),
],
),
Card(
child: Text(
'${expense.amount.toString()}',
style: Theme.of(context).textTheme.headline6,
),
elevation: 10,
),
],
),
);
}).toList(),
),
],
),
);
}</code></pre>
Still we're not happy with the design.

Why?

Because we want something more. On the right hand side, we want a "delete" button.

What can we do?

First of all, we need to make a room for that.
<h2>How to delete a list in Flutter?</h2>
We'll add a button later. But before that we need to show it first.

Just like the following image.
<p></p>
<img class="size-full wp-image-795" src="https://sanjibsinha.com/wp-content/uploads/2021/04/chart-flutter-three.jpg" alt="How to delete a list in flutter?" width="373" height="629" /> <p></p>How to delete a list in flutter?<p></p>

We're almost there.

However, we need to change the design again.

So we change the build method. And it looks bigger than the previous one.
<pre><code>@override
Widget build(BuildContext context) {
return Center(
child: ListView(
padding: EdgeInsets.all(8),
children: [
Container(
width: double.infinity,
margin: EdgeInsets.all(8),
padding: EdgeInsets.all(8),
color: Theme.of(context).accentColor,
child: Card(
child: Text(
'Chart',
style: Theme.of(context).textTheme.headline5,
),
elevation: 10,
),
),
Column(
crossAxisAlignment: CrossAxisAlignment.center,
children: expenseList.map((expense) {
return Container(
margin: EdgeInsets.all(5),
padding: EdgeInsets.all(5),
child: Row(
mainAxisAlignment: MainAxisAlignment.end,
children: [
Icon(Icons.insert_emoticon_rounded),
Column(
children: [
Card(
child: Text(
'${expense.title}',
style: Theme.of(context).textTheme.headline5,
),
elevation: 10,
),
SizedBox(
height: 10,
),
Card(
child: Text('${expense.date.toString()}',
style: TextStyle(
fontSize: 12.0,
fontWeight: FontWeight.bold,
)),
elevation: 10,
),
],
),
Card(
child: Text(
'${expense.amount.toString()}',
style: Theme.of(context).textTheme.headline6,
),
elevation: 10,
),
Expanded(
child: Text(
' -&gt; DELETE',
softWrap: false,
overflow: TextOverflow.fade,
style: Theme.of(context).textTheme.headline6,
),
)
],
),
);
}).toList(),
),
],
),
);
}</code></pre>
We'll build the full app. But we cannot do that in one single post.

So take a look at this 
<a href="https://github.com/sanjibsinha/expense_list">Expense List GitHub Repository.</a>

Keep in touch. More flutter articles on the way.
<h2>What Next?</h2>
<a href="https://leanpub.com/u/sanjibsinha">Books at Leanpub</a><p></p>
<p></p><a href="https://www.apress.com/gp/search?query=sanjib+sinha">Books in Apress</a>
<p></p><a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">My books at Amazon</a>
<p></p><a href="https://github.com/sanjibsinha">GitHub repository</a>
<p></p><a href="https://mesanjib.wordpress.com/">Technical blog</a>
<p></p><a href="https://twitter.com/sanjibsinha">Twitter</a>

<?php require_once "footer.php" ?>