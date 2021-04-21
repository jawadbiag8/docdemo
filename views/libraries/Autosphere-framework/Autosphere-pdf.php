<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.PDF</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.PDF</li>
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
                                            <p><cite>PDF</cite> is a library for managing PDF documents.</p>
                                            <p>It provides an easy method of generating a PDF document from an HTML formatted template file.</p>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.PDF</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">TEMPLATE</span><span class="p">}    </span><span class="s">order.template</span><span class="p">
${</span><span class="nv">PDF</span><span class="p">}         </span><span class="s">result.pdf</span><span class="p">
&amp;{</span><span class="nv">VARS</span><span class="p">}        </span><span class="s">name=Robot Generated</span><span class="p">
...            </span><span class="s">email=robot&#64;domain.com</span><span class="p">
...            </span><span class="s">zip=00100</span><span class="p">
...            </span><span class="s">items=Item 1, Item 2</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Create PDF from HTML template</span><span class="p">
    </span><span class="nf">Template HTML to PDF</span><span class="p">   ${</span><span class="nv">TEMPLATE</span><span class="p">}  ${</span><span class="nv">PDF</span><span class="p">}  ${</span><span class="nv">VARS</span><span class="p">}</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.PDF</span> <span class="kn">import</span> <span class="n">PDF</span>

<span class="n">p</span> <span class="o">=</span> <span class="n">PDF</span><span class="p">()</span>
<span class="n">orders</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;item 1&quot;</span><span class="p">,</span> <span class="s2">&quot;item 2&quot;</span><span class="p">,</span> <span class="s2">&quot;item 3&quot;</span><span class="p">]</span>
<span class="nb">vars</span> <span class="o">=</span> <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="p">:</span> <span class="s2">&quot;Robot Process&quot;</span><span class="p">,</span>
    <span class="s2">&quot;email&quot;</span><span class="p">:</span> <span class="s2">&quot;robot&#64;domain.com&quot;</span><span class="p">,</span>
    <span class="s2">&quot;zip&quot;</span><span class="p">:</span> <span class="s2">&quot;00100&quot;</span><span class="p">,</span>
    <span class="s2">&quot;items&quot;</span><span class="p">:</span> <span class="s2">&quot;&lt;br/&gt;&quot;</span><span class="o">.</span><span class="n">join</span><span class="p">(</span><span class="n">orders</span><span class="p">),</span>
