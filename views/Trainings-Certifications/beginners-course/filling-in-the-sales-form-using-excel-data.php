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
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=collecting-the-results">Next</a></li>
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=downloading-the-excel-file">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2>Using Excel data to fill in the form</h2>
                        <aside class="sc-hHftDr ewYhue">
                            <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>
                        <p>Our robot will learn some serious skills in this step. This chapter might be a bit more complicated than what we saw so far, but as always, we will get over it step by step, so don&#x27;t worry!</p>
                        <p>Let&#x27;s recap where we are now first. So far, our robot knows how to:</p>

                        <ul>
                            <li>log into the intranet</li>
                            <li>fill the form once using hardcoded data</li>
                            <li>download the remote Excel file locally</li>
                        </ul>
                        <p>Now we need to read the sales data from the Excel file and then fill the form for each line in it.
                        </p>
                        <p>Let&#x27;s start!</p>
                        <h4 id="reading-the-excel-file">Reading the Excel file</h4>

                        <p>Our robot will not do any copy-pasting; it does not even need Excel at all. We can teach it to open and read the Excel file directly. How? By <strong>adding a new library, of course!</strong>
                        </p>
                        <p>Let&#x27;s add the <code>Autosphere.Excel.Files</code> library to the <code>*** Settings ***</code> section:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***

Library           Autosphere.Browser
Library           Autosphere.HTTP
Library           Autosphere.Excel.Files
</code></code></pre>
                            </div>
                        </div>
                        <p>Now let&#x27;s change our <code>Fill And Submit The Form</code> step in the
                            <code>*** Tasks ***</code> cell to <code>Fill The Form Using The Data From The Excel File</code> to better reflect what the robot will do:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
</code></code></pre>
                            </div>
                        </div>
                        <p>Then, let&#x27;s add that as a new keyword cell (as always, it needs to go
                            <strong>before</strong> the tasks cell):
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill The Form Using The Data From The Excel File
</code></code></pre>
                            </div>
                        </div>
                        <p>Now that we have the <code>Autosphere.Excel.Files</code> library, our robot can open the Excel file, using the <code>Open Workbook</code> keyword. We just need to pass it the file name:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
</code></code></pre>
                            </div>
                        </div>
                        <p>Let&#x27;s have a look at the Excel file again. Here&#x27;s how it looks like:</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/beginner-course-excel.png" alt="Excel file" />
                        </p>
                        <p>We have the first row with the headers for the table (<code>First Name</code>,
                            <code>Last Name</code>, <code>Sales</code> and <code>Sales Target</code>), and then the data rows for each of the sales representative. Our robot needs to read this data in a format that it understands. We can do it with the <code>Read Worksheet As Table</code> keyword. We will put the data into a <em>variable</em> that we will call <code>${sales_reps}</code>. Think of a variable as a container for stuff. Such as sales representatives! Also, because our Excel contains headers on the first
                            row, we will pass the <code>header</code> parameter as <code>TRUE</code>. After this, we don&#x27;t need to keep the Excel file open anymore, so we can use the
                            <code>Close Workbook</code> keyword to close it.
                        </p>
                        <blockquote>
                            <p>Friendly reminder: you can see the full list of keywords that the library provides on <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-excel-files">its documentation
                                    page</a>.</p>
                        </blockquote>
                        <p>At this point, our keyword looks like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
    ${sales_reps}=    Read Worksheet As Table    header=True
    Close Workbook
</code></code></pre>
                            </div>
                        </div>
                        <p>Are you still with us? Great! As you can see from the keyword implementation, the robot only
                            <em>reads</em> the Excel data. It does not do anything with the data yet. We are taking small steps!
                        </p>
                        <p>Here is how our robot looks like at the moment:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.HTTP
Library           Autosphere.Excel.Files

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

*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
    ${sales_reps}=    Read Worksheet As Table    header=True
    Close Workbook

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
</code></code></pre>
                            </div>
                        </div>
                        <p>We have not run our robot in a while, time to give it a go! Run the robot by clicking on the
                            <code>&gt;&gt;</code> button.
                        </p>
                        <p><strong>No visible difference from before</strong>, but if we look in the log, we can see that the robot now has the data that was in the Excel file:</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/beginner-course-excel-log.png" alt="Excel data in the Autosphere log" /></p>
                        <p><strong>Excellent!</strong> Let&#x27;s move on!</p>
                        <h4 id="filling-the-form-for-each-of-the-rows-in-the-excel-file">Filling the form for each of the rows in the Excel file</h4>
                        <p>Now that we have loaded the Excel data, we need to set up things so that the robot will fill the form once for each of the rows in the table.</p>
                        <p>Remember our <code>Fill And Submit The Form</code> keyword? We set it a couple of chapters ago to fill the form with hardcoded data:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form
    Input Text    firstname    Raymond
    Input Text    lastname    Redington
    Input Text    salesresult    123
    Select From List By Value    salestarget    10000
    Click Button    Submit
</code></code></pre>
                            </div>
                        </div>
                        <p>Instead, we now want to be able to <em>pass to it the data we want</em>. So let&#x27;s change our keyword so that it accepts an argument, and also let&#x27;s rename it to better reflect what it does: <code>Fill And Submit The Form For One Person</code>:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form For One Person
    [Arguments]    ${sales_rep}
    Input Text    firstname    Raymond
    Input Text    lastname    Redington
    Input Text    salesresult    123
    Select From List By Value    salestarget    10000
    Click Button    Submit
