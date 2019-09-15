<h1>File Access in C</h1>

<p>
	Please also see general notes on <a href="?location=useful_geek_stuff/progming/index&amp;language=general&amp;section=input(keyboard)">input from the keyboard</a> and <a href="?location=useful_geek_stuff/progming/index&amp;language=general&amp;section=print(screen)">output to the screen</a>.
</p>

<h3>A Quick Word on Format Characters</h3>

<p>
	%d, %i == int/short/long<br />
	%u == unsigned int<br />
	%f, %e, %g == float/double<br />
	%c == char<br />
	%s == char*(string)<br />
	%p == pointer
</p>

<h2>Opening Files</h2>

<p>
	Files are somewhat like books, before reading them, or writing them, you've got to open them!
</p>

<p class="code">
	FILE = *input, *output<br />
	<br />
	input = fopen("/path/of/file/to/read", "r");<br />
	output = fopen("/path/of/file/to/write", "w");
</p>

<h3>A Quick Note on File Operations</h3>

<p>
	r == Read only<br />
	w == Write only<br />
	a == Append to the end of the current file<br />
	r+ == Read and write to current file<br />
	w+ == Read and write to new file<br />
	a+ == Read and write to the current file, but append any writing to the end
</p>

<h2>Reading Files</h2>

<p>
	Using fscanf:
</p>

<p class="code">
	float f1, f2, f3;<br />
	fscanf(inpFile, "%f%f%f", &amp;f1, &amp;f2, &amp;f3);
</p>

<p>
	Using fgets:
</p>

<p class="code">
	int MAX = 50;<br />
	char line[MAX];<br />
	while( fgets(line, MAX-1, input)){<br />
		&nbsp;&nbsp;&nbsp;&nbsp;printf("The line read is:\n%s", line);<br />
	}
</p>

<h2>Writing Files</h2>

<p class="code">
	fprintf(output, "The floats were: %f, %f, and %f.", f1, f2, f3);
</p>

<h2>Closing Files</h2>

<p class="code">
	fclose(inpFile);<br />
	fclose(outFile);
</p>

