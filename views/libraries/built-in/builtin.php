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
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Built-In</a></li>
                                    <li class="active">Builtin</li>
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
                                            <p>An always available standard library with often needed keywords.</p>
                                            <p><code>BuiltIn</code> is Autosphere's standard library that provides a set of generic keywords needed
                                                often. It is imported automatically and thus always available. The provided keywords can be used, for
                                                example, for verifications (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-contain" class="name">Should Contain</a>), conversions (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#convert-to-integer" class="name">Convert To Integer</a>) and for various other purposes (e.g.
                                                <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#log" class="name">Log</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#sleep" class="name">Sleep</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#run-keyword-if" class="name">Run Keyword If</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#set-global-variable" class="name">Set Global
                                                    Variable</a>).
                                            </p>
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
                                            <h4 id="HTML error messages">HTML error messages</h4>
                                            <p>Many of the keywords accept an optional error message to use if the keyword fails, and it is possible to use
                                                HTML in these messages by prefixing them with <code>*HTML*</code>. See <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#fail" class="name">Fail</a>
                                                keyword for a usage example. Notice that using HTML in messages is not limited to BuiltIn library but works
                                                with any error message.</p>
                                            <h4 id="Evaluating expressions">Evaluating expressions</h4>
                                            <p>Many keywords, such as <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#evaluate" class="name">Evaluate</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#run-keyword-if" class="name">Run Keyword If</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-true" class="name">Should Be True</a>,
                                                accept an expression that is evaluated in Python.</p>
                                            <h3 id="Evaluation namespace">Evaluation namespace</h3>
                                            <p>Expressions are evaluated using Python's <a href="http://docs.python.org/library/functions.html#eval">eval</a> function so that all Python built-ins
                                                like <code>len()</code> and <code>int()</code> are available. In addition to that, all unrecognized
                                                variables are considered to be modules that are automatically imported. It is possible to use all available
                                                Python modules, including the standard modules and the installed third party modules.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-true" class="name">Should Be True</a></td>
                                                        <td>len('${result}') &gt; 3</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#run-keyword-if" class="name">Run Keyword If</a></td>
                                                        <td>os.sep == '/'</td>
                                                        <td>Non-Windows Keyword</td>
                                                    </tr>
                                                    <tr>
                                                        <td>${robot version} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#evaluate" class="name">Evaluate</a></td>
                                                        <td>robot.__version__</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#evaluate" class="name">Evaluate</a> also allows configuring the execution namespace with a custom
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
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-true" class="name">Should Be True</a></td>
                                                        <td>${rc} &lt; 10</td>
                                                        <td>Return code greater than 10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#run-keyword-if" class="name">Run Keyword If</a></td>
                                                        <td>'${status}' == 'PASS'</td>
                                                        <td>Log</td>
                                                        <td>Passed</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#run-keyword-if" class="name">Run Keyword If</a></td>
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
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-true" class="name">Should Be True</a></td>
                                                        <td>$rc &lt; 10</td>
                                                        <td>Return code greater than 10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#run-keyword-if" class="name">Run Keyword If</a></td>
                                                        <td>$status == 'PASS'</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#log" class="name">Log</a></td>
                                                        <td>Passed</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#run-keyword-if" class="name">Run Keyword If</a></td>
                                                        <td>'FAIL' in $output</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#log" class="name">Log</a></td>
                                                        <td>Output contains FAIL</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-true" class="name">Should Be True</a></td>
                                                        <td>len($result) &gt; 1 and $result[1] == 'OK'</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-true" class="name">Should Be True</a></td>
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
                                            <h4 id="Boolean arguments">Boolean arguments</h4>
                                            <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given
                                                as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
                                                <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Keywords
                                                verifying something that allow dropping actual and expected values from the possible error message also
                                                consider string <code>no values</code> to be false. Other strings are considered true unless the keyword
                                                documentation explicitly states otherwise, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                                            </p>
                                            <p>True examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=True</td>
                                                        <td># Strings are generally true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=yes</td>
                                                        <td># Same as the above.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=${TRUE}</td>
                                                        <td># Python <code>True</code> is true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
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
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=False</td>
                                                        <td># String <code>false</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=no</td>
                                                        <td># Also string <code>no</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=${EMPTY}</td>
                                                        <td># Empty string is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=${FALSE}</td>
                                                        <td># Python <code>False</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
                                                        <td>${x}</td>
                                                        <td>${y}</td>
                                                        <td>Custom error</td>
                                                        <td>values=no values</td>
                                                        <td># <code>no values</code> works with <code>values</code> argument</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h4 id="Pattern matching">Pattern matching</h4>
                                            <p>Many keywords accepts arguments as either glob or regular expression patterns.</p>
                                            <h3 id="Glob patterns">Glob patterns</h3>
                                            <p>Some keywords, for example <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-match" class="name">Should Match</a>, support so called <a href="http://en.wikipedia.org/wiki/Glob_(programming)">glob patterns</a> where:</p>
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
                                            <p>Some keywords, for example <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-match-regexp" class="name">Should Match Regexp</a>, support
                                                <a href="http://en.wikipedia.org/wiki/Regular_expression">regular expressions</a> that are more powerful but
                                                also more complicated that glob patterns. The regular expression support is implemented using Python's <a href="http://docs.python.org/library/re.html">re module</a> and its documentation should be consulted
                                                for more information about the syntax.
                                            </p>
                                            <p>Because the backslash character (<code>\</code>) is an escape character in Autosphere test data,
                                                possible backslash characters in regular expressions need to be escaped with another backslash like
                                                <code>\\d\\w+</code>. Strings that may contain special characters but should be handled as literal strings,
                                                can be escaped with the <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#regexp-escape" class="name">Regexp Escape</a> keyword.
                                            </p>
                                            <h4 id="Multiline string comparison">Multiline string comparison</h4>
                                            <p><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal-as-strings" class="name">Should Be Equal As Strings</a> report the
                                                failures using <a href="http://en.wikipedia.org/wiki/Diff_utility#Unified_format">unified diff format</a> if
                                                both strings have more than two lines.</p>
                                            <p>Example:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${first} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#catenate" class="name">Catenate</a></td>
                                                        <td>SEPARATOR=\n</td>
                                                        <td>Not in second</td>
                                                        <td>Same</td>
                                                        <td>Differs</td>
                                                        <td>Same</td>
                                                    </tr>
                                                    <tr>
                                                        <td>${second} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#catenate" class="name">Catenate</a></td>
                                                        <td>SEPARATOR=\n</td>
                                                        <td>Same</td>
                                                        <td>Differs2</td>
                                                        <td>Same</td>
                                                        <td>Not in first</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a></td>
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
                                            <h4 id="String representations">String representations</h4>
                                            <p>Several keywords log values explicitly (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#log" class="name">Log</a>) or implicitly (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a> when there are failures). By default
                                                keywords log values using "human readable" string representation, which means that strings like
                                                <code>Hello</code> and numbers like <code>42</code> are logged as-is. Most of the time this is the desired
                                                behavior, but there are some problems as well:
                                            </p>
                                            <ul>
                                                <li>It is not possible to see difference between different objects that have same string representation like
                                                    string <code>42</code> and integer <code>42</code>. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should
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
                                                    messages like <code>a != а</code> are not very helpful.
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>Some Unicode characters can be represented using <a href="https://en.wikipedia.org/wiki/Unicode_equivalence">different forms</a>. For example,
                                                    <code>ä</code> can be represented either as a single code point <code>\u00e4</code> or using two code
                                                    points <code>\u0061</code> and <code>\u0308</code> combined together. Such forms are considered
                                                    canonically equivalent, but strings containing them are not considered equal when compared in Python.
                                                    Error messages like <code>ä != ä</code> are not that helpful either.
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>Containers such as lists and dictionaries are formatted into a single line making it hard to see
                                                    individual items they contain.</li>
                                            </ul>
                                            <p>To overcome the above problems, some keywords such as <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#log" class="name">Log</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/builtin/keywords#should-be-equal" class="name">Should Be Equal</a> have an optional <code>formatter</code>
                                                argument that can be used to configure the string representation. The supported values are <code>str</code>
                                                (default), <code>repr</code>, and <code>ascii</code> that work similarly as <a href="https://docs.python.org/library/functions.html">Python built-in functions</a> with same names.
                                                More detailed semantics are explained below.</p>

                                            <h3 id="str">str</h3>
                                            <p>Use the "human readable" string representation. Equivalent to using <code>str()</code> in Python 3 and
                                                <code>unicode()</code> in Python 2. This is the default.
                                            </p>
                                            <h3 id="repr">repr</h3>
                                            <p>Use the "machine readable" string representation. Similar to using <code>repr()</code> in Python, which means
                                                that strings like <code>Hello</code> are logged like <code>'Hello'</code>, newlines and non-printable
                                                characters are escaped like <code>\n</code> and <code>\x00</code>, and so on. Non-ASCII characters are shown
                                                as-is like <code>ä</code> in Python 3 and in escaped format like <code>\xe4</code> in Python 2. Use
                                                <code>ascii</code> to always get the escaped format.
                                            </p>
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
                                                    but are not equal. This is how <code>repr()</code> works in Python 2.
                                                </li>
                                                <li>On Python 2 just uses the standard <code>repr()</code> meaning that Unicode strings get the
                                                    <code>u</code> prefix and no <code>b</code> prefix is added to byte strings.
                                                </li>
                                                <li>Containers are not pretty-printed.</li>
                                            </ul>
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
                                                        <div class="keyword" id="call-method">
                                                            <h2><a href="#call-method">Call Method</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Calls the named method of the given object with the provided arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>method_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The possible return value from the method is returned and can be assigned to a variable. Keyword fails both if the object does not have a method with the given name or if executing the method raises an exception.</p>
                                                                <p>Possible equal signs in arguments must be escaped with a backslash like <code>\=</code>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Call Method</td>
                                                                        <td>${hashtable}</td>
                                                                        <td>put</td>
                                                                        <td>myname</td>
                                                                        <td>myvalue</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${isempty} =</td>
                                                                        <td>Call Method</td>
                                                                        <td>${hashtable}</td>
                                                                        <td>isEmpty</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Not Be True</td>
                                                                        <td>${isempty}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${value} =</td>
                                                                        <td>Call Method</td>
                                                                        <td>${hashtable}</td>
                                                                        <td>get</td>
                                                                        <td>myname</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${value}</td>
                                                                        <td>myvalue</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Call Method</td>
                                                                        <td>${object}</td>
                                                                        <td>kwargs</td>
                                                                        <td>name=value</td>
                                                                        <td>foo=bar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Call Method</td>
                                                                        <td>${object}</td>
                                                                        <td>positional</td>
                                                                        <td>escaped\=equals</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="catenate">
                                                            <h2><a href="#catenate">Catenate</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Catenates the given items together and returns the resulted string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*items</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>By default, items are catenated with spaces, but if the first item contains the string
                                                                    <code>SEPARATOR=&lt;sep&gt;</code>, the separator <code>&lt;sep&gt;</code> is used instead. Items are converted into strings when necessary.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${str1} =</td>
                                                                        <td>Catenate</td>
                                                                        <td>Hello</td>
                                                                        <td>world</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${str2} =</td>
                                                                        <td>Catenate</td>
                                                                        <td>SEPARATOR=---</td>
                                                                        <td>Hello</td>
                                                                        <td>world</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${str3} =</td>
                                                                        <td>Catenate</td>
                                                                        <td>SEPARATOR=</td>
                                                                        <td>Hello</td>
                                                                        <td>world</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <pre>${str1} = 'Hello world'
${str2} = 'Hello---world'
${str3} = 'Helloworld'
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="comment">
                                                            <h2><a href="#comment">Comment</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Displays the given messages in the log file as keyword arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*messages</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword does nothing with the arguments it receives, but as they are visible in the log, this keyword can be used to display simple messages. Given arguments are ignored so thoroughly that they can even
                                                                    contain non-existing variables. If you are interested about variable values, you can use the <a href="#Log" class="name">Log</a> or <a href="#Log%20Many" class="name">Log
                                                                        Many</a> keywords.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="continue-for-loop">
                                                            <h2><a href="#continue-for-loop">Continue For Loop</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Skips the current for loop iteration and continues from the next.</p>


                                                                <p>Skips the remaining keywords in the current for loop iteration and continues from the next one. Can be used directly in a for loop or in a keyword that the loop uses.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>FOR</td>
                                                                        <td>${var}</td>
                                                                        <td>IN</td>
                                                                        <td>@{VALUES}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Run Keyword If</td>
                                                                        <td>'${var}' == 'CONTINUE'</td>
                                                                        <td>Continue For Loop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Do Something</td>
                                                                        <td>${var}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>END</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Continue%20For%20Loop%20If" class="name">Continue For Loop If</a> to conditionally continue a for loop without using <a href="#Run%20Keyword%20If" class="name">Run
                                                                        Keyword If</a> or other wrapper keywords.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="continue-for-loop-if">
                                                            <h2><a href="#continue-for-loop-if">Continue For Loop If</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Skips the current for loop iteration if the ``condition`` is true.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Skips the current for loop iteration if the <code>condition</code> is true.</p>
                                                                <p>A wrapper for <a href="#continue-for-loop" class="name">Continue For Loop</a> to continue a for loop based on the given condition. The condition is evaluated using the same semantics as with <a href="#Should%20Be%20True" class="name">Should Be True</a> keyword.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>FOR</td>
                                                                        <td>${var}</td>
                                                                        <td>IN</td>
                                                                        <td>@{VALUES}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Continue For Loop If</td>
                                                                        <td>'${var}' == 'CONTINUE'</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Do Something</td>
                                                                        <td>${var}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>END</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-binary">
                                                            <h2><a href="#convert-to-binary">Convert To Binary</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given item to a binary string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>prefix</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>length</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>item</code>, with an optional <code>base</code>, is first converted to an integer using <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a> internally. After that it is converted
                                                                    to a binary number (base 2) represented as a string such as
                                                                    <code>1011</code>.
                                                                </p>
                                                                <p>The returned value can contain an optional <code>prefix</code> and can be required to be of minimum <code>length</code> (excluding the prefix and a possible minus sign). If the value is initially shorter than
                                                                    the required length, it is padded with zeros.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Binary</td>
                                                                        <td>10</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># Result is 1010</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Binary</td>
                                                                        <td>F</td>
                                                                        <td>base=16</td>
                                                                        <td>prefix=0b</td>
                                                                        <td># Result is 0b1111</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Binary</td>
                                                                        <td>-2</td>
                                                                        <td>prefix=B</td>
                                                                        <td>length=4</td>
                                                                        <td># Result is -B0010</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a>, <a href="#Convert%20To%20Octal" class="name">Convert To Octal</a> and <a href="#Convert%20To%20Hex" class="name">Convert To Hex</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-boolean">
                                                            <h2><a href="#convert-to-boolean">Convert To Boolean</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given item to Boolean true or false.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Handles strings <code>True</code> and <code>False</code> (case-insensitive) as expected, otherwise returns item's <a href="http://docs.python.org/library/stdtypes.html#truth">truth
                                                                        value</a> using Python's <code>bool()</code> method.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-bytes">
                                                            <h2><a href="#convert-to-bytes">Convert To Bytes</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given ``input`` to bytes according to the ``input_type``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>input</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>input_type</td>
                                                                        <td></td>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Converts the given <code>input</code> to bytes according to the <code>input_type</code>.</p>
                                                                <p>Valid input types are listed below:</p>
                                                                <ul>
                                                                    <li><code>text:</code> Converts text to bytes character by character. All characters with ordinal below 256 can be used and are converted to bytes with same values. Many characters are easiest to represent using
                                                                        escapes like <code>\x00</code> or <code>\xff</code>. Supports both Unicode strings and bytes.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li><code>int:</code> Converts integers separated by spaces to bytes. Similarly as with <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a>, it is possible to use binary, octal, or hex values
                                                                        by prefixing the values with <code>0b</code>, <code>0o</code>, or
                                                                        <code>0x</code>, respectively.
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li><code>hex:</code> Converts hexadecimal values to bytes. Single byte is always two characters long (e.g. <code>01</code> or <code>FF</code>). Spaces are ignored and can be used freely as a visual separator.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li><code>bin:</code> Converts binary values to bytes. Single byte is always eight characters long (e.g. <code>00001010</code>). Spaces are ignored and can be used freely as a visual separator.
                                                                    </li>
                                                                </ul>
                                                                <p>In addition to giving the input as a string, it is possible to use lists or other iterables containing individual characters or numbers. In that case numbers do not need to be padded to certain length and they
                                                                    cannot contain extra spaces.</p>
                                                                <p>Examples (last column shows returned bytes):</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>hyvä</td>
                                                                        <td></td>
                                                                        <td># hyv\xe4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>\xff\x07</td>
                                                                        <td></td>
                                                                        <td># \xff\x07</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>82 70</td>
                                                                        <td>int</td>
                                                                        <td># RF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>0b10 0x10</td>
                                                                        <td>int</td>
                                                                        <td># \x02\x10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>ff 00 07</td>
                                                                        <td>hex</td>
                                                                        <td># \xff\x00\x07</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>5246212121</td>
                                                                        <td>hex</td>
                                                                        <td># RF!!!</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>0000 1000</td>
                                                                        <td>bin</td>
                                                                        <td># \x08</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${input} =</td>
                                                                        <td>Create List</td>
                                                                        <td>1</td>
                                                                        <td>2</td>
                                                                        <td>12</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>${input}</td>
                                                                        <td>int</td>
                                                                        <td># \x01\x02\x0c</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bytes} =</td>
                                                                        <td>Convert To Bytes</td>
                                                                        <td>${input}</td>
                                                                        <td>hex</td>
                                                                        <td># \x01\x02\x12</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use Encode String To Bytes in <code>String</code> library if you need to convert text to bytes using a certain encoding.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-hex">
                                                            <h2><a href="#convert-to-hex">Convert To Hex</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given item to a hexadecimal string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>prefix</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>length</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>lowercase</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>item</code>, with an optional <code>base</code>, is first converted to an integer using <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a> internally. After that it is converted
                                                                    to a hexadecimal number (base 16) represented as a string such as
                                                                    <code>FF0A</code>.
                                                                </p>
                                                                <p>The returned value can contain an optional <code>prefix</code> and can be required to be of minimum <code>length</code> (excluding the prefix and a possible minus sign). If the value is initially shorter than
                                                                    the required length, it is padded with zeros.</p>
                                                                <p>By default the value is returned as an upper case string, but the <code>lowercase</code> argument a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) turns the value (but not
                                                                    the given prefix) to lower case.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Hex</td>
                                                                        <td>255</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># Result is FF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Hex</td>
                                                                        <td>-10</td>
                                                                        <td>prefix=0x</td>
                                                                        <td>length=2</td>
                                                                        <td># Result is -0x0A</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Hex</td>
                                                                        <td>255</td>
                                                                        <td>prefix=X</td>
                                                                        <td>lowercase=yes</td>
                                                                        <td># Result is Xff</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a>, <a href="#Convert%20To%20Binary" class="name">Convert To Binary</a> and <a href="#Convert%20To%20Octal" class="name">Convert To Octal</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-integer">
                                                            <h2><a href="#convert-to-integer">Convert To Integer</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given item to an integer number.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the given item is a string, it is by default expected to be an integer in base 10. There are two ways to convert from other bases:</p>
                                                                <ul>
                                                                    <li>Give base explicitly to the keyword as <code>base</code> argument.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li>Prefix the given string with the base so that <code>0b</code> means binary (base 2),
                                                                        <code>0o</code> means octal (base 8), and <code>0x</code> means hex (base 16). The prefix is considered only when <code>base</code> argument is not given and may itself be prefixed with a plus or minus
                                                                        sign.
                                                                    </li>
                                                                </ul>
                                                                <p>The syntax is case-insensitive and possible spaces are ignored.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Integer</td>
                                                                        <td>100</td>
                                                                        <td></td>
                                                                        <td># Result is 100</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Integer</td>
                                                                        <td>FF AA</td>
                                                                        <td>16</td>
                                                                        <td># Result is 65450</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Integer</td>
                                                                        <td>100</td>
                                                                        <td>8</td>
                                                                        <td># Result is 64</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Integer</td>
                                                                        <td>-100</td>
                                                                        <td>2</td>
                                                                        <td># Result is -4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Integer</td>
                                                                        <td>0b100</td>
                                                                        <td></td>
                                                                        <td># Result is 4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Integer</td>
                                                                        <td>-0x100</td>
                                                                        <td></td>
                                                                        <td># Result is -256</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Convert%20To%20Number" class="name">Convert To Number</a>, <a href="#Convert%20To%20Binary" class="name">Convert To Binary</a>, <a href="#Convert%20To%20Octal" class="name">Convert To Octal</a>,
                                                                    <a href="#Convert%20To%20Hex" class="name">Convert To Hex</a>, and <a href="#Convert%20To%20Bytes" class="name">Convert To
                                                                        Bytes</a>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-number">
                                                            <h2><a href="#convert-to-number">Convert To Number</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given item to a floating point number.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>precision</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the optional <code>precision</code> is positive or zero, the returned number is rounded to that number of decimal digits. Negative precision means that the number is rounded to the closest multiple of 10
                                                                    to the power of the absolute precision. If a number is equally close to a certain precision, it is always rounded away from zero.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Number</td>
                                                                        <td>42.512</td>
                                                                        <td></td>
                                                                        <td># Result is 42.512</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Number</td>
                                                                        <td>42.512</td>
                                                                        <td>1</td>
                                                                        <td># Result is 42.5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Number</td>
                                                                        <td>42.512</td>
                                                                        <td>0</td>
                                                                        <td># Result is 43.0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Number</td>
                                                                        <td>42.512</td>
                                                                        <td>-1</td>
                                                                        <td># Result is 40.0</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Notice that machines generally cannot store floating point numbers accurately. This may cause surprises with these numbers in general and also when they are rounded. For more information see, for example, these
                                                                    resources:
                                                                </p>
                                                                <ul>
                                                                    <li><a href="http://docs.python.org/tutorial/floatingpoint.html">http://docs.python.org/tutorial/floatingpoint.html</a>
                                                                    </li>
                                                                    <li><a href="http://randomascii.wordpress.com/2012/02/25/comparing-floating-point-numbers-2012-edition">http://randomascii.wordpress.com/2012/02/25/comparing-floating-point-numbers-2012-edition</a>
                                                                    </li>
                                                                </ul>
                                                                <p>If you want to avoid possible problems with floating point numbers, you can implement custom keywords using Python's <a href="http://docs.python.org/library/decimal.html">decimal</a> or <a href="http://docs.python.org/library/fractions.html">fractions</a> modules.</p>
                                                                <p>If you need an integer number, use <a href="#Convert%20To%20Integer" class="name">Convert To
                                                                        Integer</a> instead.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-octal">
                                                            <h2><a href="#convert-to-octal">Convert To Octal</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given item to an octal string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>prefix</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>length</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>item</code>, with an optional <code>base</code>, is first converted to an integer using <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a> internally. After that it is converted
                                                                    to an octal number (base 8) represented as a string such as
                                                                    <code>775</code>.
                                                                </p>
                                                                <p>The returned value can contain an optional <code>prefix</code> and can be required to be of minimum <code>length</code> (excluding the prefix and a possible minus sign). If the value is initially shorter than
                                                                    the required length, it is padded with zeros.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Octal</td>
                                                                        <td>10</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># Result is 12</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Octal</td>
                                                                        <td>-F</td>
                                                                        <td>base=16</td>
                                                                        <td>prefix=0</td>
                                                                        <td># Result is -017</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Convert To Octal</td>
                                                                        <td>16</td>
                                                                        <td>prefix=oct</td>
                                                                        <td>length=4</td>
                                                                        <td># Result is oct0020</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a>, <a href="#Convert%20To%20Binary" class="name">Convert To Binary</a> and <a href="#Convert%20To%20Hex" class="name">Convert To Hex</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-to-string">
                                                            <h2><a href="#convert-to-string">Convert To String</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts the given item to a Unicode string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Strings are also NFC normalized.</p>
                                                                <p>Use Encode String To Bytes and Decode Bytes To String keywords in <code>String</code> library if you need to convert between Unicode and byte strings using different encodings. Use <a href="#Convert%20To%20Bytes" class="name">Convert To Bytes</a> if you just want to create byte strings.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-dictionary">
                                                            <h2><a href="#create-dictionary">Create Dictionary</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates and returns a dictionary based on the given ``items``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*items</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Creates and returns a dictionary based on the given <code>items</code>.</p>
                                                                <p>Items are typically given using the <code>key=value</code> syntax same way as
                                                                    <code>&amp;{dictionary}</code> variables are created in the Variable table. Both keys and values can contain variables, and possible equal sign in key can be escaped with a backslash like
                                                                    <code>escaped\=key=value</code>. It is also possible to get items from existing dictionaries by simply using them like <code>&amp;{dict}</code>.
                                                                </p>
                                                                <p>Alternatively items can be specified so that keys and values are given separately. This and the
                                                                    <code>key=value</code> syntax can even be combined, but separately given items must be first. If same key is used multiple times, the last value has precedence.
                                                                </p>
                                                                <p>The returned dictionary is ordered, and values with strings as keys can also be accessed using a convenient dot-access syntax like <code>${dict.key}</code>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>&amp;{dict} =</td>
                                                                        <td>Create Dictionary</td>
                                                                        <td>key=value</td>
                                                                        <td>foo=bar</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># key=value syntax</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${dict} == {'key': 'value', 'foo': 'bar'}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&amp;{dict2} =</td>
                                                                        <td>Create Dictionary</td>
                                                                        <td>key</td>
                                                                        <td>value</td>
                                                                        <td>foo</td>
                                                                        <td>bar</td>
                                                                        <td># separate key and value</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${dict}</td>
                                                                        <td>${dict2}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&amp;{dict} =</td>
                                                                        <td>Create Dictionary</td>
                                                                        <td>${1}=${2}</td>
                                                                        <td>&amp;{dict}</td>
                                                                        <td>foo=new</td>
                                                                        <td></td>
                                                                        <td># using variables</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${dict} == {1: 2, 'key': 'value', 'foo': 'new'}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${dict.key}</td>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># dot-access</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-list">
                                                            <h2><a href="#create-list">Create List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns a list containing given items.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*items</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The returned list can be assigned both to <code>${scalar}</code> and <code>@{list}</code> variables.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>@{list} =</td>
                                                                        <td>Create List</td>
                                                                        <td>a</td>
                                                                        <td>b</td>
                                                                        <td>c</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${scalar} =</td>
                                                                        <td>Create List</td>
                                                                        <td>a</td>
                                                                        <td>b</td>
                                                                        <td>c</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${ints} =</td>
                                                                        <td>Create List</td>
                                                                        <td>${1}</td>
                                                                        <td>${2}</td>
                                                                        <td>${3}</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="evaluate">
                                                            <h2><a href="#evaluate">Evaluate</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Evaluates the given expression in Python and returns the result.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expression</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modules</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>namespace</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>expression</code> is evaluated in Python as explained in the <a href="#Evaluating%20expressions" class="name">Evaluating expressions</a> section.</p>
                                                                <p><code>modules</code> argument can be used to specify a comma separated list of Python modules to be imported and added to the evaluation namespace.</p>
                                                                <p><code>namespace</code> argument can be used to pass a custom evaluation namespace as a dictionary. Possible <code>modules</code> are added to this namespace.</p>
                                                                <p>
                                                                    <code>modules</code> argument is still needed with nested modules like
                                                                    <code>rootmod.submod</code> that are implemented so that the root module does not automatically import sub modules. This is illustrated by the <code>selenium.webdriver</code> example below.
                                                                </p>
                                                                <p>Variables used like <code>${variable}</code> are replaced in the expression before evaluation. Variables are also available in the evaluation namespace and can be accessed using the special
                                                                    <code>$variable</code> syntax as explained in the <a href="#Evaluating%20expressions" class="name">Evaluating expressions</a> section.
                                                                </p>
                                                                <p>Examples (expecting <code>${result}</code> is number 3.14):</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${status} =</td>
                                                                        <td>Evaluate</td>
                                                                        <td>0 &lt; ${result} &lt; 10</td>
                                                                        <td># Would also work with string '3.14'</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${status} =</td>
                                                                        <td>Evaluate</td>
                                                                        <td>0 &lt; $result &lt; 10</td>
                                                                        <td># Using variable itself, not string representation</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${random} =</td>
                                                                        <td>Evaluate</td>
                                                                        <td>random.randint(0, sys.maxsize)</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${options} =</td>
                                                                        <td>Evaluate</td>
                                                                        <td>selenium.webdriver.ChromeOptions()</td>
                                                                        <td>modules=selenium.webdriver</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${ns} =</td>
                                                                        <td>Create Dictionary</td>
                                                                        <td>x=${4}</td>
                                                                        <td>y=${2}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Evaluate</td>
                                                                        <td>x*10 + y</td>
                                                                        <td>namespace=${ns}</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <pre>${status} = True
