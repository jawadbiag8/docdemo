
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Process</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/process">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/process/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                        <div class="sc-jcVebW hrCIoP">
    <div>
        <p>Autosphere test library for running processes.</p>
        <p>This library utilizes Python's <a href="http://docs.python.org/library/subprocess.html">subprocess</a> module and its <a href="http://docs.python.org/library/subprocess.html#popen-constructor">Popen</a> class.</p>
        <p>The library has following main usages:</p>
        <ul>
            <li>Running processes in system and waiting for their completion using <a href="#Run%20Process" class="name">Run Process</a> keyword.</li>
            <li>Starting processes on background using <a href="#Start%20Process" class="name">Start Process</a>.</li>
            <li>Waiting started process to complete using <a href="#Wait%20For%20Process" class="name">Wait For
                    Process</a> or stopping them with <a href="#Terminate%20Process" class="name">Terminate Process</a> or <a href="#Terminate%20All%20Processes" class="name">Terminate All Processes</a>.</li>
        </ul>
        <h3 id="Table of contents">Table of contents</h3>
        <ul>
            <li><a href="#Specifying%20command%20and%20arguments" class="name">Specifying command and arguments</a></li>
            <li><a href="#Process%20configuration" class="name">Process configuration</a></li>
            <li><a href="#Active%20process" class="name">Active process</a></li>
            <li><a href="#Result%20object" class="name">Result object</a></li>
            <li><a href="#Boolean%20arguments" class="name">Boolean arguments</a></li>
            <li><a href="#Example" class="name">Example</a></li>
            <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
            <li><a href="#Keywords" class="name">Keywords</a></li>
        </ul>
        <h2 id="Specifying command and arguments">Specifying command and arguments</h2>
        <p>Both <a href="#Run%20Process" class="name">Run Process</a> and <a href="#Start%20Process" class="name">Start
                Process</a> accept the command to execute and all arguments passed to the command as separate arguments. This makes usage convenient and also allows these keywords to automatically escape possible spaces and other special characters in
            commands and arguments. Notice that if a command accepts options that themselves accept values, these options and their values must be given as separate arguments.</p>
        <p>When <a href="#Running%20processes%20in%20shell" class="name">running processes in shell</a>, it is also possible to give the whole command to execute as a single string. The command can then contain multiple commands to be run together. When
            using this approach, the caller is responsible on escaping.</p>
        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>${tools}${/}prog.py</td>
                    <td>argument</td>
                    <td>second arg with spaces</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>java</td>
                    <td>-jar</td>
                    <td>${jars}${/}example.jar</td>
                    <td>--option</td>
                    <td>value</td>
                </tr>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>prog.py "one arg" &amp;&amp; tool.sh</td>
                    <td>shell=yes</td>
                    <td>cwd=${tools}</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <p>Possible non-string arguments are converted to strings automatically.</p>
        <h2 id="Process configuration">Process configuration</h2>
        <p><a href="#Run%20Process" class="name">Run Process</a> and <a href="#Start%20Process" class="name">Start
                Process</a> keywords can be configured using optional <code>**configuration</code> keyword arguments. Configuration arguments must be given after other arguments passed to these keywords and must use syntax like <code>name=value</code>.
            Available configuration arguments are listed below and discussed further in sections afterwards.</p>
        <table border="1">
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Explanation</th>
                </tr>
                <tr>
                    <td>shell</td>
                    <td>Specifies whether to run the command in shell or not.</td>
                </tr>
                <tr>
                    <td>cwd</td>
                    <td>Specifies the working directory.</td>
                </tr>
                <tr>
                    <td>env</td>
                    <td>Specifies environment variables given to the process.</td>
                </tr>
                <tr>
                    <td>env:&lt;name&gt;</td>
                    <td>Overrides the named environment variable(s) only.</td>
                </tr>
                <tr>
                    <td>stdout</td>
                    <td>Path of a file where to write standard output.</td>
                </tr>
                <tr>
                    <td>stderr</td>
                    <td>Path of a file where to write standard error.</td>
                </tr>
                <tr>
                    <td>output_encoding</td>
                    <td>Encoding to use when reading command outputs.</td>
                </tr>
                <tr>
                    <td>alias</td>
                    <td>Alias given to the process.</td>
                </tr>
            </tbody>
        </table>
        <p>Note that because <code>**configuration</code> is passed using <code>name=value</code> syntax, possible equal signs in other arguments passed to <a href="#Run%20Process" class="name">Run Process</a> and <a href="#Start%20Process" class="name">Start Process</a>            must be escaped with a backslash like
            <code>name\=value</code>. See <a href="#Run%20Process" class="name">Run Process</a> for an example.</p>
        <h3 id="Running processes in shell">Running processes in shell</h3>
        <p>The <code>shell</code> argument specifies whether to run the process in a shell or not. By default shell is not used, which means that shell specific commands, like <code>copy</code> and <code>dir</code> on Windows, are not available. You can,
            however, run shell scripts and batch files without using a shell.</p>
        <p>Giving the <code>shell</code> argument any non-false value, such as <code>shell=True</code>, changes the program to be executed in a shell. It allows using the shell capabilities, but can also make the process invocation operating system dependent.
            Having a shell between the actually started process and this library can also interfere communication with the process such as stopping it and reading its outputs. Because of these problems, it is recommended to use the shell only when absolutely
            necessary.</p>
        <p>When using a shell it is possible to give the whole command to execute as a single string. See <a href="#Specifying%20command%20and%20arguments" class="name">Specifying command and arguments</a> section for examples and more details in general.</p>
        <h3 id="Current working directory">Current working directory</h3>
        <p>By default the child process will be executed in the same directory as the parent process, the process running tests, is executed. This can be changed by giving an alternative location using the <code>cwd</code> argument. Forward slashes in the
            given path are automatically converted to backslashes on Windows.</p>
        <p><a href="#Standard%20output%20and%20error%20streams" class="name">Standard output and error streams</a>, when redirected to files, are also relative to the current working directory possibly set using the
            <code>cwd</code> argument.</p>
        <p>Example:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>prog.exe</td>
                    <td>cwd=${ROOT}/directory</td>
                    <td>stdout=stdout.txt</td>
                </tr>
            </tbody>
        </table>
        <h3 id="Environment variables">Environment variables</h3>
        <p>By default the child process will get a copy of the parent process's environment variables. The
            <code>env</code> argument can be used to give the child a custom environment as a Python dictionary. If there is a need to specify only certain environment variable, it is possible to use the
            <code>env:&lt;name&gt;=&lt;value&gt;</code> format to set or override only that named variables. It is also possible to use these two approaches together.</p>
        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                    <td>env=${environ}</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                    <td>env:http_proxy=10.144.1.10:8080</td>
                    <td>env:PATH=%{PATH}${:}${PROGDIR}</td>
                </tr>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                    <td>env=${environ}</td>
                    <td>env:EXTRA=value</td>
                </tr>
            </tbody>
        </table>
        <h3 id="Standard output and error streams">Standard output and error streams</h3>
        <p>By default processes are run so that their standard output and standard error streams are kept in the memory. This works fine normally, but if there is a lot of output, the output buffers may get full and the program can hang. Additionally on
            Jython, everything written to these in-memory buffers can be lost if the process is terminated.</p>
        <p>To avoid the above mentioned problems, it is possible to use <code>stdout</code> and <code>stderr</code> arguments to specify files on the file system where to redirect the outputs. This can also be useful if other processes or other keywords
            need to read or manipulate the outputs somehow.</p>
        <p>Given <code>stdout</code> and <code>stderr</code> paths are relative to the <a href="#Current%20working%20directory" class="name">current working directory</a>. Forward slashes in the given paths are automatically converted to backslashes on Windows.</p>
        <p>As a special feature, it is possible to redirect the standard error to the standard output by using
            <code>stderr=STDOUT</code>.</p>
        <p>Regardless are outputs redirected to files or not, they are accessible through the <a href="#Result%20object" class="name">result object</a> returned when the process ends. Commands are expected to write outputs using the console encoding, but
            <a href="#Output%20encoding" class="name">output encoding</a> can be configured using the <code>output_encoding</code> argument if needed.</p>
        <p>If you are not interested in outputs at all, you can explicitly ignore them by using a special value
            <code>DEVNULL</code> both with <code>stdout</code> and <code>stderr</code>. For example,
            <code>stdout=DEVNULL</code> is the same as redirecting output on console with <code>&gt; /dev/null</code> on UNIX-like operating systems or <code>&gt; NUL</code> on Windows. This way the process will not hang even if there would be a lot of
            output, but naturally output is not available after execution either.</p>

        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td>${result} =</td>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                    <td>stdout=${TEMPDIR}/stdout.txt</td>
                    <td>stderr=${TEMPDIR}/stderr.txt</td>
                </tr>
                <tr>
                    <td><span class="name">Log Many</span></td>
                    <td>stdout: ${result.stdout}</td>
                    <td>stderr: ${result.stderr}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>${result} =</td>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                    <td>stderr=STDOUT</td>
                    <td></td>
                </tr>
                <tr>
                    <td><span class="name">Log</span></td>
                    <td>all output: ${result.stdout}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>${result} =</td>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                    <td>stdout=DEVNULL</td>
                    <td>stderr=DEVNULL</td>
                </tr>
            </tbody>
        </table>
        <p>Note that the created output files are not automatically removed after the test run. The user is responsible to remove them if needed.</p>
        <h3 id="Output encoding">Output encoding</h3>
        <p>Executed commands are, by default, expected to write outputs to the <a href="#Standard%20output%20and%20error%20streams" class="name">standard output and error streams</a> using the encoding used by the system console. If the command uses some
            other encoding, that can be configured using the <code>output_encoding</code> argument. This is especially useful on Windows where the console uses a different encoding than rest of the system, and many commands use the general system encoding
            instead of the console encoding.</p>
        <p>The value used with the <code>output_encoding</code> argument must be a valid encoding and must match the encoding actually used by the command. As a convenience, it is possible to use strings <code>CONSOLE</code> and <code>SYSTEM</code> to specify
            that the console or system encoding is used, respectively. If produced outputs use different encoding then configured, values got through the <a href="#Result%20object" class="name">result object</a> will be invalid.</p>
        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Start%20Process" class="name">Start Process</a></td>
                    <td>program</td>
                    <td>output_encoding=UTF-8</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                    <td>stdout=${path}</td>
                    <td>output_encoding=SYSTEM</td>
                </tr>
            </tbody>
        </table>

        <h3 id="Alias">Alias</h3>
        <p>A custom name given to the process that can be used when selecting the <a href="#Active%20process" class="name">active process</a>.</p>
        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Start%20Process" class="name">Start Process</a></td>
                    <td>program</td>
                    <td>alias=example</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>python</td>
                    <td>-c</td>
                    <td>print 'hello'</td>
                    <td>alias=hello</td>
                </tr>
            </tbody>
        </table>
        <h2 id="Active process">Active process</h2>
        <p>The test library keeps record which of the started processes is currently active. By default it is latest process started with <a href="#Start%20Process" class="name">Start Process</a>, but <a href="#Switch%20Process" class="name">Switch Process</a>            can be used to select a different one. Using <a href="#Run%20Process" class="name">Run Process</a> does not affect the active process.</p>
        <p>The keywords that operate on started processes will use the active process by default, but it is possible to explicitly select a different process using the <code>handle</code> argument. The handle can be the identifier returned by <a href="#Start%20Process"
                class="name">Start Process</a> or an <code>alias</code> explicitly given to <a href="#Start%20Process" class="name">Start Process</a> or <a href="#Run%20Process" class="name">Run Process</a>.</p>
        <h2 id="Result object">Result object</h2>
        <p><a href="#Run%20Process" class="name">Run Process</a>, <a href="#Wait%20For%20Process" class="name">Wait For
                Process</a> and <a href="#Terminate%20Process" class="name">Terminate Process</a> keywords return a result object that contains information about the process execution as its attributes. The same result object, or some of its attributes,
            can also be get using <a href="#Get%20Process%20Result" class="name">Get
                Process Result</a> keyword. Attributes available in the object are documented in the table below.</p>
        <table border="1">
            <tbody>
                <tr>
                    <th>Attribute</th>
                    <th>Explanation</th>
                </tr>
                <tr>
                    <td>rc</td>
                    <td>Return code of the process as an integer.</td>
                </tr>
                <tr>
                    <td>stdout</td>
                    <td>Contents of the standard output stream.</td>
                </tr>
                <tr>
                    <td>stderr</td>
                    <td>Contents of the standard error stream.</td>
                </tr>
                <tr>
                    <td>stdout_path</td>
                    <td>Path where stdout was redirected or <code>None</code> if not redirected.</td>
                </tr>
                <tr>
                    <td>stderr_path</td>
                    <td>Path where stderr was redirected or <code>None</code> if not redirected.</td>
                </tr>
            </tbody>
        </table>
        <p>Example:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td>${result} =</td>
                    <td><a href="#Run%20Process" class="name">Run Process</a></td>
                    <td>program</td>
                </tr>
                <tr>
                    <td><span class="name">Should Be Equal As Integers</span></td>
                    <td>${result.rc}</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td><span class="name">Should Match</span></td>
                    <td>${result.stdout}</td>
                    <td>Some t?xt*</td>
                </tr>
                <tr>
                    <td><span class="name">Should Be Empty</span></td>
                    <td>${result.stderr}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>${stdout} =</td>
                    <td><span class="name">Get File</span></td>
                    <td>${result.stdout_path}</td>
                </tr>
                <tr>
                    <td><span class="name">Should Be Equal</span></td>
                    <td>${stdout}</td>
                    <td>${result.stdout}</td>
                </tr>
                <tr>
                    <td><span class="name">File Should Be Empty</span></td>
                    <td>${result.stderr_path}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <h2 id="Boolean arguments">Boolean arguments</h2>
        <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
            <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Other strings are considered true regardless their value, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.</p>
        <p>True examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=True</td>
                    <td># Strings are generally true.</td>
                </tr>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=yes</td>
                    <td># Same as the above.</td>
                </tr>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=${TRUE}</td>
                    <td># Python <code>True</code> is true.</td>
                </tr>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=${42}</td>
                    <td># Numbers other than 0 are true.</td>
                </tr>
            </tbody>
        </table>
        <p>False examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=False</td>
                    <td># String <code>false</code> is false.</td>
                </tr>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=no</td>
                    <td># Also string <code>no</code> is false.</td>
                </tr>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=${EMPTY}</td>
                    <td># Empty string is false.</td>
                </tr>
                <tr>
                    <td><a href="#Terminate%20Process" class="name">Terminate Process</a></td>
                    <td>kill=${FALSE}</td>
                    <td># Python <code>False</code> is false.</td>
                </tr>
            </tbody>
        </table>
        <h2 id="Example">Example</h2>
        <pre><b>***</b> Settings <b>***</b>
    Library           Process
    Suite Teardown    <a href="#Terminate%20All%20Processes" class="name">Terminate All Processes</a>    kill=True
    
    <b>***</b> Test Cases <b>***</b>
    Example
        <a href="#Start%20Process" class="name">Start Process</a>    program    arg1    arg2    alias=First
        ${handle} =    <a href="#Start%20Process" class="name">Start Process</a>    command.sh arg | command2.sh    shell=True    cwd=/path
        ${result} =    <a href="#Run%20Process" class="name">Run Process</a>    ${CURDIR}/script.py
        <span class="name">Should Not Contain</span>    ${result.stdout}    FAIL
        <a href="#Terminate%20Process" class="name">Terminate Process</a>    ${handle}
        ${result} =    <a href="#Wait%20For%20Process" class="name">Wait For Process</a>    First
        <span class="name">Should Be Equal As Integers</span>    ${result.rc}    0
    </pre>
    </div>
</div>
                        </div>
                        
                    </div>
                </article>
           