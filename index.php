<!DOCTYPE html>
<html lang="en">
<head>
    <title>Awesome Members</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body data-rsssl=1>
    <!-- Meet Our Team -->
    <section id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                  <h2>Meet Our Awesome Team</h2>
                  <p>Support open source and pick a limited edition T-shirt or plant a tree from Hacktoberfest!</p>
                </div>
            </div>
            <?php
            $profileCount = 0;
                $handle = fopen("data/data.txt", "r");
                if ($handle) {
                    while (($line = fgets($handle)) !== false) {

                        $userDetails = explode(",", $line);
                        if ($profileCount%4 == 0) {
                            echo "<div class='row'>";
                        }

            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="images/img<?php echo(rand(1,100)); ?>.png" class="img-fluid" alt="">
                      </div>
                        <div class="member-info">
                            <h4><?php echo $userDetails[0] ?></h4>
                            <span><?php echo $userDetails[1] ?></span>
                            <div class="social-links">
                                <a href="<?php echo $userDetails[2] ?>" target="_blank"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                        if ($profileCount%4 == 3) {
                            echo "</div>";
                        }

                        $profileCount = $profileCount+1;
                    }
                }

            ?>
        </div>
    </section>
</body>
</html>
