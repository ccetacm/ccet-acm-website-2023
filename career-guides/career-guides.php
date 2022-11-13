<?php

class CareerGuide {
    public $time;
    public $content;
    public $title;
    public $userAvatar;
    public $highlightImage;
    public $userName;
    public $link;

    public function __construct($time, $userName, $content, $title, $userAvatar, $highlightImage, $link)
    {
        $this->time = $time;
        $this->content = $content;
        $this->title = $title;
        $this->userAvatar = $userAvatar;
        $this->highlightImage = $highlightImage;
        $this->userName = $userName;
        $this->link = $link;
    }

    function getContent() {
        return $this->content;
    }

    function getTitle() {
        return strtoupper($this->title);
    }
}

$guide1 = new CareerGuide(date("d-m-Y"), "Rick Astley", "Never Gonna Give You Up", "Rick-Rolls 🌯🌯", "https://i1.sndcdn.com/artworks-000201643626-n9t98c-t500x500.jpg", "https://variety.com/wp-content/uploads/2021/07/Rick-Astley-Never-Gonna-Give-You-Up.png?w=681&h=383&crop=1", "https://google.com/");
$guide2 = new CareerGuide(date("d-m-Y"), "OP Takla", "Voluptate et nisi qui esse culpa labore quis. Velit cillum sunt id ea. Cupidatat dolore ex fugiat quis occaecat ipsum nostrud est reprehenderit sunt reprehenderit consectetur ut. Cillum nulla id cillum duis consectetur anim consequat est do eiusmod amet deserunt ea. Cupidatat qui eiusmod quis consectetur voluptate aliquip cillum ad aliquip est consequat laboris. Eiusmod deserunt consequat Lorem nisi irure culpa amet proident cillum qui dolore cupidatat ex ullamco. Eu occaecat laboris ea amet ipsum.Esse ex aute deserunt aliqua quis ad eu aliquip. Adipisicing in Lorem non sint pariatur irure nisi veniam. Duis sunt ut ex eu mollit minim amet eu ullamco veniam enim officia consectetur. Ad labore aute ea proident elit pariatur dolore eu ad. Non ad enim ipsum aliquip veniam cillum.", "How to deal with being OP 💪", "https://i.pinimg.com/originals/c1/59/07/c15907858762d350e518bd799d9f2333.png", "http://pm1.narvii.com/7539/b91cf90660f46a2ece88d6a6df98ded197a65d81r1-1920-1080v2_uhq.jpg",  "https://google.com/");
$guides = [$guide1, $guide2]
?>
<head>
    <link rel="stylesheet" href="./career-guides.css">
</head>
<main class="guides">
    <?php if (empty($guides)): ?>
        <p class="lead mt-3">No guides available</p>
    <?php endif; ?>
    <?php foreach($guides as $guide): ?>
        <?php $highlightImage = "<div class='highlightImage' style='background-image: url($guide->highlightImage)'>
            </div>" ?>
        <?php $guideBody = substr($guide->content, 0, 500) . "<a href='$guide->link' target='_blank'>... Read More</a>" ?>
        <?php $guideTitle = "➜ <span class='headingText'>$guide->title</span>"?>
        <?php $footerBody = " <p class='date'>$guide->time</p> <div class='user'> By: <p style='text-decoration: underline'> $guide->userName</p> • <div class='avatar' style='background-image: url($guide->userAvatar)'></div> </div>" ?>
        <div class="career-guide">
            <?php echo "
            $highlightImage
            <div class='content'>
                <div class='text'>
                    <h2 class='heading'>
                        $guideTitle
                    </h2>
                    <p class='contentText'>
                        $guideBody
                    </p>
                </div>
                <div class='footer'>
                    $footerBody
                </div>
            </div>
            " ?>
        </div>
    <?php endforeach;?>
</main>


