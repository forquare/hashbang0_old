<h1>Switch-case</h1>

<p>
	So, your happily building your application(another word for program), and you want to put in a menu...According to the previous page, you would end up with something like this:
</p>

<p class="code">
	if(this is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}<br />
	elseif(this bit is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}<br />
	elseif(this bit is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}<br />
	elseif(this bit is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}<br />
	elseif(this bit is true){<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}<br />
	else{<br />
	&nbsp;&nbsp;&nbsp;&nbsp;Do this bit<br />
	}<br />
</p>

<p>
	Which is a lot of code, we have a better way...
</p>

<p class="code">
	switch(option){<br />
		&nbsp;&nbsp;&nbsp;&nbsp;case "if this matches option":<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break<br />
		&nbsp;&nbsp;&nbsp;&nbsp;case "if this matches option":<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break<br />
		&nbsp;&nbsp;&nbsp;&nbsp;case "if this matches option":<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break<br />
		&nbsp;&nbsp;&nbsp;&nbsp;default:<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do this<br />
	}
</p>

<p>
	Now, we have a number of things to tell you here.<br />
	The "option" in the brackets at the top doesn't have to say that, it's just an example..Put something in there, usually a variable that will be tested against each case in the statement.<br />
	We break each case part because otherwise we would run in to all of the other cases, and we don't want that (or do we?  Sometimes we do!).<br />
	The last bit, "default" is used to gracefully do something if none of the cases are executed...
</p>