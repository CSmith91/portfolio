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
                    <div onclick="toggleCollapse(this)" class="collapse-div">
                        <h3>Coding Languages</h3>
                        <img src="./images/white-collapse.png" alt="collapse">
                    </div>
                    <div class="content-grid" style="display: block;">
                        <ul class="code-grid">
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/html.png" alt="HTML icon">
                                    <p>HTML</p>
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/js.png" alt="JavaScript icon">
                                    <p>JS</p>
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/css.png" alt="CSS icon">
                                    <p>CSS</p>
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/php.png" alt="PHP icon">
                                    <p>php</p>
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/react.png" alt="ReactJS icon">
                                    <p>ReactJS</p>
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/sql.png" alt="SQL icon">
                                    <p>SQL</p>
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/hubspot.png" alt="HubL icon">
                                    <p>HubL</p>
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/tex.png" alt="LaTeX icon">
                                    <p>LaTeX</p>
                                </div>
                            </li>
                            <li class="sneak1">
                                <div class="code-grid-item">
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/r.png" alt="R icon">
                                    <p>R</p>
                                </div>
                            </li>
                            <li class="sneak2">
                                <div class="code-grid-item">
                                </div>
                            </li>
                            <li>
                                <div class="code-grid-item">
                                    <img src="./images/math.png" alt="MatLab icon">
                                    <p>MatLab</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- CRM / CMS section -->
                <section class="two-col-section">
                    <div class="two-col">
                        <div class="skill-category">
                            <div onclick="toggleCollapse(this)" class="collapse-div col1">
                                <h3>CMS</h3>
                                <img src="./images/white-collapse.png" alt="collapse">
                            </div>
                            <ul>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/wordpress.png" alt="icon">
                                        <p>WordPress</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/hubspot.png" alt="icon">
                                        <p>HubSpot (Certified)</p>
                                    </div>
                                </li>
                            </ul>
                            <p>I have a lot of experience in WordPress and has been the source of most of my personal and professional projects. I chiefly design sites using Elementor, customise with Pods and enhance with CSS and JS where I need to.</p>
                        </div>
                        <div class="skill-category">
                            <div onclick="toggleCollapse(this)" class="collapse-div col1">
                                <h3>CRM</h3>
                                <img src="./images/white-collapse.png" alt="collapse">
                            </div>
                            <p>I have garnered a lot of experience customising client CRM systems, either through establishing workflows and automations, or through integrations and custom code</p>
                            <ul>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/hubspot.png" alt="icon">
                                        <p>HubSpot</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/pipedrive.png" alt="icon">
                                        <p>Pipedrive</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/ac.png" alt="icon">
                                        <p>ActiveCampaign</p>
                                    </div>
                                </li>
                            </ul>
                            <p>An example of using custom code was for the HS quote feature. Quotes did not automatically provide tax, and VAT had to be manually added to each quote. Using HubL, I was able to add this to client's quote automatically</p>
                        </div>
                    </div>
                </section>
                <div class="skill-category">
                    <div onclick="toggleCollapse(this)" class="collapse-div">
                        <h3>Data & Reporting</h3>
                        <img src="./images/white-collapse.png" alt="collapse">
                    </div>
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
                <!-- integration and web tool section -->
                <section class="two-col-section">
                    <div class="two-col">
                        <div class="skill-category">
                            <div onclick="toggleCollapse(this)" class="collapse-div col1">
                                <h3>Integration Tools</h3>
                                <img src="./images/white-collapse.png" alt="collapse">
                            </div>
                            <ul>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/make.png" alt="icon">
                                        <p>Make (formerly Integromat)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/bpa.png" alt="icon">
                                        <p>BPA platform (uses SQL)</p>
                                    </div>
                                </li>
                            </ul>
                            <p>Make is a powerful tool that ultilises API connectors and allows us to extract data from one platform and feed into another, using triggers or setting up automations. I have integrated various ERP systems (be they Sage, Xero or custom-built) into CRM systems, linked MailChimp subscriber information to CRMs and form data from websites and spreadsheets.</p>
                        </div>
                        <div class="skill-category">
                            <div onclick="toggleCollapse(this)" class="collapse-div col1">
                                <h3>Website Tools</h3>
                                <img src="./images/white-collapse.png" alt="collapse">
                            </div>
                            <ul>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/cpanel.png" alt="cpanel icon">
                                        <p>cPanel</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/google-analytics.png" alt="icon">
                                        <p>Google Analytics</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/woo.png" alt="icon">
                                        <p>WooCommerce</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-and-text">
                                        <img src="./images/shopify.png" alt="icon">
                                        <p>Shopify - <a href="./projects.php#shopify-ex">case study</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </section>
                <div class="skill-category">
                    <div onclick="toggleCollapse(this)" class="collapse-div">
                        <h3>Other Technical Skills</h3>
                        <img src="./images/white-collapse.png" alt="collapse">
                    </div>
                    <ul>
                        <li>
                            <div class="icon-and-text">
                                <img src="./images/github.png" alt="git icon">
                                <p>Github & Git Version Control</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-and-text">
                                <img src="./images/excel.png" alt="icon">
                                <p>Excel - my entire life is organised by spreadsheets. Please ask about my budgeting system for a lesson in 'living within your means'.</p>
                            </div>
                            </li>
                        <li>
                            <div class="icon-and-text">
                                <img src="./images/productive_io.jpeg" alt="icon" id="pio">
                                <p>Productive - a KPI, similar to Confluence or Jira that uses a Kanban-style system for project management</p>
                            </div>    
                        </li>
                        <li>
                            <div class="icon-and-text">
                                <img src="./images/gimp.png" alt="icon">
                                <p>GIMP - similar to Photoshop</p>
                            </div>    
                        </li>
                    </ul>
                </div>
                <div class="skill-category">
                    <div onclick="toggleCollapse(this)" class="collapse-div">
                        <h3>Soft Skills</h3>
                        <img src="./images/white-collapse.png" alt="collapse">
                    </div>
                    <ul>
                        <li>Team Management - including onboarding and coaching staff</li>
                        <li>Project Management - including collaboration with other teams</li>
                        <li>Communicative - including speaking with non-technical clients, and similarly 'translating' technical talk into easy-to-understand analogies.</li>
                        <li>Highly Interpersonal - it feels contradictory to include this one on the list, but feedback I've received from friends, colleagues and bosses is I'm popular and well liked and generate loyal clients without much effort - but it takes two for any bi-lateral relationship. I think my ability to listen without judgement often fosters stronger relationships. If you care for personality tests, I tend to get <a href="https://www.16personalities.com/infjs-at-work" target="_blank">INFJ on Myers-Briggs</a>, <a href="https://enneagramuniverse.com/enneagram/learn/enneagram-wings/enneagram_1w9/" target="_blank">Type 1w9 wing on the Enneagram</a> and <a href="https://www.discprofile.com/disc-styles/conscientiousness/cs-disc-personality" target="_blank">CS style on the DISC test</a>. All these point to a personality that prides themselves on their work and recognising and respecting others. It's not really for me to say what I'm like, though.</li>
                    </ul>
                </div>
            </section>
        </main>

        <script src="./js/portfolio.js"></script>

        <footer><?php    
        include 'footer.php';
        ?>
        </footer>

    </body> 
    </html>