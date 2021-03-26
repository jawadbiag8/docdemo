
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>OperatingSystem</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/operatingsystem">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/operatingsystem/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                        <div class="sc-jcVebW hrCIoP">
                <div>
                    <p>A test library providing keywords for OS related tasks.</p>
                    <p><code>OperatingSystem</code> is Autosphere's standard library that enables various operating
                        system related tasks to be performed in the system where Autosphere is running. It can,
                        among other things, execute commands (e.g. <a href="#Run" class="name">Run</a>), create and
                        remove files and directories (e.g. <a href="#Create%20File" class="name">Create File</a>, <a
                            href="#Remove%20Directory" class="name">Remove Directory</a>), check whether files or
                        directories exists or contain something (e.g. <a href="#File%20Should%20Exist" class="name">File
                            Should Exist</a>, <a href="#Directory%20Should%20Be%20Empty" class="name">Directory Should
                            Be Empty</a>) and manipulate environment variables (e.g. <a
                            href="#Set%20Environment%20Variable" class="name">Set Environment Variable</a>).</p>
                    <h3 id="Table of contents">Table of contents</h3>
                    <ul>
                        <li><a href="#Path%20separators" class="name">Path separators</a></li>
                        <li><a href="#Pattern%20matching" class="name">Pattern matching</a></li>
                        <li><a href="#Tilde%20expansion" class="name">Tilde expansion</a></li>
                        <li><a href="#Boolean%20arguments" class="name">Boolean arguments</a></li>
                        <li><a href="#Example" class="name">Example</a></li>
                        <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
                        <li><a href="#Keywords" class="name">Keywords</a></li>
                    </ul>
                    <h2 id="Path separators">Path separators</h2>
                    <p>Because Autosphere uses the backslash (<code>\</code>) as an escape character in the test
                        data, using a literal backslash requires duplicating it like in <code>c:\\path\\file.txt</code>.
                        That can be inconvenient especially with longer Windows paths, and thus all keywords expecting
                        paths as arguments convert forward slashes to backslashes automatically on Windows. This also
                        means that paths like <code>${CURDIR}/path/file.txt</code> are operating system independent.</p>
                    <p>Notice that the automatic path separator conversion does not work if the path is only a part of
                        an argument like with <a href="#Run" class="name">Run</a> and <span class="name">Start
                            Process</span> keywords. In these cases the built-in variable <code>${/}</code> that
                        contains <code>\</code> or <code>/</code>, depending on the operating system, can be used
                        instead.</p>
                    <h2 id="Pattern matching">Pattern matching</h2>
                    <p>Some keywords allow their arguments to be specified as <a
                            href="http://en.wikipedia.org/wiki/Glob_(programming)">glob patterns</a> where:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><code>*</code></td>
                                <td>matches any string, even an empty string</td>
                            </tr>
                            <tr>
                                <td><code>?</code></td>
                                <td>matches any single character</td>
                            </tr>
                            <tr>
                                <td><code>[chars]</code></td>
                                <td>matches one character in the bracket</td>
                            </tr>
                            <tr>
                                <td><code>[!chars]</code></td>
                                <td>matches one character not in the bracket</td>
                            </tr>
                            <tr>
                                <td><code>[a-z]</code></td>
                                <td>matches one character from the range in the bracket</td>
                            </tr>
                            <tr>
                                <td><code>[!a-z]</code></td>
                                <td>matches one character not from the range in the bracket</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Unless otherwise noted, matching is case-insensitive on case-insensitive operating systems such
                        as Windows.</p>
                    <h2 id="Tilde expansion">Tilde expansion</h2>
                    <p>Paths beginning with <code>~</code> or <code>~username</code> are expanded to the current or
                        specified user's home directory, respectively. The resulting path is operating system dependent,
                        but typically e.g. <code>~/robot</code> is expanded to <code>C:\Users\&lt;user&gt;\robot</code>
                        on Windows and <code>/home/&lt;user&gt;/robot</code> on Unixes.</p>
                    <p>The <code>~username</code> form does not work on Jython.</p>
                    <h2 id="Boolean arguments">Boolean arguments</h2>
                    <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an
                        argument is given as a string, it is considered false if it is an empty string or equal to
                        <code>FALSE</code>, <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>,
                        case-insensitively. Other strings are considered true regardless their value, and other argument
                        types are tested using the same <a
                            href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.</p>
                    <p>True examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=True</td>
                                <td># Strings are generally true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=yes</td>
                                <td># Same as the above.</td>
                            </tr>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=${TRUE}</td>
                                <td># Python <code>True</code> is true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=${42}</td>
                                <td># Numbers other than 0 are true.</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>False examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=False</td>
                                <td># String <code>false</code> is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=no</td>
                                <td># Also string <code>no</code> is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=${EMPTY}</td>
                                <td># Empty string is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Remove%20Directory" class="name">Remove Directory</a></td>
                                <td>${path}</td>
                                <td>recursive=${FALSE}</td>
                                <td># Python <code>False</code> is false.</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 id="Example">Example</h2>
                    <table border="1">
                        <tbody>
                            <tr>
                                <th>Setting</th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td>Library</td>
                                <td>OperatingSystem</td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="1">
                        <tbody>
                            <tr>
                                <th>Variable</th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td>${PATH}</td>
                                <td>${CURDIR}/example.txt</td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="1">
                        <tbody>
                            <tr>
                                <th>Test Case</th>
                                <th>Action</th>
                                <th>Argument</th>
                                <th>Argument</th>
                            </tr>
                            <tr>
                                <td>Example</td>
                                <td>Create File</td>
                                <td>${PATH}</td>
                                <td>Some text</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>File Should Exist</td>
                                <td>${PATH}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Copy File</td>
                                <td>${PATH}</td>
                                <td>~/file.txt</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>${output} =</td>
                                <td>Run</td>
                                <td>${TEMPDIR}${/}script.py arg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                        </div>
                        
                    </div>
                </article>
           