<section class="content">
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
                                    <li class="active">DateTime</li>
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
                                            <p>A test library for handling date and time values.</p>
                                            <p><code>DateTime</code> is a Autosphere standard library that supports creating and converting date and
                                                time values (e.g. <a href="documantation.php?page=libraries&node=built-in&subnode=datetime#get-current-date" id="link-get-current-date" class="name">Get Current Date</a>, <a href="documantation.php?page=libraries&node=built-in&subnode=datetime#convert-time" id="link-convert-time" class="name">Convert Time</a>), as well as doing simple calculations with them
                                                (e.g. <a href="documantation.php?page=libraries&node=built-in&subnode=datetime#subtract-time-from-date" id="link-subtract-time-from-date" class="name">Subtract Time From Date</a>, <a href="documantation.php?page=libraries&node=built-in&subnode=datetime#add-time-to-time" id="link-add-time-to-time" class="name">Add Time To Time</a>). It supports dates and times in
                                                various formats, and can also be used by other libraries programmatically.</p>
                                            <h4 id="Table of contents">Table of contents</h4>
                                            <ul>
                                                <li><a href="#Terminology" class="name">Terminology</a></li>
                                                <li><a href="#Date%20formats" class="name">Date formats</a></li>
                                                <li><a href="#Time%20formats" class="name">Time formats</a></li>
                                                <li><a href="#Millisecond%20handling" class="name">Millisecond handling</a></li>
                                                <li><a href="#Programmatic%20usage" class="name">Programmatic usage</a></li>
                                                <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
                                                <li><a href="#Keywords" class="name">Keywords</a></li>
                                            </ul>
                                            <h4 id="Terminology">Terminology</h4>
                                            <p>In the context of this library, <code>date</code> and <code>time</code> generally have following meanings:
                                            </p>
                                            <ul>
                                                <li><code>date</code>: An entity with both date and time components but without any timezone information.
                                                    For example, <code>2014-06-11 10:07:42</code>.</li>
                                                <li><code>time</code>: A time interval. For example, <code>1 hour 20 minutes</code> or
                                                    <code>01:20:00</code>.
                                                </li>
                                            </ul>
                                            <p>This terminology differs from what Python's standard <a href="http://docs.python.org/library/datetime.html">datetime</a> module uses. Basically its <a href="http://docs.python.org/library/datetime.html#datetime-objects">datetime</a> and <a href="http://docs.python.org/library/datetime.html#timedelta-objects">timedelta</a> objects match
                                                <code>date</code> and <code>time</code> as defined by this library.
                                            </p>
                                            <h4 id="Date formats">Date formats</h4>
                                            <p>Dates can given to and received from keywords in <a href="#Timestamp" class="name">timestamp</a>, <a href="#Custom%20timestamp" class="name">custom timestamp</a>, <a href="#Python%20datetime" class="name">Python datetime</a> and <a href="#Epoch%20time" class="name">epoch time</a> formats. These
                                                formats are discussed thoroughly in subsequent sections.</p>
                                            <p>Input format is determined automatically based on the given date except when using custom timestamps, in
                                                which case it needs to be given using <code>date_format</code> argument. Default result format is timestamp,
                                                but it can be overridden using <code>result_format</code> argument.</p>
                                            <h4 id="Timestamp">Timestamp</h4>
                                            <p>If a date is given as a string, it is always considered to be a timestamp. If no custom formatting is given
                                                using <code>date_format</code> argument, the timestamp is expected to be in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601</a> like format
                                                <code>YYYY-MM-DD hh:mm:ss.mil</code>, where any non-digit character can be used as a separator or separators
                                                can be omitted altogether. Additionally, only the date part is mandatory, all possibly missing time
                                                components are considered to be zeros.
                                            </p>
                                            <p>Dates can also be returned in the same <code>YYYY-MM-DD hh:mm:ss.mil</code> format by using
                                                <code>timestamp</code> value with <code>result_format</code> argument. This is also the default format that
                                                keywords returning dates use. Milliseconds can be excluded using <code>exclude_millis</code> as explained in
                                                <a href="#Millisecond%20handling" class="name">Millisecond handling</a> section.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${date1} =</td>
                                                        <td>Convert Date</td>
                                                        <td>2014-06-11 10:07:42.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${date2} =</td>
                                                        <td>Convert Date</td>
                                                        <td>20140611 100742</td>
                                                        <td>result_format=timestamp</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date1}</td>
                                                        <td>${date2}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${date} =</td>
                                                        <td>Convert Date</td>
                                                        <td>20140612 12:57</td>
                                                        <td>exclude_millis=yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date}</td>
                                                        <td>2014-06-12 12:57:00</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Custom timestamp">Custom timestamp</h4>
                                            <p>It is possible to use custom timestamps in both input and output. The custom format is same as accepted by
                                                Python's <a href="http://docs.python.org/library/datetime.html#strftime-strptime-behavior">datatime.strptime</a>
                                                function. For example, the default timestamp discussed in the previous section would match
                                                <code>%Y-%m-%d %H:%M:%S.%f</code>.
                                            </p>
                                            <p>When using a custom timestamp in input, it must be specified using <code>date_format</code> argument. The
                                                actual input value must be a string that matches the specified format exactly. When using a custom timestamp
                                                in output, it must be given using <code>result_format</code> argument.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${date} =</td>
                                                        <td>Convert Date</td>
                                                        <td>28.05.2014 12:05</td>
                                                        <td>date_format=%d.%m.%Y %H:%M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date}</td>
                                                        <td>2014-05-28 12:05:00.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${date} =</td>
                                                        <td>Convert Date</td>
                                                        <td>${date}</td>
                                                        <td>result_format=%d.%m.%Y</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date}</td>
                                                        <td>28.05.2014</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Notice that locale aware directives like <code>%b</code> do not work correctly with Jython on non-English
                                                locales: <a href="http://bugs.jython.org/issue2285">http://bugs.jython.org/issue2285</a></p>
                                            <h4 id="Python datetime">Python datetime</h4>
                                            <p>Python's standard <a href="http://docs.python.org/library/datetime.html#datetime-objects">datetime</a>
                                                objects can be used both in input and output. In input they are recognized automatically, and in output it
                                                is possible to get them by giving <code>datetime</code> value to <code>result_format</code> argument.</p>
                                            <p>One nice benefit with datetime objects is that they have different time components available as attributes
                                                that can be easily accessed using the extended variable syntax.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${datetime} =</td>
                                                        <td>Convert Date</td>
                                                        <td>2014-06-11 10:07:42.123</td>
                                                        <td>datetime</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal As Integers</td>
                                                        <td>${datetime.year}</td>
                                                        <td>2014</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal As Integers</td>
                                                        <td>${datetime.month}</td>
                                                        <td>6</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal As Integers</td>
                                                        <td>${datetime.day}</td>
                                                        <td>11</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal As Integers</td>
                                                        <td>${datetime.hour}</td>
                                                        <td>10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal As Integers</td>
                                                        <td>${datetime.minute}</td>
                                                        <td>7</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal As Integers</td>
                                                        <td>${datetime.second}</td>
                                                        <td>42</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal As Integers</td>
                                                        <td>${datetime.microsecond}</td>
                                                        <td>123000</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Epoch time">Epoch time</h4>
                                            <p>Epoch time is the time in seconds since the <a href="http://en.wikipedia.org/wiki/Unix_time">UNIX epoch</a>
                                                i.e. 00:00:00.000 (UTC) 1 January 1970. To give a date in epoch time, it must be given as a number (integer
                                                or float), not as a string. To return a date in epoch time, it is possible to use <code>epoch</code> value
                                                with <code>result_format</code> argument. Epoch time is returned as a floating point number.</p>
                                            <p>Notice that epoch time itself is independent on timezones and thus same around the world at a certain time.
                                                What local time a certain epoch time matches obviously then depends on the timezone. For example, examples
                                                below were tested in Finland but verifications would fail on other timezones.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${date} =</td>
                                                        <td>Convert Date</td>
                                                        <td>${1000000000}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date}</td>
                                                        <td>2001-09-09 04:46:40.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${date} =</td>
                                                        <td>Convert Date</td>
                                                        <td>2014-06-12 13:27:59.279</td>
                                                        <td>epoch</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date}</td>
                                                        <td>${1402568879.279}</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Earliest supported date">Earliest supported date</h4>
                                            <p>The earliest date that is supported depends on the date format and to some extend on the platform:</p>
                                            <ul>
                                                <li>Timestamps support year 1900 and above.</li>
                                                <li>Python datetime objects support year 1 and above.</li>
                                                <li>Epoch time supports 1970 and above on Windows with Python and IronPython.</li>
                                                <li>On other platforms epoch time supports 1900 and above or even earlier.</li>
                                            </ul>

                                            <h4 id="Time formats">Time formats</h4>
                                            <p>Similarly as dates, times can be given to and received from keywords in various different formats. Supported
                                                formats are <a href="#Number" class="name">number</a>, <a href="#Time%20string" class="name">time string</a>
                                                (verbose and compact), <a href="#Timer%20string" class="name">timer string</a> and <a href="#Python%20timedelta" class="name">Python timedelta</a>.</p>
                                            <p>Input format for time is always determined automatically based on the input. Result format is number by
                                                default, but it can be customised using <code>result_format</code> argument.</p>
                                            <h4 id="Number">Number</h4>
                                            <p>Time given as a number is interpreted to be seconds. It can be given either as an integer or a float, or it
                                                can be a string that can be converted to a number.</p>
                                            <p>To return a time as a number, <code>result_format</code> argument must have value <code>number</code>, which
                                                is also the default. Returned number is always a float.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>3.14</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>${3.14}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>${time}</td>
                                                        <td>result_format=number</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>${3.14}</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Time string">Time string</h4>
                                            <p>Time strings are strings in format like <code>1 minute 42 seconds</code> or <code>1min 42s</code>. The basic
                                                idea of this format is having first a number and then a text specifying what time that number represents.
                                                Numbers can be either integers or floating point numbers, the whole format is case and space insensitive,
                                                and it is possible to add a minus prefix to specify negative times. The available time specifiers are:</p>
                                            <ul>
                                                <li><code>days</code>, <code>day</code>, <code>d</code></li>
                                                <li><code>hours</code>, <code>hour</code>, <code>h</code></li>
                                                <li><code>minutes</code>, <code>minute</code>, <code>mins</code>, <code>min</code>, <code>m</code></li>
                                                <li><code>seconds</code>, <code>second</code>, <code>secs</code>, <code>sec</code>, <code>s</code></li>
                                                <li><code>milliseconds</code>, <code>millisecond</code>, <code>millis</code>, <code>ms</code></li>
                                            </ul>
                                            <p>When returning a time string, it is possible to select between <code>verbose</code> and <code>compact</code>
                                                representations using <code>result_format</code> argument. The verbose format uses long specifiers
                                                <code>day</code>, <code>hour</code>, <code>minute</code>, <code>second</code> and <code>millisecond</code>,
                                                and adds <code>s</code> at the end when needed. The compact format uses shorter specifiers <code>d</code>,
                                                <code>h</code>, <code>min</code>, <code>s</code> and <code>ms</code>, and even drops the space between the
                                                number and the specifier.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>1 minute 42 seconds</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>${102}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>4200</td>
                                                        <td>verbose</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>1 hour 10 minutes</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>- 1.5 hours</td>
                                                        <td>compact</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>- 1h 30min</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Timer string">Timer string</h4>
                                            <p>Timer string is a string given in timer like format <code>hh:mm:ss.mil</code>. In this format both hour and
                                                millisecond parts are optional, leading and trailing zeros can be left out when they are not meaningful, and
                                                negative times can be represented by adding a minus prefix.</p>
                                            <p>To return a time as timer string, <code>result_format</code> argument must be given value <code>timer</code>.
                                                Timer strings are by default returned in full <code>hh:mm:ss.mil</code> format, but milliseconds can be
                                                excluded using <code>exclude_millis</code> as explained in <a href="#Millisecond%20handling" class="name">Millisecond handling</a> section.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>01:42</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>${102}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>01:10:00.123</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>${4200.123}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>102</td>
                                                        <td>timer</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>00:01:42.000</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>-101.567</td>
                                                        <td>timer</td>
                                                        <td>exclude_millis=yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>-00:01:42</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Python timedelta">Python timedelta</h4>
                                            <p>Python's standard <a href="http://docs.python.org/library/datetime.html#datetime.timedelta">timedelta</a>
                                                objects are also supported both in input and in output. In input they are recognized automatically, and in
                                                output it is possible to receive them by giving <code>timedelta</code> value to <code>result_format</code>
                                                argument.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${timedelta} =</td>
                                                        <td>Convert Time</td>
                                                        <td>01:10:02.123</td>
                                                        <td>timedelta</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${timedelta.total_seconds()}</td>
                                                        <td>${4202.123}</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Millisecond handling">Millisecond handling</h4>
                                            <p>This library handles dates and times internally using the precision of the given input. With <a href="#Timestamp" class="name">timestamp</a>, <a href="#Time%20string" class="name">time string</a>, and
                                                <a href="#Timer%20string" class="name">timer string</a> result formats seconds are, however, rounded to
                                                millisecond accuracy. Milliseconds may also be included even if there would be none.
                                            </p>
                                            <p>All keywords returning dates or times have an option to leave milliseconds out by giving a true value to
                                                <code>exclude_millis</code> argument. If the argument is given as a string, it is considered true unless it
                                                is empty or case-insensitively equal to <code>false</code>, <code>none</code> or <code>no</code>. Other
                                                argument types are tested using same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as
                                                    in Python</a>.
                                            </p>
                                            <p>When milliseconds are excluded, seconds in returned dates and times are rounded to the nearest full second.
                                                With <a href="#Timestamp" class="name">timestamp</a> and <a href="#Timer%20string" class="name">timer
                                                    string</a> result formats, milliseconds will also be removed from the returned string altogether.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>${date} =</td>
                                                        <td>Convert Date</td>
                                                        <td>2014-06-11 10:07:42</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date}</td>
                                                        <td>2014-06-11 10:07:42.000</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${date} =</td>
                                                        <td>Convert Date</td>
                                                        <td>2014-06-11 10:07:42.500</td>
                                                        <td>exclude_millis=yes</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${date}</td>
                                                        <td>2014-06-11 10:07:43</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${dt} =</td>
                                                        <td>Convert Date</td>
                                                        <td>2014-06-11 10:07:42.500</td>
                                                        <td>datetime</td>
                                                        <td>exclude_millis=yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${dt.second}</td>
                                                        <td>${43}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${dt.microsecond}</td>
                                                        <td>${0}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>102</td>
                                                        <td>timer</td>
                                                        <td>exclude_millis=false</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>00:01:42.000</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>${time} =</td>
                                                        <td>Convert Time</td>
                                                        <td>102.567</td>
                                                        <td>timer</td>
                                                        <td>exclude_millis=true</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Should Be Equal</td>
                                                        <td>${time}</td>
                                                        <td>00:01:43</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Programmatic usage">Programmatic usage</h4>
                                            <p>In addition to be used as normal library, this library is intended to provide a stable API for other
                                                libraries to use if they want to support same date and time formats as this library. All the provided
                                                keywords are available as functions that can be easily imported:</p>
                                            <pre>from robot.libraries.DateTime import convert_time
    
    def example_keyword(timeout):
        seconds = convert_time(timeout)
        # ...
    </pre>
                                            <p>Additionally helper classes <code>Date</code> and <code>Time</code> can be used directly:</p>
                                            <pre>from robot.libraries.DateTime import Date, Time
    
    def example_keyword(date, interval):
        date = Date(date).convert('datetime')
        interval = Time(interval).convert('number')
        # ...
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
                                                        <div class="keyword" id="add-time-to-date">
                                                            <h2><a href="#add-time-to-date">Add Time To Date</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Adds time to date and returns the resulting date.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>timestamp</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date_format</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>date:</code> Date to add time to in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                                    <li><code>time:</code> Time that is added in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                                    <li><code>result_format:</code> Format of the returned date.</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                    <li><code>date_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                                                                            timestamp</a> format of <code>date</code>.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Add Time To Date</td>
                                                                        <td>2014-05-28 12:05:03.111</td>
                                                                        <td>7 days</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-06-04 12:05:03.111</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Add Time To Date</td>
                                                                        <td>2014-05-28 12:05:03.111</td>
                                                                        <td>01:02:03:004</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-05-28 13:07:06.115</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-time-to-time">
                                                            <h2><a href="#add-time-to-time">Add Time To Time</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Adds time to another time and returns the resulting time.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>number</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>time1:</code> First time in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                                    <li><code>time2:</code> Second time in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                                    <li><code>result_format:</code> Format of the returned time.</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Add Time To Time</td>
                                                                        <td>1 minute</td>
                                                                        <td>42</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>${102}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Add Time To Time</td>
                                                                        <td>3 hours 5 minutes</td>
                                                                        <td>01:02:03</td>
                                                                        <td>timer</td>
                                                                        <td>exclude_millis=yes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>04:07:03</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-date">
                                                            <h2><a href="#convert-date">Convert Date</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts between supported `date formats`.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>timestamp</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date_format</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Converts between supported <a href="#Date%20formats" class="name">date formats</a>.</p>
                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>date:</code> Date in one of the supported <a href="#Date%20formats" class="name">date
                                                                            formats</a>.</li>
                                                                    <li><code>result_format:</code> Format of the returned date.</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                    <li><code>date_format:</code> Specifies possible <a href="#Custom%20timestamp" class="name">custom timestamp</a> format.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Convert Date</td>
                                                                        <td>20140528 12:05:03.111</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-05-28 12:05:03.111</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Convert Date</td>
                                                                        <td>${date}</td>
                                                                        <td>epoch</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>${1401267903.111}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Convert Date</td>
                                                                        <td>5.28.2014 12:05</td>
                                                                        <td>exclude_millis=yes</td>
                                                                        <td>date_format=%m.%d.%Y %H:%M</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-05-28 12:05:00</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="convert-time">
                                                            <h2><a href="#convert-time">Convert Time</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Converts between supported `time formats`.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>number</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Converts between supported <a href="#Time%20formats" class="name">time formats</a>.</p>
                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>time:</code> Time in one of the supported <a href="#Time%20formats" class="name">time
                                                                            formats</a>.</li>
                                                                    <li><code>result_format:</code> Format of the returned time.</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Convert Time</td>
                                                                        <td>10 seconds</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>${10}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Convert Time</td>
                                                                        <td>1:00:01</td>
                                                                        <td>verbose</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>1 hour 1 second</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Convert Time</td>
                                                                        <td>${3661.5}</td>
                                                                        <td>timer</td>
                                                                        <td>exclude_milles=yes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>01:01:02</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-current-date">
                                                            <h2><a href="#get-current-date">Get Current Date</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns current local or UTC time with an optional increment.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time_zone</td>
                                                                        <td></td>
                                                                        <td>local</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>increment</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>timestamp</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>time_zone:</code> Get the current time on this time zone. Currently only
                                                                        <code>local</code> (default) and <code>UTC</code> are supported.
                                                                    </li>
                                                                    <li><code>increment:</code> Optional time increment to add to the returned date in one of the supported <a href="#Time%20formats" class="name">time formats</a>. Can be negative.</li>
                                                                    <li><code>result_format:</code> Format of the returned date (see <a href="#Date%20formats" class="name">date formats</a>).</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Get Current Date</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-06-12 20:00:58.946</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Get Current Date</td>
                                                                        <td>UTC</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-06-12 17:00:58.946</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Get Current Date</td>
                                                                        <td>increment=02:30:00</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-06-12 22:30:58.946</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Get Current Date</td>
                                                                        <td>UTC</td>
                                                                        <td>- 5 hours</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-06-12 12:00:58.946</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Get Current Date</td>
                                                                        <td>result_format=datetime</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date.year}</td>
                                                                        <td>${2014}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date.month}</td>
                                                                        <td>${6}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="subtract-date-from-date">
                                                            <h2><a href="#subtract-date-from-date">Subtract Date From Date</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Subtracts date from another date and returns time between.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>number</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date1_format</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date2_format</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>date1:</code> Date to subtract another date from in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                                    <li><code>date2:</code> Date that is subtracted in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                                    <li><code>result_format:</code> Format of the returned time (see <a href="#Time%20formats" class="name">time formats</a>).</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                    <li><code>date1_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                                                                            timestamp</a> format of <code>date1</code>.</li>
                                                                    <li><code>date2_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                                                                            timestamp</a> format of <code>date2</code>.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Subtract Date From Date</td>
                                                                        <td>2014-05-28 12:05:52</td>
                                                                        <td>2014-05-28 12:05:10</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>${42}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Subtract Date From Date</td>
                                                                        <td>2014-05-28 12:05:52</td>
                                                                        <td>2014-05-27 12:05:10</td>
                                                                        <td>verbose</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>1 day 42 seconds</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="subtract-time-from-date">
                                                            <h2><a href="#subtract-time-from-date">Subtract Time From Date</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Subtracts time from date and returns the resulting date.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>timestamp</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date_format</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>date:</code> Date to subtract time from in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                                    <li><code>time:</code> Time that is subtracted in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                                    <li><code>result_format:</code> Format of the returned date.</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                    <li><code>date_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                                                                            timestamp</a> format of <code>date</code>.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Subtract Time From Date</td>
                                                                        <td>2014-06-04 12:05:03.111</td>
                                                                        <td>7 days</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-05-28 12:05:03.111</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${date} =</td>
                                                                        <td>Subtract Time From Date</td>
                                                                        <td>2014-05-28 13:07:06.115</td>
                                                                        <td>01:02:03:004</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${date}</td>
                                                                        <td>2014-05-28 12:05:03.111</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="subtract-time-from-time">
                                                            <h2><a href="#subtract-time-from-time">Subtract Time From Time</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Subtracts time from another time and returns the resulting time.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_format</td>
                                                                        <td></td>
                                                                        <td>number</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude_millis</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments:</p>
                                                                <ul>
                                                                    <li><code>time1:</code> Time to subtract another time from in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                                    <li><code>time2:</code> Time to subtract in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                                    <li><code>result_format:</code> Format of the returned time.</li>
                                                                    <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Subtract Time From Time</td>
                                                                        <td>00:02:30</td>
                                                                        <td>100</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>${50}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Subtract Time From Time</td>
                                                                        <td>${time}</td>
                                                                        <td>1 minute</td>
                                                                        <td>compact</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${time}</td>
                                                                        <td>- 10s</td>
                                                                        <td></td>
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
                                                    <li><a id="link-add-time-to-date" href="#add-time-to-date" class="">Add Time To Date</a></li>
                                                    <li><a id="link-add-time-to-time" href="#add-time-to-time" class="">Add Time To Time</a></li>
                                                    <li><a id="link-convert-date" href="#convert-date" class="">Convert Date</a></li>
                                                    <li><a id="link-convert-time" href="#convert-time" class="">Convert Time</a></li>
                                                    <li><a id="link-get-current-date" href="#get-current-date" class="">Get Current Date</a></li>
                                                    <li><a id="link-subtract-date-from-date" href="#subtract-date-from-date" class="">Subtract Date From Date</a></li>
                                                    <li><a id="link-subtract-time-from-date" href="#subtract-time-from-date" class="">Subtract Time From Date</a></li>
                                                    <li><a id="link-subtract-time-from-time" href="#subtract-time-from-time" class="">Subtract Time From Time</a></li>
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