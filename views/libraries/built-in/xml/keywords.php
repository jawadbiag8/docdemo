
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>XML</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/xml">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/xml/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="add-element">
                                        <h2><a href="#add-element">Add Element</a></h2>

                                        <div>
                                            <p class="shortdoc">Adds a child element to the specified element.</p>
                                            <h3>Arguments</h3>
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
                                                <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
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
                                            <h3>Arguments</h3>
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
                                            <p>Clearing the element means removing its text, attributes, and children. Element's tail text is not removed by default, but that can be changed by giving <code>clear_tail</code> a true value (see <a href="#Boolean%20arguments"
                                                    class="name">Boolean arguments</a>). See <a href="#Element%20attributes" class="name">Element attributes</a> section for more information about tail in general.</p>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
                                            <p>The keyword passes if the attribute <code>name</code> of the element is equal to the
                                                <code>expected</code> value, and otherwise it fails. The default error message can be overridden with the <code>message</code> argument.</p>
                                            <p>To test that the element does not have a certain attribute, Python <code>None</code> (i.e. variable <code>${NONE}</code>) can be used as the expected value. A cleaner alternative is using
                                                <a href="#Element%20Should%20Not%20Have%20Attribute" class="name">Element Should Not Have
                          Attribute</a>.</p>
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
                                            <h3>Arguments</h3>
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
                                            <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Pattern%20matching" class="name">Pattern matching</a>                                                section for more information.</p>
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
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code> matches one or more elements in the <code>source</code>. The default error message can be overridden with the <code>message</code> argument.</p>
                                            <p>See also <a href="#Element%20Should%20Not%20Exist" class="name">Element Should Not Exist</a> as well as <a href="#Get%20Element%20Count" class="name">Get Element Count</a> that this keyword uses internally.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="element-should-not-exist">
                                        <h2><a href="#element-should-not-exist">Element Should Not Exist</a></h2>

                                        <div>
                                            <p class="shortdoc">Verifies that no element match the given ``xpath``.</p>
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code> matches any element in the <code>source</code>. The default error message can be overridden with the <code>message</code> argument.</p>
                                            <p>See also <a href="#Element%20Should%20Exist" class="name">Element Should Exist</a> as well as
                                                <a href="#Get%20Element%20Count" class="name">Get Element Count</a> that this keyword uses internally.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="element-should-not-have-attribute">
                                        <h2><a href="#element-should-not-have-attribute">Element Should Not Have Attribute</a></h2>

                                        <div>
                                            <p class="shortdoc">Verifies that the specified element does not have attribute ``name``.</p>
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
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
                                            <p>See also <a href="#Get%20Element%20Attribute" class="name">Get Element Attribute</a>, <a href="#Get%20Element%20Attributes" class="name">Get Element Attributes</a>, <a href="#Element%20Text%20Should%20Be" class="name">Element Text Should Be</a>                                                and <a href="#Element%20Text%20Should%20Match" class="name">Element Text Should Match</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="element-text-should-be">
                                        <h2><a href="#element-text-should-be">Element Text Should Be</a></h2>

                                        <div>
                                            <p class="shortdoc">Verifies that the text of the specified element is ``expected``.</p>
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
                                            <p>The text to verify is got from the specified element using the same logic as with <a href="#Get%20Element%20Text" class="name">Get Element Text</a>. This includes optional whitespace normalization using the
                                                <code>normalize_whitespace</code> option.</p>
                                            <p>The keyword passes if the text of the element is equal to the <code>expected</code> value, and otherwise it fails. The default error message can be overridden with the <code>message</code> argument. Use <a href="#Element%20Text%20Should%20Match"
                                                    class="name">Element Text Should
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
                                            <h3>Arguments</h3>
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
                                            <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Pattern%20matching" class="name">Pattern matching</a>                                                section for more information.</p>
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
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
                                            <p>By default the string is returned as Unicode. If <code>encoding</code> argument is given any value, the string is returned as bytes in the specified encoding. The resulting string never contains the XML declaration.</p>
                                            <p>See also <a href="#Log%20Element" class="name">Log Element</a> and <a href="#Save%20Xml" class="name">Save XML</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="elements-should-be-equal">
                                        <h2><a href="#elements-should-be-equal">Elements Should Be Equal</a></h2>

                                        <div>
                                            <p class="shortdoc">Verifies that the given ``source`` element is equal to ``expected``.</p>
                                            <h3>Arguments</h3>
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
                                            <p>Both <code>source</code> and <code>expected</code> can be given as a path to an XML file, as a string containing XML, or as an already parsed XML element structure. See <a href="#Introduction" class="name">introduction</a>                                                for more information about parsing XML in general.
                                            </p>
                                            <p>The keyword passes if the <code>source</code> element and <code>expected</code> element are equal. This includes testing the tag names, texts, and attributes of the elements. By default also child elements are
                                                verified the same way, but this can be disabled by setting
                                                <code>exclude_children</code> to a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).</p>
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
                                                <a href="#tail" class="name">tail</a> text of the <code>&lt;i&gt;</code> element.</p>
                                            <p>See also <a href="#Elements%20Should%20Match" class="name">Elements Should Match</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="elements-should-match">
                                        <h2><a href="#elements-should-match">Elements Should Match</a></h2>

                                        <div>
                                            <p class="shortdoc">Verifies that the given ``source`` element matches ``expected``.</p>
                                            <h3>Arguments</h3>
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
                                            <p>Pattern matching is similar as matching files in a shell with <code>*</code>, <code>?</code> and <code>[chars]</code> acting as wildcards. See the <a href="#Pattern%20matching" class="name">Pattern matching</a>                                                section for more information.</p>
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
                                            <h3>Arguments</h3>
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

                                            <p>The element in which context the expression is executed is specified using <code>source</code> and <code>context</code> arguments. They have exactly the same semantics as <code>source</code> and <code>xpath</code>                                                arguments have with <a href="#Get%20Element" class="name">Get Element</a> keyword.
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
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
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
                                            <h3>Arguments</h3>
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
                                            <p>The <code>source</code> can be a path to an XML file, a string containing XML, or an already parsed XML element. The <code>xpath</code> specifies which element to find. See the <a href="#Introduction" class="name">introduction</a>                                                for more details about both the possible sources and the supported xpath syntax.</p>
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
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
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
                                            <p>See also <a href="#Get%20Element%20Attributes" class="name">Get Element Attributes</a>, <a href="#Element%20Attribute%20Should%20Be" class="name">Element Attribute Should Be</a>, <a href="#Element%20Attribute%20Should%20Match"
                                                    class="name">Element Attribute Should Match</a> and <a href="#Element%20Should%20Not%20Have%20Attribute" class="name">Element Should Not Have
                          Attribute</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-element-attributes">
                                        <h2><a href="#get-element-attributes">Get Element Attributes</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns all attributes of the specified element.</p>
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Element" class="name">Get Element</a> keyword.</p>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <p>See also <a href="#Get%20Elements%20Texts" class="name">Get Elements Texts</a>, <a href="#Element%20Text%20Should%20Be" class="name">Element Text Should Be</a> and <a href="#Element%20Text%20Should%20Match"
                                                    class="name">Element Text Should Match</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-elements">
                                        <h2><a href="#get-elements">Get Elements</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a list of elements in the ``source`` matching the ``xpath``.</p>
                                            <h3>Arguments</h3>
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
                                            <p>The <code>source</code> can be a path to an XML file, a string containing XML, or an already parsed XML element. The <code>xpath</code> specifies which element to find. See the <a href="#Introduction" class="name">introduction</a>                                                for more details.</p>
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
                                            <h3>Arguments</h3>
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
                                                <code>xpath</code>. They have exactly the same semantics as with <a href="#Get%20Elements" class="name">Get Elements</a> keyword.</p>
                                            <p>The text of the matched elements is returned using the same logic as with <a href="#Get%20Element%20Text" class="name">Get Element Text</a>. This includes optional whitespace normalization using the <code>normalize_whitespace</code>                                                option.</p>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                          arguments</a>). See <a href="#Element%20attributes" class="name">Element attributes</a> section for more information about <a href="#tail" class="name">tail</a> in general.</p>
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
                                            <h3>Arguments</h3>
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
                                                <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
                                            <p>It is not a failure to remove a non-existing attribute. Use <a href="#Remove%20Element%20Attributes" class="name">Remove Element Attributes</a> to remove all attributes and <a href="#Set%20Element%20Attribute"
                                                    class="name">Set Element Attribute</a> to set them.</p>
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
                                            <h3>Arguments</h3>
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
                                                <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
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
                                            <h3>Arguments</h3>
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
                                                <code>remove_tail</code> argument similarly as with <a href="#Remove%20Element" class="name">Remove Element</a>.</p>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                                <code>source</code> is an already parsed XML structure, it is also modified in place.</p>
                                            <p>It is possible to both set new attributes and to overwrite existing. Use <a href="#Remove%20Element%20Attribute" class="name">Remove Element Attribute</a> or <a href="#Remove%20Element%20Attributes" class="name">Remove Element Attributes</a>                                                for removing them.
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-add-element" href="#add-element" class="">Add Element</a><a id="link-clear-element" href="#clear-element" class="">Clear Element</a><a id="link-copy-element" href="#copy-element"
                                    class="">Copy Element</a><a id="link-element-attribute-should-be" href="#element-attribute-should-be" class="">Element Attribute Should Be</a><a id="link-element-attribute-should-match" href="#element-attribute-should-match"
                                    class="">Element Attribute Should Match</a><a id="link-element-should-exist" href="#element-should-exist" class="">Element Should
                  Exist</a><a id="link-element-should-not-exist" href="#element-should-not-exist" class="">Element Should Not Exist</a><a id="link-element-should-not-have-attribute" href="#element-should-not-have-attribute" class="">Element Should Not Have
                  Attribute</a><a id="link-element-text-should-be" href="#element-text-should-be" class="">Element Text Should Be</a><a id="link-element-text-should-match" href="#element-text-should-match" class="">Element Text Should Match</a>
                                <a id="link-element-to-string" href="#element-to-string" class="">Element To String</a><a id="link-elements-should-be-equal" href="#elements-should-be-equal" class="">Elements
                  Should Be Equal</a><a id="link-elements-should-match" href="#elements-should-match" class="">Elements Should Match</a><a id="link-evaluate-xpath" href="#evaluate-xpath" class="">Evaluate Xpath</a><a id="link-get-child-elements"
                                    href="#get-child-elements" class="">Get Child Elements</a><a id="link-get-element" href="#get-element" class="">Get
                  Element</a><a id="link-get-element-attribute" href="#get-element-attribute" class="">Get
                  Element Attribute</a><a id="link-get-element-attributes" href="#get-element-attributes" class="">Get Element Attributes</a><a id="link-get-element-count" href="#get-element-count" class="">Get Element Count</a>
                                <a id="link-get-element-text" href="#get-element-text" class="">Get Element Text</a><a id="link-get-elements" href="#get-elements" class="">Get Elements</a><a id="link-get-elements-texts" href="#get-elements-texts"
                                    class="">Get Elements Texts</a><a id="link-log-element" href="#log-element" class="">Log Element</a><a id="link-parse-xml" href="#parse-xml" class="">Parse Xml</a><a id="link-remove-element" href="#remove-element"
                                    class="">Remove Element</a>
                                <a id="link-remove-element-attribute" href="#remove-element-attribute" class="">Remove Element Attribute</a><a id="link-remove-element-attributes" href="#remove-element-attributes" class="">Remove
                  Element Attributes</a><a id="link-remove-elements" href="#remove-elements" class="">Remove Elements</a><a id="link-remove-elements-attribute" href="#remove-elements-attribute" class="">Remove Elements Attribute</a>
                                <a id="link-remove-elements-attributes" href="#remove-elements-attributes" class="">Remove Elements Attributes</a><a id="link-save-xml" href="#save-xml" class="">Save Xml</a><a id="link-set-element-attribute"
                                    href="#set-element-attribute" class="">Set Element
                  Attribute</a><a id="link-set-element-tag" href="#set-element-tag" class="">Set Element
                  Tag</a><a id="link-set-element-text" href="#set-element-text" class="">Set Element
                  Text</a><a id="link-set-elements-attribute" href="#set-elements-attribute" class="">Set
                  Elements Attribute</a><a id="link-set-elements-tag" href="#set-elements-tag" class="">Set
                  Elements Tag</a><a id="link-set-elements-text" href="#set-elements-text" class="">Set
                  Elements Text</a></div>
                        </aside>
                    </div>
                </article>
           
