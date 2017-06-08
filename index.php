<?php 
    $title = "!Secure Web App";
    $currentPage = "Home";
    include("header.php");
?>
<!-- Page Content Goes Here! -->
<h3>About</h3>
<p>The !Secure Web Application. It is designed to teach the basics of hacking and securing Web Apps.</p>
<p>To get more Info on common vulnerablities, check out the links below</p>
<br>
<div class="list-group">
    <h4 class="text-info">General Resources</h4>
    <a href="https://www.owasp.org/index.php/Category:OWASP_Top_Ten_Project" class="list-group-item">
        <h4 class="list-group-item-heading">Common Web Application Vulnerablities</h4>
        <p class="list-group-item-text">The OWASP top 10 is a list of the top 10 most common vulnerablities in web applications today.</p>
    </a>
    <br>
    <h4 class="text-info">Cross Site Scripting</h4>
    <a href="https://excess-xss.com/" class="list-group-item">
        <h4 class="list-group-item-heading">Excess XSS</h4>
        <p class="list-group-item-text">This website gives an overview of what Cross Site Scripting is and how to exploit it.</p>
    </a>
    <a href="https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet" class="list-group-item">
        <h4 class="list-group-item-heading">XSS Filter Evasion Cheat Sheet</h4>
        <p class="list-group-item-text">This resource is useful for creating valid xss even when the website filters its inputs.</p>
    </a>
    <br>
    <h4 class="text-info">SQL Injection</h4>
    <a href="https://www.acunetix.com/websitesecurity/sql-injection/" class="list-group-item">
        <h4 class="list-group-item-heading">SQL Injection Overview</h4>
        <p class="list-group-item-text">This is a general overview of SQL injection and how to exploit it.</p>
    </a>
    <a href="https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/" class="list-group-item">
        <h4 class="list-group-item-heading">SQL Injection Cheatsheet</h4>
        <p class="list-group-item-text">This cheatsheet is a great reference for common filter evasion methods and show the syntax differences between different versions of SQL</p>
    </a>
</div>
<!-- End Page Content -->
<?php include("footer.php"); ?>