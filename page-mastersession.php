<?php get_header() ?>
<h2 class="facility-head filmography-head" id="filmography">Master Session 2020</h2>

<div class="filmography" style="margin-top:0vh;">
    <h1 style="text-align:center;margin-bottom:12vh;font-weight:100">Participants</h1>


    <h2 style="text-align:center;font-weight:900;margin-bottom:2vh">Fundamentals Of Audio</h2>   
    <div class="past-films">
        <?php
            $arr = array("Hrishikesh Patil",
            "Govind Murali",
            "Dibakar Saha",
            "Percy Fernandez",
            "HareeDwarak",
            "Aditya Chavan",
            "Sanju V Abraham",
            "Sivaprasad N",
            "Harsha Varthen ",
            "Varun John",
            "Renuka Joshi",
            "Ankur Gagan Deep",
            "Varun N ",
            "Abhailal",
            "Surabhi pandit",
            "Rajan",
            "Rohan",
            "Adarsh",
            "Ginson Fernandez");
            sort($arr);
            foreach ($arr as $element) { 
        ?>
                    <div class="films col-md-12">
                        <p style="color:#c19663"><?php echo $element?></p>
                    </div>
        <?php 
                }
        ?>
    </div>

    <div style="padding:2rem"></div>
    <h2 style="text-align:center;font-weight:900;margin-bottom:2vh">Advanced Audio</h2>   
    <div class="past-films">
        <?php
            $arr = array("Suren G",
            "Jigisha Patil",
            "Saurabh Kumar",
            "Sivaprasad N",
            "Chayan Dey",
            "Gautham M",
            "Harsha Varthen ",
            "Varun John",
            "Shreyank Nanjappa",
            "Thejus Nair",
            "Louis Lou ",
            "Adeep Singh Manki",
            "Shankar Varier",
            "David",
            "Prathmesh Matodkar",
            "Renuka Joshi",
            "Sanjai Arakkal",
            "Ankur Gagan Deep",
            "Ramu Raj",
            "Adwait Walujkar",
            "Marios Themistokleous",
            "Gowri Shankar",
            "Varun N ",
            "Abhailal",
            "Arnold Antony ",
            "Surabhi Pandit",
            "Zahir Adam Bandukwala ",
            "Vanessa G. ",
            "Rajan",
            "Rohan",
            "Adarsh",
            "Linu Monichan",
            "Alexander Mikhlin ",
            "Ginson Fernandez",
            "Rizwan Yaqoob Ali");
            sort($arr);
            foreach ($arr as $element) { 
        ?>
                    <div class="films col-md-12">
                        <p style="color:#c19663"><?php echo $element?></p>
                    </div>
        <?php 
                }
        ?>
    </div>
    
</div>
<?php get_footer() ?>