<?php
function footerGenerator($website, $year)
{
    return '
        
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>' . $year . ' &copy; ' . $website . ' | Designed and Developed By SearchingYard Software Private Limited</span>
            </div>
            </div>
        </footer>

        ';
}
// For footer creation just put the company name and it's done. It will automatically fetch the current year
$website = "SearchingYard";
$year = date('Y');
echo footerGenerator($website, $year);
