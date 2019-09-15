<h1>C Pointers</h1>

<p>
	The following describes pointers in C.  I have written this for myself, I have a basic understanding of what is going on, but tend to forget the syntax.  It also shows how pointers are used with arrays, though does assume you know the basics of arrays already.
</p>

<h2>Pointers</h2>

<p>
	Look at the following code:
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Declare a pointer<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int *p;<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Declare a normal integer and assign it to 5<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int a = 5; <br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Set the VALUE of p to the MEMORY LOCATION of a<br />
	&nbsp;&nbsp;&nbsp;&nbsp;p = &amp;a; <br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Use the VALUE of p (this is the MEMORY LOCATION of a) to print the VALUE of a<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//This is called dereferencing<br />
	&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", *p); //This should print 5<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Change the VALUE of the MEMORY LOCATION located at the VALUE of p<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Because p points to the MEMORY LOCATION of a, this statement basically does:<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//a = 2;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;*p = 2; <br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Print the VALUE of a<br />
	&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", a); //This should print 2<br />
	<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p>
	Here are some more examples, the demonstrate how pointers can be used to pass arguments into a function.  The first shows how a value can be passed (no pointers included), the second shows how a pointer can be passed, the third shows how a pointer can be passed and modified and the effect that has on the rest of the program, and the fourth proposes a solution to the situation that is shown in the third example.
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	void myPrint(int b){<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", b);  //Prints 5<br />
	}<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;int a = 5;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;myPrint(a);  //Passes VALUE of a to myPrint<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", a);  //Prints 5<br />
		<br />
	    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	void myPrint(int *b){<br />
		&nbsp;&nbsp;&nbsp;&nbsp;Prints the VALUE of the MEMORY LOCATION stored in this pointer<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", *b);  //Prints 5<br />
	}<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;int a = 5;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;myPrint(&amp;a);  Passes MEMORY LOCATION of a<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", a);  //Prints 5<br />
		<br />
	    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	void myPrint(int *b){<br />
		&nbsp;&nbsp;&nbsp;&nbsp;*b = *b + 1;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", *b);  //Prints 6<br />
	}<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;int a = 5;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;myPrint(&amp;a);<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", a);  //Prints 6<br />
		<br />
	    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	void myPrint(int *b){<br />
		&nbsp;&nbsp;&nbsp;&nbsp;int c = *b + 1;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", c);  //Prints 6<br />
	}<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;int a = 5;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;myPrint(&amp;a);<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", a);  //Prints 5<br />
		<br />
	    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<h2>Arrays</h2>

<p>
	In C, arrays are arranged into memory in such a way that each value comes directly after another.  For example:
</p>

<p>
	Say you had an array with a length of 10, and the memory started at address 3210.<br />
	The first element in the array (array[0]) would start at address 3210.
	<br />array[1] would be located at address 3211<br />
	array[2] would be found at 3212<br />
	And so on until array[9] (the last element in the array) was found at address 3219
</p>

<p>
	Thanks to this flexibility, you can use pointers to reference elements relative to a given element.
</p>

<p>
	Look at the following code:
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Declare an array, label it a and give it a length of 10 (values 0-9)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int a[10];<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Set the VALUE of MEMORY LOCATION a to 2<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Make a[0] equal 2<br />
	&nbsp;&nbsp;&nbsp;&nbsp;*a = 2;<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Set the VALUE of MEMORY LOCATION a+1 to 5<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Make a[1] equal 5<br />
	&nbsp;&nbsp;&nbsp;&nbsp;*(a+1) = 5;<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Set the VALUE of MEMORY LOCATION a+5 to 10<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Make a[5] equal 10<br />
	&nbsp;&nbsp;&nbsp;&nbsp;*(a+5) = 10;<br />
	<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Declare a pointer<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int *p;<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Set the VALUE of p to the MEMORY LOCATION of a[1] (which is the same as a+1)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;p = &amp;a[1];<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Use the VALUE of p to print the VALUE of a[1] (because of what we just did above)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", *p);	//Should print 5<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//Use the VALUE of p-1 (the VALUE of p which is a MEMORY LOCATION, less 1)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;//to print the VALUE of a[0] (remember what we did above)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", *(p-1)); //Should print 2<br />
	<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p>
	The way we used <span class="code">*(a+1)</span> and <span class="code">*(p-1)</span> shows how you can reference an element in an array in relation to another element, and that's all thanks to pointers!
