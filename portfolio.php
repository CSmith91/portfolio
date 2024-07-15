<!DOCTYPE html> 
<html lang="en"> 
    <?php 
    $pageTitle = "Portfolio";
    include 'header.php'; 
    ?>
    <body>
        <main>
            <section id="skills">
                <h2>Skills</h2>
                <div class="skill-category">
                    <h3 onclick="toggleCollapse(this)">Coding</h3>
                    <div class="content">
                        <ul>
                            <li>HTML</li>
                            <li>JS</li>
                            <li>CSS</li>
                            <li>PHP</li>
                            <li>ReactJS</li>
                            <li>SQL</li>
                            <li>HubL (A markdown language of HTML crossed with JS)</li>
                            <li>LaTeX (A markdown language akin to HTML. Mention this to any STEM student to invoke nightmares)</li>
                            <li>R (statistical software)</li>
                            <li>MatLab (what is this akin to?)</li>
                        </ul>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>CMS</h3>
                    <ul>
                        <li>WordPress</li>
                        <li>HubSpot (Certified)</li>
                    </ul>
                    <p>I have a lot of experience in WordPress and has been the source of most of my personal and professional projects. I chiefly design sites using Elementor, customise with Pods and enhance with CSS and JS where I need to.</p>
                </div>
                <div class="skill-category">
                    <h3>CRM</h3>
                    <p>I have garnered a lot of experience customising client CRM systems, either through establishing workflows and automations, or through integrations and custom code</p>
                    <ul>
                        <li>HubSpot</li>
                        <li>Pipedrive</li>
                        <li>ActiveCampaign</li>
                    </ul>
                    <p>An example of using custom code was for the HS quote feature. Quotes did not automatically provide tax, and VAT had to be manually added to each quote. Using HubL, I was able to add this to client's quote automatically</p>
                </div>
                <div class="skill-category">
                    <h3>Data & Reporting</h3>
                    <ul>
                        <li>De-duplication</li>
                        <li>Data validation</li>
                        <li>Extraction and import</li>
                        <li>Handling confidential data</li>
                        <li>Designing dashboard and reports</li>
                        <li>Looker Studio</li>
                    </ul>
                    <p>This is primarily migrating client contact data between CRMs. This also includes importing other objects, like deals/leads, companies/organisations and tickets</p>
                </div>
                <div class="skill-category">
                    <h3>Other Website Tools</h3>
                    <ul>
                        <li>Google Analytics</li>
                        <li>WooCommerce</li>
                        <li>Shopify</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Integration Tools</h3>
                    <ul>
                        <li>Make (formerly Integromat)</li>
                        <li>BPA (uses SQL)</li>
                    </ul>
                    <p>Make is a powerful tool that ultilises API connectors and allows us to extract data from one platform and feed into another, using triggers or setting up automations. I have integrated various ERP systems (be they Sage, Xero or custom-built) into CRM systems, linked MailChimp subscriber information to CRMs and form data from websites and spreadsheets.</p>
                </div>
                <div class="skill-category">
                    <h3>Other Technical Skills</h3>
                    <ul>
                        <li>Excel - my entire life is organised by spreadsheets. Please ask about my budgeting system for a lesson in 'living within your means'.</li>
                        <li>Productive - a KPI, similar to Confluence or Jira that uses a Kanban-style system for project management</li>
                        <li>GIMP - similar to Photoshop</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Soft Skills</h3>
                    <ul>
                        <li>Team Management - including hiring and training staff</li>
                        <li>Project Management - including collaboration</li>
                        <li>Highly Interpersonal - it feels contradictory to include this one on the list, but feedback I've received from friends, colleagues and bosses is I'm popular and well liked and generate loyal clients without much effort - but it takes two for any bi-lateral relationship. I think my ability to listen without judgement often fosters stronger relationships. If you care for personality tests, I tend to get INFJ on the [], Type 1 with a 9 wing on the [] and [] on the DISC test. All these point to a personality that prides themselves on their work and recognosing and respecting others. It's not really for me to say what I'm like, though.</li>
                    </ul>
                </div>
            </section>

            <section id="projects">
                <h2>Projects</h2>
                <div class="project">
                    <h3>Ibbett Mosely Auctions</h3>
                    <p>This site is live and you can view it <a href="https://ibbettmoselyauctions.co.uk/">here</a>.</p>
                    <p>The goal was to create a website that displayed the various lots that the client puts to auction in a catalogue style. The requirements were:</p>
                    <ul>
                        <li>Linking each lot to its respective auction</li>
                        <li>Linking each auction to its category, e.g. 'Jewelry'</li>
                        <li>Creating a back-office on a CMS that allows a non-technical client to add these lots easily</li>
                    </ul>
                    <p>
                        A powerful tool in this WordPress project is the 'Pods' plugin, which allows inserting custom fields and code into other plugins. I was able to use a PostGrid plugin
                        and add these additional elements, such that the individual lots include links back to their specific auction or their specific category.
                    </p>
                </div>   
                <div class="project">
                    <h3>X-Dental Lab</h3>
                    <p>
                        This simpler project was more focused on the design elements. This work therefore involved a lot of work on GIMP and also custom CSS - particularly in the footer.
                        As with the auction website, WordPress does a lot of the heavy lifting.
                    </p>
                </div>
            </section>

            <section id="flowbird-crm">
                <h2>Flowbird CRM</h2>
                <div class="case-study">
                    <h3>Case Studies</h3>
                    <p>I have worked with CRM developers and engineers as a technical manager to deliver software automations and integrations to clients and reported to the managing director. My meetings with non-technical clients involved learning about their business inefficiencies and shaping solutions using software. I relayed this information in a technical manner for my team to implement. We would then test, roll out the project and continue to monitor.
                    </p><p>My key role was the management of the technical team and how to deliver projects based on specifications provided by the sales team or the client directly. 
                    </p><p>I managed project budgets using Productive, a KPI. It allowed me measure and manage performance for all levels of work, which tracked billable (and non-billable) hours for task completion, granting me insight into speed and team member dedication. I reviewed and adjusted performance expectations by updating the sales team of our times for data cleaning and importing based on previous work. 
                    </p><p>Growing my team, I rewarded one colleague’s successes by promoting them to a lead role and got another to pass their probation following their training.
                    </p><p>We dealt with live data regarding customers purchasing tickets through EventBrite’s software. The customer was then targeted for tailored automatic email responses based on their input preferences. I managed the risk during this project to ensure no data loss or compromise, which also involved liaising with the implementation team manager with regard to the marketing and emails.
                    </p><p>I secured access to each clients’ CRMs and ERPs to a delegated level to facilitate completion of tasks without breaching any security protocols or data leaks.
                    </p><p>I looked after clients after project completion through support packages, whereby I identified risks through usage (a new sales person in their company misusing their CRM or clients changing access to their staff and opening vulnerabilities).
                    </p><p>I have hired and trained staff of differing faiths and ethnic backgrounds to my own, including staff less confident in their English. I respected their time off for religious holidays and ensured they were included in memos, meetings and after work activities as well as considering others’ dietary requirements for these events. 
                    </p><p>One of my team members was building an internal Pipedrive integration and suggested a more efficient way of executing the scenario than my brief. I praised their observation and altered the brief as per their suggestion, saving the number of ‘executions’ (which are billable) and made my team member feel acknowledged. I went back to the client informing them my team member had a better solution and we built it as per the new brief.
                    </p><p>I’ve also had to go back to a client with bad news when we weren’t able to achieve certain goals. An integration for a web form to HubSpot required a lot more hours than was initially scoped, and my colleague explained it was due to the nature of the form (it was several forms with non-identical fields, meaning each form needed new, separate logic). The client’s web developers insisted their forms were uniform and the client was unhappy; however, I stuck by my colleague. The client was difficult and this affected my colleague’s morale, so I praised their dedication and hard work and motivated them to complete this integration. This project also involved technical delivery issues outside of hours due to a risk of data loss. We needed to tailor the integration based on users submitting blank fields, typos on email addresses or entering forms twice, so we created error handlers to ensure the integration didn’t stop and lose data.
                    </p><p>‘Make’ software regularly adds new integration capabilities. One of the limitations of Pipedrive was that it didn’t remove people from marketing emails when they unsubscribed—a significant flaw that affected our sales team and implementation team’s work and the company as a whole with regards to marketing solutions. Make offered a means of fixing this and so I notified both teams. This also offered opportunities for the whole business.
                    </p><p>I wrote scoping documents detailing tasks and delegated them to my team. I briefed them so they understood their role and responsibilities, as well as which tasks required priority. This included directing a colleague away from a more speculative research task to a large data import task, which was a bottleneck to a project that required that data. 
                    </p><p>To combat challenging times, I setup ‘protected time’ for training and emails for tasks that needed clarification. I encouraged my team to do the same, reserving the first thirty minutes for training.  
                        </p>
                </div>
            </section>

            <section id="education-certificates">
                <h2>Education & Certificates</h2>
                <ul>
                    <li>BSc(Hons) in Mathematics 2:1 at Exeter Univeristy</li>
                    <li>Hyperion Dev Web Developement Bootcamp</li>
                </ul>
            </section>

            <section id="personal-projects">
                <h2>Personal Projects</h2>
                <p>
                    See my <a href="https://applewell.xyz/miner/v3.4/miner.html">Javascript skills</a> with this clicker game! Note that this is a side-project and always updating, so feel free to stop by whenever!
                </p>
                <p>
                    A game of hangman using React
                </p>
                <p>
                    Download my Dungeon & Dragons automatic character creator - created entirely using Excel!
                </p>
            </section>

            <section id="hobbies">
                <h2>Hobbies</h2>
                <ul>
                    <li>Writing - I have written an epic fantasy novel at 289000 words and continue writing other works in the fantasy genre. You can view the prologue for my first complete novel <a href="./prologue.html">here</a>. Feedback welcome.</li>
                    <li>Medieval Fighting Tournaments - It's exactly as it sounds. I don't partake, I'm just too skinny and not angry enough. Two teams dressed in historically accurate armour run at each other. If your knee touches the ground, you're out. You can see a poorly shot video of this in Belmonte <a>here</a>. This was a regional tournament of all the qualifying regions of Spain in 2022. Valenica was a good team, but ultimately Madrid prevailed.</li>
                    <li>History - kind of fits in with the above two.</li>
                    <li>Reading - fits in with the above three. Favourites below:
                    <ul>
                        <li>Fiction - Game of Thrones (George RR Martin), Romance of the Three Kingdoms (Lo Kuan-chung / Luo Guanzhong) </li>
                    </ul>
                    <ul>
                        <li>Non-Fiction - The Wager (David Grann), The Greatest Traitor (Ian Mortimer), Tricks of the Mind (Derren Brown)</li>
                    </ul>
                </li>
                    <li>Board Games - Eldritch Horror, Gloomhaven, Root, Brass (Birmingham)</li>
                    <li>Archery - I have my own composite bow and shoot left-handed, and always bruise my right forearm on my first shot and proceed to never do it again (until next session).</li>
                </ul>
            </section>
        </main>

        <a href="#top" class="back-to-top" id="backToTop">
            &#8679; <!-- Unicode for up arrow -->
        </a>
        <script src="portfolio.js"></script>

    </body> 
    </html>