${random} = &lt;random integer&gt;
${options} = ChromeOptions instance
${result} = 42
</code></pre>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="exit-for-loop">
                                                            <h2><a href="#exit-for-loop">Exit For Loop</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Stops executing the enclosing for loop.</p>


                                                                <p>Exits the enclosing for loop and continues execution after it. Can be used directly in a for loop or in a keyword that the loop uses.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>FOR</td>
                                                                        <td>${var}</td>
                                                                        <td>IN</td>
                                                                        <td>@{VALUES}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Run Keyword If</td>
                                                                        <td>'${var}' == 'EXIT'</td>
                                                                        <td>Exit For Loop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Do Something</td>
                                                                        <td>${var}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>END</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Exit%20For%20Loop%20If" class="name">Exit For Loop If</a> to conditionally exit a for loop without using <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a> or other wrapper keywords.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="exit-for-loop-if">
                                                            <h2><a href="#exit-for-loop-if">Exit For Loop If</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Stops executing the enclosing for loop if the ``condition`` is true.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Stops executing the enclosing for loop if the <code>condition</code> is true.</p>
                                                                <p>A wrapper for <a href="#Exit%20For%20Loop" class="name">Exit For Loop</a> to exit a for loop based on the given condition. The condition is evaluated using the same semantics as with <a href="#Should%20Be%20True" class="name">Should Be True</a> keyword.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>FOR</td>
                                                                        <td>${var}</td>
                                                                        <td>IN</td>
                                                                        <td>@{VALUES}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Exit For Loop If</td>
                                                                        <td>'${var}' == 'EXIT'</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Do Something</td>
                                                                        <td>${var}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>END</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="fail">
                                                            <h2><a href="#fail">Fail</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails the test with the given message and optionally alters its tags.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*tags</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The error message is specified using the <code>msg</code> argument. It is possible to use HTML in the given error message, similarly as with any other keyword accepting an error message, by prefixing the error
                                                                    with <code>*HTML*</code>.</p>
                                                                <p>It is possible to modify tags of the current test case by passing tags after the message. Tags starting with a hyphen (e.g. <code>-regression</code>) are removed and others added. Tags are modified using
                                                                    <a href="#Set%20Tags" class="name">Set Tags</a> and <a href="#Remove%20Tags" class="name">Remove Tags</a> internally, and the semantics setting and removing them are the same as with these keywords.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Fail</td>
                                                                        <td>Test not ready</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># Fails with the given message.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fail</td>
                                                                        <td>*HTML*&lt;b&gt;Test not ready&lt;/b&gt;</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># Fails using HTML in the message.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fail</td>
                                                                        <td>Test not ready</td>
                                                                        <td>not-ready</td>
                                                                        <td></td>
                                                                        <td># Fails and adds 'not-ready' tag.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fail</td>
                                                                        <td>OS not supported</td>
                                                                        <td>-regression</td>
                                                                        <td></td>
                                                                        <td># Removes tag 'regression'.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fail</td>
                                                                        <td>My message</td>
                                                                        <td>tag</td>
                                                                        <td>-t*</td>
                                                                        <td># Removes all tags starting with 't' except the newly added 'tag'.</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Fatal%20Error" class="name">Fatal Error</a> if you need to stop the whole test execution.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="fatal-error">
                                                            <h2><a href="#fatal-error">Fatal Error</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Stops the whole test execution.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The test or suite where this keyword is used fails with the provided message, and subsequent tests fail with a canned message. Possible teardowns will nevertheless be executed.</p>
                                                                <p>See <a href="#Fail" class="name">Fail</a> if you only want to stop one test case unconditionally.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-count">
                                                            <h2><a href="#get-count">Get Count</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs how many times ``item`` is found from ``container``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>container</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns and logs how many times <code>item</code> is found from <code>container</code>.</p>
                                                                <p>This keyword works with Python strings and lists and all objects that either have
                                                                    <code>count</code> method or can be converted to Python lists.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${count} =</td>
                                                                        <td>Get Count</td>
                                                                        <td>${some item}</td>
                                                                        <td>interesting value</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>5 &lt; ${count} &lt; 10</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-length">
                                                            <h2><a href="#get-length">Get Length</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs the length of the given item as an integer.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The item can be anything that has a length, for example, a string, a list, or a mapping. The keyword first tries to get the length with the Python function <code>len</code>, which calls the item's <code>__len__</code> method internally. If that fails, the keyword tries to call the item's possible <code>length</code> and <code>size</code> methods directly. The final attempt is trying to get the value of the item's <code>length</code> attribute. If all these attempts are unsuccessful, the keyword fails.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${length} =</td>
                                                                        <td>Get Length</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>${length}</td>
                                                                        <td>13</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{list} =</td>
                                                                        <td>Create List</td>
                                                                        <td>Hello,</td>
                                                                        <td>world!</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${length} =</td>
                                                                        <td>Get Length</td>
                                                                        <td>${list}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>${length}</td>
                                                                        <td>2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Length%20Should%20Be" class="name">Length Should Be</a>, <a href="#Should%20Be%20Empty" class="name">Should Be Empty</a> and <a href="#Should%20Not%20Be%20Empty" class="name">Should Not Be Empty</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-library-instance">
                                                            <h2><a href="#get-library-instance">Get Library Instance</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the currently active instance of the specified test library.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>all</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword makes it easy for test libraries to interact with other test libraries that have state. This is illustrated by the Python example below:</p>
                                                                <pre>from robot.libraries.BuiltIn import BuiltIn

