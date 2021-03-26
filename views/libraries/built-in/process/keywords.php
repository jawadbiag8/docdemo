
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
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/process">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/process/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="get-process-id">
                                        <h2><a href="#get-process-id">Get Process Id</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns the process ID (pid) of the process as an integer.</p>
                                            <h3>Arguments</h3>
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
                                        <h2><a href="#get-process-object">Get Process Object</a></h2>

                                        <div>
                                            <p class="shortdoc">Return the underlying ``subprocess.Popen`` object.</p>
                                            <h3>Arguments</h3>
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
                                        <h2><a href="#get-process-result">Get Process Result</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns the specified `result object` or some of its attributes.</p>
                                            <h3>Arguments</h3>
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
                                                be used. In practice this means that processes started with <a href="#Start%20Process" class="name">Start Process</a> must be finished either with <a href="#Wait%20For%20Process" class="name">Wait For Process</a>                                                or <a href="#Terminate%20Process" class="name">Terminate Process</a> before using this keyword.</p>
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
                                        <h2><a href="#is-process-running">Is Process Running</a></h2>

                                        <div>
                                            <p class="shortdoc">Checks is the process running or not.</p>
                                            <h3>Arguments</h3>
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
                                        <h2><a href="#join-command-line">Join Command Line</a></h2>

                                        <div>
                                            <p class="shortdoc">Joins arguments into one command line string.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                        <h2><a href="#process-should-be-running">Process Should Be Running</a></h2>

                                        <div>
                                            <p class="shortdoc">Verifies that the process is running.</p>
                                            <h3>Arguments</h3>
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
                                        <h2><a href="#process-should-be-stopped">Process Should Be Stopped</a></h2>

                                        <div>
                                            <p class="shortdoc">Verifies that the process is not running.</p>
                                            <h3>Arguments</h3>
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
                                        <h2><a href="#run-process">Run Process</a></h2>

                                        <div>
                                            <p class="shortdoc">Runs a process and waits for it to complete.</p>
                                            <h3>Arguments</h3>
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
                                                default action on timeout is <code>terminate</code>.</p>
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
                                        <h2><a href="#send-signal-to-process">Send Signal To Process</a></h2>

                                        <div>
                                            <p class="shortdoc">Sends the given ``signal`` to the specified process.</p>
                                            <h3>Arguments</h3>
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
                                                <code>man 7 signal</code>).</p>
                                            <p>By default sends the signal only to the parent process, not to possible child processes started by it. Notice that when <a href="#Running%20processes%20in%20shell" class="name">running
                          processes in shell</a>, the shell is the parent process and it depends on the system does the shell propagate the signal to the actual started process.</p>
                                            <p>To send the signal to the whole process group, <code>group</code> argument can be set to any true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>). This is not supported by Jython,
                                                however.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="split-command-line">
                                        <h2><a href="#split-command-line">Split Command Line</a></h2>

                                        <div>
                                            <p class="shortdoc">Splits command line string into a list of arguments.</p>
                                            <h3>Arguments</h3>
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
                                                when using Windows paths.</p>
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
                                        <h2><a href="#start-process">Start Process</a></h2>

                                        <div>
                                            <p class="shortdoc">Starts a new process on background.</p>
                                            <h3>Arguments</h3>
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
                                        <h2><a href="#switch-process">Switch Process</a></h2>

                                        <div>
                                            <p class="shortdoc">Makes the specified process the current `active process`.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                        <h2><a href="#terminate-all-processes">Terminate All Processes</a></h2>

                                        <div>
                                            <p class="shortdoc">Terminates all still running processes started by this library.</p>
                                            <h3>Arguments</h3>
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
                                        <h2><a href="#terminate-process">Terminate Process</a></h2>

                                        <div>
                                            <p class="shortdoc">Stops the process gracefully or forcefully.</p>
                                            <h3>Arguments</h3>
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
                                            <p>Waits for the process to stop after terminating it. Returns a <a href="#Result%20object" class="name">result object</a> containing information about the execution similarly as <a href="#Wait%20For%20Process"
                                                    class="name">Wait For Process</a>.</p>
                                            <p>On Unix-like machines graceful termination is done using <code>TERM (15)</code> signal and killing using <code>KILL (9)</code>. Use <a href="#Send%20Signal%20To%20Process" class="name">Send Signal To Process</a>                                                instead if you just want to send either of these signals without waiting for the process to stop.</p>
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
                                        <h2><a href="#wait-for-process">Wait For Process</a></h2>

                                        <div>
                                            <p class="shortdoc">Waits for the process to complete or to reach the given timeout.</p>
                                            <h3>Arguments</h3>
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
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-get-process-id" href="#get-process-id" class="">Get Process Id</a><a id="link-get-process-object" href="#get-process-object" class="">Get Process Object</a><a id="link-get-process-result"
                                    href="#get-process-result" class="">Get Process Result</a><a id="link-is-process-running" href="#is-process-running" class="">Is Process Running</a><a id="link-join-command-line" href="#join-command-line"
                                    class="">Join Command Line</a><a id="link-process-should-be-running" href="#process-should-be-running" class="">Process
                  Should Be Running</a><a id="link-process-should-be-stopped" href="#process-should-be-stopped" class="">Process Should Be Stopped</a><a id="link-run-process" href="#run-process" class="">Run Process</a><a id="link-send-signal-to-process"
                                    href="#send-signal-to-process" class="">Send Signal To
                  Process</a><a id="link-split-command-line" href="#split-command-line" class="">Split
                  Command Line</a><a id="link-start-process" href="#start-process" class="">Start
                  Process</a><a id="link-switch-process" href="#switch-process" class="">Switch
                  Process</a><a id="link-terminate-all-processes" href="#terminate-all-processes" class="">Terminate All Processes</a><a id="link-terminate-process" href="#terminate-process" class="">Terminate Process</a><a id="link-wait-for-process"
                                    href="#wait-for-process" class="">Wait For Process</a></div>
                        </aside>
                    </div>
                </article>
           