</p>

<h2>Walking an array</h2>

<p>
	Here is some code:
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int a[10] = {1,2,3,4,5,6,7,8,9,10};<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int i = 0;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;for(i; i &lt; 10; i++){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", *(a + i));<br />
	&nbsp;&nbsp;&nbsp;&nbsp;}<br />
	<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p>
	The above code is very simple, it just sets an array of size 10, and fills element with a number between 1 and 10 (a[0] equals 1, a[9] equals 10).  If we compile and run the code, we get these results:
</p>
	
<p class="code">
	$ ./Walking<br />
	1<br />
	2<br />
	3<br />
	4<br />
	5<br />
	6<br />
	7<br />
	8<br />
	9<br />
	10<br />
</p>

<p>
	Now look at this code:
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int a[10] = {1,2,3,4,5,6,7,8,9,10};<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int i = 0;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;for(i; i &lt; 10; i++){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", (a + i));<br />
	&nbsp;&nbsp;&nbsp;&nbsp;}<br />
	<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p>
	The only difference to what we did before was that we deleted the asterisk (*) in the printf statement.  I.E. Old code did this: <span class="code">printf("%ld\n", *(a + i));</span>, new code does this: <span class="code">printf("%ld\n", (a + i));</span>.  Doing this, we can print out the VALUE of a, the VALUE of a is actually a MEMORY LOCATION, so we are printing out addresses in memory in this new version.  Here are my results:
</p>
	
<p class="code">
	$ ./Walking_addresses<br />
	1606416240<br />
	1606416244<br />
	1606416248<br />
	1606416252<br />
	1606416256<br />
	1606416260<br />
	1606416264<br />
	1606416268<br />
	1606416272<br />
	1606416276<br />
</p>

<p>
	Notice how they don't increment 'nicely' (i.e. they don't increment by 1 as in my nice example above), they are instead incremented by 4.  This is because an integer will take up 4 bytes of memory to store a number.  If I had declared an array of long integers, they would have incremented by 8 each time.
</p>

<p>
	Finally, look at these two pieces of code, and my results:
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int a[10] = {1,2,3,4,5,6,7,8,9,10};<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int i = 0;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;for(i; i &lt;= 10; i++){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", *(a + i));<br />
	&nbsp;&nbsp;&nbsp;&nbsp;}<br />
	<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p class="code">
	$ ./Walking_over_the_line<br />
	1<br />
	2<br />
	3<br />
	4<br />
	5<br />
	6<br />
	7<br />
	8<br />
	9<br />
	10<br />
	1606422610<br />
</p>

<p>
	And:
</p>

<p class="code">
	#include &lt;stdio.h&gt;<br />
	<br />
	int main (int argc, const char * argv[]) {<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int a[10] = {1,2,3,4,5,6,7,8,9,10};<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;int i = 0;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;for(i; i &lt;= 10; i++){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", (a + i));<br />
	&nbsp;&nbsp;&nbsp;&nbsp;}<br />
	<br />
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p class="code">
	$ ./Walking_addresses_over_the_line<br />
	1606416240<br />
	1606416244<br />
	1606416248<br />
	1606416252<br />
	1606416256<br />
	1606416260<br />
	1606416264<br />
	1606416268<br />
	1606416272<br />
	1606416276<br />
	1606416280<br />
</p>

<p>
	Notice how the code now prints 11 results?  See how in the first example, we get the value 10, then the value 1606422610?  This is because we went outside of the array.  We shouldn't have!  If we edited the 11th element in an array which has a size of 10, we could seriously screw things up!
</p>