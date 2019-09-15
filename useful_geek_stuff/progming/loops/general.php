<h1>Loops</h1>

<p>
	So, what happens if you want to do something over and over and over and over and over and over again?<br />
	You could copy and paste the lines of code, but thats not good programming, and besides, what happens if you want the user to define how many times something is repeated.
</p>

<p>
	There are three different types of loop: while; do...while and the for loop.  Each have their own uses, here they are in psudocode (Almost English).
</p>

<p class="code">
	while(stuff here is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do stuff here<br />
	}Go back to the top and see if it's still true
</p>

<p>
	The while loop above will always evaluate the the bit in the brackets before going through the loop, if the stuff in the brackets is false then the loop will not be executed.
</p>

<p class="code">
	do{<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do stuff here<br />
	}while(this is true)
</p>

<p>
	The  do...while loop above is very much like the while loop, the same concept is applied where if the statement in the brackets is false, the loop will not execute.  Though because the word "while" is at the bottom of the loop, the commands are all executed before the first evaluation.
</p>

<p class="code">
	for(1; 2; 3){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do stuff here<br />
	do whatever is in place three<br />
	}go back and re-evaluate
</p>

<p>
	The above loop is the typical for loop.  In the brackets there are three parts, each do something different.<br />
	1:- This statement is executed once on the first time round of the loop, it is most commonly used to set up a counter variable.<br />
	2:- This is the evaluation that will return true or false and decided if our loop will be executed.<br />
	3:- This usually increments or decrements our counter and is executed directly after our loop has finished a pass.
</p>