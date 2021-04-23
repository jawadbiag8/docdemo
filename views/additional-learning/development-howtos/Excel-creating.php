<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Excel Automation</b>
                        </h4>

                    </div>
                    <div class="body">
                  

                        <p>This Autosphere robot opens a Create a Excel File with defind rows in it, Reads Data from an API and store in a Excel file in your current directory, and download a Excel File, reads its data.</p>
                        <h4 id="run-this-robot-locally-in-Autosphere-lab">Run this robot locally in Autosphere Lab</h4>
                        <p>You can run this robot on your local machine using <strong>Autosphere Studio</strong></p>
                        <ol>
                            <li>Open the <code>Excel Automation</code> example.</li>
                            <li>Open the <code>tasks.robot</code> file and run it.</li>
                        </ol>
                        <h4 id="robot-script">Robot script</h4>
                        <p>This Script is for creating Excel File with defined rows with the help of FOR Loop.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">
*** Settings ***
Library           Autosphere.Excel.Files
Library           Collections

*** Variables ***
@{heading}=       Row no   Amount

*** Keywords ***
Create Excel File
Create Workbook  Excel_List.xlsx
FOR    ${index}    IN RANGE   1  21
... @{row}=         Create List   ${index}   ${index * 25}
... Append To List  ${rows}  ${row}
END
Append Rows to Worksheet  ${rows}
*** Tasks *** 
Creating File With List
Create Excel File

</code></code></pre>
                            </div>
                            <p>This Script is for creating Excel File and write data into it from API.</p>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">
*** Settings ***
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP

*** Keywords ***
Writing Data into Excel File
Set Worksheet Value    1    1    Post ID
Set Worksheet Value    1    2    ID
Set Worksheet Value    1    3    Name
Set Worksheet Value    1    4    Email address
Set Worksheet Value    1    5    Body
${response}=    Http Get    http://jsonplaceholder.typicode.com/posts/1/comments
Append Rows To Worksheet    ${response.json()}
Save Workbook
*** Tasks *** 
Creating and Writing Data in Excel File
Creating Excel File
Writing Data into Excel File

</code></code></pre>
                            </div>
                            <p>This Script is for downloading Excel File, read data from it and show it on console.</p>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">
*** Settings ***
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP

*** Variables ***
${ExcelFile}   http://training.autosphere.ai/SalesData.xlsx  

*** Keywords ***
Download an Excel file
Download        ${ExcelFile}           overwrite=True

*** Keywords ***
Reading The Rows
Open Workbook   SalesData.xlsx
${table}=       Read Worksheet As Table     header=True
Close Workbook
FOR     ${row}  IN  @{table}
    Log     ${row}
END

*** Tasks ***
Download an Excel file and read the rows
Download an Excel file
Reading The Rows

</code></code></pre>
                            </div>
                            <P>This will be the output of this script: </P>
                            <P><img class="img-responsive" src="../images/Additional-learning/Excel-how-to.PNG" alt=""></P>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>