<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Desktop.Clipboard</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Desktop.Clipboard</li>
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
                                            <p><em>DEPRECATED!!</em> Use library Autosphere.Desktop's clipboard functionality instead.</p>
                                            <p><cite>Clipboard</cite> is a library for managing clipboard - <strong>copy</strong> text to,
                                                <strong>paste</strong> text from, and <strong>clear</strong> clipboard contents.
                                            </p>
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
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="clear-clipboard">
                                                            <h2><a href="#clear-clipboard">Clear Clipboard</a></h2>

                                                            <div>
                                                                <p class="shortdoc"><em>DEPRECATED!!</em> Use <cite>Autosphere.Desktop</cite> library's <cite>Clear
                                                                        Clipboard</cite> instead. Clear clipboard contents</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-to-clipboard">
                                                            <h2><a href="#copy-to-clipboard">Copy To Clipboard</a></h2>

                                                            <div>
                                                                <p class="shortdoc"><em>DEPRECATED!!</em> Use <cite>Autosphere.Desktop</cite> library's <cite>Copy to
                                                                        Clipboard</cite> instead.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>to copy</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Copy text to clipboard</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">to copy</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="paste-from-clipboard">
                                                            <h2><a href="#paste-from-clipboard">Paste From Clipboard</a></h2>

                                                            <div>
                                                                <p class="shortdoc"><em>DEPRECATED!!</em> Use <cite>Autosphere.Desktop</cite> library's <cite>Paste from
                                                                        Clipboard</cite> instead.</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">text</td>
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
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()"  type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-clear-clipboard" href="#clear-clipboard" class="">Clear Clipboard</a></li>
                                                    <li><a id="link-copy-to-clipboard" href="#copy-to-clipboard" class="">Copy To Clipboard</a></li>
                                                    <li><a id="link-paste-from-clipboard" href="#paste-from-clipboard" class="">Paste From Clipboard</a></li>
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