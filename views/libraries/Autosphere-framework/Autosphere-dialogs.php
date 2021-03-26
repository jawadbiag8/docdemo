
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Dialogs</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-dialogs">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-dialogs/keywords">Keywords</a></nav>
                    </div>
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
                                        <tt class="docutils literal">Autosphere.Browser</tt> library)</li>
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
                                    <strong>height</strong>. The default size is 600px wide and 1000px high.</p>
                                <p><strong>Setting library arguments</strong></p>
                                <p>Library has arguments <tt class="docutils literal">server_port</tt> and <tt class="docutils literal">stylesheet</tt>. The <tt class="docutils literal">server_port</tt> argument takes integer value, which defines port where
                                    HTTP server will be run. By default port is 8105. The <tt class="docutils literal">stylesheet</tt> can be used to point CSS file, which will be used to modify style of form, which is shown to the user. Defaults to built-in
                                    Autosphere stylesheet.</p>
                                <p><strong>Supported element types</strong></p>
                                <p>As a bare minimum, the form is displayed with a submit button when the
                                    <tt class="docutils literal">Request Response</tt> keyword is called.</p>
                                <p>The supported input elements and their corresponding HTML tags are:</p>
                                <ul class="simple">
                                    <li>form (<tt class="docutils literal">&lt;form&gt;</tt>)</li>
                                    <li>title (<tt class="docutils literal">&lt;h3&gt;</tt>)</li>
                                    <li>text (<tt class="docutils literal">&lt;p&gt;</tt>)</li>
                                    <li>radiobutton (<tt class="docutils literal">&lt;input <span
                                                class="pre">type='radio'&gt;</span></tt>)</li>
                                    <li>checkbox (<tt class="docutils literal">&lt;input <span
                                                class="pre">type='checkbox'&gt;</span></tt>)</li>
                                    <li>dropdown (<tt class="docutils literal">&lt;select&gt;</tt>)</li>
                                    <li>textarea (<tt class="docutils literal">&lt;textarea&gt;</tt>)</li>
                                    <li>textinput (<tt class="docutils literal">&lt;input <span
                                                class="pre">type='text'&gt;</span></tt>)</li>
                                    <li>fileinput (<tt class="docutils literal">&lt;input <span
                                                class="pre">type='file'&gt;</span></tt>)</li>
                                    <li>hiddeninput (<tt class="docutils literal">&lt;input <span
                                                class="pre">type='hidden'&gt;</span></tt>)</li>
                                    <li>submit (<tt class="docutils literal">&lt;input <span
                                                class="pre">type='submit'&gt;</span></tt>)</li>
                                </ul>
                                <p><strong>About file types</strong></p>
                                <p>The <tt class="docutils literal">Add File Input</tt> keyword has parameter <tt class="docutils literal">filetypes</tt>. Parameter sets filter for file types that can be uploaded via element. Parameter can be set to
                                    <tt class="docutils literal"><span class="pre">filetypes=${EMPTY}</span></tt> to accept all files. Multiple types are separated with comma <tt class="docutils literal">filetypes=image/jpeg,image/png</tt>.</p>
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
                </article>
           