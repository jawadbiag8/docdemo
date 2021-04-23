<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Basic concepts</b>
                        </h4>

                    </div>
                    <div class="body">
                        <h4 id="what-does-robot-framework-code-look-like"> What does Autosphere code look like?</h4>
                        <p>Autosphere code aims to be easily readable so that even an untrained eye can understand what the code does.</p>
                        <p>Take this example, taken from our <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=intro">Beginners&#x27;
                                course</a>:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***

Library           Autosphere.Browser

*** Variables ***
${URL}=    http://training.autosphere.ai/#/

*** Keywords ***
Open The Internet Website
    Open Available Browser    ${URL}

*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
    Submit Form

*** Tasks ***
Open the internet site and log in
    Open The Internet Website
    Log In
</code></code></pre>
                            </div>
                        </div>
                        <p>You probably can figure out that this brief script executes a robot that opens a website and logs into it using the credentials for a user called &quot;developer&quot;.</p>
                        <p>Let&#x27;s have a quick look at how this code is structured into its main parts and the syntax that it uses.</p>
                        <h4 id="what-are-keywords"> What are Keywords?</h4>
                        <p>Think of keywords as functions in other programming languages. Keywords are operations that your robot can execute to accomplish various tasks, and are the foundation of any robot script. Keywords can be reused, and they can be composed,
                            which means that you can create keywords by calling other keywords.</p>
                        <p>Let&#x27;s take this part of the script as an example:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Open The Internet Website
    Open Available Browser    http://training.autosphere.ai/#/
</code></code></pre>
                            </div>
                        </div>
                        <p>In this code, <code>Open The Internet Website</code> is a keyword. You will notice that the next line is indented by four spaces: this is very important and required in the tabular syntax that Autosphere uses. The indentation
                            tells the framework that
                            <code>Open Available Browser</code>, also a keyword, is contained by the
                            <code>Open The Intranet Website</code> keyword.
                        </p>
                        <p><code>Open The Intranet Website</code> does not require any argument to be passed to it, but the contained keyword <code>Open Available Browser</code> does need to know which page to open the browser to. This is called an argument.
                            Keywords can require one or more arguments. In our case, the argument is the URL of the site to be opened.</p>
                        <blockquote>
                            <p>Note: Indentation is also required between a keyword and its arguments, and between the arguments themselves.</p>
                        </blockquote>
                        <h4 id="what-are-libraries"> What are Libraries?</h4>
                        <p>Autosphere itself is not built to interact with a specific system and does not have a strictly defined list of functionalities. Instead, it is built to be easily extended to work with any possible target system. These extensions
                            to the framework are called libraries.</p>
                        <p>The framework itself ships with <a href="documantation.php?page=libraries&node=built-in&subnode=intro">standard libraries</a>, used to handle common cases. </p>
                        <p>Autosphere maintains a set of libraries that are built specifically to support Autosphere cases. These libraries form the <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Framework</a>.</p>
                        <h4 id="how-do-i-add-a-library"> How do I add a library?</h4>


                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***

Library           Autosphere.Browser
</code></code></pre>
                            </div>
                        </div>
                        <p>Keywords are organized in libraries. <strong>When you add a library, you get access to all the
                                keywords it contains</strong>. In our example:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Open The Intranet Website
    Open Available Browser    http://training.autosphere.ai/#/
</code></code></pre>
                            </div>
                        </div>
                        <p><code>Open Available Browser</code> is, in fact, a keyword that is provided by the
                            <code>Autosphere.Browser</code> library that we have imported in the <code>*** Settings ***</code> section at the top of the script.
                        </p>
                        <p>To add new packages you typically make use of Python&#x27;s package managers, such as <a href="https://pypi.org/project/pip/" target="_blank" rel="noopener noreferrer">pip</a> or <a href="https://docs.conda.io/en/latest/" target="_blank" rel="noopener noreferrer">conda</a>.
                        </p>
                        <h4 id="what-if-i-dont-find-a-library-that-does-what-i-need"> What if I don&#x27;t find a library that does what I need?</h4>
                        <p>Under the hood, libraries are written in the <a href="https://www.python.org/" target="_blank" rel="noopener noreferrer">Python</a> or, more rarely, Java programming languages, and adding a new library is quite fast and easy to do.
                            If you don&#x27;t find a library that matches your use case, you can write one, or hire someone that can do it for you. If you do, consider the option of releasing it as open-source software, so that the community can learn from
                            it and improve it!</p>

                        <h4 id="what-are-tasks"> What are Tasks?</h4>
                        <p>Keywords are the building blocks of robots, and libraries will get you more keywords, but a robot does nothing if you don&#x27;t assign it a <strong>Task</strong>.</p>
                        <p>In our example:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Open the intranet site and log in
    Open The Intranet Website
    Log In
</code></code></pre>
                            </div>
                        </div>
                        <p><code>Open the intranet site and log in</code> is the <strong>task</strong> that our robot will do when we run it. A task is a set of keywords that are executed one after the other. In our case, the robot will run the <code>Open The Intranet Website</code> keyword, and then the
                            <code>Log In</code> keyword.
                        </p>
                        <h4 id="what-are-variables"> What are Variables?</h4>
                        <p>Instead of writing directly the value of the URL of the website we want the robot to open, we can put that value in a <a href="https://en.wikipedia.org/wiki/Variable_(computer_science)" target="_blank" rel="noopener noreferrer">variable</a>,
                            like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Variables ***
${URL}=    http://training.autosphere.ai/#/
</code></code></pre>
                            </div>
                        </div>
                        <p>We can then refer to the URL anywhere else in the script by calling the variable:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Open The Internet Website
    Open Available Browser    ${URL}
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="keep-reading"> Keep reading!</h4>
                        <p>You learned about the basics of Autosphere. Here&#x27;s how you can continue from here:
                        </p>
                        <ul>
                            <li>If you haven&#x27;t already, follow our <a href="documantation.php?page=guide&node=quickstart-guide">Quickstart
                                    guide</a> to get up and running with Autosphere</li>
                            <li>Take our <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=intro">Beginner&#x27;s course</a> to build a robot from start to finish, no previous knowledge needed (and now that you read this article, you already have an advantage! ).</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>