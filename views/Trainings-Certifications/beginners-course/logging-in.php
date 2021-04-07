<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b> Course</b>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form">Next</a></li>
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=getting-to-the-intranet">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2>Logging into the Internet</h2>
                        <aside class="sc-hHftDr ewYhue">
                        <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>
                        <p>Now that it has opened the browser, our robot needs to log into the intranet, using User&#x27;s credentials.
                        </p>
                        <h4 id="the-second-step-logging-in">The second step: logging in</h4>
                        <p>Let&#x27;s add the next logical step to our task. We&#x27;ll call it <code>Log In</code>. The
                            <code>*** Tasks ***</code> cell should look like this after adding the step:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
</code></code></pre>
                            </div>
                        </div>
                        <p>Add a new <code>*** Keywords ***</code> cell before the <code>*** Tasks ***</code> cell and add this code to it:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
</code></code></pre>
                            </div>
                        </div>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-adding-new-cell.gif" alt="Adding new keyword cell" /></p>
                        <p>Ok! Now we have to tell our robot to find the correct fields on the page and fill them.</p>
                        <blockquote>
                            <p>Note: Defining each keyword in a separate Notebook cell makes it possible to execute them individually. This is useful in more complex projects, where you might want to run and edit a single keyword instead of running the full
                                robot all the time. You could add the new
                                <code>Log In</code> keyword to the existing <code>Open The Internet Website</code> keyword cell, too, but then you would lose the ability to execute the keywords individually.
                            </p>
                        </blockquote>
                        <h4 id="finding-a-form-field">Finding a form field</h4>
                        <p>You, a human being (just assuming!), can see and find things such as forms and fields on a web page. Your robot, however, lacks both vision and the ability to think. It needs very specific instructions to find <em>anything</em>.</p>
                        <p>A web page is written in <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" rel="noopener noreferrer">HTML</a> (Hypertext Markup Language). It defines the meaning and structure of web content. The Autosphere
                            Training Portal is also built using HTML.
                        </p>
                        <p>To find forms, fields, and other elements from an HTML web page, your robot needs to know their
                            <em>locators</em>. Think of a locator as the street address for an element, such as the username field on the Autosphere Training Portal login page.
                        </p>
                        <blockquote>
                            <p>If you want, you can go deeper and learn more about how to find interface elements in web applications and the concept of locators <a href="<?php echo $baseusrl; ?>views/docs.php?page=development-howtos/browser/web-scraper-robot">in
                                    this dedicated article</a>.</p>
                        </blockquote>
                        <p>This is what the username field HTML markup looks like:</p>
                        <p><code>&lt;input type=&quot;text&quot; id=&quot;username&quot; name=&quot;username&quot; required=&quot;&quot; class=&quot;form-control&quot;/&gt;</code>
                        </p>
                        <p>It is an <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Input" target="_blank" rel="noopener noreferrer"><code>input</code></a> element. It has several <a href="https://developer.mozilla.org/en-US/docs/Glossary/Attribute" target="_blank" rel="noopener noreferrer"><code>attributes</code></a>, such as <code>type</code>,
                            <code>id</code> and <code>name</code>. We can use these to locate (find) the elements.
                        </p>
                        <p>We need to tell the robot to fill in the login form. The <code>Autosphere.Browser</code> library provides a <code>Input Text</code> keyword that can fill in text fields. The keyword takes two arguments: The <code>locator</code> argument
                            tells
                            <em>where</em> to input. The
                            <code>value</code> argument tells <em>what</em> to input.
                        </p>
                        <p>In our case, we can call the keyword like this to input <code>developer</code> in the field that has an attribute <code>name</code> with the value of <code>username</code>:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">    Input Text    username    developer
</code></code></pre>
                            </div>
                        </div>
                        <blockquote>
                            <p>Note that you need to have at least two spaces between the keyword and each of the arguments.
                            </p>
                        </blockquote>
                        <h4 id="filling-and-submitting-the-form">Filling and submitting the form</h4>
                        <p>Modify the <code>Log in</code> <code>*** Keywords ***</code> cell, so that it looks like this:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
    Input Text    username    developer
</code></code></pre>
                            </div>
                        </div>
                        <p>Now run the robot, and it will fill the username field:</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-filling-username.gif" alt="Autosphere Lab - Filling the username field" /></p>
                        <p>Great! Now we can do the same thing for the password: the only difference is that we should use the more specific <code>Input Password</code> keyword. This keyword accepts the same arguments, with the difference that it will not output
                            the value of our secret password in the log.</p>

                        <p>So our keyword now is:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
</code></code></pre>
                            </div>
                        </div>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-filling-username-and-password.gif" alt="Autosphere - Filling the username and password fields" /></p>

                        <p>As the last step, the robot needs to submit the form, which we can do by adding the
                            <code>Submit Form</code> keyword:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
    Submit Form
</code></code></pre>
                            </div>
                        </div>
                        <p>Here&#x27;s how the complete robot code looks like now:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser

*** Keywords ***
Open The Internet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
    Submit Form

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In

</code></code></pre>
                            </div>
                        </div>
                        <p>Run the robot one more time, and you should see it opening the browser, navigating to the internet, and happily logging in.</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-logging-in.gif" alt="Autosphere - Logging in" /></p>
                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>You can use the <code>Input Text</code> keyword from the <code>Autosphere.Browser</code> library to fill text input fields.</li>
                            <li>You can tell your robots which elements in a webpage to act on by writing
                                <code>locators</code>.
                            </li>
                            <li>You should use the <code>Input Password</code> keyword to fill password fields.</li>
                            <li>You should not commit credentials directly into your <code>.ipynb</code> files. We are doing it here because it&#x27;s a beginner&#x27;s course, but you should never do this in the real world.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            <div class="float-right m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form">Next chapter <i class="material-icons">navigate_next</i></a></div>
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=getting-to-the-intranet"><i class="material-icons">navigate_before</i> Previous chapter</a></div>
        </aside>
    </div>
</section>