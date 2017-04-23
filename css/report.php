<?php
header('Content-Type: text/css');
 ?>
 
.report-container-o{
	padding: 20px;
	margin-top: 20px;}

.report-container{
	padding: 0px !important;
}

.report {
  position: relative;
  bottom:10px;
  top: auto;
  overflow: hidden;
  margin: 0px;
  padding: 0px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: none;
  border-color: #fff;
  border-width: 1px;
  background-color: #bdbdbd;}
  .report:hover{
  	background-color: #fff;
    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
  .report-container:nth-child(1) .report {
   	border-color: #fff;
   	border-left-style: solid;
   	border-width: 1px;}
  .report .card-content .card-title,.report .card-content .card-num {
  	padding-top: 20px;
  	display:block;
  	text-align: center;
    color: #757575;
    font-size: 24px;
    line-height: 24px;
    font-weight: 300; }
	  .report:hover  .card-title{
  		text-align: left;
  		margin-left: 10px;}
	.report .card-content .card-num {
  	display: none;
  	padding-top: 10px;
  	font-size: 48px;
  	font-weight: 200; }
		.report:hover .card-num{
		  display: block;
      -webkit-transition:  ease 0.4s;
      -moz-transition:  ease 0.4s;
      -o-transition:  ease 0.4s;
      transition:  ease 0.4s;}

  .report.small {
    height: 350px; }
   .report:hover {
    margin-top: -20px;
    height: 370px;
    -webkit-transition:  ease 0.4s;
    -moz-transition:  ease 0.4s;
    -o-transition:  ease 0.4s;
    transition:  ease 0.4s;}

@media only screen and (max-width : 993px) {
  .report.small {
    height: 250px; }
    .report:hover {
    margin-top: -20px;
    height: 270px; }
    .report .card-content .card-title{
    font-size: 20px;
    line-height: 20px; }
    .report .card-content .card-num{
    font-size: 40px;
    line-height: 40px; }}
@media only screen and (max-width : 601px) {
  .report.small {
    height: 190px; }
    .report:hover {
    margin-top: -20px;
    height: 210px; }
    .report .card-content .card-title{
    font-size: 12px;
    line-height: 12px; }
    .report .card-content .card-num{
    font-size: 34px;
    line-height: 34px; }}
    .report.small .card-image {
    	position: absolute;
    	width: 100%;
  		bottom:0px;
      height: 0%;
      -webkit-transition:  ease .6s;
      -moz-transition:  ease 0.6s;
      -o-transition:  ease 0.6s;
      transition:  ease .6s; }
    .report.small .card-content {
      position: absolute;
      top:0px;
      width: 100%;
      margin: 0px auto;
      -webkit-transition:  ease 0.4s;
      -moz-transition:  ease 0.4s;
      -o-transition:  ease 0.4s;
      transition:  ease 0.4s; }
  .report .card-image {
    background-color: #7DEFD5; }

#test3{
  transition:all 1s ease;
}
#test3:target{
  background-color: black;
}
