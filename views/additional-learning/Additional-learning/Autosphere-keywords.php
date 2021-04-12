<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Keywords</b>
                        </h4>

                    </div>
                    <div class="body">
                        <p>Think of keywords in Autosphere as functions in other programming languages.</p>
                        <p>Consider this example script:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Example robot that downloads a remote Excel file and opens it.
Library           Autosphere .Excel.Files
Library           Autosphere .HTTP

*** Tasks ***
Download an Excel file, open it, and close it
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True
    Open Workbook    Data.xlsx
    Close Workbook

</code></code></pre>
                            </div>
                        </div>
                        <p>This script has one <strong>Task</strong> that we called
                            <code>Download an Excel file, open it, and close it</code>.
                        </p>
                        <p>To accomplish the task, we call three keywords: <code>Download</code>,
                            <code>Open Workbook</code>, and <code>Close Workbook</code>.
                        </p>
                        <blockquote>
                            <p>Note that keywords within tasks need to be <strong>itended with spaces</strong>.</p>
                        </blockquote>
                        <h4 id="keyword-arguments">Keyword arguments</h4>
                        <p>Keywords can accept zero or more arguments. You can read each keyword&#x27;s documentation to find out which arguments it supports.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Download an Excel file, open it, and close it
    # This task executes these three keywords:
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True
    Open Workbook    Data.xlsx
    Close Workbook
</code></code></pre>
                            </div>
                        </div>
                        <p>In our example task, when we call the <code>Download</code> keyword, we are passing two arguments:
                        </p>
                        <ul>
                            <li><code>http://training.autosphere.ai/SalesData.xlsx</code>: the URL to download the file from.</li>
                            <li><code>overwrite=True</code> : we are telling the keyword to overwrite the file if it exists already.
                            </li>
                        </ul>
                        <p>The <code>Open Workbook</code> keyword needs one argument (the path of the Excel file to open).
                        </p>
                        <p>The <code>Close Workbook</code> one does not accept any arguments.</p>
                        <blockquote>
                            <p>The keyword and each of the arguments need to be <strong>separated by spaces</strong>.</p>
                        </blockquote>
                        <h4 id="positional-arguments-named-arguments-and-default-values"> Positional arguments, named arguments, and default values</h4>
                        <p>The <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=autosphere-http"><code>Download</code>
                                keyword</a>, part of the <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=autosphere-http"><code>Autosphere .HTTP</code></a> library, supports these arguments:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers "><code>url: str
target_file: str=None
binary: bool=True
verify: bool=True
force_new_session: bool=False
overwrite: bool=False
</code></code></pre>
                            </div>
                        </div>
                        <p>The arguments <code>target_file</code>, <code>binary</code>, <code>verify</code>,
                            <code>force_new_session</code>, and <code>overwrite</code> all have a default value, represented by the value after the <code>=</code> sign. For example, the keyword, by default, will not overwrite an existing file (<code>overwrite: bool=False</code>).
                            The <code>url</code> argument does not have a default value, so it is required.
                        </p>
                        <p>For each argument, we are also told which type of data it accepts (string values, boolean values).
                        </p>
                        <p>In our example, we are interested in the <code>url</code> and the <code>overwrite</code> arguments. We want to make sure that the file is overwritten each time, so we have to override the default value (<code>False</code>), with our
                            own value (<code>True</code>).</p>
                        <p>The <strong>order</strong> in which these arguments appear <strong>matters</strong>. We can call the keyword without specifying the name of the first argument (<code>url</code>) like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Download an Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx
</code></code></pre>
                            </div>
                        </div>
                        <p>And it will work since it is the first one on the list.</p>
                        <p>The arguments can also be called <strong>explicitly by name</strong> (named arguments). In this case, the order in which they appear does not matter:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Download an Excel file
    # These keyword calls are equivalent:
    Download    url=http://training.autosphere.ai/SalesData.xlsx    overwrite=True
    Download    overwrite=True    url=http://training.autosphere.ai/SalesData.xlsx