def title_should_start_with(expected):
    seleniumlib = BuiltIn().get_library_instance('SeleniumLibrary')
    title = seleniumlib.get_title()
    if not title.startswith(expected):
        raise AssertionError("Title '%s' did not start with '%s'"
                             % (title, expected))
</code></pre>
                                                                <p>It is also possible to use this keyword in the test data and pass the returned library instance to another keyword. If a library is imported with a custom name, the <code>name</code> used to get the instance
                                                                    must be that name and not the original library name.</p>
                                                                <p>If the optional argument <code>all</code> is given a true value, then a dictionary mapping all library names to instances will be returned.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>&amp;{all libs} =</td>
                                                                        <td>Get library instance</td>
                                                                        <td>all=True</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-time">
                                                            <h2><a href="#get-time">Get Time</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the given time in the requested format.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>format</td>
                                                                        <td></td>
                                                                        <td>timestamp</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time_</td>
                                                                        <td></td>
                                                                        <td>NOW</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><b>NOTE:</b> DateTime library contains much more flexible keywords for getting the current date and time and for date and time handling in general.</p>
                                                                <p>How time is returned is determined based on the given <code>format</code> string as follows. Note that all checks are case-insensitive.</p>
                                                                <p>1) If <code>format</code> contains the word <code>epoch</code>, the time is returned in seconds after the UNIX epoch (1970-01-01 00:00:00 UTC). The return value is always an integer.</p>
                                                                <p>2) If <code>format</code> contains any of the words <code>year</code>, <code>month</code>,
                                                                    <code>day</code>, <code>hour</code>, <code>min</code>, or <code>sec</code>, only the selected parts are returned. The order of the returned parts is always the one in the previous sentence and the order
                                                                    of words in <code>format</code> is not significant. The parts are returned as zero-padded strings (e.g. May -&gt; <code>05</code>).
                                                                </p>
                                                                <p>3) Otherwise (and by default) the time is returned as a timestamp string in the format
                                                                    <code>2006-02-24 15:08:31</code>.
                                                                </p>
                                                                <p>By default this keyword returns the current local time, but that can be altered using
                                                                    <code>time</code> argument as explained below. Note that all checks involving strings are case-insensitive.
                                                                </p>
                                                                <p>1) If <code>time</code> is a number, or a string that can be converted to a number, it is interpreted as seconds since the UNIX epoch. This documentation was originally written about 1177654467 seconds after
                                                                    the epoch.</p>
                                                                <p>2) If <code>time</code> is a timestamp, that time will be used. Valid timestamp formats are
                                                                    <code>YYYY-MM-DD hh:mm:ss</code> and <code>YYYYMMDD hhmmss</code>.
                                                                </p>
                                                                <p>3) If <code>time</code> is equal to <code>NOW</code> (default), the current local time is used.
                                                                </p>
                                                                <p>4) If <code>time</code> is equal to <code>UTC</code>, the current time in <a href="http://en.wikipedia.org/wiki/Coordinated_Universal_Time">UTC</a> is used.</p>
                                                                <p>5) If <code>time</code> is in the format like <code>NOW - 1 day</code> or
                                                                    <code>UTC + 1 hour 30 min</code>, the current local/UTC time plus/minus the time specified with the time string is used. The time string format is described in an appendix of Autosphere User Guide.
                                                                </p>
                                                                <p>Examples (expecting the current local time is 2006-03-29 15:06:21):</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Get Time</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${secs} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>epoch</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${year} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>return year</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${yyyy}</td>
                                                                        <td>${mm}</td>
                                                                        <td>${dd} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>year,month,day</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{time} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>year month day hour min sec</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${y}</td>
                                                                        <td>${s} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>seconds and year</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <pre>${time} = '2006-03-29 15:06:21'
${secs} = 1143637581
${year} = '2006'
${yyyy} = '2006', ${mm} = '03', ${dd} = '29'
@{time} = ['2006', '03', '29', '15', '06', '21']
${y} = '2006'
${s} = '21'
</code></pre>
                                                                <p>Examples (expecting the current local time is 2006-03-29 15:06:21 and UTC time is 2006-03-29 12:06:21):
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Get Time</td>
                                                                        <td></td>
                                                                        <td>1177654467</td>
                                                                        <td># Time given as epoch seconds</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${secs} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>sec</td>
                                                                        <td>2007-04-27 09:14:27</td>
                                                                        <td># Time given as a timestamp</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${year} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>year</td>
                                                                        <td>NOW</td>
                                                                        <td># The local time of execution</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{time} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>hour min sec</td>
                                                                        <td>NOW + 1h 2min 3s</td>
                                                                        <td># 1h 2min 3s added to the local time</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{utc} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>hour min sec</td>
                                                                        <td>UTC</td>
                                                                        <td># The UTC time of execution</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${hour} =</td>
                                                                        <td>Get Time</td>
                                                                        <td>hour</td>
                                                                        <td>UTC - 1 hour</td>
                                                                        <td># 1h subtracted from the UTC time</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <pre>${time} = '2007-04-27 09:14:27'
${secs} = 27
${year} = '2006'
@{time} = ['16', '08', '24']
@{utc} = ['12', '06', '21']
${hour} = '11'
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-variable-value">
                                                            <h2><a href="#get-variable-value">Get Variable Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns variable value or ``default`` if the variable does not exist.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns variable value or <code>default</code> if the variable does not exist.</p>
                                                                <p>The name of the variable can be given either as a normal variable name (e.g.
                                                                    <code>${NAME}</code>) or in escaped format (e.g. <code>\${NAME}</code>). Notice that the former has some limitations explained in <a href="#Set%20Suite%20Variable" class="name">Set Suite
                                                                        Variable</a>.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${x} =</td>
                                                                        <td>Get Variable Value</td>
                                                                        <td>${a}</td>
                                                                        <td>default</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${y} =</td>
                                                                        <td>Get Variable Value</td>
                                                                        <td>${a}</td>
                                                                        <td>${b}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${z} =</td>
                                                                        <td>Get Variable Value</td>
                                                                        <td>${z}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <pre>${x} gets value of ${a} if ${a} exists and string 'default' otherwise
