<?php require_once "header.php" ?>
	<h2>
    How do you use stateful widget flutter?
    </h2>	
    
Any flutter widget can manage its own state. It uses stateful widget. However, when it's a stateless child widget, the parent manages its state.

It's an interesting feature of Flutter. Especially when we manage state in a small application.

For a large scale application where we have to pass the state object to many screens, or pages, this process is not good.

Still, to understand Flutter state management, you should know how it works at the root level.
<h2>How do you use stateful widget Flutter?</h2>
A Flutter stateful widget is a dynamic widget. As the user taps a box, or click a button, it changes its state. And this process updates the whole widget.

A stateful widget depends either on user action, or on data change.

The State class, or object actually manages the internal state of the stateful widget. In that sense, a stateful widget also depends on the State class, which is not a widget.

In this tutorial, we will see how a stateful parent widget manages the state of a stateless child widget.

If you've not read the previous article on <a href="https://zerodotone.net/why-is-state-management-in-flutter-what-is-flutter-state/">how a widget manages its own state</a>, please read it, before we start.
<h2>How a Child Widget exports its state to its parent</h2>
How can a Child Widget export its state to its parent? Without a callback, we cannot imagine it.

So, we need to think about the callback first. Since the parent is importing the state of the child widget, we don't have to make the child widget stateful anymore. It can be stateless.

However, the parent widget should be stateful. Moreover, there should be a consistent mechanism that will help the child widget to export its state safely.

Let's see the code of the Parent Widget class.
<pre>class ParentWidget extends StatefulWidget {
@override
_ParentWidgetState createState() =&gt; _ParentWidgetState();
}

class _ParentWidgetState extends State&lt;ParentWidget&gt; {
/// Manages the _inActive state for ChildWidget.
///
bool _inActive = true;

/// Implements _manageStateForChildWidget(), the method called when the box is tapped.
///
void _manageStateForChildWidget(bool newValue) {
setState(() {
_inActive = newValue;
});
}

@override
Widget build(BuildContext context) {
return ChildWidget(
inActive: _inActive,
notifyParent: _manageStateForChildWidget,
);
}
}</pre>
The code is very straight forward. By default the state object should be inactive. So we've made it true. It also manages the state of the child widget.

As we tap a box, it will no longer remain inactive. It becomes false, from true and makes the state active. So we need the setState() method, that will implement a method, which in turn, passes a boolean parameter whose value is false.

Watch this part of the above code:
<pre>/// Manages the _inActive state for ChildWidget.
///
bool _inActive = true;

/// Implements _manageStateForChildWidget(), the method called when the box is tapped.
///
void _manageStateForChildWidget(bool newValue) {
setState(() {
_inActive = newValue;
});
}</pre>
Now, we need a callback.

For that we will use a <a href="https://api.flutter.dev/flutter/foundation/ValueChanged.html">special feature of Flutter</a>:
<pre>typedef ValueChanged&lt;T&gt; = void Function(T value);</pre>
<h2>How Child Widget implements this special property?</h2>
Let us see the code of Child Widget. That will explain the rest.
<pre>/// Extends StatelessWidget because all state is handled by its parent, ParentWidget
///
class ChildWidget extends StatelessWidget {
ChildWidget({Key key, this.inActive = true, this.notifyParent})
: super(key: key);
final bool inActive;

/// When a tap is detected, it notifies the parent.
///
final ValueChanged&lt;bool&gt; notifyParent;
void manageState() {
notifyParent(!inActive);
}

@override
Widget build(BuildContext context) {
return GestureDetector(
onTap: manageState,
child: Container(
child: Center(
child: Text(
inActive ? 'Inactive' : 'Active',
style: TextStyle(
fontSize: 25.0,
color: Colors.white,
),
),
),
width: 250.0,
height: 250.0,
decoration: BoxDecoration(color: inActive ? Colors.red : Colors.green),
),
);
}
}</pre>
Watch this part of the above code:
<pre>/// When a tap is detected, it notifies the parent.
///
final ValueChanged&lt;bool&gt; notifyParent;

void manageState() {
notifyParent(!inActive);
}</pre>
As we have said earlier, using this special feature of Flutter, we have a method, which passes a boolean value that in turn exports the state to the parent widget.

Running the program gives us this image:

<p></p><img class="size-large wp-image-1442" src="https://zerodotone.net/wp-content/uploads/2020/12/1-6-1024x482.jpg" alt="State of Child widget at inactive state" width="790" height="372" /> <p></p>State of Child widget at inactive state<p></p>

When we tap the box, it turns green.

<p></p><img class="size-large wp-image-1443" src="https://zerodotone.net/wp-content/uploads/2020/12/2-4-1024x459.jpg" alt="State of child widget changes through parent widget in Flutter" width="790" height="354" /> <p></p>State of child widget changes through parent widget in Flutter<p></p>
<h2>How the export and import of state take place</h2>
How does the child widget export state? And, at the same time, how does the parent widget import the state?

The mystery reveals itself at the child widget constructor, where two named parameters point to a piece of data and a method that through its parameter change the state of that data.

At the parent widget:
<pre>return ChildWidget( inActive: _inActive, notifyParent: _manageStateForChildWidget, );</pre>
And at the child widget, this line is important.
<pre>final ValueChanged&lt;bool&gt; notifyParent;</pre>
Here notifyParent is a method that passes a certain type of data. We have indicated which type of data should be passed - ValueChanged&lt;bool&gt;.
<h2>What next?</h2>
<p></p><a href="https://leanpub.com/u/sanjibsinha">Leanpub books</a>
<p></p><a href="https://www.apress.com/gp/search?query=sanjib+sinha">Written six books for Apress</a>
<p></p><a href="https://www.amazon.com/Sanjib-Sinha/e/B00JBVAA0Y">Amazon books</a>
<p></p><a href="https://github.com/sanjibsinha">GitHub repository</a>
<p></p><a href="https://mesanjib.wordpress.com/">Technical blog</a>
<p></p><a href="https://sanjibsinha.wordpress.com/">Blog on anything that comes to mind!</a>
<p></p><a href="https://twitter.com/sanjibsinha">Twitter</a>

<?php require_once "footer.php" ?>