</code></code></pre>
                            </div>
                        </div>
                        <p>The two styles are often combined. For example, here we are passing the first argument by position (<code>url</code>), and the <code>overwrite</code> argument by name, which allows us to leave all other arguments to their default values.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Download an Excel file
    # Combining positional and named arguments:
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="variable-number-of-arguments"> Variable number of arguments</h4>
                        <p>It is also possible for a keyword to accept any number of arguments. These arguments, called
                            <strong>varargs</strong>, can be combined with mandatory arguments and arguments with default values, but they are always given after them. In the keyword documentation, they are marked with an asterisk.
                        </p>
                        <p>For example, the <code>Remove Files</code> and <code>Join Paths</code> keywords from the OperatingSystem library have the arguments <code>*paths</code> and <code>base, *parts</code>, respectively. The former can be used with any number
                            of arguments, but the latter requires at least one argument.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">Example
    Remove Files    ${TEMPDIR}/f1.txt    ${TEMPDIR}/f2.txt    ${TEMPDIR}/f3.txt
    @{paths} =    Join Paths    ${TEMPDIR}    f1.txt    f2.txt    f3.txt    f4.txt
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="adding-keywords-to-your-robot-script"> Adding keywords to your robot script</h4>
                        <p>You can add keywords to your script in two ways:</p>
                        <ul>
                            <li><strong>Library keywords</strong>: Importing a library by adding it to your
                                <code>*** Settings ***</code> section will allow you to use all keywords contained in the library. You can also create
                                your own custom library.
                            </li>
                            <li><strong>User keywords</strong>: You can write your own keywords in a
                                <code>*** Keywords ***</code> section in your script.
                            </li>
                        </ul>
                        <h4 id="creating-user-keywords"> Creating user keywords</h4>
                        <p>You can create a user keyword by combining existing keywords.</p>
                        <p>Create a <code>*** Keywords ***</code> section in your script, choose a name for your keyword, and call any existing keywords you need in it:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Take a screenshot of the login page
    Open Available Browser    http://training.autosphere.ai/#/
    Capture Page Screenshot
</code></code></pre>
                            </div>
                        </div>
                        <p>You can then call your keyword inside a task or another keyword.</p>
                        <h4 id="user-keywords-with-arguments"> User keywords with arguments</h4>
                        <p>To make the keyword more reusable, you can pass arguments to it by adding the
                            <code>[Arguments]</code> setting to the keyword:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Take a screenshot of a web page
    [Arguments]    ${url}
    Open Available Browser    ${url}
    Capture Page Screenshot
</code></code></pre>
                            </div>
                        </div>
                        <p>You can then call your keyword inside a task, or another keyword:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Take screenshots
    Take a screenshot of web page    https://www.google.com

</code></code></pre>
                            </div>
                        </div>
                        <p>You can also specify more than one argument, and default values:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Perform a search on a search engine
    [Arguments]    ${search_url}=https://google.com/?q=    
    Open Available Browser    ${search_url}${search_term}
</code></code></pre>
                            </div>
                        </div>
                        <p>You could then call this keyword in your task like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Search using different search engines
    # No arguments passed, use the default, searching on Google for &quot;Autosphere &quot;:
    Perform a search on a search engine
    # Search for &quot;Autosphere &quot; on &quot;duckduckgo&quot;:
    Perform a search on a search engine    https://duckduckgo.com/?q    Autosphere 
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="user-keywords-with-return-values"> User keywords with return values</h4>
                        <p>Just like library keywords, user keywords can have <strong>return values</strong>.</p>
                        <p>Add your return value after the <code>[Return]</code> setting:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Get page title of a web page
    [Arguments]    ${url}
    Open Available Browser    ${url}
    ${page_title}=    Get Title
    [Return]    ${page_title}
</code></code></pre>
                            </div>
                        </div>
                        <blockquote>
                            <p>Note that we are assigning the result of the <code>Get Title</code> keyword to a <strong>variable</strong>, and then returning the variable.</p>
                        </blockquote>
                        <p>You would then call the keyword in your task or another keyword like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Get page titles
    ${title1}=    Get page title of a web page    https://www.google.com

</code></code></pre>
                            </div>
                        </div>
                        <h4 id="user-keywords-documentation"> User keywords documentation</h4>
                        <p>Using the <code>[Documentation]</code> setting, you can add a description of what the keyword does:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Get page title of a web page
    [Documentation]    Opens a browser and returns the title of the webpage found at the given URL.
    [Arguments]    ${url}
    Open Available Browser    ${url}
    ${page_title}=    Get Title
    [Return]    ${page_title}
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