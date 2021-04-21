<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Json</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Json</li>
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
                                            <div class="document">
                                                <p><cite>JSON</cite> is a library for manipulating <a class="reference external" href="http://json.org/">JSON</a> files and strings.</p>
                                                <p>JSON is a common data interchange format inspired by a subset of the Javascript programming language, but these days is a de facto standard in modern web APIs and is language agnostic.</p>
                                                <p><strong>Serialization</strong></p>
                                                <p>The term <cite>serialization</cite> refers to the process of converting Autosphere or Python types to JSON or the other way around.</p>
                                                <p>Basic types can be easily converted between the domains, and the mapping is as follows:</p>
                                                <table border="1" class="docutils">
                                                    <colgroup>
                                                        <col width="65%">
                                                        <col width="35%">
                                                    </colgroup>
                                                    <thead valign="bottom">
                                                        <tr>
                                                            <th class="head">JSON</th>
                                                            <th class="head">Python</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody valign="top">
                                                        <tr>
                                                            <td>object</td>
                                                            <td>dict</td>
                                                        </tr>
                                                        <tr>
                                                            <td>array</td>
                                                            <td>list</td>
                                                        </tr>
                                                        <tr>
                                                            <td>string</td>
                                                            <td>str</td>
                                                        </tr>
                                                        <tr>
                                                            <td>number (int)</td>
                                                            <td>int</td>
                                                        </tr>
                                                        <tr>
                                                            <td>number (real)</td>
                                                            <td>float</td>
                                                        </tr>
                                                        <tr>
                                                            <td>true</td>
                                                            <td>True</td>
                                                        </tr>
                                                        <tr>
                                                            <td>false</td>
                                                            <td>False</td>
                                                        </tr>
                                                        <tr>
                                                            <td>null</td>
                                                            <td>None</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><strong>About JSONPath</strong></p>
                                                <p>Reading and writing values from/to JSON serializable objects is done using <a class="reference external" href="http://goessner.net/articles/JsonPath/">JSONPath</a>. It's a syntax designed to quickly and easily refer to specific elements in
                                                    a JSON structure.</p>
                                                <p>Compared to Python's normal dictionary access, JSONPath expressions can target multiple elements through features such as conditionals and wildcards, which can simplify many JSON-related operations. It's analogous to XPath for XML structures.</p>
                                                <p><strong>Syntax example</strong></p>
                                                <p>For this example consider the following structure:</p>
                                                <pre class="code json literal-block"><span class="p">{</span>
      <span class="nt">"clients"</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="nt">"name"</span><span class="p">:</span> <span class="s2">"Johnny Example"</span><span class="p">,</span>
          <span class="nt">"email"</span><span class="p">:</span> <span class="s2">"john@example.com"</span><span class="p">,</span>
          <span class="nt">"orders"</span><span class="p">:</span> <span class="p">[</span>
              <span class="p">{</span><span class="nt">"address"</span><span class="p">:</span> <span class="s2">"Streetroad 123"</span><span class="p">,</span> <span class="nt">"price"</span><span class="p">:</span> <span class="mf">103.20</span><span class="p">},</span>
              <span class="p">{</span><span class="nt">"address"</span><span class="p">:</span> <span class="s2">"Streetroad 123"</span><span class="p">,</span> <span class="nt">"price"</span><span class="p">:</span> <span class="mf">98.99</span><span class="p">}</span>
          <span class="p">]</span>
        <span class="p">},</span>
        <span class="p">{</span>
          <span class="nt">"name"</span><span class="p">:</span> <span class="s2">"Jane Example"</span><span class="p">,</span>
          <span class="nt">"email"</span><span class="p">:</span> <span class="s2">"jane@example.com"</span><span class="p">,</span>
          <span class="nt">"orders"</span><span class="p">:</span> <span class="p">[</span>
              <span class="p">{</span><span class="nt">"address"</span><span class="p">:</span> <span class="s2">"Waypath 321"</span><span class="p">,</span> <span class="nt">"price"</span><span class="p">:</span> <span class="mf">22.00</span><span class="p">},</span>
              <span class="p">{</span><span class="nt">"address"</span><span class="p">:</span> <span class="s2">"Streetroad 123"</span><span class="p">,</span> <span class="nt">"price"</span><span class="p">:</span> <span class="mf">2330.01</span><span class="p">}</span>
          <span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">}</span>
    </pre>
                                                <p>In the simplest case JSONPath can replace nested access:</p>
                                                <pre class="code robotframework literal-block"><span class="c"># First order of first client, with direct dictionary access
    ${value}=</span><span class="p">    </span><span class="c">Set variable</span><span class="p">    </span><span class="c">${json}["clients"][0]["orders"][0]</span><span class="p">
    
    </span><span class="c"># JSONPath access
    ${value}=</span><span class="p">    </span><span class="c">Get value from JSON</span><span class="p">    </span><span class="c">${json}</span><span class="p">    </span><span class="c">$.clients[0].orders[0]</span>
    </pre>
                                                <p>But the power comes from complicated expressions:</p>
                                                <pre class="code robotframework literal-block"><span class="c"># Find delivery addresses for all orders
    ${prices}=</span><span class="p">        </span><span class="c">Get values from JSON</span><span class="p">    </span><span class="c">$..address</span><span class="p">
    
    </span><span class="c"># Find orders that cost over 100
    ${expensives}=</span><span class="p">    </span><span class="c">Get values from JSON</span><span class="p">    </span><span class="c">$..orders[?(@.price&gt;100)]</span>
    </pre>
                                                <p><strong>Supported Expressions</strong></p>
                                                <p>The supported syntax elements are:</p>
                                                <table border="1" class="docutils">
                                                    <colgroup>
                                                        <col width="21%">
                                                        <col width="79%">
                                                    </colgroup>
                                                    <thead valign="bottom">
                                                        <tr>
                                                            <th class="head">Element</th>
                                                            <th class="head">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody valign="top">
                                                        <tr>
                                                            <td>$</td>
                                                            <td>Root object/element</td>
                                                        </tr>
                                                        <tr>
                                                            <td>@</td>
                                                            <td>Current object/element</td>
                                                        </tr>
                                                        <tr>
                                                            <td>. or []</td>
                                                            <td>Child operator</td>
                                                        </tr>
                                                        <tr>
                                                            <td>..</td>
                                                            <td>Recursive descent</td>
                                                        </tr>
                                                        <tr>
                                                            <td>*</td>
                                                            <td>Wilcard, any element</td>
                                                        </tr>
                                                        <tr>
                                                            <td>[n]</td>
                                                            <td>Array index</td>
                                                        </tr>
                                                        <tr>
                                                            <td>[a:b:c]</td>
                                                            <td>Array slice (start, end, step)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>[a,b]</td>
                                                            <td>Union of indices or names</td>
                                                        </tr>
                                                        <tr>
                                                            <td>?()</td>
                                                            <td>Apply a filter expression</td>
                                                        </tr>
                                                        <tr>
                                                            <td>()</td>
                                                            <td>Script expression</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>There are a multitude of different script expressions in addition to the elements listed above, which can be seen in the <a class="reference external" href="http://goessner.net/articles/JsonPath/">aforementioned article</a>.</p>
                                                <p>For further library usage examples, see the individual keywords.</p>
                                            </div>
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
                                                        <div class="keyword" id="add-to-json">
                                                            <h2><a href="#add-to-json">Add to JSON</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Add items into a JSON serializable object and return the result.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>expr</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>value</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If the target is a list, the values are appended to the end.
                                                                        If the target is a dict, the keys are either added or updated.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON serializable object</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param expr:</th>
                                                                                <td class="field-body">JSONPath expression</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param value:</th>
                                                                                <td class="field-body">values to either append or update</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Change the name value for all people</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>before<span class="token punctuation">}</span></span>=</span>    Convert string to JSON   {"People": [{"Name": "Mark"}, {"Name": "Jane"}]}
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>after<span class="token punctuation">}</span></span>=</span>     Add to JSON    <span class="token variable"><span class="token punctuation">${</span>json<span class="token punctuation">}</span></span>   $.People.name    JohnMalkovich
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-json-to-string">
                                                            <h2><a href="#convert-json-to-string">Convert JSON to String</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Convert a JSON serializable object to a string and return it.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON serializable object</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>obj<span class="token punctuation">}</span></span>=</span>    Create dictionary    Key=Value
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>json<span class="token punctuation">}</span></span>=</span>   Convert JSON to string    <span class="token variable"><span class="token punctuation">${</span>obj<span class="token punctuation">}</span></span>
  <span class="token task-name function">Should be equal</span>    <span class="token variable"><span class="token punctuation">${</span>json<span class="token punctuation">}</span></span>     {"Key": "Value"}
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-string-to-json">
                                                            <h2><a href="#convert-string-to-json">Convert String to JSON</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Convert a string to a JSON serializable object and return it.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON string</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>json<span class="token punctuation">}</span></span>=</span>    Set variable    {"Key": "Value"}
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>obj<span class="token punctuation">}</span></span>=</span>     Convert string to JSON    <span class="token variable"><span class="token punctuation">${</span>json<span class="token punctuation">}</span></span>
  <span class="token task-name function">Should be equal</span>    <span class="token variable"><span class="token punctuation">${</span>obj.Key<span class="token punctuation">}</span></span>    Value
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-from-json">
                                                            <h2><a href="#delete-from-json">Delete from JSON</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Delete values from a JSON serializable object and return the result. Will delete
                                                                    all values that match the expression.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>expr</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Delete values from a JSON serializable object and return the result.
                                                                        Will delete all values that match the expression.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON serializable object or string</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param expr:</th>
                                                                                <td class="field-body">JSONPath expression</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Delete all people</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>before<span class="token punctuation">}</span></span>=</span>    Convert string to JSON   {"People": [{"Name": "Mark"}, {"Name": "Jane"}]}
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>after<span class="token punctuation">}</span></span>=</span>     Delete from JSON    <span class="token variable"><span class="token punctuation">${</span>json<span class="token punctuation">}</span></span>   $.People[*]
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-value-from-json">
                                                            <h2><a href="#get-value-from-json">Get value from JSON</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get a single value from a JSON serializable object that matches the given
                                                                    expression.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>expr</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>default</td>
                                                                            <td>Any, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>Raises a ValueError if there is more than one match.
                                                                        Returns the given default argument (or None) if there
                                                                        were no matches.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON serializable object or string</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param expr:</th>
                                                                                <td class="field-body">jsonpath expression</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Get the name value for the first person</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>people<span class="token punctuation">}</span></span>=</span>    Convert string to JSON   {"People": [{"Name": "Mark"}, {"Name": "Jane"}]}
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>first<span class="token punctuation">}</span></span>=</span>     Get value from JSON      <span class="token variable"><span class="token punctuation">${</span>people<span class="token punctuation">}</span></span>   $.People[0].name
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-values-from-json">
                                                            <h2><a href="#get-values-from-json">Get values from JSON</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get all values from a JSON serializable object that match the given expression.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>expr</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON serializable object or string</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param expr:</th>
                                                                                <td class="field-body">JSONPath expression</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Get all the names for all people</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>people<span class="token punctuation">}</span></span>=</span>    Convert string to JSON   {"People": [{"Name": "Mark"}, {"Name": "Jane"}]}
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">@{</span>names<span class="token punctuation">}</span></span>=</span>     Get values from JSON     <span class="token variable"><span class="token punctuation">${</span>people<span class="token punctuation">}</span></span>   $.People[*].name
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="load-json-from-file">
                                                            <h2><a href="#load-json-from-file">Load JSON from file</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Load JSON data from a file, and return it as JSON serializable object. Depending
                                                                    on the input file the object can be either a dictionary, a list, or a scalar value.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>filename</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Load JSON data from a file, and return it as JSON serializable object.
                                                                        Depending on the input file the object can be either a dictionary,
                                                                        a list, or a scalar value.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param filename:</th>
                                                                                <td class="field-body">path to input file</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>auth<span class="token punctuation">}</span></span>=</span>    Load JSON from file    auth.json
  <span class="token task-name function">Log</span>   Current auth token: <span class="token variable"><span class="token punctuation">${</span>auth.token<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-json-to-file">
                                                            <h2><a href="#save-json-to-file">Save JSON to file</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Save a JSON serializable object or a string containg a JSON value into a file.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>filename</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Save a JSON serializable object or a string containg
                                                                        a JSON value into a file.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON serializable object or string</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param filename:</th>
                                                                                <td class="field-body">path to output file</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Save dictionary to file</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>john<span class="token punctuation">}</span></span>=</span>    Create dictionary    name=John    mail=john@example.com
  <span class="token task-name function">Save JSON to file</span>    <span class="token variable"><span class="token punctuation">${</span>john<span class="token punctuation">}</span></span>    john.json
  
  <span class="token comment"># Save string to file</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>mark<span class="token punctuation">}</span></span>=</span>    Set variable    {"name": "Mark", "mail": "mark@example.com"}
  <span class="token task-name function">Save JSON to file</span>    <span class="token variable"><span class="token punctuation">${</span>mark<span class="token punctuation">}</span></span>    mark.json
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="update-value-to-json">
                                                            <h2><a href="#update-value-to-json">Update value to JSON</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Update existing values in a JSON serializable object and return the result. Will
                                                                    change all values that match the expression.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>doc</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>expr</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>value</td>
                                                                            <td>Dict[str, typing.Any], List[typing.Any], str, int, float, bool, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Update existing values in a JSON serializable object and return the result.
                                                                        Will change all values that match the expression.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param doc:</th>
                                                                                <td class="field-body">JSON or string</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param expr:</th>
                                                                                <td class="field-body">JSONPath expression</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param value:</th>
                                                                                <td class="field-body">New value for the matching item(s)</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Change the name key for all people</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>before<span class="token punctuation">}</span></span>=</span>    Convert string to JSON   {"People": [{"Name": "Mark"}, {"Name": "Jane"}]}
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">&amp;{</span>after<span class="token punctuation">}</span></span>=</span>     Update value to JSON     <span class="token variable"><span class="token punctuation">${</span>json<span class="token punctuation">}</span></span>   $.People[*].name    JohnMalkovich
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

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
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()"  type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div class="ps ps--active-y">
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-add-to-json" href="#add-to-json" class="">Add to JSON</a></li>
                                                    <li><a id="link-convert-json-to-string" href="#convert-json-to-string" class="">Convert JSON to String</a></li>
                                                    <li><a id="link-convert-string-to-json" href="#convert-string-to-json" class="">Convert String to JSON</a></li>
                                                    <li><a id="link-delete-from-json" href="#delete-from-json" class="">Delete from JSON</a></li>
                                                    <li><a id="link-get-value-from-json" href="#get-value-from-json" class="">Get value from JSON</a></li>
                                                    <li><a id="link-get-values-from-json" href="#get-values-from-json" class="">Get values from JSON</a></li>
                                                    <li><a id="link-load-json-from-file" href="#load-json-from-file" class="">Load JSON from file</a></li>
                                                    <li><a id="link-save-json-to-file" href="#save-json-to-file" class="">Save JSON to file</a></li>
                                                    <li><a id="link-update-value-to-json" href="#update-value-to-json" class="">Update value to JSON</a></li>
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