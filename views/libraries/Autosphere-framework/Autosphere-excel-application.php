
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Excel.Application</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page"  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-excel-application">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-excel-application/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Excel.Application</cite> is a library for controlling an Excel application.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">             </span><span class="nn">Autosphere.Excel.Application</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">          </span><span class="nf">Open Application</span><span class="p">
</span><span class="kn">Task Teardown</span><span class="p">       </span><span class="nf">Quit Application</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Manipulate Excel application</span><span class="p">
    </span><span class="nf">Open Workbook</span><span class="p">           </span><span class="s">workbook.xlsx</span><span class="p">
    </span><span class="nf">Set Active Worksheet</span><span class="p">    </span><span class="s">sheetname=new stuff</span><span class="p">
    </span><span class="nf">Write To Cells</span><span class="p">          </span><span class="s">row=1</span><span class="p">
    ...                     </span><span class="s">column=1</span><span class="p">
    ...                     </span><span class="s">value=my data</span><span class="p">
    </span><span class="nf">Save Excel</span><span class="p">

</span><span class="gu">Run Excel Macro</span><span class="p">
    </span><span class="nf">Open Workbook</span><span class="p">   </span><span class="s">orders_with_macro.xlsm</span><span class="p">
    </span><span class="nf">Run Macro</span><span class="p">       </span><span class="s">Sheet1.CommandButton1_Click</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Excel.Application</span> <span class="kn">import</span> <span class="n">Application</span>

<span class="n">app</span> <span class="o">=</span> <span class="n">Application</span><span class="p">()</span>

<span class="n">app</span><span class="o">.</span><span class="n">open_application</span><span class="p">()</span>
<span class="n">app</span><span class="o">.</span><span class="n">open_workbook</span><span class="p">(</span><span class="s1">'workbook.xlsx'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">set_active_worksheet</span><span class="p">(</span><span class="n">sheetname</span><span class="o">=</span><span class="s1">'new stuff'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">write_to_cells</span><span class="p">(</span><span class="n">row</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">column</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">value</span><span class="o">=</span><span class="s1">'new data'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">save_excel</span><span class="p">()</span>
<span class="n">app</span><span class="o">.</span><span class="n">quit_application</span><span class="p">()</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           