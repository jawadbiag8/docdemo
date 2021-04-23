<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Crypto</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Crypto</li>
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
                                                <p>Library for common encryption and hashing operations.</p>
                                                <p>It uses the Fernet format for encryption. More specifically, it uses AES in CBC mode with a 128-bit key
                                                    for encryption and HMAC with SHA256 for authentication.
                                                </p>
                                                <p>To use the encryption features, generate a key with the command line utility <tt class="docutils literal"><span class="pre">Autosphere-crypto</span></tt> or with the keyword <tt class="docutils literal">Generate Key</tt>. Store the key in a secure
                                                    place, such as Autosphere Vault, and load it within the execution before calling encryption/decryption
                                                    keywords.</p>
                                                <p><strong>Example usage with Autosphere Vault</strong></p>
                                                <p>Create an encryption key with the CLI utility:</p>
                                                <pre class="code console literal-block"><span class="go">&gt; Autosphere-crypto key
rGx1edA07yz7uD08ChiPSunn8vaauRxw0pAbsal9zjM=</span>
</pre>
                                                <p>Store the key in Autosphere Vault, in this case with the name <tt class="docutils literal">EncryptionKey</tt>.</p>
                                                <p>Load the key from the vault before encryption operations:</p>
                                                <pre class="code robotframework literal-block"><span class="c">Use encryption key from vault</span><span class="p">    </span><span class="c">EncryptionKey</span><span class="p">
</span><span class="c">${encrypted}=</span><span class="p">   </span><span class="c">Encrypt file</span><span class="p">    </span><span class="c">orders.xlsx</span><span class="p">
</span><span class="c">Add work item file</span><span class="p">    </span><span class="c">${encrypted}</span><span class="p">    </span><span class="c">name=Orders</span>
</pre>
                                                <p>In another task, this same key can be used to decrypt the file:</p>
                                                <pre class="code robotframework literal-block"><span class="c">Use encryption key from vault</span><span class="p">    </span><span class="c">EncryptionKey</span><span class="p">
