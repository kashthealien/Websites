<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include("head.php"); ?>
    <title>Kashyap R Puranik</title>
</head>

<body>

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header"> <?php include("header.php"); ?>
    </div> <!-- /header -->
    
     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint"> <? include("mainMenu.php"); ?>
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">
       <!-- Content -->
        <div id="content">
            <!-- Article -->
            <div class="article">
                <h2><span>My projects at IITM</span></h2>
                <ul>
		            <li><strong>BTech Project - Automatic Insertion of Links in Text Documents [2010]</strong><br/>
					A project aimed to study the structure of the web, to classify the hyperlinks into types and to automatically construct links between text documents to improve reachability of a document.</li>
				
		            <li><strong>Natural Language Processing - Attribute Value Pair Extraction [2010]</strong><br/>
					We are working on a project that extracts attribute value pairs from text articles in the form of online reviews to construct a structured database of information.</li>
	 
					<li><strong>Sentiment Analysis using Compositional Symantics [2010]</strong><br/>
					Analysis of sentences using the bag of words approach disregards the grammatical structure of the sentences. We could improve the analysis method by parsing sentences and extracting the polarity of the sentence using sentiment composition at the various nodes of the parse tree. This was my Summer [2010] Internship project at <b>Google Bangalore</b></li>

					<li><strong>Monte Carlo Gibbs Sampling - Bayesian Networks [2010]</strong><br/>
					A Gibbs Sampling tool to solve Bayesian Networks problems as a part of the Probabilistic Reasoning in Artificial Intelligence course.</li>
					
					<li><strong>Resolution Refutation Inference Engine [2010]</strong><br/>
					A Knowledge Base resolution Engine to resolve and answer queries given a knowledge base using resolution refutation and several techniques to speed up the refutation process.</li>

					<li><strong>Birch Clustering to cluster Proteins based on Geometry [2010]</strong><br/>
					Application of the Birch Clustering algorithm to cluster proteins given in a huge corpus based on their geometric structure to obtain the SSE curve.</li>

					<li><strong>Pascal Compiler [2009]</strong><br/>
					A pascal compiler using tools like Lex and Yacc as a part of the compilers lab course.</li>
					 
					<li><strong>Molecular Calculator - Kalzium [2009]</strong><br/>
					A calculator addon for Kalzium that performs calculations involving titration, gasses, nuclear decomposition, equation balancing, mass calculation. This was my <b>Google Summer of Code</b> project for summer [2009]</li>
					
					<li><strong>Ecological Footprint of IIT Madras [2009]</strong><br/>
					A project aimed at measuring the energy consumption, wastage and thereby calculation of the ecological foot print for my institute.
					</li>
   				</ul>
            </div> <!-- /article -->
            <hr class="noscreen" />            
        </div> <!-- /content -->
        <? include("sideLinks.php"); ?>
    </div> <!-- /page-in -->
    </div> <!-- /page -->
    <? include("footer.php"); ?>

</div> <!-- /main -->

</body>
</html>
