<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hilltop Academt - Exam Bank</title>
    <link rel="shortcut icon" href="images/favicon.ico"/>

	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

function fetch_other(val)
{
 $.ajax({
 type: 'post',
 url: 'other.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_A").innerHTML=response; 
 }
 });
}

function fetch_B(val)
{
 $.ajax({
 type: 'post',
 url: 'b.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_B").innerHTML=response; 
 }
 });
}

function fetch_C(val)
{
 $.ajax({
 type: 'post',
 url: 'c.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_C").innerHTML=response; 
 }
 });
}

function fetch_D(val)
{
 $.ajax({
 type: 'post',
 url: 'd.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_D").innerHTML=response; 
 }
 });
}


function fetch_marks(val)
{
 $.ajax({
 type: 'post',
 url: 'marks.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_marks").innerHTML=response; 
 }
 });
}

function fetch_Correct(val)
{
 $.ajax({
 type: 'post',
 url: 'correct.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_Correct").innerHTML=response; 
 }
 });
}

function fetch_Type(val)
{
 $.ajax({
 type: 'post',
 url: 'question_type.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_Type").innerHTML=response; 
 }
 });
}


function fetch_Image(val)
{
 $.ajax({
 type: 'post',
 url: 'image.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_Image").innerHTML=response; 
 }
 });
}

function fetch_Department(val)
{
 $.ajax({
 type: 'post',
 url: 'depart.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_Department").innerHTML=response; 
 }
 });
}

function fetch_Program(val)
{
 $.ajax({
 type: 'post',
 url: 'program.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_program").innerHTML=response; 
 }
 });
}

function fetch_Course(val)
{
 $.ajax({
 type: 'post',
 url: 'course.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_course").innerHTML=response; 
 }
 });
}

function fetch_Programs(val)
{
 $.ajax({
 type: 'post',
 url: 'program.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_programs").innerHTML=response; 
 }
 });
}

function fetch_Departments(val)
{
 $.ajax({
 type: 'post',
 url: 'depart.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_Departments").innerHTML=response; 
 }
 });
}
</script>
</head>
