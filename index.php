<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cigna Group Landing Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/firefox-styles.css">
    <link rel="stylesheet" href="css/animations.css">
    
    <script src="js/script.js"></script>
    <script src="js/detect-firefox.js"></script>
</head>

<body>
    <div id="section1">
        <div class="row" id="row1">
            <div class="column" id="column1">
                <img src="images/logo.png" alt="Logo" id="logo">
            </div>
            <div class="column" id="column2">
                <div id="text">
                <p id="p1">How much could you be<br class="saving">
                saving on health benefits?</p>
                <p id="p2">Watch the savings add up when you combine medical, pharmacy<br class="pharmacy2">
                and behavioral benefits with Cigna Healthcare.</p>
                </div>
            </div>
            <div class="column" id="column3">
                <img src="images/leafs.png" alt="leafs" id="leafs">
            </div>
        </div>
    </div>

    <div id="section2">
        <div class="row" id="row2">
            <div class="column" id="column4">
                <div id="text2">
                <p id="p3">
                    When you have all of your health care<br>
                    benefits under one roof, care becomes<br>
                    fully coordinted, employees get more<br>
                    personalized guidance, total spend<br>
                    becomes easier to manage and<br>
                    information is more secure.
                </p>
                <p id="p4">
                    Even better? You could save an <br class="br-1200">average of:
                </p>
                </div>
                <div class="row" id="row3">
                    <div class="column" id="column5">
                    <div id="text3">
                        <p id="p5">
                        $148
                        </p>
                    </div>
                    </div>
                    <div class="column" id="column6">
                        <div id="text3-2">
                        <p id="p6">
                            per member per<br>
                            year (PMPY).&ast;
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="column" id="column5-2">
                <div id="text4">
                    <p id="p7">
                        Calculate your potential savings.
                    </p>
                    <div class="grid" id="grid1">
                    <div class="left-column" id="left-column1">
                        <div><label for="numMembers" id="label1">Enter number of employees:</label></div><br>
                        <input type="number" id="numMembers" placeholder="0000">
                        <br>
                        <br>
                        <div><button onclick="calculateSavings()">Calculate savings</button></div>
                    </div>
                    <div class="right-column" id="right-column1">
                        <input type="text" id="totalSavings" placeholder="$0,000,000">
                        <div><label for="totalSavings" id="label2">total medical<br class="medical"> savings<br class="savings"> per year&ast;</label></div>
                    </div>
                    </div>
                </div>
                
                <div class="column" id="column7">  
                    <div class="left-column" id="left-column2">
                    <img src="images/leaf.png" alt="Leaf" id="leaf"></div>
                    <div class="right-column" id="right-column2">
                    <div id="text5">
                    <p id="p8">
                        Reach out to your<br class="cigna"> Cigna Healthcare<sup>SM</sup><br class="sup"> representative<br class="representative">
                        or broker to<br class="to"> learn<br class="learn"> more.
                    </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="section3">
       <div class="row" id="row4">
            <div class="grid" id="grid2">
            <div class="left-column" id="left-column3">
                <div id="text6">
                    <div class="container">
                    <h4>Offered by Cigna Health and Life Insurance Company</h4>
                    <p id="p9">
                        Cigna Healthcare 2022 Value of Integration study. This<br class="book"> book-of-business<br class="business"> study leveraged a<br class="match"> proprietary match<br class="case"> case-control methodology,<br class="method"> comparing those customers<br class="customers"> who share certain<br class="large"> characteristics<br class="characteristics"> (age, gender, health<br class="health"> and benefits) but differ in terms of their medical<br class="medical"> pharmacy<br class="pharmacy">
                        and behavioral coverage. Aon was independently<br class="independent"> engaged to<br class="design"> design<br class="design2"> and perform the study.<br class="study"> Individual<br class="results"> results will vary and are not<br class="guaranteed"> guaranteed.<br>
                        <br>
                        Product availability may vary by location and plan type and<br class="subject"> is<br class="is"> subject<br class="subject2"> to change.<br class="change"> All group<br class="insurance">  health insurance policies<br class="and2"> and health benefit<br class="benefit"> plans<br class="plans">
                        contain excludions<br class="exclusions"> and limitations.<br class="limit"> For costs and details<br class="details"> of coverage,<br class="coverage"> contact a Cigna<br class="healthcare"> Healthcare representative.<br>
                        <br>
                        Cigna Healthcare products and services are provided exclusively <br class="exclusively">by<br class="or"> or throught operating<br class="operating"> subsidiaries of<br class="of"> The Cigna Group,<br class="including"> including Cigna<br class="cigna2">
                        Health<br class="and"> and Life Insurance Company<br class="bloomfield"> (Bloomfield, CT), or its affiliates.<br class="affiliates"> In Utah, all products<br class="products"> and services are provided by<br class="by"> Cigna Health and Life<br class="life"> Insurance<br class="insurance"> Company<br class="company"> (Bloomfield, CT). Policy forms: OK &#8210; HP-APP-I et all.,<br class="hp"> OR &#8210; HP-POL38 02-13,<br class="tn"> TN &#8210; HP-POL43/HC-CERIVI, et al. (CHLIC);<br class="chlic"> GSA-<br class="gsa">
                        COVER et al. (CHC-TN).<br>
                        <br>
                        979213 00/24 &copy; <?php echo date("Y"); ?> Cigna Healthcare. Some content<br class="provided"> provided under license.
                    </p>
                </div>
            </div>
            <div class="right-column" id="right-column3">
                <div id="text7">
                    <p id="p10">Your New Growth Plan</p>
            </div>
            </div>
    </div>

</body>
</html>
   