</code></code></pre>
                            </div>
                        </div>
                        <p>We expect the <code>${sales_rep}</code> argument to be a list of named items. This means that if, for example, we want to access the <code>First Name</code> <em>property</em> of our variable, we would write: <code>${sales_rep}[First Name]</code>.</p>
                        <p>So we can say farewell to our friend <code>Raymond Redington</code>, and replace our hardcoded values like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form For One Person
    [Arguments]    ${sales_rep}
    Input Text    firstname    ${sales_rep}[First Name]
    Input Text    lastname    ${sales_rep}[Last Name]
    Input Text    salesresult    ${sales_rep}[Sales]
    Select From List By Value    salestarget    ${sales_rep}[Sales Target]
    Click Button    Submit
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="filling-the-form-for-each-row">Filling the form for each row</h4>
                        <p>Now that our <code>Fill And Submit The Form For One Person</code> is ready, we can go back to our
                            <code>Fill The Form Using The Data From The Excel File</code> keyword:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
    ${sales_reps}=    Read Worksheet As Table    header=True
    Close Workbook
</code></code></pre>
                            </div>
                        </div>
                        <p>Now that the <code>Fill And Submit The Form For One Person</code> keyword is ready to accept arguments, we can loop over the rows of the table (the <code>${sales_reps}</code> variable), and call it each time passing the individual
                            row to it:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
    ${sales_reps}=    Read Worksheet As Table    header=True
    Close Workbook
    FOR    ${sales_rep}    IN    @{sales_reps}
        Fill And Submit The Form For One Person    ${sales_rep}
    END
</code></code></pre>
                            </div>
                        </div>
                        <p>Great! Our robot now looks like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.HTTP
Library           Autosphere.Excel.Files

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
Fill And Submit The Form For One Person
    [Arguments]    ${sales_rep}
    Input Text    firstname    ${sales_rep}[First Name]
    Input Text    lastname    ${sales_rep}[Last Name]
    Input Text    salesresult    ${sales_rep}[Sales]
    Select From List By Value    salestarget    ${sales_rep}[Sales Target]
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

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
</code></code></pre>
                            </div>
                        </div>
                        <p>We run the robot again.</p>

                        <p><img src="../images/Training-Certifications/Beginner-Course/beginner-course-log-error.png" alt="Autosphere Log with Error" /></p>
                        <p>The log is telling us that the <code>Select From List By Value</code> keyword in the
                            <code>Fill And Submit The Form For One Person</code> keyword was expecting a <em>string</em> (
                            <code>str</code>, basically a sequence of characters, such as &quot;dinosaur&quot;) value, and instead, it got a number (<code>int</code>, for &quot;integer&quot;). How can we fix it?
                        </p>
                        <p>We need to convert the value into a string before we use it, and there is a keyword for that!</p>
                        <p>Let&#x27;s change the <code>Fill And Submit The Form For One Person</code> keyword so it reads like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form For One Person
    [Arguments]    ${sales_rep}
    Input Text    firstname    ${sales_rep}[First Name]
    Input Text    lastname    ${sales_rep}[Last Name]
    Input Text    salesresult    ${sales_rep}[Sales]
    ${target_as_string}=    Convert To String    ${sales_rep}[Sales Target]
    Select From List By Value    salestarget    ${target_as_string}
    Click Button    Submit
</code></code></pre>
                            </div>
                        </div>
                        <p>Now we are creating a variable (remember, a container for stuff)
                            <code>${target_as_string}</code>, and we are assigning to it the Sales Target converted to a string. Then we are using this new variable to choose the correct value from our HTML
                            <code>select</code> element.
                        </p>
                        <blockquote>
                            <p>The <code>Convert To String</code> keyword is part of the <code>BuiltIn</code> library, which is included by default.</p>
                        </blockquote>
                        <h4 id="admire-the-robot-doing-the-heavy-lifting">Now Our robot looks like this:</h4>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.HTTP
Library           Autosphere.Excel.Files

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
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True

*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
    ${sales_reps}=    Read Worksheet As Table    header=True
    Close Workbook
    FOR    ${sales_rep}    IN    @{sales_reps}
        Fill And Submit The Form For One Person    ${sales_rep}
    END

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File

</code></code></pre>
                            </div>
                        </div>
                        <p>Our robot now knows how to open the file, get the data out, loop over it, and fill the form for us! Let&#x27;s run it and see it do its magic:</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/robot-filling-the-form.gif" alt="Autosphere filling the forms with Excel Data" /></p>
                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>You can use the <code>Autosphere.Excel.Files</code> library to work with Excel files, no Excel required!
                            </li>
                            <li>You can enable your keywords to accept arguments.</li>
                            <li>You can open and close Excel files with the <code>Open Workbook</code> and
                                <code>Close Workbook</code> keywords.
                            </li>
                            <li>There are different types of data. You can convert from an integer to a string using the
                                <code>Convert To String</code> keyword.
                            </li>
                            <li>You can loop over a variable with the <code>FOR ... IN</code> syntax.</li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            <div class="float-right m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=collecting-the-results">Next chapter <i class="material-icons">navigate_next</i></a></div>
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=downloading-the-excel-file"><i class="material-icons">navigate_before</i> Previous chapter</a></div>
        </aside>
    </div>
</section>