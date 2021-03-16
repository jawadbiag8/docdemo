<div class="menu">
    <ul class="list">
        <li class="header">Trainings & Certifications</li>
        <li class="<?php
        if ($node == "beginners-course") {
            echo 'active';
        }
        ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">local_library</i>
                <span>Beginners’ Course</span>
            </a>
            <ul class="ml-menu">
                <li class="<?php
                if ($subnode == "intro" || $subnode == '') {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=intro">
                        <span>Intro</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "marias-task") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=marias-task">
                        <span>Let's look at the task</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "your-first-robot") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=your-first-robot">
                        <span>Your first .robot</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "getting-to-the-intranet") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=getting-to-the-intranet">
                        <span>Getting to the intranet</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "logging-in") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=logging-in">
                        <span>Logging into the Internet</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "filling-in-the-sales-form") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form">
                        <span>Filling in the sales form</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "downloading-the-excel-file") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=downloading-the-excel-file">
                        <span>Downloading the Excel file</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "filling-in-the-sales-form-using-excel-data") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form-using-excel-data">
                        <span>Using Excel data to fill in the form</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "collecting-the-results") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=collecting-the-results">
                        <span>Collecting the results</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "creating-pdf") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=creating-pdf">
                        <span>Creating a PDF</span>
                    </a>
                </li>
                <li class="<?php
                if ($subnode == "logging-out-and-closing-the-browser") {
                    echo 'active';
                }
                ?>">
                    <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=logging-out-and-closing-the-browser">
                        <span>Logging out and closing the browser</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">trending_down</i>
                <span>Multi Level Menu</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);">
                        <span>Menu Item</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span>Menu Item - 2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Level - 2</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 3</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Level - 4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">trending_down</i>
                <span>Multi Level Menu</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);">
                        <span>Menu Item</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span>Menu Item - 2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Level - 2</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 3</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Level - 4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

    </ul>
</div>