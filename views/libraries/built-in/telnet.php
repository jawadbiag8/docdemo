<section id="contentpage" class="content">
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
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Built-in</a></li>
                                    <li class="active">Telnet</li>
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
                                            <p>A test library providing communication over Telnet connections.</p>
                                            <p><code>Telnet</code> is Autosphere's standard library that makes it possible to connect to Telnet servers
                                                and execute commands on the opened connections.</p>
                                            <h4 id="Table of contents">Table of contents</h4>
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
                                            <h4 id="Connections">Connections</h4>
                                            <p>The first step of using <code>Telnet</code> is opening a connection with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a> keyword. Typically the next step is logging in with <a href="#login" class="name">Login</a> keyword, and in the end the opened connection can be closed with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#close-connection" class="name">Close Connection</a>.</p>
                                            <p>It is possible to open multiple connections and switch the active one using <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#switch-connection" class="name">Switch Connection</a>. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#close-all-connections" class="name">Close All
                                                    Connections</a> can be used to close all the connections, which is especially useful in suite teardowns
                                                to guarantee that all connections are always closed.</p>
                                            <h4 id="Writing and reading">Writing and reading</h4>
                                            <p>After opening a connection and possibly logging in, commands can be executed or text written to the
                                                connection for other reasons using <a href="#write" class="name">Write</a> and <a href="#write-bare" class="name">Write Bare</a> keywords. The main difference between these two is that the former adds a <a href="#configuration">configurable newline</a> after the text automatically.</p>
                                            <p>After writing something to the connection, the resulting output can be read using <a href="#read" class="name">Read</a>, <a href="#read-until" class="name">Read Until</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#read-until-regexp" class="name">Read Until Regexp</a>, and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#read-until-prompt" class="name">Read Until Prompt</a> keywords. Which one to use depends on the context, but the latest one
                                                is often the most convenient.</p>
                                            <p>As a convenience when running a command, it is possible to use <a href="#execute-command" class="name">Execute Command</a> that simply uses <a href="#write" class="name">Write</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#read-until-prompt" class="name">Read Until Prompt</a> internally. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#write-until-expected-output" class="name">Write Until Expected Output</a> is useful if you
                                                need to wait until writing something produces a desired output.</p>
                                            <p>Written and read text is automatically encoded/decoded using a <a href="#configuration">configured
                                                    encoding</a>.</p>
                                            <p>The ANSI escape codes, like cursor movement and color codes, are normally returned as part of the read
                                                operation. If an escape code occurs in middle of a search pattern it may also prevent finding the searched
                                                string. <a href="#Terminal%20emulation" class="name">Terminal emulation</a> can be used to process these
                                                escape codes as they would be if a real terminal would be in use.</p>
                                            <h4 id="Configuration">Configuration</h4>
                                            <p>Many aspects related the connections can be easily configured either globally or per connection basis. Global
                                                configuration is done when <a href="#Importing">library is imported</a>, and these values can be overridden
                                                per connection by <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a> or with setting specific
                                                keywords <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-timeout" class="name">Set Timeout</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-newline" class="name">Set
                                                    Newline</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-prompt" class="name">Set Prompt</a>, <a href="#set-encoding" class="name">Set Encoding</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#Set-default-log-level" class="name">Set Default Log
                                                    Level</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-telnetlib-log-level" class="name">Set Telnetlib Log Level</a>.</p>
                                            <p>Values of <code>environ_user</code>, <code>window_size</code>, <code>terminal_emulation</code>, and
                                                <code>terminal_type</code> can not be changed after opening the connection.
                                            </p>
                                            <h4 id="Timeout">Timeout</h4>
                                            <p>Timeout defines how long is the maximum time to wait when reading output. It is used internally by <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#read-until" class="name">Read Until</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#read-until-regexp" class="name">Read
                                                    Until Regexp</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#read-until-prompt" class="name">Read Until Prompt</a>, and <a href="#login" class="name">Login</a> keywords. The default value is 3 seconds.</p>
                                            <h4 id="Connection Timeout">Connection Timeout</h4>
                                            <p>Connection Timeout defines how long is the maximum time to wait when opening the telnet connection. It is
                                                used internally by <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a>. The default value is the
                                                system global default timeout.</p>

                                            <h4 id="Newline">Newline</h4>
                                            <p>Newline defines which line separator <a href="#write" class="name">Write</a> keyword should use. The default
                                                value is <code>CRLF</code> that is typically used by Telnet connections.</p>
                                            <p>Newline can be given either in escaped format using <code>\n</code> and <code>\r</code> or with special
                                                <code>LF</code> and <code>CR</code> syntax.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-newline" class="name">Set Newline</a></td>
                                                        <td>\n</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-newline" class="name">Set Newline</a></td>
                                                        <td>CRLF</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Prompt">Prompt</h4>
                                            <p>Often the easiest way to read the output of a command is reading all the output until the next prompt with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#read-until-prompt" class="name">Read Until Prompt</a>. It also makes it easier, and faster,
                                                to verify did <a href="#login" class="name">Login</a> succeed.</p>
                                            <p>Prompt can be specified either as a normal string or a regular expression. The latter is especially useful if
                                                the prompt changes as a result of the executed commands. Prompt can be set to be a regular expression by
                                                giving <code>prompt_is_regexp</code> argument a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>prompt=$</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-prompt" class="name">Set Prompt</a></td>
                                                        <td>(&gt; |# )</td>
                                                        <td>prompt_is_regexp=true</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Encoding">Encoding</h4>
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
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>encoding=Latin1</td>
                                                        <td>encoding_errors=strict</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-encoding" class="name">Set Encoding</a></td>
                                                        <td>ISO-8859-15</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-encoding" class="name">Set Encoding</a></td>
                                                        <td>errors=ignore</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Default log level">Default log level</h4>
                                            <p>Default log level specifies the log level keywords use for <a href="#Logging" class="name">logging</a> unless
                                                they are given an explicit log level. The default value is <code>INFO</code>, and changing it, for example,
                                                to <code>DEBUG</code> can be a good idea if there is lot of unnecessary output that makes log files big.</p>
                                            <h4 id="Terminal type">Terminal type</h4>
                                            <p>By default the Telnet library does not negotiate any specific terminal type with the server. If a specific
                                                terminal type, for example <code>vt100</code>, is desired, the terminal type can be configured in <a href="#Importing" class="name">importing</a> and with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open
                                                    Connection</a>.</p>
                                            <h4 id="Window size">Window size</h4>
                                            <p>Window size for negotiation with the server can be configured when <a href="#Importing" class="name">importing</a> the library and with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open
                                                    Connection</a>.</p>
                                            <h4 id="USER environment variable">USER environment variable</h4>
                                            <p>Telnet protocol allows the <code>USER</code> environment variable to be sent when connecting to the server.
                                                On some servers it may happen that there is no login prompt, and on those cases this configuration option
                                                will allow still to define the desired username. The option <code>environ_user</code> can be used in <a href="#Importing" class="name">importing</a> and with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open
                                                    Connection</a>.</p>
                                            <h4 id="Terminal emulation">Terminal emulation</h4>
                                            <p>Telnet library supports terminal emulation with <a href="http://pyte.readthedocs.io">Pyte</a>. Terminal
                                                emulation will process the output in a virtual screen. This means that ANSI escape codes, like cursor
                                                movements, and also control characters, like carriage returns and backspaces, have the same effect on the
                                                result as they would have on a normal terminal screen. For example the sequence <code>acdc\x1b[3Dbba</code>
                                                will result in output <code>abba</code>.</p>
                                            <p>Terminal emulation is taken into use by giving <code>terminal_emulation</code> argument a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) either in the library initialization or
                                                with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a>.</p>
                                            <p>As Pyte approximates vt-style terminal, you may also want to set the terminal type as <code>vt100</code>. We
                                                also recommend that you increase the window size, as the terminal emulation will break all lines that are
                                                longer than the window row length.</p>
                                            <p>When terminal emulation is used, the <a href="#Newline" class="name">newline</a> and <a href="#Encoding" class="name">encoding</a> can not be changed anymore after opening the connection.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>terminal_emulation=True</td>
                                                        <td>terminal_type=vt100</td>
                                                        <td>window_size=400x100</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h4 id="Logging">Logging</h4>
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
                                                either in the library initialization, to the <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a>
                                                or by using the <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#set-telnetlib-log-level" class="name">Set Telnetlib Log Level</a> keyword to
                                                the active connection. Special level <code>NONE</code> con be used to disable the logging altogether.
                                            </p>
                                            <h4 id="Time string format">Time string format</h4>
                                            <p>Timeouts and other times used must be given as a time string using format like <code>15 seconds</code> or
                                                <code>1min 10s</code>. If the timeout is given as just a number, for example, <code>10</code> or
                                                <code>1.5</code>, it is considered to be seconds.
                                            </p>
                                            <h4 id="Boolean arguments">Boolean arguments</h4>
                                            <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given
                                                as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
                                                <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Other strings
                                                are considered true regardless their value, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                                            </p>
                                            <p>True examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>terminal_emulation=True</td>
                                                        <td># Strings are generally true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>terminal_emulation=yes</td>
                                                        <td># Same as the above.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>terminal_emulation=${TRUE}</td>
                                                        <td># Python <code>True</code> is true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
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
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>terminal_emulation=False</td>
                                                        <td># String <code>false</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>terminal_emulation=no</td>
                                                        <td># Also string <code>no</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
                                                        <td>lolcathost</td>
                                                        <td>terminal_emulation=${EMPTY}</td>
                                                        <td># Empty string is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/telnet/keywords#open-connection" class="name">Open Connection</a></td>
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
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="close-all-connections">
                                                            <h2><a href="#close-all-connections">Close All Connections</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Closes all open connections and empties the connection cache.</p>


                                                                <p>If multiple connections are opened, this keyword should be used in a test or suite teardown to make sure that all connections are closed. It is not an error is some of the connections have already been closed
                                                                    by <a href="#Close%20Connection" class="name">Close Connection</a>.</p>
                                                                <p>After this keyword, new indexes returned by <a href="#Open%20Connection" class="name">Open
                                                                        Connection</a> keyword are reset to 1.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-connection">
                                                            <h2><a href="#close-connection">Close Connection</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Closes the current Telnet connection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Remaining output in the connection is read, logged, and returned. It is not an error to close an already closed connection.</p>
                                                                <p>Use <a href="#Close%20All%20Connections" class="name">Close All Connections</a> if you want to make sure all opened connections are closed.</p>
                                                                <p>See <a href="#Logging" class="name">Logging</a> section for more information about log levels.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="execute-command">
                                                            <h2><a href="#execute-command">Execute Command</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Executes the given ``command`` and reads, logs, and returns everything until the prompt.</p>
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
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strip_prompt</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Executes the given <code>command</code> and reads, logs, and returns everything until the prompt.
                                                                </p>
                                                                <p>This keyword requires the prompt to be <a href="#Configuration">configured</a> either in <a href="#Importing" class="name">importing</a> or with <a href="#Open%20Connection" class="name">Open Connection</a> or <a href="#Set%20Prompt" class="name">Set Prompt</a> keyword.
                                                                </p>
                                                                <p>This is a convenience keyword that uses <a href="#Write" class="name">Write</a> and <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a> internally. Following two examples are thus functionally
                                                                    identical:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${out} =</td>
                                                                        <td><a href="#Execute%20Command" class="name">Execute Command</a></td>
                                                                        <td>pwd</td>
                                                                    </tr>
                                                                </table>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Write" class="name">Write</a></td>
                                                                        <td>pwd</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${out} =</td>
                                                                        <td><a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Logging" class="name">Logging</a> section for more information about log levels and <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a> for more information about the <code>strip_prompt</code> parameter.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="login">
                                                            <h2><a href="#login">Login</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs in to the Telnet server with the given user information.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>login_prompt</td>
                                                                        <td>login</td>
                                                                        <td> </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password_prompt</td>
                                                                        <td>Password</td>
                                                                        <td> </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>login_timeout</td>
                                                                        <td></td>
                                                                        <td>1 second</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>login_incorrect</td>
                                                                        <td></td>
                                                                        <td>Login incorrect</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword reads from the connection until the <code>login_prompt</code> is encountered and then types the given <code>username</code>. Then it reads until the <code>password_prompt</code> and types the given
                                                                    <code>password</code>. In both cases a newline is appended automatically and the connection specific timeout used when waiting for outputs.
                                                                </p>
                                                                <p>How logging status is verified depends on whether a prompt is set for this connection or not:
                                                                </p>
                                                                <p>1) If the prompt is set, this keyword reads the output until the prompt is found using the normal timeout. If no prompt is found, login is considered failed and also this keyword fails. Note that in this case
                                                                    both <code>login_timeout</code> and <code>login_incorrect</code> arguments are ignored.</p>
                                                                <p>2) If the prompt is not set, this keywords sleeps until <code>login_timeout</code> and then reads all the output available on the connection. If the output contains
                                                                    <code>login_incorrect</code> text, login is considered failed and also this keyword fails.
                                                                </p>
                                                                <p>See <a href="#Configuration" class="name">Configuration</a> section for more information about setting newline, timeout, and prompt.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-connection">
                                                            <h2><a href="#open-connection">Open Connection</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Opens a new Telnet connection to the given host and port.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>host</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>alias</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>port</td>
                                                                        <td></td>
                                                                        <td>23</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>newline</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>prompt</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>prompt_is_regexp</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding_errors</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default_log_level</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>window_size</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>environ_user</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>terminal_emulation</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>terminal_type</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>telnetlib_log_level</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>connection_timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>timeout</code>, <code>newline</code>, <code>prompt</code>,
                                                                    <code>prompt_is_regexp</code>, <code>encoding</code>, <code>default_log_level</code>,
                                                                    <code>window_size</code>, <code>environ_user</code>, <code>terminal_emulation</code>,
                                                                    <code>terminal_type</code> and <code>telnetlib_log_level</code> arguments get default values when the library is <a href="#Importing">imported</a>. Setting them here overrides those values for the opened
                                                                    connection. See <a href="#Configuration" class="name">Configuration</a>, <a href="#Terminal%20emulation" class="name">Terminal emulation</a> and <a href="#Logging" class="name">Logging</a> sections for more
                                                                    information about these parameters and their possible values.
                                                                </p>
                                                                <p>Possible already opened connections are cached and it is possible to switch back to them using
                                                                    <a href="#Switch%20Connection" class="name">Switch Connection</a> keyword. It is possible to switch either using explicitly given <code>alias</code> or using index returned by this keyword. Indexing starts
                                                                    from 1 and is reset back to it by <a href="#Close%20All%20Connections" class="name">Close All Connections</a> keyword.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read">
                                                            <h2><a href="#read">Read</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Reads everything that is currently available in the output.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Read output is both returned and logged. See <a href="#Logging" class="name">Logging</a> section for more information about log levels.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-until">
                                                            <h2><a href="#read-until">Read Until</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Reads output until ``expected`` text is encountered.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Reads output until <code>expected</code> text is encountered.</p>
                                                                <p>Text up to and including the match is returned and logged. If no match is found, this keyword fails. How much to wait for the output depends on the <a href="#Configuration">configured
                                                                        timeout</a>.</p>
                                                                <p>See <a href="#Logging" class="name">Logging</a> section for more information about log levels. Use <a href="#Read%20Until%20Regexp" class="name">Read Until Regexp</a> if more complex matching is needed.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-until-prompt">
                                                            <h2><a href="#read-until-prompt">Read Until Prompt</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Reads output until the prompt is encountered.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strip_prompt</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword requires the prompt to be <a href="#Configuration">configured</a> either in <a href="#Importing" class="name">importing</a> or with <a href="#Open%20Connection" class="name">Open Connection</a> or <a href="#Set%20Prompt" class="name">Set Prompt</a> keyword.
                                                                </p>
                                                                <p>By default, text up to and including the prompt is returned and logged. If no prompt is found, this keyword fails. How much to wait for the output depends on the <a href="#Configuration">configured timeout</a>.</p>
                                                                <p>If you want to exclude the prompt from the returned output, set <code>strip_prompt</code> to a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>). If your prompt is a regular
                                                                    expression, make sure that the expression spans the whole prompt, because only the part of the output that matches the regular expression is stripped away.</p>
                                                                <p>See <a href="#Logging" class="name">Logging</a> section for more information about log levels.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-until-regexp">
                                                            <h2><a href="#read-until-regexp">Read Until Regexp</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Reads output until any of the ``expected`` regular expressions match.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Reads output until any of the <code>expected</code> regular expressions match.</p>
                                                                <p>This keyword accepts any number of regular expressions patterns or compiled Python regular expression objects as arguments. Text up to and including the first match to any of the regular expressions is returned
                                                                    and logged. If no match is found, this keyword fails. How much to wait for the output depends on the <a href="#Configuration">configured timeout</a>.</p>
                                                                <p>If the last given argument is a <a href="#Logging">valid log level</a>, it is used as
                                                                    <code>loglevel</code> similarly as with <a href="#Read%20Until" class="name">Read Until</a> keyword.
                                                                </p>
                                                                <p>See the documentation of <a href="http://docs.python.org/library/re.html">Python re module</a> for more information about the supported regular expression syntax. Notice that possible backslashes need to be
                                                                    escaped in Autosphere test data.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Read%20Until%20Regexp" class="name">Read Until Regexp</a></td>
                                                                        <td>(#|$)</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Read%20Until%20Regexp" class="name">Read Until Regexp</a></td>
                                                                        <td>first_regexp</td>
                                                                        <td>second_regexp</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Read%20Until%20Regexp" class="name">Read Until Regexp</a></td>
                                                                        <td>\\d{4}-\\d{2}-\\d{2}</td>
                                                                        <td>DEBUG</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-default-log-level">
                                                            <h2><a href="#set-default-log-level">Set Default Log Level</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the default log level used for `logging` in the current connection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>level</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sets the default log level used for <a href="#Logging" class="name">logging</a> in the current connection.
                                                                </p>
                                                                <p>The old default log level is returned and can be used to restore the log level later.</p>
                                                                <p>See <a href="#Configuration" class="name">Configuration</a> section for more information about global and connection specific configuration.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-encoding">
                                                            <h2><a href="#set-encoding">Set Encoding</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the encoding to use for `writing and reading` in the current connection.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>errors</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sets the encoding to use for <a href="#Writing%20and%20reading" class="name">writing and
                                                                        reading</a> in the current connection.</p>
                                                                <p>The given <code>encoding</code> specifies the encoding to use when written/read text is encoded/decoded, and <code>errors</code> specifies the error handler to use if encoding/decoding fails. Either of these
                                                                    can be omitted and in that case the old value is not affected. Use string
                                                                    <code>NONE</code> to disable encoding altogether.
                                                                </p>
                                                                <p>See <a href="#Configuration" class="name">Configuration</a> section for more information about encoding and error handlers, as well as global and connection specific configuration in general.
                                                                </p>
                                                                <p>The old values are returned and can be used to restore the encoding and the error handler later. See <a href="#Set%20Prompt" class="name">Set Prompt</a> for a similar example.</p>
                                                                <p>If terminal emulation is used, the encoding can not be changed on an open connection.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-newline">
                                                            <h2><a href="#set-newline">Set Newline</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the newline used by `Write` keyword in the current connection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>newline</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sets the newline used by <a href="#Write" class="name">Write</a> keyword in the current connection.
                                                                </p>
                                                                <p>The old newline is returned and can be used to restore the newline later. See <a href="#Set%20Timeout" class="name">Set Timeout</a> for a similar example.</p>
                                                                <p>If terminal emulation is used, the newline can not be changed on an open connection.</p>
                                                                <p>See <a href="#Configuration" class="name">Configuration</a> section for more information about global and connection specific configuration.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-prompt">
                                                            <h2><a href="#set-prompt">Set Prompt</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the prompt used by `Read Until Prompt` and `Login` in the current connection.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>prompt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>prompt_is_regexp</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sets the prompt used by <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a> and
                                                                    <a href="#Login" class="name">Login</a> in the current connection.
                                                                </p>
                                                                <p>If <code>prompt_is_regexp</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the given <code>prompt</code> is considered to be a regular expression.</p>
                                                                <p>The old prompt is returned and can be used to restore the prompt later.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${prompt}</td>
                                                                        <td>${regexp} =</td>
                                                                        <td><a href="#Set%20Prompt" class="name">Set Prompt</a></td>
                                                                        <td>$</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Do Something</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Set%20Prompt" class="name">Set Prompt</a></td>
                                                                        <td>${prompt}</td>
                                                                        <td>${regexp}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See the documentation of <a href="http://docs.python.org/library/re.html">Python re module</a> for more information about the supported regular expression syntax. Notice that possible backslashes need to be
                                                                    escaped in Autosphere test data.</p>
                                                                <p>See <a href="#Configuration" class="name">Configuration</a> section for more information about global and connection specific configuration.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-telnetlib-log-level">
                                                            <h2><a href="#set-telnetlib-log-level">Set Telnetlib Log Level</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the log level used for `logging` in the underlying ``telnetlib``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>level</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sets the log level used for <a href="#Logging" class="name">logging</a> in the underlying
                                                                    <code>telnetlib</code>.
                                                                </p>
                                                                <p>Note that <code>telnetlib</code> can be very noisy thus using the level <code>NONE</code> can shutdown the messages generated by this library.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-timeout">
                                                            <h2><a href="#set-timeout">Set Timeout</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the timeout used for waiting output in the current connection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Read operations that expect some output to appear (<a href="#Read%20Until" class="name">Read
                                                                        Until</a>, <a href="#Read%20Until%20Regexp" class="name">Read Until Regexp</a>, <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a>, <a href="#Login" class="name">Login</a>) use this timeout and fail if the expected
                                                                    output does not appear before this timeout expires.</p>
                                                                <p>The <code>timeout</code> must be given in <a href="#Time%20string%20format" class="name">time
                                                                        string format</a>. The old timeout is returned and can be used to restore the timeout later.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${old} =</td>
                                                                        <td><a href="#Set%20Timeout" class="name">Set Timeout</a></td>
                                                                        <td>2 minute 30 seconds</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Do Something</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Set%20Timeout" class="name">Set Timeout</a></td>
                                                                        <td>${old}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Configuration" class="name">Configuration</a> section for more information about global and connection specific configuration.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="switch-connection">
                                                            <h2><a href="#switch-connection">Switch Connection</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Switches between active connections using an index or an alias.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index_or_alias</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Aliases can be given to <a href="#Open%20Connection" class="name">Open Connection</a> keyword which also always returns the connection index.</p>
                                                                <p>This keyword returns the index of previous active connection.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                                                        <td>myhost.net</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Login" class="name">Login</a></td>
                                                                        <td>john</td>
                                                                        <td>secret</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Write" class="name">Write</a></td>
                                                                        <td>some command</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                                                        <td>yourhost.com</td>
                                                                        <td>2nd conn</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Login" class="name">Login</a></td>
                                                                        <td>root</td>
                                                                        <td>password</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Write" class="name">Write</a></td>
                                                                        <td>another cmd</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${old index}=</td>
                                                                        <td><a href="#Switch%20Connection" class="name">Switch Connection</a></td>
                                                                        <td>1</td>
                                                                        <td># index</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Write" class="name">Write</a></td>
                                                                        <td>something</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Connection" class="name">Switch Connection</a></td>
                                                                        <td>2nd conn</td>
                                                                        <td></td>
                                                                        <td># alias</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Write" class="name">Write</a></td>
                                                                        <td>whatever</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Connection" class="name">Switch Connection</a></td>
                                                                        <td>${old index}</td>
                                                                        <td></td>
                                                                        <td># back to original</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[Teardown]</td>
                                                                        <td><a href="#Close%20All%20Connections" class="name">Close All Connections</a></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>The example above expects that there were no other open connections when opening the first one, because it used index <code>1</code> when switching to the connection later. If you are not sure about that, you
                                                                    can store the index into a variable as shown below.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${index} =</td>
                                                                        <td><a href="#Open%20Connection" class="name">Open Connection</a></td>
                                                                        <td>myhost.net</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Do Something</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Connection" class="name">Switch Connection</a></td>
                                                                        <td>${index}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write">
                                                            <h2><a href="#write">Write</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Writes the given text plus a newline into the connection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The newline character sequence to use can be <a href="#Configuration">configured</a> both globally and per connection basis. The default value is <code>CRLF</code>.</p>
                                                                <p>This keyword consumes the written text, until the added newline, from the output and logs and returns it. The given text itself must not contain newlines. Use <a href="#Write%20Bare" class="name">Write Bare</a> instead if either of these features causes a problem.</p>
                                                                <p><b>Note:</b> This keyword does not return the possible output of the executed command. To get the output, one of the Read ... <a href="#Keywords" class="name">keywords</a> must be used. See
                                                                    <a href="#Writing%20and%20reading" class="name">Writing and reading</a> section for more details.
                                                                </p>
                                                                <p>See <a href="#Logging" class="name">Logging</a> section for more information about log levels.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write-bare">
                                                            <h2><a href="#write-bare">Write Bare</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Writes the given text, and nothing else, into the connection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword does not append a newline nor consume the written text. Use <a href="#Write" class="name">Write</a> if these features are needed.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write-control-character">
                                                            <h2><a href="#write-control-character">Write Control Character</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Writes the given control character into the connection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>character</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The control character is prepended with an IAC (interpret as command) character.</p>
                                                                <p>The following control character names are supported: BRK, IP, AO, AYT, EC, EL, NOP. Additionally, you can use arbitrary numbers to send any control character.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Write Control Character</td>
                                                                        <td>BRK</td>
                                                                        <td># Send Break command</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Write Control Character</td>
                                                                        <td>241</td>
                                                                        <td># Send No operation command</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write-until-expected-output">
                                                            <h2><a href="#write-until-expected-output">Write Until Expected Output</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Writes the given ``text`` repeatedly, until ``expected`` appears in the output.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>retry_interval</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Writes the given <code>text</code> repeatedly, until <code>expected</code> appears in the output.
                                                                </p>
                                                                <p><code>text</code> is written without appending a newline and it is consumed from the output before trying to find <code>expected</code>. If <code>expected</code> does not appear in the output within <code>timeout</code>,
                                                                    this keyword fails.</p>
                                                                <p><code>retry_interval</code> defines the time to wait <code>expected</code> to appear before writing the <code>text</code> again. Consuming the written <code>text</code> is subject to the normal <a href="#Configuration">configured timeout</a>.</p>
                                                                <p>Both <code>timeout</code> and <code>retry_interval</code> must be given in <a href="#Time%20string%20format" class="name">time string format</a>. See <a href="#Logging" class="name">Logging</a> section for more
                                                                    information about log levels.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Write Until Expected Output</td>
                                                                        <td>ps -ef| grep myprocess\r\n</td>
                                                                        <td>myprocess</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>5 s</td>
                                                                        <td>0.5 s</td>
                                                                    </tr>
                                                                </table>
                                                                <p>The above example writes command <code>ps -ef | grep myprocess\r\n</code> until
                                                                    <code>myprocess</code> appears in the output. The command is written every 0.5 seconds and the keyword fails if <code>myprocess</code> does not appear in the output in 5 seconds.
                                                                </p>
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
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()" type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-close-all-connections" href="#close-all-connections" class="">Close All Connections</a></li>
                                                    <li><a id="link-close-connection" href="#close-connection" class="">Close Connection</a></li>
                                                    <li><a id="link-execute-command" href="#execute-command" class="">Execute Command</a></li>
                                                    <li><a id="link-login" href="#login" class="">Login</a></li>
                                                    <li><a id="link-open-connection" href="#open-connection" class="">Open Connection</a></li>
                                                    <li><a id="link-read" href="#read" class="">Read</a></li>
                                                    <li><a id="link-read-until" href="#read-until" class="">Read Until</a></li>
                                                    <li><a id="link-read-until-prompt" href="#read-until-prompt" class="">Read Until Prompt</a></li>
                                                    <li><a id="link-read-until-regexp" href="#read-until-regexp" class="">Read Until Regexp</a></li>
                                                    <li><a id="link-set-default-log-level" href="#set-default-log-level" class="">Set Default Log Level</a></li>
                                                    <li><a id="link-set-encoding" href="#set-encoding" class="">Set Encoding</a></li>
                                                    <li><a id="link-set-newline" href="#set-newline" class="">Set Newline</a></li>
                                                    <li><a id="link-set-prompt" href="#set-prompt" class="">Set Prompt</a></li>
                                                    <li><a id="link-set-telnetlib-log-level" href="#set-telnetlib-log-level" class="">Set Telnetlib Log Level</a></li>
                                                    <li><a id="link-set-timeout" href="#set-timeout" class="">Set Timeout</a></li>
                                                    <li><a id="link-switch-connection" href="#switch-connection" class="">Switch Connection</a></li>
                                                    <li><a id="link-write" href="#write" class="">Write</a></li>
                                                    <li><a id="link-write-bare" href="#write-bare" class="">Write Bare</a></li>
                                                    <li><a id="link-write-control-character" href="#write-control-character" class="">Write Control Character</a></li>
                                                    <li><a id="link-write-until-expected-output" href="#write-until-expected-output" class="">Write Until Expected Output</a></li>
                                                </ul>

                                            </div>
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