${y} gets value of ${a} if ${a} exists and value of ${b} otherwise
${z} is set to Python None if it does not exist previously
</code></pre>
                                                                <p>See <a href="#Set%20Variable%20If" class="name">Set Variable If</a> for another keyword to set variables dynamically.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-variables">
                                                            <h2><a href="#get-variables">Get Variables</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns a dictionary containing all variables in the current scope.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>no_decoration</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Variables are returned as a special dictionary that allows accessing variables in space, case, and underscore insensitive manner similarly as accessing variables in the test data. This dictionary supports all
                                                                    same operations as normal Python dictionaries and, for example, Collections library can be used to access or modify it. Modifying the returned dictionary has no effect on the variables available in the current
                                                                    scope.
                                                                </p>
                                                                <p>By default variables are returned with <code>${}</code>, <code>@{}</code> or
                                                                    <code>&amp;{}</code> decoration based on variable types. Giving a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) to the optional argument
                                                                    <code>no_decoration</code> will return the variables without the decoration.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${example_variable} =</td>
                                                                        <td>Set Variable</td>
                                                                        <td>example value</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${variables} =</td>
                                                                        <td>Get Variables</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dictionary Should Contain Key</td>
                                                                        <td>${variables}</td>
                                                                        <td>\${example_variable}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dictionary Should Contain Key</td>
                                                                        <td>${variables}</td>
                                                                        <td>\${ExampleVariable}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set To Dictionary</td>
                                                                        <td>${variables}</td>
                                                                        <td>\${name}</td>
                                                                        <td>value</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Variable Should Not Exist</td>
                                                                        <td>\${name}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${no decoration} =</td>
                                                                        <td>Get Variables</td>
                                                                        <td>no_decoration=Yes</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dictionary Should Contain Key</td>
                                                                        <td>${no decoration}</td>
                                                                        <td>example_variable</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="import-library">
                                                            <h2><a href="#import-library">Import Library</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Imports a library with the given name and optional arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This functionality allows dynamic importing of libraries while tests are running. That may be necessary, if the library itself is dynamic and not yet available when test data is processed. In a normal case,
                                                                    libraries should be imported using the Library setting in the Setting table.
                                                                </p>
                                                                <p>This keyword supports importing libraries both using library names and physical paths. When paths are used, they must be given in absolute format or found from search
                                                                    path. Forward slashes can be used as path separators in all operating systems.</p>
                                                                <p>It is possible to pass arguments to the imported library and also named argument syntax works if the library supports it. <code>WITH NAME</code> syntax can be used to give a custom name to the imported library.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Import Library</td>
                                                                        <td>MyLibrary</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Import Library</td>
                                                                        <td>${CURDIR}/../Library.py</td>
                                                                        <td>arg1</td>
                                                                        <td>named=arg2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Import Library</td>
                                                                        <td>${LIBRARIES}/Lib.java</td>
                                                                        <td>arg</td>
                                                                        <td>WITH NAME</td>
                                                                        <td>JavaLib</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="import-resource">
                                                            <h2><a href="#import-resource">Import Resource</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Imports a resource file with the given path.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Resources imported with this keyword are set into the test suite scope similarly when importing them in the Setting table using the Resource setting.</p>
                                                                <p>The given path must be absolute or found from search
                                                                    path. Forward slashes can be used as path separator regardless the operating system.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Import Resource</td>
                                                                        <td>${CURDIR}/resource.txt</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Import Resource</td>
                                                                        <td>${CURDIR}/../resources/resource.html</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Import Resource</td>
                                                                        <td>found_from_pythonpath.robot</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="import-variables">
                                                            <h2><a href="#import-variables">Import Variables</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Imports a variable file with the given path and optional arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Variables imported with this keyword are set into the test suite scope similarly when importing them in the Setting table using the Variables setting. These variables override possible existing variables with
                                                                    the same names. This functionality can thus be used to import new variables, for example, for each test in a test suite.</p>
                                                                <p>The given path must be absolute or found from search
                                                                    path. Forward slashes can be used as path separator regardless the operating system.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Import Variables</td>
                                                                        <td>${CURDIR}/variables.py</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Import Variables</td>
                                                                        <td>${CURDIR}/../vars/env.py</td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Import Variables</td>
                                                                        <td>file_from_pythonpath.py</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="keyword-should-exist">
                                                            <h2><a href="#keyword-should-exist">Keyword Should Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails unless the given keyword exists in the current scope.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails also if there are more than one keywords with the same name. Works both with the short name (e.g. <code>Log</code>) and the full name (e.g. <code>BuiltIn.Log</code>).</p>
                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                                <p>See also <a href="#Variable%20Should%20Exist" class="name">Variable Should Exist</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="length-should-be">
                                                            <h2><a href="#length-should-be">Length Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the length of the given item is correct.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>length</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The length of the item is got using the <a href="#Get%20Length" class="name">Get Length</a> keyword. The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log">
                                                            <h2><a href="#log">Log</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs the given message with the given level.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>level</td>
                                                                        <td></td>
                                                                        <td>INFO</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>html</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>console</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>repr</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>formatter</td>
                                                                        <td></td>
                                                                        <td>str</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Valid levels are TRACE, DEBUG, INFO (default), HTML, WARN, and ERROR. Messages below the current active log level are ignored. See <a href="#Set%20Log%20Level" class="name">Set Log
                                                                        Level</a> keyword and <code>--loglevel</code> command line option for more details about setting the level.</p>
                                                                <p>Messages logged with the WARN or ERROR levels will be automatically visible also in the console and in the Test Execution Errors section in the log file.</p>
                                                                <p>If the <code>html</code> argument is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the message will be considered HTML and special characters such as <code>&lt;</code> are not escaped. For example, logging
                                                                    <code>&lt;img src="image.png"&gt;</code> creates an image when <code>html</code> is true, but otherwise the message is that exact string. An alternative to using the <code>html</code> argument is using the
                                                                    HTML pseudo log level. It logs the message as HTML using the INFO level.
                                                                </p>
                                                                <p>If the <code>console</code> argument is true, the message will be written to the console where test execution was started from in addition to the log file. This keyword always uses the standard output stream
                                                                    and adds a newline after the written message. Use <a href="#Log%20To%20Console" class="name">Log To Console</a> instead if either of these is undesirable,
                                                                </p>
                                                                <p>The <code>formatter</code> argument controls how to format the string representation of the message. Possible values are <code>str</code> (default), <code>repr</code> and
                                                                    <code>ascii</code>, and they work similarly to Python built-in functions with same names. When using <code>repr</code>, bigger lists, dictionaries and other containers are also pretty-printed so that there
                                                                    is one item per row. For more details see <a href="#String%20representations" class="name">String representations</a>.
                                                                </p>
                                                                <p>The old way to control string representation was using the <code>repr</code> argument, and
                                                                    <code>repr=True</code> is still equivalent to using <code>formatter=repr</code>. The
                                                                    <code>repr</code> argument will be deprecated in the future, though, and using
                                                                    <code>formatter</code> is thus recommended.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># Normal INFO message.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>Warning, world!</td>
                                                                        <td>WARN</td>
                                                                        <td></td>
                                                                        <td># Warning.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>&lt;b&gt;Hello&lt;/b&gt;, world!</td>
                                                                        <td>html=yes</td>
                                                                        <td></td>
                                                                        <td># INFO message as HTML.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>&lt;b&gt;Hello&lt;/b&gt;, world!</td>
                                                                        <td>HTML</td>
                                                                        <td></td>
                                                                        <td># Same as above.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>&lt;b&gt;Hello&lt;/b&gt;, world!</td>
                                                                        <td>DEBUG</td>
                                                                        <td>html=true</td>
                                                                        <td># DEBUG as HTML.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>Hello, console!</td>
                                                                        <td>console=yes</td>
                                                                        <td></td>
                                                                        <td># Log also to the console.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>Null is \x00</td>
                                                                        <td>formatter=repr</td>
                                                                        <td></td>
                                                                        <td># Log <code>'Null is \x00'</code>.</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Log%20Many" class="name">Log Many</a> if you want to log multiple messages in one go, and <a href="#Log%20To%20Console" class="name">Log To Console</a> if you only want to write to the console.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-many">
                                                            <h2><a href="#log-many">Log Many</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs the given messages as separate entries using the INFO level.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*messages</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Supports also logging list and dictionary variable items individually.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Log Many</td>
                                                                        <td>Hello</td>
                                                                        <td>${var}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log Many</td>
                                                                        <td>@{list}</td>
                                                                        <td>&amp;{dict}</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Log" class="name">Log</a> and <a href="#Log%20To%20Console" class="name">Log To
                                                                        Console</a> keywords if you want to use alternative log levels, use HTML, or log to the console.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-to-console">
                                                            <h2><a href="#log-to-console">Log To Console</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs the given message to the console.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>stream</td>
                                                                        <td></td>
                                                                        <td>STDOUT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>no_newline</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>By default uses the standard output stream. Using the standard error stream is possibly by giving the <code>stream</code> argument value <code>STDERR</code> (case-insensitive).</p>
                                                                <p>By default appends a newline to the logged message. This can be disabled by giving the
                                                                    <code>no_newline</code> argument a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Log To Console</td>
                                                                        <td>Hello, console!</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log To Console</td>
                                                                        <td>Hello, stderr!</td>
                                                                        <td>STDERR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log To Console</td>
                                                                        <td>Message starts here and is</td>
                                                                        <td>no_newline=true</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log To Console</td>
                                                                        <td>continued without newline.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword does not log the message to the normal log file. Use <a href="#Log" class="name">Log</a> keyword, possibly with argument <code>console</code>, if that is desired.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-variables">
                                                            <h2><a href="#log-variables">Log Variables</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs all variables in the current scope with given log level.</p>
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
                                                                        <td>INFO</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="no-operation">
                                                            <h2><a href="#no-operation">No Operation</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does absolutely nothing.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pass-execution">
                                                            <h2><a href="#pass-execution">Pass Execution</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Skips rest of the current test, setup, or teardown with PASS status.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*tags</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can be used anywhere in the test data, but the place where used affects the behavior:
                                                                </p>
                                                                <ul>
                                                                    <li>When used in any setup or teardown (suite, test or keyword), passes that setup or teardown. Possible keyword teardowns of the started keywords are executed. Does not affect execution or statuses otherwise.</li>
                                                                    <li>When used in a test outside setup or teardown, passes that particular test case. Possible test and keyword teardowns are executed.</li>
                                                                </ul>
                                                                <p>Possible continuable failures before this keyword is used, as well as failures in executed teardowns, will fail the execution.</p>
                                                                <p>It is mandatory to give a message explaining why execution was passed. By default the message is considered plain text, but starting it with <code>*HTML*</code> allows using HTML formatting.
                                                                </p>
                                                                <p>It is also possible to modify test tags passing tags after the message similarly as with <a href="#Fail" class="name">Fail</a> keyword. Tags starting with a hyphen (e.g.
                                                                    <code>-regression</code>) are removed and others added. Tags are modified using <a href="#Set%20Tags" class="name">Set Tags</a> and <a href="#Remove%20Tags" class="name">Remove
                                                                        Tags</a> internally, and the semantics setting and removing them are the same as with these keywords.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Pass Execution</td>
                                                                        <td>All features available in this version tested.</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Pass Execution</td>
                                                                        <td>Deprecated test.</td>
                                                                        <td>deprecated</td>
                                                                        <td>-regression</td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword is typically wrapped to some other keyword, such as <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a>, to pass based on a condition. The most common case can be handled also with
                                                                    <a href="#Pass%20Execution%20If" class="name">Pass Execution If</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Run Keyword If</td>
                                                                        <td>${rc} &lt; 0</td>
                                                                        <td>Pass Execution</td>
                                                                        <td>Negative values are cool.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Pass Execution If</td>
                                                                        <td>${rc} &lt; 0</td>
                                                                        <td>Negative values are cool.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Passing execution in the middle of a test, setup or teardown should be used with care. In the worst case it leads to tests that skip all the parts that could actually uncover problems in the tested application.
                                                                    In cases where execution cannot continue do to external factors, it is often safer to fail the test case and make it non-critical.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pass-execution-if">
                                                            <h2><a href="#pass-execution-if">Pass Execution If</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Conditionally skips rest of the current test, setup, or teardown with PASS status.
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
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*tags</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>A wrapper for <a href="#Pass%20Execution" class="name">Pass Execution</a> to skip rest of the current test, setup or teardown based the given <code>condition</code>. The condition is evaluated similarly as with
                                                                    <a href="#Should%20Be%20True" class="name">Should Be True</a> keyword, and <code>message</code> and <code>*tags</code> have same semantics as with <a href="#Pass%20Execution" class="name">Pass Execution</a>.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>FOR</td>
                                                                        <td>${var}</td>
                                                                        <td>IN</td>
                                                                        <td>@{VALUES}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Pass Execution If</td>
                                                                        <td>'${var}' == 'EXPECTED'</td>
                                                                        <td>Correct value was found</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Do Something</td>
                                                                        <td>${var}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>END</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="regexp-escape">
                                                            <h2><a href="#regexp-escape">Regexp Escape</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns each argument string escaped for use as a regular expression.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*patterns</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can be used to escape strings to be used with <a href="#Should%20Match%20Regexp" class="name">Should Match Regexp</a> and <a href="#Should%20Not%20Match%20Regexp" class="name">Should Not Match Regexp</a> keywords.</p>
                                                                <p>Escaping is done with Python's <code>re.escape()</code> function.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${escaped} =</td>
                                                                        <td>Regexp Escape</td>
                                                                        <td>${original}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{strings} =</td>
                                                                        <td>Regexp Escape</td>
                                                                        <td>@{strings}</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="reload-library">
                                                            <h2><a href="#reload-library">Reload Library</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Rechecks what keywords the specified library provides.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name_or_instance</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Can be called explicitly in the test data or by a library itself when keywords it provides have changed.
                                                                </p>
                                                                <p>The library can be specified by its name or as the active instance of the library. The latter is especially useful if the library itself calls this keyword as a method.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-tags">
                                                            <h2><a href="#remove-tags">Remove Tags</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes given ``tags`` from the current test or all tests in a suite.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*tags</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Removes given <code>tags</code> from the current test or all tests in a suite.</p>
                                                                <p>Tags can be given exactly or using a pattern with <code>*</code>, <code>?</code> and
                                                                    <code>[chars]</code> acting as wildcards. See the <a href="#Glob%20patterns" class="name">Glob
                                                                        patterns</a> section for more information.
                                                                </p>
                                                                <p>This keyword can affect either one test case or all test cases in a test suite similarly as <a href="#Set%20Tags" class="name">Set Tags</a> keyword.</p>
                                                                <p>The current tags are available as a built-in variable <code>@{TEST TAGS}</code>.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Remove Tags</td>
                                                                        <td>mytag</td>
                                                                        <td>something-*</td>
                                                                        <td>?ython</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Set%20Tags" class="name">Set Tags</a> if you want to add certain tags and <a href="#Fail" class="name">Fail</a> if you want to fail the test case after setting and/or removing tags.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="repeat-keyword">
                                                            <h2><a href="#repeat-keyword">Repeat Keyword</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Executes the specified keyword multiple times.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>repeat</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>name</code> and <code>args</code> define the keyword that is executed similarly as with
                                                                    <a href="#Run%20Keyword" class="name">Run Keyword</a>. <code>repeat</code> specifies how many times (as a count) or how long time (as a timeout) the keyword should be executed.
                                                                </p>
                                                                <p>If <code>repeat</code> is given as count, it specifies how many times the keyword should be executed. <code>repeat</code> can be given as an integer or as a string that can be converted to an integer. If it
                                                                    is a string, it can have postfix <code>times</code> or <code>x</code> (case and space insensitive) to make the expression more explicit.</p>
                                                                <p>If <code>repeat</code> is given as timeout, it must be in Autosphere's time format (e.g.
                                                                    <code>1 minute</code>, <code>2 min 3 s</code>). Using a number alone (e.g. <code>1</code> or
                                                                    <code>1.5</code>) does not work in this context.
                                                                </p>
                                                                <p>If <code>repeat</code> is zero or negative, the keyword is not executed at all. This keyword fails immediately if any of the execution rounds fails.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Repeat Keyword</td>
                                                                        <td>5 times</td>
                                                                        <td>Go to Previous Page</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Repeat Keyword</td>
                                                                        <td>${var}</td>
                                                                        <td>Some Keyword</td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Repeat Keyword</td>
                                                                        <td>2 minutes</td>
                                                                        <td>Some Keyword</td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="replace-variables">
                                                            <h2><a href="#replace-variables">Replace Variables</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Replaces variables in the given text with their current values.</p>
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

                                                                <p>If the text contains undefined variables, this keyword fails. If the given <code>text</code> contains only a single variable, its value is returned as-is and it can be any object. Otherwise this keyword always
                                                                    returns a string.</p>
                                                                <h4>Examples</h4>
                                                                <p>The file <code>template.txt</code> contains <code>Hello ${NAME}!</code> and variable
                                                                    <code>${NAME}</code> has the value <code>Robot</code>.
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${template} =</td>
                                                                        <td>Get File</td>
                                                                        <td>${CURDIR}/template.txt</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${message} =</td>
                                                                        <td>Replace Variables</td>
                                                                        <td>${template}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${message}</td>
                                                                        <td>Hello Robot!</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="return-from-keyword">
                                                            <h2><a href="#return-from-keyword">Return From Keyword</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns from the enclosing user keyword.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*return_values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can be used to return from a user keyword with PASS status without executing it fully. It is also possible to return values similarly as with the <code>[Return]</code> setting. For more detailed
                                                                    information about working with the return values, see the User Guide.</p>
                                                                <p>This keyword is typically wrapped to some other keyword, such as <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a> or <a href="#Run%20Keyword%20If%20Test%20Passed" class="name">Run Keyword If Test Passed</a>,
                                                                    to return based on a condition:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Run Keyword If</td>
                                                                        <td>${rc} &lt; 0</td>
                                                                        <td>Return From Keyword</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Run Keyword If Test Passed</td>
                                                                        <td>Return From Keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>It is possible to use this keyword to return from a keyword also inside a for loop. That, as well as returning values, is demonstrated by the Find Index keyword in the following somewhat advanced example. Notice
                                                                    that it is often a good idea to move this kind of complicated logic into a test library.</p>
                                                                <pre><b>***</b> Variables <b>***</b>
@{LIST} =    foo    baz

<b>***</b> Test Cases <b>***</b>
Example
    ${index} =    Find Index    baz    @{LIST}
    Should Be Equal    ${index}    ${1}
    ${index} =    Find Index    non existing    @{LIST}
    Should Be Equal    ${index}    ${-1}

<b>***</b> Keywords <b>***</b>
Find Index
   [Arguments]    ${element}    @{items}
   ${index} =    Set Variable    ${0}
   FOR    ${item}    IN    @{items}
       Run Keyword If    '${item}' == '${element}'    Return From Keyword    ${index}
       ${index} =    Set Variable    ${index + 1}
   END
   Return From Keyword    ${-1}    # Also [Return] would work here.
</code></pre>
                                                                <p>The most common use case, returning based on an expression, can be accomplished directly with
                                                                    <a href="#Return%20From%20Keyword%20If" class="name">Return From Keyword If</a>. See also <a href="#Run%20Keyword%20And%20Return" class="name">Run Keyword And Return</a> and <a href="#Run%20Keyword%20And%20Return%20If" class="name">Run Keyword And Return If</a>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="return-from-keyword-if">
                                                            <h2><a href="#return-from-keyword-if">Return From Keyword If</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns from the enclosing user keyword if ``condition`` is true.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*return_values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns from the enclosing user keyword if <code>condition</code> is true.</p>
                                                                <p>A wrapper for <a href="#Return%20From%20Keyword" class="name">Return From Keyword</a> to return based on the given condition. The condition is evaluated using the same semantics as with <a href="#Should%20Be%20True" class="name">Should Be True</a> keyword.</p>
                                                                <p>Given the same example as in <a href="#Return%20From%20Keyword" class="name">Return From
                                                                        Keyword</a>, we can rewrite the Find Index keyword as follows:</p>
                                                                <pre><b>***</b> Keywords <b>***</b>
Find Index
   [Arguments]    ${element}    @{items}
   ${index} =    Set Variable    ${0}
   FOR    ${item}    IN    @{items}
       Return From Keyword If    '${item}' == '${element}'    ${index}
       ${index} =    Set Variable    ${index + 1}
   END
   Return From Keyword    ${-1}    # Also [Return] would work here.
