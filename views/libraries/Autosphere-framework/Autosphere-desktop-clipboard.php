
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Desktop.Clipboard</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-clipboard">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-clipboard/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><em>DEPRECATED!!</em> Use library Autosphere.Desktop's clipboard functionality instead.</p>
                                <p><cite>Clipboard</cite> is a library for managing clipboard - <strong>copy</strong> text to,
                                    <strong>paste</strong> text from, and <strong>clear</strong> clipboard contents.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Desktop.Clipboard</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Clipping</span><span class="p">
    </span><span class="nf">Copy To Clipboard</span><span class="p">   </span><span class="s">Text from Robot to clipboard</span><span class="p">
    ${</span><span class="nv">var</span><span class="p">}=             </span><span class="nf">Paste From Clipboard</span><span class="p">
    </span><span class="nf">Clear Clipboard</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Desktop.Clipboard</span> <span class="kn">import</span> <span class="n">Clipboard</span>

<span class="n">clip</span> <span class="o">=</span> <span class="n">Clipboard</span><span class="p">()</span>
<span class="n">clip</span><span class="o">.</span><span class="n">copy_to_clipboard</span><span class="p">(</span><span class="s1">'Text from Python to clipboard'</span><span class="p">)</span>
<span class="n">text</span> <span class="o">=</span> <span class="n">clip</span><span class="o">.</span><span class="n">paste_from_clipboard</span><span class="p">()</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">&quot;clipboard had text: '</span><span class="si">{</span><span class="n">text</span><span class="si">}</span><span class="s2">'&quot;</span><span class="p">)</span>
<span class="n">clip</span><span class="o">.</span><span class="n">clear_clipboard</span><span class="p">()</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           
