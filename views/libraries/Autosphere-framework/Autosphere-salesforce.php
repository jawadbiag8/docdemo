
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#fff"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Salesforce</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-salesforce">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-salesforce/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Salesforce</cite> is a library for accessing Salesforce using REST API. The library extends simple-salesforce
                                        library.</p>
                                <p>More information available at <a class="reference external" href="https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_what_is_rest_api.htm">Salesforce
                                        REST API Developer Guide</a>.</p>
                                <p><strong>Dataloader</strong></p>
                                <p>The keyword <cite>execute_dataloader_import</cite> can be used to mimic
                                    <a class="reference external" href="https://developer.salesforce.com/docs/atlas.en-us.dataLoader.meta/dataLoader/data_loader.htm">Salesforce
                                        Dataloader</a> import behaviour.</p>
                                <p><cite>input_object</cite> can be given in different formats. Below is an example where input is in <cite>Autosphere.Table</cite> format in <strong>method a</strong> and list format in <strong>method b</strong>.</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Salesforce</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Database</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">  </span><span class="nf">Authorize Salesforce</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="c"># Method a
</span><span class="p">${</span><span class="nv">orders</span><span class="p">}</span><span class="gu">=</span><span class="p">        </span><span class="nf">Database Query Result As Table</span><span class="p">
</span><span class="gu">...</span><span class="p">               </span><span class="nf">SELECT * FROM incoming_orders</span><span class="p">
${</span><span class="nv">status</span><span class="p">}</span><span class="gu">=</span><span class="p">        </span><span class="nf">Execute Dataloader Insert</span><span class="p">
</span><span class="gu">...</span><span class="p">               ${</span><span class="nv">orders</span><span class="p">}  ${</span><span class="nv">mapping_dict</span><span class="p">}  </span><span class="nf">Tilaus__c</span><span class="p">
</span><span class="c"># Method b
</span><span class="p">${</span><span class="nv">status</span><span class="p">}</span><span class="gu">=</span><span class="p">        </span><span class="nf">Execute Dataloader Insert</span><span class="p">
</span><span class="gu">...</span><span class="p">               ${</span><span class="nv">WORKDIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="nf">orders.json</span><span class="p">  ${</span><span class="nv">mapping_dict</span><span class="p">}  </span><span class="s">Tilaus__c</span>
</pre>
                                <p>Example file <strong>orders.json</strong></p>
                                <pre class="code json literal-block"><span class="p">[</span>
    <span class="p">{</span>
        <span class="nt">&quot;asiakas&quot;</span><span class="p">:</span> <span class="s2">&quot;0015I000002jBLIQA2&quot;</span>
    <span class="p">},</span>
    <span class="p">{</span>
        <span class="nt">&quot;asiakas&quot;</span><span class="p">:</span> <span class="s2">&quot;0015I000002jBLDQA2&quot;</span>
    <span class="p">},</span>
<span class="p">]</span>
</pre>
                                <p><cite>mapping_object</cite> describes how the input data fields are mapped into Salesforce object attributes. In the example, the mapping defines that <cite>asiakas</cite> attribute in the input object is mapped into <cite>Tilaaja__c</cite>                                    attribute of
                                    <cite>Tilaus__c</cite> custom Salesforce object.</p>
                                <pre class="code json literal-block"><span class="p">{</span>
    <span class="nt">&quot;Tilaus__c&quot;</span><span class="p">:</span> <span class="p">{</span>
        <span class="nt">&quot;asiakas&quot;</span><span class="p">:</span> <span class="s2">&quot;Tilaaja__c&quot;</span>
    <span class="p">},</span>
<span class="p">}</span>
</pre>
                                <p>Object type could be, for example, <cite>Tilaus__c</cite>.</p>
                                <p><strong>Salesforce object operations</strong></p>
                                <p>Following operations can be used to manage Salesforce objects:</p>
                                <ul class="simple">
                                    <li>Get Salesforce Object By Id</li>
                                    <li>Create Salesforce Object</li>
                                    <li>Update Salesforce Object</li>
                                    <li>Upsert Salesforce Object</li>
                                    <li>Delete Salesforce Object</li>
                                    <li>Get Salesforce Object Metadata</li>
                                    <li>Describe Salesforce Object</li>
                                </ul>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Salesforce</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">  </span><span class="nf">Authorize Salesforce</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">ACCOUNT_NOKIA</span><span class="p">}    </span><span class="s">0015I000002jBLDQA2</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Change account details in Salesforce</span><span class="p">
    &amp;{</span><span class="nv">account</span><span class="p">}=      </span><span class="nf">Get Salesforce Object By Id</span><span class="p">   </span><span class="s">Account</span><span class="p">  ${</span><span class="nv">ACCOUNT_NOKIA</span><span class="p">}
    &amp;{</span><span class="nv">update_obj</span><span class="p">}=   </span><span class="nf">Create Dictionary</span><span class="p">   </span><span class="s">Name=Nokia Ltd</span><span class="p">  </span><span class="s">BillingStreet=Nokia bulevard 1</span><span class="p">
    ${</span><span class="nv">result</span><span class="p">}=       </span><span class="nf">Update Salesforce Object</span><span class="p">  </span><span class="s">Account</span><span class="p">  ${</span><span class="nv">ACCOUNT_NOKIA</span><span class="p">}  ${</span><span class="nv">update_obj</span><span class="p">}

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Authorize Salesforce</span><span class="p">
    ${</span><span class="nv">secrets</span><span class="p">}=     </span><span class="nf">Get Secret</span><span class="p">   </span><span class="s">salesforce</span><span class="p">
    </span><span class="nf">Auth With Token</span><span class="p">
    ...        </span><span class="s">username=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[USERNAME]</span><span class="p">
    ...        </span><span class="s">password=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[PASSWORD]</span><span class="p">
    ...        </span><span class="s">api_token=</span><span class="p">${</span><span class="nv">secrets</span><span class="p">}</span><span class="s">[API_TOKEN]</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">import</span> <span class="nn">pprint</span>