</code></pre>
                                                                <p>See also <a href="#Run%20Keyword%20And%20Return" class="name">Run Keyword And Return</a> and <a href="#Run%20Keyword%20And%20Return%20If" class="name">Run Keyword And Return If</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword">
                                                            <h2><a href="#run-keyword">Run Keyword</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Executes the given keyword with the given arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Because the name of the keyword to execute is given as an argument, it can be a variable and thus set dynamically, e.g. from a return value of another keyword or from the command line.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-and-continue-on-failure">
                                                            <h2><a href="#run-keyword-and-continue-on-failure">Run Keyword And Continue On Failure</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the keyword and continues execution even if a failure occurs.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The keyword name and arguments work as with <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Run Keyword And Continue On Failure</td>
                                                                        <td>Fail</td>
                                                                        <td>This is a stupid example</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>This keyword is executed</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>The execution is not continued if the failure is caused by invalid syntax, timeout, or fatal exception.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-and-expect-error">
                                                            <h2><a href="#run-keyword-and-expect-error">Run Keyword And Expect Error</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the keyword and checks that the expected error occurred.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected_error</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The keyword to execute and its arguments are specified using <code>name</code> and
                                                                    <code>*args</code> exactly like with <a href="#Run%20Keyword" class="name">Run Keyword</a>.
                                                                </p>
                                                                <p>The expected error must be given in the same format as in Autosphere reports. By default it is interpreted as a glob pattern with <code>*</code>, <code>?</code> and <code>[chars]</code> as wildcards.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <th>Prefix</th>
                                                                        <th>Explanation</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><code>EQUALS</code></td>
                                                                        <td>Exact match. Especially useful if the error contains glob wildcards.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><code>STARTS</code></td>
                                                                        <td>Error must start with the specified error.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><code>REGEXP</code></td>
                                                                        <td>Regular expression match.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><code>GLOB</code></td>
                                                                        <td>Same as the default behavior.</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See the <a href="#Pattern%20matching" class="name">Pattern matching</a> section for more information about glob patterns and regular expressions.</p>
                                                                <p>If the expected error occurs, the error message is returned and it can be further processed or tested if needed. If there is no error, or the error does not match the expected error, this keyword fails.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Run Keyword And Expect Error</td>
                                                                        <td>My error</td>
                                                                        <td>Keyword</td>
                                                                        <td>arg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Run Keyword And Expect Error</td>
                                                                        <td>ValueError: *</td>
                                                                        <td>Some Keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Run Keyword And Expect Error</td>
                                                                        <td>STARTS: ValueError:</td>
                                                                        <td>Some Keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Run Keyword And Expect Error</td>
                                                                        <td>EQUALS:No match for '//input[@type="text"]'</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>Find Element</td>
                                                                        <td>//input[@type="text"]</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${msg} =</td>
                                                                        <td>Run Keyword And Expect Error</td>
                                                                        <td>*</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>Keyword</td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log To Console</td>
                                                                        <td>${msg}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Errors caused by invalid syntax, timeouts, or fatal exceptions are not caught by this keyword.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-and-ignore-error">
                                                            <h2><a href="#run-keyword-and-ignore-error">Run Keyword And Ignore Error</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments and ignores possible error.
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword returns two values, so that the first is either string <code>PASS</code> or
                                                                    <code>FAIL</code>, depending on the status of the executed keyword. The second value is either the return value of the keyword or the received error message. See <a href="#Run%20Keyword%20And%20Return%20Status" class="name">Run Keyword And Return Status</a> If you are only interested in the execution status.
                                                                </p>
                                                                <p>The keyword name and arguments work as in <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>. See <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a> for a usage example.
                                                                </p>
                                                                <p>Errors caused by invalid syntax, timeouts, or fatal exceptions are not caught by this keyword. Otherwise this keyword itself never fails.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-and-return">
                                                            <h2><a href="#run-keyword-and-return">Run Keyword And Return</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the specified keyword and returns from the enclosing user keyword.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The keyword to execute is defined with <code>name</code> and <code>*args</code> exactly like with <a href="#Run%20Keyword" class="name">Run Keyword</a>. After running the keyword, returns from the enclosing
                                                                    user keyword and passes possible return value from the executed keyword further. Returning from a keyword has exactly same semantics as with <a href="#Return%20From%20Keyword" class="name">Return From Keyword</a>.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20And%20Return" class="name">Run Keyword And Return</a></td>
                                                                        <td>My Keyword</td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Above is equivalent to:</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>My Keyword</td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Return%20From%20Keyword" class="name">Return From Keyword</a></td>
                                                                        <td>${result}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Run%20Keyword%20And%20Return%20If" class="name">Run Keyword And Return If</a> if you want to run keyword and return based on a condition.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-and-return-if">
                                                            <h2><a href="#run-keyword-and-return-if">Run Keyword And Return If</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the specified keyword and returns from the enclosing user keyword.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>A wrapper for <a href="#Run%20Keyword%20And%20Return" class="name">Run Keyword And Return</a> to run and return based on the given <code>condition</code>. The condition is evaluated using the same semantics
                                                                    as with <a href="#Should%20Be%20True" class="name">Should Be True</a> keyword.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20And%20Return%20If" class="name">Run Keyword And Return If</a>
                                                                        </td>
                                                                        <td>${rc} &gt; 0</td>
                                                                        <td>My Keyword</td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Above is equivalent to:</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>${rc} &gt; 0</td>
                                                                        <td><a href="#Run%20Keyword%20And%20Return" class="name">Run Keyword And Return</a></td>
                                                                        <td>My Keyword </td>
                                                                        <td>arg1</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Return%20From%20Keyword%20If" class="name">Return From Keyword If</a> if you want to return a certain value based on a condition.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-and-return-status">
                                                            <h2><a href="#run-keyword-and-return-status">Run Keyword And Return Status</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with given arguments and returns the status as a Boolean value.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword returns Boolean <code>True</code> if the keyword that is executed succeeds and
                                                                    <code>False</code> if it fails. This is useful, for example, in combination with <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a>. If you are interested in the error message or return value,
                                                                    use <a href="#Run%20Keyword%20And%20Ignore%20Error" class="name">Run
                                                                        Keyword And Ignore Error</a> instead.
                                                                </p>
                                                                <p>The keyword name and arguments work as in <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${passed} =</td>
                                                                        <td><a href="#Run%20Keyword%20And%20Return%20Status" class="name">Run Keyword And Return
                                                                                Status</a></td>
                                                                        <td>Keyword</td>
                                                                        <td>args</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>${passed}</td>
                                                                        <td>Another keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Errors caused by invalid syntax, timeouts, or fatal exceptions are not caught by this keyword. Otherwise this keyword itself never fails.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if">
                                                            <h2><a href="#run-keyword-if">Run Keyword If</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments, if ``condition`` is true.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Runs the given keyword with the given arguments, if <code>condition</code> is true.</p>
                                                                <p>The given <code>condition</code> is evaluated in Python as explained in <a href="#Evaluating%20expressions" class="name">Evaluating expressions</a>, and
                                                                    <code>name</code> and <code>*args</code> have same semantics as with <a href="#Run%20Keyword" class="name">Run Keyword</a>.
                                                                </p>
                                                                <p>Example, a simple if/else construct:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${status}</td>
                                                                        <td>${value} =</td>
                                                                        <td><a href="#Run%20Keyword%20And%20Ignore%20Error" class="name">Run Keyword And Ignore
                                                                                Error</a></td>
                                                                        <td>My Keyword</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>'${status}' == 'PASS'</td>
                                                                        <td>Some Action</td>
                                                                        <td>arg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20Unless" class="name">Run Keyword Unless</a></td>
                                                                        <td>'${status}' == 'PASS'</td>
                                                                        <td>Another Action</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>In this example, only either Some Action or Another Action is executed, based on the status of My Keyword. Instead of <a href="#Run%20Keyword%20And%20Ignore%20Error" class="name">Run Keyword
                                                                        And Ignore Error</a> you can also use <a href="#Run%20Keyword%20And%20Return%20Status" class="name">Run Keyword And Return Status</a>.</p>
                                                                <p>Variables used like <code>${variable}</code>, as in the examples above, are replaced in the expression before evaluation. Variables are also available in the evaluation namespace and can be accessed using special
                                                                    syntax <code>$variable</code> as explained in the <a href="#Evaluating%20expressions" class="name">Evaluating expressions</a> section.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>$result is None or $result == 'FAIL'</td>
                                                                        <td>Keyword</td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword supports also optional ELSE and ELSE IF branches. Both of them are defined in
                                                                    <code>*args</code> and must use exactly format <code>ELSE</code> or <code>ELSE IF</code>, respectively. ELSE branches must contain first the name of the keyword to execute and then its possible arguments.
                                                                    ELSE IF branches must first contain a condition, like the first argument to this keyword, and then the keyword to execute and its possible arguments. It is possible to have ELSE branch after ELSE IF and
                                                                    to have multiple ELSE IF branches. Nested <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a> usage is not supported when using ELSE and/or ELSE IF branches.
                                                                </p>
                                                                <p>Given previous example, if/else construct can also be created like this:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${status}</td>
                                                                        <td>${value} =</td>
                                                                        <td><a href="#Run%20Keyword%20And%20Ignore%20Error" class="name">Run Keyword And Ignore
                                                                                Error</a></td>
                                                                        <td>My Keyword</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>'${status}' == 'PASS'</td>
                                                                        <td>Some Action</td>
                                                                        <td>arg</td>
                                                                        <td>ELSE</td>
                                                                        <td>Another Action</td>
                                                                    </tr>
                                                                </table>
                                                                <p>The return value of this keyword is the return value of the actually executed keyword or Python
                                                                    <code>None</code> if no keyword was executed (i.e. if <code>condition</code> was false). Hence, it is recommended to use ELSE and/or ELSE IF branches to conditionally assign return values from keyword to
                                                                    variables (see <a href="#Set%20Variable%20If" class="name">Set Variable If</a> if you need to set fixed values conditionally). This is illustrated by the example below:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${var1} =</td>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>${rc} == 0</td>
                                                                        <td>Some keyword returning a value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>ELSE IF</td>
                                                                        <td>0 &lt; ${rc} &lt; 42</td>
                                                                        <td>Another keyword</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>ELSE IF</td>
                                                                        <td>${rc} &lt; 0</td>
                                                                        <td>Another keyword with args</td>
                                                                        <td>${rc}</td>
                                                                        <td>arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>ELSE</td>
                                                                        <td>Final keyword to handle abnormal cases</td>
                                                                        <td>${rc}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${var2} =</td>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>${condition}</td>
                                                                        <td>Some keyword</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>In this example, ${var2} will be set to <code>None</code> if ${condition} is false.</p>
                                                                <p>Notice that <code>ELSE</code> and <code>ELSE IF</code> control words must be used explicitly and thus cannot come from variables. If you need to use literal <code>ELSE</code> and
                                                                    <code>ELSE IF</code> strings as arguments, you can escape them with a backslash like
                                                                    <code>\ELSE</code> and <code>\ELSE IF</code>.
                                                                </p>
                                                                <p>Python's <a href="http://docs.python.org/library/os.html">os</a> and <a href="http://docs.python.org/library/sys.html">sys</a> modules are automatically imported when evaluating the <code>condition</code>. Attributes
                                                                    they contain can thus be used in the condition:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Run%20Keyword%20If" class="name">Run Keyword If</a></td>
                                                                        <td>os.sep == '/'</td>
                                                                        <td>Unix Keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>ELSE IF</td>
                                                                        <td>sys.platform.startswith('java')</td>
                                                                        <td>Jython Keyword</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>ELSE</td>
                                                                        <td>Windows Keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-all-critical-tests-passed">
                                                            <h2><a href="#run-keyword-if-all-critical-tests-passed">Run Keyword If All Critical Tests Passed</a>
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments, if all critical tests passed.
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can only be used in suite teardown. Trying to use it in any other place will result in an error.</p>
                                                                <p>Otherwise, this keyword works exactly like <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>, see its documentation for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-all-tests-passed">
                                                            <h2><a href="#run-keyword-if-all-tests-passed">Run Keyword If All Tests Passed</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments, if all tests passed.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can only be used in a suite teardown. Trying to use it anywhere else results in an error.
                                                                </p>
                                                                <p>Otherwise, this keyword works exactly like <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>, see its documentation for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-any-critical-tests-failed">
                                                            <h2><a href="#run-keyword-if-any-critical-tests-failed">Run Keyword If Any Critical Tests Failed</a>
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments, if any critical tests failed.
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can only be used in a suite teardown. Trying to use it anywhere else results in an error.
                                                                </p>
                                                                <p>Otherwise, this keyword works exactly like <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>, see its documentation for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-any-tests-failed">
                                                            <h2><a href="#run-keyword-if-any-tests-failed">Run Keyword If Any Tests Failed</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments, if one or more tests failed.
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can only be used in a suite teardown. Trying to use it anywhere else results in an error.
                                                                </p>
                                                                <p>Otherwise, this keyword works exactly like <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>, see its documentation for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-test-failed">
                                                            <h2><a href="#run-keyword-if-test-failed">Run Keyword If Test Failed</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments, if the test failed.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can only be used in a test teardown. Trying to use it anywhere else results in an error.
                                                                </p>
                                                                <p>Otherwise, this keyword works exactly like <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>, see its documentation for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-test-passed">
                                                            <h2><a href="#run-keyword-if-test-passed">Run Keyword If Test Passed</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments, if the test passed.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can only be used in a test teardown. Trying to use it anywhere else results in an error.
                                                                </p>
                                                                <p>Otherwise, this keyword works exactly like <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>, see its documentation for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-timeout-occurred">
                                                            <h2><a href="#run-keyword-if-timeout-occurred">Run Keyword If Timeout Occurred</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword if either a test or a keyword timeout has occurred.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword can only be used in a test teardown. Trying to use it anywhere else results in an error.
                                                                </p>
                                                                <p>Otherwise, this keyword works exactly like <a href="#Run%20Keyword" class="name">Run
                                                                        Keyword</a>, see its documentation for more details.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-unless">
                                                            <h2><a href="#run-keyword-unless">Run Keyword Unless</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given keyword with the given arguments if ``condition`` is false.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Runs the given keyword with the given arguments if <code>condition</code> is false.</p>
                                                                <p>See <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a> for more information and an example. Notice that this keyword does not support <code>ELSE</code> or <code>ELSE IF</code> branches like <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a> does, though.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keywords">
                                                            <h2><a href="#run-keywords">Run Keywords</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Executes all the given keywords in a sequence.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*keywords</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword is mainly useful in setups and teardowns when they need to take care of multiple actions and creating a new higher level user keyword would be an overkill.</p>
                                                                <p>By default all arguments are expected to be keywords to be executed.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Run%20Keywords" class="name">Run Keywords</a></td>
                                                                        <td>Initialize database</td>
                                                                        <td>Start servers</td>
                                                                        <td>Clear logs</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keywords" class="name">Run Keywords</a></td>
                                                                        <td>${KW 1}</td>
                                                                        <td>${KW 2}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keywords" class="name">Run Keywords</a></td>
                                                                        <td>@{KEYWORDS}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Keywords can also be run with arguments using upper case <code>AND</code> as a separator between keywords. The keywords are executed so that the first argument is the first keyword and proceeding arguments until
                                                                    the first <code>AND</code> are arguments to it. First argument after the first <code>AND</code> is the second keyword and proceeding arguments until the next
                                                                    <code>AND</code> are its arguments. And so on.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Run%20Keywords" class="name">Run Keywords</a></td>
                                                                        <td>Initialize database</td>
                                                                        <td>db1</td>
                                                                        <td>AND</td>
                                                                        <td>Start servers</td>
                                                                        <td>server1</td>
                                                                        <td>server2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keywords" class="name">Run Keywords</a></td>
                                                                        <td>Initialize database</td>
                                                                        <td>${DB NAME}</td>
                                                                        <td>AND</td>
                                                                        <td>Start servers</td>
                                                                        <td>@{SERVERS}</td>
                                                                        <td>AND</td>
                                                                        <td>Clear logs</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Run%20Keywords" class="name">Run Keywords</a></td>
                                                                        <td>${KW}</td>
                                                                        <td>AND</td>
                                                                        <td>@{KW WITH ARGS}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Notice that the <code>AND</code> control argument must be used explicitly and cannot itself come from a variable. If you need to use literal <code>AND</code> string as argument, you can either use variables
                                                                    or escape it with a backslash like <code>\AND</code>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-global-variable">
                                                            <h2><a href="#set-global-variable">Set Global Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Makes a variable available globally in all tests and suites.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Variables set with this keyword are globally available in all subsequent test suites, test cases and user keywords. Also variables in variable tables are overridden. Variables assigned locally based on keyword
                                                                    return values or by using <a href="#Set%20Test%20Variable" class="name">Set Test Variable</a> and <a href="#Set%20Suite%20Variable" class="name">Set
                                                                        Suite Variable</a> override these variables in that scope, but the global value is not changed in those cases.</p>
                                                                <p>In practice setting variables with this keyword has the same effect as using command line options <code>--variable</code> and <code>--variablefile</code>. Because this keyword can change variables everywhere,
                                                                    it should be used with care.</p>
                                                                <p>See <a href="#Set%20Suite%20Variable" class="name">Set Suite Variable</a> for more information and examples.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-library-search-order">
                                                            <h2><a href="#set-library-search-order">Set Library Search Order</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the resolution order to use when a name matches multiple keywords.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*search_order</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The library search order is used to resolve conflicts when a keyword name in the test data matches multiple keywords. The first library (or resource, see below) containing the keyword is selected and that keyword
                                                                    implementation used. If the keyword is not found from any library (or resource), test executing fails the same way as when the search order is not set.</p>
                                                                <p>When this keyword is used, there is no need to use the long
                                                                    <code>LibraryName.Keyword Name</code> notation. For example, instead of having
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>MyLibrary.Keyword</td>
                                                                        <td>arg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>MyLibrary.Another Keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>MyLibrary.Keyword</td>
                                                                        <td>xxx</td>
                                                                    </tr>
                                                                </table>
                                                                <p>you can have</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Library Search Order</td>
                                                                        <td>MyLibrary</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Keyword</td>
                                                                        <td>arg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Another Keyword</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Keyword</td>
                                                                        <td>xxx</td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword can be used also to set the order of keywords in different resource files. In this case resource names must be given without paths or extensions like:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Library Search Order</td>
                                                                        <td>resource</td>
                                                                        <td>another_resource</td>
                                                                    </tr>
                                                                </table>
                                                                <p><b>NOTE:</b></p>
                                                                <ul>
                                                                    <li>The search order is valid only in the suite where this keywords is used.</li>
                                                                    <li>Keywords in resources always have higher priority than keywords in libraries regardless the search order.</li>
                                                                    <li>The old order is returned and can be used to reset the search order later.</li>
                                                                    <li>Library and resource names in the search order are both case and space insensitive.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-local-variable">
                                                            <h2><a href="#set-local-variable">Set Local Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Makes a variable available everywhere within the local scope.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Variables set with this keyword are available within the local scope of the currently executed test case or in the local scope of the keyword in which they are defined. For example, if you set a variable in
                                                                    a user keyword, it is available only in that keyword. Other test cases or keywords will not see variables set with this keyword.</p>
                                                                <p>This keyword is equivalent to a normal variable assignment based on a keyword return value.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>@{list} =</td>
                                                                        <td>Create List</td>
                                                                        <td>item1</td>
                                                                        <td>item2</td>
                                                                        <td>item3</td>
                                                                    </tr>
                                                                </table>
                                                                <p>is equivalent with</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Local Variable</td>
                                                                        <td>@{list}</td>
                                                                        <td>item1</td>
                                                                        <td>item2</td>
                                                                        <td>item3</td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword will provide the option of setting local variables inside keywords like <a href="#Run%20Keyword%20If" class="name">Run Keyword If</a>, <a href="#Run%20Keyword%20And%20Return%20If" class="name">Run Keyword And Return If</a>,
                                                                    <a href="#Run%20Keyword%20Unless" class="name">Run Keyword Unless</a> which until now was not possible by using <a href="#Set%20Variable" class="name">Set Variable</a>.
                                                                </p>
                                                                <p>It will also be possible to use this keyword from external libraries that want to set local variables.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-log-level">
                                                            <h2><a href="#set-log-level">Set Log Level</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the log threshold to the specified level and returns the old level.</p>
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

                                                                <p>Messages below the level will not logged. The default logging level is INFO, but it can be overridden with the command line option <code>--loglevel</code>.</p>
                                                                <p>The available levels: TRACE, DEBUG, INFO (default), WARN, ERROR and NONE (no logging).</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-suite-documentation">
                                                            <h2><a href="#set-suite-documentation">Set Suite Documentation</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets documentation for the current test suite.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>doc</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>append</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>top</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>By default the possible existing documentation is overwritten, but this can be changed using the optional <code>append</code> argument similarly as with <a href="#Set%20Test%20Message" class="name">Set Test Message</a> keyword.</p>
                                                                <p>This keyword sets the documentation of the current suite by default. If the optional
                                                                    <code>top</code> argument is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the documentation of the top level suite is altered instead.
                                                                </p>
                                                                <p>The documentation of the current suite is available as a built-in variable
                                                                    <code>${SUITE DOCUMENTATION}</code>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-suite-metadata">
                                                            <h2><a href="#set-suite-metadata">Set Suite Metadata</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets metadata for the current test suite.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>append</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>top</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>By default possible existing metadata values are overwritten, but this can be changed using the optional <code>append</code> argument similarly as with <a href="#Set%20Test%20Message" class="name">Set Test Message</a> keyword.</p>
                                                                <p>This keyword sets the metadata of the current suite by default. If the optional
                                                                    <code>top</code> argument is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the metadata of the top level suite is altered instead.
                                                                </p>
                                                                <p>The metadata of the current suite is available as a built-in variable
                                                                    <code>${SUITE METADATA}</code> in a Python dictionary. Notice that modifying this variable directly has no effect on the actual metadata the suite has.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-suite-variable">
                                                            <h2><a href="#set-suite-variable">Set Suite Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Makes a variable available everywhere within the scope of the current suite.
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Variables set with this keyword are available everywhere within the scope of the currently executed test suite. Setting variables with this keyword thus has the same effect as creating them using the Variable
                                                                    table in the test data file or importing them from variable files.</p>
                                                                <p>Possible child test suites do not see variables set with this keyword by default, but that can be controlled by using <code>children=&lt;option&gt;</code> as the last argument. If the specified <code>&lt;option&gt;</code> given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the variable is set also to the child suites. Parent and sibling suites will never see variables set with this
                                                                    keyword.
                                                                </p>
                                                                <p>The name of the variable can be given either as a normal variable name (e.g.
                                                                    <code>${NAME}</code>) or in escaped format as <code>\${NAME}</code> or <code>$NAME</code>. Variable value can be given using the same syntax as when variables are created in the Variable table.
                                                                </p>
                                                                <p>If a variable already exists within the new scope, its value will be overwritten. Otherwise a new variable is created. If a variable already exists within the current scope, the value can be left empty and the
                                                                    variable within the new scope gets the value within the current scope.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>${SCALAR}</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>${SCALAR}</td>
                                                                        <td>Hello, world!</td>
                                                                        <td>children=true</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>@{LIST}</td>
                                                                        <td>First item</td>
                                                                        <td>Second item</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>&amp;{DICT}</td>
                                                                        <td>key=value</td>
                                                                        <td>foo=bar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${ID} =</td>
                                                                        <td>Get ID</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>${ID}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>To override an existing value with an empty value, use built-in variables
                                                                    <code>${EMPTY}</code>, <code>@{EMPTY}</code> or <code>&amp;{EMPTY}</code>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>${SCALAR}</td>
                                                                        <td>${EMPTY}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>@{LIST}</td>
                                                                        <td>@{EMPTY}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>&amp;{DICT}</td>
                                                                        <td>&amp;{EMPTY}</td>
                                                                    </tr>
                                                                </table>
                                                                <p><b>NOTE:</b> If the variable has value which itself is a variable (escaped or not), you must always use the escaped format to set the variable:</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${NAME} =</td>
                                                                        <td>Set Variable</td>
                                                                        <td>\${var}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>${NAME}</td>
                                                                        <td>value</td>
                                                                        <td># Sets variable ${var}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Suite Variable</td>
                                                                        <td>\${NAME}</td>
                                                                        <td>value</td>
                                                                        <td># Sets variable ${NAME}</td>
                                                                    </tr>
                                                                </table>
                                                                <p>This limitation applies also to <a href="#Set%20Test%20Variable" class="name">Set Test
                                                                        Variable</a>, <a href="#Set%20Global%20Variable" class="name">Set Global Variable</a>, <a href="#Variable%20Should%20Exist" class="name">Variable Should Exist</a>, <a href="#Variable%20Should%20Not%20Exist" class="name">Variable Should Not Exist</a> and <a href="#Get%20Variable%20Value" class="name">Get Variable Value</a> keywords.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-tags">
                                                            <h2><a href="#set-tags">Set Tags</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Adds given ``tags`` for the current test or all tests in a suite.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*tags</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Adds given <code>tags</code> for the current test or all tests in a suite.</p>
                                                                <p>When this keyword is used inside a test case, that test gets the specified tags and other tests are not affected.</p>
                                                                <p>If this keyword is used in a suite setup, all test cases in that suite, recursively, gets the given tags. It is a failure to use this keyword in a suite teardown.</p>
                                                                <p>The current tags are available as a built-in variable <code>@{TEST TAGS}</code>.</p>
                                                                <p>See <a href="#Remove%20Tags" class="name">Remove Tags</a> if you want to remove certain tags and <a href="#Fail" class="name">Fail</a> if you want to fail the test case after setting and/or removing tags.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-task-variable">
                                                            <h2><a href="#set-task-variable">Set Task Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Makes a variable available everywhere within the scope of the current task.
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This is an alias for <a href="#Set%20Test%20Variable" class="name">Set Test Variable</a> that is more applicable when creating tasks, not tests. New in RF 3.1.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-test-documentation">
                                                            <h2><a href="#set-test-documentation">Set Test Documentation</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets documentation for the current test case.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>doc</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>append</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>By default the possible existing documentation is overwritten, but this can be changed using the optional <code>append</code> argument similarly as with <a href="#Set%20Test%20Message" class="name">Set Test Message</a> keyword.</p>
                                                                <p>The current test documentation is available as a built-in variable
                                                                    <code>${TEST DOCUMENTATION}</code>. This keyword can not be used in suite setup or suite teardown.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-test-message">
                                                            <h2><a href="#set-test-message">Set Test Message</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets message for the current test case.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>append</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the optional <code>append</code> argument is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the given
                                                                    <code>message</code> is added after the possible earlier message by joining the messages with a space.
                                                                </p>
                                                                <p>In test teardown this keyword can alter the possible failure message, but otherwise failures override messages set by this keyword. Notice that in teardown the message is available as a built-in variable <code>${TEST MESSAGE}</code>.</p>
                                                                <p>It is possible to use HTML format in the message by starting the message with
                                                                    <code>*HTML*</code>.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Test Message</td>
                                                                        <td>My message</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Test Message</td>
                                                                        <td>is continued.</td>
                                                                        <td>append=yes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${TEST MESSAGE}</td>
                                                                        <td>My message is continued.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Test Message</td>
                                                                        <td>*HTML* &lt;b&gt;Hello!&lt;/b&gt;</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword can not be used in suite setup or suite teardown.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-test-variable">
                                                            <h2><a href="#set-test-variable">Set Test Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Makes a variable available everywhere within the scope of the current test.
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Variables set with this keyword are available everywhere within the scope of the currently executed test case. For example, if you set a variable in a user keyword, it is available both in the test case level
                                                                    and also in all other user keywords used in the current test. Other test cases will not see variables set with this keyword.</p>
                                                                <p>See <a href="#Set%20Suite%20Variable" class="name">Set Suite Variable</a> for more information and examples.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-variable">
                                                            <h2><a href="#set-variable">Set Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the given values which can then be assigned to a variables.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword is mainly used for setting scalar variables. Additionally it can be used for converting a scalar variable containing a list to a list variable or to multiple scalar variables. It is recommended
                                                                    to use <a href="#Create%20List" class="name">Create List</a> when creating new lists.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${hi} =</td>
                                                                        <td>Set Variable</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${hi2} =</td>
                                                                        <td>Set Variable</td>
                                                                        <td>I said: ${hi}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${var1}</td>
                                                                        <td>${var2} =</td>
                                                                        <td>Set Variable</td>
                                                                        <td>Hello</td>
                                                                        <td>world</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{list} =</td>
                                                                        <td>Set Variable</td>
                                                                        <td>${list with some items}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${item1}</td>
                                                                        <td>${item2} =</td>
                                                                        <td>Set Variable</td>
                                                                        <td>${list with 2 items}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Variables created with this keyword are available only in the scope where they are created. See
                                                                    <a href="#Set%20Global%20Variable" class="name">Set Global Variable</a>, <a href="#Set%20Test%20Variable" class="name">Set Test Variable</a> and <a href="#Set%20Suite%20Variable" class="name">Set Suite Variable</a> for information on how to set variables so that they are available also in a larger scope.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-variable-if">
                                                            <h2><a href="#set-variable-if">Set Variable If</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets variable based on the given condition.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The basic usage is giving a condition and two values. The given condition is first evaluated the same way as with the <a href="#Should%20Be%20True" class="name">Should Be True</a> keyword. If the condition is
                                                                    true, then the first value is returned, and otherwise the second value is returned. The second value can also be omitted, in which case it has a default value None. This usage is illustrated in the examples
                                                                    below, where <code>${rc}</code> is assumed to be zero.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${var1} =</td>
                                                                        <td>Set Variable If</td>
                                                                        <td>${rc} == 0</td>
                                                                        <td>zero</td>
                                                                        <td>nonzero</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${var2} =</td>
                                                                        <td>Set Variable If</td>
                                                                        <td>${rc} &gt; 0</td>
                                                                        <td>value1</td>
                                                                        <td>value2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${var3} =</td>
                                                                        <td>Set Variable If</td>
                                                                        <td>${rc} &gt; 0</td>
                                                                        <td>whatever</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <pre>${var1} = 'zero'
