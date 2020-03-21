<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

<?php
// important informatin for discuss commment system 
$page_name  = "privacy_policy.php";
$page_id = 3;
?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>
<div class="sections-container">
    <section class="main-section padding-2">
        <div class="post-container margin-3 main-border">
            <h1 class="title padding-1 no-margin in-block"> سياسة الخصوصية </h1>
            <p class="details no-margin padding-1">
                <span class="date-mod">آخر تعديل بتاريخ: 21-3-2020</span>
            </p>
            <div class="post-text-article padding-1 no-margin post-body">
                <!-- start the text -->
                <p>
                    هذا مختصر للبيانات المجمعة من قبل الزوار أثناء تصفحهم للمدونة
                </p>
                <p><strong>التصفح</strong></p>
                <p>هذه هي مصادر جلب بيانات المستخدمين في المدونة:&nbsp;</p>
                <p><strong>أدوات جوجل مثل إحصائيات جوجل وإعلانات جوجل -في حالة وجودها-</strong></p>
                <p>يمكنك الذهاب إلى موقع
                    <a href="https://policies.google.com/privacy" rel="noopener noreferrer" target="_blank">سياسة الخصوصية الخاص بجوجل</a> لمعرفة سياستها في تجميع البيانات، ولست مسئولًا عن أساليبهم في تجميع البيانات.
                </p>
                <p><strong>نظام تعليقات Disqus</strong></p>
                <p>ويمكنك أيضًا الذهاب إلى
                    <a href="https://help.disqus.com/en/articles/1717103-disqus-privacy-policy">موقع نظام التعليقات</a> لمعرفة سياسة الخصوصية، ولست مسئولًا عن أساليبهم في تجميع البيانات.
                </p>
                <p><strong>الاشتراك بالقائمة البريدية&nbsp;</strong></p>
                <p>وهي مرتبطة بنظام القوائم البريدية mailchimp، وأجمع من قبلي: البريد الإلكتروني، والاسم الأول والاسم الأخير (اللقب) للاشتراك بقائمتي البريدية ويمكنك حذف بيانات وإلغاء الاشتراك في أي وقت تشاء، وهنا تلغى البيانات تلقائيًا عندي. راجع موقع سياسة الخصوصية لموقع mailchimp، وكذلك لست مسئولًا عن أساليبهم في تجميع البيانات.</p>
                <p><strong>وأستخدم Cloud Flare لخدمة الDNS&nbsp;</strong></p>
                <p>راجع
                    <a href="https://www.cloudflare.com/privacypolicy/" target="_blank">سياسة خصوصيتهم</a> وليست مسئولًا عن أساليبهم في تجميع البيانات.</p>
                <p><strong>أما الإعلانات الأخرى الموجودة على الموقع</strong></p>
                <p>فهي روابط عادية لموقع أو خدمة معينة، وهذا لا يعني مني أي ضمان لجودة المنتج أو أس شيء متعلق به، وصاحبه مسئول عنه..&nbsp;</p>
                <p><strong>قد <span>تحتوي بعض المقالات على روابط لبرامج مشاركة الأرباح (affiliate links) من مواقع مختلفة.</span></strong></p>
                <p><span><strong>أما عند الاتصال بي فأنا أستخدم البريد الالكتروني العادي والحسابات الاعتيادية لمواقع التواصل الاجتماعي.</strong></span></p>
                <p><span>ويمكنك مراجعة سياسات خصوصيتها لكل موقع على حدة.</span></p>
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