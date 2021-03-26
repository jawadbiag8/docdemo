
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Netsuite</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-netsuite">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-netsuite/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Netsuite</cite> is a library for accessing Netsuite using NetSuite SOAP web service SuiteTalk. The library extends the netsuitesdk library.</p>
                                <p>More information available at <a class="reference external" href="http://www.netsuite.com/portal/platform/developer/suitetalk.shtml">NetSuite SOAP webservice
                    SuiteTalk</a>.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Netsuite</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Excel.Files</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Tables</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">  </span><span class="nf">Authorize Netsuite</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Get data from Netsuite and Store into Excel files</span><span class="p">
    ${</span><span class="nv">accounts</span><span class="p">}=        </span><span class="nf">Get Accounts</span><span class="p">   </span><span class="s">account_type=_expense</span><span class="p">
    ${</span><span class="nv">accounts</span><span class="p">}=        </span><span class="nf">Create table</span><span class="p">    ${</span><span class="nv">accounts</span><span class="p">}
    </span><span class="nf">Create Workbook</span><span class="p">
    </span><span class="nf">Append Rows To Worksheet</span><span class="p">  ${</span><span class="nv">accounts</span><span class="p">}
    </span><span class="nf">Save Workbook</span><span class="p">       </span><span class="s">netsuite_accounts.xlsx</span><span class="p">
    </span><span class="nf">Close Workbook</span><span class="p">
    ${</span><span class="nv">bills</span><span class="p">}=           </span><span class="nf">Get Vendor Bills</span><span class="p">
    ${</span><span class="nv">bills</span><span class="p">}=           </span><span class="nf">Create table</span><span class="p">    ${</span><span class="nv">bills</span><span class="p">}
    </span><span class="nf">Create Workbook</span><span class="p">
    </span><span class="nf">Append Rows To Worksheet</span><span class="p">  ${</span><span class="nv">bills</span><span class="p">}
    </span><span class="nf">Save Workbook</span><span class="p">       </span><span class="s">netsuite_bills.xlsx</span><span class="p">
    </span><span class="nf">Close Workbook</span><span class="p">


</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Authorize Netsuite</span><span class="p">
    ${</span><span class="nv">secrets</span><span class="p">}=     </span><span class="nf">Get Secret</span><span class="p">   </span><span class="s">netsuite</span><span class="p">
    </span><span class="nf">Connect</span><span class="p">
    ...        </span><span class="s">account=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[ACCOUNT]</span><span class="p">
    ...        </span><span class="s">consumer_key=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[CONSUMER_KEY]</span><span class="p">
    ...        </span><span class="s">consumer_secret=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[CONSUMER_KEY]</span><span class="p">
    ...        </span><span class="s">token_key=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[CONSUMER_SECRET]</span><span class="p">
    ...        </span><span class="s">token_secret=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[TOKEN_KEY]</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Netsuite</span> <span class="kn">import</span> <span class="n">Netsuite</span>

<span class="n">ns</span> <span class="o">=</span> <span class="n">Netsuite</span><span class="p">()</span>
<span class="n">ns</span><span class="o">.</span><span class="n">connect</span><span class="p">()</span>
<span class="n">accounts</span> <span class="o">=</span> <span class="n">ns</span><span class="o">.</span><span class="n">get_accounts</span><span class="p">()</span>
<span class="n">currencies</span> <span class="o">=</span> <span class="n">ns</span><span class="o">.</span><span class="n">get_currencies</span><span class="p">()</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           