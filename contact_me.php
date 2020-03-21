<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

<?php
// important informatin for discuss commment system 
$page_name  = "contact_me.php";
$page_id = 2;
?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>
<div class="sections-container">
    <section class="main-section padding-2">
        <div class="post-container margin-3 main-border">
            <h1 class="title padding-1 no-margin in-block"> تواصل معي </h1>
            <p class="details no-margin padding-1">
                <span class="date-mod">آخر تعديل بتاريخ: 21-3-2020</span>
            </p>
            <div class="post-text-article padding-1 no-margin post-body">
                <!-- start the text -->
                <p>
                    يمكنك التواصل معي بعدة وسائل:
                </p>
                <ul>
                    <li>إما عن طريق بريدي الالكتروني watheq.alshowaiter[at]gmail.com</li>
                    <li>أو عن طريق حساباتي في مواقع التواصل الاجتماعي
                        <ul>
                            <li>في
                                <a href="https://www.facebook.com/watheq.show" rel="noopener noreferrer" target="_blank">فيس بوك&nbsp;</a>
                            </li>
                            <li>و
                                <a href="https://twitter.com/watheq_show" rel="noopener noreferrer" target="_blank">تويتر</a>&nbsp;
                            </li>
                            <li>و
                                <a href="https://github.com/watheqAlshowaiter">جت هب&nbsp;</a>
                            </li>
                            <li>و
                                <a href="https://www.linkedin.com/in/watheq-show/" rel="noopener noreferrer" target="_blank">لينكدن</a>
                            </li>
                            <li>و
                                <a href="https://ar.quora.com/profile/Watheq-Alshowaiter" rel="noopener noreferrer" target="_blank">كوورا&nbsp;</a>
                            </li>
                            <li>و
                                <a href="https://io.hsoub.com/u/watheq_alshowaiter" rel="noopener noreferrer" target="_blank">حسوب IO</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p>وأهلًا وسهلًا بك..</p>
                <!-- end the text -->
            </div>
    </section>
    <section class="side-bar padding-2">
        <?php include 'includes/sidebar.php'; ?>
    </section>

    <section class="comments-container">
        <div class="main-section padding-2">
            <div id="disqus_thread"></div>
            <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                var disqus_config = function() {
                    // this.page.url = <?= 'http://www.watheq.xyz/' . $page_name; ?>// Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = <?= $page_id; ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };

                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document,
                        s = d.createElement('script');
                    s.src = 'https://watheq-xyz-1.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>رجاء، فّعل جافاسكريبت حتى يتسنى لك التعليق <a href="https://disqus.com/?ref_noscript"></a></noscript>

        </div>
    </section>

</div>

<!-- Comment Section Disqus -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>