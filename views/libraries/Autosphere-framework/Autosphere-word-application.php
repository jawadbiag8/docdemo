
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Word.Application</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-word-application">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-word-application/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Word.Application</cite> is a library for controlling a Word application.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">                 </span><span class="nn">Autosphere.Word.Application</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">              </span><span class="nf">Open Application</span><span class="p">
</span><span class="kn">Suite Teardown</span><span class="p">          </span><span class="nf">Quit Application</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Open existing file</span><span class="p">
    </span><span class="nf">Open File</span><span class="p">           </span><span class="s">old.docx</span><span class="p">
    </span><span class="nf">Write Text</span><span class="p">          </span><span class="s">Extra Line Text</span><span class="p">
    </span><span class="nf">Write Text</span><span class="p">          </span><span class="s">Another Extra Line of Text</span><span class="p">
    </span><span class="nf">Save Document AS</span><span class="p">    ${</span><span class="nv">CURDIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">new.docx</span><span class="p">
    ${</span><span class="nv">texts</span><span class="p">}=           </span><span class="nf">Get all Texts</span><span class="p">
    </span><span class="nf">Close Document</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Word.Application</span> <span class="kn">import</span> <span class="n">Application</span>

<span class="n">app</span> <span class="o">=</span> <span class="n">Application</span><span class="p">()</span>
<span class="n">app</span><span class="o">.</span><span class="n">open_application</span><span class="p">()</span>
<span class="n">app</span><span class="o">.</span><span class="n">open_file</span><span class="p">(</span><span class="s1">'old.docx'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">write_text</span><span class="p">(</span><span class="s1">'Extra Line Text'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">save_document_as</span><span class="p">(</span><span class="s1">'new.docx'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">quit_application</span><span class="p">()</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           