${var2} = 'value2'
${var3} = None
</code></pre>
                                                                <p>It is also possible to have 'else if' support by replacing the second value with another condition, and having two new values after it. If the first condition is not true, the second is evaluated and one of
                                                                    the values after it is returned based on its truth value. This can be continued by adding more conditions without a limit.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${var} =</td>
                                                                        <td>Set Variable If</td>
                                                                        <td>${rc} == 0</td>
                                                                        <td>zero</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>${rc} &gt; 0</td>
                                                                        <td>greater than zero</td>
                                                                        <td>less then zero</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${var} =</td>
                                                                        <td>Set Variable If</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>${rc} == 0</td>
                                                                        <td>zero</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>${rc} == 1</td>
                                                                        <td>one</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>${rc} == 2</td>
                                                                        <td>two</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>${rc} &gt; 2</td>
                                                                        <td>greater than two</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>${rc} &lt; 0</td>
                                                                        <td>less than zero</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Get%20Variable%20Value" class="name">Get Variable Value</a> if you need to set variables dynamically based on whether a variable exist or not.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-be-empty">
                                                            <h2><a href="#should-be-empty">Should Be Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the given item is empty.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The length of the item is got using the <a href="#Get%20Length" class="name">Get Length</a> keyword. The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-be-equal">
                                                            <h2><a href="#should-be-equal">Should Be Equal</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given objects are unequal.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>formatter</td>
                                                                        <td></td>
                                                                        <td>str</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Optional <code>msg</code>, <code>values</code> and <code>formatter</code> arguments specify how to construct the error message if this keyword fails:</p>
                                                                <ul>
                                                                    <li>If <code>msg</code> is not given, the error message is
                                                                        <code>&lt;first&gt; != &lt;second&gt;</code>.
                                                                    </li>
                                                                    <li>If <code>msg</code> is given and <code>values</code> gets a true value (default), the error message is <code>&lt;msg&gt;: &lt;first&gt; != &lt;second&gt;</code>.</li>
                                                                    <li>If <code>msg</code> is given and <code>values</code> gets a false value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the error message is simply
                                                                        <code>&lt;msg&gt;</code>.
                                                                    </li>
                                                                    <li><code>formatter</code> controls how to format the values. Possible values are
                                                                        <code>str</code> (default), <code>repr</code> and <code>ascii</code>, and they work similarly as Python built-in functions with same names. See <a href="#String%20representations" class="name">String representations</a> for more details.
                                                                    </li>
                                                                </ul>
                                                                <p>If <code>ignore_case</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) and both arguments are strings, comparison is done case-insensitively. If both arguments
                                                                    are multiline strings, this keyword uses <a href="#Multiline%20string%20comparison" class="name">multiline string comparison</a>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${x}</td>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${x}</td>
                                                                        <td>expected</td>
                                                                        <td>Custom error message</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${x}</td>
                                                                        <td>expected</td>
                                                                        <td>Custom message</td>
                                                                        <td>values=False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${x}</td>
                                                                        <td>expected</td>
                                                                        <td>ignore_case=True</td>
                                                                        <td>formatter=repr</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-be-equal-as-integers">
                                                            <h2><a href="#should-be-equal-as-integers">Should Be Equal As Integers</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if objects are unequal after converting them to integers.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a> for information how to convert integers from other bases than 10 using <code>base</code> argument or
                                                                    <code>0b/0o/0x</code> prefixes.
                                                                </p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>42</td>
                                                                        <td>${42}</td>
                                                                        <td>Error message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>ABCD</td>
                                                                        <td>abcd</td>
                                                                        <td>base=16</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>0b1011</td>
                                                                        <td>11</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-be-equal-as-numbers">
                                                            <h2><a href="#should-be-equal-as-numbers">Should Be Equal As Numbers</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if objects are unequal after converting them to real numbers.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>precision</td>
                                                                        <td></td>
                                                                        <td>6</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The conversion is done with <a href="#Convert%20To%20Number" class="name">Convert To Number</a> keyword using the given <code>precision</code>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Be Equal As Numbers</td>
                                                                        <td>${x}</td>
                                                                        <td>1.1</td>
                                                                        <td></td>
                                                                        <td># Passes if ${x} is 1.1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Numbers</td>
                                                                        <td>1.123</td>
                                                                        <td>1.1</td>
                                                                        <td>precision=1</td>
                                                                        <td># Passes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Numbers</td>
                                                                        <td>1.123</td>
                                                                        <td>1.4</td>
                                                                        <td>precision=0</td>
                                                                        <td># Passes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Numbers</td>
                                                                        <td>112.3</td>
                                                                        <td>75</td>
                                                                        <td>precision=-2</td>
                                                                        <td># Passes</td>
                                                                    </tr>
                                                                </table>
                                                                <p>As discussed in the documentation of <a href="#Convert%20To%20Number" class="name">Convert To
                                                                        Number</a>, machines generally cannot store floating point numbers accurately. Because of this limitation, comparing floats for equality is problematic and a correct approach to use depends on the context. This keyword uses a
                                                                    very naive approach of rounding the numbers before comparing them, which is both prone to rounding errors and does not work very well if numbers are really big or small. For more information about comparing
                                                                    floats, and ideas on how to implement your own context specific comparison algorithm, see <a href="http://randomascii.wordpress.com/2012/02/25/comparing-floating-point-numbers-2012-edition/">http://randomascii.wordpress.com/2012/02/25/comparing-floating-point-numbers-2012-edition/</a>.
                                                                </p>
                                                                <p>If you want to avoid possible problems with floating point numbers, you can implement custom keywords using Python's <a href="http://docs.python.org/library/decimal.html">decimal</a> or <a href="http://docs.python.org/library/fractions.html">fractions</a> modules.</p>
                                                                <p>See <a href="#Should%20Not%20Be%20Equal%20As%20Numbers" class="name">Should Not Be Equal As
                                                                        Numbers</a> for a negative version of this keyword and <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-be-equal-as-strings">
                                                            <h2><a href="#should-be-equal-as-strings">Should Be Equal As Strings</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if objects are unequal after converting them to strings.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>formatter</td>
                                                                        <td></td>
                                                                        <td>str</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code>, <code>values</code> and
                                                                    <code>formatter</code>.
                                                                </p>
                                                                <p>If <code>ignore_case</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), comparison is done case-insensitively. If both arguments are multiline strings, this
                                                                    keyword uses <a href="#Multiline%20string%20comparison" class="name">multiline string comparison</a>.</p>
                                                                <p>Strings are always NFC normalized.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-be-true">
                                                            <h2><a href="#should-be-true">Should Be True</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given condition is not true.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>condition</code> is a string (e.g. <code>${rc} &lt; 10</code>), it is evaluated as a Python expression as explained in <a href="#Evaluating%20expressions" class="name">Evaluating
                                                                        expressions</a> and the keyword status is decided based on the result. If a non-string item is given, the status is got directly from its <a href="http://docs.python.org/library/stdtypes.html#truth">truth value</a>.</p>
                                                                <p>The default error message (<code>&lt;condition&gt; should be true</code>) is not very informative, but it can be overridden with the <code>msg</code> argument.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${rc} &lt; 10</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>'${status}' == 'PASS'</td>
                                                                        <td># Strings must be quoted</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${number}</td>
                                                                        <td># Passes if ${number} is not zero</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${list}</td>
                                                                        <td># Passes if ${list} is not empty</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Variables used like <code>${variable}</code>, as in the examples above, are replaced in the expression before evaluation. Variables are also available in the evaluation namespace, and can be accessed using special
                                                                    <code>$variable</code> syntax as explained in the <a href="#Evaluating%20expressions" class="name">Evaluating expressions</a> section.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>$rc &lt; 10</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>$status == 'PASS'</td>
                                                                        <td># Expected string must be quoted</td>
                                                                    </tr>
                                                                </table>
                                                                <p><a href="#Should%20Be%20True" class="name">Should Be True</a> automatically imports Python's <a href="http://docs.python.org/library/os.html">os</a> and <a href="http://docs.python.org/library/sys.html">sys</a> modules that contain several useful attributes:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>os.linesep == '\n'</td>
                                                                        <td># Unixy</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>os.linesep == '\r\n'</td>
                                                                        <td># Windows</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>sys.platform == 'darwin'</td>
                                                                        <td># OS X</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>sys.platform.startswith('java')</td>
                                                                        <td># Jython</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-contain">
                                                            <h2><a href="#should-contain">Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if ``container`` does not contain ``item`` one or more times.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>container</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if <code>container</code> does not contain <code>item</code> one or more times.</p>
                                                                <p>Works with strings, lists, and anything that supports Python's <code>in</code> operator.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with arguments <code>msg</code> and <code>values</code>.
                                                                </p>
                                                                <p>If <code>ignore_case</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) and compared items are strings, it indicates that comparison should be case-insensitive.
                                                                    If the <code>container</code> is a list-like object, string items in it are compared case-insensitively. </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Contain</td>
                                                                        <td>${output}</td>
                                                                        <td>PASS</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Contain</td>
                                                                        <td>${some list}</td>
                                                                        <td>value</td>
                                                                        <td>msg=Failure!</td>
                                                                        <td>values=False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Contain</td>
                                                                        <td>${some list}</td>
                                                                        <td>value</td>
                                                                        <td>ignore_case=True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-contain-any">
                                                            <h2><a href="#should-contain-any">Should Contain Any</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if ``container`` does not contain any of the ``*items``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>container</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*items</td>
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
                                                                <p>Fails if <code>container</code> does not contain any of the <code>*items</code>.</p>
                                                                <p>Works with strings, lists, and anything that supports Python's <code>in</code> operator.</p>
                                                                <p>Supports additional configuration parameters <code>msg</code>, <code>values</code> and
                                                                    <code>ignore_case</code>, which have exactly the same semantics as arguments with same names have with <a href="#Should%20Contain" class="name">Should Contain</a>. These arguments must always be given using
                                                                    <code>name=value</code> syntax after all <code>items</code>.
                                                                </p>
                                                                <p>Note that possible equal signs in <code>items</code> must be escaped with a backslash (e.g.
                                                                    <code>foo\=bar</code>) to avoid them to be passed in as <code>**configuration</code>.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Contain Any</td>
                                                                        <td>${string}</td>
                                                                        <td>substring 1</td>
                                                                        <td>substring 2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Contain Any</td>
                                                                        <td>${list}</td>
                                                                        <td>item 1</td>
                                                                        <td>item 2</td>
                                                                        <td>item 3</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Contain Any</td>
                                                                        <td>${list}</td>
                                                                        <td>item 1</td>
                                                                        <td>item 2</td>
                                                                        <td>item 3</td>
                                                                        <td>ignore_case=True</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Contain Any</td>
                                                                        <td>${list}</td>
                                                                        <td>@{items}</td>
                                                                        <td>msg=Custom message</td>
                                                                        <td>values=False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-contain-x-times">
                                                            <h2><a href="#should-contain-x-times">Should Contain X Times</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if ``container`` does not contain ``item`` ``count`` times.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>container</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>count</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if <code>container</code> does not contain <code>item</code> <code>count</code> times.
                                                                </p>
                                                                <p>Works with strings, lists and all objects that <a href="#Get%20Count" class="name">Get
                                                                        Count</a> works with. The default error message can be overridden with <code>msg</code> and the actual count is always logged.</p>
                                                                <p>If <code>ignore_case</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) and compared items are strings, it indicates that comparison should be case-insensitive.
                                                                    If the <code>container</code> is a list-like object, string items in it are compared case-insensitively.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Contain X Times</td>
                                                                        <td>${output}</td>
                                                                        <td>hello</td>
                                                                        <td>2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Contain X Times</td>
                                                                        <td>${some list}</td>
                                                                        <td>value</td>
                                                                        <td>3</td>
                                                                        <td>ignore_case=True</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-end-with">
                                                            <h2><a href="#should-end-with">Should End With</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the string ``str1`` does not end with the string ``str2``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if the string <code>str1</code> does not end with the string <code>str2</code>.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>, as well as for semantics of
                                                                    the <code>ignore_case</code> option.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-match">
                                                            <h2><a href="#should-match">Should Match</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given ``string`` does not match the given ``pattern``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>string</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if the given <code>string</code> does not match the given <code>pattern</code>.</p>
                                                                <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Glob%20patterns" class="name">Glob patterns</a> section
                                                                    for more information.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>, as well as for semantics of
                                                                    the <code>ignore_case</code> option.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-match-regexp">
                                                            <h2><a href="#should-match-regexp">Should Match Regexp</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if ``string`` does not match ``pattern`` as a regular expression.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>string</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if <code>string</code> does not match <code>pattern</code> as a regular expression.</p>
                                                                <p>See the <a href="#Regular%20expressions" class="name">Regular expressions</a> section for more information about regular expressions and how to use then in Autosphere test data.</p>
                                                                <p>Notice that the given pattern does not need to match the whole string. For example, the pattern
                                                                    <code>ello</code> matches the string <code>Hello world!</code>. If a full match is needed, the
                                                                    <code>^</code> and <code>$</code> characters can be used to denote the beginning and end of the string, respectively. For example, <code>^ello$</code> only matches the exact string
                                                                    <code>ello</code>.
                                                                </p>
                                                                <p>Possible flags altering how the expression is parsed (e.g. <code>re.IGNORECASE</code>,
                                                                    <code>re.MULTILINE</code>) must be embedded to the pattern like <code>(?im)pattern</code>. The most useful flags are <code>i</code> (case-insensitive), <code>m</code> (multiline mode),
                                                                    <code>s</code> (dotall mode) and <code>x</code> (verbose).
                                                                </p>
                                                                <p>If this keyword passes, it returns the portion of the string that matched the pattern. Additionally, the possible captured groups are returned.</p>
                                                                <p>See the <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> keyword for an explanation on how to override the default error message with the <code>msg</code> and
                                                                    <code>values</code> arguments.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Match Regexp</td>
                                                                        <td>${output}</td>
                                                                        <td>\\d{6}</td>
                                                                        <td># Output contains six numbers</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Match Regexp</td>
                                                                        <td>${output}</td>
                                                                        <td>^\\d{6}$</td>
                                                                        <td># Six numbers and nothing more</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${ret} =</td>
                                                                        <td>Should Match Regexp</td>
                                                                        <td>Foo: 42</td>
                                                                        <td>(?i)foo: \\d+</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${match}</td>
                                                                        <td>${group1}</td>
                                                                        <td>${group2} =</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>Should Match Regexp</td>
                                                                        <td>Bar: 43</td>
                                                                        <td>(Foo|Bar): (\\d+)</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <pre>${ret} = 'Foo: 42'
