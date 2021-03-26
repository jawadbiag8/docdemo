
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Salesforce</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-salesforce">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-salesforce/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="add-product-into-opportunity">
                                        <h2><a href="#add-product-into-opportunity">Add Product Into Opportunity</a></h2>

                                        <div>
                                            <p class="shortdoc">Add Salesforce Product into Opportunity.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                                handle with <cite>operation</cite> type.</p>
                                            <h3>Arguments</h3>
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
                                                <cite>Autosphere.Table</cite>.</p>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-add-product-into-opportunity" href="#add-product-into-opportunity" class="">Add Product Into Opportunity</a><a id="link-auth-with-token" href="#auth-with-token" class="">Auth With Token</a>
                                <a id="link-create-new-opportunity" href="#create-new-opportunity" class="">Create New Opportunity</a><a id="link-create-salesforce-object" href="#create-salesforce-object" class="">Create
                  Salesforce Object</a><a id="link-delete-salesforce-object" href="#delete-salesforce-object" class="">Delete Salesforce Object</a><a id="link-describe-salesforce-object" href="#describe-salesforce-object" class="">Describe
                  Salesforce Object</a><a id="link-execute-dataloader-insert" href="#execute-dataloader-insert" class="">Execute Dataloader Insert</a><a id="link-get-dataloader-error-table" href="#get-dataloader-error-table"
                                    class="">Get
                  Dataloader Error Table</a><a id="link-get-dataloader-success-table" href="#get-dataloader-success-table" class="">Get Dataloader Success Table</a><a id="link-get-opportunity-id" href="#get-opportunity-id" class="">Get Opportunity Id</a>
                                <a id="link-get-pricebook-entries" href="#get-pricebook-entries" class="">Get Pricebook Entries
                                        </a><a id="link-get-pricebook-id" href="#get-pricebook-id" class="">Get Pricebook
                  Id</a><a id="link-get-products-in-pricelist" href="#get-products-in-pricelist" class="">Get Products In Pricelist</a><a id="link-get-salesforce-object-by-id" href="#get-salesforce-object-by-id" class="">Get Salesforce Object By Id</a>
                                <a id="link-get-salesforce-object-metadata" href="#get-salesforce-object-metadata" class="">Get Salesforce Object Metadata</a><a id="link-read-dictionary-from-file" href="#read-dictionary-from-file"
                                    class="">Read Dictionary From File</a><a id="link-salesforce-query" href="#salesforce-query" class="">Salesforce Query</a><a id="link-salesforce-query-result-as-table" href="#salesforce-query-result-as-table"
                                    class="">Salesforce Query Result As Table</a><a id="link-set-account" href="#set-account" class="">Set Account</a><a id="link-set-pricebook" href="#set-pricebook" class="">Set
                  Pricebook</a><a id="link-update-salesforce-object" href="#update-salesforce-object" class="">Update Salesforce Object</a><a id="link-upsert-salesforce-object" href="#upsert-salesforce-object" class="">Upsert Salesforce Object</a></div>
                        </aside>
                    </div>
                </article>
            