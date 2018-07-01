<!DOCTYPE html>
<html>
  <head>
    <?php include('head.php') ?>
    <script src="./js/search.js"></script>
    <link rel="stylesheet" href="./styling/catalogue.css">
  </head>
  <body>
    <div class="" id="header">
      <?php include('header.php') ?>
    </div>

    <div class="" id="nav">
      <?php include('nav.php') ?>
    </div>

    <div class="main">
      <div class="container">
        <!-- If we were sent the query, save it -->
        <input type="hidden" id="searchQuery" value="<?php $_REQUEST["query"] ?>"></input>

        <!-- These are the tabs at the top -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="search-results-tab" data-toggle="tab" href="#search_results" role="tab" aria-controls="serach-results" aria-selected="true">Search Results</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="articles-tab" data-toggle="tab" href="#articles" role="tab" aria-controls="articles" aria-selected="false">Articles</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="search_results" role="tabpanel" aria-labelledby="home-tab"><?php include('search_results.php') ?></div>
          <div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="profile-tab"><?php include('articles.php') ?></div>
      </div>
      </div>
    </div>


    <div class="" id="footer">
      <?php include('footer.php') ?>
    </div>
  </body>
</html>
