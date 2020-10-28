<?php
    echo 
    "<li id=\"$memberId\">
        <button
        type=\"button\"
        value=\"Button\"
        onclick=\"displayMemberBio(this)\"
        >
        $memberName
    </button>
        <div class=\"member-content\">
            <div>
                <button
                class=\"member-close-btn\"
                onclick=\"closeMemberBio(this)\"
                >
                x
                </button>
            </div>
            <div class=\"member-content-body\"><p>$memberContent</p></div>
            <div>
                <a
                target=\"_blank\"
                rel=\"noopener noreferrer\"
                href=\"$memberTwitter\"
                >twitter</a
                >
            </div>
        </div>
    </li>";
?>