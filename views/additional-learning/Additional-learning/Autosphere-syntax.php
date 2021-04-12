<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Basic Syntax</b>
                        </h4>

                    </div>
                    <div class="body">
                        <p>Autosphere code aims to be readable so that even an untrained eye can understand what the code does. Here is an example of a Autosphere script:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***

Library           Autosphere.Browser

*** Variables ***
${URL}=    http://training.autosphere.ai/#/

*** Keywords ***
Open The Intranet Website
    Open Available Browser    ${URL}

*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
    Submit Form

*** Tasks ***
Open the intranet site and log in
    Open The Intranet Website
    Log In
</code></code></pre>
                            </div>
                        </div>
                        <p>Despite being close to natural language, many syntax rules need to be followed.</p>
                        <h4 id="sections"> Sections</h4>
                        <p>A typical Autosphere script is divided into different <strong>sections</strong>:</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Section</th>
                                    <th>Used for</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>*** Settings ***</code></td>
                                    <td>Importing test libraries, resource files, variable files. Adding metadata.</td>
                                </tr>
                                <tr>
                                    <td><code>*** Variables ***</code></td>
                                    <td>Defining <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-variables">variables</a> that can be used elsewhere in the script.</td>
                                </tr>
                                <tr>
                                    <td><code>*** Keywords ***</code></td>
                                    <td>Definining <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-keywords">user
                                            keywords</a> that are specific to the script.</td>
                                </tr>
                                <tr>
                                    <td><code>*** Tasks ***</code></td>
                                    <td>Creating tasks, calling one or more keywords.</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>Different sections are identified by their header row. The recommended header format is three asterisks, a space, the name of the section, a space, three asterisks:
                            <code>*** Settings ***</code>. In addition to using the plural format, singular variants like
                            <code>Setting</code> and <code>Task</code> are accepted.
                        </p>
                        <blockquote>
                            <p>When using Autosphere Studio, use the plural form of section headers. To take advantage of the cell by cell execution, add each keyword and task in its own <code>*** Keywords ***</code> or <code>*** Tasks ***</code> section.</p>
                        </blockquote>
                        <h4 id="space-separated-syntax"> Space-separated syntax</h4>
                        <p>Between two &quot;tokens&quot;, there need to be two or more spaces or one or more tab characters.
                        </p>
                        <p>In this example:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
    Input Text    username    developer
</code></code></pre>
                            </div>
                        </div>
                        <p>Before the <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-keywords">keyword</a> <code>Input Text</code>, and between it and each of its <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-keywords">arguments</a> (<code>username</code> and <code>developer</code>),
                            you need to add more than one space for them to be recognized correctly by Autosphere.</p>
                        <p>The number of spaces used as the separator can vary, as long as there are <strong>at least
                                two</strong>; aligning the data nicely in <code>*** Settings ***</code>, and elsewhere, makes the data easier to understand. In our courses and examples, we are using <strong>four
                                spaces</strong> as a convention.</p>

                        <h4 id="comments"> Comments</h4>
                        <p>Lines starting with the <code>#</code> character are ignored by Autosphere and are used for comments like in this example:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot"># This is a code comment.
*** Settings ***
Library           Autosphere.Browser

*** Variables ***
${URL}=    http://training.autosphere.ai/#/

