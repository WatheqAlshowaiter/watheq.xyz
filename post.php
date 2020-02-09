<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

    <!-- Navigation -->

<?php include 'includes/navigation.php'; ?>

<section class="main-section padding-2">
  <div class="post-container margin-3 main-border">
    <h1 class="title padding-1 no-margin in-block"> ترتيب مكتبتي، ومناهج دراسية، وعن شخصيتي، وعن الماضي والمستقبل</h1>
    <p class="details no-margin padding-1">
      <span class="date in-block">5, Dec</span><span class="cat-name in-block"><a href="">شعر</a></span>
    </p>
    <p class="post-text padding-1 no-margin">
        في أحد المرات التي مررت بها بأحد باعة الكتب المتجولين جوار بوابة الجامعة، وجدت كتابا يحمل عنوان "لو كان كافكا يحمل هاتفا نقالا" وعلى صورة الغلاف صورة كتاب يقرأ كتابا آخر ويشرب عصير التوت الأحمر أو ربما شيء آخر. أعجبني الغلاف جدا وأعجبني الاتكاء على (كافكا) في العنوان على غرار رواية هاروكي موراكامي "كافكا على الشاطئ". قلت لنفسي حركة معروفة يونس، كافكا؟! 
        لم يثرني الكتاب على أي حال لقراءته أو شراءه. نسيت أمره بعد ذلك تماما. 
   <br>
  بعد فترة من التقلّبات على الإنترنت ومن الضجر والسأم من مواقع التواصل الاجتماعي وجدت نفسي راسيا على موقع حسوب IO . تابعت رواده بصمت إلى حد ما، وكنت أدخل إلى مدونة كل (بارز) في نقاشات الموقع، وجمعت الكثير من المدونات. دخلت إلى مدونة يونس بن عمارة وأعجبني محتواها الأدبي وغير الأدبي وأعجبني كثير من نقاشاته وحججه ومنطقه وثقافته الواسعة. وجدت بعد ذلك أنه كتب "لو كان كافكا" وأضاء مصباح بجانب رأسي مخبرا عن أنه هو يونس! كاتب ذلك الكتاب. أووووه. 
   <br>
  استمرّت المتابعة والاستفادة من تعليقاته ومشاركاته وخاصة عندما يحيلك في كل حُجّة ومعلومة إلى رابط، ويصفعك بكتابين أو أكثر، وكأني بكثير من رواد الموقع قائلين "كم قرأ هذا كتبا؟". كما أنه يحب المساعدة ولم يتخل عن روح التعاون والعطاء لرواد موقع حسوب طوال فترة قد يمل فيها أي أحد من طولها. 
    <br>
  في فترة قريبة، قام يونس بنشر كتاب إلكتروني "أفيد ١٠٠ تعليق على حسوب IO"جامعا فيه تعليقاته على هذا الموقع والتي تعتبر مقالات مستقلة لما فيها من الفائدة والعمق والطول. قررت في تلك الفترة قراءة كل منتوجه الكتابي في كتبه الإلكترونية بدءاً من كتاباته الساخرة "كانسل" وليس انتهاء بـ "أفيد ١٠٠ تعليق على حسوب". حاولت قدر الإمكان أن أرصد تطور الكتابة والنضج الذي مر به بالبدء بالأقدم متجها نحو الأحدث، فقرأت كل كتبه الإلكترونية وهي متفرقة ولكنها قصيرة على أي حال، ثم قرأت بعضاً مما ترجم حيث قرأت ترجمته للقصة القصيرة" المكتبة الغربية" لهاروكي موراكامي ورواية "مهد القطة" لكورت فونيجت.
    </p>
  <br>
    <div class="post-tags padding-1 no-margin">
      <b class="pa-ra in-block">وسوم</b>
      <div class="in-block">
        <span>وسم 1</span>
        <span>وسم 2</span>
        <span>وسم 3</span>
        <span>وسم 4</span>
        <span>وسم 4</span>
      </div>
    </div>
  </div>
 <div class="commentbox" id="post<?php echo $post_id; ?>"></div>
      <script src="https://unpkg.com/commentbox.io/dist/commentBox.min.js"></script>

<script> 
      // commentBox('5715241090416640-proj');
      // import qs from 'qs';
    commentBox('5715241090416640-proj', {
    className: 'commentbox', // the class of divs to look for
    defaultBoxId: 'commentbox', // the default ID to associate to the div
    tlcParam: 'tlc', // used for identifying links to comments on your page
    backgroundColor: null, // default transparent
    textColor: null, // default black
    subtextColor: null, // default grey
    singleSignOn: null, // enables Single Sign-On (for Professional plans only)
    /**
     * Creates a unique URL to each box on your page.
     * 
     * @param {string} boxId
     * @param {Location} pageLocation - a copy of the current window.location
     * @returns {string}
     */
    createBoxUrl(boxId, pageLocation) {

        pageLocation.search = ''; // removes query string!
        pageLocation.hash = boxId; // creates link to this specific Comment Box on your page
        return pageLocation.href; // return url string
    },
    /**
     * Fires once the plugin loads its comments.
     * May fire multiple times in its lifetime.
     * 
     * @param {number} count
     */
    onCommentCount(count) {

    }


});


      </script> 


  
</section><section class="side-bar padding-2">
  <?php include 'includes/sidebar.php'; ?>
</section>

<?php 

if (isset($_GET['p_id'])) {
    $post_id = $_GET['p_id']; 
    $query = "SELECT * FROM posts WHERE post_id = $post_id limit 1"; 
    $select_post_by_id = mysqli_query($connection, $query);

   while ($row = mysqli_fetch_assoc($select_post_by_id)) {
     $post_id = $row['post_id']; 
     $cat_id = $row['cat_id'];
     $post_title = $row['post_title']; 
     //$post_author = $row['post_author'];
     $post_date = $row['post_date'];
     $post_image = $row['post_image'];
     $post_content = $row['post_content'];
     $post_tags = $row['post_tags'];
     $post_comment_count = $row['post_comment_count'];
     $post_status = $row['post_status'];
    }}

 ?>


    <!-- Page Content -->
   <!--  <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12 text-center">

          <?php 
             $query = "SELECT * FROM posts where post_id = $post_id limit 1"; 
              $select_the_post = mysqli_query($connection, $query);

              $row = mysqli_fetch_assoc($select_the_post); 


              // there is no need for while or ant loop becaues it is just a one post 
              // while ($row = mysqli_fetch_assoc($select_the_post)) {
               
               ?> 



          <!-- Title -->
          <h1 class="mt-4"><?php echo $row['post_title']; ?></h1>

          <!-- Author -->
          <!-- there is no author because all post by me -->

          <!-- <hr> -->

          <!-- Date/Time -->
          <p> <?php echo $row['post_date']; ?></p>

          <hr>
          <!-- Preview Image -->
          <!-- <img src="images/<?php// echo $row['post_image'] ;?>" class ="img-fluid rounded"> -->
          <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

          <!-- <hr> -->

          <!-- Post Content -->
          <div class="post_content_long">
            <?php echo $row['post_content']; ?>
              </div>
          
         

          <!-- <hr> -->

          <p><?php //echo "وسوم: " . $row['post_tags']; ?></p>


          <!-- <?php //}  // end of posts ?> -->

        </div>

                            

        <!-- Sidebar Widgets Column -->
        <!-- if I want it in my single posts uncomment this line -->
        <?php //include 'includes/sidebar.php' ?>

      </div>
      <!-- /.row -->
      <!--Comment Section --> 
     
    </div> -->
    <!-- /.container -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>