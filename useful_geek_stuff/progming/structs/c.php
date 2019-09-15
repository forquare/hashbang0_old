<h1>Structs</h1>

<p>
	Structs can be used to store groups of data/variables.  Consider the following code:
</p>

<p class="code">
	//This create a new type called EyeColour<br />
	typedef enum {BLUE, GREEN, BROWN} EyeColour;<br />
	<br />
	struct Person{<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *firstName;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *familyName;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *address;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *phone;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;EyeColour eyeColour;<br />
	}
</p>

<p>
	This allows data about a person to be stored together.  It can be accessed  and used like this:
</p>

<p class="code">
	//Declare new Person variable labeled "me"<br />
	struct Person me;<br />
	<br />
	//Set properties:<br />
	me.firstName = "Ben";<br />
	me.familyName = "Lavery";<br />
	me.address = "55 Hash Bang Lane, Aberystwyth, Wales";<br />
	me.phone = "07774615151";<br />
	me.eyeColour = GREEN;<br />
	<br />
	<br />
	//Get me.name to answer question:<br />
	char *answer;<br />
	printf("What is your name?");<br />
	answer = me.firstName;
</p>

<p>
	You can also typedef structs, to make them types:
</p>

<p class="code">
	typedef struct Person_{<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *firstName;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *familyName;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *address;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;char *phone;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;EyeColour eyeColour;<br />
	} Person;
</p>

<p>
	This creates a new type called "Person".
</p>