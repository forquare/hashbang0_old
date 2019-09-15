<h2>SED (Simple Introduction to Substitution)</h2>

<p>
	SED is a wonderful little UNIX tool.  It stands for Stream EDitor.  And it does just that!  Edits the stream. <br />
	"Stream"!?  You might be saying. "Why would I want to use UNIX to edit the small river outside my house!?" - Fear not, a stream is simply the output of characters displayed on your screen.  <span class="code">echo "Hello, I'm a stream"</span> We can take this example.  It with 'echo' back at us "Hello, I'm a stream".  It is indeed a stream.
</p>

<p>
	So how does SED help us?  Well, I'll tell you.<br />
	With some nifty code we can tell SED to substitute a word/letter/phrase with something else.  Suppose in the example above, we really wanted to make the line say "Hello, The Wise Ones tell me I'm a stream".  We could edit the 'echo' command: <br />
	<span class="code">echo "Hello, I'm a stream"</span> <br />
	Becomes: <br />
	<span class="code">echo "Hello, The Wise Ones tell me I'm a stream"</span><br />
	Or we could use SED:<br />
	<span class="code">echo "Hello, I'm a stream" | sed s/"I'm"/"The Wise Ones tell me I'm"/</span><br />
	This writes out the line "Hello, I'm a stream", this is fairly standard, yes?  Now, the pipe "|" passes that output into SED.  
</p>

<p>
	In SED, we use a format like this: <br />
	s/"Something in the stream"/"Replace it with this"/<br />
	You could think of it as find and replace: s/"find"/"replace"/<br />
	The 's' stands for substitute.
</p>

<p>
	OK, but how is this helpful?  Well, the example above is small and doesn't really help us much at all, however, say you had a webpage that required you to change all of the references to the word "him" to the phrase "him/her".  We have to do two things, firstly, construct the command, and secondly, as part of the command, we need to escape the "/" in "him/her".  So: <br />
	<span class="code">cat myWebPage.html | sed s/him/"him\/her"/</span><br />
	You'll see the result printed in your terminal.  
</p>

<p>
	Note here, this change only gets printed to your terminal screen, nothing touched the actual file!  To do this, we can do some nifty redirection, something like:<br />
	<span class="code">cat myWebPage.html | sed s/him/"him\/her"/ &gt; myWebPage2.html</span><br />
	<span class="code">cat myWebPage2.html > myWebPage.html &amp;&amp; rm myWebPage2.html</span>
</p>