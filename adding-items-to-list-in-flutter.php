<?php require_once "header.php" ?>
		
<div id="container">
    <h1>How to add and delete items in Flutter</h1>
	
	<div id="body">
    
    Adding items to a list in Flutter is not difficult. Although we need to understand one key concept.
<p></p>
The user must have an interface through which she can send the inputs to the server.
<p></p>
Either we can store the data in a database. Or, we can just display them as we keep adding them.
<p></p>
Moreover, we can also delete any item based on the unique ID.
<p></p>
Anyway, in this segment we're going to continue the expense list flutter app. And we just keep building it.
<p></p>
If you've not read the <a href="https://sanjibsinha.com/what-is-listview-flutter-how-do-i-use-listview-in-flutter/">previous two posts</a>, please go through them, so that you may have an idea what's going on.
<p></p>
Until now, we have learned how to display a list using a ListView. However, there was no question of managing state. As we've just displayed a few items.
<p></p>
And, we've added them manually. In addition to displaying them, our main focus was the design part. The frontend of Flutter.<p></p>
<h2>How do you create a dynamic list in Flutter?</h2>
<p></p>We're going to create a dynamic list, and for that, we need to maintain state.
<p></p>
Therefore, we have to convert the main thread to stateful widget. The stateless widget would only work, if we handled the state either with the provider, or the Riverpod package.
<p></p>
However, this is a small app. Hence, we can manage with the Flutter's in-built stateful widget.
<p></p>
Moreover, we're going to add items to the list dynamically. So we don't need the manually added items anymore.
<p></p>
When we open the app, it looks like this:
<p></p>
<p></p><img class="size-full wp-image-807" src="https://sanjibsinha.com/wp-content/uploads/2021/04/dynamic-list-one.jpg" alt="How to create dynamic list in flutter" width="401" height="622" /><p></p> How to create dynamic list in flutter<p></p>
<p></p>
Now, we're going to add Fruits as our title and the amount is 300.00.
<p></p>
To input the data, we need two text fields first. Next, we need a button to submit that data, so it gets added to the list.
<p></p>
At the same time, we need to add another functionality. We want to delete any item from the list as well.
<p></p>
After submitting the data the list gets updated like this:
<p></p>
<p></p><img class="size-full wp-image-809" src="https://sanjibsinha.com/wp-content/uploads/2021/04/list-two.jpg" alt="Adding items to a list in flutter" width="406" height="639" /><p></p> Adding items to a list in flutter<p></p>
<h2>How do I use ListView in Flutter?</h2><p></p>
As we can see in the above image, our app does look perfect. We can see the soft keys, as well.
<p></p>
Because, our main widget uses ListView, it doesn't break. We can scroll the app endlessly.
<p></p>
We've started coding the app just like the following:<p></p>
<pre><code>import 'package:flutter/material.dart';
import '../models/expense_list.dart';
import '../controllers/display_task_and_data.dart';
import '../controllers/display_amount.dart';

class ExpenseFirstPage extends StatefulWidget {
ExpenseFirstPage({Key key}) : super(key: key);

@override
_ExpenseFirstPageState createState() =&gt; _ExpenseFirstPageState();
}

class _ExpenseFirstPageState extends State&lt;ExpenseFirstPage&gt; {

...

the code is incomplete...</code></pre><p></p>
<p></p>Next, we need to declare the type of the List. In addition, we've created a List class in our model folder.
<p></p>
By the way, for the full code snippet, please visit my <a href="https://github.com/sanjibsinha/expense_list">GitHub repository</a>.
    <p></p>
We also need two methods - one for adding the items and another for deleting a particular item.<p></p>
<pre><code>final List&lt;ExpenseList&gt; expenseList = [];

void addTaskAndAmount(String title, double amount) {
final expense = ExpenseList(
id: DateTime.now().toString(),
title: title,
amount: amount,
date: DateTime.now(),
);
setState(() {
expenseList.add(expense);
});
}

void deleteExpenseList(String id) {
setState(() {
expenseList.removeWhere((element) =&gt; element.id == id);
});
}</code></pre>
<p></p>For adding the items to the expense list app, we pass two parameters. One is a string data type and the other is a double data type.
<p></p>
Next we need two text editing controller that flutter supplies.<p></p>
<pre><code>final titleController = TextEditingController();
final amountController = TextEditingController();</code></pre>
<p></p><h2>How do you add items to the List?</h2>
We're going to use these text editing controllers inside the Text field widget. And every action takes place inside the build method.
<p></p><pre><code>override
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
child: Card(
elevation: 10,
child: Column(
children: [
TextField(
controller: titleController,
),
TextField(
controller: amountController,
),
TextButton(
onPressed: () {
addTaskAndAmount(
titleController.text,
double.parse(amountController.text),
);
},
child: Text(
'SUBMIT',
style: TextStyle(
fontSize: 25,
fontWeight: FontWeight.bold,
),
),
),
],
),
),
),
Container(
child: Column(
children: expenseList.map((e) {
return Column(
crossAxisAlignment: CrossAxisAlignment.center,
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
TextButton(
onPressed: () {
deleteExpenseList(e.id);
},
child: Text(
'DELETE',
style: TextStyle(
fontWeight: FontWeight.bold,
fontSize: 25,
),
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
}
}</code></pre>
<p></p>Not only we're going to add items to the list, but at the same time, we're going to display them. Furthermore, we should keep a DELETE button with each item, as well.
<p></p>
Granted, we could have used Icon of the deletion. But, instead we've chosen the Text Button widget.
<p></p>
For managing state and handling the two functions, these two code snippets are important.
<p></p><pre><code>TextField(
controller: titleController,
),
TextField(
controller: amountController,
),
TextButton(
onPressed: () {
addTaskAndAmount(
titleController.text,
double.parse(amountController.text),
);
},
child: Text(
'SUBMIT',
style: TextStyle(
fontSize: 25,
fontWeight: FontWeight.bold,
),
),
),

....

TextButton(
onPressed: () {
deleteExpenseList(e.id);
},
child: Text(
'DELETE',
style: TextStyle(
fontWeight: FontWeight.bold,
fontSize: 25,
),
),
),</code></pre><p></p>
The above section is responsible for adding items to the list. So it looks like this after adding two items.
<p></p>
<p></p><img class="size-full wp-image-810" src="https://sanjibsinha.com/wp-content/uploads/2021/04/list-three.jpg" alt="Dynamically adding items to the List flutter" width="398" height="638" /><p></p> Dynamically adding items to the List flutter<p></p>
<p></p>
However, at the same time, we want to check whether our delete buttons are working as well.
<p></p>
The second part of the above code snippet points to that.
<p></p>
Therefore, if want to delete the first item, we can now easily do that.
<p></p>
<img class="size-full wp-image-811" src="https://sanjibsinha.com/wp-content/uploads/2021/04/list-four.jpg" alt="Deleting any item of the list in flutter" width="410" height="633" /><p></p> Deleting any item of the list in flutter<p></p>

We've successfully deleted the first item. Moreover, now we can again add items to the same list.
<h2>What Next?</h2>
<p></p><a href="https://leanpub.com/u/sanjibsinha">Books at Leanpub</a>
<p></p><a href="https://www.apress.com/gp/search?query=sanjib+sinha">Books in Apress</a>
<p></p><a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">My books at Amazon</a>
<p></p><a href="https://github.com/sanjibsinha">GitHub repository</a>
<p></p><a href="https://mesanjib.wordpress.com/">Technical blog</a>
<p></p><a href="https://twitter.com/sanjibsinha">Twitter</a>



<?php require_once "footer.php" ?>