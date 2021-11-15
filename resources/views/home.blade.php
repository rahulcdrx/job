@extends('layouts/header')
<style>
.news {
    width: 160px
}

.news-scroll a {
    text-decoration: none
}

.dot {
    height: 6px;
    width: 6px;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 2px !important;
    background-color: rgb(207, 23, 23);
    border-radius: 50%;
    display: inline-block
}
.bg-org {
    background-color: #F26522 !important;
}
</style>
<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
 <h2 class="font-color-white">Find Jobs Now more Easy Way</h2>
<p class="font-color-white">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla, magna duis nostra sodales luctus nulla praesent fermentum a elit mollis purus aenean curabitur eleifend </p>
<a href="#" data-toggle="modal" data-target="#myModal"><i class=" material-icons play">play_arrow</i></a>
</div>
</div>
</div>
</section>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-org py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Job News</span></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a> <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a> </marquee>
            </div>
        </div>
    </div>
</div>
<section id="Job-Category" style="padding-bottom: 22px; padding-top:23px;">
<div class="container">
<h3 class="text-center">Choose Job Category</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"> </div>
<div class="row">
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/govtjob.jpg" alt="" width="259">

<h6>Govt Job</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>36 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/govtjob.jpg" alt="" width="259">


<h6>Student Update</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>72 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<img src="images/govtjob.jpg" alt="" width="259">


<h6>Private Job</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>42 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/govtjob.jpg" alt="" width="259">


<h6>All Update</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>18 Job Posts</span></a>
</div>
</div>
</div>
<!-- <div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-5.png" alt="">
</div>
<h6>Design & Multimedia</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>48 Job Posts</span></a>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-6.png" alt="">
</div>
<h6>Web Development</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>94 Job Posts</span></a>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-6 max-width-50 margin-left-18">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-7.png" alt="">
</div>
<h6>Medical/Pharma</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>64 Job Posts</span></a>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light ">
<div class="circle">
<img src="imags/icone/service-icone-8.png" alt="">
</div>
<h6>Engineer/Architects</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>52 Job Posts</span></a>
</div>
</div>
</div> -->
<!-- <div class="vertical-space-40"></div>
<a href="#" class="Brows-All-Category">Brows All Category</a>
</div>
<div class="vertical-space-85"></div> -->
</section>
<section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn; background:#F26522;padding:52px;">
    <div class="container">
        <div class="row">
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="fa fa-beer medium-icon" style="font-size: 28px; color:#fff;"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="font-size: 35px;
    color: #fff;">2800</span>
                <p class="counter-title">Govt Jobs</p>
            </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;"> <i class="fa fa-heart medium-icon" style="font-size: 28px;color:#fff;"></i> <span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="font-size: 35px;
    color: #fff;">9800</span> <p class="counter-title">Private Jobs</p> </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;"> <i class="fa fa-anchor medium-icon" style="font-size: 28px;color:#fff;"></i> <span class="timer counter alt-font appear" data-to="810" data-speed="7000"style="font-size: 35px;
    color: #fff;">8100</span> <p class="counter-title">Student Updates </p> </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;"> <i class="fa fa-user medium-icon" style="font-size: 28px;color:#fff;"></i> <span class="timer counter alt-font appear" data-to="600" data-speed="7000" style="font-size: 35px;
    color: #fff;">6000</span> <p class="counter-title">All Updates </p> </div> <!-- end counter -->
        </div>
    </div>
</section>


<section id="Job-Category" style="padding-bottom: 64px; padding-top:34px;">
<div class="container">
<h3 class="text-center">View  Jobs</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"> </div>
<div class="row">
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/jobpost.jpg" alt="" width="259">
<h6></h6>

<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/jobpost.jpg" alt="" width="259">
<h6></h6>

<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<img src="images/jobpost.jpg" alt="" width="259">

<h6></h6>


<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/jobpost.jpg" alt="" width="259">


<h6></h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>

</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/jobpost.jpg" alt="" width="259">


<h6></h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>

</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/jobpost.jpg" alt="" width="259">


<h6></h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>

</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/jobpost.jpg" alt="" width="259">


<h6></h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>

</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">

<img src="images/jobpost.jpg" alt="" width="259">


<h6></h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View Jobs</span></a>
</div>

