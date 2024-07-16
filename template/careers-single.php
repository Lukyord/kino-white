<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="careers-single-main">
    <section class="sc job-description">
        <div class="careers-highlight bg-white static gap-lg padding-0">
            <div class="header">
                <div class="type size-overline uppercase animate fadeIn weight-bold">Full time</div>
                <h2 class="size-h1 weight-bold padding-bottom-sm padding-top-sm uppercase" data-split data-split-animate>Project Manager</h2>
                <div class="description animate fadeIn">
                    <p>We seeks a Project Manager with proven project management experience and strong organizational skills. The ideal candidate excels in multitasking, leadership, and communication, and is proficient in project management software. </p>
                </div>
            </div>
            <div class="info uppercase size-subtitle2">
                <div class="info-item animate fadeIn">
                    <h3 class="weight-bold">Category</h3>
                    <p class="c-gray">Operation</p>
                </div>
                <div class="info-item animate fadeIn">
                    <h3 class="weight-bold">Education</h3>
                    <p class="c-gray">University Degree or above</p>
                </div>
                <div class="info-item animate fadeIn">
                    <h3 class="weight-bold">Location</h3>
                    <p class="c-gray">Seoul, Rep. of Korea</p>
                </div>
                <div class="info-item animate fadeIn">
                    <h3 class="weight-bold">Position</h3>
                    <p class="c-gray">1</p>
                </div>
                <div class="share">
                    <p class="size-subtitle2 weight-bold uppercase padding-bottom-sm animate fadeIn">share this post</p>
                    <div class="social-media animate fadeIn">
                        <a href="javascript:;" onclick="fbShare()"><i class="ic ic-facebook size-icon-lg"></i></a>
                        <a href="javascript:;" onclick="tweetShare()"><i class="ic ic-twitter size-icon-lg"></i></a>
                    </div>
                </div>
                <div class="job-description-button">
                    <a href="#linkout" class="button button-primary animate fadeIn">Apply Resume</a>
                </div>
            </div>
        </div>

        <div class="careers-description">
            <div class="description-list">
                <h3 class="size-h3 uppercase weight-bold margin-bottom-2xs animate fadeIn">Responsibilities - Project Manager</h3>
                <ul class="animate fadeIn">
                    <li>Responsible for the shows' operation from inception to execution and post event reporting.</li>
                    <li>Leading the project across suppliers, venue, management, tour bookers and gov't authorities, ensuring a smooth set up, seamless running and event planning of all shows ⁠</li>
                    <li>Managing overall event program, daily operational matters and show budgets.</li>
                    <li>Be a key contact between the departments - production, operations, marketing, and vendors.</li>
                    <li>Work on show budgets and offers, while striving for no overspend and delivering a profit for the show pipeline.</li>
                    <li>Be part of a team that supports the Kino White business as required.</li>
                </ul>
            </div>

            <div class="description-list">
                <h3 class="size-h3 uppercase weight-bold margin-bottom-2xs animate fadeIn">Main Duties</h3>
                <ul class="animate fadeIn">
                    <li>Design and deliver a strategic operational plan with production team, which aligns with the show budget while delivering a great experience for fans, artists and touring parties. </li>
                    <li>Prepare seat plans and ticketing maps across multiple venues in South Korea.</li>
                    <li>Update various parties on a timely basis on various aspects (bookings, P&L, etc)</li>
                    <li>Work closely with all depts across various projects</li>
                    <li>Be a team player and contribute across the business</li>
                    <li>Collaborate with Marketing on the show announcements on-sale plans and other key activities.</li>
                    <li>Handle the show flow, manpower and overall on-site matters.</li>
                </ul>
            </div>

            <div class="description-list">
                <h3 class="size-h3 uppercase weight-bold margin-bottom-2xs animate fadeIn">Skills/Requirement </h3>
                <ul class="animate fadeIn">
                    <li>Must be fluent in both of Korean and English. (Mandarin or Japanese is a plus)</li>
                    <li>Relationships in the entertainment industry across South Korea including venues and event related vendors preferred.</li>
                    <li>Candidates with a sound proficiency in AutoCAD, Adobe (Illustrator/Photoshop) preferred</li>
                    <li>Excel/Microsoft office</li>
                    <li>A positive multi-tasker with strong communication skills and a can-do attitude</li>
                    <li>Ability to work in fast paced environment while under pressure and meeting tight timelines</li>
                    <li>A fast learner with event management experience</li>
                    <li>Work on weekend and public holidays as required</li>
                </ul>
            </div>

            <div class="description-summary size-subtitle2 uppercase weight-bold">
                <p class="animate fadeIn">If you are interested in this position, apply for it now!</p>
                <p class="animate fadeIn">Apply by sending your English resume/CV to <a href="#mail" class="black-text-hover underline-hover">info@kinowhite.com</a></p>
            </div>
        </div>
    </section>

    <section id="other-positions" class="sc bg-black">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold animate c-white" data-split data-split-animate>OTHER POSITIONS</h1>
            </div>
        </div>
        <div class="other-positions">
            <?php
            for ($i = 1; $i <= 3; $i++) {
                include($root . "include/element-careers-postion.php");
            }
            ?>
        </div>
        <div class="load-more-button animate fadeIn">
            <a href="javascript:;" class="button button-secondary">Load More</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>