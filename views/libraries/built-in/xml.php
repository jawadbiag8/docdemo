<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Built-In</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Built-in</a></li>
                                    <li class="active">XML</li>
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
                                            <p>Autosphere test library for verifying and modifying XML documents.</p>
                                            <p>As the name implies, <i>XML</i> is a test library for verifying contents of XML files. In practice it is a pretty thin wrapper on top of Python's <a href="http://docs.python.org/library/xml.etree.elementtree.html">ElementTree XML API</a>.</p>
                                            <p>The library has the following main usages:</p>
                                            <ul>
                                                <li>Parsing an XML file, or a string containing XML, into an XML element structure and finding certain elements from it for for further analysis (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a> keywords).</li>
                                                <li>Getting text or attributes of elements (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element-text" class="name">Get Element
                                                        Text</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element-attribute" class="name">Get Element Attribute</a>).</li>
                                                <li>Directly verifying text, attributes, or whole elements (e.g <a href="#element-text-should-be" class="name">Element Text Should Be</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#elements-should-be-equal" class="name">Elements Should Be Equal</a>).</li>
                                                <li>Modifying XML and saving it (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#set-element-text" class="name">Set Element Text</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#add-element" class="name">Add Element</a> and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#save-xml" class="name">Save
                                                        XML</a>).</li>
                                            </ul>
                                            <h4 id="Table of contents">Table of contents</h4>
                                            <ul>
                                                <li><a href="#Parsing%20XML" class="name">Parsing XML</a></li>
                                                <li><a href="#Using%20lxml" class="name">Using lxml</a></li>
                                                <li><a href="#Example" class="name">Example</a></li>
                                                <li><a href="#Finding%20elements%20with%20xpath" class="name">Finding elements with xpath</a></li>
                                                <li><a href="#Element%20attributes" class="name">Element attributes</a></li>
                                                <li><a href="#Handling%20XML%20namespaces" class="name">Handling XML namespaces</a></li>
                                                <li><a href="#Boolean%20arguments" class="name">Boolean arguments</a></li>
                                                <li><a href="#Importing" class="name">Importing</a></li>
                                                <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
                                                <li><a href="#Keywords" class="name">Keywords</a></li>
                                            </ul>
                                            <h4 id="Parsing XML">Parsing XML</h4>
                                            <p>XML can be parsed into an element structure using <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a> keyword. The XML to be parsed can be specified using a path to an XML file or as a string or bytes that contain XML directly. The keyword returns
                                                the root element of the structure, which then contains other elements as its children and their children. Possible comments and processing instructions in the source XML are removed.
                                            </p>
                                            <p>XML is not validated during parsing even if has a schema defined. How possible doctype elements are handled otherwise depends on the used XML module and on the platform. The standard ElementTree strips doctypes altogether but when <a href="#Using%20lxml" class="name">using lxml</a> they are preserved when XML is saved.
                                            </p>
                                            <p>The element structure returned by <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a>, as well as elements returned by keywords such as <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a>, can be used as the
                                                <code>source</code> argument with other keywords. In addition to an already parsed XML structure, other keywords also accept paths to XML files and strings containing XML similarly as <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a>. Notice
                                                that keywords that modify XML do not write those changes back to disk even if the source would be given as a path to a file. Changes must always saved explicitly using <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#save-xml" class="name">Save XML</a> keyword.
                                            </p>
                                            <p>When the source is given as a path to a file, the forward slash character (<code>/</code>) can be used as the path separator regardless the operating system. On Windows also the backslash works, but it the test data it needs to be escaped by doubling
                                                it (<code>\\</code>). Using the built-in variable <code>${/}</code> naturally works too.</p>

                                            <h4 id="Using lxml">Using lxml</h4>
                                            <p>By default this library uses Python's standard <a href="http://docs.python.org/library/xml.etree.elementtree.html">ElementTree</a> module for parsing XML, but it can be configured to use <a href="http://lxml.de">lxml</a> module instead when
                                                <a href="#Importing" class="name">importing</a> the library. The resulting element structure has same API regardless which module is used for parsing.
                                            </p>
                                            <p>The main benefits of using lxml is that it supports richer xpath syntax than the standard ElementTree and enables using <a href="#evaluate-xpath" class="name">Evaluate Xpath</a> keyword. It also preserves the doctype and possible namespace prefixes
                                                saving XML.</p>
                                            <h4 id="Example">Example</h4>
                                            <p>The following simple example demonstrates parsing XML and verifying its contents both using keywords in this library and in <i>BuiltIn</i> and <i>Collections</i> libraries. How to use xpath expressions to find elements and what attributes the
                                                returned elements contain are discussed, with more examples, in <a href="#Finding%20elements%20with%20xpath" class="name">Finding elements with xpath</a> and <a href="#Element%20attributes" class="name">Element attributes</a> sections.</p>
                                            <p>In this example, as well as in many other examples in this documentation, <code>${XML}</code> refers to the following example XML document. In practice <code>${XML}</code> could either be a path to an XML file or it could contain the XML itself.</p>
                                            <pre>&lt;example&gt;
      &lt;first id="1"&gt;text&lt;/first&gt;
      &lt;second id="2"&gt;
        &lt;child/&gt;
      &lt;/second&gt;
      &lt;third&gt;
        &lt;child&gt;more text&lt;/child&gt;
        &lt;second id="child"/&gt;
        &lt;child&gt;&lt;grandchild/&gt;&lt;/child&gt;
      &lt;/third&gt;
      &lt;html&gt;
        &lt;p&gt;
          Text with &lt;b&gt;bold&lt;/b&gt; and &lt;i&gt;italics&lt;/i&gt;.
        &lt;/p&gt;
      &lt;/html&gt;
    &lt;/example&gt;
    </pre>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${root} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${root.tag}</td>
                                                        <td>example</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${first} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${root}</td>
                                                        <td>first</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${first.text}</td>
                                                        <td>text</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Dictionary Should Contain Key</span></td>
                                                        <td>${first.attrib}</td>
                                                        <td>id</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Text Should Be</a></td>
                                                        <td>${first}</td>
                                                        <td>text</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Attribute Should Be</a></td>
                                                        <td>${first}</td>
                                                        <td>id</td>
                                                        <td>1</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Attribute Should Be</a></td>
                                                        <td>${root}</td>
                                                        <td>id</td>
                                                        <td>1</td>
                                                        <td>xpath=first</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Attribute Should Be</a></td>
                                                        <td>${XML}</td>
                                                        <td>id</td>
                                                        <td>1</td>
                                                        <td>xpath=first</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Notice that in the example three last lines are equivalent. Which one to use in practice depends on which other elements you need to get or verify. If you only need to do one verification, using the last line alone would suffice. If more verifications
                                                are needed, parsing the XML with <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a> only once would be more efficient.</p>
                                            <h4 id="Finding elements with xpath">Finding elements with xpath</h4>
                                            <p>ElementTree, and thus also this library, supports finding elements using xpath expressions. ElementTree does not, however, support the full xpath standard. The supported xpath syntax is explained below and <a href="https://docs.python.org/library/xml.etree.elementtree.html#xpath-support">ElementTree
                                                    documentation</a> provides more details. In the examples <code>${XML}</code> refers to the same XML structure as in the earlier example.</p>
                                            <p>If lxml support is enabled when <a href="#Importing" class="name">importing</a> the library, the whole xpath 1.0 standard is supported. That includes everything listed below but also lot of other useful constructs.</p>
                                            <h4 id="Tag names">Tag names</h4>
                                            <p>When just a single tag name is used, xpath matches all direct child elements that have that tag name.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${elem} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>third</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${elem.tag}</td>
                                                        <td>third</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>@{children} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-elements" class="name">Get Elements</a></td>
                                                        <td>${elem}</td>
                                                        <td>child</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Length Should Be</span></td>
                                                        <td>${children}</td>
                                                        <td>2</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Paths">Paths</h4>
                                            <p>Paths are created by combining tag names with a forward slash (<code>/</code>). For example,
                                                <code>parent/child</code> matches all <code>child</code> elements under <code>parent</code> element. Notice that if there are multiple <code>parent</code> elements that all have <code>child</code> elements,
                                                <code>parent/child</code> xpath will match all these <code>child</code> elements.
                                            </p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${elem} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>second/child</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${elem.tag}</td>
                                                        <td>child</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${elem} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>third/child/grandchild</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${elem.tag}</td>
                                                        <td>grandchild</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Wildcards">Wildcards</h4>
                                            <p>An asterisk (<code>*</code>) can be used in paths instead of a tag name to denote any element.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>@{children} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-elements" class="name">Get Elements</a></td>
                                                        <td>${XML}</td>
                                                        <td>*/child</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Length Should Be</span></td>
                                                        <td>${children}</td>
                                                        <td>3</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Current element">Current element</h4>
                                            <p>The current element is denoted with a dot (<code>.</code>). Normally the current element is implicit and does not need to be included in the xpath.</p>
                                            <h4 id="Parent element">Parent element</h4>
                                            <p>The parent element of another element is denoted with two dots (<code>..</code>). Notice that it is not possible to refer to the parent of the current element.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${elem} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>*/second/..</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${elem.tag}</td>
                                                        <td>third</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Search all sub elements">Search all sub elements</h4>
                                            <p>Two forward slashes (<code>//</code>) mean that all sub elements, not only the direct children, are searched. If the search is started from the current element, an explicit dot is required.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>@{elements} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-elements" class="name">Get Elements</a></td>
                                                        <td>${XML}</td>
                                                        <td>.//second</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Length Should Be</span></td>
                                                        <td>${elements}</td>
                                                        <td>2</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${b} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>html//b</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${b.text}</td>
                                                        <td>bold</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Predicates">Predicates</h4>
                                            <p>Predicates allow selecting elements using also other criteria than tag names, for example, attributes or position. They are specified after the normal tag name or path using syntax <code>path[predicate]</code>. The path can have wildcards and
                                                other special syntax explained earlier. What predicates the standard ElementTree supports is explained in the table below.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <th>Predicate</th>
                                                        <th>Matches</th>
                                                        <th>Example</th>
                                                    </tr>
                                                    <tr>
                                                        <td>@attrib</td>
                                                        <td>Elements with attribute <code>attrib</code>.</td>
                                                        <td>second[@id]</td>
                                                    </tr>
                                                    <tr>
                                                        <td>@attrib="value"</td>
                                                        <td>Elements with attribute <code>attrib</code> having value <code>value</code>.</td>
                                                        <td>*[@id="2"]</td>
                                                    </tr>
                                                    <tr>
                                                        <td>position</td>
                                                        <td>Elements at the specified position. Position can be an integer (starting from 1), expression
                                                            <code>last()</code>, or relative expression like <code>last() - 1</code>.
                                                        </td>
                                                        <td>third/child[1]</td>
                                                    </tr>
                                                    <tr>
                                                        <td>tag</td>
                                                        <td>Elements with a child element named <code>tag</code>.</td>
                                                        <td>third/child[grandchild]</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Predicates can also be stacked like <code>path[predicate1][predicate2]</code>. A limitation is that possible position predicate must always be first.</p>
                                            <h4 id="Element attributes">Element attributes</h4>
                                            <p>All keywords returning elements, such as <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a>, and <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a>, return ElementTree's <a href="http://docs.python.org/library/xml.etree.elementtree.html#element-objects">Element objects</a>.
                                                These elements can be used as inputs for other keywords, but they also contain several useful attributes that can be accessed directly using the extended variable syntax.</p>
                                            <p>The attributes that are both useful and convenient to use in the test data are explained below. Also other attributes, including methods, can be accessed, but that is typically better to do in custom libraries than directly in the test data.</p>
                                            <p>The examples use the same <code>${XML}</code> structure as the earlier examples.</p>
                                            <h4 id="tag">tag</h4>
                                            <p>The tag of the element.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${root} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${root.tag}</td>
                                                        <td>example</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="text">text</h4>
                                            <p>The text that the element contains or Python <code>None</code> if the element has no text. Notice that the text <i>does not</i> contain texts of possible child elements nor text after or between children. Notice also that in XML whitespace is
                                                significant, so the text contains also possible indentation and newlines. To get also text of the possible children, optionally whitespace normalized, use <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element-text" class="name">Get Element Text</a> keyword.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${1st} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>first</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${1st.text}</td>
                                                        <td>text</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${2nd} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>second/child</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${2nd.text}</td>
                                                        <td>${NONE}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${p} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>html/p</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${p.text}</td>
                                                        <td>\n${SPACE*6}Text with${SPACE}</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="tail">tail</h4>
                                            <p>The text after the element before the next opening or closing tag. Python <code>None</code> if the element has no tail. Similarly as with <code>text</code>, also <code>tail</code> contains possible indentation and newlines.
                                            </p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${b} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>html/p/b</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${b.tail}</td>
                                                        <td>${SPACE}and${SPACE}</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="attrib">attrib</h4>
                                            <p>A Python dictionary containing attributes of the element.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${2nd} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>second</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${2nd.attrib['id']}</td>
                                                        <td>2</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${3rd} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#get-element" class="name">Get Element</a></td>
                                                        <td>${XML}</td>
                                                        <td>third</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Empty</span></td>
                                                        <td>${3rd.attrib}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Handling XML namespaces">Handling XML namespaces</h4>
                                            <p>ElementTree and lxml handle possible namespaces in XML documents by adding the namespace URI to tag names in so called Clark Notation. That is inconvenient especially with xpaths, and by default this library strips those namespaces away and moves
                                                them to <code>xmlns</code> attribute instead. That can be avoided by passing
                                                <code>keep_clark_notation</code> argument to <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a> keyword. Alternatively <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a> supports stripping namespace information altogether by using <code>strip_namespaces</code> argument. The pros and cons of different approaches are discussed in more detail below.
                                            </p>
                                            <h4 id="How ElementTree handles namespaces">How ElementTree handles namespaces</h4>
                                            <p>If an XML document has namespaces, ElementTree adds namespace information to tag names in Clark Notation and removes original <code>xmlns</code> attributes. This is done both with default namespaces and with namespaces with a prefix. How it works
                                                in practice is illustrated by the following example, where
                                                <code>${NS}</code> variable contains this XML document:
                                            </p>
                                            <pre>&lt;xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                    xmlns="http://www.w3.org/1999/xhtml"&gt;
      &lt;xsl:template match="/"&gt;
        &lt;html&gt;&lt;/html&gt;
      &lt;/xsl:template&gt;
    &lt;/xsl:stylesheet&gt;
    </pre>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${root} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${NS}</td>
                                                        <td>keep_clark_notation=yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${root.tag}</td>

                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-should-exist" class="name">Element Should Exist</a></td>
                                                        <td>${root}</td>

                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Empty</span></td>
                                                        <td>${root.attrib}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>As you can see, including the namespace URI in tag names makes xpaths really long and complex.</p>
                                            <p>If you save the XML, ElementTree moves namespace information back to <code>xmlns</code> attributes. Unfortunately it does not restore the original prefixes:</p>
                                            <pre>&lt;ns0:stylesheet xmlns:ns0="http://www.w3.org/1999/XSL/Transform"&gt;
      &lt;ns0:template match="/"&gt;
        &lt;ns1:html xmlns:ns1="http://www.w3.org/1999/xhtml"&gt;&lt;/ns1:html&gt;
      &lt;/ns0:template&gt;
    &lt;/ns0:stylesheet&gt;
    </pre>
                                            <p>The resulting output is semantically same as the original, but mangling prefixes like this may still not be desirable. Notice also that the actual output depends slightly on ElementTree version.</p>
                                            <h4 id="Default namespace handling">Default namespace handling</h4>
                                            <p>Because the way ElementTree handles namespaces makes xpaths so complicated, this library, by default, strips namespaces from tag names and moves that information back to <code>xmlns</code> attributes. How this works in practice is shown by the
                                                example below, where <code>${NS}</code> variable contains the same XML document as in the previous example.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${root} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${NS}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="name">Should Be Equal</span></td>
                                                        <td>${root.tag}</td>
                                                        <td>stylesheet</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-should-exist" class="name">Element Should Exist</a></td>
                                                        <td>${root}</td>
                                                        <td>template/html</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Attribute Should Be</a></td>
                                                        <td>${root}</td>
                                                        <td>xmlns</td>
                                                        <td><a href="http://www.w3.org/1999/XSL/Transform">http://www.w3.org/1999/XSL/Transform</a></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Attribute Should Be</a></td>
                                                        <td>${root}</td>
                                                        <td>xmlns</td>
                                                        <td><a href="http://www.w3.org/1999/xhtml">http://www.w3.org/1999/xhtml</a></td>
                                                        <td>xpath=template/html</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Now that tags do not contain namespace information, xpaths are simple again.</p>
                                            <p>A minor limitation of this approach is that namespace prefixes are lost. As a result the saved output is not exactly same as the original one in this case either:</p>
                                            <pre>&lt;stylesheet xmlns="http://www.w3.org/1999/XSL/Transform"&gt;
      &lt;template match="/"&gt;
        &lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;&lt;/html&gt;
      &lt;/template&gt;
    &lt;/stylesheet&gt;
    </pre>
                                            <p>Also this output is semantically same as the original. If the original XML had only default namespaces, the output would also look identical.</p>
                                            <h4 id="Namespaces when using lxml">Namespaces when using lxml</h4>
                                            <p>This library handles namespaces same way both when <a href="#Using%20lxml" class="name">using lxml</a> and when not using it. There are, however, differences how lxml internally handles namespaces compared to the standard ElementTree. The main
                                                difference is that lxml stores information about namespace prefixes and they are thus preserved if XML is saved. Another visible difference is that lxml includes namespace information in child elements got with <a href="#get-element" class="name">Get Element</a> if the parent element has namespaces.
                                            </p>
                                            <h4 id="Stripping namespaces altogether">Stripping namespaces altogether</h4>
                                            <p>Because namespaces often add unnecessary complexity, <a href="#parse-xml" class="name">Parse XML</a> supports stripping them altogether by using <code>strip_namespaces=True</code>. When this option is enabled, namespaces are not shown anywhere
                                                nor are they included if XML is saved.</p>
                                            <h4 id="Attribute namespaces">Attribute namespaces</h4>
                                            <p>Attributes in XML documents are, by default, in the same namespaces as the element they belong to. It is possible to use different namespaces by using prefixes, but this is pretty rare.</p>
                                            <p>If an attribute has a namespace prefix, ElementTree will replace it with Clark Notation the same way it handles elements. Because stripping namespaces from attributes could cause attribute conflicts, this library does not handle attribute namespaces
                                                at all. Thus the following example works the same way regardless how namespaces are handled.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${root} =</td>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>&lt;root id="1" ns:id="2" xmlns:ns="http://my.ns"/&gt;</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Attribute Should Be</a></td>
                                                        <td>${root}</td>
                                                        <td>id</td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#element-attribute-should-be" class="name">Element Attribute Should Be</a></td>
                                                        <td>${root}</td>
                                                        <td>{<a href="http://my.ns}id">http://my.ns}id</a></td>
                                                        <td>2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Boolean arguments">Boolean arguments</h4>
                                            <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
                                                <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Other strings are considered true regardless their value, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                                            </p>
                                            <p>True examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=True</td>
                                                        <td># Strings are generally true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=yes</td>
                                                        <td># Same as the above.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=${TRUE}</td>
                                                        <td># Python <code>True</code> is true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=${42}</td>
                                                        <td># Numbers other than 0 are true.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>False examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=False</td>
                                                        <td># String <code>false</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=no</td>
                                                        <td># Also string <code>no</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=${EMPTY}</td>
                                                        <td># Empty string is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#parse-xml" class="name">Parse XML</a></td>
                                                        <td>${XML}</td>
                                                        <td>keep_clark_notation=${FALSE}</td>
                                                        <td># Python <code>False</code> is false.</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h4 id="Pattern matching">Pattern matching</h4>
                                            <p>Some keywords, for example <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/xml/keywords#elements-should-match" class="name">Elements Should Match</a>, support so called <a href="http://en.wikipedia.org/wiki/Glob_(programming)">glob patterns</a> where:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><code>*</code></td>
                                                        <td>matches any string, even an empty string</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>?</code></td>
                                                        <td>matches any single character</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[chars]</code></td>
                                                        <td>matches one character in the bracket</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[!chars]</code></td>
                                                        <td>matches one character not in the bracket</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[a-z]</code></td>
                                                        <td>matches one character from the range in the bracket</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[!a-z]</code></td>
                                                        <td>matches one character not from the range in the bracket</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Unlike with glob patterns normally, path separator characters <code>/</code> and <code>\</code> and the newline character <code>\n</code> are matches by the above wildcards.</p>

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
                                                        <div class="keyword" id="add-element">
                                                            <h2><a href="#add-element">Add Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Adds a child element to the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element to whom to add the new element is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword. The resulting XML structure is returned, and if the
                                                                    <code>source</code> is an already parsed XML structure, it is also modified in place.
                                                                </p>
                                                                <p>The <code>element</code> to add can be specified as a path to an XML file or as a string containing XML, or it can be an already parsed XML element. The element is copied before adding so modifying either the
                                                                    original or the added element has no effect on the other . The element is added as the last child by default, but a custom index can be used to alter the position. Indices start from zero (0 = first position,
                                                                    1 = second position, etc.), and negative numbers refer to positions at the end (-1 = second last position, -2 = third last, etc.).</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Add Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>&lt;new id="x"&gt;&lt;c1/&gt;&lt;/new&gt;</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Add Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>&lt;c2/&gt;</td>
                                                                        <td>xpath=new</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Add Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>&lt;c3/&gt;</td>
                                                                        <td>index=1</td>
                                                                        <td>xpath=new</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${new} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>new</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${new}</td>
                                                                        <td>&lt;new id="x"&gt;&lt;c1/&gt;&lt;c3/&gt;&lt;c2/&gt;&lt;/new&gt;</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Remove%20Element" class="name">Remove Element</a> or <a href="#Remove%20Elements" class="name">Remove Elements</a> to remove elements.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="clear-element">
                                                            <h2><a href="#clear-element">Clear Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Clears the contents of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>clear_tail</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element to clear is specified using <code>source</code> and <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword. The resulting XML
                                                                    structure is returned, and if the <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
                                                                <p>Clearing the element means removing its text, attributes, and children. Element's tail text is not removed by default, but that can be changed by giving <code>clear_tail</code> a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>). See <a href="#Element%20attributes" class="name">Element attributes</a> section for more information about tail in general.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Clear Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=first</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${first} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${first}</td>
                                                                        <td>&lt;first/&gt;</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Clear Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=html/p/b</td>
                                                                        <td>clear_tail=yes</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>Text with italics.</td>
                                                                        <td>xpath=html/p</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Clear Element</td>
                                                                        <td>${XML}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${XML}</td>
                                                                        <td>&lt;example/&gt;</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Remove%20Element" class="name">Remove Element</a> to remove the whole element.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-element">
                                                            <h2><a href="#copy-element">Copy Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns a copy of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element to copy is specified using <code>source</code> and <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>If the copy or the original element is modified afterwards, the changes have no effect on the other.
                                                                </p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${elem} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${copy1} =</td>
                                                                        <td>Copy Element</td>
                                                                        <td>${elem}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${copy2} =</td>
                                                                        <td>Copy Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Element Text</td>
                                                                        <td>${XML}</td>
                                                                        <td>new text</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Element Attribute</td>
                                                                        <td>${copy1}</td>
                                                                        <td>id</td>
                                                                        <td>new</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${elem}</td>
                                                                        <td>&lt;first id="1"&gt;new text&lt;/first&gt;</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${copy1}</td>
                                                                        <td>&lt;first id="new"&gt;text&lt;/first&gt;</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${copy2}</td>
                                                                        <td>&lt;first id="1"&gt;text&lt;/first&gt;</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-attribute-should-be">
                                                            <h2><a href="#element-attribute-should-be">Element Attribute Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the specified attribute is ``expected``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that the specified attribute is <code>expected</code>.</p>
                                                                <p>The element whose attribute is verified is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>The keyword passes if the attribute <code>name</code> of the element is equal to the
                                                                    <code>expected</code> value, and otherwise it fails. The default error message can be overridden with the <code>message</code> argument.
                                                                </p>
                                                                <p>To test that the element does not have a certain attribute, Python <code>None</code> (i.e. variable <code>${NONE}</code>) can be used as the expected value. A cleaner alternative is using
                                                                    <a href="#Element%20Should%20Not%20Have%20Attribute" class="name">Element Should Not Have
                                                                        Attribute</a>.
                                                                </p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Element Attribute Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>1</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Attribute Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>${NONE}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Element%20Attribute%20Should%20Match" class="name">Element Attribute Should
                                                                        Match</a> and <a href="#Get%20Element%20Attribute" class="name">Get Element Attribute</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-attribute-should-match">
                                                            <h2><a href="#element-attribute-should-match">Element Attribute Should Match</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the specified attribute matches ``expected``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that the specified attribute matches <code>expected</code>.</p>
                                                                <p>This keyword works exactly like <a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a> except that the expected value can be given as a pattern that the attribute of the element
                                                                    must match.</p>
                                                                <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Pattern%20matching" class="name">Pattern matching</a> section for more information.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Element Attribute Should Match</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>?</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Attribute Should Match</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>c*d</td>
                                                                        <td>xpath=third/second</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-exist">
                                                            <h2><a href="#element-should-exist">Element Should Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that one or more element match the given ``xpath``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that one or more element match the given <code>xpath</code>.</p>
                                                                <p>Arguments <code>source</code> and <code>xpath</code> have exactly the same semantics as with <a href="#Get%20Elements" class="name">Get Elements</a> keyword. Keyword passes if the
                                                                    <code>xpath</code> matches one or more elements in the <code>source</code>. The default error message can be overridden with the <code>message</code> argument.
                                                                </p>
                                                                <p>See also <a href="#Element%20Should%20Not%20Exist" class="name">Element Should Not Exist</a> as well as <a href="#Get%20Element%20Count" class="name">Get Element Count</a> that this keyword uses internally.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-not-exist">
                                                            <h2><a href="#element-should-not-exist">Element Should Not Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that no element match the given ``xpath``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that no element match the given <code>xpath</code>.</p>
                                                                <p>Arguments <code>source</code> and <code>xpath</code> have exactly the same semantics as with <a href="#Get%20Elements" class="name">Get Elements</a> keyword. Keyword fails if the
                                                                    <code>xpath</code> matches any element in the <code>source</code>. The default error message can be overridden with the <code>message</code> argument.
                                                                </p>
                                                                <p>See also <a href="#Element%20Should%20Exist" class="name">Element Should Exist</a> as well as
                                                                    <a href="#Get%20Element%20Count" class="name">Get Element Count</a> that this keyword uses internally.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-not-have-attribute">
                                                            <h2><a href="#element-should-not-have-attribute">Element Should Not Have Attribute</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the specified element does not have attribute ``name``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that the specified element does not have attribute <code>name</code>.</p>
                                                                <p>The element whose attribute is verified is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>The keyword fails if the specified element has attribute <code>name</code>. The default error message can be overridden with the <code>message</code> argument.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Element Should Not Have Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Not Have Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>xxx</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Get%20Element%20Attribute" class="name">Get Element Attribute</a>, <a href="#Get%20Element%20Attributes" class="name">Get Element Attributes</a>, <a href="#Element%20Text%20Should%20Be" class="name">Element Text Should Be</a> and <a href="#Element%20Text%20Should%20Match" class="name">Element Text Should Match</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-text-should-be">
                                                            <h2><a href="#element-text-should-be">Element Text Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the text of the specified element is ``expected``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>normalize_whitespace</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that the text of the specified element is <code>expected</code>.</p>
                                                                <p>The element whose text is verified is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>The text to verify is got from the specified element using the same logic as with <a href="#Get%20Element%20Text" class="name">Get Element Text</a>. This includes optional whitespace normalization using the
                                                                    <code>normalize_whitespace</code> option.
                                                                </p>
                                                                <p>The keyword passes if the text of the element is equal to the <code>expected</code> value, and otherwise it fails. The default error message can be overridden with the <code>message</code> argument. Use <a href="#Element%20Text%20Should%20Match" class="name">Element Text Should
                                                                        Match</a> to verify the text against a pattern instead of an exact value.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>text</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>${EMPTY}</td>
                                                                        <td>xpath=second/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${paragraph} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=html/p</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${paragraph}</td>
                                                                        <td>Text with bold and italics.</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-text-should-match">
                                                            <h2><a href="#element-text-should-match">Element Text Should Match</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the text of the specified element matches ``expected``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>normalize_whitespace</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that the text of the specified element matches <code>expected</code>.</p>
                                                                <p>This keyword works exactly like <a href="#Element%20Text%20Should%20Be" class="name">Element
                                                                        Text Should Be</a> except that the expected value can be given as a pattern that the text of the element must match.</p>
                                                                <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Pattern%20matching" class="name">Pattern matching</a> section for more information.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Element Text Should Match</td>
                                                                        <td>${XML}</td>
                                                                        <td>t???</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${paragraph} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=html/p</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Match</td>
                                                                        <td>${paragraph}</td>
                                                                        <td>Text with * and *.</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-to-string">
                                                            <h2><a href="#element-to-string">Element To String</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the string representation of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element to convert to a string is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>By default the string is returned as Unicode. If <code>encoding</code> argument is given any value, the string is returned as bytes in the specified encoding. The resulting string never contains the XML declaration.</p>
                                                                <p>See also <a href="#Log%20Element" class="name">Log Element</a> and <a href="#Save%20Xml" class="name">Save XML</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="elements-should-be-equal">
                                                            <h2><a href="#elements-should-be-equal">Elements Should Be Equal</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the given ``source`` element is equal to ``expected``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_children</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>normalize_whitespace</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that the given <code>source</code> element is equal to <code>expected</code>.</p>
                                                                <p>Both <code>source</code> and <code>expected</code> can be given as a path to an XML file, as a string containing XML, or as an already parsed XML element structure. See <a href="#Introduction" class="name">introduction</a> for more information about parsing XML in general.
                                                                </p>
                                                                <p>The keyword passes if the <code>source</code> element and <code>expected</code> element are equal. This includes testing the tag names, texts, and attributes of the elements. By default also child elements are
                                                                    verified the same way, but this can be disabled by setting
                                                                    <code>exclude_children</code> to a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).
                                                                </p>
                                                                <p>All texts inside the given elements are verified, but possible text outside them is not. By default texts must match exactly, but setting <code>normalize_whitespace</code> to a true value makes text verification
                                                                    independent on newlines, tabs, and the amount of spaces. For more details about handling text see <a href="#Get%20Element%20Text" class="name">Get Element
                                                                        Text</a> keyword and discussion about elements' <a href="#text" class="name">text</a> and <a href="#tail" class="name">tail</a> attributes in the <a href="#Introduction" class="name">introduction</a>.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${first} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${first}</td>
                                                                        <td>&lt;first id="1"&gt;text&lt;/first&gt;</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>html/p</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${p}</td>
                                                                        <td>&lt;p&gt;Text with &lt;b&gt;bold&lt;/b&gt; and &lt;i&gt;italics&lt;/i&gt;.&lt;/p&gt;</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Be Equal</td>
                                                                        <td>${p}</td>
                                                                        <td>&lt;p&gt;Text with&lt;/p&gt;</td>
                                                                        <td>exclude</td>
                                                                        <td>normalize</td>
                                                                    </tr>
                                                                </table>
                                                                <p>The last example may look a bit strange because the <code>&lt;p&gt;</code> element only has text <code>Text with</code>. The reason is that rest of the text inside <code>&lt;p&gt;</code> actually belongs to
                                                                    the child elements. This includes the <code>.</code> at the end that is the
                                                                    <a href="#tail" class="name">tail</a> text of the <code>&lt;i&gt;</code> element.
                                                                </p>
                                                                <p>See also <a href="#Elements%20Should%20Match" class="name">Elements Should Match</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="elements-should-match">
                                                            <h2><a href="#elements-should-match">Elements Should Match</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the given ``source`` element matches ``expected``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_children</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>normalize_whitespace</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Verifies that the given <code>source</code> element matches <code>expected</code>.</p>
                                                                <p>This keyword works exactly like <a href="#Elements%20Should%20Be%20Equal" class="name">Elements
                                                                        Should Be Equal</a> except that texts and attribute values in the expected value can be given as patterns.</p>
                                                                <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Pattern%20matching" class="name">Pattern matching</a> section for more information.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${first} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Elements Should Match</td>
                                                                        <td>${first}</td>
                                                                        <td>&lt;first id="?"&gt;*&lt;/first&gt;</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Elements%20Should%20Be%20Equal" class="name">Elements Should Be Equal</a> for more examples.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="evaluate-xpath">
                                                            <h2><a href="#evaluate-xpath">Evaluate Xpath</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Evaluates the given xpath expression and returns results.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expression</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>context</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element in which context the expression is executed is specified using <code>source</code> and <code>context</code> arguments. They have exactly the same semantics as <code>source</code> and <code>xpath</code> arguments have with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>The xpath expression to evaluate is given as <code>expression</code> argument. The result of the evaluation is returned as-is.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${count} =</td>
                                                                        <td>Evaluate Xpath</td>
                                                                        <td>${XML}</td>
                                                                        <td>count(third/*)</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${count}</td>
                                                                        <td>${3}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${text} =</td>
                                                                        <td>Evaluate Xpath</td>
                                                                        <td>${XML}</td>
                                                                        <td>string(descendant::second[last()]/@id)</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${text}</td>
                                                                        <td>child</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${bold} =</td>
                                                                        <td>Evaluate Xpath</td>
                                                                        <td>${XML}</td>
                                                                        <td>boolean(preceding-sibling::*[1] = 'bold')</td>
                                                                        <td>context=html/p/i</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${bold}</td>
                                                                        <td>${True}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>This keyword works only if lxml mode is taken into use when <a href="#Importing" class="name">importing</a> the library.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-child-elements">
                                                            <h2><a href="#get-child-elements">Get Child Elements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the child elements of the specified element as a list.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element whose children to return is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>All the direct child elements of the specified element are returned. If the element has no children, an empty list is returned.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${children} =</td>
                                                                        <td>Get Child Elements</td>
                                                                        <td>${XML}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Length Should Be</td>
                                                                        <td>${children}</td>
                                                                        <td>4</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${children} =</td>
                                                                        <td>Get Child Elements</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Empty</td>
                                                                        <td>${children}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element">
                                                            <h2><a href="#get-element">Get Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns an element in the ``source`` matching the ``xpath``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns an element in the <code>source</code> matching the <code>xpath</code>.</p>
                                                                <p>The <code>source</code> can be a path to an XML file, a string containing XML, or an already parsed XML element. The <code>xpath</code> specifies which element to find. See the <a href="#Introduction" class="name">introduction</a> for more details about both the possible sources and the supported xpath syntax.</p>
                                                                <p>The keyword fails if more, or less, than one element matches the <code>xpath</code>. Use <a href="#Get%20Elements" class="name">Get Elements</a> if you want all matching elements to be returned.
                                                                </p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${element} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>second</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${child} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${element}</td>
                                                                        <td>child</td>
                                                                    </tr>
                                                                </table>
                                                                <p><a href="#Parse%20Xml" class="name">Parse XML</a> is recommended for parsing XML when the whole structure is needed. It must be used if there is a need to configure how XML namespaces are handled.
                                                                </p>
                                                                <p>Many other keywords use this keyword internally, and keywords modifying XML are typically documented to both to modify the given source and to return it. Modifying the source does not apply if the source is
                                                                    given as a string. The XML structure parsed based on the string and then modified is nevertheless returned.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-attribute">
                                                            <h2><a href="#get-element-attribute">Get Element Attribute</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the named attribute of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element whose attribute to return is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>The value of the attribute <code>name</code> of the specified element is returned. If the element does not have such element, the <code>default</code> value is returned instead.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${attribute} =</td>
                                                                        <td>Get Element Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>xpath=first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${attribute}</td>
                                                                        <td>1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${attribute} =</td>
                                                                        <td>Get Element Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>xx</td>
                                                                        <td>xpath=first</td>
                                                                        <td>default=value</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${attribute}</td>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Get%20Element%20Attributes" class="name">Get Element Attributes</a>, <a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a>, <a href="#Element%20Attribute%20Should%20Match" class="name">Element Attribute Should Match</a> and <a href="#Element%20Should%20Not%20Have%20Attribute" class="name">Element Should Not Have
                                                                        Attribute</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-attributes">
                                                            <h2><a href="#get-element-attributes">Get Element Attributes</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns all attributes of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element whose attributes to return is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.
                                                                </p>
                                                                <p>Attributes are returned as a Python dictionary. It is a copy of the original attributes so modifying it has no effect on the XML structure.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${attributes} =</td>
                                                                        <td>Get Element Attributes</td>
                                                                        <td>${XML}</td>
                                                                        <td>first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dictionary Should Contain Key</td>
                                                                        <td>${attributes}</td>
                                                                        <td>id</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${attributes} =</td>
                                                                        <td>Get Element Attributes</td>
                                                                        <td>${XML}</td>
                                                                        <td>third</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Empty</td>
                                                                        <td>${attributes}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Get%20Element%20Attribute" class="name">Get Element Attribute</a> to get the value of a single attribute.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-count">
                                                            <h2><a href="#get-element-count">Get Element Count</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs how many elements the given ``xpath`` matches.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns and logs how many elements the given <code>xpath</code> matches.</p>
                                                                <p>Arguments <code>source</code> and <code>xpath</code> have exactly the same semantics as with <a href="#Get%20Elements" class="name">Get Elements</a> keyword that this keyword uses internally.
                                                                </p>
                                                                <p>See also <a href="#Element%20Should%20Exist" class="name">Element Should Exist</a> and <a href="#Element%20Should%20Not%20Exist" class="name">Element Should Not Exist</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-text">
                                                            <h2><a href="#get-element-text">Get Element Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns all text of the element, possibly whitespace normalized.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>normalize_whitespace</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element whose text to return is specified using <code>source</code> and <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get
                                                                        Element</a> keyword.</p>
                                                                <p>This keyword returns all the text of the specified element, including all the text its children and grandchildren contain. If the element has no text, an empty string is returned. The returned text is thus not
                                                                    always the same as the <a href="#text" class="name">text</a> attribute of the element.
                                                                </p>
                                                                <p>By default all whitespace, including newlines and indentation, inside the element is returned as-is. If <code>normalize_whitespace</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>),
                                                                    then leading and trailing whitespace is stripped, newlines and tabs converted to spaces, and multiple spaces collapsed into one. This is especially useful when dealing with HTML data.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${text} =</td>
                                                                        <td>Get Element Text</td>
                                                                        <td>${XML}</td>
                                                                        <td>first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${text}</td>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${text} =</td>
                                                                        <td>Get Element Text</td>
                                                                        <td>${XML}</td>
                                                                        <td>second/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Empty</td>
                                                                        <td>${text}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${paragraph} =</td>
                                                                        <td>Get Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>html/p</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${text} =</td>
                                                                        <td>Get Element Text</td>
                                                                        <td>${paragraph}</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${text}</td>
                                                                        <td>Text with bold and italics.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Get%20Elements%20Texts" class="name">Get Elements Texts</a>, <a href="#Element%20Text%20Should%20Be" class="name">Element Text Should Be</a> and <a href="#Element%20Text%20Should%20Match" class="name">Element Text Should Match</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-elements">
                                                            <h2><a href="#get-elements">Get Elements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns a list of elements in the ``source`` matching the ``xpath``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns a list of elements in the <code>source</code> matching the <code>xpath</code>.</p>
                                                                <p>The <code>source</code> can be a path to an XML file, a string containing XML, or an already parsed XML element. The <code>xpath</code> specifies which element to find. See the <a href="#Introduction" class="name">introduction</a> for more details.</p>
                                                                <p>Elements matching the <code>xpath</code> are returned as a list. If no elements match, an empty list is returned. Use <a href="#Get%20Element" class="name">Get Element</a> if you want to get exactly one match.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${children} =</td>
                                                                        <td>Get Elements</td>
                                                                        <td>${XML}</td>
                                                                        <td>third/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Length Should Be</td>
                                                                        <td>${children}</td>
                                                                        <td>2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${children} =</td>
                                                                        <td>Get Elements</td>
                                                                        <td>${XML}</td>
                                                                        <td>first/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Empty</td>
                                                                        <td>${children}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-elements-texts">
                                                            <h2><a href="#get-elements-texts">Get Elements Texts</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns text of all elements matching ``xpath`` as a list.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>normalize_whitespace</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns text of all elements matching <code>xpath</code> as a list.</p>
                                                                <p>The elements whose text to return is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Elements" class="name">Get Elements</a> keyword.
                                                                </p>
                                                                <p>The text of the matched elements is returned using the same logic as with <a href="#Get%20Element%20Text" class="name">Get Element Text</a>. This includes optional whitespace normalization using the <code>normalize_whitespace</code> option.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>@{texts} =</td>
                                                                        <td>Get Elements Texts</td>
                                                                        <td>${XML}</td>
                                                                        <td>third/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Length Should Be</td>
                                                                        <td>${texts}</td>
                                                                        <td>2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>@{texts}[0]</td>
                                                                        <td>more text</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>@{texts}[1]</td>
                                                                        <td>${EMPTY}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-element">
                                                            <h2><a href="#log-element">Log Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs the string representation of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>level</td>
                                                                        <td></td>
                                                                        <td>INFO</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element specified with <code>source</code> and <code>xpath</code> is first converted into a string using <a href="#Element%20To%20String" class="name">Element To String</a> keyword internally. The resulting
                                                                    string is then logged using the given <code>level</code>.</p>
                                                                <p>The logged string is also returned.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="parse-xml">
                                                            <h2><a href="#parse-xml">Parse Xml</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Parses the given XML file or string into an element structure.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keep_clark_notation</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strip_namespaces</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>source</code> can either be a path to an XML file or a string containing XML. In both cases the XML is parsed into ElementTree <a href="http://docs.python.org/library/xml.etree.elementtree.html#element-objects">element
                                                                        structure</a> and the root element is returned. Possible comments and processing instructions in the source XML are removed.</p>
                                                                <p>As discussed in <a href="#Handling%20XML%20namespaces" class="name">Handling XML namespaces</a> section, this keyword, by default, removes namespace information ElementTree has added to tag names and moves it
                                                                    into <code>xmlns</code> attributes. This typically eases handling XML documents with namespaces considerably. If you do not want that to happen, or want to avoid the small overhead of going through the element
                                                                    structure when your XML does not have namespaces, you can disable this feature by giving <code>keep_clark_notation</code> argument a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).</p>
                                                                <p>If you want to strip namespace information altogether so that it is not included even if XML is saved, you can give a true value to <code>strip_namespaces</code> argument.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${root} =</td>
                                                                        <td>Parse XML</td>
                                                                        <td>&lt;root&gt;&lt;child/&gt;&lt;/root&gt;</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${xml} =</td>
                                                                        <td>Parse XML</td>
                                                                        <td>${CURDIR}/test.xml</td>
                                                                        <td>keep_clark_notation=True</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${xml} =</td>
                                                                        <td>Parse XML</td>
                                                                        <td>${CURDIR}/test.xml</td>
                                                                        <td>strip_namespaces=True</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Get%20Element" class="name">Get Element</a> keyword if you want to get a certain element and not the whole structure. See <a href="#Parsing%20XML" class="name">Parsing XML</a> section for more
                                                                    details and examples.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-element">
                                                            <h2><a href="#remove-element">Remove Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes the element matching ``xpath`` from the ``source`` structure.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>remove_tail</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Removes the element matching <code>xpath</code> from the <code>source</code> structure.</p>
                                                                <p>The element to remove from the <code>source</code> is specified with <code>xpath</code> using the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword. The resulting XML structure
                                                                    is returned, and if the <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
                                                                <p>The keyword fails if <code>xpath</code> does not match exactly one element. Use <a href="#Remove%20Elements" class="name">Remove Elements</a> to remove all matched elements.</p>
                                                                <p>Element's tail text is not removed by default, but that can be changed by giving
                                                                    <code>remove_tail</code> a true value (see <a href="#Boolean%20arguments" class="name">Boolean
                                                                        arguments</a>). See <a href="#Element%20attributes" class="name">Element attributes</a> section for more information about <a href="#tail" class="name">tail</a> in general.
                                                                </p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Remove Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Not Exist</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Remove Element</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=html/p/b</td>
                                                                        <td>remove_tail=yes</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>Text with italics.</td>
                                                                        <td>xpath=html/p</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-element-attribute">
                                                            <h2><a href="#remove-element-attribute">Remove Element Attribute</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes attribute ``name`` from the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Removes attribute <code>name</code> from the specified element.</p>
                                                                <p>The element whose attribute to remove is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword. The resulting XML structure is returned, and if the
                                                                    <code>source</code> is an already parsed XML structure, it is also modified in place.
                                                                </p>
                                                                <p>It is not a failure to remove a non-existing attribute. Use <a href="#Remove%20Element%20Attributes" class="name">Remove Element Attributes</a> to remove all attributes and <a href="#Set%20Element%20Attribute" class="name">Set Element Attribute</a> to set them.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Remove Element Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Not Have Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Can only remove an attribute from a single element. Use <a href="#Remove%20Elements%20Attribute" class="name">Remove Elements Attribute</a> to remove an attribute of multiple elements in one call.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-element-attributes">
                                                            <h2><a href="#remove-element-attributes">Remove Element Attributes</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes all attributes from the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element whose attributes to remove is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword. The resulting XML structure is returned, and if the
                                                                    <code>source</code> is an already parsed XML structure, it is also modified in place.
                                                                </p>
                                                                <p>Use <a href="#Remove%20Element%20Attribute" class="name">Remove Element Attribute</a> to remove a single attribute and <a href="#Set%20Element%20Attribute" class="name">Set Element
                                                                        Attribute</a> to set them.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Remove Element Attributes</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Not Have Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Can only remove attributes from a single element. Use <a href="#Remove%20Elements%20Attributes" class="name">Remove Elements Attributes</a> to remove all attributes of multiple elements in one call.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-elements">
                                                            <h2><a href="#remove-elements">Remove Elements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes all elements matching ``xpath`` from the ``source`` structure.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>remove_tail</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Removes all elements matching <code>xpath</code> from the <code>source</code> structure.</p>
                                                                <p>The elements to remove from the <code>source</code> are specified with <code>xpath</code> using the same semantics as with <a href="#Get%20Elements" class="name">Get Elements</a> keyword. The resulting XML structure
                                                                    is returned, and if the <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
                                                                <p>It is not a failure if <code>xpath</code> matches no elements. Use <a href="#Remove%20Element" class="name">Remove Element</a> to remove exactly one element.</p>
                                                                <p>Element's tail text is not removed by default, but that can be changed by using
                                                                    <code>remove_tail</code> argument similarly as with <a href="#Remove%20Element" class="name">Remove Element</a>.
                                                                </p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Remove Elements</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=*/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Not Exist</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=second/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Not Exist</td>
                                                                        <td>${XML}</td>
                                                                        <td>xpath=third/child</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-elements-attribute">
                                                            <h2><a href="#remove-elements-attribute">Remove Elements Attribute</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes attribute ``name`` from the specified elements.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Removes attribute <code>name</code> from the specified elements.</p>
                                                                <p>Like <a href="#Remove%20Element%20Attribute" class="name">Remove Element Attribute</a> but removes the attribute of all elements matching the given <code>xpath</code>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-elements-attributes">
                                                            <h2><a href="#remove-elements-attributes">Remove Elements Attributes</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes all attributes from the specified elements.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Like <a href="#Remove%20Element%20Attributes" class="name">Remove Element Attributes</a> but removes all attributes of all elements matching the given <code>xpath</code>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-xml">
                                                            <h2><a href="#save-xml">Save Xml</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Saves the given element to the specified file.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>UTF-8</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element to save is specified with <code>source</code> using the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
                                                                <p>The file where the element is saved is denoted with <code>path</code> and the encoding to use with <code>encoding</code>. The resulting file always contains the XML declaration.</p>
                                                                <p>The resulting XML file may not be exactly the same as the original:</p>
                                                                <ul>
                                                                    <li>Comments and processing instructions are always stripped.</li>
                                                                    <li>Possible doctype and namespace prefixes are only preserved when <a href="#Using%20lxml" class="name">using lxml</a>.</li>
                                                                    <li>Other small differences are possible depending on the ElementTree or lxml version.</li>
                                                                </ul>
                                                                <p>Use <a href="#Element%20To%20String" class="name">Element To String</a> if you just need a string representation of the element.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-element-attribute">
                                                            <h2><a href="#set-element-attribute">Set Element Attribute</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets attribute ``name`` of the specified element to ``value``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sets attribute <code>name</code> of the specified element to <code>value</code>.</p>
                                                                <p>The element whose attribute to set is specified using <code>source</code> and
                                                                    <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword. The resulting XML structure is returned, and if the
                                                                    <code>source</code> is an already parsed XML structure, it is also modified in place.
                                                                </p>
                                                                <p>It is possible to both set new attributes and to overwrite existing. Use <a href="#Remove%20Element%20Attribute" class="name">Remove Element Attribute</a> or <a href="#Remove%20Element%20Attributes" class="name">Remove Element Attributes</a> for removing them.
                                                                </p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Element Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>attr</td>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Attribute Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>attr</td>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Element Attribute</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>new</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Attribute Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>id</td>
                                                                        <td>new</td>
                                                                        <td>xpath=first</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Can only set an attribute of a single element. Use <a href="#Set%20Elements%20Attribute" class="name">Set Elements Attribute</a> to set an attribute of multiple elements in one call.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-element-tag">
                                                            <h2><a href="#set-element-tag">Set Element Tag</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the tag of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tag</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element whose tag to set is specified using <code>source</code> and <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get
                                                                        Element</a> keyword. The resulting XML structure is returned, and if the <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Element Tag</td>
                                                                        <td>${XML}</td>
                                                                        <td>newTag</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${XML.tag}</td>
                                                                        <td>newTag</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Element Tag</td>
                                                                        <td>${XML}</td>
                                                                        <td>xxx</td>
                                                                        <td>xpath=second/child</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Exist</td>
                                                                        <td>${XML}</td>
                                                                        <td>second/xxx</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Should Not Exist</td>
                                                                        <td>${XML}</td>
                                                                        <td>second/child</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Can only set the tag of a single element. Use <a href="#Set%20Elements%20Tag" class="name">Set
                                                                        Elements Tag</a> to set the tag of multiple elements in one call.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-element-text">
                                                            <h2><a href="#set-element-text">Set Element Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets text and/or tail text of the specified element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tail</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The element whose text to set is specified using <code>source</code> and <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get
                                                                        Element</a> keyword. The resulting XML structure is returned, and if the <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
                                                                <p>Element's text and tail text are changed only if new <code>text</code> and/or <code>tail</code> values are given. See <a href="#Element%20attributes" class="name">Element attributes</a> section for more information
                                                                    about <a href="#text" class="name">text</a> and <a href="#tail" class="name">tail</a> in general.</p>
                                                                <p>Examples using <code>${XML}</code> structure from <a href="#Example" class="name">Example</a>:
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Element Text</td>
                                                                        <td>${XML}</td>
                                                                        <td>new text</td>
                                                                        <td>xpath=first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>new text</td>
                                                                        <td>xpath=first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Element Text</td>
                                                                        <td>${XML}</td>
                                                                        <td>tail=&amp;</td>
                                                                        <td>xpath=html/p/b</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>Text with bold&amp;italics.</td>
                                                                        <td>xpath=html/p</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Element Text</td>
                                                                        <td>${XML}</td>
                                                                        <td>slanted</td>
                                                                        <td>!!</td>
                                                                        <td>xpath=html/p/i</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Element Text Should Be</td>
                                                                        <td>${XML}</td>
                                                                        <td>Text with bold&amp;slanted!!</td>
                                                                        <td>xpath=html/p</td>
                                                                        <td>normalize_whitespace=yes</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Can only set the text/tail of a single element. Use <a href="#Set%20Elements%20Text" class="name">Set Elements Text</a> to set the text/tail of multiple elements in one call.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-elements-attribute">
                                                            <h2><a href="#set-elements-attribute">Set Elements Attribute</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets attribute ``name`` of the specified elements to ``value``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Sets attribute <code>name</code> of the specified elements to <code>value</code>.</p>
                                                                <p>Like <a href="#Set%20Element%20Attribute" class="name">Set Element Attribute</a> but sets the attribute of all elements matching the given <code>xpath</code>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-elements-tag">
                                                            <h2><a href="#set-elements-tag">Set Elements Tag</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the tag of the specified elements.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tag</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Like <a href="#Set%20Element%20Tag" class="name">Set Element Tag</a> but sets the tag of all elements matching the given <code>xpath</code>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-elements-text">
                                                            <h2><a href="#set-elements-text">Set Elements Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets text and/or tail text of the specified elements.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tail</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xpath</td>
                                                                        <td></td>
                                                                        <td>.</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Like <a href="#Set%20Element%20Text" class="name">Set Element Text</a> but sets the text or tail of all elements matching the given <code>xpath</code>.</p>
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
                                                    <li><a id="link-add-element" href="#add-element" class="">Add Element</a></li>
                                                    <li><a id="link-clear-element" href="#clear-element" class="">Clear Element</a></li>
                                                    <li><a id="link-copy-element" href="#copy-element" class="">Copy Element</a></li>
                                                    <li><a id="link-element-attribute-should-be" href="#element-attribute-should-be" class="">Element Attribute Should Be</a></li>
                                                    <li><a id="link-element-attribute-should-match" href="#element-attribute-should-match" class="">Element Attribute Should Match</a></li>
                                                    <li><a id="link-element-should-exist" href="#element-should-exist" class="">Element Should Exist</a></li>
                                                    <li><a id="link-element-should-not-exist" href="#element-should-not-exist" class="">Element Should Not Exist</a></li>
                                                    <li><a id="link-element-should-not-have-attribute" href="#element-should-not-have-attribute" class="">Element Should Not Have Attribute</a></li>
                                                    <li><a id="link-element-text-should-be" href="#element-text-should-be" class="">Element Text Should Be</a></li>
                                                    <li><a id="link-element-text-should-match" href="#element-text-should-match" class="">Element Text Should Match</a></li>
                                                    <li><a id="link-element-to-string" href="#element-to-string" class="">Element To String</a></li>
                                                    <li><a id="link-elements-should-be-equal" href="#elements-should-be-equal" class="">Elements Should Be Equal</a></li>
                                                    <li><a id="link-elements-should-match" href="#elements-should-match" class="">Elements Should Match</a></li>
                                                    <li><a id="link-evaluate-xpath" href="#evaluate-xpath" class="">Evaluate Xpath</a></li>
                                                    <li><a id="link-get-child-elements" href="#get-child-elements" class="">Get Child Elements</a></li>
                                                    <li><a id="link-get-element" href="#get-element" class="">Get Element</a></li>
                                                    <li><a id="link-get-element-attribute" href="#get-element-attribute" class="">Get Element Attribute</a></li>
                                                    <li><a id="link-get-element-attributes" href="#get-element-attributes" class="">Get Element Attributes</a></li>
                                                    <li><a id="link-get-element-count" href="#get-element-count" class="">Get Element Count</a></li>
                                                    <li><a id="link-get-element-text" href="#get-element-text" class="">Get Element Text</a></li>
                                                    <li><a id="link-get-elements" href="#get-elements" class="">Get Elements</a></li>
                                                    <li><a id="link-get-elements-texts" href="#get-elements-texts" class="">Get Elements Texts</a></li>
                                                    <li><a id="link-log-element" href="#log-element" class="">Log Element</a></li>
                                                    <li><a id="link-parse-xml" href="#parse-xml" class="">Parse Xml</a></li>
                                                    <li><a id="link-remove-element" href="#remove-element" class="">Remove Element</a></li>
                                                    <li><a id="link-remove-element-attribute" href="#remove-element-attribute" class="">Remove Element Attribute</a></li>
                                                    <li><a id="link-remove-element-attributes" href="#remove-element-attributes" class="">Remove Element Attributes</a></li>
                                                    <li><a id="link-remove-elements" href="#remove-elements" class="">Remove Elements</a></li>
                                                    <li><a id="link-remove-elements-attribute" href="#remove-elements-attribute" class="">Remove Elements Attribute</a></li>
                                                    <li><a id="link-remove-elements-attributes" href="#remove-elements-attributes" class="">Remove Elements Attributes</a></li>
                                                    <li><a id="link-save-xml" href="#save-xml" class="">Save Xml</a></li>
                                                    <li><a id="link-set-element-attribute" href="#set-element-attribute" class="">Set Element Attribute</a></li>
                                                    <li><a id="link-set-element-tag" href="#set-element-tag" class="">Set Element Tag</a></li>
                                                    <li><a id="link-set-element-text" href="#set-element-text" class="">Set Element Text</a></li>
                                                    <li><a id="link-set-elements-attribute" href="#set-elements-attribute" class="">Set Elements Attribute</a></li>
                                                    <li><a id="link-set-elements-tag" href="#set-elements-tag" class="">Set Elements Tag</a></li>
                                                    <li><a id="link-set-elements-text" href="#set-elements-text" class="">Set Elements Text</a></li>
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