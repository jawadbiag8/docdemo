<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Variables</b>
                        </h4>

                    </div>
                    <div class="body">
                        <p>Autosphere variables are useful when:</p>
                        <ul>
                            <li>strings change often in the tasks. With variables you only need to make these changes in one place.
                            </li>
                            <li>creating system-independent tasks (<code>${RESOURCES}</code> instead of
                                <code>c:\resources</code>, <code>${HOST}</code> instead of <code>10.0.0.1:8080</code>). Variables can be overwritten using <strong>command-line</strong> switches (
                                <code>--variable HOST:10.0.0.2:1234 --variable RESOURCES:/opt/resources</code>) or environment variables.
                            </li>
                            <li>there is a need to have objects as arguments for keywords.</li>
                            <li>different keywords need to communicate. Assign a return value from one keyword to a variable and pass it as an argument to another.</li>
                            <li>values in the task data are long or complicated (<code>${URL}</code> is clearer than
                                <code>http://long.domain.name:8080/path/to/service?foo=1&amp;bar=2&amp;zap=42</code>).
                            </li>
                        </ul>
                        <h4 id="readability-and-flexibility">Readability and flexibility</h4>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Using variables for readability and flexibility.
Library           Autosphere.Browser
Suite Teardown    Close All Browsers

*** Variables ***
${I_FEEL_LUCKY_SEARCH_BUTTON}    css:.FPdoLc &gt; center:nth-child(1) &gt; input:nth-child(2)
${SEARCH_URL}     https://www.google.com/search?q=
${SEARCH_TERM}    cute cat

*** Tasks ***
Search using hard-coded search URL and term
    Open Available Browser    https://www.google.com/search?q=cute+cat

*** Tasks ***
Search using variables
    Open Available Browser    ${SEARCH_URL}${SEARCH_TERM}

*** Tasks ***
Search using environment variables
    Open Available Browser    %{SEARCH_URL}%{SEARCH_TERM}
    # No modifications needed when changing the search URL or the term.
    # Configure the variables in Autosphere Cloud.
    # Use devdata/env.json file for local testing.

*** Tasks ***
Search using local variables
    ${search_url}    Set Variable    https://duckduckgo.com/?q=
    ${search_term}    Set Variable    Autosphere
    Open Available Browser    ${search_url}${search_term}

*** Tasks ***
Click an element using a hard-to-understand locator
    Open Available Browser    https://www.google.com/
    Click Element    css:.FPdoLc &gt; center:nth-child(1) &gt; input:nth-child(2)

*** Tasks ***
Click an element using a well-named locator variable
    Open Available Browser    https://www.google.com/
    Click Element    ${I_FEEL_LUCKY_SEARCH_BUTTON}

</code></code></pre>
                            </div>
                        </div>
                        <blockquote>
                            <p>Read more about <strong>using
                                    environment variables</strong> with Autosphere.</p>
                        </blockquote>
                        <h4 id="different-types-of-variables"> Different types of variables</h4>
                        <p>Variable name consists of the type identifier (<code>$</code>, <code>@</code>,
                            <code>&amp;</code>, <code>%</code>), curly braces (<code>{</code>, <code>}</code>) and the variable name between the braces. Use capital letters with global variables in the
                            <code>*** Variables ***</code> section (<code>${SEARCH_URL}</code>). Use small letters with local variables that are only available in certain tasks or user keywords (
                            <code>${search_url}</code>).
                        </p>
                        <ul>
                            <li>Scalar: <code>${var}</code></li>
                            <li>List: <code>@{var}</code></li>
                            <li>Dictionary: <code>&amp;{var}</code></li>
                            <li>Environment: <code>%{var}</code></li>
                        </ul>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Using different kinds of variables.

*** Variables ***
${STRING}         cute cat
${INT_AS_STRING}    1
${INT_AS_INT}     ${1}
${FLOAT}          ${3.14}
@{LIST}           one    two    three
&amp;{DICTIONARY}     string=cat    int=${1}    [email&#160;protected] {LIST}
${ENVIRONMENT}    %{PATH}

*** Tasks ***
Log variables
    Log Many
    ...    ${STRING}    # cute cat
    ...    ${INT_AS_STRING}    # 1
    ...    ${INT_AS_INT}    # 1
    ...    ${FLOAT}    # 3.14
    ...    ${LIST}    # [&#x27;one&#x27;, &#x27;two&#x27;, &#x27;three&#x27;]
    ...    ${LIST}[0]    # one
    ...    ${LIST}[1:]    # [&#x27;two&#x27;, &#x27;three&#x27;]
    ...    ${DICTIONARY}    # {&#x27;string&#x27;: &#x27;cat&#x27;, &#x27;int&#x27;: 1, &#x27;list&#x27;: [&#x27;one&#x27;, &#x27;two&#x27;, &#x27;three&#x27;]}
    ...    ${DICTIONARY}[string]    # cat
    ...    ${DICTIONARY.int}    # 1
    ...    ${DICTIONARY}[list][0]    # one
    ...    ${ENVIRONMENT}    # entrypoints:bin:/Users/&lt;username&gt;/Projects/venv/bin...

</code></code></pre>
                            </div>
                        </div>
                        <h4 id="assigning-variables"> Assigning variables</h4>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Assigning variables.
Library           Collections
# You can create variables in a Python file and import them:
#Variables        variables.py

*** Keywords ***
What Does The Cat Say
    [Return]    Meow!

*** Tasks ***
Assign variables
    ${string}    Set Variable    Hello, world!    # ${string} = Hello, world!
    @{list}    Create List    a    b    c    # @{list} = [ a | b | c ]
    &amp;{dict}    Create Dictionary    key1=val1    key2=val2    # &amp;{dict} = { key1=val1 | key2=val2 }
    ${a}    ${b}    ${c}    Create List    a    b    c    # ${a} = a, ${b} = b, ${c} = c
    ${cat_says}    What Does The Cat Say    # ${cat_says} = Meow!
    ${evaluate}    Evaluate    datetime.date.today()    # ${evaluate} = 2020-09-08
    ${inline_evaluation}
    ...    Set Variable
    ...    ${{datetime.date.today() + datetime.timedelta(1)}}    # ${inline_evaluation} = 2020-09-09

</code></code></pre>
                            </div>
                        </div>
                        <blockquote>
                            <p>Expressions are evaluated using Python&#x27;s <a href="https://docs.python.org/3/library/functions.html#eval" target="_blank" rel="noopener noreferrer"><code>eval</code></a> function. All Python built-in functions are available.
                                All unrecognized Python variables are considered to be modules that are automatically imported. It is possible to use all available Python modules, including the standard modules and any installed third party modules.</p>
                        </blockquote>
                        <h4 id="built-in-variables"> Built-in variables</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Variable</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>{CURDIR}</code></td>
                                    <td>The path to the task data file directory.</td>
                                </tr>
                                <tr>
                                    <td><code>${EMPTY}</code></td>
                                    <td>Like the <code>${SPACE}</code>, but without the space. Used to <strong>pass empty
                                            arguments</strong>.</td>
                                </tr>
                                <tr>
                                    <td><code>${EXECDIR}</code></td>
                                    <td>The path to the task execution directory.</td>
                                </tr>
                                <tr>
                                    <td><code>${False}</code></td>
                                    <td>Boolean <code>False</code>.</td>
                                </tr>
                                <tr>
                                    <td><code>${None}</code></td>
                                    <td>Python <code>None</code>.</td>
                                </tr>
                                <tr>
                                    <td><code>${null}</code></td>
                                    <td>Java <code>null</code>.</td>
                                </tr>
                                <tr>
                                    <td><code>${SPACE}</code></td>
                                    <td>ASCII space (<code>\x20</code>).</td>
                                </tr>
                                <tr>
                                    <td><code>${TEMPDIR}</code></td>
                                    <td>The path to the temporary directory.</td>
                                </tr>
                                <tr>
                                    <td><code>${True}</code></td>
                                    <td>Boolean <code>True</code>.</td>
                                </tr>
                                <tr>
                                    <td><code>${/}</code></td>
                                    <td>The directory path separator. <code>/</code> in UNIX-like systems and <code>\</code> in Windows.</td>
                                </tr>
                                <tr>
                                    <td><code>${:}</code></td>
                                    <td>The path element separator. <code>:</code> in UNIX-like systems and <code>;</code> in Windows.</td>
                                </tr>
                                <tr>
                                    <td><code>${\n}</code></td>
                                    <td>The line separator. <code>\n</code> in UNIX-like systems and <code>\r\n</code> in Windows.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 id="runtime-variables"> Runtime variables</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Variable</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>${DEBUG_FILE}</code></td>
                                    <td><strong>Debug file</strong>.</td>
                                </tr>
                                <tr>
                                    <td><code>${KEYWORD_MESSAGE}</code></td>
                                    <td>The error message of the current keyword.</td>
                                </tr>
                                <tr>
                                    <td><code>${KEYWORD_STATUS}</code></td>
                                    <td>The status of the current keyword, either <code>PASS</code> or <code>FAIL</code>.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>${LOG_FILE}</code></td>
                                    <td>Log file.</td>
                                </tr>
                                <tr>
                                    <td><code>${LOG_LEVEL}</code></td>
                                    <td>Log level</td>
                                </tr>
                                <tr>
                                    <td><code>${OUTPUT_DIR}</code></td>
                                    <td>Output directory.</td>
                                </tr>
                                <tr>
                                    <td><code>${OUTPUT_FILE}</code></td>
                                    <td>Output file.</td>
                                </tr>
                                <tr>
                                    <td><code>${PREV_TEST_MESSAGE}</code></td>
                                    <td>The error message of the previous task.</td>
                                </tr>
                                <tr>
                                    <td><code>${PREV_TEST_NAME}</code></td>
                                    <td>The name of the previous task, or an empty string if no tasks have been executed yet.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>${PREV_TEST_STATUS}</code></td>
                                    <td>The status of the previous task: <code>PASS</code>, <code>FAIL</code>, or an empty string when no tasks have been executed.</td>
                                </tr>
                                <tr>
                                    <td><code>${REPORT_FILE}</code></td>
                                    <td>Report file.</td>
                                </tr>
                                <tr>
                                    <td><code>${SUITE_DOCUMENTATION}</code></td>
                                    <td>The documentation of the current task suite.</td>
                                </tr>
                                <tr>
                                    <td><code>${SUITE_MESSAGE}</code></td>
                                    <td>The full message of the current task suite, including statistics.</td>
                                </tr>
                                <tr>
                                    <td><code>&amp;{SUITE_METADATA}</code></td>
                                    <td>The metadata of the current task suite.</td>
                                </tr>
                                <tr>
                                    <td><code>${SUITE_NAME}</code></td>
                                    <td>The full name of the current task suite.</td>
                                </tr>
                                <tr>
                                    <td><code>${SUITE_SOURCE}</code></td>
                                    <td>The path to the suite file or directory.</td>
                                </tr>
                                <tr>
                                    <td><code>${SUITE_STATUS}</code></td>
                                    <td>The status of the current task suite, either <code>PASS</code> or <code>FAIL</code>.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>${TEST_DOCUMENTATION}</code></td>
                                    <td>The documentation of the current task.</td>
                                </tr>
                                <tr>
                                    <td><code>${TEST_MESSAGE}</code></td>
                                    <td>The message of the current task.</td>
                                </tr>
                                <tr>
                                    <td><code>${TEST_NAME}</code></td>
                                    <td>The name of the current task.</td>
                                </tr>
                                <tr>
                                    <td><code>${TEST_STATUS}</code></td>
                                    <td>The status of the current task, either <code>PASS</code> or <code>FAIL</code>.</td>
                                </tr>
                                <tr>
                                    <td><code>@{TEST_TAGS}</code></td>
                                    <td>The tags of the current task in alphabetical order.</td>
                                </tr>
                            </tbody>
                        </table>




                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>