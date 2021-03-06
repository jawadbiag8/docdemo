<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Dialogs</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Dialogs</li>
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
                                            <p>The <cite>Dialogs</cite> library provides a way to ask for user input during executions through HTML forms. Form elements can be built with library keywords or they can be defined in a static JSON file.</p>
                                            <p><strong>How the library works</strong></p>
                                            <p>The main keyword of the library is <tt class="docutils literal">Request Response</tt> which works as follows:</p>
                                            <ol class="arabic simple">
                                                <li>It starts an HTTP server in the background</li>
                                                <li>The HTML form is generated either according to a JSON file or the keywords called during the task</li>
                                                <li>It opens a browser and shows the created form (The browser is opened with the <tt class="docutils literal">Open Available Browser</tt> keyword from the
                                                    <tt class="docutils literal">Autosphere.Browser</tt> library)
                                                </li>
                                                <li>Once the form is filled and submitted by the user, the server will process the response and extract the field values, which in turn are returned by the keyword
                                                </li>
                                                <li>In the end, the browser is closed and the HTTP server is stopped</li>
                                            </ol>
                                            <p><tt class="docutils literal">Request Response</tt> can be invoked in two ways:</p>
                                            <ol class="arabic simple">
                                                <li>Without any parameters. This means that form shown is the one created by other library keywords. If no form elements have been added with keywords then the form will contain just one submit button. Form building must
                                                    be started with the keyword <tt class="docutils literal">Create Form</tt>.
                                                </li>
                                                <li>Giving a path to a JSON file (using the parameter <strong>formspec</strong>) which specifies the elements that form should include.</li>
                                            </ol>
                                            <p>The keyword has optional parameters to specify form window <strong>width</strong> and
                                                <strong>height</strong>. The default size is 600px wide and 1000px high.
                                            </p>
                                            <p><strong>Setting library arguments</strong></p>
                                            <p>Library has arguments <tt class="docutils literal">server_port</tt> and <tt class="docutils literal">stylesheet</tt>. The <tt class="docutils literal">server_port</tt> argument takes integer value, which defines port where
                                                HTTP server will be run. By default port is 8105. The <tt class="docutils literal">stylesheet</tt> can be used to point CSS file, which will be used to modify style of form, which is shown to the user. Defaults to built-in
                                                Autosphere stylesheet.</p>
                                            <p><strong>Supported element types</strong></p>
                                            <p>As a bare minimum, the form is displayed with a submit button when the
                                                <tt class="docutils literal">Request Response</tt> keyword is called.
                                            </p>
                                            <p>The supported input elements and their corresponding HTML tags are:</p>
                                            <ul class="simple">
                                                <li>form (<tt class="docutils literal">&lt;form&gt;</tt>)</li>
                                                <li>title (<tt class="docutils literal">&lt;h3&gt;</tt>)</li>
                                                <li>text (<tt class="docutils literal">&lt;p&gt;</tt>)</li>
                                                <li>radiobutton (<tt class="docutils literal">&lt;input <span class="pre">type='radio'&gt;</span></tt>)</li>
                                                <li>checkbox (<tt class="docutils literal">&lt;input <span class="pre">type='checkbox'&gt;</span></tt>)</li>
                                                <li>dropdown (<tt class="docutils literal">&lt;select&gt;</tt>)</li>
                                                <li>textarea (<tt class="docutils literal">&lt;textarea&gt;</tt>)</li>
                                                <li>textinput (<tt class="docutils literal">&lt;input <span class="pre">type='text'&gt;</span></tt>)</li>
                                                <li>fileinput (<tt class="docutils literal">&lt;input <span class="pre">type='file'&gt;</span></tt>)</li>
                                                <li>hiddeninput (<tt class="docutils literal">&lt;input <span class="pre">type='hidden'&gt;</span></tt>)</li>
                                                <li>submit (<tt class="docutils literal">&lt;input <span class="pre">type='submit'&gt;</span></tt>)</li>
                                            </ul>
                                            <p><strong>About file types</strong></p>
                                            <p>The <tt class="docutils literal">Add File Input</tt> keyword has parameter <tt class="docutils literal">filetypes</tt>. Parameter sets filter for file types that can be uploaded via element. Parameter can be set to
                                                <tt class="docutils literal"><span class="pre">filetypes=${EMPTY}</span></tt> to accept all files. Multiple types are separated with comma <tt class="docutils literal">filetypes=image/jpeg,image/png</tt>.
                                            </p>
                                            <p>Some common filetypes:</p>
                                            <ul class="simple">
                                                <li>image/* (all image types)</li>
                                                <li>audio/* (all audio types)</li>
                                                <li>video/* (all video types)</li>
                                                <li>application/pdf (PDFs)</li>
                                                <li>application/vnd.ms-excel (.xls, .xlsx)</li>
                                            </ul>
                                            <p>The list of all possible <a class="reference external" href="http://www.iana.org/assignments/media-types/media-types.xhtml">MIME-types</a>.
                                            </p>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <p>Examples of creating forms through keywords and a JSON file:</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Dialogs</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Ask Question From User By Form Built With Keywords</span><span class="p">
    </span><span class="nf">Create Form</span><span class="p">     </span><span class="s">questions</span><span class="p">
    </span><span class="nf">Add Text Input</span><span class="p">  </span><span class="s">label=What is your name?</span><span class="p">  </span><span class="s">name=username</span><span class="p">
    &amp;{</span><span class="nv">response</span><span class="p">}=    </span><span class="nf">Request Response</span><span class="p">
    </span><span class="nf">Log</span><span class="p">             </span><span class="s">Username is &quot;</span><span class="p">${</span><span class="nv">response</span><span class="p">}</span><span class="s">[username]&quot;</span><span class="p">

</span><span class="gu">Ask Question From User By Form Specified With JSON</span><span class="p">
    &amp;{</span><span class="nv">response</span><span class="p">}=    </span><span class="nf">Request Response</span><span class="p">  </span><span class="s">/path/to/myform.json</span><span class="p">
    </span><span class="nf">Log</span><span class="p">             </span><span class="s">Username is &quot;</span><span class="p">${</span><span class="nv">response</span><span class="p">}</span><span class="s">[username]&quot;</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <p>The library can also be used inside Python:</p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Dialogs</span> <span class="kn">import</span> <span class="n">Dialogs</span>

<span class="k">def</span> <span class="nf">ask_question_from_user</span><span class="p">(</span><span class="n">question</span><span class="p">,</span> <span class="n">attribute</span><span class="p">):</span>
    <span class="n">d</span> <span class="o">=</span> <span class="n">Dialogs</span><span class="p">()</span>
    <span class="n">d</span><span class="o">.</span><span class="n">create_form</span><span class="p">(</span><span class="s1">'questions'</span><span class="p">)</span>
    <span class="n">d</span><span class="o">.</span><span class="n">add_text_input</span><span class="p">(</span><span class="n">label</span><span class="o">=</span><span class="n">question</span><span class="p">,</span> <span class="n">name</span><span class="o">=</span><span class="n">attribute</span><span class="p">)</span>
    <span class="n">response</span> <span class="o">=</span> <span class="n">request_response</span><span class="p">()</span>
    <span class="k">return</span> <span class="n">response</span>

<span class="n">response</span> <span class="o">=</span> <span class="n">ask_question_from_user</span><span class="p">(</span><span class="s1">'What is your name ?'</span><span class="p">,</span> <span class="s1">'username'</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">&quot;Username is '</span><span class="si">{</span><span class="n">response</span><span class="p">[</span><span class="s1">'username'</span><span class="p">]</span><span class="si">}</span><span class="s2">'&quot;</span><span class="p">)</span>
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
                                                        <div class="keyword" id="add-checkbox">
                                                            <h2><a href="#add-checkbox">Add Checkbox</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add checkbox element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>label</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>check box element label</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>check box element identifier</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>options</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>values for the check box</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>check box selected value, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param label:</th>
                                                                            <td class="field-body">check box element label</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param element_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">check box element identifier</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param options:</th>
                                                                            <td class="field-body">values for the check box</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param default:</th>
                                                                            <td class="field-body">check box selected value, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add Checkbox    label=Select your colors
...             element_id=colors
...             options=green,red,blue,yellow
...             default=blue
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-dropdown">
                                                            <h2><a href="#add-dropdown">Add Dropdown</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add dropdown element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>label</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>dropdown element label</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>dropdown element id attribute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>options</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>values for the dropdown</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>dropdown selected value, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param label:</th>
                                                                            <td class="field-body">dropdown element label</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param element_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">dropdown element id attribute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param options:</th>
                                                                            <td class="field-body">values for the dropdown</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param default:</th>
                                                                            <td class="field-body">dropdown selected value, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add Dropdown  label=Select task type
...           element_id=tasktype
...           options=buy,sell,rent
...           default=buy
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-file-input">
                                                            <h2><a href="#add-file-input">Add File Input</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add text input element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>label</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>input element label</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>hidden element id attribute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>input element name attribute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filetypes</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>accepted filetypes for the file upload</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_directory</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>where to save uploaded files to</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param label:</th>
                                                                            <td class="field-body">input element label</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param element_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">hidden element id attribute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">input element name attribute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param filetypes:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">accepted filetypes for the file upload</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_directory:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">where to save uploaded files to</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Read more of the filetypes in the library documentation.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add File Input  label=Attachment
...             element_id=attachment
...             name=attachment
...             filetypes=${EMPTY}         # Accept all files
...             target_directory=${CURDIR}${/}output

Add File Input  label=Contract
...             element_id=contract
...             name=contract
...             filetypes=application/pdf  # Accept only PDFs
...             target_directory=${CURDIR}${/}output
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-hidden-input">
                                                            <h2><a href="#add-hidden-input">Add Hidden Input</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add hidden input element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>input element name attribute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>input element value attribute</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">input element name attribute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">input element value attribute</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
${uuid}   Evaluate  str(uuid.uuid4())
Add Hidden Input    form-id   ${uuid}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-radio-buttons">
                                                            <h2><a href="#add-radio-buttons">Add Radio Buttons</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add radio button element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element_id</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>radio button element identifier</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>options</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>values for the radio button</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>radio button selected value, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param element_id:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">radio button element identifier</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param options:</th>
                                                                            <td class="field-body">values for the radio button</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param default:</th>
                                                                            <td class="field-body">radio button selected value, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add Radio Button   element_id=drone  buttons=Jim,Robert  default=Robert
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-submit">
                                                            <h2><a href="#add-submit">Add Submit</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add submit element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element name attribute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>buttons</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>list of buttons</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">element name attribute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param buttons:</th>
                                                                            <td class="field-body">list of buttons</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add Submit    name=direction-to-go  buttons=left,right
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-text">
                                                            <h2><a href="#add-text">Add Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add text paragraph element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>text for the element</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">text for the element</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Example.</p>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add Text       ${form_guidance_text}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-text-input">
                                                            <h2><a href="#add-text-input">Add Text Input</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add text input element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>label</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>input element label</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>input element name attribute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>input element value attribute</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param label:</th>
                                                                            <td class="field-body">input element label</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">input element name attribute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">input element value attribute</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add Text Input   what is your firstname ?  fname   value=Mika
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-textarea">
                                                            <h2><a href="#add-textarea">Add Textarea</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add textarea element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>textarea element name</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>rows</td>
                                                                        <td> int </td>
                                                                        <td> 5</td>
                                                                        <td>number of rows for the area, defaults to 5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>cols</td>
                                                                        <td> int </td>
                                                                        <td> 40</td>
                                                                        <td>numnber of columns for the area, defaults to 40</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>prefilled text for the area, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">textarea element name</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param rows:</th>
                                                                            <td class="field-body">number of rows for the area, defaults to 5</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param cols:</th>
                                                                            <td class="field-body">numnber of columns for the area, defaults to 40</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param default:</th>
                                                                            <td class="field-body">prefilled text for the area, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form
Add Textarea       name=feedback  default=enter feedback here
Add Textarea       name=texts  rows=40   cols=80
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-title">
                                                            <h2><a href="#add-title">Add Title</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add h4 element into form</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>title</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>text for the element</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param title:</th>
                                                                            <td class="field-body">text for the element</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form     # default form title will be &quot;Requesting response&quot;
Add Title       User Confirmation Form
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-form">
                                                            <h2><a href="#create-form">Create Form</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create new form</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>title</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>form title, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param title:</th>
                                                                            <td class="field-body">form title, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form     # form title will be &quot;Requesting response&quot;
Create Form     title=User Confirmation Form
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="request-response">
                                                            <h2><a href="#request-response">Request Response</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Start server and show form. Waits for user response.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>formspec</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>form json specification file, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>window_width</td>
                                                                        <td> int </td>
                                                                        <td> 600</td>
                                                                        <td>window width in pixels, defaults to 600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>window_height</td>
                                                                        <td> int </td>
                                                                        <td> 1000</td>
                                                                        <td>window height in pixels, defaults to 1000</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param formspec:</th>
                                                                            <td class="field-body">form json specification file, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param window_width:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">window width in pixels, defaults to 600</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param window_height:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">window height in pixels, defaults to 1000</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">form response</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Form    ${CURDIR}/${/}myform.json
&amp;{response}    Request Response
</code></pre>
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
                                                    <li><a id="link-add-checkbox" href="#add-checkbox" class="">Add Checkbox</a></li>
                                                    <li><a id="link-add-dropdown" href="#add-dropdown" class="">Add Dropdown</a></li>
                                                    <li><a id="link-add-file-input" href="#add-file-input" class="">Add File Input</a></li>
                                                    <li><a id="link-add-hidden-input" href="#add-hidden-input" class="">Add Hidden Input</a></li>
                                                    <li><a id="link-add-radio-buttons" href="#add-radio-buttons" class="">Add Radio Buttons</a></li>
                                                    <li><a id="link-add-submit" href="#add-submit" class="">Add Submit</a></li>
                                                    <li><a id="link-add-text" href="#add-text" class="">Add Text</a></li>
                                                    <li><a id="link-add-text-input" href="#add-text-input" class="">Add Text Input</a></li>
                                                    <li><a id="link-add-textarea" href="#add-textarea" class="">Add Textarea</a></li>
                                                    <li><a id="link-add-title" href="#add-title" class="">Add Title</a></li>
                                                    <li><a id="link-create-form" href="#create-form" class="">Create Form</a></li>
                                                    <li><a id="link-request-response" href="#request-response" class="">Request Response</a></li>
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