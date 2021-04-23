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
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form-using-excel-data">Next</a></li>
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2>Downloading the Excel file</h2>
                        <aside class="sc-hHftDr ewYhue">
                        <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>
                        <p>Like our Process Definition Document tells us, the &quot;real&quot; sales data is exported from the company&#x27;s sales system each week, and uploaded to the internet website. Our robot will need to get the data out of the Excel file
                            and fill the sales form for each of the sales representatives. But first, it needs to download it locally.</p>
                        <p>So, as always, we want to add one more line to our <code>*** Tasks ***</code> section. This time we will not add it at the end of the task, but <strong>before</strong> the
                            <code>Fill And Submit The Form</code> keyword:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill And Submit The Form
</code></code></pre>
                            </div>
                        </div>
                        <p>Then, as you probably guessed by now, we need to add a new <code>*** Keywords ***</code> cell
                            <strong>before</strong> the <code>*** Tasks ***</code> one with our new keyword:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Download The Excel file
</code></code></pre>
                            </div>
                        </div>
                        <p>Great! Now we have to <em>implement</em> the keyword.</p>
                        <h4 id="adding-the-rpa-http-library">Adding the <code>Autosphere.HTTP</code> library</h4>
                        <p>Our robot at the moment does not know how to download files from remote web servers, but by now, we know how we can teach an old robot new skills: by <strong>adding a library</strong>!</p>
                        <p>Our trusty <code>Autosphere's</code> set of libraries includes the <code>Autosphere.HTTP</code> library that adds many keywords to work with remote web servers, so that&#x27;s just what we need.</p>
                        <p>We add a new line to our <code>*** Settings ***</code> section like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.HTTP
</code></code></pre>
                            </div>
                        </div>
                        <p>Now we can use all of the keywords contained in the <code>Autosphere.HTTP</code>, including the
                            <code>Download</code> keyword.
                        </p>
                        <p>The <code>Download</code> keyword requires a URL as an argument, and we know that we can expect our Excel file at <code>http://training.autosphere.ai/SalesData.xlsx</code> each week.</p>
                        <p>In addition to the URL argument, we are also setting the <code>overwrite</code> parameter to
                            <code>TRUE</code>, so that we can count on the local file being always the most recent version.
                        </p>
                        <p>So our keyword becomes:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Download The Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True
</code></code></pre>
                            </div>
                        </div>
                        <p>With these additions, now our robot looks like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.HTTP

*** Keywords ***
Open The Internet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Keywords ***
Log In
    Input Text    id:username    developer
    Input Password    password    autosphere
    Submit Form
    Wait Until Page Contains Element    id:sales-form

*** Keywords ***
Fill And Submit The Form
    Input Text    firstname    Raymond
    Input Text    lastname    Redington
    Input Text    salesresult    123
    Select From List By Value    salestarget    10000
    Click Button    Submit

*** Keywords ***
Download The Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Intranet Website
    Log In
    Download The Excel File
    Fill And Submit The Form
</code></code></pre>
                            </div>
                        </div>
                        <p>Let&#x27;s run our robot now, clicking on the <code>&gt;&gt;</code> button:</p>
                        <p>Great! Our robot has downloaded the remote file, and put it alongside our
                            <code>Tasks.ipynb</code> script:
                        </p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/excel-file-in-file-viewer.png" alt="Excel file in file viewer" /></p>
                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>You can use the <code>Autosphere.HTTP</code> library, part of the <code>Autosphere</code> package, to interact with remote webservers.</li>
                            <li>You can use the <code>Download</code> keyword to easily download remote files to your local computer.
                            </li>
                            <li>The <code>Download</code> keyword can be configured to always overwrite an existing file of the same name, if found.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            <div class="float-right m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form-using-excel-data">Next chapter <i class="material-icons">navigate_next</i></a></div>
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form"><i class="material-icons">navigate_before</i> Previous chapter</a></div>
        </aside>
    </div>
</section>