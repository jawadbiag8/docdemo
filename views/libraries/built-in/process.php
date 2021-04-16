<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Built-In</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Built-in</a></li>
                                    <li class="active">Process</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="true">
                                    <i class="material-icons">home</i> Readme
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                                    <i class="material-icons">face</i> Keywords
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">

                                <div class="sc-jJEJSO laquCT">
                                    <div class="sc-hiSbYr XqbgT">
                                        <div>
                                            <p>Autosphere test library for running processes.</p>
                                            <p>This library utilizes Python's <a href="http://docs.python.org/library/subprocess.html">subprocess</a> module and its <a href="http://docs.python.org/library/subprocess.html#popen-constructor">Popen</a> class.</p>
                                            <p>The library has following main usages:</p>
                                            <ul>
                                                <li>Running processes in system and waiting for their completion using <a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a> keyword.</li>
                                                <li>Starting processes on background using <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a>.</li>
                                                <li>Waiting started process to complete using <a href="documantation.php?page=libraries&node=built-in&subnode=process#wait-for-process" class="name">Wait For
                                                        Process</a> or stopping them with <a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a> or <a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-all-processes" class="name">Terminate All Processes</a>.</li>
                                            </ul>
                                            <h4 id="Table of contents">Table of contents</h4>
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
                                            <h4 id="Specifying command and arguments">Specifying command and arguments</h4>
                                            <p>Both <a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a> and <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start
                                                    Process</a> accept the command to execute and all arguments passed to the command as separate arguments. This makes usage convenient and also allows these keywords to automatically escape possible spaces and other special characters in
                                                commands and arguments. Notice that if a command accepts options that themselves accept values, these options and their values must be given as separate arguments.</p>
                                            <p>When <a href="#Running%20processes%20in%20shell" class="name">running processes in shell</a>, it is also possible to give the whole command to execute as a single string. The command can then contain multiple commands to be run together. When
                                                using this approach, the caller is responsible on escaping.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>${tools}${/}prog.py</td>
                                                        <td>argument</td>
                                                        <td>second arg with spaces</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>java</td>
                                                        <td>-jar</td>
                                                        <td>${jars}${/}example.jar</td>
                                                        <td>--option</td>
                                                        <td>value</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>prog.py "one arg" &amp;&amp; tool.sh</td>
                                                        <td>shell=yes</td>
                                                        <td>cwd=${tools}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Possible non-string arguments are converted to strings automatically.</p>
                                            <h4 id="Process configuration">Process configuration</h4>
                                            <p><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a> and <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start
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
                                            <p>Note that because <code>**configuration</code> is passed using <code>name=value</code> syntax, possible equal signs in other arguments passed to <a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a> and <a href="#Start%20Process" class="name">Start Process</a> must be escaped with a backslash like
                                                <code>name\=value</code>. See <a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a> for an example.
                                            </p>
                                            <h4 id="Running processes in shell">Running processes in shell</h4>
                                            <p>The <code>shell</code> argument specifies whether to run the process in a shell or not. By default shell is not used, which means that shell specific commands, like <code>copy</code> and <code>dir</code> on Windows, are not available. You can,
                                                however, run shell scripts and batch files without using a shell.</p>
                                            <p>Giving the <code>shell</code> argument any non-false value, such as <code>shell=True</code>, changes the program to be executed in a shell. It allows using the shell capabilities, but can also make the process invocation operating system dependent.
                                                Having a shell between the actually started process and this library can also interfere communication with the process such as stopping it and reading its outputs. Because of these problems, it is recommended to use the shell only when absolutely
                                                necessary.</p>
                                            <p>When using a shell it is possible to give the whole command to execute as a single string. See <a href="#Specifying%20command%20and%20arguments" class="name">Specifying command and arguments</a> section for examples and more details in general.</p>
                                            <h4 id="Current working directory">Current working directory</h4>
                                            <p>By default the child process will be executed in the same directory as the parent process, the process running tests, is executed. This can be changed by giving an alternative location using the <code>cwd</code> argument. Forward slashes in the
                                                given path are automatically converted to backslashes on Windows.</p>
                                            <p><a href="#Standard%20output%20and%20error%20streams" class="name">Standard output and error streams</a>, when redirected to files, are also relative to the current working directory possibly set using the
                                                <code>cwd</code> argument.
                                            </p>
                                            <p>Example:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>prog.exe</td>
                                                        <td>cwd=${ROOT}/directory</td>
                                                        <td>stdout=stdout.txt</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Environment variables">Environment variables</h4>
                                            <p>By default the child process will get a copy of the parent process's environment variables. The
                                                <code>env</code> argument can be used to give the child a custom environment as a Python dictionary. If there is a need to specify only certain environment variable, it is possible to use the
                                                <code>env:&lt;name&gt;=&lt;value&gt;</code> format to set or override only that named variables. It is also possible to use these two approaches together.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>program</td>
                                                        <td>env=${environ}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>program</td>
                                                        <td>env:http_proxy=10.144.1.10:8080</td>
                                                        <td>env:PATH=%{PATH}${:}${PROGDIR}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>program</td>
                                                        <td>env=${environ}</td>
                                                        <td>env:EXTRA=value</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Standard output and error streams">Standard output and error streams</h4>
                                            <p>By default processes are run so that their standard output and standard error streams are kept in the memory. This works fine normally, but if there is a lot of output, the output buffers may get full and the program can hang. Additionally on
                                                Jython, everything written to these in-memory buffers can be lost if the process is terminated.</p>
                                            <p>To avoid the above mentioned problems, it is possible to use <code>stdout</code> and <code>stderr</code> arguments to specify files on the file system where to redirect the outputs. This can also be useful if other processes or other keywords
                                                need to read or manipulate the outputs somehow.</p>
                                            <p>Given <code>stdout</code> and <code>stderr</code> paths are relative to the <a href="#Current%20working%20directory" class="name">current working directory</a>. Forward slashes in the given paths are automatically converted to backslashes on Windows.</p>
                                            <p>As a special feature, it is possible to redirect the standard error to the standard output by using
                                                <code>stderr=STDOUT</code>.
                                            </p>
                                            <p>Regardless are outputs redirected to files or not, they are accessible through the <a href="#Result%20object" class="name">result object</a> returned when the process ends. Commands are expected to write outputs using the console encoding, but
                                                <a href="#Output%20encoding" class="name">output encoding</a> can be configured using the <code>output_encoding</code> argument if needed.
                                            </p>
                                            <p>If you are not interested in outputs at all, you can explicitly ignore them by using a special value
                                                <code>DEVNULL</code> both with <code>stdout</code> and <code>stderr</code>. For example,
                                                <code>stdout=DEVNULL</code> is the same as redirecting output on console with <code>&gt; /dev/null</code> on UNIX-like operating systems or <code>&gt; NUL</code> on Windows. This way the process will not hang even if there would be a lot of
                                                output, but naturally output is not available after execution either.
                                            </p>

                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${result} =</td>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
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
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
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
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>program</td>
                                                        <td>stdout=DEVNULL</td>
                                                        <td>stderr=DEVNULL</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Note that the created output files are not automatically removed after the test run. The user is responsible to remove them if needed.</p>
                                            <h4 id="Output encoding">Output encoding</h4>
                                            <p>Executed commands are, by default, expected to write outputs to the <a href="#Standard%20output%20and%20error%20streams" class="name">standard output and error streams</a> using the encoding used by the system console. If the command uses some
                                                other encoding, that can be configured using the <code>output_encoding</code> argument. This is especially useful on Windows where the console uses a different encoding than rest of the system, and many commands use the general system encoding
                                                instead of the console encoding.</p>
                                            <p>The value used with the <code>output_encoding</code> argument must be a valid encoding and must match the encoding actually used by the command. As a convenience, it is possible to use strings <code>CONSOLE</code> and <code>SYSTEM</code> to specify
                                                that the console or system encoding is used, respectively. If produced outputs use different encoding then configured, values got through the <a href="#Result%20object" class="name">result object</a> will be invalid.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a></td>
                                                        <td>program</td>
                                                        <td>output_encoding=UTF-8</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>program</td>
                                                        <td>stdout=${path}</td>
                                                        <td>output_encoding=SYSTEM</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h4 id="Alias">Alias</h4>
                                            <p>A custom name given to the process that can be used when selecting the <a href="#active-process" class="name">active process</a>.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a></td>
                                                        <td>program</td>
                                                        <td>alias=example</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
                                                        <td>python</td>
                                                        <td>-c</td>
                                                        <td>print 'hello'</td>
                                                        <td>alias=hello</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Active process">Active process</h4>
                                            <p>The test library keeps record which of the started processes is currently active. By default it is latest process started with <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a>, but <a href="documantation.php?page=libraries&node=built-in&subnode=process#switch-process" class="name">Switch Process</a> can be used to select a different one. Using <a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a> does not affect the active process.</p>
                                            <p>The keywords that operate on started processes will use the active process by default, but it is possible to explicitly select a different process using the <code>handle</code> argument. The handle can be the identifier returned by <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a> or an <code>alias</code> explicitly given to <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a> or <a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a>.</p>
                                            <h4 id="Result object">Result object</h4>
                                            <p><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a>, <a href="documantation.php?page=libraries&node=built-in&subnode=process#wait-for-process" class="name">Wait For
                                                    Process</a> and <a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a> keywords return a result object that contains information about the process execution as its attributes. The same result object, or some of its attributes,
                                                can also be get using <a href="documantation.php?page=libraries&node=built-in&subnode=process#get-process-result" class="name">Get
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
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a></td>
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
                                            <h4 id="Boolean arguments">Boolean arguments</h4>
                                            <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
                                                <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Other strings are considered true regardless their value, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                                            </p>
                                            <p>True examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=True</td>
                                                        <td># Strings are generally true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=yes</td>
                                                        <td># Same as the above.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=${TRUE}</td>
                                                        <td># Python <code>True</code> is true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=${42}</td>
                                                        <td># Numbers other than 0 are true.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>False examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=False</td>
                                                        <td># String <code>false</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=no</td>
                                                        <td># Also string <code>no</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=${EMPTY}</td>
                                                        <td># Empty string is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a></td>
                                                        <td>kill=${FALSE}</td>
                                                        <td># Python <code>False</code> is false.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Example">Example</h4>
                                            <pre><b>***</b> Settings <b>***</b>
    Library           Process
    Suite Teardown    <a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-all-processes" class="name">Terminate All Processes</a>    kill=True
    
    <b>***</b> Test Cases <b>***</b>
    Example
        <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a>    program    arg1    arg2    alias=First
        ${handle} =    <a href="documantation.php?page=libraries&node=built-in&subnode=process#start-process" class="name">Start Process</a>    command.sh arg | command2.sh    shell=True    cwd=/path
        ${result} =    <a href="documantation.php?page=libraries&node=built-in&subnode=process#run-process" class="name">Run Process</a>    ${CURDIR}/script.py
        <span class="name">Should Not Contain</span>    ${result.stdout}    FAIL
        <a href="documantation.php?page=libraries&node=built-in&subnode=process#terminate-process" class="name">Terminate Process</a>    ${handle}
        ${result} =    <a href="documantation.php?page=libraries&node=built-in&subnode=process#wait-for-process" class="name">Wait For Process</a>    First
        <span class="name">Should Be Equal As Integers</span>    ${result.rc}    0
    </pre>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">


                                                    <div>
                                                        <div class="keyword" id="get-process-id">
                                                            <h4><a href="#get-process-id">Get Process Id</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Returns the process ID (pid) of the process as an integer.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                                <p>Notice that the pid is not the same as the handle returned by <a href="#Start%20Process" class="name">Start Process</a> that is used internally by this library.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-process-object">
                                                            <h4><a href="#get-process-object">Get Process Object</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Return the underlying ``subprocess.Popen`` object.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Return the underlying <code>subprocess.Popen</code> object.</p>
                                                                <p>If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-process-result">
                                                            <h4><a href="#get-process-result">Get Process Result</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Returns the specified `result object` or some of its attributes.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>rc</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>stdout</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>stderr</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>stdout_path</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>stderr_path</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns the specified <a href="#Result%20object" class="name">result object</a> or some of its attributes.
                                                                </p>
                                                                <p>The given <code>handle</code> specifies the process whose results should be returned. If no
                                                                    <code>handle</code> is given, results of the current <a href="#Active%20process" class="name">active process</a> are returned. In either case, the process must have been finishes before this keyword can
                                                                    be used. In practice this means that processes started with <a href="#Start%20Process" class="name">Start Process</a> must be finished either with <a href="#Wait%20For%20Process" class="name">Wait For Process</a> or <a href="#Terminate%20Process" class="name">Terminate Process</a> before using this keyword.
                                                                </p>
                                                                <p>If no other arguments than the optional <code>handle</code> are given, a whole <a href="#Result%20object" class="name">result object</a> is returned. If one or more of the other arguments are given any true
                                                                    value, only the specified attributes of the <a href="#Result%20object" class="name">result object</a> are returned. These attributes are always returned in the same order as arguments are specified in the
                                                                    keyword signature. See <a href="#Boolean%20arguments" class="name">Boolean arguments</a> section for more details about true and false values.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Run Process</td>
                                                                        <td>python</td>
                                                                        <td>-c</td>
                                                                        <td>print 'Hello, world!'</td>
                                                                        <td>alias=myproc</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Get result object</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Get Process Result</td>
                                                                        <td>myproc</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${result.rc}</td>
                                                                        <td>${0}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${result.stdout}</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Empty</td>
                                                                        <td>${result.stderr}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Get one attribute</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${stdout} =</td>
                                                                        <td>Get Process Result</td>
                                                                        <td>myproc</td>
                                                                        <td>stdout=true</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${stdout}</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Multiple attributes</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${stdout}</td>
                                                                        <td>${stderr} =</td>
                                                                        <td>Get Process Result</td>
                                                                        <td>myproc</td>
                                                                        <td>stdout=yes</td>
                                                                        <td>stderr=yes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${stdout}</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Empty</td>
                                                                        <td>${stderr}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Although getting results of a previously executed process can be handy in general, the main use case for this keyword is returning results over the remote library interface. The remote interface does not support
                                                                    returning the whole result object, but individual attributes can be returned without problems.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-process-running">
                                                            <h4><a href="#is-process-running">Is Process Running</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Checks is the process running or not.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                                <p>Returns <code>True</code> if the process is still running and <code>False</code> otherwise.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="join-command-line">
                                                            <h4><a href="#join-command-line">Join Command Line</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Joins arguments into one command line string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>In resulting command line string arguments are delimited with a space, arguments containing spaces are surrounded with quotes, and possible quotes are escaped with a backslash.</p>
                                                                <p>If this keyword is given only one argument and that is a list like object, then the values of that list are joined instead.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${cmd} =</td>
                                                                        <td>Join Command Line</td>
                                                                        <td>--option</td>
                                                                        <td>value with spaces</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${cmd}</td>
                                                                        <td>--option "value with spaces"</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="process-should-be-running">
                                                            <h4><a href="#process-should-be-running">Process Should Be Running</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the process is running.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error_message</td>
                                                                        <td></td>
                                                                        <td>Process is not running.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                                <p>Fails if the process has stopped.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="process-should-be-stopped">
                                                            <h4><a href="#process-should-be-stopped">Process Should Be Stopped</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the process is not running.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error_message</td>
                                                                        <td></td>
                                                                        <td>Process is running.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                                <p>Fails if the process is still running.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-process">
                                                            <h4><a href="#run-process">Run Process</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Runs a process and waits for it to complete.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>command</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*arguments</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**configuration</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>command</code> and <code>*arguments</code> specify the command to execute and arguments passed to it. See <a href="#Specifying%20command%20and%20arguments" class="name">Specifying
                                                                        command and arguments</a> for more details.</p>
                                                                <p><code>**configuration</code> contains additional configuration related to starting processes and waiting for them to finish. See <a href="#Process%20configuration" class="name">Process
                                                                        configuration</a> for more details about configuration related to starting processes. Configuration related to waiting for processes consists of <code>timeout</code> and
                                                                    <code>on_timeout</code> arguments that have same semantics as with <a href="#Wait%20For%20Process" class="name">Wait For Process</a> keyword. By default there is no timeout, and if timeout is defined the
                                                                    default action on timeout is <code>terminate</code>.
                                                                </p>
                                                                <p>Returns a <a href="#Result%20object" class="name">result object</a> containing information about the execution.</p>
                                                                <p>Note that possible equal signs in <code>*arguments</code> must be escaped with a backslash (e.g. <code>name\=value</code>) to avoid them to be passed in as <code>**configuration</code>.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Run Process</td>
                                                                        <td>python</td>
                                                                        <td>-c</td>
                                                                        <td>print 'Hello, world!'</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${result.stdout}</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Run Process</td>
                                                                        <td>${command}</td>
                                                                        <td>stderr=STDOUT</td>
                                                                        <td>timeout=10s</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Run Process</td>
                                                                        <td>${command}</td>
                                                                        <td>timeout=1min</td>
                                                                        <td>on_timeout=continue</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Run Process</td>
                                                                        <td>java -Dname\=value Example</td>
                                                                        <td>shell=True</td>
                                                                        <td>cwd=${EXAMPLE}</td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword does not change the <a href="#Active%20process" class="name">active process</a>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="send-signal-to-process">
                                                            <h4><a href="#send-signal-to-process">Send Signal To Process</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Sends the given ``signal`` to the specified process.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>signal</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>group</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sends the given <code>signal</code> to the specified process.</p>
                                                                <p>If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                                <p>Signal can be specified either as an integer as a signal name. In the latter case it is possible to give the name both with or without <code>SIG</code> prefix, but names are case-sensitive. For example, all
                                                                    the examples below send signal <code>INT (2)</code>:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Send Signal To Process</td>
                                                                        <td>2</td>
                                                                        <td></td>
                                                                        <td># Send to active process</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Send Signal To Process</td>
                                                                        <td>INT</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Send Signal To Process</td>
                                                                        <td>SIGINT</td>
                                                                        <td>myproc</td>
                                                                        <td># Send to named process</td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword is only supported on Unix-like machines, not on Windows. What signals are supported depends on the system. For a list of existing signals on your system, see the Unix man pages related to signal
                                                                    handling (typically <code>man signal</code> or
                                                                    <code>man 7 signal</code>).
                                                                </p>
                                                                <p>By default sends the signal only to the parent process, not to possible child processes started by it. Notice that when <a href="#Running%20processes%20in%20shell" class="name">running
                                                                        processes in shell</a>, the shell is the parent process and it depends on the system does the shell propagate the signal to the actual started process.</p>
                                                                <p>To send the signal to the whole process group, <code>group</code> argument can be set to any true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>). This is not supported by Jython,
                                                                    however.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="split-command-line">
                                                            <h4><a href="#split-command-line">Split Command Line</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Splits command line string into a list of arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>escaping</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>String is split from spaces, but argument surrounded in quotes may contain spaces in them. If
                                                                    <code>escaping</code> is given a true value, then backslash is treated as an escape character. It can escape unquoted spaces, quotes inside quotes, and so on, but it also requires using double backslashes
                                                                    when using Windows paths.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>@{cmd} =</td>
                                                                        <td>Split Command Line</td>
                                                                        <td>--option "value with spaces"</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>$cmd == ['--option', 'value with spaces']</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="start-process">
                                                            <h4><a href="#start-process">Start Process</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Starts a new process on background.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>command</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*arguments</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**configuration</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Specifying%20command%20and%20arguments" class="name">Specifying command and
                                                                        arguments</a> and <a href="#Process%20configuration" class="name">Process configuration</a> for more information about the arguments, and <a href="#Run%20Process" class="name">Run
                                                                        Process</a> keyword for related examples.</p>
                                                                <p>Makes the started process new <a href="#Active%20process" class="name">active process</a>. Returns an identifier that can be used as a handle to activate the started process if needed.
                                                                </p>
                                                                <p>Processes are started so that they create a new process group. This allows sending signals to and terminating also possible child processes. This is not supported on Jython.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="switch-process">
                                                            <h4><a href="#switch-process">Switch Process</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Makes the specified process the current `active process`.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Makes the specified process the current <a href="#Active%20process" class="name">active
                                                                        process</a>.</p>
                                                                <p>The handle can be an identifier returned by <a href="#Start%20Process" class="name">Start
                                                                        Process</a> or the <code>alias</code> given to it explicitly.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Start Process</td>
                                                                        <td>prog1</td>
                                                                        <td>alias=process1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Start Process</td>
                                                                        <td>prog2</td>
                                                                        <td>alias=process2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># currently active process is process2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Switch Process</td>
                                                                        <td>process1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># now active process is process1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="terminate-all-processes">
                                                            <h4><a href="#terminate-all-processes">Terminate All Processes</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Terminates all still running processes started by this library.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>kill</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can be used in suite teardown or elsewhere to make sure that all processes are stopped,
                                                                </p>
                                                                <p>By default tries to terminate processes gracefully, but can be configured to forcefully kill them immediately. See <a href="#Terminate%20Process" class="name">Terminate Process</a> that this keyword uses internally
                                                                    for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="terminate-process">
                                                            <h4><a href="#terminate-process">Terminate Process</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Stops the process gracefully or forcefully.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>kill</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                                <p>By default first tries to stop the process gracefully. If the process does not stop in 30 seconds, or <code>kill</code> argument is given a true value, (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>)
                                                                    kills the process forcefully. Stops also all the child processes of the originally started process.</p>
                                                                <p>Waits for the process to stop after terminating it. Returns a <a href="#Result%20object" class="name">result object</a> containing information about the execution similarly as <a href="#Wait%20For%20Process" class="name">Wait For Process</a>.</p>
                                                                <p>On Unix-like machines graceful termination is done using <code>TERM (15)</code> signal and killing using <code>KILL (9)</code>. Use <a href="#Send%20Signal%20To%20Process" class="name">Send Signal To Process</a> instead if you just want to send either of these signals without waiting for the process to stop.</p>
                                                                <p>On Windows graceful termination is done using <code>CTRL_BREAK_EVENT</code> event and killing using Win32 API function <code>TerminateProcess()</code>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Terminate Process</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>${result.rc}</td>
                                                                        <td>-15</td>
                                                                        <td># On Unixes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Terminate Process</td>
                                                                        <td>myproc</td>
                                                                        <td>kill=true</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Limitations:</p>
                                                                <ul>
                                                                    <li>Graceful termination is not supported on Windows when using Jython. Process is killed instead.
                                                                    </li>
                                                                    <li>Stopping the whole process group is not supported when using Jython.</li>
                                                                    <li>On Windows forceful kill only stops the main process, not possible child processes.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-for-process">
                                                            <h4><a href="#wait-for-process">Wait For Process</a></h4>

                                                            <div>
                                                                <p class="shortdoc">Waits for the process to complete or to reach the given timeout.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>on_timeout</td>
                                                                        <td></td>
                                                                        <td>continue</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The process to wait for must have been started earlier with <a href="#Start%20Process" class="name">Start Process</a>. If <code>handle</code> is not given, uses the current <a href="#Active%20process" class="name">active process</a>.</p>
                                                                <p><code>timeout</code> defines the maximum time to wait for the process. It can be given in <a href="">various
                                                                        time formats</a> supported by Autosphere, for example, <code>42</code>,
                                                                    <code>42 s</code>, or <code>1 minute 30 seconds</code>. The timeout is ignored if it is Python
                                                                    <code>None</code> (default), string <code>NONE</code> (case-insensitively), zero, or negative.
                                                                </p>
                                                                <p><code>on_timeout</code> defines what to do if the timeout occurs. Possible values and corresponding actions are explained in the table below. Notice that reaching the timeout never fails the test.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <th>Value</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>continue</td>
                                                                        <td>The process is left running (default).</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>terminate</td>
                                                                        <td>The process is gracefully terminated.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>kill</td>
                                                                        <td>The process is forcefully stopped.</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Terminate%20Process" class="name">Terminate Process</a> keyword for more details how processes are terminated and killed.</p>
                                                                <p>If the process ends before the timeout or it is terminated or killed, this keyword returns a <a href="#Result%20object" class="name">result object</a> containing information about the execution. If the process
                                                                    is left running, Python <code>None</code> is returned instead.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td># Process ends cleanly</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Wait For Process</td>
                                                                        <td>example</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Process Should Be Stopped</td>
                                                                        <td>example</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>${result.rc}</td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Process does not end</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Wait For Process</td>
                                                                        <td>timeout=42 secs</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Process Should Be Running</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${result}</td>
                                                                        <td>${NONE}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Kill non-ending process</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Wait For Process</td>
                                                                        <td>timeout=1min 30s</td>
                                                                        <td>on_timeout=kill</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Process Should Be Stopped</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>${result.rc}</td>
                                                                        <td>-9</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div><a id="link-get-process-id" href="#get-process-id" class="">Get Process Id</a><a id="link-get-process-object" href="#get-process-object" class="">Get Process Object</a><a id="link-get-process-result" href="#get-process-result" class="">Get Process Result</a><a id="link-is-process-running" href="#is-process-running" class="">Is Process Running</a><a id="link-join-command-line" href="#join-command-line" class="">Join Command Line</a><a id="link-process-should-be-running" href="#process-should-be-running" class="">Process
                                                    Should Be Running</a><a id="link-process-should-be-stopped" href="#process-should-be-stopped" class="">Process Should Be Stopped</a><a id="link-run-process" href="#run-process" class="">Run Process</a><a id="link-send-signal-to-process" href="#send-signal-to-process" class="">Send Signal To
                                                    Process</a><a id="link-split-command-line" href="#split-command-line" class="">Split
                                                    Command Line</a><a id="link-start-process" href="#start-process" class="">Start
                                                    Process</a><a id="link-switch-process" href="#switch-process" class="">Switch
                                                    Process</a><a id="link-terminate-all-processes" href="#terminate-all-processes" class="">Terminate All Processes</a><a id="link-terminate-process" href="#terminate-process" class="">Terminate Process</a><a id="link-wait-for-process" href="#wait-for-process" class="">Wait For Process</a></div>
                                        </aside>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Headings -->

    </div>
</section>