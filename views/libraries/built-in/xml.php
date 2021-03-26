<article class="sc-hBEYos dVNWBU">
    <div class="sc-kLgntA iHaOcn">
        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z" fill="#002642"></path>
            </svg><a href="">Built-in</a></nav>
        <div class="sc-iktFzd gaGeRK">
            <h1>XML</h1>
        </div>
        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/xml">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/xml/keywords">Keywords</a></nav>
    </div>
    <div class="sc-jJEJSO laquCT">
        <div class="sc-hiSbYr XqbgT">
            <div class="sc-jcVebW hrCIoP">
                <div>
                    <p>Autosphere test library for verifying and modifying XML documents.</p>
                    <p>As the name implies, <i>XML</i> is a test library for verifying contents of XML files. In practice it is a pretty thin wrapper on top of Python's <a href="http://docs.python.org/library/xml.etree.elementtree.html">ElementTree XML API</a>.</p>
                    <p>The library has the following main usages:</p>
                    <ul>
                        <li>Parsing an XML file, or a string containing XML, into an XML element structure and finding certain elements from it for for further analysis (e.g. <a href="#Parse%20Xml" class="name">Parse XML</a> and <a href="#Get%20Element" class="name">Get Element</a> keywords).</li>
                        <li>Getting text or attributes of elements (e.g. <a href="#Get%20Element%20Text" class="name">Get Element
                                Text</a> and <a href="#Get%20Element%20Attribute" class="name">Get Element Attribute</a>).</li>
                        <li>Directly verifying text, attributes, or whole elements (e.g <a href="#Element%20Text%20Should%20Be" class="name">Element Text Should Be</a> and <a href="#Elements%20Should%20Be%20Equal" class="name">Elements Should Be Equal</a>).</li>
                        <li>Modifying XML and saving it (e.g. <a href="#Set%20Element%20Text" class="name">Set Element Text</a>, <a href="#Add%20Element" class="name">Add Element</a> and <a href="#Save%20Xml" class="name">Save
                                XML</a>).</li>
                    </ul>
                    <h3 id="Table of contents">Table of contents</h3>
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
                    <h2 id="Parsing XML">Parsing XML</h2>
                    <p>XML can be parsed into an element structure using <a href="#Parse%20Xml" class="name">Parse XML</a> keyword. The XML to be parsed can be specified using a path to an XML file or as a string or bytes that contain XML directly. The keyword returns
                        the root element of the structure, which then contains other elements as its children and their children. Possible comments and processing instructions in the source XML are removed.
                    </p>
                    <p>XML is not validated during parsing even if has a schema defined. How possible doctype elements are handled otherwise depends on the used XML module and on the platform. The standard ElementTree strips doctypes altogether but when <a href="#Using%20lxml" class="name">using lxml</a> they are preserved when XML is saved.
                    </p>
                    <p>The element structure returned by <a href="#Parse%20Xml" class="name">Parse XML</a>, as well as elements returned by keywords such as <a href="#Get%20Element" class="name">Get Element</a>, can be used as the
                        <code>source</code> argument with other keywords. In addition to an already parsed XML structure, other keywords also accept paths to XML files and strings containing XML similarly as <a href="#Parse%20Xml" class="name">Parse XML</a>. Notice
                        that keywords that modify XML do not write those changes back to disk even if the source would be given as a path to a file. Changes must always saved explicitly using <a href="#Save%20Xml" class="name">Save XML</a> keyword.
                    </p>
                    <p>When the source is given as a path to a file, the forward slash character (<code>/</code>) can be used as the path separator regardless the operating system. On Windows also the backslash works, but it the test data it needs to be escaped by doubling
                        it (<code>\\</code>). Using the built-in variable <code>${/}</code> naturally works too.</p>

                    <h2 id="Using lxml">Using lxml</h2>
                    <p>By default this library uses Python's standard <a href="http://docs.python.org/library/xml.etree.elementtree.html">ElementTree</a> module for parsing XML, but it can be configured to use <a href="http://lxml.de">lxml</a> module instead when
                        <a href="#Importing" class="name">importing</a> the library. The resulting element structure has same API regardless which module is used for parsing.
                    </p>
                    <p>The main benefits of using lxml is that it supports richer xpath syntax than the standard ElementTree and enables using <a href="#Evaluate%20Xpath" class="name">Evaluate Xpath</a> keyword. It also preserves the doctype and possible namespace prefixes
                        saving XML.</p>
                    <h2 id="Example">Example</h2>
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
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
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
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                                <td><a href="#Element%20Text%20Should%20Be" class="name">Element Text Should Be</a></td>
                                <td>${first}</td>
                                <td>text</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a></td>
                                <td>${first}</td>
                                <td>id</td>
                                <td>1</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a></td>
                                <td>${root}</td>
                                <td>id</td>
                                <td>1</td>
                                <td>xpath=first</td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a></td>
                                <td>${XML}</td>
                                <td>id</td>
                                <td>1</td>
                                <td>xpath=first</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Notice that in the example three last lines are equivalent. Which one to use in practice depends on which other elements you need to get or verify. If you only need to do one verification, using the last line alone would suffice. If more verifications
                        are needed, parsing the XML with <a href="#Parse%20Xml" class="name">Parse XML</a> only once would be more efficient.</p>
                    <h2 id="Finding elements with xpath">Finding elements with xpath</h2>
                    <p>ElementTree, and thus also this library, supports finding elements using xpath expressions. ElementTree does not, however, support the full xpath standard. The supported xpath syntax is explained below and <a href="https://docs.python.org/library/xml.etree.elementtree.html#xpath-support">ElementTree
                            documentation</a> provides more details. In the examples <code>${XML}</code> refers to the same XML structure as in the earlier example.</p>
                    <p>If lxml support is enabled when <a href="#Importing" class="name">importing</a> the library, the whole xpath 1.0 standard is supported. That includes everything listed below but also lot of other useful constructs.</p>
                    <h3 id="Tag names">Tag names</h3>
                    <p>When just a single tag name is used, xpath matches all direct child elements that have that tag name.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${elem} =</td>
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                                <td><a href="#Get%20Elements" class="name">Get Elements</a></td>
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
                    <h3 id="Paths">Paths</h3>
                    <p>Paths are created by combining tag names with a forward slash (<code>/</code>). For example,
                        <code>parent/child</code> matches all <code>child</code> elements under <code>parent</code> element. Notice that if there are multiple <code>parent</code> elements that all have <code>child</code> elements,
                        <code>parent/child</code> xpath will match all these <code>child</code> elements.
                    </p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${elem} =</td>
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                    <h3 id="Wildcards">Wildcards</h3>
                    <p>An asterisk (<code>*</code>) can be used in paths instead of a tag name to denote any element.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>@{children} =</td>
                                <td><a href="#Get%20Elements" class="name">Get Elements</a></td>
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
                    <h3 id="Current element">Current element</h3>
                    <p>The current element is denoted with a dot (<code>.</code>). Normally the current element is implicit and does not need to be included in the xpath.</p>
                    <h3 id="Parent element">Parent element</h3>
                    <p>The parent element of another element is denoted with two dots (<code>..</code>). Notice that it is not possible to refer to the parent of the current element.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${elem} =</td>
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                    <h3 id="Search all sub elements">Search all sub elements</h3>
                    <p>Two forward slashes (<code>//</code>) mean that all sub elements, not only the direct children, are searched. If the search is started from the current element, an explicit dot is required.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>@{elements} =</td>
                                <td><a href="#Get%20Elements" class="name">Get Elements</a></td>
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
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                    <h3 id="Predicates">Predicates</h3>
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
                    <h2 id="Element attributes">Element attributes</h2>
                    <p>All keywords returning elements, such as <a href="#Parse%20Xml" class="name">Parse XML</a>, and <a href="#Get%20Element" class="name">Get Element</a>, return ElementTree's <a href="http://docs.python.org/library/xml.etree.elementtree.html#element-objects">Element objects</a>.
                        These elements can be used as inputs for other keywords, but they also contain several useful attributes that can be accessed directly using the extended variable syntax.</p>
                    <p>The attributes that are both useful and convenient to use in the test data are explained below. Also other attributes, including methods, can be accessed, but that is typically better to do in custom libraries than directly in the test data.</p>
                    <p>The examples use the same <code>${XML}</code> structure as the earlier examples.</p>
                    <h3 id="tag">tag</h3>
                    <p>The tag of the element.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${root} =</td>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Be Equal</span></td>
                                <td>${root.tag}</td>
                                <td>example</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="text">text</h3>
                    <p>The text that the element contains or Python <code>None</code> if the element has no text. Notice that the text <i>does not</i> contain texts of possible child elements nor text after or between children. Notice also that in XML whitespace is
                        significant, so the text contains also possible indentation and newlines. To get also text of the possible children, optionally whitespace normalized, use <a href="#Get%20Element%20Text" class="name">Get Element Text</a> keyword.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${1st} =</td>
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                    <h3 id="tail">tail</h3>
                    <p>The text after the element before the next opening or closing tag. Python <code>None</code> if the element has no tail. Similarly as with <code>text</code>, also <code>tail</code> contains possible indentation and newlines.
                    </p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${b} =</td>
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                    <h3 id="attrib">attrib</h3>
                    <p>A Python dictionary containing attributes of the element.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${2nd} =</td>
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                                <td><a href="#Get%20Element" class="name">Get Element</a></td>
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
                    <h2 id="Handling XML namespaces">Handling XML namespaces</h2>
                    <p>ElementTree and lxml handle possible namespaces in XML documents by adding the namespace URI to tag names in so called Clark Notation. That is inconvenient especially with xpaths, and by default this library strips those namespaces away and moves
                        them to <code>xmlns</code> attribute instead. That can be avoided by passing
                        <code>keep_clark_notation</code> argument to <a href="#Parse%20Xml" class="name">Parse XML</a> keyword. Alternatively <a href="#Parse%20Xml" class="name">Parse XML</a> supports stripping namespace information altogether by using <code>strip_namespaces</code> argument. The pros and cons of different approaches are discussed in more detail below.
                    </p>
                    <h3 id="How ElementTree handles namespaces">How ElementTree handles namespaces</h3>
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
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${NS}</td>
                                <td>keep_clark_notation=yes</td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Be Equal</span></td>
                                <td>${root.tag}</td>

                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Should%20Exist" class="name">Element Should Exist</a></td>
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
                    <h3 id="Default namespace handling">Default namespace handling</h3>
                    <p>Because the way ElementTree handles namespaces makes xpaths so complicated, this library, by default, strips namespaces from tag names and moves that information back to <code>xmlns</code> attributes. How this works in practice is shown by the
                        example below, where <code>${NS}</code> variable contains the same XML document as in the previous example.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${root} =</td>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
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
                                <td><a href="#Element%20Should%20Exist" class="name">Element Should Exist</a></td>
                                <td>${root}</td>
                                <td>template/html</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a></td>
                                <td>${root}</td>
                                <td>xmlns</td>
                                <td><a href="http://www.w3.org/1999/XSL/Transform">http://www.w3.org/1999/XSL/Transform</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a></td>
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
                    <h3 id="Namespaces when using lxml">Namespaces when using lxml</h3>
                    <p>This library handles namespaces same way both when <a href="#Using%20lxml" class="name">using lxml</a> and when not using it. There are, however, differences how lxml internally handles namespaces compared to the standard ElementTree. The main
                        difference is that lxml stores information about namespace prefixes and they are thus preserved if XML is saved. Another visible difference is that lxml includes namespace information in child elements got with <a href="#Get%20Element" class="name">Get Element</a> if the parent element has namespaces.
                    </p>
                    <h3 id="Stripping namespaces altogether">Stripping namespaces altogether</h3>
                    <p>Because namespaces often add unnecessary complexity, <a href="#Parse%20Xml" class="name">Parse XML</a> supports stripping them altogether by using <code>strip_namespaces=True</code>. When this option is enabled, namespaces are not shown anywhere
                        nor are they included if XML is saved.</p>
                    <h3 id="Attribute namespaces">Attribute namespaces</h3>
                    <p>Attributes in XML documents are, by default, in the same namespaces as the element they belong to. It is possible to use different namespaces by using prefixes, but this is pretty rare.</p>
                    <p>If an attribute has a namespace prefix, ElementTree will replace it with Clark Notation the same way it handles elements. Because stripping namespaces from attributes could cause attribute conflicts, this library does not handle attribute namespaces
                        at all. Thus the following example works the same way regardless how namespaces are handled.</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>${root} =</td>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>&lt;root id="1" ns:id="2" xmlns:ns="http://my.ns"/&gt;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a></td>
                                <td>${root}</td>
                                <td>id</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a></td>
                                <td>${root}</td>
                                <td>{<a href="http://my.ns}id">http://my.ns}id</a></td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 id="Boolean arguments">Boolean arguments</h2>
                    <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
                        <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Other strings are considered true regardless their value, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                    </p>
                    <p>True examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                                <td>keep_clark_notation=True</td>
                                <td># Strings are generally true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                                <td>keep_clark_notation=yes</td>
                                <td># Same as the above.</td>
                            </tr>
                            <tr>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                                <td>keep_clark_notation=${TRUE}</td>
                                <td># Python <code>True</code> is true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
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
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                                <td>keep_clark_notation=False</td>
                                <td># String <code>false</code> is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                                <td>keep_clark_notation=no</td>
                                <td># Also string <code>no</code> is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                                <td>keep_clark_notation=${EMPTY}</td>
                                <td># Empty string is false.</td>
                            </tr>
                            <tr>
                                <td><a href="#Parse%20Xml" class="name">Parse XML</a></td>
                                <td>${XML}</td>
                                <td>keep_clark_notation=${FALSE}</td>
                                <td># Python <code>False</code> is false.</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 id="Pattern matching">Pattern matching</h3>
                    <p>Some keywords, for example <a href="#Elements%20Should%20Match" class="name">Elements Should Match</a>, support so called <a href="http://en.wikipedia.org/wiki/Glob_(programming)">glob patterns</a> where:</p>
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
</article>