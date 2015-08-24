<?php
include "../header.php";



if($user_is_administrator)
{
    $account_subpages_unlock = true;
    $dir = implode("/", array(__SUBMISSION_SERVER__, "reports", "all_grades"));
    print <<<HTML

    <div id="container" style="width:100%; margin-top:40px;">
        <div class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="Grading Done" aria-hidden="false" style="display: block; margin-top:5%; z-index:100;">
            <form action="{$BASE_URL}/account/submit/admin-grade-summaries.php?course={$_GET['course']}" method="get">
                <div class="modal-header">
                    <h3 id="myModalLabel">Generate Grade Summaries</h3>
                </div>

                <div class="modal-body" style="padding-top:20px; padding-bottom:20px;">
                    Click the button below to generate grade summaries to:<br />
                    {$dir}
                </div>

                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Generate Grade Summaries"/>
                </div>
            </form>
        </div>
    </div>
HTML;
	include "../footer.php";
}
?> 
        
        