${match} = 'Bar: 43'
${group1} = 'Bar'
${group2} = '43'
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-be-empty">
                                                            <h2><a href="#should-not-be-empty">Should Not Be Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the given item is not empty.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The length of the item is got using the <a href="#Get%20Length" class="name">Get Length</a> keyword. The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-be-equal">
                                                            <h2><a href="#should-not-be-equal">Should Not Be Equal</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given objects are equal.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>.</p>
                                                                <p>If <code>ignore_case</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) and both arguments are strings, comparison is done case-insensitively. </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-be-equal-as-integers">
                                                            <h2><a href="#should-not-be-equal-as-integers">Should Not Be Equal As Integers</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if objects are equal after converting them to integers.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Convert%20To%20Integer" class="name">Convert To Integer</a> for information how to convert integers from other bases than 10 using <code>base</code> argument or
                                                                    <code>0b/0o/0x</code> prefixes.
                                                                </p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>.</p>
                                                                <p>See <a href="#Should%20Be%20Equal%20As%20Integers" class="name">Should Be Equal As Integers</a> for some usage examples.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-be-equal-as-numbers">
                                                            <h2><a href="#should-not-be-equal-as-numbers">Should Not Be Equal As Numbers</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if objects are equal after converting them to real numbers.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>precision</td>
                                                                        <td></td>
                                                                        <td>6</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The conversion is done with <a href="#Convert%20To%20Number" class="name">Convert To Number</a> keyword using the given <code>precision</code>.</p>
                                                                <p>See <a href="#Should%20Be%20Equal%20As%20Numbers" class="name">Should Be Equal As Numbers</a> for examples on how to use <code>precision</code> and why it does not always work as expected. See also <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-be-equal-as-strings">
                                                            <h2><a href="#should-not-be-equal-as-strings">Should Not Be Equal As Strings</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if objects are equal after converting them to strings.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>.</p>
                                                                <p>If <code>ignore_case</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), comparison is done case-insensitively.</p>
                                                                <p>Strings are always NFC normalized.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-be-true">
                                                            <h2><a href="#should-not-be-true">Should Not Be True</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given condition is true.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Should%20Be%20True" class="name">Should Be True</a> for details about how
                                                                    <code>condition</code> is evaluated and how <code>msg</code> can be used to override the default error message.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-contain">
                                                            <h2><a href="#should-not-contain">Should Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if ``container`` contains ``item`` one or more times.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>container</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>item</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if <code>container</code> contains <code>item</code> one or more times.</p>
                                                                <p>Works with strings, lists, and anything that supports Python's <code>in</code> operator.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with arguments <code>msg</code> and <code>values</code>.
                                                                    <code>ignore_case</code> has exactly the same semantics as with <a href="#Should%20Contain" class="name">Should Contain</a>.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Not Contain</td>
                                                                        <td>${some list}</td>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Not Contain</td>
                                                                        <td>${output}</td>
                                                                        <td>FAILED</td>
                                                                        <td>ignore_case=True</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-contain-any">
                                                            <h2><a href="#should-not-contain-any">Should Not Contain Any</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if ``container`` contains one or more of the ``*items``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>container</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*items</td>
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
                                                                <p>Fails if <code>container</code> contains one or more of the <code>*items</code>.</p>
                                                                <p>Works with strings, lists, and anything that supports Python's <code>in</code> operator.</p>
                                                                <p>Supports additional configuration parameters <code>msg</code>, <code>values</code> and
                                                                    <code>ignore_case</code>, which have exactly the same semantics as arguments with same names have with <a href="#Should%20Contain" class="name">Should Contain</a>. These arguments must always be given using
                                                                    <code>name=value</code> syntax after all <code>items</code>.
                                                                </p>
                                                                <p>Note that possible equal signs in <code>items</code> must be escaped with a backslash (e.g.
                                                                    <code>foo\=bar</code>) to avoid them to be passed in as <code>**configuration</code>.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Should Not Contain Any</td>
                                                                        <td>${string}</td>
                                                                        <td>substring 1</td>
                                                                        <td>substring 2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Not Contain Any</td>
                                                                        <td>${list}</td>
                                                                        <td>item 1</td>
                                                                        <td>item 2</td>
                                                                        <td>item 3</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Not Contain Any</td>
                                                                        <td>${list}</td>
                                                                        <td>item 1</td>
                                                                        <td>item 2</td>
                                                                        <td>item 3</td>
                                                                        <td>ignore_case=True</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Not Contain Any</td>
                                                                        <td>${list}</td>
                                                                        <td>@{items}</td>
                                                                        <td>msg=Custom message</td>
                                                                        <td>values=False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-end-with">
                                                            <h2><a href="#should-not-end-with">Should Not End With</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the string ``str1`` ends with the string ``str2``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if the string <code>str1</code> ends with the string <code>str2</code>.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>, as well as for semantics of
                                                                    the <code>ignore_case</code> option.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-match">
                                                            <h2><a href="#should-not-match">Should Not Match</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given ``string`` matches the given ``pattern``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>string</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if the given <code>string</code> matches the given <code>pattern</code>.</p>
                                                                <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Glob%20patterns" class="name">Glob patterns</a> section
                                                                    for more information.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>, as well as for semantics of
                                                                    the <code>ignore_case</code> option.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-match-regexp">
                                                            <h2><a href="#should-not-match-regexp">Should Not Match Regexp</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if ``string`` matches ``pattern`` as a regular expression.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>string</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if <code>string</code> matches <code>pattern</code> as a regular expression.</p>
                                                                <p>See <a href="#Should%20Match%20Regexp" class="name">Should Match Regexp</a> for more information about arguments.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-start-with">
                                                            <h2><a href="#should-not-start-with">Should Not Start With</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the string ``str1`` starts with the string ``str2``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if the string <code>str1</code> starts with the string <code>str2</code>.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>, as well as for semantics of
                                                                    the <code>ignore_case</code> option.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-start-with">
                                                            <h2><a href="#should-start-with">Should Start With</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the string ``str1`` does not start with the string ``str2``.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>str2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails if the string <code>str1</code> does not start with the string <code>str2</code>.</p>
                                                                <p>See <a href="#Should%20Be%20Equal" class="name">Should Be Equal</a> for an explanation on how to override the default error message with <code>msg</code> and <code>values</code>, as well as for semantics of
                                                                    the <code>ignore_case</code> option.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="sleep">
                                                            <h2><a href="#sleep">Sleep</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Pauses the test executed for the given time.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time_</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>reason</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>time</code> may be either a number or a time string. Time strings are in a format such as
                                                                    <code>1 day 2 hours 3 minutes 4 seconds 5milliseconds</code> or <code>1d 2h 3m 4s 5ms</code>, and they are fully explained in an appendix of Autosphere User Guide. Optional reason can be used to explain
                                                                    why sleeping is necessary. Both the time slept and the reason are logged.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Sleep</td>
                                                                        <td>42</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sleep</td>
                                                                        <td>1.5</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sleep</td>
                                                                        <td>2 minutes 10 seconds</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sleep</td>
                                                                        <td>10s</td>
                                                                        <td>Wait for a reply</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="variable-should-exist">
                                                            <h2><a href="#variable-should-exist">Variable Should Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails unless the given variable exists within the current scope.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The name of the variable can be given either as a normal variable name (e.g.
                                                                    <code>${NAME}</code>) or in escaped format (e.g. <code>\${NAME}</code>). Notice that the former has some limitations explained in <a href="#Set%20Suite%20Variable" class="name">Set Suite
                                                                        Variable</a>.
                                                                </p>
                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                                <p>See also <a href="#Variable%20Should%20Not%20Exist" class="name">Variable Should Not Exist</a> and <a href="#Keyword%20Should%20Exist" class="name">Keyword Should Exist</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="variable-should-not-exist">
                                                            <h2><a href="#variable-should-not-exist">Variable Should Not Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given variable exists within the current scope.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The name of the variable can be given either as a normal variable name (e.g.
                                                                    <code>${NAME}</code>) or in escaped format (e.g. <code>\${NAME}</code>). Notice that the former has some limitations explained in <a href="#Set%20Suite%20Variable" class="name">Set Suite
                                                                        Variable</a>.
                                                                </p>
                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                                <p>See also <a href="#Variable%20Should%20Exist" class="name">Variable Should Exist</a> and <a href="#Keyword%20Should%20Exist" class="name">Keyword Should Exist</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-keyword-succeeds">
                                                            <h2><a href="#wait-until-keyword-succeeds">Wait Until Keyword Succeeds</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the specified keyword and retries if it fails.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>retry</td>
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
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>name</code> and <code>args</code> define the keyword that is executed similarly as with
                                                                    <a href="#Run%20Keyword" class="name">Run Keyword</a>. How long to retry running the keyword is defined using <code>retry</code> argument either as timeout or count.
                                                                    <code>retry_interval</code> is the time to wait before trying to run the keyword again after the previous run has failed.
                                                                </p>
                                                                <p>If <code>retry</code> is given as timeout, it must be in Autosphere's time format (e.g.
                                                                    <code>1 minute</code>, <code>2 min 3 s</code>, <code>4.5</code>) that is explained in an appendix of Autosphere User Guide. If it is given as count, it must have <code>times</code> or <code>x</code> postfix (e.g. <code>5 times</code>, <code>10 x</code>).
                                                                    <code>retry_interval</code> must always be given in Autosphere's time format.
                                                                </p>
                                                                <p>If the keyword does not succeed regardless of retries, this keyword fails. If the executed keyword passes, its return value is returned.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Wait Until Keyword Succeeds</td>
                                                                        <td>2 min</td>
                                                                        <td>5 sec</td>
                                                                        <td>My keyword</td>
                                                                        <td>argument</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Wait Until Keyword Succeeds</td>
                                                                        <td>3x</td>
                                                                        <td>200ms</td>
                                                                        <td>My keyword</td>
                                                                    </tr>
                                                                </table>
                                                                <p>All normal failures are caught by this keyword. Errors caused by invalid syntax, test or keyword timeouts, or fatal exceptions (caused e.g. by <a href="#Fatal%20Error" class="name">Fatal Error</a>) are not caught.</p>
                                                                <p>Running the same keyword multiple times inside this keyword can create lots of output and considerably increase the size of the generated output files. It is possible to remove unnecessary keywords from the
                                                                    outputs using <code>--RemoveKeywords WUKS</code> command line option.
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
                                                    <li><a id="link-call-method" href="#call-method" class="">Call Method</a></li>
                                                    <li><a id="link-catenate" href="#catenate" class="">Catenate</a></li>
                                                    <li><a id="link-comment" href="#comment" class="">Comment</a></li>
                                                    <li><a id="link-continue-for-loop" href="#continue-for-loop" class="">Continue For Loop</a></li>
                                                    <li><a id="link-continue-for-loop-if" href="#continue-for-loop-if" class="">Continue For Loop If</a></li>
                                                    <li><a id="link-convert-to-binary" href="#convert-to-binary" class="">Convert To Binary</a></li>
                                                    <li><a id="link-convert-to-boolean" href="#convert-to-boolean" class="">Convert To Boolean</a></li>
                                                    <li><a id="link-convert-to-bytes" href="#convert-to-bytes" class="">Convert To Bytes</a></li>
                                                    <li><a id="link-convert-to-hex" href="#convert-to-hex" class="">Convert To Hex</a></li>
                                                    <li><a id="link-convert-to-integer" href="#convert-to-integer" class="">Convert To Integer</a></li>
                                                    <li><a id="link-convert-to-number" href="#convert-to-number" class="">Convert To Number</a></li>
                                                    <li><a id="link-convert-to-octal" href="#convert-to-octal" class="">Convert To Octal</a></li>
                                                    <li><a id="link-convert-to-string" href="#convert-to-string" class="">Convert To String</a></li>
                                                    <li><a id="link-create-dictionary" href="#create-dictionary" class="">Create Dictionary</a></li>
                                                    <li><a id="link-create-list" href="#create-list" class="">Create List</a></li>
                                                    <li><a id="link-evaluate" href="#evaluate" class="">Evaluate</a></li>
                                                    <li><a id="link-exit-for-loop" href="#exit-for-loop" class="">Exit For Loop</a></li>
                                                    <li><a id="link-exit-for-loop-if" href="#exit-for-loop-if" class="">Exit For Loop If</a></li>
                                                    <li><a id="link-fail" href="#fail" class="">Fail</a></li>
                                                    <li><a id="link-fatal-error" href="#fatal-error" class="">Fatal Error</a></li>
                                                    <li><a id="link-get-count" href="#get-count" class="">Get Count</a></li>
                                                    <li><a id="link-get-length" href="#get-length" class="">Get Length</a></li>
                                                    <li><a id="link-get-library-instance" href="#get-library-instance" class="">Get Library Instance</a></li>
                                                    <li><a id="link-get-time" href="#get-time" class="">Get Time</a></li>
                                                    <li><a id="link-get-variable-value" href="#get-variable-value" class="">Get Variable Value</a></li>
                                                    <li><a id="link-get-variables" href="#get-variables" class="">Get Variables</a></li>
                                                    <li><a id="link-import-library" href="#import-library" class="">Import Library</a></li>
                                                    <li><a id="link-import-resource" href="#import-resource" class="">Import Resource</a></li>
                                                    <li><a id="link-import-variables" href="#import-variables" class="">Import Variables</a></li>
                                                    <li><a id="link-keyword-should-exist" href="#keyword-should-exist" class="">Keyword Should Exist</a></li>
                                                    <li><a id="link-length-should-be" href="#length-should-be" class="">Length Should Be</a></li>
                                                    <li><a id="link-log" href="#log" class="">Log</a></li>
                                                    <li><a id="link-log-many" href="#log-many" class="">Log Many</a></li>
                                                    <li><a id="link-log-to-console" href="#log-to-console" class="">Log To Console</a></li>
                                                    <li><a id="link-log-variables" href="#log-variables" class="">Log Variables</a></li>
                                                    <li><a id="link-no-operation" href="#no-operation" class="">No Operation</a></li>
                                                    <li><a id="link-pass-execution" href="#pass-execution" class="">Pass Execution</a></li>
                                                    <li><a id="link-pass-execution-if" href="#pass-execution-if" class="">Pass Execution If</a></li>
                                                    <li><a id="link-regexp-escape" href="#regexp-escape" class="">Regexp Escape</a></li>
                                                    <li><a id="link-reload-library" href="#reload-library" class="">Reload Library</a></li>
                                                    <li><a id="link-remove-tags" href="#remove-tags" class="">Remove Tags</a></li>
                                                    <li><a id="link-repeat-keyword" href="#repeat-keyword" class="">Repeat Keyword</a></li>
                                                    <li><a id="link-replace-variables" href="#replace-variables" class="">Replace Variables</a></li>
                                                    <li><a id="link-return-from-keyword" href="#return-from-keyword" class="">Return From Keyword</a></li>
                                                    <li><a id="link-return-from-keyword-if" href="#return-from-keyword-if" class="">Return From Keyword If</a></li>
                                                    <li><a id="link-run-keyword" href="#run-keyword" class="">Run Keyword</a></li>
                                                    <li><a id="link-run-keyword-and-continue-on-failure" href="#run-keyword-and-continue-on-failure" class="">Run Keyword And Continue On Failure</a></li>
                                                    <li><a id="link-run-keyword-and-expect-error" href="#run-keyword-and-expect-error" class="">Run Keyword And Expect Error</a></li>
                                                    <li><a id="link-run-keyword-and-ignore-error" href="#run-keyword-and-ignore-error" class="">Run Keyword And Ignore Error</a></li>
                                                    <li><a id="link-run-keyword-and-return" href="#run-keyword-and-return" class="">Run Keyword And Return</a></li>
                                                    <li><a id="link-run-keyword-and-return-if" href="#run-keyword-and-return-if" class="">Run Keyword And Return If</a></li>
                                                    <li><a id="link-run-keyword-and-return-status" href="#run-keyword-and-return-status" class="">Run Keyword And Return Status</a></li>
                                                    <li><a id="link-run-keyword-if" href="#run-keyword-if" class="">Run Keyword If</a></li>
                                                    <li><a id="link-run-keyword-if-all-critical-tests-passed" href="#run-keyword-if-all-critical-tests-passed" class="">Run Keyword If All Critical Tests Passed</a></li>
                                                    <li><a id="link-run-keyword-if-all-tests-passed" href="#run-keyword-if-all-tests-passed" class="">Run Keyword If All Tests Passed</a></li>
                                                    <li><a id="link-run-keyword-if-any-critical-tests-failed" href="#run-keyword-if-any-critical-tests-failed" class="">Run Keyword If Any Critical Tests Failed</a></li>
                                                    <li><a id="link-run-keyword-if-any-tests-failed" href="#run-keyword-if-any-tests-failed" class="">Run Keyword If Any Tests Failed</a></li>
                                                    <li><a id="link-run-keyword-if-test-failed" href="#run-keyword-if-test-failed" class="">Run Keyword If Test Failed</a></li>
                                                    <li><a id="link-run-keyword-if-test-passed" href="#run-keyword-if-test-passed" class="">Run Keyword If Test Passed</a></li>
                                                    <li><a id="link-run-keyword-if-timeout-occurred" href="#run-keyword-if-timeout-occurred" class="">Run Keyword If Timeout Occurred</a></li>
                                                    <li><a id="link-run-keyword-unless" href="#run-keyword-unless" class="">Run Keyword Unless</a></li>
                                                    <li><a id="link-run-keywords" href="#run-keywords" class="">Run Keywords</a></li>
                                                    <li><a id="link-set-global-variable" href="#set-global-variable" class="">Set Global Variable</a></li>
                                                    <li><a id="link-set-library-search-order" href="#set-library-search-order" class="">Set Library Search Order</a></li>
                                                    <li><a id="link-set-local-variable" href="#set-local-variable" class="">Set Local Variable</a></li>
                                                    <li><a id="link-set-log-level" href="#set-log-level" class="">Set Log Level</a></li>
                                                    <li><a id="link-set-suite-documentation" href="#set-suite-documentation" class="">Set Suite Documentation</a></li>
                                                    <li><a id="link-set-suite-metadata" href="#set-suite-metadata" class="">Set Suite Metadata</a></li>
                                                    <li><a id="link-set-suite-variable" href="#set-suite-variable" class="">Set Suite Variable</a></li>
                                                    <li><a id="link-set-tags" href="#set-tags" class="">Set Tags</a></li>
                                                    <li><a id="link-set-task-variable" href="#set-task-variable" class="">Set Task Variable</a></li>
                                                    <li><a id="link-set-test-documentation" href="#set-test-documentation" class="">Set Test Documentation </a></li>
                                                    <li><a id="link-set-test-message" href="#set-test-message" class="">Set Test Message</a></li>
                                                    <li><a id="link-set-test-variable" href="#set-test-variable" class="">Set Test Variable</a></li>
                                                    <li><a id="link-set-variable" href="#set-variable" class="">Set Variable</a></li>
                                                    <li><a id="link-set-variable-if" href="#set-variable-if" class="">Set Variable If</a></li>
                                                    <li><a id="link-should-be-empty" href="#should-be-empty" class="">Should Be Empty</a></li>
                                                    <li><a id="link-should-be-equal" href="#should-be-equal" class="">Should Be Equal</a></li>
                                                    <li><a id="link-should-be-equal-as-integers" href="#should-be-equal-as-integers" class="">Should Be Equal As Integers</a></li>
                                                    <li><a id="link-should-be-equal-as-numbers" href="#should-be-equal-as-numbers" class="">Should Be Equal As Numbers</a></li>
                                                    <li><a id="link-should-be-equal-as-strings" href="#should-be-equal-as-strings" class="">Should Be Equal As Strings</a></li>
                                                    <li><a id="link-should-be-true" href="#should-be-true" class="">Should Be True</a></li>
                                                    <li><a id="link-should-contain" href="#should-contain" class="">Should Contain</a></li>
                                                    <li><a id="link-should-contain-any" href="#should-contain-any" class="">Should Contain Any</a></li>
                                                    <li><a id="link-should-contain-x-times" href="#should-contain-x-times" class="">Should Contain X Times</a></li>
                                                    <li><a id="link-should-end-with" href="#should-end-with" class="">Should End With</a></li>
                                                    <li><a id="link-should-match" href="#should-match" class="">Should Match</a></li>
                                                    <li><a id="link-should-match-regexp" href="#should-match-regexp" class="">Should Match Regexp</a></li>
                                                    <li><a id="link-should-not-be-empty" href="#should-not-be-empty" class="">Should Not Be Empty</a></li>
                                                    <li><a id="link-should-not-be-equal" href="#should-not-be-equal" class="">Should Not Be Equal</a></li>
                                                    <li><a id="link-should-not-be-equal-as-integers" href="#should-not-be-equal-as-integers" class="">Should Not Be Equal As Integers</a></li>
                                                    <li><a id="link-should-not-be-equal-as-numbers" href="#should-not-be-equal-as-numbers" class="">Should Not Be Equal As Numbers</a></li>
                                                    <li><a id="link-should-not-be-equal-as-strings" href="#should-not-be-equal-as-strings" class="">Should Not Be Equal As Strings</a></li>
                                                    <li><a id="link-should-not-be-true" href="#should-not-be-true" class="">Should Not Be True</a></li>
                                                    <li><a id="link-should-not-contain" href="#should-not-contain" class="">Should Not Contain</a></li>
                                                    <li><a id="link-should-not-contain-any" href="#should-not-contain-any" class="">Should Not Contain Any</a></li>
                                                    <li><a id="link-should-not-end-with" href="#should-not-end-with" class="">Should Not End With</a></li>
                                                    <li><a id="link-should-not-match" href="#should-not-match" class="">Should Not Match</a></li>
                                                    <li><a id="link-should-not-match-regexp" href="#should-not-match-regexp" class="">Should Not Match Regexp</a></li>
                                                    <li><a id="link-should-not-start-with" href="#should-not-start-with" class="">Should Not Start With</a></li>
                                                    <li><a id="link-should-start-with" href="#should-start-with" class="">Should Start With</a></li>
                                                    <li><a id="link-sleep" href="#sleep" class="">Sleep</a></li>
                                                    <li><a id="link-variable-should-exist" href="#variable-should-exist" class="">Variable Should Exist</a></li>
                                                    <li><a id="link-variable-should-not-exist" href="#variable-should-not-exist" class="">Variable Should Not Exist</a></li>
                                                    <li><a id="link-wait-until-keyword-succeeds" href="#wait-until-keyword-succeeds" class="">Wait Until Keyword Succeeds</a></li>
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