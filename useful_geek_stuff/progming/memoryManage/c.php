<h1>Memory Management</h1>

<p>
	Simple bit of code showing how to use the heap:
</p>

<p class="code">
	#include &lt;stdlib.h&gt;<br />
	#include &lt;stdio.h&gt;<br />
	<br />
	int main() { <br />
		&nbsp;&nbsp;&nbsp;&nbsp;int *a;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;a = malloc(sizeof(int));<br />
		&nbsp;&nbsp;&nbsp;&nbsp;*a = 50; <br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf( "%d\n", *a );<br />
		&nbsp;&nbsp;&nbsp;&nbsp;free(a); <br />
		&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
	}
</p>

<p>
	<span class="code">sizeof(int)</span> allows use to reserve enough memory to fit an integer in.  We could use <span class="code">sizeof(double)</span> to create enough room for a double.
</p>