<span class="kn">from</span> <span class="nn">Autosphere.Salesforce</span> <span class="kn">import</span> <span class="n">Salesforce</span>
<span class="kn">from</span> <span class="nn">Autosphere.Autosphere.Secrets</span> <span class="kn">import</span> <span class="n">FileSecrets</span>

<span class="n">pp</span> <span class="o">=</span> <span class="n">pprint</span><span class="o">.</span><span class="n">PrettyPrinter</span><span class="p">(</span><span class="n">indent</span><span class="o">=</span><span class="mi">4</span><span class="p">)</span>
<span class="n">filesecrets</span> <span class="o">=</span> <span class="n">FileSecrets</span><span class="p">(</span><span class="s2">&quot;secrets.json&quot;</span><span class="p">)</span>
<span class="n">secrets</span> <span class="o">=</span> <span class="n">filesecrets</span><span class="o">.</span><span class="n">get_secret</span><span class="p">(</span><span class="s2">&quot;salesforce&quot;</span><span class="p">)</span>

<span class="n">sf</span> <span class="o">=</span> <span class="n">Salesforce</span><span class="p">()</span>
<span class="n">sf</span><span class="o">.</span><span class="n">auth_with_token</span><span class="p">(</span>
    <span class="n">username</span><span class="o">=</span><span class="n">secrets</span><span class="p">[</span><span class="s2">&quot;USERNAME&quot;</span><span class="p">],</span>
    <span class="n">password</span><span class="o">=</span><span class="n">secrets</span><span class="p">[</span><span class="s2">&quot;PASSWORD&quot;</span><span class="p">],</span>
    <span class="n">api_token</span><span class="o">=</span><span class="n">secrets</span><span class="p">[</span><span class="s2">&quot;API_TOKEN&quot;</span><span class="p">],</span>
<span class="p">)</span>
<span class="n">nokia_account_id</span> <span class="o">=</span> <span class="s2">&quot;0015I000002jBLDQA2&quot;</span>
<span class="n">account</span> <span class="o">=</span> <span class="n">sf</span><span class="o">.</span><span class="n">get_salesforce_object_by_id</span><span class="p">(</span><span class="s2">&quot;Account&quot;</span><span class="p">,</span> <span class="n">nokia_account_id</span><span class="p">)</span>
<span class="n">pp</span><span class="o">.</span><span class="n">pprint</span><span class="p">(</span><span class="n">account</span><span class="p">)</span>
<span class="n">billing_information</span> <span class="o">=</span> <span class="p">{</span>
    <span class="s2">&quot;BillingStreet&quot;</span><span class="p">:</span> <span class="s2">&quot;Nokia Bulevard 1&quot;</span><span class="p">,</span>
    <span class="s2">&quot;BillingCity&quot;</span><span class="p">:</span> <span class="s2">&quot;Espoo&quot;</span><span class="p">,</span>
    <span class="s2">&quot;BillingPostalCode&quot;</span><span class="p">:</span> <span class="s2">&quot;01210&quot;</span><span class="p">,</span>
    <span class="s2">&quot;BillingCountry&quot;</span><span class="p">:</span> <span class="s2">&quot;Finland&quot;</span><span class="p">,</span>
<span class="p">}</span>
<span class="n">result</span> <span class="o">=</span> <span class="n">sf</span><span class="o">.</span><span class="n">update_salesforce_object</span><span class="p">(</span><span class="s2">&quot;Account&quot;</span><span class="p">,</span> <span class="n">nokia_account_id</span><span class="p">,</span> <span class="n">billing_information</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">&quot;Update result: </span><span class="si">{</span><span class="n">result</span><span class="si">}</span><span class="s2">&quot;</span><span class="p">)</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           