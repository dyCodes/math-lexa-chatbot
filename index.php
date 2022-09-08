<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6" class="script1"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"
        class="script2"></script>

    <title>Math Lexa - ChatBot</title>
</head>

<body>
    <section class="chat-section">
        <div class="chat-header">
            <div class="image-box"><img src="./assets/images/lexa_2.png" /></div>
            <div class="chat-title">
                <h1>Math Lexa</h1>
                <p>Ask me about the maths formulas you don't know.</p>
            </div>
        </div>

        <div class="chat">
            <div class="chat-box">
                <div class="chat-box-image">
                    <img src="./assets/images/lexa_2.png" alt="" />
                </div>
                <div class="chat-box-inner-text">
                    <p>
                        Hi, 👋 I am Math-Lexa. Ask me about the maths formulas you don't
                        know.
                    </p>
                </div>
            </div>

        </div>

        <div class="chat-input">
            <form class="chat-form">
                <input type="text" name="message" id="message" placeholder="Ask me your question here!" required />
                <button id="send" type="submit">
                    <i class="fa-regular fa-paper-plane"></i>
                </button>
            </form>

        </div>
    </section>

    <script src="./jquery.min.js"></script>
    <script src="./script.js"></script>

</body>

</html>