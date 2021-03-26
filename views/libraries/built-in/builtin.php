
<article class="sc-hBEYos dVNWBU">
    <div class="sc-kLgntA iHaOcn">
        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                    fill="#002642"></path>
            </svg><a href="">Built-in</a></nav>
        <div class="sc-iktFzd gaGeRK">
            <h1>BuiltIn</h1>
        </div>
        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/builtin">Readme </a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/builtin/keywords">  Keywords</a></nav>
    </div>
    <div class="sc-jJEJSO laquCT">
        <div class="sc-hiSbYr XqbgT">
        <div class="sc-jcVebW hrCIoP">
    <div>
        <p>An always available standard library with often needed keywords.</p>
        <p><code>BuiltIn</code> is Autosphere's standard library that provides a set of generic keywords needed
            often. It is imported automatically and thus always available. The provided keywords can be used, for
            example, for verifications (e.g. <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a>, <a
                href="#Should%20Contain" class="name">Should Contain</a>), conversions (e.g. <a
                href="#Convert%20To%20Integer" class="name">Convert To Integer</a>) and for various other purposes (e.g.
            <a href="#Log" class="name">Log</a>, <a href="#Sleep" class="name">Sleep</a>, <a href="#Run%20Keyword%20If"
                class="name">Run Keyword If</a>, <a href="#Set%20Global%20Variable" class="name">Set Global
                Variable</a>).</p>
        <h3 id="Table of contents">Table of contents</h3>
        <ul>
            <li><a href="#HTML%20error%20messages" class="name">HTML error messages</a></li>
            <li><a href="#Evaluating%20expressions" class="name">Evaluating expressions</a></li>
            <li><a href="#Boolean%20arguments" class="name">Boolean arguments</a></li>
            <li><a href="#Pattern%20matching" class="name">Pattern matching</a></li>
            <li><a href="#Multiline%20string%20comparison" class="name">Multiline string comparison</a></li>
            <li><a href="#String%20representations" class="name">String representations</a></li>
            <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
            <li><a href="#Keywords" class="name">Keywords</a></li>
        </ul>
        <h2 id="HTML error messages">HTML error messages</h2>
        <p>Many of the keywords accept an optional error message to use if the keyword fails, and it is possible to use
            HTML in these messages by prefixing them with <code>*HTML*</code>. See <a href="#Fail" class="name">Fail</a>
            keyword for a usage example. Notice that using HTML in messages is not limited to BuiltIn library but works
            with any error message.</p>
        <h2 id="Evaluating expressions">Evaluating expressions</h2>
        <p>Many keywords, such as <a href="#Evaluate" class="name">Evaluate</a>, <a href="#Run%20Keyword%20If"
                class="name">Run Keyword If</a> and <a href="#Should%20Be%20True" class="name">Should Be True</a>,
            accept an expression that is evaluated in Python.</p>
        <h3 id="Evaluation namespace">Evaluation namespace</h3>
        <p>Expressions are evaluated using Python's <a
                href="http://docs.python.org/library/functions.html#eval">eval</a> function so that all Python built-ins
            like <code>len()</code> and <code>int()</code> are available. In addition to that, all unrecognized
            variables are considered to be modules that are automatically imported. It is possible to use all available
            Python modules, including the standard modules and the installed third party modules.</p>
        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Should%20Be%20True" class="name">Should Be True</a></td>
                    <td>len('${result}') &gt; 3</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                    <td>os.sep == '/'</td>
                    <td>Non-Windows Keyword</td>
                </tr>
                <tr>
                    <td>${robot version} =</td>
                    <td><a href="#Evaluate" class="name">Evaluate</a></td>
                    <td>robot.__version__</td>
                </tr>
            </tbody>
        </table>
        <p><a href="#Evaluate" class="name">Evaluate</a> also allows configuring the execution namespace with a custom
            namespace and with custom modules to be imported. The latter functionality is useful when using nested
            modules like <code>rootmod.submod</code> that are implemented so that the root module does not automatically
            import sub modules. Otherwise the automatic module import mechanism described earlier is enough to get the
            needed modules imported.</p>
      
        <h3 id="Using variables">Using variables</h3>
        <p>When a variable is used in the expressing using the normal <code>${variable}</code> syntax, its value is
            replaced before the expression is evaluated. This means that the value used in the expression will be the
            string representation of the variable value, not the variable value itself. This is not a problem with
            numbers and other objects that have a string representation that can be evaluated directly, but with other
            objects the behavior depends on the string representation. Most importantly, strings must always be quoted,
            and if they can contain newlines, they must be triple quoted.</p>
        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Should%20Be%20True" class="name">Should Be True</a></td>
                    <td>${rc} &lt; 10</td>
                    <td>Return code greater than 10</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                    <td>'${status}' == 'PASS'</td>
                    <td>Log</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                    <td>'FAIL' in '''${output}'''</td>
                    <td>Log</td>
                    <td>Output contains FAIL</td>
                </tr>
            </tbody>
        </table>
        <p>Actual variables values are also available in the evaluation namespace. They can be accessed using special
            variable syntax without the curly braces like <code>$variable</code>. These variables should never be
            quoted.</p>
        <p>Examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Should%20Be%20True" class="name">Should Be True</a></td>
                    <td>$rc &lt; 10</td>
                    <td>Return code greater than 10</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                    <td>$status == 'PASS'</td>
                    <td><a href="#Log" class="name">Log</a></td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                    <td>'FAIL' in $output</td>
                    <td><a href="#Log" class="name">Log</a></td>
                    <td>Output contains FAIL</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20True" class="name">Should Be True</a></td>
                    <td>len($result) &gt; 1 and $result[1] == 'OK'</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20True" class="name">Should Be True</a></td>
                    <td>$result is not None</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <p>Using the <code>$variable</code> syntax slows down expression evaluation a little. This should not typically
            matter, but should be taken into account if complex expressions are evaluated often and there are strict
            time constrains.</p>
        <p>Notice that instead of creating complicated expressions, it is often better to move the logic into a test
            library. That eases maintenance and can also enhance execution speed.</p>
        <h2 id="Boolean arguments">Boolean arguments</h2>
        <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given
            as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
            <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Keywords
            verifying something that allow dropping actual and expected values from the possible error message also
            consider string <code>no values</code> to be false. Other strings are considered true unless the keyword
            documentation explicitly states otherwise, and other argument types are tested using the same <a
                href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.</p>
        <p>True examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=True</td>
                    <td># Strings are generally true.</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=yes</td>
                    <td># Same as the above.</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=${TRUE}</td>
                    <td># Python <code>True</code> is true.</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=${42}</td>
                    <td># Numbers other than 0 are true.</td>
                </tr>
            </tbody>
        </table>
        <p>False examples:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=False</td>
                    <td># String <code>false</code> is false.</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=no</td>
                    <td># Also string <code>no</code> is false.</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=${EMPTY}</td>
                    <td># Empty string is false.</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=${FALSE}</td>
                    <td># Python <code>False</code> is false.</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${x}</td>
                    <td>${y}</td>
                    <td>Custom error</td>
                    <td>values=no values</td>
                    <td># <code>no values</code> works with <code>values</code> argument</td>
                </tr>
            </tbody>
        </table>
    
        <h2 id="Pattern matching">Pattern matching</h2>
        <p>Many keywords accepts arguments as either glob or regular expression patterns.</p>
        <h3 id="Glob patterns">Glob patterns</h3>
        <p>Some keywords, for example <a href="#Should%20Match" class="name">Should Match</a>, support so called <a
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
        <p>Unlike with glob patterns normally, path separator characters <code>/</code> and <code>\</code> and the
            newline character <code>\n</code> are matches by the above wildcards.</p>
       
        <h3 id="Regular expressions">Regular expressions</h3>
        <p>Some keywords, for example <a href="#Should%20Match%20Regexp" class="name">Should Match Regexp</a>, support
            <a href="http://en.wikipedia.org/wiki/Regular_expression">regular expressions</a> that are more powerful but
            also more complicated that glob patterns. The regular expression support is implemented using Python's <a
                href="http://docs.python.org/library/re.html">re module</a> and its documentation should be consulted
            for more information about the syntax.</p>
        <p>Because the backslash character (<code>\</code>) is an escape character in Autosphere test data,
            possible backslash characters in regular expressions need to be escaped with another backslash like
            <code>\\d\\w+</code>. Strings that may contain special characters but should be handled as literal strings,
            can be escaped with the <a href="#Regexp%20Escape" class="name">Regexp Escape</a> keyword.</p>
        <h2 id="Multiline string comparison">Multiline string comparison</h2>
        <p><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> and <a
                href="#Should%20Be%20Equal%20As%20Strings" class="name">Should Be Equal As Strings</a> report the
            failures using <a href="http://en.wikipedia.org/wiki/Diff_utility#Unified_format">unified diff format</a> if
            both strings have more than two lines.</p>
        <p>Example:</p>
        <table border="1">
            <tbody>
                <tr>
                    <td>${first} =</td>
                    <td><a href="#Catenate" class="name">Catenate</a></td>
                    <td>SEPARATOR=\n</td>
                    <td>Not in second</td>
                    <td>Same</td>
                    <td>Differs</td>
                    <td>Same</td>
                </tr>
                <tr>
                    <td>${second} =</td>
                    <td><a href="#Catenate" class="name">Catenate</a></td>
                    <td>SEPARATOR=\n</td>
                    <td>Same</td>
                    <td>Differs2</td>
                    <td>Same</td>
                    <td>Not in first</td>
                </tr>
                <tr>
                    <td><a href="#Should%20Be%20Equal" class="name">Should Be Equal</a></td>
                    <td>${first}</td>
                    <td>${second}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <p>Results in the following error message:</p>
        <pre>Multiline strings are different:
    --- first
    +++ second
    @@ -1,4 +1,4 @@
    -Not in second
     Same
    -Differs
    +Differs2
     Same
    +Not in first
    </pre>
        <h2 id="String representations">String representations</h2>
        <p>Several keywords log values explicitly (e.g. <a href="#Log" class="name">Log</a>) or implicitly (e.g. <a
                href="#Should%20Be%20Equal" class="name">Should Be Equal</a> when there are failures). By default
            keywords log values using "human readable" string representation, which means that strings like
            <code>Hello</code> and numbers like <code>42</code> are logged as-is. Most of the time this is the desired
            behavior, but there are some problems as well:</p>
        <ul>
            <li>It is not possible to see difference between different objects that have same string representation like
                string <code>42</code> and integer <code>42</code>. <a href="#Should%20Be%20Equal" class="name">Should
                    Be Equal</a> and some other keywords add the type information to the error message in these cases,
                though.</li>
        </ul>
        <ul>
            <li>Non-printable characters such as the null byte are not visible.</li>
        </ul>
        <ul>
            <li>Trailing whitespace is not visible.</li>
        </ul>
        <ul>
            <li>Different newlines (<code>\r\n</code> on Windows, <code>\n</code> elsewhere) cannot be separated from
                each others.</li>
        </ul>
        <ul>
            <li>There are several Unicode characters that are different but look the same. One example is the Latin
                <code>a</code> (<code>\u0061</code>) and the Cyrillic <code>а</code> (<code>\u0430</code>). Error
                messages like <code>a != а</code> are not very helpful.</li>
        </ul>
        <ul>
            <li>Some Unicode characters can be represented using <a
                    href="https://en.wikipedia.org/wiki/Unicode_equivalence">different forms</a>. For example,
                <code>ä</code> can be represented either as a single code point <code>\u00e4</code> or using two code
                points <code>\u0061</code> and <code>\u0308</code> combined together. Such forms are considered
                canonically equivalent, but strings containing them are not considered equal when compared in Python.
                Error messages like <code>ä != ä</code> are not that helpful either.</li>
        </ul>
        <ul>
            <li>Containers such as lists and dictionaries are formatted into a single line making it hard to see
                individual items they contain.</li>
        </ul>
        <p>To overcome the above problems, some keywords such as <a href="#Log" class="name">Log</a> and <a
                href="#Should%20Be%20Equal" class="name">Should Be Equal</a> have an optional <code>formatter</code>
            argument that can be used to configure the string representation. The supported values are <code>str</code>
            (default), <code>repr</code>, and <code>ascii</code> that work similarly as <a
                href="https://docs.python.org/library/functions.html">Python built-in functions</a> with same names.
            More detailed semantics are explained below.</p>
      
        <h3 id="str">str</h3>
        <p>Use the "human readable" string representation. Equivalent to using <code>str()</code> in Python 3 and
            <code>unicode()</code> in Python 2. This is the default.</p>
        <h3 id="repr">repr</h3>
        <p>Use the "machine readable" string representation. Similar to using <code>repr()</code> in Python, which means
            that strings like <code>Hello</code> are logged like <code>'Hello'</code>, newlines and non-printable
            characters are escaped like <code>\n</code> and <code>\x00</code>, and so on. Non-ASCII characters are shown
            as-is like <code>ä</code> in Python 3 and in escaped format like <code>\xe4</code> in Python 2. Use
            <code>ascii</code> to always get the escaped format.</p>
        <p>There are also some enhancements compared to the standard <code>repr()</code>:</p>
        <ul>
            <li>Bigger lists, dictionaries and other containers are pretty-printed so that there is one item per row.
            </li>
            <li>On Python 2 the <code>u</code> prefix is omitted with Unicode strings and the <code>b</code> prefix is
                added to byte strings.</li>
        </ul>
        <h3 id="ascii">ascii</h3>
        <p>Same as using <code>ascii()</code> in Python 3 or <code>repr()</code> in Python 2 where <code>ascii()</code>
            does not exist. Similar to using <code>repr</code> explained above but with the following differences:</p>
        <ul>
            <li>On Python 3 non-ASCII characters are escaped like <code>\xe4</code> instead of showing them as-is like
                <code>ä</code>. This makes it easier to see differences between Unicode characters that look the same
                but are not equal. This is how <code>repr()</code> works in Python 2.</li>
            <li>On Python 2 just uses the standard <code>repr()</code> meaning that Unicode strings get the
                <code>u</code> prefix and no <code>b</code> prefix is added to byte strings.</li>
            <li>Containers are not pretty-printed.</li>
        </ul>
    </div>
</div>
        </div>
        
    </div>
</article>
