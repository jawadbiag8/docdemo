
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Telnet</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/telnet">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/telnet/keywords">Keywords</a></nav>
                    </div>
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
                                            <h3>Arguments</h3>
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
                                            <p>This keyword requires the prompt to be <a href="#Configuration">configured</a> either in <a href="#Importing" class="name">importing</a> or with <a href="#Open%20Connection" class="name">Open Connection</a>                                                or <a href="#Set%20Prompt" class="name">Set Prompt</a> keyword.
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
                                            <p>See <a href="#Logging" class="name">Logging</a> section for more information about log levels and <a href="#Read%20Until%20Prompt" class="name">Read Until Prompt</a> for more information about the <code>strip_prompt</code>                                                parameter.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="login">
                                        <h2><a href="#login">Login</a></h2>

                                        <div>
                                            <p class="shortdoc">Logs in to the Telnet server with the given user information.</p>
                                            <h3>Arguments</h3>
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
                                                <code>password</code>. In both cases a newline is appended automatically and the connection specific timeout used when waiting for outputs.</p>
                                            <p>How logging status is verified depends on whether a prompt is set for this connection or not:
                                            </p>
                                            <p>1) If the prompt is set, this keyword reads the output until the prompt is found using the normal timeout. If no prompt is found, login is considered failed and also this keyword fails. Note that in this case
                                                both <code>login_timeout</code> and <code>login_incorrect</code> arguments are ignored.</p>
                                            <p>2) If the prompt is not set, this keywords sleeps until <code>login_timeout</code> and then reads all the output available on the connection. If the output contains
                                                <code>login_incorrect</code> text, login is considered failed and also this keyword fails.</p>
                                            <p>See <a href="#Configuration" class="name">Configuration</a> section for more information about setting newline, timeout, and prompt.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="open-connection">
                                        <h2><a href="#open-connection">Open Connection</a></h2>

                                        <div>
                                            <p class="shortdoc">Opens a new Telnet connection to the given host and port.</p>
                                            <h3>Arguments</h3>
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
                                                information about these parameters and their possible values.</p>
                                            <p>Possible already opened connections are cached and it is possible to switch back to them using
                                                <a href="#Switch%20Connection" class="name">Switch Connection</a> keyword. It is possible to switch either using explicitly given <code>alias</code> or using index returned by this keyword. Indexing starts
                                                from 1 and is reset back to it by <a href="#Close%20All%20Connections" class="name">Close All Connections</a> keyword.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="read">
                                        <h2><a href="#read">Read</a></h2>

                                        <div>
                                            <p class="shortdoc">Reads everything that is currently available in the output.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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

                                            <p>This keyword requires the prompt to be <a href="#Configuration">configured</a> either in <a href="#Importing" class="name">importing</a> or with <a href="#Open%20Connection" class="name">Open Connection</a>                                                or <a href="#Set%20Prompt" class="name">Set Prompt</a> keyword.
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                                <code>NONE</code> to disable encoding altogether.</p>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                                <a href="#Login" class="name">Login</a> in the current connection.</p>
                                            <p>If <code>prompt_is_regexp</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the given <code>prompt</code> is considered to be a regular expression.</p>
                                            <p>The old prompt is returned and can be used to restore the prompt later.</p>
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                                <code>telnetlib</code>.</p>
                                            <p>Note that <code>telnetlib</code> can be very noisy thus using the level <code>NONE</code> can shutdown the messages generated by this library.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="set-timeout">
                                        <h2><a href="#set-timeout">Set Timeout</a></h2>

                                        <div>
                                            <p class="shortdoc">Sets the timeout used for waiting output in the current connection.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <p>This keyword consumes the written text, until the added newline, from the output and logs and returns it. The given text itself must not contain newlines. Use <a href="#Write%20Bare" class="name">Write Bare</a>                                                instead if either of these features causes a problem.</p>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                                <code>myprocess</code> appears in the output. The command is written every 0.5 seconds and the keyword fails if <code>myprocess</code> does not appear in the output in 5 seconds.</p>
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
                            <div><a id="link-close-all-connections" href="#close-all-connections" class="">Close All
                  Connections</a><a id="link-close-connection" href="#close-connection" class="">Close
                  Connection</a><a id="link-execute-command" href="#execute-command" class="">Execute
                  Command</a><a id="link-login" href="#login" class="">Login</a><a id="link-open-connection" href="#open-connection" class="">Open Connection</a><a id="link-read" href="#read" class="">Read</a>
                                <a id="link-read-until" href="#read-until" class="">Read Until</a><a id="link-read-until-prompt" href="#read-until-prompt" class="">Read Until Prompt</a><a id="link-read-until-regexp" href="#read-until-regexp"
                                    class="">Read Until Regexp</a><a id="link-set-default-log-level" href="#set-default-log-level" class="">Set Default Log
                  Level</a><a id="link-set-encoding" href="#set-encoding" class="">Set Encoding</a><a id="link-set-newline" href="#set-newline" class="">Set Newline</a><a id="link-set-prompt" href="#set-prompt" class="">Set Prompt</a>
                                <a id="link-set-telnetlib-log-level" href="#set-telnetlib-log-level" class="">Set Telnetlib Log Level</a><a id="link-set-timeout" href="#set-timeout" class="">Set Timeout</a><a id="link-switch-connection"
                                    href="#switch-connection" class="">Switch Connection</a><a id="link-write" href="#write" class="">Write</a><a id="link-write-bare" href="#write-bare" class="">Write Bare</a><a id="link-write-control-character"
                                    href="#write-control-character" class="">Write Control Character</a>
                                <a id="link-write-until-expected-output" href="#write-until-expected-output" class="">Write Until Expected Output</a>
                            </div>
                        </aside>
                    </div>
                </article>
         