*** Keywords ***
Open The Intranet Website
    Open Available Browser    ${URL}
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="markdown-in-comments"> Markdown in comments</h4>
                        <p>Using Autosphere Studio, you can apply additional formatting to your comments by adding Markdown Cells to your Notebook.</p>
                        <h4 id="escaping"> Escaping</h4>
                        <p>In case your data includes characters used by Autosphere&#x27;s syntax, you will need to escape it.</p>
                        <h4 id="escaping-special-characters"> Escaping special characters</h4>
                        <p>The backslash character can be used to escape special characters so that their literal values are used.
                        </p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Character</th>
                                    <th>Needs to be escaped because</th>
                                    <th>Examples</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>\$</code></td>
                                    <td><code>$</code> introduces a scalar variable</td>
                                    <td><code>\${notavariable}</code></td>
                                </tr>
                                <tr>
                                    <td><code>\@</code></td>
                                    <td><code>@</code> introduces a list variable</td>
                                    <td><code>\@{notavariable}</code></td>
                                </tr>
                                <tr>
                                    <td><code>\%</code></td>
                                    <td><code>%</code> introduces a dictionary variable</td>
                                    <td><code>\%{notavariable}</code></td>
                                </tr>
                                <tr>
                                    <td><code>\=</code></td>
                                    <td><code>$</code> used as part of the named argument syntax</td>
                                    <td><code>not\=namedargument</code></td>
                                </tr>
                                <tr>
                                    <td><code>\#</code></td>
                                    <td><code>#</code> is used to start a line comment</td>
                                    <td><code>\# not comment</code></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>For example, if you have a variable that contains the <strong>value</strong>
                            <code>${my_variable}</code>, you will need to <em>escape it</em> with the backslash character:
                            <code>\${my_variable}</code> before using it as an argument for a keyword.
                        </p>
                        <h4 id="escape-sequences"> Escape sequences</h4>
                        <p>The backslash character also allows creating special escape sequences that are recognized as characters that would otherwise be hard or impossible to create in Autosphere scripts.</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Sequence</th>
                                    <th>Meaning</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>\n</code></td>
                                    <td>Newline character</td>
                                    <td><code>first line\nsecond line</code></td>
                                </tr>
                                <tr>
                                    <td><code>\r</code></td>
                                    <td>Carriage return</td>
                                    <td><code>text\rmore text</code></td>
                                </tr>
                            </tbody>
                        </table>
                        <blockquote>
                            <p>The Built-in variable <code>${\n}</code> can be used if operating system dependent line terminator is needed (<code>\r\n</code> on Windows and <code>\n</code> elsewhere).</p>
                        </blockquote>
                        <h4 id="handling-empty-values"> Handling empty values</h4>
                        <p>Because Autosphere&#x27;s space-separated format uses a variable number of spaces to separate elements, empty values need to be escaped, either with the backslash character or the
                            <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-variables">built-in variable</a>
                            <code>${EMPTY}</code>. We recommend using the <code>${EMPTY}</code> variable because it is more legible.
                        </p>
                        <p>Here&#x27;s how you can pass empty arguments to a keyword called <code>Do Something</code> that accepts two arguments:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Escape empty argument using backslash
    Do Something    first arg    \
    Do Something    \            second arg

*** Tasks ***
Escape empty argument using ${EMPTY}
    Do Something    first arg    ${EMPTY}
    Do Something    ${EMPTY}     second arg
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="handling-spaces"> Handling spaces</h4>
                        <p>If you need to explicitly handle empty spaces as arguments of a keyword, you will need to escape them. Similarly, as when escaping empty values, it is possible to do that either by using the backslash character or by using the built-in
                            variable <code>${SPACE}</code>.</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Escaping with backslash</th>
                                    <th>Escaping with <code>${SPACE}</code></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>\ leading space</code> </td>
                                    <td><code>\${SPACE}leading space</code></td>
                                </tr>
                                <tr>
                                    <td><code>trailing space \</code></td>
                                    <td><code>trailing space${SPACE}</code></td>
                                </tr>
                                <tr>
                                    <td><code>\ \</code></td>
                                    <td><code>${SPACE}</code></td>
                                </tr>
                                <tr>
                                    <td><code>consecutive \ \ spaces</code></td>
                                    <td><code>consecutive${SPACE * 3}spaces</code></td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 id="splitting-data-into-several-rows"> Splitting data into several rows</h4>
                        <p>If your content does not fit in one line, you can split the line and create continuing rows with the ellipsis (<code>...</code>) sign. Ellipses can be indented to match the starting row&#x27;s indentation and must always be followed
                            by one or more spaces.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation      Here we have documentation for this robot.
...                Documentation is often quite long, and
...
...                It can also contain multiple paragraphs.

*** Variables ***
@{LIST}            this     list     is      quite    long     and
...                items in it can also be long

*** Tasks ***
Example
    Do X    first argument    second argument    third argument
    ...    fourth argument    fifth argument    sixth argument
    ${var} =    Get X
    ...    first argument passed to this keyword is pretty long
    ...    second argument passed to this keyword is long too
</code></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>