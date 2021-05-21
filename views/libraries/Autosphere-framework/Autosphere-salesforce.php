<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Salesforce</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Salesforce</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="true">
                                    <i class="material-icons">home</i> Readme
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                                    <i class="material-icons">face</i> Keywords
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">

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
                                                    Dataloader</a> import behaviour.
                                            </p>
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
                                            <p><cite>mapping_object</cite> describes how the input data fields are mapped into Salesforce object attributes. In the example, the mapping defines that <cite>asiakas</cite> attribute in the input object is mapped into <cite>Tilaaja__c</cite> attribute of
                                                <cite>Tilaus__c</cite> custom Salesforce object.
                                            </p>
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
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="add-product-into-opportunity">
                                                            <h2><a href="#add-product-into-opportunity">Add Product Into Opportunity</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add Salesforce Product into Opportunity.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>product_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>type of the product in the Pricelist</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>quantity</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td>number of products to add</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>opportunity_id</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>identifier of Opportunity, default None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pricebook_name</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name of the pricelist, default None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>custom_total_price</td>
                                                                        <td> float </td>
                                                                        <td> None</td>
                                                                        <td>price that overrides quantity and product price, default None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param product_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">type of the product in the Pricelist</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param quantity:</th>
                                                                            <td class="field-body">number of products to add</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param opportunity_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">identifier of Opportunity, default None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param pricebook_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the pricelist, default None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param custom_total_price:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">price that overrides quantity and product price, default None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True is operation is successful or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="auth-with-token">
                                                            <h2><a href="#auth-with-token">Auth With Token</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Authorize to Salesforce with security token, username and password creating instance.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce API username</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce API password</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>api_token</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce API security token</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Authorize to Salesforce with security token, username and password creating instance.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">Salesforce API username</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">Salesforce API password</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param api_token:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce API security token</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-new-opportunity">
                                                            <h2><a href="#create-new-opportunity">Create New Opportunity</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create Salesforce Opportunity object.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>close_date</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>closing date for the Opportunity, format 'YYYY-MM-DD'</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>opportunity_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>as string</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>stage_name</td>
                                                                        <td> str </td>
                                                                        <td> Closed Won</td>
                                                                        <td>needs to be one of the defined stages, defaults to "Closed Won"</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account_name</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>by default uses previously set account, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param close_date:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">closing date for the Opportunity, format 'YYYY-MM-DD'</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param opportunity_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">as string</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param stage_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">needs to be one of the defined stages, defaults to &quot;Closed Won&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param account_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">by default uses previously set account, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">created opportunity or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-salesforce-object">
                                                            <h2><a href="#create-salesforce-object">Create Salesforce Object</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create Salesforce object by type and data.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_data</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>Salesforce object data</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_data:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object data</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises SalesforceDataNotAnDictionary:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">when <cite>object_data</cite> is not dictionary</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">resulting object as dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-salesforce-object">
                                                            <h2><a href="#delete-salesforce-object">Delete Salesforce Object</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Delete Salesfoce object by type and id.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object id</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object id</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if successful</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="describe-salesforce-object">
                                                            <h2><a href="#describe-salesforce-object">Describe Salesforce Object</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get Salesfoce object description by type.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">object description as dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="execute-dataloader-insert">
                                                            <h2><a href="#execute-dataloader-insert">Execute Dataloader Insert</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Keyword mimics Salesforce Dataloader 'insert' behaviour by taking in a
                                                                    <cite>input_object<span class="name">representing dictionary of data to input into Salesforce, a
                                                                        </span>mapping_object</cite> representing dictionary mapping the input keys into Salesforce keys, an <cite>object_type</cite> representing Salesforce object which Datahandler will
                                                                    handle with <cite>operation</cite> type.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>input_object</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>filepath or list of dictionaries</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>mapping_object</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>filepath or dictionary</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Keyword mimics Salesforce Dataloader 'insert' behaviour by taking in a <cite>input_object`representing dictionary of data to input into Salesforce,
                                                                        a `mapping_object</cite> representing dictionary mapping the input keys into Salesforce keys, an <cite>object_type</cite> representing Salesforce object which Datahandler will handle with <cite>operation</cite> type.</p>
                                                                <p>Stores operation successes into <cite>Salesforce.dataloader_success</cite> array. Stores operation errors into <cite>Salesforce.dataloader_errors</cite>.</p>
                                                                <p>These can be retrieved with keywords <cite>get_dataloader_success_table</cite> and
                                                                    <cite>get_dataloader_error_table</cite> which return corresponding data as
                                                                    <cite>Autosphere.Table</cite>.
                                                                </p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param input_object:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath or list of dictionaries</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param mapping_object:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath or dictionary</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation is successful</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-dataloader-error-table">
                                                            <h2><a href="#get-dataloader-error-table">Get Dataloader Error Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return Dataloader error entries as <cite>Autosphere.Table</cite></p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-dataloader-success-table">
                                                            <h2><a href="#get-dataloader-success-table">Get Dataloader Success Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return Dataloader success entries as <cite>Autosphere.Table</cite></p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-opportunity-id">
                                                            <h2><a href="#get-opportunity-id">Get Opportunity Id</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get ID of an Opportunity linked to set account.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>opportunity_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>opportunity to query</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param opportunity_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">opportunity to query</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">Id of the opportunity or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-pricebook-entries">
                                                            <h2><a href="#get-pricebook-entries">Get Pricebook Entries</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get all pricebook entries.</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">query result</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-pricebook-id">
                                                            <h2><a href="#get-pricebook-id">Get Pricebook Id</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get ID of a pricelist.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pricebook_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>pricelist to query</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Returns False if unique Id is not found.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param pricebook_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">pricelist to query</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">Id of the pricelist or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-products-in-pricelist">
                                                            <h2><a href="#get-products-in-pricelist">Get Products In Pricelist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get all products in a pricelist.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pricebook_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>pricelist to query</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param pricebook_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">pricelist to query</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">products in dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-salesforce-object-by-id">
                                                            <h2><a href="#get-salesforce-object-by-id">Get Salesforce Object By Id</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get Salesforce object by id and type.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object id</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object id</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">dictionary of object attributes</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-salesforce-object-metadata">
                                                            <h2><a href="#get-salesforce-object-metadata">Get Salesforce Object Metadata</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get Salesfoce object metadata by type.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">object metadata as dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-dictionary-from-file">
                                                            <h2><a href="#read-dictionary-from-file">Read Dictionary From File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Read dictionary from file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>mapping_file</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>path to the file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param mapping_file:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to the file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">file content as dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="salesforce-query">
                                                            <h2><a href="#salesforce-query">Salesforce Query</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Perform SQL query.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sql_string</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>SQL clause to perform</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param sql_string:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">SQL clause to perform</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">result of the SQL query</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="salesforce-query-result-as-table">
                                                            <h2><a href="#salesforce-query-result-as-table">Salesforce Query Result As Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Perform SQL query and return result as <cite>Autosphere.Table</cite>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sql_string</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>SQL clause to perform</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param sql_string:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">SQL clause to perform</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">result of the SQL query as Table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-account">
                                                            <h2><a href="#set-account">Set Account</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set account name and id by giving either parameter.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account_name</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>string, defaults to ""</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account_id</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>string, defaults to ""</td>
                                                                    </tr>
                                                                </table>


                                                                <dl class="docutils">
                                                                    <dt>Can be used together with keywords:</dt>
                                                                    <dd>
                                                                        <ul class="first last simple">
                                                                            <li>get_opportunity_id</li>
                                                                            <li>create_new_opportunity</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param account_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">string, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param account_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">string, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if account was found from Salesforce, else False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-pricebook">
                                                            <h2><a href="#set-pricebook">Set Pricebook</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets Pricebook to be used in Salesforce operations.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pricebook_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>pricelist to use</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param pricebook_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">pricelist to use</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="update-salesforce-object">
                                                            <h2><a href="#update-salesforce-object">Update Salesforce Object</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Update Salesfoce object by type, id and data.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object id</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_data</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>Salesforce object data</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object id</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_data:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object data</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises SalesforceDataNotAnDictionary:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">when <cite>object_data</cite> is not dictionary</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if successful</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="upsert-salesforce-object">
                                                            <h2><a href="#upsert-salesforce-object">Upsert Salesforce Object</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Upsert Salesfoce object by type, id and data.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object type</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Salesforce object id</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>object_data</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>Salesforce object data</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object type</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object id</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param object_data:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Salesforce object data</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises SalesforceDataNotAnDictionary:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">when <cite>object_data</cite> is not dictionary</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if successful</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()" type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-add-product-into-opportunity" href="#add-product-into-opportunity" class="">Add Product Into Opportunity</a></li>
                                                    <li><a id="link-auth-with-token" href="#auth-with-token" class="">Auth With Token</a></li>
                                                    <li><a id="link-create-new-opportunity" href="#create-new-opportunity" class="">Create New Opportunity</a></li>
                                                    <li><a id="link-create-salesforce-object" href="#create-salesforce-object" class="">Create Salesforce Object</a></li>
                                                    <li><a id="link-delete-salesforce-object" href="#delete-salesforce-object" class="">Delete Salesforce Object</a></li>
                                                    <li><a id="link-describe-salesforce-object" href="#describe-salesforce-object" class="">Describe Salesforce Object</a></li>
                                                    <li><a id="link-execute-dataloader-insert" href="#execute-dataloader-insert" class="">Execute Dataloader Insert</a></li>
                                                    <li><a id="link-get-dataloader-error-table" href="#get-dataloader-error-table" class="">Get Dataloader Error Table</a></li>
                                                    <li><a id="link-get-dataloader-success-table" href="#get-dataloader-success-table" class="">Get Dataloader Success Table</a></li>
                                                    <li><a id="link-get-opportunity-id" href="#get-opportunity-id" class="">Get Opportunity Id</a></li>
                                                    <li><a id="link-get-pricebook-entries" href="#get-pricebook-entries" class="">Get Pricebook Entries </a></li>
                                                    <li><a id="link-get-pricebook-id" href="#get-pricebook-id" class="">Get Pricebook Id</a></li>
                                                    <li><a id="link-get-products-in-pricelist" href="#get-products-in-pricelist" class="">Get Products In Pricelist</a></li>
                                                    <li><a id="link-get-salesforce-object-by-id" href="#get-salesforce-object-by-id" class="">Get Salesforce Object By Id</a></li>
                                                    <li><a id="link-get-salesforce-object-metadata" href="#get-salesforce-object-metadata" class="">Get Salesforce Object Metadata</a></li>
                                                    <li><a id="link-read-dictionary-from-file" href="#read-dictionary-from-file" class="">Read Dictionary From File</a></li>
                                                    <li><a id="link-salesforce-query" href="#salesforce-query" class="">Salesforce Query</a></li>
                                                    <li><a id="link-salesforce-query-result-as-table" href="#salesforce-query-result-as-table" class="">Salesforce Query Result As Table</a></li>
                                                    <li><a id="link-set-account" href="#set-account" class="">Set Account</a></li>
                                                    <li><a id="link-set-pricebook" href="#set-pricebook" class="">Set Pricebook</a></li>
                                                    <li><a id="link-update-salesforce-object" href="#update-salesforce-object" class="">Update Salesforce Object</a></li>
                                                    <li><a id="link-upsert-salesforce-object" href="#upsert-salesforce-object" class="">Upsert Salesforce Object</a></li>
                                                </ul>

                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Headings -->

    </div>
</section>