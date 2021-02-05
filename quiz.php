
<!DOCTYPE html>
<html lang="en">

<head>
    <title>History Quiz</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <meta name="title" content="Code with Tanuj"/>
    <meta name="author" content="Tanuj Chauhan"/>
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/stylequiz.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- /Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- //Fonts -->

    <!-- Countdown Timer JS Script -->
    <script src="js/script.js" type="text/javascript"></script>
    <style>
        .quiz .countdown-bar {
            width: 0;
            height: 20px;
            margin-bottom: 20px;
            border: 1px solid rgb(233, 8, 8);
            background-color: #ffffff;
            border-radius: 3px;
        }
        /* ============ Loader ============ */
        div.countdown-bar div:nth-of-type(1) {
            width: 0;
            height: 100%
        }

        /*============  Timer ============ */
        div.countdown-bar div:nth-of-type(2) {
            width: 100%;
            height: 100%
        }
        /* ============ Navigation table buttons============  */
        div#dashboard button{
            width:35px;
            height: 35px;
            margin: 5px;
        }
        /* ============ Quiz questionnaire dashboard============  */
        div#dashboard{
            border: 1px solid #1c252b;
            border-radius: 5px;
            padding: 5px;
            background-color: #ffffff;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
<!-- Run Countdown Timer Script -->
<script type="text/javascript">
    $(document).ready(function () {
        countdown('countdownA', 0, 0, 10, 0);   // days,hours,minutes,seconds for timer
    });
</script>