</div>
</div>
</section>
</section style="padding-top:34px;">
<div class="row">
          <div class="col-lg-6">
          <img src="images/ads1.png" alt="" height="282" >
          </div>
          <div class="col-lg-6">
          <img src="images/ads1.png" alt="" height="282" >
          </div>
        </div>
<section>



<!-- <section id="resent-job-post" class="background-color-white">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Recent Job Post</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"></div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-1.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left  text-align-center">
<h6>Jopitar looking for a senior UX Designer</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-2.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>Rokital needs Marketing Experts</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Rokitar ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-3.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>Mshape looking for a senior UX Designer</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-4.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>Marketing Directer needed</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Scalegoss ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-5.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>We need a senior Brand Designer</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Freelance</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="vertical-space-20"></div>
<div class="job-list">
<a href="#" class="Open-Jobs-Page margin-auto">Open Jobs Page<i class="large material-icons float-right">trending_flat</i></a>
<ul class="pagination justify-content-end margin-auto">
<li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
<li class="page-item">
<a class="page-link pdding-none" href="javascript:void(0);"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
</ul>
</div>
</div>
<div class="vertical-space-60"></div>
</section> -->


<!-- <section id="Featuread-Company">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Featuread Company</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="owl-carousel Featuread-Company-carousel">
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center  media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center ">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-4.png" alt="John Doe" class="margin-auto Featuread-Company-img">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
 <br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center   media1">
<img src="imags/job-post-icone-1.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Jopitar Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media   text-align-center media1">
<img src="imags/job-post-icone-5.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Supwin Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center   media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
 <img src="imags/job-post-icone-4.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-4.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-1.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Jopitar Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
 <br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-5.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Supwin Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="vertical-space-85"></div>
</div>
</section> -->


<!-- <section id="Jobtend">
<div class="container">
<div class="vertical-space-85"></div>
<div class="row">
<div class="col-lg-9 col-md-6  align-self-center">
<h3 class="title">Jobtend - Best Place to Find Jobs & Employee</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla magna duis nostra sodales luctus nulla
</p>
<div class="vertical-space-30"></div>
<h4>Why we are best</h4>
<div class="vertical-space-30"></div>
<ul>
<li class="list-item1 ">Et vestibulum ullamcorper curae tellus consectetur erat pharetra et cubilia
<br /> Nibh est auctor lacus nam lacinia aptent
</li>
<li class="list-item1 ">Vitae sociosqu a nisi cubilia vulputate aliquam vulputate imperdiet tempor arcu fames</li>
<li class="list-item1 ">Odio habitasse senectus morbi dapibus mauris non primis, nisl ante hendrerit consectetur nulla phasellus eleifend, ad at scelerisque vulputate habitant tempor</li>
</ul>
<div class="vertical-space-30"></div>
<a href="#" class="Explore-Employee">Explore Employee</a>
<a href="#" class="Explore-New-Jobs">Explore New Jobs</a>
</div>
<div class="col-lg-3 col-md-6">
<img src="imags/man.png" alt="" class="man-img">
</div>
<div class="vertical-space-60"></div>
</div>
</div>
</section> -->


<!-- <section id="Clients-Testimonial">
<div class="vertical-space-85"></div>
<div class="container">
<h3 class="text-center">Recent Job Post</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"></div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="owl-carousel Clients-Testimonial-carousel">
<div class="Clients-Testimonial-item">
<div class="testimonial">
<h3 class="testimonial-title">Farhana Islam</h3>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vehicula turpis non est imperdiet, et facilisis nisl tempus. Donec nec. </p>
<div class="pic">
<img src="imags/Clients-Testimonial1.jpg" alt="">
</div>
</div>
</div>
<div class="Clients-Testimonial-item">
<div class="testimonial">
<h3 class="testimonial-title">Williamson</h3>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vehicula turpis non est imperdiet, et facilisis nisl tempus. Donec nec. </p>
<div class="pic">
<img src="imags/Clients-Testimonial3.jpg" alt="">
</div>
</div>
</div>
<div class="Clients-Testimonial-item">
<div class="testimonial">
<h3 class="testimonial-title">Williamson</h3>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vehicula turpis non est imperdiet, et facilisis nisl tempus. Donec nec. </p>
<div class="pic"> 
<img src="imags/Clients-Testimonial2.jpg" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="vertical-space-85"></div>
</div>
</section> -->


@extends('layouts/footer')