</span><span class="c">${encrypted}=</span><span class="p">    </span><span class="c">Get work item file</span><span class="p">    </span><span class="c">Orders</span><span class="p">
</span><span class="c">${orders}=</span><span class="p">   </span><span class="c">Decrypt file</span><span class="p">    </span><span class="c">${encrypted}</span>
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
                                                        <div class="keyword" id="decrypt-file">
                                                            <h2><a href="#decrypt-file">Decrypt File</a>
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Decrypt a file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output</td>
                                                                            <td>str, None</td>
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
                                                                                <th class="field-name">param path:</th>
                                                                                <td class="field-body">Path to encrypted input file</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param output:</th>
                                                                                <td class="field-body">Path to decrypted output file</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>If not output path is given, it will generate one from the input path.
                                                                        The resulting output path is returned.</p>
                                                                    <h4>Examples</h4>
                                                                    <pre><code class="line-numbers language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function">Use encryption key</span>    <span class="token variable"><span class="token punctuation">${</span>key<span class="token punctuation">}</span></span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>path<span class="token punctuation">}</span></span>=</span>    Decrypt file    orders.xlsx.enc
  <span class="token task-name function">Log</span>    Path to decrypted file is: <span class="token variable"><span class="token punctuation">${</span>path<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="decrypt-string">
                                                            <h2><a href="#decrypt-string">Decrypt String</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Decrypt a string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>data</td>
                                                                            <td>bytes, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>encoding</td>
                                                                            <td></td>
                                                                            <td>utf-8</td>
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
                                                                                <th class="field-name">param data:</th>
                                                                                <td class="field-body">Encrypted data as base64 string</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param encoding:</th>
                                                                                <td class="field-body">Original encoding of string</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Returns the decrypted string that is parsed with the given encoding,
                                                                        or if the encoding is <tt class="docutils literal">None</tt> the raw bytes are returned.</p>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function">Use encryption key</span>    <span class="token variable"><span class="token punctuation">${</span>key<span class="token punctuation">}</span></span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>text<span class="token punctuation">}</span></span>=</span>    Decrypt string    <span class="token variable"><span class="token punctuation">${</span>token<span class="token punctuation">}</span></span>
  <span class="token task-name function">Log</span>    Secret string is: <span class="token variable"><span class="token punctuation">${</span>text<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="encrypt-file">
                                                            <h2><a href="#encrypt-file">Encrypt File</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Encrypt a file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>output</td>
                                                                            <td>str, None</td>
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
                                                                                <th class="field-name">param path:</th>
                                                                                <td class="field-body">Path to source input file</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param output:</th>
                                                                                <td class="field-body">Path to encrypted output file</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>If not output path is given, it will generate one from the input path.
                                                                        The resulting output path is returned.</p>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function">Use encryption key</span>    <span class="token variable"><span class="token punctuation">${</span>key<span class="token punctuation">}</span></span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>path<span class="token punctuation">}</span></span>=</span>    Encrypt file    orders.xlsx
  <span class="token task-name function">Log</span>    Path to encrypted file is: <span class="token variable"><span class="token punctuation">${</span>path<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="encrypt-string">
                                                            <h2><a href="#encrypt-string">Encrypt String</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Encrypt a string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>text</td>
                                                                            <td>bytes, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>encoding</td>
                                                                            <td></td>
                                                                            <td>utf-8</td>
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
                                                                                <th class="field-name">param text:</th>
                                                                                <td class="field-body">Source text to encrypt</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param encoding:</th>
                                                                                <td class="field-body">Used text encoding</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function">Use encryption key</span>    <span class="token variable"><span class="token punctuation">${</span>key<span class="token punctuation">}</span></span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>token<span class="token punctuation">}</span></span>=</span>    Encrypt string    This is a secret, don't share it
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="generate-key">
                                                            <h2><a href="#generate-key">Generate Key</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Generate a Fernet encryption key as base64 string.</p>

                                                                <div class="document">

                                                                    <p>This key can be used for encryption/decryption operations
                                                                        with this library.</p>
                                                                    <p><em>NOTE:</em> Store the generated key in a secure place!
                                                                        If the key is lost, the encrypted data can not be recovered.
                                                                        If anyone else gains access to it, they can decrypt your data.</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="hash-file">
                                                            <h2><a href="#hash-file">Hash File</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Calculate a hash from a file, in base64 format.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>method</td>
                                                                            <td>Hash</td>
                                                                            <td>SHA1</td>
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
                                                                                <th class="field-name">param path:</th>
                                                                                <td class="field-body">Path to file</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param method:</th>
                                                                                <td class="field-body">The used hashing method</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>digest<span class="token punctuation">}</span></span>=</span>    Hash file    orders.xlsx    method=MD5
  <span class="token task-name function">Should not be equal</span>    <span class="token variable"><span class="token punctuation">${</span>digest<span class="token punctuation">}</span></span>    uSlyRHlbu8NzY29YMZhDUpdErP4=
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="hash-string">
                                                            <h2><a href="#hash-string">Hash String</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Calculate a hash from a string, in base64 format.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>text</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>method</td>
                                                                            <td>Hash</td>
                                                                            <td>SHA1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>encoding</td>
                                                                            <td></td>
                                                                            <td>utf-8</td>
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
                                                                                <th class="field-name">param text:</th>
                                                                                <td class="field-body">String to hash</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param method:</th>
                                                                                <td class="field-body">Used hashing method</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param encoding:</th>
                                                                                <td class="field-body">Used text encoding</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>digest<span class="token punctuation">}</span></span>=</span>    Hash string    A value that will be hashed
  <span class="token task-name function">Should be equal</span>    <span class="token variable"><span class="token punctuation">${</span>digest<span class="token punctuation">}</span></span>    uSlyRHlbu8NzY29YMZhDUpdErP4=
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="use-encryption-key">
                                                            <h2><a href="#use-encryption-key">Use Encryption Key</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Set key for all following encryption/decryption operations.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>key</td>
                                                                            <td>str</td>
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
                                                                                <th class="field-name">param key:</th>
                                                                                <td class="field-body">Encryption key as base64 string</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Assumes the given key has been generated previously using
                                                                        either the keyword <tt class="docutils literal">Generate Key</tt> or with the matching
                                                                        command
                                                                        line utility.</p>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>key<span class="token punctuation">}</span></span>=</span>    Read file    encryption.key
  <span class="token task-name function">Use encryption key</span>      <span class="token variable"><span class="token punctuation">${</span>key<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="use-encryption-key-from-vault">
                                                            <h2><a href="#use-encryption-key-from-vault">Use Encryption Key From Vault</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Load an encryption key from Robocorp Vault.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>name</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>key</td>
                                                                            <td>str, None</td>
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
                                                                                <th class="field-name">param name:</th>
                                                                                <td class="field-body">Name of secret in Vault</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param key:</th>
                                                                                <td class="field-body">Name of encryption key in secret</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>If the secret only has one value, the key argument is optional.</p>
                                                                    <h4>Examples</h4>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Secret with one value</span>
  <span class="token task-name function">Use encryption key from vault</span>    Encryption
  <span class="token comment"># Secret with multiple values</span>
  <span class="token task-name function">Use encryption key from vault</span>    name=Encryption    key=CryptoKey
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span></span></code></pre>
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
                                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" id="myInput" onkeyup="myFunction()" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div class="ps ps--active-y">
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-decrypt-file" href="#decrypt-file" class="">Decrypt File</a></li>
                                                    <li><a id="link-decrypt-string" href="#decrypt-string" class="">Decrypt String</a></li>
                                                    <li><a id="link-encrypt-file" href="#encrypt-file" class="">Encrypt File</a></li>
                                                    <li><a id="link-encrypt-string" href="#encrypt-string" class="">Encrypt String</a></li>
                                                    <li><a id="link-generate-key" href="#generate-key" class="">Generate Key</a></li>
                                                    <li><a id="link-hash-file" href="#hash-file" class="">Hash File</a></li>
                                                    <li><a id="link-hash-string" href="#hash-string" class="">Hash String</a></li>
                                                    <li><a id="link-use-encryption-key" href="#use-encryption-key" class="">Use Encryption Key</a></li>
                                                    <li><a id="link-use-encryption-key-from-vault" href="#use-encryption-key-from-vault" class="">Use Encryption Key From Vault</a></li>
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