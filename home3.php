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
                      						
					  Welcome : Administrator
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar3.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
						 <div class="alert alert-info">
							<img src="images/logo2.png" />
						 <h1><b>Welcome to the Exam Bank!</b><p align="left">
								  <p>Welcome to the Exam Bank application. This application will allow you to create subjects and their topics  For each of the topic under a subject the system will allow you to add four types of questions: Multiple Choice, True or False, Yes or No, and Structured questions.</p>
								  
								  <p>Once all the questions are added, you can go ahead and form exam papers just by selecting the questions you need to appear on that paper. Here are the basic steps to take when using the Exam Bank: </p>
								  <h3><strong>Part A: Adding Questions to the Exam Bank </strong></h3><br>
								  <ol>
									<li>Create a Department (Ignore this step if it already exists)</li>
									<li>Create a subject (Ignore this step if it already exists)</li>
									<li>Create topics for the subject</li>
									<li>Choose a topic for any subject</li>
									<li>Add questions to that topic</li>
								  </ol>
								  <h3><strong>Part B: Creating an Exam Paper from the Exam Bank </strong></h3><br>
								  <ol>
									<li>Go to &quot;Exams&quot; on the main menu</li>
									<li>Choose &quot;Add Exam Paper&quot;</li>
									<li>Enter the details of the exam. It is recommended that you enter the month and year in which the paper will be written. Also indicate if the paper is just a mere test, Mid-Sememster or End of Semester</li>
									<li>Once you create the exam, you can click the &quot;Questions&quot; link to its adjacent right to start adding questions to this exam paper. Notice that you won't be able to EDIT the questions on this interface. If you want to edit questions, use step number 7 on Part A: Adding questions to the Exam Bank. 
									
									<p>When you add a question, you will need to add its marks as well as the number of lines to be displayed on the paper for students to use when answering the question</li>
									<li>When you finish adding questions to an exam paper you can go ahead and chooose &quot;Create Exam Paper&quot; to produce a pdf version of the exam paper. You can also produce a pdf Mark Scheme by choosing &quot;Mark Scheme&quot;.</li>
									<li>You are done. If you want to edit the exam paper, you can convert it to Microsoft Word (Using appropriate versions of Adobe Reader)  and make your changes. </li>
								  </ol>
								  <br>
								  <h3><strong>What if I am stuck? </strong></h3>
								  <br> No worries. Just contact Padziwe's technical support team and we will help you promptly
								  
								  <p>+265991029829 - support@padziwe.org
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
   <?php include ('footer.php');?>
</body>
</html>
