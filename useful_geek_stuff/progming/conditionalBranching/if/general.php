<h1>Ifs</h1>

<p>
	If statements are tricky...I'm sitting here wondering how on earth to describe them...They allow you to say "If the user does this, then carry out these commands", or "If this variable is this, then do this".  The basic If statement is below:
</p>

<p class="code">
	if(this is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
}
</p>

<p>
	Now, this look an awful lot like a loop...But of course, this doesn't loop, just evaluates what's in the brackets and then executes the commands.
</p>

<p>
	Alright, so what if you want your program to do something if the first <em>If</em> isn't true?  What about "If the dinner is ready then serve, otherwise leave it another five minutes"...Never fear, we have an "else"!
</p>

<p class="code">
	if(this is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}<br />
	else{<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this bit<br />
	}<br />
</p>

<p>
	There we go, easy as pie (of the apple variety).  But wait...There's more!<br />
	There is one more kind of iffyness, the elseif.  This is used when you want to do something if the first If isn't true, but you want to do it if something else is true...
</p>

<p class="code">
	if(this is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}<br />
	elseif(this bit is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this instead of the first If bit<br />
	}<br />
	else{<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this bit<br />
	}<br />
</p>

<p>
	And yes, you can stack these up as much as you want...But you may like to have a look at the next page before stacking them up too far...
</p>