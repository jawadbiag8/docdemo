<section id="contentpage" class="content">
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
                                            <div class="document">
                                                <p><cite>PDF</cite> is a library for managing PDF documents.</p>
                                                <p>It can be used to extract text from PDFs, add watermarks to pages, and decrypt/encrypt documents.</p>
                                                <p>There is also limited support for updating form field values.</p>
                                                <p>Input PDF file can be passed as an argument to the keywords, or it can be omitted if you first call <cite>Open PDF</cite>. Reference to the current active PDF will be stored in the library instance.</p>
                                                <p><strong>Examples</strong></p>
                                                <p><strong>Robot Framework</strong></p>
                                                <pre class="code robotframework literal-block"><span class="gh">***Settings***</span><span class="p">
    </span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.PDF</span><span class="p">
    
    </span><span class="gh">***Tasks***</span><span class="p">
    </span><span class="gu">Extract Data</span><span class="p">
        ${</span><span class="nv">text</span><span class="p">}=    </span><span class="nf">Get Text From PDF</span><span class="p">    </span><span class="s">./tmp/sample.pdf</span><span class="p">
    
    </span><span class="gu">Fill Form</span><span class="p">
        </span><span class="nf">Open PDF</span><span class="p">    </span><span class="s">./tmp/sample.pdf</span><span class="p">
        </span><span class="nf">Set Field Value</span><span class="p">    </span><span class="s">phone_nr</span><span class="p">   </span><span class="s">080123123</span><span class="p">
        </span><span class="nf">Set Field Value</span><span class="p">    </span><span class="s">address</span><span class="p">    </span><span class="s">robot street 14</span><span class="p">
        </span><span class="nf">Save Field Values</span><span class="p">  </span><span class="s">output_path=output.pdf</span>
    </pre>
                                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.PDF</span> <span class="kn">import</span> <span class="n">PDF</span>
    
    <span class="n">pdf</span> <span class="o">=</span> <span class="n">PDF</span><span class="p">()</span>
    
    <span class="k">def</span> <span class="nf">extract_data</span><span class="p">():</span>
        <span class="n">text</span> <span class="o">=</span> <span class="n">pdf</span><span class="o">.</span><span class="n">get_text_from_pdf</span><span class="p">(</span><span class="s2">"./tmp/sample.pdf"</span><span class="p">)</span>
    
    <span class="k">def</span> <span class="nf">fill_form</span><span class="p">():</span>
        <span class="n">pdf</span><span class="o">.</span><span class="n">open_pdf</span><span class="p">(</span><span class="s2">"./tmp/sample.pdf"</span><span class="p">)</span>
        <span class="n">pdf</span><span class="o">.</span><span class="n">set_field_value</span><span class="p">(</span><span class="s2">"phone_nr"</span><span class="p">,</span> <span class="mi">080123123</span><span class="p">)</span>
        <span class="n">pdf</span><span class="o">.</span><span class="n">set_field_value</span><span class="p">(</span><span class="s2">"address"</span><span class="p">,</span> <span class="s2">"robot street 14"</span><span class="p">)</span>
        <span class="n">pdf</span><span class="o">.</span><span class="n">save_field_values</span><span class="p">(</span><span class="n">output_path</span><span class="o">=</span><span class="s2">"output.pdf"</span><span class="p">)</span>
    </pre>
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
                                                        <div class="keyword" id="add-files-to-pdf">
                                                            <h2><a href="#add-files-to-pdf">Add Files To Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Add images and/or pdfs to new PDF document</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>files</td>
                                                                            <td>list</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>target_document</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>append</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>Image formats supported are JPEG, PNG and GIF.</p>
                                                                    <p>The file can be added with extra properties by
                                                                        denoting <cite>:</cite> at the end of the filename. Each
                                                                        property should be separated by comma.</p>
                                                                    <p>Supported extra properties for PDFs are:</p>
                                                                    <ul class="simple">
                                                                        <li>page and/or page ranges</li>
                                                                        <li>no extras means that all source PDF pages are added
                                                                            into new PDF</li>
                                                                    </ul>
                                                                    <p>Supported extra properties for images are:</p>
                                                                    <ul class="simple">
                                                                        <li>format, the PDF page format, for example. Letter or A4</li>
                                                                        <li>rotate, how many degrees image is rotated counter-clockwise</li>
                                                                        <li>align, only possible value at the moment is center</li>
                                                                        <li>orientation, the PDF page orientation for the image, possible
                                                                            values P (portrait) or L (landscape)</li>
                                                                        <li>x/y, coordinates for adjusting image position on the page</li>
                                                                    </ul>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Add files to pdf</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>files<span class="token punctuation">}</span></span>=</span>    Create List
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>invoice.pdf
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>approved.png:align=center
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>robot.pdf:1
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>approved.png:x=0,y=0
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>robot.pdf:2-10,15
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>approved.png
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>landscape_image.png:rotate=-90,orientation=L
      ...    <span class="token variable"><span class="token punctuation">${</span>TESTDATA_DIR<span class="token punctuation">}</span></span><span class="token variable"><span class="token punctuation">${</span>/<span class="token punctuation">}</span></span>landscape_image.png:format=Letter
      <span class="token property">Add Files To PDF</span>    <span class="token variable"><span class="token punctuation">${</span>files<span class="token punctuation">}</span></span>    newdoc.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  list_of_files = [
      'invoice.pdf',
      'approved.png:align=center',
      'robot.pdf:1',
      'approved.png:x=0,y=0',
  ]
  def example_keyword():
      pdf.add_files_to_pdf(
          files=list_of_files,
          target_document="output/output.pdf"
      )
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param files:</th>
                                                                                <td class="field-body">list of filepaths to add into PDF (can be either images or
                                                                                    PDFs)</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param target_document:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath of target PDF</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param append:</th>
                                                                                <td class="field-body">appends files to existing document if <cite>append</cite> is
                                                                                    <cite>True</cite>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-watermark-image-to-pdf">
                                                            <h2><a href="#add-watermark-image-to-pdf">Add Watermark Image To Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Add image to PDF which can be new or existing PDF.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>image_path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>coverage</td>
                                                                            <td>float</td>
                                                                            <td>0.2</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
                            </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
                            <span class="token property">Library</span>    Autosphere.PDF
                            </span>
                            <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
                            <span class="token task-name function">Example Keyword</span>
                                <span class="token property">Add Watermark Image To PDF</span>
                                ...             image_path=approved.png
                                ...             source_path=/tmp/sample.pdf
                                ...             output_path=output/output.pdf
                            </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
                            from Autosphere.PDF import PDF
                            
                            pdf = PDF()
                            
                            def example_keyword():
                                pdf.add_watermark_image_to_pdf(
                                    image_path="approved.png"
                                    source_path="/tmp/sample.pdf"
                                    output_path="output/output.pdf"
                                )
                            </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param image_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to image file to add into PDF</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param source:</th>
                                                                                <td class="field-body">filepath to source, if not given add image to currently
                                                                                    active PDF</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath of target PDF</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param coverage:</th>
                                                                                <td class="field-body">how the watermark image should be scaled on page,
                                                                                    defaults to 0.2</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-all-pdfs">
                                                            <h2><a href="#close-all-pdfs">Close All Pdfs</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Close all opened PDF file descriptors.</p>

                                                                <div class="document">

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-pdf">
                                                            <h2><a href="#close-pdf">Close Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Close PDF file descriptor for certain file.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_pdf</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
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
                                                                                <th class="field-name" colspan="2">param source_pdf:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">raises ValueError:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">if file descriptor for the file is not found.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert">
                                                            <h2><a href="#convert">Convert</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Parse source PDF into entities which can be used for text searches, for example.
                                                                </p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Parse source PDF into entities which can be
                                                                        used for text searches, for example.</p>
                                                                    <p>This is also used inside other PDF keywords.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Convert</span>    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pdf.convert("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">source PDF filepath.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="decrypt-pdf">
                                                            <h2><a href="#decrypt-pdf">Decrypt Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Decrypt PDF with password.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>password</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>success<span class="token punctuation">}</span></span>=</span>  Decrypt PDF    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      success = pdf.decrypt_pdf("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the decrypted pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param password:</th>
                                                                                <td class="field-body">password as a string.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">True if decrypt was successful, else False or Exception.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">raises ValueError:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">on decryption errors.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="dump-pdf-as-xml">
                                                            <h2><a href="#dump-pdf-as-xml">Dump Pdf As Xml</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get PDFMiner format XML dump of the PDF</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>xml<span class="token punctuation">}</span></span>=</span>  Dump PDF as XML    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      xml = pdf.dump_pdf_as_xml("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source PDF</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">XML content as a string.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="encrypt-pdf">
                                                            <h2><a href="#encrypt-pdf">Encrypt Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Encrypt a PDF document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>user_pwd</td>
                                                                            <td>str</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>owner_pwd</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>use_128bit</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Encrypt PDF</span>    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pdf.encrypt_pdf("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the target pdf, stored by default
                                                                                    to <cite>output_directory</cite>.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param user_pwd:</th>
                                                                                <td class="field-body">allows opening and reading PDF with restrictions.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param owner_pwd:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">allows opening PDF without any restrictions, by
                                                                                    default same <cite>user_pwd</cite>.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param use_128bit:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">whether to 128bit encryption, when false 40bit
                                                                                    encryption is used, default True.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="extract-pages-from-pdf">
                                                            <h2><a href="#extract-pages-from-pdf">Extract Pages From Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Extract pages from source PDF and save to a new PDF document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>pages</td>
                                                                            <td>List[int], List[str], str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>Page numbers start from 1.</p>
                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>pages<span class="token punctuation">}</span></span>=</span>    Extract Pages From PDF
      ...          source_path=/tmp/sample.pdf
      ...          output_path=/tmp/output.pdf
      ...          pages=5
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pages = pdf.extract_pages_from_pdf(
          source_path="/tmp/sample.pdf",
          output_path="/tmp/output.pdf",
          pages=5
      )
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the target pdf, stored by default
                                                                                    in <cite>output_directory</cite>.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param pages:</th>
                                                                                <td class="field-body">page numbers to extract from PDF (numbers start from 0)
                                                                                    if None then extracts all pages.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-text">
                                                            <h2><a href="#find-text">Find Text</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get closest text (value) to the anchor element.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>locator</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>pagenum</td>
                                                                            <td>int</td>
                                                                            <td>1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>direction</td>
                                                                            <td>str</td>
                                                                            <td>right</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>strict</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>regexp</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>only_closest</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>PDF needs to be parsed before elements can be found.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>value<span class="token punctuation">}</span></span>=</span>  Find Text    text:Invoice Number
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      value = pdf.find_text("text:Invoice Number")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param locator:</th>
                                                                                <td class="field-body">element to set anchor to. This can be prefixed with either
                                                                                    <cite>text:</cite> or <cite>coords:</cite> to find the anchor by text or
                                                                                    coordinates.
                                                                                    Default is <cite>text</cite>.
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param pagenum:</th>
                                                                                <td class="field-body">page number where search if performed on, default 1 (first).
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param direction:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">in which direction to search for text,
                                                                                    directions 'top'/'up', 'bottom'/'down', 'left' or 'right',
                                                                                    defaults to 'right'.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param strict:</th>
                                                                                <td class="field-body">if element margins should be used for matching points,
                                                                                    used when direction is 'top' or 'bottom', default <cite>False</cite>.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param regexp:</th>
                                                                                <td class="field-body">expected format of value to match, defaults to None.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param only_closest:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">return all possible values or only the closest.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">all possible values, only the closest value, or an empty
                                                                                    list.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-all-figures">
                                                            <h2><a href="#get-all-figures">Get All Figures</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Return all figures in the PDF document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>figures<span class="token punctuation">}</span></span>=</span>  Get All Figures    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      figures = pdf.get_all_figures("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">dictionary of figures divided into pages.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-input-fields">
                                                            <h2><a href="#get-input-fields">Get Input Fields</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get input fields in the PDF.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>replace_none_value</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>Stores input fields internally so that they can be used without
                                                                        parsing the PDF again.</p>
                                                                    <p>Parameter <tt class="docutils literal">replace_none_value</tt> is for convience to visualize
                                                                        fields.</p>
                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>fields<span class="token punctuation">}</span></span>=</span>  Get Input Fields    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      fields = pdf.get_input_fields("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">source filepath, defaults to None.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param replace_none_value:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">if value is None replace it with key name,
                                                                                    defaults to False.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">dictionary of input key values or <cite>None</cite>.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-number-of-pages">
                                                            <h2><a href="#get-number-of-pages">Get Number Of Pages</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get number of pages in the document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>page_count<span class="token punctuation">}</span></span>=</span>    Get Number Of Pages    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      page_count = pdf.get_number_of_pages("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
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
                                                        </div>

                                                        <div class="keyword" id="get-pdf-info">
                                                            <h2><a href="#get-pdf-info">Get Pdf Info</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get metadata from a PDF document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>metadata<span class="token punctuation">}</span></span>=</span>    Get PDF Info    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      metadata = pdf.get_pdf_info("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source PDF.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">dictionary of PDF information.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-text-from-pdf">
                                                            <h2><a href="#get-text-from-pdf">Get Text From Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get text from set of pages in source PDF document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>pages</td>
                                                                            <td>List[int], List[str], str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>details</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>text<span class="token punctuation">}</span></span>=</span>    Get Text From PDF    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      text = pdf.get_text_from_pdf("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param pages:</th>
                                                                                <td class="field-body">page numbers to get text (numbers start from 0).</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param details:</th>
                                                                                <td class="field-body">set to <cite>True</cite> to return textboxes, default
                                                                                    <cite>False</cite>.
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">dictionary of pages and their texts.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="html-to-pdf">
                                                            <h2><a href="#html-to-pdf">Html To Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Generate a PDF file from HTML content.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>content</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>Note that input must be well-formed and valid HTML.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">HTML to PDF</span>    <span class="token variable"><span class="token punctuation">${</span>html_content_as_string<span class="token punctuation">}</span></span>  /tmp/output.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pdf.html_to_pdf(html_content_as_string, "/tmp/output.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param content:</th>
                                                                                <td class="field-body">HTML content.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath where to save the PDF document.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-pdf-encrypted">
                                                            <h2><a href="#is-pdf-encrypted">Is Pdf Encrypted</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Check if PDF is encrypted.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>Returns True even if PDF was decrypted.</p>
                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>is_encrypted<span class="token punctuation">}</span></span>=</span>    Is PDF Encrypted    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      is_encrypted = pdf.is_pdf_encrypted("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">True if file is encrypted.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-pdf">
                                                            <h2><a href="#open-pdf">Open Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Open a PDF document for reading.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>This is called automatically in the other PDF keywords
                                                                        when a path to the PDF file is given as an argument.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Open PDF</span>    /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      metadata = pdf.open_pdf("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">raises ValueError:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">if PDF is already open.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="rotate-page">
                                                            <h2><a href="#rotate-page">Rotate Page</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Rotate pages in source PDF document and save to target PDF document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>pages</td>
                                                                            <td>List[int], List[str], str, None</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>clockwise</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>angle</td>
                                                                            <td>int</td>
                                                                            <td>90</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Rotate Page</span>
      ...          source_path=/tmp/sample.pdf
      ...          output_path=/tmp/output.pdf
      ...          pages=5
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def rotate_page():
      pages = pdf.rotate_page(
          source_path="/tmp/sample.pdf",
          output_path="/tmp/output.pdf",
          pages=5
      )
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param pages:</th>
                                                                                <td class="field-body">page numbers to extract from PDF (numbers start from 0).</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the target pdf, stored by default
                                                                                    to <cite>output_directory</cite>.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param clockwise:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">directorion that page will be rotated to, default True.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param angle:</th>
                                                                                <td class="field-body">number of degrees to rotate, default 90.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-field-values">
                                                            <h2><a href="#save-field-values">Save Field Values</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Save field values in PDF if it has fields.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>newvals</td>
                                                                            <td>dict</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>use_appearances_writer</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Open PDF</span>    ./tmp/sample.pdf
      <span class="token property">Set Field Value</span>    phone_nr    077123123
      <span class="token property">Save Field Values</span>    output_path=./tmp/output.pdf
  
  <span class="token task-name function">Multiple operations</span>
      <span class="token property"><span class="token variable"><span class="token punctuation">&amp;{</span>new_fields<span class="token punctuation">}</span></span>=</span>       Create Dictionary
      ...                  phone_nr=077123123
      ...                  title=dr
      <span class="token property">Save Field Values</span>    source_path=./tmp/sample.pdf
      ...                  output_path=./tmp/output.pdf
      ...                  newvals=<span class="token variable"><span class="token punctuation">${</span>new_fields<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pdf.open_pdf("./tmp/sample.pdf")
      pdf.set_field_value("phone_nr", "077123123")
      pdf.save_field_values(output_path="./tmp/output.pdf")
  
  def multiple_operations():
      new_fields = {"phone_nr": "077123123", "title": "dr"}
      pdf.save_field_values(
          source_path="./tmp/sample.pdf",
          output_path="./tmp/output.pdf",
          newvals=new_fields
      )
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">source PDF with fields to update.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">updated target PDF.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param newvals:</th>
                                                                                <td class="field-body">new values when updating many at once.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param use_appearances_writer:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">for some PDF documents the updated
                                                                                    fields won't show visible. Try to set this to <cite>True</cite> if you
                                                                                    encounter problems.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-figure-as-image">
                                                            <h2><a href="#save-figure-as-image">Save Figure As Image</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Try to save the image data from Figure object, and return the file name, if
                                                                    successful.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>figure</td>
                                                                            <td>Figure</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>images_folder</td>
                                                                            <td>str</td>
                                                                            <td>.</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>file_prefix</td>
                                                                            <td>str</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Try to save the image data from Figure object, and return
                                                                        the file name, if successful.</p>
                                                                    <p>Figure needs to have byte <cite>stream</cite> and that needs to be recognized
                                                                        as image format for successful save.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param figure:</th>
                                                                                <td class="field-body">PDF Figure object which will be saved as an image</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param images_folder:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">directory where image files will be created</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param file_prefix:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">image filename prefix</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">image filepath or None</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-figures-as-images">
                                                            <h2><a href="#save-figures-as-images">Save Figures As Images</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Save figures from given PDF document as image files.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>images_folder</td>
                                                                            <td>str</td>
                                                                            <td>.</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>pages</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>file_prefix</td>
                                                                            <td>str</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>If no source path given, assumes a PDF is already opened.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to PDF document</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param images_folder:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">directory where image files will be created</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param pages:</th>
                                                                                <td class="field-body">target figures in the pages, can be single page or range,
                                                                                    default <cite>None</cite> means that all pages are scanned for figures to save
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param file_prefix:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">image filename prefix</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">list of image filenames created</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-pdf">
                                                            <h2><a href="#save-pdf">Save Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Save the contents of a PyPDF2 reader to a new file.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>reader</td>
                                                                            <td>PdfFileReader</td>
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
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to target PDF</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param reader:</th>
                                                                                <td class="field-body">a PyPDF2 reader.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-anchor-to-element">
                                                            <h2><a href="#set-anchor-to-element">Set Anchor To Element</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Sets anchor point in the document for further searches.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>locator</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>This is used internally in the library.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
       <span class="token property"><span class="token variable"><span class="token punctuation">${</span>success<span class="token punctuation">}</span></span>=</span>  Set Anchor To Element    text:Invoice Number
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      success = pdf.set_anchor_to_element("text:Invoice Number")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param locator:</th>
                                                                                <td class="field-body">element to search for.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">return:</th>
                                                                                <td class="field-body">True if element was found.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-convert-settings">
                                                            <h2><a href="#set-convert-settings">Set Convert Settings</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Change settings for PDFMiner document conversion.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>line_margin</td>
                                                                            <td>float</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>word_margin</td>
                                                                            <td>float</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>char_margin</td>
                                                                            <td>float</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p><cite>line_margin</cite> controls how textboxes are grouped - if conversion results in
                                                                        texts grouped into one group then set this to lower value</p>
                                                                    <p><cite>word_margin</cite> controls how spaces are inserted between words - if conversion
                                                                        results in text without spaces then set this to lower value</p>
                                                                    <p><cite>char_margin</cite> controls how characters are grouped into words - if conversion
                                                                        results in individual characters instead of then set this to higher value</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param line_margin:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">relative margin between bounding lines, default 0.5</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param word_margin:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">relative margin between words, default 0.1</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param char_margin:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">relative margin between characters, default 2.0</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Set Convert Settings</span>  line_margin=0.00000001
      <span class="token property"><span class="token variable"><span class="token punctuation">${</span>texts<span class="token punctuation">}</span></span>=</span>  Get Text From PDF  /tmp/sample.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pdf.set_convert_settings(line_margin=)
      texts = pdf.get_text_from_pdf("/tmp/sample.pdf")
  </code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-field-value">
                                                            <h2><a href="#set-field-value">Set Field Value</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Set value for field with given name on the active document.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>field_name</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>value</td>
                                                                            <td>Any</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>Tries to match on field identifier and its label.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Open PDF</span>    ./tmp/sample.pdf
      <span class="token property">Set Field Value</span>    phone_nr    077123123
      <span class="token property">Save Field Values</span>    output_path=./tmp/output.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pdf.open_pdf("./tmp/sample.pdf")
      pdf.set_field_value("phone_nr", "077123123")
      pdf.save_field_values(output_path="./tmp/output.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param field_name:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">field to update.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param value:</th>
                                                                                <td class="field-body">new value for the field.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">source PDF filepath.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">raises ValueError:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">when field can't be found or more than 1 field matches
                                                                                    the given <cite>field_name</cite>.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="switch-to-pdf">
                                                            <h2><a href="#switch-to-pdf">Switch To Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Switch library's current fileobject to already open file or open file if not
                                                                    opened.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>source_path</td>
                                                                            <td>str</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Switch library's current fileobject to already open file
                                                                        or open file if not opened.</p>
                                                                    <p>This is done automatically in the PDF library keywords.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">***Settings***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token tasks section"><span class="token section-header keyword">***Tasks***</span>
  <span class="token task-name function">Example Keyword</span>
      <span class="token property">Switch to PDF</span>    /tmp/another.pdf
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  pdf = PDF()
  
  def example_keyword():
      pdf.switch_to_pdf("/tmp/sample.pdf")
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param source_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath to the source pdf.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">raises ValueError:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">if PDF filepath is not given and there are no active
                                                                                    file to activate.</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="template-html-to-pdf">
                                                            <h2><a href="#template-html-to-pdf">Template Html To Pdf</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Use HTML template file to generate PDF file.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>template</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output_path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>variables</td>
                                                                            <td>dict</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <p>It provides an easy method of generating a PDF document from an HTML formatted
                                                                        template file.</p>
                                                                    <p><strong>Examples</strong></p>
                                                                    <p><strong>Robot Framework</strong></p>
                                                                    <pre class="line-numbers language-robot"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  </span><span class="token settings section"><span class="token section-header keyword">*** Settings ***</span>
  <span class="token property">Library</span>    Autosphere.PDF
  </span>
  <span class="token variables section"><span class="token section-header keyword">*** Variables ***</span>
  <span class="token variable"><span class="token punctuation">${</span>TEMPLATE<span class="token punctuation">}</span></span>    order.template
  <span class="token variable"><span class="token punctuation">${</span>PDF<span class="token punctuation">}</span></span>         result.pdf
  <span class="token variable"><span class="token punctuation">&amp;{</span>DATA<span class="token punctuation">}</span></span>        name=Robot Generated
  ...            email=robot@domain.com
  ...            zip=00100
  ...            items=Item 1, Item 2
  </span>
  <span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function">Create PDF from HTML template</span>
      <span class="token property">Template HTML to PDF</span>   <span class="token variable"><span class="token punctuation">${</span>TEMPLATE<span class="token punctuation">}</span></span>  <span class="token variable"><span class="token punctuation">${</span>PDF<span class="token punctuation">}</span></span>  <span class="token variable"><span class="token punctuation">${</span>DATA<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                    <p><strong>Python</strong></p>
                                                                    <pre><code class="code python literal-block">*** Tasks ***
  from Autosphere.PDF import PDF
  
  p = PDF()
  orders = ["item 1", "item 2", "item 3"]
  data = {
      "name": "Robot Process",
      "email": "robot@domain.com",
      "zip": "00100",
      "items": "&lt;br/&gt;".join(orders),
  }
  p.template_html_to_pdf("order.template", "order.pdf", data)
  </code></pre>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param template:</th>
                                                                                <td class="field-body">filepath to the HTML template.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param output_path:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">filepath where to save PDF document.</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param variables:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">dictionary of variables to fill into template, defaults to
                                                                                    {}.</td>
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
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()" type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div class="ps ps--active-y">
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li> <a id="link-add-files-to-pdf" href="#add-files-to-pdf" class="">Add Files To Pdf</a></li>
                                                    <li> <a id="link-add-watermark-image-to-pdf" href="#add-watermark-image-to-pdf" class="">Add Watermark Image To Pdf</a></li>
                                                    <li> <a id="link-close-all-pdfs" href="#close-all-pdfs" class="">Close All Pdfs</a></li>
                                                    <li> <a id="link-close-pdf" href="#close-pdf" class="">Close Pdf</a></li>
                                                    <li> <a id="link-convert" href=" #convert" class="">Convert</a></li>
                                                    <li> <a id="link-decrypt-pdf" href=" #decrypt-pdf" class="">Decrypt Pdf</a></li>
                                                    <li> <a id="link-dump-pdf-as-xml" href=" #dump-pdf-as-xml" class="">Dump Pdf As Xml</a></li>
                                                    <li> <a id="link-encrypt-pdf" href=" #encrypt-pdf" class="">Encrypt Pdf</a></li>
                                                    <li> <a id="link-extract-pages-from-pdf" href=" #extract-pages-from-pdf" class="">Extract Pages From Pdf</a></li>
                                                    <li> <a id="link-find-text" href=" #find-text" class="">Find Text</a></li>
                                                    <li> <a id="link-get-all-figures" href=" #get-all-figures" class="">Get All Figures</a></li>
                                                    <li> <a id="link-get-input-fields" href=" #get-input-fields" class="">Get Input Fields</a></li>
                                                    <li> <a id="link-get-number-of-pages" href=" #get-number-of-pages" class="">Get Number Of Pages</a></li>
                                                    <li> <a id="link-get-pdf-info" href=" #get-pdf-info" class="">Get Pdf Info</a></li>
                                                    <li> <a id="link-get-text-from-pdf" href=" #get-text-from-pdf" class="">Get Text From Pdf</a></li>
                                                    <li> <a id="link-html-to-pdf" href=" #html-to-pdf" class="">Html To Pdf</a></li>
                                                    <li> <a id="link-is-pdf-encrypted" href=" #is-pdf-encrypted" class="">Is Pdf Encrypted</a></li>
                                                    <li> <a id="link-open-pdf" href=" #open-pdf" class="">Open Pdf</a></li>
                                                    <li> <a id="link-rotate-page" href=" #rotate-page" class="">Rotate Page</a></li>
                                                    <li> <a id="link-save-field-values" href=" #save-field-values" class="">Save Field Values</a></li>
                                                    <li> <a id="link-save-figure-as-image" href=" #save-figure-as-image" class="">Save Figure As Image</a></li>
                                                    <li> <a id="link-save-figures-as-images" href=" #save-figures-as-images" class="">Save Figures As Images</a></li>
                                                    <li> <a id="link-save-pdf" href=" #save-pdf" class="">Save Pdf</a></li>
                                                    <li> <a id="link-set-anchor-to-element" href=" #set-anchor-to-element" class="">Set Anchor To Element</a></li>
                                                    <li> <a id="link-set-convert-settings" href=" #set-convert-settings" class="">Set Convert Settings</a></li>
                                                    <li> <a id="link-set-field-value" href=" #set-field-value" class="">Set Field Value</a></li>
                                                    <li> <a id="link-switch-to-pdf" href=" #switch-to-pdf" class="">Switch To Pdf</a></li>
                                                    <li> <a id="link-template-html-to-pdf" href=" #template-html-to-pdf" class="">Template Html To Pdf</a></li>

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