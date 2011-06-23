<?php

$this_page = "landing";

include_once "../../includes/easyparliament/init.php";

$DATA->set_page_metadata($this_page, 'title', 'Hansard');
$DATA->set_page_metadata($this_page, 'metadescription', 
			 'Find the complete Hansard on TheyWorkForYou.com - transcripts from all UK parliamentary debates in easily-searchable form.');
$DATA->set_page_metadata($this_page, 'metakeywords', "hansard, search hansard, hansard transcriptions, hansard record, parliamentary transcripts, parliament transcripts, parliament records, uk hansard, hansard uk, house of commons transcript, house of commons debates, house of commons records");

$PAGE->supress_heading = true;
$PAGE->page_start();
$PAGE->stripe_start('full');
?>

<div id="hansard_landing_banner" class="landing_banner">
  <div>
    <div class="transparent_white">
      <h2>Hansard: the UK Parliament Record</h2>
      <h3>Search Hansard back to 1935</h3>

<?php
$PAGE->search_form();
?>

    </div>
  </div>
</div>

<?php
$PAGE->stripe_end();
$PAGE->stripe_start();
?>

<p>Hansard is the transcript of all parliamentary debates, published by Parliament itself. 
TheyWorkForYou&rsquo;s version of Hansard is the easiest to use anywhere on the web. </p>
<p>Search Hansard now by entering any word or phrase in the box above.</p>

<h4>On TheyWorkForYou&rsquo;s Hansard you can:</h4>
<ul class='hilites clear'>
  <li>search for any word or phrase</li>
  <li>navigate debates, written answers and statements easily</li>
  <li>find up-to-date records, published daily</li>
  <li>access all Commons debates as far back as 1935, Lords debates from 1999, and more</li>
</ul>

<h4>Also:</h4>
<ul class='hilites clear'>
  <li><a href="/mps">See the voting records and attendance of any MP</a></li>
  <li><a href="/">Find out who your MP is</a></li>
  <li><a href="/">Subscribe to custom email alerts for issues you care about in Parliament</a></li>
  <li><a href="/calendar">See what&rsquo;s upcoming in Parliament</a></li>
</ul>         

<?php
$PAGE->stripe_end();
$PAGE->page_end();
?>
