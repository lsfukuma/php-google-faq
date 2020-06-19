<?php include 'database/faq.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>FAQ Google</title>
    </head>
    <body>
        <div class="container">
            <?php foreach ($faqs as $faq) { ?>
            <div class="question">
                <h1 class="question-faq">
                    <?php echo $faq['question']; ?>
                </h1>
            </div>
            <div class="answer">
                <?php foreach ($faq['answer'] as $p_answer) { ?>
                <p class="answer-faq">
                    <?php echo $p_answer; ?>
                </p>
                <?php
                }
                ?>
            </div>
            <?php
            } // fine ciclo foreach ?>
        </div>
        <script src="main.js" charset="utf-8"></script>
  </body>
</html>
