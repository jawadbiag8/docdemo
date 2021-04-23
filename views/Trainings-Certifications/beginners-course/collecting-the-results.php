<section id="contentpage" class="content">
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
                                <ul class="dropdown-menu pull-left">
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=creating-pdf">Next</a></li>
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form-using-excel-data">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <h2>Collecting the results</h2>
                        <aside class="sc-hHftDr ewYhue">
                            <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>
                        <p>All the sales data has been entered. Nice! After entering all the sales data, Maria typically takes a screenshot of the sales summary:</p>
                        <p><img class="img-responsive" src="../images/Training-Certifications/Beginner-Course/sales-summary-in-page.png" alt="Sales summary in the intranet page" /></p>
                        <p><strong>Our robot can handle this case too!</strong></p>
                        <p>Let&#x27;s add a new step to our task. We&#x27;ll call it <code>Collect The Results</code>:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
    Collect The Results
</code></code></pre>
                            </div>
                        </div>
                        <p>Above the <code>*** Tasks ***</code> cell, we add a new keyword:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Collect The Results
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="taking-a-screenshot">Taking a screenshot</h4>
                        <p>The <code>Autosphere.Browser</code> library provides the <code>Screenshot</code> keyword to help us with this step. We will need to give it a locator of the element we want to take a screenshot of, and a path for the screenshot image
                            file.
                        </p>
                        <h3 id="locating-the-element">Locating the element</h3>
                        <p>Let&#x27;s take a look at the HTML markup of the page to see if there is a locator we could use:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-html"><code class="language-html">...
&lt;div class=&quot;alert alert-dark sales-summary&quot; role=&quot;alert&quot;&gt;
  &lt;div&gt;&lt;span&gt;Active sales people:&lt;/span&gt;...&lt;/div&gt;
&lt;/div&gt;
...
</code></code></pre>
                            </div>
                        </div>
                        <blockquote>
                            <p>How did we find that HTML markup? See the <a href="docs.php?page=development-howtos/browser/web-scraper-robot">How
                                    to find user interface elements using locators in web applications</a> article if you want to learn how to view the HTML markup of web pages using browser developer tools.</p>
                        </blockquote>
                        <p>We have a <code>div</code> element. It has <code>class</code> and <code>role</code> attributes. Since there are no <code>id</code> or <code>name</code> attributes to work with, we decide to use the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer">CSS</a> classes to target it. The <code>sales-summary</code> class seems like a good candidate because then it will be clear in our script what we are taking a screenshot of. Because we
                            are using CSS to locate the element, our locator will start with
                            <code>css:</code>. There are multiple types of locators: <code>id:</code>, <code>name:</code>,
                            <code>xpath</code>.
                        </p>
                        <p>So our locator will be <code>css:div.sales-summary</code>, which means:</p>
                        <blockquote>
                            <p>Using the CSS strategy, find me a <code>div</code> element that has the
                                <code>sales-summary</code> CSS class.
                            </p>
                        </blockquote>
                        <h3 id="saving-the-file-to-the-output-directory">Saving the file to the <code>output</code> directory</h3>
                        <p>As a second argument, we will pass to the <code>Screenshot</code> keyword the path to use for the screenshot image file. We want the file to be called <code>sales_summary.png</code> and added to a new directory called <code>output</code>.</p>

                        <p>Our path for the file will be this: <code>${CURDIR}${/}output${/}sales_summary.png</code>.</p>
                        <p>But what are those variables?</p>
                        <ul>
                            <li>
                                <p><code>${CURDIR}</code> is a special <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-variables">built-in
                                        Autosphere variable</a> that represents the <em>current directory</em>, or the directory where our <code>tasks.robot</code> file is.</p>
                            </li>
                            <li>
                                <p><code>${/}</code> is another built-in variable that represents the directory path separator. We use this variable to make sure that the path will work in any operating system.
                                </p>
                            </li>
                        </ul>
                        <p>So our keyword implementation will be:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Collect The Results
    Screenshot    css:div.sales-summary    ${CURDIR}${/}output${/}sales_summary.png
</code></code></pre>
                            </div>
                        </div>
                        <p>And our robot will now look like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP

*** Keywords ***
Open The Intranet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Keywords ***
Log In
    Input Text    id:username    developer
    Input Password    password    autosphere
    Submit Form
    Wait Until Page Contains Element    id:sales-form

*** Keywords ***
Fill And Submit The Form For One Person
    [Arguments]    ${sales_rep}
    Input Text    firstname    ${sales_rep}[First Name]
    Input Text    lastname    ${sales_rep}[Last Name]
    Input Text    salesresult    ${sales_rep}[Sales]
    ${target_as_string}=    Convert To String    ${sales_rep}[Sales Target]
    Select From List By Value    salestarget    ${target_as_string}
    Click Button    Submit

*** Keywords ***
Download The Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx     overwrite=True

*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
    ${sales_reps}=    Read Worksheet As Table    header=True
    Close Workbook
    FOR    ${sales_rep}    IN    @{sales_reps}
        Fill And Submit The Form For One Person    ${sales_rep}
    END

*** Keywords ***
Collect The Results
    Screenshot    css:div.sales-summary    ${CURDIR}${/}output${/}sales_summary.png

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Intranet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
    Collect The Results
</code></code></pre>
                            </div>
                        </div>
                        <p>We run the robot. At the end of the run, a screenshot of the sales summary appears in the Notebook:
                        </p>
                        <p><img class="img-responsive" src="../images/Training-Certifications/Beginner-Course/sales-summary.png" alt="Sales summary" /></p>
                        <p><strong>Done!</strong></p>
                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>The <code>Screenshot</code> keyword of the <code>Autosphere.Browser</code> library takes screenshots of elements.</li>
                            <li>Knowing how to use locators gets you a long way when automating web-based applications.</li>
                            <li>There are many types of locators. Choose the simplest one for your use case!</li>
                            <li>The <code>${CURDIR}</code> <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-variables">built
                                    in variable</a> represents the current directory where our task file resides.</li>
                            <li>The <code>${/}</code> <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-variables">built
                                    in variable</a> represents the path separator for the current operating system.</li>
                            <li>The <code>output</code> folder is where we should put all files that our robot generates.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            <div class="float-right m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=creating-pdf">Next chapter <i class="material-icons">navigate_next</i></a></div>
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form-using-excel-data"><i class="material-icons">navigate_before</i> Previous chapter</a></div>
        </aside>
    </div>
</section>