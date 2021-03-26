<article class="sc-hBEYos dVNWBU">
    <div class="sc-kLgntA iHaOcn">
        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z" fill="#002642"></path>
            </svg><a href="">Built-in</a></nav>
        <div class="sc-iktFzd gaGeRK">
            <h1>Telnet</h1>
        </div>
        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/telnet">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/telnet/keywords">Keywords</a></nav>
    </div>
    <div class="sc-jJEJSO laquCT">
        <div class="sc-hiSbYr XqbgT">
            <div class="sc-jcVebW hrCIoP">
                <div>
                    <p>A test library providing communication over Telnet connections.</p>
                    <p><code>Telnet</code> is Autosphere's standard library that makes it possible to connect to Telnet servers
                        and execute commands on the opened connections.</p>
                    <h3 id="Table of contents">Table of contents</h3>
                    <ul>
                        <li><a href="#Connections" class="name">Connections</a></li>
                        <li><a href="#Writing%20and%20reading" class="name">Writing and reading</a></li>
                        <li><a href="#Configuration" class="name">Configuration</a></li>
                        <li><a href="#Terminal%20emulation" class="name">Terminal emulation</a></li>
                        <li><a href="#Logging" class="name">Logging</a></li>
                        <li><a href="#Time%20string%20format" class="name">Time string format</a></li>
                        <li><a href="#Boolean%20arguments" class="name">Boolean arguments</a></li>
                        <li><a href="#Importing" class="name">Importing</a></li>
                        <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
                        <li><a href="#Keywords" class="name">Keywords</a></li>
                    </ul>
                    <h2 id="Connections">Connections</h2>
                    <p>The first step of using <code>Telnet</code> is opening a connection with <a href="#Open%20Connection" class="name">Open Connection</a> keyword. Typically the next step is logging in with <a href="#Login" class="name">Login</a> keyword, and in the end the opened connection can be closed with <a href="#Close%20Connection" class="name">Close Connection</a>.</p>
                    <p>It is possible to open multiple connections and switch the active one using <a href="#Switch%20Connection" class="name">Switch Connection</a>. <a href="#Close%20All%20Connections" class="name">Close All
                            Connections</a> can be used to close all the connections, which is especially useful in suite teardowns
                        to guarantee that all connections are always closed.</p>
                    <h2 id="Writing and reading">Writing and reading</h2>
                    <p>After opening a connection and possibly logging in, commands can be executed or text written to the
                        connection for other reasons using <a href="#Write" class="name">Write</a> and <a href="#Write%20Bare" class="name">Write Bare</a> keywords. The main difference between these two is that the former adds a <a href="#Configuration">configurable newline</a> after the text automatically.</p>
                    <p>After writing something to the connection, the resulting output can be read using <a href="#Read" class="name">Read</a>, <a href="#Read%20Until" class="name">Read Until</a>, <a href="#Read%20Until%20Regexp" class="name">Read Until Regexp</a>, and <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a> keywords. Which one to use depends on the context, but the latest one
                        is often the most convenient.</p>
                    <p>As a convenience when running a command, it is possible to use <a href="#Execute%20Command" class="name">Execute Command</a> that simply uses <a href="#Write" class="name">Write</a> and <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a> internally. <a href="#Write%20Until%20Expected%20Output" class="name">Write Until Expected Output</a> is useful if you
                        need to wait until writing something produces a desired output.</p>
                    <p>Written and read text is automatically encoded/decoded using a <a href="#Configuration">configured
                            encoding</a>.</p>
                    <p>The ANSI escape codes, like cursor movement and color codes, are normally returned as part of the read
                        operation. If an escape code occurs in middle of a search pattern it may also prevent finding the searched
                        string. <a href="#Terminal%20emulation" class="name">Terminal emulation</a> can be used to process these
                        escape codes as they would be if a real terminal would be in use.</p>
                    <h2 id="Configuration">Configuration</h2>
                    <p>Many aspects related the connections can be easily configured either globally or per connection basis. Global
                        configuration is done when <a href="#Importing">library is imported</a>, and these values can be overridden
                        per connection by <a href="#Open%20Connection" class="name">Open Connection</a> or with setting specific
                        keywords <a href="#Set%20Timeout" class="name">Set Timeout</a>, <a href="#Set%20Newline" class="name">Set
                            Newline</a>, <a href="#Set%20Prompt" class="name">Set Prompt</a>, <a href="#Set%20Encoding" class="name">Set Encoding</a>, <a href="#Set%20Default%20Log%20Level" class="name">Set Default Log
                            Level</a> and <a href="#Set%20Telnetlib%20Log%20Level" class="name">Set Telnetlib Log Level</a>.</p>
                    <p>Values of <code>environ_user</code>, <code>window_size</code>, <code>terminal_emulation</code>, and
                        <code>terminal_type</code> can not be changed after opening the connection.
                    </p>
                    <h3 id="Timeout">Timeout</h3>
                    <p>Timeout defines how long is the maximum time to wait when reading output. It is used internally by <a href="#Read%20Until" class="name">Read Until</a>, <a href="#Read%20Until%20Regexp" class="name">Read
                            Until Regexp</a>, <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a>, and <a href="#Login" class="name">Login</a> keywords. The default value is 3 seconds.</p>
                    <h3 id="Connection Timeout">Connection Timeout</h3>
                    <p>Connection Timeout defines how long is the maximum time to wait when opening the telnet connection. It is
                        used internally by <a href="#Open%20Connection" class="name">Open Connection</a>. The default value is the
                        system global default timeout.</p>

                    <h3 id="Newline">Newline</h3>
                    <p>Newline defines which line separator <a href="#Write" class="name">Write</a> keyword should use. The default
                        value is <code>CRLF</code> that is typically used by Telnet connections.</p>
                    <p>Newline can be given either in escaped format using <code>\n</code> and <code>\r</code> or with special
                        <code>LF</code> and <code>CR</code> syntax.
                    </p>
                    <p>Examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Set%20Newline" class="name">Set Newline</a></td>
                                <td>\n</td>
                            </tr>
                            <tr>
                                <td><a href="#Set%20Newline" class="name">Set Newline</a></td>
                                <td>CRLF</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="Prompt">Prompt</h3>
                    <p>Often the easiest way to read the output of a command is reading all the output until the next prompt with <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a>. It also makes it easier, and faster,
                        to verify did <a href="#Login" class="name">Login</a> succeed.</p>
                    <p>Prompt can be specified either as a normal string or a regular expression. The latter is especially useful if
                        the prompt changes as a result of the executed commands. Prompt can be set to be a regular expression by
                        giving <code>prompt_is_regexp</code> argument a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).</p>
                    <p>Examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>prompt=$</td>
                            </tr>
                            <tr>
                                <td><a href="#Set%20Prompt" class="name">Set Prompt</a></td>
                                <td>(&gt; |# )</td>
                                <td>prompt_is_regexp=true</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="Encoding">Encoding</h3>
                    <p>To ease handling text containing non-ASCII characters, all written text is encoded and read text decoded by
                        default. The default encoding is UTF-8 that works also with ASCII. Encoding can be disabled by using a
                        special encoding value <code>NONE</code>. This is mainly useful if you need to get the bytes received from
                        the connection as-is.</p>
                    <p>Notice that when writing to the connection, only Unicode strings are encoded using the defined encoding. Byte
                        strings are expected to be already encoded correctly. Notice also that normal text in test data is passed to
                        the library as Unicode and you need to use variables to use bytes.</p>
                    <p>It is also possible to configure the error handler to use if encoding or decoding characters fails. Accepted
                        values are the same that encode/decode functions in Python strings accept. In practice the following values
                        are the most useful:</p>
                    <ul>
                        <li><code>ignore</code>: ignore characters that cannot be encoded (default)</li>
                        <li><code>strict</code>: fail if characters cannot be encoded</li>
                        <li><code>replace</code>: replace characters that cannot be encoded with a replacement character</li>
                    </ul>
                    <p>Examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>encoding=Latin1</td>
                                <td>encoding_errors=strict</td>
                            </tr>
                            <tr>
                                <td><a href="#Set%20Encoding" class="name">Set Encoding</a></td>
                                <td>ISO-8859-15</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Set%20Encoding" class="name">Set Encoding</a></td>
                                <td>errors=ignore</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="Default log level">Default log level</h3>
                    <p>Default log level specifies the log level keywords use for <a href="#Logging" class="name">logging</a> unless
                        they are given an explicit log level. The default value is <code>INFO</code>, and changing it, for example,
                        to <code>DEBUG</code> can be a good idea if there is lot of unnecessary output that makes log files big.</p>
                    <h3 id="Terminal type">Terminal type</h3>
                    <p>By default the Telnet library does not negotiate any specific terminal type with the server. If a specific
                        terminal type, for example <code>vt100</code>, is desired, the terminal type can be configured in <a href="#Importing" class="name">importing</a> and with <a href="#Open%20Connection" class="name">Open
                            Connection</a>.</p>
                    <h3 id="Window size">Window size</h3>
                    <p>Window size for negotiation with the server can be configured when <a href="#Importing" class="name">importing</a> the library and with <a href="#Open%20Connection" class="name">Open
                            Connection</a>.</p>
                    <h3 id="USER environment variable">USER environment variable</h3>
                    <p>Telnet protocol allows the <code>USER</code> environment variable to be sent when connecting to the server.
                        On some servers it may happen that there is no login prompt, and on those cases this configuration option
                        will allow still to define the desired username. The option <code>environ_user</code> can be used in <a href="#Importing" class="name">importing</a> and with <a href="#Open%20Connection" class="name">Open
                            Connection</a>.</p>
                    <h2 id="Terminal emulation">Terminal emulation</h2>
                    <p>Telnet library supports terminal emulation with <a href="http://pyte.readthedocs.io">Pyte</a>. Terminal
                        emulation will process the output in a virtual screen. This means that ANSI escape codes, like cursor
                        movements, and also control characters, like carriage returns and backspaces, have the same effect on the
                        result as they would have on a normal terminal screen. For example the sequence <code>acdc\x1b[3Dbba</code>
                        will result in output <code>abba</code>.</p>
                    <p>Terminal emulation is taken into use by giving <code>terminal_emulation</code> argument a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) either in the library initialization or
                        with <a href="#Open%20Connection" class="name">Open Connection</a>.</p>
                    <p>As Pyte approximates vt-style terminal, you may also want to set the terminal type as <code>vt100</code>. We
                        also recommend that you increase the window size, as the terminal emulation will break all lines that are
                        longer than the window row length.</p>
                    <p>When terminal emulation is used, the <a href="#Newline" class="name">newline</a> and <a href="#Encoding" class="name">encoding</a> can not be changed anymore after opening the connection.</p>
                    <p>Examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=True</td>
                                <td>terminal_type=vt100</td>
                                <td>window_size=400x100</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="Logging">Logging</h2>
                    <p>All keywords that read something log the output. These keywords take the log level to use as an optional
                        argument, and if no log level is specified they use the <a href="#Configuration">configured</a> default
                        value.</p>
                    <p>The valid log levels to use are <code>TRACE</code>, <code>DEBUG</code>, <code>INFO</code> (default), and
                        <code>WARN</code>. Levels below <code>INFO</code> are not shown in log files by default whereas warnings are
                        shown more prominently.
                    </p>
                    <p>The <a href="http://docs.python.org/library/telnetlib.html">telnetlib module</a> used by this library has a
                        custom logging system for logging content it sends and receives. By default these messages are written using
                        <code>TRACE</code> level, but the level is configurable with the <code>telnetlib_log_level</code> option
                        either in the library initialization, to the <a href="#Open%20Connection" class="name">Open Connection</a>
                        or by using the <a href="#Set%20Telnetlib%20Log%20Level" class="name">Set Telnetlib Log Level</a> keyword to
                        the active connection. Special level <code>NONE</code> con be used to disable the logging altogether.
                    </p>
                    <h2 id="Time string format">Time string format</h2>
                    <p>Timeouts and other times used must be given as a time string using format like <code>15 seconds</code> or
                        <code>1min 10s</code>. If the timeout is given as just a number, for example, <code>10</code> or
                        <code>1.5</code>, it is considered to be seconds.
                    </p>
                    <h2 id="Boolean arguments">Boolean arguments</h2>
                    <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given
                        as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
                        <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Other strings
                        are considered true regardless their value, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                    </p>
                    <p>True examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=True</td>
                                <td># Strings are generally true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=yes</td>
                                <td># Same as the above.</td>
                            </tr>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=${TRUE}</td>
                                <td># Python <code>True</code> is true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=${42}</td>
                                <td># Numbers other than 0 are true.</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>False examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=False</td>
                                <td># String <code>false</code> is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=no</td>
                                <td># Also string <code>no</code> is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=${EMPTY}</td>
                                <td># Empty string is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                <td>lolcathost</td>
                                <td>terminal_emulation=${FALSE}</td>
                                <td># Python <code>False</code> is false.</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</article>