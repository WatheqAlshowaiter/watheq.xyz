<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

<?php
// important informatin for discuss commment system 
$page_name  = "about.php";
$page_id = 1;
?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>
<div class="sections-container">
  <section class="main-section padding-2">
    <div class="post-container margin-3 main-border">
      <h1 class="title padding-1 no-margin in-block"> عني </h1>
      <p class="details no-margin padding-1">
        <span class="date-mod">آخر تعديل بتاريخ: 21-3-2020</span>
      </p>
      <div class="post-text-article padding-1 no-margin post-body">
        <div style="text-align:center">
          <img src="images/pages_images/my_photo.jpg" style="width:200px;height:200px; " alt="صورتي الشخصية">
        </div>
        <!-- start the text -->
        <p>واثق عبدالملك الشويطر. من اليمن. تخرجت في سنة 2019 في تخصص تقنية المعلومات في جامعة صنعاء. مبرمج ويب وخاصة برمجة الطرف الخلفي (back-end). وأعمل بلغة برمجة PHP. برمجت مدونتي هذه و
          <a href="https://github.com/WatheqAlshowaiter/" target="_blank">بعض المشاريع الصغيرة</a> الأخرى.
        </p>
        <p >أحب القراءة والثقافة العامة في شتى المواضيع، وأحب الكتابة أيضًا، ويمكنك قراءة مقالاتي المختلفة في المدونة.</p>
        <p >ترجمت&nbsp;
          <a href="https://academy.hsoub.com/profile/73703-%D9%88%D8%A7%D8%AB%D9%82-%D8%A7%D9%84%D8%B4%D9%88%D9%8A%D8%B7%D8%B1/content/" target="_blank">بعض المقالات التقنية</a> من اللغة الإنجليزية إلى العربية لصالح أكاديمية حسوب.
        </p>
        <p >ومن هواياتي الرياضية كرة القدم ممارسة أكثر منها مشاهدة.</p>
        <p>
          وهذا
          <a href="https://seirah.com/watheq" target="_blank">رابط سيرتي الذاتية</a>.
        </p>
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