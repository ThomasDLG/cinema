<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../scss/main.css" />
    <link rel="stylesheet" href="../mediaqueries.css">
    <title>Design System</title>
</head>
<body>
    <section id="design_system">
        <div class="container">
            <h2 class="text-center">Design System</h2>

            <!-- TITLE -->

            <div id="title" class="d-flex justify-center wrap">
                <?php
                $title_lvl_1 = '<h1>Text Sample</h1>';
                $title_lvl_2 = '<h2>Text Sample</h2>';
                $title_lvl_3 = '<h3>Text Sample</h3>';
                $title_lvl_4 = '<h4>Text Sample</h4>';
                $title_lvl_5 = '<h5>Text Sample</h5>';
                $title_lvl_6 = '<h6>Text Sample</h6>';
                ?>
                <h2 class="text-center w-100">Title</h2>
                <input class="code w-90 mr-1" id="title_lvl_1" value="<?= htmlentities($title_lvl_1) ?>">
                <button class="copy" data-clipboard-target="#title_lvl_1"><i class="fa-solid fa-copy"></i></button>

                <input class="code w-90 mr-1" id="title_lvl_2" value="<?= htmlentities($title_lvl_2) ?>">
                <button class="copy" data-clipboard-target="#title_lvl_2"><i class="fa-solid fa-copy"></i></button>

                <input class="code w-90 mr-1" id="title_lvl_3" value="<?= htmlentities($title_lvl_3) ?>">
                <button class="copy" data-clipboard-target="#title_lvl_3"><i class="fa-solid fa-copy"></i></button>

                <input class="code w-90 mr-1" id="title_lvl_4" value="<?= htmlentities($title_lvl_4) ?>">
                <button class="copy" data-clipboard-target="#title_lvl_4"><i class="fa-solid fa-copy"></i></button>

                <input class="code w-90 mr-1" id="title_lvl_5" value="<?= htmlentities($title_lvl_5) ?>">
                <button class="copy" data-clipboard-target="#title_lvl_5"><i class="fa-solid fa-copy"></i></button>

                <input class="code w-90 mr-1" id="title_lvl_6" value="<?= htmlentities($title_lvl_6) ?>">
                <button class="copy" data-clipboard-target="#title_lvl_6"><i class="fa-solid fa-copy"></i></button>
            </div>

            <!-- LINKS -->

            <div id="button" class="d-flex justify-center wrap">
                <?php
                $btn_icon_right = '<a href="#" class="btn btn-icon-right">Button Icon Right<i class="fa-solid fa-plus"></i></a>';
                $btn_icon_left = '<a href="#" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Button Icon Left</a>';
                $btn = '<a href="#" class="btn">Button</a>';
                $btn_small = '<a href="#" class="btn-small">Button</a>';
                $btn_tags = '<a href="#" class="btn-tags"><img src="src/icons/4k.svg" alt="" /></a>';
                $link = '<a href="#" class="link">link</a>';
                ?>
                <h2 class="text-center w-100">Buttons</h2>
                <a href="#" class="btn btn-icon-right">Button Icon Right<i class="fa-solid fa-plus"></i></a>
                <input class="code w-90 mr-1" id="btn_icon_right" value="<?= htmlentities($btn_icon_right) ?>">
                <button class="copy" data-clipboard-target="#btn_icon_right"><i class="fa-solid fa-copy"></i></button>

                <a href="#" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Button Icon Left</a>
                <input class="code w-90 mr-1" id="btn_icon_left" value="<?= htmlentities($btn_icon_left) ?>">
                <button class="copy" data-clipboard-target="#btn_icon_left"><i class="fa-solid fa-copy"></i></button>

                <a href="#" class="btn">Button</a>
                <input class="code w-90 mr-1" id="btn" value="<?= htmlentities($btn) ?>">
                <button class="copy" data-clipboard-target="#btn"><i class="fa-solid fa-copy"></i></button>

                <a href="#" class="btn-small">Button Small</a>
                <input class="code w-90 mr-1" id="btn_small" value="<?= htmlentities($btn_small) ?>">
                <button class="copy" data-clipboarbtn_smalld-target="#btn_small"><i class="fa-solid fa-copy"></i></button>

                <a href="#" class="btn-tags mx-32"><img src="../../src/icons/4k.svg" alt="" /></a>
                <input class="code w-90 mr-1" id="btn_tags" value="<?= htmlentities($btn_tags) ?>">
                <button class="copy" data-clipboard-target="#btn_tags"><i class="fa-solid fa-copy"></i></button>

                <a href="#" class="link">Link Hover</a>
                <input class="code w-90 mr-1" id="link" value="<?= htmlentities($link) ?>">
                <button class="copy" data-clipboard-target="#link"><i class="fa-solid fa-copy"></i></button>

            </div>

            <!-- ACCORDION -->

            <div id="dropdown" class="d-flex justify-center wrap">
                <?php
                $accordion = '<div class="accordion">
                <div class="accordion-item">
                  <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                  </div>
                </div>
              </div>
            </div>';
                ?>
                <h2 class="text-center w-100">Dropdown Menu</h2>
                <div class="container">
  <h2>Frequently Asked Questions</h2>
  <div class="accordion">
    <div class="accordion-item">
      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
  </div>
</div>
                <textarea class="code w-100 h-auto" id="accordion"><?= htmlentities($accordion) ?></textarea>
                <button class="copy" data-clipboard-target="#accordion"><i class="fa-solid fa-copy"></i></button>

            </div>
        </div>
    </section>
<script src="../../js/dist/clipboard.min.js"></script>
<script>
      var clipboard = new ClipboardJS('.copy');

      clipboard.on('success', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });

      clipboard.on('error', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });
    </script>
<script src="../../js/app.js" defer></script>
</body>
</html>