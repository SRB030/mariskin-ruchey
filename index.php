<?php
   require 'app/header.php';
   include 'configs/config_db.php';
?>
<main xmlns="http://www.w3.org/1999/html">

      <div class="center">
        <?php
          if ($data['login'] != ''){

            $posts = array(
                'ZPXCQ494' => 1,
                'RZMPRT56' => 2,
            );
            $request = array_rand($posts);
            echo "login:",$data['login'],'<br>';
            echo "passkod:",$request;

          }else {
            echo "ты не авторизован!";
          }
         ?>
        </div>

    <div class="container">
    <hr noshade="noshade">

    <div class="row">

         <div class="col s12 m5 right">
            <div class="card-panel teal" style="background: #e0e0e0 !important;">
          <span class="white-text">
              <form method="post">
              <button name="tit"  style="color:#000000;" class="waves-effect waves-light btn"><i class="material-icons">replay</i></button>
              <a  href="" style="color: #FFFFFF;"><h5 style="text-align:center; color: #000;">Великие цитаты Эльдара!</h5></a>
            <?php
                $posts = array(
                    'солнце это планета а не звезда' => 1,
                    '1 анегдот можно рассказать 100 раз' => 2,
                    'пойду шины прокалывать' => 3,
                    'Крч хотите анегдот про ишака' => 4,
                    'мля иди нахуй' => 5,
                    'дициметр' => 6,
                );
                $request = array_rand($posts);
              ?>
              <p style="text-align:center;" ><b style='color: #000'><?php echo '"',$request,'"';?></b></p>
          </span>
            </div>
         </form>

                 <div class="card-panel teal" style="background: #e0e0e0 !important;">
          <span class="white-text">
            <form method="post" class="center">
                <h5 style="color: #000;"><p style="text-align: center;">passkod</p></h5>
            <div class="input-field inline">
                 <input name="passkod" type="password">
                <button class="btn waves-effect waves-light" name='btn'>send
                    <i class="material-icons right">send</i>
                </button>
            </div>
            </form>
               </span>
                 </div>
                     <p>
                         поссле ввода пасскода тебе может выпасть следущее:<br/>
                         <b>часто выпадет</b><br/>
                         пак приватных фото<br/>
                         личные переписки<br/>
                         <b>редко выпадает</b><br/>
                         страница в вк<br/>
                         фото гафурова<br/>
                     <h6>есле не чего не выпало то не обижайся!</h6>
                     Для получения пасскода необходимо обратится к администратору сайта!<br>
                     </p>
             <?php
             if(isset($_POST['btn']))
                 if ($_POST['passkod'] == 'ZPXCQ494'){
                     echo "<p>тебе выпал пак с фотками гафурова</p><a href='static/fails/qwer.zip' download='qwer.zip'>скачать</a>";
                 }

             if ($_POST['passkod'] == 'UHN235'){
                 echo "<p>тебе выпала страница в вк</p><a href='static/fails/log.txt' download='log.txt'>скачать</a>";
             }

             if ($_POST['passkod'] == 'RZMPRT56') {
                 echo "<p>тебе выпал пак интимных фото!</p><a href='static/fails/18.zip' download='18.zip'>скачать</a>";
             }
             if ($_POST['passkod'] == 'PISOSR') {
                 echo "<p>тебе выпала личная переписка</p><a href='static/fails/masseg.txt' download='masseg.txt'>скачать</a>";
             }
             ?>
         </div>

    <h4 style="text-align: center">newspost!</h4>

    <?php $posts = forpost(); ?>
    <?php foreach($posts as $post): ?>
        <div class="col s15 m7">
          <div class="card">
            <div class="card-image">
              <img src="<?=$post['image'];?>">
              <span class="card-title"><?=$post['title'];?></span>
            </div>
            <div class="card-content">
              <p><?=$post['body'];?></p>
            </div>
          </div>
        </div>
    <?php endforeach; ?>
    </div>

        <hr noshade="noshade">

    </div>

    <!--<script type="text/javascript">
      VK.init({apiId: 5888482, onlyWidgets: true});
    </script>

        <div class="row">
        <div id="vk_comments"></div>
        </div>

    <script type="text/javascript">
    VK.Widgets.Comments("vk_comments", {limit: 10, width: "none", attach: "*"});
    </script>-->

</main>
<?php
    require 'app/footer.php'
?>