<span class="p">}</span>
<span class="n">p</span><span class="o">.</span><span class="n">template_html_to_pdf</span><span class="p">(</span><span class="s2">&quot;order.template&quot;</span><span class="p">,</span> <span class="s2">&quot;order.pdf&quot;</span><span class="p">,</span> <span class="nb">vars</span><span class="p">)</span>
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
                                                        <div class="keyword" id="accept-page-break">
                                                            <h2><a href="#accept-page-break">Accept Page Break</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Accept automatic page break or not</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-font">
                                                            <h2><a href="#add-font">Add Font</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add a TrueType or Type1 font</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>family</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>style</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>fname</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>uni</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-image-to-pdf">
                                                            <h2><a href="#add-image-to-pdf">Add Image To Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add image to PDF which can be new or existing PDF.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>imagefile</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>filepath to image file to add into PDF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>filepath to source, if not given add image to currently active PDF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>filepath of target PDF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>coverage</td>
                                                                        <td></td>
                                                                        <td>0.2</td>
                                                                        <td>[description], defaults to 0.2</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param imagefile:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to image file to add into PDF</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">filepath to source, if not given add image to currently active PDF</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param target:</th>
                                                                            <td class="field-body">filepath of target PDF</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param coverage:</th>
                                                                            <td class="field-body">[description], defaults to 0.2</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">[description]</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Result will be always written to <cite>target_pdf</cite> so that needs to be given for the keyword.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-link">
                                                            <h2><a href="#add-link">Add Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create a new internal link</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-page">
                                                            <h2><a href="#add-page">Add Page</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Start a new page</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>orientation</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-pages">
                                                            <h2><a href="#add-pages">Add Pages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Adds pages into PDF documents.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pages</td>
                                                                        <td> int </td>
                                                                        <td> 1</td>
                                                                        <td>number of pages to add, defaults to 1</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param pages:</th>
                                                                            <td class="field-body">number of pages to add, defaults to 1</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-pages-to-document">
                                                            <h2><a href="#add-pages-to-document">Add Pages To Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add empty pages into current source document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pages</td>
                                                                        <td> int </td>
                                                                        <td> 1</td>
                                                                        <td>number of pages to add, defaults to 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filename to the target pdf, stored by default to output_directory</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param pages:</th>
                                                                            <td class="field-body">number of pages to add, defaults to 1</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filename to the target pdf, stored by default to <cite>output_directory</cite></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="alias-nb-pages">
                                                            <h2><a href="#alias-nb-pages">Alias Nb Pages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Define an alias for total number of pages</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>alias</td>
                                                                        <td></td>
                                                                        <td>{nb}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="cell">
                                                            <h2><a href="#cell">Cell</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Output a cell</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>border</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ln</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>align</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>fill</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>link</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="check-page">
                                                            <h2><a href="#check-page">Check Page</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Decorator to protect drawing methods</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close">
                                                            <h2><a href="#close">Close</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Terminate document</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-all-pdf-documents">
                                                            <h2><a href="#close-all-pdf-documents">Close All Pdf Documents</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close all opened PDF file descriptors.</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-pdf-document">
                                                            <h2><a href="#close-pdf-document">Close Pdf Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close PDF file descriptor for certain file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if file descriptor for the file is not found</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="code-39">
                                                            <h2><a href="#code-39">Code 39</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Barcode 3of9</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td>1.5</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td>5.0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="dashed-line">
                                                            <h2><a href="#dashed-line">Dashed Line</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Draw a dashed line. Same interface as line() except: - dash_length: Length of the dash - space_length: Length of the space between dashes</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>dash_length</td>
                                                                        <td></td>
                                                                        <td>1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>space_length</td>
                                                                        <td></td>
                                                                        <td>1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Draw a dashed line. Same interface as line() except: - dash_length: Length of the dash - space_length: Length of the space between dashes</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="dump-pdf-as-xml">
                                                            <h2><a href="#dump-pdf-as-xml">Dump Pdf As Xml</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get PDFMiner format XML dump of the PDF</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">XML content</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="ellipse">
                                                            <h2><a href="#ellipse">Ellipse</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Draw a ellipse</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>style</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="error">
                                                            <h2><a href="#error">Error</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fatal error</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="extract-pages-from-pdf">
                                                            <h2><a href="#extract-pages-from-pdf">Extract Pages From Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Extract pages from source PDF and save to target PDF document.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filename to the target pdf, stored by default to output_directory</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pages</td>
                                                                        <td> typing.Any </td>
                                                                        <td> None</td>
                                                                        <td>page numbers to extract from PDF (numbers start from 0) if None then extracts all pages</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filename to the target pdf, stored by default to <cite>output_directory</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param pages:</th>
                                                                            <td class="field-body">page numbers to extract from PDF (numbers start from 0) if None then extracts all pages</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Page numbers starting from 1.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="footer">
                                                            <h2><a href="#footer">Footer</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Footer to be implemented in your own inherited class</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-all-figures">
                                                            <h2><a href="#get-all-figures">Get All Figures</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return all figures in the PDF document.</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">dictionary of figures divided into pages</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>PDF needs to be parsed before elements can be found.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-info">
                                                            <h2><a href="#get-info">Get Info</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get information from PDF document.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">dictionary of PDF information</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-input-fields">
                                                            <h2><a href="#get-input-fields">Get Input Fields</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get input fields in the PDF.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>source filepath, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>replace_none_value</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>if value is None replace it with key name, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">source filepath, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param replace_none_value:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if value is None replace it with key name, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">dictionary of input key values or <cite>None</cite></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Stores input fields internally so that they can be used without parsing PDF again.</p>
                                                                <p>Parameter <cite>replace_none_value</cite> is for convience to visualize fields.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-number-of-pages">
                                                            <h2><a href="#get-number-of-pages">Get Number Of Pages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get number of pages in the document.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises PdfReadError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if file is encrypted or other restrictions are in place</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-output-directory">
                                                            <h2><a href="#get-output-directory">Get Output Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get output directory where target files are saved to.</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">absolute filepath as string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-string-width">
                                                            <h2><a href="#get-string-width">Get String Width</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get width of a string in the current font</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>s</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-text-from-pdf">
                                                            <h2><a href="#get-text-from-pdf">Get Text From Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get text from set of pages in source PDF document.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pages</td>
                                                                        <td> typing.Any </td>
                                                                        <td> None</td>
                                                                        <td>page numbers to get text (numbers start from 0)</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param pages:</th>
                                                                            <td class="field-body">page numbers to get text (numbers start from 0)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">dictionary of pages and their texts</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>PDF needs to be parsed before text can be read.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-value-from-anchor">
                                                            <h2><a href="#get-value-from-anchor">Get Value From Anchor</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get closest text (value) to anchor element.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element to set anchor to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pagenum</td>
                                                                        <td> int </td>
                                                                        <td> 1</td>
                                                                        <td>page number where search if performed on, default 1 (first)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>direction</td>
                                                                        <td> str </td>
                                                                        <td> right</td>
                                                                        <td>in which direction to search for text, directions 'top', 'bottom', 'left' or 'right', defaults to 'right'</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strict</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>if element margins should be used for matching points, used when direction is 'top' or 'bottom', default False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>regexp</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>expected format of value to match, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <p>PDF needs to be parsed before elements can be found.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element to set anchor to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param pagenum:</th>
                                                                            <td class="field-body">page number where search if performed on, default 1 (first)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param direction:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">in which direction to search for text, directions 'top', 'bottom', 'left' or 'right', defaults to 'right'</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param strict:</th>
                                                                            <td class="field-body">if element margins should be used for matching points, used when direction is 'top' or 'bottom', default <cite>False</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param regexp:</th>
                                                                            <td class="field-body">expected format of value to match, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">closest matching text or <cite>None</cite></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-x">
                                                            <h2><a href="#get-x">Get X</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get x position</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-y">
                                                            <h2><a href="#get-y">Get Y</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get y position</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="header">
                                                            <h2><a href="#header">Header</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Header to be implemented in your own inherited class</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="html-to-pdf">
                                                            <h2><a href="#html-to-pdf">Html To Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Use HTML content to generate PDF file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>HTML content</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath where to save PDF document</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>variables</td>
                                                                        <td> dict </td>
                                                                        <td> None</td>
                                                                        <td>dictionary of variables to fill into template, defaults to {}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>create_dirs</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>directory structure is created if it is missing, default True</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exists_ok</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>file is overwritten if it exists, default True</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">HTML content</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">filepath where to save PDF document</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param variables:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">dictionary of variables to fill into template, defaults to {}</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param create_dirs:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">directory structure is created if it is missing, default <cite>True</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param exists_ok:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">file is overwritten if it exists, default <cite>True</cite></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="image">
                                                            <h2><a href="#image">Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Put an image on the page</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>type</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>link</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="interleaved-2-of-5">
                                                            <h2><a href="#interleaved-2-of-5">Interleaved 2 Of 5</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Barcode I2of5 (numeric), adds a 0 if odd lenght</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td>1.0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td>10.0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-pdf-encrypted">
                                                            <h2><a href="#is-pdf-encrypted">Is Pdf Encrypted</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Check if PDF is encrypted.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Returns True even if PDF was decrypted.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if file is encrypted</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="line">
                                                            <h2><a href="#line">Line</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Draw a line</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="link">
                                                            <h2><a href="#link">Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Put a link on the page</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>link</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="ln">
                                                            <h2><a href="#ln">Ln</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Line Feed; default value is last cell height</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="multi-cell">
                                                            <h2><a href="#multi-cell">Multi Cell</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Output text with automatic or explicit line breaks</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>border</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>align</td>
                                                                        <td></td>
                                                                        <td>J</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>fill</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>split_only</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="normalize-text">
                                                            <h2><a href="#normalize-text">Normalize Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Check that text input is in the correct format/encoding</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open">
                                                            <h2><a href="#open">Open</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Begin document</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-pdf-document">
                                                            <h2><a href="#open-pdf-document">Open Pdf Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open PDF document.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if PDF is already open</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Also opens file for reading.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="output">
                                                            <h2><a href="#output">Output</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Output PDF to some destination</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>dest</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-no">
                                                            <h2><a href="#page-no">Page No</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get current page number</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-rotate">
                                                            <h2><a href="#page-rotate">Page Rotate</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Rotate pages in source PDF document and save to target PDF document.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pages</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td>page numbers to extract from PDF (numbers start from 0)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filename to the target pdf, stored by default to output_directory</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>clockwise</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>directorion that page will be rotated to, default True</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>angle</td>
                                                                        <td> int </td>
                                                                        <td> 90</td>
                                                                        <td>number of degrees to rotate, default 90</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filename to the target pdf, stored by default to <cite>output_directory</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param pages:</th>
                                                                            <td class="field-body">page numbers to extract from PDF (numbers start from 0)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param clockwise:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">directorion that page will be rotated to, default True</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param angle:</th>
                                                                            <td class="field-body">number of degrees to rotate, default 90</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="parse-pdf">
                                                            <h2><a href="#parse-pdf">Parse Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Parse source PDF into entities which can be used for text searches for example.
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
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>source</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Parse source PDF into entities which can be used for text searches for example.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">source</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pdf-decrypt">
                                                            <h2><a href="#pdf-decrypt">Pdf Decrypt</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Decrypt PDF with password.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the decrypted pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>password as a string</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the decrypted pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">password as a string</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if decrypt was successful, else False or Exception</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">on decryption errors</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pdf-encrypt">
                                                            <h2><a href="#pdf-encrypt">Pdf Encrypt</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Encrypt PDF document.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to the source pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filename to the target pdf, stored by default to output_directory</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>user_pwd</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>allows opening and reading PDF with restrictions</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>owner_pwd</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>allows opening PDF without any restrictions, by default same user_pwd</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>use_128bit</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>whether to 128bit encryption, when false 40bit encryption is used, default True</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath to the source pdf</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filename to the target pdf, stored by default to <cite>output_directory</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param user_pwd:</th>
                                                                            <td class="field-body">allows opening and reading PDF with restrictions</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param owner_pwd:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">allows opening PDF without any restrictions, by default same <cite>user_pwd</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param use_128bit:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">whether to 128bit encryption, when false 40bit encryption is used, default True</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="rect">
                                                            <h2><a href="#rect">Rect</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Draw a rectangle</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>w</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>style</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="replace-text">
                                                            <h2><a href="#replace-text">Replace Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Replace text content with something else in the PDF.</p>
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
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>this text will be replaced</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>replace</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>used to replace text</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">this text will be replaced</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param replace:</th>
                                                                            <td class="field-body">used to replace <cite>text</cite></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="rotate">
                                                            <h2><a href="#rotate">Rotate</a></h2>

                                                            <div>
                                                                <p class="shortdoc"></p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>angle</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-pdf">
                                                            <h2><a href="#save-pdf">Save Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save current over itself or to <cite>target_pdf</cite></p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to source PDF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to target PDF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>use_modified_reader</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>needs to be set to True if using modified PDF reader</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">filepath to source PDF</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param target:</th>
                                                                            <td class="field-body">filepath to target PDF</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param use_modified_reader:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">needs to be set to <cite>True</cite> if using modified PDF reader</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-anchor-to-element">
                                                            <h2><a href="#set-anchor-to-element">Set Anchor To Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets anchor point in the document for further searches.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element to search for</td>
                                                                    </tr>
                                                                </table>


                                                                <p>PDF needs to be parsed before elements can be found.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element to search for</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if element was found</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-author">
                                                            <h2><a href="#set-author">Set Author</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Author of document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>author</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-auto-page-break">
                                                            <h2><a href="#set-auto-page-break">Set Auto Page Break</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set auto page break mode and triggering margin</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>auto</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>margin</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-compression">
                                                            <h2><a href="#set-compression">Set Compression</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set page compression</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>compress</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-creator">
                                                            <h2><a href="#set-creator">Set Creator</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creator of document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>creator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-display-mode">
                                                            <h2><a href="#set-display-mode">Set Display Mode</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set display mode in viewer</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>zoom</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>layout</td>
                                                                        <td></td>
                                                                        <td>continuous</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <p>The &quot;zoom&quot; argument may be 'fullpage', 'fullwidth', 'real', 'default', or a number, interpreted as a percentage.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-draw-color">
                                                            <h2><a href="#set-draw-color">Set Draw Color</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set color for all stroking operations</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>r</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>g</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>b</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-field-value">
                                                            <h2><a href="#set-field-value">Set Field Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set value for field with given name.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>field_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>field to update</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>new value for the field</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>save</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param field_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">field to update</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">new value for the field</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Tries to match on field identifier and its label.</p>
                                                                <p>Exception is thrown if field can't be found or more than 1 field matches the given <cite>field_name</cite>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-fill-color">
                                                            <h2><a href="#set-fill-color">Set Fill Color</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set color for all filling operations</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>r</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>g</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>b</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-font">
                                                            <h2><a href="#set-font">Set Font</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Select a font; size given in points</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>family</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>style</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>size</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-font-size">
                                                            <h2><a href="#set-font-size">Set Font Size</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set font size in points</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>size</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-keywords">
                                                            <h2><a href="#set-keywords">Set Keywords</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Keywords of document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keywords</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-left-margin">
                                                            <h2><a href="#set-left-margin">Set Left Margin</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set left margin</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>margin</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-line-width">
                                                            <h2><a href="#set-line-width">Set Line Width</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set line width</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>width</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-link">
                                                            <h2><a href="#set-link">Set Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set destination of internal link</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>link</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>page</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-margins">
                                                            <h2><a href="#set-margins">Set Margins</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set left, top and right margins</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>left</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>top</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>right</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-output-directory">
                                                            <h2><a href="#set-output-directory">Set Output Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set output directory where target files are saved to.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>outdir</td>
                                                                        <td> str </td>
                                                                        <td> .</td>
                                                                        <td>output directory path, default to current directory</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param outdir:</th>
                                                                            <td class="field-body">output directory path, default to current directory</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-right-margin">
                                                            <h2><a href="#set-right-margin">Set Right Margin</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set right margin</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>margin</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-subject">
                                                            <h2><a href="#set-subject">Set Subject</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Subject of document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>subject</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-text-color">
                                                            <h2><a href="#set-text-color">Set Text Color</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set color for text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>r</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>g</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>b</td>
                                                                        <td></td>
                                                                        <td>-1</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-title">
                                                            <h2><a href="#set-title">Set Title</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Title of document</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-top-margin">
                                                            <h2><a href="#set-top-margin">Set Top Margin</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set top margin</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>margin</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-x">
                                                            <h2><a href="#set-x">Set X</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set x position</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-xy">
                                                            <h2><a href="#set-xy">Set Xy</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set x and y positions</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-y">
                                                            <h2><a href="#set-y">Set Y</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set y position and reset x</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="switch-to-pdf-document">
                                                            <h2><a href="#switch-to-pdf-document">Switch To Pdf Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Switch library's current fileobject to already open file or open file if not opened.
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
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Switch library's current fileobject to already open file or open file if not opened.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filepath</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if PDF filepath is not given and there are no active file to activate</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="template-html-to-pdf">
                                                            <h2><a href="#template-html-to-pdf">Template Html To Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Use HTML template file to generate PDF file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>template</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to HTML template</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath where to save PDF document</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>variables</td>
                                                                        <td> dict </td>
                                                                        <td> None</td>
                                                                        <td>dictionary of variables to fill into template, defaults to {}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>create_dirs</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>directory structure is created if it is missing, default True</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exists_ok</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>file is overwritten if it exists, default True</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param template:</th>
                                                                            <td class="field-body">filepath to HTML template</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">filepath where to save PDF document</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param variables:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">dictionary of variables to fill into template, defaults to {}</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param create_dirs:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">directory structure is created if it is missing, default <cite>True</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param exists_ok:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">file is overwritten if it exists, default <cite>True</cite></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="text">
                                                            <h2><a href="#text">Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Output a string</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="update-field-values">
                                                            <h2><a href="#update-field-values">Update Field Values</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Update field values in PDF if it has fields.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>source PDF with fields to update</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_pdf</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>updated target PDF</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>newvals</td>
                                                                        <td> dict </td>
                                                                        <td> None</td>
                                                                        <td>dictionary with key values to update</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param source_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">source PDF with fields to update</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_pdf:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">updated target PDF</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param newvals:</th>
                                                                            <td class="field-body">dictionary with key values to update</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write">
                                                            <h2><a href="#write">Write</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Output text in flowing mode</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>h</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>link</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write-html">
                                                            <h2><a href="#write-html">Write Html</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Parse HTML and convert it to PDF</p>
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
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>image_map</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
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
                                                    <li><a id="link-accept-page-break" href="#accept-page-break" class="">Accept Page Break</a></li>
                                                    <li><a id="link-add-font" href="#add-font" class="">Add Font</a></li>
                                                    <li><a id="link-add-image-to-pdf" href="#add-image-to-pdf" class="">Add Image To Pdf</a></li>
                                                    <li><a id="link-add-link" href="#add-link" class="">Add Link</a></li>
                                                    <li><a id="link-add-page" href="#add-page" class="">Add Page</a></li>
                                                    <li><a id="link-add-pages" href="#add-pages" class="">Add Pages</a></li>
                                                    <li><a id="link-add-pages-to-document" href="#add-pages-to-document" class="">Add Pages To Document</a></li>
                                                    <li><a id="link-alias-nb-pages" href="#alias-nb-pages" class="">Alias Nb Pages</a></li>
                                                    <li><a id="link-cell" href="#cell" class="">Cell</a></li>
                                                    <li><a id="link-check-page" href="#check-page" class="">Check Page</a></li>
                                                    <li><a id="link-close" href="#close" class="">Close</a></li>
                                                    <li><a id="link-close-all-pdf-documents" href="#close-all-pdf-documents" class="">Close All Pdf Documents</a></li>
                                                    <li><a id="link-close-pdf-document" href="#close-pdf-document" class="">Close Pdf Document</a></li>
                                                    <li><a id="link-code-39" href="#code-39" class="">Code 39</a></li>
                                                    <li><a id="link-dashed-line" href="#dashed-line" class="">Dashed Line</a></li>
                                                    <li><a id="link-dump-pdf-as-xml" href="#dump-pdf-as-xml" class="">Dump Pdf As Xml</a></li>
                                                    <li><a id="link-ellipse" href="#ellipse" class="">Ellipse</a></li>
                                                    <li><a id="link-error" href="#error" class="">Error</a></li>
                                                    <li><a id="link-extract-pages-from-pdf" href="#extract-pages-from-pdf" class="">Extract Pages From Pdf</a></li>
                                                    <li><a id="link-footer" href="#footer" class="">Footer</a></li>
                                                    <li><a id="link-get-all-figures" href="#get-all-figures" class="">Get All Figures</a></li>
                                                    <li><a id="link-get-info" href="#get-info" class="">Get Info</a></li>
                                                    <li><a id="link-get-input-fields" href="#get-input-fields" class="">Get Input Fields</a></li>
                                                    <li><a id="link-get-number-of-pages" href="#get-number-of-pages" class="">Get Number Of Pages</a></li>
                                                    <li><a id="link-get-output-directory" href="#get-output-directory" class="">Get Output Directory</a></li>
                                                    <li><a id="link-get-string-width" href="#get-string-width" class="">Get String Width</a></li>
                                                    <li><a id="link-get-text-from-pdf" href="#get-text-from-pdf" class="">Get Text From Pdf</a></li>
                                                    <li><a id="link-get-value-from-anchor" href="#get-value-from-anchor" class="">Get Value From Anchor</a></li>
                                                    <li><a id="link-get-x" href="#get-x" class="">Get X</a></li>
                                                    <li><a id="link-get-y" href="#get-y" class="">Get Y</a></li>
                                                    <li><a id="link-header" href="#header" class="">Header</a></li>
                                                    <li><a id="link-html-to-pdf" href="#html-to-pdf" class="">Html To Pdf</a></li>
                                                    <li><a id="link-image" href="#image" class="">Image</a></li>
                                                    <li><a id="link-interleaved-2-of-5" href="#interleaved-2-of-5" class="">Interleaved 2 Of 5</a></li>
                                                    <li><a id="link-is-pdf-encrypted" href="#is-pdf-encrypted" class="">Is Pdf Encrypted</a></li>
                                                    <li><a id="link-line" href="#line" class="">Line</a></li>
                                                    <li><a id="link-link" href="#link" class="">Link</a></li>
                                                    <li><a id="link-ln" href="#ln" class="">Ln</a></li>
                                                    <li><a id="link-multi-cell" href="#multi-cell" class="">Multi Cell</a></li>
                                                    <li><a id="link-normalize-text" href="#normalize-text" class="">Normalize Text</a></li>
                                                    <li><a id="link-open" href="#open" class="">Open</a></li>
                                                    <li><a id="link-open-pdf-document" href="#open-pdf-document" class="">Open Pdf Document</a></li>
                                                    <li><a id="link-output" href="#output" class="">Output</a></li>
                                                    <li><a id="link-page-no" href="#page-no" class="">Page No</a></li>
                                                    <li><a id="link-page-rotate" href="#page-rotate" class="">Page Rotate</a></li>
                                                    <li><a id="link-parse-pdf" href="#parse-pdf" class="">Parse Pdf</a></li>
                                                    <li><a id="link-pdf-decrypt" href="#pdf-decrypt" class="">Pdf Decrypt</a></li>
                                                    <li><a id="link-pdf-encrypt" href="#pdf-encrypt" class="">Pdf Encrypt</a></li>
                                                    <li><a id="link-rect" href="#rect" class="">Rect</a></li>
                                                    <li><a id="link-replace-text" href="#replace-text" class="">Replace Text</a></li>
                                                    <li><a id="link-rotate" href="#rotate" class="">Rotate</a></li>
                                                    <li><a id="link-save-pdf" href="#save-pdf" class="">Save Pdf</a></li>
                                                    <li><a id="link-set-anchor-to-element" href="#set-anchor-to-element" class="">Set Anchor To Element</a></li>
                                                    <li><a id="link-set-author" href="#set-author" class="">Set Author</a></li>
                                                    <li><a id="link-set-auto-page-break" href="#set-auto-page-break" class="">Set Auto Page Break</a></li>
                                                    <li><a id="link-set-compression" href="#set-compression" class="">Set Compression</a></li>
                                                    <li><a id="link-set-creator" href="#set-creator" class="">Set Creator</a></li>
                                                    <li><a id="link-set-display-mode" href="#set-display-mode" class="">Set Display Mode</a></li>
                                                    <li><a id="link-set-draw-color" href="#set-draw-color" class="">Set Draw Color</a></li>
                                                    <li><a id="link-set-field-value" href="#set-field-value" class="">Set Field Value</a></li>
                                                    <li><a id="link-set-fill-color" href="#set-fill-color" class="">Set Fill Color</a></li>
                                                    <li><a id="link-set-font" href="#set-font" class="">Set Font</a></li>
                                                    <li><a id="link-set-font-size" href="#set-font-size" class="">Set Font Size</a></li>
                                                    <li><a id="link-set-keywords" href="#set-keywords" class="">Set Keywords</a></li>
                                                    <li><a id="link-set-left-margin" href="#set-left-margin" class="">Set Left Margin</a></li>
                                                    <li><a id="link-set-line-width" href="#set-line-width" class="">Set Line Width</a></li>
                                                    <li><a id="link-set-link" href="#set-link" class="">Set Link</a></li>
                                                    <li><a id="link-set-margins" href="#set-margins" class="">Set Margins</a></li>
                                                    <li><a id="link-set-output-directory" href="#set-output-directory" class="">Set Output Directory</a></li>
                                                    <li><a id="link-set-right-margin" href="#set-right-margin" class="">Set Right Margin</a></li>
                                                    <li><a id="link-set-subject" href="#set-subject" class="">Set Subject</a></li>
                                                    <li><a id="link-set-text-color" href="#set-text-color" class="">Set Text Color</a></li>
                                                    <li><a id="link-set-title" href="#set-title" class="">Set Title</a></li>
                                                    <li><a id="link-set-top-margin" href="#set-top-margin" class="">Set Top Margin</a></li>
                                                    <li><a id="link-set-x" href="#set-x" class="">Set X</a></li>
                                                    <li><a id="link-set-xy" href="#set-xy" class="">Set Xy</a></li>
                                                    <li><a id="link-set-y" href="#set-y" class="">Set Y</a></li>
                                                    <li><a id="link-switch-to-pdf-document" href="#switch-to-pdf-document" class="">Switch To Pdf Document</a></li>
                                                    <li><a id="link-template-html-to-pdf" href="#template-html-to-pdf" class="">Template Html To Pdf</a></li>
                                                    <li><a id="link-text" href="#text" class="">Text</a></li>
                                                    <li><a id="link-update-field-values" href="#update-field-values" class="">Update Field Values</a></li>
                                                    <li><a id="link-write" href="#write" class="">Write</a></li>
                                                    <li><a id="link-write-html" href="#write-html" class="">Write Html</a></li>
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