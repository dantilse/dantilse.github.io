<?php
$pageTitle = "NXP Dashboard";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('components/component_head.php'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <?php include('components/component_left_col.php'); ?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <?php include('components/component_top_nav.php'); ?>
        </div>
        <!-- /top navigation -->

        <!-- /page content -->
        <div class="right_col" role="main">
          <div class="page-title">
            <div class="title_left">
              <h3><?php echo "$pageTitle"; ?></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <!-- Row #1 -->
          <div class="row">
            <div class="col-xs-12">
              <?php $componentTitle = "File Upload"; include('components/component_file_upload.php'); ?>
            </div>
          </div>

          <!-- Row #2 -->
          <div class="row">
            <div class="col-sm-6">
							<?php $panelTitle = "Some Title"; include('components/component_panel_start.php'); ?>
							<!-- content -->
							<h1>Main Heading</h1>
              <h2>Secondary Heading</h2>
              <h3>Tertiary Heading</h3>
              <h4>Heading Four</h4>
              <h5>Heading Five</h5>
              <h6>Heading Six</h6>
							<p>"Come along," said the Scarecrow heartily, and Dorothy added that she would be pleased to have his company. So the Tin Woodman shouldered his axe and they all passed through the forest until they came to the road that was paved with yellow brick.</p>
							<?php include('components/component_panel_end.php'); ?>

              <div class="x_panel">
                <div class="x_title">
                  <h2>Panel Title</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <p>So soon as he recovered himself, the poor little negro was assailed by yells and execrations from the crew. Tranquilly permitting these irregular cursings to evaporate, Stubb then in a plain, business-like, but still half humorous manner, cursed Pip officially; and that done, unofficially gave him much wholesome advice. The substance was, Never jump from a boat, Pip, except&mdash;but all the rest was indefinite, as the soundest advice ever is. Now, in general, STICK TO THE BOAT, is your true motto in whaling; but cases will sometimes happen when LEAP FROM THE BOAT, is still better. Moreover, as if perceiving at last that if he should give undiluted conscientious advice to Pip, he would be leaving him too wide a margin to jump in for the future; Stubb suddenly dropped all advice, and concluded with a peremptory command, "Stick to the boat, Pip, or by the Lord, I won't pick you up if you jump; mind that. We can't afford to lose whales by the likes of you; a whale would sell for thirty times what you would, Pip, in Alabama. Bear that in mind, and don't jump any more." Hereby perhaps Stubb indirectly hinted, that though man loved his fellow, yet man is a money-making animal, which propensity too often interferes with his benevolence.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Panel Title</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <p>But we are all in the hands of the Gods; and Pip jumped again. It was under very similar circumstances to the first performance; but this time he did not breast out the line; and hence, when the whale started to run, Pip was left behind on the sea, like a hurried traveller's trunk. Alas! Stubb was but too true to his word. It was a beautiful, bounteous, blue day; the spangled sea calm and cool, and flatly stretching away, all round, to the horizon, like gold-beater's skin hammered out to the extremest. Bobbing up and down in that sea, Pip's ebon head showed like a head of cloves. No boat-knife was lifted when he fell so rapidly astern. Stubb's inexorable back was turned upon him; and the whale was winged. In three minutes, a whole mile of shoreless ocean was between Pip and Stubb. Out from the centre of the sea, poor Pip turned his crisp, curling, black head to the sun, another lonely castaway, though the loftiest and the brightest.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <?php include('components/component_footer.php'); ?>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- scripts -->
    <?php include('components/component_scripts.php'); ?>

  </body>
</html>
