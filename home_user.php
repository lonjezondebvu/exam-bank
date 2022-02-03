<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#	">HOME</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					  Welcome
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar_user.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
						 <div class="alert alert-info"><h1><b>Welcome to the Exam Bank!</b><p align="left">
  <p>Welcome to the Exam Bank application. This application will allow you to create courses and objectives/topics under that course. For each of the topics/objectives under a course the system will allow you to add four types of questions: Multiple Choice, True or False, Yes or No, and Structured questions.</p>
  <p>Once all the questions are added, you can go ahead and form exam papers just by selecting the questions you need to appear on that paper. Here are the basic steps to take when using the Exam Bank: </p>
  <h3><strong>Part A: Adding Questions to the Exam Bank </strong></h3>
  <ol>
    <li>Create a Faculty (Ignore this step if it already exists)</li>
    <li>Create a Department (Ignore this step if it already exists)</li>
    <li>Create a Programme (Ignore this step if it already exists)</li>
    <li>Create a Course (Ignore this step if it already exists)</li>
    <li>Create objectives or topics for the course</li>
    <li>Choose an objective for any course</li>
    <li>Add questions to the objectives</li>
  </ol>
  <h3><strong>Part B: Producing an Exam Paper from the Exam Bank </strong></h3>
  <ol>
    <li>Go to &quot;Exams&quot; on the main menu link</li>
    <li>Choose &quot;Add Exams&quot;</li>
    <li>Enter the details of the exam. It is recommended that you enter the month and year in which the paper will be written. Also indicate if the paper is just a mere test, Mid-Sememster or End of Semester</li>
    <li>Once you create the exam, you can click the &quot;Questions&quot; link to its adjacent right to start adding questions to this exam paper. Notice that you won't be able to EDIT the questions on this interface. If you want to edit questions, use step number 7 on Part A: Adding questions to the Exam Bank. </li>
    <li>When you finish adding questions to an exam paper you can go ahead and chooose &quot;Create Exam Paper&quot; to produce a pdf version of the exam paper. You can also produce a pdf Mark Scheme by choosing &quot;Mark Scheme&quot;.</li>
    <li>You are done. If you want to edit the exam paper, you can convert it to Microsoft Word (Using appropriate versions of Adobe Reader)  and make your changes. </li>
  </ol>
</div></p>
                                   
                        </div>
                    </div>
                </div> 
                
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
