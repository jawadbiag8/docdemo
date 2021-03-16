<div class="menu">
    <ul class="list">
        <li class="header">Guide</li>
        <li class="<?php
        if ($page == 'guide'&& ($node=='quickstart-guide'||$node=='')) {
            echo 'active';
        }
        ?>">
            <a href="documantation.php?page=guide&node=quickstart-guide">
                <i class="material-icons">import_contacts</i>
                <span>Quick Start Guide</span>
            </a>
        </li>
        <li class="<?php
        if ($page == 'guide'&& $node=='installation-guide') {
            echo 'active';
        }
        ?>">
            <a href="documantation.php?page=guide&node=installation-guide">
                <i class="material-icons">build</i>
                <span>Installation Guide</span>
            </a>
        </li>

    </ul>
</div>