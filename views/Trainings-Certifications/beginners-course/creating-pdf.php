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
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=logging-out-and-closing-the-browser">Next</a></li>
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=collecting-the-results">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <h2>Creating a PDF</h2>
                        <aside class="sc-hHftDr ewYhue">
                            <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>
                        <p>User&#x27;s procedure involves copying the table into Microsoft Word and then exporting it to PDF from there with some additional software, our robot instead will do it all by itself automatically.
                        </p>

                        <p>So, as always, let&#x27;s start by adding a new step in our <code>*** Tasks ***</code> cell:</p>
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
    Export The Table As A PDF
</code></code></pre>
                            </div>
                        </div>
                        <p>Then we add a new <code>*** Keywords ***</code> cell just before it:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Export The Table As A PDF
</code></code></pre>
                            </div>
                        </div>
                        <p>As always, we plan to do this in steps.</p>
                        <p>Our plan for this keyword is:</p>
                        <ul>
                            <li>we will isolate the part of the page that contains the sales table</li>
                            <li>we will assign the content of that part of the page to a variable</li>
                            <li>we will create a PDF with the HTML content of the table.</li>
                        </ul>
                        <h4 id="getting-the-html-table-element-out-of-the-page">Getting the HTML table element out of the page</h4>
                        <p>The first thing we want to do is to make sure that the table element is actually on the page when we try to &quot;grab&quot; it. We&#x27;ll use the <code>Wait Until Element Is Visible</code> keyword. We just need a locator.</p>
                        <p>This is how the HTML source of the table area on the page looks like:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-html"><code class="language-html">...
&lt;div id=&quot;sales-results&quot;&gt;
  &lt;table class=&quot;table table-dark table-striped&quot;&gt;
    ...
  &lt;/table&gt;
&lt;/div&gt;
...
</code></code></pre>
                            </div>
                        </div>
                        <p>We can see that the table is wrapped in a <code>&lt;div&gt;</code> element with an
                            <code>id</code> attribute of <code>sales-results</code>. Our locator will then be
                            <code>id:sales-results</code>.
                        </p>

                        <p>So we will modify our keyword like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Export The Table As A PDF
    Wait Until Element Is Visible    id:sales-results
</code></code></pre>
                            </div>
                        </div>
                        <p>Next, we want to put the actual HTML markup of that element into a variable. We can do this with the <code>Get Element Attribute</code> keyword (<code>Autosphere.Browser</code> library) like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Export The Table As A PDF
    Wait Until Element Is Visible    id:sales-results
    ${sales_results_html}=    Get Element Attribute    id:sales-results    outerHTML
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="creating-the-pdf-file-out-of-the-html-contents-variable">Creating the PDF file out of the HTML contents variable</h4>
                        <p><strong>Only one more step to go!</strong></p>
                        <p>Now that we have the HTML contents of the table in a variable, we need to create a PDF file out of it. To do it, we will add the <a href="../views/docs/libraries/rpa-framework/rpa-pdf.html"><code>Autosphere.PDF</code></a> library!</p>
                        <blockquote>
                            <p>Add a new library, get new keywords... Wax on, wax off... Practice will make us perfect!
                            </p>
                        </blockquote>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP
Library           Autosphere.PDF
</code></code></pre>
                            </div>
                        </div>
                        <p>Now we can add the final line to our keyword.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Export The Table As A PDF
    Wait Until Element Is Visible    id:sales-results
    ${sales_results_html}=    Get Element Attribute    id:sales-results    outerHTML
    Html To Pdf    ${sales_results_html}    ${CURDIR}${/}output${/}sales_results.pdf
</code></code></pre>
                            </div>
                        </div>
                        <p>We use the <code>Html To Pdf</code> keyword provided by the <code>Autosphere.PDF</code> library to create a <code>sales_results.pdf</code> file out of our <code>${sales_results_html}</code> variable&#x27;s contents, and place it again
                            into the <code>output</code> folder (
                            <code>${CURDIR}${/}output</code>).
                        </p>
                        <p><strong>And that&#x27;s it!</strong></p>
                        <p>Here&#x27;s what our robot code looks like now:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP
Library           Autosphere.PDF

*** Keywords ***
Open The Internet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Keywords ***
Log In
    Input Text    id:username    developer
    Input Password    id:password    autosphere
    Submit Form
    Wait Until Page Contains Element    id:sales-form

*** Keywords ***
Download The Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True

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

*** Keywords ***
Export The Table As A PDF
    Wait Until Element Is Visible    id:sales-results
    ${sales_results_html}=    Get Element Attribute    id:sales-results    outerHTML
    Html To Pdf    ${sales_results_html}    ${CURDIR}${/}output${/}sales_results.pdf

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
    Collect The Results
    Export The Table As A PDF

</code></code></pre>
                            </div>
                        </div>
                        <p>Let&#x27;s run the robot one final time:</p>
                        <p><img class="img-responsive" src="../images/Training-Certifications/Beginner-Course/opening-PDF-file.png" alt="Opening the PDF file" /></p>
                        <p>We can see a new <code>sales_results.pdf</code> file appear in the <code>output</code> directory, containing the sales data!</p>
                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>You can use the <code>Get Element Attribute</code> keyword from the <code>Autosphere.Browser</code> library to get the actual HTML markup of any element using the <code>outerHTML</code> attribute.
                            </li>
                            <li>The names of the libraries are case-sensitive.</li>
                            <li>You can create a PDF file easily starting from HTML content using the <code>Autosphere.PDF</code> library and the <code>Html To Pdf</code> keyword.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            <div class="float-right m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=logging-out-and-closing-the-browser">Next chapter</a></div>
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=collecting-the-results">previous chapter</a></div>
        </aside>
    </div>
</section>