<section class="ab-info-main py-md-5 py-4">
    <div class="container py-md-5 py-4">
        <div class="speak">

            <div class="row mt-lg-5 mt-1">
                <div class="col-md-12 events-img">
                    <div class="front">
                        <h1>Test Your History Knowledge</h1>
                        <br>
                        <div class="ban-buttons">
                            <button type="button" id="start"><span>Start </span></button>

                        </div>
                    </div>
                    <div class="quiz">
                        <!-- Countdown timer html -->
                        <div class="countdown-bar" id="countdownA">
                            <div></div>
                            <div></div>
                        </div>
                        <br>
                        <div style="margin-bottom:10px; " >
                            <button  data-toggle="collapse" class="btn btn-dark" data-target="#dashboard">Navigation Table</button>
                        </div>
                        <div id="dashboard"  class="collapse">
                            <?php
                            for ($x = 1; $x <= 10; $x++) {
                                echo " <button type='button' value='$x'  class='btn btn-outline-dark ques_btns'>$x</button>";
                            }
                            ?>

                        </div>
                        <p id="num"></p>
                        <div id="q"></div><div class="arrow"></div><br>
                        <div class="radio">
                            <div id="op1"></div>
                            <div id="op2"></div>
                            <div id="op3"></div>
                            <div id="op4"></div>
                        </div><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div  class="text-center">
                                        <button style="margin-right:5%;" data-toggle="tooltip" title="Proceed to next question" type="button" id="next" class="btn btn-success btn-lg">Next</button>
                                        <button type="button" id="fini" data-toggle="tooltip" title="End this quiz" class="btn btn-danger btn-lg">Finish</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="result" >
                        <p id="resultwindow"></p>
                        <div class="score"></div>
                        <br>
                        <div class="message"></div>
                        <button type="button" data-toggle="tooltip" title="See all right answers" class="btn-info" id="an">Detailed Feedback</button>
                        <button type="button" id="retake" onclick="location.reload();" data-toggle="tooltip" title="Exam retake" class="btn-info" id="retake" >Retake</button>
                    </div>

                    <div class="answers">
                        <p class="qa">1.As per Asoka’s inscriptions, which among the following place was declared tax free and proclaimed only 1/8th part as taxable?</p>
                        <p data-toggle="tooltip" title="right answer">Ans:<span id="a1"> [ Lumbini ] At the 20th anniversary of his enthronement, Asoka announced Lumbini as tax-free and proclaimed only 1/8th part as taxable. Description of this fact i</span></p>
                        <p class="qa">2.Which of the following ruler of Satavahana Empire composed Gathasaptashati?</p>
                        <p  data-toggle="tooltip" title="right answer" >Ans:<span id="a2"> [ Hala ] Gathasaptashati is composed by Savahana king Hala. It is a collection of poems in Maharashtri Prakrit. The theme of most of the poems is based on love</span></p>
                        <p class="qa">3. In the Junagarh inscription, which among the following Saka ruler achievements are highlighted?</p>
                        <p  data-toggle="tooltip" title="right answer" >Ans:<span id="a3">[ Rudraraman ] The military achievements, territories and many personal qualities of Rudraraman are highlighted in the famous Junagadh inscription, written in 150 AD</span></p>
                        <p class="qa">4.Who among the following laid down for punishment for a person becoming mendicant without making adequate provision for dependent wife and children?</p>
                        <p  data-toggle="tooltip" title="right answer" >Ans:<span id="a4"> [ Kautilya ] Chanakya : He is also known by Vishnugupta, Kautilya,was born around 350 BC and is known for his being the chief architect of Mauryan Empire and writi</span></p>
                        <p class="qa">5.Which one is the longest epic of the world?</p>
                        <p data-toggle="tooltip" title="right answer" >Ans:<span id="a5"> [ Mahabharata ] The Mahabharata by Ved vyas is the longest epic of the world consists of 1,00,000 shlokas.</span></p>
                        <p class="qa">6.According to Buddhist traditions, who was Charioteer of Buddha?</p>
                        <p data-toggle="tooltip" title="right answer" >Ans:<span id="a6"> [ Channa ] Channa was the name of Charioteer of Gautam Buddha.</span></p>
                        <p class="qa">7.Who presided First Buddhist Council?</p>
                        <p data-toggle="tooltip" title="right answer"  >Ans:<span id="a7">[ Mahakassapa ] The First Buddhist Council was held at Saptaparni cave near Rajagriha in 72 AD, during the reign of Emperor Ajatsatru. It was held under the President</span></p>
                        <p class="qa">8.Vallabhi era is identical with which of the following era?</p>
                        <p data-toggle="tooltip" title="right answer" >Ans:<span id="a8"> [ The Gupta era ] Vallabhi era is identical with Gupta era and Vallabhi era followed Gupta era in A.D. 366.</span></p>
                        <p class="qa">9.For which among the following offenses, Manu recommended higher punishment to Brahamans than the persons of other varnas?</p>
                        <p data-toggle="tooltip" title="right answer">Ans:<span id="a9"> [ Theft ] According to Manu, a Brahamana was to be awarded higher punishment than the persons of other varnas for the offence of Theft.</span></p>

                        <p class="qa">Which among conclusions has been derived from the debasement of the coins and gradual disappearance of gold coins during the post-Gupta period?</p>
                        <p data-toggle="tooltip" title="right answer" >Ans:<span id="a10"> [ There was a decline in trade ] Debasement of the coins and gradual disappearance of gold coins during the post-Gupta period indicates the Decline of Trade.</span></p>
                        <center><button type="button" onclick="location.reload();" data-toggle="tooltip" title="Exam retake" class="btn-info" id="retake" >Retake</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        var que;
        var ans;
        var right;
        var i=0;
        var score=0;
        var que1={que:"As per Asoka inscriptions, which among the following place was declared tax free and proclaimed only 1/8th part as taxable?",
            ans:["Kushinagar","Lumbini","Kathmandu","Sarnath"],
            right:"1"};
        var que2={que:"Which of the following ruler of Satavahana Empire composed Gathasaptashati?",
            ans:["Simuka","Gautamiputra Satkarni","Pulumayi","Hala"],
            right:"3"};
        var que3={que:" In the Junagarh inscription, which among the following Saka ruler achievements are highlighted?",
            ans:["Moga","Azes","Rudraraman","Nahapana"],
            right:"2"};
        var que4={que:"Who among the following laid down for punishment for a person becoming mendicant without making adequate provision for dependent wife and children?",
            ans:["Manu","Yajnavalkya","Kautilya","Narada"],
            right:"2"};
        var que5={que:"Which one is the longest epic of the world?",
            ans:["Ramayana","Ramcharitmanas","Mahabharata","Hanuman Chalisa"],
            right:"2"};
        var que6={que:"According to Buddhist traditions, who was Charioteer of Buddha?",
            ans:["Channa","Kanthaka","Devdatta","Chunda"],
            right:"0"};
        var que7={que:"Who presided First Buddhist Council?",
            ans:["Mahakassapa","Vasumitra","Moggliputra Tissa","Sabakami"],
            right:"0"};
        var que8={que:"Vallabhi era is identical with which of the following era?",
            ans:["The Vikrama era","The Gupta era","The Harsha era","None of the above"],
            right:"1"};
        var que9={que:"For which among the following offenses, Manu recommended higher punishment to Brahamans than the persons of other varnas?",
            ans:["Profanity","Murder","Theft","Treason"],
            right:"2"};
        var que10={que:"Which among conclusions has been derived from the debasement of the coins and gradual disappearance of gold coins during the post-Gupta period?",
            ans:["Commodities became cheap","Gold Mining was stalled","Money economy was gradually replaced by Barter Economy","There was a decline in trade"],
            right:"3"};
        var quelst=[que1,que2,que3,que4,que5,que6,que7,que8,que9,que10];
        var wrong=[];
        $("#start").click(function(){
            $(".front").hide();
            $("#next").show();
            $(".quiz").show();
            $("#num").text(i+1+"/"+quelst.length)
            $("#q").text(quelst[i].que);
            $("#op1").html("<input type='radio' name='opt' id='o1' value='0'><label for='o1'>"+quelst[i].ans[0])+"</label>";
            $("#op2").html("<input type='radio' name='opt' id='o2' value='1'><label for='o2'>"+quelst[i].ans[1])+"</label>";
            $("#op3").html("<input type='radio' name='opt' id='o3' value='2'><label for='o3'>"+quelst[i].ans[2])+"</label>";
            $("#op4").html("<input type='radio' name='opt' id='o4' value='3'><label for='o4'>"+quelst[i].ans[3])+"</label>";

        });
        $("#fini").click(function(){
            if($("input[name='opt']:checked").val()!=null){
                if($("input[name='opt']:checked").val()==quelst[i].right){
                    score++;
                }
                else{
                    wrong.push(i);
                }
                $("#fini").hide();
                $(".score").text(score);
                if(i<quelst.length-1){
                    reslt();
                }
            }
            else{
                reslt();
            }
            reslt();
            $("#an").click(function(){
                $(".result").hide();
                $(".answers").show();
                if((wrong.toString()).search("0")!=-1){
                    $("#a1").css('color','#ff6347');
                }
                if((wrong.toString()).search("1")!=-1){
                    $("#a2").css('color','#ff6347');
                }
                if((wrong.toString()).search("2")!=-1){
                    $("#a3").css('color','#ff6347');
                }
                if((wrong.toString()).search("3")!=-1){
                    $("#a4").css('color','#ff6347');
                }
                if((wrong.toString()).search("4")!=-1){
                    $("#a5").css('color','#ff6347');
                }
                if((wrong.toString()).search("5")!=-1){
                    $("#a6").css('color','#ff6347');
                }
                if((wrong.toString()).search("6")!=-1){
                    $("#a7").css('color','#ff6347');
                }
                if((wrong.toString()).search("7")!=-1){
                    $("#a8").css('color','#ff6347');
                }
                if((wrong.toString()).search("8")!=-1){
                    $("#a9").css('color','#ff6347');
                }
                if((wrong.toString()).search("9")!=-1){
                    $("#a10").css('color','#ff6347');
                }

            });

        });
        $("#next").click(function(){

            if($("input[name='opt']:checked").val()!=null){
                if($("input[name='opt']:checked").val()==quelst[i].right){
                    score++;
                }
                else{
                    wrong.push(i);
                }
                $("#sub").hide();
                $(".score").text(score);
                if(i!=quelst.length-1){
                    next();
                }
                else{
                    reslt();
                }
            }
            else{
                alert("Error: Please select One option");
            }
        });


        /**
         * Function For Next Question
         */
        function next(){
            if(i!=(quelst.length)-1){
                i++;
            }
            $("#q").text(quelst[i].que);
            $("#op1").html("<input type='radio' name='opt' id='o1' value='0'><label for='o1'>"+quelst[i].ans[0])+"</label>";
            $("#op2").html("<input type='radio' name='opt' id='o2' value='1'><label for='o2'>"+quelst[i].ans[1])+"</label>";
            $("#op3").html("<input type='radio' name='opt' id='o3' value='2'><label for='o3'>"+quelst[i].ans[2])+"</label>";
            $("#op4").html("<input type='radio' name='opt' id='o4' value='3'><label for='o4'>"+quelst[i].ans[3])+"</label>";
            $("#num").text(i+1+"/"+quelst.length);
            $("#sub").show();
        }

        /**
         * Function to to show  Quiz result
         */
        function reslt(){
            $(".quiz").hide();
            $(".result").show();

            $(".score").text(score+"/"+quelst.length);
            if(score<=4 && score != 0){
                $(".message").text("Result: Failed! Marks <= 40% You need to do better.");
                $("#retake").show();
            }else if(score<=8){
                $(".message").text("Result: Pass! Marks > 60% Good! Dont stop studying.");
                $("#retake").hide();

            }
            else if(score == 0){
                $(".message").text("Result: You have just terminated the quiz!...You can take a retake");
                $("#retake").show();

            }

            else{
                $(".message").text("Result:Topper! Great! You have really good knowledge");
                $("#retake").hide();

            }
        }
        $("#an").click(function(){
            $(".result").hide();
            $(".answers").show();
            if((wrong.toString()).search("0")!=-1){
                $('#a1').css('color','#ff6347');
            }
            if((wrong.toString()).search("1")!=-1){
                $('#a2').css('color','#ff6347');
            }
            if((wrong.toString()).search("2")!=-1){
                $('#a3').css('color','#ff6347');
            }
            if((wrong.toString()).search("3")!=-1){
                $('#a4').css('color','#ff6347');
            }
            if((wrong.toString()).search("4")!=-1){
                $('#a5').css('color','#ff6347');
            }
            if((wrong.toString()).search("5")!=-1){
                $('#a6').css('color','#ff6347');
            }
            if((wrong.toString()).search("6")!=-1){
                $('#a7').css('color','#ff6347');
            }
            if((wrong.toString()).search("7")!=-1){
                $('#a8').css('color','#ff6347');
            }
            if((wrong.toString()).search("8")!=-1){
                $('#a9').css('color','#ff6347');
            }
            if((wrong.toString()).search("9")!=-1){
                $('#a10').css('color','#ff6347');
            }

        });

        $(".ques_btns").click(function() {
            var fired_button = $(this).val();
            $("#q").text(quelst[fired_button].que);
            $("#op1").html("<input type='radio' name='opt' id='o1' value='0'><label for='o1'>"+quelst[fired_button].ans[0])+"</label>";
            $("#op2").html("<input type='radio' name='opt' id='o2' value='1'><label for='o2'>"+quelst[fired_button].ans[1])+"</label>";
            $("#op3").html("<input type='radio' name='opt' id='o3' value='2'><label for='o3'>"+quelst[fired_button].ans[2])+"</label>";
            $("#op4").html("<input type='radio' name='opt' id='o4' value='3'><label for='o4'>"+quelst[fired_button].ans[3])+"</label>";
            $("#num").text(fired_button+'/10');

            $("#sub").show();
        });

    });


</script>
</body>
</html>
