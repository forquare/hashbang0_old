<h1>Arrays</h1>

<p>
	Think of arrays as a pigeon box, with lots of little boxes all in a line...Each box is a variable, but they are all neatly placed into a collection.  All the variables are of the same data type too.  For example, in the C language, you have a collection of characters to make up a string.  Below is an example of how an array in C might look:
</p>

<table>
	<tr>
		<td>'H'</td>
		<td>'e'</td>
		<td>'l'</td>
		<td>'l'</td>
		<td>'o'</td>
	</tr>
</table>

<p>
	You can see that I've used the single quotes to denote that they are characters.<br />
	Typically, arrays are created using square brackets.  Usually, you start off like any other variable declaration, stating the data type and the variable name; then you state that it's an array, or a collection of that data type.  Something like this:
</p>

<p>
	<span class="code">char myString[20]</span>
</p>

<p>
	The above snippet creates a character variable with the handle (name) "myString", the total number of little boxes in that array  is 20.  In computing, we always refer to the first place of an array as 0 (zero), don't ask me why, I can't remember, we just do.  Referring back to a box in our array, we have to call the name, and then put the number of the box in the square brackets.  I will use the first array at the top, the one that says "Hello", for an example:
</p>

<p>
	<span class="code">firstExample[2]</span>
</p>

<p>
	The above example would give us the first 'l' in "Hello".  I've included a table below to show you how to count the little boxes in an array:
</p>

<table>
	<tr>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
		<td>10</td>
		<td>11</td>
		<td>12</td>
	</tr>
</table>

<p>
	Something to quickly note about arrays: They never change length.  If you need an array to be bigger, you must create a new one then plop all the stuff from the first array into the new one.	
</p>