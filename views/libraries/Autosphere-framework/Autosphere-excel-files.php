
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Excel.Files</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-excel-files">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-excel-files/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p>The <cite>Excel.Files</cite> library can be used to read and write Excel files without the need to start the actual Excel application.</p>
                                <p>It supports both legacy .xls files and modern .xlsx files.</p>
                                <p>Note: To run macros or load password protected worksheets, please use the Excel application library.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <p>A common use-case is to load an existing Excel file as a table, which can be iterated over later in a Autosphere keyword or task:</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Tables</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Excel.Files</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Read orders as table</span><span class="p">
    </span><span class="nf">Open workbook</span><span class="p">    ${</span><span class="nv">ORDERS_FILE</span><span class="p">}
    ${</span><span class="nv">worksheet</span><span class="p">}=    </span><span class="nf">Read worksheet</span><span class="p">   </span><span class="s">header=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    ${</span><span class="nv">orders</span><span class="p">}=       </span><span class="nf">Create table</span><span class="p">     ${</span><span class="nv">worksheet</span><span class="p">}
    [</span><span class="kn">Return</span><span class="p">]         ${</span><span class="nv">orders</span><span class="p">}
    [</span><span class="kn">Teardown</span><span class="p">]       </span><span class="nf">Close workbook</span>
</pre>
                                <p>Processing all worksheets in the Excel file and checking row count:</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Excel.Files</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">EXCEL_FILE</span><span class="p">}   </span><span class="s">/path/to/excel.xlsx</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Rows in the sheet</span><span class="p">
    [</span><span class="kn">Setup</span><span class="p">]      </span><span class="nf">Open Workbook</span><span class="p">    ${</span><span class="nv">EXCEL_FILE</span><span class="p">}
    &#64;{</span><span class="nv">sheets</span><span class="p">}=   </span><span class="nf">List Worksheets</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">  ${</span><span class="nv">sheet</span><span class="p">}  </span><span class="s">IN</span><span class="p">   &#64;{</span><span class="nv">sheets</span><span class="p">}
        ${</span><span class="nv">count</span><span class="p">}=  </span><span class="nf">Get row count in the sheet</span><span class="p">   ${</span><span class="nv">sheet</span><span class="p">}
        </span><span class="nf">Log</span><span class="p">   </span><span class="s">Worksheet '</span><span class="p">${</span><span class="nv">sheet</span><span class="p">}</span><span class="s">' has </span><span class="p">${</span><span class="nv">count</span><span class="p">}</span><span class="s"> rows</span><span class="p">
    </span><span class="nf">END</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Get row count in the sheet</span><span class="p">
    [</span><span class="kn">Arguments</span><span class="p">]      ${</span><span class="nv">SHEET_NAME</span><span class="p">}
    ${</span><span class="nv">sheet</span><span class="p">}=        </span><span class="nf">Read Worksheet</span><span class="p">   ${</span><span class="nv">SHEET_NAME</span><span class="p">}
    ${</span><span class="nv">rows</span><span class="p">}=         </span><span class="nf">Get Length</span><span class="p">  ${</span><span class="nv">sheet</span><span class="p">}
    [</span><span class="kn">Return</span><span class="p">]         ${</span><span class="nv">rows</span><span class="p">}</span>
</pre>
                                <p>Creating a new Excel file with a dictionary:</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Creating new Excel</span><span class="p">
    </span><span class="nf">Create Workbook</span><span class="p">  </span><span class="s">my_new_excel.xlsx</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">index</span><span class="p">}    </span><span class="s">IN RANGE</span><span class="p">    </span><span class="s">20</span><span class="p">
        &amp;{</span><span class="nv">row</span><span class="p">}=       </span><span class="nf">Create Dictionary</span><span class="p">
        ...           </span><span class="s">Row No</span><span class="p">   ${</span><span class="nv">index</span><span class="p">}
        ...           </span><span class="s">Amount</span><span class="p">   ${</span><span class="nv">index * 25</span><span class="p">}
        </span><span class="nf">Append Rows to Worksheet</span><span class="p">  ${</span><span class="nv">row</span><span class="p">}  </span><span class="s">header=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    </span><span class="nf">END</span><span class="p">
    </span><span class="nf">Save Workbook</span>
</pre>
                                <p>Creating a new Excel file with a list:</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Variables ***</span><span class="p">
&#64;{</span><span class="nv">heading</span><span class="p">}   </span><span class="s">Row No</span><span class="p">   </span><span class="s">Amount</span><span class="p">
&#64;{</span><span class="nv">rows</span><span class="p">}      &#64;{</span><span class="nv">heading</span><span class="p">}

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Creating new Excel</span><span class="p">
    </span><span class="nf">Create Workbook</span><span class="p">  </span><span class="s">my_new_excel.xlsx</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">index</span><span class="p">}    </span><span class="s">IN RANGE</span><span class="p">   </span><span class="s">1</span><span class="p">  </span><span class="s">20</span><span class="p">
        &#64;{</span><span class="nv">row</span><span class="p">}=         </span><span class="nf">Create List</span><span class="p">   ${</span><span class="nv">index</span><span class="p">}   ${</span><span class="nv">index * 25</span><span class="p">}
        </span><span class="nf">Append To List</span><span class="p">  ${</span><span class="nv">rows</span><span class="p">}  ${</span><span class="nv">row</span><span class="p">}
    </span><span class="nf">END</span><span class="p">
    </span><span class="nf">Append Rows to Worksheet</span><span class="p">  ${</span><span class="nv">rows</span><span class="p">}
    </span><span class="nf">Save Workbook</span>
</pre>
                                <p><strong>Python</strong></p>
                                <p>The library can also be imported directly into Python.</p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Excel.Files</span> <span class="kn">import</span> <span class="n">Files</span>

<span class="k">def</span> <span class="nf">read_excel_worksheet</span><span class="p">(</span><span class="n">path</span><span class="p">,</span> <span class="n">worksheet</span><span class="p">):</span>
    <span class="n">lib</span> <span class="o">=</span> <span class="n">Files</span><span class="p">()</span>
    <span class="n">lib</span><span class="o">.</span><span class="n">open_workbook</span><span class="p">(</span><span class="n">path</span><span class="p">)</span>
    <span class="k">try</span><span class="p">:</span>
        <span class="k">return</span> <span class="n">lib</span><span class="o">.</span><span class="n">read_worksheet</span><span class="p">(</span><span class="n">worksheet</span><span class="p">)</span>
    <span class="k">finally</span><span class="p">:</span>
        <span class="n">lib</span><span class="o">.</span><span class="n">close_workbook</span><span class="p">()</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
          