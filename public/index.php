<?php
$navigation_items = [
    'who',
    'interests',
    'projects',
];
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Lenton</title>
        <link rel="icon" href="/images/logo_16.png">
        <link rel="stylesheet" href="/build/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron:400,900" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="/js/jquery.firefly-0.7.min.js"></script>
        <script src="/js/page.js"></script>
    </head>
    <body>
        <header class="main">
            <div class="title">
                <a href="#title">
                    <img src="/images/logo.png" class="logo" />
                    <span class="name" id="title-name">Lenton</span>
                </a>
            </div>
            <img src="/images/icons/menu.svg" alt="Toggle navigation" class="navigation-toggle" onclick="toggleNavigation()">
            <nav class="main" id="navigation">
                <ul>
                    <?php foreach ($navigation_items as $item): ?>
                        <li><a href="#<?=$item?>"><?=ucwords($item)?></a></li>
                    <?php endforeach ?>
                </ul>
            </nav>
        </header>
        <section class="title" id="title">
            <div id="firefly"></div>
            <div class="person">
                <img src="/images/avatar.jpeg" alt="" class="avatar" />
                <div class="name">Lenton</div>
                <div class="tagline">Master of the Universe</div>
            </div>
            <div class="down-arrow">
                <img src="/images/icons/down_arrow.svg" alt="" />
            </div>
        </section>
        <script>
        $.firefly({
            color: '#fff',
            minPixel: 1,
            maxPixel: 3,
            total : 65,
            on: '#firefly',
            zIndex: 5
        });
        </script>
        <section class="who" id="who">
            <h1>Who?</h1>
            <p>I'm not <i>really</i> a master of the universe, not yet anyway...</p>
            <p>I would call myself a technologist. I'm interested in all technology and inovations. Technology is growing at an exponential rate, and just like you, I'm lucky enough to witness the point it <i>really</i> starts to turn fiction into reality.</p>
            <p>In my day to day job, I am a software engineer for a medium sized, technology-focused retail business. It's a very fun job which involves a lot of problem solving and pushing automation to its limits. Artificial intelligence is also a centrepiece of the software when it comes to the high level data analysis. I've learnt a lot in this role over the years, not just about programming, but also business and personal development.</p>
        </section>
        <section class="interests" id="interests">
            <h1>Interests</h1>
            <p>My interests are forever growing, as I learn and discover brand new ideas. There's an abundance of knowledge out there, and it's growing at a rate faster than any single human can keep up.</p>
            <p>I have many interests, most of which are centred around technology. This is a broad overview of them.</p>
            <ul>
                <li>Transhumanism
                    <ul>
                        <li>Biological immortality</li>
                        <li>Prosthetics</li>
                        <li>Nootropics</li>
                        <li>Human biology</li>
                        <li>DNA analysis</li>
                    </ul>
                </li>
                <li>Futurology
                    <ul>
                        <li>The singularity</li>
                        <li>Universal basic income</li>
                        <li>Automation</li>
                        <li>New technologies</li>
                    </ul>
                </li>
                <li>Computer science
                    <ul>
                        <li>Artificial intelligence</li>
                        <li>Robotics</li>
                        <li>Software architecture</li>
                        <li>PHP</li>
                        <li>Web development</li>
                    </ul>
                </li>
                <li>Personal development
                    <ul>
                        <li>Diet</li>
                        <li>Body building</li>
                        <li>Financial investments</li>
                        <li>Mind techniques</li>
                    </ul>
                </li>
            </ul>
        </section>
        <section class="projects" id="projects">
            <h1>Projects</h1>
            <p>Most of the projects I work on are developed under the organisation "Lentech". Although, I do have some personal projects which are often less serious and more experimental. I'm a pationate believer in the principles and power of open source, which is why I release all of my work publically, under the <a href="https://en.wikipedia.org/wiki/GNU_General_Public_License" target="_blank">GPL license</a>.</p>

            <div class="list">
                <a href="http://lentech.org/" target="_blank" class="project lentech">
                    <div class="icon"><img src="/images/projects/lentech.png"></div>
                    <div class="name">Lentech</div>
                </a>
                <a href="https://github.com/lenton/backgammon-ai" target="_blank" class="project backgammon-ai">
                    <div class="icon"><img src="/images/projects/backgammon_ai.png"></div>
                    <div class="name">Backgammon AI</div>
                </a>
            </div>

            <p>You can view all of my work on <a href="https://github.com/lenton" target="_blank">GitHub</a>.</p>
        </section>
        <footer class="main">
            ❤
        </footer>
    </body>
</html>
